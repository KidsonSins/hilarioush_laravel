@extends('layouts.admin')


@section('page_title')

    Users

@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('dist/backend/css/remodal.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/backend/css/remodal-default-theme.css') }}">
    <style>
        .modal-open .modal{
            display: table;
            min-height: 100vh;
            min-width: 100vw;
        }
        .modal.in.deletewala .modal-dialog{
            text-align: center;
            margin: 12% auto;
        }
        .remodal-close{
            left:auto;
            right:0;
        }



    </style>

@endsection

@section('content')

    <!-- .row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">All the users</h3>

                <table class="table table-bordered table-responsive">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Photo</th>
                        <th>Created</th>
                        <th>Updated</th>
                          <th>Delete?</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($users)
                        @foreach($users as $user)
                          <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->photo)
                                    <img src="{{ asset('uploads/').'/'. $user->photo->path }}" class="img-responsive" alt="Image" style="height: 50px;">
                                    @else
                                no user photo
                                @endif
                            </td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                            <td>{{ $user->updated_at->diffForHumans() }}</td>
                              <td>
                                  <a href="#{{ 'h_remodal_edit'.$user->id }}" class="btn btn-info">Edit</a>
                                  <a href="#{{ 'h_remodal_delete'.$user->id }}" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                        @endforeach
                    @endif

                   </tbody>
                 </table>

                <a href="#create_remodal" class="btn btn-info">Create User</a>

            </div>
        </div>
    </div>
    <!-- /.row -->
    {{--create remodal--}}
    <div class="remodal" data-remodal-id="create_remodal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
        <div>
            <h2 id="modal1Title">Create User</h2>
            {{--<p id="modal1Desc">--}}
            {{--All his posted news, photos and credentials will also be deleted.--}}
            {{--</p>--}}
        </div>
        <br>


        {!! Form::open(['method'=>'POST', 'class'=>'text-left', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}
            {{ csrf_field() }}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}

            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control']) !!}

            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Create User', ['class'=>'remodal-confirm btn btn-info col-sm-6']) !!}
                <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>

            </div>

        {!! Form::close() !!}
    </div>
    {{--create remodal--}}

@foreach($users as $user)
    {{--delete remodal--}}
    <div class="remodal" data-remodal-id="{{ 'h_remodal_delete'.$user->id }}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
        <div>
            <h2 id="modal1Title">Are you Sure?</h2>
            <p id="modal1Desc">
                All his posted news, photos and credentials will also be deleted.
            </p>
        </div>
        <br>
        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
        <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
        {!! Form::submit('Yes', ['class'=>'btn btn-success remodal-confirm']) !!}
        {!! Form::close() !!}
    </div>
    {{--delete remodal--}}

    {{--edit remodal--}}
    <div class="remodal" data-remodal-id="{{ 'h_remodal_edit'.$user->id }}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
        <div>
            <h2 id="modal1Title">Edit User information</h2>
            {{--<p id="modal1Desc">--}}
                {{--All his posted news, photos and credentials will also be deleted.--}}
            {{--</p>--}}
        </div>
        <br>


        {!! Form::model($user,['method'=>'PATCH', 'class'=>'text-left', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}


        <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>
        <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
        {!! Form::submit('update User', ['class'=>'remodal-confirm btn btn-info col-sm-6']) !!}
            <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>

        </div>

        {!! Form::close() !!}
    </div>
    {{--edit remodal--}}
@endforeach

@endsection


@section('scripts')
    <script src="{{ asset('dist/backend/js/remodal.min.js') }}"></script>

    <!-- Events -->
    <script>
        $(document).on('opening', '.remodal', function () {
            console.log('opening');
        });

        $(document).on('opened', '.remodal', function () {
            console.log('opened');
        });

        $(document).on('closing', '.remodal', function (e) {
            console.log('closing' + (e.reason ? ', reason: ' + e.reason : ''));
        });

        $(document).on('closed', '.remodal', function (e) {
            console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
        });

        $(document).on('confirmation', '.remodal', function () {
            console.log('confirmation');
        });

        $(document).on('cancellation', '.remodal', function () {
            console.log('cancellation');
        });

        //  Usage:
        //  $(function() {
        //
        //    // In this case the initialization function returns the already created instance
        //    var inst = $('[data-remodal-id=modal]').remodal();
        //
        //    inst.open();
        //    inst.close();
        //    inst.getState();
        //    inst.destroy();
        //  });

        //  The second way to initialize:
        $('[data-remodal-id=modal2]').remodal({
            modifier: 'with-red-theme'
        });
    </script>

@endsection