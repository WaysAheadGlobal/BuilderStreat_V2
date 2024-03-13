@extends('layouts.sellerApp')

@section('content')
<style type="text/css">
    .view-account{
    background:#FFFFFF; 
    margin-top:20px;
}
.view-account .pro-label {
    font-size: 13px;
    padding: 4px 5px;
    position: relative;
    top: -5px;
    margin-left: 10px;
    display: inline-block
}
    
    .profile-edit1 {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    
}
    
    .check-btn{
        display: flex;
    justify-content: center;
    gap: 21px;
    margin-top: 6%;
    }

    
    .payment {
  padding: 20px 0 0 0;
}
.payment__title {
  margin: 40px 0 20px 0;
  font-size: 18px;
  display: flex;
  text-align: left;
}
.payment__title .icon {
  margin-right: 10px;
}

.btn {
  font-family: "Josefin Sans", sans-serif;
  border-radius: 8px;
  border: 0;
  letter-spacing: 1px;
  color: #fff;
  background: #246eea;
  padding: 20px 60px;
  white-space: nowrap;
  font-size: 16px;
  line-height: 1;
  text-transform: uppercase;
  transition: all 0.15s ease;
  text-decoration: none;
}
.btn .icon {
  margin-left: 10px;
  font-size: 20px;
}
.btn:hover {
  -webkit-transform: translateY(-1px);
          transform: translateY(-1px);
  background: #4984ea;
}
.btn.action__back {
  background: transparent;
  color: #a0a0a0;
}

.payment__types {
  display: flex;
  justify-content: center;
  align-items: center;
}

.payment__info {
  display: flex;
}

.payment__cc {
  flex: 60%;
}

.payment__shipping {
  flex: 40%;
}
    
    .text-success {
    font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 20px;
line-height: 30px;
/* identical to box height, or 150% */

letter-spacing: 0.5px;
text-transform: capitalize;

color: #424242!important;

}

.shipping__info {
  background: #f6f9fc;
  padding: 10px;
  border-radius: 8px;
}

.payment__type {
  display: flex;
  border: 2px solid #d9d9d9;
  border-radius: 8px;
  width: 181px;
    height: 80px;
background: #d9d9d9;
opacity: 0.3;
    font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 28px;
/* identical to box height, or 200% */

letter-spacing: 0.005em;
text-transform: capitalize;

/* text body color */

color: #6C6C6C;
  justify-content: center;
  align-items: center;
  cursor: pointer;
 
  transition: all 0.15s ease;
}
.payment__type:hover {
  -webkit-transform: translateY(-1px);
          transform: translateY(-1px);
}
.payment__type.active {
 font-family: 'Montserrat';
font-style: normal;
font-weight: 400;
font-size: 14px;
line-height: 28px;
/* identical to box height, or 200% */

letter-spacing: 0.005em;
text-transform: capitalize;

color: #424242;

opacity: 0.4;
 width: 181px;
height: 80px;
left: 237px;
top: 267px;

background: #D3D3D3;

}
.payment__type .icon {
  font-size: 32px;
  margin-right: 10px;
}
.payment__type + .payment__type {
  margin-left: 10px;
}
    
    
    
    .can-btn{
       width: 121.9px;
height: 44px;
left: 407px;
top: 728px;
font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 11.541px;
line-height: 180%;
/* identical to box height, or 21px */

display: flex;
    align-items: center;
    justify-content: center;
color: #A8BC25;

border: 1.08197px solid #8BA83A;
border-radius: 1.44262px;
        
    }
    
    .conf-btn{
        width: 121.9px;
    height: 44px;
    font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 11.541px;
line-height: 180%;
/* identical to box height, or 21px */

display: flex;
    align-items: center;
    justify-content: center;
color: #FFFFFF;

    background: #6E7E1D;
    border-radius: 1.44262px;
    display: flex;
    justify-content: center;
    }

.view-account .side-bar {
    padding-bottom: 30px
}

.view-account .side-bar .user-info {
    text-align: center;
    margin-bottom: 15px;
    padding: 30px;
    color: #616670;
    border-bottom: 1px solid #f3f3f3
}

.view-account .side-bar .user-info .img-profile {
    width: 120px;
    height: 120px;
    margin-bottom: 15px
}

.view-account .side-bar .user-info .meta li {
    margin-bottom: 10px
}

.view-account .side-bar .user-info .meta li span {
    display: inline-block;
    width: 100px;
    margin-right: 5px;
    text-align: right
}

.view-account .side-bar .user-info .meta li a {
    color: #616670
}

.view-account .side-bar .user-info .meta li.activity {
    color: #a2a6af
}

.view-account .side-bar .side-menu {
    text-align: center
}

.view-account .side-bar .side-menu .nav {
    display: inline-block;
    margin: 0 auto
}

.view-account .side-bar .side-menu .nav>li {
    font-size: 14px;
    margin-bottom: 0;
    border-bottom: none;
    display: inline-block;
    float: left;
    margin-right: 15px;
    margin-bottom: 15px
}

.view-account .side-bar .side-menu .nav>li:last-child {
    margin-right: 0
}

.view-account .side-bar .side-menu .nav>li>a {
    display: inline-block;
    color: #9499a3;
    padding: 5px;
    border-bottom: 2px solid transparent
}

.view-account .side-bar .side-menu .nav>li>a:hover {
    color: #616670;
    background: none
}

.view-account .side-bar .side-menu .nav>li.active a {
    color: #40babd;
    border-bottom: 2px solid #40babd;
    background: none;
    border-right: none
}

.theme-2 .view-account .side-bar .side-menu .nav>li.active a {
    color: #6dbd63;
    border-bottom-color: #6dbd63
}

.theme-3 .view-account .side-bar .side-menu .nav>li.active a {
    color: #497cb1;
    border-bottom-color: #497cb1
}

.theme-4 .view-account .side-bar .side-menu .nav>li.active a {
    color: #ec6952;
    border-bottom-color: #ec6952
}

.view-account .side-bar .side-menu .nav>li .icon {
    display: block;
    font-size: 24px;
    margin-bottom: 5px
}

.view-account .content-panel {
    padding: 30px
}

.view-account .content-panel .title {
    margin-bottom: 15px;
    margin-top: 0;
    font-size: 18px
}

.view-account .content-panel .fieldset-title {
    padding-bottom: 15px;
    border-bottom: 1px solid #eaeaf1;
    margin-bottom: 30px;
    color: #616670;
    font-size: 16px
}

.view-account .content-panel .avatar .figure img {
    float: right;
    width: 64px
}

.view-account .content-panel .content-header-wrapper {
    position: relative;
    margin-bottom: 30px
}

.view-account .content-panel .content-header-wrapper .actions {
    position: absolute;
    right: 0;
    top: 0
}

.view-account .content-panel .content-utilities {
    position: relative;
    margin-bottom: 30px
}

.view-account .content-panel .content-utilities .btn-group {
    margin-right: 5px;
    margin-bottom: 15px
}

.view-account .content-panel .content-utilities .fa {
    font-size: 16px;
    margin-right: 0
}

.view-account .content-panel .content-utilities .page-nav {
    position: absolute;
    right: 0;
    top: 0
}

.view-account .content-panel .content-utilities .page-nav .btn-group {
    margin-bottom: 0
}

.view-account .content-panel .content-utilities .page-nav .indicator {
    color: #a2a6af;
    margin-right: 5px;
    display: inline-block
}

.view-account .content-panel .mails-wrapper .mail-item {
    position: relative;
    padding: 10px;
    border-bottom: 1px solid #f3f3f3;
    color: #616670;
    overflow: hidden
}

.view-account .content-panel .mails-wrapper .mail-item>div {
    float: left
}

.view-account .content-panel .mails-wrapper .mail-item .icheck {
    background-color: #fff
}

.view-account .content-panel .mails-wrapper .mail-item:hover {
    background: #f9f9fb
}

.view-account .content-panel .mails-wrapper .mail-item:nth-child(even) {
    background: #fcfcfd
}

.view-account .content-panel .mails-wrapper .mail-item:nth-child(even):hover {
    background: #f9f9fb
}

.view-account .content-panel .mails-wrapper .mail-item a {
    color: #616670
}

.view-account .content-panel .mails-wrapper .mail-item a:hover {
    color: #494d55;
    text-decoration: none
}

.view-account .content-panel .mails-wrapper .mail-item .checkbox-container,
.view-account .content-panel .mails-wrapper .mail-item .star-container {
    display: inline-block;
    margin-right: 5px
}

.view-account .content-panel .mails-wrapper .mail-item .star-container .fa {
    color: #a2a6af;
    font-size: 16px;
    vertical-align: middle
}

.view-account .content-panel .mails-wrapper .mail-item .star-container .fa.fa-star {
    color: #f2b542
}

.view-account .content-panel .mails-wrapper .mail-item .star-container .fa:hover {
    color: #868c97
}

.view-account .content-panel .mails-wrapper .mail-item .mail-to {
    display: inline-block;
    margin-right: 5px;
    min-width: 120px
}
    
    .payment-left{
        width: 750px;
height: 667px;


background: #FFFFFF;
box-shadow: 0px 0px 4px #8BA83A;
border-radius: 5px;
    }
    
    
    .payment-right{
        width: 355px;
height: 667px;


background: #FFFFFF;
box-shadow: 0px 0px 4px #8BA83A;
border-radius: 5px;
    }    

.view-account .content-panel .mails-wrapper .mail-item .mail-subject {
    display: inline-block;
    margin-right: 5px
}

.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label {
    margin-right: 5px
}

.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label:last-child {
    margin-right: 10px
}

.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label a,
.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label a:hover {
    color: #fff
}

.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-1 {
    background: #f77b6b
}

.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-2 {
    background: #58bbee
}

.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-3 {
    background: #f8a13f
}

.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-4 {
    background: #ea5395
}

.view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-5 {
    background: #8a40a7
}

.view-account .content-panel .mails-wrapper .mail-item .time-container {
    display: inline-block;
    position: absolute;
    right: 10px;
    top: 10px;
    color: #a2a6af;
    text-align: left
}

.view-account .content-panel .mails-wrapper .mail-item .time-container .attachment-container {
    display: inline-block;
    color: #a2a6af;
    margin-right: 5px
}

.view-account .content-panel .mails-wrapper .mail-item .time-container .time {
    display: inline-block;
    text-align: right
}

.view-account .content-panel .mails-wrapper .mail-item .time-container .time.today {
    font-weight: 700;
    color: #494d55
}

.drive-wrapper {
    padding: 15px;
    background: #f5f5f5;
    overflow: hidden
}

.drive-wrapper .drive-item {
    width: 130px;
    margin-right: 15px;
    display: inline-block;
    float: left
}

.drive-wrapper .drive-item:hover {
    box-shadow: 0 1px 5px rgba(0, 0, 0, .1);
    z-index: 1
}

.drive-wrapper .drive-item-inner {
    padding: 15px
}

.drive-wrapper .drive-item-title {
    margin-bottom: 15px;
    max-width: 100px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}
    
    .list-inline{
        display: flex;
    justify-content: flex-start;
    font-size: 26px;
    gap: 20px;
        
    }

.drive-wrapper .drive-item-title a {
    color: #494d55
}

.drive-wrapper .drive-item-title a:hover {
    color: #40babd
}

.theme-2 .drive-wrapper .drive-item-title a:hover {
    color: #6dbd63
}

.theme-3 .drive-wrapper .drive-item-title a:hover {
    color: #497cb1
}

.theme-4 .drive-wrapper .drive-item-title a:hover {
    color: #ec6952
}

.drive-wrapper .drive-item-thumb {
    width: 100px;
    height: 80px;
    margin: 0 auto;
    color: #616670
}

.drive-wrapper .drive-item-thumb a {
    -webkit-opacity: .8;
    -moz-opacity: .8;
    opacity: .8
}

.drive-wrapper .drive-item-thumb a:hover {
    -webkit-opacity: 1;
    -moz-opacity: 1;
    opacity: 1
}

.drive-wrapper .drive-item-thumb .fa {
    display: inline-block;
    font-size: 36px;
    margin: 0 auto;
    margin-top: 20px
}

.drive-wrapper .drive-item-footer .utilities {
    margin-bottom: 0
}

.drive-wrapper .drive-item-footer .utilities li:last-child {
    padding-right: 0
}

.drive-list-view .name {
    width: 60%
}

.drive-list-view .name.truncate {
    max-width: 100px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.drive-list-view .type {
    width: 15px
}

.drive-list-view .date,
.drive-list-view .size {
    max-width: 60px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}
    
    .add-det{
        display: flex;
    gap: 30px;
    align-items: center;
        justify-content: space-between;
    margin: 27px 20px; 
       
}
    

.drive-list-view a {
    color: #494d55
}

.drive-list-view a:hover {
    color: #40babd
}

.theme-2 .drive-list-view a:hover {
    color: #6dbd63
}

.theme-3 .drive-list-view a:hover {
    color: #497cb1
}

.theme-4 .drive-list-view a:hover {
    color: #ec6952
}
    
    .appoint-btn{
        display: flex;
    justify-content: center;
    gap: 13px;
    position: absolute;
    bottom: 11%;
    left: 25%;
    }
    
    .chat-box {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    height: 550px;
    width: 100%;
    justify-content: center;
}
    

.drive-list-view td.date,
.drive-list-view td.size {
    color: #a2a6af
}

@media (max-width:767px) {
    .view-account .content-panel .title {
        text-align: center
    }
    .view-account .side-bar .user-info {
        padding: 0
    }
    .view-account .side-bar .user-info .img-profile {
        width: 60px;
        height: 60px
    }
    .view-account .side-bar .user-info .meta li {
        margin-bottom: 5px
    }
    .view-account .content-panel .content-header-wrapper .actions {
        position: static;
        margin-bottom: 30px
    }
    .view-account .content-panel {
        padding: 0
    }
    .view-account .content-panel .content-utilities .page-nav {
        position: static;
        margin-bottom: 15px
    }
    .drive-wrapper .drive-item {
        width: 100px;
        margin-right: 5px;
        float: none
    }
    .drive-wrapper .drive-item-thumb {
        width: auto;
        height: 54px
    }
    .drive-wrapper .drive-item-thumb .fa {
        font-size: 24px;
        padding-top: 0
    }
    .view-account .content-panel .avatar .figure img {
        float: none;
        margin-bottom: 15px
    }
    .view-account .file-uploader {
        margin-bottom: 15px
    }
    .view-account .mail-subject {
        max-width: 100px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }
    .view-account .content-panel .mails-wrapper .mail-item .time-container {
        position: static
    }
    .view-account .content-panel .mails-wrapper .mail-item .time-container .time {
        width: auto;
        text-align: left
    }
}

@media (min-width:768px) {
    .view-account .side-bar .user-info {
        padding: 0;
        padding-bottom: 15px
    }
    .view-account .mail-subject .subject {
        max-width: 200px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }
}

@media (min-width:992px) {
    .view-account .content-panel {
        
        border-left: 1px solid #f3f3f7;
        margin-left: 200px
    }
    .view-account .mail-subject .subject {
        max-width: 280px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }
    .view-account .side-bar {
        position: absolute;
        width: 200px;
        min-height: 600px
    }
    .view-account .side-bar .user-info {
        margin-bottom: 0;
        border-bottom: none;
        padding: 30px
    }
    .view-account .side-bar .user-info .img-profile {
        width: 120px;
        height: 120px
    }
    .view-account .side-bar .side-menu {
        text-align: left
    }
    .view-account .side-bar .side-menu .nav {
        display: block
    }
    .view-account .side-bar .side-menu .nav>li {
        display: block;
        float: none;
        font-size: 14px;
        border-bottom: 1px solid #f3f3f7;
        margin-right: 0;
        margin-bottom: 0
    }
    .view-account .side-bar .side-menu .nav>li>a {
        display: block;
        color: #9499a3;
        padding: 10px 15px;
        padding-left: 30px
    }
    .view-account .side-bar .side-menu .nav>li>a:hover {
        background: #f9f9fb
    }
    .view-account .side-bar .side-menu .nav>li.active a {
        background: #f9f9fb;
        border-right: 4px solid #40babd;
        border-bottom: none
    }
    .theme-2 .view-account .side-bar .side-menu .nav>li.active a {
        border-right-color: #6dbd63
    }
    .theme-3 .view-account .side-bar .side-menu .nav>li.active a {
        border-right-color: #497cb1
    }
    .theme-4 .view-account .side-bar .side-menu .nav>li.active a {
        border-right-color: #ec6952
    }
    .view-account .side-bar .side-menu .nav>li .icon {
        font-size: 24px;
        vertical-align: middle;
        text-align: center;
        width: 40px;
        display: inline-block
    }
}
</style>
<div class="container-fluid" style="background:  linear-gradient( rgba(0,0,0,.5), rgba(0,0,0,.5) ),url(https://builderstreat.ca/public/images/sub-banner.png);background-repeat: no-repeat;background-size: 100% 100%;height: 100vh;">
    <div class="container" style=" padding-bottom: 10%;position: relative;top: 19px;">
        <div class="row chat-box">
            <div>
                
            </div>
            <div class="col-md-8 payment-left">
                <div class="profile-edit12" style="margin-top: 30px;margin-bottom: 20px;">  
                    <h3 style="border-bottom: 2px dashed #6E7E1D;border-bottom: 2px dashed #6E7E1D;width: 28%;margin: 0 auto;"> Payment Checkout </h3>
                </div>
                <div class="view-account">
                    <section class="module">
                        <div class="module-inner">
                            <div class="payment">
                                <div class="payment__types">
                                    <div class="payment__type payment__type--cc active">
                                        <i class='fas fa-wallet'></i>Net Banking
                                    </div>
                                    <div class="payment__type payment__type--paypal">
                                        <i class='fas fa-wallet'></i>Credit Card
                                    </div>
                                    <div class="payment__type payment__type--cc active">
                                        <i class='fas fa-wallet'></i> Add New Card
                                    </div>
                                </div> 
                                <div class="content-panel">
                                    <form action="{{ route('seller.pay.now') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="billing">
                                            <div class="secure margin-bottom-md">
                                                <h3 class="margin-bottom-md text-success">
                                                    <span class="fs1 icon" aria-hidden="true" data-icon="">
                                                        
                                                    </span>Choose a card<br><small></small>
                                                </h3>
                                                <div class="accepted-cards">
                                                    <ul class="list-inline">
                                                        <div>
                                                          <input type="radio" id="html" name="card_type" value="visa" checked>
                                                          <label for="html"><img src="https://builderstreat.ca/public/images/mastercard.svg"></label>
                                                        </div>
                                                        <div>
                                                           <input type="radio" id="css" name="card_type" value="master">
                                                           <label for="html"><img src="https://builderstreat.ca/public/images/visa card.svg"></label>
                                                       </div>
                                                       <div>
                                                          <input type="radio" id="javascript" name="card_type" value="master1">
                                                          <label for="html"><img src="https://builderstreat.ca/public/images/mastercard.svg"></label>
                                                      </div>
                                                  </ul>
                                              </div>
                                          </div>
                                          <div class="card-details">
                                                <input type="hidden" id="pId" name="pId" value="{{ $id }}">
                                                <h3 class="title"></h3>
                                                <div class="row">
                                                    <div class="form-group col-sm-7">
                                                        <label for="card-holder">Card Number</label>
                                                        <input name="card_number" id="card-holder" type="text" class="form-control" placeholder="Card Number" aria-label="Card Number" aria-describedby="basic-addon1" minlength="16"  maxlength="16"required>
                                                    </div>
                                                    <div class="form-group col-sm-5">
                                                        <label for="">Valid Through</label>
                                                        <div class="input-group expiration-date">
                                                            <input name="card_valid_month" type="text" class="form-control" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1" minlength="2"  maxlength="2" required>
                                                            <span class="date-separator"></span>
                                                            <input name="card_valid_year" type="text" class="form-control" placeholder="YY" aria-label="YY" aria-describedby="basic-addon1" minlength="4"  maxlength="4" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-7">
                                                        <label for="card-number">Card holder Name</label>
                                                        <input name="card_holder_name"id="card-holder-name" type="text" class="form-control" placeholder="Card Holder Name" aria-label="Card Holder Name" aria-describedby="basic-addon1" required>
                                                    </div>
                                                    <div class="form-group col-sm-5">
                                                        <label for="cvc">CVV</label>
                                                        <input name="card_cvv" id="cvc" type="text" class="form-control" placeholder="CVV" aria-label="Card Holder" aria-describedby="basic-addon1" minlength="3"  maxlength="3"required>
                                                    </div>
                                                    <hr>
                                                    <div class="col-md-12 check-btn">
                                                        <a class="can-btn" href="#"> Cancel</a>
                                                        <button style=" width: 122px; height: 44px;display: flex;justify-content: center; background: #6e840b;padding: 10px 20px;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 11.541px;line-height: 180%;color: #FFFFFF;" class="conf-btn" type="submit">Pay
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
<!--
            <div class="col-md-4 message payment-right ">
                <div class="profile-edit12" style="margin-top: 10px;margin-bottom: 20px;">
                    <h3 style="font-size: 25px; margin-top: 25px;border-bottom: 2px dashed #6E7E1D;"> Appointment Details </h3> 
                </div>
                <div class="add-det">
                    <h5> Category</h5>
                    <h6> Seller</h6>
                </div>
                <div class="add-det">
                    <h5> Subcription Plan</h5>
                    <h6> $48</h6>
                </div>
                <div class="add-det">
                    <h5> Payment Status</h5>
                    <h6> Pending</h6>
                </div>
                <div class="add-det">
                    <h5> Time Period</h5>
                    <h6> Quaterly</h6>
                </div>
                <div class="appoint-btn">
                    <a class="can-btn" href="#"> Cancel</a>
                    <a class="conf-btn" href="#"> Confirm </a>
                </div>
            </div>
-->
        </div>
    </div>
</div>
@endsection