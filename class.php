<?php
	class musica
	{	
		var $cancion;
		
		function tocar($nota1,$nota2,$nota3,$nota4){
			$this->cancion = " ".$nota1 ." ". $nota2." ".$nota3." ".$nota4;
		}
		function escuchar(){
			echo $this->cancion;
		}
	}
	$cancion = new musica;
	
	$cancion->tocar("Do","Re","Mi","Fa");
	$cancion->escuchar();
	$cancion->tocar("Sol","La","Si","Do");
	$cancion->escuchar();
	
?>