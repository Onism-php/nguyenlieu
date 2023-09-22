@extends('client.layouts.app')

@section('title')Nguyên liệu pha chế Ly Phạm- Home @endsection

@section('content')

<div class="container">
	<div class="grid wide">
		<div class="row sm-gutter">
			<div class="col l-2 m-0 c-0">
				<!-- category -->
				<nav class="category">
					<h3 class="category-heading">
						<i class="category-heading-icon fas fa-list-ul"></i>
						Bộ lọc tìm kiếm
					</h3>
					<form action="search">
					<div class="category-group">
						<div class="category-group-title">Theo Danh Mục</div>
						<ul class="category-group-list">
							<li class="category-group-item">
								<input type="checkbox" name="dụng cụ pha chế" value="1" class="category-group-item-check">
								dụng cụ pha chế
							</li>
							<li class="category-group-item">
								<input type="checkbox" name="hàng lạnh" class="category-group-item-check">
								hàng lạnh
							</li>
							<li class="category-group-item">
								<input type="checkbox" name="trái cây đóng hộp" class="category-group-item-check">
								trái cây đóng hộp
							</li>
							<li class="category-group-item">
								<input type="checkbox" name="siro" class="category-group-item-check">
								siro
							</li>
							<li class="category-group-item">
								<input type="checkbox" name="sinh tố mứt" class="category-group-item-check">
								sinh tố mứt
							</li>
							<li class="category-group-item">
								<input type="checkbox" name="cốt dừa - sữa tươi - đường đen" class="category-group-item-check">
								cốt dừa - sữa tươi - đường đen
							</li>
							<li class="category-group-item">
								<input type="checkbox" name="sauce- sốt sô,dâu, cà" class="category-group-item-check">
								sauce- sốt sô,dâu, cà
							</li>
							<li class="category-group-item">
								<input type="checkbox" name="bột - pudding" class="category-group-item-check">
								bột - pudding
							</li>
							<li class="category-group-item">
								<input type="checkbox" name="trân châu các loại trà3q" class="category-group-item-check">
								trân châu các loại trà3q
							</li>
							<li class="category-group-item">
								<input type="checkbox" name="trà các loại" class="category-group-item-check">
								trà các loại
							</li>
						</ul>
						<button class="btn btn--primary category-group-filter-btn category-group--margin">Tim</button>

					</div>
					</form>
				</nav>
			</div>
			<div class="col l-10 m-12 c-12">
				<!-- home filter -->
				<div class="home-filter hide-on-mobile-tablet">
					<div class="home-filter-control">
						<p class="home-filter-title">Sắp xếp theo</p>
						<button class="btn btn--primary home-filter-btn">Phổ biến</button>
						<button class="btn home-filter-btn">Mới nhất</button>
						<button class="btn home-filter-btn">Bán chạy</button>
						<div class="btn home-filter-sort">
							<p class="home-filter-sort-btn">Giá</p>
							<i class="fas fa-sort-amount-down-alt"></i>
							<ul class="home-filter-sort-list">
								<li>
									<a href="#" class="home-filter-sort-item-link">
										Giảm dần
										<i class="fas fa-sort-amount-down-alt"></i>
									</a>
								</li>
								<li>
									<a href="#" class="home-filter-sort-item-link">
										Tăng dần
										<i class="fas fa-sort-amount-up-alt"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="home-filter-page">
						<div class="home-filter-page-number">
							<p class="home-filter-page-now">#</p>
							/#
						</div>
						<div class="home-filter-page-control">
							<a href="#" class="home-filter-page-btn home-filter-page-btn--disable">
								<i class="fas fa-angle-left"></i>
							</a>
							<a href="#" class="home-filter-page-btn">
								<i class="fas fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- home product -->
				<div class="home-product">
					<nav class="mobile-category">
						<ul class="mobile-category-list">
							<li class="mobile-category-item">
								<a href="#" class="mobile-category-item-link">nguyên liệu pha chế</a>
							</li>
							<li class="mobile-category-item">
								<a href="#" class="mobile-category-item-link">dụng cụ pha chế</a>
							</li>
						</ul>
					</nav>
					<div id="list-product" class="row sm-gutter">
					@foreach ($datas as $data )
					<div data="1" class="col l-2-4 m-3 c-6 home-product-item">
						<a class="home-product-item-link" href="{{$data->url}}">
							<div class="home-product-item__img" style="background-image: url({{$data->img}});"></div>
							<div class="home-product-item__info">
								<h4 class="home-product-item__name">{{$data->title}}</h4>
								<div class="home-product-item__price">
									<p class="home-product-item__price-new">{{$data->gia}} đ</p>
									<i class="home-product-item__ship fas fa-shipping-fast"></i>
								</div>
								<div class="home-product-item__footer">
									<div class="home-product-item__save">
										<input type="checkbox" id="heart-save-{{$data->id}}">
										<label for="heart-save-{{$data->id}}" class="far fa-heart"></label>
									</div>
									<div class="home-product-item__rating-star">
										<i class="star-checked far fa-star"></i>
										<i class="star-checked far fa-star"></i>
										<i class="star-checked far fa-star"></i>
										<i class="star-checked far fa-star"></i>
										<i class="star-uncheck far fa-star"></i>
									</div>
									<div class="home-product-item__saled">{{$data->daban}} </div>
								</div>
								<div class="home-product-item__origin">{{$data->diachi}}</div>
								<div class="home-product-item__favourite">
									Yêu thích
								</div>
								<div class="home-product-item__sale-off">
									<div class="home-product-item__sale-off-value">10%</div>
									<div class="home-product-item__sale-off-label">GIẢM</div>
								</div>
							</div>
							<div class="home-product-item-footer">Mua ngay</div>
						</a>
					</div>
						
					@endforeach
					</div>
				</div>
				<!-- pagination -->
				<ul class="pagination home-product-pagination">
					{{$datas->appends(request()->all())->links()}}
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection