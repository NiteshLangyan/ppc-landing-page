<?php

namespace App\Http\Controllers;
 
use App\Models\admin;
use App\Models\banner;
use App\Models\about; 
use App\Models\serviceoffered; 
use App\Models\sectionfive; 
use App\Models\sectionsix; 
use App\Models\initialInvestment; 
use App\Models\contactuscontent; 
use App\Models\faqs; 
use App\Models\faqfeatured;  
use App\Models\Footeradd;
use App\Models\Headeradd;
use App\Models\Social;  
use App\Models\setting; 
use App\Models\slider; 
use App\Models\contact; 
use App\Models\selectboxsone;
use App\Models\selectboxstwo;
use App\Models\selectboxsthree; 
use Mail;
 
use Illuminate\Http\Request;

class Homecontroller extends Controller
{

    public function index(){ 
        $banner = banner::first();
        $about = about::first(); 
        $serviceoffered = serviceoffered::first(); 
        $slider = slider::orderBy('sort')->get(); 
        $sectionfive = sectionfive::first(); 
        $sectionsix = sectionsix::first();  
        $initialInvestment = initialInvestment::first();  
        $contactuscontent = contactuscontent::first();  
        $faqfeatured = faqfeatured::first();  
        $Footeradd = Footeradd::first();  
        $Headeradd = Headeradd::first();   
        $setting = setting::first();   
        // dd($setting);
        $faqs = faqs::orderBy('sort')->get(); 
        $selectboxsone = selectboxsone::orderBy('sort')->get(); 
        $selectboxstwo = selectboxstwo::orderBy('sort')->get(); 
        $selectboxsthree = selectboxsthree::orderBy('sort')->get(); 

        return view('front.index')->with(compact('banner','about','slider','serviceoffered','sectionfive','sectionsix','initialInvestment','contactuscontent','faqfeatured','faqs','Footeradd','Headeradd','selectboxsone','selectboxstwo','selectboxsthree','setting')); 
    }

    public function termconditions(){ 
        $Footeradd = Footeradd::first();  
        $Headeradd = Headeradd::first();   
        $setting = setting::first();     
        return view('front.term-conditions')->with(compact('Footeradd','Headeradd','setting')); 
    }
    
    public function privacypolicy(){    
        $Footeradd = Footeradd::first();  
        $Headeradd = Headeradd::first();   
        $setting = setting::first();     
        return view('front.privacy-policy')->with(compact('Footeradd','Headeradd','setting')); 
    }
     


        
    public function contact(Request $request)
    {
        if ($request->all()) {
         
            $request->validate(
                [
                'name'=>'required',
                'email'=>'required|email',
                'phone'=>'required', 
                ]
            );
           
            $contact = new contact();
            $contact->name = $request['name'];
            $contact->email = $request['email'];
            $contact->phone = $request['phone'];
            $contact->interestedinchicken = $request['interestedinchicken'];
            $contact->qualifiedtofranchisee = $request['qualifiedtofranchisee'];
            $contact->areaofinterest = $request['areaofinterest'];
            $contact->selectboxone = selectboxsone::where('id',$request['selectboxone'])->value('heading'); 
            $contact->selectboxtwo = selectboxstwo::where('id',$request['selectboxtwo'])->value('heading'); 
            $contact->selectboxthree = selectboxsthree::where('id',$request['selectboxthree'])->value('heading'); 
            $contact->save();
           
            $areaofinterest = $contact->areaofinterest;
            $qualifiedtofranchisee = $contact->qualifiedtofranchisee;
            $interestedinchicken = $contact->interestedinchicken;
        
            // $to_email = "gouravsainicoderzbar@gmail.com";     
            $data = array(
                'name' => $request->name, 
                'phone' => $request->phone,
                'email' => $request->email,
                'areaofinterest' => $areaofinterest,
                'qualifiedtofranchisee' => $qualifiedtofranchisee,
                'interestedinchicken' => $interestedinchicken,
                'query1' => $contact->selectboxone,
                'query2' => $contact->selectboxtwo,
                'query3' => $contact->selectboxthree
            );

            $setting = setting::first();

            $toEmails = $setting->toEmail;

// Explode the comma separated email addresses into an array
$toEmailArray = explode(',', $toEmails);
$fromaddress = 'test@gmail.com';

// Loop through each email address and send mail
foreach ($toEmailArray as $to_email) {
    Mail::send('front.contactform', $data, function ($message) use ($to_email,$fromaddress) {
        $message
        //->from($fromaddress)
        ->to(trim($to_email))->subject('New Contact Form Submission');
    });
}


            // $to_email =  $setting->toEmail;
            // Mail::send('front.contactform', $data, function ($message) use ($to_email) {
            //     $message->to($to_email)->subject('New Contact Form Submission');
            // });

            return back()->with('succ', 'Your Form has Been submitted. We will Contact you soon');

        } else {
            return view('front.contact');
        }
    }


    


}
