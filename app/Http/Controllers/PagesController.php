<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home()
    {
        $data = [
            'title'  => 'Inicio',
            'active' => ['home' => 'active'],
        ];

        return view('home/index', compact('data'));
    }


    public function page404()
    {
        $data = [
            'title' => '404 Página no encontrada'
        ];

        return view('pages/404', compact('data'));
    }


    public function contact()
    {
        $data = [
            'title'  => 'Contacto',
            'active' => ['contact' => 'active'],
        ];

        return view('pages/contact', compact('data'));
    }


    public function team()
    {
        $data = [
            'title'  => 'Lideres',
            'active' => ['team' => 'active'],
        ];

        $team = array();

        return view('pages/team', compact('data', 'team'));
    }


    public function about()
    {
        $data = [
            'title'  => 'Nosotros',
            'active' => ['about' => 'active'],
        ];

        return view('pages/about', compact('data'));
    }

}
