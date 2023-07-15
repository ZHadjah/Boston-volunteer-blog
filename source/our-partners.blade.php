@extends('_layouts.main')

@section('title', 'Our Partners')

@section('hero-media')
	<video autoplay loop muted playsinline>
		<source src="/assets/video/pexels-julia-m-cameron-6894187.mp4"
		type="video/mp4">
		<!-- TODO: a still image here as a fallback -->
		Sorry, your browser doesn't support embedded videos.
	</video>
@endsection

@section('hero-content')
	<h1>Our Partners</h1>
	<p>Proud to partner with great organizations. We couldn't do it without you!</p>
@endsection

@section('content')
<div class="bv-content-container">
	<section class="bv-our-sponsors">
		<aside class="bv-amazon">
			<div class="bv-amazon-desc">
				<img class="bv-az-logo bv-sponsor-logo" src="/assets/images/amazon-logo.svg" alt="Amazon Logo">
				<p>We recently partnered with Amazon to stuff and deliver 1,183 backpacks with school supplies for local school kids.</p>
			</div>
			<img class="bv-backpack-kids" src="/assets/images/kids-with-backpacks.jpg" alt="Children holding backpacks">
		</aside>
		<aside class="bv-bu-student-gov">
			<img class="bv-bu-student-gov-logo  bv-sponsor-logo" src="/assets/images/bu-student-government.png" alt="Boston University student government logo">
			<img class="bv-charles-river-cleanup" src="/assets/images/charles-river-cleanup.jpg" alt="Charles River Earth Day Cleanup">
		</aside>
		<aside class="bv-sponsor-info">
			<p>We've also partner with dozens of local companies and nonprofits.</p>
			<p>Want to learn how you can make a local impact too? Become a sponsor and help us build a better Boston.</p>
			<a href="mailto:josh@bostonvolunteer.org" class="bv-button">Learn more</a>
		</aside>
	</section>
</div>
@endsection
