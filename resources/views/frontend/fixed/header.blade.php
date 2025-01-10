<header>




		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="{{('/frontend/images/icons/logo-01.png')}}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="">Home</a>
								<ul class="sub-menu">
									<li><a href="">Homepage 1</a></li>
									<li><a href="">Homepage 2</a></li>
									<li><a href="">Homepage 3</a></li>
								</ul>
							</li>

							<li>
								<a href="">Shop</a>
							</li>

							<li class="label1" data-label1="hot">
								<a href="">Brand</a>
							</li>

							<li>
								<a href="">Category</a>
							</li>

							

							<li>
								<a href="">Product</a>
							</li>

							<li>
								<a href="">About</a>
							</li>



							<!-- <li>
								<a href="" data-toggle="modal" data-target="#loginModal">Login</a>
							</li> -->

							<li>
								<a href="">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">

    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
        <i class="zmdi zmdi-search"></i>
    </div>


    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
        <i class="zmdi zmdi-shopping-cart"></i>
    </div>

    <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
        <i class="zmdi zmdi-favorite-outline"></i>
    </a>

    <!-- Login Icon with Dropdown -->
    <div class="dropdown">
        <a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 dropdown-toggle" data-toggle="dropdown">
            <i class="zmdi zmdi-account"></i>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="login.html"data-toggle="modal" data-target="#loginModal">Login</a>
            <a class="dropdown-item" href="{{route('register')}}">Register Now</a>
        </div>
    </div>

</div>

				</nav>
			</div>	
		</div>






		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="{{('/frontend/images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.html">Home</a>
					<ul class="sub-menu-m">
						<li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="">Shop</a>
				</li>

				<li>
					<a href="" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="">Blog</a>
				</li>

				<li>
					<a href="">About</a>
				</li>

				<li>
					<a href="">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		
	</header>




	<!-- Button trigger modal -->


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" style="z-index:99999" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
	  <form action="{{route('c-login')}}" method="post">
		@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <div class="text-center">
  <button type="submit" class="btn" style="background-color:rgb(24, 26, 27); color: white; border: none;">
    Login
</button>

</div>

  
</form>


      </div>
      <div class="modal-footer">
	  <p class="text-center w-100">Don't have an account?<br>
    <a href="{{route('register')}}" style="color: #007bff; text-decoration: none; font-weight: bold;">
        Register Now
    </a>
</p>

	  <!-- <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        
		

	
      </div>
    </div>
  </div>
</div>