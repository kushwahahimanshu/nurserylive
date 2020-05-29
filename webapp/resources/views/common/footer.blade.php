<!--footer start-->
<footer class="footer-2">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="footer-main-contian">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 pr-lg-0">
                            <div class="footer-left">
                                <div class="footer-logo">
                                    <img src="{{url('images/new/logo.png')}}" class="img-fluid  " alt="logo">
                                </div>
                                <div class="footer-detail">
                                    <!-- <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</p> -->
                                    <p>{{$footer->content}}</p>
                                    <ul class="paymant-bottom">
                                        <li><a href="#"><img src="{{url('images/layout-1/pay/1.png')}}" class="img-fluid" alt="pay"></a></li>
                                        <li><a href="#"><img src="{{url('images/layout-1/pay/2.png')}}" class="img-fluid" alt="pay"></a></li>
                                        <li><a href="#"><img src="{{url('images/layout-1/pay/3.png')}}" class="img-fluid" alt="pay"></a></li>
                                        <li><a href="#"><img src="{{url('images/layout-1/pay/4.png')}}" class="img-fluid" alt="pay"></a></li>
                                        <li><a href="#"><img src="{{url('images/layout-1/pay/5.png')}}" class="img-fluid" alt="pay"></a></li>
                                    </ul>
                                    <div class="sosiyal-block" >
                                        <h6>follow us</h6>
                                        <ul class="sosiyal">
                                            @if($footer->facebook == null)
                                            @else
                                            <li><a  href="{{$footer->facebook}}"><i class="fa fa-facebook" ></i></a></li>
                                            @endif
                                            @if($footer->gmail == null)
                                            @else 
                                            <li><a  href="{{$footer->gmail}}"><i class="fa fa-google-plus" ></i></a></li>  
                                            @endif
                                            @if($footer->twitter == null)
                                            @else 
                                            <li><a  href="{{$footer->twitter}}"><i class="fa fa-twitter" ></i></a></li> 
                                            @endif
                                            @if($footer->instagram == null)
                                            @else 
                                            <li><a  href="{{$footer->instagram}}"><i class="fa fa-instagram" ></i></a></li>
                                            @endif
                                            @if($footer->pinterest == null)
                                            @else 
                                            <li><a  href="{{$footer->pinterest}}"><i class="fa fa-rss" ></i></a></li> 
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 p-l-md-0">
                            <div class="footer-right">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class=account-right>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="footer-box">
                                                        <div class="footer-title">
                                                            <h5>my account</h5>
                                                        </div>
                                                        <div class="footer-contant">
                                                            <ul>
                                                                <li><a href="{{url('/about-us')}}">about us</a></li>
                                                                <li><a href="{{url('/contact-us')}}">contact us</a></li>
                                                                <li><a href="{{url('/term-condition')}}">terms & conditions</a></li>
                                                                <li><a href="{{url('/privacy-policy')}}">Privacy & Data Policy</a></li>
                                                                <li><a href="{{url('/return-policy')}}">Return Policy</a></li>
                                                                <li><a href="{{url('/refund-policy')}}">Refund Policy</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="footer-box">
                                                        <div class="footer-title">
                                                            <h5>quick link</h5>
                                                        </div>
                                                        <div class="footer-contant">
                                                            <ul>
                                                                @guest 
                                                                <li><a href="{{url('faq')}}">FAQ </a></li>
                                                                @else

                                                                <li><a href="{{url('my-account')}}"> my account</a></li>
                                                                <li><a href="{{url('track-order')}}"> orders tracking</a></li>
                                                                <li><a href="{{url('faq')}}">FAQ </a></li>
                                                                @endguest

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="footer-box footer-contact-box">
                                                        <div class="footer-title">
                                                            <h5>contact us</h5>
                                                        </div>
                                                        <div class="footer-contant">
                                                            <!-- <ul class="contact-list">
                                                                <li><i class="fa fa-map-marker"></i><span>big deal store demo store <br> <span> india-3654123</span></span></li>
                                                                <li><i class="fa fa-phone"></i><span>call us: 123-456-7898</span></li>
                                                                <li><i class="fa fa-envelope-o"></i><span>email us: support@bigdeal.com</span></li>
                                                                <li><i class="fa fa-fax"></i><span>fax 123456</span></li>
                                                            </ul> -->
                                                            <ul class="contact-list">
                                                                <li><i class="fa fa-map-marker"></i><span>{{$contact->address}} <br> <span>{{$contact->address_one}}</span></span></li>
                                                                <li><i class="fa fa-phone"></i><span>call us:{{$contact->contact_number}}</span></li>
                                                                <li><i class="fa fa-envelope-o"></i><span>email us: {{$contact->email}}</span></li>
                                                                <li><i class="fa fa-fax"></i><span>fax {{$contact->fax }}</span></li>
                                                            </ul>
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
            </div>
        </div>
    </div>
    
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sub-footer-contain">
                        <p><span>2019 - 25 </span>copy right @ <a href="https://www.expertwebtech.com/">Xpert Webtech</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer end