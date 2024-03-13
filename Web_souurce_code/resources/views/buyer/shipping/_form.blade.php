<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="form-group">
    <div class="col-md-12">
	<label>Full Name</label>
	<input type="text" name="name" value="{{(isset($result2) && ($result2->user_name)) ? $result2->user_name : ''}}" id="full_name" placeholder="Full Name" required>
        </div>
    <div class="col-md-12">
	<label>Company Name</label>

	<input type="text" name="company" value="{{(isset($result2) && ($result2->company_name)) ? $result2->company_name : 'N/A'}}" id="company" placeholder="Company Name" required>
        </div>
    <div class="col-md-12">
	<label>Choose Country</label>
	<select class="form-select" id="country" name="country" required style="width: 96.20%;border: 2px solid #e8e8e8;">
		<option value="">Select country</option>
		<option value="canada" <?= (isset($result2) && $result2->country == 'canada') ? 'selected' : ''?>>canada</option>
		<option value="india" <?= (isset($result2) && $result2->country == 'india') ? 'selected' : ''?>>india</option>
		<option value="usa" <?= (isset($result2) && $result2->country == 'usa') ? 'selected' : ''?>>USA</option>
		<option value="uk" <?= (isset($result2) && $result2->country == 'uk') ? 'selected' : ''?>>UK</option>
	</select>
        </div>
    <div class="col-md-12">
	<label>Address</label>
	<input type="text" id="address" value="{{(isset($result2) && ($result2->address)) ? $result2->address : 'N/A'}}"name="address" placeholder="Address" required>
        </div>
	<div class="row">
        <div class="col-md-12 my-small">
		<div class="col-md-6 ">
			<label>state</label>
			<select class="form-select" id="state" name="state" required style="width: 92%;
    border: 2px solid #e8e8e8;">
			        <option value="">select state</option>
				<option value="delhi"  <?= (isset($result2) && $result2->state == 'delhi') ? 'selected' : ''?>>delhi</option>
				<option value="mumbai" <?= (isset($result2) && $result2->state == 'mumbai') ? 'selected' : ''?>>mumbai</option>
				<option value="jaipur" <?= (isset($result2) && $result2->state == 'jaipur') ? 'selected' : ''?>>jaipur</option>
				<option value="bihar" <?= (isset($result2) && $result2->state == 'bihar') ? 'selected' : ''?>>bihar</option>
                <option value="Alberta"  <?= (isset($result2) && $result2->state == 'Alberta') ? 'selected' : ''?>>Alberta</option>
                <option value="British Columbia"  <?= (isset($result2) && $result2->state == 'British Columbia') ? 'selected' : ''?>>British Columbia</option>
                <option value="Manitoba"  <?= (isset($result2) && $result2->state == 'Manitoba') ? 'selected' : ''?>>Manitoba</option>
                <option value="New Brunswick"  <?= (isset($result2) && $result2->state == 'New Brunswick') ? 'selected' : ''?>>New Brunswick</option>
                <option value="Newfoundland and Labrador"  <?= (isset($result2) && $result2->state == 'Newfoundland and Labrador') ? 'selected' : ''?>>Newfoundland and Labrador</option>
                <option value="Northwest Territories"  <?= (isset($result2) && $result2->state == 'Northwest Territories') ? 'selected' : ''?>>Northwest Territories</option>
                <option value="Nova Scotia"  <?= (isset($result2) && $result2->state == 'Nova Scotia') ? 'selected' : ''?>>Nova Scotia</option>
                <option value="Nunavut"  <?= (isset($result2) && $result2->state == 'Nunavut') ? 'selected' : ''?>>Nunavut</option>
                <option value="Ontario"  <?= (isset($result2) && $result2->state == 'Ontario') ? 'selected' : ''?>>Ontario</option>
                <option value="Prince Edward Island"  <?= (isset($result2) && $result2->state == 'Prince Edward Island') ? 'selected' : ''?>>Prince Edward Island</option>
                <option value="Quebec"  <?= (isset($result2) && $result2->state == 'Quebec') ? 'selected' : ''?>>Quebec</option>
                <option value="Saskatchewan"  <?= (isset($result2) && $result2->state == 'Saskatchewan') ? 'selected' : ''?>>Saskatchewan</option>
                <option value="Nunavut"  <?= (isset($result2) && $result2->state == 'Nunavut') ? 'selected' : ''?>>Yukon</option>
			</select>
		</div>
		<div class="col-md-6 ">
			<label>zip Code</label>
			<input type="text" value="{{(isset($result2) && ($result2->zipcode)) ? $result2->zipcode : 'N/A'}}" placeholder="zip Code" id="zipcode" name="zipcode" required style="width: 188px;">
		</div>
	</div>
        </div>
</div>

@push('js')
<script>
	$('#bookFormsUpload').on('submit',function (e) {
		// alert('working fine.');
		e.preventDefault();
		let name = $("#full_name").val();
		let company=$("#company").val();
		let address=$("#address").val();
		let state=$("#state").val();
		let zipcode=$("#zipcode").val();
		let country =$("#country").val();

		var data = new FormData(this);
		$.ajax({
			url: "{{ url('/buyer-shipping') }}",
			type: "POST",
			data: {_token:'{{ csrf_token() }}', user_name:name,company:company,address:address,state:state,zipcode:zipcode,country:country },
			success: function (response) {
				console.log(response);
				// $("#customer").modal().hide();
				location.reload();
			},
			error: function (data) {

			}
		});
	});
</script>
@endpush


<style>

    .my-small{
        display: flex;
    }
input.btn.btn-primary.log-in {
    margin: 0 auto;
}

</style>