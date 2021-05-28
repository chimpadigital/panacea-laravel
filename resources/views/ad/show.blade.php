@extends('layouts.app')


@section('head')


	<!-- Theme JS files -->
	<script src="{{ asset('global_assets/js/plugins/editors/summernote/summernote.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/demo_pages/editor_summernote.js') }}"></script>
	<!-- /theme JS files -->

@endsection


@section('content')
<!-- Summernote click to edit -->
	<div class="card">
		<div class="card-header header-elements-inline">
			<h5 class="card-title">Click para editar</h5>
			<div class="header-elements">
				<div class="list-icons">
            		
            	</div>
        	</div>
		</div>

		<div class="card-body">
			<div class="form-group">
				<button type="button" id="edit" class="btn btn-primary"><i class="icon-pencil3 mr-2"></i> Editar</button>
				<button type="button" id="save" class="btn btn-success"><i class="icon-checkmark3 mr-2"></i> Guardar</button>
			</div>

			<div class="click2edit">
				
			</div>
		</div>
	</div>
	<!-- /summernote click to edit -->
@endsection