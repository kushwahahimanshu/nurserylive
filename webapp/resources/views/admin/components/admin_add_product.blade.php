<div class="col-md-6">
  <!-- general form elements -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Add Product</h3>
    </div>
    <!-- /.card-header -->
    <!--City form start -->
    <form  action="{{url('add-product-submit')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputInstituteName">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputInstituteName" placeholder="Enter The Category">
        </div>
        <div class="form-group">
          <label for="exampleInputInstituteName">Sale count in days</label>
          <input type="text" name="sale" class="form-control" id="exampleInputInstituteName" placeholder="Enter The Sale Count of the month">
        </div>
        <div class="form-group">
          <label for="exampleInputInstituteName">price</label>
          <input type="text" name="price" class="form-control" id="exampleInputInstituteName" placeholder="Enter The Product price">
        </div>
        <div class="form-group">
          <label for="exampleInputInstituteName">Choose Category</label>
          <select name="category" class="form-control">
            <option disabled selected>Select</option>
            @foreach($category as $r)
            <option>{{$r->category}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputInstituteName">Product Quantity</label>
          <input type="text" name="product_quantity" class="form-control" placeholder="Enter Product Quantity">
        </div>
        <div class="form-group">
          <label for="exampleInputInstituteName">Type Of Stock</label> 
          <select name="type_of_product" class="form-control">
            <option>Select</option>
            <option value="in-stock">In-Stock</option>
            <option value="out-of-stock">Out Of Stock</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputInstituteName">Description</label>
          <textarea class="textarea" placeholder="Place some text here"
          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputInstituteName">Product Details</label>
          <textarea class="textarea" placeholder="Place some text here"
          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="p_details"></textarea>
        </div>
        <div class="form-group">
          <div id="image1">
            <div class="workout" id="workout1">
              <label>Image</label>
              <input type="file" class="form-control" name="image[]">
            </div>
          </div> 
          <div><a href="#" id="addImage">Add Other Image</a></div> 
        </div> 
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div> <!-- card end -->
</div>
<div class="col-md-6">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">View Product</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body  table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Sr. No.</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @php $count=1; @endphp
          @foreach($result as $r)
          <tr>
            <td>{{$count}}</td>
            <td>{{$r->name}}</td>
            <td>{{$r->price}}</td>
            <td>{{$r->category}}</td>
            <td><a href="{{url('delete-product/'.$r->id)}}" class="btn btn-danger btn-sm" title="delete"> <i class="fa fa-trash"></i></a>&nbsp;&nbsp;
              <a href="{{url('edit-product/'.$r->id)}}" class="btn btn-primary btn-sm" title="edit"> <i class="fa fa-edit"></i></a></td>
            </tr> 
            <?php $count++ ?>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>Sr. No.</th>
              <th>Name</th>
              <th>Price</th>
              <th>Category</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div><!-- card end -->
  </div> 
@section('scripts') 
  <script>
    $("#addImage").on("click", function(e) {
      console.log('1');
      e.preventDefault();
      var last = $("#image1").last().attr("id");
      template = "<div class='workout' id='workout" + parseInt(last[-1])+1 + "'><label>Image</label><br> <input type='file' class='form-control' name='image[]'></div>"
      $("#image1").append(template);
    });
  </script>
@stop