<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Product;
use App\Cart;
use App\Wishlist;
use App\HeaderMenu;
use App\Footer;
use App\Contact;
use App\ContactForm;

use App\About;
use App\Address;
use App\Faq;
use App\User; 
use App\Layout;
use App\HomeSection;
use DB;
use App\Policy; 
use App\Page; 

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Input;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
class MainController extends Controller
{
     public $data = null;

    public function __construct()
    {
        $this->data['header1'] = HeaderMenu::get(); 
        $this->data['footer'] = Footer::where('id' , 1)->first(); 
        $this->data['contact'] = Contact::where('id' , 1)->first(); 
        //$this->data['category1']=Category::where('parent_category',null)->get();
         $data1=Page::where('id',1)->pluck('sidevar_category')->first();
         $data2=explode(',', $data1);
         foreach ($data2 as $key => $value) {
            $data3[]=Category::where('category',$value)->select('category','image')->first();
         }
        $this->data['category1']=$data3;
        $this->data['mobile']=Page::where('id',2)->select('image1','image2','image3','image4','image5')->first();
        //dd($this->data['mobile']);
    }

	public function index()
	{
        $data = $this->data;  
		//$data['category']=Category::where('parent_category',null)->get();
		// dd($data);
        $data['layout']=Layout::orderBy('created_at','desc')->first();
        $data['section']=HomeSection::orderBy('created_at','desc')->get();
        //dd($data['layout']);
		return view('webviews.home_page',$data);
	}
    public function showAllCategory()
    {
        $data = $this->data;  
    	$data['breadcrumb']='Category';
		$data['category']=Category::where('parent_category','!=',null)->get();
		//dd($data);
    	return view('webviews.show_category',$data);
    }
    public function showCategory($name)
    {
        $data = $this->data;  
        $data['breadcrumb']=$name.' Category';
        $data['category']=Category::where('parent_category',urldecode($name))->get();
        //dd($data);
        return view('webviews.show_category',$data);
    }
     public function showProduct($name)
    {
        $data = $this->data;  
    	$data['product']=Product::where('category',urldecode($name))->get();
    	//dd($data);
    	$data['category']=Product::where('category',urldecode($name))->first();
    	$data['breadcrumb']=urldecode($name);
    	return view('webviews.show_product',$data);
    }
        public function showProductDetails($name)
      {
        $data=$this->data;
        $data['details']=Product::where('name',urldecode($name))->first();
        $data['result']=Product::where('category',$data['details']->category)->get();
        //dd($data['result']);
        return view('webviews/main_product_details',$data);
      }
    //ritik
     public function loginPage() { 
        $data = $this->data;  
    	return view('webviews/login_page',$data);
    } 

    public function registerPage() { 
        $data = $this->data;  
    	return view('webviews/register_page',$data);
    } 

    public function mainDashboard() { 
        $data = $this->data;  
    	return view('webviews/home_page',$data);
    } 

    public function dashboard(){
    	if (Auth::user()->user_type == 1) {
    		return redirect('/dashboard');
    	}else{
    		return redirect('/home-page');
    	}
    }
    public function myCart(Request $req)
    { 

        $data = $this->data;
        if(Auth::check()){ 
         //Add product to cart table with user id
            $cart = $req->cookie('cart');
             if($cart == null) {
                $cart = [];
            } else {
                $cart = explode(',',$cart);
            }
            foreach ($cart as $key => $value) {
                    $data= new Cart;
                    $data->user_id=Auth::id();
                    $data->product_id=$value;
                    $data->quantity=1;
                    $data->save();
            }
            Cookie::queue(
               Cookie::forget('cart')
                 ) ;
            $r=Cart::where('user_id',Auth::id())->pluck('product_id');
            //dd($r);
            foreach ($r as $key => $r1) {
                $data1[]=DB::table('products')
            ->join('carts', 'products.id', '=', 'carts.product_id')
            ->select('products.name', 'products.image', 'products.price','carts.quantity','carts.id')->where('products.id',$r1)
            ->first();
            //$data1[]=Product::where('id',$r1)->select('name','image','price')->first();
            }
            if (Cart::where('user_id',Auth::id())->count()>0) {
                  $data['result']=$data1;
             //dd($data['result']);
            }
            else{
                $data['result']='Please Choose To Continue Shopping';
             //dd($data['result']);
            }
        return view('webviews/main_my_cart',$data);
        }
        else{
            return redirect('login-page');
        }
    }
    public function addToCart($id, Request $req)
    {
        $data = $this->data;  
        if(Auth::check())
        {
            //Add product to cart table with user id
          if (Cart::where('user_id',Auth::id())->count()>0) {
             if (Cart::where('user_id', Auth::id())->where('product_id', $id)->first() == null) {
                    $data= new Cart;
                    $data->user_id=Auth::id();
                    $data->product_id=$id;
                    $data->quantity=1;
                    $data->save();
                }
          }
          else{ //for first time user 
                    $data= new Cart;
                    $data->user_id=Auth::id();
                    $data->product_id=$id;
                    $data->quantity=1;
                    $data->save();
          }
            return back()->with('success', 'Product added to cart successfully!');
        } 
        else
         {
            $product = Product::find($id);
            if(!$product) {
                abort(404);     
            }

            $cart = $req->cookie('cart');
            //dd($cart);
            if($cart == null) {
                $cart = [];
            } else {
                $cart = explode(',',$cart);
            }

            // if cart is empty then this the first product
            if(strpos(implode(',',$cart), $id) == false) {     
                array_push($cart, $id);
            }
            Cookie::queue(Cookie::forever('cart', implode(',',$cart)));
            return back()->with('success', 'Product added to cart successfully!');
        }
    }
    public function cartUpdate(Request $req)
    {
        //dd($req->cart_id);
        //return $req['cart_id'];
        Cart::where('id',$req->cart_id)->update([
            'quantity'=>$req->new_quantity
        ]);
        return 1;
    }
    public function removeProduct(Request $req)
    {
        //dd($req->cart_id);
        Cart::where('id',$req->cart_id)->delete();
        return 1;
    }

    public function myWishlist() { 
        $data = $this->data;  
        $r=Wishlist::where('user_id',Auth::id())->pluck('product_id');
        if ($r->count()>0) {
         foreach ($r as $key => $r1) {
            $data1[]=DB::table('products')
            ->join('wishlists', 'products.id', '=', 'wishlists.product_id')
            ->select('products.name', 'products.image', 'products.price','wishlists.id','wishlists.product_id')->where('products.id',$r1)
            ->first();
            //$data1[]=Product::where('id',$r1)->select('name','image','price')->first();
         }
          $data['result']=$data1;
             //dd($data['result']);
        }
        else{
            $data['result']='Your Wishlist Is Empty';
        }

        return view('webviews/main_my_wishlist',$data);
    }

    public function addToWishlist($id)
    {
        $data = $this->data;  
        if (Wishlist::where('user_id',Auth::id())->count()>0) {
             if (Wishlist::where('user_id', Auth::id())->where('product_id', $id)->first() == null) {
                    $data= new Wishlist;
                    $data->user_id=Auth::id();
                    $data->product_id=$id;
                    $data->save();
                }
          }
          else{ //for first time user 
                    $data= new Wishlist;
                    $data->user_id=Auth::id();
                    $data->product_id=$id;
                    $data->save();
          }
            return redirect('show-category')->with('success', 'Product added to Wishlist successfully!');
    }
    public function moveToCart($id, Request $req)
    {
        //dd($id);
        if (Cart::where('user_id',Auth::id())->count()>0) {
             if (Cart::where('user_id', Auth::id())->where('product_id', $id)->first() == null) {
                    $data= new Cart;
                    $data->user_id=Auth::id();
                    $data->product_id=$id;
                    $data->quantity=1;
                    $data->save();
                }
          }
          else{ //for first time user 
                    $data= new Cart;
                    $data->user_id=Auth::id();
                    $data->product_id=$id;
                    $data->quantity=1;
                    $data->save();
          }
          Wishlist::where('user_id',Auth::id())->where('product_id',$id)->delete();

            return back()->with('success', 'Product added to cart successfully!');
    }
    public function removeWishlistProduct(Request $req)
    {
        //dd($req->cart_id);
        Wishlist::where('id',$req->cart_id)->delete();
        //return 1;
    }
    public function termConditions() { 
        $data = $this->data; 
        $data['result']=Policy::where('id',1)->get();  
        return view('webviews/main_term_condition',$data);
    } 

    public function privacyPolicy() { 
        $data = $this->data;
        $data['result']=Policy::where('id',1)->get();  

        return view('webviews/main_privacy_policy',$data);
    } 

    public function refundPolicy() { 
        $data = $this->data; 
        $data['result']=Policy::where('id',1)->get();  

        return view('webviews/main_refund_policy',$data);
    } 

    public function returnPolicy() { 
        $data = $this->data; 
        $data['result']=Policy::where('id',1)->get();  

        return view('webviews/main_return_policy',$data);
    }
    public function faq()
    {
         $data = $this->data; 
        $data['faq'] = Faq::orderBy('id','asc')->get(); 
        return view('webviews.main_faq',$data);
    }

    public function aboutUs()
    {
         $data = $this->data; 
        $data['about'] = About::where('id',1)->get();   
        return view('webviews.main_about_us',$data);
    }

    public function myAccount(){
        $data = $this->data;  
        return view('webviews.main_my_account',$data);
    }

    public function myAccountEdit($id){
        $data = $this->data;  
        $data['result'] = Address::where('id',$id)->first();
        return view('webviews.main_my_account_edit_address',$data);
    }
    public function myAccountDelete($id){
        Address::where('id',$id)->delete();
        return back();
    }
    
    public function newPassword(Request $req){
        $password=Auth::user()->password;
        $new=$req->new_pwd;
        $cnf=$req->cnf_pwd;
        if(Hash::check(Input::get('old_pwd') ,$password)){
            if($new==$cnf){
                user::where('id',auth::user()->id)->update([
                    'password'=>bcrypt($req->new_pwd),
                     
                ]);
                return  redirect('my-account')->with('msg','Your Password Reset Successfull');
            }
            else{
                return  redirect('my-account')->with('msg','Confirm Password Not Match');
            }
        }
        else{
            return  redirect('my-account')->with('msg','Your Credential Not Match');
        }
    } 
 
    public function myAccountAddressSubmit(Request $req){  
        if($req->id){ 
            Address::where('id',$req->id)->update([
                'name'=>Auth::user()->name,
                'type_of_address'=>$req->type_of_address,
                'address_line_one'=>$req->address_line_one,
                'address_line_two'=>$req->address_line_two,
                'city'=>$req->city,
                'landmark'=>$req->landmark,
                'state'=>$req->state,
                'pin'=>$req->pin, 
            ]); 
            return redirect('my-account');
        } 
        else{
            $data = $this->data;
            $data = new Address; 
            $data->name = Auth::user()->name; 
            $data->address_line_one = $req->address_line_one;
            $data->address_line_two = $req->address_line_two;
            $data->city = $req->city;
            $data->type_of_address = $req->type_of_address;
            $data->landmark = $req->landmark;
            $data->state = $req->state;
            $data->pin = $req->pin;
            $data->phone = $req->phone;
            $data->alternate_phone = $req->alternate_phone;
            $data->user_id = Auth::user()->id; 
            $data->save(); 
            return back();
            /*return back();*/
        }
    } 
    public function contactUs()
    {
        $data = $this->data;  
        return view('webviews.main_contact_us',$data);
    }
    public function contactUsFormSubmit(Request $req)
    { 
    
        $data = $this->data;

        $reg= new ContactForm;
        $reg->fname = $req->fname;
        $reg->lname = $req->lname;
        $reg->phone = $req->phone; 
        $reg->email = $req->email; 
        $reg->message = $req->message; 
        $reg->save(); 
          return back();
    } 
}
