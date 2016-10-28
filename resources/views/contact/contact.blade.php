@extends('layouts.layout')

@section('title', 'Contact')

@section('content') 

<div class="row">
	<div class="col-md-6 col-md-offset-1">

        <h2 class="text-center blue">Contact Me Today!</h2>

    {!! Form::open (array('action' => 'ContactController@ContactForm')) !!} 
    
            <div class="form-group red">
                {{ Form::label('Name:') }}
                {{ Form::text('name', null, 
                    array('required', 'class'=>'form-control', 'placeholder'=>'John Doe')) }}
            </div>

            <div class="form-group red">
                {{ Form::label('E-mail Address:') }}
                {{ Form::text('email', null, 
                    array('required', 'class'=>'form-control', 'placeholder'=>'JohnDoe@jd.com')) }}
            </div>
            
            <div class="form-group red">
                {{ Form::label('Subject:') }}
                {{ Form::text('subject', null, 
                    array('required', 'class'=>'form-control', 'placeholder'=>'Subject')) }}
            </div>

            <div class="form-group red">
                {{ Form::label('Message:') }}
                {{ Form::textarea('message', null, 
                    array('required', 'class'=>'form-control', 'rows' => '6', 'placeholder'=>'What\'s Up?')) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Send Message', 
                  array('class'=>'btn btn-primary')) }}
            </div>
    {!! Form::close() !!}                       
    </div>

    <div class="col-md-4 contact-box-spacing">
        <div class="well">

            <p><dt><span class="glyphicon glyphicon-home"></span> Location: <a href="https://www.google.com/maps/place/South+Orange,+NJ+07079/@40.7489521,-74.2941535,13z/data=!3m1!4b1!4m5!3m4!1s0x89c3ac86a845f5f5:0xd2abe88bc4886849!8m2!3d40.7489277!4d-74.2609903" target="_blank"> South Orange, NJ</a></dt></p>

            <p><dt><span class="glyphicon glyphicon-earphone"></span> Cellphone: <a href="tel:1-201-704-1917">(201) 704-1917</a></dt></p>
            
            <p><dt><span class="fa fa-envelope-o" aria-hidden="true"></span> Email: <a href="dustinhnelson@gmail.com">dustin@dhrnelson.com</a></dt></p>
            
            <dt><span class="glyphicon glyphicon-globe"></span> Social Platforms:
                <ul>
                    <li><dd><a href="https://github.com/dhnelson" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> Github</a></dd></li>
                    <li><dd><a href="https://www.linkedin.com/in/dustin-nelson-a2710916" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</a></dd></li>
                    <li><dd><a href="https://www.facebook.com/dustinhnelson" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></dd></li>
                </ul>
            </dt>
        </div>
    </div>
</div>
    
@stop