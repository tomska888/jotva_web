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
                    <div class="features_items"><!--centrinis-->
                        <h2 class="title text-center">Bilietai</h2>

                        <div class="movie-container">
                            <ul class="breadcrumb">
                                <li><label style="color: black; width: 190px; margin-right: 20px">Koncerto pasirinkimas</label></li>
                                <li><select id="movie" style="width: 35%">
                                        <option value="10">Raitakojis (10 zł)</option>
                                        <option value="10">Motinos diena (10 zł)</option>
                                        <option value="10">Vėlinės (10 zł)</option>
                                        <option value="10">Vasario 16d. (10 zł)</option>
                                    </select></li>
                            </ul>
                        </div>

                        <ul class="showcase">
                            <li>
                                <div class="seat"></div>
                                <small>Laisvos</small>
                            </li>
                            <li>
                                <div class="seat selected"></div>
                                <small>Pasirinkta</small>
                            </li>
                            <li>
                                <div class="seat occupied"></div>
                                <small>Užimta</small>
                            </li>
                        </ul>

                        <div class="container-bilietai">
                            <div class="movie-screen">
                                <img src="{{asset('images/home/screen-thumb.png')}}" alt="screen">
                            </div>
                            <div class="row-container-bilietai">
                                <div class="row-bilietai">
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                </div>
                                <div class="row-bilietai">
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat occupied"></div>
                                    <div class="seat occupied"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                </div>
                                <div class="row-bilietai">
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat occupied"></div>
                                    <div class="seat occupied"></div>
                                </div>
                                <div class="row-bilietai">
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                </div>
                                <div class="row-bilietai">
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat occupied"></div>
                                    <div class="seat occupied"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                </div>
                                <h5 class="subtitle">Salė</h5>
                                <div class="row-bilietai">
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                </div>
                                <div class="row-bilietai">
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat"></div>
                                    <div class="seat occupied"></div>
                                    <div class="seat occupied"></div>
                                    <div class="seat occupied"></div>
                                    <div class="seat"></div>
                                </div>
                                <h5 class="subtitle">Balkonas</h5>

                                <div class="text-wrapper">
                                    <p class="text">Pasirinktų vietų skaičius: <span id="count">0</span>
                                    </p><p class="text">Kaina: <span id="total">0</span><span>zł</span></p>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
