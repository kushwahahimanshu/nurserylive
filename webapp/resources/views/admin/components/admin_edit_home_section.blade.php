<div class="col-md-6"> <!-- general form elements -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Edit Home Page Section</h3>
    </div> <!-- /.card-header --> 
    <form  action="{{url('edit-home-section-submit')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$section->id}}">
      <div class="card-body">
        <p style="color: red;"><strong><b>Note :</b></strong> Please Upload The Same Size Of Images</p>
        <div class="form-group">
          <label>Section Layout Options</label><br>
          @if($section->layout_name=='six')
          <input type="radio" name="layout" value="six"  @if($section->layout_name=='six') checked @endif onchange="openform(this.value)"> 6 column
          @elseif($section->layout_name=='four') 
          <input type="radio" name="layout" value="four" @if($section->layout_name=='four') checked @endif  onchange="openform(this.value)"> 4 Column
          @elseif($section->layout_name=='three') 
          <input type="radio" name="layout" value="three" @if($section->layout_name=='three') checked @endif  onchange="openform(this.value)"> 3 Column
          @endif
        </div> 
        <div id="three">
          <div class="form-group">
            <label >Title</label>
            <input type="text" name="title" id="t1" value="{{$section->title}}" class="form-control" required>
          </div>
          <?php
            $rk = json_decode($section->image1); 
            $rk1 = json_decode($section->image2); 
            $rk2 = json_decode($section->image3); 
            $rk3 = json_decode($section->image4); 
            $rk4 = json_decode($section->image5); 
            $rk5 = json_decode($section->image6);  
          ?>
          <div class="form-group">
            <label >Image 1</label><br>
            <img style="height: 150px; width: 130px;" src="{{asset($rk->image)}}"><br>
            <input type="hidden" name="img1" id="i1" class="form-control" value="{{asset($rk->image)}}"><br> 
            <input type="file" name="img1" id="i1"  value="{{$rk->image}}" class="form-control">
          </div>
          <div class="form-group">
            <label >Image1 Title</label>
            <input type="text" name="img1_title" id="img_t1" value="{{$rk->img_title}}" class="form-control">
          </div>
          <div class="form-group">
            <label >Image 1 Link</label>
            <select class="form-control" name="img1_link" id="img_l1">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option  @if($rk->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 2</label><br>
            <img style="height: 150px; width: 130px;" src="{{asset($rk1->image)}}"><br>
            <input type="hidden" name="img2" id="i1" class="form-control" value="{{asset($rk1->image)}}"><br> 
            <input type="file" name="img2" id="i1"  value="{{$rk1->image}}" class="form-control"> 
          </div>
          <div class="form-group">
            <label >Image2 Title</label>
            <input type="text" name="img2_title" value="{{$rk1->img_title}}" id="img_t2" class="form-control">
          </div>
          <div class="form-group">
            <label>Image2 Link</label>
            <select class="form-control" name="img2_link" id="img_l2">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option @if($rk1->category==$r->category) selected @endif  value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label >Image 3</label><br>
            <img style="height: 150px; width: 130px;" src="{{asset($rk2->image)}}"><br>
            <input type="hidden" name="img3" id="i3" class="form-control" value="{{asset($rk2->image)}}"><br> 
            <input type="file" name="img3" id="i3"  value="{{$rk2->image}}" class="form-control"> 
          </div>
          <div class="form-group">
            <label >Image3 Title</label>
            <input type="text" name="img3_title" value="{{$rk2->img_title}}" id="img_t3" class="form-control">
          </div>
          <div class="form-group">
            <label>Image3 Link</label>
            <select class="form-control" name="img3_link" id="img_l3">
              <option value="" disabled selected>Select</option>
              @foreach($category as $r)
              <option @if($rk2->category==$r->category) selected @endif  value="{{$r->category}}">{{$r->category}}</option>
              @endforeach
            </select>
          </div>
        </div>
        @if($section->layout_name == 'four' || $section->layout_name == 'six') 
          <div id="four">
            <div class="form-group">
              <label >Image 4</label><br>
              <img style="height: 150px; width: 130px;" src="{{asset($rk3->image)}}"><br>
              <input type="hidden" name="img4" id="i4" class="form-control" value="{{asset($rk3->image)}}"><br> 
              <input type="file" name="img4" id="i4"  value="{{$rk3->image}}" class="form-control">  
            </div>
            <div class="form-group">
              <label >Image4 Title</label>
              <input type="text" name="img4_title" value="{{$rk3->img_title}}" id="img_t4" class="form-control">
            </div>
            <div class="form-group">
              <label>Image4 Link</label>
              <select class="form-control" name="img4_link" id="img_l4">
                <option value="" disabled selected>Select</option>
                @foreach($category as $r)
                <option @if($rk3->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                @endforeach
              </select>
            </div>
          </div>
        @endif
        @if($section->layout_name == 'six') 
          <div id="six">
            <div class="form-group">
              <label >Image 5</label><br>
              <img style="height: 150px; width: 130px;" src="{{asset($rk4->image)}}"><br>
              <input type="hidden" name="img5" id="i5" class="form-control" value="{{asset($rk4->image)}}"><br> 
              <input type="file" name="img5" id="i5"  value="{{$rk4->image}}" class="form-control">  
            </div>
            <div class="form-group">
              <label >Image5 Title</label>
              <input type="text" name="img5_title" value="{{$rk4->img_title}}" id="img_t5" class="form-control">
            </div>
            <div class="form-group">
              <label>Image5 Link</label>
              <select class="form-control" name="img5_link" id="img_l5">
                <option value="" disabled selected>Select</option>
                @foreach($category as $r)
                <option @if($rk4->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label >Image 6</label><br>
              <img style="height: 150px; width: 130px;" src="{{asset($rk5->image)}}"><br>
              <input type="hidden" name="img6" id="i6" class="form-control" value="{{asset($rk5->image)}}"><br> 
              <input type="file" name="img6" id="i6"  value="{{$rk5->image}}" class="form-control">   
            </div>
            <div class="form-group">
              <label >Image6 Title</label>
              <input type="text" name="img6_title"  value="{{$rk5->img_title}}" id="img_t6" class="form-control">
            </div>
            <div class="form-group">
              <label>Image6 Link</label>
              <select class="form-control" name="img6_link" id="img_l6">
                <option value="" disabled selected>Select</option>
                @foreach($category as $r)
                <option @if($rk5->category==$r->category) selected @endif  value="{{$r->category}}">{{$r->category}}</option>
                @endforeach
              </select>
            </div>
          </div> 
        @endif
      </div> <!-- /.card-body --> 
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div> <!-- card end -->
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
