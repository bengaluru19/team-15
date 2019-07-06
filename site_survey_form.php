<!DOCTYPE html>
<html>
<head>
	<title>Welcome User</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2 style="text-align: center;">Survey Form</h2>
		</div>
	</div>
</div>
<br>
<div class="container">
    <div class="col-md-2">
    </div>
    <form method="Post">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">Project Details</div>
            <div class="panel-body">
                Project/School Name:
                <br />
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default">
                        <input type="radio" autocomplete="off" />Government Space
                    </label>
                    <label class="btn btn-default">
                        <input type="radio" autocomplete="off" /> Private Space
                    </label>

                    <label class="btn btn-default">
                        <input type="radio" autocomplete="off" /> Public Space
                    </label>
                </div>
                <br />
                <br />

                Address
                <br />
                <div class="btn-group" data-toggle="buttons">
                    
                        <input class="form-control" type="text" name='address' value='Address'>
                   
                    
                </div>
                <br />
                <br />
            </div>

            <div class="panel-heading">Student Details</div>
            <div class="panel-body">
                Number of Students:
                <br />
                <div class="btn-group" data-toggle="buttons">
                    
                        <input class="form-control" type="text" name="nostud" value="Number of Students" />
                    
                    
                </div>
                <br />
                <br />

                Age Group
                <br />
                <div class="btn-group" data-toggle="buttons">
                    
                        <input class="form-control" type="text" name='age' value='Age Group'>
                    
                    
                </div>
                <br />
                <br />
            </div>
        </div>
   

     
        <div class="panel panel-default">
            <div class="panel-heading">Site Details</div>
            <div class="panel-body">
                Site Area:
                <div class="btn-group" data-toggle="buttons">
                    
                        <input class="form-control" type="text" name='age' value='Area'>
                    
                    
                </div>
                <br>
                <br>
                Is the site snake prone?:
                <br />
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default">
                        <input class="form-control" type="radio" autocomplete="off" /> Yes
                    </label>
                    <label class="btn btn-default">
                        <input class="form-control" type="radio" autocomplete="off" /> No
                    </label>
                </div>
                <br />
                <br />

                Is the site open to Public?:
                <br />
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default">
                        <input class="form-control" type="radio" autocomplete="off" /> Yes
                    </label>
                    <label class="btn btn-default">
                        <input class="form-control" type="radio" autocomplete="off" /> No
                    </label>
                </div>
                <br>
                <br>
                Is the ground prone to vandalism?:
                <br />
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default">
                        <input class="form-control" type="radio" autocomplete="off" /> Yes
                    </label>
                    <label class="btn btn-default">
                        <input class="form-control"type="radio" autocomplete="off" /> No
                    </label>
                </div>

                <br>
                <br>
                Soil Condition:
                <br />
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default">
                        <input class="form-control" type="radio" autocomplete="off" /> Hard & Rocky
                    </label>
                    <label class="btn btn-default">
                        <input class="form-control"type="radio" autocomplete="off" /> Soft
                    </label>

                    <label class="btn btn-default">
                        <input class="form-control"type="radio" autocomplete="off" /> Muddy & Wet
                    </label>

                    <label class="btn btn-default">
                        <input class="form-control" type="radio" autocomplete="off" />Sandy & loose
                    </label>
                </div>

                <br>
                <br>
                Budget:
                <br />
                <div class="btn-group" data-toggle="buttons">
                        <input class="form-control" type="text" name="budget" value="Budget">
                </div>

                
                <br />
                <br>
                <br>
                <div class="btn-group" data-toggle="buttons">
                        <input class="form-control" type="button" name="budget" value="Submit">
                </div>
				

            </div>
        </div>
    </div>

    </form> 


</body>