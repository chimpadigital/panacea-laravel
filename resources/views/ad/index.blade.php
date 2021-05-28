@extends('layouts.app')

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

<!-- Right content -->
<div class="flex-fill overflow-auto">

	<!-- List layout -->
    <div class="card">
		<div class="card-header bg-white header-elements-inline">
			<h6 class="card-title">Anuncios</h6>
			<div class="header-elements">
				<div class="list-icons">
					<a href="{{ route('anuncios.create') }}" class="btn btn-success">Crear Anuncio</a>
            	</div>
        	</div>
		</div>

		<ul class="media-list">
			@forelse($ads as $ad)
				
			<li class="media card-body flex-column flex-sm-row">
				<div class="mr-sm-3 mb-2 mb-sm-0">
					<a href="#">
						<img src="{{Storage::disk('public')->url($ad->img)}}" class="rounded" width="44" height="44" alt="">
					</a>
				</div>

				<div class="media-body">
					<h6 class="media-title font-weight-semibold">
						<a href="{{ route('anuncios.edit',$ad->id) }}">{{ $ad->title }}</a>
					</h6>

					{!! $ad->description !!}
				</div>

				<div class="ml-sm-3 mt-2 mt-sm-0">
					<div class="row">
						<div class="col-md-6">
							
							<a href="{{ route('anuncios.edit',$ad->id) }}" class="btn btn-primary">Editar</a>
						
						</div>
						<div class="col-md-6">
							
							<form action="{{ route('anuncios.destroy',$ad->id) }}" method="POST">
								{{ method_field('DELETE') }}
								{{ csrf_field() }}
								<button href="#" class="btn btn-danger">Eliminar</button>
							</form>

						</div>
					</div>
				</div>
			</li>				

			@empty

			<li class="media card-body flex-column flex-sm-row">
				Sin Anuncios
			</li>	

			@endforelse
			

		</ul>
	</div>
	<!-- /list layout -->

</div>
<!-- /right content -->
@endsection