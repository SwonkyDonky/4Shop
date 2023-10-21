@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-center my-5"> 

	<form action="{{ route('admin.categories.store') }}" method="POST" style="min-width: 320px;" enctype="multipart/form-data">
		
		<h4>Nieuwe categorie</h4>

		<div class="form-group">
			<label for="name">Naam</label>
			<input type="text" id="name" name="name" class="form-control">
		</div>

		<button type="submit" class="form-control btn btn-primary my-2">Create</button>
		{{ csrf_field() }}
        {{ method_field('POST') }}
	</form>
</div>

@endsection
