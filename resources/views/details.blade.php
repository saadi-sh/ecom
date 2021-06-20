@extends('layouts.default')
@section('content')
		<div id="core" class="page-property-details">

			<!-- PAGE HEADER : begin -->
			<div class="page-header">
				<div class="container">
					<div class="page-header-inner clearfix">
						<h1>{{$product->name}}</h1>
						<ul class="custom-list breadcrumbs">
							<li><a href="{{ url('home') }}">Home</a> / </li>
							<li><a href="#">Search Results</a> /</li>
							<li><a href="#">Item Details</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- PAGE HEADER : end -->

			<!-- MAIN WRAPPER : begin -->
			<div class="main-wrapper-container">
				<div class="container">
					<div id="main-wrapper">
						<div class="row">
							<div class="col-md-8 order-4">

								<!-- PROPERTY DETAILS : begin -->
								<div class="property-details">

									<!-- PROPERTY IMAGES : begin -->
									
									<div class="property-images">
										<div class="image-list">
                                            <div class="image"><img src="{{ asset('img/product/'.$product->f_img) }}" alt="{{$product->name}}"></div>
                                        </div>
										<div class="images-footer">
											<div class="images-footer-inner">
												<div class="image-description">{{$product->name}}</div>
												<div class="image-counter">{{$product->name}}</div>
											</div>
											<button class="prev-btn"><i class="fa fa-chevron-left"></i></button>
											<button class="next-btn"><i class="fa fa-chevron-right"></i></button>
										</div>
									</div>
									<!-- PROPERTY IMAGES : end -->

									<div class="row">
										<div class="col-md-8">

											<!-- PROPERTY DESCRIPTION : begin -->
											<div class="property-description">

												<!-- DESCRIPTION TEXT : begin -->
												<div class="description-text">
													<h4>{{$product->name}}</h4>
                                                
													<p>{{$product->desc}}</p>
														
                                                </div>
												<!-- DESCRIPTION TEXT : end -->


											</div>
											<!-- PROPERTY DESCRIPTION : end -->

										</div>
										<div class="col-md-4">

											<!-- PROPERTY PANEL : begin -->
											<div class="property-panel">

												<!-- OBJECT PRICE : begin -->
												<div class="panel-item object-price">
													<h4 class="panel-item-title">Price</h4>
                                                    
													<p class="price">from <strong>{{$product->price}}</strong></p>
                                                    
												</div>
												<!-- OBJECT PRICE : end -->

											

												<div class="panel-item object-owner">
													<h4 class="panel-item-title"></h4>
													<div class="clearfix">
														<div class="portrait">
                                <img class="rounded-circle header-profile-user" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/768px-User_icon_2.svg.png" alt="Header Avatar">
														</div>
													</div>
												</div>
												
												
																														
											
											</div>
											<!-- PROPERTY PANEL : end -->

										</div>
									</div>

								</div>
								<!-- PROPERTY DETAILS : end -->

							</div>
							<div class="col-md-4 order-8">

								<!-- PROPERTY LOCATION DETAILS : begin -->
								<aside class="property-location-details">
									<h3 class="property-location-title">Location &amp; Details</h3>


									<!-- PROPERTY INFO : begin -->
									<div class="property-info">
										<h4 class="property-info-title">Details</h4>

										<!-- ADDRESS : begin -->
										<div class="toggle-container property-address">
											<h5 class="toggle-title">Address</h5>
											<div class="toggle-content">

												<p>-</p>

											</div>
										</div>
										<!-- ADDRESS : end -->


									</div>
									<!-- PROPERTY INFO : end -->

								</aside>
								<!-- PROPERTY LOCATION DETAILS : end -->

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- MAIN WRAPPER : end -->

		</div>
		<!-- CORE : end -->

		@endsection


	