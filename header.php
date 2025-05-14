<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MAHIS ARTSIGHT</title>
        <!-- Favicon-->

        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- animation -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
   
<link rel="stylesheet" href="style.css">
    
<script src="cart.js" ></script>   



    <style>

/* .about{
  
  background-image:url("images/istockphoto-534129810-1024x1024.jpg");
  background-repeat:no-repeat; 
  height:100%;
  weight: 100%;
  position: relative;
  display:flex; */
  /* position: relative;
      height: 60vh;
      background: url('images/about1.jpg') no-repeat center center/cover;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      text-align: center; */
    
  
  
/* }  */

/*    */
.hero {
      position: relative;
      background: url('images/cover.jpg') no-repeat center center/cover;
      height: 100vh;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Add a dark overlay */
    }
    .hero-content {
      position: relative;
      z-index: 2;
    }
    </style>
          

    
    <!-- Custom styles for this template -->
    <!-- <link href="cover.css" rel="stylesheet"> -->
     
  </head>
 

    <body class="index-page">

       <!-- Navigation-->

         <header class="sticky-top" >
        <nav class="navbar  navbar-expand-lg fixed-top border-box" style="background-color: rgba(0, 0, 0, 0.1);!important" >
        <div class="container px-4 px-lg-5 justify-content-between">
<div class="col-12">
          <div class="row" >
            <div class="col-6 float-start px-0 ms-0">
      <ul class="nav">
    <li class="nav-item p-0 me-0">
        <a class="nav-link" href="#">
            <img src="images/download.png" alt="Logo" width="80" height="55" class="d-inline-block align-item-center">
        </a>
    </li>
    <li class="nav-item ms-0 me-0 p-0">
        <a class="nav-link" href="#">
            <h1 class="text-warning"><b>Mahis Artsight </b></h2>
        </a>
    </li>
</ul>
</div>
  
               <div class=" col-6 float-right"> 

                    <ul class="navbar-nav  ms-5 float-right">
                     <li class="nav-item"><a class=" nav-link text-warning bi bi-person-circle" href="admin/login.php"></a></li>

                      <li class="nav-item"><a class="nav-link text-warning"  href="#index">Home</a></li>
                      <li class="nav-item"><a class="nav-link text-warning" href="about">About</a></li>
                      <li class="nav-item"><a class="nav-link text-warning" href="#category">categories</a></li>
                      <li class="nav-item"><a class="nav-link text-warning" href="#product">product</a></li>

                     <li class="nav-item"><a class="nav-link active text-warning" href="#card-body">contact</a></li>
                     <li class="nav-item"><a class=" nav-link text-warning bi bi-cart-fill me-2" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover" >
                     <span class="badge bg-dark text-warning ms-1 rounded-pill" id="cartCount">0</span>

                     </a>
                     </li>
  
                 
 

                    </ul>
                  </div>
                  </div>
                </div>
                </div>  
                
  </nav>
              </header>
              