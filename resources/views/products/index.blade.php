@extends('layouts.app')

@section('content')

	<div class="products">
		<div>
			<h3>Categorie&euml;n</h3>
            <ul>
                @foreach ($categories as $category)
					<li><a href="{{ route('shop.category', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
				@endforeach
            </ul>
        </div>
		@foreach($products as $product)
			<a class="product-row no-link" href="{{ route('products.show', $product) }}">
				<img src="{{ url($product->image ?? 'img/placeholder.jpg') }}" alt="{{ $product->title }}" class="rounded">
				<div class="product-body">
					<div>
						<h5 class="product-title"><span>{{ $product->title }}</span><em>&euro;{{ $product->price }}</em></h5>
						@unless(empty($product->description))
							<p>{{ $product->description }}</p>
						@endunless
						@if ($product->discount > 0)
							<p class="discount">
								Nu voor <span>&euro;{{ $product->price }}</span>!! Oude prijs: <span>&euro;{{ $product->getRawOriginal('price') }}</span>
								<br>
								<span>{{ $product->discount }}%</span> korting!
							</p>
                        @endif
					</div>
					<button class="btn btn-primary">Meer info &amp; bestellen</button>
				</div>
			</a>
		@endforeach
	</div>

@endsection