<?php namespace ZN\Database;

interface InternalDBTriggerInterface
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
    // user()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $user
    //
    //--------------------------------------------------------------------------------------------------------
    public function user(string $user) : InternalDBTrigger;

    //--------------------------------------------------------------------------------------------------------
    // when()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $type: BEFORE, AFTER
    //
    //--------------------------------------------------------------------------------------------------------
    public function when(string $type) : InternalDBTrigger;

    //--------------------------------------------------------------------------------------------------------
    // event()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $type: INSERT, UPDATE, DELETE
    //
    //--------------------------------------------------------------------------------------------------------
    public function event(string $type) : InternalDBTrigger;

    //--------------------------------------------------------------------------------------------------------
    // order()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $type: FOLLOWS, PRECEDES
    //
    //--------------------------------------------------------------------------------------------------------
    public function order(string $type, string $name) : InternalDBTrigger;

    //--------------------------------------------------------------------------------------------------------
    // body()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed $args: BEGIN $arg1; $arg2; .... $arg3; END;
    //
    //--------------------------------------------------------------------------------------------------------
    public function body(...$args) : InternalDBTrigger;

    //--------------------------------------------------------------------------------------------------------
    // createTrigger()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function createTrigger(string $name) : bool;

    //--------------------------------------------------------------------------------------------------------
    // dropTrigger()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function dropTrigger(string $name) : bool;
}