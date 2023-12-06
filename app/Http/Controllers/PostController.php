<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //jangan lupa import model Post dengan cara klik kanan untuk import
        $post = Post::all();
        //berfungsi untuk mengatur jenis data yang akan ditampilkan
        return response()->json(['data' => $post]);
    }
    public function getResource()
    {
        $post = Post::all();
        //jangan lupa import PostResources
        return PostResource::collection($post);
    }


}
