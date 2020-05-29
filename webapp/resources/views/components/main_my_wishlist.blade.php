 
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>Wish-List</h2> 
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
                                <th>action</th>
                                <th>total</th>
                            </tr>
                        </thead> 
                        <tbody>
                          @foreach($result as  $details)
                            <tr id="record-{{$details->id}}">
                                <td>
                                    <a href="#"><img src="{{asset($details->image)}}" alt="cart" class=" "></a>
                                </td>
                                <td>
                                    <a href="#">{{ $details->name }}</a> 
                                </td>
                                <td>
                                    <h2>₹{{ $details->price }}</h2>
                                </td>
                                <td>
                                     <span class="icon" onclick="removeProduct({{$details->id}})"><i class="ti-close" title="remove"></i></span>&nbsp;&nbsp;&nbsp;
                                     <a href="{{url('move-to-cart/'.$details->product_id)}}" title="move to cart"><i class="fa fa-cart-plus"></i></a>
                                </td>
                                <td>
                                     <h2 class="td-color">₹ {{ $details->price  * 1 }}</h2>
                                     <div></div>
                                </td>
                            </tr>
                          @endforeach
                        </tbody> 
                    </table> 
                </div>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-12"><a href="{{url('/')}}" class="btn btn-normal">continue shopping</a> <a href="#" class="btn btn-normal ml-3">check out</a></div>
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
    function removeProduct(id) {
        //console.log(id);
        $.ajax({
            url: "remove-wishlist-product",
            data:"cart_id="+id,
            type: 'get',
            success: function(response){
                    alert('product successfully deleted from Wish-List');

            }
        });
        document.getElementById('record-'+id).style.display="none";
    }
</script>