@extends('layouts.sellerApp')

@section('content')
<style>

    .message-pro h4{
       font-family: 'Ubuntu';
font-style: normal;
font-weight: 300;
font-size: 16px;
line-height: 18px;
text-transform: capitalize;

color: #000000;

    }

    .fa-smile:before {
    content: "\f118";
    color: #A9A8A8;
}



    .box-pro{

width: 869px;
height: 71px;
display: flex;
    gap: 31px;

background: #FFFFFF;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
color: #000000;


    }

    .box-pro h4{
        font-family: 'Montserrat';
font-style: normal;
font-weight: 700;
font-size: 14px;
line-height: 17px;
/* identical to box height */

text-transform: capitalize;

/* logo gray */

color: #333537;
    }

    .message-box{
        width: 870px;
height: 592px;


background: #FFFFFF;
box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);
    }

    .message {
       width: 261px;
height: 592px;


background: #FFFFFF;
box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);
    }




    .my-chat{
        font-family: 'Ubuntu';
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 28px;
/* identical to box height */

letter-spacing: 1px;
text-transform: capitalize;
padding: 30px;
color: #424242;

opacity: 0.8;
    }
    .chatbox{
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}
.chatbox::after {
  content: "";
  clear: both;
  display: table;
}

.chatbox img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.chatbox img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.badge {
  position: absolute;
  /*top: -10px;*/
  right: 10px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
}

</style>
<div class="container-fluid" style="background-color: lightgrey;">
    <div class="container" style="background-color:white; padding-bottom: 10%;position: relative;
    top: 30px;">
    <div class="profile-edit">
        <h3 > Messages </h3>
    </div>
    <?php
    $rId = auth()->user()->id;
    //echo $rId;
    ?>
    <div class="row chat-box">
        <div class="col-md-3 message ">
            @if(isset($result2))
            @foreach($result2 as $user)
            <div class="message-pro">
                <a style="color:white;"href="{{ url('/seller-buyer-chat'.'/'.$user->userId) }}">
                    <img class="profile-pic" src="{{asset('images/message-user2.png')}}">
                </a>
                <?php
                $userss = DB::table('messages')->where('sender_id',$user->userId)->where('receiver_id',$rId)->where('is_read','0')->count();
                ?>
                <a style="color:white;"href="{{ url('/seller-buyer-chat'.'/'.$user->userId) }}">
                <h4>{{$user->name}}</h4>

                </a>
                <span class="badge">{{$userss}} </span>

            </div>
            @endforeach
            @endif
        </div>
        <div class="col-md-9 message-box">
            <div class="chat-box">
                <div class="chat-box-pro">
                    <!-- <div class="box-pro">
                        <img class="profile-pic" src="https://builderstreat.ca/public/images/message-user3.png">
                        <h4></h4>
                    </div> -->
                </div>
            </div>
           <!--  <div class="footer-chat">
                <i class="fa fa-smile clickable" style="font-size:20px; margin-left: 20px;" aria-hidden="true"></i>
                <input type="text" class="write-message" placeholder="Type your message here" style="background: transparent;">
                <i style="font-size:24px ; margin-right: 10px;" class="fa clickable">&#xf03e;</i>
                <i class="fa fa-paper-plane clickable" style="font-size:24px;" aria-hidden="true"></i>
            </div> -->
        </div>
    </div>
</div>
</div>





@endsection