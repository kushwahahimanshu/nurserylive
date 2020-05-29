<style>
  .checkout-page .checkout-form input[type="text"]{
    border-radius:9px;
    height:36px;
  }
</style>
<style>
  /* The Modal (background) */
  .modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content1 {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
  }

  /* The Close Button */
  .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
</style>

<section class="section-big-py-space bg-white"> 
  <div class="container">
    <h2>My Profile</h2>
    <br>
    <!-- Nav tabs -->
    <!-- <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1">Password</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu2">Address</a>
      </li>
    </ul>  -->
    <!-- Tab panes -->
    <!-- <div class="tab-content bg-white">
      <div id="home" class="container tab-pane active"><br>
        <h3>Profile</h3>
        <form action="{{url('/profile-submit')}}" method="post">
          @csrf 
          <input type="hidden" name="id" value="{{Auth::user()->id}}">
          <div class="form-group col-md-6 col-sm-6 col-xs-12">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="{{Auth::user()->email}}" placeholder="" readonly>
          </div>
          <div class="form-group col-md-6 col-sm-6 col-xs-12">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}" placeholder="" readonly>
          </div>  <br> -->
          <!-- <button type="submit" class="btn btn-sm btn-success">Update</button>  -->
      <!--   </form> 
      </div>
      <div id="menu1" class="container tab-pane fade"><br>
        <h3>Password</h3>
        <form action="{{url('/new-password')}}" method="post">
          @csrf  
          <div class="form-group col-md-6 col-sm-6 col-xs-12">
            <label>Old Password</label>
            <input type="text" name="old_pwd" class="form-control" placeholder="">
          </div>
          <div class="form-group col-md-6 col-sm-6 col-xs-12">
            <label>New Password</label>
            <input type="text" name="new_pwd" class="form-control" placeholder="">
          </div>
          <div class="form-group col-md-6 col-sm-6 col-xs-12">
            <label>Confirm Password</label>
            <input type="text" name="cnf_pwd" class="form-control" placeholder="">
          </div>
          <button type="submit" class="btn btn-sm btn-success">Update</button> 
        </form> 
      </div>  
      <div id="menu2" class="container tab-pane fade"><br> -->
        <h3 style="float:left;">Address</h3> 
        <!-- <button type="submit"  style="float:right;" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal1">Add Address</button>  -->
        <?php 
        $user = DB::table('addresses')->where('user_id' , Auth::user()->id)->get(); 
        ?>
        <table class="table table-bordered table-responsive">
          <thead>
            <th>Type Of Address</th>
            <th>Address Line 1</th>
            <th>Address Line 2</th>
            <th>City</th>
            <th>Landmark</th>
            <th>State</th>
            <th>Pin Number</th>
            <th>Phone Number</th>
            <th>Alternate Phone Number</th>
            <th>Action</th>
          </thead>
          @php $count=1; @endphp
          @foreach($user as $r) 
          <tbody>
            <td>{{$r->type_of_address}}</td>
            <td>{{$r->address_line_one}}</td>
            <td>{{$r->address_line_two}}</td>
            <td>{{$r->city}}</td>
            <td>{{$r->landmark}}</td>
            <td>{{$r->state}}</td>
            <td>{{$r->pin}}</td> 
            <td>{{$r->phone}}</td> 
            <td>{{$r->alternate_phone}}</td> 
            <td>  
                <a href="{{url('my-account-edit/'.$r->id)}}"><button type="submit" class="btn btn-sm btn-success">Edit</button> </a> 
            </td> 
          </tbody>
          <?php $count++ ?>
          @endforeach 
        </table> 
        
        <form action="{{url('/address-submit')}}" method="post">
          @csrf  
          <input type="hidden" name="id" value="{{$result->id}}">
          <div class="form-group col-md-6 col-sm-6 col-xs-12">
            <label>Type Of Address</label> <br>
            <input type="radio" name="type_of_address" value="home" @if($result->type_of_address=='home') checked @endif>Home
            <input type="radio" name="type_of_address" value="shop" @if($result->type_of_address=='shop') checked @endif>Shop
            <input type="radio" name="type_of_address" value="office" @if($result->type_of_address=='office') checked @endif>&nbsp;Office
            <input type="radio" name="type_of_address" value="others" @if($result->type_of_address=='others') checked @endif>Other
          </div>
          <div class="form-group col-md-6 col-sm-6 col-xs-12">
            <label>Address Line 1</label>
            <input type="text" name="address_line_one"  value="{{$result->address_line_one}}"  class="form-control" required>
          </div>
          <div class="form-group col-md-6 col-sm-6 col-xs-12">
            <label>Address Line 2</label>
            <input type="text" name="address_line_two" value="{{$result->address_line_two}}"   class="form-control">
          </div>
          <div class="form-group col-md-6 col-sm-6 col-xs-12">
            <label>City</label>
            <input type="text" name="city"  value="{{$result->city}}"  class="form-control" placeholder="">
          </div>
          <div class="form-group col-md-6 col-sm-6 col-xs-12">
            <label>Landmark</label>
            <input type="text" name="landmark" value="{{$result->landmark}}"   class="form-control"  placeholder="">
          </div>
          <div class="form-group col-md-6 col-sm-6 col-xs-12">
            <label>State</label>
            <input type="text" name="state"  value="{{$result->state}}"  class="form-control" placeholder="">
          </div>
          <div class="form-group col-md-6 col-sm-6 col-xs-12">
            <label>Pin Number</label>
            <input type="text" name="pin" value="{{$result->pin}}"   class="form-control"  placeholder=""  >
          </div> 
          <div class="form-group col-md-6 col-sm-6 col-xs-12">
            <label class="field-label">Phone</label>
            <input type="text" name="phone" value="{{$result->phone}}"   class="form-control"  placeholder="" required>
          </div>
          <div class="form-group col-md-6 col-sm-6 col-xs-12">
            <label class="field-label">Alternate Phone</label>
            <input type="text" name="alternate_phone"  value="{{$result->alternate_phone}}"   class="form-control" placeholder="">
          </div>
          <button type="submit" class="btn btn-sm btn-success" style="float:left;">Submit</button> 
         <!--  <button type="button" class="btn btn-success" data-dismiss="modal"  style="float:right;">Close</button> -->
        </form>  
      </div>
   <!--  </div> --> 
  </div> 
</section> 

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
              <input type="radio" name="type_of_address" value="office">Office
              <input type="radio" name="type_of_address" value="others">Other
            </div>
            <div class="form-group col-md-12 col-sm-6 col-xs-12">
              <label>Address Line 1</label>
              <input type="text" name="address_line_one" class="form-control" required>
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




