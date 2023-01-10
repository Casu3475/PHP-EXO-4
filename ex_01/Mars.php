<?php
class Mars 
{
 private static $id=0;
 private $id_objet;
 
 public function __construct()
 {
 $this->id_objet=self::$id;
 self::$id+=1;
 }
 
 public function getId()
 {
 return $this->id_objet;
 }
}


// $rocks = new Mars();
// $lite = new Mars();
// $snack = new Mars();
// echo $rocks->getId() . "\n";
// echo $lite->getId() . "\n";
// echo $snack->getId() . "\n";







