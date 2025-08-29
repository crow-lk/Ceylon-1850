<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>

<div class="super_container">
	
	<!-- Header, Hamburger Menu, and Mobile Menu -->
	@include('components.header')

	<!-- Hero Section -->
	@include('components.hero')

	<!-- Contact -->
	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="contact_title">Contact info</div>
					<div class="contact_text">
						<p>{{ $contactInfo ?? 'Ceylon 1850 is a living-heritage experience in Udawalawe. Spend a relaxed half or full day with our local hosts—roll cinnamon, weave coconut leaves, try gem panning, and cook a garden-to-kitchen meal together. Just 1.4 km from the Elephant Orphanage, our small-group sessions are warm, safe, and hands-on—perfect for families, couples, and friends.' }}</p>
					</div>
					<div class="contact_logo_container">
						<div class="contact_logo_title">Ceylon 1850</div>
						<div class="contact_logo_subtitle">Tourism Experience</div>
					</div>
				</div>
				<div class="col-xl-5 col-lg-6">
					<div class="contact_list_container d-flex flex-column align-items-lg-center justify-content-start">
						<div class="contact_list_content">
							<ul class="contact_list">
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Address</div></div>
									<div>{{ $contactAddress ?? '1.4 km south of Udawalawe Elephant Orphanage, Udawalawe, Sri Lanka' }}</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Phone</div></div>
									<div>{{ $contactPhone ?? '+94 76 424 6613' }}</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>E-mail</div></div>
									<div>{{ $contactEmail ?? 'info@ceylon1850.com' }}</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row google_map_row">
				<div class="col">
					
					<!-- Contact Map -->
					<div class="contact_map">
						<!-- Google Map -->
						<div class="map">
							<div id="google_map" class="google_map">
								<div class="map_container">
									<div id="map">
										<iframe
											src="https://maps.google.com/maps?q=6.4300274,80.8080724&hl=en&z=16&output=embed"
											loading="lazy"
											referrerpolicy="no-referrer-when-downgrade"
											allowfullscreen>
										</iframe>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Social Media Section -->
	<section id="social-follow" class="py-5">
		<div class="container text-center">
			<div class="home_title text-dark"><h1>Follow & Connect</h1></div>

			<div class="social-grid">
				<!-- Facebook -->
				<a class="social-card" href="https://www.facebook.com/Ceylon1850?mibextid=kFxxJD" target="_blank" rel="noopener">
					<span class="icon"><i class="fa fa-facebook"></i></span>
					<span class="label">Facebook</span>
				</a>

				<!-- TripAdvisor -->
				<a class="social-card" href="https://www.tripadvisor.com/Restaurant_Review-g3577009-d27164351-Reviews-Ceylon_1850_Authentic_Restaurant-Udawalawa_Sabaragamuwa_Province.html?m=19905" target="_blank" rel="noopener">
					<span class="icon"><i class="fa fa-tripadvisor"></i></span>
					<span class="label">Tripadvisor</span>
				</a>

				<!-- Google (Business / Maps listing) -->
				<a class="social-card" href="https://www.google.com/search?client=ms-android-samsung-gj-rev1&sca_esv=bc8be091688d4f3a&sxsrf=ADLYWIKeCQuMHyNr7b939Pfb2aZVBV45tg%3A1716998090914&q=Ceylon%201850-%20Sri%20Lankan%20Agriculture%20Village%20Experience&ludocid=10880154590766841915&ibp=gwp%3B0%2C7" target="_blank" rel="noopener">
					<span class="icon"><i class="fa fa-google"></i></span>
					<span class="label">Google</span>
				</a>

				<!-- WhatsApp -->
				<a class="social-card" href="http://wa.me/94777772668" target="_blank" rel="noopener">
					<span class="icon"><i class="fa fa-whatsapp"></i></span>
					<span class="label">WhatsApp</span>
				</a>
			</div>

			<!-- Optional: placeholders you can enable later
			<div class="social-grid mt-3">
				<a class="social-card" href="#" target="_blank" rel="noopener">
					<span class="icon"><i class="fa fa-instagram"></i></span>
					<span class="label">Instagram</span>
				</a>
				<a class="social-card" href="#" target="_blank" rel="noopener">
					<span class="icon"><i class="fa fa-youtube-play"></i></span>
					<span class="label">YouTube</span>
				</a>
			</div>
			-->
		</div>
	</section>

	<!-- Reservations -->
	@include('components.reservations')

	<!-- Footer -->
	@include('components.footer')
</div>

@include('components.scripts')

<!-- Google Maps API -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>

</body>
</html>
