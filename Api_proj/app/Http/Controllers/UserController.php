<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class UserController extends Controller
{

    //поиск пользователей api
    public function index (Request $request){
        $search = null;
        $response = Http::get('https://jsonplaceholder.typicode.com/users');
        $search = $request->input('search');
        $usersJson = $response->json();
        
        $usersArray = collect($usersJson)->pluck('name')->toArray();



        if ($search) {
            $filterUsers = collect($usersArray)->filter(function ($user) use ($search) {
                return stristr($user, $search);
            });
            $usersArray = $filterUsers->all();
            return view("users/AllUsers",compact("usersArray"));
        }
        else{
            
            return view("users/AllUsers",compact("usersArray"));
        }
    }




    //главная страница
    public function main(){
        return view("main");
        }


    //создание пользователя get
    public function create(){
        return view("users/CreateUser");
        }

    //создание пользователя post  
    public function store(){
        
        $data = request()-> validate([
                    'name' => "string",
        ]);
        Products::create($data);
        return redirect()-> route("user.AllUsers");
    
    }
    //все пользователи из бд
    public function Allusers(){
        
        $users = Products::all();
        return view("users/AllUsersDB",compact("users"));
        
    
    }

    // удаление пользвателй из бд
    public function delete($id){

        $user = Products::find($id);
   
       if ($user) {
           $user->delete();
       }
   
       return redirect()-> route("user.AllUsers");
     }


}
