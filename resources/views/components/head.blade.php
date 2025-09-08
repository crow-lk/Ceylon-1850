<!-- Head Section -->
<head>
<title>{{ $pageTitle ?? 'Elements' }}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="{{ $pageDescription ?? 'Ceylon 1850 template project' }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- CSS Files -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/bootstrap-4.1.2/bootstrap.min.css') }}">
<link href="{{ asset('frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link href="{{ asset('frontend/plugins/colorbox/colorbox.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('frontend/plugins/jquery-datepicker/jquery-ui.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('frontend/plugins/jquery-timepicker/jquery.timepicker.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/main_styles.css') }}">

@if(isset($customCSS))
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/' . $customCSS) }}">
@else
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/responsive.css') }}">
@endif

@if(isset($pageType) && $pageType === 'elements')
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/elements.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/elements_responsive.css') }}">
@elseif(isset($pageType) && $pageType === 'contact')
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/contact.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/contact_responsive.css') }}">
@elseif(isset($pageType) && $pageType === 'blog')
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/blog.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/blog_responsive.css') }}">
@elseif(isset($pageType) && $pageType === 'packages')
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/packages.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/menu_responsive.css') }}">
@elseif(isset($pageType) && $pageType === 'auth')
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/auth.css') }}">
@endif

<style>
/* Header dropdown and button spacing fixes */
.dropdown-item:hover {
    background-color: #f8f9fa !important;
}

.dropdown-item:focus {
    background-color: #f8f9fa !important;
}

/* Fallback for browsers that don't support gap */
@supports not (gap: 15px) {
    .header_content .col-12.col-lg-3 a.reservations_phone:first-child {
        margin-right: 15px;
    }
}

/* Ensure dropdown works on mobile */
@media (max-width: 991px) {
    .dropdown-menu {
        position: absolute !important;
        top: 100% !important;
        left: 0 !important;
        right: auto !important;
        transform: none !important;
    }
}

/* Fix dropdown positioning */
.dropdown {
    position: relative;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    right: 0;
    z-index: 1000;
}
</style>
</head>
