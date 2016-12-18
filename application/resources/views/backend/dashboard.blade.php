@extends('layouts.admin')

@section('page_title')
    Dashboard
@endsection

@section('styles')
    <style>
        .panel-wrapper {
            border: 1px solid rgb(3, 169, 243);
        }
        .panel .panel-heading{
            border-radius:0;
        }
        .panel-info{
            box-shadow: 4px 5px 12px rgba(79, 84, 103, 0.42);
        }

    </style>
@endsection

@section('content')

    <!-- .row -->
    <div class="row">
        <div class="col-lg-6 col-sm-6">
            <div class="panel panel-info">
                <div class="panel-heading"> School Information
                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss">
                            {{--<i class="ti-close"></i>--}}
                        </a> </div>
                </div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <p>{{ str_limit($info->information, 290)}}</p>

                        <div class="h_controls">
                            <div class="button-box">
                                <a href="#school_info_remodal" class="btn btn-info" style="color: #fff;">Edit</a>
                            </div>

                            {{--edit remodal--}}
                            <div class="remodal" data-remodal-id="school_info_remodal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                <div>
                                    <h2 id="modal1Title">Edit School information</h2>
                                    {{--<p id="modal1Desc">--}}
                                    {{--All his posted news, photos and credentials will also be deleted.--}}
                                    {{--</p>--}}
                                </div>
                                <br>


                                {!! Form::model($info,['method'=>'PATCH', 'class'=>'text-left', 'action'=>['SchoolInfosController@update', $info->id], 'files'=>true]) !!}


                                <div class="form-group">
                                    {!! Form::label('name', 'Name:') !!}
                                    {!! Form::text('name', null, ['class'=>'form-control']) !!}

                                </div>
                                <div class="form-group">
                                    {!! Form::label('information', 'Information:') !!}
                                    {!! Form::textarea('information', null, ['class'=>'form-control']) !!}

                                </div>

                                <div class="form-group">
                                    {!! Form::label('phone_no', 'Phone:') !!}
                                    {!! Form::text('phone_no', null, ['class'=>'form-control']) !!}

                                </div>

                                <div class="form-group">
                                    {!! Form::label('address', 'Address:') !!}
                                    {!! Form::text('address', null, ['class'=>'form-control']) !!}

                                </div>

                                <div class="form-group">
                                    {!! Form::label('fax_no', 'Fax:') !!}
                                    {!! Form::text('fax_no', null, ['class'=>'form-control']) !!}

                                </div>

                                <div class="form-group">
                                    {!! Form::label('email', 'Email:') !!}
                                    {!! Form::email('email', null, ['class'=>'form-control']) !!}

                                </div>

                                <div class="form-group">
                                    {!! Form::label('website', 'Website:') !!}
                                    {!! Form::text('website', null, ['class'=>'form-control']) !!}

                                </div>



                                <div class="form-group">
                                    {!! Form::submit('update Info', ['class'=>'remodal-confirm btn btn-info col-sm-6']) !!}
                                    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>

                                </div>

                                {!! Form::close() !!}
                            </div>
                            {{--edit remodal--}}


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6">
            <div class="panel panel-info">
                <div class="panel-heading"> Principal Message
                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss">
                            {{--<i class="ti-close"></i>--}}
                        </a> </div>
                </div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <p><strong>Principal: </strong>{{ $principal_message->name }}</p>

                        <p><img class="pull-left" src="{{ asset('uploads/'.$principal_message->photo->path) }}" alt="" style="max-height: 100px; margin-right: 13px;"> {{ $principal_message->message }}</p>

                        <div class="h_controls">
                            <div class="button-box">
                                <a href="#principal_message_remodal" class="btn btn-info" style="color: #fff;">Edit</a>
                            </div>

                            {{--edit remodal--}}
                            <div class="remodal" data-remodal-id="principal_message_remodal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                <div>
                                    <h2 id="modal1Title">Edit Principal Message</h2>
                                    {{--<p id="modal1Desc">--}}
                                    {{--All his posted news, photos and credentials will also be deleted.--}}
                                    {{--</p>--}}
                                </div>
                                <br>


                                {!! Form::model($principal_message,['method'=>'PATCH', 'class'=>'text-left', 'action'=>['PrincipalmessageController@update', 1], 'files'=>true]) !!}


                                <div class="form-group">
                                    {!! Form::label('name', 'Name:') !!}
                                    {!! Form::text('name', null, ['class'=>'form-control']) !!}

                                </div>
                                <div class="form-group">
                                    {!! Form::label('message', 'Message:') !!}
                                    {!! Form::textarea('message', null, ['class'=>'form-control']) !!}

                                </div>
                                <div class="form-group">
                                    {!! Form::file('photo_id', ['class'=>'form-control']) !!}

                                </div>

                                <div class="form-group">
                                    {!! Form::submit('update Info', ['class'=>'remodal-confirm btn btn-info col-sm-6']) !!}
                                    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>

                                </div>

                                {!! Form::close() !!}
                            </div>
                            {{--edit remodal--}}


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

    <!-- .row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box" style="min-height: auto;box-shadow: 4px 5px 12px rgba(79, 84, 103, 0.42);">
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
            {!! Form::text('name', null, ['class'=>'form-control required_need']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class'=>'form-control required_need']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', ['class'=>'form-control required_need']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class'=>'form-control required_need']) !!}
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
