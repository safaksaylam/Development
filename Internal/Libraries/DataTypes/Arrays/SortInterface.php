<?php namespace ZN\DataTypes\Arrays;

interface SortInterface
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
    // Order
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $array
    // @param string $type :desc, asc...
    // @param string $flags:regular
    //
    //--------------------------------------------------------------------------------------------------------
    public function order(array $array, ? string $type = NULL, string $flags = 'regular') : array;

    //--------------------------------------------------------------------------------------------------------
    // Sort
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $array
    // @param string $flags:regular
    //
    //--------------------------------------------------------------------------------------------------------
    public function normal(array $array, string $flag = 'regular') : array;

    //--------------------------------------------------------------------------------------------------------
    // Descending
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $array
    // @param string $flags:regular
    //
    //--------------------------------------------------------------------------------------------------------
    public function descending(array $array, string $flag = 'regular') : array;

    //--------------------------------------------------------------------------------------------------------
    // Ascending
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $array
    // @param string $flags:regular
    //
    //--------------------------------------------------------------------------------------------------------
    public function ascending(array $array, string $flag = 'regular') : array;

    //--------------------------------------------------------------------------------------------------------
    // Ascending Key
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $array
    // @param string $flags:regular
    //
    //--------------------------------------------------------------------------------------------------------
    public function ascendingKey(array $array, string $flag = 'regular') : array;

    //--------------------------------------------------------------------------------------------------------
    // Descending Key
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $array
    // @param string $flags:regular
    //
    //--------------------------------------------------------------------------------------------------------
    public function descendingKey(array $array, string $flag = 'regular') : array;

    //--------------------------------------------------------------------------------------------------------
    // User Assoc Sort
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $array
    // @param string $flags:regular
    //
    //--------------------------------------------------------------------------------------------------------
    public function userAssoc(array $array, string $flag = 'regular') : array;

    //--------------------------------------------------------------------------------------------------------
    // User Key Sort
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $array
    // @param string $flags:regular
    //
    //--------------------------------------------------------------------------------------------------------
    public function userKey(array $array, string $flag = 'regular') : array;

    //--------------------------------------------------------------------------------------------------------
    // User Sort
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $array
    // @param string $flags:regular
    //
    //--------------------------------------------------------------------------------------------------------
    public function user(array $array, string $flag = 'regular') : array;

    //--------------------------------------------------------------------------------------------------------
    // insensitive Sort
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $array
    //
    //--------------------------------------------------------------------------------------------------------
    public function insensitive(array $array) : array;

    //--------------------------------------------------------------------------------------------------------
    // Natural Sort
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $array
    //
    //--------------------------------------------------------------------------------------------------------
    public function natural(array $array) : array;

    //--------------------------------------------------------------------------------------------------------
    // Shuffle
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $array
    //
    //--------------------------------------------------------------------------------------------------------
    public function shuffle(array $array) : array;
}