<div class="col-md-6">
  <!-- general form elements -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Edit Contact Details</h3>
    </div>
    <!-- /.card-header -->
    <!--City form start -->
    <form enctype="multipart/form-data" method="post" action="{{url('update-contact')}}">
      {{ csrf_field() }} 
      <input type="hidden" name="id" value="{{$result->id}}">
      <div class="card-body">
        <div class="form-group">
          <label>Address</label>
          <input type="text"   class="form-control" name="address" value="{{$result->address}}">
        </div>
        <div class="form-group">
          <label>Address1</label>
          <input type="text"   class="form-control" name="address_one" value="{{$result->address_one}}">
        </div> 
        <div class="form-group">
          <label>Contact Number</label> 
          <input type="text"   class="form-control" name="contact_number"  value="{{$result->contact_number}}">
        </div>
        <div class="form-group">
          <label>Contact Number1</label> 
          <input type="text"   class="form-control" name="contact_number_one"  value="{{$result->contact_number_one}}">
        </div>
        <div class="form-group">
          <label>Support Email</label> 
          <input type="text"   class="form-control" name="email"  value="{{$result->email}}">
        </div>
        <div class="form-group">
          <label>Fax</label> 
          <input type="text"   class="form-control" name="fax"  value="{{$result->fax}}">
        </div>

      </div><!-- /.box-body --> 
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>