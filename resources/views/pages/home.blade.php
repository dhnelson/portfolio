@extends('layouts.layout')

@section('title', 'Home')

@section('content') 

<div class="row">
	<div class="col-md-3 col-md-offset-1">
	    <div class="well">
	    	<img src="{{ url('images/headshot1.png') }}" class="img-responsive img-rounded" alt="headshot pic" width="250" height="200"></a> 
	    </div>
	</div>

	<div class="col-md-7">
	    <div class="well">
	    	<h1 class="text-center" id="bio">Welcome!</h1>
		    	<p class="text-justify">
		    		Hi, my name is Dustin Nelson. I graduated in 2015 from Brandeis University with a B.S. in Biology and a Minor in Chemistry. While I loved studying and learning biology, chemistry, and physics, I realized after graduation that I did not want a job in those respective fields. I did take an intro to computers class though, and I new I enjoyed learning HTML, CSS, and JavaScript. A friend of mine in the field encouraged me to learn PHP and see if I liked web development. Turns out I do. 
		    	</p>
		    	<p>
		    		After studying on my own for a year I feel that I am ready for a job or internship where I can take my skills to the next level. So far I have become proficient in HTML, CSS, SASS, JavaScript, PHP, the Laravel framework, MySQL, MAMP, jQuery, Bootstrap, Git, AJAX, JSON, Composer, Grunt, and WordPress. I have made a website for a personal trainer using laravel and am currently developing another site for a boxing gym on WordPress.
		    	</p>
	    </div>
	</div>

	<div class="col-md-10 col-md-offset-1">
	    <div class="well">
	    	<h1 class="text-center" id="bio">About Me!</h1>
	    		<p>
	    			I like to go hiking, boating, camping, skiing, and other outdoor stuff. Some of my favorite movies include Gattaca, LOTR, American Beauty, The Martian, The Big Short, and XMachina. Some of my favorite shows are the Walking Dead, Curb Your Enthusiasm, Seinfeld, Lost, Broad City, Battlestar Galactica, Masters of None, Black Mirror, and just baut  everything HBO and AMC make. My favorite books are Brave New World, Enders game series, Foundation and Thrawn trilogy, and GOT series. Basically I love reading, and listening to audiobooks, and podcasts. Some bands I'm into are Modest Mouse, the Decembrists, WHY?, Broken Bells, The Pixies, Interpol, System of a Down, Spoon, Of Montreal, and TV on the Radio.
	    		</p>
	    		<p>
					In my spare time I'm learning guitar and car repair, cooking, working out, playing platform tennis, and obviously, coding. I spend a lot of time thinking about: 
						<ul>
							<li>Life (why we're here and self aware)</li>
							<li>Happiness</li>
							<li>Morality</li>
							<li>The Zombie Apocalypse</li>
							<li>Politics</li>
							<li>Myself</li>
							<li>Aliens</li>
						</ul>
	    		</p>
	    </div>
	</div>    

</div>

{{-- <img src="{{ url('images/panorama.jpg') }}" class="img-responsive img-rounded" alt="panorama pic" width="1140" height="300"></a> --}}


@stop