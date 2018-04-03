<?php
class Controller
{
	public $db = null;
	
	function __construct()
    {
       // $this->openDatabaseConnection();
    }
	
	 //private function openDatabaseConnection()
   // { 
    //    $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

   //     $this->db = new PDO('mysql:host=localhost;dbname=gadgetstore','iman','*123', $options);
   // }

	
	public function  Model($model_name)
    {
		 
        require_once '../app/models/' . $model_name . '.php';
        // return new model (and pass the database connection to the model)
        return new $model_name();
    }
	
	public function  ship($model_name)
    {
		 
        require_once '../app/models/shipping/' . $model_name . '.php';
        // return new model (and pass the database connection to the model)
        return new $model_name();
    }
	
	public function View($views_name,$data = [])
	{ 
		if(file_exists('../app/views/' . $views_name . '.php'))
		{
			require_once '../app/views/' . $views_name . '.php';
			
		}
		else
		{
			die('view dose not exist');
		}
	}
}