
<footer class="footer">
    <div class="footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="footer-row">
                        <div class="footer-detail">
                            <a href="#">
                                <img src="{{url('landing')}}/assets/images/logo.png" style="width: 350px;" alt="footer-logo">
                            </a>
                            <p class="c-grey-1" style="direction: rtl;">{{trans('landing.description')}}</p>
                            <div class="links">
                                <a class="link-underline" href="{{$setting_email}}">
                                    <span>{{$setting_email}}</span>
                                </a>
                                <a class="link-underline" href="tel:{{$setting_phone}}">
                                    <span>{{$setting_phone}}</span>
                                </a>
                            </div>
                        </div>
                        <div class="footer-list footer-social social-gradient">
                            <h6>مواقع التواصل الاجتماعي</h6>
                            <ul>
                                <li class="instagram">
                                    <a target="_blank" href="https://www.instagram.com/80fekra" class="link-underline">
                                        <i class="fab fa-instagram"></i>
                                        <span>Instgram</span>
                                    </a>
                                </li>
                                <li class="facebook">
                                    <a target="_blank" href="https://www.facebook.com/80fekra" class="link-underline">
                                        <i class="fab fa-facebook"></i>
                                        <span>Facebook</span>
                                    </a>
                                </li>

                                <li class="youtube">
                                    <a target="_blank" href="https://www.youtube.com/channel/UC5GKLcvxkuktuR2KRN4gyeg" class="link-underline">
                                        <i class="fab fa-youtube"></i>
                                        <span>Youtube</span>
                                    </a>
                                </li>
                                <li class="whatsapp">
                                    <a href="tel:01095758550" target="_blank" class="link-underline">
                                        <i class="fab fa-whatsapp"></i>
                                        <span>whatsapp</span>
                                    </a>
                                </li>
                                <li class="globe">
                                    <a href="http://80fekra.com/ar/products" target="_blank" class="link-underline">
                                        <i class="fab fa-globe"></i>
                                        <span>موقع 80 فكرة</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-list">

                        </div>
                        <div class="footer-list">
                            <h6>الاكثر زيارة</h6>
                            <ul>
                                <li>
                                    <a href="{{route('front.home')}}#pricing" class="link-underline">
                                        <span>{{trans('landing.pricing')}}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('front.pages','terms')}}l" class="link-underline">
                                        <span>{{trans('landing.terms')}}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('front.pages','privacy')}}" class="link-underline">
                                        <span>{{trans('landing.privacy')}}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('front.home')}}#contact" class="link-underline">
                                        <span>{{trans('landing.contact_us')}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="footer-copyright c-grey-1">
                        <h6>&copy; 80-IDEA</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-pattern"
             style="background-image: url(landing/assets/images/patterns/pattern-1.jpg)"></div>
    </div>
</footer>
<!--
footer - end
-->

</div>

<!--
scripts
-->
<script src="{{url('landing')}}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{url('landing')}}/assets/js/swiper-bundle.min.js"></script>
<script src="{{url('landing')}}/assets/js/glightbox.min.js"></script>
<script src="{{url('landing')}}/assets/js/overlay-scrollbars.min.js"></script>
<script src="{{url('landing')}}/assets/js/gsap.min.js"></script>
<script src="{{url('landing')}}/assets/js/main.js"></script>
</body>
</html>