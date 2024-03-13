@extends('layouts.buyer-app')
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
    .chat-box-pro{
    overflow-x: auto;
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
      <h3> Messages </h3>
    </div>
    <?php
    $rId = auth()->user()->id;
    ?>
    <div class="row chat-box">
      <div class="col-md-3 message">
        <?php
          if((isset($result2)) && (count($result2) > 0) ){
            foreach ($result2 as $key => $value) { ?>
              <div class="message-pro">
                <a style="color:white;"href="{{ url('/buyer-seller-chat'.'/'.$value->id) }}">
                <img class="profile-pic" src="{{asset('images/message-user2.png')}}">
                </a>
                <a style="color:white;"href="{{ url('/buyer-seller-chat'.'/'.$value->id) }}">

                <h4> {{ ($value->name) ? $value->name : '' }}</h4>
                </a>
                <?php
                $userss = DB::table('messages')->where('sender_id',$value->id)->where('receiver_id',$rId)->where('is_read','0')->count();
                ?>
                <span class="badge">{{$userss}} </span>
              </div>
        <?php
            }
          }
        ?>
      </div>
      <div class="col-md-9 message-box">
          <div class="row">
            <div class="chat-box">
              <div class="chat-box-pro">
                <div class="box-pro">
                  <img class="profile-pic" src="{{asset('images/message-user3.png')}}">
                  <h4>{{$name->name}}</h4>
                </div>
                <div style="margin-left: -32px;margin-top: 25px;">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </div>
                <?php
                $userId = auth()->user()->id;
                if((isset($messages)) && (count($messages) > 0)){
                  foreach ($messages as $key => $value) {
                     $img = explode("|", $value->file);
                    $image = 'images/posts/'.$img['0'];
                    if($value->sender_id == $userId){ ?>
                      <div class="message1 primary">{{ $value->message }}
                        <div class="timestamp">{{ date('h:i a', strtotime($value->created_at)) }} </div>
                        <?php if($value->file != null){

                        ?>
                        <img src='{{ asset("$image") }}' alt="Image">
                    <?php } ?>
                      </div>
                    <?php
                    }else{ ?>
                      <div class="message1 secondary">{{ $value->message }}
                        <div class="timestamp">{{ date('h:i a', strtotime($value->created_at)) }} </div>
                        <?php if($value->file != null){

                        ?>
                        <img src='{{ asset("$image") }}' alt="Image">
                    <?php } ?>
                      </div>
                    <?php
                    }

                  }
                }
                ?>

              </div>
            </div>
          </div>
           <form method="POST" action="" accept-charset="UTF-8" id="bookFormsUpload" enctype="multipart/form-data">
          <div class="row">
            <div class="footer-chat">
              <i class="fa fa-smile clickable" style="font-size:20px; margin-left: 20px;" aria-hidden="true"></i>
              <input type="text" value=""name="sms" id="sms" class="write-message" placeholder="Type your message here" style="background: transparent;">
              <input type="text" id="sender_id" name="sender_id" value="{{$name->id}}" style="display:none">
              <input id="img" type="file" name="img[]" multiple="" style="display:none"/>
              <!-- <input type="file" id="imgupload"  name="imgupload" style="display:none"/>  -->

              <i id="OpenImgUpload" style="font-size:24px ; margin-right: 10px;" class="fa clickable">&#xf03e;</i>
              <button type="submit"><i class="fa fa-paper-plane" style="font-size:24px;" aria-hidden="true"></i></button>

            </div>
          </div>
      </form>

      </div>
    </div>
  </div>
</div>
@endsection
@push('js')
<script>
    $('#OpenImgUpload').click(function(){
        // alert('hi');
        $('#img').trigger('click');

    });
    $('#bookFormsUpload').on('submit',function (e) {
        e.preventDefault();
        let messages = $("#sms").val();
        let sender_id = $("#sender_id").val();
        // let userInput = document.getElementById("imgupload").value;


        $.ajax({
            url: "{{ url('/buyer-chat-sms') }}",
            type: "POST",
            data:new FormData(this),
            // dataType:'JSON',
            contentType: false,
            processData: false,
            success: function (data) {
                console.log(data);
                // $("#customer").modal().hide();
                location.reload();
            },
            error: function (data) {

            }
        });
    });

</script>
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
@endpush




