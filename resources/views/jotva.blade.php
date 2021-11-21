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
                    <h2 class="title text-center">(kolkas paveikslukai)&nbsp;</h2>

                    @foreach ($products as $product)

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">

                                    <img src="{{ asset('images/home/'.$product->image) }}" alt="" />
{{--                                    <h2>{{$product->price}}</h2>--}}
                                    <p>{{ $product->name }}</p>
                                    {{--<p>{{$product->description}}</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                </div>
                                {{--<div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>{{$product->price}}</h2>
                                        <p>{{ $product->name }}</p>
                                        <a href="{{route('AddToCartProduct',['id'=>$product->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>--}}
                            </div>
                            {{--<div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>--}}
                        </div>
                    </div>

                    @endforeach

                </div><!--features_items-->

                {{$products->links()}}<!--pagination-->

{{--                ZEMELAPIS ESSASITO--}}
{{--                <p style="text-align: center;"><iframe allowfullscreen="" height="450" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2331.093642002706!2d23.180352216002422!3d54.24922811439826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e0e1a50c310e09%3A0x8beb5db511687482!2sDom%20Kultury%20Litewskiej%20w%20Pu%C5%84sku!5e0!3m2!1sen!2slt!4v1614685498848!5m2!1sen!2slt" style="border:0;" width="600"></iframe></p>--}}

            </div>
        </div>
    </div>
</section>
@endsection
