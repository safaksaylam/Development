<?php namespace ZN\IndividualStructures\User;

interface RegisterInterface
{
    //--------------------------------------------------------------------------------------------------------
    // Column
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string column
    // @param  mixed  $value
    // @return this
    //
    //--------------------------------------------------------------------------------------------------------
    public function column(string $column, $value) : UserExtends;

    //--------------------------------------------------------------------------------------------------------
    // Return Link
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $returnLink
    // @return this
    //
    //--------------------------------------------------------------------------------------------------------
    public function returnLink(string $returnLink) : UserExtends;

    //--------------------------------------------------------------------------------------------------------
    // Auto Login
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  mixed $autoLogin
    // @return this
    //
    //--------------------------------------------------------------------------------------------------------
    public function autoLogin($autoLogin = true) : Register;

    //--------------------------------------------------------------------------------------------------------
    // Register
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  array       $data
    // @param  bool/string $autoLogin
    // @param  string      $activationReturnLink
    // @return bool
    //
    //--------------------------------------------------------------------------------------------------------
    public function do(array $data = NULL, $autoLogin = false, string $activationReturnLink = NULL) : bool;

    //--------------------------------------------------------------------------------------------------------
    // Activation Complete
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  void
    //
    //--------------------------------------------------------------------------------------------------------
    public function activationComplete() : bool;
}