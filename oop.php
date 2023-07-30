<?php

class tv {
    public $merk;
    protected $Inch;
    private $code;

    public function __construct($inch, $code){
        $this->merk = true;
        $this->Inch = $inch;
        $this->code = $code;
        echo "Objek Telah Dibuat.";
    }
    public function __destruct(){
        echo "Objek Telah Dihapus.";
    }
    public function setInch($inch){
        $this->Inch = $inch;
    }
    public function getInch(){
        return $this->Inch;
    }
    public function setCode($code){
        $this->code = $code;
    }
    public function getCode(){
        return $this->code;
    }
    public function menonton(){
        echo "menonton tv";
    }
    public function gantiChanel(){
        echo "mengganti chanel.";
    }
}

class hp extends tv {

    private $aplikasi;
    public function __construct($Inch, $code){
        parent::__construct($Inch,$code);
        $this->aplikasi = true;
        echo "Objek Hp Dibuat.";
    }
    public function __destruct(){
        echo "Objek Hp Dihapus.";
    }
    public function apikasi(){
        return $this->aplikasi ? "yes":"no";
    }
    public function menonton(){
        parent::menonton();
        echo "menaruh hp";
    }
}
//intasiasi objek
$tv = new tv ("111", "222");
$hp = new hp ("ori", "hdc");

//set semua properti dr objek
$tv->setInch("35inch");
$hp->setCode("ori");
