<div class="col-md-6">
  <!-- general form elements -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Edit Footer</h3>
    </div>
    <!-- /.card-header -->
    <!--City form start -->
    <form enctype="multipart/form-data" method="post" action="{{url('update-footer')}}">
      {{ csrf_field() }} 
      <input type="hidden" name="id" value="{{$result->id}}">
      <div class="card-body">
        <div class="form-group">
          <label>Content</label>
          <input type="text"   class="form-control" name="content" value="{{$result->content}}">
         </div>

        <div class="form-group">
          <label>Facebook</label> 
          <input type="text"   class="form-control" name="facebook"  value="{{$result->facebook}}">
        </div>
        <div class="form-group">
          <label>Gmail</label> 
          <input type="text"   class="form-control" name="gmail"  value="{{$result->gmail}}">
        </div>
        <div class="form-group">
          <label>Twitter</label> 
          <input type="text"   class="form-control" name="twitter"  value="{{$result->twitter}}">
        </div>
        <div class="form-group">
          <label>Instagram</label> 
          <input type="text"   class="form-control" name="instagram"  value="{{$result->instagram}}">
        </div>
        <div class="form-group">
          <label>Pinterest</label> 
          <input type="text"   class="form-control" name="pinterest"  value="{{$result->pinterest}}">
        </div>
      </div><!-- /.box-body --> 
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>