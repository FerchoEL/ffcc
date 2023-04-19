<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Models\Inspection;
use App\Models\Location;
/*use App\Models\TrackSection;*/
use App\Models\User;
use App\Models\Company;
use App\Models\Yard;
use App\Models\Track;
use Illuminate\Http\Request;

class InspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inspections = Inspection::all();
        return view('menu.inspections.index',compact('inspections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::pluck('name','id')->toArray();
        $companies=Company::pluck('name','id')->toArray();
        $yards=Yard::pluck('name','id')->toArray();
        $tracks=Track::pluck('name','id')->toArray();
        $locations=Location::pluck('name','id')->toArray();
//        $tracksections=TrackSection::pluck('name','id')->toArray();
        return view('menu.inspections.create',compact('users','companies',
            'yards','tracks','locations'));
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
        $inspection=Inspection::create([
            'name'=>$request->name,
            'user_id'=>$request->user_id,
            'company_id'=>$request->company_id,
            'yard_id'=>$request->yard_id,
            'track_id'=>$request->track_id,
            'location_id'=>$request->location_id,
//            'tracksection_id'=>$request->tracksection_id,
        ]);


        return redirect()->route('menu.inspections.index')->with('info','Se registró el tramo satifactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
