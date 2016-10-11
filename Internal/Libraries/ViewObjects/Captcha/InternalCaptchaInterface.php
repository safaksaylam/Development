<?php namespace ZN\ViewObjects;

interface InternalCaptchaInterface
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
    // Size
    //--------------------------------------------------------------------------------------------------------
    //
    // Güvenlik kodu nesnesinin genişlikk ve yükseklik değeri belirtilir.
    //
    // @param  numeric $width
    // @param  numeric $height
    // @return this
    //
    //--------------------------------------------------------------------------------------------------------
    public function size(int $width, int $height) : InternalCaptcha;

    //--------------------------------------------------------------------------------------------------------
    // Length
    //--------------------------------------------------------------------------------------------------------
    //
    // Güvenlik kodu nesnesinin kaç karakterden olacağı belirtilir.
    //
    // @param  numeric $param
    // @return this
    //
    //--------------------------------------------------------------------------------------------------------
    public function length(int $param) : InternalCaptcha;

    //--------------------------------------------------------------------------------------------------------
    // Angle
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  numeric $param
    // @return this
    //
    //--------------------------------------------------------------------------------------------------------
    public function angle(float $param) : InternalCaptcha;

    //--------------------------------------------------------------------------------------------------------
    // TTF
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  array $fonts
    // @return this
    //
    //--------------------------------------------------------------------------------------------------------
    public function ttf(array $fonts) : InternalCaptcha;

    //--------------------------------------------------------------------------------------------------------
    // Border Color
    //--------------------------------------------------------------------------------------------------------
    //
    // Güvenlik kodu nesnesinin çerçevesinin olup olmayacağı olacaksa da hangi.
    // hangi renkte olacağı belirtilir.
    //
    // @param  string  $color
    // @return this
    //
    //--------------------------------------------------------------------------------------------------------
    public function borderColor(string $color = NULL) : InternalCaptcha;

    //--------------------------------------------------------------------------------------------------------
    // Bg Color
    //--------------------------------------------------------------------------------------------------------
    //
    // Güvenlik kodu arkaplan rengini ayarlamak için kullanılır.
    //
    // @param  string $color
    // @return this
    //
    //--------------------------------------------------------------------------------------------------------
    public function bgColor(string $color) : InternalCaptcha;

    //--------------------------------------------------------------------------------------------------------
    // Background Color
    //--------------------------------------------------------------------------------------------------------
    //
    // Güvenlik kodu arkaplan resimleri ayarlamak için kullanılır.
    //
    // @param  mixed $image
    // @return this
    //
    //--------------------------------------------------------------------------------------------------------
    public function bgImage(array $image) : InternalCaptcha;

    //--------------------------------------------------------------------------------------------------------
    // Text Size
    //--------------------------------------------------------------------------------------------------------
    //
    // Güvenlik kodu metninin boyutunu ayarlamak içindir.
    //
    // @param  numeric $size
    // @return this
    //
    //--------------------------------------------------------------------------------------------------------
    public function textSize(int $size) : InternalCaptcha;

    //--------------------------------------------------------------------------------------------------------
    // Text Coordinate
    //--------------------------------------------------------------------------------------------------------
    //
    // Güvenlik kodu metninin boyutunu ayarlamak içindir.
    //
    // @param  numeric $x
    // @param  numeric $y
    // @return this
    //
    //--------------------------------------------------------------------------------------------------------
    public function textCoordinate(int $x, int $y) : InternalCaptcha;

    //--------------------------------------------------------------------------------------------------------
    // Text Color
    //--------------------------------------------------------------------------------------------------------
    //
    // Güvenlik kodu metninin rengini ayarlamak için kullanılır.
    //
    // @param  string $color
    // @return this
    //
    //--------------------------------------------------------------------------------------------------------
    public function textColor(string $color) : InternalCaptcha;

    //--------------------------------------------------------------------------------------------------------
    // Grid Color
    //--------------------------------------------------------------------------------------------------------
    //
    // Güvenlik kodu nesnesinin ızgarasının olup olmayacağı olacaksa da hangi.
    // hangi renkte olacağı belirtilir.
    //
    // @param  string  $color
    // @return this
    //
    //--------------------------------------------------------------------------------------------------------
    public function gridColor(string $color = NULL) : InternalCaptcha;

    //--------------------------------------------------------------------------------------------------------
    // Grid Space
    //--------------------------------------------------------------------------------------------------------
    //
    // Güvenlik kodu ızgara boşluklarını ayarlamak için kullanılır.
    //
    // @param  numeric $x
    // @param  numeric $y
    // @return this
    //
    //--------------------------------------------------------------------------------------------------------
    public function gridSpace(int $x = 0, int $y = 0) : InternalCaptcha;

    //--------------------------------------------------------------------------------------------------------
    // Create
    //--------------------------------------------------------------------------------------------------------
    //
    // Güvenlik kodu ızgara boşluklarını ayarlamak için kullanılır.
    //
    // @param  boolean $img
    // @param  array   $configs
    // @return midex
    //
    //--------------------------------------------------------------------------------------------------------
    public function create(bool $img = false, array $configs = []) : string;

    //--------------------------------------------------------------------------------------------------------
    // Get Code
    //--------------------------------------------------------------------------------------------------------
    //
    // Daha önce oluşturulan güvenlik uygulamasının kod bilgini verir.
    //
    // @param  void
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function getCode() : string;
}