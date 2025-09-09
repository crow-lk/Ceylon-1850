<!-- Hero Section -->
<div class="home">
  @if(isset($pageType) && $pageType === 'home')
    <!-- Video background -->
    <div class="hero-video-wrap">
      <video class="hero-video"
             autoplay muted loop playsinline preload="metadata"
             poster="{{ asset('frontend/images/hero-poster.jpg') }}"
             aria-hidden="true">
        {{-- Provide both if you have them; MP4 alone is fine --}}
        <source src="{{ asset('frontend/videos/intro.webm') }}" type="video/webm">
        <source src="{{ asset('frontend/videos/intro.mp4') }}" type="video/mp4">
      </video>
      <span class="hero-overlay"></span>
    </div>
  @elseif(isset($pageType) && $pageType === 'contact')
    <div class="parallax_background parallax-window"
         data-parallax="scroll"
         data-image-src="{{ asset('frontend/images/contact.jpg') }}"
         data-speed="0.8"></div>
  @elseif(isset($pageType) && $pageType === 'blog')
    <div class="parallax_background parallax-window"
         data-parallax="scroll"
         data-image-src="{{ asset('frontend/images/blog.jpg') }}"
         data-speed="0.8"></div>
  @elseif(isset($pageType) && $pageType === 'packages')
    <div class="parallax_background parallax-window"
         data-parallax="scroll"
         data-image-src="{{ asset('frontend/images/menu.jpg') }}"
         data-speed="0.8"></div>
  @else
    <div class="parallax_background parallax-window"
         data-parallax="scroll"
         data-image-src="{{ asset('frontend/images/elements.jpg') }}"
         data-speed="0.8"></div>
  @endif

  <div class="home_container">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="home_content text-center">
            <div class="home_subtitle page_subtitle">{{ $heroSubtitle ?? 'Ceylon 1850' }}</div>
            <div class="home_title">
              @if(isset($pageType) && $pageType === 'home')
                <h3 class="text-white">{{ $heroTitle ?? 'An Extraordinary Experience' }}</h3>
              @else
                <h3 class="text-white">{{ $heroTitle ?? 'Elements' }}</h3>
              @endif
            </div>
            {{-- Optional description for home --}}
            {{-- <div class="home_text ml-auto mr-auto"><p>{{ $heroDescription ?? '' }}</p></div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>

  @if(isset($pageType) && $pageType === 'home')
    <div class="scroll_icon"></div>
  @endif
</div>
