@extends('layouts.clientLayout')

@section('title')
Send complaint
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="box-body">
                    <form class="form-horizontal" action="/" method="post">
                        {{ csrf_field() }}
                        <div class="modal-header">
                            <h4 class="modal-title">Complaint Form</h4>
                        </div>
                        <div class="box-body">

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control" rows="5" id="inputEmail3" placeholder="Enter...">{{old('description')}}</textarea>
                                    @if ($errors->has('description'))
                                        <div class="text-danger">{{ $errors->first('description') }}</div>
                                    @endif
                                </div>
                            </div>

                        </div><!-- /.box-body -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
