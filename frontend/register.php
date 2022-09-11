<?php

  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
    rel="stylesheet"
    />
    <title>Tailor Management System</title>
</head>
<body>


<div class="container">
        <?php
            include 'navbar.php';
        ?>
        <!-- Registration -->
      <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registration</p>

                      <form class="mx-1 mx-md-4" method="POST" action="customerRegistrationHandler.php">

                          

                          <div class="d-flex flex-row align-items-center mb-4">
                              <div class="form-outline flex-fill mb-0">
                                  <input type="text" name="name" id="form3Example3c" class="form-control" required/>
                                  <label class="form-label" for="form3Example3c">Customer Name</label>
                              </div>
                          </div>
                          
                          <div class="d-flex flex-row align-items-center mb-4">
                              <div class="form-outline flex-fill mb-0">
                                  <input type="text" name="address" id="form3Example3c" class="form-control" required/>
                                  <label class="form-label" for="form3Example3c">Address</label>
                              </div>
                          </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <div class="form-outline flex-fill mb-0">
                            <input type="tel" name="contact_no" id="form3Example3c" class="form-control" required/>
                            <label class="form-label" for="form3Example3c">Contact No ( +880- )</label>
                          </div>
                       </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                         
                         <div class="form-outline flex-fill mb-0">
                           <input type="text" name="loginId" id="form3Example3c" class="form-control" required/>
                           <label class="form-label" for="form3Example3c">Login ID</label>
                         </div>
                       </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" name="password" id="form3Example4c" class="form-control" required />
                            <label class="form-label" for="form3Example4c">Password</label>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" name="confirm_password" id="form3Example4c" class="form-control"  required/>
                            <label class="form-label" for="form3Example4c">Confirm Password</label>
                          </div>
                        </div>
                        
                        <div class="d-flex flex-row align-items-center mb-4 mx-2" style="margin-left: 50px">
                          <span>Already have an account?</span>
                          <a href="login.php" class="mx-2">click here to login</a>
                        </div>
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-primary btn-lg">Register</button>
                        </div>

                      </form>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                      <img src="./images/bdg.jpg"
                        class="img-fluid" alt="Sample image">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



    </div>
    
<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
    ></script>
</body>
</html>
