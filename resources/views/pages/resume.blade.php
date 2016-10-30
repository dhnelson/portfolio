@extends('layouts.layout')

@section('title', 'Résumé | Dustin Nelson')

@section('content') 

<div class="row">
	<div class="col-md-10 col-md-offset-1">
	    <div class="well">
			<h1 class="entry-title">Résumé</h1>

			<p><strong>Download:</strong> {!! Html::link('download/Nelson_Dustin_Developer_Resume_10-16.pdf', 'PDF') !!}</a> | {!! Html::link('download/Nelson_Dustin_Developer_Resume_10-16.doc', 'DOCX') !!}</a></p>
			<hr>
			
			<h1 style="text-align:center;">Dustin H.R. Nelson</h1>
				
			<p style="text-align:center;">Web Developer<br>
			<span><a href="dustinhnelson@gmail.com">dustin@dhrnelson.com</a></span>&nbsp;&nbsp; ●&nbsp;&nbsp; <a href="https://dhrnelson.com/portfolio">dhrnelson.com/portfolio</a> &nbsp; ●&nbsp;&nbsp; <a href="tel:1-201-704-1917">(201) 704-1917</a></p>
			
			<h2>Skills</h2>
			<p><strong>Programming Languages:</strong> HTML, CSS, SASS, Bootstrap, JavaScript, jQuery, AJAX, JSON, PHP, and MySQL<br>
			<strong>Technologies:</strong> Laravel, MAMP, Git, Composer, Grunt, WordPress, Mac, and Windows</p>
			
			<h2>Education</h2>
			<p><strong>Brandeis University</strong>, Waltham, MA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="float:right;">2015</span><br>
			B.S. Biology &amp; Minor in Chemistry</p>
			
			<h2>Experience</h2>
			<p><strong>Dr. Marr Laboratory, Rosenstiel Basic Medical Sciences Research Center</strong>, Brandeis University, Waltham, MA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="float:right;">Jun - Nov 2014</span><br>
			Laboratory Technician | Research Assistant</p>
			<ul>
			<li>Assisted with project investigating role of endogenous dFoxo in Hsp70 expression, and project<br> investigating expression of HSPs in response to stress starvation in flies</li>
			<li>Managed chemical and laboratory supplies, and prepared frequently used reagents</li>
			</ul>
			
			<p><strong>Computer Science Administration Office</strong>, Brandeis University, Waltham, MA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="float:right;">Nov 2011 - May 2015</span><br>
			Office Assistant</p>
			<ul>
			<li>Organized and performed data mining and analysis of demographic alumni information, and entered it into an excel spreadsheet</li>
			<li>Developed and implemented a new flexible mailbox system for graduate students</li>
			</ul>
			
			<p><strong>Israel Discount Bank, International Customer Division</strong>, New York, NY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="float:right;">Summers 2012 &amp; 2013</span><br>
			Intern</p>
			<ul>
			<li>Assisted account officers through completion of various documentation for foreign bank account customers</li>
			<li>Developed a comprehensive intern manual; general</li>
			<li>Synchronized filing system improving the retrieval of vital documents</li>
			</ul>

			<h2>Clubs &amp; Activities</h2>
			<table>
			<tbody>
			<tr>
			<td>
			<p>●&nbsp;&nbsp;&nbsp; Brandeis Global Medical Brigades, Oct 2014 &ndash; Apr 2015</p>
			</td>
			<td>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;●&nbsp;&nbsp;&nbsp; Tron &ndash; Ultimate Frisbee, Jan 2013 &ndash; Apr 2015</p>
			</td>
			</tr>
			<tr>
			<td>
			<p>●&nbsp;&nbsp;&nbsp; Eagle Scout, May 2011</p>
			</td>
			<td>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;●&nbsp;&nbsp;&nbsp; Boxing Club, Sep 2011 &ndash; Apr 2015</p>
			</td>
			</tr>
			</tbody>
			</table>

			<hr>
			<p><strong>Download:</strong> {!! Html::link('download/Nelson_Dustin_Developer_Resume_10-16.pdf', 'PDF') !!}</a> | {!! Html::link('download/Nelson_Dustin_Developer_Resume_10-16.doc', 'DOCX') !!}</a></p>
			
			<h3>Share this:</h3> @include('layouts._addtoany')

	    </div>
	</div>    
</div>
@stop