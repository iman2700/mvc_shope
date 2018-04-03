 
    
    




 
 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#product_desc' });</script>
  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
 
</head>
<body>
<div id="wrapper"><!-- wrapper Starts -->

<?php include("dashboard.php");  ?>

<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->
 <h1><?php echo $pageTitle ; ?></h1>

 

 
<script>
function validateImage() {
	var img = $("#Image").val();
 
	var exts = ['jpg','jpeg','png','gif', 'bmp'];
	// split file name at dot
	var get_ext = img.split('.');
	// reverse name to check extension
	get_ext = get_ext.reverse();
 
	if (img.length > 0 ) {
		if ( $.inArray ( get_ext[0].toLowerCase(), exts ) > -1 ){
		  return true;
		} else {
			 alert("Upload only jpg, jpeg, png, gif, bmp images");
			return false;
		}			
	}  
	 
}
</script>
</body>




 


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Insert Products

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form action="<?php echo($action); ?>" method="post" onSubmit="return validateImage();" class="form-horizontal" enctype="multipart/form-data">

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Title </label>

<div class="col-md-6" >

<input type="text"  name="gadgetName"
            id="name" value="<?php echo $gadgetName ; ?>" class="form-control" required >

</div>

</div><!-- form-group Ends -->

 

 


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Category </label>

<div class="col-md-6" >

<select name="category" id="category" class="form-control input-group-lg">
          <option value="">Any category</option>
          <?php foreach ($category as $cat): ?>
		  
            <option value="<?php echo $cat->CategoryID ?>"><?php
                echo $cat->Name ?></option>
          <?php endforeach; ?>
        </select>

</div>

</div><!-- form-group Ends -->

 

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Image 1 </label>

<div class="col-md-6" >

<input type="file" name="Image"
            id="Image" value="<?php echo $Image ; ?>" class="form-control"   >

</div>

</div><!-- form-group Ends -->

 
 

 

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Price </label>

<div class="col-md-6" >

<input type="text" name="Price"
              value="<?php echo $Price ; ?>" class="form-control" required >

</div>

</div><!-- form-group Ends -->

 

 
 
 

 

<div id="description" class="tab-pane fade in active"><!-- description tab-pane fade in active Starts -->

<textarea name="Description" id="product_desc"><?php echo $Description ; ?></textarea>

</div><!-- description tab-pane fade in active Ends -->

 

 


 

</div>
 
 
 
<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="hidden" name="GadgetID" value="<?php
             echo $GadgetID; ?>">
<input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 

</div>
</div>
</div>

