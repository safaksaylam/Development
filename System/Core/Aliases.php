<?php
//----------------------------------------------------------------------------------------------------
// ALIASES
//----------------------------------------------------------------------------------------------------
//
// Author     : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
// Site       : www.znframework.com
// License    : The MIT License
// Copyright  : Copyright (c) 2012-2016, ZN Framework
//
//----------------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------------
// Takma isimler alınıyor.
//----------------------------------------------------------------------------------------------------
$autoloaderAliases = Config::get('Autoloader')['aliases'];
//----------------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------------
// Takma isimler işleniyor.
//----------------------------------------------------------------------------------------------------
if( ! empty($autoloaderAliases) ) foreach( $autoloaderAliases as $alias => $origin )
{
	class_alias($origin, $alias);
}
//----------------------------------------------------------------------------------------------------