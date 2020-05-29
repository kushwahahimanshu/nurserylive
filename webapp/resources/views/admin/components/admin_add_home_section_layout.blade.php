<div class="col-md-6">
      <!-- general form elements -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Add Home Page Section</h3>
        </div>
        <!-- /.card-header -->
        <!--City form start -->
        <form  action="{{url('section-layout-submit')}}" method="post" enctype="multipart/form-data">
         {{csrf_field()}}
          <div class="card-body">
            <p style="color: red;"><strong><b>Note :</b></strong> Please Upload The Same Size Of Images</p>
                  <div class="form-group">
                    <label>Section Layout Options</label><br>
                    <input type="radio" name="layout" value="six" onchange="openform(this.value)"> 6 column
                    <input type="radio" name="layout" value="four" onchange="openform(this.value)"> 4 Column
                    <input type="radio" name="layout" value="three" onchange="openform(this.value)"> 3 Column
                  </div>
                  <div id="three" style="display: none;">
                    <div class="form-group">
                      <label >Title</label>
                      <input type="text" name="title" id="t1" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label >Image 1</label>
                      <input type="file" name="img1" id="i1" class="form-control">
                    </div>
                    <div class="form-group">
                      <label >Image1 Title</label>
                      <input type="text" name="img1_title" id="img_t1" class="form-control">
                    </div>
                    <div class="form-group">
                      <label >Image 1 Link</label>
                      <select class="form-control" name="img1_link" id="img_l1">
                        <option value="" disabled selected>Select</option>
                       @foreach($category as $r)
                        <option value="{{$r->category}}">{{$r->category}}</option>
                       @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Image 2</label>
                      <input type="file" name="img2" id="i2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label >Image2 Title</label>
                      <input type="text" name="img2_title" id="img_t2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Image2 Link</label>
                       <select class="form-control" name="img2_link" id="img_l2">
                        <option value="" disabled selected>Select</option>
                       @foreach($category as $r)
                        <option value="{{$r->category}}">{{$r->category}}</option>
                       @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Image 3</label>
                      <input type="file" name="img3" id="i3" class="form-control">
                    </div>
                    <div class="form-group">
                      <label >Image3 Title</label>
                      <input type="text" name="img3_title" id="img_t3" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Image3 Link</label>
                       <select class="form-control" name="img3_link" id="img_l3">
                        <option value="" disabled selected>Select</option>
                       @foreach($category as $r)
                        <option value="{{$r->category}}">{{$r->category}}</option>
                       @endforeach
                      </select>
                    </div>
                  </div>
                  <div id="four" style="display: none;">
                    <div class="form-group">
                      <label >Image 4</label>
                      <input type="file" name="img4" id="i4" class="form-control">
                    </div>
                    <div class="form-group">
                      <label >Image4 Title</label>
                      <input type="text" name="img4_title" id="img_t4" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Image4 Link</label>
                       <select class="form-control" name="img4_link" id="img_l4">
                        <option value="" disabled selected>Select</option>
                       @foreach($category as $r)
                        <option value="{{$r->category}}">{{$r->category}}</option>
                       @endforeach
                      </select>
                    </div>
                  </div>
                  <div id="six" style="display: none;">
                    <div class="form-group">
                      <label >Image 5</label>
                      <input type="file" name="img5" id="i5" class="form-control">
                    </div>
                    <div class="form-group">
                      <label >Image5 Title</label>
                      <input type="text" name="img5_title" id="img_t5" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Image5 Link</label>
                       <select class="form-control" name="img5_link" id="img_l5">
                        <option value="" disabled selected>Select</option>
                       @foreach($category as $r)
                        <option value="{{$r->category}}">{{$r->category}}</option>
                       @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Image 6</label>
                      <input type="file" name="img6" id="i6" class="form-control">
                    </div>
                    <div class="form-group">
                      <label >Image6 Title</label>
                      <input type="text" name="img6_title" id="img_t6" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Image6 Link</label>
                       <select class="form-control" name="img6_link" id="img_l6">
                        <option value="" disabled selected>Select</option>
                       @foreach($category as $r)
                        <option value="{{$r->category}}">{{$r->category}}</option>
                       @endforeach
                      </select>
                    </div>
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
      <h3 class="card-title">View Image Menu</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body  table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Sr. No.</th>
            <th>Layout Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @php $count=1; @endphp
          @foreach($section as $r)
          <tr>
            <td>{{$count}}</td>
            <td>{{$r->layout_name}}</td>
            <td>
              <a href="{{url('edit-home-section/'.$r->id)}}" class="btn btn-primary btn-sm" title="edit"> <i class="fa fa-edit"></i>
              </a>
              <a href="{{url('delete-home-section/'.$r->id)}}" class="btn btn-danger btn-sm" title="delete"> <i class="fa fa-trash"></i>
              </a>
            </td>
          </tr>
          @php $count++ @endphp
          @endforeach

        </tbody>
        <tfoot>
          <tr>
            <th>Sr. No.</th>
            <th>Layout Name</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div><!-- card end -->
</div>

<script>
function openform(x) {
  document.getElementById('i1').removeAttribute('required');
  document.getElementById('i2').removeAttribute('required');
  document.getElementById('i3').removeAttribute('required');
  document.getElementById('i4').removeAttribute('required');
  document.getElementById('i5').removeAttribute('required');
  document.getElementById('i6').removeAttribute('required');
  // document.getElementById('i7').removeAttribute('required');
  // document.getElementById('i8').removeAttribute('required');
  document.getElementById('t1').removeAttribute('required');
  if (x=='six') {
    document.getElementById('six').style.display='block';
    document.getElementById('three').style.display='block';
    document.getElementById('four').style.display='block';
    document.getElementById('i1').setAttribute('required',true);
    document.getElementById('i2').setAttribute('required',true);
    document.getElementById('i3').setAttribute('required',true);
    document.getElementById("i4").setAttribute('required',true);
    document.getElementById("i5").setAttribute('required',true);
    document.getElementById("i6").setAttribute('required',true);
    document.getElementById("t1").setAttribute('required',true);
  }
  else if(x=='four'){
    document.getElementById('three').style.display='block';
    document.getElementById('four').style.display='block';
    document.getElementById('six').style.display='none';

    document.getElementById('i1').setAttribute('required',true);
    document.getElementById('i2').setAttribute('required',true);
    document.getElementById('i3').setAttribute('required',true);
    document.getElementById("i4").setAttribute('required',true);
    // document.getElementById("i5").setAttribute('required',true);
    // document.getElementById("i6").setAttribute('required',true);
    // document.getElementById("i7").setAttribute('required',true);
    // document.getElementById("i8").setAttribute('required',true);
    document.getElementById("t1").setAttribute('required',true);
  }
   else if (x=='three') {
    document.getElementById('three').style.display='block';
    document.getElementById('four').style.display='none';
    document.getElementById('six').style.display='none';
    document.getElementById('i1').setAttribute('required',true);
    document.getElementById('i2').setAttribute('required',true);
    document.getElementById('i3').setAttribute('required',true);
    // document.getElementById("i4").setAttribute('required',true);
    // document.getElementById("i5").setAttribute('required',true);
    // document.getElementById("i6").setAttribute('required',true);
    document.getElementById("t1").setAttribute('required',true);
  }
}
</script>
