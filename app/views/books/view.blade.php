@extends('layout')
@section('title', 'View a book')
@section('description', 'View a book')
@section('content')

	<h1>View a book</h1>
	<p class="lead"><?php echo $book->title; ?></p>

	<div class="col-sm-2 text-right"><strong>Genre:</strong></div>
	<div class="col-sm-10"><?php echo $genre[$book->genre]; ?></div>

	<div class="col-sm-2 text-right"><strong>Added Date:</strong></div>
	<div class="col-sm-10"><?php echo $book->created_at; ?></div>

	<div class="col-sm-2 text-right"><strong>Modified Date:</strong></div>
	<div class="col-sm-10"><?php echo $book->updated_at; ?></div>

@stop