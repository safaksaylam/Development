<?php namespace ZN\Helpers\Converter;

interface VariableTypesInterface
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
    // To Int
    //--------------------------------------------------------------------------------------------------------
    //
    // @param var $var
    //
    //--------------------------------------------------------------------------------------------------------
    public function toInt($var) : Int;

    //--------------------------------------------------------------------------------------------------------
    // To Integer
    //--------------------------------------------------------------------------------------------------------
    //
    // @param var $var
    //
    //--------------------------------------------------------------------------------------------------------
    public function toInteger($var) : Int;

    //--------------------------------------------------------------------------------------------------------
    // To Bool
    //--------------------------------------------------------------------------------------------------------
    //
    // @param var $var
    //
    //--------------------------------------------------------------------------------------------------------
    public function toBool($var) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // To Boolean
    //--------------------------------------------------------------------------------------------------------
    //
    // @param var $var
    //
    //--------------------------------------------------------------------------------------------------------
    public function toBoolean($var) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // To String
    //--------------------------------------------------------------------------------------------------------
    //
    // @param var $var
    //
    //--------------------------------------------------------------------------------------------------------
    public function toString($var) : String;

    //--------------------------------------------------------------------------------------------------------
    // To Float
    //--------------------------------------------------------------------------------------------------------
    //
    // @param var $var
    //
    //--------------------------------------------------------------------------------------------------------
    public function toFloat($var) : Float;

    //--------------------------------------------------------------------------------------------------------
    // To Real
    //--------------------------------------------------------------------------------------------------------
    //
    // @param var $var
    //
    //--------------------------------------------------------------------------------------------------------
    public function toReal($var);

    //--------------------------------------------------------------------------------------------------------
    // To Double
    //--------------------------------------------------------------------------------------------------------
    //
    // @param var $var
    //
    //--------------------------------------------------------------------------------------------------------
    public function toDouble($var);

    //--------------------------------------------------------------------------------------------------------
    // To Object
    //--------------------------------------------------------------------------------------------------------
    //
    // @param var $var
    //
    //--------------------------------------------------------------------------------------------------------
    public function toObject($var) : \stdClass;

    //--------------------------------------------------------------------------------------------------------
    // To Array
    //--------------------------------------------------------------------------------------------------------
    //
    // @param var $var
    //
    //--------------------------------------------------------------------------------------------------------
    public function toArray($var) : Array;

    //--------------------------------------------------------------------------------------------------------
    // To Constant
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $var
    // @param string $prefix
    // @param string $suffix
    //
    //--------------------------------------------------------------------------------------------------------
    public function toConstant(String $var, String $prefix = NULL, String $suffix = NULL);
}
