@extends('layouts.default', ['title' => 'About'])
    @section('content')
        <div class="container">
        	<h2>What is Laracarte ?</h2>
        	<p>Laracarte is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a></p>

        	<div class="row">
        		<div class="col-md-6">
        			<p class="alert alert-warning">
        				<i class="fas fa-exclamation-triangle"></i>
        				<strong>This app has been built by <a href="https://facebook.com/ismael foletia">@Ismael foletia</a> for learning purpose.</strong>
        			</p>
        		</div>
        	</div>
        	<p>feel free to help to improve the <a href="https://github.com/xmaelo/Laracarte-tdn">code source</a></p>
        	<hr>
        	<p><h2>What is laramap</h2></p>
        	<p>Laramap is the web site which Laracarte inspired :).</p>
        	<p>more info <a href="https://laramap.com/about">here</a></p>
        	<hr>
        	<h2>Which tool and service has used in Laracarte ?</h2>
        	<p>basially it's built on Laravel & Bootstrap; but ther's a bunch of services used for email and other sections.</p>
        	<ul>
        		<li>Laravel</li>
        		<li>Bootstrap</li>
        		<li>Amazon S3</li>
        		<li>Mandrill</li>
        		<li>Google Maps</li>
        		<li>Gravatar</li>
        		<li>Antony Martin's Geolocalisation package</li>
        		<li>michel Fortin's markdown paser Package</li>
        		<li>Heroku</li>
        	</ul>

        </div>
    @endsection
