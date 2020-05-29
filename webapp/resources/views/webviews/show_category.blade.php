@extends('web_master')

@section('main_content')	
 
 @include('components.breadcrumb')

 <!--section start-->
@if(count($category)>=1)
<section class="collection section-big-py-space ratio_square bg-light">
    <div class="container">
        <div class="row partition-collection">
            @foreach($category as $r)
            <div class="col-lg-3 col-md-6">
                <div class="collection-block">
                    <div><a href="{{url('show-product/'.urlencode($r->category))}}"><img src="{{url($r->image)}}" class="img-fluid  bg-img" alt=""></a></div>
                    <div class="collection-content">
                        <h4>(<?php echo DB::table('products')->where('category',$r->category)->count(); ?> products)</h4>
                        <h3><a href="{{url('show-product/'.urlencode($r->category))}}">{{$r->category}}</a></h3>
                        <p style="width:247px; height: 67px;  overflow: auto;">{{$r->description}}</p><a href="{{url('show-product/'.urlencode($r->category))}}" class="btn btn-normal">View</a></div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- <div class="row partition-collection section-big-pt-space">
            <div class="col-lg-3 col-md-6">
                <div class="collection-block">
                    <div><img src="{{url('images/collection/7.jpg')}}" class="img-fluid  bg-img" alt=""></div>
                    <div class="collection-content">
                        <h4>(20 products)</h4>
                        <h3>fashion</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a href="category-page(left-sidebar).html" class="btn btn-normal">View</a></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="collection-block">
                    <div><img src="{{url('images/collection/8.jpg')}}" class="img-fluid  bg-img" alt=""></div>
                    <div class="collection-content">
                        <h4>(20 products)</h4>
                        <h3>fashion</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a href="category-page(left-sidebar).html" class="btn btn-normal">View</a></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="collection-block">
                    <div><img src="{{url('images/collection/9.jpg')}}" class="img-fluid  bg-img" alt=""></div>
                    <div class="collection-content">
                        <h4>(20 products)</h4>
                        <h3>fashion</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a href="category-page(left-sidebar).html" class="btn btn-normal">View</a></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="collection-block">
                    <div><img src="{{url('images/collection/11.jpg')}}" class="img-fluid  bg-img" alt=""></div>
                    <div class="collection-content">
                        <h4>(20 products)</h4>
                        <h3>fashion</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a href="category-page(left-sidebar).html" class="btn btn-normal">View</a></div>
                </div>
            </div>
        </div> -->
    </div>
</section>
@else
<section>
    <center><h3 style="color: red;">Not Available This Category</h3></center>
</section>
@endif
<!--Section ends-->

@endsection