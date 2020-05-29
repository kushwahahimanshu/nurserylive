<style>
   .checkout-page .checkout-form input[type="text"]{
        border-radius:9px;
        height:36px;
    }
</style> 
<section class="section-big-py-space bg-white">
    <div class="custom-container">
        <div class="checkout-page contact-page">
            <div class="checkout-form"> 
                <?php 
                    $user = DB::table('addresses')->where('user_id' , Auth::user()->id)->get(); 
                ?>
                <h3 class="text-center mb-3">Checkout</h3> 
                <div class="row">
                    <div class="col-lg-2 col-sm-12 col-xs-12"> </div>
                    <div class="col-lg-10 col-sm-12 col-xs-12">
                        <button type="submit" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal">Add Address</button>
                        <table class="table table-responsive">
                            <thead>
                                <th>Select</th>
                                <th>Type Of Address</th>
                                <th>Address</th>
                                <th>Address1</th>
                                <th>City</th>
                                <th>Landmark</th>
                                <th>State</th>
                                <th>Pin Number</th>
                                <!-- <th>Action</th> -->
                            </thead>
                            @php $count=1; @endphp
                            @foreach($user as $r) 
                            <form action="{{url('/checkout-submit')}}" method="post">
                            @csrf
                            <input type="hidden" name="id{{$count}}" value="{{$r->id}}">
                            <tbody>
                                <td><input type="radio" name="id" value="{{$r->id}}"></td>
                                <td>{{$r->type_of_address}}</td>
                                <td>{{$r->address_line_one}}</td>
                                <td>{{$r->address_line_two}}</td>
                                <td>{{$r->city}}</td>
                                <td>{{$r->landmark}}</td>
                                <td>{{$r->state}}</td>
                                <td>{{$r->pin}}</td>  
                                <!-- <td> 
                                  <button type="submit" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal1">Edit</button> 
                                </td>  -->
                            </tbody>
                            <?php $count++ ?>
                            @endforeach 
                        </table>         
                        <button type="submit" class="btn btn-sm btn-success">Submit</button>   
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content"> 
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Address</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div id="menu2"> 
          <form action="{{url('/address-submit')}}" method="post">
            @csrf  
            <div class="form-group col-md-12 col-sm-6 col-xs-12">
              <label>Type Of Address</label> <br>
              <input type="radio" name="type_of_address"  value="home">Home
              <input type="radio" name="type_of_address" value="shop">Shop
              <input type="radio" name="type_of_address" value="office">Office
              <input type="radio" name="type_of_address" value="others">Other
            </div>
            <div class="form-group col-md-12 col-sm-6 col-xs-12">
              <label>Address</label>
              <input type="text" name="address_line_one" class="form-control" required>
            </div>
            <div class="form-group col-md-12 col-sm-6 col-xs-12">
              <label>Address1</label>
              <input type="text" name="address_line_two" class="form-control">
            </div>
            <div class="form-group col-md-12 col-sm-6 col-xs-12">
              <label>City</label>
              <input type="text" name="city" class="form-control" placeholder="">
            </div>
            <div class="form-group col-md-12 col-sm-6 col-xs-12">
              <label>Landmark</label>
              <input type="text" name="landmark" class="form-control"  placeholder="">
            </div>
            <div class="form-group col-md-12 col-sm-6 col-xs-12">
              <label>State</label>
              <input type="text" name="state" class="form-control" placeholder="">
            </div>
            <div class="form-group col-md-12 col-sm-6 col-xs-12">
              <label>Pin Number</label>
              <input type="text" name="pin" class="form-control"  placeholder=""  >
            </div> 
            <button type="submit" class="btn btn-sm btn-success" style="float:left;">Submit</button> 
            <button type="button" class="btn btn-success" data-dismiss="modal"  style="float:right;">Close</button>
          </form>  
        </div>
      </div>  
    </div>
  </div>
</div> 

<!-- The Modal -->
<div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content"> 
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Address</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div id="menu2"> 
          <form action="{{url('/address-submit')}}" method="post">
            @csrf  
            <div class="form-group col-md-12 col-sm-6 col-xs-12">
              <label>Type Of Address</label> <br>
              <input type="radio" name="type_of_address"  value="home">Home
              <input type="radio" name="type_of_address" value="shop">Shop
              <input type="radio" name="type_of_address" value="office">&nbsp;Office
              <input type="radio" name="type_of_address" value="others">Other
            </div>
            <div class="form-group col-md-12 col-sm-6 col-xs-12">
              <label>Address Line 1</label>
              <input type="text" name="address_line_one" value=" " class="form-control" required>
            </div>
            <div class="form-group col-md-12 col-sm-6 col-xs-12">
              <label>Address Line 2</label>
              <input type="text" name="address_line_two" class="form-control">
            </div>
            <div class="form-group col-md-12 col-sm-6 col-xs-12">
              <label>City</label>
              <input type="text" name="city" class="form-control" placeholder="">
            </div>
            <div class="form-group col-md-12 col-sm-6 col-xs-12">
              <label>Landmark</label>
              <input type="text" name="landmark" class="form-control"  placeholder="">
            </div>
            <div class="form-group col-md-12 col-sm-6 col-xs-12">
              <label>State</label>
              <input type="text" name="state" class="form-control" placeholder="">
            </div>
            <div class="form-group col-md-12 col-sm-6 col-xs-12">
              <label>Pin Number</label>
              <input type="text" name="pin" class="form-control"  placeholder=""  >
            </div> 
            <div class="form-group col-md-12 col-sm-6 col-xs-12">
              <label class="field-label">Phone</label>
              <input type="text" name="phone" class="form-control"  placeholder="" required>
            </div>
            <div class="form-group col-md-12 col-sm-6 col-xs-12">
              <label class="field-label">Alternate Phone</label>
              <input type="text" name="alternate_phone"  class="form-control" placeholder="">
            </div>
            <button type="submit" class="btn btn-sm btn-success" style="float:left;">Submit</button> 
            <button type="button" class="btn btn-success" data-dismiss="modal"  style="float:right;">Close</button>
          </form>  
        </div>
      </div>  
    </div>
  </div>
</div> 