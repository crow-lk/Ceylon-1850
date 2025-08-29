<!-- Scripts -->
<script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('frontend/styles/bootstrap-4.1.2/popper.js') }}"></script>
<script src="{{ asset('frontend/styles/bootstrap-4.1.2/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('frontend/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('frontend/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/colorbox/jquery.colorbox-min.js') }}"></script>
<script src="{{ asset('frontend/plugins/jquery-datepicker/jquery-ui.js') }}"></script>
<script src="{{ asset('frontend/plugins/jquery-timepicker/jquery.timepicker.js') }}"></script>
<script src="{{ asset('frontend/plugins/progressbar/progressbar.min.js') }}"></script>

@if(isset($customScript))
	<script src="{{ asset('frontend/js/' . $customScript) }}"></script>
@elseif(isset($pageType) && $pageType === 'elements')
	<script src="{{ asset('frontend/js/elements.js') }}"></script>
@elseif(isset($pageType) && $pageType === 'contact')
	<script src="{{ asset('frontend/js/contact.js') }}"></script>
@elseif(isset($pageType) && $pageType === 'blog')
	<script src="{{ asset('frontend/js/blog.js') }}"></script>
@elseif(isset($pageType) && $pageType === 'packages')
	<script src="{{ asset('frontend/js/menu.js') }}"></script>
@else
	<script src="{{ asset('frontend/js/custom.js') }}"></script>
@endif
