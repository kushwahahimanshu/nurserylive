<div class="col-md-3"></div>
<div class="col-md-6">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">View Order Details</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body  table-responsive">
      <table class="table table-sm">
        <tbody>
          <tr>
            <th scope="row">Customer Name</th>
            <td><?php echo DB::table('users')->where('id',$details->user_id)->pluck('name')->first();?>
            </td>
          </tr>
          <tr>
            <th scope="row">Product Name</th>
            <td>{{$details->product_name}}</td>
          </tr>
          <tr>
            <th scope="row">Price</th>
            <td>{{$details->price}}</td>
          </tr>
          <tr>
            <th scope="row">Quantity</th>
            <td>{{$details->quantity}}</td>
          </tr>
          <tr>
            <th scope="row">OrderId</th>
            <td>{{$details->sub_order_id}}</td>
          </tr>
          <tr>
            <th scope="row">Payment Mode</th>
            <td>{{$details->payment_mode}}</td>
          </tr>
          <tr>
            <th scope="row">Status</th>
            <td>{{$details->status}}</td>
          </tr>
          <tr>
            <th scope="row">Address</th>
            <?php $r=DB::table('addresses')->where('id',$details->address_id)->first();?>
            <td>
              <b>Address Type -</b> {{$r->type_of_address}}<br>
                {{$r->address_line_one}}, <br> 
                {{$r->address_line_two}},<br>
              <b>Landmark -</b> {{$r->landmark}} ,<br>
              <b>City -</b> {{$r->city}} {{$r->state}}.<br>
              <b>Pin -</b> {{$r->pin}}
            </td>
          </tr>
          <tr>
            <th scope="row">Contact Details</th>
            <?php $r=DB::table('addresses')->where('id',$details->address_id)->first();?>
            <td>
              <b>Phone -</b> {{$r->phone}}<br>
              <b>Alternate No. -</b> {{$r->alternate_phone}}
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div><!-- card end -->
</div>
<div class="col-md-3"></div>