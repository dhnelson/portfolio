@extends('layouts.layout')

@section('title', 'Home | Dustin Nelson')

@section('content') 

<div class="row">
	
	<div class="col-md-3 col-md-offset-1">
	    <div class="well">
	    	<img src="{{ url('images/headshot.png') }}" class="img-responsive img-rounded center-block" alt="headshot pic" width="200" height="150"></a> 
	    </div>
	</div>
	<div class="col-md-7 ">
	    <div class="well">
	    	<h1 class="text-center" id="bio">Welcome!</h1>
		    	<p class="text-justify indent">
		    		After graduating from Brandeis University with a B.S. in Biology and a Minor in Chemistry in May of 2015, I spent my time learning how to use multiple web development languages and technologies. Specifically I learned HTML, CSS, SASS, Bootstrap, JavaScript, jQuery, AJAX, JSON, PHP, MySQL, the Laravel framework, and WordPress. 
		    	</p>
		    	<p class="text-justify indent">	
		    		I loved studying and exploring the hard sciences in college, but I have found that my true enthusiasm is for understanding how things work and building things. So, while I won't be using my science background to get a job in the field, I have been able to apply my approach to understanding the way systems function in the physical world to the way they work on the Internet.  
		    	</p>
		    	<p class="text-justify indent">
		    		Studying molecular biology, I learned how cells use DNA as their code base, and how it gets parsed to make everything the body needs to survive. Computer code also gets parsed and used by the computer to make everything we see on our devices. In anatomy and physiology, I learned that all animals are built in remarkably similar ways despite their outward differences. In a similar way, most programming languages have the same basic logic despite looking syntactically different. I find learning the intricacies of code and the web to be fascinating, and am inspired by the endless possibilities of what can be built. I have always enjoyed building and fixing things, and creating websites and applications on the Internet is a new way for me to do what I love.   
		    	</p>
		    	<p class="text-justify indent">
		    		Using the languages I've learned this year I have been able to make websites for a few clients -- a personal trainer and a boxing gym using Laravel, and a WordPress site for a local punk band. Now, after studying on my own for a year, I feel that I am ready for a job where I can take my skills to the next level.
		    	</p>
	    </div>
	</div>


	<div class="col-md-10 col-md-offset-1">
	    <div class="well">
	    	<h1 class="text-center" id="bio">About Me!</h1>
	    		<p class="text-justify indent">
	    			I like to go hiking, boating, camping, skiing, and lots of other outdoor activities. Some of my favorite movies and TV shows include Gattaca, American Beauty, XMachina, The Walking Dead, Seinfeld, and Black Mirror. My favorite books include Brave New World, Enders Game, and the Foundation trilogy. Basically I love reading, and listening to audiobooks and podcasts. Some bands I'm into are Modest Mouse, Broken Bells, The Pixies, and System of a Down.
	    		</p>
	    		<p class="text-justify indent">
					In my spare time I'm learning guitar and car repair, cooking, working out, playing board games or platform tennis, and obviously, coding. I spend a lot of time thinking about: 
						<ul>
							<li>Life (why we're here and self aware)</li>
							<li>Happiness</li>
							<li>Morality &amp; Ethics</li>
							<li>The Zombie Apocalypse</li>
							<li>Aliens</li>
							<li>Politics</li>
							<li>Myself</li>
						</ul>
	    		</p>
	    	
	    	<h4>Here is a picture I just took on a hike in the Hudson Valley</h4>
	    		<img src="{{ url('images/panorama.jpg') }}" class="img-responsive img-rounded" alt="panorama pic" width="1140" height="300"></a> 
	    </div>
	</div>    
</div>

@stop