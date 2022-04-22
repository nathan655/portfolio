{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Laravel</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">--}}

{{--        <!-- Styles -->--}}
{{--    </head>--}}
@extends('layouts.app')
@section('content')
    <div>
        <div class="top-image"><img src="{{ asset('img/landscape.jpg') }}" class="img-fluid" alt="Responsive image">
        </div>
        <div class="container">

            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="text-right navbar navbar-light">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <p class="fixed-bottom m-2">Are you admin? <a href="{{ route('login') }}">Login</a></p>
                        @endauth
                    </div>
                @endif

            </div>
            <div>
                <section class="scroll-container mt-5" id="about">
                    <div class="scroll-element js-scroll fade-in-bottom ">
                        <h4>About me</h4>
                        <p><span class="pl-5">I am Balogun</span> Nathan and I am a student of Thomasmore Hogeschoel. I
                            study Applied Computer sciences for a Bachelor degree program. I am from Dublin, Ireland. My
                            interests include technology development, travelling, languages & diverse cultures.
                            Open-minded towards new ideas and concept and would love to learn and grow.</p>
                        <hr>
                        <h5>Bio</h5>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-caret-right-fill mr-3"></i><i class="bi bi-calendar-date mr-3"></i>
                                <strong>Age: </strong>18
                            </li>
                            <li><i class="bi bi-caret-right-fill mr-3"></i><i class="bi bi-mortarboard-fill mr-3"></i>
                                <strong>Current Education: </strong>Bachelor of
                                Applied Computer Sciences
                            </li>
                            <li><i class="bi bi-caret-right-fill mr-3"></i><i class="bi bi-geo-alt-fill mr-3"></i>
                                <strong>City </strong>
                                Heist-op-den-Berg
                            </li>
                            <li><i class="bi bi-caret-right-fill mr-3"></i><i class="bi bi-envelope-fill mr-3"></i>
                                <strong>School
                                    mail</strong>
                                <a href="mailto:r0855536@student.thomasmore.be">r0855536@student.thomasmore.be</a>
                            </li>
                            <li><i class="bi bi-caret-right-fill mr-3"></i><i class="bi bi-envelope mr-3"></i> <strong>Private
                                    mail</strong>
                                <a href="mailto:balogunnathan13@gmail.com">balogunnathan13@gmail.com</a>
                            </li>
                            <li><i class="bi bi-caret-right-fill mr-3"></i><i class="bi bi-github mr-3"></i>
                                <strong>Github</strong>
                                <a href="https://github.com/nathan655">nathan655</a>
                            </li>
                        </ul>
                        <div class="row justify-content-around  ">
                            <div class="col-sm-12 col-md-3 text-center">
                                <i class="bi bi-code-slash"></i>
                                <h5>Coding</h5>
                                <p>I have a passion for coding & programming that has gotten my interest over the years.
                                    It has been my drive in the ITF course and has made a big impact on how my career is
                                    heading. I have sufficient knowledge in various programming languages and practice
                                    on them on frequent bases</p>
                                <ul class="row list-unstyled">
                                    <li class="col">HTML</li>
                                    <li class="col">Css</li>
                                    <li class="col">PHP</li>
                                    <li class="col">Javascript</li>
                                    <li class="col">C#</li>
                                    <li class="col">Python</li>
                                    <li class="col">Java</li>
                                    <li class="col">C++</li>
                                </ul>


                            </div>
                            <div class="col-sm-12 col-md-3  text-center">
                                <i class="bi bi-gear"></i>
                                <h5>Development</h5>
                                <p>With the use of cloud services and servers, more of programs run on cloud APIs and
                                    thus would inquire IT programmers to educate themselves on how they work and how to
                                    use them. I have gotten familiar with Google cloud API for the same purpose. I would
                                    also use CI/CD pipelines for app deployments where users get to use updated versions
                                    uploaded to <a href="https://www.heroku.com/">Heroku</a> cloud</p>
                            </div>
                            <div class="col-sm-12  col-md-3 text-center">
                                <i class="bi bi-person-fill"></i>
                                <h5>Communicative</h5>
                                <p>Due to projects that require my use of soft skills to interact with potential
                                    customers. I would prove to be quite communicative to help me understand clients
                                    pains and meet their needs. My other softskills include:
                                <ul class="row list-unstyled">
                                    <li class="col">Creative&nbsp;Thinking</li>
                                    <li class="col">Team work</li>
                                    <li class="col">Time&nbsp;Management</li>
                                    <li class="col">Negotiation&nbsp;conflict&nbsp;resolution</li>
                                </ul>
                            </div>
                            <div class="col-sm-12 col-md-3  text-center">
                                <i class="bi bi-check2-all"></i>
                                <h5>Satisfaction</h5>
                            </div>
                        </div>
                        <hr>
                    </div>
                </section>
                <section class="scroll-container" id="resume">
                    <div class="scroll-element js-scroll fade-in-bottom ">
                        <h4>Résumé</h4>
                        <div class="container py-5 h-100">
                            <div class="row d-flex align-items-center h-100">
                                <div class="col-sm-12 col-md-6 mb-4 mb-lg-0 scroll-element js-scroll fade-in-bottom">
                                    <figure class="bg-white p-3 rounded" style="border-left: .25rem solid #a34e78;">
                                        <blockquote class="blockquote pb-2">
                                            <h6>Education</h6>
                                            <p>
                                                Command Secondary School Ibadan, Nigeria
                                            </p>
                                            <small>GPA 3.24 out of 5</small>
                                            <p>2013-2019</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer mb-0 font-italic">
                                            High-school
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-12 col-md-6 mb-4 mb-lg-0 scroll-element js-scroll fade-in-bottom">
                                    <figure class="bg-white p-3 rounded" style="border-left: .25rem solid #FFD700;">
                                        <blockquote class="blockquote pb-2">
                                            <h6>Education</h6>
                                            <p>
                                                Vlams CVO
                                            </p>
                                            <small>Level 2.1</small>
                                            <p>2019-2020</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer mb-0 font-italic">
                                            Language course
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm-12 col-md-6  mb-4 mb-lg-0 scroll-element js-scroll fade-in-bottom">
                                    <figure class="bg-white p-3 rounded" style="border-left: .25rem solid #FFCCCB;">
                                        <blockquote class="blockquote pb-2">
                                            <h6>Professional experience</h6>
                                            <p>
                                                Cash Courier
                                            </p>
                                            <small>Koji sushi</small>
                                            <p>2020-2021</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer mb-0 font-italic">
                                            Student Job
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a download="Nathan's Résumé" href="{{ asset('files/New_Resume.pdf') }}"
                               class=" btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top"
                               title="  Download my Resumé"><i class="bi bi-download"></i></a>
                        </div>
                        <hr>
                    </div>

                </section>
                <section class="scroll-container" id="projects">
                    <h4>Projects</h4>
                    <br>
                    <div class=" grid row justify-content-center">
                        @foreach($projects as $project )
                            <figure
                                class="effect-lily col-sm-12 col-md-5 m-2 scroll-element js-scroll {{$project->class}}">
                                <img src={{$project->img}} alt="img01"/>
                                <figcaption>
                                    <h2>{{$project->title}}</h2>
                                    <p>{{$project->description}}</p>
                                    <a href="project/{{$project->id}}">View more</a>
                                </figcaption>
                            </figure>
                        @endforeach
                    </div>
                    <hr>
                </section>
                <!-- Footer -->
                @include('footer')<!-- Footer -->
            </div>
        </div>
    </div>
@endsection
