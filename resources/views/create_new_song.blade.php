@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <h3>Create New Artistik Book</h3>
    <br>
    <form method="post" action="/submit_new_song">
        @csrf
       
        <div class="card">
            <div class="card-header">Create New Song</div>
            <div class="card-body">
       
                <div class="row">
                    <div class="col-md-6">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="">
                    </div>
                    <div class="col-md-6">
                        <label>Artist</label>
                        <input type="text" name="artist" class="form-control" value="">
                        <br>
                    </div>
                    
                    <div class="col-md-12">
                        <label>Lyrics</label>
                        <textarea class="form-control" name="lyrics" style="height:250px;"></textarea>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    
                    <input type="submit" class="form-control col-md-5 btn btn-primary"/>
                
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
