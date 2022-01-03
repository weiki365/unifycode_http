<?php

/*
 *--------------------------------------------------------------------------
 * @Class Pipeline
 *
 *--------------------------------------------------------------------------
 *
 * @author    weiki
 * @email     happy_gzg@126.com
 * @Licensed  ( http://www.apache.org/licenses/LICENSE-2.0 )
 *--------------------------------------------------------------------------
 */

namespace Weiki\UnifyCode;

class Pipeline
{
    protected $passable;
    protected $pipes = [];

    public function __call($const, $args)
    {
        return $this->then(function ($data) use ($const) {
            return Http::$const();
        });
    }

    public function through($pipes)
    {
        $this->pipes = is_array($pipes) ? $pipes : func_get_args();

        return $this;
    }

    /**
     * 执行
     * @param Closure $destination
     * @return mixed
     */
    public function then(\Closure $destination)
    {
        $pipeline = array_reduce(
            array_reverse($this->pipes),
            $this->carry(),
            function ($passable) use ($destination) {
                return $destination($passable);
            }
        );

        return $pipeline($this->passable);
    }

    protected function carry()
    {
        return function ($stack, $pipe) {
            return function ($passable) use ($stack, $pipe) {
                try {
                    return $pipe($passable, $stack);
                } catch (Throwable | Exception $e) {
                    return $this->handleException($passable, $e);
                }
            };
        };
    }
}
