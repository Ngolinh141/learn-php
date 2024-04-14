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
    <title>UM Pointer</title>
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
  </div>
    </nav>
        
    <!--Our Facilities-->
  <div class="my-5 px-4" style="margin-top: 30dp;">
    <h2 class="fw-bold h-font text-center">Our Facilities</h2>
  </div>

  <div id="guestdetailpanel">
          <form action="" method="POST" class="guestdetailpanelform">
              <div class="head">
                  <h3>RESERVATION</h3>
                  <i class="fa-solid fa-circle-xmark" onclick="closebox()"></i>
              </div>
              <div class="middle">
                  <div class="guestinfo">
                      <h4>Guest information</h4>
                      <input type="text" name="Name" placeholder="Enter Full name">
                      <input type="email" name="Email" placeholder="Enter Email">

                      <?php
                      $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                      ?>

                      <select name="Country" class="selectinput">
              <option value selected >Select your country</option>
                          <?php
                foreach($countries as $key => $value):
                echo '<option value="'.$value.'">'.$value.'</option>';
                              //close your tags!!
                endforeach;
              ?>
                      </select>
                      <input type="text" name="Phone" placeholder="Enter Phone Number">
                  </div>

                  <div class="line"></div>

                  <div class="reservationinfo">
                      <h4>Reservation information</h4>
                      <select name="RoomType" class="selectinput">
                          <option value selected >Location</option>
                          <option value="Faculty Computer Science and Information Technology">Faculty Computer Science and Information Technology</option>
                          <option value="Faculty of Science>Faculty of Science</option>
                          <option value="Faculty of Medicine">Faculty of Medicine</option>
                          <option value="Faculty of Pharmacy">Faculty of Pharmacy</option>
                      </select>
                      <select name="Bed" class="selectinput">
                          <option value selected >Room Type</option>
                          <option value="Lecture Hall">Lecture Hall</option>
                          <option value="Tutorial Room">Tutorial Room</option>
                          <option value="Computer Lab">Computer Lab</option>
                          <option value="Meeting Room">Meeting Room</option>
                          <option value="Lab">Lab</option>
                      </select>
                      <select name="NoofRoom" class="selectinput">
                          <option value selected >Type Of Event</option>
                          <option value="Forum">Forum</option>
                          <option value="Meeting">Meeting</option>
                          <option value="Talk">Talk</option>
                      </select>
    
                      <div class="datesection">
                          <span>
                              <label for="cin"> Check-In</label>
                              <input name="cin" type ="date">
                          </span>
                          <span>
                              <label for="cin"> Check-Out</label>
                              <input name="cout" type ="date">
                          </span>
                      </div>

                      <div class="datesection" style="display: flex; justify-content: space-between;">
                        <span>Price: RM200</span>
                        <span>
                            <select name="Meal" class="selectinput">
                                <option value selected >Payment Method</option>
                                <option value="Touch N Go">Touch N Go</option>
                                <option value="Debit Card">Debit Card</option>
                                <option value="Credit Card">Credit Card</option>
                            </select>
                        </span>
                    </div>
                  </div>
              </div>
              <div class="footer">
                  <button class="btn btn-success" name="guestdetailsubmit">Submit</button>
              </div>
          </form>

          <!-- ==== room book php ====-->
          <?php 
              error_reporting(E_ERROR | E_PARSE);
              if (isset($_POST['guestdetailsubmit'])) {
                  $Name = $_POST['Name'];
                  $Email = $_POST['Email'];
                  $Country = $_POST['Country'];
                  $Phone = $_POST['Phone'];
                  $RoomType = $_POST['RoomType'];
                  $Bed = $_POST['Bed'];
                  $NoofRoom = $_POST['NoofRoom'];
                  $Meal = $_POST['Meal'];
                  $cin = $_POST['cin'];
                  $cout = $_POST['cout'];

                  if($Name == "" || $Email == "" || $Country == ""){
                      echo "<script>swal({
                          title: 'Fill the proper details',
                          icon: 'error',
                      });
                      </script>";
                  }
                  else{
                      $sta = "NotConfirm";
                      $sql = "INSERT INTO roombook(Name,Email,Country,Phone,RoomType,Bed,NoofRoom,Meal,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Country','$Phone','$RoomType','$Bed','$NoofRoom','$Meal','$cin','$cout','$sta',datediff('$cout','$cin'))";
                      $result = mysqli_query($conn, $sql);

                      
                          if ($result) {
                              echo "<script>swal({
                                  title: 'Reservation successful',
                                  icon: 'success',
                              });
                          </script>";
                          } else {
                              echo "<script>swal({
                                      title: 'Something went wrong',
                                      icon: 'error',
                                  });
                          </script>";
                          }
                  }
              }
              ?>
      </div>

  <div class="container">
    <div class="row">
         <!--Facilities Filter-->
      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">  
            <h4 class="mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                    <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2z"/>
                </svg> 
                FILTERS
            </h4>
                <div class="border bg-light p-3 rounded mb-3">
              <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5> 
              
              <label class="form-label" style="font-weight: 500;">Event Start Date and Time</label>
              <input type="datetime-local" class="form-control shadow-none mb-3">

              <label class="form-label" style="font-weight: 500;">Event End Date and Time</label>
              <input type="datetime-local" class="form-control shadow-none mb-3">
              
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">LOCATION</h5> 

                <label class="form-label" style="font-weight: 500;">Faculty</label>
                  <select class="form-select mb-3" aria-label="Default select example">
                    <option selected>Select Faculty</option>
                    <option value="1">Faculty of Science</option>
                    <option value="2">Faculty of Medicine</option>
                    <option value="3">Faculty of Arts and Science</option>
                    <option value="4">Faculty of Computer Science and Information Technology</option>
                  </select>

                <label class="form-label" style="font-weight: 500;">Facility</label>
                  <select class="form-select mb-3" aria-label="Default select example">
                    <option selected>Select Facilities</option>
                    <option value="1">Meeting Room</option>
                    <option value="2">Lecture Hall</option>
                    <option value="3">Computer Lab</option>
                    <option value="4">Lab</option>
                  </select>
              </div>
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font-size: 18px;">EVENT DETAILS</h5> 

                  <label class="form-label" style="font-weight: 500;">Types Of Event</label>
                    <select class="form-select mb-3" aria-label="Default select example">
                      <option selected>Select Type Of Event</option>
                      <option value="1">Meeting</option>
                      <option value="2">Seminar</option>
                      <option value="3">Forum</option>
                      <option value="4">Talk</option>
                    </select>

                  <label class="form-label" style="font-weight: 500;">Number of Participants</label>
                  <input type="number" class="form-control shadow-none mb-3">
                </div>
                <a href="filteredResult.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">Filter</a>
      </div>

      <!-- Facilities Display-->
      <div class="col-lg-9 col-md-12 px-4">
            <div class="card mb-4 border-0 shadow" >
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="image/Dewan_Kuliah_Pharmacy.jpg" class="img-fluid rounded" >
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                <h5 class="mb-2">Lecture Hall 1 Faculty Computer Science and Techology Information</h5>
                <div class="features mb-3">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    White board
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Microphone
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Stage
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Sofa seats
                    </span>
                </div>
                <div class="facilities mb-3">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Smart board
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                    </span>
                </div>
                <div class="guests mb-3">
                    <h6 class="mb-1">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">200 Adults</span>
                </div>
                </div>
                <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <h6 class="mb-4">RM 200 per hour</h6>
                <button class="btn btn-sm w-100 btn-outline-dark shadow-none mb-2" style="margin-bottom:20dp"  onclick="openbookbox()">Book Now</button>
                <a href="facilitiesDetail.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                </div>
            </div>
            
            </div>
            <div class="card mb-4 border-0 shadow" >
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="image/lectureHall1.jpg" class="img-fluid rounded" >
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                <h5 class="mb-2">Lecture Hall 2 Faculty Computer Science and Information Technology</h5>
                <div class="features mb-3">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Meetings
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Discussion
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Preparation Room 
                    </span>
                </div>
                <div class="facilities mb-3">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Television
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Water Refillers
                    </span>
                </div>
                <div class="guests mb-3">
                    <h6 class="mb-1">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">250 Adults</span>
                </div>
                </div>
                <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <h6 class="mb-4">RM 200 per hour</h6>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                </div>
            </div>


        </div>
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
<script>
    var bookbox = document.getElementById("guestdetailpanel");

    openbookbox = () =>{
      bookbox.style.display = "flex";
    }
    closebox = () =>{
      bookbox.style.display = "none";
    }
</script>
</html>