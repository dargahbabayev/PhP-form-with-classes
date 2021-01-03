<?php 
class form_control{

protected $situation;
private $error_message="Please fill the all tables";
protected $name,$surname,$hobby;

function form_control_func(){

if($_POST["form_name"]!=null && $_POST["form_surname"] && $_POST["form_hobby"]!=null):

$this->situation=true;
$name=htmlspecialchars($_POST["form_name"]);
$surname=htmlspecialchars($_POST["form_surname"]);
$hobby=htmlspecialchars($_POST["form_hobby"]);
else:
    echo $this->error_message;
endif;

}

function fsituation(){ return $this->situation; }

}
class save extends form_control{
    function saveinfo(){
        if(parent::fsituation()==true):
            echo "Sucsesfully ";
            
        endif;
    }
 
}

?>