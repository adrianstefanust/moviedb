<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Libraries\Category;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function index(Category $categoryLibrary)
    {
        try {

            $data['category'] = $categoryLibrary->index();

            $client = new Client(); //GuzzleHttp\Client
            $url = env('API_URL').'now_playing'; //default use now playing API

            $response = $client->request('GET', $url, [
                "query" => [
                    'api_key' => env('API_KEY_MOVIE_DB'),
                ],
            ]);

            $responseBody = json_decode($response->getBody());
            $data['movie_db'] = $responseBody;
            return view('index')->with($data);
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
    }
}
