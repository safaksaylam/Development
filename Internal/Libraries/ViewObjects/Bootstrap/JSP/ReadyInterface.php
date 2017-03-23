<?php namespace ZN\ViewObjects\Bootstrap\JSP;

interface ReadyInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Use
    //--------------------------------------------------------------------------------------------------------
    //
    // @param callable $callback
    //
    //--------------------------------------------------------------------------------------------------------
    public function use(Callable $callback);
}