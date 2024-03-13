@extends('layouts.sellerApp')

@section('content')
<style>
  .chat-box-pro{
    overflow: auto;
    }
    .badge {
  position: absolute;
  /*top: -10px;*/
  right: 100px;
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
      <h3> Messages </h3>
      <?php 
    $rId = auth()->user()->id;
    ?>
    </div>
    <div class="row chat-box">
      <div class="col-md-3 message">
        <?php
          if((isset($senders)) && (count($senders) > 0) ){
            foreach ($senders as $key => $value) { ?>
              <a href="{{ route('seller.chat', base64_encode($value->senderId)) }}" title="" style="text-decoration: none;">
                <div class="message-pro">
                  <img class="profile-pic" src="https://getmethat.ca/ecowaste/public/images/message-user2.png">
                  <h4> {{ ($value->userName) ? $value->userName : '' }}</h4>
                  <?php 
                $userss = DB::table('messages')->where('sender_id',$value->senderId)->where('receiver_id',$rId)->where('is_read','0')->count();
                ?>
                <span class="badge">{{$userss}} </span>
                </div>
              </a>
        <?php      
            }
          }
        ?>
      </div>
      <div class="col-md-9 message-box">
          <div class="row">
            <div class="chat-box">
              <div class="chat-box-pro">
                @if(isset($messages2))
                <div class="box-pro" style="width: 100%;">
                    <img class="profile-pic" src="https://getmethat.ca/ecowaste/public/images/message-user3.png">
                  <h4> {{ (isset($messages2)) ? $messages2->userName : ''}}</h4>  
                  <div style="margin-left: 70%;margin-top: 20px;">    
<!--                    <i class="fa fa-search" aria-hidden="true"></i>-->
                  </div> 
                </div>
                @else
                  <div class="box-pro" style="width: 100%;">
                      
                    <h4> </h4>  
                    <div style="margin-left: -32px;margin-top: 25px;">    
                      <!-- <i class="fa fa-search" aria-hidden="true"></i> -->
                    </div> 
                  </div>
                @endif
                  
                  
                

                <?php
                if(isset($messages2)){
                  $userId = auth()->user()->id;
                  if((isset($messages)) && (count($messages) > 0)){
                    foreach ($messages as $key => $value) { 
                      if($value->sender_id == $userId){ ?>
                        <div class="message1 primary">{{ $value->message }} 
                          <div class="timestamp">{{ date('h:i a', strtotime($value->created_at)) }} </div>
                        </div>
                      <?php
                      }else{ ?>
                        <div class="message1 secondary">{{ $value->message }} 
                          <div class="timestamp">{{ date('h:i a', strtotime($value->created_at)) }} </div>
                        </div>
                      <?php
                      }
                  
                    }
                  }
                }
                ?>

        
              </div>
            </div>
          </div>
        
          <div class="row">
            <div class="footer-chat">
              <i class="fa fa-smile clickable" style="font-size:20px; margin-left: 20px;" aria-hidden="true"></i> 
              <input type="hidden" id="sender_id" value="{{ (isset($senderId)) ? $senderId : '' }}" name="">
              <input type="text" class="write-message" placeholder="Type your message here" style="background: transparent;">
              <i style="font-size:24px ; margin-right: 10px;" class="fa clickable">&#xf03e;</i>
              <img  class="fa clickable sendMsg" src="https://getmethat.ca/ecowaste/public/images/send-button.svg" style="position: absolute;
    right: -49px;width: 30px;">
            </div>
          </div>
      </div>

    </div>
  </div>
</div>


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
    
    .message1 {
    padding: .3rem 1rem;
    margin: .5rem 0;
    border-radius: 7px;
    width: fit-content;
    }
    .timestamp {
        color: #646464;
        font-size: .6rem;
    }


.message1.primary {
    text-align: right;
    background-color: skyblue;
    margin-left: auto;
}

.message1.secondary {
    text-align: left;
    background-color: green;
    margin-right: auto;
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

</style>



@endsection

@push('js')
<script>
  $(document).ready(function(){
    // $(".fa-paper-plane").on('click', function(e){
    $(".sendMsg").on('click', function(e){
      let senderId = ($(this).closest('.footer-chat').find('#sender_id').val());
      let message = ($(this).closest('.footer-chat').find('.write-message').val());
      if(senderId){
        $.ajax({
          url : '{{ route("seller.send.chat") }}',
          method : 'GET',
          data : {senderId:senderId, message: message},
          success : function(response){
            location.reload();
          }
        });
      }

    });

  });
</script>
@endpush