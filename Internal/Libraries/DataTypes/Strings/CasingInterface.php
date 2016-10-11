<?php namespace ZN\DataTypes\Strings;

interface CasingInterface
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
    // Casing
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    // @param string $type lower, upper, title
    // @param string $encoding
    //
    //--------------------------------------------------------------------------------------------------------
    public function use(string $str, string $type = 'lower', string $encoding = 'utf-8') : string;

    //--------------------------------------------------------------------------------------------------------
    // Upper Case
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    // @param string $encoding
    //
    //--------------------------------------------------------------------------------------------------------
    public function upper(string $str, string $encoding = 'utf-8') : string;

    //--------------------------------------------------------------------------------------------------------
    // Lower Case
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    // @param string $encoding
    //
    //--------------------------------------------------------------------------------------------------------
    public function lower(string $str, string $encoding = 'utf-8') : string;

    //--------------------------------------------------------------------------------------------------------
    // Title Case
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    // @param string $encoding
    //
    //--------------------------------------------------------------------------------------------------------
    public function title(string $str, string $encoding = 'utf-8') : string;

    //--------------------------------------------------------------------------------------------------------
    // Camel Case
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    //
    //--------------------------------------------------------------------------------------------------------
    public function camel(string $str) : string;

    //--------------------------------------------------------------------------------------------------------
    // Pascal Case
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    //
    //--------------------------------------------------------------------------------------------------------
    public function pascal(string $str) : string;
}