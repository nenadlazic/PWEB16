<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postSignUp(Request $request){//kada kliknemo saljemo zapravo rikvest serveru
        $email = $request['email']; //req[name_hmtl-input]
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']); //porede se hash vrednosti

        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;

        $user->save(); //save to the db

        return redirect()->route('/offer'); //idemo na offer stranicu
    }

    public function postSignIn(Request $request){

    }

    public function offerView(){
        return redirect()->to(public_path());
        //return view('offer');
    }
}