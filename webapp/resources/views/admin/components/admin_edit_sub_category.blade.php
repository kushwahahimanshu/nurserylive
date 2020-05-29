<div class="col-md-6">
      <!-- general form elements -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Sub Category</h3>
        </div>
        <!-- /.card-header -->
        <!--City form start -->
        <form  action="{{url('add-sub-category-submit')}}" method="post" enctype="multipart/form-data">
         {{csrf_field()}}
          <div class="card-body">
            <input type="hidden" name="id" value="{{$result->id}}">
                <div class="form-group">
                  <label for="exampleInputInstituteName">Category</label>
                  <input type="text" name="category" class="form-control" id="exampleInputInstituteName" placeholder="Enter The Category" value="{{$result->category}}">
                </div>
                <div class="form-group">
                  <label>Image</label><br>
                  <img style="height: 150px; width: 130px;"  src="{{asset($result->image)}}">
                  <input type="hidden" name="image" value="{{$result->image}}"><br>
                  <input type="file" name="image">
                </div>
                <div class="form-group">
                  <label for="exampleInputInstituteName">Parent Category</label>
                  <select name="parent_category" class="form-control">
                    @foreach($parent as $r)
                    <option @if($result->parent_category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputInstituteName">Description</label>
                  <input type="text" name="description" class="form-control" id="exampleInputInstituteName" placeholder="Enter Description " value="{{$result->description}}">
                </div>
              </div>
           <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div> <!-- card end -->
</div>