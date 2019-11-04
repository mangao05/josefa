<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image;
use App\ShipImages;
use App\Ourship;
use App\newsfeed;
use App\opportunies;
use App\opportunities_images;
use DB;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

        $newsfeed = newsfeed::find($request->newsfeed_id);

        if($newsfeed->newsfeed_title != $request->newsfeed_title || $newsfeed->newsfeed_text != $request->newsfeed_text || !empty($request->file('imgs'))){

            $newfile = $request->file('imgs');
            if(!empty($newfile)){
                $filenameWithExt = $newfile->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $newfile->getClientOriginalExtension();
                $fileNameToUpdate= $filename.'_'.time().'.'.$extension;
                $path = $newfile->storeAs('public/images', $fileNameToUpdate);

                $newsfeed->update([
                    'newsfeed_title' => $request->newsfeed_title,
                    'newsfeed_text' => $request->newsfeed_text,
                    'img' => $fileNameToUpdate

                ]);
            }else{
                $newsfeed->update([
                    'newsfeed_title' => $request->newsfeed_title,
                    'newsfeed_text' => $request->newsfeed_text
                ]);
            }



            $input=$request->all();
            $images=array();
            if($files=$request->file('file')){
                foreach($files as $file){
                    $filenameWithExt = $file->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $fileNameToStore= $filename.'_'.time().'.'.$extension;
                    $path = $file->storeAs('public/images',$fileNameToStore);

                    $images = new image;
                    $images->new_id = $request->get('newsfeed_id');
                    $images->newsfeed_name = $fileNameToStore;
                    $images->save();
                }

            }

        }else{
            $input=$request->all();
            $images=array();
            if($files=$request->file('file')){
                foreach($files as $file){
                    $filenameWithExt = $file->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $fileNameToStore= $filename.'_'.time().'.'.$extension;
                    $path = $file->storeAs('public/images',$fileNameToStore);

                    $images = new image;
                    $images->new_id = $request->get('newsfeed_id');
                    $images->newsfeed_name = $fileNameToStore;
                    $images->save();
                }

            }
        }
                    return redirect()->route('newsfeed.show', $request->get('newsfeed_id'));
    }

//ourship
    public function ourship_store(Request $request)
    {

        $ships = Ourship::find($request->ship_id);
        if($ships->ship_name != $request->ship_name || $ships->ship_text != $request->ship_text || !empty($request->file('img'))){

            if(!empty($newfile)){
                $newfile = $request->file('img');
                $filenameWithExt = $newfile->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $newfile->getClientOriginalExtension();
                $fileNameToUpdate= $filename.'_'.time().'.'.$extension;
                $path = $newfile->storeAs('public/images',$fileNameToUpdate);

                $ships->update([
                    'ship_name' => $request->ship_name,
                    'ship_text' => $request->ship_text,
                    'ship_img' => $fileNameToUpdate

                ]);
            }else{
                $ships->update([
                    'ship_name' => $request->ship_name,
                    'ship_text' => $request->ship_text,

                ]);
            }



            $input=$request->all();
            $images=array();
            if($files=$request->file('ship_file')){
                foreach($files as $file){
                    $filenameWithExt = $file->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $fileNameToStore= $filename.'_'.time().'.'.$extension;
                    $path = $file->storeAs('public/images',$fileNameToStore);

                    $images = new ShipImages;
                    $images->ship_id = $request->get('ship_id');
                    $images->ship_img = $fileNameToStore;
                    $images->save();
                }

            }

        }else{
            $input=$request->all();
            $images=array();
            if($files=$request->file('ship_file')){
                foreach($files as $file){
                    $filenameWithExt = $file->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $fileNameToStore= $filename.'_'.time().'.'.$extension;
                    $path = $file->storeAs('public/images',$fileNameToStore);

                    $images = new ShipImages;
                    $images->ship_id = $request->get('ship_id');
                    $images->ship_img = $fileNameToStore;
                    $images->save();
                }

            }
        }

        return redirect()->route('ourship.show', $request->get('ship_id'));
    }

//opportunities
public function opportunities_store(Request $request)
    {
        $opportunities = opportunies::find($request->opportunities_id);
        if($opportunities->oppo_title != $request->oppo_title || $opportunities->oppo_text != $request->oppo_text){


            $opportunities->update([
                'oppo_title' => $request->oppo_title,
                'oppo_text' => $request->oppo_text,
            ]);

            $input=$request->all();
            $images=array();
            if($files=$request->file('oppo_file')){
                foreach($files as $file){
                    $filenameWithExt = $file->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $fileNameToStore= $filename.'_'.time().'.'.$extension;
                    $path = $file->storeAs('public/images',$fileNameToStore);

                    $images = new  opportunities_images;
                    $images->ship_id = $request->get('oppo_id');
                    $images->ship_img = $fileNameToStore;
                    $images->save();
                }

            }

        }else{
            $input=$request->all();
            $images=array();
            if($files=$request->file('oppo_file')){
                foreach($files as $file){
                    $filenameWithExt = $file->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $fileNameToStore= $filename.'_'.time().'.'.$extension;
                    $path = $file->storeAs('public/images',$fileNameToStore);

                    $images = new  opportunities_images;
                    $images->oppo_id = $request->get('opportunities_id');
                    $images->oppo_img = $fileNameToStore;
                    $images->save();
                }

            }
        }

        return redirect()->route('opportunities.show', $request->get('opportunities_id'));
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
