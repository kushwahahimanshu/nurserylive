<?php

namespace App\Http\Controllers\ADMIN;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Footer;
use App\Contact;
use App\ContactForm;

use App\About;
use App\Layout;
use App\Category;
use App\HomeSection;
use App\Faq;
class HomeController extends Controller
{
    public function homeLayoutOne()
    {
    	$data['page_title'] = 'Home Page Layout 1';
    	$data['flag']=1;
    	$data['record']=Layout::orderBy('id','desc')->get();
        $data['category']=Category::orderBy('id','desc')->get();
    	return view('admin/webviews/home_layout', $data);
    }
    public function homeLayoutOneSubmit(Request $req)
    {
        //the category column have unique key for parent & child not have same name
        $reg= new Layout;
        $reg->layout_name=$req->layout;

        if($req->layout=='layout_one'){
            $file = $req->file('img1');
            $filename = 'layout'.time().'1.'.$req->img1->extension();
            $destinationPath = storage_path('../../assets/home');
            $file->move($destinationPath, $filename);
            $image='assets/home/'.$filename;
            if (Category::where('parent_category', '=',$req->img1_link)->exists()) {
                $link='show-category/'.urlencode($req->img1_link);
            }
            else{
                $link='show-product/'.urlencode($req->img1_link);
            }
            $data='{"name":"'.$image.'","category":"'.$req->img1_link.'","link":"'.$link.'"}';

            $file1 = $req->file('img2');
            $filename1 = 'layout'.time().'2.'.$req->img2->extension();
            $destinationPath1 = storage_path('../../assets/home');
            $file1->move($destinationPath1, $filename1);
            $image1='assets/home/'.$filename1;
            if (Category::where('parent_category', '=',$req->img2_link)->exists()) {
                $link='show-category/'.urlencode($req->img2_link);
            }
            else{
                $link='show-product/'.urlencode($req->img2_link);
            }
            $data1='{"name":"'.$image1.'","category":"'.$req->img2_link.'","link":"'.$link.'"}';
            //dd($data1);

            $file2 = $req->file('img3');
            $filename2 = 'layout'.time().'3.'.$req->img3->extension();
            $destinationPath2 = storage_path('../../assets/home');
            $file2->move($destinationPath2, $filename2);
            $image2='assets/home/'.$filename2;
            if (Category::where('parent_category', '=',$req->img3_link)->exists()) {
                $link='show-category/'.urlencode($req->img3_link);
            }
            else{
                $link='show-product/'.urlencode($req->img3_link);
            }
            $data2='{"name":"'.$image2.'","category":"'.$req->img3_link.'","link":"'.$link.'"}';

            $file3 = $req->file('img4');
            $filename3 = 'layout'.time().'4.'.$req->img4->extension();
            $destinationPath3 = storage_path('../../assets/home');
            $file3->move($destinationPath3, $filename3);
            $image3='assets/home/'.$filename3;
            if (Category::where('parent_category', '=',$req->img4_link)->exists()) {
                $link='show-category/'.urlencode($req->img4_link);
            }
            else{
                $link='show-product/'.urlencode($req->img4_link);
            }
            $data3='{"name":"'.$image3.'","category":"'.$req->img4_link.'","link":"'.$link.'"}';

            $file4 = $req->file('img5');
            $filename4 = 'layout'.time().'5.'.$req->img5->extension();
            $destinationPath4 = storage_path('../../assets/home');
            $file4->move($destinationPath4, $filename4);
            $image4='assets/home/'.$filename4;
            if (Category::where('parent_category', '=',$req->img5_link)->exists()) {
                $link='show-category/'.urlencode($req->img5_link);
            }
            else{
                $link='show-product/'.urlencode($req->img5_link);
            }
            $data4='{"name":"'.$image4.'","category":"'.$req->img5_link.'","link":"'.$link.'"}';

            $file5 = $req->file('img6');
            $filename5 = 'layout'.time().'6.'.$req->img6->extension();
            $destinationPath5 = storage_path('../../assets/home');
            $file5->move($destinationPath5, $filename5);
            $image5='assets/home/'.$filename5;
            if (Category::where('parent_category', '=',$req->img6_link)->exists()) {
                $link='show-category/'.urlencode($req->img6_link);
            }
            else{
                $link='show-product/'.urlencode($req->img6_link);
            }
            $data5='{"name":"'.$image5.'","category":"'.$req->img6_link.'","link":"'.$link.'"}';

            $file6 = $req->file('img7');
            $filename6 = 'layout'.time().'7.'.$req->img7->extension();
            $destinationPath6 = storage_path('../../assets/home');
            $file6->move($destinationPath6, $filename6);
            $image6='assets/home/'.$filename6;
            if (Category::where('parent_category', '=',$req->img7_link)->exists()) {
                $link='show-category/'.urlencode($req->img7_link);
            }
            else{
                $link='show-product/'.urlencode($req->img7_link);
            }
            $data6='{"name":"'.$image6.'","category":"'.$req->img7_link.'","link":"'.$link.'"}';

            $file7 = $req->file('img8');
            $filename7 = 'layout'.time().'8.'.$req->img8->extension();
            $destinationPath7 = storage_path('../../assets/home');
            $file7->move($destinationPath7, $filename7);
            $image7='assets/home/'.$filename7;
            if (Category::where('parent_category', '=',$req->img8_link)->exists()) {
                $link='show-category/'.urlencode($req->img8_link);
            }
            else{
                $link='show-product/'.urlencode($req->img8_link);
            }
            $data7='{"name":"'.$image7.'","category":"'.$req->img8_link.'","link":"'.$link.'"}';

            $file8 = $req->file('img9');
            $filename8 = 'layout'.time().'9.'.$req->img9->extension();
            $destinationPath8 = storage_path('../../assets/home');
            $file8->move($destinationPath8, $filename8);
            $image8='assets/home/'.$filename8;
            if (Category::where('parent_category', '=',$req->img9_link)->exists()) {
                $link='show-category/'.urlencode($req->img9_link);
            }
            else{
                $link='show-product/'.urlencode($req->img9_link);
            }
            $data8='{"name":"'.$image8.'","category":"'.$req->img9_link.'","link":"'.$link.'"}';
            //$data=json_decode($data1); 
            //return response()->json($data);
            //dd($data);
            $reg->image1=$data;
            $reg->image2=$data1;
            $reg->image3=$data2;
            $reg->image4=$data3;
            $reg->image5=$data4;
            $reg->image6=$data5;
            $reg->image7=$data6;
            $reg->image8=$data7;
            $reg->image9=$data8;
        }
        elseif($req->layout=='slider_layout'){
            $file = $req->file('si_img1');
            $filename = 'slider'.time().'1.'.$req->si_img1->extension();
            $destinationPath = storage_path('../../assets/home');
            $file->move($destinationPath, $filename);
            $image='assets/home/'.$filename;
            if (Category::where('parent_category', '=',$req->si_img1_link)->exists()) {
                $link='show-category/'.urlencode($req->si_img1_link);
            }
            else{
                $link='show-product/'.urlencode($req->si_img1_link);
            }
            $data='{"name":"'.$image.'","category":"'.$req->si_img1_link.'","link":"'.$link.'"}';
                //dd($data); 
            $reg->image1=$data;

            if($req->hasFile('si_img2')) {
                $file1 = $req->file('si_img2');
                $filename1 = 'slider'.time().'2.'.$req->si_img2->extension();
                $destinationPath1 = storage_path('../../assets/home');
                $file1->move($destinationPath1, $filename1);
                $image1='assets/home/'.$filename1;
                if (Category::where('parent_category', '=',$req->si_img2_link)->exists()) {
                    $link='show-category/'.urlencode($req->si_img2_link);
                }
                else{
                    $link='show-product/'.urlencode($req->si_img2_link);
                }
                $data1='{"name":"'.$image1.'","category":"'.$req->si_img2_link.'","link":"'.$link.'"}';
                //dd($data1);
                $reg->image2=$data1;
            }
            if($req->hasFile('si_img3')) {
                $file2 = $req->file('si_img3');
                $filename2 = 'slider'.time().'3.'.$req->si_img3->extension();
                $destinationPath2 = storage_path('../../assets/home');
                $file2->move($destinationPath2, $filename2);
                $image2='assets/home/'.$filename2;
                if (Category::where('parent_category', '=',$req->si_img3_link)->exists()) {
                    $link='show-category/'.urlencode($req->si_img3_link);
                }
                else{
                    $link='show-product/'.urlencode($req->si_img3_link);
                }
                $data2='{"name":"'.$image2.'","category":"'.$req->si_img3_link.'","link":"'.$link.'"}';
                $reg->image3=$data2;
            }
            if($req->hasFile('si_img4')) {
                $file3 = $req->file('si_img4');
                $filename3 = 'slider'.time().'4.'.$req->si_img4->extension();
                $destinationPath3 = storage_path('../../assets/home');
                $file3->move($destinationPath3, $filename3);
                $image3='assets/home/'.$filename3;
                if (Category::where('parent_category', '=',$req->si_img4_link)->exists()) {
                    $link='show-category/'.urlencode($req->si_img4_link);
                }
                else{
                    $link='show-product/'.urlencode($req->si_img4_link);
                }
                $data3='{"name":"'.$image3.'","category":"'.$req->si_img4_link.'","link":"'.$link.'"}';
                $reg->image4=$data3;
            }
            if($req->hasFile('si_img5')) {
                $file4 = $req->file('si_img5');
                $filename4 = 'slider'.time().'5.'.$req->si_img5->extension();
                $destinationPath4 = storage_path('../../assets/home');
                $file4->move($destinationPath4, $filename4);
                $image4='assets/home/'.$filename4;
                if (Category::where('parent_category', '=',$req->si_img5_link)->exists()) {
                    $link='show-category/'.urlencode($req->si_img5_link);
                }
                else{
                    $link='show-product/'.urlencode($req->si_img5_link);
                }
                $data4='{"name":"'.$image4.'","category":"'.$req->si_img5_link.'","link":"'.$link.'"}';
                $reg->image5=$data4;
            }
            if($req->hasFile('si_img6')) {
                $file5 = $req->file('si_img6');
                $filename5 = 'slider'.time().'6.'.$req->si_img6->extension();
                $destinationPath5 = storage_path('../../assets/home');
                $file5->move($destinationPath5, $filename5);
                $image5='assets/home/'.$filename5;
                if (Category::where('parent_category', '=',$req->si_img6_link)->exists()) {
                    $link='show-category/'.urlencode($req->si_img6_link);
                }
                else{
                    $link='show-product/'.urlencode($req->si_img6_link);
                }
                $data5='{"name":"'.$image5.'","category":"'.$req->si_img6_link.'","link":"'.$link.'"}';
                $reg->image6=$data5;
            }
            if($req->hasFile('si_img7')) {
                $file6 = $req->file('si_img7');
                $filename6 = 'slider'.time().'7.'.$req->si_img7->extension();
                $destinationPath6 = storage_path('../../assets/home');
                $file6->move($destinationPath6, $filename6);
                $image6='assets/home/'.$filename6;
                if (Category::where('parent_category', '=',$req->si_img7_link)->exists()) {
                    $link='show-category/'.urlencode($req->si_img7_link);
                }
                else{
                    $link='show-product/'.urlencode($req->si_img7_link);
                }
                $data6='{"name":"'.$image6.'","category":"'.$req->si_img7_link.'","link":"'.$link.'"}';
                $reg->image7=$data6;
            }
            if($req->hasFile('si_img8')) {
                $file7 = $req->file('si_img8');
                $filename7 = 'slider'.time().'8.'.$req->si_img8->extension();
                $destinationPath7 = storage_path('../../assets/home');
                $file7->move($destinationPath7, $filename7);
                $image7='assets/home/'.$filename7;
                if (Category::where('parent_category', '=',$req->si_img8_link)->exists()) {
                    $link='show-category/'.urlencode($req->si_img8_link);
                }
                else{
                    $link='show-product/'.urlencode($req->si_img8_link);
                }
                $data7='{"name":"'.$image7.'","category":"'.$req->si_img8_link.'","link":"'.$link.'"}';
                $reg->image8=$data7;
            }
            if($req->hasFile('si_img9')) {
                $file8 = $req->file('si_img9');
                $filename8 = 'slider'.time().'9.'.$req->si_img9->extension();
                $destinationPath8 = storage_path('../../assets/home');
                $file8->move($destinationPath, $filename8);
                $image8='assets/home/'.$filename8;
                if (Category::where('parent_category', '=',$req->si_img9_link)->exists()) {
                    $link='show-category/'.urlencode($req->si_img9_link);
                }
                else{
                    $link='show-product/'.urlencode($req->si_img9_link);
                }
                $data8='{"name":"'.$image8.'","category":"'.$req->si_img9_link.'","link":"'.$link.'"}';
                $reg->image9=$data8;
            }
        } 
        $reg->save();
        
        return back()->with('success',1);
    }
    public function deleteLayout($id)
    {
    	Layout::where('id',$id)->delete();
    	return back()->with('success',1);
    }
    public function createHomePageSection()
    {
        $data['page_title'] = 'Home Page Create Section';
        $data['flag']=2;
        $data['section']=HomeSection::orderBy('id','desc')->get();
        $data['category']=Category::orderBy('id','desc')->get();
        return view('admin/webviews/home_layout', $data);
    }
    public function homePageSectionSubmit(Request $req)
    {
        $reg= new HomeSection;
        $reg->layout_name=$req->layout;
        $reg->title=$req->title;

            $file = $req->file('img1');
            $filename = 'section'.time().'1.'.$req->img1->extension();
            $destinationPath = storage_path('../../assets/section');
            $file->move($destinationPath, $filename);
            $image='assets/section/'.$filename;
            if (Category::where('parent_category', '=',$req->img1_link)->exists()) {
                            $link='show-category/'.urlencode($req->img1_link);
                            }
                            else{
                                $link='show-product/'.urlencode($req->img1_link);
                            }

            $data='{"image":"'.$image.'","img_title":"'.$req->img1_title.'","category":"'.$req->img1_link.'","link":"'.$link.'"}';

            $file1 = $req->file('img2');
            $filename1 = 'section'.time().'2.'.$req->img2->extension();
            $destinationPath1 = storage_path('../../assets/section');
            $file1->move($destinationPath1, $filename1);
            $image1='assets/section/'.$filename1;
            if (Category::where('parent_category', '=',$req->img2_link)->exists()) {
                            $link='show-category/'.urlencode($req->img2_link);
                            }
                            else{
                                $link='show-product/'.urlencode($req->img2_link);
                            }

            $data1='{"image":"'.$image1.'","img_title":"'.$req->img2_title.'","category":"'.$req->img2_link.'","link":"'.$link.'"}';
            //dd($data1);

            $file2 = $req->file('img3');
            $filename2 = 'section'.time().'3.'.$req->img3->extension();
            $destinationPath2 = storage_path('../../assets/section');
            $file2->move($destinationPath2, $filename2);
            $image2='assets/section/'.$filename2;
            if (Category::where('parent_category', '=',$req->img3_link)->exists()) {
                            $link='show-category/'.urlencode($req->img3_link);
                            }
                            else{
                                $link='show-product/'.urlencode($req->img3_link);
                            }

            $data2='{"image":"'.$image2.'","img_title":"'.$req->img3_title.'","category":"'.$req->img3_link.'","link":"'.$link.'"}';
             $reg->image1=$data;
             $reg->image2=$data1;
             $reg->image3=$data2;
        if($req->layout=='four' || $req->layout=='six'){
            $file3 = $req->file('img4');
            $filename3 = 'section'.time().'4.'.$req->img4->extension();
            $destinationPath3 = storage_path('../../assets/section');
            $file3->move($destinationPath3, $filename3);
            $image3='assets/section/'.$filename3;
            if (Category::where('parent_category', '=',$req->img4_link)->exists()) {
                            $link='show-category/'.urlencode($req->img4_link);
                            }
                            else{
                                $link='show-product/'.urlencode($req->img4_link);
                            }

            $data3='{"image":"'.$image3.'","img_title":"'.$req->img4_title.'","category":"'.$req->img4_link.'","link":"'.$link.'"}';
             $reg->image4=$data3;
        }
        if($req->layout=='six'){
            $file4 = $req->file('img5');
            $filename4 = 'section'.time().'5.'.$req->img5->extension();
            $destinationPath4 = storage_path('../../assets/section');
            $file4->move($destinationPath4, $filename4);
            $image4='assets/section/'.$filename4;
            if (Category::where('parent_category', '=',$req->img5_link)->exists()) {
                            $link='show-category/'.urlencode($req->img5_link);
                            }
                            else{
                                $link='show-product/'.urlencode($req->img5_link);
                            }

            $data4='{"image":"'.$image4.'","img_title":"'.$req->img5_title.'","category":"'.$req->img5_link.'","link":"'.$link.'"}';
          
            $file5 = $req->file('img6');
            $filename5 = 'section'.time().'6.'.$req->img6->extension();
            $destinationPath5 = storage_path('../../assets/section');
            $file5->move($destinationPath5, $filename5);
            $image5='assets/section/'.$filename5;
            if (Category::where('parent_category', '=',$req->img6_link)->exists()) {
                            $link='show-category/'.urlencode($req->img6_link);
                            }
                            else{
                                $link='show-product/'.urlencode($req->img6_link);
                            }

            $data5='{"image":"'.$image5.'","img_title":"'.$req->img6_title.'","category":"'.$req->img6_link.'","link":"'.$link.'"}';
        
             
             $reg->image5=$data4;
             $reg->image6=$data5;
        }
        $reg->save();
        
        return back()->with('success',1);
    } 
    public function addFaq(){
        $data['page_title'] = 'Add FAQs';
        //$data['result'] = HomePageSetting::where('id',1)->first();   
        return view('admin/webviews.admin_add_faq',$data);  
    } 

    public function submitFaq(Request $req){ 
        $reg = new Faq; 
        $reg->question = strtolower($req->question);
        $reg->answer = strtolower($req->answer); 
        $reg->save(); 
        //Return Response
        return back()->with('success', 1);
    } 

    public function viewFaq() {
        //Setting Page Title
        $data['page_title'] = 'View Faq';
        //Fetching Data
        $data['result'] = Faq::orderBy('id', 'desc')->get(); 
        return view('admin/webviews.admin_view_faq',$data); 
    }

    public function editFaq($id)
    {
        $data['page_title']='Edit Faq'; 
        $data['result']= Faq::where('id',$id)->first();
        return view('admin/webviews.admin_edit_faq',$data);  
         
    }
    public function updateFaq(Request $req)
    {
        
        Faq::where('id',$req->id)->update([
            'question'=>strtolower($req->question),
            'answer'=>strtolower($req->answer) 
        ]);
        
        return redirect('view-faq')->with('success', 1);
    }

    public function toggleFaqActiveStatus($status, $id) {
        //Submit to DB
        Faq::where('id', $id)->update(['active' => $status]);
        //Return Response
        return back()->with('success', 1);
    }

    public function deleteFaq($id) {
        Faq::where('id', $id)->delete();
        //Return Response
        return back()->with('success', 1);
    }

    public function editFooter()
    {
        $data['page_title']='Edit Footer'; 
        $data['result']= Footer::where('id',1)->first();
        return view('admin/webviews.admin_edit_footer',$data);  
         
    }
    public function updateFooter(Request $req)
    { 
        Footer::where('id',$req->id)->update([
            'content'=>strtolower($req->content),
            'facebook'=>strtolower($req->facebook),
            'gmail'=>strtolower($req->gmail),
            'twitter'=>strtolower($req->twitter),
            'instagram'=>strtolower($req->instagram),
            'pinterest'=>strtolower($req->pinterest)
        ]); 
        return back()->with('success', 1);
    }

    public function editContactDetails()
    {
        $data['page_title']='Edit Contact Details'; 
        $data['result']= Contact::where('id',1)->first();
        return view('admin/webviews.admin_edit_contact_details',$data);  
         
    }
    public function updateContactDetails(Request $req)
    { 
        Contact::where('id',$req->id)->update([
            'address'=>strtolower($req->address),
            'address_one'=>strtolower($req->address_one),
            'contact_number'=>strtolower($req->contact_number),
            'contact_number_one'=>strtolower($req->contact_number_one),
            'email'=>strtolower($req->email),
            'fax'=>strtolower($req->fax)
        ]); 
        return back()->with('success', 1);
    }
    public function viewContactDetails() {
        //Setting Page Title
        $data['page_title'] = 'View Contact Details';
        //Fetching Data
        $data['result'] = ContactForm::orderBy('id', 'desc')->get(); 
        return view('admin/webviews.admin_view_contact_form_details',$data); 
    }

    public function deleteContactForm($id)
    {
        ContactForm::where('id',$id)->delete();
        return back()->with('success',1);
    }

     public function editAboutDetails()
    {
        $data['page_title']='Edit About Us'; 
        $data['result']= About::where('id',1)->first();
        return view('admin/webviews.admin_edit_about',$data);  
         
    }
    public function updateAboutDetails(Request $req)
    { 
        About::where('id',$req->id)->update([
            'about_us'=>strtolower($req->about_us) 
        ]); 
        return back()->with('success', 1);
    }
    public function editHomeLayoutOne($id){
        $data['page_title'] ='Edit Home Page Layout 1';
        $data['flag']=1;
        $data['result'] = Layout::where('id',$id)->first(); 
        $data['record']=Layout::orderBy('id','desc')->get();
        $data['category']=Category::orderBy('id','desc')->get();
        return view('admin/webviews/home_layout_edit', $data);
    }

    public function editHomeLayoutOneSubmit(Request $req){ 
        if($req->layout=='layout_one'){ 
            if($req->hasFile('img1')) {   
                $file = $req->file('img1');
                $filename = 'slider'.time().'1.'.$req->img1->extension();
                $destinationPath = storage_path('../../assets/home');
                $file->move($destinationPath, $filename);
                $image='assets/home/'.$filename; 
            }else{
                $image=$req->img1;
            }if (Category::where('parent_category', '=',$req->img1_link)->exists()) {
                $link='show-category/'.urlencode($req->img1_link);
            }else{
                $link='show-product/'.urlencode($req->img1_link);
            }$data='{"name":"'.$image.'","category":"'.$req->img1_link.'","link":"'.$link.'"}';
            
            //dd($data);

            if($req->hasFile('img2')) {   
                $file1 = $req->file('img2');
                $filename1 = 'slider'.time().'2.'.$req->img2->extension();
                $destinationPath1 = storage_path('../../assets/home');
                $file1->move($destinationPath1, $filename1);
                $image1='assets/home/'.$filename1;
            }else{
                $image1=$req->img2;
            }if (Category::where('parent_category', '=',$req->img2_link)->exists()) {
                $link='show-category/'.urlencode($req->img2_link);
            }else{
                $link='show-product/'.urlencode($req->img2_link);
            }$data1='{"name":"'.$image1.'","category":"'.$req->img2_link.'","link":"'.$link.'"}';  

            if($req->hasFile('img3')) {
                $file2 = $req->file('img3');
                $filename2 = 'slider'.time().'3.'.$req->img3->extension();
                $destinationPath2 = storage_path('../../assets/home');
                $file2->move($destinationPath2, $filename2);
                $image2='assets/home/'.$filename2;
            }else{
                $image2=$req->img3;
            }if (Category::where('parent_category', '=',$req->img3_link)->exists()) {
                $link='show-category/'.urlencode($req->img3_link);
            }else{
                $link='show-product/'.urlencode($req->img3_link);
            }$data2='{"name":"'.$image2.'","category":"'.$req->img3_link.'","link":"'.$link.'"}'; 
            

            if($req->hasFile('img4')) {
                $file3 = $req->file('img4');
                $filename3 = 'slider'.time().'4.'.$req->img4->extension();
                $destinationPath3 = storage_path('../../assets/home');
                $file3->move($destinationPath3, $filename3);
                $image3='assets/home/'.$filename3;
            }else{
                $image3=$req->img4;
            }if (Category::where('parent_category', '=',$req->img4_link)->exists()) {
                $link='show-category/'.urlencode($req->img4_link);
            }else{
                $link='show-product/'.urlencode($req->img4_link);
            }$data3='{"name":"'.$image3.'","category":"'.$req->img4_link.'","link":"'.$link.'"}'; 
            
            if($req->hasFile('img5')) {
                $file4 = $req->file('img5');
                $filename4 = 'slider'.time().'5.'.$req->img5->extension();
                $destinationPath4 = storage_path('../../assets/home');
                $file4->move($destinationPath4, $filename4);
                $image4='assets/home/'.$filename4;
            }else{
                $image4=$req->img5;
            }if (Category::where('parent_category', '=',$req->img5_link)->exists()) {
                $link='show-category/'.urlencode($req->img5_link);
            }else{ 
                $link='show-product/'.urlencode($req->img5_link);
            }$data4='{"name":"'.$image4.'","category":"'.$req->img5_link.'","link":"'.$link.'"}'; 
            
            if($req->hasFile('img6')) {
                $file5 = $req->file('img6');
                $filename5 = 'slider'.time().'6.'.$req->img6->extension();
                $destinationPath5 = storage_path('../../assets/home');
                $file5->move($destinationPath5, $filename5);
                $image5='assets/home/'.$filename5;
            }else{
                $image5=$req->img6;
            }if (Category::where('parent_category', '=',$req->img6_link)->exists()) {
                $link='show-category/'.urlencode($req->img6_link);
            }else{
                $link='show-product/'.urlencode($req->img6_link);
            }$data5='{"name":"'.$image5.'","category":"'.$req->img6_link.'","link":"'.$link.'"}'; 
            
            if($req->hasFile('img7')) {
                $file6 = $req->file('img7');
                $filename6 = 'slider'.time().'7.'.$req->img7->extension();
                $destinationPath6 = storage_path('../../assets/home');
                $file6->move($destinationPath6, $filename6);
                $image6='assets/home/'.$filename6;
            }else{
                $image6=$req->img7;
            }if (Category::where('parent_category', '=',$req->img7_link)->exists()) {
                $link='show-category/'.urlencode($req->img7_link);
            }else{
                $link='show-product/'.urlencode($req->img7_link);
            } $data6='{"name":"'.$image6.'","category":"'.$req->img7_link.'","link":"'.$link.'"}'; 
            
            if($req->hasFile('img8')) {
                $file7 = $req->file('img8');
                $filename7 = 'slider'.time().'8.'.$req->img8->extension();
                $destinationPath7 = storage_path('../../assets/home');
                $file7->move($destinationPath7, $filename7);
                $image7='assets/home/'.$filename7;
            }else{
                $image7=$req->img8;
            }if (Category::where('parent_category', '=',$req->img8_link)->exists()) {
                $link='show-category/'.urlencode($req->img8_link);
            }else{
                $link='show-product/'.urlencode($req->img8_link);
            }$data7='{"name":"'.$image7.'","category":"'.$req->img8_link.'","link":"'.$link.'"}'; 
            
            if($req->hasFile('img9')) {
                $file8 = $req->file('img9');
                $filename8 = 'slider'.time().'9.'.$req->img9->extension();
                $destinationPath8 = storage_path('../../assets/home');
                $file8->move($destinationPath8, $filename8);
                $image8='assets/home/'.$filename8;
            }else{
                $image8=$req->img9;
            }if (Category::where('parent_category', '=',$req->img9_link)->exists()) {
                $link='show-category/'.urlencode($req->img9_link);
            }else{
                $link='show-product/'.urlencode($req->img9_link);
            }$data8='{"name":"'.$image8.'","category":"'.$req->img9_link.'","link":"'.$link.'"}';

            Layout::where('id',$req->id)->update([
                'layout_name'=> $req->layout,
                'image1'=> $data,
                'image2'=> $data1,
                'image3'=> $data2,
                'image4'=> $data3,
                'image5'=> $data4,
                'image6'=> $data5,
                'image7'=> $data6,
                'image8'=> $data7,
                'image9'=> $data8,
                //dd($req) 
            ]);  
        }
         
        return redirect('home-layout')->with('success',1);
    }

    public function editHomeSection($id){
        $data['page_title'] ='Edit Home Page Section';
        $data['flag']=2;
        $data['section'] = HomeSection::where('id',$id)->first();  
        $data['category']=Category::orderBy('id','desc')->get();
        return view('admin/webviews/home_layout_edit', $data);
    }

    public function editHomePageSectionSubmit(Request $req){
        if($req->hasFile('img1')) {
            $file = $req->file('img1');
            $filename = 'section'.time().'1.'.$req->img1->extension();
            $destinationPath = storage_path('../../assets/section');
            $file->move($destinationPath, $filename);
            $image='assets/section/'.$filename;
        }else{
            $image=$req->img1;
        }if (Category::where('parent_category', '=',$req->img1_link)->exists()) {
            $link='show-category/'.urlencode($req->img1_link);
        }else{ 
            $link='show-product/'.urlencode($req->img1_link);
        }$data='{"image":"'.$image.'","img_title":"'.$req->img1_title.'","category":"'.$req->img1_link.'","link":"'.$link.'"}'; 


        if($req->hasFile('img2')) {
            $file1 = $req->file('img2');
            $filename1 = 'section'.time().'2.'.$req->img2->extension();
            $destinationPath1 = storage_path('../../assets/section');
            $file1->move($destinationPath1, $filename1);
            $image1='assets/section/'.$filename1;
        }else{
            $image1=$req->img2;
        } if (Category::where('parent_category', '=',$req->img2_link)->exists()) {
            $link='show-category/'.urlencode($req->img2_link);
        }else{
            $link='show-product/'.urlencode($req->img2_link);
        }$data1='{"image":"'.$image1.'","img_title":"'.$req->img2_title.'","category":"'.$req->img2_link.'","link":"'.$link.'"}';
        
        if($req->hasFile('img3')) {
            $file2 = $req->file('img3');
            $filename2 = 'section'.time().'3.'.$req->img3->extension();
            $destinationPath2 = storage_path('../../assets/section');
            $file2->move($destinationPath2, $filename2);
            $image2='assets/section/'.$filename2;
        }else{
            $image2=$req->img3;
        }if (Category::where('parent_category', '=',$req->img3_link)->exists()) {
            $link='show-category/'.urlencode($req->img3_link);
        }else{
            $link='show-product/'.urlencode($req->img3_link);
        } $data2='{"image":"'.$image2.'","img_title":"'.$req->img3_title.'","category":"'.$req->img3_link.'","link":"'.$link.'"}'; 

        if($req->layout=='four' || $req->layout=='six'){
            if($req->hasFile('img4')) {
                $file3 = $req->file('img4');
                $filename3 = 'section'.time().'4.'.$req->img4->extension();
                $destinationPath3 = storage_path('../../assets/section');
                $file3->move($destinationPath3, $filename3);
                $image3='assets/section/'.$filename3;
            }else{
                $image3=$req->img4;
            } if (Category::where('parent_category', '=',$req->img4_link)->exists()) {
                $link='show-category/'.urlencode($req->img4_link);
            } else{
                $link='show-product/'.urlencode($req->img4_link);
            } $data3='{"image":"'.$image3.'","img_title":"'.$req->img4_title.'","category":"'.$req->img4_link.'","link":"'.$link.'"}';  
        }


        if($req->layout=='six'){
            if($req->hasFile('img5')) {
                $file4 = $req->file('img5');
                $filename4 = 'section'.time().'5.'.$req->img5->extension();
                $destinationPath4 = storage_path('../../assets/section');
                $file4->move($destinationPath4, $filename4);
                $image4='assets/section/'.$filename4;
            }else{
                $image4=$req->img5;
            }if (Category::where('parent_category', '=',$req->img5_link)->exists()) {
                $link='show-category/'.urlencode($req->img5_link);
            } else{
                $link='show-product/'.urlencode($req->img5_link);
            } $data4='{"image":"'.$image4.'","img_title":"'.$req->img5_title.'","category":"'.$req->img5_link.'","link":"'.$link.'"}'; 

            if($req->hasFile('img6')) {
                $file5 = $req->file('img6');
                $filename5 = 'section'.time().'6.'.$req->img6->extension();
                $destinationPath5 = storage_path('../../assets/section');
                $file5->move($destinationPath5, $filename5);
                $image5='assets/section/'.$filename5;
            }else{
                $image5=$req->img6;
            } if (Category::where('parent_category', '=',$req->img6_link)->exists()) {
                $link='show-category/'.urlencode($req->img6_link);
            } else{
                $link='show-product/'.urlencode($req->img6_link);
            } $data5='{"image":"'.$image5.'","img_title":"'.$req->img6_title.'","category":"'.$req->img6_link.'","link":"'.$link.'"}'; 
        }  

        HomeSection::where('id',$req->id)->update([
        'layout_name'=> $req->layout,
        'title'=> $req->title,
        'image1'=>$data,
        'image2'=>$data1,
        'image3'=>$data2, 
         
        ]);
        if($req->layout=='four' || $req->layout=='six'){
            HomeSection::where('id',$req->id)->update([ 
            'image4'=>$data3, 
            ]);
        }if($req->layout=='six'){
            HomeSection::where('id',$req->id)->update([ 
            'image5'=>$data4,  
            'image6'=>$data5
            ]);
        }
        return redirect('home-section-layout')->with('success',1);
    }
}
