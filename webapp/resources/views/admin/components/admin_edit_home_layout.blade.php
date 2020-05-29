<div class="col-md-6">
  <!-- general form elements -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Edit Home Page Layouts No.1</h3>
    </div>
    <!-- /.card-header -->
    <!--City form start -->
    <form  action="{{url('edit-layout-one-submit')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="card-body">
        <input type="hidden" name="id" value="{{$result->id}}">
        <div class="form-group">
          <label >Layouts</label> 
          <select class="form-control" name="layout" id="layout" onchange="openlayout(this.value)" required>
            <option value="" disabled selected>Select</option>
            @if($result->layout_name=='layout_one')
            <option value="layout_one" @if($result->layout_name == 'layout_one')@endif selected>Layout One</option>
            @else
            <option value="slider_layout" @if($result->layout_name == 'slider_layout')@endif selected>Slider Layout</option> 
            @endif
          </select>
        </div>
        <?php  
          $rk = json_decode($result->image1);  
          $rk1=json_decode($result->image2); 
          $rk2=json_decode($result->image3);  
          $rk3=json_decode($result->image4);  
          $rk4=json_decode($result->image5);  
          $rk5=json_decode($result->image6);  
          $rk6=json_decode($result->image7);  
          $rk7=json_decode($result->image8);  
          $rk8=json_decode($result->image9);  
        ?> 
        @if($result->layout_name=='layout_one') 
          <div id="layout1">
            <div class="form-group"> 
              <label >Image 1</label><br> 
              <img style="height: 150px; width: 130px;" src="{{asset($rk->name)}}"><br>
              <input type="hidden" name="img1" id="i1" class="form-control" value="{{asset($rk->name)}}"><br>
              <input type="file" name="img1" id="i1" class="form-control"> 
              <p><span style="color: red;">1200x500px *</span></p>
            </div> 
            <div class="form-group">
              <label >Image 1 To Link Which Category</label>
              <select class="form-control" name="img1_link" id="category"> 
                @foreach($category as $r) 
                <option @if($rk->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label >Image 2</label><br> 
              <img style="height: 150px; width: 130px;" src="{{asset($rk1->name)}}"><br>
              <input type="hidden" name="img2" id="i2" class="form-control" value="{{asset($rk1->name)}}"><br>
              <input type="file" name="img2" id="i2" class="form-control">
              <p><span style="color: red;">600x375px *</span></p>
            </div>
            <div class="form-group">
              <label>Image 2 To Link Which Category</label>
              <select class="form-control" name="img2_link" id="category">
                <option value="" disabled selected>Select</option>
                @foreach($category as $r)
                <option @if($rk1->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label >Image 3</label><br> 
              <img style="height: 150px; width: 130px;" src="{{asset($rk2->name)}}"><br>
              <input type="hidden" name="img3" id="i3" class="form-control" value="{{asset($rk2->name)}}"><br>
              <input type="file" name="img3" id="i3" class="form-control"> 
              <p><span style="color: red;">600x375px *</span></p>
            </div>
            <div class="form-group">
              <label>Image 3 To Link Which Category</label>
              <select class="form-control" name="img3_link" id="category">
                <option value="" disabled selected>Select</option>
                @foreach($category as $r)
               <option @if($rk2->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label >Image 4</label> <br> 
              <img style="height: 150px; width: 130px;" src="{{asset($rk3->name)}}"><br>
              <input type="hidden" name="img4" id="i4" class="form-control" value="{{asset($rk3->name)}}"><br>
              <input type="file" name="img4" id="i4" class="form-control">
              <p><span style="color: red;">600x750px *</span></p>
            </div>
            <div class="form-group">
              <label>Image 4 To Link Which Category</label>
              <select class="form-control" name="img4_link" id="category">
                <option value="" disabled selected>Select</option>
                @foreach($category as $r)
                <option @if($rk3->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label >Image 5</label><br> 
              <img style="height: 150px; width: 130px;" src="{{asset($rk4->name)}}"><br>
              <input type="hidden" name="img5" id="i5" class="form-control" value="{{asset($rk4->name)}}"><br>
              <input type="file" name="img5" id="i5" class="form-control">
              <p><span style="color: red;">600x200px *</span></p>
            </div>
            <div class="form-group">
              <label>Image 5 To Link Which Category</label>
              <select class="form-control" name="img5_link" id="category">
                <option value="" disabled selected>Select</option>
                @foreach($category as $r)
               <option @if($rk4->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label >Image 6</label> <br> 
              <img style="height: 150px; width: 130px;" src="{{asset($rk5->name)}}"><br>
              <input type="hidden" name="img6" id="i6" class="form-control" value="{{asset($rk5->name)}}"><br>
              <input type="file" name="img6" id="i6" class="form-control">
              <p><span style="color: red;">600x200px *</span></p>
            </div>
            <div class="form-group">
              <label>Image 6 To Link Which Category</label>
              <select class="form-control" name="img6_link" id="category">
                <option value="" disabled selected>Select</option>
                @foreach($category as $r)
               <option @if($rk5->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label >Image 7</label><br> 
              <img style="height: 150px; width: 130px;" src="{{asset($rk6->name)}}"><br>
              <input type="hidden" name="img7" id="i7" class="form-control" value="{{asset($rk6->name)}}"><br>
              <input type="file" name="img7" id="i7" class="form-control">
              <p><span style="color: red;">800x450px  *</span></p>
            </div>
            <div class="form-group">
              <label>Image 7 To Link Which Category</label>
              <select class="form-control" name="img7_link" id="category">
                <option value="" disabled selected>Select</option>
                @foreach($category as $r)
                <option @if($rk6->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label >Image 8</label><br> 
              <img style="height: 150px; width: 130px;" src="{{asset($rk7->name)}}"><br>
              <input type="hidden" name="img8" id="i8" class="form-control" value="{{asset($rk7->name)}}"><br>
              <input type="file" name="img8" id="i8" class="form-control">
              <p><span style="color: red;">800x450px *</span></p>
            </div>
            <div class="form-group">
              <label>Image8 Link</label>
              <select class="form-control" name="img8_link" id="category">
                <option value="" disabled selected>Select</option>
                @foreach($category as $r)
                <option @if($rk7->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label >Image 9</label><br> 
              <img style="height: 150px; width: 130px;" src="{{asset($rk8->name)}}"><br>
              <input type="hidden" name="img9" id="i9" class="form-control" value="{{asset($rk8->name)}}"><br>
              <input type="file" name="img9" id="i9" class="form-control">
              <p><span style="color: red;">800x450px *</span></p>
            </div>
            <div class="form-group">
              <label>Image9 Link</label>
              <select class="form-control" name="img9_link" id="category">
                <option value="" disabled selected>Select</option>
                @foreach($category as $r)
                <option @if($rk8->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                @endforeach
              </select>
            </div>
          </div><!-- main layout div -->
        @elseif($result->layout_name=='slider_layout') 
          <div id="layout2"> 
            <div class="form-group">
              <label >Image 1</label><br>
              <img style="height: 150px; width: 130px;" src="{{asset($rk->name)}}"><br>
              <input type="hidden" name="si_img1" id="si1" class="form-control" value="{{asset($rk->name)}}"><br>
              <input type="file" name="si_img1" id="si1" class="form-control"><p><span style="color: red;">1200x500px *</span></p>
            </div> 
            <div class="form-group">
              <label>Image1 Link</label>
              <select class="form-control" name="si_img1_link" id="category">
                <option value="" disabled selected>Select</option>
                @foreach($category as $r)
                <option @if($rk->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                @endforeach
              </select>
            </div>

            @if($rk1 == null)
              <div class="form-group">
                <label >Image 2</label><br>
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
            @else 
              <div class="form-group">
                <label >Image 2</label><br> 
                <img style="height: 150px; width: 130px;" src="{{asset($rk1->name)}}"><br>
                <input type="hidden" name="si_img2" id="si2" class="form-control" value="{{asset($rk1->name)}}"><br>
                <input type="file" name="si_img2" id="si2" class="form-control">
                <p><span style="color: red;">600x375px *</span></p> 
              </div> 
              <div class="form-group">
                <label>Image2 Link</label>
                <select class="form-control" name="si_img2_link" id="category">
                  <option value="" disabled selected>Select</option>
                  @foreach($category as $r)
                  <option @if($rk1->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                  @endforeach
                </select>
              </div>
            @endif

            @if($rk2 == null)
              <div class="form-group">
                <label >Image 3</label><br>
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
            @else 
              <div class="form-group">
                <label >Image 3</label><br>
                <img style="height: 150px; width: 130px;" src="{{asset($rk2->name)}}"><br>
                <input type="hidden" name="si_img3" id="si3" class="form-control" value="{{asset($rk2->name)}}"><br>
                <input type="file" name="si_img3" id="si3" class="form-control"> 
                <p>600x375px</p>
              </div> 
              <div class="form-group">
                <label>Image3 Link</label>
                <select class="form-control" name="si_img3_link" id="category">
                  <option value="" disabled selected>Select</option>
                  @foreach($category as $r)
                  <option @if($rk2->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                  @endforeach
                </select>
              </div>
            @endif

            @if($rk3 == null)
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
            @else 
              <div class="form-group">
                <label >Image 4</label><br>
                <img style="height: 150px; width: 130px;" src="{{asset($rk3->name)}}"><br>
                <input type="hidden" name="si_img4" id="si4" class="form-control" value="{{asset($rk3->name)}}"><br>
                <input type="file" name="si_img4" id="si4" class="form-control">
                <p><span style="color: red;">600x750px *</span></p> 
              </div> 
              <div class="form-group">
                <label>Image4 Link</label>
                <select class="form-control" name="si_img4_link" id="category">
                  <option value="" disabled selected>Select</option>
                  @foreach($category as $r)
                 <option @if($rk3->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                  @endforeach
                </select>
              </div>
            @endif

            @if($rk4 == null)
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
            @else 
              <div class="form-group">
                <label >Image 5</label><br>
                <img style="height: 150px; width: 130px;" src="{{asset($rk4->name)}}"><br>
                <input type="hidden" name="si_img5" id="si5" class="form-control" value="{{asset($rk4->name)}}"><br>
                <input type="file" name="si_img5" id="si5" class="form-control">
                <p><span style="color: red;">600x200px *</span></p> 
              </div> 
              <div class="form-group">
                <label>Image5 Link</label>
                <select class="form-control" name="si_img5_link" id="category">
                  <option value="" disabled selected>Select</option>
                  @foreach($category as $r)
                  <option @if($rk4->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                  @endforeach
                </select>
              </div>
            @endif

            @if($rk5 == null)
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
            @else 
              <div class="form-group">
                <label >Image 6</label><br>
                <img style="height: 150px; width: 130px;" src="{{asset($rk5->name)}}"><br>
                <input type="hidden" name="si_img6" id="si6" class="form-control" value="{{asset($rk5->name)}}"><br>
                <input type="file" name="si_img6" id="si6" class="form-control">
                <p><span style="color: red;">600x200px *</span></p> 
              </div> 
              <div class="form-group">
                <label>Image6 Link</label>
                <select class="form-control" name="si_img6_link" id="category">
                  <option value="" disabled selected>Select</option>
                  @foreach($category as $r)
                 <option @if($rk5->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                  @endforeach
                </select>
              </div>
            @endif

            @if($rk6 == null)
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
            @else 
              <div class="form-group">
                <label >Image 7</label><br>
                <img style="height: 150px; width: 130px;" src="{{asset($rk6->name)}}"><br>
                <input type="hidden" name="si_img7" id="si7" class="form-control" value="{{asset($rk6->name)}}"><br>
                <input type="file" name="si_img7" id="si7" class="form-control">
                <p><span style="color: red;">600x200px *</span></p> 
              </div> 
              <div class="form-group">
                <label>Image7 Link</label>
                <select class="form-control" name="si_img7_link" id="category">
                  <option value="" disabled selected>Select</option>
                  @foreach($category as $r)
                  <option @if($rk6->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                  @endforeach
                </select>
              </div>
            @endif

            @if($rk7 == null)
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
            @else 
              <div class="form-group">
                <label >Image 8</label><br>
                <img style="height: 150px; width: 130px;" src="{{asset($rk7->name)}}"><br>
                <input type="hidden" name="si_img8" id="si8" class="form-control" value="{{asset($rk7->name)}}"><br>
                <input type="file" name="si_img8" id="si8" class="form-control">
                <p><span style="color: red;">600x200px *</span></p> 
              </div> 
              <div class="form-group">
                <label>Image8 Link</label>
                <select class="form-control" name="si_img8_link" id="category">
                  <option value="" disabled selected>Select</option>
                  @foreach($category as $r)
                 <option @if($rk7->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                  @endforeach
                </select>
              </div>
            @endif

            @if($rk8 == null)
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
            @else 
              <div class="form-group">
                <label >Image 9</label><br>
                <img style="height: 150px; width: 130px;" src="{{asset($rk8->name)}}"><br>
                <input type="hidden" name="si_img9" id="si9" class="form-control" value="{{asset($rk8->name)}}"><br>
                <input type="file" name="si_img9" id="si9" class="form-control">
                <p><span style="color: red;">600x200px *</span></p> 
              </div> 
              <div class="form-group">
                <label>Image9 Link</label>
                <select class="form-control" name="si_img9_link" id="category">
                  <option value="" disabled selected>Select</option>
                  @foreach($category as $r)
                  <option @if($rk8->category==$r->category) selected @endif value="{{$r->category}}">{{$r->category}}</option>
                  @endforeach
                </select>
              </div>
            @endif 
          </div>
        @endif
      </div>
      <!-- /.card-body --> 
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div> <!-- card end -->
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
