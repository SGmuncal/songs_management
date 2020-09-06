<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DateTime;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //get the table from db_songs
        $songs_table = DB::select('SELECT id,title,artist,songs,status,created_at FROM songs WHERE status = ?',[
            '1'
        ]);
        return view('home')->with('songs_table',$songs_table);
    }

    public function update_song($id) {

        $songs_table = DB::select('SELECT id,title,artist,songs,status,created_at FROM songs WHERE id = ?',[
            $id
        ]);

        return view('/update_song')->with('songs_table',$songs_table);
    }

    public function update_new_song(Request $request) {

        $now = New DateTime();

        DB::update('UPDATE songs SET title = ?, artist = ?, songs = ?, updated_at = ? WHERE id = ?',[
            $request->title,
            $request->artist,
            $request->lyrics,
            $now,
            $request->id
        ]);

        return redirect()->intended('/home')->with('update_message','Successfully Update');
        // return redirect()->back()->with('message', 'Successfully Update'); 
    }

    public function delete_song($id) {
        
        DB::update('UPDATE songs SET status = ? WHERE id = ?',[
            '0',
            $id
        ]);

        return redirect()->intended('/home')->with('delete_message','Successfully Deleted');
    }

    public function create_new_song() {
        return view('/create_new_song');
    }

    public function submit_new_song(Request $request) {

        $now = New DateTime();

        DB::insert('INSERT INTO songs (title,artist,songs,status,created_at) VALUES (?,?,?,?,?)',[
            $request->title,
            $request->artist,
            $request->lyrics,
            '1',
            $now
        ]);

        return redirect()->intended('/home')->with('created_message','Successfully New Created Song');
    }
}
