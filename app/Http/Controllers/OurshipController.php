<?php

namespace App\Http\Controllers;
use App\Ourship;
use Illuminate\Http\Request;
use App\newsfeed;
use App\opportunies;
use App\Visitor;
class OurshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ourship::orderBy('id','DESC')->paginate(10);
        return view('backend.ourship.index')->with('data',$data);


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if($request->hasFile('ship_img')){

            $filenameWithExt = $request->file('ship_img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('ship_img')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('ship_img')->storeAs('public/images',$fileNameToStore);

        }else{
            $fileNameToStore = 'noimage.jpg';
        }



         $none = 'N/A';
        $data = new Ourship;
        $data->ship_img=$fileNameToStore;
        $data->ship_name=$request->input('ship_name');
        $data->hull_number=$request->input('hull_number');
        if(empty($request->input('LOA'))){
            $data->LOA= $none;
        }else{
            $data->LOA=$request->input('LOA');
        }

        if(empty($request->input('BREADTH'))){
            $data->BREADTH= $none;
        }else{
            $data->BREADTH=$request->input('BREADTH');
        }

        if(empty($request->input('DEPTH'))){
            $data->DEPTH= $none;
        }else{
            $data->DEPTH=$request->input('DEPTH');
        }


        if(empty($request->input('DRAFT'))){
            $data->DRAFT= $none;
        }else{
            $data->DRAFT=$request->input('DRAFT');
        }

        if(empty($request->input('POWER'))){
            $data->POWER= $none;
        }else{
            $data->POWER=$request->input('POWER');
        }

        if(empty($request->input('SPEED'))){
            $data->SPEED= $none;
        }else{
            $data->SPEED=$request->input('SPEED');
        }
        if(empty($request->input('HULL'))){
            $data->HULL= $none;
        }else{
             $data->HULL=$request->input('HULL');
        }
        if(empty($request->input('CLASS'))){
            $data->CLASS= $none;
        }else{
            $data->CLASS=$request->input('CLASS');
        }
        if(empty($request->input('YEAR_BUILT'))){
            $data->YEAR_BUILT= $none;
        }else{
            $data->YEAR_BUILT=$request->input('YEAR_BUILT');
        }

        if(empty($request->input('REGISTER'))){
            $data->REGISTER= $none;
        }else{
            $data->REGISTER=$request->input('REGISTER');
        }

        $data->save();

        return \Redirect::to('/ourship')->with('success', 'Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Ourship::find($id);

        $images = \DB::table('ourships')
                    ->join('ship_images', 'ship_images.ship_id', '=', 'ourships.id')
                    ->get();

        return view('backend.ourship.show', compact('data', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Ourship::find($id);

        $images = \DB::table('ourships')
                    ->join('ship_images', 'ship_images.ship_id', '=', 'ourships.id')
                    ->get();

        return view('backend.ourship.show', compact('data', 'images'));
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
        $data = Ourship::find($id);
        $none = 'N/A';

        if($request->hasFile('imgs') == NULL){
            $data->ship_name=$request->ship_name;
            $data->hull_number=$request->hull_number;
            if(empty($request->input('LOA'))){
                $data->LOA= $none;
            }else{
                $data->LOA=$request->LOA;
            }

            if(empty($request->input('BREADTH'))){
                $data->BREADTH= $none;
            }else{
                $data->BREADTH=$request->BREADTH;
            }

            if(empty($request->input('DEPTH'))){
                $data->DEPTH= $none;
            }else{
                $data->DEPTH=$request->DEPTH;
            }

            if(empty($request->input('DRAFT'))){
                $data->DRAFT= $none;
            }else{
                $data->DRAFT=$request->DRAFT;
            }

            if(empty($request->input('POWER'))){
                $data->POWER= $none;
            }else{
                $data->POWER=$request->POWER;
            }

            if(empty($request->input('SPEED'))){
                $data->SPEED= $none;
            }else{
                $data->SPEED=$request->SPEED;
            }
            if(empty($request->input('HULL'))){
                $data->HULL= $none;
            }else{
                $data->HULL=$request->HULL;
            }
            if(empty($request->input('CLASS'))){
                $data->CLASS= $none;
            }else{
                $data->CLASS=$request->CLASS;
            }
            if(empty($request->input('YEAR_BUILT'))){
                $data->YEAR_BUILT= $none;
            }else{
                $data->YEAR_BUILT=$request->YEAR_BUILT;
            }

            if(empty($request->input('REGISTER'))){
                $data->REGISTER= $none;
            }else{
                $data->REGISTER=$request->REGISTER;
            }
            $data->save();
            return \Redirect::to('/ourship')->with('success', 'Update Successfully');
        }else{
            if($request->hasFile('imgs')){
                $filenameWithExt = $request->file('imgs')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('imgs')->getClientOriginalExtension();
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                $path = $request->file('imgs')->storeAs('public/images',$fileNameToStore);

            }else{
                $fileNameToStore = 'noimage.jpg';
            }

            // dd($fileNameToStore);
            $data->ship_img=$fileNameToStore;
            $data->ship_name=$request->ship_name;
            $data->hull_number=$request->hull_number;
            if(empty($request->input('LOA'))){
                $data->LOA= $none;
            }else{
                $data->LOA=$request->LOA;
            }

            if(empty($request->input('BREADTH'))){
                $data->BREADTH= $none;
            }else{
                $data->BREADTH=$request->BREADTH;
            }

            if(empty($request->input('DEPTH'))){
                $data->DEPTH= $none;
            }else{
                $data->DEPTH=$request->DEPTH;
            }

            if(empty($request->input('DRAFT'))){
                $data->DRAFT= $none;
            }else{
                $data->DRAFT=$request->DRAFT;
            }

            if(empty($request->input('POWER'))){
                $data->POWER= $none;
            }else{
                $data->POWER=$request->POWER;
            }

            if(empty($request->input('SPEED'))){
                $data->SPEED= $none;
            }else{
                $data->SPEED=$request->SPEED;
            }
            if(empty($request->input('HULL'))){
                $data->HULL= $none;
            }else{
                $data->HULL=$request->HULL;
            }
            if(empty($request->input('CLASS'))){
                $data->CLASS= $none;
            }else{
                $data->CLASS=$request->CLASS;
            }
            if(empty($request->input('YEAR_BUILT'))){
                $data->YEAR_BUILT= $none;
            }else{
                $data->YEAR_BUILT=$request->YEAR_BUILT;
            }

            if(empty($request->input('REGISTER'))){
                $data->REGISTER= $none;
            }else{
                $data->REGISTER=$request->REGISTER;
            }

            $data->save();
            return \Redirect::to('/ourship')->with('success', 'Update Successfully');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Ourship::find($id);
        $data ->delete();
        return \Redirect::to('/ourship')->with('alert', 'Delete Successfully!');

    }

    public function mainIndex(){
        $visitor = Visitor::first();
        if($visitor->count() < 1){
            $visitor = new Visitor;
            $visitor->count = 1;
            $visitor->save();
        }else{
            $visitor->count =  $visitor->count + 1;
            $visitor->update();
        }

        $ships = Ourship::orderBy('id', 'DESC')->get()->take(4);
        $newsfeed = newsfeed::orderBy('id', 'DESC')->get()->take(5);
        $opportunies = opportunies::orderBy('id', 'DESC')->get()->take(3);
        $ourship = Ourship::orderBy('created_at', 'DESC')->get()->take(4);

        return view('pages.main', compact('ships', 'newsfeed', 'opportunies','ourship'));
    }


    public function getShip($id){
        $ship = Ourship::find($id);

        return response()->json($ship);
    }

    public function display_allship(){
        $data = Ourship::latest()->get();
        return view('partial._ship-body')->with('data',$data);

    }

}
