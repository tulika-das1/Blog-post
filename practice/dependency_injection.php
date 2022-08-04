<?php

class Jui {
    
    public function parent()
    {
       echo "This is parent class, Tulika = Jui"; 
    }
  
}

class Sontu {
    
    public function child(Jui $juiobj) //loose coupling
    {
       echo "This is child class, Abir = Sontu";
       
       echo "\n";
       
    //   $juiobj = new Jui();  //tight coupling
       
    $juiobj->parent();
    }
    
}

$juiobj = new Jui();

$abirobj = new Sontu();

$abirobj->child($juiobj);


