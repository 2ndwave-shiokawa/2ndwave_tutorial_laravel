<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;

class BookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = Book::query()->paginate(5);

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::find($id);

        return view('books.show', compact('book'));
    }

    public function create()
    {
        
        return view('books.create');
    }

    public function store(Request $request)
    {
        $data = $request->book;
       

        Book::create([
           'title'           => $data['title'],
           'author'         => $data['author'],
           'issue_date' => $data['issue_date'],
           'synopsis'      => $data['synopsis'],
           'publisher'      => $data['publisher'],
        ]);

        return redirect('books');
    }

    public function edit($id)
    {
        $book = Book::find($id);

        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->blog;
        $blog = Blog::find($id);
        
        $blog->update([
           'title'           => $data['title'],
           'content'         => $data['content'],
           'created_user_id' => $data['created_user_id'],
           'created_at'      => $data['created_at'],
           'updated_at'      => $data['updated_at'],
        ]);

        return redirect("blogs/$blog->id");
    }
    
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        
        return redirect('blogs');
    }    
}