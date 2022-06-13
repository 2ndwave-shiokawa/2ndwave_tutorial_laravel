<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;

class BlogController extends Controller
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
        $blogs = Blog::paginate(5);

        return view('blogs.index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::find($id);

        return view('blogs.show', compact('blog'));
    }

    public function create()
    {
        $users = User::query()->get();
        
        return view('blogs.create', compact('users'));
    }

    public function store(Request $request)
    {
        $data = $request->blog;

        Blog::create([
           'title'           => $data['title'],
           'content'         => $data['content'],
           'created_user_id' => $data['created_user_id'],
           'created_at'      => $data['created_at'],
           'updated_at'      => $data['updated_at'],
        ]);

        return redirect('blogs');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('blogs.edit', compact('blog'));
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