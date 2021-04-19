<!DOCTYPE html>
<html lang="en">
    <?php
  require 'inc/Autoloader.php';
  ?>
  <?php include 'layouts/private_header.html'; ?>
    <head>
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon-16x16.png">
        <link rel="mask-icon" href="../assets/images/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Noureddine Ettalhaouy, Ismail Chakrane , Faysal Belkhchicha ">
        <title>About Us</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/styles/Aboutus.css">
    </head>     
<body>
    <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-10 py-5">
            <img src="assets/images/We-Share-logo.png" class="img-fluid rounded-circle" style="width:300px ; height : 300px;"><br><br>
            <h2>About Us</h2>
            <p class="lead"> 
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
      </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h2>Meet Our Team</h2>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        
            <div class="row">
                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="team-list position-relative overflow-hidden shadow rounded">
                        <img src="assets/images/me2.jpeg" class="img-fluid float-left" alt="">
                        <div class="content float-right p-4">
                            <h5 class="title mb-0">Martin Dongre</h5>
                            <small class="text-muted">Founder</small>
                            <p class="text-muted mt-3">I must explain to you how all this mistaken idea of denouncing pleasure and system.</p>
                        </div>
                    </div>                        
                </div><!--end col-->
                
                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="team-list position-relative overflow-hidden shadow rounded">
                        <img src="assets/images/me2.jpeg" class="img-fluid float-left" alt="">
                        <div class="content float-right p-4">
                            <h5 class="title mb-0">Lisa Marvel</h5>
                            <small class="text-muted">C.E.O.</small>
                            <p class="text-muted mt-3">I must explain to you how all this mistaken idea of denouncing pleasure and system.</p>
                        </div>
                    </div>                        
                </div><!--end col-->
            </div><!--end row-->
        </div>
        <div class="container" >
            <hr class="hr-text" data-content="Contact us">
            <form class="container">
              <h1>Contact us</h1>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">First name</label>
                        <input type="email" class="form-control" id="inputFirstName" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Last name</label>
                        <input type="password" class="form-control" id="inputLastName" placeholder="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email adresse</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Phone number</label>
                        <input type="password" class="form-control" id="inputPhonNumber" placeholder="">
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label for="inputAddress">Message</label>
                    <textarea type="text" class="form-control col-md-12"  id="inputMessage" placeholder="type your message here !"></textarea>
                </div>
        
                <button style="" type="submit" class="btn btn-primary">Send message</button>
            </form>
          
        </div>
</body>
</html>