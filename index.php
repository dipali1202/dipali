<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <title>Registration</title>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center text-info">Patient Registration</h2>
        <div class="row">
            <div class="col-md-7 m-auto p-3 card">
                <form method="post" id="myform" action="" class="was-validated">
                    <input type="hidden" value="" name="id" id="dataid">
                    <div class="form-row">
                    <div class="form-group col-12">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name" autocomplete="off" required="" data-validation="required">
                    </div>
                    <div class="form-group col-6">
                        <label for="name">DOB</label>
                        <input id="dob" class="form-control" type="date" name="dob" required="" data-validation="required" >
                    </div>
                    <div class="form-group col-6">
                        <label for="name">Age</label>
                        <input id="age" class="form-control" type="text" name="age" autocomplete="off" required="" data-validation="required">
                    </div>
                    <div class="form-group col-12">
                        <label for="address">Address</label>
                        <input id="address" class="form-control" type="text" name="address" autocomplete="off" required="" data-validation="required">
                    </div>
                    <div class="form-group col-6">
                        <label for="name">City</label>
                        <input id="city" class="form-control" type="text" name="city" autocomplete="off" required="" data-validation="required">
                    </div>
                    <div class="form-group col-6">
                        <label for="phone">state</label>
                        <input id="state" class="form-control" type="text" name="state" autocomplete="off" required="" data-validation="required">
                    </div>
                    <input id="formbtn" class="btn btn-success btn-block" type="submit" value="Submit">
                </div>
                </form>
            </div>
            <div class="col-md-12">
                <h2 class="text-center pt-5 pb-2 text-info">Patient Details</h2>
                <div id="table" class="pb-5"></div>
            </div>
        </div>
    </div>
    </body>
    
    
    <!--add ajax.js file-->
     <script src="ajax.js"></script> 
</html>