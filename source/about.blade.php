@extends('_layouts.main')

@section('title', 'Our Story')

@section('hero-media')
		<video autoplay loop muted playsinline>
			<source src="/assets/video/video-optimized-further.mp4"
			type="video/mp4">
			<!-- TODO: a still image here as a fallback -->
			Sorry, your browser doesn't support embedded videos.
		</video>
@endsection

@section('hero-content')
		<h1>About Us</h1>
		<p>Boston Volunteers is a non-profit organization fighting to make Boston cleaner, safer, and better.</p>
@endsection

@section('content')
<div class="bv-content-container bv-content-text bv-content-profiles">
<h2>We’re working together to make Boston even better.
</h2>
<aside class="bv-impact-results">
	<div class="bv-impact-fact">
		<em>10,970</em> Boston Volunteers strong
	</div>
	<div class="bv-impact-fact">
		<em>33</em> Upcoming Boston Volunteer events
	</div>
</aside>
<p>When Boston Volunteer was founded in 2006, we had one goal: to ensure everyone in Boston has the opportunity to succeed. And now, we’re ready to take that challenge to the next level. Our leadership team is committed to bringing even more volunteers and nonprofit organizations together with the help of our local partners and generous volunteers.</p>
<a href="/get-involved/" class="bv-button">Learn how you can help</a>
</div>
	<section class="bv-quotes bv-profiles">
		<div class="bv-center bv-content-text">
			<h2>Our Leadership Team</h2>
			<p>We are thrilled to have some of the most committed, passionate, and innovative Bostonians around leading the charge at Boston Volunteer. Here's who you'll be working with:</p>
		</div>
		<section class="bv-content-text">
			<img class="bv-profile-image" src="/assets/images/josh_suit.jpg" alt="Josh Konoff">
			<h2>Josh Konoff</h2>
			<p>Josh Konoff is the entrepreneur and Executive Director of the Boston Volunteers, one of Boston’s fastest growing nonprofits.</p>
			<p style="margin-bottom: 0">Fun facts about the Boston Volunteers:</p>
			<ul style="margin-top: 0.25em;">
				<li>Connecting and creating community since 2008</li>
				<li>Partners with Amazon and local companies</li>
				<li>Learn more: <a href="https://www.BostonVolunteer.org">www.BostonVolunteer.org</a></li>
			</ul>

			<p>Josh met his wife, Autumn, while both studied at Boston University. His favorite hobbies are entrepreneurship, adventures in nature, and reading a good book in its original language.  His favorite books are <em>War and Peace</em> and <em>Atomic Habits</em>.</p>
			<p>Josh also has a background in both machine learning and real estate. Josh still works in real estate, with more than 8 years of experience, where he almost exclusively helps long time relationships and their referrals.</p>
			<p>Let’s meet for coffee: <a href="mailto:josh@bostonvolunteer.org">josh@bostonvolunteer.org</a> or <a href="https://www.linkedin.com/in/joshuakonoff8/">connect with Josh on LinkedIn.</a></p>
		</section>
		<section class="bv-content-text">
			<img class="bv-profile-image" src="/assets/images/zach.jpg" alt="Zach H.">
			<h2>Zach H.</h2>
			<!--h3>Title?</h3-->
			<p>Zach found his passion for technology when he was a kid playing video games. Pursuing this passion, he decided to go into software engineering and has been looking to help others break into the industry as well.</p>
			<p>Though coding and gaming while he is indoors, he is also an outdoorsman. Zach enjoys paddleboarding, jetskiing, racing, and many other adrenaline junkie activities!</p>
		</section>
	</section>
@endsection
