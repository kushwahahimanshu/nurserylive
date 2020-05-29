<div class="col-md-6"> 
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">About Us</h3>
    </div> 
    <form  action="{{url('update-about-us')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{ $result->id }}" class="form-control"> 
      <div class="card-body"> 
        <div class="form-group">
          <label for="exampleInputInstituteName">About Us</label>
          <textarea class="textarea" name="about_us" placeholder="Place some text here"
          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $result->about_us}}</textarea>
        </div>  
      </div>  
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div> 
</div>
 