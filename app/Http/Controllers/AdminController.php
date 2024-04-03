<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use App\Models\contact;
use App\Models\selectboxsone;
use App\Models\selectboxstwo;
use App\Models\selectboxsthree; 
use App\Models\Footeradd;
use App\Models\Headeradd;
use App\Models\Social;  
use App\Models\setting; 
use App\Models\termconditions; 
use App\Models\privacypolicy; 
use App\Models\slider; 
use Hash;
use Session;
use Mail;
use Str;

use function PHPUnit\Framework\isNull;

class AdminController extends Controller
{
    //|--------------------------------------------------------------------------
    //|--------------------------------------------------------------------------
    public function login(Request $request)
    {
        if (!empty($request->all())) {
            $request->validate(
                [
                    'email' => 'required|email',
                    'password' => 'required|min:6'
                ]
            );
            $admin =  admin::where('email', '=', $request->email)->first();
            if ($admin) {
                if (Hash::check($request->password, $admin->password)) {
                    $request->session()->put('adminloginid', $admin->id);
                    return redirect()->to('adm/dashboard');
                } else {
                    return back()->with('fail', 'Password does not match');
                }
            } else {
                return back()->with('fail', 'Email not registred');
            }
        } else {
            return view('admin.login');
        }
    }
 
    //|--------------------------------------------------------------------------
    //|-------------------------------------------------------------------------- 

    public function homesectiononeadd(Request $request)
{
    $title = "Banner";
    $url = url('adm/homesectiononeadd'); 
    $applicantin =  banner::first();
    $data = compact('title', 'url','applicantin');
    //dd($jobs);

 
    if (!empty($request->all())) {
        if ($request->file('image')) {
            $image = rand() . 'image.' . $request->file('image')->getClientOriginalExtension();
            $inimage = $request->file('image')->storeAs('public/admin', $image);
        } else {
            $inimage = $applicantin->image;
        }
  
        $request->validate(
            [
                'heading' => 'required',
                'subheading' => 'required',
                'description' => 'required', 
            ]
        );



        $applicantin = banner::first();
        $applicantin->image = $inimage; 
        $applicantin->heading = $request['heading'];
        $applicantin->subheading = $request['subheading'];
        $applicantin->description = $request['description'];  
        $applicantin->save();
        return redirect('adm/homesectiononeadd')->with('success', 'Data Inserted Successfully');
    } else {
        return view('admin.homesectionone')->with($data);
    }
    }
    //|--------------------------------------------------------------------------
    //|--------------------------------------------------------------------------

    public function contact(Request $request)
    {
        $title="contact";
        $url=url('adm/contact');
        $contact =  contact::orderBy('created_at','DESC')->get();
        $data= compact('contact', 'title', 'url');
        return view('admin.contact')->with($data);
    }
    public function contactdelete($id)
    {
        $result = contact::find($id);
        if (is_null($result)) {
            return back()->with('fail', 'No Record Found');
        } else {
            $result->delete();
            return back()->with('success', 'Data Delete Successfully');
        }
    }

    public function homesectiontwoadd(Request $request)
{
    $title = "About Section";
    $url = url('adm/homesectiontwoadd'); 
    $dataId =  about::first();
    $data = compact('title', 'url','dataId');
    //dd($jobs);
 
    if (!empty($request->all())) {
        if ($request->file('firstImage')) {
            $firstImage = rand() . 'firstImage.' . $request->file('firstImage')->getClientOriginalExtension();
            $firstImage = $request->file('firstImage')->storeAs('public/admin', $firstImage);
        } else {
            $firstImage = $dataId->firstImage;
        }
        if ($request->file('secondImage')) {
            $secondImage = rand() . 'secondImage.' . $request->file('secondImage')->getClientOriginalExtension();
            $secondImage = $request->file('secondImage')->storeAs('public/admin', $secondImage);
        } else {
            $secondImage = $dataId->secondImage;
        }
        if ($request->file('thirdImage')) {
            $thirdImage = rand() . 'thirdImage.' . $request->file('thirdImage')->getClientOriginalExtension();
            $thirdImage = $request->file('thirdImage')->storeAs('public/admin', $thirdImage);
        } else {
            $thirdImage = $dataId->thirdImage;
        }

           
        $request->validate(
            [
                'btnText' => 'required',
                'btnLink' => 'required',
                'firstDescription' => 'required',
                'secondDescription' => 'required',
            ]
        );
  
        $obj = about::first();
        $obj->firstImage = $firstImage;
        $obj->secondImage = $secondImage;
        $obj->thirdImage = $thirdImage;

        $obj->btnText = $request['btnText'];  
        $obj->btnLink = $request['btnLink'];  
        $obj->firstDescription = $request['firstDescription'];  
        $obj->secondDescription = $request['secondDescription'];    
        $obj->save();
        return redirect('adm/homesectiontwoadd')->with('success', 'Data Inserted Successfully');
    } else {
        return view('admin.homesectiontwo')->with($data);
    }
    }

    
//----------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------- 
public function allslider()
{

    $addnewtext = "Slider";
    $addnewurl = url('adm/slider');
    $title = "Sliding text";
    $slider =  slider::orderBy('sort','ASC')->get();
    $data = compact('title', 'slider', 'addnewtext', 'addnewurl');
    return view('admin.allslider')->with($data);
}

public function slider(Request $request)
{
    if(!empty($request->all())){
        
       $insert=new slider();
       $insert->sort=$request->sort;
       $insert->firstText =$request->firstText;  
       $insert->secondText=$request->secondText;  
       $insert->save();
       return redirect('adm/allslider')->with('success', 'Data Updated Successfully');
    }else{

        $addnewtext = "";
        $addnewurl = "";
        $title = "Add Slider";
        $url=url('adm/slider');
        $data = compact('title','addnewtext', 'addnewurl','url'); 
        return view('admin.slider')->with($data); 
    }

}

public function editslider($id,Request $request)
{
    if(!empty($request->all())){ 
       $update=slider::find($id);
       $update->sort=$request->sort;
       $update->firstText=$request->firstText;  
       $update->secondText=$request->secondText;  
       $update->save();
       return redirect('adm/allslider')->with('success', 'Data Updated Successfully');
    }else{ 
        $addnewtext = "";
        $addnewurl = "";
        $title = "Edit Slider";
        $url=url('adm/slider/'.$id);
        $slider=slider::find($id);
        $data = compact('title','addnewtext', 'addnewurl','url','slider'); 
        return view('admin.slider')->with($data); 
    }

}

public function sliderdel($id)
{
    $result = slider::find($id);
    if (is_null($result)) {
        return back()->with('fail', 'No Record Found');
    } else {
        $result->delete();
        return back()->with('success', 'Data Delete Successfully');
    } 
}


//|--------------------------------------------------------------------------
//|--------------------------------------------------------------------------

public function serviceoffered(Request $request)
{ 
 if (!empty($request->all())) {
         $dataId =  serviceoffered::first();

        if ($request->file('firstImage')) {
            $firstImage = rand() . 'firstImage.' . $request->file('firstImage')->getClientOriginalExtension();
            $firstImage = $request->file('firstImage')->storeAs('public/admin', $firstImage);
        } else {
            $firstImage = $dataId->firstImage;
        }
        
        if ($request->file('secondImage')) {
            $secondImage = rand() . 'secondImage.' . $request->file('secondImage')->getClientOriginalExtension();
            $secondImage = $request->file('secondImage')->storeAs('public/admin', $secondImage);
        } else {
            $secondImage = $dataId->secondImage;
        }
  
        $request->validate(
            [
                'heading' => 'required', 
                'description' => 'required', 
            ]
        );
 
        $insert = serviceoffered::first();
        $insert->firstImage = $firstImage; 
        $insert->secondImage = $secondImage; 
        $insert->heading = $request['heading']; 
        $insert->description = $request['description'];  
        $insert->videoLink = $request['videoLink'];  
        $insert->save();
        return redirect('adm/serviceoffered')->with('success', 'Data Inserted Successfully');
    }  
        $title = "Services Offered";
        $url = url('adm/serviceoffered'); 
        $dataId =  serviceoffered::first();
        $data = compact('title', 'url', 'dataId'); 
        return view('admin.serviceoffered')->with($data);
   
    }
 
//|--------------------------------------------------------------------------
//|--------------------------------------------------------------------------

public function sectionfive(Request $request)
{ 
 if (!empty($request->all())) {
         $dataId =  sectionfive::first();
      

        if ($request->file('firstImage')) {
            $firstImage = rand() . 'firstImage.' . $request->file('firstImage')->getClientOriginalExtension();
            $firstImage = $request->file('firstImage')->storeAs('public/admin', $firstImage);
        } else {
            $firstImage = $dataId->firstImage;
        }
        
        if ($request->file('secondImage')) {
            $secondImage = rand() . 'secondImage.' . $request->file('secondImage')->getClientOriginalExtension();
            $secondImage = $request->file('secondImage')->storeAs('public/admin', $secondImage);
        } else {
            $secondImage = $dataId->secondImage;
        }
  
     
 
        $insert = sectionfive::first();
        $insert->firstImage = $firstImage; 
        $insert->secondImage = $secondImage; 
        $insert->heading = $request['heading']; 
        $insert->firstDescription = $request['firstDescription'];  
        $insert->secondDescription = $request['secondDescription'];  
        $insert->firstVideoLink = $request['firstVideoLink'];  
        $insert->secondVideoLink = $request['secondVideoLink'];  
        $insert->save();
        return redirect('adm/sectionfive')->with('success', 'Data Inserted Successfully');
    }  
        $title = "Inquire Today";
        $url = url('adm/sectionfive'); 
        $dataId =  sectionfive::first();
        $data = compact('title', 'url', 'dataId'); 
        return view('admin.sectionfive')->with($data);
   
    }

    
//|--------------------------------------------------------------------------
//|--------------------------------------------------------------------------

public function sectionsix(Request $request)
{ 
 if (!empty($request->all())) {
         $dataId =  sectionsix::first();
      

        if ($request->file('image')) {
            $image = rand() . 'image.' . $request->file('image')->getClientOriginalExtension();
            $image = $request->file('image')->storeAs('public/admin', $image);
        } else {
            $image = $dataId->image;
        }
         
        $insert = sectionsix::first();
        $insert->image = $image;  
        $insert->heading = $request['heading']; 
        $insert->firstHeading = $request['firstHeading'];  
        $insert->firstDescription = $request['firstDescription'];   
        $insert->secondHeading = $request['secondHeading'];  
        $insert->secondDescription = $request['secondDescription'];   
        $insert->thirdHeading = $request['thirdHeading'];  
        $insert->thirdDescription = $request['thirdDescription'];   
        $insert->save();
        return redirect('adm/sectionsix')->with('success', 'Data Inserted Successfully');
    }  
        $title = "Revenue & brand section";
        $url = url('adm/sectionsix'); 
        $dataId =  sectionsix::first();
        $data = compact('title', 'url', 'dataId'); 
        return view('admin.sectionsix')->with($data);
   
    }

    
//|--------------------------------------------------------------------------
//|--------------------------------------------------------------------------

public function initialInvestment(Request $request)
{ 
 if (!empty($request->all())) {
         $dataId =  initialInvestment::first();
      

        if ($request->file('image')) {
            $image = rand() . 'image.' . $request->file('image')->getClientOriginalExtension();
            $image = $request->file('image')->storeAs('public/admin', $image);
        } else {
            $image = $dataId->image;
        }
         
        $insert = initialInvestment::first();
        $insert->image = $image;  
        $insert->heading = $request['heading']; 
        $insert->priceOne = $request['priceOne'];  
        $insert->descriptionOne = $request['descriptionOne']; 
        $insert->priceTwo = $request['priceTwo'];  
        $insert->descriptionTwo = $request['descriptionTwo'];    
        $insert->priceThree = $request['priceThree'];  
        $insert->descriptionThree = $request['descriptionThree'];       
        $insert->save();

        return redirect('adm/initialInvestment')->with('success', 'Data Inserted Successfully');
    }  
        $title = "Initial Investment ";
        $url = url('adm/initialInvestment'); 
        $dataId =  initialInvestment::first();
        $data = compact('title', 'url', 'dataId'); 
        return view('admin.initialInvestment')->with($data);
   
    } 

    
//|--------------------------------------------------------------------------
//|--------------------------------------------------------------------------

public function contactuscontent(Request $request)
{ 
 if (!empty($request->all())) {
         $dataId =  contactuscontent::first();
       
        $insert = contactuscontent::first(); 
        $insert->heading = $request['heading']; 
        $insert->description = $request['description'];         
        $insert->save();

        return redirect('adm/contactuscontent')->with('success', 'Data Inserted Successfully');
    }  
        $title = "Initial Investment ";
        $url = url('adm/contactuscontent'); 
        $dataId =  contactuscontent::first();
        $data = compact('title', 'url', 'dataId'); 
        return view('admin.contactuscontent')->with($data); 
    } 


//|--------------------------------------------------------------------------
//|--------------------------------------------------------------------------

public function faqfeatured(Request $request)
{ 
 if (!empty($request->all())) {
         $dataId =  faqfeatured::first(); 
        if ($request->file('image')) {
            $image = rand() . 'image.' . $request->file('image')->getClientOriginalExtension();
            $image = $request->file('image')->storeAs('public/admin', $image);
        } else {
            $image = $dataId->image;
        }
         
        $insert = faqfeatured::first();
        $insert->image = $image;  
        $insert->heading = $request['heading'];   
        $insert->save();

        return redirect('adm/faqfeatured')->with('success', 'Data Inserted Successfully');
    }  
        $title = "Faq";
        $url = url('adm/faqfeatured'); 
        $dataId =  faqfeatured::first();
        $data = compact('title', 'url', 'dataId'); 
        return view('admin.faqfeatured')->with($data);
   
    } 
    //----------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------- 
public function allfaqs()
{

    $addnewtext = "faqs";
    $addnewurl = url('adm/faqs');
    $title = "faqs";
    $dataall =  faqs::orderBy('sort','ASC')->get();
    $data = compact('title', 'dataall', 'addnewtext', 'addnewurl');
    return view('admin.allfaqs')->with($data);
}

public function faqs(Request $request)
{
    if(!empty($request->all())){
        
       $insert=new faqs();
       $insert->sort=$request->sort;
       $insert->question =$request->question;  
       $insert->answer=$request->answer;  
       $insert->save();
       return redirect('adm/allfaqs')->with('success', 'Data Updated Successfully');
    }else{

        $addnewtext = "";
        $addnewurl = "";
        $title = "Add faqs";
        $url=url('adm/faqs');
        $data = compact('title','addnewtext', 'addnewurl','url'); 
        return view('admin.faqs')->with($data); 
    }

}

public function editfaqs($id,Request $request)
{
    if(!empty($request->all())){ 
       $update=faqs::find($id);
       $update->sort=$request->sort;
       $update->question=$request->question;  
       $update->answer=$request->answer;  
       $update->save();
       return redirect('adm/allfaqs')->with('success', 'Data Updated Successfully');
    }else{ 
        $addnewtext = "";
        $addnewurl = "";
        $title = "Edit faqs";
        $url=url('adm/faqs/'.$id);
        $dataId =faqs::find($id);
        $data = compact('title','addnewtext', 'addnewurl','url','dataId'); 
        return view('admin.faqs')->with($data); 
    }

}

public function faqsdel($id)
{
    $result = faqs::find($id);
    if (is_null($result)) {
        return back()->with('fail', 'No Record Found');
    } else {
        $result->delete();
        return back()->with('success', 'Data Delete Successfully');
    } 
}
    //|--------------------------------------------------------------------------
    //|--------------------------------------------------------------------------
    public function dash()
    {
        $title = "Dashboard";
        $data = compact('title');
        return view('admin.dash')->with($data);
    }

    //|--------------------------------------------------------------------------
    //|--------------------------------------------------------------------------
    public function changepassword(Request $request)
    {
        $title = "Change Password";
        $url = url('adm/changepassword');
        $data = compact('title', 'url');

        if (!empty($request->all())) {
            $request->validate(
                [
                'cpassword' => 'required',
                'password' => 'required|confirmed|min:6',
                'password_confirmation' => 'required|min:6'
                ]
            );
            $admin =  admin::where('id', '=', Session::get('adminloginid'))->first();

            if ($admin) {
                if (Hash::check($request->cpassword, $admin->password)) {
                    $adminch = admin::find($admin['id']);
                    $adminch->password = Hash::make($request['password']);
                    $adminch->save();

                    return back()->with('success', 'Password Changed Successfully');
                } else {
                    return back()->with('fail', '<b>Wrong</b> Current Password');
                }
            } else {
                return back()->with('fail', 'Error');
            }
        } else {
            return view('admin.changepassword')->with($data);
        }
    }
 



    public function setting(Request $request)
    {
        $id = '1';
        $title = "Edit setting";
        $url = url('adm/setting');
        $setting =  setting::all();
        $settingid =  setting::find($id);
        $data = compact('title', 'url', 'setting', 'settingid');
        if (!empty($request->all())) {
 
            $request->validate(
                [
                    'msettingname' => 'required',
                    'keywords' => 'required',
                    'mdesp' => 'required',
                ]
            );
            // if ($request->file('headlogo')) {
            //     $nheadlogo = rand().'image.'.$request->file('headlogo')->getClientOriginalExtension() ;
            //     $rounheadlogo = $request->file('headlogo')->storeAs('public/logos', $nheadlogo);
            // } else {
            //     $rounheadlogo = $settingid->headlogo;
            // }
            // if ($request->file('footlogo')) {
            //     $nfootlogo = rand().'image.'.$request->file('footlogo')->getClientOriginalExtension() ;
            //     $rounfootlogo = $request->file('footlogo')->storeAs('public/logos', $nfootlogo);
            // } else {
            //     $rounfootlogo = $settingid->footlogo;
            // }
            // if ($request->file('favlogo')) {
            //     $nfavlogo = rand().'image.'.$request->file('favlogo')->getClientOriginalExtension() ;
            //     $rounfavlogo = $request->file('favlogo')->storeAs('public/logos', $nfavlogo);
            // } else {
            //     $rounfavlogo = $settingid->favlogo;
            // }
            // if ($request->file('mimage')) {
            //     $mblogimage = rand().'mimage.'.$request->file('mimage')->getClientOriginalExtension() ;
            //     $routmblogimage = $request->file('mimage')->storeAs('public/mblogimage', $mblogimage);
            // } else {
            //     $routmblogimage = $settingid->mimage;
            // }

            $settingin = setting::find($id);
            $settingin->msettingname = $request['msettingname'];
            $settingin->keywords = $request['keywords'];
            $settingin->mdesp = $request['mdesp'];
            $settingin->script = $request['script'];
            $settingin->footertext = $request['footertext'];
            $settingin->toEmail = $request['toEmail'];
            $settingin->fromEmail = $request['fromEmail'];
            // $settingin->mimage = $routmblogimage;
            // $settingin->headlogo = $rounheadlogo;
            // $settingin->footlogo = $rounfootlogo;
            // $settingin->favlogo = $rounfavlogo;

         


            $settingin->save();
            return redirect('adm/setting')->with('success', 'setting Data Updated Successfully');
        } else {
            return view('admin.setting')->with($data);
        }
    }


  
 
//----------------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------


public function social(Request $request)
{
    $title = "Add Social";
    $url = url('adm/socials');
    $socialin =  Social::first();
    $data = compact('title', 'url','socialin');
    //dd($jobs);




    if (!empty($request->all())) {



       //dd($request->all());
        $request->validate(
            [
                'linktree' => 'required',
                'twiter' => 'required',
                'telegram' => 'required',
                'email' => 'required',
            ]
        );



        $socialin = Social::first();
        $socialin->linktree = $request['linktree'];
        $socialin->twiter = $request['twiter'];
        $socialin->telegram = $request['telegram'];
        $socialin->email = $request['email'];
        // dd($jobsin);
        $socialin->save();
        return redirect('adm/socials')->with('success', 'Data Inserted Successfully');
    } else {
        return view('admin.social')->with($data);
    }
    }

     //|--------------------------------------------------------------------------
    //|--------------------------------------------------------------------------

    public function footeradd(Request $request)
{
    $title = "Add footer";
    $url = url('adm/footercontent');
    $socialin =  Footeradd::first();
    $data = compact('title', 'url','socialin');
    //dd($jobs);

 

    if (!empty($request->all())) {
        if ($request->file('footerLogo')) {
            $footerLogo = rand() . 'footerLogo.' . $request->file('footerLogo')->getClientOriginalExtension();
            $infooterLogo = $request->file('footerLogo')->storeAs('public/admin', $footerLogo);
        } else {
            $infooterLogo = $socialin->footerLogo;
        }
  
        $socialin = Footeradd::first();
        $socialin->footerLogo = $infooterLogo;
        $socialin->heading = $request['heading'];
        $socialin->description = $request['description']; 
        $socialin->description2 = $request['description2']; 
        $socialin->description3 = $request['description3']; 
        // dd($jobsin);
        $socialin->save();
        return redirect('adm/footercontent')->with('success', 'Data Inserted Successfully');
    } else {
        return view('admin.footercontent')->with($data);
    }
    }

   //|--------------------------------------------------------------------
//|--------------------------------------------------------------------
    public function headeradd(Request $request)
{
    $title = "Add Header";
    $url = url('adm/headercontent');
    $socialin =  Headeradd::first();
    $data = compact('title', 'url','socialin'); 

    if (!empty($request->all())) {
        if ($request->file('image')) {
            $image = rand() . 'image.' . $request->file('image')->getClientOriginalExtension();
            $inimage = $request->file('image')->storeAs('public/admin', $image);
        } else {
            $inimage = $socialin->image;
        }
 

        $socialin = Headeradd::first();
        $socialin->image = $inimage;
        $socialin->link = $request['link'];
        // dd($jobsin);
        $socialin->save();
        return redirect('adm/headercontent')->with('success', 'Data Inserted Successfully');
    } else {
        return view('admin.headercontent')->with($data);
    }
    }

 
//----------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------- 
public function allselectboxsone()
{

    $addnewtext = "Select Option";
    $addnewurl = url('adm/selectboxsone');
    $title = "Select Option";
    $selectboxsone =  selectboxsone::orderBy('sort','ASC')->get();
    $data = compact('title', 'selectboxsone', 'addnewtext', 'addnewurl');
    return view('admin.allselectboxsone')->with($data);
}

public function selectboxsone(Request $request)
{
    if(!empty($request->all())){
        
       $insert=new selectboxsone();
       $insert->sort=$request->sort;
       $insert->heading =$request->heading;   
       $insert->save();
       return redirect('adm/allselectboxsone')->with('success', 'Data Updated Successfully');
    }else{

        $addnewtext = "";
        $addnewurl = "";
        $title = "Add Option";
        $url=url('adm/selectboxsone');
        $data = compact('title','addnewtext', 'addnewurl','url'); 
        return view('admin.selectboxsone')->with($data); 
    }

}

public function editselectboxsone($id,Request $request)
{
    if(!empty($request->all())){ 
       $update=selectboxsone::find($id);
       $update->sort=$request->sort;
       $update->heading=$request->heading;   
       $update->save();
       return redirect('adm/allselectboxsone')->with('success', 'Data Updated Successfully');
    }else{ 
        $addnewtext = "";
        $addnewurl = "";
        $title = "Edit Option";
        $url=url('adm/selectboxsone/'.$id);
        $selectboxsone =selectboxsone::find($id);
        $data = compact('title','addnewtext', 'addnewurl','url','selectboxsone'); 
        return view('admin.selectboxsone')->with($data); 
    }

}

public function selectboxsonedel($id)
{
    $result = selectboxsone::find($id);
    if (is_null($result)) {
        return back()->with('fail', 'No Record Found');
    } else {
        $result->delete();
        return back()->with('success', 'Data Delete Successfully');
    } 
}

//----------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------- 
public function allselectboxstwo()
{

    $addnewtext = "Select Option";
    $addnewurl = url('adm/selectboxstwo');
    $title = "Select Option";
    $selectboxstwo =  selectboxstwo::orderBy('sort','ASC')->get();
    $data = compact('title', 'selectboxstwo', 'addnewtext', 'addnewurl');
    return view('admin.allselectboxstwo')->with($data);
}

public function selectboxstwo(Request $request)
{
    if(!empty($request->all())){
        
       $insert=new selectboxstwo();
       $insert->sort=$request->sort;
       $insert->heading =$request->heading;   
       $insert->save();
       return redirect('adm/allselectboxstwo')->with('success', 'Data Updated Successfully');
    }else{

        $addnewtext = "";
        $addnewurl = "";
        $title = "Add Option";
        $url=url('adm/selectboxstwo');
        $data = compact('title','addnewtext', 'addnewurl','url'); 
        return view('admin.selectboxstwo')->with($data); 
    }

}

public function editselectboxstwo($id,Request $request)
{
    if(!empty($request->all())){ 
       $update=selectboxstwo::find($id);
       $update->sort=$request->sort;
       $update->heading=$request->heading;   
       $update->save();
       return redirect('adm/allselectboxstwo')->with('success', 'Data Updated Successfully');
    }else{ 
        $addnewtext = "";
        $addnewurl = "";
        $title = "Edit Option";
        $url=url('adm/selectboxstwo/'.$id);
        $selectboxstwo =selectboxstwo::find($id);
        $data = compact('title','addnewtext', 'addnewurl','url','selectboxstwo'); 
        return view('admin.selectboxstwo')->with($data); 
    }

}

public function selectboxstwodel($id)
{
    $result = selectboxstwo::find($id);
    if (is_null($result)) {
        return back()->with('fail', 'No Record Found');
    } else {
        $result->delete();
        return back()->with('success', 'Data Delete Successfully');
    } 
}




//----------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------- 
public function allselectboxsthree()
{

    $addnewtext = "Select Option";
    $addnewurl = url('adm/selectboxsthree');
    $title = "Select Option";
    $selectboxsthree =  selectboxsthree::orderBy('sort','ASC')->get();
    $data = compact('title', 'selectboxsthree', 'addnewtext', 'addnewurl');
    return view('admin.allselectboxsthree')->with($data);
}

public function selectboxsthree(Request $request)
{
    if(!empty($request->all())){
        
       $insert=new selectboxsthree();
       $insert->sort=$request->sort;
       $insert->heading =$request->heading;   
       $insert->save();
       return redirect('adm/allselectboxsthree')->with('success', 'Data Updated Successfully');
    }else{

        $addnewtext = "";
        $addnewurl = "";
        $title = "Add Option";
        $url=url('adm/selectboxsthree');
        $data = compact('title','addnewtext', 'addnewurl','url'); 
        return view('admin.selectboxsthree')->with($data); 
    }

}

public function editselectboxsthree($id,Request $request)
{
    if(!empty($request->all())){ 
       $update=selectboxsthree::find($id);
       $update->sort=$request->sort;
       $update->heading=$request->heading;   
       $update->save();
       return redirect('adm/allselectboxsthree')->with('success', 'Data Updated Successfully');
    }else{ 
        $addnewtext = "";
        $addnewurl = "";
        $title = "Edit Option";
        $url=url('adm/selectboxsthree/'.$id);
        $selectboxsthree =selectboxsthree::find($id);
        $data = compact('title','addnewtext', 'addnewurl','url','selectboxsthree'); 
        return view('admin.selectboxsthree')->with($data); 
    }

}

public function selectboxsthreedel($id)
{
    $result = selectboxsthree::find($id);
    if (is_null($result)) {
        return back()->with('fail', 'No Record Found');
    } else {
        $result->delete();
        return back()->with('success', 'Data Delete Successfully');
    } 
}


public function privacypolicy(Request $request)
{
    $title="privacy policy";
    $url=url('adm/privacypolicy');
    $dataperid = privacypolicy::first();
    $data= compact('title', 'url','dataperid');

    if (!empty($request->all())) {
                $contactinfo = privacypolicy::firstOrNew();
                // $contactinfo->heading = $request->heading;
                $contactinfo->description = $request->description;
                $contactinfo->save();
                return back()->with('success', 'Data updated Successfully');
    } else {
        return view('admin.privacypolicy')->with($data);
    }
}

public function termconditions(Request $request)
{
    $title="Terms & Conditions";
    $url=url('adm/termconditions');
    $dataperid = termconditions::first();
    $data= compact('title', 'url','dataperid');

    if (!empty($request->all())) {
                $contactinfo = termconditions::firstOrNew();
                // $contactinfo->heading = $request->heading;
                $contactinfo->description = $request->description;
                $contactinfo->save();
                return back()->with('success', 'Data updated Successfully');
    } else {
        return view('admin.termconditions')->with($data);

    }
}


  //|--------------------------------------------------------------------------
    //|--------------------------------------------------------------------------

    public function logout()
    {
        Session::forget('adminloginid');
        return redirect()->to('admin');
    }


}
