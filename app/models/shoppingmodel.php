<?php
class shoppingmodel
{
	function __construct()
	{
		$this->db = new Database;
		
	}
	
	
	 
	
	public function addToCart($id)
	{
		
		$this->db->query('select GadgetID,Name,Description,Image,Price from gadget where GadgetID=:id');
		$this->db->bind(':id', $id);
	   
		   $result=$this->db->resultSet();
		  
		 foreach($result as $row)  
		  
	{
		$gadget[]=array(
		 
		'GadgetID' => $row->GadgetID,
        'Name' => $row->Name,
		'Description' => $row->Description,
		 
		'Image' => $row->Image,
		'Price' => $row->Price,
		'quantity' => 1	 
		);
		 
	}
	//session_start();
	

	
	if(!empty($_SESSION["cart_item"])) {
		
				if(in_array($gadget[0]["GadgetID"],array_keys($_SESSION["cart_item"]))) {
			 
			  
			      foreach($_SESSION["cart_item"] as $k => $v) {
						if($gadget[0]["GadgetID"] == $v['GadgetID']) {
							if(empty($_SESSION["cart_item"][$k]["quantity"])) {
								$_SESSION["cart_item"][$k]["quantity"] = 0;
							}
							 
							$_SESSION["cart_item"][$k]["quantity"] += 1;
							 
							
						}
				}
			} else {
				
				$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$gadget);
			}
		} 
		else {
			$_SESSION["cart_item"] = $gadget;
		}
		
	}

 
	 public function deleteItem($id)
	 {
		 // session_start();
		 
		 if(!empty($_SESSION["cart_item"])) {
			
		foreach($_SESSION["cart_item"] as $k => $v) {
			 
			if($id == $v['GadgetID'])	unset($_SESSION["cart_item"][$k]);				
			if(empty($_SESSION["cart_item"])) unset($_SESSION["cart_item"]);
			
		}
	}
	
	 }
		public function order($data)
		{
		
			$this->db->query('insert into customer(Name,phone,street,city,zip,country)'. 
			'values(:Name,:phone,:street,:city,:zip,:country);SELECT LAST_INSERT_ID();');
			
		
			 	  
			 
			$this->db->bind(':Name', $data[0]['Name']);
			$this->db->bind(':phone', $data[0]['phone']);
			$this->db->bind(':street', $data[0]['street']);
			$this->db->bind(':city', $data[0]['city']);
			$this->db->bind(':zip', $data[0]['zip']);
			$this->db->bind(':country', $data[0]['country']);
			 $this->db->execute();
			$last_id = $this->db->lastId();
			 
			//session_start();	
			if(!empty($_SESSION["cart_item"])) 
			{
		
         	
			foreach($_SESSION["cart_item"] as $k => $v)
			{
			 $this->db->query('insert into orderitem(GadgetId,CustomerId,qty) values(:GadgetId,:CustomerId,:qty)');
			  
		 
			 $this->db->bind(':GadgetId',$v['GadgetID']);
			 $this->db->bind(':CustomerId',$last_id);
			 $this->db->bind(':qty',$v['quantity']);
			 $this->db->execute();
			 
			}
	  	unset($_SESSION["cart_item"]);
   
		}
    
		}
		
		public function showOrder()
		{
			$this->db->query('select gadget.GadgetId,cust.CustomerId,cust.Name CustomerName ,cust.phone,qty ,gadget.Name GadgetName,gadget.Price'.
            ' from orderitem ord inner join customer cust on cust.CustomerId=ord.CustomerId inner join gadget on gadget.GadgetId=ord.GadgetId');
			return  $this->db->resultSet();
		}
}