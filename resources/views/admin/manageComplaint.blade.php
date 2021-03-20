@extends('layouts.adminLayout')

@section('title')
    Manage complaint
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
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th style="width: 5%">#</th>
                            <th style="width: 15%">Name</th>
                            <th style="width: 40%">Description</th>
                            <th style="width: 20%">Date</th>
                            <th style="width: 10%">Status</th>
                            <th style="width: 10%"></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($complaints as $complaint)

                            <tr>
                            <td><b style="color:maroon">{{$complaint->id}}</b></td>
                            <td>{{$complaint->users->name}}</td>
                            <td>{{$complaint->description}}</td>
                            <td><i><b>{{$complaint->created_at->format('d.M.y | h:i a')}}</b></i></td>
                            <td>
                                @if($complaint->status == 'resolved')
                                    <small class="label bg-green">{{$complaint->status}}</small>
                                @else <small class="{{ $complaint->status == 'pending' ? 'label bg-blue' : 'label bg-red' }}">{{$complaint->status}}</small>
                                @endif
                            </td>
                            <td class="d-flex">
                                <a href="{{ route('admin.manageComplaint.edit', $complaint->id)}}"><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button></a>
                                <form action="{{ route('admin.manageComplaint.destroy', $complaint->id)}}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                    <div style="display: flex; justify-content: center">
                        {{$complaints->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
