<div class="col-md-6">
      <!-- general form elements -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Add Header Menu</h3>
        </div>
        <!-- /.card-header -->
        <!--City form start -->
        <form  action="{{url('header-menu-submit')}}" method="post" enctype="multipart/form-data">
         {{csrf_field()}}
          <div class="card-body">
                <div class="form-group">
                  <label >Items</label>
                  <input type="text" name="item_name" class="form-control" placeholder="Enter The Items Name" required>
                </div>
                <div class="form-group">
                  <label >Category</label>
                  <select class="form-control" name="category" id="category" onchange="load_category(this.value)" required>
                    <option value="" disabled selected>Select</option>
                  @foreach($category as $r)
                    <option value="{{$r->category}}">{{$r->category}}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label >Dropdown</label><br>
                 <input type="radio" name="dropdown" value="enable" onchange="openlayout(this.value)"> Enable &nbsp;
                 <input type="radio" name="dropdown" value="disable" onchange="openlayout(this.value)" checked="true"> Disable
                </div>
                <div id="layout" style="display: none;">
                  <div class="form-group">
                    <label>Layout Options</label><br>
                    <input type="radio" name="layout" value="single" onchange="openform(this.value)"> Single Column
                    <input type="radio" name="layout" value="four" onchange="openform(this.value)"> 4 Column
                    <input type="radio" name="layout" value="six" onchange="openform(this.value)"> 6 Column
                  </div>
                  <div id="singlecolumnform" style="display: none;">
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e1" multiple class="form-control" name="subcategory[]">
                        
                      </select>
                    </div>
                  </div>
                  <div id="fourcolumnform" style="display: none;">
                    <div class="form-group">
                      <label >Column Title1</label>
                      <input type="text" name="title1" id="t1" class="form-control" placeholder="Enter The Column Title1" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e2" multiple class="form-control" name="subcategoryt1[]">
                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Column Title2</label>
                      <input type="text" name="title2" id="t2" class="form-control" placeholder="Enter The Column Title" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e3" multiple class="form-control" name="subcategoryt2[]">
                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Column Title3</label>
                      <input type="text" name="title3" id="t3" class="form-control" placeholder="Enter The Column Title" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e4" multiple class="form-control" name="subcategoryt3[]">
                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Column Title4</label>
                      <input type="text" name="title4" id="t4" class="form-control" placeholder="Enter The Column Title" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e5" multiple class="form-control" name="subcategoryt4[]">
                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="image" class="form-control" id="image1">
                    </div>
                  </div><!-- radio button form -->
                  <div id="sixcolumnform" style="display: none;">
                    <div class="form-group">
                      <label >Column Title1</label>
                      <input type="text" name="title5" id="t5" class="form-control" placeholder="Enter The Column Title" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e6" multiple class="form-control" name="subcategoryt5[]" >
                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Column Title2</label>
                      <input type="text" name="title6" id="t6" class="form-control" placeholder="Enter The Column Title" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e7" multiple class="form-control" name="subcategoryt6[]" >
                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Column Title3</label>
                      <input type="text" name="title7" id="t7" class="form-control" placeholder="Enter The Column Title" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e8" multiple class="form-control" name="subcategoryt7[]" >
                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Column Title4</label>
                      <input type="text" name="title8" class="form-control" id="t8" placeholder="Enter The Column Title" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e9" multiple class="form-control" name="subcategoryt8[]" >
                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Column Title5</label>
                      <input type="text" name="title9" id="t9" class="form-control" placeholder="Enter The Column Title" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e10" multiple class="form-control" name="subcategoryt9[]" >
                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Column Title6</label>
                      <input type="text" name="title10" class="form-control" id="t10" placeholder="Enter The Column Title" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e11" multiple class="form-control" name="subcategoryt10[]" >
                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Image1</label>
                      <input type="file" name="image1" class="form-control" id="img1" >
                    </div>
                    <div class="form-group">
                      <label>Image2</label>
                      <input type="file" name="image2" class="form-control" id="img2" >
                    </div>
                  </div><!-- radio button form -->
                </div><!-- main layout div -->
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
      <h3 class="card-title">View Header Menu</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body  table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Sr. No.</th>
            <th>Item Name</th>
            <th>Category</th>
            <th>Dropdown</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @php $count=1; @endphp
          @foreach($result as $r)
          <tr>
            <td>{{$count}}</td>
            <td>{{$r->item_name}}</td>
            <td>{{$r->category}}</td>
            <td>{{$r->dropdown}}</td>
            <td><a href="{{url('delete-menu/'.$r->id)}}" class="btn btn-danger btn-sm" title="delete"> <i class="fa fa-trash"></i></a>&nbsp;&nbsp;
              <a href="{{url('edit-menu/'.$r->id)}}" class="btn btn-primary btn-sm" title="edit"> <i class="fa fa-edit"></i></a></td>
          </tr> 
          <?php $count++ ?>
         @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>Sr. No.</th>
            <th>Item Name</th>
            <th>Category</th>
            <th>Dropdown</th>
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
  document.getElementById('e1').removeAttribute('required');
  document.getElementById('e2').removeAttribute('required');
  document.getElementById('e3').removeAttribute('required');
  document.getElementById('e4').removeAttribute('required');
  document.getElementById('e5').removeAttribute('required');
  document.getElementById('e6').removeAttribute('required');
  document.getElementById('e7').removeAttribute('required');
  document.getElementById('e8').removeAttribute('required');
  document.getElementById('e9').removeAttribute('required');
  document.getElementById('e10').removeAttribute('required');
  document.getElementById('e11').removeAttribute('required');
  document.getElementById('t1').removeAttribute('required');
  document.getElementById('t2').removeAttribute('required');
  document.getElementById('t3').removeAttribute('required');
  document.getElementById('t4').removeAttribute('required');
  document.getElementById('t5').removeAttribute('required');
  document.getElementById('t6').removeAttribute('required');
  document.getElementById('t7').removeAttribute('required');
  document.getElementById('t8').removeAttribute('required');
  document.getElementById('t9').removeAttribute('required');
  document.getElementById('t10').removeAttribute('required');
  document.getElementById('image1').removeAttribute('required');
  document.getElementById('img1').removeAttribute('required');
  document.getElementById('img2').removeAttribute('required');
  if(x=='single'){
    document.getElementById("singlecolumnform").style.display="block";
    document.getElementById("fourcolumnform").style.display="none";
    document.getElementById("sixcolumnform").style.display="none";
    document.getElementById('e1').setAttribute('required',true);
    //console.log(r);
  }
  else if(x=='four'){
    document.getElementById("fourcolumnform").style.display="block";
    document.getElementById("singlecolumnform").style.display="none";
    document.getElementById("sixcolumnform").style.display="none";
    document.getElementById('e2').setAttribute('required',true);
    document.getElementById('e3').setAttribute('required',true);
    document.getElementById('e4').setAttribute('required',true);
    document.getElementById("e5").setAttribute('required',true);
    document.getElementById("t1").setAttribute('required',true);
    document.getElementById("t2").setAttribute('required',true);
    document.getElementById("t3").setAttribute('required',true);
    document.getElementById("t4").setAttribute('required',true);
    document.getElementById("image1").setAttribute('required',true);
  }
 else if(x=='six'){
    document.getElementById("sixcolumnform").style.display="block";
    document.getElementById("singlecolumnform").style.display="none";
    document.getElementById("fourcolumnform").style.display="none";
    document.getElementById('e6').setAttribute('required',true);
    document.getElementById('e7').setAttribute('required',true);
    document.getElementById('e8').setAttribute('required',true);
    document.getElementById("e9").setAttribute('required',true);
    document.getElementById('e10').setAttribute('required',true);
    document.getElementById('e11').setAttribute('required',true);
    document.getElementById("t5").setAttribute('required',true);
    document.getElementById("t6").setAttribute('required',true);
    document.getElementById("t7").setAttribute('required',true);
    document.getElementById("t8").setAttribute('required',true);
    document.getElementById("t9").setAttribute('required',true);
    document.getElementById("t10").setAttribute('required',true);
    document.getElementById("img1").setAttribute('required',true);
    document.getElementById("img2").setAttribute('required',true);
  }
  else{
    document.getElementById("layout").style.display="none";
    document.getElementById("fourcolumnform").style.display="none";
    document.getElementById("sixcolumnform").style.display="none";
  }
}
function openlayout(x) {
  if (x=='enable') {
    document.getElementById('layout').style.display='block';
  }
  else{
    document.getElementById('layout').style.display='none';
    //document.getElementById('e1').setAttribute('value','');

  }
}
function load_category(id) 
    {
      document.getElementById('e1').innerHTML='';
      document.getElementById('e2').innerHTML='';
      document.getElementById('e3').innerHTML='';
      document.getElementById('e4').innerHTML='';
      document.getElementById('e5').innerHTML='';
      document.getElementById('e6').innerHTML='';
      document.getElementById('e7').innerHTML='';
      document.getElementById('e8').innerHTML='';
      document.getElementById('e9').innerHTML='';
      document.getElementById('e10').innerHTML='';
      document.getElementById('e11').innerHTML='';

      var xhr = new XMLHttpRequest();
      xhr.open('GET','{{ url("category") }}?category='+id,true);
      xhr.onload = function () {
        var cities = JSON.parse(xhr.responseText);
        //console.log(cities);

        document.getElementById('e1').appendChild(opbanao('Select', 'disabled', 'disabled', null));
        document.getElementById('e2').appendChild(opbanao('Select', 'disabled', 'disabled', null));
        document.getElementById('e3').appendChild(opbanao('Select', 'disabled', 'disabled', null));
        document.getElementById('e4').appendChild(opbanao('Select', 'disabled', 'disabled', null));
        document.getElementById('e5').appendChild(opbanao('Select', 'disabled', 'disabled', null));
        document.getElementById('e6').appendChild(opbanao('Select', 'disabled', 'disabled', null));
        document.getElementById('e7').appendChild(opbanao('Select', 'disabled', 'disabled', null));
        document.getElementById('e8').appendChild(opbanao('Select', 'disabled', 'disabled', null));
        document.getElementById('e9').appendChild(opbanao('Select', 'disabled', 'disabled', null));
        document.getElementById('e10').appendChild(opbanao('Select', 'disabled', 'disabled', null));
        document.getElementById('e11').appendChild(opbanao('Select', 'disabled', 'disabled', null));

        for(i=0; i<cities.address.length;i++) {
          document.getElementById('e1').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
          document.getElementById('e2').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
          document.getElementById('e3').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
          document.getElementById('e4').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
          document.getElementById('e5').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
          document.getElementById('e6').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
          document.getElementById('e7').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
          document.getElementById('e8').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
          document.getElementById('e9').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
          document.getElementById('e10').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
          document.getElementById('e11').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
        }
      }
      xhr.send();
    }

    function opbanao(it, a1, a2, v) {
      var op1 = document.createElement('option');
      op1.innerText = it;
      op1.setAttribute(a1, a2);
      op1.setAttribute('value', v);
      return op1;
    }
</script>
