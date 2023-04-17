<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Models\Track;
use App\Models\Yard;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$tracks = Track::all();
        $tracks = Track::paginate(8);
        return view('menu.tracks.index',compact('tracks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $yards=Yard::pluck('name','id')->toArray();

        return view('menu.tracks.create',compact('yards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',

        ]);
        $track=Track::create([
            'name' => $request->name,
            'yard_id'=>$request->yard_id,


        ]);

        return redirect()->route('menu.tracks.index')->with('info','Se registró satifactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Track $track)
    {
        return view('menu.tracks.show',compact('track'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Track $track)
    {
        $yards=Yard::pluck('name','id')->toArray();
        return view('menu.tracks.edit',compact('track','yards'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Track $track)
    {
        $request->validate([
            'name' => 'required',
            'yard_id' => 'required'
        ]);
         $track->update([
            'name' => $request->name,
            'yard_id'=>$request->yard_id
        ]);

      return redirect()->route('menu.tracks.edit',$track)->with('info','se actualizó satifactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Track $track)
    {
        $track->delete();
        return redirect()->route('menu.tracks.index')->with('info','La vía se eliminó con exito');
    }
}
