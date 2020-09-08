@extends('layouts.app')
@section('content')
	<div class="col-12">
	    <div class="card card-{{ _config('card-color') }}">
	        <div class="card-header">
	            <h3 class="card-title">Clients</h3>
	            <div class="card-tools"><a data-toggle="modal" data-target="#_new" class="btn btn-xs btn-success">Ajouter <i class="fa fa-plus"></i></a></div>
	        </div>
        	<div class="card-body">
        		<div class="row">
        			<div class="col-12">
        				<div class="table-responsive">
        					<table class="table table-striped table-hover table-bordered dataTable">
        						<thead>
        							<td>#</td>
        							<td>Nom</td>
        							<td>Téléphone</td>
        							<td>Adresse</td>
        							<td>Email</td>
        							<td>Contrat</td>
        							<td style="column-width: 12%">Actions</td>
        						</thead>
        						<tbody>
        							@foreach($clients as $item)
        							<tr>
        								<td>{{ ++$loop->index }}</td>
        								<td>{{ $item->nom }}</td>
        								<td>{{ $item->telephone }}</td>
        								<td>{{ $item->adresse }}</td>
        								<td>{{ $item->email }}</td>
        								<td><a href="{{ asset('img/'.$item->contrat) }}"><i class="fa fa-download"></i></a></td>
        								<td>
        									<form style="display: inline-block;">
        										<a class="btn btn-info" href=""><i class="fa fa-eye"></i></a>
        									</form>
        									<form style="display: inline-block;">
        										<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#_edit{{ $item->id }}"><i class="fa fa-pencil"></i></button>
        									</form>
        									<form action="{{ route('clients.destroy', $item->id) }}" method="POST" style="display: inline-block">
        										{{ csrf_field() }}
        										<input type="hidden" name="_method" value="DELETE">
        										<button class="btn btn-danger" class="delete"><i class="fa fa-trash"></i></button>
        									</form>
        								</td>
        							</tr>
        							@endforeach
        						</tbody>
        					</table>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="card-footer">
        	</div>
	    </div>
	</div>

	<div class="modal fade" id="_new">
	    <div class="modal-dialog modal-lg">
			<div class="modal-content card card-success">
			    <div class="card-header">
			        <h3 class="card-title">Client</h3>
			        <div class="card-tools"><button class="btn btn-tool" type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button></div>
			    </div>
			    <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
			    	{{ csrf_field() }}
				    <div class="card-body">
				    	<div class="row">
				    		<div class="col-md-6 col-sm-6 col-xs-12">
								<div class='form-group'>
									<div>Nom <span class="text-danger">*</span></div>
									<input type='text' class='form-control' name='nom' required>
								</div>

								<div class='form-group'>
									<div>Téléphone <span class="text-danger">*</span></div>
									<input type='text' class='form-control' name='telephone' required>
								</div>
							</div>
				    		<div class="col-md-6 col-sm-6 col-xs-12">
								<div class='form-group'>
									<div>Adresse <span class="text-danger">*</span></div>
									<input type='text' class='form-control' name='adresse' required>
								</div>

								<div class='form-group'>
									<div>Email </div>
									<input type='text' class='form-control' name='email'>
								</div>
							</div>								
				    		<div class="col-12">
								<div class='form-group'>
									<div>Document (Contrat) <span class="text-danger">*</span></div>
									<input type='FILE' class='form-control' name='contrat' accept=".pdf" required>
								</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="card-footer">
				    	<div class="pull-right">
				    		<button class="btn btn-sm btn-success" name="create">valider <i class="fa fa-check"></i></button>
				    	</div>
				    </div>
			    </form>
			</div>
		</div>
	</div>

	@foreach($clients as $item)
	<div class="modal fade" id="_edit{{ $item->id }}">
	    <div class="modal-dialog modal-lg">
			<div class="modal-content card card-primary">
			    <div class="card-header">
			        <h3 class="card-title">Client</h3>
			        <div class="card-tools"><button class="btn btn-tool" type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button></div>
			    </div>
			    <form action="{{ route('clients.update', $item->id) }}" method="POST" enctype="multipart/form-data">
			    	{{ csrf_field() }}
			    	<input type="hidden" name="_method" value="PUT">
				    <div class="card-body">
				    	<div class="row">
				    		<div class="col-md-6 col-sm-6 col-xs-12">
								<div class='form-group'>
									<div>Nom <span class="text-danger">*</span></div>
									<input type='text' class='form-control' name='nom' value="{{ $item->nom }}" required>
								</div>

								<div class='form-group'>
									<div>Téléphone <span class="text-danger">*</span></div>
									<input type='text' class='form-control' name='telephone' value="{{ $item->telephone }}" required>
								</div>
							</div>
				    		<div class="col-md-6 col-sm-6 col-xs-12">
								<div class='form-group'>
									<div>Adresse <span class="text-danger">*</span></div>
									<input type='text' class='form-control' name='adresse' value="{{ $item->adresse }}" required>
								</div>

								<div class='form-group'>
									<div>Email </div>
									<input type='text' class='form-control' name='email' value="{{ $item->email }}">
								</div>
							</div>								
				    		<div class="col-12">
								<div class='form-group'>
									<div>Document (Contrat) <span class="text-danger">*</span></div>
									<input type='FILE' class='form-control' name='contrat' accept=".pdf" required>
								</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="card-footer">
				    	<div class="pull-right">
				    		<button class="btn btn-sm btn-success" name="edit">valider <i class="fa fa-check"></i></button>
				    	</div>
				    </div>
			    </form>
			</div>
		</div>
	</div>
	@endforeach
@endsection
