@extends('layout.default' , ['title' => 'About'])

@section('content')

        <h2> What is Laracarte !</h2>
        <p>Laracarte is a clone app of <a href="https://Laramap.com" target="_blank">Laramap.com</a> </p>

    <div class="row">
        <div class="col-md-6">
            <p class="alert alert-warning">
                <strong>
                    <i class="fas fa-exclamation-triangle"></i>  this app has been built by @alaedinne for learning purposes.
                </strong>
            </p>

        </div>
    </div>

    <p>Feel free to help to improve the <a href="https://github.com/alaedinnemarzougui/Laracarte" target="_blank">source code.</a></p>
    <hr>

    <h2> What is Laramap ?</h2>
    <p>Laramap is the website by which Laracarte was inspired :)</p>
    <p>More info  <a href="#">Here</a></p>
    <hr>
    <h2>Which tools and services are used in Laracarte?</h2>
    <p> Which it's built on laravel & bootstrap. But there's a bunch of services used for email and other sections.</p>
    <ul>
        <li>Laravel</li>
        <li>Bootstrap</li>
        <li>Amazon SB</li>
        <li>Mandrill</li>
        <li>Google Maps</li>
        <li>Gravatar</li>
        <li>Heroku</li>

    </ul>

@stop
