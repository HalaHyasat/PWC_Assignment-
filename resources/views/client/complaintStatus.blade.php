@extends('layouts.clientLayout')

@section('title')
    My complaints
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th style="width: 40%">Description</th>
                            <th style="width: 20%">Date</th>
                            <th style="width: 10%">Status</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($complaints as $complaint)

                            <tr>
                                <td>{{$complaint->description}}</td>
                                <td><i><b>{{$complaint->created_at->format('d.M.y | h:i a')}}</b></i></td>
                                <td>
                                    @if($complaint->status == 'resolved')
                                        <small class="label bg-green">{{$complaint->status}}</small>
                                    @else <small class="{{ $complaint->status == 'pending' ? 'label bg-blue' : 'label bg-red' }}">{{$complaint->status}}</small>
                                    @endif
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
