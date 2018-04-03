<div id="wrapper"><!-- wrapper Starts -->

<?php include("dashboard.php");  ?>

<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->
 
<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

 
</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th> No:</th>
<th>Customer Name:</th>
<th>Gadget Name:</th>
<th>Price:</th>
<th>Quantity:</th>



</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->
 
<?php foreach($orderList as $order): ?>
 
<tr>

<td><?php echo $i++; ?></td>

<td><?php echo $order->CustomerName; ?></td>


<td><?php echo $order->GadgetName; ?></td>

<td>

<?php echo $order->Price; ?>

</td>

<td>

<?php echo $order->qty; ?>

</td>

</tr>


  <?php endforeach; ?>

</tbody><!-- tbody Ends -->

</table><!-- table-bordered table-hover table-striped Ends -->


</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->
</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->