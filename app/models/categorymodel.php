<?php
Class categoryModel
{
	function __construct()
	{
		
		$this->db = new Database;
		
	}
	public function getAllCategory()
	{
		try
		{
			$this->db->query('SELECT  Name,CategoryID from  category');
			
			 return $this->db->resultSet();
		}
		 catch (PDOException $e)
		{
		  $error = 'Error fetching category: ' . $e->getMessage();
		  include 'error.html.php';
		  exit();
		}
	}
	
	
	public function getSingleCategory($id)
	{
		try
		{
			$this->db->query('SELECT  Name,CategoryID from  category where CategoryID=:id');
			
			 $this->db->bind(':id', $id);
			 return $this->db->Single();
		}
		 catch (PDOException $e)
		{
		  $error = 'Error fetching category: ' . $e->getMessage();
		  include 'error.html.php';
		  exit();
		}
	}
	
	
	public function AddCategory($titel)
	{
		try
		{
			$this->db->query('insert into   category (Name) values(:titel)');
			$this->db->bind(':titel', $titel);
			 return $this->db->execute();
		}
		 catch (PDOException $e)
		{
		  $error = 'Error fetching category: ' . $e->getMessage();
		  include 'error.html.php';
		  exit();
		}
	}
	
	public function EditCategory($name,$id)
	{
		try
		{
			$this->db->query('update category set Name=:name where CategoryID=:id');
			$this->db->bind(':name', $name);
			$this->db->bind(':id', $id);
			 return $this->db->execute();
		}
		 catch (PDOException $e)
		{
		  $error = 'Error fetching category: ' . $e->getMessage();
		  include 'error.html.php';
		  exit();
		}
	}
	
	
	public function deleteCategory($id)
	{
		try
		{
			$this->db->query('delete from category where CategoryID=:id');
			$this->db->bind(':id', $id);
			 return $this->db->execute();
		}
		 catch (PDOException $e)
		{
		  $error = 'Error fetching category: ' . $e->getMessage();
		  include 'error.html.php';
		  exit();
		}
	}
	
	public function getCategoryByID($id)
	{
   	try
	  { 
	 
		  $this->db->query('select cat.name ,gadget.CategoryID,Description'.
		  ',GadgetID,Image,gadget.Name gadgetName,Price'.
		  ' from category cat INNER JOIN gadget'.
		  ' ON gadget.CategoryID = cat.CategoryID where cat.CategoryID =:id');
		  $this->db->bind(':id', $id);
		return  $this->db->resultSet();
	  }
	  catch (PDOException $e)
	  {
		$error = 'Error getting list of CategoryID to delete.';
		include 'error.html.php';
		exit();
	  }
	}
	
	
}