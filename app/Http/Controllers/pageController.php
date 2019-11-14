<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use GuzzleHttp\Client;

class pageController extends Controller
{
    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://hpstr.me/']);
    }

    public function getBio()
    {
        $request = $this->client->get('bio/new');

        $response = json_decode($request->getBody());

        return $response;
    }

    public function homePage()
    {
        return view('welcome');
    }

    public function bioPage()
    {
        $bios = $this->getBio();
       
        $bios->bio->content = str_replace("{name}", $bios->bio->name, $bios->bio->content);

        return view('bio', compact('bios'));
    }
}
