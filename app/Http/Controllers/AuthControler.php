<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthControler extends Controller
{
    {
        public function Register(){
            return view('Register');
    
        }
    
        public function selamatdatang(){
            return view ('selamatdatang');
        }
    
        public function selamatdatang_post(Request $Request){
            return view ('selamatdatang');
        }
    }
}
