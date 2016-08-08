<?php
namespace ZN\Components;

trait PaginationPropertiesTrait
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
	// Total Rows
	//----------------------------------------------------------------------------------------------------
	// 
	// @var int
	//
	//----------------------------------------------------------------------------------------------------
	protected $totalRows 	= 50;

	//----------------------------------------------------------------------------------------------------
	// Start
	//----------------------------------------------------------------------------------------------------
	// 
	// @var int
	//
	//----------------------------------------------------------------------------------------------------
	protected $start 		= 0;
	
	//----------------------------------------------------------------------------------------------------
	// Type
	//----------------------------------------------------------------------------------------------------
	// 
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	protected $type 		= 'classic';
	
	//----------------------------------------------------------------------------------------------------
	// Limit
	//----------------------------------------------------------------------------------------------------
	// 
	// @var int
	//
	//----------------------------------------------------------------------------------------------------
	protected $limit 		= 10;
	
	//----------------------------------------------------------------------------------------------------
	// Count Links
	//----------------------------------------------------------------------------------------------------
	// 
	// @var int
	//
	//----------------------------------------------------------------------------------------------------
	protected $countLinks 	= 10;
	
	//----------------------------------------------------------------------------------------------------
	// Class
	//----------------------------------------------------------------------------------------------------
	// 
	// @var array
	//
	//----------------------------------------------------------------------------------------------------
	protected $class		= [];
	
	//----------------------------------------------------------------------------------------------------
	// Style
	//----------------------------------------------------------------------------------------------------
	// 
	// @var array
	//
	//----------------------------------------------------------------------------------------------------
	protected $style		= [];
	
	//----------------------------------------------------------------------------------------------------
	// Prev Tag
	//----------------------------------------------------------------------------------------------------
	// 
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	protected $prevTag 		= '[prev]';
	
	//----------------------------------------------------------------------------------------------------
	// Next Tag
	//----------------------------------------------------------------------------------------------------
	// 
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	protected $nextTag 		= '[next]';
	
	//----------------------------------------------------------------------------------------------------
	// First Tag
	//----------------------------------------------------------------------------------------------------
	// 
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	protected $firstTag 	= '[first]';
	
	//----------------------------------------------------------------------------------------------------
	// Last Tag
	//----------------------------------------------------------------------------------------------------
	// 
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	protected $lastTag 		= '[last]';
	
	//----------------------------------------------------------------------------------------------------
	// URL
	//----------------------------------------------------------------------------------------------------
	// 
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	protected $url  		= CURRENT_CFPATH;

	//----------------------------------------------------------------------------------------------------
	// URL
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $url
	//
	//----------------------------------------------------------------------------------------------------
	public function url(String $url)
	{
		$this->settings['url'] = $url;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Start
	//----------------------------------------------------------------------------------------------------
	// 
	// @param int $start
	//
	//----------------------------------------------------------------------------------------------------
	public function start($start)
	{
		$this->settings['start'] = $start;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Limit
	//----------------------------------------------------------------------------------------------------
	// 
	// @param int $limit
	//
	//----------------------------------------------------------------------------------------------------
	public function limit(Int $limit)
	{
		$this->settings['limit'] = $limit;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Type
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $type: ajax, classic
	//
	//----------------------------------------------------------------------------------------------------
	public function type(String $type)
	{
		$this->settings['type'] = $type;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Total Rows
	//----------------------------------------------------------------------------------------------------
	// 
	// @param int $totalRows
	//
	//----------------------------------------------------------------------------------------------------
	public function totalRows(Int $totalRows)
	{
		$this->settings['totalRows'] = $totalRows;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Count Links
	//----------------------------------------------------------------------------------------------------
	// 
	// @param int $countLinks
	//
	//----------------------------------------------------------------------------------------------------
	public function countLinks(Int $countLinks)
	{
		$this->settings['countLinks'] = $countLinks;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Link Names
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $prev
	// @param string $next
	// @param string $first
	// @param string $last
	//
	//----------------------------------------------------------------------------------------------------
	public function linkNames(String $prev, String $next, String $first, String $last)
	{	
		$this->settings['prevName']  = $prev;
		$this->settings['nextName']  = $next;
		$this->settings['firstName'] = $first;
		$this->settings['lastName']  = $last;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Css
	//----------------------------------------------------------------------------------------------------
	// 
	// @param array $css
	//
	//----------------------------------------------------------------------------------------------------
	public function css(Array $css)
	{
		$this->settings['class'] = $css;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Style
	//----------------------------------------------------------------------------------------------------
	// 
	// @param array $css
	//
	//----------------------------------------------------------------------------------------------------
	public function style(Array $style)
	{
		$this->settings['style'] = $style;
		
		return $this;
	}
}