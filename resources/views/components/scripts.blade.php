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

<script>
(function(){
  const root = document.querySelector('#experiences-overview .timeline');
  const items = document.querySelectorAll('#experiences-overview .timeline-item');
  const reveals = document.querySelectorAll('#experiences-overview .reveal');
  const staggers = document.querySelectorAll('#experiences-overview .stagger-me');

  // Add stagger delays to list items
  staggers.forEach(ul => {
    [...ul.children].forEach((li, i) => li.style.transitionDelay = (120 + i*60) + 'ms');
  });

  // Observer for cards/images
  const obs = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add('in');
        // If it's a timeline item, pop dot too
        if(entry.target.classList.contains('timeline-item')){
          entry.target.classList.add('in');
        }
        // If it's the UL, flip it to "in" to trigger stagger
        if(entry.target.classList.contains('stagger-me')){
          entry.target.classList.add('in');
        }
      }
    });
  }, {threshold: 0.16});

  // Observe reveals and items
  reveals.forEach(el => obs.observe(el));
  items.forEach(el => obs.observe(el));
  staggers.forEach(el => obs.observe(el));

  // Animate the vertical line when the section first enters
  const lineObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if(e.isIntersecting){
        root.style.setProperty('--tl-scale', '1');
        lineObs.disconnect();
      }
    });
  }, {threshold: 0.1});
  lineObs.observe(root);
})();
</script>
