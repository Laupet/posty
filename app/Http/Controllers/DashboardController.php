<?php

namespace App\Http\Controllers;

use App\Mail\PostLiked;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// use MagicLink\Actions\LoginAction;
// use MagicLink\MagicLink;

class DashboardController extends Controller
{

    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index() {
        // dd(auth()->user()->posts);




        // dd();
        // dd(User::first());

        $magicUser = User::where('username', 'halvor')->get()->first();
        $lifetime = 1; // 1 minute
        $numMaxVisits = 1; // Only can visit one time


        // Sample 1; Login and redirect to dash board
        // $urlToDashBoard = MagicLink::create(
        //     new LoginAction($magicUser, redirect('/posts')),
        //     $lifetime,
        //     $numMaxVisits
        // )->protectWithAccessCode('secret')
        // ->url;

        // dd($urlToDashBoard);


        return view('dashboard');
    }
}
