   <!-- Footer Area -->
   <footer class="footer-area">
       <div class="footer-top pt-100 pb-70">
           <div class="container">
               <div class="row">
                   <div class="col-lg-4 col-md-6">
                       <div class="single-footer-widget">
                           <a href="{{ route('home') }}" class="logo">
                               <img src="{{ asset('abahee.png') }}" style="max-width: 150px" alt="Logo">
                           </a>
                           <h6>أضف بريدك الالكتروني لتصلك تحديثات أباهي مباشرة</h6>

                           <form action="{{ route('promoters') }}" method="POST">
                               @csrf
                               @extends('admin._layouts._error')
                               <div class="row">
                                   <input type="email" name="email" class="form-control col-sm-8"
                                       placeholder="أضف بريدك الالكتروني هنا">
                                   <button type="submit" class="btn btn-info col-sm-4">إضافة</button>

                               </div>
                           </form>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6">
                       <div class="single-footer-widget">
                           <p>
                               {{ setting('site_name') }}
                           </p>
                           <ul class="social-link">
                               @if (setting('snapchat_link'))
                                   <li>
                                       <a href="{{ setting('snapchat_link') }}" target="_blank"
                                           style="background-color: rgb(238, 255, 0)"><i
                                               class='bx bxl-snapchat'></i></a>
                                   </li>
                               @endif
                               @if (setting('twitter_link'))
                                   <li>
                                       <a href="{{ setting('twitter_link') }}" target="_blank"><i
                                               class='bx bxl-twitter'></i></a>
                                   </li>
                               @endif

                               @if (setting('tiktok_link'))
                                   <li>
                                       <a href="{{ setting('tiktok_link') }}" target="_blank"
                                           style="background-color: rgb(238, 255, 0)"><svg
                                               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3333 3333"
                                               shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                                               image-rendering="optimizeQuality" fill-rule="evenodd"
                                               clip-rule="evenodd">
                                               <path
                                                   d="M1667 0c920 0 1667 746 1667 1667 0 920-746 1667-1667 1667C747 3334 0 2588 0 1667 0 747 746 0 1667 0zm361 744c31 262 177 418 430 434v294c-147 14-276-34-426-124v550c0 700-763 918-1069 417-197-322-76-889 556-911v311c-48 8-99 20-146 36-141 47-220 137-198 294 43 301 595 390 549-198V745h305z" />
                                           </svg></a>
                                   </li>
                               @endif
                               @if (setting('instagram_link'))
                                   <li>
                                       <a href="{{ setting('instagram_link') }}" target="_blank"><i
                                               class='bx bxl-instagram'></i></a>
                                   </li>
                               @endif
                               {{-- @if (setting('whatsapp_link'))
                                   <li>
                                       <a style="background-color: #18d93f;"
                                           href="https://api.whatsapp.com/send?phone={{ setting('whatsapp_link') }}"
                                           target="_blank"><i class='bx bxl-whatsapp'></i></a>
                                   </li>
                               @endif --}}
                           </ul>
                       </div>
                   </div>

                   {{-- <div class="col-lg-2 col-md-6">
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
                </div> --}}

                   <div class="col-lg-3 col-md-6">
                       <div class="single-footer-widget pl-3">
                           <h3>معلومات التواصل</h3>
                           <ul class="footer-contact-list">
                               <li>
                                   <span>الاثنين - الجمعة :</span>9 صباحا - 6 مساء
                               </li>
                               <li>
                                   <span>السبت - الاحد :</span> 9 صباحا - 2 مساء
                               </li>
                               {{-- <li>
                                   <span>هاتف :</span> <a href="tel:{{ setting('site_phone') }}">
                                       {{ setting('site_phone') }}</a>
                               </li>
                               <li>
                                   <span>هاتف 2 :</span> <a href="tel:{{ setting('site_phone2') }}">
                                       {{ setting('site_phone2') }}</a>
                               </li> --}}
                               <li>
                                   <span>بريد إلكتروني :</span> <a href="mailto:{{ setting('site_email') }}">
                                       {{ setting('site_email') }}
                                   </a>
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
                       <a href="https://www.digitsmark.com/" target="_blank">Digitsmark</a>
                       Copyright ©2022. by
                   </p>
               </div>
           </div>
       </div>
   </footer>
   <!-- Footer Area End -->

   {{-- <div id="" class="top-btn"
       style="position: fixed;
                bottom: 20px;
                right: 20px;
                cursor: pointer;
                background-color: #18d93f;">
       <a style="color: white !important" href="https://api.whatsapp.com/send?phone={{ setting('whatsapp_link') }}"
           target="_blank"><i class='bx bxl-whatsapp'></i></a>
   </div> --}}

   <!-- Jquery Min JS -->
   <script src="{{ asset('home/assets/js/jquery-3.5.1.slim.min.js') }}"></script>
   <!-- Popper Min JS -->
   {{-- <script src="{{ asset('home/assets/js/popper.min.js') }}"></script> --}}
   <!-- Bootstrap Min JS -->
   <script src="{{ asset('home/assets/js/bootstrap.min.js') }}"></script>
   <!-- Owl Carousel Min JS -->
   <script src="{{ asset('home/assets/js/owl.carousel.min.js') }}"></script>
   {{-- <script src="{{ asset('home/assets/js/carousel-thumbs.js') }}"></script> --}}
   <!-- Meanmenu JS -->
   <script src="{{ asset('home/assets/js/meanmenu.js') }}"></script>
   <!-- Magnific Popup JS -->
   <script src="{{ asset('home/assets/js/jquery.magnific-popup.min.js') }}"></script>
   <!-- Wow JS -->
   {{-- <script src="{{ asset('home/assets/js/wow.min.js') }}"></script> --}}
   <!-- Nice Select JS -->
   {{-- <script src="{{ asset('home/assets/js/jquery.nice-select.min.js') }}"></script> --}}
   <!-- Ajaxchimp Min JS -->
   {{-- <script src="{{ asset('home/assets/js/jquery.ajaxchimp.min.js') }}"></script> --}}
   <!-- Form Validator Min JS -->
   {{-- <script src="{{ asset('home/assets/js/form-validator.min.js') }}"></script> --}}
   <!-- Contact Form JS -->
   {{-- <script src="{{ asset('home/assets/js/contact-form-script.js') }}"></script> --}}
   <!-- Custom JS -->
   <script src="{{ asset('home/assets/js/custom.js') }}?v=4"></script>

   <!-- wow js -->
   {{-- <script src="{{ asset('home/js/wow.min.js') }}"></script> --}}
   {{-- <script>
    new WOW().init();
</script> --}}

   <script>
       $('.maps').click(function() {
           $('.maps iframe').css("pointer-events", "auto");
       });

       $(".maps").mouseleave(function() {
           $('.maps iframe').css("pointer-events", "none");
       });
   </script>
