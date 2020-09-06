@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <h3>Artistik Book</h3>
    <a class="btn btn-outline-success" href="/create_new_song" style="font-size:12px;">Create New Song</a>
   
    @if(session()->has('update_message'))
    <br> <br>
        <div class="alert alert-success">
            {{ session()->get('update_message') }}
        </div>
    @endif

    @if(session()->has('delete_message'))
    <br> <br>
        <div class="alert alert-success">
            {{ session()->get('delete_message') }}
        </div>
    @endif

    @if(session()->has('created_message'))
    <br> <br>
        <div class="alert alert-success">
            {{ session()->get('created_message') }}
        </div>
    @endif
    
    <div class="table-responsive" style="margin-top:3%;">
        <table id="dataTable" class="table table-striped table-bordered"  width="100%" >
            <thead>
                <tr style="font-size:13px;">
                <th>Song Title</th>
                <th>Song Artist</th>
                <th>Song Lyrics</th>
                <th>When Created</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
                
                @foreach($songs_table as $data)
                    <tr>
                        <td>{{$data->title}}</td>
                        <td>{{$data->artist}}</td>
                        <td>{{$data->songs}}</td>
                        <td>{{$data->created_at}}</td>
                        <td>{{$data->status == 1 ? 'Active' : 'Not Active'}}</td>
                        <td class="d-flex justify-content-center">
                            <form method="post">
                                <a href="/update_song/{{$data->id}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a style="margin-left:2px;" href="/delete_song/{{$data->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach           
            </tbody>
        
        </table>
    </div>
</div>
@endsection
