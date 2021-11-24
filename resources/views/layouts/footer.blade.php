<footer id="footer"><!--Footer-->

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Apie Jotva</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="{{route('istorija')}}">Informacija</a></li>
                            <li><a href="{{route('kontaktai')}}">Kontaktai</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Dalyviams</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="{{route('grafikas')}}">Grafikas</a></li>
                            <li><a href="#">Rūbai</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Kiti</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Darbas</a></li>
                            <li><a href="{{route('bilietai')}}">Bilietai</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2021 Jotva &nbsp; &nbsp; &nbsp; All rights reserved.</p>
{{--                <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>--}}
            </div>
        </div>
    </div>

</footer><!--/Footer-->


<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('js/price-range.js')}}"></script>
<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>