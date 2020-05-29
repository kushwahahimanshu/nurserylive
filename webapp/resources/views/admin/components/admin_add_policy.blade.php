  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Terms & Conditions</h3>
    </div> 
    <form  action="{{url('update-policy-submit')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{ $results->id }}" class="form-control"> 
      <div class="card-body"> 
    <div class="row">
      <div class="col-md-6"> 
        <div class="form-group">
          <label for="exampleInputInstituteName">Terms & Conditions</label>
          <textarea class="textarea" name="term_condition" placeholder="Place some text here"
          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">{{ $results->term_condition}}</textarea>
        </div> 
      </div>
      <div class="col-md-6"> 
        <div class="form-group">
          <label for="exampleInputInstituteName">Return Policy</label>
          <textarea class="textarea" name="privacy_policy" placeholder="Place some text here"
          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">{{ $results->privacy_policy}}</textarea>
        </div> 
      </div>
    </div>
    <div class="row">
      <div class="col-md-6"> 
        <div class="form-group">
          <label for="exampleInputInstituteName">Refund Policy</label>
          <textarea class="textarea" name="return_policy" placeholder="Place some text here"
          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">{{ $results->return_policy}}</textarea>
        </div> 
      </div>
      <div class="col-md-6"> 
        <div class="form-group">
          <label for="exampleInputInstituteName">Privacy & Data Policy</label>
          <textarea class="textarea" name="refund_policy" placeholder="Place some text here"
          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">{{ $results->refund_policy}}</textarea>
        </div> 
      </div>
    </div>  
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div> 
<!-- <div class="col-md-6"> 
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Return Policy</h3>
    </div> 
    <form  action="{{url('update-policy-submit')}}" method="post" enctype="multipart/form-data">
     {{csrf_field()}}
      <input type="hidden" name="id" value="{{ $results->id }}" class="form-control"> 
      <div class="card-body"> 
        <div class="form-group">
          <label for="exampleInputInstituteName">Return Policy</label>
          <textarea class="textarea" name="privacy_policy" placeholder="Place some text here"
          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">{{ $results->privacy_policy}}</textarea>
        </div> 
      </div>  
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div> 
</div>
<div class="col-md-6"> 
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Refund Policy</h3>
    </div> 
    <form  action="{{url('update-policy-submit')}}" method="post" enctype="multipart/form-data">
     {{csrf_field()}}
      <input type="hidden" name="id" value="{{ $results->id }}" class="form-control"> 
      <div class="card-body"> 
        <div class="form-group">
          <label for="exampleInputInstituteName">Refund Policy</label>
          <textarea class="textarea" name="return_policy" placeholder="Place some text here"
          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">{{ $results->return_policy}}</textarea>
        </div> 
      </div>  
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div> 
</div>
<div class="col-md-6"> 
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Privacy & Data Policy</h3>
    </div> 
    <form  action="{{url('update-policy-submit')}}" method="post" enctype="multipart/form-data">
     {{csrf_field()}}
      <input type="hidden" name="id" value="{{ $results->id }}" class="form-control"> 
      <div class="card-body"> 
        <div class="form-group">
          <label for="exampleInputInstituteName">Privacy & Data Policy</label>
          <textarea class="textarea" name="refund_policy" placeholder="Place some text here"
          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">{{ $results->refund_policy}}</textarea>
        </div> 
      </div>  
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div> 
</div>  -->