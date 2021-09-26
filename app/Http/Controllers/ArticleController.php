<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
        public function getAll(){
        //mengambil semua data dari tabel articles
        $article = Article::all();
        //mengirim data ke view home
        return view('home',compact('article'));
        }
        public function getById($id){
            $article = array(
                Article::find($id)
            );
            return view('home',compact('article'));
        }
}
