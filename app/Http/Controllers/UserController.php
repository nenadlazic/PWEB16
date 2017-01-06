<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        Auth::login($user); //tehmicki loginujemo usera

        return redirect()->away("/offer");
    }

    public function postSignIn(Request $request){
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){ //ako je uspesno logovanje sa tim inicijalima vreaca true, inace false
            return redirect()->away("/offer");
        }
        return redirect()->back(); //ako je neuspesno logovanje samo se vrati na tu istu stranu
    }

    public function offerView(){
        return redirect()->to(public_path());
        //return view('offer');
    }
}