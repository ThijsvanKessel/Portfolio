
<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">

	<title>Property</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" >

</head>
<body>
<?php include("include/header.php");  ?>
<br>

<div class="container">
            <div class="row">
                <div class="col">
                </div>

                <div class="col-8 text-center login-style">
                    <form class="row g-3" method="POST" action="admin.php">
                        <div class="col-5">
                            <input type="text" class="form-control-plaintext" id="staticEmail2" value="AdminUser" name="user" required>
                        </div>
                        <div class="col-5">
                            <input type="password" class="form-control" id="inputPassword2" placeholder="" name="pass" required>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary mb-3">submit</button>
                        </div>
                    </form>
                </div>

                <div class="col">
                </div>
            </div>
</div>
<br>
<?php include("include/footer.php");  ?>
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	
	<!-- Bootstrap -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>	

	<!-- Mustache JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.js"></script>

    
    <!-- Custom js  -->
    <script src="js/main.js"></script>
</body>
</html>
