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
        // get the data from an external source
        $request = $this->client->get('bio/new');

        // convert it to PHP variable
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
       
        // replace the {name} part with the actual name
        $bios->bio->content = str_replace("{name}", $bios->bio->name, $bios->bio->content);

        // pass in the updated data so we can use it on the front-end
        return view('bio', compact('bios'));
    }
}
