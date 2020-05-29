<?php

namespace App\Http\Controllers\ADMIN;

use Illuminate\Http\Request;
use App\Category;
use App\Page;

use App\Http\Controllers\Controller;

class MobileViewController extends Controller
{
    public function addMobileCategory(Request $req)
    {
    	$data['page_title'] = 'Add Mobile View Home Category';
    	$data['category']=Category::where('parent_category',null)->get();
    	return view('admin/webviews/mobile_view', $data);
    }
    public function mobileCategorySubmit(Request $req)
    {
    	    $file = $req->file('img1');
		    $filename = 'mobile'.time().'.'.$req->img1->extension();
		    $destinationPath = storage_path('../../assets/mobile');
		    $file->move($destinationPath, $filename);
    	    $image='assets/mobile/'.$filename;

    	    $file1 = $req->file('img2');
		    $filename1 = 'mobile'.time().'2.'.$req->img2->extension();
		    $destinationPath1 = storage_path('../../assets/mobile');
		    $file1->move($destinationPath1, $filename1);
    	    $image1='assets/mobile/'.$filename1;

    	    $file2 = $req->file('img3');
		    $filename2 = 'mobile'.time().'3.'.$req->img3->extension();
		    $destinationPath2 = storage_path('../../assets/mobile');
		    $file2->move($destinationPath2, $filename2);
    	    $image2='assets/mobile/'.$filename2;

    	    $file3 = $req->file('img4');
		    $filename3 = 'mobile'.time().'4.'.$req->img4->extension();
		    $destinationPath3 = storage_path('../../assets/mobile');
		    $file3->move($destinationPath3, $filename3);
    	    $image3='assets/mobile/'.$filename3;

    	    $file4 = $req->file('img5');
		    $filename4 = 'mobile'.time().'5.'.$req->img5->extension();
		    $destinationPath4 = storage_path('../../assets/mobile');
		    $file4->move($destinationPath4, $filename4);
    	    $image4='assets/mobile/'.$filename4;


    	Page::where('id',2)->update([
            'image1'=>'{"image":"'.$image.'","title":"'.strtolower($req->t1).'","link":"'.urlencode($req->c1).'"}',
            'image2'=>'{"image":"'.$image1.'","title":"'.strtolower($req->t2).'","link":"'.urlencode($req->c2).'"}',
            'image3'=>'{"image":"'.$image2.'","title":"'.strtolower($req->t3).'","link":"'.urlencode($req->c3).'"}',
            'image4'=>'{"image":"'.$image3.'","title":"'.strtolower($req->t4).'","link":"'.urlencode($req->c4).'"}',
            'image5'=>'{"image":"'.$image4.'","title":"'.strtolower($req->t5).'","link":"'.urlencode($req->c5).'"}'
          ]);
           return back()->with('success',1);
    }
}
