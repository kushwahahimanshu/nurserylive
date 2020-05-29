<div class="col-md-6">
      <!-- general form elements -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Add Category</h3>
        </div>
        <!-- /.card-header -->
        <!--City form start -->
        <form  action="{{url('add-parent-category-submit')}}" method="post" enctype="multipart/form-data">
         {{csrf_field()}}
          <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputInstituteName">Category</label>
                  <input type="text" name="category" class="form-control" id="exampleInputInstituteName" placeholder="Enter The Category">
                </div>
                <div class="form-group">
                  <label for="exampleInputInstituteCode">Image</label>
                  <input type="file" name="image" class="form-control" id="exampleInputInstituteCode" >
                </div>
              </div>
           <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div> <!-- card end -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Show Category To Homepage</h3>
        </div>
        <!-- /.card-header -->
        <!--City form start -->
        <form  action="{{url('add-parent-category-submit')}}" method="post" enctype="multipart/form-data">
         {{csrf_field()}}
              <div class="card-body">
                <div class="form-group">
                  <input type="hidden" name="id" value="1">
                  <label for="exampleInputInstituteName">Category</label>
                  <select id="e1" multiple class="form-control" name="category[]" required>
                        <option value="" disabled>Select</option>
                        @foreach($category as $r)
                         <option value="{{$r->category}}">{{ucwords($r->category)}}</option>
                        @endforeach
                  </select>
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
      <h3 class="card-title">View Categories</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body  table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Sr. No.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @php $count=1; @endphp
          @foreach($category as $r)
          <tr>
            <td>{{$count}}</td>
            <td>{{ucwords($r->category)}}</td>
            <td>@php
                   if(!empty($r->image))
                  { @endphp
                    <img src="{{ url($r->image)}}" style="height: 100px; width: 100px;">
                  @php
                    }
                    else
                    {
                  @endphp
                  <h6>No Image Found</h6>
                  @php 
                    } 
                  @endphp
            </td>
            <td><a href="{{url('delete-parent-category/'.$r->category)}}" class="btn btn-danger btn-sm" title="delete" onclick="return ConfirmDelete()"> <i class="fa fa-trash"></i></a></td>
          </tr> 
          <?php $count++ ?>
         @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>Sr. No.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div><!-- card end -->
</div>
<script type="text/javascript">
  function ConfirmDelete()
{
  var x = confirm("Are you sure you want to delete Parent Category? It Also Deleted It's Subcategory");
  if (x)
      return true;
  else
    return false;
}
</script>