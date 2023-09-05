<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ManagementController extends Controller
{
    public function index()
    {
        $opinions = Contact::paginate(10);
        return view('management', compact('opinions'));
    }

    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/management');
    }

    public function search(Request $request){

        $opinions = Contact::NameSearch($request->name)
        ->GenderSearch($request->gender)
        ->CreatedAtSearch_start($request->start)
        ->CreatedAtSearch_end($request->end)
        ->EmailSearch($request->email)
        ->paginate(10);

        return view('management', compact('opinions'));
    }

}
