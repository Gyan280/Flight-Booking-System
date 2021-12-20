<?php
session_start();
?>
<!DOCTYPE html>
    <html lang="en">
      <!--<![endif]-->
      <!-- BEGIN HEAD -->
      <head>
        <meta charset="utf-8" />
        <title>Alliance Flight - Tours and Travels Online Booking HTML</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta name="description" content="Travelite - Tours and Travels Online Booking HTML" />
        <meta name="keywords" content="Travel, html template, Travelite template">
        <meta name="author" content="Kamleshyadav" />
        <meta name="MobileOptimized" content="320">
        <!--bootsrap cdn-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!--srart theme style -->
        <link href="css/main.css" rel="stylesheet" type="text/css" />
        <!-- end theme style -->
        <!-- favicon links -->
        <link rel="shortcut icon" type="image/ico" href="favicon.ico" />
        <link rel="icon" type="image/ico" href="favicon.ico" />
      </head>
      <body class="travel_home">
	  <!--Page loading start-->
<div class="travel_page_loader">
 <div class="travel_loading_bar_wrapper">
     <div class="travel_loading_bar">
         <span class="from"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="49px" viewBox="0 0 30 49" enable-background="new 0 0 30 49" xml:space="preserve"><path fill="#86B940" d="M15.053,4.626c6.334,0,11.488,5.166,11.488,11.514c0,6.35-5.153,11.515-11.488,11.515c-6.335,0-11.489-5.166-11.489-11.515C3.564,9.792,8.718,4.626,15.053,4.626 M15.053,1.26c-8.201,0-14.849,6.661-14.849,14.881c0,8.22,14.849,32.359,14.849,32.359s14.849-24.14,14.849-32.359S23.255,1.26,15.053,1.26z M17.197,21.558v1.444h1.701V6.772h-7.69V7.7h6.876v1.186h-6.876v14.115h1.776v-1.443L17.197,21.558L17.197,21.558z M15.718,10.146h2.292v2.298h-2.292V10.146z M15.7,14.108h2.292v2.299H15.7V14.108z M15.7,18.037h2.292v2.295H15.7V18.037z M12.133,10.146h2.292v2.298h-2.292V10.146z M12.114,14.108h2.292v2.299h-2.292V14.108z M12.114,20.333v-2.295h2.292v2.295H12.114z M17.197,23.188v-0.186h-4.213v0.186H8.695v1.631h12.717v-1.631H17.197z"/></svg></span>
            <span class="to">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="49px" viewBox="0 0 30 49" enable-background="new 0 0 30 49" xml:space="preserve"><path fill="#86B940" d="M15.001,3.636c6.369,0,11.55,5.193,11.55,11.577c0,6.383-5.181,11.58-11.55,11.58c-6.372,0-11.551-5.197-11.551-11.58C3.45,8.829,8.629,3.636,15.001,3.636 M15.001,0.25C6.753,0.25,0.07,6.952,0.07,15.213c0,8.265,14.931,32.537,14.931,32.537s14.93-24.272,14.93-32.537C29.931,6.952,23.244,0.25,15.001,0.25z M13.871,20.894l1.182-0.003V20.88h-0.005l0.005-0.038V20.62c-0.013-0.187,0-1.001,0-1.001c-0.118-1.364-0.671-3.527-2.869-4.981c-0.042-0.025-1.077-0.676-1.439-2.202c-0.355-1.505,0.07-3.29,1.265-5.305c-1.594,1.002-2.658,2.775-2.658,4.803c0,1.745,0.795,3.307,2.034,4.343c0,0,0.39,0.301,0.506,0.378C14.083,18.362,13.871,20.894,13.871,20.894z M17.594,14.451c0.013-0.002,1.19-0.681,1.269-2.161c0.086-1.549-0.23-3.436-1.508-5.498C16.72,6.497,16.02,6.32,15.283,6.283v12.016C15.612,17.022,15.927,15.552,17.594,14.451z M11.364,12.256c0.082,1.476,1.257,2.156,1.27,2.161c1.666,1.102,1.983,2.571,2.312,3.847V6.248c-0.738,0.036-1.436,0.214-2.071,0.508C11.6,8.819,11.282,10.707,11.364,12.256z M17.354,6.787v0.004l0.031,0.012L17.354,6.787z M18.113,7.107c1.295,2.104,1.836,3.727,1.465,5.288c-0.357,1.523-1.395,2.176-1.438,2.201c-2.14,1.412-2.718,3.504-2.856,4.873v1.423h1.237c0,0-0.03-2.824,1.757-4.35c1.617-1.093,2.369-2.708,2.369-4.606C20.646,9.819,19.823,8.08,18.113,7.107z M15.252,20.911h0.032v-0.02h-0.031L15.252,20.911z M13.695,24.404h3.116v-3.116h-3.116V24.404z"/></svg></span>
         <div class="travel_loading_bar_overlay" style="width:0%;">
             <span class="pointer"><img src="images/icon/loading_plane.svg" alt="" /></span>
             <span class="pointer_val">0%</span>    
            </div>
        </div>
    </div>
</div>
<!--Page loading end-->
        <!--Page main section start-->
        <div id="travel_wrapper">
        <!--Header start-->
        <header id="header_wrapper">
          <div class="header_top">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <p><i class="fa fa-phone"></i> For Support? Call Us: <span>+233572077957</span></p>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="top_menu">
                    <ul>
                      <li>
                        <a href=""><i class="fa fa-globe"></i> Languages</a>
                        <ul class="sub-menu">
                          <li><a href="">English</a></li>
                          <li><a href="">France</a></li>
                          <li><a href="">German</a></li>
                        </ul>
                      </li>
                      <li><a href="">My Account</a></li>
                      <li class="Travelite_login_alert"><a href="#">Login</a></li>
                      <li class="Travelite_signup_alert"><a href="#">Signup</a></li>
                      <li>
                        <a href="">USD</a>
                        <ul class="sub-menu">
                          <li><a href="">INR</a></li>
                          <li><a href="">USD</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- popup form Start -->
          <div class="full_width login_wrapper">
            <div class="row">
              <div class="container">
                <div class="col-lg-5 col-md-5 col-sm-5 col-lg-offset-6 col-md-offset-6 col-sm-offset-6">
                  <!-- login form start -->
                  <div class="popup_alert_main Travelite_login_form">
                    <div class="login_heading"> login <span class="close_btn"><i class="fa fa-times"></i></span> </div>
                    <div class="popup_inner">
                      <form> 
                        <input type="email" name="emaillogin" placeholder="Email Id" class="input_login"> 
                        <input type="password" name="passlogin" placeholder="Password" class="input_login">
                        <input type="checkbox" id="login_check" name="checkbox" class="checkbox_login"> 
                        <label for="login_check" class="remember_me">Remember me</label>
                        <a href="#" class="forgot_link">Forget password?</a> 
                      </form>
                      <div class="have_an_acnt">
                        <p>Dont have an account? <a href="#">Sign up</a></p>
                      </div>
                      <div class="or_line"> <span>(OR)</span> </div>
                      <div class="social_links_login">
                        <ul>
                          <li class="facebook_login"><a href="#"><i class="fa fa-facebook"></i>Login with facebook</a></li>
                          <li class="gplus_login"><a href="#"><i class="fa fa-google-plus"></i>Login with Google+</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- login form  End -->
                  <!-- signup form start -->
                  <div class="popup_alert_main Travelite_signup_form">
                    <div class="login_heading"> signup <span class="close_btn"><i class="fa fa-times"></i></span> </div>
                    <div class="popup_inner">
                      <form class="signup_form">
                        <input type="text" name="emaillogin" placeholder="First Name" class="input_login"> 
                        <input type="text" name="emaillogin" placeholder="Last Name" class="input_login">
                        <input type="email" name="emaillogin" placeholder="Email Id" class="input_login">
                        <input type="password" name="passlogin" placeholder="Password" class="input_login"> 
                        <input type="password" name="conf passlogin" placeholder="Confirm Password" class="input_login"> 
                        <input type="checkbox" id="signup_check" name="checkbox" class="checkbox_login"> 
                        <label for="signup_check" class="remember_me">I agree the Terms of Service, Privacy Policy, Guest Refund Policy, and Host Guarantee Terms.</label> 
                        <input type="submit" value="SIGN UP" class="sub_signup">
                      </form>
                      <div class="or_line"> <span>(OR)</span> </div>
                      <div class="social_links_login">
                        <ul>
                          <li class="facebook_login"><a href="#"><i class="fa fa-facebook"></i>Login with facebook</a></li>
                          <li class="gplus_login"><a href="#"><i class="fa fa-google-plus"></i>Login with Google+</a></li>
                        </ul>
                      </div>
                      <div class="already_member"> already member? <a href="#">login here</a></div>
                    </div>
                  </div>
                  <!-- signup form  End -->
                </div>
              </div>
            </div>
          </div>
          <!-- popup form  End -->
          <div class="header_bottom">
            <div class="container">
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <div class="travel_logo">
                    <a href="Flight-Home.php">
						<img src="images\Home\Home4\airlogotemp46.png" alt="logo" />
						</a>
                  </div>
                </div>
                <div class="col-md-10 col-sm-10">
                  <a href="javascript:;" class="menu-toggle"></a>
                  <div class="main_menu">
                    <ul>
                      <li class="active">
                        <a href="Flight-Home.php">home</a>
                      </li>
                       <li><a href="Tour_Home.html">tours</a>
							<ul class="sub-menu">
							<li><a href="Tour_destination.html">Destination</a>
							  <ul class="sub-menu">
								<li><a href="tour_australia.php">Australia</a></li>
								<li><a href="tour_egypt.php">Egypt</a></li>
								<li><a href="tour_singapore.php">Singapore</a></li>
								<li><a href="tour_malaysia.php">Malaysia</a></li>
								<li><a href="tour_india.php">India</a></li>
								<li><a href="tour_nepal.php">Nepal</a></li>
								<li><a href="tour_russia.php">Russia</a></li>
							  </ul>
							<!-- </li>
							 <li><a href="Tour-Packages-Details.html">Tour Detail</a></li>
							 <li><a href="Tour-Packages-Booking.html">Booking</a></li>
							 <li><a href="Tour-Packages-Booking.html">Checkout</a></li>
							 <li><a href="Tour-Packages-Grid-View.html">tour-packages-grid-view</a></li>
							 <li><a href="Tour-Packages-List-View.html">tour-packages-list-view</a></li>
						  </ul>
                     </li> -->
                      <!-- <li>
                        <a href="Hotel-Home.html">hotels</a>
                        <ul class="sub-menu">
                          <li><a href="Hotel-Home.html">Hotel-Home</a></li>
                          <li><a href="Hotel-Grid-View.html">Hotel-Grid-View</a></li>
                          <li><a href="Hotel-list-View.html">Hotel-list-View</a></li>
                          <li><a href="Hotel-Details.html">Hotel-Details</a></li>
                          <li><a href="Hotel-Booking.html">Hotel-Booking</a></li>
                        </ul> -->
                      <!-- </li> -->
                      <!-- <li>
                        <a href="Flight-Home.html">flights</a>
                        <ul class="sub-menu">
                          <li><a href="Flight-Home.php">flight-Home</a></li> -->
                          <!-- <li><a href="Flights-Grid-with-sidebar.html">flights-Grid-with-sidebar</a></li>
                          <li><a href="Flights-List-view.html">flights-list-View</a></li>
                          <li><a href="Flights-Details.html">flights-Details</a></li>
                          <li><a href="Flights-Booking.html">flights-Booking</a></li> -->
                        </ul>
                      </li>
                      <!-- <li><a href="">cars</a></li> -->
                      <!-- <li><a href="">special offers</a></li> --> 
                      <li><a href="Contact.php">contact</a></li>
                      <li>
                        <a href="#">pages</a>
                        <ul class="sub-menu">
                          <li><a href="About.php">About</a></li>
                          <li><a href="Services.php">services</a></li> 
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!--Header end-->