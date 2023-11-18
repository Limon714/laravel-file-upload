<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = 'Donal Trump';
        $age = '75';

        
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        
        $nameCookie = 'access_token';
        $valueCookie = '123-XYZ';
        $minutesCookie = 1;
        $pathCookie = '/';
        $domainCookie = $_SERVER['SERVER_NAME'];
        $secureCookie = false;
        $httpOnlyCookie = true;

   
        $cookie = cookie($nameCookie, $valueCookie, $minutesCookie, $pathCookie, $domainCookie, $secureCookie, $httpOnlyCookie);

       
        return response($data)
            ->cookie($cookie)
            ->setStatusCode(200);
    }
}
