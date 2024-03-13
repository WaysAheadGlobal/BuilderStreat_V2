@extends('layouts.buyer-app')

@section('content')
<style>


    .myinput{
        background-image: url(https://www.pngarea.com/pngm/109/1164446_searchicon-png-search-icon-png-download.png);
        background-position: right ;
  background-size: 30px !important;
        background-size: contain;
  background-repeat: no-repeat;
    }

    .equip{
      background: #6e840b;
        color: white;
        padding: 20px 36px;
        margin-top: 2%;
    }


    .mater{


        padding: 20px 36px;
        margin-top: 2%;
    }


    .equip:active{
        background: #6e840b;
    }

    .two-btn{
        border: 1px solid black;
      margin-top: 20px;
        margin-bottom: 20px;
        padding: 14px 0px;
    }

    .const select{
        display: flex;
    width: 100%;
    height: 50px;
    border: 1px solid #6E7E1D;
    font-family: 'Montserrat';
font-style: normal;
font-weight: 400;
font-size: 14px;
line-height: 28px;
/* identical to box height, or 200% */

letter-spacing: 0.005em;
padding: 0 20px;
color: #424242;

opacity: 0.8;
    }

    .sea-btn{
      background: #6e840b;
        color: white;
        padding: 13px 40px;
        border-radius: 10px;
        margin-top: 12%;


    }

    .dash h1{
        font-family: 'Ubuntu';
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 40px;
/* identical to box height, or 165% */

display: flex;
align-items: center;
letter-spacing: -0.329609px;
text-transform: capitalize;

color: #424242;
    }

    .m-search{
        display: flex;
        justify-content: center;
    }

    .profile-edit1 h3 {
    border-bottom: 2px dotted brown;
    font-size: 16px;
    margin-bottom: 20px;
}
.bottom-right {
  position: absolute;
  bottom: 30px;
  left: 20px;
  color: white;
  font-weight: 600;
}

    .key{
      border: 1px solid #6E7E1D!important;
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
    }

    .dash{
    width: 793px;
height: 739px;
background: #FFFFFF;
box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);
border-radius: 5px;
        padding-top: 49px;
    padding-left: 40px;
    overflow: auto;
    }

    img.eit-image {
    width: 212px;
    height: 264px;
}

    .my-dash{
        display: flex;
        flex-wrap: nowrap;
        gap:20px;
    }


    .enter-col{
        width: 388px;
height: 739px;
padding-top: 35px;
    padding-left: 18px;
    padding-right: 13px;
background: #FFFFFF;
box-shadow: 0px 0px 10px 2px rgba(136, 136, 136, 0.25);
border-radius: 5px;
    }

    .myinput12{
       border: 1px solid #6E7E1D!important;
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
    }

</style>

<div class="container-fluid" style="background-color: #F3F2F4; height: 900px; ">
    <div class="container" style=" padding-bottom:10%; height: 800px; padding-top:40px;position:relative;top: -19px;">
        <div class="row my-dash">
            <div class="col-md-4 enter-col">
                <form method="POST" action="{{ route('buyer.buyer-product-search') }}">
                    @csrf
                    <div>
                        <label> Enter Keyword</label>
                        <input class="key" name="name"type="search" placeholder="Enter Keyword">
                    </div>
                    <div class="const">
                        <label> Construction to be done</label>
                        <select class="form-select" id="cars" name="carlist" form="carform" disabled>
                            <option value="volvo">Select Category</option>
                            <option value="Large Scale">Large Scale</option>
                            <option value="Small Scale">Small Scale</option>

                        </select>
                    </div>
                    <div>
                        <label> Name of Contractor</label>
                        <input class="myinput12" name="vendor" type="search" placeholder="Name of Contractor " >
                    </div>
                    <div class="m-search">
                        <!-- <a href="#" class="sea-btn"> Search</a> -->
                        <input class="sea-btn" style="color:white" type="submit" value="Search">
                    </div>
                </form>
            </div>
            <div class="col-md-8 dash">
                <h1> Most Popular Categories</h1>
                <div class="panel panel-default">
                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
            </div>
            <div class="profile-edit14">
                <h3 style="border-bottom: 2px dashed #7B4425;">C&D Waste Materials</h3>
            </div>
            <div class="row">
                @foreach($details as $detail)
                <div class="col-md-4">
                    <?php if($detail->file !=""){
                        $img = explode("|", $detail->file);
                        $image = 'images/posts/'.$img['0'];
                        ?>
                        <a href="{{ url('/buyer-product-details'.'/'.$detail->id) }}">
                            <figure class="image">
                                <img src='{{ asset("$image") }}' class="eit-image" alt="Image">
                                <a href="{{ url('/buyer-wishlist-add'.'/'.$detail->id) }}"> <img src="{{ asset('images/seller/wishlist_icon.svg') }}" style="position: absolute;top: -4px;right: 39px;">
                                </a>
                            </figure>
                        </a>
                    <?php }else{?>
                        <a href="{{ url('/buyer-product-details'.'/'.$detail->id) }}">
                            <figure class="image">
                                <img src="{{ asset('images/buyer/category1.png') }}" class="eit-image" alt="Image">
                                <a href="{{ url('/buyer-wishlist-add'.'/'.$detail->id) }}">
                                    <img src="{{ asset('images/seller/wishlist_icon.svg') }}" style="position: absolute;top: -4px;right: 39px;">
                                </a>
                            </figure>
                        </a>
                    <?php } ?>
                    <div class="bottom-right"><a style="color:white;"href="{{ url('/buyer-product-details'.'/'.$detail->id) }}">{{$detail->product_name}}</a></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>




@endsection