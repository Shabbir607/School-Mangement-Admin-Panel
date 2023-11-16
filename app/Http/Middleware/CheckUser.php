<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use LdapRecord\Container;
use Illuminate\Support\Facades\Session ;

class CheckUser 
{
    public function handle(Request $request ,Closure $next):
    Response

    {
       
        $data = $request->all();
        $username = $data['username'];
        $password = $data['password'];
        //  dd( $password );
        $connection = Container::getConnection('alpha');
    //     $check = $data['Rule'];
    //     dd($check);
    //    if($check == 'teacher' && $check != 'student' && $check != 'test-ou'){
    //         $connection = Container::getConnection('alpha'); 
             
    //     }

    //    else if($check == 'test-ou' && $check != 'teacher' && $check != 'student' ) {
    //         $connection = Container::getConnection('bravo');

    //    }

       if($connection->auth()
        ->attempt($username, $password)){
        Session::put('name', $username );
        return $next($request);
       }
        
        else{
            return redirect('/login');
        }
    }

}


