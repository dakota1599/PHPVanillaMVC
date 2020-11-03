<?php 

//Server as the parent controller.
class Controller{

    //Stuff that will be needed for every controller.
    public function __construct()
    {
        
    }

    protected function View($fileName, array $bag = []){
	    return "views/$fileName.view.php";
    }




}

?>