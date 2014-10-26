@extends('layout')
@section('title', 'List of all books')
@section('description', 'This is a listing of all books')
@section('content')

	<h1>Book List</h1>
	<table class="datatables table table-striped table-hover" role="table" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Genre</th>
				<th>Added</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
	@foreach($books as $book)
			<tr>
				<td>{{ $book->id }}</td>
				<td><a href="{{ URL::asset('books/view/' . $book->id) }}" title="View {{ $book->title }}">{{ $book->title }}</a></td>
				<td>{{ $genre[$book->genre] }}</td>
				<td>{{ $book->created_at }}</td>
				<td>
					<a href="{{ URL::asset('books/edit/' . $book->id) }}" class="btn btn-info" title="Edit {{ $book->title }}">Edit</a></a>
					<a href="{{ URL::asset('books/delete/' . $book->id) }}" class="btn btn-danger" title="Delete {{ $book->title }}">Delete</a>
				</td>
			</tr>
	@endforeach
		</tbody>
	</table>

@stop