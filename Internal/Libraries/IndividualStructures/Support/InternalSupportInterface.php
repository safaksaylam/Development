<?php namespace ZN\IndividualStructures;

interface InternalSupportInterface
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
    // Func
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $name
    // @param  string  $value
    //
    //--------------------------------------------------------------------------------------------------------
    public function func(string $name, string $value) : void;

    //--------------------------------------------------------------------------------------------------------
    // Callback
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $name
    // @param  string  $value
    //
    //--------------------------------------------------------------------------------------------------------
    public function callback(string $name, string $value = NULL) : void;

    //--------------------------------------------------------------------------------------------------------
    // Extension
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $name
    // @param  string  $value
    //
    //--------------------------------------------------------------------------------------------------------
    public function extension(string $name, string $value) : void;

    //--------------------------------------------------------------------------------------------------------
    // Library
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $name
    // @param  string  $value
    //
    //--------------------------------------------------------------------------------------------------------
    public function library(string $name, string $value) : void;

    //--------------------------------------------------------------------------------------------------------
    // Writable
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $name
    // @param  string  $value
    //
    //--------------------------------------------------------------------------------------------------------
    public function writable(string $name, string $value = NULL) : void;

    //--------------------------------------------------------------------------------------------------------
    // Driver
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $name
    // @param  string  $value
    //
    //--------------------------------------------------------------------------------------------------------
    public function driver(array $drivers, string $driver = NULL) : void;

    //--------------------------------------------------------------------------------------------------------
    // Class Method
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $class
    // @param  string  $method
    //
    //--------------------------------------------------------------------------------------------------------
    public function classMethod(string $class, string $method) : void;
}
