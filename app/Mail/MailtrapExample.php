<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MailtrapExample extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $items;

    public function __construct($items)
    {
        $this->items = $items;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
public function build(Request $request)
    {
        // $file = $request->file('cv');
        // $fileName = $file->getClientOriginalName();
        // $request->file('cv')->move("cv/", $fileName);

        // dd($request);
        if($request->hasFile('cv')){
            $file = $request->file('cv');
            $fileName = $file->getClientOriginalName();
            $request->file('cv')->move("cv", $fileName);

        // dd($request);
            $this->from('fsiapco@gmail.com', 'Gmail')
                ->subject('Resume')
                ->markdown('exmpl')
                ->subject("Applicant's Resume")
                ->attach(public_path('cv/'.$fileName))
                ->with([
                    'attachment' => $fileName
                ]);

                // return view('index');
        }else{
          dd('noimage.jpg');
        }



    }
}
