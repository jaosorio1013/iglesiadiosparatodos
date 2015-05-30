<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $data = [
            'title'  => 'Blog',
            'active' => ['blog' => 'active'],
        ];

        return view('blog/index', compact('data'));
    }


    public function detail($slug)
    {
        $data = [
            'title'  => $slug,
            'active' => ['blog' => 'active'],
        ];

        return view('blog/detail', compact('data'));
    }

}
