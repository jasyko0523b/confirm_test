<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OpinionRequest;
use App\Models\Opinion;

class InquiryController extends Controller
{
    public function index()
    {
        return view('inquiry');
    }

    public function confirm(OpinionRequest $request)
    {
        $sei = $request->only(['sei']);
        $mei = $request->only(['mei']);
        $gender = $request->only(['gender']);
        $email = $request->only(['email']);
        $postcode = $request->only(['postcode']);
        $address = $request->only(['address']);
        $building_name = $request->only(['building_name']);
        $opinion = $request->only(['opinion']);
        $confirm = Opinion::create([
            'fullname' => implode($sei)."　".implode($mei),
            'gender' => (int)implode($gender),
            'email' => implode($email),
            'postcode' => implode($postcode),
            'address' => implode($address),
            'building_name' => implode($building_name),
            'opinion' => implode($opinion)
        ]);
        return view('confirm', compact('confirm'));
    }

    public function thanks(Request $request){
        return view('thanks');
    }


}
