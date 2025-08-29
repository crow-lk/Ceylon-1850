<!-- Footer -->
<footer class="footer">
	<div class="container">
		<div class="row">

			<!-- Footer Logo -->
			<div class="col-lg-3 footer_col">
				<div class="footer_logo">
					<div class="footer_logo_title">Ceylon 1850</div>
					<div class="footer_logo_subtitle">Tourism Experience</div>
				</div>
				<div class="copyright">
					<p style="line-height:1.2;">
						&copy; <span id="year"></span> All rights reserved by <span class="site-name">Ceylon 1850</span> |
						Created by <a href="https://crow.lk" target="_blank" rel="noopener">Crow.lk</a>
					</p>
				</div>
			</div>

			<!-- Footer About -->
			<div class="col-lg-6 footer_col">
				<div class="footer_about">
					<p>{{ $footerAbout ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio.' }}</p>
				</div>
			</div>

			<!-- Footer Contact -->
			<div class="col-lg-3 footer_col">
				<div class="footer_contact">
					<ul>
						<li class="d-flex flex-row align-items-start justify-content-start">
							<div><div class="footer_contact_title">Address:</div></div>
							<div class="footer_contact_text">1.4 km south of Udawalawe Elephant Orphanage, Udawalawe, Sri Lanka</div>
						</li>
						<li class="d-flex flex-row align-items-start justify-content-start">
							<div><div class="footer_contact_title">Phone:</div></div>
							<div class="footer_contact_text">+94 76 424 6613</div>
						</li>
						<li class="d-flex flex-row align-items-start justify-content-start">
							<div><div class="footer_contact_title">Email:</div></div>
							<div class="footer_contact_text">{{ $footerEmail ?? 'yourmail@gmail.com' }}</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
