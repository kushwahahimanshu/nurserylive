<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use App\Order;
use App\HeaderMenu;
use Auth;
use App\Cart;
use DB;
use App\Footer;
use App\Contact;
use App\Product;
use App\Category;

class OrderController extends Controller
{
	 public $data = null;

    public function __construct()
    {
        $this->data['header1'] = HeaderMenu::orderBy('item_name','asc')->get();
        $this->data['footer'] = Footer::where('id' , 1)->first(); 
        $this->data['contact'] = Contact::where('id' , 1)->first();  
        $this->data['category1']=Category::where('parent_category',null)->get();
    }
    public function myOrder() { 
    $data = $this->data;  
    $data['result'] = Order::where('user_id',Auth::user()->id)->where('reason', '=' , null)->orderBy('id','desc')->get();
    return view('webviews/main_my_order',$data);
    }
    public function checkoutForm(Request $req) { 
      $data = $this->data;   
      $data['result'] = Address::where('user_id',Auth::user()->id)->orderBy('created_at' ,'desc')->first(); 
      return view('webviews/main_checkout_form', $data);
    }

    public function checkoutFormSubmit(Request $req){  
      return redirect('order-placed/'.$req->id);
    }

    public function orderDetails() { 
        $data = $this->data;   
        return view('webviews/main_payment_details', $data);
     }

    public function orderDetailSubmit(Request $req)
    { 
      $req->validate([ 
        'captcha' => 'required|captcha'
      ]);  
      $count = 0;
      $count1 = 1; 
      $cart = Cart::where('user_id',Auth::user()->id)->Select('product_id','quantity')
      ->orderBy('created_at','desc')->get();  
      foreach ($cart as $r){
        $data = new Order;
        $data->payment_mode = $req->payment_mode;  
        $data->quantity = $r->quantity;  
        $data->vendor_id = DB::table('products')->where('id',$r->product_id)->pluck('user_id')->first(); 
        $data->product_name = DB::table('products')->where('id',$r->product_id)->pluck('name')->first();
        $data->product_price = DB::table('products')->where('id',$r->product_id)->pluck('price')->first();  
        $data->price = DB::table('products')->where('id',$r->product_id)->pluck('price')->first()*$r->quantity;  
        $data->order_id = time().Auth::user()->id; 
        $data->sub_order_id = time().Auth::user()->id.$count1++; 
        $data->address_id = DB::table('addresses')->where('user_id',Auth::user()->id)->pluck('id')->first(); 
        $data->user_id = Auth::user()->id;   
        $data->status =  'Placed';  
        $data->save();
        $count++;
        Cart::where('user_id',Auth::user()->id)->delete(); 
    }  
    return redirect('my-order');

  } 
  public function refreshCaptcha(){
    return response()->json(['captcha'=> captcha_img()]);
  } 

  public function orderReturn($sub_order_id){
    $data = $this->data;   
    $data['result'] = Order::where('sub_order_id',$sub_order_id)->first();
    return view('webviews/main_order_return', $data);
  }

  public function orderReturnSubmit(Request $req){  
    $count = 1; 
    $data = new Order;
    $data->payment_mode = DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('payment_mode')->first();  
    $data->quantity = DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('quantity')->first();  
    $data->vendor_id = DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('vendor_id')->first();  
    $data->product_name =DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('product_name')->first();  
    $data->product_price = DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('product_price')->first();  
    $data->price = DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('price')->first();  
    $data->order_id =DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('order_id')->first();  
    $data1 = DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('sub_order_id')->first(); 
    $data->sub_order_id = $data1.'R'.$count++;
    $data->address_id =DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('address_id')->first(); 
    $data->user_id = Auth::user()->id;   
    $data->reason = $req->reason;   
    $data->status =  'Order Return';  
    $data->save();   
    return redirect('my-order'); 
  }

  public function orderExchange($sub_order_id){
    $data = $this->data;   
    $data['result'] = Order::where('sub_order_id',$sub_order_id)->first();
    return view('webviews/main_order_exchange', $data);
  }

  public function orderExchangeSubmit(Request $req){  
    $count = 1; 
    $data = new Order;
    $data->payment_mode = DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('payment_mode')->first();  
    $data->quantity = DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('quantity')->first();  
    $data->vendor_id = DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('vendor_id')->first();  
    $data->product_name =DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('product_name')->first();  
    $data->product_price = DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('product_price')->first();  
    $data->price = DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('price')->first();  
    $data->order_id =DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('order_id')->first();  
    $data1 = DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('sub_order_id')->first(); 
    $data->sub_order_id = $data1.'E'.$count++;
    $data->address_id =DB::table('orders')->where('sub_order_id',$req->sub_order_id)->pluck('address_id')->first(); 
    $data->user_id = Auth::user()->id;   
    $data->reason = $req->reason;   
    $data->status =  'Order Exchange';  
    $data->save();   
    return redirect('my-order'); 
  }
   public function trackOrder() { 
    $data = $this->data;   
    return view('webviews/main_order_track_now',$data);
  }

  public function trackOrderSubmit(Request $req)
  {    
    $data1['order'] = Order::where('order_id',$req->sub_order_id)->get(); 
    if($data1['order']->count()>0) {  
      $data = $this->data; 
      return view('webviews/main_order_track_now_details',$data,$data1); 
    }else{ 
      $data2['order'] = Order::where('sub_order_id',$req->sub_order_id)->first();  
      if($data2['order']!= null){ 
        $data = $this->data; 
        return view('webviews/main_sub_order_track_now_details',$data ,$data2); 
      }else{  
        $data = $this->data; 
        return view('webviews/main_order_track_now_details',$data ,$data1,$data2);
      }  
    }
  }
  public function trackOrderDetails()
  {   
    return view('track_now_details');
  }
  public function searchResult($rowdata)
  {
    $data = $this->data;  
    $data['breadcrumb']=$rowdata;
    $count=0;
    $where='';
    $data1=explode(' ', $rowdata);
    foreach ($data1 as  $value) {
      if ($count !=0 ) {
        $where.=' || ';
      }
      $where.="name like '%".$value."%' || category like '%".$value."%' || description like '%".$value."%'|| about_product_details like '%".$value."%'";
      $count++;
    }
    $data['product']=Product::whereRaw($where)->get();
    //dd($data['product']);
    return view('webviews.show_product',$data);
  }
}
