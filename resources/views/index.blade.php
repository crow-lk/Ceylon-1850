<!DOCTYPE html>
<html lang="en">

@include('components.head')
<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/main_styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/responsive.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/about_styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/about_responsive.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/elements_styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/elements_responsive.css') }}">
</head>

<body>

<div class="super_container">
	
	<!-- Header, Hamburger Menu, and Mobile Menu -->
	@include('components.header')
	@include('components.scripts')

	<!-- Hero Section -->
	@include('components.hero')

<!-- Experiences Overview -->
<section id="experiences-overview" class="py-5">
  <div class="container">
    <!-- Header -->
    <div class="row justify-content-center text-center mb-5">
      <div class="col-12 col-md-10 col-lg-8">
        <div class="intro_subtitle page_subtitle">Three Signature Experiences</div>
        <h2 class="mb-0">Life, Craft & Cooking — the Ceylon 1850 Way</h2>
      </div>
    </div>

    <div class="timeline position-relative" style="--tl-scale:0;">

      <!-- 1) TEXT RIGHT / IMAGE LEFT -->
      <div class="timeline-item position-relative my-5">
        <span class="timeline-dot"></span>
        <div class="row align-items-center g-4">
          <!-- Image LEFT (mobile first) -->
          <div class="col-12 col-lg-6 order-1 order-lg-1 pe-lg-5 reveal reveal-left">
            <div class="ratio ratio-4x3 rounded-4 overflow-hidden shadow exp-img">
              <img src="{{ asset('frontend/images/exp-1.png') }}" alt="Village experience at Ceylon 1850" class="w-100 h-100" style="object-fit:cover;">
            </div>
            <!-- Book Now button under the image -->
            <div class="text-center mt-3">
              <a href="{{ route('contact') }}#enquire" class="btn btn-primary">Book Now</a>
            </div>
          </div>

          <!-- Text RIGHT -->
          <div class="col-12 col-lg-6 order-2 order-lg-2 ps-lg-5 reveal reveal-right">
            <div class="exp-card p-4 p-md-5 h-100">
              <span class="text-uppercase text-muted small d-block mb-1">Life as it Was in the 1850s</span>
              <h3 class="h4 mb-2">Village Experience</h3>
              <p class="mb-2">Step into a village where the rhythm of life has remained unchanged for generations. From the moment you are welcomed with a <em>jatawa</em> or headscarf (a traditional piece of clothing that also offers protection from the sun), you become part of the story.</p>
              <p class="mb-3">Sip cinnamon tea or a king coconut freshly picked from the tree, then wander through gardens rich with herbs and spices. Guided by villagers, you’ll learn the small rituals of daily life: weaving coconut leaves, peeling cinnamon, husking paddy, winnowing rice, grinding millet, and scraping coconuts. These simple tasks—once the heartbeat of every home—connect you to the roots of Sri Lanka.</p>
              <strong class="d-block mb-2">Inclusions:</strong>
              <ul class="mb-0 stagger-me">
                <li>Welcome with <em>jatawa</em> and headscarf</li>
                <li>Cinnamon tea or king coconut drink</li>
                <li>Walk through organic, spice and herbal gardens</li>
                <li>Introduction to the gem mine and <em>dona</em></li>
                <li>Optional coconut tree climbing</li>
                <li>Coconut-leaf weaving and husk peeling</li>
                <li>Preparing cinnamon sticks by hand</li>
                <li>Traditional kitchen activities: husking, winnowing, grinding, coconut husking</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- 2) TEXT LEFT / IMAGE RIGHT -->
      <div class="timeline-item position-relative my-5">
        <span class="timeline-dot"></span>
        <div class="row align-items-center g-4">
          <!-- Text LEFT (mobile second) -->
          <div class="col-12 col-lg-6 order-2 order-lg-1 pe-lg-5 reveal reveal-left">
            <div class="exp-card p-4 p-md-5 h-100">
              <span class="text-uppercase text-muted small d-block mb-1">Authentic Roots, Living Stories</span>
              <h3 class="h4 mb-2">Gem Mine Experience</h3>
              <p class="mb-2">The gem mines of Sri Lanka hold more than treasures—they carry stories of earth, hands, and heritage passed through generations. Begin with cinnamon tea or king coconut and a short garden walk, with the option to climb a coconut tree.</p>
              <p class="mb-3">Continue to the <em>dona</em>, a traditional pit where gem gravel is brought to the surface, washed, sieved, and sorted by hand. Watch—and join—the process to feel the thrill of unearthing stones just as miners have done for centuries.</p>
              <strong class="d-block mb-2">Inclusions:</strong>
              <ul class="mb-0 stagger-me">
                <li>Welcome with cinnamon tea or king coconut</li>
                <li>Organic, spice, and herbal garden walk</li>
                <li>Coconut tree climbing (optional)</li>
                <li>Demonstration of gem mining in the <em>dona</em>: extraction, washing, sieving, sorting</li>
              </ul>
            </div>
          </div>

          <!-- Image RIGHT (mobile first) -->
          <div class="col-12 col-lg-6 order-1 order-lg-2 ps-lg-5 reveal reveal-right">
            <div class="ratio ratio-4x3 rounded-4 overflow-hidden shadow exp-img">
              <img src="{{ asset('frontend/images/exp-2.png') }}" alt="Gem mine experience at Ceylon 1850" class="w-100 h-100" style="object-fit:cover;">
            </div>
            <!-- Book Now button under the image -->
            <div class="text-center mt-3">
              <a href="{{ route('contact') }}#enquire" class="btn btn-primary">Book Now</a>
            </div>
          </div>
        </div>
      </div>

      <!-- 3) TEXT RIGHT / IMAGE LEFT -->
      <div class="timeline-item position-relative my-5">
        <span class="timeline-dot"></span>
        <div class="row align-items-center g-4">
          <!-- Image LEFT (mobile first) -->
          <div class="col-12 col-lg-6 order-1 order-lg-1 pe-lg-5 reveal reveal-left">
            <div class="ratio ratio-4x3 rounded-4 overflow-hidden shadow exp-img">
              <img src="{{ asset('frontend/images/exp-3.png') }}" alt="Cooking experience with lunch/dinner at Ceylon 1850" class="w-100 h-100" style="object-fit:cover;">
            </div>
            <!-- Book Now button under the image -->
            <div class="text-center mt-3">
              <a href="{{ route('contact') }}#enquire" class="btn btn-primary">Book Now</a>
            </div>
          </div>

          <!-- Text RIGHT -->
          <div class="col-12 col-lg-6 order-2 order-lg-2 ps-lg-5 reveal reveal-right">
            <div class="exp-card p-4 p-md-5 h-100">
              <span class="text-uppercase text-muted small d-block mb-1">Taste, Tales & Tradition</span>
              <h3 class="h4 mb-2">Cooking Experience + Lunch or Dinner</h3>
              <p class="mb-2">The kitchen is the heart of a Sri Lankan home. Start by hand-picking fresh vegetables, herbs, and spices from the village garden. Crack coconuts, grind millet, stir curries over open fire, and laugh with local women who treat you like family.</p>
              <p class="mb-3">Each recipe is a tale, each spice a story, each dish a memory. Harvest, cook, taste, and share the way it’s been done for generations.</p>
              <strong class="d-block mb-2">Inclusions:</strong>
              <ul class="mb-0 stagger-me">
                <li>Harvesting vegetables and spices from the garden</li>
                <li>Interactive cooking with local hosts</li>
                <li>Preparation of traditional dishes over firewood</li>
                <li>Lunch or dinner with the cooked meal</li>
                <li>Making &amp; tasting a traditional sweet (Kavum or Kokis)</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.timeline -->
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

  <!-- Partners -->
<section id="partners" class="py-5">
  <div class="container">

    <!-- Header -->
    <div class="row justify-content-center text-center mb-4">
      <div class="col-12 col-md-10 col-lg-8">
        <h2 class="mb-2">Our Partners</h2>
        <p class="text-muted mb-0">We’re proud to be listed on trusted travel platforms.</p>
      </div>
    </div>

    <!-- Logos / Badges -->
    <div class="row justify-content-center">
      <!-- Mobile: col-10 (bigger)
           Tablet: col-md-6
           Desktop: col-lg-4 (smaller on wide screens) -->
      <div class="col-10 col-sm-8 col-md-6 col-lg-4 text-center">
        <a href="https://www.kayak.co.uk/Wigan.50236.guide" target="_blank" rel="noopener"
           class="d-inline-block p-3 p-md-4">
          <img
            src="https://content.r9cdn.net/rimg/seo/badges/v1/LIGHT_LARGE_FIND_US_KAYAK.png"
            alt="Find us on KAYAK"
            class="img-fluid"
          >
        </a>
      </div>
    </div>

  </div>
</section>


<!-- Find Us Online -->
<section id="find-us" class="py-5 py-md-5">
  <div class="container">

    <!-- Header -->
    <div class="row justify-content-center text-center mb-4 pb-2 pb-md-3">
      <div class="col-12 col-md-10 col-lg-8 px-3 px-md-4">
        <div class="sig_subtitle page_subtitle">Find Us Online</div>
        <h2 class="mb-2">Follow, Message & Review</h2>
        <p class="text-muted mb-0 px-2 px-md-4">
          Connect with us and read real guest reviews across your favorite platforms.
        </p>
      </div>
    </div>

    <!-- Icons / Badges -->
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-5 g-3 g-md-4 justify-content-center align-items-center text-center py-2 py-md-3 px-2">

      <!-- Facebook -->
      <div class="col d-flex justify-content-center py-1">
        <a href="https://web.facebook.com/Ceylon1850"
           class="brand-icon facebook d-inline-flex align-items-center justify-content-center p-3 p-lg-3"
           aria-label="Facebook" target="_blank" rel="noopener">
          <i class="fa-brands fa-facebook-f fs-1 fs-md-2"></i>
        </a>
      </div>

      <!-- Tripadvisor (PNG inside round chip) -->
      <div class="col d-flex justify-content-center py-1">
        <a href="https://www.tripadvisor.com/Restaurant_Review-g3577009-d27164351-Reviews-Ceylon_1850_Authentic_Restaurant-Udawalawa_Sabaragamuwa_Province.html"
           class="brand-icon tripadvisor d-inline-flex align-items-center justify-content-center p-2 p-sm-3"
           aria-label="Tripadvisor" target="_blank" rel="noopener">
          <img src="{{ asset('frontend/images/tripadvisor.png') }}"
               alt="Tripadvisor"
               class="img-fluid p-1 p-sm-0">
        </a>
      </div>

      <!-- WhatsApp -->
      <div class="col d-flex justify-content-center py-1">
        <a href="https://api.whatsapp.com/send?phone=94777772668"
           class="brand-icon whatsapp d-inline-flex align-items-center justify-content-center p-3 p-lg-3"
           aria-label="WhatsApp" target="_blank" rel="noopener">
          <i class="fa-brands fa-whatsapp fs-1 fs-md-2"></i>
        </a>
      </div>

      <!-- Google -->
      <div class="col d-flex justify-content-center py-1">
        <a href="https://www.google.com/search?client=safari&sca_esv=3153b04427d9d7e5&rls=en&sxsrf=AE3TifNX-ieJWYQRAjI2E1H5rG3jzY-8Ug:1756048473756&kgmid=/g/11ldbbm4c1&q=Ceylon+1850-+Village+Culinary,Agriculture+Gem+Mine+Experience&shndl=30&shem=lcuae,lsptbl1,uaasie&source=sh/x/loc/uni/m1/1&kgs=16fb273f92978515&utm_source=lcuae,lsptbl1,uaasie,sh/x/loc/uni/m1/1"
           class="brand-icon google d-inline-flex align-items-center justify-content-center p-3 p-lg-3"
           aria-label="Google" target="_blank" rel="noopener">
          <i class="fa-brands fa-google fs-1 fs-md-2"></i>
        </a>
      </div>

      <!-- (Optional) KAYAK badge — uncomment if you want it here too
      <div class="col d-flex justify-content-center py-1">
        <a href="https://www.kayak.co.uk/Wigan.50236.guide"
           class="d-inline-flex align-items-center justify-content-center p-2 p-sm-3"
           aria-label="KAYAK" target="_blank" rel="noopener">
          <img
            src="https://content.r9cdn.net/rimg/seo/badges/v1/LIGHT_LARGE_FIND_US_KAYAK.png"
            alt="Find us on KAYAK"
            class="img-fluid px-2">
        </a>
      </div> -->

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