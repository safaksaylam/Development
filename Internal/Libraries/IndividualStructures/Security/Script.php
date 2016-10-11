<?php namespace ZN\IndividualStructures\Security;

class Script implements ScriptInterface
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
    // PHP Tag Chars
    //--------------------------------------------------------------------------------------------------------
    //
    // @var array
    //
    //--------------------------------------------------------------------------------------------------------
    protected $scriptTagChars =
    [
        '/\<script(.*?)\>/i'  => '&#60;script$1&#62;',
        '/\<\/script\>/i'     => '&#60;/script&#62;'
    ];

    //--------------------------------------------------------------------------------------------------------
    // PHP Tag Chars
    //--------------------------------------------------------------------------------------------------------
    //
    // @var array
    //
    //--------------------------------------------------------------------------------------------------------
    protected $scriptTagCharsDecode =
    [
        '/\&\#60\;script(.*?)\&\#62\;/i' => '<script$1>',
        '/\&\#60\;\/script\&\#62\;/i'    => '</script>'
    ];

    //--------------------------------------------------------------------------------------------------------
    // Script Tag Encode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    //
    //--------------------------------------------------------------------------------------------------------
    public function encode(string $str) : string
    {
        return preg_replace(array_keys($this->scriptTagChars), array_values($this->scriptTagChars), $str);
    }

    //--------------------------------------------------------------------------------------------------------
    // Script Tag Decode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    //
    //--------------------------------------------------------------------------------------------------------
    public function decode(string $str) : string
    {
        return preg_replace(array_keys($this->scriptTagCharsDecode), array_values($this->scriptTagCharsDecode), $str);
    }
}