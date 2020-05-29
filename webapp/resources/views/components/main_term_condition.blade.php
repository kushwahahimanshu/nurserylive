 
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>Terms & Conditions</h2> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<section class="blog-detail-page section-big-py-space ratio2_3">
    <div class="container">
        <div class="row section-big-pb-space">
            <div class="col-sm-12 blog-detail">
               <div class="creative-card">
                @foreach($result as $results)  
                        <p>{!!$results->term_condition!!}</p>
                @endforeach
            </div>
            </div>
        </div>  
    </div>
</section> 


<!-- <div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>Terms & Conditions</h2> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<section class="about-page section-big-py-space" style="background-color:white;">
    <div class="custom-container">
        <div class="row"> 
            <div class="col-lg-12">  
                @foreach($result as $results)  
                        <p>{!!$results->term_condition!!}</p>
                @endforeach
            </div>
        </div>
    </div>
</section> -->
<!-- about section end