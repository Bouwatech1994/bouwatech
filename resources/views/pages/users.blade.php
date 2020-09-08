@extends('layouts.app')
@section('content')
	<div class="col-12">
	    <div class="card card-{{ _config('card-color') }}">
	        <div class="card-header">
	            <h3 class="card-title">Utilisateurs</h3>
	            <div class="card-tools"><a data-toggle="modal" data-target="#_new" class="btn btn-xs btn-success">Ajouter <i class="fa fa-plus"></i></a></div>
	        </div>
        	<div class="card-body">
        		<div class="row">
        			<div class="col-12">
        				<div class="table-responsive">
        					<table class="table table-striped table-hover table-bordered dataTable">
        						<thead>
        							<td>#</td>
        							<td>Prenom</td>
        							<td>Nom</td>
        							<td>Téléphone</td>
        							<td>Adresse</td>
        							<td>Email</td>
        							<td>Photo</td>
        							<td>Pseudo</td>
        							<td>Groupe</td>
        							<td style="column-width: 12%">Actions</td>
        						</thead>
        						<tbody>
        							@foreach($users as $item)
        							<tr>
        								<td>{{ ++$loop->index }}</td>
        								<td>{{ $item->first_name }}</td>
        								<td>{{ $item->name }}</td>
        								<td>{{ $item->phone }}</td>
        								<td>{{ $item->address }}</td>
        								<td>{{ $item->email }}</td>
        								<td><img src="{{ asset('img/'.$item->photo) }}" alt="Profile" class="img-circle img-fluid" style="height: 30px"></td>
        								<td>{{ $item->login }}</td>
        								<td>{{ $item->groupe }}</td>
        								<td>
        									<form style="display: inline-block;">
        										<a class="btn btn-info" href=""><i class="fa fa-eye"></i></a>
        									</form>
        									<form style="display: inline-block;">
        										<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#_edit{{ $item->id }}"><i class="fa fa-pencil"></i></button>
        									</form>
        									<form action="{{ route('users.destroy', $item->id) }}" method="POST" style="display: inline-block">
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
			        <h3 class="card-title">Utilisateur</h3>
			        <div class="card-tools"><button class="btn btn-tool" type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button></div>
			    </div>
			    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
			    	{{ csrf_field() }}
				    <div class="card-body">
				    	<div class="row">
				    		<div class="col-md-6 col-sm-6 col-xs-12">
								<div class='form-group'>
									<div>Prenom <span class="text-danger">*</span></div>
									<input type='text' class='form-control' name='first_name' required>
								</div>

								<div class='form-group'>
									<div>Téléphone <span class="text-danger">*</span></div>
									<input type='text' class='form-control' name='phone' required>
								</div>

								<div class='form-group'>
									<div>Groupe <span class="text-danger">*</span></div>
									<select name="groupe_id" class="form-control" required>
										<option value="">Séléctionner...</option>
										@foreach($groupes as $groupe)
										<option value="{{ $groupe->id }}">{{ $groupe->groupe }}</option>
										@endforeach
									</select>
								</div>
								
								<div class='form-group'>
									<div>Pseudo <span class="text-danger">*</span></div>
									<input type='text' class='form-control' name='login' required>
								</div>
							</div>
				    		<div class="col-md-6 col-sm-6 col-xs-12">
				    			<div class='form-group'>
				    				<div>Nom <span class="text-danger">*</span></div>
				    				<input type='text' class='form-control' name='name' required>
				    			</div>

								<div class='form-group'>
									<div>Email </div>
									<input type='text' class='form-control' name='email'>
								</div>
								
								<div class='form-group'>
									<div>Adresse <span class="text-danger">*</span></div>
									<input type='text' class='form-control' name='address' required>
								</div>

								<div class='form-group'>
									<div>Mot de passe</div>
									<input type="password" name="password" class="form-control">
								</div>
							</div>	
							<div class="col-12">
								<div class='form-group'>
									<div>Photo</div>
									<input type='FILE' class='form-control' name='photo'>
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

	@foreach($users as $item)
	<div class="modal fade" id="_edit{{ $item->id }}">
	    <div class="modal-dialog modal-lg">
			<div class="modal-content card card-primary">
			    <div class="card-header">
			        <h3 class="card-title">Utilisateur</h3>
			        <div class="card-tools"><button class="btn btn-tool" type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button></div>
			    </div>
			    <form action="{{ route('users.update', $item->id) }}" method="POST" enctype="multipart/form-data">
			    	{{ csrf_field() }}
			    	<input type="hidden" name="_method" value="PUT">
				    <div class="card-body">
				    	<div class="row">
				    		<div class="col-md-6 col-sm-6 col-xs-12">
								<div class='form-group'>
									<div>Prenom <span class="text-danger">*</span></div>
									<input type='text' class='form-control' name='first_name' value="{{ $item->first_name }}" required>
								</div>

								<div class='form-group'>
									<div>Téléphone <span class="text-danger">*</span></div>
									<input type='text' class='form-control' name='phone' value="{{ $item->phone }}" required>
								</div>
								<div class='form-group'>
									<div>Groupe <span class="text-danger">*</span></div>
									<select name="groupe_id" class="form-control" required>
										<option value="">Séléctionner...</option>
										@foreach($groupes as $groupe)
										@if($groupe->id == $item->groupe_id)
										<option value="{{ $groupe->id }}" selected>{{ $groupe->groupe }}</option>
										@else
										<option value="{{ $groupe->id }}">{{ $groupe->groupe }}</option>
										@endif
										@endforeach
									</select>
								</div>
							</div>
				    		<div class="col-md-6 col-sm-6 col-xs-12">
				    			<div class='form-group'>
				    				<div>Nom <span class="text-danger">*</span></div>
				    				<input type='text' class='form-control' name='name' value="{{ $item->name }}" required>
				    			</div>

								<div class='form-group'>
									<div>Email </div>
									<input type='text' class='form-control' name='email' value="{{ $item->email }}">
								</div>
								
								<div class='form-group'>
									<div>Adresse <span class="text-danger">*</span></div>
									<input type='text' class='form-control' name='address' value="{{ $item->address }}" required>
								</div>
							</div>	
							<div class="col-12">
								<div class='form-group'>
									<div>Photo</div>
									<input type='FILE' class='form-control' name='photo'>
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
