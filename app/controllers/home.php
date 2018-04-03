<?php 
class home extends Controller
{
   	  private $totalitem=0;
		private $totalPrice=0;
	   function __construct()
	 {
		 if(!isLoggedIn()){
			 
		 header('location: ' . URLROOT . '/' . 'public/users/login');
		 }
		  if(isset($_SESSION["cart_item"]))
			{
				foreach($_SESSION["cart_item"] as $item)
				{
					$this->totalitem+=$item['quantity'];
					$this->totalPrice += $item['Price'] * $item['quantity'];
					 
				}
			}
		 
		$this->gadget_model=$this->Model('gadgetmodel'); 
		$this->category_model=$this->Model('categorymodel');
	 
		  
			 
		 
	 }
	   
	 public function detail()
	 {
		  
			 $id=$_GET['GadgetID'];
			  
		     $gadget=$this->gadget_model->getGadgetByID($id);
			  
		     $this->View('home/detail',['totalitem'=>$this->totalitem,'totalPrice'=>$this->totalPrice,'gadget'=>$gadget]);
		   
	 }
	 
	public function index()
	{
				
		$gadget=$this->gadget_model->getAllGadget();
		$category=$this->category_model->getAllCategory();
		 
		 
		//$gadget->id=12;
		// $gadget->name='iman';
		  $this->View('home/index',['gadget'=>$gadget,'category'=>$category,'totalitem'=>$this->totalitem,'totalPrice'=>$this->totalPrice]);
		 
        
		 
	}
	public function categoryChange()
	{
	     
	 
		$gadget=$this->category_model->getCategoryByID($_POST['CategoryID']);
		$category=$this->category_model->getAllCategory();
		  $this->View('home/index',['gadget'=>$gadget,'category'=>$category,'totalitem'=>$this->totalitem,'totalPrice'=>$this->totalPrice]);
	}
	
	
	public function search()
	{
	  
		$gadget=$this->gadget_model->searchGadget($_POST['gadgetname']); 
		 
		 
		$category=$this->category_model->getAllCategory();

		 
		$this->View('home/index',['gadget'=>$gadget,'category'=>$category,'totalitem'=>$this->totalitem,'totalPrice'=>$this->totalPrice]);
	}
	
	public function addGaget()
	{
		 
		 $shopping_model=$this->Model('shoppingmodel');
		 $shopping_model->addToCart($_POST['GadgetID']); 
		 
		  header('Location: index');
         
	}
}