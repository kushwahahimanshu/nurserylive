<div class="col-md-6">
      <!-- general form elements -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Header Menu</h3>
        </div>
        <!-- /.card-header -->
        <!--City form start -->
        <form  action="{{url('edit-header-submit')}}" method="post" enctype="multipart/form-data">
         {{csrf_field()}}
          <div class="card-body">
            <input type="hidden" name="id" value="{{$result->id}}">
                <div class="form-group">
                  <label>Items</label>
                  <input type="text" name="item_name" class="form-control" value="{{$result->item_name}}"  required>
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" name="category" id="category" onchange="load_category(this.value)" required>
                  @foreach($category as $r)
                    <option @if($r->category==strtolower($result->category)) selected @endif ">{{$r->category}}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label >Dropdown</label><br>
                  @if($result->dropdown=='enable')
                 <input type="radio" name="dropdown" value="enable" @if($result->dropdown=='enable') checked @endif> Enable &nbsp;
                 @else
                 <input type="radio" name="dropdown" value="disable"  @if($result->dropdown=='disable') checked @endif> Disable
                 @endif
                </div>
                @if($result->dropdown=='enable')
                  <div class="form-group">
                    <label>Layout Options</label><br>
                    @if($result->layout=='single')
                    <input type="radio" name="layout" value="single" @if($result->layout=='single') checked @endif> Single Column
                    @elseif($result->layout=='four')
                    <input type="radio" name="layout" value="four" @if($result->layout=='four') checked @endif> 4 Column
                    @else
                    <input type="radio" name="layout" value="six" @if($result->layout=='six') checked @endif> 6 Column
                    @endif
                  </div>
                @endif
                  <?php $r=DB::table('categories')->where('parent_category',$result->category)->pluck('category');  //All category pluck
                       $rk=json_decode($result->subcategory); //to see user selected category
                       //dd($rk);
                  ?>
                  @if($result->layout=='single')
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e1" multiple class="form-control" name="subcategory[]">
                        @foreach($r as $r2)
                          <?php $check = 0; ?>
                          @foreach($rk->sub_cat as $r3)
                            @if($r3->name == $r2)
                              <option selected>{{$r2}}</option>
                              <?php $check = 1; break; ?>
                            @endif
                          @endforeach
                          @if($check == 0)
                            <option>
                              {{$r2}}
                            </option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                  @elseif($result->layout=='four')
                    <div class="form-group">
                      <label >Column Title1</label>
                      <input type="text" name="title1" id="t1" class="form-control" value="{{$rk[0]->title}}" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e2" multiple class="form-control" name="subcategoryt1[]">
                         @foreach($r as $r2)
                          <?php $check = 0; ?>
                          @foreach($rk[0]->sub_cat as $r3)
                            @if($r3->name == $r2)
                              <option selected>{{$r2}}</option>
                              <?php $check = 1; break; ?>
                            @endif
                          @endforeach
                          @if($check == 0)
                            <option>
                              {{$r2}}
                            </option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Column Title2</label>
                      <input type="text" name="title2" id="t2" class="form-control" value="{{$rk[1]->title}}" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e3" multiple class="form-control" name="subcategoryt2[]">
                        @foreach($r as $r2)
                          <?php $check = 0; ?>
                          @foreach($rk[1]->sub_cat as $r3)
                            @if($r3->name == $r2)
                              <option selected>{{$r2}}</option>
                              <?php $check = 1; break; ?>
                            @endif
                          @endforeach
                          @if($check == 0)
                            <option>
                              {{$r2}}
                            </option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Column Title3</label>
                      <input type="text" name="title3" id="t3" class="form-control" value="{{$rk[2]->title}}" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e4" multiple class="form-control" name="subcategoryt3[]">
                        @foreach($r as $r2)
                          <?php $check = 0; ?>
                          @foreach($rk[2]->sub_cat as $r3)
                            @if($r3->name == $r2)
                              <option selected>{{$r2}}</option>
                              <?php $check = 1; break; ?>
                            @endif
                          @endforeach
                          @if($check == 0)
                            <option>
                              {{$r2}}
                            </option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Column Title4</label>
                      <input type="text" name="title4" id="t4" class="form-control" value="{{$rk[3]->title}}" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e5" multiple class="form-control" name="subcategoryt4[]">
                        @foreach($r as $r2)
                          <?php $check = 0; ?>
                          @foreach($rk[3]->sub_cat as $r3)
                            @if($r3->name == $r2)
                              <option selected>{{$r2}}</option>
                              <?php $check = 1; break; ?>
                            @endif
                          @endforeach
                          @if($check == 0)
                            <option>
                              {{$r2}}
                            </option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Image</label><br>
                      <img style="height: 150px; width: 130px;"  src="{{asset($result->image)}}">
                      <input type="hidden"  name="image" value="{{$result->image}}"><br>
                      <input type="file" name="image">
                    </div>
                  @elseif($result->layout=='six')
                    <div class="form-group">
                      <label >Column Title1</label>
                      <input type="text" name="title5" id="t5" class="form-control" value="{{$rk[0]->title}}" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e6" multiple class="form-control" name="subcategoryt5[]" >
                         @foreach($r as $r2)
                          <?php $check = 0; ?>
                          @foreach($rk[0]->sub_cat as $r3)
                            @if($r3->name == $r2)
                              <option selected>{{$r2}}</option>
                              <?php $check = 1; break; ?>
                            @endif
                          @endforeach
                          @if($check == 0)
                            <option>
                              {{$r2}}
                            </option>
                          @endif
                         @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Column Title2</label>
                      <input type="text" name="title6" id="t6" class="form-control" value="{{$rk[1]->title}}" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e7" multiple class="form-control" name="subcategoryt6[]" >
                         @foreach($r as $r2)
                          <?php $check = 0; ?>
                          @foreach($rk[1]->sub_cat as $r3)
                            @if($r3->name == $r2)
                              <option selected>{{$r2}}</option>
                              <?php $check = 1; break; ?>
                            @endif
                          @endforeach
                          @if($check == 0)
                            <option>
                              {{$r2}}
                            </option>
                          @endif
                         @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Column Title3</label>
                      <input type="text" name="title7" id="t7" class="form-control" value="{{$rk[2]->title}}" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e8" multiple class="form-control" name="subcategoryt7[]" >
                         @foreach($r as $r2)
                          <?php $check = 0; ?>
                          @foreach($rk[2]->sub_cat as $r3)
                            @if($r3->name == $r2)
                              <option selected>{{$r2}}</option>
                              <?php $check = 1; break; ?>
                            @endif
                          @endforeach
                          @if($check == 0)
                            <option>
                              {{$r2}}
                            </option>
                          @endif
                         @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Column Title4</label>
                      <input type="text" name="title8" class="form-control" id="t8" value="{{$rk[3]->title}}" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e9" multiple class="form-control" name="subcategoryt8[]" >
                         @foreach($r as $r2)
                          <?php $check = 0; ?>
                          @foreach($rk[3]->sub_cat as $r3)
                            @if($r3->name == $r2)
                              <option selected>{{$r2}}</option>
                              <?php $check = 1; break; ?>
                            @endif
                          @endforeach
                          @if($check == 0)
                            <option>
                              {{$r2}}
                            </option>
                          @endif
                         @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Column Title5</label>
                      <input type="text" name="title9" id="t9" class="form-control" value="{{$rk[4]->title}}" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e10" multiple class="form-control" name="subcategoryt9[]" >
                         @foreach($r as $r2)
                          <?php $check = 0; ?>
                          @foreach($rk[4]->sub_cat as $r3)
                            @if($r3->name == $r2)
                              <option selected>{{$r2}}</option>
                              <?php $check = 1; break; ?>
                            @endif
                          @endforeach
                          @if($check == 0)
                            <option>
                              {{$r2}}
                            </option>
                          @endif
                         @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Column Title6</label>
                      <input type="text" name="title10" class="form-control" id="t10" value="{{$rk[5]->title}}" >
                    </div>
                    <div class="form-group">
                      <label>Choose SubCategory</label>
                      <select id="e11" multiple class="form-control" name="subcategoryt10[]" >
                         @foreach($r as $r2)
                          <?php $check = 0; ?>
                          @foreach($rk[5]->sub_cat as $r3)
                            @if($r3->name == $r2)
                              <option selected>{{$r2}}</option>
                              <?php $check = 1; break; ?>
                            @endif
                          @endforeach
                          @if($check == 0)
                            <option>
                              {{$r2}}
                            </option>
                          @endif
                         @endforeach
                      </select>
                    </div>
                    <?php $data=explode(',', $result->image); 
                    $count = 1;?>
                    @foreach($data as $r1)
                    <div class="form-group">
                      <label>Image {{$count}}</label><br>
                      <img style="height: 150px; width: 130px;"  src="{{asset($r1)}}">
                      <input type="hidden" id="image{{$count}}" name="imageold[]" value="{{$r1}}"><br>
                      <input type="file" name="image[]" onchange="flush({{$count}})">
                    </div>
                    @php $count++; @endphp
                    @endforeach
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
  function flush(x) {
    //console.log(sdfghjk);
    document.getElementById('image'+x).value=null;
  }
</script>
<script>
 function load_category(id) 
    {
      if('{{$result->layout}}'=='single'){
         document.getElementById('e1').innerHTML='';
      }
      else if('{{$result->layout}}'=='four'){
        document.getElementById('e2').innerHTML='';
        document.getElementById('e3').innerHTML='';
        document.getElementById('e4').innerHTML='';
        document.getElementById('e5').innerHTML='';
      }
      else if('{{$result->layout}}'=='six'){
      document.getElementById('e6').innerHTML='';
      document.getElementById('e7').innerHTML='';
      document.getElementById('e8').innerHTML='';
      document.getElementById('e9').innerHTML='';
      document.getElementById('e10').innerHTML='';
      document.getElementById('e11').innerHTML='';
    }
      var xhr = new XMLHttpRequest();
      xhr.open('GET','{{ url("category") }}?category='+id,true);
      xhr.onload = function () {
        var cities = JSON.parse(xhr.responseText);
        //console.log(cities);
       if('{{$result->layout}}'=='single'){
         document.getElementById('e1').appendChild(opbanao('Select', 'disabled', 'disabled', null));
       }
       else if('{{$result->layout}}'=='four'){
          document.getElementById('e2').appendChild(opbanao('Select', 'disabled', 'disabled', null));
          document.getElementById('e3').appendChild(opbanao('Select', 'disabled', 'disabled', null));
          document.getElementById('e4').appendChild(opbanao('Select', 'disabled', 'disabled', null));
          document.getElementById('e5').appendChild(opbanao('Select', 'disabled', 'disabled', null));
        }
        else if('{{$result->layout}}'=='six'){
          document.getElementById('e6').appendChild(opbanao('Select', 'disabled', 'disabled', null));
          document.getElementById('e7').appendChild(opbanao('Select', 'disabled', 'disabled', null));
          document.getElementById('e8').appendChild(opbanao('Select', 'disabled', 'disabled', null));
          document.getElementById('e9').appendChild(opbanao('Select', 'disabled', 'disabled', null));
          document.getElementById('e10').appendChild(opbanao('Select', 'disabled', 'disabled', null));
          document.getElementById('e11').appendChild(opbanao('Select', 'disabled', 'disabled', null));
        }

        for(i=0; i<cities.address.length;i++) {
         if('{{$result->layout}}'=='single'){
           document.getElementById('e1').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
          }
          else if('{{$result->layout}}'=='four'){
            document.getElementById('e2').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
            document.getElementById('e3').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
            document.getElementById('e4').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
            document.getElementById('e5').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
          }
          else if('{{$result->layout}}'=='six'){
            document.getElementById('e6').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
            document.getElementById('e7').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
            document.getElementById('e8').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
            document.getElementById('e9').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
            document.getElementById('e10').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
            document.getElementById('e11').appendChild(opbanao(cities.address[i], null, null, cities.address[i]));
          }
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
