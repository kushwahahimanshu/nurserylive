public function addToCart($id, Request $req)
    {
        if(Auth::check())
        {
            //Add product to cart table with user id
        } else {
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
                // setcookie("cookie[name]", $product->name);
                // setcookie("cookie[quantity]", 1);
                // setcookie("cookie[price]", $product->price);
                // setcookie("cookie[photo]", $product->image);
                // session()->put('cart', $cart);
            Cookie::queue(Cookie::forever('cart', implode(',',$cart)));
            return back()->with('success', 'Product added to cart successfully!');
        }
        

        
        //  $response = new \Illuminate\Http\Response('Test');
        // $response->withCookie(cookie('name', $product->name, $minute=20));
        // return $response;

        
 
        
 
        // if cart not empty then check if this product exist then increment quantity
        // if(isset($cart[$id])) {
 
        //     $cart[$id]['quantity']++;
 
        //     session()->put('cart', $cart);
        //     //dd($cart);
        //     setcookie("name", $product->name);
        //     setcookie("quantity", $cart[$id]['quantity']++);
        //     setcookie("price", $product->price);
        //     setcookie("photo", $product->image);

        //     $cookie = cookie('name', $product->name, 10);
        //     dd(Cookie::queue(cookie('name', $product->name, $minute = 10)));
        //     dd(Cookie::get('name'));
        //     if (isset($_COOKIE['cookie'])) {
        //         foreach ($_COOKIE['cookie'] as $name => $value) {
        //             $name = htmlspecialchars($name);
        //             $value = htmlspecialchars($value);
        //             echo "$name : $value <br />\n";
        //         }
        //     }
           // dd();
        //     return back()->with('success', 'Product added to cart successfully!');
 
        // }
 
        // // if item not exist in cart then add to cart with quantity = 1
        // $cart[$id] = [
        //     "name" => $product->name,
        //     "quantity" => 1,
        //     "price" => $product->price,
        //     "photo" => $product->image
        // ];
 
        // session()->put('cart', $cart);
        //    // $response->withCookie(cookie('name', $cart[$id]['quantity'], $minutes));
        //     setcookie("cookie[name]", $product->name);
        //     setcookie("cookie[quantity]", 1);
        //     setcookie("cookie[price]", $product->price);
        //     setcookie("cookie[photo]", $product->image);
        //    //return dd($response);

        // return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}

//for blade view session use

@if(session('cart'))
                          @foreach(session('cart') as  $details)
                            <tr>
                                <td>
                                    <a href="#"><img src="{{asset($details['photo'])}}" alt="cart" class=" "></a>
                                </td>
                                <td>
                                    <a href="#">{{ $details['name'] }}</a> 
                                </td>
                                <td>
                                    <h2>₹{{ $details['price'] }}</h2>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" class="form-control input-number" value="{{ $details['quantity'] }}">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="icon"><i class="ti-close"></i></a>
                                </td>
                                <td>
                                     <h2 class="td-color">₹ {{ $details['price']  * $details['quantity'] }}</h2>
                                </td>strpos(implode(',',Cart::where('user_id',Auth::id())->pluck('product_id')), $id) == false
                            </tr>
                          @endforeach
                            <?php// dd(session('cart')); ?>
                        @endif