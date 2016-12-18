@extends('layouts.admin')


@section('page_title')

    News And Events

@endsection

@section('styles')
@endsection

@section('content')

    <!-- .row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">All the News/Events</h3>

                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Title</th>
                        <th>Photo</th>
                        <th>Detail</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Delete?</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($events)

                        <?php $x = 0; ?>
                        @foreach($events as $event)
                            <tr>
                                <td>{{ ++$x }}</td>
                                <td>{{ $event->title }}</td>
                                <td>
                                    @if($event->photo)
                                        <img src="{{ asset('uploads/').'/'. $event->photo->path }}" class="img-responsive" alt="Image" style="height: 50px;">
                                    @else
                                        no user photo
                                    @endif
                                </td>
                                <td>{{ $event->detail }}</td>
                                <td>{{ $event->created_at->diffForHumans() }}</td>
                                <td>{{ $event->updated_at->diffForHumans() }}</td>
                                <td>
                                    <a href="#{{ 'h_remodal_edit'.$event->id }}" class="btn btn-info">Edit</a>
                                    <a href="#{{ 'h_remodal_delete'.$event->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>

                <a href="#create_remodal" class="btn btn-info">Create News</a>

            </div>
        </div>
    </div>
    <!-- /.row -->
    {{--create remodal--}}
    <div class="remodal" data-remodal-id="create_remodal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
        <div>
            <h2 id="modal1Title">Create News</h2>
            {{--<p id="modal1Desc">--}}
            {{--All his posted news, photos and credentials will also be deleted.--}}
            {{--</p>--}}
        </div>
        <br>


        {!! Form::open(['method'=>'POST', 'class'=>'text-left', 'action'=>'AdminEventsController@store', 'files'=>true]) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('detail', 'Detail:') !!}
            {!! Form::textarea('detail', null, ['class'=>'form-control'], ['required'=>'']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', ['class'=>'form-control'], ['required'=>'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create News', ['class'=>'remodal-confirm btn btn-info col-sm-6']) !!}
            <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>

        </div>

        {!! Form::close() !!}
    </div>
    {{--create remodal--}}

    @foreach($events as $event)
        {{--delete remodal--}}
        <div class="remodal" data-remodal-id="{{ 'h_remodal_delete'.$event->id }}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
            <div>
                <h2 id="modal1Title">Are you Sure?</h2>
                <p id="modal1Desc">
                    All his posted news, photos and credentials will also be deleted.
                </p>
            </div>
            <br>
            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminEventsController@destroy', $event->id]]) !!}
            <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
            {!! Form::submit('Yes', ['class'=>'btn btn-success remodal-confirm']) !!}
            {!! Form::close() !!}
        </div>
        {{--delete remodal--}}

        {{--edit remodal--}}
        <div class="remodal" data-remodal-id="{{ 'h_remodal_edit'.$event->id }}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
            <div>
                <h2 id="modal1Title">Edit User information</h2>
                {{--<p id="modal1Desc">--}}
                {{--All his posted news, photos and credentials will also be deleted.--}}
                {{--</p>--}}
            </div>
            <br>


            {!! Form::model($event,['method'=>'PATCH', 'class'=>'text-left', 'action'=>['AdminEventsController@update', $event->id], 'files'=>true]) !!}


            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}

            </div>
            <div class="form-group">
                {!! Form::label('detail', 'Detail:') !!}
                {!! Form::textarea('detail', null, ['class'=>'form-control']) !!}

            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('update News', ['class'=>'remodal-confirm btn btn-info col-sm-6']) !!}
                <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>

            </div>

            {!! Form::close() !!}
        </div>
        {{--edit remodal--}}
    @endforeach

@endsection


@section('scripts')

@endsection