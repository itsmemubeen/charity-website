@extends('layout.master')

@section('content')
<section class="login-form">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-7">
          <div class="section-content text-center mb-4">
            <h2>Welcome back</h2>
            <!-- <p>Get answers within minutes and finish your homework faster</p> -->
          </div>
          <div class="socialLinkBtn">
            <a href="#" class="googleBtn"><i class="fa-brands fa-google"></i> LOG IN WITH GOOGLE</a>
            <a href="#" class="appleBtn"><i class="fa-brands fa-apple"></i> LOG IN WITH APPLE</a>
            <a href="#" class="facebookBtn"><i class="fa-brands fa-facebook"></i> LOG IN WITH FACEBOOK</a>
          </div>
          <p class="or">or</p>
          <form method="POST" action="{{ route('login') }}">
           @csrf
            <div class="row">
              <div class="col-12">
                <div class="inputField">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              <div class="col-12">
                <div class="inputField">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>
                @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                @enderror
              </div>
              <div class="col-12">
                <div class="inputField inputField--radio">
                  <div>
                    <input type="checkbox" id="agree">
                    <label for="agree">Keep me logged in</label>
                  </div>
                  <div>
                    <a href="#">Forget Your Password?</a>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <button class="themeBtn themeBtn--full mt-4">SIGN IN</button>
              </div>
              <div class="col-12">
                <div class="haveAccount d-flex align-items-center justify-content-center mt-4">
                  <p class="mb-0">Don't have an account?</p>
                  <a href="http://invulc.org/register">Sign Up</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
