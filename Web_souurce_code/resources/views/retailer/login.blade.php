<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <style>
        body,html {
            /*background-image: url('https://i.imgur.com/xhiRfL6.jpg');*/
            height: 100%;
            background: #808080;
        }

        #profile-img {
            height:160px;margin-left: -1.0%;margin-top: 30%;
        }
        
    </style>
</head>
<body style="">
<div class="container">
    <div class="row align-items-center">
        <div class="col-8 mx-auto" >
            <div class="text-center" style="background: #89dade;height: 100vh;">
                <img id="profile-img" class="profile-img-card" src="{{ asset('img/lottery.PNG') }}" />
                <!-- <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" /> -->
                <p id="profile-name" class="profile-name-card"></p>
                <div class="col-6 mx-auto">
                    <form action="{{ route('retailer.post.login') }}" method="post" enctype="multipart/form-data" style="background: white;padding: 3%;margin-top: 40%;">
                        @csrf
                        <div class="form-group row">
                            <label for="code" class="col-sm-4 col-form-label">User Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="code" id="code" placeholder="m00005" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-light" style="margin-left: -10% !important;width: 100%;background-color: hsl(0, 0%, 90%);">Login</button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-light" style="margin-right:-10%;width: 100%;background-color: hsl(0, 0%, 90%);">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
               <!--  <form action="{{ route('retailer.post.login') }}" method="post" enctype="multipart/form-data"  class="form-signin form-horizontal" style="background: white;padding: 5%;">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-group">Username</label>
                        <input type="text" name="code" id="code" class="form-control form-group" placeholder="m00005">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="inputPassword" class="form-control form-group" placeholder="password" required autofocus>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login</button>
                </form> -->
            </div>
        </div>
    </div>
</div>
</body>
</html>