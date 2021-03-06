<?php namespace ZN\FileSystem\FTP;

interface ConnectionInterface
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
    // connect()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $config: empty
    //
    //--------------------------------------------------------------------------------------------------------
    public function do(Array $config) : Connection;
}
