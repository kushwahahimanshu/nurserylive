<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>contact</h2> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->

<section class="section-big-py-space bg-light">
    <div class="custom-container">
        <div class="checkout-page contact-page">
            <div class="checkout-form">
              
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3 class="text-center mb-3">Get in touch</h3>
                            </div>
                            <div class="theme-form">
                                <div class="row check-out ">
                                    <form method="post" action="{{url('contact-us-form-submit')}}" >
                                        @csrf
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>First Name</label>
                                            <input type="text" name="fname" value="" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Last Name</label>
                                            <input type="text" name="lname" value="" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label class="field-label">Phone</label>
                                            <input type="number" name="phone" value="" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label class="field-label">Email Address</label>
                                            <input type="email" name="email" value="" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div>
                                                <label for="review">Write Your Message</label>
                                                <textarea class="form-control" name="message" placeholder="Write Your Message" id="exampleFormControlTextarea1" rows="2"></textarea>
                                            </div>
                                        </div>
                                       <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <button class="btn btn-normal" type="submit">Send Your Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-details theme-form  section-big-mt-space">
                                <div class="checkout-title">
                                    <h3 class="text-center mb-3">Contact Details</h3>
                                </div>
                                <div class="order-box">
                                    <ul class="contact-list">
                                        <li><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<span>{{$contact->address}} <span>{{$contact->address_one}}</span></span></li><br> 

                                        <li><i class="fa fa-phone"></i>&nbsp;&nbsp;<span>call us:{{$contact->contact_number}}</span></li><br> 

                                        <li><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;<span>email us: {{$contact->email}}</span></li><br> 
                                        <li><i class="fa fa-fax"></i>&nbsp;&nbsp;<span>fax {{$contact->fax }}</span></li><br>
                                    </ul> 
                                </div> 
                            </div>
                        </div>
                    </div>
                 
            </div>
        </div>
    </div>
</section>
<!--Section ends-->