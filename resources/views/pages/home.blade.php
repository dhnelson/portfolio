@extends('layouts.layout')

@section('title', 'Home | Dustin Nelson')

@section('content') 

<div class="row">
	<div class="col-md-7 col-md-offset-1">
	    <div class="well">
	    	<h1 class="text-center" id="bio">Welcome!</h1>
		    	<p class="text-justify indent">
		    		Hi, my name is Dustin Nelson. I graduated in May of 2015 from Brandeis University with a B.S. in Biology and a Minor in Chemistry. While I loved studying and exploring the hard sciences, I realized after graduation that I did not want a job in those respective fields. I did take an intro to computers class though, and I new I enjoyed learning HTML, CSS, and JavaScript. A friend of mine that works as a web developer encouraged me to learn PHP and see if I liked web development. While exploring the field I realized it drew my attention in a similar way to biology. 
		    	</p>
		    	<p class="text-justify indent">
		    		Primarily it is my desire to understand how things work and to build things. While studying molecular biology I learned how cells use DNA as their code base, and how it gets parsed to make everything the body needs to survive. Computer code also gets parsed down and used by the computer to make everything we see on our devices. In anatomy and physiology I learned that all animals are built in remarkably similar ways despite their outward differences. In a similar way most programming languages have the same basic logic despite looking syntactically different. I find learning the intricacies of code and the web to be fascinating, and on top of that the possibilities of what can be built seems endless. I have always enjoyed building and fixing things and creating websites and applications on the Internet is a new way for me to do what I love.  
		    	</p>
		    	<p class="text-justify indent"> 
		    		Now, after studying on my own for a year, I feel that I am ready for a job or internship where I can take my skills to the next level. So far I have become proficient in HTML, CSS, SASS, Bootstrap, JavaScript, jQuery, AJAX, JSON, PHP, MySQL, the Laravel framework, and WordPress. I have made a website for a personal trainer using laravel, and am currently developing two more sites; One for a boxing gym and the other is a WordPress site for a band. 
		    	</p>
	    </div>
	</div>
	<div class="col-md-3">
	    <div class="well">
	    	<img src="{{ url('images/headshot.png') }}" class="img-responsive img-rounded center-block" alt="headshot pic" width="200" height="150"></a> 
	    </div>
	</div>

	<div class="col-md-10 col-md-offset-1">
	    <div class="well">
	    	<h1 class="text-center" id="bio">About Me!</h1>
	    		<p class="text-justify indent">
	    			I like to go hiking, boating, camping, skiing, and lots of other outdoor stuff. Some of my favorite movies include Gattaca, LOTR, American Beauty, and XMachina. Some of my favorite TV shows are the Walking Dead, Seinfeld, Broad City, Battlestar Galactica, Masters of None, and Black Mirror. My favorite books include Brave New World, Enders Game, Game of Thrones, and the Foundation trilogy. Basically I love reading, and listening to audiobooks and podcasts. Some bands I'm into are Modest Mouse, the Decembrists, WHY?, Broken Bells, The Pixies, Interpol, System of a Down, Spoon, Of Montreal, and TV on the Radio.
	    		</p>
	    		<p class="text-justify indent">
					In my spare time I'm learning guitar and car repair, cooking, working out, playing platform tennis, and obviously, coding. I spend a lot of time thinking about: 
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