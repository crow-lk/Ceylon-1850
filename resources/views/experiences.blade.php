<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>

<div class="super_container">
	
	<!-- Header, Hamburger Menu, and Mobile Menu -->
	@include('components.header')

	<!-- Hero Section -->
	@include('components.hero')

	<!-- Experiences -->
	<div class="thepackage">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle page_subtitle">{{ $sectionSubtitle ?? 'Discover Our' }}</div>
						<div class="section_title"><h1>{{ $sectionTitle ?? 'Immersive Experiences' }}</h1></div>
					</div>
				</div>
			</div>
			<div class="row thepackage_text_row">
				<div class="col-lg-12">
					<div class="thepackage_text">
						<p>{{ $packageText1 ?? 'Choose the experience that fits your day. <strong>Village Explorer (Half-Day)</strong> includes a traditional welcome, craft demos, and hands-on village-kitchen skills, followed by a garden-to-kitchen lunch. <strong>Family Day Out (Full-Day)</strong> adds sweet-making and extra time for photos and stories at a relaxed pace—perfect for families with kids. Both options are small-group, hosted by our local family in Udawalawe.' }}</p>
					</div>
				</div>
			</div>
			<div class="row thepackage_row">
				@foreach($experiences as $experience)
				<div class="col-lg-4 thepackage_column">
					<div class="thepackage_image"><img src="{{ asset('storage/' . $experience->image) }}" alt="{{ $experience->title }}"></div>
					<div class="thepackage_col trans_400">
						<div class="thepackage_col_title">{{ $experience->title }}</div>
						<div class="package_list">

							<!-- package -->
							<div class="package">
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $experience->description }}</div>
								</div>
								<div class="package_order"><a href="{{ route('contact') }}">Book Now</a></div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>

<div class="super_container">
	
	<!-- Header, Hamburger Menu, and Mobile Menu -->
	@include('components.header')

	<!-- Hero Section -->
	@include('components.hero')

	<!-- Packages -->
	<div class="thepackage">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle page_subtitle">{{ $sectionSubtitle ?? 'Plan Your Visit' }}</div>
						<div class="section_title"><h1>{{ $sectionTitle ?? 'Discover Our Packages' }}</h1></div>
					</div>
				</div>
			</div>
			<div class="row thepackage_text_row">
				<div class="col-lg-6">
					<div class="thepackage_text">
						<p>{{ $packageText1 ?? 'Choose the experience that fits your day. <strong>Village Explorer (Half-Day)</strong> includes a traditional welcome, craft demos, and hands-on village-kitchen skills, followed by a garden-to-kitchen lunch. <strong>Family Day Out (Full-Day)</strong> adds sweet-making and extra time for photos and stories at a relaxed pace—perfect for families with kids. Both options are small-group, hosted by our local family in Udawalawe.' }}</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="thepackage_text">
						<p>{{ $packageText2 ?? 'Looking for something specific? <strong>Heritage Workshop (Custom)</strong> is tailored for schools, universities, and teams—focus on cooking, crafts, or cultural talks, with flexible timing. All packages include guided activities, ingredients, drinking water, and safety briefings. Start times: <strong>morning 9:00</strong> or <strong>afternoon 14:00</strong>. We\'re <strong>1.4 km</strong> from the Elephant Orphanage; pricing is available on request or via seasonal promotions.' }}</p>
					</div>
				</div>
			</div>
			<div class="row thepackage_row">
				
				<!-- Village Explorer Package -->
				<div class="col-lg-4 thepackage_column">
					<div class="thepackage_image"><img src="{{ asset('frontend/images/package1.jpg') }}" alt="Village Explorer Package"></div>
					<div class="thepackage_col trans_400">
						<div class="thepackage_col_title">{{ $package1Title ?? 'Village Explorer (Half-Day)' }}</div>
						<div class="package_list">

							<!-- package -->
							<div class="package">
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package1Feature1 ?? 'Traditional welcome: village attire + cinnamon tea or king coconut' }}</div>
								</div>
                                <div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package1Feature2 ?? 'Garden walk & harvest for cooking' }}</div>
								</div>
                                <div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package1Feature3 ?? 'Village kitchen skills: paddy-husking, winnowing, millet grinding' }}</div>
								</div>
                                <div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package1Feature4 ?? 'Clay-pot cooking session (hands-on)' }}</div>
								</div>
                                <div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package1Feature5 ?? 'Coconut crafts: leaf weaving / husking (time-permitting)' }}</div>
								</div>
                                <div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package1Feature6 ?? 'Sit-down garden-to-kitchen lunch' }}</div>
								</div>
                                <div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package1Feature7 ?? 'Drinking water, host guidance, safety briefings' }}</div>
								</div>
                                <div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package1Feature8 ?? 'Start times: 9:00–13:30 or 14:00–18:30' }}</div>
								</div>
								<div class="package_order"><a href="{{ route('contact') }}">{{ $package1ButtonText ?? 'Book Now' }}</a></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Family Day Out Package -->
				<div class="col-lg-4 thepackage_column">
					<div class="thepackage_image"><img src="{{ asset('frontend/images/package2.jpg') }}" alt="Family Day Out Package"></div>
					<div class="thepackage_col trans_400">
						<div class="thepackage_col_title">{{ $package2Title ?? 'Family Day Out (Full-Day)' }}</div>
						<div class="package_list">
							
							<!-- package -->
							<div class="package">
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package2Feature1 ?? 'Everything in Village Explorer (all activities)' }}</div>
								</div>
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package2Feature2 ?? 'Gem panning — learn the swirl and spot stones' }}</div>
								</div>
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package2Feature3 ?? 'Spice & herbal garden walk — aromas, uses, remedies' }}</div>
								</div>
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package2Feature4 ?? 'Sweet making — kokis & kavum (tasting included)' }}</div>
								</div>
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package2Feature5 ?? 'Extra time for photos & stories with hosts' }}</div>
								</div>
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package2Feature6 ?? 'Optional tree-house visit / gentle coconut-tree climb' }}</div>
								</div>
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package2Feature7 ?? 'Lunch included; afternoon tea or king coconut' }}</div>
								</div>
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package2Feature8 ?? 'Ideal for families with kids; relaxed pace' }}</div>
								</div>
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package2Feature9 ?? 'Start time: 9:00 (flexible)' }}</div>
								</div>
								<div class="package_order"><a href="{{ route('contact') }}">{{ $package2ButtonText ?? 'Book Now' }}</a></div>
							</div>

						</div>
					</div>
				</div>

				<!-- Heritage Workshop Package -->
				<div class="col-lg-4 thepackage_column">
					<div class="thepackage_image"><img src="{{ asset('frontend/images/package3.jpg') }}" alt="Heritage Workshop Package"></div>
					<div class="thepackage_col trans_400">
						<div class="thepackage_col_title">{{ $package3Title ?? 'Heritage Workshop (Custom)' }}</div>
						<div class="package_list">

							<div class="package">
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package3Feature1 ?? 'Tailored sessions for schools, universities, or teams' }}</div>
								</div>
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package3Feature2 ?? 'Gem & geology: tools, safety, and panning practice' }}</div>
								</div>
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package3Feature3 ?? 'Coconut & crafts: weaving, husking, zero-waste uses' }}</div>
								</div>
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package3Feature4 ?? 'Spice botany: garden lab, grinding, and tasting' }}</div>
								</div>
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package3Feature5 ?? 'Agriculture heritage: paddy, irrigation, seasonal rhythms' }}</div>
								</div>
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package3Feature6 ?? 'Culture & storytelling or photo field session' }}</div>
								</div>
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package3Feature7 ?? 'Includes materials, facilitators, water, and safety brief' }}</div>
								</div>
								<div class="pb-3 package_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="package_title">{{ $package3Feature8 ?? 'Duration 2–6 hours (or multi-session); start times by arrangement' }}</div>
								</div>
								<div class="package_order"><a href="{{ route('contact') }}#enquire">{{ $package3ButtonText ?? 'Book Now' }}</a></div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Reservations -->
	@include('components.reservations')

	<!-- Footer -->
	@include('components.footer')
</div>

@include('components.scripts')

</body>
</html>


	<!-- Reservations -->
	@include('components.reservations')

	<!-- Footer -->
	@include('components.footer')
</div>

@include('components.scripts')

</body>
</html>
