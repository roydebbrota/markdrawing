@extends('frontend.layouts.master.app')

@section('content')
    <!-- page name banner -->
	<section id="page_banner_portrait">
		<div class="row">
			<div class="col-lg-6">
				<div class="content_wrap_cc">
					<p class="pt_heading c_center">
						Markdrawing
					</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="content_wrap_cc">
					<p class="pt_heading_t c_center">
						Home Page
					</p>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Collections -->
	<section id="Featured_Collections">
		<div class="container">
			<div class="row">
				<div class="col-auto">
					<div class="c_filtering">
						<span class="d-inline-block pr-3 sort_by">Sort By</span>
						<select name="sort_by" id="">
							<option value="featured" selected="selected">Featured</option>
							<option value="best-selling">Best selling</option>
							<option value="alphabetically-a-z">Alphabetically, A-Z</option>
							<option value="alphabetically-z-a">Alphabetically, Z-A</option>
							<option value="price-low-to-high">Price, low to high</option>
							<option value="date-old-to-new">Date, old to new</option>
							<option value="date-new-to-old">Date, new to old</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row"> 
				@forelse ($products as $item)
				<div class="col-lg-3 p-2">
					<a href="{{route('product.show',$item->slug)}}" class="fc_link_item">
						<div class="fc_item_wrap">
							<?php 
							$image = App\ProductImage::where('product_id', $item->id)->first();	
							?>
							<img src="{{ asset('/images').'/'.$image->image }}" alt="" class="img-fluid">
							<p class="py-3">{{ $item->title }}</p>
							<div id="star_rating1" start="3" class="text-left d-block"></div>
							<h2 class="text-center">$ {{ $item->price }}</h2>
						</div>
					</a>
				</div>
				@empty 
				@endforelse
			</div>
			 
		</div>
	</section>
@endsection