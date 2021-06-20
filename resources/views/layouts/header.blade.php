
                               

        <header id="header">
            <div class="container">
                <div class="header-inner clearfix">
                    <!-- HEADER BRANDING : begin -->

                    <div class="header-branding">
                        <a href="#" style="margin-top: -15px;"><img src="https://www.pngkey.com/png/full/529-5291672_sample-logo-png-transparent-background.png}" alt="Swap" /></a>
                    </div>

                    <!-- HEADER BRANDING : end -->

                    <!-- HEADER NAVBAR : begin -->

                    <div class="header-navbar">
                        <!-- HEADER SEARCH : begin -->

                        <div class="header-search">
                            <form class="default-form" method="POST" action="#">
                                @csrf
                                <!-- SEARCH INPUT : begin -->

                                <div class="search-input">
                                    <i class="ico fa fa-search"></i>

                                    <i class="close fa fa-times"></i>

                                    <input type="text" />
                                </div>

                                <!-- SEARCH INPUT : end -->

                                <!-- SEARCH ADVANCED : begin -->

                                <div class="header-form search-advanced">
                                    <div class="search-advanced-inner">

                                        <p class="form-row clearfix mt-2">
                                            <select class="form-control js-example-tags" name="cat_id" style="width: 100%;">
                                              <option selected="selected" value="">Select Category</option>
                                              @foreach($category as $maker)
                                              <option value="{{$maker->id}}">{{$maker->name}}</option>
                                              @endforeach
                                              
                                            </select>
                                        </p>

                                        <p class="form-row clearfix mt-2">
                                            
                                     <input  type="text" placeholder="Search By City" class="form-control"   id="searchname" name="country_id" />                                            
                                            
                                        </p>

                                        <!-- TYPE : end -->
                                        <p>
                                            <div class="properties-search-filter p-0">
                                                 <form class="default-form">
                                                    <div class="price-filter toggle-container">
                                                        <h5 class="text-white">By Price</h5>
                                                        <div class="toggle-content">

                                                            <div class="slider-range-container">
                                                                <div class="slider-range" data-min="1" data-max="5000" data-step="3" data-default-min="1" data-default-max="5000" data-currency=" "></div>
                                                                <div class="clearfix">
                                                                    
                                                                    <input type="text" class="range-from" value="1" name="min" >
                                                                    
                                                                    <input type="text" class="range-to" value="5000" name="max" >
                                                                
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </p>

                                        <hr class="form-divider" />

                                        <p class="form-row">
                                            <button class="submit-btn button"><i class="fa fa-search"></i> Search</button>
                                        </p>
                                    </div>
                                </div>

                                <!-- SEARCH ADVANCED : end -->
                            </form>
                        </div>

                        <!-- HEADER SEARCH : end -->

                        <!-- HEADER MENU : begin -->
                                          
                        <div class="header-menu">
                            <button class="header-btn">Menu <i class="fa fa-angle-down"></i></button>

                            <nav class="header-nav">
                                <ul>
                                    <li>
                                        <a href="#">Home</a>
                                       
                                    </li>

                                    <li>
                                        <a href="#">Item Listing</a>
                                    </li>
                                    <li>
                                        <a href="#">Category Listing</a>
                                    </li>

                                    <li><a href="#">About Us</a></li>

                                    <li><a href="#">Contact Us</a></li>

                                    <li><a href="#">Privacy Policy</a></li>

                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    
                                                      </ul>
                            </nav>
                        </div>

                        <!-- HEADER MENU : end -->

                        <!-- HEADER TOOLS : begin -->

                        <div class="header-tools">

                            <!-- HEADER REGISTER : begin -->
                            @if(Auth::check())
                            <span class="header-register">
                                <a href="#" class="register-toggle header-btn"><i class="fa fa-user"></i>-</a>
                            </span>
                            
                            
                            @else
                            <div class="header-register">
                                <button class="register-toggle header-btn"><i class="fa fa-plus-circle"></i> Register</button>

                                <div class="header-form">
                                    <form action="#" method="POST" class="default-form">
                                     @csrf                       
                                        <p class="form-row">
                                            <input required  type="text" id="name" type="text" class="form-control " name="name" value="#" autocomplete="name" autofocus placeholder="Username" />
                                        </p>


                                        <span class="text-danger">-</span>

                                        
                                        <p class="form-row">
                                            <input required  id="email" type="text" class="form-control" name="email" value="-" autocomplete="email" placeholder="Email" />
                                        </p>

                                      
                                        <span class="text-danger"></span>
                                        
                                        
                                        <p class="form-row">
                                            <input required id="password1" type="password" class="form-control " placeholder="password" name="password" autocomplete="new-password" />
                                        </p>

                                        <span class="text-danger"></span>

                                        <p class="form-row">
                                            <input required  id="password-confirm" type="password" class="form-control" placeholder="confirm password" name="password_confirmation"  autocomplete="new-password" />
                                        </p>
                                        
                                        <span class="text-danger"></span>


                                        <p class="form-row">
                                            <button type="submit" class="submit-btn button"><i class="fa fa-plus-circle"></i>  </button>
                                            
                                        </p>
                                    </form>
                                </div>
                            </div>
                        
                            <!-- HEADER REGISTER : end -->

                            <!-- HEADER LOGIN : begin -->
                        
                            
                            <div class="header-login">
                                <button class="login-toggle header-btn"><i class="fa fa-power-off"></i> Login</button>

                                <div class="header-form">
                                    <form action="#" method="POST" class="default-form">
                                        <input required id="email" type="text" class="form-control" name="email" value="" autocomplete="email" autofocus />
                                        <input required id="name" type="text" class="form-control" name="name" value="" autocomplete="email" autofocus />

                                    </form>
                                </div>
                            </div>
                            @endif
                            

                            <!-- HEADER LOGIN : end -->

                            <!-- HEADER ADD OFFER : begin -->

                            <span class="header-add-offer">
                                <a href="#" class="button"><i class="fa fa-plus"></i> Add Item</a>
                            </span>

                            <!-- HEADER ADD OFFER : end -->
                        </div>

                        <!-- HEADER TOOLS : end -->
                    </div>

                    <!-- HEADER NAVBAR : end -->

                    <!-- SEARCH TOGGLE : begin -->

                    <button class="search-toggle button"><i class="fa fa-search"></i></button>

                    <!-- SEARCH TOGGLE : end -->

                    <!-- NAVBAR TOGGLE : begin -->

                    <button class="navbar-toggle button"><i class="fa fa-bars"></i></button>

                    <!-- NAVBAR TOGGLE : end -->
                </div>
            </div>
        </header>

