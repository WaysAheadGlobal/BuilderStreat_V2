@extends('layouts.sellerApp')

@section('content')


<style>
    @import
url(https://fonts.googleapis.com/icon?family=Material+Icons);

@import
url(https://fonts.googleapis.com/css?family=Open+Sans:700,500,300);



.frame {
  position: absolute;
  top: 36%;
  left: 18%;
  width: 400px;
  height: 300px;

  margin-left: -200px;

	overflow: hidden;

  color: #fff;
	font-family: 'Open Sans', Helvetica, sans-serif;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}


    p{
        padding: 20px;
        font-size: 20px;
    }

.center {
  position: absolute;
	width: 400px;
	height: 400px;
	display: flex;
	justify-content: center;
	align-items: center;
}

.title{
	position: absolute;
	height: 45px;
	width: 400px;
	top: 50%;
	left: 50%;
	transform: translate(-200px, -200px);
	text-align: center;
	background: #9dd9d9;
	border-bottom: 5px solid #d9d9d9;
	box-sizing: border-box;
}

.title h3{
	margin-top: 7.5px;
	color: #1c1c1c;
	font-size: 20px;
	font-weight: 550;
}

.dropzone{
	position: absolute;
	width: 200px;
	height: 200px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
}

.filename {
	color: #d9d9d9;
	width: 300px;
	height: 130px;
	word-break: break-all;
	font-size: 11px;
	line-height: 15px;
	z-index: 1;
}

#img{
	position: absolute;
	opacity: 0;
	width: 150px;
	height: 130px;
	cursor: pointer;
	z-index: 99999;
}

.content{
	width: 209px;
	height: 130px;
	text-align: center;
	display: flex;
	align-items: center;
	justify-content: center;
	border-radius: 5px;
	border: 2px dashed #d9d9d9;
	cursor: pointer;
}


.syncing{
	font-size: 150px;
	color: grey;
	text-shadow: 0 0 5px #00ffff;
	opacity: .3;
}

.upload{
	font-size: 100px;
	color: #d9d9d9;
	text-shadow: 0 0 5px #00ffff;
	position: absolute;
	width: 100px;
	opacity: 0;
		&.active-b {
			animation: load 3.8s ease-in-out forwards;
		}
}

.done{
	font-size: 100px;
	color: #d9d9d9;
	text-shadow: 0 0 5px #00ffff;
	position: absolute;
	opacity: 0;
	transition: all 1s;
		&.active-c {
			animation: done 1s ease-in 3.8s forwards;
	}
}



    .tab-pane p{
        font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 13px;
line-height: 17px;
/* identical to box height, or 131% */

letter-spacing: 1px;
text-transform: capitalize;

color: #424242;

    }

.upload-btn{
	position: absolute;
	top: 80%;
	width: 140px;
	height: 40px;
	cursor: pointer;
	background: #9dd9d9;
	color: #1c1c1c;
	text-align: center;
	line-height: 40px;
	font-size: 14px;
	font-weight: 550;
	border: none;
	border-radius: 50px;
	box-shadow: inset -3px -3px 5px #00000060;
	&:hover{
	box-shadow: inset -2px -2px 5px #00ffff, 0 0 5px #00ffff;
	}
}
.bar {
	position: absolute;
	z-index: 1;
	width: 400px;
	height: 5px;
	top: 40px;
	left: 0;
	//transform: scaleX(1);
	opacity: 0;
	background: #009494;
	box-shadow: 0 .2px 3px #00ffff50;
		/*&.active {
			animation: bar 3.1s cubic-bezier(.15,.69,1,.67) forwards;
	}*/
}
    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: white;
background-color: #6e840b;
    border-color: #dee2e6 #dee2e6 #fff;
    border-bottom: 2px solid #495057;
}




    select {
    word-wrap: normal;
    height: 49px;
    width: 235px;
        font-family: 'Montserrat';
font-style: normal;
font-weight: 400;
font-size: 14px;
line-height: 28px;
/* identical to box height, or 200% */
padding-left: 12px;
letter-spacing: 0.005em;
text-transform: capitalize;

color: #424242;

opacity: 0.8;
     border: 1px solid #ADADAB;

}


    .creat-input{
        height: 49px;
    width: 235px;
        padding-left: 12px;
        font-family: 'Montserrat';
font-style: normal;
font-weight: 400;
font-size: 14px;
line-height: 28px;
/* identical to box height, or 200% */

letter-spacing: 0.005em;
text-transform: capitalize;

color: #424242;

opacity: 0.8;
     border: 1px solid #ADADAB;
    }
.percent{
	position: absolute;
	width: 40px;
	height: 40px;
	top: 50%;
	left: 50%;
	transform: translate(-20px, -20px);
	display: flex;
	align-items: center;
	justify-content: center;
	color: #d9d9d9;
	border-radius: 50%;
	opacity: 0;
	font-size: 15px;
	font-weight: 700;
}


/*@keyframes bar{
	98%{transform: scaleX(1);}
	100%{transform: scaleX(1);}
}*/

@keyframes percent{
	0%, 100%{transform: scale(0), translate(-20px, -20px); opacity: 0; top: 50%; left: 50%;}
	10%, 90%{transform: scale(1), translate(-20px, -20px);}
	30%, 70%{opacity: 1;}}

@keyframes load{
	0%{transform: rotate(0); opacity: 0;}
	20%{opacity: 1;}
	80%{opacity: 1;}
	100%{transform: rotate(360deg); opacity: 0;}
}

@keyframes done{
	0%{opacity: 0;}
	50%{transform: scale(1.5);}
	100%{opacity: 1; transform: scale(1.4);}
}

    .my-product {
    border: 2px solid lightgrey;
    padding: 13px;
    background:  #E3E4E6;
    height: 63px;

    }
    .modal-brand {
    border: 1px solid #B6B7BA;
    height: 200px;
    width: 100%;
    padding: 0px 14px;
}

    .my-product input {
    margin-top: 40px;
    width: 209px;
    height: 49px;
}

    label {
    display: flex;
    margin-bottom: 0.5rem;
    margin-top: 21px;
}

    .post-row {
    margin: 9px;
}



    .bran h2{
        font-family: 'Montserrat';
font-style: normal;
font-weight: 700;
font-size: 13px;
line-height: 17px;
/* identical to box height, or 131% */

letter-spacing: 1px;
text-transform: uppercase;

color: #424242;
    }

    .save-post{
     background-color: #6E7E1D;
        color: white !important;
        padding: 10px 20px;
        font-family: 'Montserrat';
font-style: normal;
font-weight: 500!important;
font-size: 11.541px;
line-height: 180%;

}

    .save-btn{
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
  display: flex;
}

div.gallery img {
  width: 100%;
  height: auto;
/*  width: 200px;
    height: 200px;*/

}

div.desc {
  padding: 15px;
  text-align: center;
}
#image{

  width: 100%;
    height: auto;
  /*margin-left: -10px;*/
}

</style>
<div class="container-fluid" style="background-color: lightgrey; ">
  <div class="container" style="background-color:white; padding-bottom: 10%;padding-top:40px;">
  @if (session('success'))
              <div class="alert alert-success" role="alert"> {{session('success')}}
              </div>@endif
    <div class="profile-edit" style="margin-top: 10px;margin-bottom: 20px;">
      <h3>Create Post </h3>
    </div>
    <ul class="nav nav-tabs" role="tablist" style="gap:20px;">
      <li class="nav-item"></li>
    </ul><!-- Tab panes -->
    <form action="{{ route('seller.create.post') }}" method="post" enctype="multipart/form-data">
      @csrf

      <div class="tab-content">

        <div class="tab-pane active" id="tabs-1" role="tabpanel">
          <div style="margin-top: 0%;">
            <p> Add Videos/Images</p>
            <!-- <input id="image" type="file" name="img" multiple=""> -->
          </div>
          <div class="frame">
            <div class="center">
              <div class="progress">
                <div class="bar"></div >
                <div class="percent">0%</div>
              </div>
              <div class="dropzone">
                <div class="content">
                  <!-- <label for="img" class="filename"></label> -->
                  <input id="img" type="file" name="img[]" multiple="" required>
                  <img id="image"  />
                  <!-- <input id="img" type="file" name="img" accept="image/png, image/jpeg" multiple=""> -->
                </div>
              </div>
              <span class="material-icons syncing">cloud_upload</span>
              <span class="material-icons upload">loop</span>
              <span class="material-icons done">file_download_done</span>
            </div>
          </div>@error('file')
          <!-- <div class="gallery"></div> -->

          <div class="alert alert-danger">{{ $message }}</div>@enderror
          <div class="container" style="background-color:white; padding-bottom: 10%;padding-top:40px;">
            <div class="profile-edit" style="margin-top: 10px;margin-bottom: 20px;">
              <h3 style="margin-top: 14%">Listing </h3>
            </div>

            <div class="modal-brand">
              <div class="row my-product">
                <div class="col-md-2">
                  <div class="bran">
                    <h2> Product Name</h2>
                  </div>
                  <input type="text" id="product_name" name="product_name" placeholder="Product Name">
                  @error('product_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-2">
                  <div class="bran">
                    <h2> Brand Name</h2>
                  </div>
                  <input type="text" id="brand_name" name="brand_name" placeholder="Brand Name">
                  @error('brand_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-2">
                  <div class="bran">
                    <h2> Model Number</h2>
                  </div>
                  <input type="text" placeholder="Model No." id="modal_number" name="modal_number" >
                  @error('modal_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-2">
                  <div class="bran">
                    <h2>Serial Number</h2>
                  </div>
                  <input type="text" placeholder="Serial Number" id="serial_number" name="serial_number">
                  @error('serial_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-2">
                  <div class="bran">
                    <h2>Quantity</h2>
                  </div>
                  <input type="text" placeholder="Quantity" id="quanty" name="quantity">
                  @error('quantity')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-2">
                  <div class="bran">
                    <h2> Unit </h2>
                  </div>
                    <select class="form-select" id="unit" name="unit" style="margin-top: 40px;width: 150px;height: 49px;">
                      <option value="">Select unit</option>
                      <option value="KG">KG</option>
                      <option value="Tons">Tons</option>

                    </select>
                @error('unit')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              </div>
            </div>
            <div class="row post-row">
              <div class="col-md-3">
                <label> Sources </label>
                <select class="form-select" id="cars" name="source">
                  <option value="">Select Source</option>
                  <option value="Industrial">Industrial</option>
                  <option value="External">External</option>

                </select>
                @error('source')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-3">
                <label> Condition Of Material</label>
                <select class="form-select" id="cars" name="condition_of_material">
                  <option value="">Select condition</option>
                  <option value="Old">Old</option>
                  <option value="New">New</option>

                </select>
                @error('condition_of_material')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-3">
                <label>Discount <i class="fa fa-percent" aria-hidden="true"></i></label>
                <input class="creat-input" type="number" placeholder="Discount" id="discount" name="discount">
                @error('discount')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-3">
                <label>Offer</label>
                <input class="creat-input" type="text" placeholder="Offer" id="offer" name="offer">
                @error('offer')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row post-row">
              <div class="col-md-3">
                <label> Pick up facility </label>
                <select class="form-select" id="cars" name="pickup_faculty">
                  <option value="">Please Select</option>
                  <option value="Free">Free</option>
                  <option value="Paid">Paid</option>

                </select>
                @error('pickup_faculty')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-3">
                <label>Hours of Operations</label>
                <input class="creat-input" type="text" placeholder="Hours of Operations" id="hours_of_operation" name="hours_of_operation">
                @error('hours_of_operation')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-3">
                <label>Availability</label>
                <input class="creat-input" type="date" placeholder="Select date" id="availability" name="availability" style="width: 100%;height: 48px;">
                @error('availability')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-3"></div></div>
              <div class="container" id="myDIV" style="background-color:white; padding-bottom: 10%;padding-top:40px;">
                <div class="profile-edit" style="margin-top: 10px;margin-bottom: 20px;">
                  <h3>Pricing </h3>
                </div>
                <div class="row post-row">
                  <div class="col-md-3">
                    <label> Price</label>
                    <input class="creat-input" type="text" placeholder="Price" id="price" name="price">@error('price')
                    <div class="alert alert-danger">{{ $message }}
                    </div>@enderror
                  </div>
                  <div class="col-md-3">
                    <label>Providing Transport</label>
                    <select class="form-select" id="cars" name="transport">
                      <option value="">Please Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>

                    </select>
                    @error('transport')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-3">
                    <label>Cost of transport</label>
                    <input class="creat-input" type="text" placeholder="Cost of transport" id="price_availability" name="price_availability">
                    @error('price_availability')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-3"></div>
                </div>
              </div>
              <div style="display: flex;gap: 10px;align-items: baseline;margin-left: 14px;">
                <input type="checkbox" id="negotiable" name="negotiable" value="1">
                <label for="negotiable">Negotiable</label>
                <input type="checkbox" onclick="myFunction()" id="bid" name="bid" value="1">
                <label for="bid">Bid</label>
              </div>
              <div class="save-btn">
                <input type="submit" class="save-post" name="submit" value="Save Post">
              </div>
            </div>
          </div>
        </div>
      </form>
    </form>
  </div>
</div>

@endsection

@push('js')
<script>
  var droppedFiles = false;
  var fileName = '';
  var $dropzone = $('.dropzone');
  var $button = $('.upload-btn');
  var uploading = false;
  var $load = $('.upload');
  var $syncing = $('.syncing');
  var $done = $('.done');
  var $bar = $('.bar');
  var $percent = $('.percent');
  //var $percentUpload = (event.loaded / event.total) * 100 + '%';
  var $percentUpload = (4340 / 7000) * 100 + '%';
  var timeOut;

  //$bar.width($percentUpload);
  $bar.width(0 +"%");
  $percent.html($percentUpload );

  $dropzone.on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
    e.preventDefault();
    e.stopPropagation();
  });

    $dropzone.on('drop', function(e) {
    droppedFiles = e.originalEvent.dataTransfer.files;
    fileName = droppedFiles[0]['name'];
    $('.filename').html(fileName);
    $('.dropzone .upload').hide();
    $('.syincing').fadeOut();
  });

  $button.bind('click', function() {
    startUpload();
  });

  $("input:file").change(function (){
    fileName = $(this)[0].files[0].name;
    var a=$(this)[0].files[0].size;
    if(a > 2000000) {
            alert('Image size should be less than 2MB');
            return false;
        };
    $('.filename').html(fileName);
    $('.dropzone .upload').hide();

  });

  function startUpload(event, position, total, percentComplete) {
    if (!uploading && fileName != '' ) {
      uploading = true;
      $button.html('Uploading...');
      $dropzone.fadeOut();
      $syncing.fadeOut();
      $load.addClass('active-b');
      $done.addClass('active-c');
      $percent.css({"animation" : "percent 3.8s ease-in-out"});

      $bar.css({"width" : "100%", "opacity" : "1", "transition" : "width 3.8s", "transition-time-function" : "cubic-bezier(.15,.69,1,.67)"});
      $percent.html($percentUpload);

      timeoutID = window.setTimeout(showDone, 3800);
    }
  }

  function showDone() {
    $button.html('Done');
    $bar.css({"background" : "#d9d9d9", "box-shadow" : "0 0 0 #9dd9d9"});
    $percent.css({"opacity" : "0"});
    $button.css({"cursor" : "default", "opacity" : ".3", "box-shadow" : "inset 0 0 0 #000", "transition" : "opacity .8s"});
  }
</script>
<script>
function myFunction() {

  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
document.getElementById('img').onchange = function () {
  var src = URL.createObjectURL(this.files[0])
  document.getElementById('image').src = src
}
// $(function() {
//     // Multiple images preview in browser
//     var imagesPreview = function(input, placeToInsertImagePreview) {

//         if (input.files) {
//             var filesAmount = input.files.length;

//             for (i = 0; i < filesAmount; i++) {
//                 var reader = new FileReader();

//                 reader.onload = function(event) {
//                     $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
//                 }
//                 reader.readAsDataURL(input.files[i]);
//             }
//         }

//     };

//     $('#img').on('change', function() {
//         imagesPreview(this, 'div.gallery');
//     });
// });

</script>


@endpush