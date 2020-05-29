
<section class="theme-slider section-pt-space">
  <div class="container-fluid px-4">
    <div class="row">
      <div class="col-md-4 pr-0 d-none d-md-block"> </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6 mb-3 p-0 p-md-3">  
            <div class="card" style="background-image:url('images/new/.jpg');"> 
              <div class="card-body"> 
                <h2 class="text-center">Login</h2>
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <!-- <input type="text" class="form-control" id="email" placeholder="Email" required=""> -->
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> 
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="review">Password</label>
                    <!--<input type="password" class="form-control" id="review" placeholder="password" required=""> -->
                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> 
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-sm btn-success">{{ __('Login') }}</button> 
                  <a class="float-right txt-default mt-2" href="forget-pwd.html" id="fgpwd"  style="color:whit;">Forgot your password?</a>
                </form>
                <a href="{{url('register-page')}}" class="txt-default pt-3 d-block">Not a member ?</a>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
</section> 