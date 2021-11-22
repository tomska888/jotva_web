@extends('layouts.index')
@section('center')

<div class="container">
    @include('nenaudoju, is views.alert')
</div>

<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1>Jotva</h1>
                                <h2>Lorem Ipsum Dolor</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                {{--                                <button type="button" class="btn btn-default get">Get it now</button>--}}
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('images/home/jotva-logo-old-small.jpg')}}" class="girl img-responsive" alt="" />
                                {{--                                <img src="{{asset('images/home/pricing.png')}}"  class="pricing" alt="" />--}}
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1>Jotva1</h1>
                                <h2>Lorem Ipsum Dolor</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                {{--                                <button type="button" class="btn btn-default get">Get it now</button>--}}
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('images/home/jotva-logo-old-small.jpg')}}" class="girl img-responsive" alt="" />
                                {{--                                <img src="{{asset('images/home/pricing.png')}}"  class="pricing" alt="" />--}}
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1>Jotva2</h1>
                                <h2>Lorem Ipsum Dolor</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                {{--                                <button type="button" class="btn btn-default get">Get it now</button>--}}
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('images/home/jotva-logo-old-small.jpg')}}" class="girl img-responsive" alt="" />
                                {{--                                <img src="{{asset('images/home/pricing.png')}}"  class="pricing" alt="" />--}}
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>&nbsp;</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="{{route('istorija')}}">Istorija</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="{{route('motinos_diena')}}">Motinos diena</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="{{route('velines')}}">Vėlinės</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="{{route('kiti_renginiai')}}">Kiti renginiai</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="{{route('kontaktai')}}">Kontaktai</a></h4>
                            </div>
                        </div>
                    </div><!--/category-->
                    <div class="shipping text-center"><!--sidebar image-->
                        <img src="{{asset('images/home/jotva-logo-old-sidebar.jpg')}}" alt="" />
                    </div><!--/sidebar image-->
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Motinos Diena</h2>
                        <div class="w3-container">
                            <ul class="w3-ul w3-card w3-center" style="width: 30%; margin: auto">
                                <li style="list-style-type: none"><a href="{{route('motinos_diena')}}">2021</a></li>
                                <li style="list-style-type: none"><a href="{{route('motinos_diena')}}">2020</a></li>
                                <li style="list-style-type: none"><a href="{{route('motinos_diena')}}">2019</a></li>
                                <li style="list-style-type: none"><a href="{{route('motinos_diena')}}">2018</a></li>
                                <li style="list-style-type: none"><a href="{{route('motinos_diena')}}">2017</a></li>
                                <li style="list-style-type: none"><a href="{{route('motinos_diena')}}">2016</a></li>
                                <li style="list-style-type: none"><a href="{{route('motinos_diena')}}">2015</a></li>
                                <li style="list-style-type: none"><a href="{{route('motinos_diena')}}">2014</a></li>
                                <li style="list-style-type: none"><a href="{{route('motinos_diena')}}">2013</a></li>
                                <li style="list-style-type: none"><a href="{{route('motinos_diena')}}">2012</a></li>
                                <li style="list-style-type: none"><a href="{{route('motinos_diena')}}">2011</a></li>
                            </ul>
                        </div>
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>
@endsection
