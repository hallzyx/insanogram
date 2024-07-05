<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;


class CreatePostController extends Controller
{
    //

    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('uploadPost');
    }
    public function store(Request $request)
    {
        
        $request->validate([
            'title'=>'required|string|max:100',
            'description'=>'required|string',
            'imagepost'=>'nullable|image|mimes:jpg,png,gif|max:3000',
        ]);

        $path=null;

        if ($request->hasFile('imagepost')) {
            try {
                // Almacenar el archivo de imagen en la carpeta 'images' dentro del disco 'public'
                $path = $request->file('imagepost')->store('images', 'public');
            } catch (\Exception $e) {
                return back()->withErrors(['imagepost' => 'Error al subir la imagen: ' . $e->getMessage()]);
            }
        }


        Post::create([
            'title'=>$request['title'],
            'description'=>$request['description'],
            'imagepost'=>$path,
            'userID'=>auth()->id(),
        ]);

        return redirect()->route('post.index')->with('success', 'Publicación creada correctamente');
    }
}
