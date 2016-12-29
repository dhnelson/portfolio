@extends('layouts.layout')

@section('title', 'Résumé | Dustin Nelson')

@section('content') 

<div class="row">
	<div class="col-md-10 col-md-offset-1">
	    <div class="well">
			<h1 class="entry-title">Résumé</h1>

			<p><strong>Download:</strong> {!! Html::link('download/Nelson_Dustin_Developer_Resume.pdf', 'PDF') !!}</a> | {!! Html::link('download/Nelson_Dustin_Developer_Resume.docx', 'DOCX') !!}</a></p>
			<hr>
			
			<h1 style="text-align:center; line-height: 1">Dustin H.R. Nelson</h1>
				
			<h4 style="text-align:center; border-bottom: 1px solid #fff; padding-bottom: 3px;">South Orange, NJ 07079 | <a href="mailto:dustinhnelson@gmail.com">dustinhnelson@gmail.com</a> | <a href="http://dustinhnelson.com">dustinhnelson.com</a> | <a href="tel:1-201-704-1917">(201) 704 - 1917</a></h4>
			<h4 style="text-align:center; line-height: 1.2">WEB DEVELOPER | WEB ENGINEER | FULL STACK ENGINEER | LARAVEL DEVELOPER<br>PHP SOFTWARE DEVELOPER | WEB APPLICATION DEVELOPER</h4>

			<h5 style="text-align:center; line-height: 1.2;">Trained in the life sciences with a drive to understand how things function<br>Strong communicator, both verbal and written<br>Fluent in English | Conversational Spanish</h5>

			<p>Entry level experience in Full Stack Web Development with a background in biology and chemistry. This training has allowed me to apply my approach to understanding the way systems function in the physical world to the way they work on the Internet.</p>
			
			<h3>TECHNICAL COMPETENCIES</h3>
			<p><strong>Programming Languages:</strong> HTML, CSS, SASS, Bootstrap, JavaScript, jQuery, AJAX, JSON, AngularJS (learning), PHP, and MySQL<br>
			<strong>Technologies:</strong> Laravel, Git, Composer, Gulp, NPM, phpMyAdmin, MAMP, WordPress, Mac, and Windows</p>

			<h3>EDUCATION</h3>
			<p><strong>Brandeis University</strong>, Waltham, MA<br>
			B.S. Biology &amp; Minor in Chemistry<span style="float:right;">May 2015</span></p>

			<h3>EXPERIENCE</h3>

			<p><i>Website Developer</i>, <strong>Freelance</strong><span style="float:right;">Oct 2015 - Present</span><br>
			Clients include: EPS Training, Death Vacation (Band), GH3 Boxing Gym</p>

			<p><i>Front Desk</i>, <strong>Whippany Athletic Club</strong><span style="float:right;">Oct 2015 - Present</span></p>

			<h3>RESEARCH &amp; INTERNSHIP EXPERIENCE</h3>
			
			<p><i>Office Assistant</i>, <strong>Computer Science Administration Office</strong>
			<br>Brandeis University, Waltham, MA<span style="float:right;">Nov 2011 - May 2015</span></p>
				<ul>
					<li>Organized and performed data mining and analysis of demographic alumni information, and entered it into an excel spreadsheet</li>
					<li>Developed and implemented a new flexible mailbox system for graduate students</li>
				</ul>

			<p><i>Research Assistant</i> | <i>Laboratory Technician</i>, <strong>Dr. Marr Laboratory, Rosenstiel Basic Medical Sciences Research Center</strong>
			<br>Brandeis University, Waltham, MA<span style="float:right;">Jun - Nov 2014</span></p>
				<ul>
					<li>Assisted with project investigating role of endogenous dFoxo in Hsp70 expression, and project<br> investigating expression of HSPs in response to stress starvation in flies</li>
					<li>Managed chemical and laboratory supplies, and prepared frequently used reagents</li>
				</ul>
			
			<p><i>Intern</i>, <strong>Israel Discount Bank, International Customer Division</strong><br>
			New York, NY <span style="float:right;">Summers 2012 &amp; 2013</span></p>
				<ul>
					<li>Assisted account officers through completion of various documentation for foreign bank account customers</li>
					<li>Developed a comprehensive intern manual</li>
					<li>Synchronized filing system improving the retrieval of vital documents</li>
				</ul>

			<h3>CLUBS &amp; ACTIVITIES</h3>
				<table>
					<tbody>
						<tr>
							<td>
								<p>●&nbsp;&nbsp;&nbsp; Brandeis Global Medical Brigades, Oct 2014 &ndash; Apr 2015</p>
							</td>
							<td>
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;●&nbsp; Tron &ndash; Ultimate Frisbee, Jan 2013 &ndash; Apr 2015</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>●&nbsp;&nbsp;&nbsp; Eagle Scout, May 2011</p>
							</td>
							<td>
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;●&nbsp; Boxing Club, Sep 2011 &ndash; Apr 2015</p>
							</td>
						</tr>
					</tbody>
				</table>

			<hr>
			<p><strong>Download:</strong> {!! Html::link('download/Nelson_Dustin_Developer_Resume.pdf', 'PDF') !!}</a> | {!! Html::link('download/Nelson_Dustin_Developer_Resume.docx', 'DOCX') !!}</a></p>
			
			<h3>Share this:</h3> @include('layouts._addtoany')

	    </div>
	</div>    
</div>
@stop