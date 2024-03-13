@extends('layouts.buyer-app')

@section('content')
<style>
    .my-input{
        width: 515px !important;
        height: 49px !important;
        opacity: 0.5;
        border: 1px solid #6E7E1D;
        font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 28px;
/* identical to box height, or 200% */

letter-spacing: 0.005em;

color: #424242;

    }

    .my-input1{
        width: 331px !important;
        height: 49px !important;
        opacity: 0.5;
        border: 1px solid #6E7E1D;
        font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 28px;
/* identical to box height, or 200% */

letter-spacing: 0.005em;

color: #424242;

    }

</style>
<div class="container-fluid" style="background-color: lightgrey;   ">

    <form method="POST" action="{{ route('buyer.post.editprofile') }}">
         @csrf
         @if (session('success'))
          		<div class="alert alert-success" role="alert"> {{session('success')}}
          		</div>
                @endif
         <div class="container" style="background-color:white; padding-bottom: 10%; padding-top:40px;position: relative;top: 19px;width: 60%;">

         <div class="profile-edit1">
                <h3>Edit Profile </h3>
                <a href="{{url('buyer-profile')}}">
              <i style="font-size:24px;font-size: 15px;
    position: absolute;
    right: 28px;
    top: 76px;
    color: white;background: #7B4425;padding: 4px" class="fa">&#xf00d;</i></a>
            </div>

            <div class="profile1">
                <div class="pro-pic1">
                    <?php if(isset($detail) && ($detail->image)){
                    ?>
                     <img class="profile-pic" src="{{asset('images/users').'/'.$detail->image}}" width="172px" height="172px">
                 <?php } else{?>
                    <img class="profile-pic" src="https://img.icons8.com/bubbles/100/000000/edit-user.png" width="172px" height="172px">
                     <?php } ?>


                    <input type="file" name="admin_image" id="admin_image" style="opacity: 0;height:1px;display:none">
                  <a href="javascript:void(0)" style="background-color: #6e840b;color: white;width: 122px;height: 44px;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 11.541px;line-height: 180%;/* identical to box height, or 21px */display: flex;margin-left: 24px;justify-content: center;align-items: center;color: #FFFFFF;border-radius: 10px;" id="change_picture_btn"><b>Update Profile pic</b></a>
                </div>
                <div style="margin-left: 2%;">
                    <div class="pro-name1">
                        <label> Full Name</label>
                        <input class="my-input" value="{{ $result->name }}"name="name" type="text" placeholder="john cena">
                    </div>
                    <div class="pro-name1">
                        <label> Email Id</label>
                        <input class="my-input" value="{{ $result->email }}" name="email" type="email" placeholder="john cena@gmail.com">
                    </div>
                    <div class="pro-name1">
                        <label>Mobile Number</label>
                        <input class="my-input" name="phone" value="{{ $result->phone }}" type="number" placeholder="+ 91 99999999" style=" width: 417px;" >
                    </div>
                    <div class="nextpro12">
                        <div class="">
                            <label>Company Name</label>
                            <input class="my-input1" value="{{(isset($detail) && ($detail->company_name)) ? $detail->company_name : ''}}"type="text" placeholder="Blue Laddder Construction" name="company">
                        </div>
                    </div>
                </div>
            </div>
            <div class="nextpro">
                <div class="pro-name1">
                    <label> Choose Country</label>
                    <select class="my-input1" id='country' name='country' >
                        <option value="">Select country</option>
                        <option value="canada" <?= (isset($detail) && $detail->country == 'canada') ? 'selected' : ''?>>canada</option>
                        <option value="india" <?= (isset($detail) && $detail->country == 'india') ? 'selected' : ''?>>india</option>
                        <option value="usa" <?= (isset($detail) && $detail->country == 'usa') ? 'selected' : ''?>>USA</option>
                        <option value="uk" <?= (isset($detail) && $detail->country == 'uk') ? 'selected' : ''?>>UK</option>
                    </select>
                </div>
                <div class="pro-name1">
                    <label> State</label>
                    <select class="my-input1" id='country_select' name='state'>
                         <option value="">select state</option>
                        <option value="Alberta"  <?= (isset($detail) && $detail->state == 'Alberta') ? 'selected' : ''?>>Alberta</option>
                        <option value="British Columbia" <?= (isset($detail) && $detail->state == 'British Columbia') ? 'selected' : ''?>>British Columbia</option>
                        <option value="Jaipur" <?= (isset($detail) && $detail->state == 'Jaipur') ? 'selected' : ''?>>Jaipur</option>
                        <option value="New Brunswick" <?= (isset($detail) && $detail->state == 'New Brunswick') ? 'selected' : ''?>>New Brunswick</option>
                        <option value="Newfoundland and Labrador" <?= (isset($detail) && $detail->state == 'Newfoundland and Labrador') ? 'selected' : ''?>>Newfoundland and Labrador</option>
                        <option value="Northwest Territories" <?= (isset($detail) && $detail->state == 'Northwest Territories') ? 'selected' : ''?>>Northwest Territories</option>
                        <option value="Nova Scotia" <?= (isset($detail) && $detail->state == 'Nova Scotia') ? 'selected' : ''?>>Nova Scotia</option>
                        <option value="Nunavut" <?= (isset($detail) && $detail->state == 'Nunavut') ? 'selected' : ''?>>Nunavut</option>
                        <option value="Ontario" <?= (isset($detail) && $detail->state == 'Ontario') ? 'selected' : ''?>>Ontario</option>
                        <option value="Prince Edward Island" <?= (isset($detail) && $detail->state == 'Prince Edward Island') ? 'selected' : ''?>>Prince Edward Island</option>
                        <option value="Quebec" <?= (isset($detail) && $detail->state == 'Quebec') ? 'selected' : ''?>>Quebec</option>
                        <option value="Saskatchewan" <?= (isset($detail) && $detail->state == 'Saskatchewan') ? 'selected' : ''?>>Saskatchewan</option>
                        <option value="Yukon" <?= (isset($detail) && $detail->state == 'Yukon') ? 'selected' : ''?>>Yukon</option>
                    </select>
                </div>
            </div>
            <div class="nextpro">
                <div class="pro-name1">
                    <label>Address:</label>
                    <input class="my-input1" type="text" value="{{(isset($detail) && ($detail->address)) ? $detail->address : ''}}" placeholder="21 street, Near. steaphen road" name="address">
                </div>
                <div class="pro-name1">
                    <label> Zip Code</label>
                    <input class="my-input1" name="zipcode" type="text" value="{{(isset($detail) && ($detail->zipcode)) ? $detail->zipcode : ''}}" placeholder="L0H 9Z9">
                </div>
            </div>

            <div class="botto-btn">
                <a style=" width: 122px;height: 44px;display: flex; justify-content: center;align-items: center; border: 1px solid #6e840b; padding: 10px 20pxfont-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 11.541px;line-height: 180%;color: #6E7E1D;" href="#"> Delete account
                </a>
                <!-- <a href="#" style=" width: 122px; height: 44px;display: flex;justify-content: center; background: #6e840b;padding: 10px 20px;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 11.541px;line-height: 180%;color: #FFFFFF;"> Save
                </a> -->
                <button type="submit" style=" width: 122px; height: 44px;display: flex;justify-content: center; background: #6e840b;padding: 10px 20px;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 11.541px;line-height: 180%;color: #FFFFFF;"class="btn btn-primary log-in" style="color: white;">Save</button>
            </div>
        </div>
    </form>
</div>
@push('js')
<script>

    $(document).on('click','#change_picture_btn', function(){
      $('#admin_image').click();
    });

    $('#admin_image').ijaboCropTool({
          preview : '.admin_picture',
          setRatio:1,
          allowedExtensions: ['jpg', 'jpeg','png'],
          buttonsText:['CROP','QUIT'],
          buttonsColor:['#30bf7d','#ee5155', -15],
          processUrl:'{{ url("/buyer-profile-image") }}',
          withCSRF:['_token','{{ csrf_token() }}'],
          onSuccess:function(message, element, status){
             alert(message);
             location.reload();
          },
          onError:function(message, element, status){
            alert(message);
          }
       });
</script>


@endpush

@endsection