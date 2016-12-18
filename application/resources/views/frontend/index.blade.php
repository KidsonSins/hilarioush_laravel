@extends('layouts.master')


@section('content')
    <!--simple bootstrap carousel-->
    <section id="mycarousel" style="display:;">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php $i=0;?>
                @foreach($carouselimages as $carouselimage)
                    @if($i==0)
                        <div class="item active">
                            <img src="{{ asset('dist/frontend/images/myimg3.jpg') }}" alt="..." class="img-responsive">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                    @else
                        <div class="item">
                            <img src="{{ asset('uploads/gallery/'.$carouselimage->path) }}" alt="..." class="img-responsive">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>

                        @endif
                    <?php $i++; ?>

               @endforeach


            </div>
            <!-- Controls -->

            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true" style="position:absolute;top:50%;"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class=" fa fa-angle-right" aria-hidden="true" style="position:absolute;top:50%;"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--simple bootstrap carousel-->
    <!--my about wala tab-->
    <section class="m-b-45">
        <div class="block remove-gap gray-layer p-b-30 remove_gray">
            <div class="parallax" data-velocity="-.1" style=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 column">
                        <div class="big-tabs">

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="about-hotel">
                                    <div class="tab-data">
                                        <strong>Welcome To</strong>
                                        <h4>Hilarioush English Boarding School</h4>
                                        <p class="text-justify m-b-10">

                                           {{ str_limit($info->information, 635)}}<span id="example3">{{ $info->name }}
                                        </span>
                                        </p>
                                        <a class="btn btn-success" href="{{ url('/about') }}" style="background: transparent;color: black;">Read more</a>
                                    </div>
                                    <!-- tabs-data -->
                                </div>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="h_news">
                            <h3 class="h_title p-b-15">News and Events</h3>
                            <div id="h_news" class="owl-carousel owl-theme">
                                @foreach($events as $event)
                                    <div class="item news_item">
                                        <img class="img-responsive" src="{{ asset('uploads/news_thumbnail/'.$event->photo->path) }}" alt="">
                                        <div class="details">
                                            <a href=""> <h4>{{ $event->title }}</h4></a>
                                            <p>{{ $event->detail }}</p>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <a class="btn btn-success m-t-25" href="{{ route('news_page') }}" style="background: transparent;color: black;">See All</a>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="h_widget">

                            <h3 class="h_title p-t-70 p-b-15">Notices/Downloads</h3>
                            <ul class="h_ul_setup p-l-0">

                                @foreach($downloads as $download)
                                <li class="inside_p">
                                    <a href="{{ asset('uploads/files/'.$download->path) }}">
                                        <p>{{ $download->name }} </p>
                                        <button type="button" class="btn btn-primary pull-right m-t-3" style="padding:2px 12px;">Download</button>
                                    </a>
                                    <div class="clearfix"></div>
                                </li>
                                @endforeach


                            </ul>
                        </div>
                        <div class="h_widget">
                            <h3 class="h_title p-t-15 p-b-15">Principal's Message</h3>
                            <p class="message">
                                <img src="{{ asset('uploads/'.$principal_message->photo->path) }}" class="img-circle">

                                {{ $principal_message->message }}

                            </p>
                        </div>
                        <div class="h_widget">

                            <h1 class="heading-title h_font">National Anthem</h1>

                            <p>सयौ थुंगा फूलका हामी एउटै माला नेपाली सर्वभौम भई फैलिएका मेची महाकाली || <br>

                                प्रकृतिको कोटी कोटी सम्पदाको आचला वीरहरुका रगतले स्वोतन्त्र र अटल || <br>

                                ज्ञानभूमि शान्तिभूमि तराई पहाड हिमाल अखण्ड यो प्यारो हाम्रो मातृभूमि नेपाल || <br>

                                बहुल जाति भाषा धर्म सस्कृति छन् विसाल अग्रगामी राष्ट्र हाम्रो जय जय नेपाल || <br>
                            </p>


                        </div>

                    </div>
                </div>
            </div>
            <!-- container -->
        </div>
        <!-- block -->
    </section>
    <!-- Tabs Section -->

@endsection