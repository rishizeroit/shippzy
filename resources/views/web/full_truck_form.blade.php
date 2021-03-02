@extends('web.app.layout')
@section('title', 'Shipzzy')
	<link rel="stylesheet" href="{{base_url('web/css/styleform.css')}}" />
@section('content')

<div class="shipy-form-md">
	<div class="container">
		<div class="shipyzz-form-md">
			<!-- qoute ends here -->
			<div class="shipment-md">
			<h1>Tell us about your shipment to see <span>instant quotes</span></h1>
			</div>
			<!-- shipment ends here -->

			<div class="requested-md">
			
				<label for="lname">Requested loading date</label><br><br>
				<input type="date" id="lname" name="lname">
				
				<div class="caution-md">
					<p>Requested date is subject to carrier acceptance and availability.</p>
					<p><span>Caution: Carrier may not be able to accomadate same-day pickup requests.</span></p>
				</div>
			</div>
	<!-- requested ends here -->
	<div class="left-md">
		<div class="pickup-md">
		
			<label for="lname">Pickup city or postal code</label><br>
<<<<<<< HEAD
			<select id="select-state" placeholder="Pick a state...">
				<option value="">Select a state...</option>
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="DC">District of Columbia</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
			</select>
			</form>
=======
				<input type="text" name="city" list="cityname">
					<datalist id="cityname" width="100%">
						<option value="Boston">
						<option value="Cambridge">
						<option value="madan">
						<option value="davinder">
						<option value="manorma">
						<option value="rajwinder">
						<option value="kuldeep">
						<option value="aman">
					</datalist>

		
>>>>>>> b8cd3b8209d00bed052b6806ec049c1f3798f0f2
			<div class="pickup-caution">
				<p>Must be in the United State.</p>
				<p><span><input type="checkbox" id="vehicle2" name="vehicle2" value="Car">I'd like to drop off my items at a carrier terminal</span></p>
				<div class="money-pi">
					<p>save money and skip delivery service</p>
				</div>
			</div>
			<div class="pick-ser">
				<h5>Pickup service</h5>
				<h6><input type="checkbox">Residental location pickup <span>?</span></h6>
				<h6><input type="checkbox">Left gate pickup <span>?</span></h6>
				<h6><input type="checkbox">Inside pickup <span>?</span></h6>
				<h6><input type="checkbox">Limited access pickup <span>?</span></h6>
			</div>
		</div>
	</div>
<!-- left ends here -->

	<div class="right-md">
			<div class="dilevery-md">
			
				<label for="lname">Delivery city or postal code</label><br>
				<input type="text" name="city" list="cityname">
					<datalist id="cityname" width="100%">
						<option value="Boston">
						<option value="Cambridge">
						<option value="madan">
						<option value="davinder">
						<option value="manorma">
						<option value="rajwinder">
						<option value="kuldeep">
						<option value="aman">
					</datalist>
				
				<div class="dilevery-caution">
					<p>Requested date is subject to carrier acceptance and availability.</p>
					<p><span><input type="checkbox" id="vehicle2" name="vehicle2" value="Car">I'd like to pickup my items carrier terminal</span></p>
					<div class="money-di">
						<p>save money and skip pickup service</p>
					</div>
				</div>
				<div class="delivery-ser">
					<h5>Delivery service</h5>
					<h6><input type="checkbox">Residental location delivery <span>?</span></h6>
					<h6><input type="checkbox">Residental location delivery <span>?</span></h6>
					<h6><input type="checkbox">Residental location delivery <span>?</span></h6>
					<h6><input type="checkbox">Residental location delivery <span>?</span></h6>
					<h6><input type="checkbox">Delivery appoinment fee <span>?</span></h6>
				</div>
			</div>
	</div>
	<div class="clear"></div>
	<!-- right ends here -->

	<div class="hazardous-md">
		<div class="sens-md">
			<p>Does this shipment contain hazardous items?</p>
			<div class="two-buttons">
				<label class="switch">
					<input class="switch-input" type="checkbox" />
					<span class="switch-label" data-on="On" data-off="Off"></span> 
					<span class="switch-handle"></span> 
				</label>
			</div>
		</div>
		<div class="sens-md">
			<p>Is this shipment temperature sensitive?</p>
			<div class="two-buttons">
				<label class="switch">
					<input class="switch-input" type="checkbox" />
					<span class="switch-label" data-on="On" data-off="Off"></span> 
					<span class="switch-handle"></span> 
				</label>
			</div>
		</div>
		<div class="senstive-md">
			<h5><a href="#">View restricted item list</a></h5>
			<h5><a href="#">Learn more about item packaging </a></h5>
		</div>
		<div class="task-rabbit">
			<h5><a href="#">Search for packaging help with TaskRabbit</a></h5>
		</div>
	</div>
	<!-- hazardous ends here -->
	<div class="item-dist">
		<div class="pickup-new">
		
			<label for="lname">Item description</label><br><br>
			<input type="text" id="lname" name="lname">
			
			<div class="pickup-caution-new">
				<h6>e.g. "widgets" not "pallet of widgets"</h6>
			</div>
		</div>
	</div>

	<div class="right-condition">
		<h4>Condition</h4>
		<div class="used-buttons">
			<button type="button" class="btn-used">Used</button>
			<button type="button" class="btn-new">New</button>
		</div>
	</div>
	<div class="clear"></div>
	<!-- right-condition ends here -->

	<div class="dimension-md">
		<div class="dimen-md">
			<label for="brow">Packaging</label><br>
				<input list="brow">
				<datalist id="brow">
				<option value="Internet Explorer"></option>
				<option value="Firefox"></option>
				<option value="Chrome"></option>
				<option value="Opera"></option>
				<option value="Safari"></option>
				</datalist>  
		</div>
		<div class="lwh-md">
			<label for="length-input">Dimensions (LxWxH)</label><br>
			<input type="number" pattern="[0-9]*" id="length-input" name="items[0].length" value="48">
			<input type="number" pattern="[0-9]*" id="length-input" name="items[0].length" value="48">
			<input type="number" pattern="[0-9]*" id="length-input" name="items[0].length" value="48">
			<input type="number" pattern="[0-9]*" id="length-input" name="items[0].length" value="in"> 
		</div>
		<div class="dimen-md">
			<label for="lname">Weight of 1 pallet</label><br>
			<input type="text" id="lname" name="lname">
		</div>
		<div class="dimen-md">
			<label for="lname">Quantity of pallets</label><br>
			<input type="text" id="lname" name="lname">
		</div>
	</div>
	<!-- dimension ends here -->
	<div class="calcu-md">
		<h4>Freight Class We'll calculate for you <span>?</span></h4>
		<p>Item description is required.</p>
		<p>Height is required.</p>
	</div>
	<div class="calcu-us">
		<p>Total item weight 0 pounds</p>
	</div>
	<div class="clear"></div>
	</div>
	</div>
	</div>
	@endsection