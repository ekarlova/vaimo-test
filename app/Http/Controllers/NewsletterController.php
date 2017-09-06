<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',

        ]);
    }
}
