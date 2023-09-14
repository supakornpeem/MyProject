<?php 
session_start();
session_destroy();
unset($_SESSION['user_login']);
unset($_SESSION['admin_login']);


echo '
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  	';


  	echo '
					<script>
				       setTimeout(function() {
				        swal({
				            title: "Logout สำเร็จ !!",
				            type: "success"
				        }, function() {
				            window.location = "signin.php";
				        });
				    }, 100);
				</script>
				';


//echo '<a href="session.php"> back to login </a> ';
?>