<?php

	include 'register.php';
	include 'login.php';
    include 'stay.php';
	
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="../assets/img/logo/loder.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="col-xl-14">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-Right">
                                <ul>     
                                    <li>online bus system</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-9 col-lg-5">
                            <div class="logo">
                            <h3 style="color:white">Online System</h3>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-5">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav> 

                                  


                                        <ul id="navigation">                                                                                          
                                            
                                            <li><a href="#reports">REPORTS</a></li>
                                            <!-- <li><a href="Mytrucks.php">My Trucks</a></li>                              -->
                                            <li><a href="" data-dismiss="modal" data-toggle="modal" data-target="#btnregister">APPROVE APPLICATION</a></li>  
                                            <!-- <a href="#" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#btnregister">Go Register</a>                            -->
                                              
                                           <li ><a href="logout.php" >Logout</a></li>
                                           
                                            <!-- <li><a href="#" class="btn header-btn btn-warning" data-toggle="modal"  data-dismiss="modal" data-target="#btnregister"><b>Register</b></a></li> -->
                                    </div>
                                        </ul>
                                    </nav>


                                    



                                </div>
                                <!-- Header-btn -->
                                
                            </div>
                        </div> 
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>







        <!-- ======= Featured Services Section Section ======= -->
        <section id="reports">
        <div class="" data-aos="fade-up" style="margin:20px">







          <div class="container">
            <br/>
          
            <a href="#addLoads"  data-toggle="tooltip" title="Add new loads" style="font-size: 50px;" >
              <span class="glyphicon glyphicon-plus-sign "  ></span>
            </a>
      
        

          </div>



          <div class="">

            <div class=" box">
              <header class="section-header">
                
                <h3>DAILY REPORT ON LEARNERS: <?php echo date('Y/M/d')?></h3>
                <h3>LEARNERS ON THE WAITING LIST: <?php echo date('Y/M/d')?></h3>
              </header>


            <div class="scrollme">

              <table class="scrollme table" >

                <thead>
                <!-- <th scope="col" class="border-0 bg-light">
                    <div class="p-2 text-uppercase"></div>
                  </th> -->

                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 text-uppercase">learner name</div>
                  </th>

  					
                  <th scope="col" class="border-0 bg-light" >
                  
                    <div class="py-2 text-uppercase">parent name</div>

                  </th>
                  
                  <th scope="col" class="border-0 bg-light" >
                  
                    <div class="py-2 text-uppercase">bus route</div>

                  </th>
                  <th scope="col" class="border-0 bg-light" >
                  
                    <div class="py-2 text-uppercase">Application Date</div>

                  </th>



                 

                    


                </thead>


                <tbody >


                  <?php
            
                   $user_id = $_SESSION['user_id'];

                    $result = "SELECT l.learnerID,l.learner_first_name,p.parent_first_name,br.bus_route_name,br.application_status,br.waiting_list_date
                    FROM learners l,parents p,bus_routes br
                    WHERE p.parentID = l.parentID
                    AND br.learnerID = l.learnerID

                    ORDER BY br.waiting_list_date DESC";


                  $num =0;
                  $numApproved =0;
                foreach($db->query($result) as $row)
                {
                  


                  $learnerfirstname = $row['learner_first_name'];
                  $parentfirstname = $row['parent_first_name'];
                  $applicationStatus = $row['application_status'];

                  $bus_route_name = $row['bus_route_name'];
                  $waiting_list_date = $row['waiting_list_date'];

                  if ($applicationStatus == "waiting list") {
                    $num=$num+1;
                    # code...
                  }else{
                    # code...
                    $numApproved= $numApproved+1;
                  }
                  
                  


                
                  ?> 
                
                <tr>

                <!-- <td class='align-middle' style='text-align:center'>
                  <form action="" method="post" id='myform' >
                      <div class="form-group text-center " style="margin-bottom:0px">

                        <div class="py-2 text-uppercase "><button type='submit'  id="applyId" class="border-0 text-primary" name="applyId"  value="<?php echo $row['learnerID'] ?>">Details</button></div>

                      </div>
                  </td> -->



                  <td >
                    <?php echo $learnerfirstname?>
                  </td>
                  
                   <td >
                    <?php echo $parentfirstname?>
                  </td>
                  
                 
                  
                  

                  <td > 
                    <?php echo $bus_route_name;?>
                  </td>

                   <td>
                   <?php echo $waiting_list_date?>
                   </td>           

                </tr>
                  <?php 

                  }
                  ?> 
                  
                  </form>






                  <?php
$_SESSION['applyId']=10000000;
                    if (isset($_POST['applyId'])){
                    

                      if(isset($_POST['applyId'])){    
                        
                        $_SESSION['applyId']=$_POST['applyId'];

                        
                         
                  
                        echo "<script>
                        window.location.href = 'apply.php';

                        </script>";

                        echo "</div>";

                      }else{


                        echo "<script>
                        
                          alert('Error occured, contact Transmatta directly');

                        </script>";
                      };

                    };

                    ?>


                    <!------------------------------------------------- test ------------------------------------------------------------------->




                </tbody >
                
              </table>


              </div>

              <h4>Number of learners on the waiting list: <?php echo $num?></h4>
              <h4>Number of learners who are Approved : <?php echo $numApproved?></h4>

                  <br/>
                  <br/>


            </div>

          
   
     </section><!-- End Intro Section -->




<h4>DAILY REPORT ON LEARNERS USING THE BUS ONLY IN THE AFTERNOON: <?php echo date('Y/M/d')?></h4>



<?php
$conn = mysqli_connect("localhost", "root", "", "busonline");
$rows = mysqli_query($conn, "SELECT * FROM dropoffs");
?>
<table border = 1 cellpadding = 10>
  <tr>
    <td>#</td>
    <td>drop_off_number</td>
    <td>drop_off_name</td>
    <td>drop_off_time</td>
    <td>bus_route_number</td>
  </tr>
  <?php $i = 1; ?>
  <?php foreach($rows as $row) : ?>
    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $row["drop_off_number"]; ?></td>
      <td><?php echo $row["drop_off_name"]; ?></td>
      <td><?php echo $row["drop_off_time"]; ?></td>
      <td><?php echo $row["bus_route_number"]; ?></td>
    </tr>
  <?php endforeach; ?>
</table>
<br> 

<h4>WEEKLY REPORT, ON LEARNERS WHO TAKE THE BUS NOT OFTEN,ON PER WEEK:<?php echo date('Y/M/d')?></h4>
<?php
$conn = mysqli_connect("localhost", "root", "", "busonline");
$rows = mysqli_query($conn, "SELECT * FROM learners");
?>
<table border = 1 cellpadding = 10>
  <tr>
    <td>#</td>
    <td>learner_first_name</td>
    <td>learner_last_name</td>
    <td>learner_cell_phone_number</td>
    <td>grade</td>
  </tr>
  <?php $i = 1; ?>
  <?php foreach($rows as $row) : ?>
    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $row["learner_first_name"]; ?></td>
      <td><?php echo $row["learner_last_name"]; ?></td>
      <td><?php echo $row["learner_cell_phone_number"]; ?></td>
      <td><?php echo $row["grade"]; ?></td>
    </tr>
  <?php endforeach; ?>
</table>

<br>

<h4>OTHER REPORT,THE NUMBER OF STUDENT WHO PARENTS ARE ACTIVE AT REGISTERING THEIR LEARNER EACH YEAR:</h4>
<?php
$conn = mysqli_connect("localhost", "root", "", "busonline");
$rows = mysqli_query($conn, "SELECT * FROM parents");
?>
<table border = 1 cellpadding = 10>
  <tr>
    <td>#</td>
    <td>parent_first_name</td>
    <td>parent_last_name</td>
    <td>email</td>
    <td>password</td>
	<td>cell_number</td>
  </tr>
  <?php $i = 1; ?>
  <?php foreach($rows as $row) : ?>
    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $row["parent_first_name"]; ?></td>
      <td><?php echo $row["parent_last_name"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["password"]; ?></td>
	  <td><?php echo $row["cell_number"]; ?></t
    </tr>
  <?php endforeach; ?>
</table>


 <!-- ======= Intro Section ======= -->
 <br/>
  <section id="myVehicles">
    <div class="intro-container">
      
       <header class="section-header">
          <h3>Actions</h3>
         
        </header>
      <div class="text-center">
 	
    
      <div class="" style="margin:20px">
		<!-- <div class="card">
			
				
      
      </div>		 -->
      
      <a href="#" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#btnregister">Approve Learners</a>
			
			
  </section><!-- End Intro Section -->













    <!-- contact-form end -->
    
</main>
<footer>
    <!--? Footer Start-->
    <div class="footer-area footer-bg">
        
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-12">
                        <div class="footer-copy-right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Online bus registration system (Pty) Ltd (Pty) Ltd </a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
       
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

    <!-- JS here -->

    <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/animated.headline.js"></script>
    <script src="../assets/js/jquery.magnific-popup.js"></script>

    <!-- Nice-select, sticky -->
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="../assets/js/contact.js"></script>
    <script src="../assets/js/jquery.form.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/mail-script.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>
    
</body>






<!--------------------Start Register modal--------------------------------->
<div class="modal fade" id="btnregister" tabindex="-1" role="dialog" aria-labelledby="modallabel1" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">

					<div class="modal-header">
						<h4 class="modal-title" id="modallabel1">Learner Bus Approval form:</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="close">
							<span aria-hidden="true">&times;</span>
						</button>

					</div>

					<div class="modal-body">

						<!-- --------Start register form=-------------------->
						<form method="post" action="register.php" autocomplete="off">

              <div class="form-group">
								<label for="childid">Child name and surname:</label>
								

                
                  <?php 
                    
                    $user_id = $_SESSION['user_id'];
                    

                    $result = "SELECT l.learnerID,l.learner_first_name,l.learner_last_name,br.application_status
                    FROM learners l,bus_routes br
                    WHERE br.learnerID = l.learnerID
                    AND br.application_status = 'waiting list'
                    ORDER BY br.waiting_list_date DESC";
                    
                  
                    
                  $results1 = mysqli_query($db,$result);
                

                ?> 
                <select name="childid" id="childid">
                <option selected disabled>Select</option>
                  <?php while ($row1 = mysqli_fetch_array($results1)):; ?>
                    <option value="<?php echo $row1['learnerID'];?>"><?php echo $row1['learner_first_name']." ".$row1['learner_last_name'];?></option>
                    <?php endwhile;?>
                  
                </select>
							</div>
              <div class="form-group">
								<label for="approve">Approve Application:</label>
							
                <select name="approve" id="approve">
                  
                    <option selected disabled>Select</option>
                    <option value="Approve">Approve</option>
                    
                  
                </select>
							</div>
              

							
							
						
								<button type="submit" class="btn btn-primary" name="approveChildBtn">Approve Learner</button>
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
						<form  method="post" action="onlinebusregistrationsystem/login.php" autocomplete="off">
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
              <a href="transmatta/forget-password.php" class="btn btn-primary">Forgot Password</a>
								<h5>Open account:</h5>
								<a href="#" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#btnregister">Go Register</a>
							</div>
						</form><!-------------------------------------End Form----------------------->
						
					</div>

				</div>
			</div>
		</div><!-----------------------------End login modal------------------------------>



</html>