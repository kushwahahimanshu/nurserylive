@extends('web_master')

@section('main_content')

	<section class="d-md-none p-2" style="background-color: #e0e0e0; position: relative;">
        <input type="text" name="search" placeholder="What are you looking for?" style="border: 1px solid #bbbbbb; padding: 4px 8px; border-radius: 4px; width: 100%;" id="searchm">
        <i class="fa fa-search" aria-hidden="true" style="position: absolute; right: 20px; top: 16px;" onclick="validatem()"></i>
    </section>
    <section class="d-md-none p-2 px-4" style="background-color: #e0e0e0; position: relative;">
        <div class="row flex-nowrap">
            @for($i=1;$i<6;$i++)
            <div class="col" style="text-align: center; flex-grow: 1; max-width: 20%;">
                <a href="{{url('show-category/'.json_decode($mobile['image'.$i])->link)}}"><img src="{{asset(json_decode($mobile['image'.$i])->image)}}" alt="" style="width: 100%"><br>
                <p style="position: relative; font-size: 10px; text-transform: uppercase; color: #000; margin-top: 5px; padding-bottom: 10px;">
                    <span style="position: absolute; left: 50%; transform: translateX(-50%);">{{json_decode($mobile['image'.$i])->title}}</span></p></a>
            </div>
            @endfor
            
        </div>
    </section>

    <!--slider start-->
@if($layout->layout_name=='layout_one')
<section class="theme-slider section-pt-space">
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-6   p-0 p-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <?php $r=json_decode($layout->image1);
                        ?>
                        <a href="{{asset($r->link)}}"><img  src="{{asset($r->name)}}" style="max-width: 100%;"></a>
                    </div>
                    <div class="col-md-6 mb-3 p-0 p-md-3">
                        <a href="{{asset(json_decode($layout->image5)->link)}}"><img  src="{{asset(json_decode($layout->image5)->name)}}" style="max-width: 100%;"></a>
                       <!-- <img  src="images/new/600x200.png" style="max-width: 100%;"> -->
                    </div>
                    <div class="col-md-6 mb-3 p-0 p-md-3">
                        <a href="{{asset(json_decode($layout->image6)->link)}}"><img  src="{{asset(json_decode($layout->image6)->name)}}" style="max-width: 100%;"></a>
                       <!-- <img  src="images/new/600x200-2.png" style="max-width: 100%;"> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3  p-0 p-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <?php $r=json_decode($layout->image2);
                        if (DB::table('categories')->where('parent_category', '=', urldecode($r->link))->exists()) {
                            $link='show-category/'.$r->link;
                            }
                            else{
                                $link='show-product/'.$r->link;
                            }?>
                         <a href="{{asset(json_decode($layout->image2)->link)}}"><img  src="{{asset(json_decode($layout->image2)->name)}}" style="max-width: 100%;"></a>
                       <!--  <img  src="images/new/600x350.png" style="max-width: 100%;"> -->
                    </div>
                    <div class="col-md-12  mb-3 p-0 p-md-3">
                         <a href="{{asset(json_decode($layout->image3)->link)}}"><img  src="{{asset(json_decode($layout->image3)->name)}}" style="max-width: 100%;"></a>
                        <!-- <img  src="images/new/600x350-2.png" style="max-width: 100%;"> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3  p-0 p-md-3">
                <div class="row">
                    <div class="col-md-12">
                         <a href="{{asset(json_decode($layout->image4)->link)}}"><img  src="{{asset(json_decode($layout->image4)->name)}}" style="max-width: 100%;"></a>
                        <!-- <img  src="images/new/600x725.png" style="max-width: 100%;"> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="row">
                    <div class="col-md-12">
                         <a href="{{asset(json_decode($layout->image7)->link)}}"><img  src="{{asset(json_decode($layout->image7)->name)}}" style="max-width: 100%;"></a>
                      <!-- <img  src="images/new/800x250.png" style="max-width: 100%;"> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="row">
                    <div class="col-md-12">
                         <a href="{{asset(json_decode($layout->image8)->link)}}"><img  src="{{asset(json_decode($layout->image8)->name)}}" style="max-width: 100%;"></a>
                      <!-- <img  src="images/new/800-250-2.png" style="max-width: 100%;"> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                         <a href="{{asset(json_decode($layout->image9)->link)}}"><img  src="{{asset(json_decode($layout->image9)->name)}}" style="max-width: 100%;"></a>
                      <!-- <img  src="images/new/800x250.png" style="max-width: 100%;"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@else
<section class="theme-slider section-pt-space">
  <div class="container-fluid px-4">
 <?php $count=0; ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        @for($i=1;$i<=9;$i++)
            @if($layout['image'.$i])
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $count }}" class="@if($count == 0) active @endif"></li>
                <?php $count++; ?>
            @endif
        @endfor
      </ol>
      <div class="carousel-inner">
        <?php $count=0; ?>
        @for($i=1;$i<=9;$i++)
            @if($layout['image'.$i])
                <?php $r=json_decode($layout['image'.$i]); ?>
                <div class="carousel-item @if($count == 0) active @endif">
                    <a href="{{ url($r->link) }}">
                        <img src="{{asset($r->name)}}" class="d-block w-100" alt="slider">
                    </a>
                </div>
                <?php $count++; ?>
            @endif
        @endfor
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
 </div>
</section>
@endif

<?php $count=0;?>
@foreach($section as $r)
<section class="@if($count % 2 == 0) bg-white @else bg-light @endif py-5">
    <div class="container">
        <h2 class="text-center mb-5" style="color: #000;"><!-- <span>Top Searched</span> Plant Categories --><?php  
                        $words = explode(" ", $r->title);
                        ?>
                        <!-- this run 0 to less than half length of string (if 4 word then it run 0-2) -->
                        @for($i=0;$i<(round(count($words)/2));$i++)
                            <span>{{$words[$i]}}</span>
                        @endfor
                        <!-- this run half length to full lenth (2 to 4)-->
                        @for($i=(round(count($words)/2));$i<count($words);$i++)
                         {{$words[$i]}}
                        @endfor
                     </h2> 
        <div class="row justify-content-center py-5">
            <!-- image1 -->
            <div class="@if($r->layout_name == 'six') col-md-2 @elseif($r->layout_name == 'four') col-md-3 @else col-md-4 @endif col-6">
                <a href="{{asset(json_decode($r->image1)->link)}}">
                <img  src="{{asset(json_decode($r->image1)->image)}}" style="max-width: 100%;">
                <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">{{json_decode($r->image1)->img_title}}</p></a>
            </div>
            <!-- image2 -->
            <div class="@if($r->layout_name == 'six') col-md-2 @elseif($r->layout_name == 'four') col-md-3 @else col-md-4 @endif col-6">
                <a href="{{asset(json_decode($r->image2)->link)}}">
                <img  src="{{asset(json_decode($r->image2)->image)}}" style="max-width: 100%;">
                <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">{{json_decode($r->image2)->img_title}}</p></a>
            </div>
            <!-- image3 -->
            <div class="@if($r->layout_name == 'six') col-md-2 @elseif($r->layout_name == 'four') col-md-3 @else col-md-4 @endif col-6">
                <a href="{{asset(json_decode($r->image3)->link)}}">
                <img  src="{{asset(json_decode($r->image3)->image)}}" style="max-width: 100%;">
                <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">{{json_decode($r->image3)->img_title}}</p></a>
            </div>
            <!-- image4 -->
            @if($r->image4)
                <div class="@if($r->layout_name == 'six') col-md-2 @elseif($r->layout_name == 'four') col-md-3 @else col-md-4 @endif col-6">
                    <a href="{{asset(json_decode($r->image4)->link)}}">
                    <img  src="{{asset(json_decode($r->image4)->image)}}" style="max-width: 100%;">
                    <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">{{json_decode($r->image4)->img_title}}</p></a>
                </div>
            @endif
            @if($r->image5)
                <div class="@if($r->layout_name == 'six') col-md-2 @elseif($r->layout_name == 'four') col-md-3 @else col-md-4 @endif col-6">
                <a href="{{asset(json_decode($r->image5)->link)}}">
                <img  src="{{asset(json_decode($r->image5)->image)}}" style="max-width: 100%;">
                <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">{{json_decode($r->image5)->img_title}}</p></a>
                </div>
            @endif
            @if($r->image6)
                <div class="@if($r->layout_name == 'six') col-md-2 @elseif($r->layout_name == 'four') col-md-3 @else col-md-4 @endif col-6">
                <a href="{{asset(json_decode($r->image6)->link)}}">
                <img  src="{{asset(json_decode($r->image6)->image)}}" style="max-width: 100%;">
                <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">{{json_decode($r->image6)->img_title}}</p></a>
                </div>
            @endif

        </div> 
    </div>
</section>
<?php $count++;?>
@endforeach
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" style="color: #000;"><span>What Our</span> Store Offers</h2>
        <div class="row">
            <div class="col-md-4 col-12 mb-3">
                <img  src="images/new/12.jpg" style="max-width: 100%;">        
            </div>
            <div class="col-md-4 col-12 mb-3">
                <img  src="images/new/13.jpg" style="max-width: 100%;">        
            </div>
            <div class="col-md-4 col-12 mb-3">
                <img  src="images/new/14.jpg" style="max-width: 100%;">        
            </div>
            <div class="col-md-4 col-12 mb-3">
                <img  src="images/new/15.jpg" style="max-width: 100%;">        
            </div>
            <div class="col-md-4 col-12 mb-3">
                <img  src="images/new/16.jpg" style="max-width: 100%;">        
            </div>
            <div class="col-md-4 col-12 mb-3">
                <img  src="images/new/17.jpg" style="max-width: 100%;">        
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" style="color: #000;"><span>Beautiful</span> Flowering Plants</h2>
        <div class="row">
            <div class="col-md-2 col-6 mb-3">
                <img  src="images/new/18.png" style="max-width: 100%;">  
                <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">Dahlia</p>      
            </div>
            <div class="col-md-2 col-6 mb-3">
                <img  src="images/new/19.png" style="max-width: 100%;">     
                <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">Rose</p>   
            </div>
            <div class="col-md-2 col-6 mb-3">
                <img  src="images/new/20.png" style="max-width: 100%;">        
                <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">Lily</p>
            </div>
            <div class="col-md-2 col-6 mb-3">
                <img  src="images/new/21.png" style="max-width: 100%;">        
                <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">Jasmine</p>
            </div>
            <div class="col-md-2 col-6 mb-3">
                <img  src="images/new/22.png" style="max-width: 100%;">        
                <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">Orchids</p>
            </div>
            <div class="col-md-2 col-6 mb-3">
                <img  src="images/new/23.png" style="max-width: 100%;">        
                <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">Zinnia</p>
            </div>
        </div>
    </div>
</section>
	

@endsection
