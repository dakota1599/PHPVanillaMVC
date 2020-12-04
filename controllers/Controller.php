<?php 

//Server as the parent controller.
class Controller{

    //Stuff that will be needed for every controller.
    public function __construct()
    {
        
    }

    protected function View($fileName, array $bag = []){

        //This iterates through the bag and instantiates each key as a variable.
        foreach($bag as $key => $value){
            $$key = $value;
        }

        //Global web variable.
        $web = 'https://production.dakotashapiro.info/';

        //Requires the necessary file under the naming convention.
	    require "views/$fileName.view.php";
    }




}

?>