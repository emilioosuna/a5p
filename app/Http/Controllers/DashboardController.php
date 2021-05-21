<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

use Carbon\Carbon;


class DashboardController extends Controller {

    public function index() {
        if (!auth()->user()) {
            return redirect()->route('salir');
        }


        $fechaactual = Carbon::now();

        $data = [

            'fechaactual' => $fechaactual->format('d/m/Y'),
            'page_title' => 'Dashborad',

        ];

        return view('home')->with($data);
    }
}
