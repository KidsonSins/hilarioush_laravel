@extends('layouts.master')

@section('content')
    <!--my about wala tab-->
    <section>
        <div class="block remove-gap gray-layer p-b-30">
            <div class="parallax" data-velocity="-.1" style="background: rgba(0, 0, 0, 0) url(images/resource/property-image.jpg) no-repeat 50% 0; background-size:cover;"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 column">
                        <div class="big-tabs">

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="about-hotel">
                                    <div class="tab-data">
                                        <h4>{{ $event->title }}</h4>
                                        <p>
                                            <img src="{{ asset('uploads/'.$event->photo->path) }}" class="img-responsive pull-left m-r-13" alt="Image" style="max-height: 240px;">
                                            {{ $event->detail }}
                                        </p>

                                        <!-- ul -->
                                    </div>
                                    <!-- tabs-data -->
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
            </div>
            <!-- container -->
        </div>
        <!-- block -->
    </section>
    <!-- Tabs Section -->

@endsection
