<?php
  class Saludar { 
    public function hola() { 
        echo "HOLA"; 
    } 

  } 

  class Llamar {
   	public function llamar(){
	    Saludar::hola();  
	}
  }  
    // llamada est�tica a un m�todo no est�tico
    Llamar::llamar();
?>