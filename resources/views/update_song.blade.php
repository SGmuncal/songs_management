@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <h3>Update Artistik Book</h3>
    <br>
    <form method="post" action="/update_new_song">
        @csrf
       
        <div class="card">
            <div class="card-header">Song Details</div>
            <div class="card-body">
                <input type="hidden" name="id" class="form-control" value="{{$songs_table[0]->id}}">
                <div class="row">
                    <div class="col-md-6">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{$songs_table[0]->title}}">
                    </div>
                    <div class="col-md-6">
                        <label>Artist</label>
                        <input type="text" name="artist" class="form-control" value="{{$songs_table[0]->artist}}">
                        <br>
                    </div>
                    
                    <div class="col-md-12">
                        <label>Lyrics</label>
                        <textarea class="form-control" name="lyrics" style="height:250px;">{{$songs_table[0]->songs}}</textarea>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    
                    <input type="submit" value="Update" class="form-control col-md-5 btn btn-primary"/>
                
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
