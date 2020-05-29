@extends('web_master')

@section('main_content')

	<section class="d-md-none p-2" style="background-color: #e0e0e0; position: relative;">
        <input type="text" placeholder="What are you looking for?" style="border: 1px solid #bbbbbb; padding: 4px 8px; border-radius: 4px; width: 100%;">
        <i class="fa fa-search" aria-hidden="true" style="position: absolute; right: 20px; top: 16px;"></i>
    </section>
    <section class="d-md-none p-2 px-4" style="background-color: #e0e0e0; position: relative;">
        <div class="row">
            <div class="col" style="text-align: center;">
                <img src="images/new/26.png" alt="" style="width: 60%"><br>
                <p style="font-size: 10px; text-transform: uppercase; color: #000; margin-top: 5px;">Plants</p>
            </div>
            <div class="col" style="text-align: center;">
                <img src="images/new/28.png" alt="" style="width: 60%"><br>
                <p style="font-size: 10px; text-transform: uppercase; color: #000; margin-top: 5px;">Seeds</p>
            </div>
            <div class="col" style="text-align: center;">
                <img src="images/new/27.png" alt="" style="width: 60%"><br>
                <p style="font-size: 10px; text-transform: uppercase; color: #000; margin-top: 5px;">Pots</p>
            </div>
            <div class="col" style="text-align: center;">
                <img src="images/new/25.png" alt="" style="width: 60%"><br>
                <p style="font-size: 10px; text-transform: uppercase; color: #000; margin-top: 5px;">Gifts</p>
            </div>
            <div class="col" style="text-align: center;">
                <img src="images/new/24.png" alt="" style="width: 60%"><br>
                <p style="font-size: 10px; text-transform: uppercase; color: #000; margin-top: 5px;">More</p>
            </div>
        </div>
    </section>

    <!--slider start-->
@if($layout->layout_name=='layou_one')
<section class="theme-slider section-pt-space">
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-6   p-0 p-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <?php $r=json_decode($layout->image1);
                        if (DB::table('categories')->where('parent_category', '=', urldecode($r->link))->exists()) {
                            $link='show-category/'.$r->link;
                              //dd($link);
                            }
                            else{
                                $link='show-product/'.$r->link;
                                //dd($link);
                            } //dd($r);?>
                        <a href="{{asset($link)}}"><img  src="{{asset($r->name)}}" style="max-width: 100%;"></a>
                    </div>
                    <div class="col-md-6 mb-3 p-0 p-md-3">
                        <?php $r=json_decode($layout->image5);
                        if (DB::table('categories')->where('parent_category', '=', urldecode($r->link))->exists()) {
                            $link='show-category/'.$r->link;
                            }
                            else{
                                $link='show-product/'.$r->link;
                            }?>
                        <a href="{{asset($link)}}"><img  src="{{asset(json_decode($layout->image5)->name)}}" style="max-width: 100%;"></a>
                       <!-- <img  src="images/new/600x200.png" style="max-width: 100%;"> -->
                    </div>
                    <div class="col-md-6 mb-3 p-0 p-md-3">
                        <?php $r=json_decode($layout->image6);
                        if (DB::table('categories')->where('parent_category', '=', urldecode($r->link))->exists()) {
                            $link='show-category/'.$r->link;
                            }
                            else{
                                $link='show-product/'.$r->link;
                            }?>
                        <a href="{{asset($link)}}"><img  src="{{asset(json_decode($layout->image6)->name)}}" style="max-width: 100%;"></a>
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
                         <a href="{{asset($link)}}"><img  src="{{asset(json_decode($layout->image2)->name)}}" style="max-width: 100%;"></a>
                       <!--  <img  src="images/new/600x350.png" style="max-width: 100%;"> -->
                    </div>
                    <div class="col-md-12  mb-3 p-0 p-md-3">
                        <?php $r=json_decode($layout->image3);
                        if (DB::table('categories')->where('parent_category', '=', urldecode($r->link))->exists()) {
                            $link='show-category/'.$r->link;
                            }
                            else{
                                $link='show-product/'.$r->link;
                            }?>
                         <a href="{{asset($link)}}"><img  src="{{asset(json_decode($layout->image3)->name)}}" style="max-width: 100%;"></a>
                        <!-- <img  src="images/new/600x350-2.png" style="max-width: 100%;"> -->
                    </div>
                </div>
            </div>
            <div class="col-md-3  p-0 p-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <?php $r=json_decode($layout->image4);
                        if (DB::table('categories')->where('parent_category', '=', urldecode($r->link))->exists()) {
                            $link='show-category/'.$r->link;
                            }
                            else{
                                $link='show-product/'.$r->link;
                            }?>
                         <a href="{{asset($link)}}"><img  src="{{asset(json_decode($layout->image4)->name)}}" style="max-width: 100%;"></a>
                        <!-- <img  src="images/new/600x725.png" style="max-width: 100%;"> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="row">
                    <div class="col-md-12">
                        <?php $r=json_decode($layout->image7);
                        if (DB::table('categories')->where('parent_category', '=', urldecode($r->link))->exists()) {
                            $link='show-category/'.$r->link;
                            }
                            else{
                                $link='show-product/'.$r->link;
                            }?>
                         <a href="{{asset($link)}}"><img  src="{{asset(json_decode($layout->image7)->name)}}" style="max-width: 100%;"></a>
                      <!-- <img  src="images/new/800x250.png" style="max-width: 100%;"> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="row">
                    <div class="col-md-12">
                        <?php $r=json_decode($layout->image8);
                        if (DB::table('categories')->where('parent_category', '=', urldecode($r->link))->exists()) {
                            $link='show-category/'.$r->link;
                            }
                            else{
                                $link='show-product/'.$r->link;
                            }?>
                         <a href="{{asset($link)}}"><img  src="{{asset(json_decode($layout->image8)->name)}}" style="max-width: 100%;"></a>
                      <!-- <img  src="images/new/800-250-2.png" style="max-width: 100%;"> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <?php $r=json_decode($layout->image9);
                        if (DB::table('categories')->where('parent_category', '=', urldecode($r->link))->exists()) {
                            $link='show-category/'.$r->link;
                            }
                            else{
                                $link='show-product/'.$r->link;
                            }?>
                         <a href="{{asset($link)}}"><img  src="{{asset(json_decode($layout->image9)->name)}}" style="max-width: 100%;"></a>
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
                    <a @if(DB::table('categories')->where('category', $r->link)->pluck('parent_category')->first()) href="{{ url('show-product/'.$r->link) }}" @else href="{{ url('show-category/'.$r->link) }}" @endif >
                        <img src="images/new/600x200-2.png" class="d-block w-100" alt="slider">
                    </a>
                </div>
                <?php $count++; ?>
            @endif
        @endfor
        <div class="carousel-item">
          <img src="images/new/600x200.png" class="d-block w-100" alt="slider">
        </div>
        <div class="carousel-item">
          <img src="images/new/600x200.png" class="d-block w-100" alt="slider">
        </div>
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

<section class="bg-white py-5">
    <div class="container">
        @foreach
        <h2 class="text-center mb-5" style="color: #000;"><span>Top Searched</span> Plant Categories {{title}}</h2>
        <div class="row">
            <!-- image1 -->
            <div class="@if($r->layout == 'six') col-md-2 @elseif($r->layout == 'four') col-md-3 @else col-md-4 @endif col-6">
                <img  src="images/new/6.png" style="max-width: 100%;">
                <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">Table Tops</p>
            </div>
            <!-- image2 -->
            <div class="col-md-2 col-6">
                <img  src="images/new/7.png" style="max-width: 100%;">
                <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">Succulents</p>
            </div>
            <!-- image3 -->
            <div class="col-md-2 col-6">
                <img  src="images/new/8.png" style="max-width: 100%;">
                <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">Flowering</p>
            </div>
            <!-- image4 -->
            @if($r->layout == 'six' || 'four')
                <div class="col-md-2 col-6">
                    <img  src="images/new/9.png" style="max-width: 100%;">
                    <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">Frgnant</p>
                </div>
                @endif
                @if($r->layout == 'six')
                <div class="col-md-2 col-6">
                    <img  src="images/new/10.png" style="max-width: 100%;">
                    <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">Good Luck</p>
                </div>
                <div class="col-md-2 col-6">
                    <img  src="images/new/11.png" style="max-width: 100%;">
                    <p class="text-center font-weight-bold" style="color:#000; text-transform: uppercase;">Browse More</p>
                </div>
                @endif

        </div>
    </div>
</section>

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

if($req->layout=='four'){
                $file6 = $req->file('img7');
                $filename6 = 'section'.time().'7.'.$req->img7->extension();
                $destinationPath6 = storage_path('../../assets/section');
                $file6->move($destinationPath6, $filename6);
                $image6='assets/section/'.$filename6;
                if (Category::where('parent_category', '=',$req->img7_link)->exists()) {
                            $link='show-category/'.urlencode($req->img7_link);
                            }
                            else{
                                $link='show-product/'.urlencode($req->img7_link);
                            }

                $data6='{"name":"'.$image6.'","img_title":"'.$req->img7_title.'","link":"'.$link.'"}';

                $file7 = $req->file('img8');
                $filename7 = 'section'.time().'8.'.$req->img8->extension();
                $destinationPath7 = storage_path('../../assets/section');
                $file7->move($destinationPath7, $filename7);
                $image7='assets/section/'.$filename7;
                if (Category::where('parent_category', '=',$req->img8_link)->exists()) {
                            $link='show-category/'.urlencode($req->img8_link);
                            }
                            else{
                                $link='show-product/'.urlencode($req->img8_link);
                            }

                $data7='{"name":"'.$image7.'","img_title":"'.$req->img8_title.'","link":"'.$link.'"}';

                //$data=json_decode($data1);

                //return response()->json($data);
                //dd($data);
             
                 $reg->image7=$data6;
                 $reg->image8=$data7;
            }