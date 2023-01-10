<?php

include_once ("Mars.php");

class Astronaut{
private static $id=0;
private $id_objet;
 private $name;
 private $snacks;
 private $destination;
//  private $action;

 public function __construct($name){
 $this->name=$name;
 $this->snacks=0;
 $this->destination=NULL;
 $this->id_objet=Astronaut::$id;
 Astronaut::$id++;
 echo "$this->name ready for launch !\n";
 }
 
 public function getId(){
 return $this->id_objet;
 }

 public function getDestination(){
 return $this->destination;
 }

 public function getSnacks(){
 return $this->snacks;
}

// public function getAction(){
// return $this->action;
//      }

 public function doActions($action=NULL){

   switch ($action){
      case null:
         echo "$this->name: Nothing to do." .PHP_EOL;
         break;

      case get_class($action)=="planet\Mars":
         echo "$this->name: started a mission !" .PHP_EOL;
         $this->destination=$action;
         break;

      case get_class($action)=="chocolate\Mars":
         echo $this->name. " is eating mars number ". $action->getId().".".PHP_EOL;
         $this->snacks++;
         break;
        }
 }

public function __destruct(){
       if (!is_null($this->destination)) {
           echo "$this->name: Mission aborted !\n";
       }
       else {
           echo "$this->name: I may have done nothing, but I have $this->snacks Mars to eat at least !\n";
       }
   }  
}
