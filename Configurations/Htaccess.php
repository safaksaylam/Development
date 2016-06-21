<?php
//----------------------------------------------------------------------------------------------------
// HTACCESS 
//----------------------------------------------------------------------------------------------------
//
// Author     : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
// Site       : www.znframework.com
// License    : The MIT License
// Copyright  : Copyright (c) 2012-2016, ZN Framework
//
//----------------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------------
// CREATE FILE                                                                             
//----------------------------------------------------------------------------------------------------
//
// Genel Kullanım: .htaccess dosyasının oluşturulup oluşturulmayacağına karar verir.		  
// Parametreler: true veya false															  
// Varsayılan: true																		  
// Url'de zeroneed.php ekini kullanmak istemiyorsanız ve .htaccess yönlendirmesi			  
// sunucunuzda aktifse bu değeri true yapıp bu dosyanın oluşmasını sağlayın.				  
// Bu işlem dışında Config/Uri.php dosyasındaki zeroneed.php ayarını false 					  
// durumuna getirmeyi unutmayın.      												      
//
//----------------------------------------------------------------------------------------------------
$config['Htaccess']['createFile'] = true;

//----------------------------------------------------------------------------------------------------
// Set File
//----------------------------------------------------------------------------------------------------
//
// Genel Kullanım: .ini_set() yöntemiyle yapamadığınız ayarlamaları buradan yapabilirsiniz.
// .htaccess dosyasında ini ayarları yapılabilsin mi?   									  
//
//----------------------------------------------------------------------------------------------------
$config['Htaccess']['setFile'] = true;

//----------------------------------------------------------------------------------------------------
// Settings
//----------------------------------------------------------------------------------------------------
//
// Genel Kullanım: Bu yöntemin kullanılabilmesi için yukarıdaki ayarın true olması 		  
// gerekmektedir. htaccess dosyasına header ayarları eklemek için kullanılır.			  
// Parametreler: array( '<module>' => array('setting1', 'setting2' ...))				      																  
// Bu yöntemi kullanırken < > işaretlerini kullanmayınız.							      
// Modülü kapatma işlemini kendisi gerçekleştirmektedir.                                   
// Dizi içerisindeki birinci parametre modül adı ve tip									  
// İkinci parametre ise bu aralıkta olması gereken kodlar.  							      
//
//----------------------------------------------------------------------------------------------------
$config['Htaccess']['settings'] = array
(
	 'ifmodule mod_headers.c' => array('Options -Indexes')
);