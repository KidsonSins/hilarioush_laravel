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
                <div class="item active">
                    <img src="{{ asset('dist/frontend/images/myimg3.jpg') }}" alt="..." class="img-responsive">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('dist/frontend/images/myimg3.jpg') }}" alt="..." class="img-responsive">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('dist/frontend/images/myimg3.jpg') }}" alt="..." class="img-responsive">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>


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

                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ducimus accusantium, vitae earum velit cum? Magni nesciunt, non doloribus harum similique quos earum aut excepturi ut id hic aspernatur, cumque obcaecati tempora quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ipsam itaque odio cupiditate vero commodi libero cum, dolore obcaecati enim nam at nobis voluptas doloremque, nihil impedit quam iste, totam? Quibusdam officiis eos, culpa tempore libero quidem quas. Rerum delectus explicabo iste ducimus inventore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente cumque suscipit omnis dolor <span id="example3">voluptate dolores beatae, dolorem eos enim molestiae!
                                        </span>
                                        </p>
                                        <a class="btn btn-success" href="" style="background: transparent;color: black;">Read more</a>
                                    </div>
                                    <!-- tabs-data -->
                                </div>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="h_news">
                            <h3 class="h_title p-b-15">News and Events</h3>
                            <div id="h_news" class="owl-carousel owl-theme">
                                <div class="item news_item">
                                    <img class="img-responsive" src="images/myimg3.jpg" alt="">
                                    <div class="details">
                                        <a href=""> <h4>News Title</h4></a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, porro quisquam sint inventore eum numquam.</p>
                                    </div>
                                </div>

                                <div class="item news_item">
                                    <img class="img-responsive" src="images/myimg3.jpg" alt="">
                                    <div class="details">
                                        <a href=""> <h4>News Title</h4></a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, porro quisquam sint inventore eum numquam.</p>
                                    </div>
                                </div>

                                <div class="item news_item">
                                    <img class="img-responsive" src="images/myimg3.jpg" alt="">
                                    <div class="details">
                                        <a href=""> <h4>News Title</h4></a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, porro quisquam sint inventore eum numquam.</p>
                                    </div>
                                </div>

                                <div class="item news_item">
                                    <img class="img-responsive" src="images/myimg3.jpg" alt="">
                                    <div class="details">
                                        <a href=""> <h4>News Title</h4></a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, porro quisquam sint inventore eum numquam.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-success m-t-25" href="" style="background: transparent;color: black;">See All</a>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="h_widget">

                            <h3 class="h_title p-t-70 p-b-15">Notices/Downloads</h3>
                            <ul class="h_ul_setup p-l-0">
                                <li class="inside_p">
                                    <a href="">
                                        <p>Document 1Document 1Document </p>
                                        <button type="button" class="btn btn-primary pull-right m-t-3" style="padding:2px 12px;">Download</button>
                                    </a>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="inside_p">
                                    <a href="">
                                        <p>Document 1Document 1Document </p>
                                        <button type="button" class="btn btn-primary pull-right m-t-3" style="padding:2px 12px;">Download</button>
                                    </a>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="inside_p">
                                    <a href="">
                                        <p>Document 1Document 1Document </p>
                                        <button type="button" class="btn btn-primary pull-right m-t-3" style="padding:2px 12px;">Download</button>
                                    </a>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="inside_p">
                                    <a href="">
                                        <p>Document 1Document 1Document </p>
                                        <button type="button" class="btn btn-primary pull-right m-t-3" style="padding:2px 12px;">Download</button>
                                    </a>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="inside_p">
                                    <a href="">
                                        <p>Document 1Document 1Document </p>
                                        <button type="button" class="btn btn-primary pull-right m-t-3" style="padding:2px 12px;">Download</button>
                                    </a>
                                    <div class="clearfix"></div>
                                </li>


                            </ul>
                        </div>
                        <div class="h_widget">
                            <h3 class="h_title p-t-15 p-b-15">Principal's Message</h3>
                            <p class="message">
                                <img src="images/4.jpg" class="img-circle">

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium obcaecati possimus laborum accusamus impedit, inventore, recusandae molestias rerum praesentium saepe dolore quo aut?
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