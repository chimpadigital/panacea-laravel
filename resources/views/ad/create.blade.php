@extends('layouts.app')

@section('head')
	<script src="{{ asset('global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js')}}"></script>
	<script src="{{ asset('global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js')}}"></script>
	<script src="{{ asset('global_assets/js/plugins/uploaders/fileinput/fileinput.min.js')}}"></script>
	
	
	
	<script src="{{ asset('global_assets/js/demo_pages/uploader_bootstrap.js')}}"></script>
	
	<!-- Theme JS files -->
	<script src="{{ asset('global_assets/js/plugins/editors/summernote/summernote.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/demo_pages/editor_summernote.js') }}"></script>
	<!-- /theme JS files -->

@endsection

@section('content')

@if (session('status'))
    <div class="alert alert-success alert-styled-left alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
        <span class="font-weight-semibold">{{ session('status') }}</span>
    </div>
@endif
@if ($errors->any())

        <div class="alert alert-warning alert-styled-left alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
            <span class="font-weight-semibold">Atención!</span>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>


@endif

<div class="card">
		<div class="card-header header-elements-inline">
			<h5 class="card-title">Crear Anuncio</h5>
			<div class="header-elements">
				<div class="list-icons">
            		
            	</div>
        	</div>
		</div>

		<div class="card-body">
			<form id="formulario" action="{{ route('anuncios.store') }}" method="POST" enctype="multipart/form-data">
				
				{{ csrf_field() }}
				
				<div class="form-group">
				
					<label for="">Titulo</label>
				
					<input class="form-control" type="text" name="title" required>
				
				</div>

				<div class="form-group">
				
					<label for="">Contenido</label>
				
					<div class="summernote"></div>
				
					<input id="description" class="form-control" type="hidden" name="description" required>
				
				</div>

				<div class="form-group">
				
					<label for="">Imagen</label>
				
					<input class="file-input" type="file" data-show-caption="false" data-show-upload="false" data-show-remove="true" name="img" required>
				
				</div>

				<button type="submit" class="btn btn-success">Guardar</button>
			</form>
		</div>
	</div>
@endsection

@section('scripts')
<script type="text/javascript">
	$('#formulario').submit(function(){
		var markupStr = $('.summernote').summernote('code');
		$('#description').val(markupStr);
			
	});
	
</script>
@endsection