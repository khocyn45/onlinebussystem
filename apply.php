<?php
include 'stay.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>APPLY</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v3.1.1
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
#kv-gs-query{border-color:#fff}#kv-gs-query:focus{border-color:#80bdff}.gsc-control-cse{padding:0;margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif}.gsc-adBlock{margin:0 0 0 -5px}.gsc-above-wrapper-area,.gsc-thumbnail-inside,.gsc-url-top{padding:0}.gs-result .gs-title,.gs-result .gs-title *{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects}.gs-result .gs-title :hover,.gs-result .gs-title:hover{color:#0056b3;text-decoration:underline}.gsc-result .gs-title{height:1.4em}.gsc-result-info{padding-left:0}.gsc-results .gsc-cursor-box{margin:5px 0 0}.gsc-results .gsc-cursor-box .gsc-cursor-page{display:block;padding:.5rem .75rem;margin:0 0 0 -1px;line-height:1.25;color:#007bff;background-color:#fff;border:1px solid #ddd;float:left}.gsc-results .gsc-cursor-box .gsc-cursor-page:focus,.gsc-results .gsc-cursor-box .gsc-cursor-page:hover{color:#0056b3;text-decoration:none;background-color:#e9ecef;border-color:#ddd}.gsc-results .gsc-cursor-box .gsc-cursor-current-page{color:#fff;background-color:#007bff;border-color:#007bff}.gsc-cursor-page:first-child{margin-left:0;border:1px solid #ddd;border-top-left-radius:.25rem;border-bottom-left-radius:.25rem}.gsc-cursor-page:last-child{border-bottom-right-radius:.25rem;border-top-right-radius:.25rem}.gs-error-result .gs-snippet,.gs-no-results-result .gs-snippet{margin:0;padding:15px 20px;border-radius:.25rem;color:#856404;background-color:#fff3cd;border-color:#ffeeba}.gsc-selected-option-container{border-radius:.25rem}


body {
  font-family: sans-serif;
  background-color: #eeeeee;
}

.file-upload {
  background-color: #ffffff;
  width: 600px;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #1FB264;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1FB264;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}

</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.html">learner</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="addlearner.php">Add learner</a></li>
         
            
              

              <Button class="btn btn-danger" style="margin-left:20px" data-toggle="modal"  data-dismiss="modal" data-target="#btnlogout"><a href="#">logout</a></li>

              

            </ul>
          </nav><!-- .nav-menu -->
          
        </div>
      </div>

    </div>
  </header><!-- End Header -->


  <main id="main">




     <!-- ======= Featured Services Section Section ======= -->
     <section id="featured-services">
      <div class="container">
      <br/>
      <br/>
      <br/>
      <br/>
        <div class="row">
			<div class="col-lg-4 box">
				<i class="ion-ios-bookmarks-outline"></i>
				<h4 class="title"><a href="dashPartner.php">Home</a></h4>
            </div>

          	<div class="col-lg-4 box">
            	<i class="ion-ios-bookmarks-outline"></i>
            	<h4 class="title"><a href="addVehicle.php">Add learner</a></h4>
            </div>

          	
            </div>
        </div>
      </div>
    </section><!-- End Featured Services Section -->



   

  <?php
  			if(isset($_SESSION['msg'])){

          echo '<script>
          
            alert("';
  
              echo $_SESSION['msg'];
              
              
            echo '")
          
          </script>';
  

          unset($_SESSION['msg']);
        }

        ?>



        <!-- ======= Featured Services Section Section ======= -->
      <section id="loads">
        <div class="" style="margin-left:20px" data-aos="fade-up">







          <div class="">
            <br/>
          
            <a href="#addLoads"  data-toggle="tooltip" title="Add new loads" style="font-size: 50px;" >
              <span class="glyphicon glyphicon-plus-sign "  ></span>
            </a>
      
        

          </div>







          <?php
            
                    

            $itemId=$_SESSION ['applyId'];
            

            $result = $db->query("SELECT *
            FROM clientloads
            WHERE id='$itemId'");

            $row = $result->fetch_assoc();


         
      

          $provinceFrom = $row['provinceFrom'];
          $cityFrom = $row['cityFrom'];
          

          $provinceTo = $row['provinceTo'];
          $cityTo = $row['cityTo'];

          $title = $row['title'];
          
           $contact = $row['contactNumber'];
          
           $email = $row['contactMail'];
          
          $details = $row['details'];
          
          $commodity = $row['Commodity'];


        
          ?> 
        <br/>
        <br/>
        <br/>


        <section id="apply">
          <div class="" style="margin-top:50px">

            <div class=" box">
              <header class="section-header">
                
                <h3>Advert Details</h3>
                
              </header>


              <div class="row">
                
                 <div class="col-sm-2" >
                    <div class="p-2 text-uppercase"><b>Commodity</b></div>
                   <div style="margin-left:10px"><?php echo $commodity?></div>
                  </div>

                  <div class="col-sm-4" >
                    <div class="p-2 text-uppercase"><b>Title</b></div>
                    <?php echo $title?>
                  </div>
                
                <div class="col-sm-2" >
                    <div class="p-2 text-uppercase"><b>Contact</b></div>
                    <?php echo $contact?><br/>
                    <?php echo $email?>
                  </div>
                
                

                  <div class="col-sm-2" >
                  <div class="py-2 text-uppercase"><b>From</b></div>
                    <?php echo $provinceFrom; echo ' '; echo $cityFrom;?>
                  </div>


                  <div class="col-sm-2" >
                  <div class="py-2 text-uppercase"><b>Destination</b></div>
                    <?php echo $provinceTo; echo ' '; echo $cityTo;?>
                  </div>

                 
                  
              </div>
              
              
              <br/>
               <br/>
               <div class="col-sm-4" >
                  <div class="py-2 text-uppercase"><b>Details</b></div>
                    <?php echo $details?>
                  </div>
              
               <br/>
              
               <br/>
                 

                  <?php

                    if (isset($_POST['apply'])){

                     


                      if(isset($_POST['apply'])){    
                        $numberOfCheckbox= count($_POST['apply']);

                        echo "<div style='margin-left:30px'><p>here</p>"; 

                        echo $numberOfCheckbox;
                        

                        $i=0;

                        while($i <$numberOfCheckbox ){
                          $keyToDelete2=$_POST['apply'][$i];
                          

                          
                          // $updateItem="UPDATE clientloads SET liveStatus = 2 WHERE id = '$keyToDelete2'";
                          // mysqli_query($db,$updateItem);
                          


                          $i++;
                      
                        };


                        echo "<script>
                        window.location.href = 'apply.php';

                        </script>";

                      




                        echo "</div>";

                      }else{


                        echo "<script>
                        
                          alert('No items selected!');

                        </script>";
                      };

                    };

                    ?>




                    </section>
                    <!------------------------------------------------- test ------------------------------------------------------------------->


                  <br/>
                  <br/>


            </div>

     
    <br/>

        
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
  

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Valmak Asset Management</strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });






    function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
  });
  $('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
});








</script>  

</body>






<!--------------------Start Register modal--------------------------------->
<div class="modal fade" id="btnregister" tabindex="-1" role="dialog" aria-labelledby="modallabel1" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">

					<div class="modal-header">
						<h4 class="modal-title" id="modallabel1">Register below:</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="close">
							<span aria-hidden="true">&times;</span>
						</button>

					</div>

					<div class="modal-body">

						<!-- --------Start register form=-------------------->
						<form method="post" action="register.php" autocomplete="off">

							<div class="form-group">
								<label for="inputEmail">Email</label>
								<input class="form-control" placeholder="Example@example.com" type="text" name="email"  required/>
							</div>
							
							<div class="form-group">
								<label for="InputPassword">Password</label>
								<input class="form-control" placeholder="Enter Password" type="password" name="psw" required/>
							</div>
		
							<div class="form-group">
								<label for="InputPassword">Re-enter Password</label>
								<input class="form-control" placeholder="Re-enter Password" type="password" name="psw2" required/>
							</div>
							<br />
							
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary" name="register_btn">Register</button>
							</div>

							<div class="modal-footer">
								<h5>Have account. Go to login:</h5>
								<a href="#" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#btnlogin">Go Login</a>
							</div>
						</form>
						<!-------------------------------------End Form----------------------->
					</div>

				</div>
			</div>
		</div><!-----------------------------End register modal------------------------------>
			
	
			
		<!--------------------Start login modal--------------------------------->
		<div class="modal fade" id="btnlogin" tabindex="-1" role="dialog" aria-labelledby="modallabel1" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="modallabel1">Login below:</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="close">
							<span aria-hidden="true">&times;</span>
						</button>
						
					</div>
					
					<div class="modal-body">
						<!-- ---------------------Start form=------------------------------>
						<form  method="post" action="../login.php" autocomplete="off">
							<div class="form-group">
								<label for="inputUserName">Email</label>
								<input class="form-control" placeholder="Enter Email" type="text" name="email" 
								
									<?php

										if(isset($_SESSION['email'])){

											$emailhere=$_SESSION['email'];

											if($_SESSION['email']=''){
												echo "value=''";
											}else{
												echo "value='"; echo $emailhere; echo"'"; 
											};	
										}
										
									?> 
								
								required/>
							</div>
							<div class="form-group">
								<label for="InputPassword">Password</label>
								<input class="form-control" placeholder="Enter Password" type="password" name="psw" required/>
							</div>
							<br />
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary" name="login_btn">Login</button>
							</div>
							
							<div class="modal-footer">
								<h5>Open account:</h5>
								<a href="#" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#btnregister">Go Register</a>
							</div>
						</form><!-------------------------------------End Form----------------------->
						
					</div>

				</div>
			</div>
		</div><!-----------------------------End login modal------------------------------>
		

    <!--------------------Start modal--------------------------------->
  <div class="modal fade" id="btnlogout" tabindex="-1" role="dialog" aria-labelledby="modallabel1" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						
						<button type="button" class="close" data-dismiss="modal" aria-label="close">
							<span aria-hidden="true">&times;</span>
						</button>
						
					</div>
					<div class="modal-body">
						<!-- ---------------------Start form=------------------------------>
						<form  method="post" action="logout.php">
							<h3>Are you sure you want to logout?</h3><br />
							<div class="modal-footer">
		        				<button type="button" class="btn btn-primery" data-dismiss="modal">No, Stay logged in!</button>
		        				<button type="submit" class="btn btn-danger" name="login_btn">Yes, logout.</button>
      						</div>
						</form>
						<!-------------------------------------End Form----------------------->
					</div>

				</div>
			</div>
		
		</div>
		
		
		
		<!-----------------------------End modal------------------------------>

</html>