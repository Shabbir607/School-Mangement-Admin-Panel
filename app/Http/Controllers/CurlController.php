<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;


class CurlController extends Controller
{
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');

        $jsonData = $response->json();

        dd($jsonData);
    }

    public function store()
    {
        $response = Http::post('https://jsonplaceholder.typicode.com/posts',[
                        'title' => 'This is text example from webappfix',
                        'body'  => 'This is text example from webappfix as body'
                    ]);

        $jsonData = $response->json();

        dd($jsonData);
    }

    public function update()
    {
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1',[
                        'title' => 'This is text example from webappfix',
                        'body'  => 'This is text example from webappfix as body'
                    ]);

        $jsonData = $response->json();

        dd($jsonData);
    }

    public function delete()
    {
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/1');

        $jsonData = $response->json();

        dd($jsonData);
    }

}