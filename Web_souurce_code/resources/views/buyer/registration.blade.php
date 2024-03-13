@extends('layouts.app')

@section('content')
<style>
	/*.mycard{
  border: none !important;
}*/
.mycarbody{
	border: none;
	background: none;
}
.nav-tabs .nav-link:hover{
border-bottom: 3px solid #8A9A5B ;

}
    .form-group input {
  display: inline-block;

}


.height-100 {
    height: 150vh
}

.card {
    width: 600px;
    border: none;
/*    height: 400px;*/
   /* box-shadow: 0px 5px 20px 0px #d2dae3;*/
    z-index: 1;
    display: flex;
    justify-content: center;
    align-items: center
}

/*.card h6 {
    color: red;
    font-size: 20px
}*/

.inputs input {
  width: 44.7px;
height: 43.84px;
left: 150px;
top: 347.33px;

background: #EEF1F8;
border-radius: 12px!important;
}


    .form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
     padding: 12px!important;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

    .log-in{
        margin-top: 16%;

    }

    .ot{
        margin-left: 4px;
    }

    .crane2{
        position: absolute;
    top: -26%;
    }


    .nav-link {
    display: block;
    padding: 0.5rem 5rem;
        font-family: 'Montserrat';
font-style: normal;
font-weight: 700;
font-size: 16px;
line-height: 20px;
/* identical to box height */

letter-spacing: 1px;
text-transform: uppercase;

color: #8BA83A;
}

/*input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0
}*/

./*card-2 {
    background-color: #fff;
    padding: 10px;
    width: 350px;
    height: 100px;
    bottom: -50px;
    left: 20px;
    position: absolute;
    border-radius: 5px
}

.card-2 .content {
    margin-top: 50px
}

.card-2 .content a {
    color: red
}*/

/*.form-control:focus {
    box-shadow: none;
    border: 2px solid red
}

.validate {
    border-radius: 20px;
    height: 40px;
    background-color: red;
    border: 1px solid red;
    width: 140px
}

.text-center{
	color: black;
}*/


	</style>

<div class="container">
  <div class="row">
    <div class="col-6">
      <div class="card mt-3 tab-card mycard">
        <div class="card-header tab-card-header mycarbody">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Register</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
          	<div class="card-body">@if (session('error'))
          		<div class="alert alert-danger" role="alert"> {{session('error')}}
          		</div>@endif
                @if (session('success'))
          		<div class="alert alert-success" role="alert"> {{session('success')}}
          		</div>@endif
          		<form method="POST" action="{{ route('buyer.post.login') }}">
          		 @csrf
          		  <div class="row mb-3">
          		  	<label for="mobile_no" class="col-md-4 col-form-label text-md-end">{{ __('Mobile No') }}</label>
<!--
                       <span class="border-end country-code px-2">+60</span>
          		  	 	<input id="mobile_no" type="text" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile" value="{{ old('mobile_no') }}" required autocomplete="mobile_no" autofocus placeholder="Enter Your Registered Mobile Number">@error('mobile_no')
          		  	 	<span class="invalid-feedback" role="alert">
          		  	 		<strong>{{ $message }}</strong>
          		  	 	</span> @enderror
-->
                      <div class="form-group mt-2 d-inline-block">
        <span class="border-end country-code px-2"></span>
        <input type="text" class="form-control" id="ec-mobile-number" aria-describedby="emailHelp" name="phone" placeholder="  +1 | Enter Your Registered Mobile Number" />
    </div>

          		  	 	<div id="" class="inputs d-flex flex-row justify-content-center mt-2 ot">
          		  	 		<input class="m-2 text-center form-control rounded otp-input" name="otp1" type="text" id="first" maxlength="1" />
          		  	 		<input class="m-2 text-center form-control rounded otp-input" name="otp2" type="text" id="second" maxlength="1" />
          		  	 		<input class="m-2 text-center form-control rounded otp-input" name="otp3" type="text" id="third" maxlength="1" />
          		  	 		<input class="m-2 text-center form-control rounded otp-input" name="otp4" type="text" id="fourth" maxlength="1" />

          		  	 	</div>
          		  	 	<input type="hidden" name="buyer" value="buyer">




                    </div>
                    <div class="row mb-0">
                            <div class="col-md-8 ">
                                <button type="submit" class="btn btn-primary log-in" style ="color: white;">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                 </form>

            </div>
          </div>
          <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
            <div class="card mycard">
                    <!-- <h3 class="card-header text-center">Register User</h3> -->
                    <div class="card-body">
                        <form action="{{ route('buyer.post.buyerRegister') }}" method="POST">
                            @csrf
                            <div class="form-group1 mb-3">
                                <label> First Name</label>
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" value="{{old('name')}}"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group1 mb-3">
                                 <label>Email</label>
                                <input type="email" placeholder="Email" id="email_address" class="form-control" value="{{old('email')}}"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group1 mb-3">
                                <!-- <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required> -->
                                <label>Mobile No.</label>
                                    <input id="mobileno" placeholder="phone" type="text" class="form-control" name="phone" value="{{old('phone')}}" minlength="10" maxlength="10" required autofocus>
                                    @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                               <!--  @if ($errors->has('mobileno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobileno') }}</strong>
                                    </span>
                                @endif -->
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                                <input type="hidden" name="buyer" value="buyer">
                            </div>

                            <!-- <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div> -->
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-6">
    	<!-- <img src="https://getmethat.ca/ecowaste/public/images/crane2.png" alt="Italian Trulli" width="100%" class="crane2"> -->
    </div>
  </div>
</div>
<script>
    var otpInputs = document.querySelectorAll('.otp-input');

    otpInputs.forEach(function(input, index) {
        input.addEventListener('input', function() {
        if (this.value.length >= 1) {
            if (index < otpInputs.length - 1) {
            otpInputs[index + 1].focus();
            }
        }
        });

        input.addEventListener('keydown', function(event) {
        if (event.key === 'Backspace' && this.value.length === 0) {
            if (index > 0) {
            otpInputs[index - 1].focus();
            }
        }
        });
    });
</script>
@endsection


