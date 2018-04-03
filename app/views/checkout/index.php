 
<?php require_once '../app/views/inc/header.php';?>
 
 
 <h2>
    Your cart
</h2>
 <main class="container">
    <div class="alert alert-warning"  >
<?php	if( $data['cartempty']) ?> 
'There are no gadgets in your shopping cart.'
		<a href="../home/index" class="alert-link">
            Click here to return to the catalogue
        </a>
    </div>
    <div  >
	<?php	if( !$data['cartempty']){ ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>
                        Quantity
                    </th>
                    <th>
                        Item
                    </th>
                    <th class="text-right">
                        Price
                    </th>
                    <th class="text-right">
                        Subtotal
                    </th>
                </tr>
            </thead>
            <tbody>
			<?php	if( !$data['cartempty'])
			 	
    foreach ($_SESSION["cart_item"] as $item){
		?>
                <tr  >
				
                    <td class="text-center">
                        <?php echo $item["Name"]; ?>
                    </td>
                    <td class="text-left">
                       <?php echo $item["quantity"]; ?>
                    </td>
                    <td class="text-right">
                       <?php echo "$".$item["Price"]; ?>
                    </td>
                    <td class="text-right">
                        
                    </td>
                    <td>
					<form action="deleteItem" method="post">
                        <input type="submit"   class="btn btn-sm btn-warning pull-right" value="Remove">
                      
						<input type="hidden" name="GadgetID" value="<?php echo  $item["GadgetID"]; ?>">
					</form>
                    </td>
					
                </tr>
				<?php
       
		}
		?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-right">
                        Total:
                    </td>
                    <td class="text-right">
                        
                    </td>
                </tr>
            </tfoot>
        </table>
		<?php
       
		}
		?>
        <div class="text-center pull-right">
            <a class="btn btn-primary" href="#">Continue shopping</a>
            <a class="btn btn-primary" href="../checkout/submitorder">Place order now</a>
        </div>
    </div>
</div>
 <?php require_once '../app/views/inc/footer.php';?>