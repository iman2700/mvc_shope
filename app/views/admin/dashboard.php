 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  
 


<nav class="navbar navbar-inverse navbar-fixed-top" ><!-- navbar navbar-inverse navbar-fixed-top Starts -->

<div class="navbar-header" ><!-- navbar-header Starts -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" ><!-- navbar-ex1-collapse Starts -->


<span class="sr-only" >Toggle Navigation</span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>


</button><!-- navbar-ex1-collapse Ends -->

<a class="navbar-brand" href="index.php?dashboard" >Admin Panel</a>


</div><!-- navbar-header Ends -->

 

 


 

<div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

<li><!-- li Starts -->

<a href="index.php?dashboard">

<i class="fa fa-fw fa-dashboard"></i> Dashboard

</a>

</li><!-- li Ends -->

<li><!-- Products li Starts -->

<a href="#" data-toggle="collapse" data-target="#products">

<i class="fa fa-fw fa-table"></i> Products

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="products" class="collapse">

<li>
<a href="gadgetAddForm"> Insert Products </a>
</li>

<li>
<a href="getGadget"> View Products </a>
</li>


</ul>

</li><!-- Products li Ends -->
 
  
 
 <li><!-- Category Li Starts --->

<a href="#" data-toggle="collapse" data-target="#Category">

<i class="fa fa-fw fa-edit"></i> Category

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="Category" class="collapse">

<li>
<a href="categoryForm?add"> Insert Category </a>
</li>

<li>
<a href="categoryForm?view"> View Category </a>
</li>

</ul>

</li><!-- Category Li Ends --->
 
 
 
 <li>

<a href="listOrder">

<i class="fa fa-fw fa-list"></i> View Order

</a>

</li> 
 
 
 

<li><!-- li Starts -->

<a href="logOut">

<i class="fa fa-fw fa-power-off"></i> Log Out

</a>

</li><!-- li Ends -->

</ul><!-- nav navbar-nav side-nav Ends -->

</div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->


<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->


<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<h1 class="page-header">Dashboard</h1>

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


 

<div class="row" ><!-- 3 row Starts -->

<div class="col-lg-8" ><!-- col-lg-8 Starts -->

<div class="panel panel-primary" ><!-- panel panel-primary Starts -->

 
 

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-8 Ends -->
  

</div><!-- 3 row Ends -->


</div><!-- container-fluid Ends -->

</div><!-- page-wrapper Ends -->

 

 


</body>

<style>
body {

margin-top:100px;

}

@media (min-width: 768px) {

body{

margin-top:50px;

}


}

#wrapper{

padding-left:0;

}

#page-wrapper{
width:100%;
padding:0;
background-color:#F9F9F9;


}

@media (min-width: 768px) {

#wrapper{
padding-left:255px;
}

#page-wrapper{
padding:10px;

}


}

/* Top Navigation */

.top-nav{

padding:0 15px;

}

.top-nav>li{
display:inline-block;
float:left;

}

.top-nav>li>a{
padding-top:15px;
padding-bottom:15px;
line-height:20px;
color:#999;
}

.top-nav>li>a:hover,
.top-nav>li>a:focus{
color:black;
}

/* Sidebar Styles */

@media (min-width: 768px) {

.side-nav{
position:fixed;
top:51px;
width:255px;
border-radius:0;
overflow-y:auto;
background-color: #222;
bottom:0;
overflow-x:hidden;
padding-bottom:40px;

}

.side-nav>li>a{
width:255px;

}

.side-nav li a:hover,
.side-nav li a:focus{
outline:none;
background-color:#000 !important;
}

}

.side-nav>li>ul{
padding:0;

}

.side-nav>li>ul>li>a{
display:block;
padding:10px 15px 10px 38px;
text-decoration:none;
color:#999;

}

.side-nav>li>ul>li>a:hover{
color:#fff;
}


/* Custom Color Panels Styles */


.huge {
font-size:40px;
line-height:normal;
}

.panel-green > .panel-heading{
color:#fff;
background-color:#5cd85c;

}

.panel-green > a{
color:#5cd85c;
}

.panel-red > .panel-heading{
color:#fff;
background-color:#d9534f;
}

.panel-red > a{
color:#d9534f;
}

.panel-yellow > .panel-heading{
color:#fff;
background-color:#f0ad4e;

}

.panel-yellow > a{
color:#f0ad4e;

}


/* Admin Profile Styles */

.panel-body {
border-radius:5px;

}

.thumb-info {
position: relative;

}

.mb-md {
margin-bottom: 15px !important;
}

.rounded {
border-radius:10px;

}

hr{
border:0;
height: 1px;
margin: 22px 0 22px 0;

}

hr.dotted {
height:0;
border-bottom: 1px dotted #ddd;
margin: 11px 0 11px 0;

}

.thumb-info .thumb-info-title {
background: rgba(36, 27, 28, 0.9);
bottom:10%;
color:#fff;
font-size:18px;
font-weight: 700;
left: 0;
letter-spacing: -1px;
padding: 9px 11px 9px;
position: absolute;
text-transform: uppercase;
z-index: 1;

}

.thumb-info .thumb-info-inner {
display:block;

}

.thumb-info .thumb-info-type {
background-color: #0088cc;
border-radius: 2px;
display: inline-block;
float:left;
font-size:12px;
font-weight:400;
letter-spacing:0;
margin: 8px -2px -15px -2px;
padding: 2px 9px;
text-transform:none;

}

.widget-content-expanded{
font-size:15px;

}

.widget-content-expanded span {
font-weight:bold;
}

.widget-content-expanded i {
color:#0088cc;
margin-right:5px;
}






</style>

 