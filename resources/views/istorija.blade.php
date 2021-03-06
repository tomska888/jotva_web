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
                                <h4 class="panel-title"><a href="{{route('velines')}}">V??lin??s</a></h4>
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

                    <h4>??iek tiek istorijos apie choreografin?? samb??r?? "Jotva"</h4>
                    <p>Choreografinis samb??ris "Jotva" ??sik??r?? 1951 m. Tuomet bir??elio 1 d. O??kini?? kaime pirm?? kart?? pokario
                        Lenkijoje lietuviai vie??ai pasirod?? scenoje. Prad??ioje ??oki?? b??rel?? globojo O??kini?? kaimo ??kininkas Juozas Maksimavi??ius.
                        V??liau ??oki?? mok?? mokyt. Petron??l?? Durtonait??-Jakimavi??ien??. 1956 m., atidarius Punsko lietuvi?? kult??ros namus, tautini??
                        ??oki?? b??rel?? ??m??si globoti ir ??oki?? mokyti tuometin?? LKN ved??ja Aldona Leon??ikait??-Kislo. Nuo 1961 iki 1994 m. "Jotvos"
                        samb??riui vadovavo mokyt. Algis Uzdila. Jam ilgus metus talkino Alicija Uzdilien??, J??rat?? Kardauskien??, Dalia Uzdilait??,
                        Alicija Jalauskait??, Lidija Kardauskait??-??liau??ien??. 1993-1996 m. "Jotvos" samb??riui vadovavo choreografijos studijas
                        Lietuvoje baigusi Asta Uzdilait??-Pe??iulien??. V??liau ???Jotvos" samb??r?? globojo Virginija Valenskait??, Romas Jonu??onis,
                        Kristina Brazien?? (i?? Marijampol??s), pad??jusi pasiruo??ti 1998 m. ??oki?? ??ventei Vilniuje. Nuo 1998 m. rugs??jo "Jotvos"
                        samb??riui vadovauja Kornelija Janu??anien??.<br></p>

                    <h4>Svarbiausi ir ??domiausi ???Jotvos" gyvavimo momentai</h4>
                    <ul>
                        <li>Nuo 1974 m. buvo prad??ta rengti mokyt. Algio Uzdilos rimtos nuotaikos V??lini?? koncertai, po kuri?? ?? kapines leid??iasi
                            i??kilminga eisena.</li>
                        <li>1975 m. prie Punios e??ero buvo surengta Rasos ??vent??.</li>
                        <li>1979 ir 1980 m. "Jotva" sureng?? i??kilmingas Nauj??j?? met?? sutiktuves su proginiais koncertais. ???? darb?? nutrauk?? Lenkijoje
                            ??vesta karo pad??tis.</li>
                        <li>Nuo 1980-??j?? kasmet ???Jotvos" samb??ris rengia i??kilmingus koncertus, skirtus Motinos dienai pamin??ti.</li>
                        <li>1981 ir 1985 m. rugpj????io 15 d. prie Punios e??ero buvo surengtos dvi m??s?? kra??to ??oki?? ??vent??s.</li>
                        <li>1985 m. Punsko kult??ros nam?? choreografiniam samb??riui suteiktas ???Jotvos" vardas.</li>
                        <li>1985 m. ???Jotva" koncertavo Lazdijuose. Programa vadinosi "Vai ??oksim ??okim??l??".</li>
                        <li>1988 m. "Jotvos" augi?? grup?? ir trys jauni?? ??ok??jai dalyvauja VIII tautini?? ??oki?? ??vent??je Hamiltone, Kanadoje. Ten taip pat
                            parod?? program?? "Sanrym?? valanda".</li>
                        <li>1989 m. "Jotva" Motinos dienos koncerto program?? pirm?? kart?? parodo Lietuvoje (Seirijuose).</li>
                        <li>1990, 1994, 1998, 2003 m. "Jotvos" augiai ir jauniai dalyvauja Tautin??je ir Pasaulio lietuvi?? ??oki?? ??vent??se Vilniuje.</li>
                        <li>1993 m. "Jotvos" jauniai ir jaunu??iai dalyvavo Pranc??zijoje surengtame tarptautiniame folkloro festivalyje.</li>
                        <li>2000 m. "Jotvos" samb??rio jungtin?? grup?? dalyvavo XI tautini?? ??oki?? ??vent??je Toronte, Kanadoje. Ten taip pat koncertavo kartu
                            su ansambliais i?? Lietuvos bei atskirai parod?? savo program?? m??s?? kra??to i??eiviams.</li>
                        <li>2000 m. "Jotvos" samb??ris kartu su kitais m??s?? kra??to ansambliais dalyvauja Punsko-Sein?? kra??to dienose Vilniuje.</li>
                        <li>Nuo 2000-2001 m. samb??ris kasmet dalyvauja ??oki?? festivalyje ???Marze??ta??ce" Suvalkuose, jauniausia ???Jotvos" ??ok??j?? grup?? jau
                            antrus metus i?? eil??s laim??jo festivalio pagrindin?? priz?? (Grand-prix).</li>
                    </ul>
                        <p>"Jotvos" choreografinis samb??ris dalyvauja ir ??vairiuose m??s?? kra??to renginiuose: s??skrydyje prie Galadusio e??ero, i??kilmingame
                            Vasario 16-osios min??jime, Vaik?? ??oki?? ??vent??je, tautini?? ma??um?? susitikimuose Punske bei Vengo??eve.
                            ??domu, kad tuokiantis visuomenei nusipelniusioms poroms bei kuriam i?? ???Jotvos" ??ok??j??, ansamblie??iai ruo??ia prie Punsko lietuvi??
                            kult??ros nam?? i??kilmingus vartus.</p>

                    <h4>Dabartis</h4>
                    <p>??iuo metu ???Jotvos" samb??ryje es?? 10 ??vairaus am??iaus grupi??, i?? viso per 150 ??ok??j??. Labai d??iugu, kad prie ??io gausaus b??rio dalyvi??
                        dar prisijungia buv?? samb??rio ??ok??jai - vadinamoji student?? grup??. Nesvarbu, kur bestudijuot??: Vilniuje, Kaune, Var??uvoje ar Balstog??je,
                        jaunimas organizuojasi repeticijas, renkasi kur?? nors savaitgal?? ?? Lietuvi?? kult??ros namus. Matyt, noras ir toliau bendrauti "lietuvi??
                        ??okio erdv??je" traukia lyg magnetas sugr????ti. Tod??l ???Jotvos" koncertai dar labiau praturt??ja d??iaugsmu ir laimingais veidais. Galima b??t??
                        daug ir ilgai pasakoti apie ???Jotv??" ir jos vadovus, apie samb??rio dalyvius ir koncertus, nes per daugiau kaip 60. gyvavimo met?? tikrai daug
                        j?? b??ta. Ta??iau vienas svarbiausi?? ir ??sp??dingiausi?? ???Jotvos" samb??riui yra Motinos dienos koncertas. Kiekvienais metais ??ok??jai stengiasi
                        parodyti mamoms nauj?? program??, pasveikinti jas naujais ??okiais, dainomis ir eil??ra????iais. Samb??rio vadov?? Kornelija kiekvien?? kart?? labai
                        stengiasi, kad susirink?? t??veliai d??iaugt??si savo vaik?? ??ypsenomis, pasakytais ??iltais ??od??iais, kad matydami savo vaikus scenoje jie pamir??t??
                        kasdienius r??pes??ius, tarpusavio nesusipratimus ir nubrauk?? d??iaugsmo a??ar?? dar ilgai po koncerto ??irdyje did??iuot??si savo at??alomis.</p>

                </div><!--istorija-->

            </div>
        </div>
    </div>
</section>
@endsection
