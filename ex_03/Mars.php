<?php

namespace chocolate;
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

namespace planet;
class Mars 
{
private static $id = 0;
private $id_objet;
private $size;

public function __construct($size=NULL)
 {
 $this->id_objet=self::$id;
 self::$id+=1;
 $this->size=$size;

 }
 
 public function getId()
 {
 return $this->id_objet;
 }

 public function getSize()
 {
 return $this->size;
 }

 public function setSize($size)
 {
    $this->size=$size;
 }
}

// $rocks = new Mars();
// echo $rocks->getId()."\n";