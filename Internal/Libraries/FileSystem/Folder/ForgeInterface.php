<?php namespace ZN\FileSystem\Folder;

interface ForgeInterface
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
    // create()
    //--------------------------------------------------------------------------------------------------------
    //
    // Dizin oluşturmak için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------------
    public function create(string $file, int $permission = 0755, bool $recursive = true) : bool;

    //--------------------------------------------------------------------------------------------------------
    // rename()
    //--------------------------------------------------------------------------------------------------------
    //
    // Dosya veya dizinin adını değiştirmek için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------------
    public function rename(string $oldName, string $newName) : bool;

    //--------------------------------------------------------------------------------------------------------
    // deleteEmpty()
    //--------------------------------------------------------------------------------------------------------
    //
    // Boş bir dizini silmek için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------------
    public function deleteEmpty(string $folder) : bool;

    //--------------------------------------------------------------------------------------------------------
    // delete()
    //--------------------------------------------------------------------------------------------------------
    //
    // Bir dizini içindekilerle birlikte silmek için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------------
    public function delete(string $name) : bool;

    //--------------------------------------------------------------------------------------------------------
    // Copy()
    //--------------------------------------------------------------------------------------------------------
    //
    // Bir dizini belirtilen başka bir konuma kopyalamak için kullanılır. Bu işlem kopyalanacak dizine
    // ait diğer alt dizin ve dosyaları da kapsamaktadır.
    //
    //--------------------------------------------------------------------------------------------------------
    public function copy(string $source, string $target) : bool;

    //--------------------------------------------------------------------------------------------------------
    // change()
    //--------------------------------------------------------------------------------------------------------
    //
    // PHP'nin aktif çalışma dizinini değiştirmek için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------------
    public function change(string $name) : bool;

    //--------------------------------------------------------------------------------------------------------
    // permission()
    //--------------------------------------------------------------------------------------------------------
    //
    // Bir dizin veya dosyaya yetki vermek için kullanılır.
    //
    //--------------------------------------------------------------------------------------------------------
    public function permission(string $name, int $permission = 0755) : bool;
}
