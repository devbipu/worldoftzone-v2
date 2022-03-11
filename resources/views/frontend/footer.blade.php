    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-1">
                    <a href="{{ url('/') }}" class="footer-logo">
                        <img width="100%" height="100%" src="{{ asset('assets') }}/img/logo-white.png">
                    </a>
                    <p class="footer_tagline">
                        WorldSoftZone is a reliable IT service partner, which works as a web development organization including mobile application, software development, graphic designing and as a virtual assistant together. What we create is our passion. We consider ourselves not just geeks but artists at the heart. With each project we don't just make clients but we make a long-term relationship where we gain friends.
                    </p>
                </div>
                <div class="col-2">
                    <h1>Quick link</h1>
                    <ul>
                        <li>
                            <a href="{{url('about')}}">About us</a>
                        </li>
                        <li>
                            <a href="{{url('contact')}}">Contact</a>
                        </li>
                        <li>
                            <a href="{{url('portfolio')}}">Portfolios</a>
                        </li>
                        <li>
                            <a href="{{url('dedicated-team')}}">Our Team</a>
                        </li>
                        <li>
                            <a href="{{url('why-choose-us')}}">Why Choose us</a>
                        </li>
                        <li>
                            <a href="{{url('reviews')}}">Client Reviews</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-3">
                    <h1>Services</h1>
                    <ul>
                        <li>
                            <a href="{{ url('web-services/website-development') }}">Web Design & Development</a>
                        </li>
                        <li>
                            <a href="{{url('web-services/convert-website')}}">HTML to PHP/Laravel/WordPress</a>
                        </li>
                        <li>
                            <a href="{{url('web-services/convert-website')}}">PSD to WordPress</a>
                        </li>
                        <li>
                            <a href="{{url('web-services/convert-website')}}">Clone any Website</a>
                        </li>
                        <li>
                            <a href="{{url('virtual-assistant#data_entry')}}">Data Entry Online & Offline</a>
                        </li>
                        <li>
                            <a href="{{url('virtual-assistant#digital_marketing')}}">Digital Marketing</a>
                        </li>
                        <li>
                            <a href="{{url('virtual-assistant#seo')}}">Search Engine Optimization</a>
                        </li>
                    </ul>
                </div>
                <div class="col-4">
                    <h1>Bangladesh Office</h1>
                    <ul class="contact-office">
                        <li>
                            <strong>Dhaka Office</strong>
                            <span>Savar, Dhaka 7100</span>
                            <span>Phone 01841-329495</span>
                            <span>Email contact@worldsoftzone.com</span>
                        </li>
                        <li>
                            <strong>Meherpur Office</strong>
                            <span>Parents Home, Meherpur 7100</span>
                            <span>Phone 01841-329494</span>
                            <span>Email contact@worldsoftzone.com</span>
                        </li>
                    </ul>
                </div>
                <div class="col-5">
                    <h1>Foreign Office</h1>
                    <ul class="contact-office">
                        <li>
                            <strong>USA Office</strong>
                            <span>Denton, TX 76210, USA</span>
                            <span>Phone +1 (260) 297-0654</span>
                            <span>Email contact@worldsoftzone.com</span>
                        </li>
                        <li>
                            <strong>Germany Office</strong>
                            <span>Konsul Francke Strasse 7, 21075 Hamburg, Germany</span>
                            <span>Phone +4917632383640</span>
                            <span>Email contact@worldsoftzone.com</span>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="Footer-Bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1">
                        <p>&copy; 2020 - <?php echo date("Y"); ?> WORLDSOFTZONE. All rights reserved.</p>
                    </div>
                    <div class="col-2">
                        <ul class="social-menu">
                            <li>
                                <a target="_blank" href="https://www.facebook.com/worldsoftzone">
                                    <img height="40px" width="40px"  src="{{ asset('assets/img/icon/facebook.png') }}" alt="facebook"/>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://twitter.com/worldsoftzone">
                                    <img height="40px" width="40px"  src="{{ asset('assets/img/icon/twitter.png') }}" alt="twitter"/>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.linkedin.com/in/worldsoftzone/">
                                    <img height="40px" width="40px"  src="{{ asset('assets/img/icon/linkedin.png') }}" alt="linkedin"/>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="#">
                                    <img height="40px" width="40px" src="{{ asset('assets/img/icon/instagram.png') }}" alt="instagram"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
  
</div> <!--end main-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- SlickSlider -->
<script type="text/javascript" src="{{ asset('assets') }}/plugin/SlickSlider/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/plugin/SlickSlider/controller.js"></script>

<script src="{{ asset('assets') }}/js/main.js" type="text/javascript"></script>

<script>
    function IsEmail(email) {
          var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(!regex.test(email)) {
            return false;
          }else{
            return true;
          }
    }
</script>

@yield('js')

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61adb76280b2296cfdd03057/1fm798mkd';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBLTGQ6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</body>
</html>