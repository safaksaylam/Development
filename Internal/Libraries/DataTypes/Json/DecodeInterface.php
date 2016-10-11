<?php namespace ZN\DataTypes\Json;

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
    // @param string $data
    // @param bool   $array
    // @param int    $length
    //
    //--------------------------------------------------------------------------------------------------------
    public function do(string $data, bool $array = false, int $length = 512);

    //--------------------------------------------------------------------------------------------------------
    // Decode Object
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $data
    // @param int    $length
    //
    //--------------------------------------------------------------------------------------------------------
    public function object(string $data, int $length = 512) : \stdClass;

    //--------------------------------------------------------------------------------------------------------
    // Decode Array
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $data
    // @param int    $length
    //
    //--------------------------------------------------------------------------------------------------------
    public function array(string $data, int $length = 512) : array;
}