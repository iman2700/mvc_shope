 
 
<div id="wrapper"><!-- wrapper Starts -->

<?php include("dashboard.php");  ?>

<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->
 
<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw"></i><a href="../admin/categoryForm?add"> Add Categories</a>

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Category ID:</th>
<th>Category Title:</th>
<th>Delete Category:</th>
<th>Edit Category:</th>



</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->
 
<?php foreach($category as $cat): ?>
 
<tr>

<td><?php echo $i++; ?></td>

<td><?php echo $cat->Name; ?></td>


<td>

<a href="categoryForm?delete_cat=<?php echo $cat->CategoryID; ?>" >

<i class="fa fa-trash-o" ></i> Delete

</a>

</td>

<td>

<a href="categoryForm?edit_cat=<?php echo $cat->CategoryID; ?>" >

<i class="fa fa-pencil" ></i> Edit

</a>

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

