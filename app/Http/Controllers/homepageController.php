<?php

namespace App\Http\Controllers;
use App\contact_history;
use Mail;
use Illuminate\Http\Request;

class homepageController extends Controller
{
    // 
    public function faq(){
        return view("faq");
    }

    public function contactUs(){
        return view("contactus");
    }

    public function aboutUs(){
        return view("about");
    }

    public function gallery(){
        return view("gallery");
    }

    public function ourServices(){
        return view("our-services");
    }

    public function ourTeam(){
        return view("our-team");
    }

    public function contactusConfirm(){

            /* Validate the input */
        $this->validate( request() , array(

            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ));
        // return request()->all();

          //submit to the database
        $tola = new contact_history();
        $tola->fullname = request()->fullname;
        $tola->email = request()->email;
        $tola->phone = request()->phone;
        $tola->subject = request()->subject;
        $tola->message = request()->message;
        $tola->save();

       //save all request into data
          $data = array (
            'fullname' => request()->fullname,
            'email' => request()->email,
            'phone' => request()->phone,
            'subject' => request()->subject,
            'description' => request()->message,
            'admin_email' => 'admin@fipl.ng',
            'created_at' => $tola->created_at,

        );
        
        //send mail to admin
        Mail::send('emails.contact_notification',$data, function($m) use($data){
            $m->to($data['admin_email'])->subject('Contact us Notification');
        });

        //return back
        session()->flash('success_report','Contact Form submitted successfully!!');
        return back();
    }
}
