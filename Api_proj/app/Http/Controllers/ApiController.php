<?php

namespace App\Http\Controllers;

use App\Models\Products;



class ApiController extends Controller
{
    public function usersDB(){
        $users = Products::select('id','name')->get();

        $response = ['users' =>$users];
        return response()->json($response);

      }

    




}