<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">View Header Menu</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body  table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Sr. No.</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @php $count=1; @endphp
          @foreach($order as $r)
          <tr>
            <td>{{$count}}</td>
            <td>{{$r->product_name}}</td>
            <td>{{$r->price}}</td>
            <td>{{$r->quantity}}</td>
            <?php $result=DB::table('addresses')->where('id',$r->address_id)->first(); ?>
            <td>Name: {{$result->name}}<br>
              Phone: {{$result->phone}}<br>
            </td>
            <td><a href="{{url('delete-order/'.$r->id)}}" class="btn btn-danger btn-sm" title="delete"> <i class="fa fa-trash"></i></a>&nbsp;&nbsp;
              <a href="{{url('view-order-details/'.$r->id)}}" class="btn btn-primary btn-sm" title="view"> <i class="fa fa-eye"></i></a></td>
          </tr> 
          <?php $count++ ?>
         @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>Sr. No.</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div><!-- card end -->
</div>