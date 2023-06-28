<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Models\Inspection;
use App\Models\Location;
use App\Models\TrackSection;
/*use App\Models\TrackSection;*/
use App\Models\User;
use App\Models\Company;
use App\Models\Yard;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class InspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*  $inspections = Inspection::join('yards','inspections.yard_id', '=' , 'yards.id')
                                 ->join('companies','yards.id', '=' , 'companies.id')
                                 ->select('inspections.*','yards.id','yards.company_id',  'companies.name')
                                 ->get();  */
                                 $inspections = Inspection:: paginate(8);
        //return $inspections;
        return view('menu.inspections.index',compact('inspections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.inspections.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//       return $request;

        if($request->type_inspection == 1){
            $inspection=Inspection::create([
                'user_id'=>auth()->id(),
                'yard_id'=>$request->yard_id,
                'track_id'=>$request->track_id,
                'tracksection_id'=>$request->tracksection_id,
                'railroadswitch_id'=>null,
                'date'=>$request->date,
                'type_inspection'=>$request->type_inspection,
                'condition'=>$request->condition,
            ]);
        }
        if($request->type_inspection == 2){
            $inspection=Inspection::create([
                'user_id'=>auth()->id(),
                'yard_id'=>$request->yard_id,
                'track_id'=>null,
                'tracksection_id'=>null,
                'railroadswitch_id'=>$request->railroadswitch_id,
                'date'=>$request->date,
                'type_inspection'=>$request->type_inspection,
                'condition'=>$request->condition,
            ]);
        }
        if ($request->condition == 1){
            $count = count($request->defecto);
            for ($i = 0; $i < $count; $i++){
                $inspection->defect_track()->create([
                    'defect'=>$request->defecto[$i],
                    'priority'=>$request->priorities[$i],
                    'comment'=>$request->comments[$i]
                ]);
            }
        }

        if ($request->file('file')) {
            $url= Storage::put('images', $request->file('file'));
            $inspection->image()->create([
                'url'=>$url
            ]);

        }

        return redirect()->route('menu.inspections.create')->with('info','Se registró  satifactoriamente');

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
