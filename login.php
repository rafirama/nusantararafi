<?php 
    require 'controller.php';
    if( isset ($_POST['register'])){
        if( register($_POST) >
 0){ echo "
<script>
                    alert('data berhasil dimasukan');
                    document.location.href = 'index.php';
                </script>
 "; }else{ mysqli_error($conn); } } ?> 
 
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"/>
<title>Portofolio Web | Rafi</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<link rel="stylesheet" href="csslog.css">
<body>

    <!-- Navbar -->
    
<section class="" id="">
    <div class="p-0 m-0 border-0 bd-example m-0 border-0">
	<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #1F3629 ;">
	<div class="container"style="background-color: #1F3629;">
	<h2>NUSANTARA COFFE</h2>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		</div>
	</div>
    </section>
	<!-- Akhir Navbar -->

    <div class="all">
    <div class="judul">
			<h2>DAFTAR DISINI</h2>
		</div>                    
        <form action="" method="post">                        
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Username" name="username">    
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password">                              
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="confirm-password" name="confirmpassword">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" name="register">Submit</button>
                        </div>
                    </form>
</div>
<div></div>
</body>
</html>
