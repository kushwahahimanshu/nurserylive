<div class="col-md-6">
      <!-- general form elements -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Product</h3>
        </div>
        <!-- /.card-header -->
        <!--City form start -->
        <form  action="{{url('add-product-submit')}}" method="post" enctype="multipart/form-data">
         {{csrf_field()}}
          <div class="card-body">
            <input type="hidden" name="id" value="{{$result->id}}">
                <div class="form-group">
                  <label for="exampleInputInstituteName">Name</label>
                  <input type="text" name="name" class="form-control" value="{{$result->name}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputInstituteName">Sale count in days</label>
                  <input type="text" name="sale" class="form-control" value="{{$result->sold}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputInstituteName">price</label>
                  <input type="text" name="price" class="form-control" value="{{$result->price}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputInstituteName">Choose Category</label>
                  <select name="category" class="form-control">
                    <option disabled selected>Select</option>
                    @foreach($category as $r)
                    <option @if($result->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputInstituteName">Product Quantity</label>
                  <input type="text" name="product_quantity" class="form-control" placeholder="Enter Product Quantity" value="{{$result->product_quantity}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputInstituteName">Type Of Stock</label> 
                  <select name="type_of_product" class="form-control">
                    <option>Select</option>
                    <option value="in-stock"  @if($result->type_of_product =='in-stock') selected @endif>In-Stock</option>
                    <option value="out-of-stock"   @if($result->type_of_product=='out-of-stock') selected @endif>Out Of Stock</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputInstituteName">Description</label>
                  <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">{!!$result->description!!}</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputInstituteName">Product Details</label>
                 <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="p_details">{!!$result->about_product_details!!}</textarea>
                </div>
                <?php $data=explode(',', $result->image); 
                $count = 1;?>
                @foreach($data as $r1)
                <div class="form-group">
                  <label>Image</label><br>
                  <img style="height: 150px; width: 130px;"  src="{{asset($r1)}}">
                  <input type="hidden" id="image{{$count}}" name="imageold[]" value="{{$r1}}"><br>
                  <input type="file" name="image[]" onchange="flush({{$count}})">
                </div>
                @php $count++; @endphp
                @endforeach
              </div>
           <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div> <!-- card end -->
</div>
<script>
  function flush(x) {
    document.getElementById('image'+x).value=null;
  }
</script>