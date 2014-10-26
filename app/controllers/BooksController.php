<?php 

class BooksController extends BaseController {

	/**
	 * @function	addBook
	 * 
	 * @description	performs the function of adding a book to the database
	 * 
	 * @var			rules
	 * 					- title : required
	 * 					- genre : required and numeric
	 * 					- author : required
	 * 
	 * @return		redirect to list of books
	 */
    public function addBook()
    {
		$rules = array(
			'title' => 'required',
			'genre' => 'required|numeric',
			'author'=> 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails())
		{
			return Redirect::to('books/add')->withErrors($validator);
	
		} else
		{
			$title = trim($_POST['title']);
			$author = trim($_POST['author']);

			DB::insert('insert into books (title, author, genre, created_at, updated_at) values (?, ?, ?, ?, ?)', array($title, $author, $_POST['genre'], date('Y-m-d H:i:s'), date('Y-m-d H:i:s')));
		}

		return Redirect::to('/');
    }

	/**
	 * @function	updateBook
	 * 
	 * @description	performs the function of updating a book in the database
	 * 
	 * @var			id	the id of the book we are editing
	 * @var			rules
	 * 					- title : required
	 * 					- genre : required and numeric
	 * 					- author : required
	 * 
	 * @return		redirect to list of books
	 */
    public function updateBook($id)
    {
		$rules = array(
			'title' => 'required',
			'genre' => 'required|numeric',
			'author'=> 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails())
		{
			return Redirect::to('books/edit/'. $id)->withErrors($validator);
	
		} else
		{
			$title = trim($_POST['title']);
			$author = trim($_POST['author']);

			DB::update('UPDATE books SET title = ?, author = ?, genre = ?, updated_at = ? WHERE id = ?', array($title, $author, $_POST['genre'], date('Y-m-d H:i:s'), $id));
		}

		return Redirect::to('/');
    }

	/**
	 * @function	deleteBook
	 * 
	 * @description	performs the function of removing a book from the database
	 * 
	 * @var			id	the id of the book we are editing
	 * 
	 * @return		redirect to list of books
	 */
    public function deleteBook($id)
    {
		DB::delete('DELETE FROM books WHERE id = ?', array($id));

		return Redirect::to('/');
    }

}