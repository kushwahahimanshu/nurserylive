
<section class="theme-slider section-pt-space">
  <div class="container-fluid px-4">
    <div class="row">
      <div class="col-md-4 pr-0 d-none d-md-block"> </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6 mb-3 p-0 p-md-3">  
            <div class="card" style="background-image:url('images/new/.jpg');"> 
              <div class="card-body"> 
                <h2 class="text-center">Order Exchange</h2>
                <?php 
                $product = DB::table('addresses')->where('user_id',Auth::user()->id)->where('id',$result->address_id)->first();
                ?>  
                <form method="POST" action="{{ url('update-exchange-submit') }}">
                  @csrf
                  <input type="hidden" name="sub_order_id" value="{{$result->sub_order_id}}">
                  <div class="form-group">
                    <label for="email">Reason Of Exchange</label><br>
                    <input type="text" class="form-control" id="reason" placeholder="reason" name="reason" required=""> 
                  </div> 
                  <button type="submit" class="btn btn-sm btn-success">Submit</button>  
                </form> 
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
</section> 