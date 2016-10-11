<?php namespace ZN\DataTypes\Separator;

interface DecodeInterface
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
    // Do
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $word
    // @param string $key
    // @param string $separator
    //
    //--------------------------------------------------------------------------------------------------------
    public function do(string $word, ? string $key = NULL, string $separator = NULL) : \stdClass;

    //--------------------------------------------------------------------------------------------------------
    // Object
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $word
    // @param string $key
    // @param string $separator
    //
    //--------------------------------------------------------------------------------------------------------
    public function object(string $word, ? string $key = NULL, string $separator = NULL) : \stdClass;

    //--------------------------------------------------------------------------------------------------------
    // Array
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $word
    // @param string $key
    // @param string $separator
    //
    //--------------------------------------------------------------------------------------------------------
    public function array(string $word, ? string $key = NULL, string $separator = NULL) : array;
}