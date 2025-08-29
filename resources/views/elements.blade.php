<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>

<div class="super_container">
	
	<!-- Header, Hamburger Menu, and Mobile Menu -->
	@include('components.header')

	<!-- Hero Section -->
	@include('components.hero')

	<!-- Elements Content -->
	@include('components.elements-content')

	<!-- Reservations -->
	@include('components.reservations')

	<!-- Footer -->
	@include('components.footer')
</div>

@include('components.scripts')

</body>
</html>