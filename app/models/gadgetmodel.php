<?php 
class gadgetModel
{
	function __construct() {
       // try {
     //       $this->db = $db;
     //   } catch (PDOException $e) {
     //       exit('Database connection could not be established.');
     //   }
	 $this->db = new Database;
    }
	public function getAllGadget()
	{
	try
	{	 
	    $this->db->query('SELECT GadgetID,Name gadgetName,Description,Price,Image,CategoryID from gadget');
	    return $this->db->resultSet();
	    // $query=$this->db->prepare($sql);
		// $query->execute();
		// return $query->fetchAll();
	}
	
	catch (PDOException $e)
		{
		  $error = 'Error fetching jokes: ' . $e->getMessage();
		  include 'error.html.php';
		  exit();
		}	
	 
	}
	
	public function getGadgetByID($id)
	{
		$this->db->query('SELECT GadgetID,Name gadgetName,Description,Price,Image,CategoryID from gadget where GadgetID=:ID');
		$this->db->bind(':ID', $id);
		return $this->db->single();
	}
	
	public function searchGadget($gadgetname)
	{
	    try
			 {
				 $sql = "SELECT GadgetID,Name,Description,Price,Image,CategoryID from gadget WHERE Name LIKE '".$gadgetname."%'";
				$this->db->query($sql);
				 
				
				return $this->db->resultSet(); 
				 
			 }
	     catch (PDOException $e)
  {
    $error = 'Error getting list of CategoryID to delete.';
    include 'error.html.php';
    exit();
  }
	}
	
	
	 
}