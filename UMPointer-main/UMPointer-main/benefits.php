<?php
include 'config.php';
session_start();

// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){

}else{
  header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <title>Hotel blue bird</title>
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./admin/css/roombook.css">
    <style>
      #guestdetailpanel{
        display: none;
      }
      #guestdetailpanel .middle{
        height: 540px;
      }
      .container-availabilityForm {
            margin: 20px; /* Adjust the value based on your preference */
        }
      .search-container{
        margin: 20px;
      }
      .
    </style>
    <style>
      .search-container {
              margin-top: 20px;
              z-index: 2;
              position: relative;
          }

      .custom-bg{
        background-color: #2ec1ac
        border= 1px solid;
      }

      .custom-bg:hover{
        background-color: #279e8c
        border-color= #279e8c
      }

      /* Chrome, Safari, Edge, Opera */
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }

      /* Firefox */
      input[type=number] {
        -moz-appearance: textfield;
      }

      .container-availabilityForm {
          margin-top: 20px; /* Add margin to the top of the container */
      }

       @media screen and (max-width: 575px){
       .search-container {
           margin-top: 0px;
           z-index: 2;
           position: relative;
       }  
    }
     
    </style>
    <style>
      html,
      body {
        position: relative;
        height: 100%;
      }

      body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }

      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        background-position: center;
        background-size: cover;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
      }
    </style>  
    <style>
      .box{
        border-top-color: var(--teal) !important;   
      }  
    </style>
    <style>
    nav {
        background-color: rgba(255, 255, 255, 0.279);/* Add your desired background color */
        padding: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle shadow */
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000; /* Set a high z-index to ensure it appears above other elements */
    }

    nav .logo {
        display: inline-block;
        margin-right: 20px; /* Optional: Adjust spacing */
    }

    nav ul {
        width: 500px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin-top: 15px;
        color: black;
    }

    nav ul li {
        color: black;
        text-decoration: none;
        list-style: none;
        cursor: pointer;
    }

    nav a {
        text-decoration: none;
        color: black;
        cursor: pointer;
    }

    nav a:hover {
        color: #007bff; /* Add your desired hover color */
    }
    </style>
</head>
<body>
    <nav>
        <div class="logo sticky-top">
      <p>UM Pointer</p>
        </div>
        <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="facilities.php">Facilities</a></li>
      <li><a href="benefits.php">Benefits</a></li>
      <li><a href="contactUs.php">Contact us</a></li>
      <a href="logout.php"><button class="btn btn-danger">Logout</button></a>
        </ul>
    </nav>

    <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Benefits</h2>
    <div class="h-line bg-dark">
    </div>
    <p class=text-center mt-3>
      Leverage agile frameworks to provide a robust synopsis for high level overviews. 
      Iterative approaches to corporate strategy foster collaborative thinking to.     
    </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="image/wifi.png" width="40px">
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
            <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. 
              Omnis quaereat non nam aperiam exerciataion nequa a!</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="image/bus stop.png" width="40px">
            <h5 class="m-0 ms-3">Bus Stations</h5>
          </div>
            <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. 
              Omnis quaereat non nam aperiam exerciataion nequa a!</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="image/aircond.png" width="40px">
            <h5 class="m-0 ms-3">Aircond</h5>
          </div>
            <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. 
              Omnis quaereat non nam aperiam exerciataion nequa a!</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="image/water dispenser.png" width="40px">
            <h5 class="m-0 ms-3">Water Dispenser</h5>
          </div>
            <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. 
              Omnis quaereat non nam aperiam exerciataion nequa a!</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="image/cafe.png" width="40px">
            <h5 class="m-0 ms-3">Cafe</h5>
          </div>
            <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. 
              Omnis quaereat non nam aperiam exerciataion nequa a!</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="node_modules/bootstrap-icons/icons/laptop.svg" width="40px">
            <h5 class="m-0 ms-3">Laptop</h5>
          </div>
            <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. 
              Omnis quaereat non nam aperiam exerciataion nequa a!</p>
        </div>
      </div>
      
    </div>
  </div>

  <!--footer-->
  <div class="container-fluid bg-white mt-5">
    <div class="row">
      <div class="col-lg-4 p-4">
        <h3 class="h-font fw-bold fs-3 mb-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
            <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25z"/>
            <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1zm2 14h2v-3H7zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zm0-14H6v1h4zm2 7v7h3V8zm-8 7V8H1v7z"/>
          </svg>
          UM Pointer
        </h3>        
        <p>
          UMPointer book now!
        </p>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Links</h5>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Benefits</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Follow Us</h5>
        <a href="#" class="d-inline-block mb-3">
          <a href="linkedin: UMPointer" class="d-inline-block mb-2 text-decoration-none text-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401m-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4"/>
            </svg>
            LinkedIn</a><br>
          <a href="instagram: UMPointer" class="d-inline-block mb-2 text-decoration-none text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
          </svg>
          Instagram</a><br>
          <a href="twitter: UMPointer" class="d-inline-block mb-2 text-decoration-none text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15"/>
          </svg>
          Twitter</a><br>
          <a href="facebook: UMPointer" class="d-inline-block mb-2 text-decoration-none text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
             <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
          </svg>Facebook</a>
        </a>
    </div>
  </div>
  </div>
</body>