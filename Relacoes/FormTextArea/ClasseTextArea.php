    
<?php
	require_once("InterfaceExibicao.php");
	
	class TextArea implements Exibicao{
		private $placeholder;
		private $name;
        private $cols;
        private $rows;
		//private $label;
		
		public function __construct($vetor){
            $this->name=$vetor["name"];
            $this->placeholder=$vetor["placeholder"];
            $this->cols=$vetor["cols"];
            $this->rows=$vetor["rows"];
			if(isset($this->placeholder))
			{
				$this->placeholder=$vetor['placeholder'];

			}
			//$this->label=$vetor["label"];
		}
		
		public function exibe(){
			echo 
            "<textarea name ='$this->name' ";
            if($this->placeholder!=null){
                echo"placeholder='$this->placeholder'";

            }
            if($this->cols!=null){
                echo"placeholder='$this->placeholder'";

            }
            if($this->rows!=null){
                echo"placeholder='$this->placeholder'";

            }
            echo "></textArea>"
    		}
		
	}
?>