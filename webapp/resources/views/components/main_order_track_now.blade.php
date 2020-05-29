<section class="theme-slider section-pt-space">
  <div class="container-fluid px-4">
    <div class="row">
      <div class="col-md-4 pr-0 d-none d-md-block"> </div>
      <div class="col-md-12">
        <div class="row"> 
          <div class="col-md-12 mb-3 p-0 p-md-3">  
            <div class="card" style="background-image:url('images/new/.jpg');"> 
              <div class="card-body"> 
                <h2 class="text-center">Track Your Order Details</h2>
                <form method="post" action="{{ url('search') }}">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-box">  
                        <input type="text" name="sub_order_id" placeholder="Order Id" class="form-control" style="font-size: 11px; border-color:black;" required> 
                      </div>
                    </div> 
                    <div class="col-md-6">  
                      <button type="submit" class="text-white" style="font-size: 11px; line-height: 32px; border: none; width: 32%; border-top-right-radius: 20px; border-bottom-right-radius: 20px; margin-bottom: 0px; background-color: #44c968;">Track Now</button>
                    </div>  
                  </div>
                </form> 
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
</section> 