 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    .ng-invalid {
        border-color: brown;
    }
 
    .ng-valid {
        border-color: lightgreen;
    }
 
    span.error {
        color: red;
        font-weight: bold;
    }
</style>

<h2>
    Check out
</h2>
<p>
    Enter your shipping details below, and we'll ship your goods as far as possible!
</p>
<form name="shippingForm" action="completeOrder" method="post" novalidate>
    <div class="well col-md-6">
        <div class="form-group">
            <input name="Name" class="form-control"  required placeholder="Company Name" />
            <span class="error"  >
                Please enter your Name
            </span>
        </div>
        <div class="form-group">
            <input name="phone" class="form-control"   required placeholder="Full Name" />
            <span class="error" >
                Please enter your Phone
            </span>
        </div>
 
        <div class="form-group">
            <input name="street" class="form-control"   placeholder="Shippping Address" required />
            <span class="error" n >
                Please enter a street
                address
            </span>
        </div>
        <div class="form-group">
            <input name="city" class="form-control"   placeholder="City" required />
            <span class="error"  >
                Please enter a city
            </span>
        </div>
        <div class="form-group">
            <input name="zip" class="form-control"   placeholder="Zip" required />
            <span class="error"  >
                Please enter a zip code
            </span>
        </div>
        <div class="form-group">
            <input name="country" class="form-control"   placeholder="Country" required />
            <span class="error"  >
                Please enter a country
            </span>
        </div>
		
		<div class="form-group">
		 
		<select name="shipping"   id="shipping" class="form-control input-group-lg">
            <option value="">FedEx</option>
			<option value="">UPS</option>
			<option value="">Schenker</option>
			</select>
			 
            <span class="error"  >
                Please enter a Shipping Options
            </span>
        </div>
		
        <div class="text-center">
            <button   class="btn btn-primary pull-left"  >
                Complete order
            </button>
        </div>
    </div>
</form>
 