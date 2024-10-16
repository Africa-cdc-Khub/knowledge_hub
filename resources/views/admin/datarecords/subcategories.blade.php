
@extends('admin.layouts.main')

@section('styles')
 @include('common.table')
@endsection

@section('content')
<div class="row">
	<div class="card col-lg-12">
		<div class="card-header text-left">
			<h3 class="card-title float-left">{{ $title ?? '' }}</h3>
				<a href="#add_category" data-toggle="modal" class="btn btn-info">Add Sub Category</a>
				<a href="{{ url('admin/datarecords/categories')}}"  class="btn btn-dark">Brow Categories</a>
			    <hr>
		</div>
		<!-- Card Header With Form Filters -->
		<div class="card-header">
		
		</div>
		<div class="card-body text-left">
			<!-- Datatable -->
			<table id="publicationTable" class="table table-striped table-bordered">
				<thead>
					<tr>
                        <th> Sub Category</th>
						<th>Category</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>

					@php 
                    $i = 1;
                    @endphp

					@foreach($subcategories as $record)
						<tr>
							<td>
								{!!truncate($record->sub_catgeory_name, 100) !!}
							</td>
                            <td>
								{!!truncate($record->category->category_name, 100) !!}
							</td>
							<td>
							
								<!-- Edit Modal Action -->
								<a class="btn btn-primary btn-sm" 
								>Edit</a>
								<!-- Delete Modal Action -->
								<a class="btn btn-sm btn-danger ml-1" href="javascript:void(0);" onclick="openDeleteModal('{{ $record->id }}')" class="text-danger"> Delete</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>

            <div class="py-2"> {{$subcategories->links() }}</div>

		</div>

	</div>

	<!-- Include delete-modal.php -->
	@include('admin.datarecords.partials.add-subcategory-modal')

    @endsection