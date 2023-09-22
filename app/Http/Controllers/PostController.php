<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $datas = Post::orderBy('title','DESC')->paginate(30);
        return view('Client.Home.index',compact('datas'));
    }


    public function search(Request $request){
        $search = $request->input('search');
        $datas = Post::search($search)->paginate(30);
        
        return view('Client.Home.search',compact('datas'));
    }

    public function find(Request $request){
        $search = $request->input('search');
        $searchs = Post::search($search)->paginate(10);

        $output='';
        foreach ($searchs as $data){
            $output.=
            '<li class="header__search-history-item">
                <a href="'.$data->url.'">'.$data->title.'</a>
            </li>';
        }
        echo json_encode($output);
    }
}
