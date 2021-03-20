@extends('layouts.adminLayout')

@section('title')
    Edit complaint's status
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <form class="form-horizontal" action="{{ route('admin.manageComplaint.update', $complaint->id)}}" method="post">
                        @method('PATCH')
                        {{ csrf_field() }}
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Complaint's Status</h4>
                        </div>
                        <div class="box-body">


                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input disabled name="name" class="form-control" placeholder="Enter..." value="{{$complaint->users->name}}" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea disabled name="description" class="form-control" rows="5" id="inputEmail3" placeholder="Enter...">{{$complaint->description}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="status" class="form-control">
                                        <option value="pending">Pending</option>
                                        <option value="resolved">Resolved</option>
                                        <option value="dismissed">Dismissed</option>
                                    </select>
                                </div>
                            </div>

                        </div><!-- /.box-body -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
