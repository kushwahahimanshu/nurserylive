<!--breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>product</h2>
                        <ul>
                            <li><a href="#">{{$details->category}}</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="#">{{$details->name}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- section start -->
<section class="section-big-pt-space bg-light">
    <div class="collection-wrapper">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="product-slick no-arrow">
                      @foreach(explode(',',$details->image) as $img)
                                  <div><img src="{{url($img)}}" alt="" class="img-fluid  image_zoom_cls-0"></div>
                      @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12 p-0">
                            <div class="slider-nav">
                              <?php $img=explode(',', $details->image);?>
                                @for($i=0;$i < count($img);$i++)
                                  <div><img src="{{url($img[$i])}}" alt="" class="img-fluid  image_zoom_cls-0"></div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 rtl-text">
                    <div class="product-right">
                        <h2>{{$details->name}}</h2>
                        <!-- <h4><del>$459.00</del><span>55% off</span></h4> -->
                        <h3>Rs {{$details->price}}</h3>
                        <!-- <ul class="color-variant">
                            <li class="bg-light0"></li>
                            <li class="bg-light1"></li>
                            <li class="bg-light2"></li>
                        </ul> -->
                        <!-- <div class="product-description border-product">
                            <h6 class="product-title size-text">select size <span><a href="#" data-toggle="modal" data-target="#sizemodal">size chart</a></span></h6>
                            <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Sheer Straight Kurta</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body"><img src="../assets/images/size-chart.jpg" alt="" class="img-fluid "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="size-box">
                                <ul>
                                    <li class="active"><a href="#">s</a></li>
                                    <li><a href="#">m</a></li>
                                    <li><a href="#">l</a></li>
                                    <li><a href="#">xl</a></li>
                                </ul>
                            </div>
                            <h6 class="product-title">quantity</h6>
                            <div class="qty-box">
                                <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                    <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                            </div>
                        </div> -->
                        <div class="product-buttons"><a href="{{url('add-to-cart/'.$details->id)}}"  class="btn btn-normal">add to cart</a> <a href="#" class="btn btn-normal">buy now</a></div>
                        <div class="border-product">
                            <h6 class="product-title">product details</h6>
                            <p>{!!$details->description!!}</p>
                        </div>
                        <div class="border-product">
                            <div class="product-icon">
                                <ul class="product-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                                <form class="d-inline-block">
                                    <button class="wishlist-btn"><a href="{{url('add-to-wishlist/'.$details->id)}}"><i class="fa fa-heart"></i><span class="title-font">Add To WishList</span></a></button>
                                </form>
                            </div>
                        </div>
                        <div class="border-product ">
                            <h6 class="product-title">Time Reminder</h6>
                            <div class="timer">
                                <p id="demo"><span>25 <span class="padding-l">:</span> <span class="timer-cal">Days</span> </span><span>22 <span class="padding-l">:</span> <span class="timer-cal">Hrs</span> </span><span>13 <span class="padding-l">:</span> <span class="timer-cal">Min</span> </span><span>57 <span class="timer-cal">Sec</span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->


<!-- product-tab starts -->
<section class=" tab-product  tab-exes ">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12 col-lg-12 ">
               <div class=" creative-card creative-inner">
                   <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                       <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-toggle="tab" href="#top-home" role="tab" aria-selected="true">Description</a>
                           <div class="material-border"></div>
                       </li>
                       <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-profile" role="tab" aria-selected="false">Details</a>
                           <div class="material-border"></div>
                       </li>
                       <!-- <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-selected="false">Video</a>
                           <div class="material-border"></div>
                       </li> -->
                       <li class="nav-item"><a class="nav-link" id="review-top-tab" data-toggle="tab" href="#top-review" role="tab" aria-selected="false">Write Review</a>
                           <div class="material-border"></div>
                       </li>
                   </ul>
                   <div class="tab-content nav-material" id="top-tabContent">
                       <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                           <p>{!!$details->description!!}</p>
                       </div>
                       <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                           <p>{!!$details->about_product_details!!}</p>
                           <!-- <div class="single-product-tables">
                               <table>
                                   <tbody>
                                   <tr>
                                       <td>Febric</td>
                                       <td>Chiffon</td>
                                   </tr>
                                   <tr>
                                       <td>Color</td>
                                       <td>Red</td>
                                   </tr>
                                   <tr>
                                       <td>Material</td>
                                       <td>Crepe printed</td>
                                   </tr>
                                   </tbody>
                               </table>
                               <table>
                                   <tbody>
                                   <tr>
                                       <td>Length</td>
                                       <td>50 Inches</td>
                                   </tr>
                                   <tr>
                                       <td>Size</td>
                                       <td>S, M, L .XXL</td>
                                   </tr>
                                   </tbody>
                               </table>
                           </div> -->
                       </div>
                      <!--  <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                           <div class="mt-4 text-center">
                               <iframe width="560" height="315" src="https://www.youtube.com/embed/BUWzX78Ye_8" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                           </div>
                       </div> -->
                       <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                           <form class="theme-form">
                               <div class="form-row">
                                   <div class="col-md-12">
                                       <div class="media">
                                           <label>Rating</label>
                                           <div class="media-body ml-3">
                                               <div class="rating three-star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-6">
                                       <label for="name">Name</label>
                                       <input type="text" class="form-control" id="name" placeholder="Enter Your name" required>
                                   </div>
                                   <div class="col-md-6">
                                       <label for="email">Email</label>
                                       <input type="text" class="form-control" id="email" placeholder="Email" required>
                                   </div>
                                   <div class="col-md-12">
                                       <label for="review">Review Title</label>
                                       <input type="text" class="form-control" id="review" placeholder="Enter your Review Subjects" required>
                                   </div>
                                   <div class="col-md-12">
                                       <label for="review">Review Content</label>
                                       <textarea class="form-control" placeholder="Wrire Your Testimonial Here" id="exampleFormControlTextarea1" rows="6"></textarea>
                                   </div>
                                   <div class="col-md-12">
                                       <button class="btn btn-normal" type="submit">Submit Your Review</button>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
</section>
<!-- product-tab ends -->

<!-- related products -->
<section class="section-big-py-space  ratio_asos bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-12 product-related">
                <h2>related products</h2>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 product">
                <div class="product-slide no-arrow">
                    <div>
                      @foreach($result as $r)
                        <div class="product-box">
                          <?php $img=explode(',', $r->image); //var_dump($r); dd();?>
                           @if(count($img)==1)
                            <div class="product-imgbox">
                                <div class="product-front">
                                     <a href="{{url('product-details/'.urlencode($r->name))}}">
                                        <img src="{{url($r->image)}}" class="img-fluid  " alt="product">
                                     </a>
                                </div>
                                <div class="product-back">
                                   <a href="{{url('product-details/'.urlencode($r->name))}}">
                                      <img src="{{url($r->image)}}" class="img-fluid" alt="product">
                                   </a>
                                </div>
                            </div>
                           @else
                            <div class="product-imgbox">
                                <div class="product-front">
                                     <a href="{{url('product-details/'.urlencode($r->name))}}">
                                        <img src="{{url($img[0])}}" class="img-fluid  " alt="product">
                                     </a>
                                </div>
                                <div class="product-back">
                                   <a href="{{url('product-details/'.urlencode($r->name))}}">
                                      <img src="{{url($img[1])}}" class="img-fluid" alt="product">
                                   </a>
                                </div>
                            </div>
                           @endif
                            <div class="product-detail detail-center ">
                                <div class="detail-title">
                                    <div class="detail-left">
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="#">
                                            <h6 class="price-title">
                                                reader will be distracted.
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="detail-right">
                                        <div class="check-price">
                                            $ 56.21
                                        </div>
                                        <div class="price">
                                            <div class="price">
                                                ₹ {{$r->price}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-detail">
                                     <a href="{{url('add-to-cart/'.$r->id)}}"  title="Add to cart">
                                        <i class="ti-bag" ></i>
                                          </a>
                                           <a href="{{url('add-to-wishlist/'.$r->id)}}" title="Add to Wishlist">
                                              <i class="ti-heart" aria-hidden="true"></i>
                                           </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                       </div>
                      @endforeach
                    </div>
                    <!-- <div>
                        <div class="product-box">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <img src="../assets/images/layout-1/product/2.jpg" class="img-fluid  " alt="product">
                                </div>
                                <div class="product-back">
                                    <img src="../assets/images/layout-1/product/a2.jpg" class="img-fluid  " alt="product">
                                </div>
                            </div>
                            <div class="product-detail detail-center ">
                                <div class="detail-title">
                                    <div class="detail-left">
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="#">
                                            <h6 class="price-title">
                                                reader will be distracted.
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="detail-right">
                                        <div class="check-price">
                                            $ 56.21
                                        </div>
                                        <div class="price">
                                            <div class="price">
                                                $ 24.05
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-detail">
                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                        <i class="ti-bag" ></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <img src="../assets/images/layout-1/product/3.jpg" class="img-fluid  " alt="product">
                                </div>
                                <div class="product-back">
                                    <img src="../assets/images/layout-1/product/a3.jpg" class="img-fluid  " alt="product">
                                </div>
                            </div>
                            <div class="product-detail detail-center ">
                                <div class="detail-title">
                                    <div class="detail-left">
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="#">
                                            <h6 class="price-title">
                                                reader will be distracted.
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="detail-right">
                                        <div class="check-price">
                                            $ 56.21
                                        </div>
                                        <div class="price">
                                            <div class="price">
                                                $ 24.05
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-detail">
                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                        <i class="ti-bag" ></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <img src="../assets/images/layout-1/product/4.jpg" class="img-fluid  " alt="product">
                                </div>
                                <div class="product-back">
                                    <img src="../assets/images/layout-1/product/a4.jpg" class="img-fluid  " alt="product">
                                </div>
                            </div>
                            <div class="product-detail detail-center ">
                                <div class="detail-title">
                                    <div class="detail-left">
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="#">
                                            <h6 class="price-title">
                                                reader will be distracted.
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="detail-right">
                                        <div class="check-price">
                                            $ 56.21
                                        </div>
                                        <div class="price">
                                            <div class="price">
                                                $ 24.05
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-detail">
                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                        <i class="ti-bag" ></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <img src="../assets/images/layout-1/product/5.jpg" class="img-fluid  " alt="product">
                                </div>
                                <div class="product-back">
                                    <img src="../assets/images/layout-1/product/a5.jpg" class="img-fluid  " alt="product">
                                </div>
                            </div>
                            <div class="product-detail detail-center ">
                                <div class="detail-title">
                                    <div class="detail-left">
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="#">
                                            <h6 class="price-title">
                                                reader will be distracted.
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="detail-right">
                                        <div class="check-price">
                                            $ 56.21
                                        </div>
                                        <div class="price">
                                            <div class="price">
                                                $ 24.05
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-detail">
                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                        <i class="ti-bag" ></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <img src="../assets/images/layout-1/product/6.jpg" class="img-fluid  " alt="product">
                                </div>
                                <div class="product-back">
                                    <img src="../assets/images/layout-1/product/a6.jpg" class="img-fluid  " alt="product">
                                </div>
                            </div>
                            <div class="product-detail detail-center ">
                                <div class="detail-title">
                                    <div class="detail-left">
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="#">
                                            <h6 class="price-title">
                                                reader will be distracted.
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="detail-right">
                                        <div class="check-price">
                                            $ 56.21
                                        </div>
                                        <div class="price">
                                            <div class="price">
                                                $ 24.05
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-detail">
                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                        <i class="ti-bag" ></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-box">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <img src="../assets/images/layout-1/product/7.jpg" class="img-fluid  " alt="product">
                                </div>
                                <div class="product-back">
                                    <img src="../assets/images/layout-1/product/a7.jpg" class="img-fluid  " alt="product">
                                </div>
                            </div>
                            <div class="product-detail detail-center ">
                                <div class="detail-title">
                                    <div class="detail-left">
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="#">
                                            <h6 class="price-title">
                                                reader will be distracted.
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="detail-right">
                                        <div class="check-price">
                                            $ 56.21
                                        </div>
                                        <div class="price">
                                            <div class="price">
                                                $ 24.05
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-detail">
                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                        <i class="ti-bag" ></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- related products