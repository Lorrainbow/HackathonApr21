<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Circular Community Skill Share</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
         
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="index.html">Home</a> </li>
                      <li> <a href="#circular">Circular Economy</a> </li>
                      <li> <a href="#skillshare">Skill Share</a> </li>
                      <li> <a href="#testimonial">Testomonial</a> </li>
                      <li> <a href="#contact">Contact Us</a> </li>
                     </ul>
                   </nav>
                 </div>
               </div> 
              </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"> -->
                    <div class="text-bg">
                     
					 
			 		 <?php
					$mysqli = new mysqli("localhost","SECRET","SECRET","SECRET");

					// Check connection
					if ($mysqli -> connect_errno) {
					  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
					  exit();
					}

					$skill = $_GET['id'];
/*					
					$query = "call GetSkillAreaBreadcrumb(".$skill.")";					
					echo "<span>Viewing All Skills </span>";	
					echo $query;
			if ($result = $mysqli -> query($query)) 
			{		
				$firstRow = $result->fetch_row();
				$skillName = $firstRow[4];
				
				echo "<h2>".$skillName."</h2>";
				echo "<p><a href=viewSkillArea.php?id=".$firstRow[1].">".$firstRow[0]."</a> > ".$firstRow[2];
			}
			$result -> free_result();
			$mysqli -> close();*/
			$mysqli = new mysqli("localhost","SECRET","SECRET","SECRET");
					
	
					
					$query = "call GetSkillAreaEvents(".$skill.")";
					echo $query;
					
								
					if ($result = $mysqli -> query($query)) 
					{		
						$counter = 0;
						while ($row = $result->fetch_assoc())	
						{
							if ($counter == 0)
							{
								//??
								echo ("<h2>".$row['Skill_Area_Name']."</h2>");
								echo ("<h2>Events</h2>");
								echo ("<table border='1'><tr><th>Name</th><th>Description</th><th>Location</th><th>Date</th><th>Skill</th></tr>");
								echo("<tr><td>".$row['Event_Name']."</td><td>".$row['Event_Description']."</td><td>".$row['Event_Location']."</td><td>".$row['Event_Date']."</td><td>".$row['Skill_Name']."</td></tr>");
								$counter = 1;
							}
							else
							{
								
								
								echo ("<tr>");
								echo("<td>".$row['Event_Name']."</td><td>".$row['Event_Description']."</td><td>".$row['Event_Location']."</td><td>".$row['Event_Date']."</td><td>".$row['Skill_Name']."</td>");
								echo ("</tr>");
							}
						}
						echo ("</table>");


					  $result -> free_result();
					}

					?>
					 
                    <h2>Register</h2>
					<p>Offer this skill</p>
					  
                    </div>
                  <!-- </div>-->
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                      <span>What next</span>
					  <h2>Join in</h2>
					  <p>On the left are the number of people offering this skill and upcoming events. Select an event to view it's details and join it. </p><p>If there are no events or the events don't suit you, you can leave a message on this skill. 		  </p><p>Do you want to offer this skill? Register yourself to offer this skill and add your events
                    </div>
                  </div>
				 </div>
				  
                </div>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>

</section>
     <!-- end header -->

</header>

    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
             <a href="#" class="logo_footer"> <img src="images/logo.png" alt="#"/></a>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Address </h3>
                    <ul class="loca">
                      <li>
                        <a href="#"></a>Established in Wray
                        <br>Lancashire, UK</li>
                        <li>
                          <a href="#"></a>(+44 1234567890) </li>
                          <li>
                            <a href="#"></a>demo@gmail.com</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Social Link</h3>
                          <ul class="Menu_footer">
                            <li class="active"> <a href="#">Twitter</a> </li>
                            <li><a href="#">Facebook</a> </li>
                            <li><a href="#">Instagram</a> </li>
                            <li><a href="#">Linkdin</a> </li>
                          </ul>
                        </div>
                      </div>
                     

                      <div class="col-lg-4 col-md-6 col-sm-6 ">
                        <div class="address">
                          <h3>Newsletter</h3>
                           <form class="news">
                           <input class="newslatter" placeholder="Enter your email" type="text" name=" Enter your email">
                            <button class="submit">Subscribe</button>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>Copyright © 2019 Design by <a href="https://html.design/">Free Html Templates </a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>





</body>

</html>