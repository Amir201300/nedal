<?php

namespace App\Http\Controllers\Fronted;

use App\Interfaces\UserInterface;
use App\Models\Service;
use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Auth,Artisan,Hash,File,Crypt;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Models\Consults;
use App\Http\Controllers\Manage\EmailsController;

class ServicesController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function allServices(){
        $Services = Services::get();
        return view('Fronted.Services.allServices',compact('Services'));
    }

    public function singleService($Id){
        $Services = Services::where('id',$Id)->first();
        if (!is_null($Services)) {
            return view('Fronted.Services.singleServices',compact('Services'));
        }
    }

}
