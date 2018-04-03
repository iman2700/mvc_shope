<?php 
class admin extends Controller
{
	public function __construct()
	{
		if(!isLoggedIn()){
			 
		 header('location: ' . URLROOT . '/' . 'public/users/login');
		 }
	}
	public function index()
	{
		require_once '../app/views/admin/index.php';
	}
	public function getGadget()
	{
		$gadget_model=$this->Model('gadgetmodel');
		$gadget=$gadget_model->getAllGadget();
		require_once '../app/views/admin/gadget_admin.php';
	}
	public function gadgetAddForm()
	{
		$category_model=$this->Model('categorymodel');
		$category=$category_model->getAllCategory();
		
		$pageTitle='Add Gadget';
		 $action = 'addGadget';
		 $gadgetName= '';
		 $Description ='';
		 $Image= '';
		 $Price ='';
		 
		 $button = 'Add Gadget';
		 require_once '../app/views/admin/form_gadget.php';
	}
	
	
	public function categoryForm()
	{
		if(isset($_GET['view']))
		{
		 $category_model=$this->Model('categorymodel');
		$category=$category_model->getAllCategory();
		$i=0;
		require_once '../app/views/admin/view_cats.php';
		}
		if(isset($_GET['add']))
		{ 
	        $pageTitle='Insert Category';
			$categoryName='';
			$action="insertCategory";
			require_once '../app/views/admin/insert_cat.php';
		}
		if(isset($_GET['delete_cat']))
		{
			$category_model=$this->Model('categorymodel');
		    $category=$category_model->deleteCategory($_GET['delete_cat']);
			header('Location: categoryForm?view');
		}
		
		if(isset($_GET['edit_cat']))
		{
			$category_model=$this->Model('categorymodel');
		    $category=$category_model->getSingleCategory($_GET['edit_cat']);
			$pageTitle="Edit Category";
			$action="EditCategory";
			$categoryName=$category->Name;
			 $catid=$category->CategoryID;
			require_once '../app/views/admin/insert_cat.php';
		}
		
		
	}
	
	public function insertCategory()
	{
		if(isset($_POST['name']))
		{
		$category_model=$this->Model('categorymodel');
		$category=$category_model->AddCategory($_POST['name']);
		header('Location: categoryForm?view');
		}
	}
	
	public function EditCategory()
	{
		if(isset($_POST['name']))
		{
		$category_model=$this->Model('categorymodel');
		$category=$category_model->EditCategory($_POST['name'],$_POST['category']);
		header('Location: categoryForm?view');
		}
	}
	
	
	public function gadgetTransaction()
	{
		if (isset($_POST['action']) and $_POST['action'] == 'Delete')
        {
			echo $_POST['GadgetID'];
			$admin_model=$this->Model('adminmodel');
			$admin_model->deleteGadget($_POST['GadgetID']);
			 header('Location: getGadget');
		}
       else if(isset($_POST['action']) and $_POST['action'] == 'Edit')
	   {
		 $category_model=$this->Model('categorymodel');
		$category=$category_model->getAllCategory();
		 $pageTitle='Edit Gadget';
		 $action = 'editGadget';
		 $gadgetName= $_POST['gadgetName'];
		 $Description = $_POST['Description'];
		 $Image= $_POST['Image'];
		 $Price =$_POST['Price'];
		 $GadgetID=$_POST['GadgetID'];
	     $button = 'Edit Gadget';
	   }
		 require_once '../app/views/admin/form_gadget.php';
	}
	
	
	
	 
	
	
	public function addGadget(){
	     
		 try{
			 
		 $p_cat_image = $_FILES['Image']['name'];

         $temp_name = $_FILES['Image']['tmp_name'];
		 
		 
		 
		 
			$original_info = getimagesize($temp_name);
			$original_w = $original_info[0];
			$original_h = $original_info[1];
			 
			$original_img = imageCreateFromJpeg($temp_name);
			$thumb_w = 200;
			$thumb_h = 200;
			$thumb_img = imagecreatetruecolor($thumb_w, $thumb_h);
			imagecopyresampled($thumb_img, $original_img,
							   0, 0,
							   0, 0,
							   $thumb_w, $thumb_h,
							   $original_w, $original_h);
			imagejpeg($thumb_img, $temp_name);
			imagedestroy($thumb_img);
			imagedestroy($original_img);
		 
		 
		 
		 
		 
		 
		 $ran=rand(100,999).$p_cat_image;

         move_uploaded_file($temp_name,"../public/image/$ran");
		  
		 }
		 catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
		 
		 
 
		$gadget[]=array
		(
		 'Name'=> $_POST['gadgetName'],
		 'Description' =>$_POST['Description'],
		 'Image'=> $ran,
		 'Price' => $_POST['Price'],
		 'CategoryID' => $_POST['category'],
		);
		 
		$admin_model=$this->Model('adminmodel');
		$admin_model->insertGadget($gadget);
		
		 header('Location: getGadget');
          
    
	}
		 
 
		  
		
	 
	
	public function editGadget()
	{
		$gadget[]=array
		(
		 'Name'=> $_POST['gadgetName'],
		 'Description' =>$_POST['Description'],
		 'Image'=> $_FILES['Image']['name'],
		 'Price' => $_POST['Price'],
		 
		 'CategoryID' => $_POST['category'],
		 'GadgetID' => $_POST['GadgetID'],
		);
		 
		$admin_model=$this->Model('adminmodel');
		$admin_model->updateGadget($gadget);
		 header('Location: getGadget');
		
	}
	
	public function listOrder()
	{
		 
		 
		 $shopping_model=$this->Model('shoppingmodel');
		 $orderList=$shopping_model->showOrder();
		 $i=0;
		 require_once '../app/views/admin/view_order.php';
		
	}
	public function logOut()
	{
		 
		 
		 unset($_SESSION["user_id"]);
		 header('location: ' . URLROOT . '/' . 'public/users/login');
		
	}
}