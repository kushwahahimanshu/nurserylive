<?php

namespace App\Http\Controllers\ADMIN;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User; 
use App\Category; 
use App\Product; 
use App\Page; 
use App\HeaderMenu;
use App\Policy;
use File;
class DashboardController extends Controller
{
    public function dashboard() {
    	$data['page_title'] = 'Dashboard';
    	return view('admin/webviews/admin_dashboard', $data);
    } 
    public function addParentCategory()
    {
    	$data['page_title'] = 'Add Parent Category';
        $data['category']=Category::where('parent_category',null)->get();
    	return view('admin/webviews/parent_category', $data);
    }
    public function addParentCategorySubmit(Request $req)
    {
        if($req->id){
             Page::where('id',$req->id)->update([
            'sidevar_category'=>implode(',', strtolower($req->category)),
          ]);
           return back()->with('success',1);
        }
        else{
            $reg= new Category;
            $reg->category=strtolower($req->category);
            if($req->hasFile('image')) {
                $file = $req->file('image');
                $filename = 'parent'.time().'.'.$req->image->extension();
                $destinationPath = storage_path('../../assets/parent');
                $file->move($destinationPath, $filename);
                $reg->image='assets/parent/'.$filename;
            }
           $reg->save();
           return back()->with('success',1);
        }
    }
    public function addSubCategory()
    {
    	$data['page_title'] = 'Add Sub Category';
    	$data['parent']=Category::where('parent_category',null)->get();
        $data['category']=Category::where('parent_category','!=',null)->orderBy('id','desc')->get();
    	return view('admin/webviews/sub_category', $data);
    }
     public function addSubCategorySubmit(Request $req)
    {
        if($req->id){
                if($req->hasFile('image')) {
                $file = $req->file('image');
                $filename = 'subcategory'.time().'.'.$req->image->extension();
                $destinationPath = storage_path('../../assets/subcategory');
                $file->move($destinationPath, $filename);
                $image='assets/subcategory/'.$filename;
            }
            else{
                $image=$req->image;
             }
             Category::where('id',$req->id)->update([
            'category'=>strtolower($req->category),
            'parent_category'=>strtolower($req->parent_category),
            'description'=>strtolower($req->description),
            'image'=>$image,
          ]);
             return redirect('add-sub-category')->with('success',1);
        }
        else{
            $reg= new Category;
            $reg->category=strtolower($req->category);
            $reg->parent_category=strtolower($req->parent_category);
            $reg->description=strtolower($req->description);
            if($req->hasFile('image')) {
                $file = $req->file('image');
                $filename = 'subcategory'.time().'.'.$req->image->extension();
                $destinationPath = storage_path('../../assets/subcategory');
                $file->move($destinationPath, $filename);
                $reg->image='assets/subcategory/'.$filename;
            }
            $reg->save();
           return back()->with('success',1);
        }
    }
    public function addProduct(Request $req)
    {
    	$data['page_title'] = 'Add Product';
        $data['result']=Product::where('user_id',Auth::id())->orderBy('id','desc')->get();
    	$data['category']=Category::where('parent_category','!=',null)->get();
        //dd($data['category']);
    	return view('admin/webviews/add_products', $data);
    }
    public function addProductSubmit(Request $req)
    {
        if($req->id){
            $images = $req->file('image');
            if ($req->hasFile('image')) :
                    $count=0;
                    foreach ($images as $item):
                    $filename = 'assets/product/product'.time().'-'.$count.Auth::id().'.'.$item->extension();
                        $destinationPath = storage_path('../../assets/product');
                        $item->move($destinationPath, $filename);
                        $arr[] = $filename;
                        // $arr[] = $filename.implode(",",$req->imageold);
                        $count++;
                    endforeach;
                    $image = implode(",", $arr);
                    $image=implode($req->imageold).','.$image;
                   // $image=trim($image,",");

            else:
                    $image = implode(',', $req->imageold);
            endif;
            //dd($image);
            Product::where('id',$req->id)->update([
            'name'=>strtolower($req->name),
            'sold'=>strtolower($req->sale),
            'category'=>strtolower($req->category),
            'price'=>strtolower($req->price),
            'product_quantity'=> strtolower($req->product_quantity),
            'type_of_product'=> strtolower($req->type_of_product),
            'description'=>strtolower($req->description),
            'about_product_details'=>strtolower($req->p_details),
            'image'=>trim($image,","),
            ]);
             return redirect('add-product')->with('success',1);
        }
        else{
            $reg= new Product;
            $reg->name=strtolower($req->name);
            $reg->sold=strtolower($req->sale);
            $reg->price=strtolower($req->price);
            $reg->product_quantity=strtolower($req->product_quantity);
            $reg->type_of_product=strtolower($req->type_of_product);
            $reg->category=strtolower($req->category);
            $reg->description=strtolower($req->description);
            $reg->about_product_details=strtolower($req->p_details);
            $images = $req->file('image');
            if ($req->hasFile('image')) :
                    $count=0;
                    foreach ($images as $item):
                    $filename = 'assets/product/product'.time().'-'.$count.Auth::id().'.'.$item->extension();
                        $destinationPath = storage_path('../../assets/product');
                        $item->move($destinationPath, $filename);
                        $arr[] = $filename;
                        $count++;
                    endforeach;
                    $image = implode(",", $arr);
            else:
                    $image = '';
            endif;
            $reg->image=$image;
            $reg->save();
            return back()->with('success',1);
        }
        
    }
    public function headerMenu()
    {
    	$data['page_title'] = 'Add Header Menu';
    	$data['category']=Category::where('parent_category',null)->get();
        $data['result']=HeaderMenu::get();
    	return view('admin/webviews/header_menu', $data);
    }
    public function loadCategory(Request $req)
    {
    	$data['address'] = Category::where('parent_category',$req->category)->pluck('category'); 
        return response()->json($data);
    }
    public function headerMenuSubmit(Request $req)
    {
    	//dd($req->title1);
    	if($req->layout=='single'){
    		$data='{"sub_cat":[';
    		$count=1;
    		foreach ($req->subcategory as $value) {
    			if($count != 1) {
                $data = $data.', ';
              }
    			$data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
    			$count++;
    		}
    		$data=$data.']}';
    		//$data=json_decode($data);
    		$image='';
    		//return response()->json($data);
    	}
    	elseif($req->layout=='four'){
    		$data='[{"title":"'.strtolower($req->title1).'","sub_cat":[';
    		$count=1;
    		foreach ($req->subcategoryt1 as $value) {
    			if($count != 1) {
                $data = $data.', ';
              }
    			$data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
    			$count++;
    		}
    		$data=$data.']},{"title":"'.strtolower($req->title2).'","sub_cat":[';
    		$count=1;
    		foreach ($req->subcategoryt2 as $value) {
    			if($count != 1) {
                $data = $data.', ';
              }
    			$data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
    			$count++;
    		}
    		$data=$data.']},{"title":"'.strtolower($req->title3).'","sub_cat":[';
    		$count=1;
    		foreach ($req->subcategoryt3 as $value) {
    			if($count != 1) {
                $data = $data.', ';
              }
    			$data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
    			$count++;
    		}
    		$data=$data.']},{"title":"'.strtolower($req->title4).'","sub_cat":[';
    		$count=1;
    		foreach ($req->subcategoryt4 as $value) {
    			if($count != 1) {
                $data = $data.', ';
              }
    			$data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
    			$count++;
    		}
    		$data=$data.']}]';
    		//$data=json_decode($data);
    		$file = $req->file('image');
		    $filename = 'header'.time().'.'.$req->image->extension();
		    $destinationPath = storage_path('../../assets/header');
		    $file->move($destinationPath, $filename);
    	    $image='assets/header/'.$filename;
    		//return response()->json($data);
    	}
    	elseif($req->layout=='six'){
    		$data='[{"title":"'.strtolower($req->title5).'","sub_cat":[';
    		$count=1;
    		foreach ($req->subcategoryt5 as $value) {
    			if($count != 1) {
                $data = $data.', ';
              }
    			$data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
    			$count++;
    		}
    		$data=$data.']},{"title":"'.strtolower($req->title6).'","sub_cat":[';
    		$count=1;
    		foreach ($req->subcategoryt6 as $value) {
    			if($count != 1) {
                $data = $data.', ';
              }
    			$data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
    			$count++;
    		}
    		$data=$data.']},{"title":"'.strtolower($req->title7).'","sub_cat":[';
    		$count=1;
    		foreach ($req->subcategoryt7 as $value) {
    			if($count != 1) {
                $data = $data.', ';
              }
    			$data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
    			$count++;
    		}
    		$data=$data.']},{"title":"'.strtolower($req->title8).'","sub_cat":[';
    		$count=1;
    		foreach ($req->subcategoryt8 as $value) {
    			if($count != 1) {
                $data = $data.', ';
              }
    			$data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
    			$count++;
    		}
    		$data=$data.']},{"title":"'.strtolower($req->title9).'","sub_cat":[';
    		$count=1;
    		foreach ($req->subcategoryt9 as $value) {
    			if($count != 1) {
                $data = $data.', ';
              }
    			$data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
    			$count++;
    		}
    		$data=$data.']},{"title":"'.strtolower($req->title10).'","sub_cat":[';
    		$count=1;
    		foreach ($req->subcategoryt10 as $value) {
    			if($count != 1) {
                $data = $data.', ';
              }
    			$data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
    			$count++;
    		}
    		$data=$data.']}]';
    		//$data=json_decode($data);
    		//return response()->json($data);
    		$file = $req->file('image1');
		    $filename = 'header'.time().'1'.auth::id().'.'.$req->image1->extension();
		    $destinationPath = storage_path('../../assets/header');
		    $file->move($destinationPath, $filename);
    	    $image='assets/header/'.$filename;
    		$file = $req->file('image2');
		    $filename = 'header'.time().'2'.auth::id().'.'.$req->image2->extension();
		    $destinationPath = storage_path('../../assets/header');
		    $file->move($destinationPath, $filename);
    	    $image=$image.','.'assets/header/'.$filename;
    	    //dd($image);
       	}

    	$reg= new HeaderMenu;
    	$reg->item_name=strtolower($req->item_name);
    	$reg->category=strtolower($req->category);
    	$reg->dropdown=strtolower($req->dropdown);
        if($req->dropdown=='enable'){
            $reg->layout=$req->layout;
        $reg->image=$image;
        $reg->subcategory=$data;
        $reg->save();
        }
        else{
            $reg->save();
        }
    	
    	return back()->with('success',1);
    }
    public function deleteParentCategory($name)
    {
        //$image=Category::where('category',$name)->pluck('image')->first();
        //dd(asset('/assets/parent/' . $image));
        //$r=File::delete(asset('/assets/parent/' . $image));
        //dd($r);
        Category::where('category',$name)->delete();
        Category::where('parent_category',$name)->delete();
        return back()->with('success',1);
    }
    public function deleteCategory($id)
    {
        Category::where('id',$id)->delete();
        return back()->with('success',1);
    }
    public function editCategory($id)
    {
        $data['page_title']='Edit Category';
        $data['parent']=Category::where('parent_category',null)->get();
        $data['result']=Category::where('id',$id)->first();
        return view('admin/webviews.edit_category',$data);
    }
    public function deleteProduct($id)
    {
        Product::where('id',$id)->delete();
        return back()->with('success',1);
    }
    public function editProduct($id)
    {
        $data['page_title']='Edit Product';
        $data['category']=Category::where('parent_category','!=',null)->get();
        $data['result']=Product::where('id',$id)->first();
        return view('admin/webviews.edit_product',$data);
    }
    public function deleteMenu($id)
    {
        HeaderMenu::where('id',$id)->delete();
        return back()->with('success',1);
    }
    public function editHeader($id)
    {
        $data['page_title']='Edit Header Menu';
        $data['result'] = HeaderMenu::where('id',$id)->first(); 
        $data['category']=Category::where('parent_category',null)->get();
        return view('admin/webviews/edit_header_menu',$data);
    }
    public function editHeaderMenuSubmit(Request $req)
    {
        if($req->layout=='single'){
            $data='{"sub_cat":[';
            $count=1;
            foreach ($req->subcategory as $value) {
                if($count != 1) {
                $data = $data.', ';
              }
                $data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
                $count++;
            }
            $data=$data.']}';
            //$data=json_decode($data);
            $image='';
            //return response()->json($data);
        }
        elseif($req->layout=='four'){
            $data='[{"title":"'.strtolower($req->title1).'","sub_cat":[';
            $count=1;
            foreach ($req->subcategoryt1 as $value) {
                if($count != 1) {
                $data = $data.', ';
              }
                $data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
                $count++;
            }
            $data=$data.']},{"title":"'.strtolower($req->title2).'","sub_cat":[';
            $count=1;
            foreach ($req->subcategoryt2 as $value) {
                if($count != 1) {
                $data = $data.', ';
              }
                $data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
                $count++;
            }
            $data=$data.']},{"title":"'.strtolower($req->title3).'","sub_cat":[';
            $count=1;
            foreach ($req->subcategoryt3 as $value) {
                if($count != 1) {
                $data = $data.', ';
              }
                $data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
                $count++;
            }
            $data=$data.']},{"title":"'.strtolower($req->title4).'","sub_cat":[';
            $count=1;
            foreach ($req->subcategoryt4 as $value) {
                if($count != 1) {
                $data = $data.', ';
              }
                $data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
                $count++;
            }
            $data=$data.']}]';
            //$data=json_decode($data);
            if($req->hasFile('image')) {
                $file = $req->file('image');
                $filename = 'header'.time().'.'.$req->image->extension();
                $destinationPath = storage_path('../../assets/header');
                $file->move($destinationPath, $filename);
                $image='assets/header/'.$filename;
            }
            else{
                $image=$req->image;
            }
            
            //return response()->json($data);
        }
        elseif($req->layout=='six'){
            $data='[{"title":"'.strtolower($req->title5).'","sub_cat":[';
            $count=1;
            foreach ($req->subcategoryt5 as $value) {
                if($count != 1) {
                $data = $data.', ';
              }
                $data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
                $count++;
            }
            $data=$data.']},{"title":"'.strtolower($req->title6).'","sub_cat":[';
            $count=1;
            foreach ($req->subcategoryt6 as $value) {
                if($count != 1) {
                $data = $data.', ';
              }
                $data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
                $count++;
            }
            $data=$data.']},{"title":"'.strtolower($req->title7).'","sub_cat":[';
            $count=1;
            foreach ($req->subcategoryt7 as $value) {
                if($count != 1) {
                $data = $data.', ';
              }
                $data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
                $count++;
            }
            $data=$data.']},{"title":"'.strtolower($req->title8).'","sub_cat":[';
            $count=1;
            foreach ($req->subcategoryt8 as $value) {
                if($count != 1) {
                $data = $data.', ';
              }
                $data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
                $count++;
            }
            $data=$data.']},{"title":"'.strtolower($req->title9).'","sub_cat":[';
            $count=1;
            foreach ($req->subcategoryt9 as $value) {
                if($count != 1) {
                $data = $data.', ';
              }
                $data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
                $count++;
            }
            $data=$data.']},{"title":"'.strtolower($req->title10).'","sub_cat":[';
            $count=1;
            foreach ($req->subcategoryt10 as $value) {
                if($count != 1) {
                $data = $data.', ';
              }
                $data=$data.'{"name":"'.strtolower($value).'","link":"show-product/'.urlencode($value).'"}';
                $count++;
            }
            $data=$data.']}]';
            $images = $req->file('image');
            if ($req->hasFile('image')) :
                    $count=0;
                    foreach ($images as $item):
                    $filename = 'header'.time().'-'.$count.Auth::id().'.'.$item->extension();
                        $destinationPath = storage_path('../../assets/header');
                        $item->move($destinationPath, $filename);
                        $arr[] ='assets/header/'.$filename;
                        $count++;
                    endforeach;
                    $image = implode(",", $arr);
                    $image=implode($req->imageold).','.$image;
            else:
                    $image = implode(',', $req->imageold);
            endif;       
        }
         HeaderMenu::where('id',$req->id)->update([
            'item_name'=>strtolower($req->item_name),
            'category'=>strtolower($req->category),
            'dropdown'=>strtolower($req->dropdown)
            ]);
         if($req->dropdown=='enable'){
            HeaderMenu::where('id',$req->id)->update([
            'layout'=>strtolower($req->layout),
            'image'=>trim($image,","),
            'subcategory'=>$data
            ]);
         }
         return back()->with('success',1);
    }
     public function addPolicies()
    {
        $data['page_title']='Add Content';
        $data['results']=Policy::where('id',1)->first(); 
        return view('admin/webviews.admin_add_policy',$data); 
    }

    public function addPoliciesSubmit(Request $req)
    {
        
        Policy::where('id',$req->id)->update([ 
            'term_condition'=>strtolower($req->term_condition),
            'privacy_policy'=>strtolower($req->privacy_policy),
            'return_policy'=>strtolower($req->return_policy),
            'refund_policy'=>strtolower($req->refund_policy)
        ]);
        return back()->with('success',1);
        
    }
}

