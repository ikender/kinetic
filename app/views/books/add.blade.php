@extends('layout')
@section('title', 'Add a book')
@section('description', 'Add a book')
@section('content')

	<h1>Add a Book!</h1>
	{{ Form::open(array('url' => 'books/insert', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal', 'role' => 'form')) }}

	<div class="form-group">
		<?php echo Form::label('title', 'Book Title:', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Book Title', 'required' => 'required')); ?>
		</div>
	</div>
	<div class="form-group">
		<?php echo Form::label('author', 'Book Author(s):', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo Form::text('author', null, array('class' => 'form-control', 'placeholder' => 'Book Author(s)', 'required' => 'required')); ?>
		</div>
	</div>
	<div class="form-group">
		<?php echo Form::label('genre', 'Genre:', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
		<?php echo Form::select('genre', array('' => '- Select one -') + $genre, null, array('class' => 'form-control', 'required' => 'required')); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<?php echo Form::submit('Add Book', array('class' => 'btn btn-primary')); ?>
		</div>
	</div>

	{{ Form::close() }}

@stop