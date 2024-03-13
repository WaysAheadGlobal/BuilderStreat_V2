@extends('layouts.app')

@section('content')

<style type="text/css" media="screen">
    .mycard{
  border: none !important;
}
.mycarbody{
  border: none;
  background: none;
}
.nav-tabs .nav-link:hover{
border-bottom: 3px solid #8A9A5B ;

}

    .justify-content-center {

    justify-content: flex-start !important;
        margin-left: -25px;
}


    .nav-link.active {
    color: #495057;
    background-color: #fff;
     border-color: none;
}


    .inputs input {
  width: 44.7px;
height: 43.84px;
left: 150px;
top: 347.33px;

background: #EEF1F8;
border-radius: 12px!important;
}

    .ot{
        margin-left: -7px;
    }


    .log-in{
        padding: 16px 32px;


font-family: 'Montserrat';
font-style: normal;
font-weight: 700;
font-size: 16px;
line-height: 180%;
/* identical to box height, or 29px */

margin-top: 23%;
    margin-left: -20px;
color: #FFFFFF !important;
width: 169px;
height: 61px;


/* logo green 3 */

background: #6E7E1D;
border-radius: 2px;
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

    .btn-regis{
        width: 169px;
height: 61px;
left: 148px;
top: 845px;
font-family: 'Montserrat';
font-style: normal;
font-weight: 700!important;
font-size: 16px !important;
line-height: 180%;
/* identical to box height, or 29px */

padding: 0px!important;
color: #FFFFFF !important;
background: #6E7E1D;
border-radius: 2px;
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

    .upload-btn::-webkit-file-upload-button {
  visibility: hidden;
}
.upload-btn::before {
  content: 'Upload Certificate';
  display: inline-block;
  background: #2F80ED;
  cursor: pointer;
  border-radius: 3px;
  padding: 7px 8px;
  outline: none;
  white-space: nowrap;
width: 148px;
height: 33.41px;
 font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 11px;
line-height: 13px;
text-align: center;
letter-spacing: 0.5px;
text-transform: uppercase;

color: #FFFFFF;
}
.upload-btn:hover::before {
  border-color: black;
}
.upload-btn:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
}
.error{color: red;}
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
          <div class="tab-pane {{ count($errors) ? '' : 'active' }} p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
            <div class="card-body">@if (session('error'))
              <div class="alert alert-danger" role="alert"> {{session('error')}}
              </div>@endif
                @if (session('success'))
              <div class="alert alert-success" role="alert"> {{session('success')}}
              </div>@endif
              <form class="mx-1 mx-md-4" action="{{ route('seller.post.login') }}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="d-flex flex-row align-items-center mb-4">
                      <input type="hidden" name="role" value="seller">
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="phone">Mobile No.*</label>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder=" +1 | Enter registered mobile number" />
                        @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                  <div id="" class="inputs d-flex flex-row justify-content-start mt-2 ot">
          		  	 		<input class="m-2 text-center form-control rounded otp-input" name="otp1" type="text" id="first" maxlength="1" />
          		  	 		<input class="m-2 text-center form-control rounded otp-input" name="otp2" type="text" id="second" maxlength="1" />
          		  	 		<input class="m-2 text-center form-control rounded otp-input" name="otp3" type="text" id="third" maxlength="1" />
          		  	 		<input class="m-2 text-center form-control rounded otp-input" name="otp4" type="text" id="fourth" maxlength="1" />

          		  	 	</div>

                  <div class="d-flex justify-content-start mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-success btn-lg log-in">Login</button>
                  </div>
              </form>

            </div>
          </div>
          <div class="tab-pane {{ count($errors) ? 'active' : '' }} p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
            <div class="card mycard">
                    <!-- <h3 class="card-header text-center">Register User</h3> -->
                    <div class="card-body">
                      <form action="{{ route('seller.post.register') }}" method="post" enctype="multipart/form-data" class="mx-1 mx-md-4" id="registrationform">
                        @csrf
                          <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                                <label class="form-label" for="name">Full Name*</label>
                              <input type="text" id="name" name="name" placeholder="Full Name" class="form-control" value="{{old('name')}}"/>
                              <input type="hidden" name="role" value="seller">
                              @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <div class="form-outline flex-fill mb-0">
                              <label class="form-label" for="email">Email Address*</label>
                              <input type="email" id="email" name="email" placeholder="Email Address" class="form-control" value="{{old('email')}}"/>
                              @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="phone">Mobile No.*</label>
                            <input type="text" id="phone" name="phone" placeholder="+1 | Mobile No" class="form-control" value="{{old('phone')}}" minlength="10" maxlength="10"/>
                            @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>

                          <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                                <label class="form-label" for="company">Company Name*</label>
                                <input type="text" id="company" name="company" placeholder="Company Name" class="form-control" value="{{old('company')}}"/>
                                @error('company')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                            </div>
                          </div>

                          <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                              <label class="form-label" for="documents">Upload Industry Licenses*</label>
                              <input type="file" id="documents" name="documents" class="upload-btn" />
                              @error('documents')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>

                          <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button type="submit" class="btn btn-success btn-lg btn-regis">Register</button>
                          </div>
                      </form>
                    </div>
                </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-6">
      <!-- <img src="https://getmethat.ca/ecowaste/public/images/crane2.png" alt="Italian Trulli" class="crane2"> -->
    </div>
  </div>
</div>

@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js" type="text/javascript" charset="utf-8" async defer></script>

<script>
$(document).ready(function () {

    $('#registrationformm').validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            company: {
                required: true
            },
            phone: {
                required: true,
                minlength: 5
            },
            documents: {
                required: true
            }
        }
    });

});
</script>
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

@endpush