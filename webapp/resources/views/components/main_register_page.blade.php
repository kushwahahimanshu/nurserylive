
<section class="theme-slider section-pt-space">
  <div class="container-fluid px-4">
    <div class="row">
      <div class="col-md-4 pr-0 d-none d-md-block"> </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6 mb-3 p-0 p-md-3">  
            <div class="card" style="background-image:url('images/new/.jpg');"> 
              <div class="card-body"> 
                <h2 class="text-center">Register</h2>
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="form-group">
                    <label for="name">Name</label>
                    <!-- <input type="text" class="form-control" id="name" placeholder="Name" required=""> -->
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> 
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                   <!--  <input type="email" class="form-control" id="email" placeholder="Email" required=""> -->
                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> 
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="review">Password</label>
                    <!-- <input type="password" class="form-control" id="review" placeholder="password" required=""> -->
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> 
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="review">Confirm Password</label>
                    <!-- <input type="confirmpassword" class="form-control" id="review" placeholder="confirm password" required=""> --> 
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> 
                  </div>
                  <button type="submit" class="btn btn-sm btn-success">{{ __('Register') }}</button> 
                  <a class="float-right txt-default mt-2"  href="{{url('login-page')}}"  style="color:whit; font-size:18px;">Login Here</a>  
                </form> 
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
</section> 