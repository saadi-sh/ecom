@extends('layouts.default')
@section('content')

<style>
.bg-danger.cat-blocks {
    height: 168px;
}
</style>
        <!-- BANNER : begin -->

        <div id="banner">
            <!-- BANNER BG : begin -->

            <div class="banner-bg">
                <div class="banner-bg-item"><img src="https://cdn.wallpapersafari.com/77/27/Ht6xaO.jpg" alt="" style="width:100%;"></div>

            </div>

            <!-- BANNER BG : end -->

            <!-- BANNER SEARCH : begin -->

            <div class="banner-search">
                <div class="container">
                    <div class="banner-search-inner">
                        <ul class="custom-list tab-title-list clearfix">
                            <li class="tab-title active"><a href="#swap">Swap</a></li>

                            <!-- <li class="tab-title"><a href="#book">Book</a></li>

							<li class="tab-title"><a href="#rent">Rent</a></li> -->
                        </ul>

                        <ul class="custom-list tab-content-list">
                            <!-- SWAP : begin -->

                            <li class="tab-content active">
                                <form class="default-form" method="POST" action="# ">
                                  
                                    <span class="search-input">
                                        <input id="searchname6" type="text" placeholder="What do you want to rent?" name="name" />
                                    </span>

                                    <span class="search-input">
                                        <input type="text" id="searchname3" name="country_id" placeholder="Search For City" />
                                    </span>

                                    <!-- city : end -->
                                    <span>
                                        
                                    </span>
                                    <!-- SUBMIT : begin -->

                                    <span class="submit-btn">
                                        <button class="button"><i class="fa fa-search"></i> Search</button>
                                    </span>

                                    <!-- SUBMIT : end -->
                                </form>
                            </li>

                            <!-- SWAP : end -->
                        </ul>
                    </div>
                </div>
            </div>

            <!-- BANNER SEARCH : end -->
        </div>



        <div id="core">
            <section class="mt-5"  >
                <div class="container">
                    <h2>Search By Category</h2>
                    <div class="row mt-4 justify-content-center mb-4" id="category"  >
                    @foreach($category as $maker)
                        <div class="col-lg-2 col-md-4  col-sm-12" id="category">
                        
                        
                            <div class="bg-danger cat-blocks">
                           
                                <div class="text-white">
                               
                                    <div class="img-width-1">
                                    <a href="#" class="fs-5 anchor-block"> <img src="{{ asset('img/category/'.$maker->icon)}}" class="img-fluid"></a>
                                    </div>
                                    <a href="#" class="fs-5 anchor-block">{{$maker->name}}</a>
                                   
                                </div>
                               
                            </div>
                           
                        </div>
                        @endforeach
                       
                     
                </div>
                        <div class="properties-listing-footer clearfix">
												<div class="default-form" style="text-align: center; padding:20px;">
													<a href="#"><button class="button ">See More</button></a>
												</div>
											</div>
                     </div>
            </section>
            <!-- BROWSE : begin -->

            <section id="browse">
                <div class="container">
                    <h2>Browse</h2>
                    <div class="row">
                    	<div class="col-lg-9 col-md-12">
                    		<div class="browse-inner">
                        		<div class="tabs-container browse-tabs-container">
                            <ul class="custom-list tab-title-list">

                                <li class="tab-title active"><a href="#top-destinations">Latest Products</a></li>
                            </ul>

                            <ul class="custom-list tab-content-list browse-contents">

                                <li class="tab-content active">
                                    <!-- BROWSE DESTINATIONS : begin -->

                                    <div class="browse-destinations">
                                         <!-- PROPERTIES LISTING : begin -->
										<div class="properties-listing">
											<!-- PROPERTY LIST : begin -->
                                            <div class="row" id="product">
                                        @foreach($product as $products)
												
                                                @if($loop->iteration % 2 == 0)
                                                    <div class="col-md-4">
                                                        <div class="even">

                                                            <ul class="custom-list clearfix property-list layout-grid ms-3">
                                                                <li class="property first-in-row">
                                                                    <a href="{{ url('product/show/'.$products->id) }}" class="property-thumb">
                                                                        <img src="{{ asset('img/product/'.$products->f_img) }}" alt="">
                                                                        <span class="overlay"><span><i class="fa fa-search"></i> View More</span></span>
                                                                    </a>
                                                                    <div class="property-content">
                                                                        <h4 class="property-title"><a href="{{ url('product/show/'.$products->id) }}">{{$products->name}}</a></h4>
                                                                        <h5 class="property-location">{{$products->cat_id}}</h5>
                                                                        <p class="property-description">{{$products->desc}}</p>
                                                                    
                                                                        <div class="property-price-rating">
                                                                            <div class="property-price"><strong>{{$products->price}}</strong></div>
                                                                            <div class="property-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="col-md-4">
                                                        <div class="odd">


                                                            <ul class="custom-list clearfix property-list layout-grid ms-3">
                                                                <li class="property first-in-row">
                                                                    <a href="{{ url('product/show/'.$products->id) }}" class="property-thumb">
                                                                        <img src="{{ asset('img/product/'.$products->f_img) }}" alt="">
                                                                        <span class="overlay"><span><i class="fa fa-search"></i> View More</span></span>
                                                                    </a>
                                                                    <div class="property-content">
                                                                        <h4 class="property-title"><a href="{{ url('product/show/'.$products->id) }}">{{$products->name}}</a></a></h4>
                                                                        <h5 class="property-location">{{$products->cat_id}}</h5>
                                                                        <p class="property-description">{{$products->desc}}</p>
                                                                        
                                                                        <div class="property-price-rating">
                                                                            <div class="property-price"><strong>{{$products->price}}</strong></div>
                                                                            <div class="property-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                              @endif

                                                
                                        @endforeach
												<!-- PROPERTY 2 : end -->
                                            </div>
												<!-- PROPERTY 2 : begin -->
											<div class="properties-listing-footer clearfix">
												<div class="default-form" style="text-align: center; ">
													<button class="button see-more" data-page="2" data-link="products/?page=" data-div="#product">Load More</button>
												</div>
											</div>
											<!-- PROPERTIES LISTING FOOTER : end -->

										</div>
										<!-- PROPERTIES LISTING : end -->
                                    </div>

                                    <!-- BROWSE DESTINATIONS : end -->
                                </li>

                            </ul>
                        		</div>
                    		</div>
                    	</div>

                    	
                    </div>
                    
                </div>
            </section>

            <!-- BROWSE : end -->
    <!-- CONTENT SECTION: begin -->

            <!-- CONTENT SECTION : end -->
        </div>

        
@endsection

@section('script')
        


<script>
    $(".see-more").click(function() {
        
        
  $div = $($(this).data('div')); //div to append
  $link = $(this).data('link'); //current URL

  $page = $(this).data('page'); //get the next page #
  $href = $link + $page; //complete URL
  
 
  $.get($href, function(response) { //append data
    
    $html = $(response).find("#product").html();
    $div.append($html);
    
  });

  $(this).data('page', (parseInt($page) + 1)); //update page #
});

    </script>


@endsection
