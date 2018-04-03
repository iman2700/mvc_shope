<?php 
class checkout extends Controller
{
	private $cartempty;
	public function index()
	{
		//session_start();
	   $this->checkEmpty();
	}
	
	function checkEmpty()
	{
		
	 
	 if(empty($_SESSION["cart_item"]))
	 {
		 $this->cartempty=true;
	 }
		$this->View('checkout/index',['cartempty'=>$this->cartempty]);
	}
	
	public function deleteItem()
	{
		 
		$shopping_model=$this->Model('shoppingmodel');
		 $shopping_model->deleteItem($_POST['GadgetID']); 
		 
		 $this->checkEmpty();
	}
	
	public function submitorder()
	{
		 
		$this->View('checkout/submitorder');
	}
	
	public function ShippingCostCalculator()
	{
	 
		 switch ("FedEx") {
            case "FedEx": 
                $strategy=$this->ship('FedexShippingStrategy'); 
            break;
            case "UPS": 
                $this->strategy = new UpsShippingStrategy();
            break;
            case "Schenker": 
                $this->strategy = new SchenkerShippingStrategy();
            break;
        }
		echo $strategy->Calculate();
		
		
	}
	public function completeOrder()
	{
		$data[]=array(
		'Name'=>$_POST['Name'],
		'phone'=>$_POST['phone'],
		'street'=>$_POST['street'],
		'city'=>$_POST['city'],
		'zip'=>$_POST['zip'],
		'country'=>$_POST['country'],
		'shipping'=>$_POST['shipping']
		);
		 
		$shopping_model=$this->Model('shoppingmodel');
		 $shopping_model->order($data);
		
	}
	
	
}