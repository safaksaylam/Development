<?php namespace ZN\Services\Remote;

interface InternalEmailInterface
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
    // Settings
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $settings
    //
    //--------------------------------------------------------------------------------------------------------
    public function settings(array $settings = NULL) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // Content Type
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $type: plain, html
    //
    //--------------------------------------------------------------------------------------------------------
    public function contentType(string $type = 'plain') : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // Charset
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $charset
    //
    //--------------------------------------------------------------------------------------------------------
    public function charset(string $charset = 'UTF-8') : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // Priority
    //--------------------------------------------------------------------------------------------------------
    //
    // @param int $count
    //
    //--------------------------------------------------------------------------------------------------------
    public function priority(int $count = 3) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // Add Header
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $header
    // @param string $value
    //
    //--------------------------------------------------------------------------------------------------------
    public function addHeader(string $header, string $value) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // Encoding Type
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $type
    //
    //--------------------------------------------------------------------------------------------------------
    public function encodingType(string $type = '8bit') : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // Multi Part
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $multiPart
    //
    //--------------------------------------------------------------------------------------------------------
    public function multiPart(string $multiPart = 'related') : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // SMTP Host
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $host
    //
    //--------------------------------------------------------------------------------------------------------
    public function smtpHost(string $host) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // SMTP User
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $user
    //
    //--------------------------------------------------------------------------------------------------------
    public function smtpUser(string $user) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // SMTP DNS
    //--------------------------------------------------------------------------------------------------------
    //
    // @param bool $dsn
    //
    //--------------------------------------------------------------------------------------------------------
    public function smtpDsn(bool $dsn = true) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // SMTP Password
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $pass
    //
    //--------------------------------------------------------------------------------------------------------
    public function smtpPassword(string $pass) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // SMTP Port
    //--------------------------------------------------------------------------------------------------------
    //
    // @param int $port
    //
    //--------------------------------------------------------------------------------------------------------
    public function smtpPort(int $port = 587) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // SMTP Timeout
    //--------------------------------------------------------------------------------------------------------
    //
    // @param int $timeout
    //
    //--------------------------------------------------------------------------------------------------------
    public function smtpTimeout(int $timeout = 10) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // SMTP Keep Alive
    //--------------------------------------------------------------------------------------------------------
    //
    // @param bool $keepAlive
    //
    //--------------------------------------------------------------------------------------------------------
    public function smtpKeepAlive(bool $keepAlive = true) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // SMTP Encode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $encode
    //
    //--------------------------------------------------------------------------------------------------------
    public function smtpEncode(string $encode) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // To
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed  $to
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function to($to, string $name) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // Receiver
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed  $to
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function receiver($to, string $name) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // Reply To
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed  $to
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function replyTo($replyTo, string $name) : InternalEmail;


    //--------------------------------------------------------------------------------------------------------
    // CC
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed  $to
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function cc($cc, string $name) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // BCC
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed  $to
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function bcc($bcc, string $name) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // From
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $from
    // @param string $name
    // @param string $returnPath
    //
    //--------------------------------------------------------------------------------------------------------
    public function from(string $from, ? string $name = NULL, string $returnPath = NULL) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // Sender
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $from
    // @param string $name
    // @param string $returnPath
    //
    //--------------------------------------------------------------------------------------------------------
    public function sender(string $from, ? string $name = NULL, string $returnPath = NULL) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // Subject
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $subject
    //
    //--------------------------------------------------------------------------------------------------------
    public function subject(string $subject) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // Message
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $message
    //
    //--------------------------------------------------------------------------------------------------------
    public function message(string $message) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // Content
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $message
    //
    //--------------------------------------------------------------------------------------------------------
    public function content(string $message) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // Attachment
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $file
    // @param string $disposition
    // @param string $newName
    // @param mixed  $mime
    //
    //--------------------------------------------------------------------------------------------------------
    public function attachment(string $file, ? string $disposition = NULL, ? string $newName = NULL, $mime = NULL) : InternalEmail;

    //--------------------------------------------------------------------------------------------------------
    // Attachment Content ID
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $filename
    //
    //--------------------------------------------------------------------------------------------------------
    public function attachmentContentId(string $filename);

    //--------------------------------------------------------------------------------------------------------
    // Send
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $subject
    // @param string $message
    //
    //--------------------------------------------------------------------------------------------------------
    public function send( ? string $subject = NULL, string $message = NULL) : bool;

    //--------------------------------------------------------------------------------------------------------
    // Driver
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $driver
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function driver(string $driver) : InternalEmail;
}