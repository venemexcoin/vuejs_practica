<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Response;

class JsonController extends Controller
{
    public function index()
    {

        $users = User::all();

        return Response::json(

            array(
                'success' => true,
                'usuarios' => $users,
            ),
            200
        );
    }

    public function getPruebaA()
    {
        return view('Ajax.video6.index');
    }
}
