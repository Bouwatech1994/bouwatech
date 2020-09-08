@extends('layouts.app')
@section('content')
	<div class="col-12">
	    <div class="card card-{{ _config('card-color') }}">
	        <div class="card-header">
	            <h3 class="card-title">Groupes</h3>
	            <div class="card-tools"><a data-toggle="modal" data-target="#_new" class="btn btn-xs btn-success">Ajouter <i class="fa fa-plus"></i></a></div>
	        </div>
        	<div class="card-body">
        		<div class="row">
        			<div class="col-12">
        				<div class="table-responsive">
        					<table class="table table-striped table-hover table-bordered dataTable">
        						<thead>
        							<td>#</td>
        							<td>Groupe</td>
        							<td>Description</td>
        							<td style="column-width: 12%">Actions</td>
        						</thead>
        						<tbody>
        							@foreach($groupes as $item)
        							<tr>
        								<td>{{ ++$loop->index }}</td>
        								<td>{{ $item->groupe }}</td>
        								<td>{!! (strlen($item->description)>595)?substr($item->description, 0, 595)."...":$item->description !!}</td>
        								<td>
        									<form style="display: inline-block;">
        										<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#_edit{{ $item->id }}"><i class="fa fa-pencil"></i></button>
        									</form>
        									<form action="{{ route('groupes.destroy', $item->id) }}" method="POST" style="display: inline-block">
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
	    <div class="modal-dialog modal-sm">
			<div class="modal-content card card-success">
			    <div class="card-header">
			        <h3 class="card-title">Groupe</h3>
			        <div class="card-tools"><button class="btn btn-tool" type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button></div>
			    </div>
			    <form action="{{ route('groupes.store') }}" method="POST">
			    	{{ csrf_field() }}
				    <div class="card-body">
				    	<div class="row">
				    		<div class="col-12">
								<div class='form-group'>
									<div>Groupe <span class="text-danger">*</span></div>
									<input type='text' class='form-control' name='groupe' required>
								</div>

								<div class='form-group'>
									<div>Description </div>
									<textarea name='description' class='form-control' style='resize: none'></textarea>
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

	@foreach($groupes as $item)
	<div class="modal fade" id="_edit{{ $item->id }}">
	    <div class="modal-dialog modal-sm">
			<div class="modal-content card card-primary">
			    <div class="card-header">
			        <h3 class="card-title">Groupe</h3>
			        <div class="card-tools"><button class="btn btn-tool" type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button></div>
			    </div>
			    <form action="{{ route('groupes.update', $item->id) }}" method="POST">
			    	{{ csrf_field() }}
			    	<input type="hidden" name="_method" value="PUT">
				    <div class="card-body">
				    	<div class="row">
				    		<div class="col-12">
								<div class='form-group'>
									<div>Groupe <span class="text-danger">*</span></div>
									<input type='text' class='form-control' name='groupe' value="{{ $item->groupe }}" required>
								</div>

								<div class='form-group'>
									<div>Description </div>
									<textarea name='description' class='form-control' style='resize: none'>{{ $item->description }}</textarea>
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
