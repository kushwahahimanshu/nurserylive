<div class="col-md-6">
  <!-- general form elements -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Mobile Top Menu</h3>
    </div>
    <!-- /.card-header -->
    <!--City form start -->
    <form  action="{{url('mobile-home-category-submit')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="card-body">
        <table>
            <tr>
                  <td>
                    <label>Image1</label><br>
                    <input type="file" name="img1" class="form-control" required />
                  </td>
                  <td>
                    <label>Title1</label><br>
                    <input type="text" name="t1" class="form-control" required/>
                  </td>
                  <td>
                    <label>Link Category 1</label><br>
                    <select name="c1" class="form-control" required>
                        <option disabled selected>Select</option>
                        @foreach($category as $r)
                        <option>{{$r->category}}</option>
                        @endforeach
                     </select>
                </td>
            </tr>
            <tr>
                  <td>
                    <label>Image2</label><br>
                    <input type="file" name="img2" class="form-control" required />
                  </td>
                  <td>
                    <label>Title2</label><br>
                    <input type="text" name="t2" class="form-control" required/>
                  </td>
                  <td>
                    <label>Link Category 2</label><br>
                    <select name="c2" class="form-control" required>
                        <option disabled selected>Select</option>
                        @foreach($category as $r)
                        <option>{{$r->category}}</option>
                        @endforeach
                     </select>
                  </td>
            </tr>
            <tr>
                  <td>
                    <label>Image3</label><br>
                    <input type="file" name="img3" class="form-control" required/>
                  </td>
                  <td>
                    <label>Title3</label><br>
                    <input type="text" name="t3" class="form-control" required/>
                  </td>
                  <td>
                    <label>Link Category 3</label><br>
                    <select name="c3" class="form-control" required>
                        <option disabled selected>Select</option>
                        @foreach($category as $r)
                        <option>{{$r->category}}</option>
                        @endforeach
                     </select>
                  </td>
            </tr>
            <tr>
                  <td>
                    <label>Image4</label><br>
                    <input type="file" name="img4" class="form-control" required/>
                  </td>
                  <td>
                    <label>Title4</label><br>
                    <input type="text" name="t4" class="form-control" required/>
                  </td>
                  <td>
                    <label>Link Category 4</label><br>
                    <select name="c4" class="form-control" required>
                        <option disabled selected>Select</option>
                        @foreach($category as $r)
                        <option>{{$r->category}}</option>
                        @endforeach
                     </select>
                </td>
            </tr>
            <tr>
                  <td>
                    <label>Image5</label><br>
                    <input type="file" name="img5" class="form-control" required/>
                  </td>
                  <td>
                    <label>Title5</label><br>
                    <input type="text" name="t5" class="form-control" required />
                  </td>
                  <td>
                    <label>Link Category 5</label><br>
                    <select name="c5" class="form-control" required>
                        <option disabled selected>Select</option>
                        @foreach($category as $r)
                        <option>{{$r->category}}</option>
                        @endforeach
                     </select>
                </td>
            </tr>
        </table>
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
            <th>Product Quantity</th>
            <th>Stock Type</th>
            <th>Category</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @php $count=1; @endphp
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