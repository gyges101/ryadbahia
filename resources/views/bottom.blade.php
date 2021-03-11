
        <section class="newsletter-section sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="offer-title text-center">
                            <h2>Sign Up for a Newsletter</h2>
                            <p>Sign up for our mailing list to get latest updates and offers.</p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" placeholder="Enter your email">
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Footer bottom section -->
        <footer class="footer sec-padding">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="footer-widget about-widget"><a class="logo" href="index.html"><img src="img/logo/logob.png" alt="Awesome Image"></a>
                       <p>Les Jardins de Ryad Bahia offers friendly accommodation not far from the medina. The guest house has a seasonal outdoor pool, barbecue and sun terrace</p>
                        <div class="link"><a href="{{ url('/about') }}">MORE ABOUT US</a> </div>
          
                      </div>
                    </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-widget links-widget links-widget-pac">
                          <div class="title">
                            <h4>Links</h4>
                    
                          </div>
                          <div class="row">
                            <div class="col-md-12 col-sm-12">
                              <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/about') }}">About Us</a></li>
                                <li><a href="{{ url('/services') }}">Services</a></li>
                                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
          
                    </div>
          
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="footer-widget subscribe-widget">
                        <div class="title">
                          <h4>Subscribe Newsletter</h4>
                        </div>
                        <form action="#">
                          <p>Get latest updates and offers.</p>
                          <div class="newsletter-widget">
                            <input type="text" placeholder="Enter your email address">
                            <button type="submit" class="ped-btn-footer">SUBSCRIBE US</button>
                          </div>
                        </form>
          
                      </div>
                    </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-widget subscribe-widget">
                          <div class="title">
                            <h4>Contact Us</h4>
                          </div>
                          <div class="tel-box">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <div class="text">
                              <p>Riad Al Menzeh N28 Route d'Agouray - Meknes</p>
                            </div>
                          </div>
                          <div class="tel-box">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <div class="text">
                              <p>+212-662-082-864 <br> +212-661-815-237</p>
                            </div>
                          </div>
                          <div class="tel-box">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <div class="text">
                              <p><a href="#">contact@ryad-bahia.com</a></p>
                            </div>
                          </div>
          
                          <ul class="social list-inline">
                            <li><a href="https://www.facebook.com/JardinsRyadBahiaMeknes" target='_blank'><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/ryadbahia" target='_blank'><i class="fa fa-instagram"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
          
                  </div>
                </div>
              </footer>
        <!-- End Footer bottom section -->
        <section class="footer-bottom">
                    <div class="container clearfix">
                    <center>
                        <h5>Copyright © <a href="https://redabenhamid.herokuapp.com" target='_blank'> Reda Benhamid </a> <span id='year'></span>. All rights reserved. </h5>
                    </center>
                    </div>
                  </section>
		
		<!-- all js files -->

        <script>document.getElementById("year").innerHTML = new Date().getFullYear();</script>

		<!-- jquery latest version -->
		<script src="js/marco/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Counter js -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- waypoint js -->
		<script src="js/waypoints.js"></script>
		<!-- isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- stellar js -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- stellar js -->
        <script src="js/imagelightbox.min.js"></script>
		<!-- magnific js -->
        <script src="js/magnific.min.js"></script>
		<!-- venobox js -->
		<script src="js/venobox.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- Form validator js -->
		<script src="js/form-validator.min.js"></script>
		<!-- plugins js -->
		<script src="js/plugins.js"></script>
        <!-- tabs js -->
        <script src="js/tabs.js"></script>
        <!-- datapicker js -->
        <script src="js/zebra_datepicker.min.js"></script>
		<!-- main js -->
		<script src="js/main.js"></script>
	</body>

</html>