@extends('layouts.app')
@section('content')
	<div class="col-12">
	    <div class="card card-{{ _config('card-color') }}">
	        <div class="card-header">
	            <h3 class="card-title">Articles</h3>
	            <div class="card-tools"><a data-toggle="modal" data-target="#_new" class="btn btn-xs btn-success">Ajouter <i class="fa fa-plus"></i></a></div>
	        </div>
        	<div class="card-body">
        		<div class="row">
        			<div class="col-12">
        				<div class="table-responsive">
        					<table class="table table-striped table-hover table-bordered dataTable">
        						<thead>
        							<td>#</td>
        							<td>Article</td>
        							<td>Publicité</td>
        							<td>Image</td>
        							<td>Description</td>
        							<td style="column-width: 12%">Actions</td>
        						</thead>
        						<tbody>
        							@foreach($articles as $item)
        							<tr>
        								<td>{{ ++$loop->index }}</td>
        								<td>{{ $item->article }}</td>
        								<td>{{ $item->publicite }}</td>
        								<td><img src="{{ asset('img/'.$item->img) }}" alt="Image" class="img-rounded img-fluid img-thumbnail" style="height: 40px"></td>
        								<td>{!! (strlen($item->description)>595)?substr($item->description, 0, 595)."...":$item->description !!}</td>
        								<td>
        									<form style="display: inline-block;">
        										<a class="btn btn-info" href=""><i class="fa fa-eye"></i></a>
        									</form>
        									<form style="display: inline-block;">
        										<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#_edit{{ $item->id }}"><i class="fa fa-pencil"></i></button>
        									</form>
        									<form action="{{ route('articles.destroy', $item->id) }}" method="POST" style="display: inline-block">
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
			        <h3 class="card-title">Article</h3>
			        <div class="card-tools"><button class="btn btn-tool" type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button></div>
			    </div>
			    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
			    	{{ csrf_field() }}
				    <div class="card-body">
				    	<div class="row">
				    		<div class="col-md-6 col-sm-6 col-xs-12">
								<div class='form-group'>
									<div>Article <span class="text-danger">*</span></div>
									<input type='text' class='form-control' name='article' required>
								</div>
							</div>
				    		<div class="col-md-6 col-sm-6 col-xs-12">
								<div class='form-group'>
									<div>Image <span class="text-danger">*</span></div>
									<input type='FILE' class='form-control' name='img' accept=".png, .jpg, .jpeg, .gif" required>
								</div>
							</div>
								
				    		<div class="col-12">
								<div class='form-group'>
									<div>Publicité <span class="text-danger">*</span></div>
									<select name="publicite_id" class="form-control" required>
										<option value="">Séléctionner...</option>
										@foreach($publicites as $publicite)
										<option value="{{ $publicite->id }}">{{ $publicite->publicite }}</option>
										@endforeach
									</select>
								</div>
								<div class='form-group'>
									<div> Description </div>
									<textarea name='description' class='form-control' id="_create-desc" style='resize: none'></textarea>
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

	@foreach($articles as $item)
	<div class="modal fade" id="_edit{{ $item->id }}">
	    <div class="modal-dialog modal-lg">
			<div class="modal-content card card-primary">
			    <div class="card-header">
			        <h3 class="card-title">Article</h3>
			        <div class="card-tools"><button class="btn btn-tool" type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button></div>
			    </div>
			    <form action="{{ route('articles.update', $item->id) }}" method="POST" enctype="multipart/form-data">
			    	{{ csrf_field() }}
			    	<input type="hidden" name="_method" value="PUT">
				    <div class="card-body">
				    	<div class="row">
				    		<div class="col-md-6 col-sm-6 col-xs-12">
								<div class='form-group'>
									<div>Article <span class="text-danger">*</span></div>
									<input type='text' class='form-control' name='article' value="{{ $item->article }}" required>
								</div>
							</div>
				    		<div class="col-md-6 col-sm-6 col-xs-12">
								<div class='form-group'>
									<div>Image</div>
									<input type='FILE' class='form-control' name='img' accept=".png, .jpg, .jpeg, .gif">
								</div>
							</div>
								
				    		<div class="col-12">
				    			<div class='form-group'>
				    				<div>Publicité <span class="text-danger">*</span></div>
				    				<select name="publicite_id" class="form-control" required>
				    					<option value="">Séléctionner...</option>
				    					@foreach($publicites as $publicite)
				    					@if($publicite->id == $item->publicite_id)
				    					<option value="{{ $publicite->id }}" selected>{{ $publicite->publicite }}</option>
				    					@else
				    					<option value="{{ $publicite->id }}">{{ $publicite->publicite }}</option>
				    					@endif
				    					@endforeach
				    				</select>
				    			</div>
								<div class='form-group'>
									<div>Description </div>
									<textarea name='description' class='form-control' id="_edit-desc" style='resize: none'>{{ $item->description }}</textarea>
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
