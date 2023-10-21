@extends('layouts.admin')

@section('content')

<div class="d-flex align-items-center flex-column my-5"> 

	<form action="{{ route('admin.categories.update', $category) }}" method="POST" style="min-width: 520px;" enctype="multipart/form-data">

		<div class="yesur">
			<div class="form-group">
				<h4>Categorie aanpassen</h4>
				<label for="title">Titel</label>
				<input type="text" id="title" name="title" class="form-control" value="{{ old('title', $category->title) }}">

				<button type="submit" class="form-control btn btn-primary my-2">Opslaan</button>
				{{ csrf_field() }}
				{{ method_field('PATCH') }}
			</div>
			<div class="form-group">
				<h4>Producten</h4>
				@foreach($category->products as $product)
					<li>{{ $product->title }}</li>
				@endforeach
			</div>
		</div>
		
	</form>
	<form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
		<button type="submit" class="form-control btn btn-outline-danger">Verwijderen</button>
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
	</form>
</div>

@endsection
