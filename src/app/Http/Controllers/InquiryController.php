<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class InquiryController extends Controller
{
    public function index()
    {
        return view('inquiry');
    }

    public function error(Request $request){
        dd($request);
        return view('error');
    }

    public function confirm(ContactRequest $request)
    {
        $confirm = $request->all();
        return view('confirm', compact('confirm'));
    }

    public function thanks(ContactRequest $request)
    {
        $contact=[
            'fullname' => implode($request->only(['sei']))." ".implode($request->only(['mei'])),
            'gender' => implode($request->only(['gender'])),
            'email' => implode($request->only(['email'])),
            'postcode' => mb_convert_kana(implode($request->only(['postcode'])), "na"),
            'address' => mb_convert_kana(implode($request->only(['address'])), "na"),
            'building_name' => mb_convert_kana(implode($request->only(['building_name'])), "na"),
            'opinion' => implode($request->only(['opinion'])),
        ];
        Contact::create($contact);
        return view('thanks');
    }

}
