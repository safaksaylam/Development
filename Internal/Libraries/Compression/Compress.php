<?php
namespace ZN\Compression;

class InternalCompress extends \CallController implements CompressInterface
{
	//----------------------------------------------------------------------------------------------------
	//
	// Yazar      : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
	// Site       : www.zntr.net
	// Lisans     : The MIT License
	// Telif Hakkı: Copyright (c) 2012-2016, zntr.net
	//
	//----------------------------------------------------------------------------------------------------
	
	//----------------------------------------------------------------------------------------------------
	// Drivers
	//----------------------------------------------------------------------------------------------------
	//
	// @var array
	//
	//----------------------------------------------------------------------------------------------------
	protected $drivers =
	[
		'bz',
		'gz',
		'lzf',
		'rar',
		'zip',
		'zlib'
	];
	
	//----------------------------------------------------------------------------------------------------
	// Protected Compress
	//----------------------------------------------------------------------------------------------------
	//
	// Sürücü bilgisi 
	//
	// @var  string
	//
	//----------------------------------------------------------------------------------------------------
	protected $compress;
	
	//----------------------------------------------------------------------------------------------------
	// Construct
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string $driver
	// @return bool
	//
	//----------------------------------------------------------------------------------------------------
	public function __construct(String $driver = NULL)
	{	
		nullCoalesce($driver, \Config::get('Compress', 'driver'));

		\Support::driver($this->drivers, $driver);

		$this->compress = uselib($driver.'Driver');
	}
	
	//----------------------------------------------------------------------------------------------------
	// Extract
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string $source
	// @param  string $target
	// @return bool
	//
	//----------------------------------------------------------------------------------------------------
	public function extract(String $source, String $target = NULL, String $password = NULL)
	{
		if( ! is_file($source) )
		{
			return \Exceptions::throws('Error', 'fileParameter', '1.(source)');
		}

		return $this->compress->extract($source, $target, $password);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Write
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $file
	// @param string $data
	// @param string $mode
	//
	//----------------------------------------------------------------------------------------------------
	public function write(String $file, String $data, String $mode = 'w')
	{
		if( ! is_scalar($data) )
		{
			return \Exceptions::throws('Error', 'valueParameter', '2.(data)');	
		}

		return $this->compress->write($file, $data, $mode);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Read
	//----------------------------------------------------------------------------------------------------
	//
	// @param string  $file
	// @param numeric $length
	// @param string  $type
	//
	//----------------------------------------------------------------------------------------------------
	public function read(String $file, Int $length = 1024, String $mode = 'r') : String
	{
		return $this->compress->read($file, $length, $mode);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Compress
	//----------------------------------------------------------------------------------------------------
	//
	// @param string  $data
	// @param int     $level
	// @param string  $encoding
	//
	//----------------------------------------------------------------------------------------------------
	public function compress(String $data, Int $level = -1, String $encoding = NULL) : String
	{
		return $this->compress->compress($data, $level, $encoding);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Uncompress
	//----------------------------------------------------------------------------------------------------
	//
	// @param string  $data
	// @param numeric $small
	//
	//----------------------------------------------------------------------------------------------------
	public function uncompress(String $data, Int $length = 0) : String
	{
		return $this->compress->uncompress($data, $length);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Encode
	//----------------------------------------------------------------------------------------------------
	//
	// @param string  $data
	// @param int     $level
	// @param string  $encoding
	//
	//----------------------------------------------------------------------------------------------------
	public function encode(String $data, Int $level = -1, String $encoding = NULL) : String
	{
		return $this->compress->encode($data, $level, $encoding);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Decode
	//----------------------------------------------------------------------------------------------------
	//
	// @param string  $data
	// @param numeric $length
	//
	//----------------------------------------------------------------------------------------------------
	public function decode(String $data, Int $length = NULL) : String 
	{
		return $this->compress->decode($data, $length);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Deflate
	//----------------------------------------------------------------------------------------------------
	//
	// @param string  $data
	// @param numeric $level
	// @param string  $encoding
	//
	//----------------------------------------------------------------------------------------------------
	public function deflate(String $data, Int $level = -1, String $encoding = NULL) : String
	{
		return $this->compress->deflate($data, $level, $encoding);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Inflate
	//----------------------------------------------------------------------------------------------------
	//
	// @param string  $data
	// @param numeric $length
	//
	//----------------------------------------------------------------------------------------------------
	public function inflate(String $data, Int $length = 0) : String
	{
		return $this->compress->inflate($data, $length);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Driver                                                                       
	//----------------------------------------------------------------------------------------------------
	//
	// @param  string $driver
	// @return object 	        		     			 
	//          																				 
	//----------------------------------------------------------------------------------------------------
	public function driver(String $driver)
	{
		return new self($driver);
	}
}