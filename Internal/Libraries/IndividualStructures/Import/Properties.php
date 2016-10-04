<?php namespace ZN\IndividualStructures\Import;

class Properties
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
    // Is Import
    //--------------------------------------------------------------------------------------------------------
    //
    // @var array
    //
    //--------------------------------------------------------------------------------------------------------
    public static $isImport = [];

    //--------------------------------------------------------------------------------------------------------
    // Parameters
    //--------------------------------------------------------------------------------------------------------
    //
    // @var bool
    //
    //--------------------------------------------------------------------------------------------------------
    public static $parameters = array
    (
        'data'   => [],
        'usable' => false
    );

    //--------------------------------------------------------------------------------------------------------
    // Usable
    //--------------------------------------------------------------------------------------------------------
    //
    // @param bool $usable
    //
    //--------------------------------------------------------------------------------------------------------
    public function usable(bool $usable = true)
    {
        self::$parameters['usable'] = $usable;
    }

    //--------------------------------------------------------------------------------------------------------
    // recursive()
    //--------------------------------------------------------------------------------------------------------
    //
    // @var bool $recursive
    //
    //--------------------------------------------------------------------------------------------------------
    public function recursive(bool $recursive = true)
    {
        self::$parameters['recursive'] = $recursive;
    }

    //--------------------------------------------------------------------------------------------------------
    // data()
    //--------------------------------------------------------------------------------------------------------
    //
    // @var array $data
    //
    //--------------------------------------------------------------------------------------------------------
    public function data(array $data)
    {
        self::$parameters['data'] = $data;
    }
}
