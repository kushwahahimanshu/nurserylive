 
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>cart</h2> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--section start-->
<section class="cart-section section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
             @if(is_array($result))
                <div class="table-responsive">
                    <table class="table cart-table table-responsive">

                        <thead>
                            <tr>
                                <th>image</th>
                                <th>product name</th>
                                <th>price</th>
                                <th>quantity</th>
                                <th>action</th>
                                <th>total</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @php 
                            $total_amount=0;
                            @endphp
                          @foreach($result as  $details)
                            <tr id="record-{{$details->id}}">
                                <td>
                                    <a href="#"><img src="{{asset($details->image)}}" alt="cart" class=" "></a>
                                </td>
                                <td>
                                    <a href="#">{{ $details->name }}</a> 
                                </td>
                                <td>
                                    <h2>₹<span id="price-{{$details->id}}">{{ $details->price }}</span></h2>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <span style="font-size: 29px; position: absolute; left: 58px; top: -5px; z-index: 99999;" onclick="counterUpdate(1,{{$details->id}})"> -
                                            </span>
                                            
                                            <input type="text" name="quantity" class="form-control input-number" id="input-quantity-{{$details->id}}" value="{{$details->quantity}}"  readonly>
                                                <span style="font-size: 29px; position: absolute;right: 56px; top: -5px;" onclick="counterUpdate(2,{{$details->id}})">+
                                               </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="icon" onclick="removeProduct({{$details->id}})"><i class="ti-close"></i></span>
                                </td>
                                <td>
                                     <h2 class="td-color" id="sub-total-{{$details->id}}">₹ {{ $details->price  * $details->quantity }}</h2>
                                     <?php $total_amount+=  $details->price  * $details->quantity;
                                     //dd($total_amount);?>
                                </td>
                            </tr>
                          @endforeach
                        </tbody> 
                    </table> 
                    <table class="table cart-table table-responsive-md">
                    <tfoot>
                    <tr>
                        <td>total price : ₹ <span id="total">{{$total_amount}}</span></td>
                        <td>
                        </td>
                    </tr>
                    </tfoot>
                </table>
                </div>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-12"><a href="{{url('/')}}" class="btn btn-normal">continue shopping</a> <a href="{{url('checkout')}}" class="btn btn-normal ml-3">check out</a></div>
        </div>
        @else
                         <h3 style="text-align: center; color: red;">{{$result}}</h3>
        <div class="row cart-buttons">
            <div class="col-12"><a href="{{url('/')}}" class="btn btn-normal">continue shopping</a></div>
        </div>
        @endif  
    </div>
</section> 
<script type="text/javascript">

    function counterUpdate(type, id) {
        if(type == 1) {
            if(parseInt(document.getElementById('input-quantity-'+id).value) > 1) {
                document.getElementById('input-quantity-'+id).value = parseInt(document.getElementById('input-quantity-'+id).value) - 1;
                //for total cart amount calculation
                document.getElementById('total').innerHTML= parseInt(document.getElementById('total').innerHTML) - parseInt(document.getElementById('price-'+id).innerHTML);
            }
        } else {
            document.getElementById('input-quantity-'+id).value = parseInt(document.getElementById('input-quantity-'+id).value) + 1;
                //for total cart amount calculation
                document.getElementById('total').innerHTML= parseInt(document.getElementById('total').innerHTML) + parseInt(document.getElementById('price-'+id).innerHTML);
        }
        save_to_db(id);
        //for amount calculation in row on the basis of id/product quantity incre/decre.
        document.getElementById('sub-total-'+id).innerHTML = parseInt(document.getElementById('input-quantity-'+id).value) * parseInt(document.getElementById('price-'+id).innerHTML);
    }

    function save_to_db(cart_id) {
        console.log(document.getElementById('input-quantity-'+cart_id).value);
        $.ajax({
            url : "cart-update",
            data : "cart_id="+cart_id+"&new_quantity="+document.getElementById('input-quantity-'+cart_id).value,
            type : 'get',
            success : function(response) {
                //alert(response);
            }
        });
    }
    function removeProduct(id) {
        //console.log(id);
        $.ajax({
            url: "remove-product",
            data:"cart_id="+id,
            type: 'get',
            success: function(response){
                    alert('product successfully deleted from cart');

            }
        });
        document.getElementById('record-'+id).style.display="none";
        //for total cart amount calculation
        document.getElementById('total').innerHTML= parseInt(document.getElementById('total').innerHTML) - parseInt(document.getElementById('price-'+id).innerHTML);
    }
</script>