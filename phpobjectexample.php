
//Example of how to create a PHP class/object called ROBOT with 
//attributes of a model, color, operating system and size

<?php
	class Robot
	{
		private $model;
		private $color;
		private $os;
		private $size;
		
		public function __construct($m, $c, $o, $s){
			
			$this->setModel($m);
			$this->setColor($c);
			$this->setOs($o);
			$this->setSize($s);
			
		}
		
        //string displayed when echoing robot object
		public function __toString(){
			
			return "<p>Your <span>{$this->getSize()}</span> size 
			<span>{$this->getColor()}</span> 
			<span>{$this->getModel()}</span> 
			robot running 
			<span>{$this->getOs()}</span> 
			will be built shortly. Thank you.";
		}
		
        //setters
		public function setModel($m){
			
			$this->model = $m;
		}
		
		public function setColor($c){
			
			$this->color = $c;
		}
		
		public function setOs($o){
			
			$this->os = $o;
		}		
		
		public function setSize($s){
			
			$this->size = $s;
		}	
		
        //getters
		public function getModel(){
			
			return $this->model;
		}
		
		public function getColor(){
			
			return $this->color;
		}
		
		public function getOs(){
			
			return $this->os;
		}
		
		public function getSize(){
			
			return $this->size;
		}	
		
	}			

    ?>