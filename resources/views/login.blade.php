<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>

    <!-- <link rel="icon" href="assets/img/logo.png"> -->
    <link rel="stylesheet" href="/css/login.css">


	<body class="container" style="background-color:#9CC094" background="/img/bg.png">
		<div class="text-center">
			<div class="card-group mt-5">
	  			<div class="card">
	    			<div class="card-body" style="color: #032D23">
	    				<h4 class="headline mt-3">Stockmoed by Pangmoed</h4>
	    				<h4 class="headline mt-5">Welcome Back Team</h4>
	    				<h1 class="header fw-bold mt-3">Login</h1>
	      				<div class="row justify-content-center">
				            <div class="col-md-8 col-lg-8">
				                <div class="login-wrap p-0">
				                    <form action="{{ route('login') }}" class="signin-form" method="POST">
                              @csrf
				                        <div class="form-group mt-3">
                                  <label for="email"></label>
                                  <input type="text" name="email" id="email" class="form-control" placeholder="Email" required>
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
				                        </div>
				                        <div class="form-group mt-3">
				                            <label for="pass"></label>
				                            <input id="password-field" type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <!-- <i class="bi bi-eye-slash" id="togglePassword"></i> -->
				                        </div>
				                        <div>
				                        	<input type="checkbox" value="" id="" class=" mt-3"> <label for="rememberMe">Remember me &emsp; <a href="" style="color: #032D23" class="tab text-decoration-underline">Forgot Password?</a></label> 
				                        </div>
				                        <div class="tombol btn-group justify-content-center">
				                            <button type="submit" name="login" class="text-white margin fw-bold form-control btn-lg mt-3" style="background-color: #032D23">Login</button>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
				                        </div>
				                    </form>
				                </div>
				            </div>
				        </div>
	    			</div>
	    			<div class="justify-content-center text-center mb-3">
				    	<p class="card-text"><small>Copyright © 2020 <a href="" style="color: #AAA713" class="text-decoration-underline">Pangmoed Coffee</a> All rights reserved.</small></p>
				    </div>
	  			</div>
	  			<div class="card">
	    			<img class="card-img-top" src="/img/image.png" style="object-fit:cover; width:650px; height:675px; "alt="Card image cap">
	  			</div>
  
  			</div>
		</div>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  	</body>
</html>