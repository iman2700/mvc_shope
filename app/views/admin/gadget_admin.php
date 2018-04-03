 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div id="wrapper"><!-- wrapper Starts -->

<?php include("dashboard.php");  ?>

<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->
<table class="table table-inverse">
  <thead>
   
  <a href="../admin/gadgetAddForm" style="margin:10px"  class="btn btn-danger navbar-btn">Add Gadget<a/>
  <a href="../admin/categoryForm?view" style="margin:10px"  class="btn btn-danger navbar-btn">cat<a/>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Price</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
  
   <?php foreach ($gadget as $gad): ?>
   <form action="gadgetTransaction" method="post"> 
    <tr>
      <th scope="row">1</th>
	   <input type="hidden"  name="Image" value="<?php echo $gad->Image ?>" >
	   <input type="hidden"  name="gadgetName" value="<?php echo $gad->gadgetName ?>" >
	   <input type="hidden"  name="Description" value="<?php echo $gad->Description ?>" >
	   <input type="hidden"  name="Price" value="<?php echo $gad->Price ?>" >
	   <input type="hidden" name="GadgetID" value="<?php echo $gad->GadgetID ?>">
	   <input type="hidden" name="CategoryID" value="<?php echo $gad->CategoryID ?>">
      <td> <?php echo $gad->gadgetName ?>    </td>
      <td> <?php echo $gad->Price ?>  </td>
	  <td> <?php echo substr($gad->Description,0,12) ?>   </td>
	  
      <td> <input type="submit" name="action" value="Edit"></td>
	  
            <td>  <input type="submit" name="action" value="Delete"></td>
</td>
    </tr>
	</form>
     <?php endforeach; ?>
    
  </tbody>
</table>
</div>
</div>
</div>