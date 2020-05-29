<div class="col-md-6"> <!-- general form elements -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Add Home Page Layouts No.1</h3>
    </div> 
    <form  action="{{url('layout-one-submit')}}" method="post" enctype="multipart/form-data">
     {{csrf_field()}}
      <div class="card-body">
        <div class="form-group">
          <label >Layouts</label>
          <select class="form-control" name="layout" id="layout" onchange="openlayout(this.value)" required>
            <option value="" disabled selected>Select</option>
            <option value="layout_one">Layout One</option>
            <option value="slider_layout">Slider Layout</option>
          </select>
        </div>
        <div id="layout1" style="display: none;">
          <div class="form-group">
            <label >Image 1</label>
            <input type="file" name="img1" id="i1" class="form-control">
            <p><span style="color: red;">1200x500px *</span></p>
          </div>
          <div class="form-group">
            <label >Image 1 To Link Which Category</label>
            <select class="form-control" name="img1_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 2</label>
            <input type="file" name="img2" id="i2" class="form-control">
            <p><span style="color: red;">600x375px *</span></p>
          </div>
          <div class="form-group">
            <label>Image 2 To Link Which Category</label>
            <select class="form-control" name="img2_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 3</label>
            <input type="file" name="img3" id="i3" class="form-control">
            <p><span style="color: red;">600x375px *</span></p>
          </div>
          <div class="form-group">
            <label>Image 3 To Link Which Category</label>
            <select class="form-control" name="img3_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 4</label>
            <input type="file" name="img4" id="i4" class="form-control">
            <p><span style="color: red;">600x750px *</span></p>
          </div>
          <div class="form-group">
            <label>Image 4 To Link Which Category</label>
            <select class="form-control" name="img4_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 5</label>
            <input type="file" name="img5" id="i5" class="form-control">
            <p><span style="color: red;">600x200px *</span></p>
          </div>
          <div class="form-group">
            <label>Image 5 To Link Which Category</label>
            <select class="form-control" name="img5_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 6</label>
            <input type="file" name="img6" id="i6" class="form-control">
            <p><span style="color: red;">600x200px *</span></p>
          </div>
          <div class="form-group">
            <label>Image 6 To Link Which Category</label>
            <select class="form-control" name="img6_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 7</label>
            <input type="file" name="img7" id="i7" class="form-control">
            <p><span style="color: red;">800x450px *</span></p>
          </div>
          <div class="form-group">
            <label>Image 7 To Link Which Category</label>
            <select class="form-control" name="img7_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 8</label>
            <input type="file" name="img8" id="i8" class="form-control">
            <p><span style="color: red;">800x450px *</span></p>
          </div>
          <div class="form-group">
            <label>Image8 Link</label>
            <select class="form-control" name="img8_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 9</label>
            <input type="file" name="img9" id="i9" class="form-control">
            <p><span style="color: red;">800x450px *</span></p>
          </div>
          <div class="form-group">
            <label>Image9 Link</label>
            <select class="form-control" name="img9_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
        </div><!-- main layout div -->
        <div id="layout2" style="display: none;">
          <div class="form-group">
            <label >Image 1</label>
            <input type="file" name="si_img1" id="si1" class="form-control">
            <p><span style="color: red;">1600x750px *</span></p>
          </div>
          <div class="form-group">
            <label>Image1 Link</label>
            <select class="form-control" name="si_img1_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 2</label>
            <input type="file" name="si_img2" id="si2" class="form-control">
            <p>1600x750px</p>
          </div>
          <div class="form-group">
            <label>Image2 Link</label>
            <select class="form-control" name="si_img2_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 3</label>
            <input type="file" name="si_img3" id="si3" class="form-control">
            <p>1600x750px</p>
          </div>
          <div class="form-group">
            <label>Image3 Link</label>
            <select class="form-control" name="si_img3_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 4</label>
            <input type="file" name="si_img4" id="si4" class="form-control">
            <p>1600x750px</p>
          </div>
          <div class="form-group">
            <label>Image4 Link</label>
            <select class="form-control" name="si_img4_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 5</label>
            <input type="file" name="si_img5" id="si5" class="form-control">
            <p>1600x750px</p>
          </div>
          <div class="form-group">
            <label>Image5 Link</label>
            <select class="form-control" name="si_img5_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 6</label>
            <input type="file" name="si_img6" id="si6" class="form-control">
            <p>1600x750px</p>
          </div>
          <div class="form-group">
            <label>Image6 Link</label>
            <select class="form-control" name="si_img6_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 7</label>
            <input type="file" name="si_img7" id="si7" class="form-control">
            <p>1600x750px</p>
          </div>
          <div class="form-group">
            <label>Image7 Link</label>
            <select class="form-control" name="si_img7_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 8</label>
            <input type="file" name="si_img8" id="si8" class="form-control">
            <p>1600x750px</p>
          </div>
          <div class="form-group">
            <label>Image8 Link</label>
            <select class="form-control" name="si_img8_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 9</label>
            <input type="file" name="si_img9" id="si9" class="form-control">
            <p>1600x750px</p>
          </div>
          <div class="form-group">
            <label>Image9 Link</label>
            <select class="form-control" name="si_img9_link" id="category">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div> <!-- /.card-body --> 
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div> 
</div>
<div class="col-md-6">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">View Image Menu</h3>
    </div> <!-- /.card-header -->
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
          @foreach($record as $r)
          <tr>
            <td>{{$count}}</td>
            <td>{{$r->layout_name}}</td>
            <td>
               <a href="{{url('delete-layout/'.$r->id)}}" class="btn btn-danger btn-sm" title="delete"> <i class="fa fa-trash"></i>
              </a>
              @if($r->layout_name == 'layout_one')
              <a href="{{url('edit-layout/'.$r->id)}}" class="btn btn-primary btn-sm" title="edit"> <i class="fa fa-edit"></i>
              </a>
              @endif
             
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
    </div> <!-- /.card-body -->
  </div><!-- card end -->
</div>

<script>
  function openlayout(x) {
    document.getElementById('i1').removeAttribute('required');
    document.getElementById('i2').removeAttribute('required');
    document.getElementById('i3').removeAttribute('required');
    document.getElementById('i4').removeAttribute('required');
    document.getElementById('i5').removeAttribute('required');
    document.getElementById('i6').removeAttribute('required');
    document.getElementById('i7').removeAttribute('required');
    document.getElementById('i8').removeAttribute('required');
    document.getElementById('i9').removeAttribute('required');
    document.getElementById('si1').removeAttribute('required');
    if (x=='layout_one') {
      document.getElementById('layout1').style.display='block';
      document.getElementById('layout2').style.display='none';
      document.getElementById('i1').setAttribute('required',true);
      document.getElementById('i2').setAttribute('required',true);
      document.getElementById('i3').setAttribute('required',true);
      document.getElementById("i4").setAttribute('required',true);
      document.getElementById("i5").setAttribute('required',true);
      document.getElementById("i6").setAttribute('required',true);
      document.getElementById("i7").setAttribute('required',true);
      document.getElementById("i8").setAttribute('required',true);
      document.getElementById("i9").setAttribute('required',true);
    }
    else if(x=='slider_layout'){
      document.getElementById('layout2').style.display='block';
      document.getElementById('layout1').style.display='none';
      document.getElementById("si1").setAttribute('required',true);

    }
  }
</script>
