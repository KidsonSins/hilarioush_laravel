@extends('layouts.admin')


@section('page_title')

    Gallery Images

@endsection

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
    <style>
        .dropzone{
            min-height:450px;
        }
        .dropzone .dz-message{
            margin:30% auto;
        }
    </style>
@endsection

@section('content')

    <!-- .row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">All Gallery Images</h3>

                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Photo</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Delete?</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($galleryimages)
                        <?php $i=0; ?>
                        @foreach($galleryimages as $galleryimage)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>
                                    <img src="{{ asset('uploads/gallery/'.$galleryimage->path) }}" class="img-responsive" alt="Image" style="max-height: 100px;">
                                </td>
                                <td>{{ $galleryimage->created_at->diffForHumans() }}</td>
                                <td>{{ $galleryimage->updated_at->diffForHumans() }}</td>
                                <td>
                                    <a href="#{{ 'h_remodal_delete_galleryimage'.$galleryimage->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>

                <a href="#create_remodal_galleryimage" class="btn btn-info">Upload Gallery Images</a>

            </div>
        </div>
    </div>
    <!-- /.row -->

    {{--create remodal--}}
    <div class="remodal" data-remodal-id="create_remodal_galleryimage" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
        <div>
            <h2 id="modal1Title">Upload Photos Here</h2>
            <h5 style="font-style: italic;color: red;"><b>Refresh the page after UPLOAD COMPLETE to see it in page.</b></h5>
            {{--<p id="modal1Desc">--}}
            {{--All his posted news, photos and credentials will also be deleted.--}}
            {{--</p>--}}
        </div>
        <br>


        {!! Form::open(['method'=>'POST', 'class'=>'text-left dropzone', 'action'=>'AdminGalleryimageController@store', 'files'=>true]) !!}
        {{ csrf_field() }}


        {!! Form::close() !!}
    </div>
    {{--create remodal--}}


    @foreach($galleryimages as $galleryimage)
        {{--delete remodal--}}
        <div class="remodal" data-remodal-id="{{ 'h_remodal_delete_galleryimage'.$galleryimage->id }}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
            <div>
                <h2 id="modal1Title">Are you Sure?</h2>
                <p id="modal1Desc">
                    This photo will be permanently deleted.
                </p>
            </div>
            <br>
            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminGalleryimageController@destroy', $galleryimage->id]]) !!}
            <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
            {!! Form::submit('Yes', ['class'=>'btn btn-success remodal-confirm']) !!}
            {!! Form::close() !!}
        </div>
        {{--delete remodal--}}

    @endforeach

@endsection


@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>

@endsection


