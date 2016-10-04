<?php namespace ZN\IndividualStructures\Buffer;

use Session;

class Select implements SelectInterface
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
    // @param  string $name
    // @return callable/content
    //
    //--------------------------------------------------------------------------------------------------------
    public static function do(string $name)
    {
        return Session::select(md5('OB_DATAS_'.$name));
    }
}
