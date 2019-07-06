<?php
include 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register </title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/Ply.css">
    <script src="<?php echo base_url(); ?>/assets/js/Ply.js"></script>
</head>
<body style="background-image: url('https://www.pixelstalk.net/wp-content/uploads/2016/11/Farming-free-hd-wallpapers.jpg');background-attachment: fixed;">
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				
			</div>
			<div class="col-sm-6">
				<form method="post" action="register_insert.php">
			        <div class="row">
			        	<h2 style="text-align: center; color: #ffffff; background-color: #332f2f;    box-shadow: 1px 0px 3px 0px;">Welcome Student</h2>
			        </div><br>
			        <div class="row">
			        	<div class="col-sm-6">
			            	<label>Name</label>
			          	</div>
			        	<div class="col-sm-6">
			        		<input class="form-control" type="text" name="fname" placeholder="Enter First Name" required>
			        	</div>
			        </div><br>

			        <div class="row">
			        	<div class="col-sm-6">
			            	<label>Email</label>
			          	</div>
			        	<div class="col-sm-6">
			        		<input class="form-control" type="text" name="Email" placeholder="Enter Email" required>
			        	</div>
			        </div><br>

			        <div class="row">
			        	<div class="col-sm-6">
			            	<label>Phone Number</label>
			          	</div>
			        	<div class="col-sm-6">
			        		<input class="form-control" type="text" name="phone" placeholder="Enter Email" required>
			        	</div>
			        </div><br>

			        <div class="row">
			        	<div class="col-sm-6">
			            	<label>Representation </label>
			          	</div>
			        	<div class="col-sm-6">
			        		<input class="form-control" type="text" name="Email" placeholder="Enter Email" required>
			        	</div>
			        </div><br>

			        <div class="row">
			        	<div class="col-sm-6">
			            	<label>Enter Registration Number</label>
			          	</div>
			        	<div class="col-sm-6">
			        		<input class="form-control" type="text" name="reg" placeholder="Enter Registration Number" required>
			        	</div>
			        </div><br>

			        <div class="row">
			        	<div class="col-sm-6">
			            	<label>Enter Password</label>
			          	</div>
			        	<div class="col-sm-6">
			          		<input class="form-control" type="password" name="password" placeholder=" Of the type Abb@..." required title="This field is reguired and 1 special character 1 small and 1 uppercase character and minimum length of 4 reguired" >
			            </div>
			        </div><br>

			        <div class="row">
			        	<div class="col-sm-6">
			            	<label>Confirm Password</label>
			          	</div>
			        	<div class="col-sm-6">
			        		<input class="form-control" type="password" name="cpassword" placeholder="Of the type Abb@..." required>
			        	</div>
			        </div><br>

			        

			        <div class="row">
			        	<div class="col-sm-6">
			            	<label>Confirm email</label>
			          	</div>
			        	<div class="col-sm-6">
			        		<input class="form-control" type="text" name="cemail" placeholder="Confirm Email" required>
			        	</div>
			        </div><br>

			        <div class="row">
			        	<div class="col-sm-6">
			            	<label>Enter Number</label>
			          	</div>
			        	<div class="col-sm-6">
			        		<input class="form-control" type="text" name="Number" placeholder="Only Number" required>
			        	</div>
			        </div><br>	

			        <div class="row">
			        	<div class="col-sm-6">
                 			<label>Address</label>
                 		</div>
                 		<div class="col-sm-6">	
                 			<textarea class="form-control" rows="5" col="50" name="address" placeholder="Enter Address"></textarea>
             			</div>
			        </div>

			        <div class="row">
			          <div class="col-sm-6">
			            
			          </div><br>
			          <div class="col-sm-6" style="margin-left: 143px;">
			              <input class="form-control" type="submit" name="login">
			          </div>

			        </div>
      			</form>
			</div>
			<div class="col-sm-3">
				
			</div>
		</div>
	</div>
</div>
</body>
</html>