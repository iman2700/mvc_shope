<!-- hello<?=$data['name']?> -->
 
  

<style>
    .navbar-right {
        float: right !important;
        margin-right: 5px;
    }
 
    .navbar-text {
        margin-right: 10px;
    }
</style>
  
 
     <div>
	<?php require_once '../app/views/inc/header.php';?>
	
	<div class="navbar navbar-default" role="navigation"  >
	
	 <a href= "../admin/index" class="btn btn-danger navbar-btn">Admin</a>
        <a class="navbar-brand" href="#">Gadgets</a>
        <div class="col-sm-6 col-md-6"  >
            <form class="navbar-form" role="search" action="search" method="post">
                <div class="input-group">
                    <input type="text" name="gadgetname" class="form-control input-group-lg" placeholder="Filter gadgets.."  >
                </div>
				<select name="category" id="category" class="form-control input-group-lg">
          <option value="">Any category</option>
          <?php foreach ($data['category'] as $cat): ?>
		  
            <option value="<?php echo $cat->CategoryID ?>"><?php
                echo $cat->Name ?></option>
          <?php endforeach; ?>
        </select>
		 <input type="hidden" name="action" value="search">
		<input type="submit" valu="Enter" />
            </form>
			
        </div>
       
    </div>
	
	
	 <div class="col-xs-3">
	  <form action="index" method="post" >
		<a  onclick='this.parentNode.submit(); return false;'   class="btn btn-block btn-default btn-lg">Home</a>
		</form>
<?php foreach ($data['category'] as $cat): ?> 
 <form action="categoryChange" method="post" id="selectCat">
         <a href="javascript:{}" onclick='this.parentNode.submit(); return false;'  class=" btn btn-block btn-default btn-lg" > 
		 <?php  echo $cat->Name; ?> </a>
    <input type="hidden"   name="CategoryID" value="<?php echo  $cat->CategoryID; ?>">
    
 
   </form>
   <?php endforeach; ?>
   </div> 
    <div class="col-xs-9">
        <div class="panel panel-default"   >
		 
    

		<?php foreach ($data['gadget'] as $gad): ?>
		<form action="addGaget" method="post" id="additem">
		
            <div class="panel-heading">
                <strong><?php echo $gad->gadgetName; ?></strong>
                <span class="pull-right label label-primary">
                  <?php echo $gad->Price; ?>   
                </span>
            </div>
            <div class="panel-body">
                <div class="media"   >
                    <a class="pull-left" href="detail?GadgetID=<?php echo $gad->GadgetID ?>" >
                        <img style="with:100px;hight:100px" class="media-object" src="<?php echo $gad->Image; ?>"  />
                    </a>
                    <div class="media-body">
                        <span class="lead">  <?php echo $gad->Description ; ?> </span>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                 
				<a   class="btn btn-success"   onclick='this.parentNode.parentNode.submit(); return false;'>
                 <input type="hidden" name="GadgetID" value="<?php echo $gad->GadgetID; ?>"  >
				 Add to cart
                </a>
            </div>
			</form>
			 <?php endforeach; ?>
			 
        </div>
        <div class="pull-right btn-group">
             <a     class="btn btn-default" >
                 
             </a>
        </div>
    </div>
</div>
 	<?php require_once '../app/views/inc/footer.php';?>
  