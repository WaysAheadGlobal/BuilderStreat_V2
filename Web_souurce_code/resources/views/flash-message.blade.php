@if ($message = Session::get('success'))
<div class="alert alert-success alert-block" style="margin-left: 10.3%;
    width: 72%;">
	<button style="position: absolute;
    right: 0px;
    top: -13%;
    font-size: 22px;" type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block" style="margin-left: 10.3%;">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif