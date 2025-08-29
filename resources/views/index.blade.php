<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>

<div class="super_container">
	
	<!-- Header, Hamburger Menu, and Mobile Menu -->
	@include('components.header')

	<!-- Hero Section -->
	@include('components.hero')

	<!-- Intro Section -->
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_content">
						<div class="intro_subtitle page_subtitle">{{ $introSubtitle ?? 'Living Heritage' }}</div>
						<div class="intro_title">
							<h2>{{ $introTitle ?? 'Hands-on Village Experience' }}</h2>
						</div>
						<div class="intro_text">
							<p>
								{{ $introText1 ?? 'Step into living heritage at <strong>Ceylon 1850</strong> in Udawalawe — a hands-on village experience crafted by local families. From your cinnamon-tea welcome to the stories behind our crafts and cuisine, every moment is authentic, relaxed, and memorable.' }}
							</p>
							<p>
								{{ $introText2 ?? 'Pan for gems, roll cinnamon sticks, weave with coconut leaves, try paddy-husking and winnowing, then harvest fresh vegetables to cook a garden-to-kitchen lunch. Finish with Sri Lankan sweets like <em>kokis</em> and <em>kavum</em>. Just 1.4 km south of the Elephant Orphanage, it\'s the perfect complement to your safari day.' }}
							</p>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-4 col-md-6 intro_col">
							<div class="intro_image"><img src="{{ asset('frontend/images/intro_1.jpg') }}" alt="https://unsplash.com/@quanle2819"></div>
						</div>
						<div class="col-xl-4 col-md-6 intro_col">
							<div class="intro_image"><img src="{{ asset('frontend/images/intro_2.jpg') }}" alt="https://unsplash.com/@fabmag"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Tabs -->
	<div class="tabs_wrapper" style="margin-top: 100px;">
		<div class="tabs">
			<div class="tab active">Tab 1</div>
			<div class="tab">Tab 2</div>
			<div class="tab">Tab 3</div>
		</div>
		<div class="tab_panels">
			<div class="tab_panel active">Panel 1</div>
			<div class="tab_panel">Panel 2</div>
			<div class="tab_panel">Panel 3</div>
		</div>
	</div>

	<!-- Featured Experiences -->
	<section id="featured-experiences" class="py-5">
		<!-- Controllers (hidden radios) -->
		<input type="radio" name="fe" id="fe1" checked>
		<input type="radio" name="fe" id="fe2">
		<input type="radio" name="fe" id="fe3">
		<input type="radio" name="fe" id="fe4">
		<input type="radio" name="fe" id="fe5">
		<input type="radio" name="fe" id="fe6">

		<div class="container">
			<!-- Header -->
			<div class="row justify-content-center text-center mb-4">
				<div class="col-12 col-md-10 col-lg-8">
					<div class="intro_subtitle page_subtitle">Featured Experiences</div>
					<div class="section_title">
						<h1 class="text-light">What You'll Do</h1>
					</div>
					<p class="text-muted mb-0 text-light">Hands-on heritage moments hosted by our local family in Udawalawe.</p>
				</div>
			</div>

			<!-- Layout -->
			<div class="fe-layout row g-4 ">
				<!-- LEFT: list -->
				<div class="col-12 col-lg-5">
					<div class="fe-selector" role="tablist" aria-label="Experiences list">
						<input type="radio" name="fe-dummy" style="display:none"> <!-- keep Safari happy -->
						<label class="fe-item" for="fe1">
							<span class="fe-icon"><i class="fa fa-leaf" aria-hidden="true"></i></span>
							<h3 class="text-light">Traditional Welcome</h3>
							<p class="mb-0">Village attire, cinnamon tea or king coconut, and a warm hello.</p>
						</label>
						<label class="fe-item" for="fe2">
							<span class="fe-icon"><i class="fa fa-diamond" aria-hidden="true"></i></span>
							<h3 class="text-light">Gem Panning</h3>
							<p class="mb-0">Try the pan, swirl the gravel, and spot shiny surprises.</p>
						</label>
						<label class="fe-item" for="fe3">
							<span class="fe-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
							<h3 class="text-light">Cinnamon Stick Rolling</h3>
							<p class="mb-0">Prepare the bark, roll the quills, breathe the fragrance.</p>
						</label>
						<label class="fe-item" for="fe4">
							<span class="fe-icon"><i class="fa fa-pagelines" aria-hidden="true"></i></span>
							<h3 class="text-light">Coconut Crafts</h3>
							<p class="mb-0">Weave, husk, and discover how nothing goes to waste.</p>
						</label>
						<label class="fe-item" for="fe5">
							<span class="fe-icon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
							<h3 class="text-light">Village Kitchen Skills</h3>
							<p class="mb-0">Paddy-husking, winnowing, and millet grinding with our hosts.</p>
						</label>
						<label class="fe-item" for="fe6">
							<span class="fe-icon"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span>
							<h3 class="text-light">Sweet Making</h3>
							<p class="mb-0">Cook favourites like <em>kokis</em> and <em>kavum</em>—then taste together.</p>
						</label>
					</div>
				</div>

				<!-- RIGHT: dynamic preview -->
				<div class="col-12 col-lg-7">
					<div class="fe-view">
						<!-- 1 -->
						<article class="fe-pane pane-fe1" aria-labelledby="fe1">
							<div class="fe-media position-relative">
								<img src="{{ asset('frontend/images/exp-welcome.jpg') }}" alt="Traditional welcome at Ceylon 1850">
							</div>
							<div class="fe-body">
								<h3 class="text-light">Traditional Welcome</h3>
								<p>Slip into village style, sip cinnamon tea or king coconut, and learn how we greet guests in the old way—slow, warm, and personal.</p>
								<div class="fe-tags">
									<span class="fe-tag">Cinnamon tea</span>
									<span class="fe-tag">Village attire</span>
									<span class="fe-tag">Photo-friendly</span>
								</div>
							</div>
						</article>

						<!-- 2 -->
						<article class="fe-pane pane-fe2" aria-labelledby="fe2">
							<div class="fe-media position-relative">
								<img src="{{ asset('frontend/images/exp-gem.jpg') }}" alt="Hands-on gem panning">
							</div>
							<div class="fe-body">
								<h3>Gem Panning</h3>
								<p>Hear the stories behind Sri Lankan gems, swirl the pan, and try spotting stones yourself—safe, guided, and great for kids.</p>
								<div class="fe-tags">
									<span class="fe-tag">Hands-on</span>
									<span class="fe-tag">All ages</span>
									<span class="fe-tag">Local stories</span>
								</div>
							</div>
						</article>

						<!-- 3 -->
						<article class="fe-pane pane-fe3" aria-labelledby="fe3">
							<div class="fe-media position-relative">
								<img src="{{ asset('frontend/images/exp-cinnamon.jpg') }}" alt="Rolling cinnamon sticks">
							</div>
							<div class="fe-body">
								<h3>Cinnamon Stick Rolling</h3>
								<p>From bark to beautiful quills—prepare, scrape, and roll with our artisans while the kitchen fills with that unmistakable aroma.</p>
								<div class="fe-tags">
									<span class="fe-tag">Fragrant</span>
									<span class="fe-tag">Craft demo</span>
									<span class="fe-tag">Sri Lankan spice</span>
								</div>
							</div>
						</article>

						<!-- 4 -->
						<article class="fe-pane pane-fe4" aria-labelledby="fe4">
							<div class="fe-media position-relative">
								<img src="{{ asset('frontend/images/exp-coconut.jpg') }}" alt="Coconut craft and leaf weaving">
							</div>
							<div class="fe-body">
								<h3>Coconut Crafts</h3>
								<p>Try leaf weaving, husk a coconut, and see how every part of the tree serves daily life—food, tools, and shelter.</p>
								<div class="fe-tags">
									<span class="fe-tag">Leaf weaving</span>
									<span class="fe-tag">Husking</span>
									<span class="fe-tag">Zero waste</span>
								</div>
							</div>
						</article>

						<!-- 5 -->
						<article class="fe-pane pane-fe5" aria-labelledby="fe5">
							<div class="fe-media position-relative">
								<img src="{{ asset('frontend/images/exp-kitchen.jpg') }}" alt="Village kitchen skills">
							</div>
							<div class="fe-body">
								<h3>Village Kitchen Skills</h3>
								<p>Learn the rhythm of the village kitchen: paddy-husking, winnowing, and millet grinding—then cook together with garden-fresh ingredients.</p>
								<div class="fe-tags">
									<span class="fe-tag">Paddy husking</span>
									<span class="fe-tag">Winnowing</span>
									<span class="fe-tag">Millet grinding</span>
								</div>
							</div>
						</article>

						<!-- 6 -->
						<article class="fe-pane pane-fe6" aria-labelledby="fe6">
							<div class="fe-media position-relative">
								<img src="{{ asset('frontend/images/exp-sweets.jpg') }}" alt="Making kokis and kavum">
							</div>
							<div class="fe-body">
								<h3>Sweet Making</h3>
								<p>Mix, shape, and fry traditional sweets like <em>kokis</em> and <em>kavum</em>. Learn the stories and enjoy them warm from the pan.</p>
								<div class="fe-tags">
									<span class="fe-tag">Kokis</span>
									<span class="fe-tag">Kavum</span>
									<span class="fe-tag">Family-friendly</span>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Loaders -->
	<div class="loaders">
		<div class="container">
			<div class="row justify-content-center text-center mb-4">
				<div class="col-12 col-md-10 col-lg-8">
					<div class="sig_subtitle page_subtitle">Living Heritage at a Glance</div>
					<h1 class="mb-2">A quick snapshot of what guests experience </h1>
					<p class="text-muted">From your village welcome to a shared garden meal, the day flows through gentle exploration, practical crafts, and warm conversations with our family in Udawalawe.</p>
				</div>
			</div>
			<div class="row loaders_row">

				<!-- Loader -->
				<div class="col-xl-3 col-md-6 loader_col">
					<!-- Loader -->
					<div class="loader_container text-center">
						<div class="loader text-center" data-perc="0.80"></div>
						<div class="loader_content">
							<div class="loader_title">Gem Panning</div>
						</div>
					</div>
				</div>

				<!-- Loader -->
				<div class="col-xl-3 col-md-6 loader_col">
					<!-- Loader -->
					<div class="loader_container text-center">
						<div class="loader text-center" data-perc="0.20"></div>
						<div class="loader_content">
							<div class="loader_title">Pasta</div>
						</div>
					</div>
				</div>

				<!-- Loader -->
				<div class="col-xl-3 col-md-6 loader_col">
					<!-- Loader -->
					<div class="loader_container text-center">
						<div class="loader text-center" data-perc="1.00"></div>
						<div class="loader_content">
							<div class="loader_title">Perfect</div>
						</div>
					</div>
				</div>

				<!-- Loader -->
				<div class="col-xl-3 col-md-6 loader_col">
					<!-- Loader -->
					<div class="loader_container text-center">
						<div class="loader text-center" data-perc="0.95"></div>
						<div class="loader_content">
							<div class="loader_title">Main Courses</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Video -->
	<div class="video_section">
		<div class="background_image" style="background-image:url({{ asset('frontend/images/video.jpg') }})"></div>
		<div class="video_section_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="video_section_title">Living Heritage in Motion</div>
			<div class="video_section_icon"><a class="vimeo video_button" href="/Users/kavindulakshitha/Downloads/thevenue-gh-pages/videos/AQO4AmuZJrYg3aI1dT0GBoLmwRnh1H68MDmc7ZyLBqLq-p_tKTPoo8JKLSbGsepIQbjBN6ZFlNw36CEq-WYJDjaD.mp4"><i class="fa fa-play" aria-hidden="true"></i></a></div>
		</div>
	</div>

	<!-- Packages -->
	<section id="packages" class="py-5">
		<div class="container">

			<!-- Header -->
			<div class="row justify-content-center text-center mb-4">
				<div class="col-12 col-md-10 col-lg-8">
					<div class="intro_subtitle page_subtitle">Packages</div>
					<div class="section_title">
						<h2>Choose Your Day</h2>
					</div>
					<p class="text-muted mb-0">Half-day, full-day, or a tailored workshop—hosted by our local family in Udawalawe.</p>
				</div>
			</div>

			<!-- Cards -->
			<div class="row">
				<!-- Village Explorer -->
				<div class="col-12 col-md-6 col-lg-4 mb-4">
					<div class="pkg-card h-100 d-flex flex-column">
						<div class="d-flex align-items-center justify-content-between mb-2">
							<h3 class="mb-0 text-light">Village Explorer</h3>
							<span class="pkg-tag">Half-Day</span>
						</div>
						<ul class="list-unstyled mb-3">
							<li class="d-flex"><i class="fa fa-check me-2 mt-1" aria-hidden="true"></i>Welcome drink, craft demos, village kitchen skills</li>
							<li class="d-flex"><i class="fa fa-check me-2 mt-1" aria-hidden="true"></i>Garden-to-kitchen lunch</li>
							<li class="d-flex"><i class="fa fa-check me-2 mt-1" aria-hidden="true"></i><strong>Ideal for:</strong>&nbsp;Couples &amp; small groups</li>
						</ul>
						<div class="mt-auto">
							<a href="{{ route('packages') }}#explorer" class="btn btn-primary w-100">View Details</a>
						</div>
					</div>
				</div>

				<!-- Family Day Out -->
				<div class="col-12 col-md-6 col-lg-4 mb-4">
					<div class="pkg-card h-100 d-flex flex-column">
						<div class="d-flex align-items-center justify-content-between mb-2">
							<h3 class="mb-0 text-light">Family Day Out</h3>
							<span class="pkg-tag">Full-Day</span>
						</div>
						<ul class="list-unstyled mb-3">
							<li class="d-flex"><i class="fa fa-check me-2 mt-1" aria-hidden="true"></i>All Explorer activities + sweet making &amp; extra hands-on time</li>
							<li class="d-flex"><i class="fa fa-check me-2 mt-1" aria-hidden="true"></i>Relaxed pace with photo breaks</li>
							<li class="d-flex"><i class="fa fa-check me-2 mt-1" aria-hidden="true"></i><strong>Ideal for:</strong>&nbsp;Families with kids</li>
						</ul>
						<div class="mt-auto">
							<a href="{{ route('packages') }}#family" class="btn btn-primary w-100">View Details</a>
						</div>
					</div>
				</div>

				<!-- Heritage Workshop -->
				<div class="col-12 col-md-6 col-lg-4 mb-4">
					<div class="pkg-card h-100 d-flex flex-column">
						<div class="d-flex align-items-center justify-content-between mb-2">
							<h3 class="mb-0 text-light">Heritage Workshop</h3>
							<span class="pkg-tag">Custom</span>
						</div>
						<ul class="list-unstyled mb-3">
							<li class="d-flex"><i class="fa fa-check me-2 mt-1" aria-hidden="true"></i>Tailored sessions for schools, universities, or teams</li>
							<li class="d-flex"><i class="fa fa-check me-2 mt-1" aria-hidden="true"></i>Add cultural talks, cooking focus, or more crafts</li>
							<li class="d-flex"><i class="fa fa-check me-2 mt-1" aria-hidden="true"></i><strong>Ideal for:</strong>&nbsp;Education &amp; corporate groups</li>
						</ul>
						<div class="mt-auto">
							<a href="{{ route('contact') }}#enquire" class="btn btn-primary w-100">Contact Us</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Footnote -->
			<div class="row">
				<div class="col-12 text-center">
					<p class="text-muted small mb-0">Pricing available on request or via seasonal promotions.</p>
				</div>
			</div>

		</div>
	</section>

	<!-- Why Choose Us -->
	<section id="why-us" class="py-5">
		<div class="container">
			<div class="why-surface rounded-4 p-4 p-md-5">

				<!-- Header -->
				<div class="text-center mb-4">

					<div class="sig_subtitle page_subtitle">Why Choose Us</div>
					<h1 class="mb-2 text-light text-dark">What Visitors Love About Ceylon 1850</h1>

					<p class="mb-0 text-light">Authentic, small-group, garden-to-kitchen experiences—minutes from Udawalawe safari.</p>
				</div>

				<!-- Cards -->
				<div class="row g-4">
					<!-- 1 -->
					<div class="col-12 col-sm-6 col-lg-3">
						<a class="why-card" href="#experiences">
							<span class="why-bg" style="background-image:url('{{ asset('frontend/images/chooseus_1.jpg') }}')"></span>
							<span class="why-overlay"></span>
							<span class="why-content">
								<span class="why-stat">Tradition</span>
								<span class="why-label">Authentic & local-led</span>
								<span class="why-sub">Hosted by village families who share everyday traditions warmly, inviting you to participate, learn, and connect through hospitality, and hands-on activities.</span>
							</span>
							<span class="why-chip"><i class="fa fa-heart" aria-hidden="true"></i></span>
						</a>
					</div>

					<!-- 2 -->
					<div class="col-12 col-sm-6 col-lg-3">
						<a class="why-card" href="#booking">
							<span class="why-bg" style="background-image:url('{{ asset('frontend/images/chooseus_2.jpg') }}')"></span>
							<span class="why-overlay"></span>
							<span class="why-content">
								<span class="why-stat">Caring</span>
								<span class="why-label">Small groups, hands-on</span>
								<span class="why-sub">Personal, interactive pacing ensures time to try every activity, ask questions, capture photos, and enjoy attentive guidance with safety throughout.</span>
							</span>
							<span class="why-chip"><i class="fa fa-users" aria-hidden="true"></i></span>
						</a>
					</div>

					<!-- 3 -->
					<div class="col-12 col-sm-6 col-lg-3">
						<a class="why-card" href="#cooking">
							<span class="why-bg" style="background-image:url('{{ asset('frontend/images/chooseus_3.jpg') }}')"></span>
							<span class="why-overlay"></span>
							<span class="why-content">
								<span class="why-stat">Fresh</span>
								<span class="why-label">Garden-to-kitchen cooking</span>
								<span class="why-sub">Harvest seasonal vegetables, learn traditional techniques in a clay pot kitchen, then cook and share a meal together, creating delicious memories.</span>
							</span>
							<span class="why-chip"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
						</a>
					</div>

					<!-- 4 -->
					<div class="col-12 col-sm-6 col-lg-3">
						<a class="why-card" href="#location">
							<span class="why-bg" style="background-image:url('{{ asset('frontend/images/chooseus_4.jpg') }}')"></span>
							<span class="why-overlay"></span>
							<span class="why-content">
								<span class="why-stat">Location</span>
								<span class="why-label">Close to Safari</span>
								<span class="why-sub">Very close from the Elephant Orphanage, easy to pair with safari departures, transfers, and timing, maximizing your day with minimal travel.</span>
							</span>
							<span class="why-chip"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
						</a>
					</div>

				</div>
			</div>
	</section>

	<!-- Testimonials -->
	<section id="testimonials" class="py-5">
		<div class="container">

			<div class="row justify-content-center text-center mb-4">
				<div class="col-12 col-md-10 col-lg-8">
					<div class="sig_subtitle page_subtitle">Guest Stories</div>
					<h1 class="mb-2">What Visitors Say</h1>
					<p class="text-muted">Real moments from Ceylon 1850—hands-on heritage, warm hosts, and food from the garden.</p>
				</div>
			</div>

			<!-- Snap carousel -->
			<div class="snap-wrapper">
				<div class="snap-track" id="t-track" tabindex="0" aria-label="Testimonials carousel">

					<!-- Slide 1 -->
					<article class="snap-slide" id="t1">
						<div class="card h-100 shadow-sm testimonial-card border-0">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<img src="{{ asset('frontend/images/guest1.jpg') }}" alt="Emma R." class="rounded-circle avatar me-3 pr-1 pl-1 pb-1 pt-1 pr-1 pl-1 pb-1 pt-1">
									<div>
										<h6 class="mb-0">Sandra Jack</h6><small class="text-muted">United Kingdom</small>
									</div>
								</div>
								<div class="stars mb-2" aria-label="5 out of 5">
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
								</div>
								<p class="mb-3">Thank you so much for the great time being your guests. We have loved the very nice garden, warm welcome for cooking and the fast choice for spices and ayurvedic treatments. The food was the best we had in Sri Lanka and we werw happy to make roti, polsambol and dal upon our arrival back home. You are all very welcome for a roti when stopping bye in Frankfurt :-)</p>
								<small class="text-muted">Visited July 2025 • Family Package</small>
							</div>
						</div>
					</article>

					<!-- Slide 2 -->
					<article class="snap-slide" id="t2">
						<div class="card h-100 shadow-sm testimonial-card border-0">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<img src="{{ asset('frontend/images/avatars/guest2.jpg') }}" alt="Tharindu &amp; Nadee" class="rounded-circle avatar me-3 pr-1 pl-1 pb-1 pt-1">
									<div>
										<h6 class="mb-0">Tharindu &amp; Nadee</h6><small class="text-muted">Sri Lanka</small>
									</div>
								</div>
								<div class="stars mb-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
								<p class="mb-3">"Kids loved gem panning and coconut crafts. Small groups and great explanations."</p>
								<small class="text-muted">Visited June 2025 • Family Day Out</small>
							</div>
						</div>
					</article>

					<!-- Slide 3 -->
					<article class="snap-slide" id="t3">
						<div class="card h-100 shadow-sm testimonial-card border-0">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<img src="{{ asset('frontend/images/avatars/guest3.jpg') }}" alt="Luca M." class="rounded-circle avatar me-3 pr-1 pl-1 pb-1 pt-1">
									<div>
										<h6 class="mb-0">Luca M.</h6><small class="text-muted">Italy</small>
									</div>
								</div>
								<div class="stars mb-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
								<p class="mb-3">"After our safari we came here—peaceful, genuine, and the food was amazing."</p>
								<small class="text-muted">Visited May 2025 • Village Explorer</small>
							</div>
						</div>
					</article>

					<!-- Slide 4 -->
					<article class="snap-slide" id="t4">
						<div class="card h-100 shadow-sm testimonial-card border-0">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<img src="{{ asset('frontend/images/avatars/guest4.jpg') }}" alt="Akiko S." class="rounded-circle avatar me-3 pr-1 pl-1 pb-1 pt-1">
									<div>
										<h6 class="mb-0">Akiko S.</h6><small class="text-muted">Japan</small>
									</div>
								</div>
								<div class="stars mb-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
								<p class="mb-3">"Cultural experience felt respectful and real. Loved learning to winnow and grind millet."</p>
								<small class="text-muted">Visited April 2025 • Cultural Tour</small>
							</div>
						</div>
					</article>

					<!-- Slide 5 -->
					<article class="snap-slide" id="t5">
						<div class="card h-100 shadow-sm testimonial-card border-0">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<img src="{{ asset('frontend/images/avatars/guest5.jpg') }}" alt="Daniel P." class="rounded-circle avatar me-3 pr-1 pl-1 pb-1 pt-1">
									<div>
										<h6 class="mb-0">Daniel P.</h6><small class="text-muted">Germany</small>
									</div>
								</div>
								<div class="stars mb-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
								<p class="mb-3">"Hosts were wonderful. Garden-to-kitchen cooking was the best meal of our holiday."</p>
								<small class="text-muted">Visited March 2025 • Cooking Session</small>
							</div>
						</div>
					</article>

					<!-- Slide 6 -->
					<article class="snap-slide" id="t6">
						<div class="card h-100 shadow-sm testimonial-card border-0">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<img src="{{ asset('frontend/images/avatars/guest6.jpg') }}" alt="Ayesha K." class="rounded-circle avatar me-3 pr-1 pl-1 pb-1 pt-1">
									<div>
										<h6 class="mb-0">Ayesha K.</h6><small class="text-muted">UAE</small>
									</div>
								</div>
								<div class="stars mb-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
								<p class="mb-3">"Perfect after Udawalawe. Educational for kids and relaxing for adults. Highly recommended."</p>
								<small class="text-muted">Visited Feb 2025 • Family Day Out</small>
							</div>
						</div>
					</article>

				</div>
			</div>

			<!-- Dots AFTER the cards (no JS) -->
			<div class="text-center mt-3" aria-label="Slide navigation">
				<a class="snap-dot" href="#t1" aria-label="Go to slide 1"></a>
				<a class="snap-dot" href="#t2" aria-label="Go to slide 2"></a>
				<a class="snap-dot" href="#t3" aria-label="Go to slide 3"></a>
				<a class="snap-dot" href="#t4" aria-label="Go to slide 4"></a>
				<a class="snap-dot" href="#t5" aria-label="Go to slide 5"></a>
				<a class="snap-dot" href="#t6" aria-label="Go to slide 6"></a>
			</div>

		</div>
	</section>

	<!-- Reservations -->
	@include('components.reservations')

	<!-- Footer -->
	@include('components.footer')
</div>

@include('components.scripts')

</body>
</html>