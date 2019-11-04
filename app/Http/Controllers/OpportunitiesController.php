<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\opportunies;
use App\newsfeed;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailtrapExample;

class OpportunitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = opportunies::orderBy('id','DESC')->paginate(10);
        return view('backend.opportunities.index')->with('data',$data);
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


        $request->validate([

            "oppo_title"=> "required",
            'oppo_text'=> "required"
        ]);

        $data = new opportunies;
        $data->oppo_title=$request->input('oppo_title');
        $data->oppo_text=$request->input('oppo_text');
        $data->save();

        $notification = array(
            'message' => 'Successfully Save!',
            'alert-type' => 'success'
        );
            return redirect('/opportunities/add')->with($notification);




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = opportunies::find($id);
        $images = \DB::table('opportunies')
                    ->join('opportunities_images', 'opportunities_images.oppo_id', '=', 'opportunies.id')
                    ->get();
        return view('backend.opportunities.show', compact('data', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = opportunies::find($id);
        $images = \DB::table('opportunies')
                    ->join('opportunities_images', 'opportunities_images.oppo_id', '=', 'opportunies.id')
                    ->get();
        return view('backend.opportunities.show', compact('data', 'images'));
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
        $data = opportunies::find($id);
        $data ->delete();

        return \Redirect::to('/opportunities')->with('alert', 'Delete Successfully!');
    }

    public function opportunitiesbody($id){
        $opportunities = DB::table('opportunies')
        ->where('id',$id)
        ->get();

        $news_recent = newsfeed::orderBy('id', 'DESC')
        ->get()
        ->take(6);

        $opportunities_recent = opportunies::orderBy('id', 'DESC')
        ->get()
        ->take(6);

        $Opportunities_images = DB::table('opportunities_images')
                                ->where('oppo_id',$id)
                                ->orderBy('id', 'DESC')
                                ->get()
                                ->take(3);

        return view('partial._opportunies-body',compact('opportunities','news_recent','opportunities_recent','Opportunities_images'));
    }

    public function fileUpload(Request $request){

        Mail::to('fsiapco@gmail.com')->send(new MailtrapExample($request));

        return 'A message has been sent to the Admin!';


        // $request->validate([
        //     "cv"=> "required",
        // ]);
        // $CV = $request->input('cv');
    }

}
