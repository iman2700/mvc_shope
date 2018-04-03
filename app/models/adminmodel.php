<?php
class adminModel
{
	function __construct()
	{
	    $this->db = new Database;
		
    }
	  
	  public function insertGadget($data)
	  {
		     
			$this->db->query('insert into gadget(Name,Description,Image,Price,CategoryID)'. 
			'values(:Name,:Description,:Image,:Price,:CategoryID)');
			 
			$this->db->bind(':Name', $data[0]['Name']);
			$this->db->bind(':Description', $data[0]['Description']);
			$this->db->bind(':Image','../image/'. $data[0]['Image']);
			$this->db->bind(':Price', $data[0]['Price']);
			$this->db->bind(':CategoryID', $data[0]['CategoryID']);
			 
			$this->db->execute();
			 
	  }
	  
	  public function updateGadget($data)
	  {
		   
		  $this->db->query('update gadget set Name=:name,Description=:Desc,Image=:img,Price=:price,CategoryID=:CategoryID'.
		  ' where GadgetID=:ID');
		  
		 $this->db->bind(':name',$data[0]['Name']);
		 $this->db->bind(':Desc',$data[0]['Description']);
		 $this->db->bind(':img',$data[0]['Image']);
		 $this->db->bind(':price',$data[0]['Price']);
		 $this->db->bind(':CategoryID',$data[0]['CategoryID']);
		 $this->db->bind(':ID',$data[0]['GadgetID']);
		 
		 $this->db->execute();
		  
	  }
	  
	  public function deleteGadget($id)
	  {
		  $this->db->query("delete from gadget where GadgetID=:id");
		   
		   $this->db->bind(':id', $id);
		  $this->db->execute();
	  }
}