<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createForm(Request $request){
        return view('login');
    }
    public function ContactUsForm(Request $request){
        $this->validate($request, [
            'pro_no' => 'required',
            'pro_na' => 'required',
            'pro_le' => 'required',
            'stat'=>'required',
            'price' => 'required'
         ]);
         Contact::create($request->all());
         return back()->with('Success','Successfully saved');
    }
}
