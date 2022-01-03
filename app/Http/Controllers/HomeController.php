<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Wallet;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = auth()->user()->id;  
        $user = User::with('wallet')->find($id);  
        //dd($user);   
        $wallet = $user->wallet;
        //dd($wallet->ballance);
        

        $api_url = 'http://api.nbp.pl/api/exchangerates/rates/A/USD/';

        // Read JSON file
        $json_data = file_get_contents($api_url);

        // Decode JSON data into PHP array
        $response_data = json_decode($json_data);

    //    dd($response_data);

        return view('home', ['user' => $user, 'wallet' => $wallet]);
    }
}
