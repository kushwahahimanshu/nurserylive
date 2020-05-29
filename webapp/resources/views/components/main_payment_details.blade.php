
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>Payment Options</h2> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div><br/>
@endif
<!-- breadcrumb End --> 
<!--section start--> 
<section class="section-big-py-space bg-light">
    <div class="custom-container">
        <div class="checkout-page contact-page">
            <div class="checkout-form">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 col-xs-12"></div> 
                    <form action="{{url('/update-payment-submit')}}" method="post">
                        @csrf  
                         
                        <div class="form-group col-md-12 col-sm-6 col-xs-12">
                            <label><b>Select Payment</b></label><br>
                            <input type="radio" name="payment_mode" value="cod"  required>&nbsp;&nbsp;COD
                            <input type="radio" name="payment_mode" value="debitcard"  required>&nbsp;&nbsp;Debit Card
                            <input type="radio" name="payment_mode" value="creditcard"  required>&nbsp;&nbsp;Credit Card 
                        </div>  
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-12 col-sm-6 col-xs-12">
                            <div class="captcha">
                                <span>{!! captcha_img() !!}</span>
                                <button type="button" class="btn btn-success"><i class="fa fa-refresh" id="refresh"></i></button>
                            </div>
                        </div>  
                        <div class="col-md-8"></div>
                        <div class="form-group col-md-12 col-sm-6 col-xs-12">
                            <input id="captcha" type="text" placeholder="Enter Captcha" name="captcha">
                        </div>
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div> 
                        <!-- <button type="submit" class="btn btn-sm btn-success">Submit</button>   -->
                    </form> 
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js')}}"></script>  
<script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}"></script>
<script type="text/javascript">
$('#refresh').click(function(){
  $.ajax({
     type:'GET',
     url:'refreshcaptcha',
     success:function(data){
        $(".captcha span").html(data.captcha);
     }
  });
});
</script>