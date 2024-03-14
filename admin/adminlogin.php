

   <div class="container tm-container">
            
            <div class="row navbar-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 navbar-container">
                    
                    <a href="javascript:void(0)" class="navbar-brand" id="go-to-top"> Department of CSE </a>
                    
                    <nav class="navbar navbar-full">
                        
                        <div class="collapse navbar-toggleable-md" id="tmNavbar">                            

                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-1">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-2">LOG IN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-3">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-4">Contact</a>
                                </li>
								
                            </ul>

                        </div>

                    </nav>    
                    
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                        &#9776;
                    </button>
                    
                </div>
            </div>
            
            
            <div class="tm-page-content">                
                
                <!-- #home -->
               
                <!-- #services -->
                <section id="tm-section-2" class="row tm-section">
                    <div class="tm-flex-center col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-6">
                        <img src="img/strip-01.png" alt="Image" class="img-fluid tm-img">
                    </div>

                    <div class="tm-white-curve-right col-xs-12 col-sm-6 col-md-6 col-lg-7 col-xl-6">
                        
                        <div class="tm-white-curve-right-circle"></div>
                        <div class="tm-white-curve-right-rec"></div>
                        
                        <div class="tm-white-curve-text">
                            <h2 class="tm-section-header red-text">LOG IN</h2>
							<form method = "post" role ="login">
								 <div class="form-group">
								 <label>Username</label>
                                    <input type="text" id="user" name="user_email" class="form-control" placeholder="Username"  required/>
                                </div>
                                <div class="form-group">
								<label>Password</label>
                                    <input type="password" id="pass" name="user_pass" class="form-control" placeholder="Password"  required/>
                                </div>
								<div class="form-group">
								
                                     <button type="submit" class="btn submit-btn" name="btnLogin">LOGIN</button>
                                </div>
								</form>
                        </div>
                        
                    </div>
                </section> <!-- #services -->

                <!-- #about -->
                <section id="tm-section-3" class="row tm-section">
                    <div class="tm-white-curve-left col-xs-12 col-sm-6 col-md-6 col-lg-7 col-xl-6">
                        <div class="tm-white-curve-left-rec">
                            
                        </div>
                        <div class="tm-white-curve-left-circle">
                            
                        </div>
                        <div class="tm-white-curve-text">
                            <h2 class="tm-section-header gray-text">About</h2>
                            <p class="thin-font"></p>    
                        </div>
                        
                    </div>
                    <div class="tm-flex-center col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-6">
                        <img src="img/strip-02.jpg" alt="Image" class="img-fluid tm-img">
                    </div>
                </section> <!-- #about -->

                <!-- #contact -->
                <section id="tm-section-4" class="row tm-section">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-6 tm-contact-left">
                        <h2 class="tm-section-header thin-font col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Send a message</h2>
						
                        <form action="index.html" method="post" class="contact-form">

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 col-xl-6 tm-contact-form-left">
                                <div class="form-group">
                                    <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject"  required/>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 col-xl-6 tm-contact-form-right">
                                <div class="form-group">
                                    <textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="Message" required></textarea>
                                </div>
                                
                                <button type="submit" class="btn submit-btn">Send It Now</button>
                            </div>

                        </form>   
                    </div>

                    <div class="tm-white-curve-right col-xs-12 col-sm-6 col-md-6 col-lg-7 col-xl-6">
                        
                        <div class="tm-white-curve-right-circle"></div>
                        <div class="tm-white-curve-right-rec"></div>
                        
                        <div class="tm-white-curve-text">
                            
                            <h2 class="tm-section-header green-text">Contact Us</h2>
                            <p></br>
                            Department of Computer Science and Engineering
Academic Building, Dept. of CSE, BSFMSTU

<br>EMAIL</br>
info@bsfmstu.ac.bd
<br>
PHONE
+8802-223377503
+8802-223377506 </br></p>

                           
                            
                        </div>                        

                    </div>
                </section> <!-- #contact -->

                <!-- footer -->
                <footer class="row tm-footer">
                    
                   <?php include_once ("footer.php"); ?>
                    
                </footer>                      

            </div>
             
        </div> <!-- .container -->
        
        <!-- load JS files -->

       		
		<script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
        <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        
        <!-- Templatemo scripts -->
        <script>     

        var bigNavbarHeight = 90;
        var smallNavbarHeight = 68;
        var navbarHeight = bigNavbarHeight;                 
    
        $(document).ready(function(){

            var topOffset = 180;

            $(window).scroll(function(){
               
                if($(this).scrollTop() > topOffset) {
                    $(".navbar-container").addClass("sticky");
                }
                else {
                    $(".navbar-container").removeClass("sticky");
                }

            });

            /* Single page nav
            -----------------------------------------*/

            if($(window).width() < 992) {
                navbarHeight = smallNavbarHeight;
            }

            $('#tmNavbar').singlePageNav({
               'currentClass' : "active",
                offset : navbarHeight
            });


            /* Collapse menu after click 
               http://stackoverflow.com/questions/14203279/bootstrap-close-responsive-menu-on-click
            ----------------------------------------------------------------------------------------*/

            $('#tmNavbar').on("click", "a", null, function () {
                $('#tmNavbar').collapse('hide');               
            });

            // Handle nav offset upon window resize
            $(window).resize(function(){
                if($(window).width() < 992) {
                    navbarHeight = smallNavbarHeight;
                } else {
                    navbarHeight = bigNavbarHeight;
                }

                $('#tmNavbar').singlePageNav({
                    'currentClass' : "active",
                    offset : navbarHeight
                });
            });
            

            /*  Scroll to top
                http://stackoverflow.com/questions/5580350/jquery-cross-browser-scroll-to-top-with-animation
            --------------------------------------------------------------------------------------------------*/
            $('#go-to-top').each(function(){
                $(this).click(function(){ 
                    $('html,body').animate({ scrollTop: 0 }, 'slow');
                    return false; 
                });
            });
            
        });
    
        </script>             


	
	
