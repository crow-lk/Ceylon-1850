<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>

<div class="super_container">
	
	<!-- Header, Hamburger Menu, and Mobile Menu -->
	@include('components.header')

	<!-- Hero Section -->
	@include('components.hero')

	<!-- Blog -->
	<div class="blog">
		<div class="container">
			<div class="row">

				<!-- Blog Post -->
				<div class="col-lg-6 blog_col">
					<div class="blog_post">
						<div class="blog_post_image_container">
							<div class="blog_post_image"><img src="{{ asset('frontend/images/blog_1.jpg') }}" alt="https://unsplash.com/@patrick_schneider"></div>
							<div class="blog_post_date"><a href="#">{{ $blogPost1Date ?? 'June 18, 2018' }}</a></div>
						</div>
						<div class="blog_post_content">
							<div class="blog_post_title"><a href="#">{{ $blogPost1Title ?? 'Our Nomenee at the Restaurants Awards' }}</a></div>
							<div class="blog_post_info">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li>by <a href="#">{{ $blogPost1Author ?? 'George Smith' }}</a></li>
									<li>in <a href="#">{{ $blogPost1Category ?? 'Lifestyle' }}</a></li>
									<li><a href="#">{{ $blogPost1Comments ?? '2 Comments' }}</a></li>
								</ul>
							</div>
							<div class="blog_post_text">
								<p>{{ $blogPost1Text ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio. Suspendisse potenti.' }}</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Blog Post -->
				<div class="col-lg-6 blog_col">
					<div class="blog_post">
						<div class="blog_post_image_container">
							<div class="blog_post_image"><img src="{{ asset('frontend/images/blog_2.jpg') }}" alt="https://unsplash.com/@tashytown"></div>
							<div class="blog_post_date"><a href="#">{{ $blogPost2Date ?? 'June 18, 2018' }}</a></div>
						</div>
						<div class="blog_post_content">
							<div class="blog_post_title"><a href="#">{{ $blogPost2Title ?? 'Recipe of the week' }}</a></div>
							<div class="blog_post_info">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li>by <a href="#">{{ $blogPost2Author ?? 'George Smith' }}</a></li>
									<li>in <a href="#">{{ $blogPost2Category ?? 'Lifestyle' }}</a></li>
									<li><a href="#">{{ $blogPost2Comments ?? '2 Comments' }}</a></li>
								</ul>
							</div>
							<div class="blog_post_text">
								<p>{{ $blogPost2Text ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio. Suspendisse potenti.' }}</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Blog Post -->
				<div class="col-lg-6 blog_col">
					<div class="blog_post">
						<div class="blog_post_image_container">
							<div class="blog_post_image"><img src="{{ asset('frontend/images/blog_3.jpg') }}" alt="https://unsplash.com/@stefanjonhson"></div>
							<div class="blog_post_date"><a href="#">{{ $blogPost3Date ?? 'June 18, 2018' }}</a></div>
						</div>
						<div class="blog_post_content">
							<div class="blog_post_title"><a href="#">{{ $blogPost3Title ?? 'Our Nomenee at the Restaurants Awards' }}</a></div>
							<div class="blog_post_info">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li>by <a href="#">{{ $blogPost3Author ?? 'George Smith' }}</a></li>
									<li>in <a href="#">{{ $blogPost3Category ?? 'Lifestyle' }}</a></li>
									<li><a href="#">{{ $blogPost3Comments ?? '2 Comments' }}</a></li>
								</ul>
							</div>
							<div class="blog_post_text">
								<p>{{ $blogPost3Text ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio. Suspendisse potenti.' }}</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Blog Post -->
				<div class="col-lg-6 blog_col">
					<div class="blog_post">
						<div class="blog_post_image_container">
							<div class="blog_post_image"><img src="{{ asset('frontend/images/blog_4.jpg') }}" alt="Jackelin Slack"></div>
							<div class="blog_post_date"><a href="#">{{ $blogPost4Date ?? 'June 18, 2018' }}</a></div>
						</div>
						<div class="blog_post_content">
							<div class="blog_post_title"><a href="#">{{ $blogPost4Title ?? 'Our Nomenee at the Restaurants Awards' }}</a></div>
							<div class="blog_post_info">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li>by <a href="#">{{ $blogPost4Author ?? 'George Smith' }}</a></li>
									<li>in <a href="#">{{ $blogPost4Category ?? 'Lifestyle' }}</a></li>
									<li><a href="#">{{ $blogPost4Comments ?? '2 Comments' }}</a></li>
								</ul>
							</div>
							<div class="blog_post_text">
								<p>{{ $blogPost4Text ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio. Suspendisse potenti.' }}</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Blog Post -->
				<div class="col-lg-6 blog_col">
					<div class="blog_post">
						<div class="blog_post_image_container">
							<div class="blog_post_image"><img src="{{ asset('frontend/images/blog_5.jpg') }}" alt="https://unsplash.com/@mantra_media_ltd"></div>
							<div class="blog_post_date"><a href="#">{{ $blogPost5Date ?? 'June 18, 2018' }}</a></div>
						</div>
						<div class="blog_post_content">
							<div class="blog_post_title"><a href="#">{{ $blogPost5Title ?? 'Our Nomenee at the Restaurants Awards' }}</a></div>
							<div class="blog_post_info">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li>by <a href="#">{{ $blogPost5Author ?? 'George Smith' }}</a></li>
									<li>in <a href="#">{{ $blogPost5Category ?? 'Lifestyle' }}</a></li>
									<li><a href="#">{{ $blogPost5Comments ?? '2 Comments' }}</a></li>
								</ul>
							</div>
							<div class="blog_post_text">
								<p>{{ $blogPost5Text ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio. Suspendisse potenti.' }}</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Blog Post -->
				<div class="col-lg-6 blog_col">
					<div class="blog_post">
						<div class="blog_post_image_container">
							<div class="blog_post_image"><img src="{{ asset('frontend/images/blog_6.jpg') }}" alt="https://unsplash.com/@brookelark"></div>
							<div class="blog_post_date"><a href="#">{{ $blogPost6Date ?? 'June 18, 2018' }}</a></div>
						</div>
						<div class="blog_post_content">
							<div class="blog_post_title"><a href="#">{{ $blogPost6Title ?? 'Our Nomenee at the Restaurants Awards' }}</a></div>
							<div class="blog_post_info">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li>by <a href="#">{{ $blogPost6Author ?? 'George Smith' }}</a></li>
									<li>in <a href="#">{{ $blogPost6Category ?? 'Lifestyle' }}</a></li>
									<li><a href="#">{{ $blogPost6Comments ?? '2 Comments' }}</a></li>
								</ul>
							</div>
							<div class="blog_post_text">
								<p>{{ $blogPost6Text ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio. Suspendisse potenti.' }}</p>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="row load_more_row">
				<div class="col">
					<div class="button load_more_button ml-auto mr-auto trans_200"><a href="#">{{ $loadMoreText ?? 'Load More' }}</a></div>
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
