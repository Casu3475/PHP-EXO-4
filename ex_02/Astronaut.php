<?php
class Astronaut
{
private static $id = 0;
 private $name;
 private $snacks;
 private $destination;
 
 public function __construct($name)
 {
 $this->id_objet=self::$id;
 self::$id+=1;
 $this->name=$name;
 $this->snacks=0;
 $this->destination=null;
 echo "$this->name ready for launch !\n";

 }
 
 public function getId()
 {
 return $this->id_objet;
 }

 public function getDestination()
 {
 return $this->destination;
 }
}

// $zero = new Astronaut("vetea");
// echo $zero->getId()."\n";
// echo $zero->getDestination()."\n";
