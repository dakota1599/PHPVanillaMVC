<?php 


class StaticPageController{

    public function home(){
	require View("home");
    }

    public function about(){
    }

    public function contact(){
       
    }


    protected function View($fileName){
	return 'views/$fileName.view.php';
    }




}

?>