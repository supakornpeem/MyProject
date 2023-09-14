<?php
	session_start();
	require_once 'config/connect.php';
?>

<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<title>Login</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  		<style>
  		@import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
 		 *{font-family: 'Kanit', sans-serif;}
	
		body {
		background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
		}
		</style>
	</head>
	
	
	<body>
    	<div class="d-flex justify-content-center align-items-center vh-100">
      	<div class="bg-white p-5 rounded-5 shadow">
        <div class=" text-center"><i class="fa-regular fa-circle-user fa-5x"></i></div>
        <form action=" sigin_db.php " method="post">
        <div class="text-center fs-2 fw-bold">ลงชื่อเข้าใช้</div>
        <div class="input-group mt-4">
          <div class="input-group-text bg-info"><i class="fa-solid fa-user"></i></div>
          <input class="form-control bg-light" type="text" name="username" placeholder="ชื่อผู้ใช้">
        </div>
        <div class="input-group mt-2">
          <div class="input-group-text bg-info"><i class="fa-solid fa-lock"></i></div>
		  
          <input class="form-control bg-light" type="password" name="password" placeholder="รหัสผ่าน">
        </div>
          <button class="btn btn-info text-white w-100 mt-4 " name = "Signin" >ล็อกอิน</button>
      </form>
      </div>
    </div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	</body>
</html>