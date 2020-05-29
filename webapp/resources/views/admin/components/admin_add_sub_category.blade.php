<div class="col-md-6">
      <!-- general form elements -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Add Sub Category</h3>
        </div>
        <!-- /.card-header -->
        <!--City form start -->
        <form  action="{{url('add-sub-category-submit')}}" method="post" enctype="multipart/form-data">
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
                <div class="form-group">
                  <label for="exampleInputInstituteName">Parent Category</label>
                  <select name="parent_category" class="form-control">
                    <option disabled selected>Select</option>
                    @foreach($parent as $r)
                    <option>{{$r->category}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputInstituteName">Description</label>
                  <input type="text" name="description" class="form-control" id="exampleInputInstituteName" placeholder="Enter Description ">
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
            <th>Category</th>
            <th>Parent Category</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @php $count=1; @endphp
          @foreach($category as $r)
          <tr>
            <td>{{$count}}</td>
            <td>{{$r->category}}</td>
            <td>{{$r->parent_category}}</td>
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
            <td><a href="{{url('delete-category/'.$r->id)}}" class="btn btn-danger btn-sm" title="delete"> <i class="fa fa-trash"></i></a>&nbsp;&nbsp;
              <a href="{{url('edit-category/'.$r->id)}}" class="btn btn-primary btn-sm" title="edit"> <i class="fa fa-edit"></i></a></td>
          </tr> 
          <?php $count++ ?>
         @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>Sr. No.</th>
            <th>Category</th>
            <th>Parent Category</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div><!-- card end -->
</div>