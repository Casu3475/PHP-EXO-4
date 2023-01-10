<?php
// namespace mars;
namespace planet\moon;

include_once "Mars.php";

class Phobos{
private $mars;

public function __construct($mars){
// $this->id_objet=planet::$id;
// planet::$id++;

if ($mars instanceof \planet\mars) {
    echo "Phobos placed in orbit.\n";

} else {
    echo "No planet given.\n";
}
}

public function getMars(){
return $this->mars;
}
}

// $titi = new planet\Mars();
// $toto = new planet\Mars();
// new planet\moon\Phobos($titi);
// new planet\moon\Phobos($toto);
