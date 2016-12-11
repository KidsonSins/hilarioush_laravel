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
                <div class="panel-heading"> About Page
                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss">
                            {{--<i class="ti-close"></i>--}}
                        </a> </div>
                </div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>

                        <div class="h_controls">
                            <div class="button-box">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit" data-whatever="@fat">Edit</button>
                            </div>
                            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="exampleModalLabel1">Page Information</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">School Name:</label>
                                                    <input type="text" class="form-control" id="recipient-name1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Information:</label>
                                                    <textarea class="form-control" id="message-text1"></textarea>
                                                </div>


                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- /.row -->

@endsection
