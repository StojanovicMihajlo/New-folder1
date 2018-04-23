<?php 

abstract class Covek {
    protected $ime;
    protected $prezime;
    protected $godine;
    protected $pol;
    
    public function __construct($ime,$prezime,$godine,$pol){
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->godine = $godine;
        $this->pol = $pol;
    }
    public function getPol(){
       return $this->pol;
    }
    
}
class zensko extends Covek{
    private $kosa;
    public function __construct($ime,$prezime,$godine,$pol,$kosa){
        parent::__construct($ime,$prezime,$godine,$pol);
        $this->kosa = $kosa;
    }
    public function opis(){
        echo "Moje puno ime je $ime $prezime,imam $godine godina,i {$this->getPol()} sam,boja kose mi je $kosa"; 
    }
    public function getKosa(){
        return $this->kosa;
    }
    public function getPol(){
        return "zensko";
    }
}
class musko extends Covek{
    private $brada;
    public function __construct($ime,$prezime,$godine,$pol,$brada){
        parent::__construct($ime,$prezime,$godine,$pol);
        $this->brada = $brada;
}
    public function opis(){
        echo "Moje puno ime je $ime $prezime,imam $godine godina,i {$this->getPol()} sam,brada mi je $brada";
}
    public function getBrada(){
         return $this->brada;
}
    public function getPol(){
        return "musko";
}

}

$muskarac = new musko('Marko','Milic','44','musko','dugacka');
$muskarac->opis();
$zena = new zensko ('Mila','Pesic','29','zensko','plava');
$zena->opis();

?>