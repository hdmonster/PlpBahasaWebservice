<!DOCTYPE html>
<html>
<head>
	<title>Account Activation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<?php
	    include '../../connections/connect.php';

		if(isset($_GET['email']) AND isset($_GET['hash'])){
		    // Verify data
		    $email = $_GET['email']; // Set email variable
		    $hash = $_GET['hash']; // Set hash variable

		    $search = mysqli_query($con, "SELECT email, hash, status FROM TbUser WHERE email='".$email."' AND hash='".$hash."' AND status='0'") or die(mysqli_error($con));
		    $count = mysqli_num_rows($search);

		    if($count == 1){
		        mysqli_query($con, "UPDATE TbUser SET status='1' WHERE email='".$email."' AND hash='".$hash."' AND status='0'") or die(mysqli_error());
                echo '
                
                    <div class="jumbotron">
                      <h1 class="display-4">Account Activated!</h1>
                      <p class="lead">You can now login to your account. PLP Bahasa Web build in beta version, features and service might not working properly.</p>
                      <hr class="my-4">
                      <p>We are not responsible of any data lost, error, unresponsive page, used token during exam.</p>
                      <a class="btn btn-primary btn-lg" href="../../client/confirm/login" role="button">Login</a>
                    </div>
                    
                ';
		    }else{
		        echo '
		            
		            <div class="jumbotron">
                      <h1 class="display-4">Unable to activate your account!</h1>
                      <p class="lead">The url might invalid or you already activate your account before.</p>
                      <hr class="my-4">
                      <p>If you already activate your account, you can login to your account below.</p>
                      <a class="btn btn-primary btn-lg" href="../../client/confirm/login" role="button">Login</a>
                    </div>
		        
		        ';
		    }
		}
	?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>