<?php

namespace App\Http\Controllers;
use App\newsfeed;
use App\opportunies;
use Illuminate\Http\Request;
use DB;

class NewsfeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = newsfeed::orderBy('id','DESC')->paginate(10);
        return view('backend.newsfeed.index')->with('data',$data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasFile('img')){
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('img')->storeAs('public/images',$fileNameToStore);

        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $request->validate([
            "img"=> "required",
            "newsfeed_title"=> "required",
            'newsfeed_text'=> "required"
        ]);

        $data = new newsfeed;
        $data->img=$fileNameToStore;
        $data->newsfeed_title=$request->input('newsfeed_title');
        $data->newsfeed_text=$request->input('newsfeed_text');
        $data->save();

        $notification = array(
            'message' => 'Successfully get laravel data!',
            'alert-type' => 'success'
        );
            return redirect('newsfeed/view')->with($notification);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = newsfeed::find($id);
        $images = \DB::table('newsfeeds')
                    ->join('images', 'images.new_id', '=', 'newsfeeds.id')
                    ->get();
        return view('backend.newsfeed.show', compact('data', 'images'));
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
        $data = newsfeed::find($id);
        $data ->delete();

        return \Redirect::to('/newsfeed')->with('alert', 'Delete Successfully!');
    }

    public function newsbody($id){

        $news = DB::table('newsfeeds')
        ->where('id',$id)
        ->get();

        $news_recent = newsfeed::orderBy('id', 'DESC')
        ->get()
        ->take(6);

        $opportunities_recent = opportunies::orderBy('id', 'DESC')
        ->get()
        ->take(6);

        $newsfeed_images = DB::table('images')
        ->where('new_id',$id)
        ->orderBy('id', 'DESC')
        ->get()
        ->take(3);

        return view('partial._news-body',compact('news','news_recent','opportunities_recent','newsfeed_images'));

    }


    public function display_allnews(){

        $news = newsfeed::latest()->get();
        return view('partial._all-news-feeds',compact('news'));
    }


}
