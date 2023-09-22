<header class="header">
	<div class="grid wide">
		<!-- search -->
		<div class="header__contain">
			<label for="mobile-search" class="header__mobile-search">
				<i class="header__mobile-search-icon fas fa-search"></i>
			</label>
			<div class="header__logo">
				<a href="/" class="header__logo-link">
					<img src="./assets/img/logo/logo-full-white.png" class="header__logo-img">
				</a>
			</div>
			<input type="checkbox" id="mobile-search" class="header__search-check" hidden>
			<form method="GET" action="search" class="header__search">
				<div class="header__search-input-wrap">
					<input type="text" id="search" name="search" class="header__search-input" placeholder="Tìm kiếm....">
					<div class="header__search-history">
						<ul class="header__search-history-list" id="search_result">
							<li class="header__search-history-item">
								<a href="#">MẸO: Bấm vào biểu tượng màu cam hoặc ấn Enter để tìm kiếm</a>
							</li>
						</ul>
					</div>
				</div>
				<button type="submit" class="btn header__search-btn">
					<i class="header__search-btn-icon fas fa-search"></i>
				</button>
			</form>
			<!-- header__cart--no-cart --><!-- header__cart--has-cart -->
			<div class="header__cart header__cart--has-cart">
				<i class="header__cart-icon fas fa-shopping-cart"></i>
				<div class="header__cart-count">0</div>
				
				<div class="header__cart-list no-cart">
					<img src="#" class="header__no-cart-img">
					<p class="header__no-cart-text">Chưa có sản phẩm</p>
				</div>
				
				<div class="header__cart-list has-cart">
					<h4 class="header__cart-heading">Sản phẩm đã chọn</h4>
				</div>
			</div>
		</div>
	</div>
	<ul class="header__sort-bar">
		<li class="header__sort-item">
			<a href="#" class="header__sort-link">Liên quan</a>
		</li>
		<li class="header__sort-item header__sort-item--active">
			<a href="#" class="header__sort-link">Mới nhất</a>
		</li>
		<li class="header__sort-item">
			<a href="#" class="header__sort-link">Bán chạy</a>
		</li>
		<li class="header__sort-item">
			<a href="#" class="header__sort-link">Giá</a>
		</li>
	</ul>
</header>