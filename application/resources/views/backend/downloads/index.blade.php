@extends('layouts.admin')


@section('page_title')

    Notices/Downloads

@endsection

@section('styles')
@endsection

@section('content')

    <!-- .row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">All the Notices/Downloads</h3>

                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>S.N</th>
                        <th>File Name</th>
                        <th>File Description</th>
                        <th>filename</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Delete?</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($downloads)

                        <?php $x = 0; ?>
                        @foreach($downloads as $download)
                            <tr>
                                <td>{{ ++$x }}</td>
                                <td>{{ $download->name }}</td>
                                <td>{{ $download->description }}</td>
                                <td>{{ $download->path }}</td>
                                <td>{{ $download->created_at->diffForHumans() }}</td>
                                <td>{{ $download->updated_at->diffForHumans() }}</td>
                                <td>
                                    <a href="#{{ 'h_remodal_delete_download'.$download->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>

                <a href="#create_remodal_download" class="btn btn-info">Upload new Notice/File</a>

            </div>
        </div>
    </div>
    <!-- /.row -->
    {{--create remodal--}}
    <div class="remodal" data-remodal-id="create_remodal_download" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
        <div>
            <h2 id="modal1Title">Upload a Notice/file</h2>
            {{--<p id="modal1Desc">--}}
            {{--All his posted news, photos and credentials will also be deleted.--}}
            {{--</p>--}}
        </div>
        <br>


        {!! Form::open(['method'=>'POST', 'class'=>'text-left', 'action'=>'AdminDownloadsController@store', 'files'=>true]) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('name', 'File Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('description', 'Short Description:') !!}
            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('path', 'Upload file:') !!}
            {!! Form::file('path', ['class'=>'form-control required_need']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Upload this', ['class'=>'remodal-confirm btn btn-info col-sm-6']) !!}
            <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>

        </div>

        {!! Form::close() !!}
    </div>
    {{--create remodal--}}

    @foreach($downloads as $download)
        {{--delete remodal--}}
        <div class="remodal" data-remodal-id="{{ 'h_remodal_delete_download'.$download->id }}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
            <div>
                <h2 id="modal1Title">Are you Sure?</h2>
                <p id="modal1Desc">
                    All his posted news, photos and credentials will also be deleted.
                </p>
            </div>
            <br>
            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminDownloadsController@destroy', $download->id]]) !!}
            <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
            {!! Form::submit('Yes', ['class'=>'btn btn-success remodal-confirm']) !!}
            {!! Form::close() !!}
        </div>
        {{--delete remodal--}}


    @endforeach

@endsection


@section('scripts')

@endsection