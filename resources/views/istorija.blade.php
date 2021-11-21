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
                <div class="features_items"><!--istorija-->
                    <h2 class="title text-center">Istorija</h2>

                    <h4>Šiek tiek istorijos apie choreografinį sambūrį "Jotva"</h4>
                    <p>Choreografinis sambūris "Jotva" įsikūrė 1951 m. Tuomet birželio 1 d. Ožkinių kaime pirmą kartą pokario
                        Lenkijoje lietuviai viešai pasirodė scenoje. Pradžioje šokių būrelį globojo Ožkinių kaimo ūkininkas Juozas Maksimavičius.
                        Vėliau šokių mokė mokyt. Petronėlė Durtonaitė-Jakimavičienė. 1956 m., atidarius Punsko lietuvių kultūros namus, tautinių
                        šokių būrelį ėmėsi globoti ir šokių mokyti tuometinė LKN vedėja Aldona Leončikaitė-Kislo. Nuo 1961 iki 1994 m. "Jotvos"
                        sambūriui vadovavo mokyt. Algis Uzdila. Jam ilgus metus talkino Alicija Uzdilienė, Jūratė Kardauskienė, Dalia Uzdilaitė,
                        Alicija Jalauskaitė, Lidija Kardauskaitė-Šliaužienė. 1993-1996 m. "Jotvos" sambūriui vadovavo choreografijos studijas
                        Lietuvoje baigusi Asta Uzdilaitė-Pečiulienė. Vėliau „Jotvos" sambūrį globojo Virginija Valenskaitė, Romas Jonušonis,
                        Kristina Brazienė (iš Marijampolės), padėjusi pasiruošti 1998 m. Šokių šventei Vilniuje. Nuo 1998 m. rugsėjo "Jotvos"
                        sambūriui vadovauja Kornelija Janušanienė.<br></p>

                    <h4>Svarbiausi ir įdomiausi „Jotvos" gyvavimo momentai</h4>
                    <ul>
                        <li>Nuo 1974 m. buvo pradėta rengti mokyt. Algio Uzdilos rimtos nuotaikos Vėlinių koncertai, po kurių į kapines leidžiasi
                            iškilminga eisena.</li>
                        <li>1975 m. prie Punios ežero buvo surengta Rasos šventė.</li>
                        <li>1979 ir 1980 m. "Jotva" surengė iškilmingas Naujųjų metų sutiktuves su proginiais koncertais. Šį darbą nutraukė Lenkijoje
                            įvesta karo padėtis.</li>
                        <li>Nuo 1980-ųjų kasmet „Jotvos" sambūris rengia iškilmingus koncertus, skirtus Motinos dienai paminėti.</li>
                        <li>1981 ir 1985 m. rugpjūčio 15 d. prie Punios ežero buvo surengtos dvi mūsų krašto šokių šventės.</li>
                        <li>1985 m. Punsko kultūros namų choreografiniam sambūriui suteiktas „Jotvos" vardas.</li>
                        <li>1985 m. „Jotva" koncertavo Lazdijuose. Programa vadinosi "Vai šoksim šokimėlį".</li>
                        <li>1988 m. "Jotvos" augių grupė ir trys jaunių šokėjai dalyvauja VIII tautinių šokių šventėje Hamiltone, Kanadoje. Ten taip pat
                            parodė programą "Sanrymų valanda".</li>
                        <li>1989 m. "Jotva" Motinos dienos koncerto programą pirmą kartą parodo Lietuvoje (Seirijuose).</li>
                        <li>1990, 1994, 1998, 2003 m. "Jotvos" augiai ir jauniai dalyvauja Tautinėje ir Pasaulio lietuvių šokių šventėse Vilniuje.</li>
                        <li>1993 m. "Jotvos" jauniai ir jaunučiai dalyvavo Prancūzijoje surengtame tarptautiniame folkloro festivalyje.</li>
                        <li>2000 m. "Jotvos" sambūrio jungtinė grupė dalyvavo XI tautinių šokių šventėje Toronte, Kanadoje. Ten taip pat koncertavo kartu
                            su ansambliais iš Lietuvos bei atskirai parodė savo programą mūsų krašto išeiviams.</li>
                        <li>2000 m. "Jotvos" sambūris kartu su kitais mūsų krašto ansambliais dalyvauja Punsko-Seinų krašto dienose Vilniuje.</li>
                        <li>Nuo 2000-2001 m. sambūris kasmet dalyvauja šokių festivalyje „Marzeńtańce" Suvalkuose, jauniausia „Jotvos" šokėjų grupė jau
                            antrus metus iš eilės laimėjo festivalio pagrindinį prizą (Grand-prix).</li>
                    </ul>
                        <p>"Jotvos" choreografinis sambūris dalyvauja ir įvairiuose mūsų krašto renginiuose: sąskrydyje prie Galadusio ežero, iškilmingame
                            Vasario 16-osios minėjime, Vaikų šokių šventėje, tautinių mažumų susitikimuose Punske bei Vengoževe.
                            Įdomu, kad tuokiantis visuomenei nusipelniusioms poroms bei kuriam iš „Jotvos" šokėjų, ansambliečiai ruošia prie Punsko lietuvių
                            kultūros namų iškilmingus vartus.</p>

                    <h4>Dabartis? XD</h4>
                    <p>Šiuo metu „Jotvos" sambūryje esą 10 įvairaus amžiaus grupių, iš viso per 150 šokėjų. Labai džiugu, kad prie šio gausaus būrio dalyvių
                        dar prisijungia buvę sambūrio šokėjai - vadinamoji studentų grupė. Nesvarbu, kur bestudijuotų: Vilniuje, Kaune, Varšuvoje ar Balstogėje,
                        jaunimas organizuojasi repeticijas, renkasi kurį nors savaitgalį į Lietuvių kultūros namus. Matyt, noras ir toliau bendrauti "lietuvių
                        šokio erdvėje" traukia lyg magnetas sugrįžti. Todėl „Jotvos" koncertai dar labiau praturtėja džiaugsmu ir laimingais veidais. Galima būtų
                        daug ir ilgai pasakoti apie „Jotvą" ir jos vadovus, apie sambūrio dalyvius ir koncertus, nes per daugiau kaip 60. gyvavimo metų tikrai daug
                        jų būta. Tačiau vienas svarbiausių ir įspūdingiausių „Jotvos" sambūriui yra Motinos dienos koncertas. Kiekvienais metais šokėjai stengiasi
                        parodyti mamoms naują programą, pasveikinti jas naujais šokiais, dainomis ir eilėraščiais. Sambūrio vadovė Kornelija kiekvieną kartą labai
                        stengiasi, kad susirinkę tėveliai džiaugtųsi savo vaikų šypsenomis, pasakytais šiltais žodžiais, kad matydami savo vaikus scenoje jie pamirštų
                        kasdienius rūpesčius, tarpusavio nesusipratimus ir nubraukę džiaugsmo ašarą dar ilgai po koncerto širdyje didžiuotųsi savo atžalomis.</p>

                </div><!--istorija-->

            </div>
        </div>
    </div>
</section>
@endsection
