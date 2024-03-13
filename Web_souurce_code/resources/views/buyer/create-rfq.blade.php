@extends('layouts.buyer-app')

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
    height: 50px;
    width: 100%;
    font-family: 'Montserrat';
font-style: normal;
font-weight: 400;
font-size: 14px;
line-height: 28px;
/* or 200% */

letter-spacing: 0.005em;
text-transform: capitalize;

color: #424242;

opacity: 0.8;
}

    .side-con {
    display: flex;
    gap: 10px;
    align-items: center;
}

    .side-con h5{
        font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 13px;
line-height: 16px;
/* identical to box height */

letter-spacing: 0.005em;
text-transform: capitalize;

color: #424242;

    }

    .side-con h6{
        font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 13px;
line-height: 16px;
/* identical to box height */

letter-spacing: 0.005em;
text-transform: capitalize;

color: #121212;

    }

.input {

    width: 100% !important;
    height: 200px !important;
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

    padding: 13px;
   background: #E3E4E6;
border: 1px solid #B6B7BA;

    height: 63px;

    }
    .modal-brand {
    border: 2px solid grey;
    height: 200px;
    width: 100%;
    padding: 0px 14px;
}

    .my-product input{
       margin-top: 13%;
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
        font-size: 18px;
    }

    .save-post{
     background-color: #6e840b;
        color: white;
        padding: 10px 20px;
    }

    .save-btn{
        display: flex;
        justify-content: center;
        margin-top: 20px;
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

opacity: 0.8;
    }

    .side-detail h4{
        font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 14px;
line-height: 17px;
/* identical to box height, or 121% */

letter-spacing: 1px;
text-transform: capitalize;

color: #424242;

opacity: 0.8;
    }

    .ship-add{
        display: flex;
    justify-content: space-between;
    align-items: center;
        margin-top: 31px;
}

    .ship-add a{
        font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 14px;
line-height: 17px;
/* identical to box height, or 106% */

letter-spacing: 1px;
text-decoration-line: underline;
text-transform: capitalize;

color: #6E7E1D;

opacity: 0.8;
    }

    .phone h5{
        font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 13px;
line-height: 17px;
/* identical to box height, or 131% */

letter-spacing: 1px;
text-transform: capitalize;

color: #424242;

opacity: 0.8;
    }

  .fa-add:before, .fa-plus:before {
    content: "\2b";
    color: #6E7E1D;
    border: 1px solid #6E7E1D;
    border-radius: 50%;
    padding: 4px;
    font-size: 15px;
}

    .add{
        font-family: 'Montserrat';
font-style: normal;
font-weight: 700;
font-size: 13px;
line-height: 17px;
/* identical to box height, or 131% */

letter-spacing: 1px;
text-transform: uppercase;
margin-top: 19px;
    margin-left: 12px;
color: #424242;

opacity: 0.8;
    }

    /*div.icon {
    margin-top: 4px;
    float: left;
    width: 31px;
    height: 30px;
    background-image: url("magnify.gif");
    background-repeat: no-repeat;
    -webkit-transition-property: background-position, color;
    -webkit-transition-duration: .2s, .1s;
    -webkit-transition-timing-function: linear, linear;
    -moz-transition-property: background-position, color;
    -moz-transition-duration: .2s, .1s;
    -ms-transition-duration: .2s, .1s;
    -ms-transition-timing-property: linear, linear;
    -o-transition-property: background-position, color;
    -o-transition-duration: .2s, .1s;
    -o-transition-timing-property: linear, linear;
    transition-property: background-position, color;
    transition-duration: .2s, .1s;
    transition-timing-property: linear, linear;
}
div.icon:hover {
    background-position: 0px -30px;
    cursor: pointer;
}*/
input#search {
    height: 35px;
    padding: 5px;
    margin-top:  5px;
    margin-bottom: 15px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    outline: none;
    border: 1px solid #ababab;
    font-size: 20px;
    line-height: 25px;
    color: #ababab;
}
input#search:hover, input#search:focus {
    color: #3b3b3b;
    border: 1px solid #36a2d2;
    -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset, 0 1px 0 rgba(255, 255, 255, 1);
    -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset, 0 1px 0 rgba(255, 255, 255, 1);
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset, 0 1px 0 rgba(255, 255, 255, 1);
}
h4#results-text {
    display: none;
}
ul#results {
    display: none;
    width: 100%;
    margin-top: 4px;
    border: 1px solid #ababab;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    -webkit-box-shadow: rgba(0, 0, 0, .15) 0 1px 3px;
    -moz-box-shadow: rgba(0,0,0,.15) 0 1px 3px;
    box-shadow: rgba(0, 0, 0, .15) 0 1px 3px;
}
ul#results li {
    padding: 8px;
    cursor: pointer;
    border-top: 1px solid #cdcdcd;
    transition: background-color .3s ease-in-out;
    -moz-transition: background-color .3s ease-in-out;
    -webkit-transition: background-color .3s ease-in-out;
}
ul#results li:hover {
    background-color: #F7F7F7;
}
ul#results li:first-child {
    border-top: none;
}
ul#results li h3, ul#results li h4 {
    transition: color .3s ease-in-out;
    -moz-transition: color .3s ease-in-out;
    -webkit-transition: color .3s ease-in-out;
    color: #616161;
    line-height: 1.2em;
}
ul#results li:hover h3, ul#results li:hover h4  {
    color: #3b3b3b;
    font-weight: bold;
}
.search-icon{
    position: absolute;
}

</style>

<div class="container-fluid" style="background-color: lightgrey; ">
    <div class="container" style="background-color:white; padding-bottom: 10%;padding-top:40px; position: relative;top: 10px;">
        <div class="profile-edit" style="margin-top: 10px;margin-bottom: 20px;">
            <h3>Create RFQ </h3>
        </div>
        <div class="panel panel-default">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
</div>
        <div class="tab-content">
            <div class="container" style="background-color:white; padding-bottom: 10%;">
                <form method="POST" action="{{ route('buyer.buyeCreateRfq') }}">
                    @csrf
                    <div class="row" >
                        <div class="col-md-8">
                            <div class="modal-brand">
                                <div class="row my-product">
                                    <div class="col-md-5">
                                        <div class="bran">
                                            <h2> Product Name</h2>
                                        </div>
                                        <select style="margin-top: 13%;" name="name[]" id="com">
                                            @foreach($result3 as $name)
                                            <option value="{{$name->product_name}}">{{$name->product_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="bran">
                                            <h2>Condition of material</h2>
                                        </div>
                                        <select style="margin-top: 13%;" name="com[]" id="com">
                                            <option value="Old">Old</option>
                                            <option value="New">New</option>
                                            <option value="all">all</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="bran">
                                         <h2> Quantity</h2>
                                        </div>
                                        <input style="margin-top: 39%;" type="text" placeholder="1" id="quantity" name="quantity[]">
                                    </div>
                               </div>
                           </div>
                            <!-- <div class="" id="btn1" style="cursor:pointer;"><i class="fa fa-plus" aria-hidden="true"></i> Add Product</div> -->
                            <div class="container" style="background-color:white; padding-bottom: 10%;padding-top:40px;">
                                <div class="row post-row">
                                    <div class="col">
                                        <label>Shipping Preference</label>
                                        <select class="form-select" id="shipping_preference" name="shipping_preference" >
                                            <option value="">Please Select</option>
                                            <option value="Express">Express</option>
                                            <option value="Normal">Normal</option>
                                            <!-- <option value="Metals">Metals</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="row post-row">
                                    <div class="col">
                                        <label>Pick up Facility</label>
                                        <select class="form-select" id="pick_up_facility" name="pick_up_facility">
                                            <option value="">Please Select</option>
                                            <option value="free">Free</option>
                                            <option value="paid">Paid</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row post-row">
                                    <div class="col">
                                        <label>Additional Details</label>
                                        <input class="input" type="text" name="additional_detail" placeholder="Add Additional Details" style="height: 79px !important;">
                                    </div>
                                </div>
                                <div class="save-btn">
                                    <!-- <a href="#" class="save-post"> Submit Rfq</a> -->
                                    <input style=" width: 122px; height: 44px;display: flex;justify-content: center; background: #6e840b;padding: 10px 20px;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 11.541px;line-height: 180%;color: #FFFFFF;"class="btn btn-primary log-in" style="color: white;" class="btn btn-primary" type="submit" value="Submit RFQ">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="side-detail">
                                <h4> Contact Information</h4>
                                <div class="side-con">
                                    <h5>Name:</h5>
                                    <h6>{{ $result->name }}</h6>
                                </div>
                                <div class="side-con">
                                    <h5>E-mail Id:</h5>
                                    <h6>{{ $result->email}}</h6>
                                </div>
                            <!-- <div class="phone"> -->
                            <div class="side-con">
                                <h5>Phone no.</h5>
                                <h6>{{ $result->phone}}</h6>
                                <!-- <input type="text" placeholder="+1 456 789 6574" value="{{ $result->phone }}"> -->
                            </div>
                        </div>
                        <div class="side-detail">
                            <div class="ship-add">
                                <h4> Shipping address</h4>
                                <a class="btn btn-secondary mt-4 detail-btn" data-toggle="modal" data-target="#customer" data-id="{{ $result->id }}" style="color:white">Edit<i style="font-size:16px" class="fa">&#xf044;</i> </a>
                                <!-- <a class="btn btn-secondary mt-4 detail-btn" href="Javascript:void(0)" style="color:white">Edit<i style="font-size:16px" class="fa">&#xf044;</i> </a> -->
                            </div>
                            <div class="side-con">
                                <h5>Name:</h5>
                                <h6>{{(isset($result2) && ($result2->user_name)) ? $result2->user_name : 'N/A'}}</h6>

                            </div>
                            <div class="side-con">
                                <h5>Company Name:</h5>
                                <h6>{{(isset($result2) && ($result2->company_name)) ? $result2->company_name : 'N/A'}}</h6>
                            </div>
                            <div class="side-con">
                                <h5>Country:</h5>
                                <h6>{{(isset($result2) && ($result2->country)) ? $result2->country : 'N/A'}}
                            </div>
                            <div class="side-con">
                                <h5>Address:</h5>
                                <h6>{{(isset($result2) && ($result2->address)) ? $result2->address : 'N/A'}}</h6>
                            </div>
                            <div class="side-con">
                                <h5>State:</h5>
                                <h6>{{(isset($result2) && ($result2->state)) ? $result2->state : 'N/A'}}</h6>
                            </div>
                            <div class="side-con">
                                <h5>Zip Code:</h5>
                                <h6>{{(isset($result2) && ($result2->zipcode)) ? $result2->zipcode : 'N/A'}}</h6>
                            </div>
                        </div>
                        <div class="side-detail" style="margin-top: 27px;">
                            <h4> Add vendor (optional)</h4>
                            <div class="phone">
                                <h5>Name:</h5>
                                <!-- <input type="text"placeholder="Search vendor name "> -->
                                <div class="row">
                                    <!-- <div class="col-md-2">
                                        <div class="icon"></div>
                                    </div> -->
                                    <div class="col-md-10">

                                        <input placeholder="search vendor name" name="vendor" type="text" id="search" autocomplete="off"><!-- <i class="fa fa-search search-icon" aria-hidden="true"></i> -->
                                    </div>
                                    <ul id="results"></ul>
                                </div>
                            </div>
                            <div class="side-con">
                                <input type="checkbox" id="vehicle1" name="broadcast" value="1">
                                <label for="vehicle1"> Broadcast to Builderstreat Solutions Supplier
Network</label><br>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="customer" tabindex="-1" role="dialog" aria-labelledby="customer" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="customer">Edit Shipping address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="POST" action="" accept-charset="UTF-8" id="bookFormsUpload" enctype="multipart/form-data">
            @csrf
            @include('buyer.shipping._form')
            <input style=" width: 122px; height: 44px;display: flex;justify-content: center; background: #6e840b;padding: 10px 20px;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 11.541px;line-height: 180%;color: #FFFFFF;"class="btn btn-primary log-in" style="color: white;" class="btn btn-primary" type="submit" value="Update">
         </form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>

@endsection

@push('js')
<script>
$(document).ready(function(){

  $("#btn1").on('click', function(){
    $.ajax({
                type: "GET",
                url: "{{ url('/buyer-all-products-get') }}",
                cache: false,
                success: function(data){
                    $.each(data['result'], function(index, item) {
                        // $("#BrandsEnabled").append(`<option value=${info.id}>${info.first_name}</option>`)
                        $('.BrandsEnabled').append("<option value="+item['product_name']+">"+item['product_name']+"</option>");
                    });
                    // console.log(data);

                }

            });
    $('<div class="modal-brand"><div class="row my-product"><div class="col-md-5"><div class="bran"><h2> Product Name</h2></div><select  name="name[]" style="margin-top: 13%;"id="com" class="custom-select BrandsEnabled" required><option value="">Select</option></select></div><div class="col-md-5"><div class="bran"><h2>Condition of material</h2></div><select style="margin-top: 13%;" name="com[]" id="com"><option value="volvo">Old</option><option value="saab">New</option><option value="mercedes">all</option></select></div><div class="col-md-2"><div class="bran"><h2> Quantity</h2></div><input style="margin-top: 39%;" type="text" placeholder="1" id="quantity" name="quantity[]"></div></div></div>').insertBefore('#btn1');
  });
});
</script>
<script type="text/javascript">

// Search
$(document).ready(function() {
    // Icon Click Focus
    $('div.icon').click(function(){
        $('input#search').focus();
    });
    function search() {
        var query_value = $('input#search').val();
        $('b#search-string').text(query_value);
        if(query_value !== ''){
            $.ajax({
                type: "POST",
                url: "{{ url('/buyer-vendors') }}",
                data: {_token:'{{ csrf_token() }}', query: query_value},
                cache: false,
                success: function(data){
                    $.each(data['result'], function(index, item) {
                        $('#results').append("<li onclick='display(this)'value="+item['name']+" style='list-style-type:none;'>"+item['name']+"</li>");
                    });
                }
            });
        }return false;
    }
    $("input#search").live("keyup", function(e) {
        // Set Timeout
        clearTimeout($.data(this, 'timer'));
        // Set Search String
        var search_string = $(this).val();
        // Do Search
        if (search_string == '') {
            $("ul#results").fadeOut();
            $('h4#results-text').fadeOut();
        }else{
            $("ul#results").fadeIn();
            $('h4#results-text').fadeIn();
            $(this).data('timer', setTimeout(search, 100));
        };
    });
});
</script>

<script>
function display(elm) {
  var x = elm.getAttribute('value');
  console.log(x);
  document.getElementById("search").setAttribute('value',x);
  document.getElementById("search").value = x;
  document.getElementById("results").style.display = 'none';
}
</script>
@endpush


