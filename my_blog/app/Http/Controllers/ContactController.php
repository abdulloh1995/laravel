<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        // dd($req);
        // $valid = $req->validate([
        //     'comment' => 'required|min:5|max:50',
        //     'message' => 'required|min:5|max:50'
        // ]);
    }
}
