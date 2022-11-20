   <!-- Footer Area -->
   <footer class="footer-area">
       <div class="footer-top pt-100 pb-70">
           <div class="container">
               <div class="row">
                   <div class="col-lg-4 col-md-6">
                       <div class="single-footer-widget">
                           <a href="index.htm" class="logo">
                               <img src="{{ asset('logo.PNG') }}" alt="Logo">
                           </a>

                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6">
                       <div class="single-footer-widget">
                           <p>
                               Lorem ipsum dolor sit ame consectetur adisicing elitsed do eiusmod
                               tempor labet dolore magna aliquaUt
                           </p>
                           <ul class="social-link">
                               <li>
                                   <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                               </li>
                               <li>
                                   <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                               </li>
                               <li>
                                   <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                               </li>
                               <li>
                                   <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                               </li>
                               <li>
                                   <a href="#" target="_blank"><i class='bx bxl-youtube'></i></a>
                               </li>
                           </ul>
                       </div>
                   </div>

                   <div class="col-lg-2 col-md-6">
                       <div class="single-footer-widget">
                           <h3>الخدمات</h3>
                           <ul class="footer-list">
                               <li>
                                   <a href="services.html" target="_blank">
                                       <i class='bx bx-plus'></i>
                                       شراء العقارات
                                   </a>
                               </li>
                               <li>
                                   <a href="about.html" target="_blank">
                                       <i class='bx bx-plus'></i>
                                       من نحن؟
                                   </a>
                               </li>
                               <li>
                                   <a href="terms-condition.html" target="_blank">
                                       <i class='bx bx-plus'></i>
                                       شروط الخدمة
                                   </a>
                               </li>
                               <li>
                                   <a href="privacy-policy.html" target="_blank">
                                       <i class='bx bx-plus'></i>
                                       الخصوصية
                                   </a>
                               </li>
                           </ul>
                       </div>
                   </div>

                   <div class="col-lg-3 col-md-6">
                       <div class="single-footer-widget pl-3">
                           <h3>معلومات التواصل</h3>
                           <ul class="footer-contact-list">
                               <li>
                                   <span>الاثنين - الجمعة :</span> 9 am to 6 pm
                               </li>
                               <li>
                                   <span>السبت - الاحد :</span> 9 am to 2 pm
                               </li>
                               <li>
                                   <span>هاتف :</span> <a href="tel:2151234567"> 215 - 123 - 4567</a>
                               </li>
                               <li>
                                   <span>بريد إلكتروني :</span> <a href="mailto:info@Oftopinc.com">
                                       info@abahee.com</a>
                               </li>
                           </ul>
                       </div>
                   </div>

                   {{-- <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget pl-5">
                        <h3>Gallery</h3>
                        <ul class="footer-gallery">
                            <li>
                                <a href="#">
                                    <img src="assets/img/gallery/g-1.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/gallery/g-2.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/gallery/g-3.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/gallery/g-4.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/gallery/g-5.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/gallery/g-6.jpg" alt="image">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
               </div>
           </div>
       </div>

       <div class="footer-bottom">
           <div class="container">
               <div class="bottom-text">
                   <p>
                       Copyright ©2022. by
                       <a href="https://www.digitsmark.com/" target="_blank">Digitsmark</a>
                   </p>
               </div>
           </div>
       </div>
   </footer>
   <!-- Footer Area End -->


   <!-- Jquery Min JS -->
   <script src="{{ asset('home/assets/js/jquery-3.5.1.slim.min.js') }}"></script>
   <!-- Popper Min JS -->
   <script src="{{ asset('home/assets/js/popper.min.js') }}"></script>
   <!-- Bootstrap Min JS -->
   <script src="{{ asset('home/assets/js/bootstrap.min.js') }}"></script>
   <!-- Owl Carousel Min JS -->
   <script src="{{ asset('home/assets/js/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('home/assets/js/carousel-thumbs.js') }}"></script>
   <!-- Meanmenu JS -->
   <script src="{{ asset('home/assets/js/meanmenu.js') }}"></script>
   <!-- Magnific Popup JS -->
   <script src="{{ asset('home/assets/js/jquery.magnific-popup.min.js') }}"></script>
   <!-- Wow JS -->
   <script src="{{ asset('home/assets/js/wow.min.js') }}"></script>
   <!-- Nice Select JS -->
   <script src="{{ asset('home/assets/js/jquery.nice-select.min.js') }}"></script>
   <!-- Ajaxchimp Min JS -->
   <script src="{{ asset('home/assets/js/jquery.ajaxchimp.min.js') }}"></script>
   <!-- Form Validator Min JS -->
   <script src="{{ asset('home/assets/js/form-validator.min.js') }}"></script>
   <!-- Contact Form JS -->
   <script src="{{ asset('home/assets/js/contact-form-script.js') }}"></script>
   <!-- Custom JS -->
   <script src="{{ asset('home/assets/js/custom.js') }}"></script>

   <!-- wow js -->
   {{-- <script src="{{ asset('home/js/wow.min.js') }}"></script> --}}
   <script>
       new WOW().init();
   </script>
