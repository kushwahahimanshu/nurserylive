<?php

namespace App\Http\Controllers\ADMIN;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use App\Category;
use Auth;
class UserController extends Controller
{
    public function showOrder()
    {
    	$data['page_title'] = 'Show Order';
    	$data['flag']=1;
    	$data['order']=Order::where('vendor_id',Auth::id())->get();
    	return view('admin/webviews/show_order', $data);
    }
    public function deleteOrder($id)
    {
    	Order::where('id',$id)->delete();
    	return back()->with('success',1);
    }
    public function viewOrderDetails($id)
    {
    	$data['page_title'] = 'Order Details';
    	$data['details']=Order::where('id',$id)->first();
    	$data['flag']=2;
    	return view('admin/webviews/show_order',$data);
    }
}
