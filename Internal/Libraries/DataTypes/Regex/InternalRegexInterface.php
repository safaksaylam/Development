<?php namespace ZN\DataTypes;

interface InternalRegexInterface
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
    // Match
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $pattern
    // @param string $str
    // @param string $ex
    // @param string $delimiter
    //
    //--------------------------------------------------------------------------------------------------------
    public function match(string $pattern, string $str, ? string $ex = NULL, string $delimiter = '/') : array;

    //--------------------------------------------------------------------------------------------------------
    // Match All
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $pattern
    // @param string $str
    // @param string $ex
    // @param string $delimiter
    //
    //--------------------------------------------------------------------------------------------------------
    public function matchAll(string $pattern, string $str, ? string $ex = NULL, string $delimiter = '/') : array;

    //--------------------------------------------------------------------------------------------------------
    // Replace
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $pattern
    // @param string $rep
    // @param string $str
    // @param string $ex
    // @param string $delimiter
    //
    //--------------------------------------------------------------------------------------------------------
    public function replace(string $pattern, string $rep, string $str, ? string $ex = NULL, string $delimiter = '/');

    //--------------------------------------------------------------------------------------------------------
    // Group
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    //
    //--------------------------------------------------------------------------------------------------------
    public function group(string $str) : string;

    //--------------------------------------------------------------------------------------------------------
    // Recount
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    //
    //--------------------------------------------------------------------------------------------------------
    public function recount(string $str) : string;

    //--------------------------------------------------------------------------------------------------------
    // To
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    //
    //--------------------------------------------------------------------------------------------------------
    public function to(string $str) : string;

    //--------------------------------------------------------------------------------------------------------
    // Quote
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $data
    // @param string $delimiter
    //
    //--------------------------------------------------------------------------------------------------------
    public function quote(string $data, string $delimiter = NULL) : string;
}