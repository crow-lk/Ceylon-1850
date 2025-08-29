<!-- Reservations -->
<div class="reservations text-center">
	<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('frontend/images/reservation.jpg') }}" data-speed="0.8"></div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="reservations_content d-flex flex-column align-items-center justify-content-center">
					<div class="res_stars page_subtitle">5 Stars</div>
					<div class="res_title">Make a Reservation</div>
					<div class="res_form_container">
						@if ($errors->any())
							<div class="alert alert-danger mb-3">
								<ul class="mb-0">
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif

						@if (session('success'))
							<div class="alert alert-success mb-3">
								{{ session('success') }}
							</div>
						@endif

						<form action="{{ route('reservations.store') }}" method="POST" id="res_form" class="res_form">
							@csrf

							<div class="d-flex flex-lg-row flex-column align-items-center justify-content-between" style="margin-bottom: 20px;">
								<input type="text" name="name" class="res_input @error('name') is-invalid @enderror" placeholder="Name" required="required" value="{{ old('name') }}">
								<input type="email" name="email" class="res_input @error('email') is-invalid @enderror" placeholder="Email" required="required" value="{{ old('email') }}">
								<input type="tel" name="phone" class="res_input @error('phone') is-invalid @enderror" placeholder="Phone" required="required" value="{{ old('phone') }}">
							</div>
							<div class="d-flex flex-lg-row flex-column align-items-center justify-content-between" style="margin-bottom: 20px;">
								<input type="text" id="datepicker" name="date" class="res_input @error('date') is-invalid @enderror" placeholder="Date" required="required" value="{{ old('date') }}">
								<input type="text" name="time" class="res_input timepicker @error('time') is-invalid @enderror" placeholder="Time" required="required" value="{{ old('time') }}">
								<select name="people" class="res_select @error('people') is-invalid @enderror">
									<option disabled="" selected="">Number of People</option>
									<option value="2" {{ old('people') == '2' ? 'selected' : '' }}>2 person</option>
									<option value="3" {{ old('people') == '3' ? 'selected' : '' }}>3 person</option>
									<option value="4" {{ old('people') == '4' ? 'selected' : '' }}>4 person</option>
									<option value="5" {{ old('people') == '5' ? 'selected' : '' }}>5 person</option>
									<option value="6" {{ old('people') == '6' ? 'selected' : '' }}>6 person</option>
								</select>
							</div>
							<div>
								<textarea name="special_requests" class="res_input @error('special_requests') is-invalid @enderror" placeholder="Special Requests" style="width: 100%; margin-bottom: 20px;">{{ old('special_requests') }}</textarea>
							</div>
							<button type="submit" class="res_button">Make a Reservation</button>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div>
