<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opinion;

class ManagementController extends Controller
{
    public function index()
    {
        $opinions = Opinion::paginate(10);
        return view('management', compact('opinions'));
    }

    public function delete(Request $request)
    {
        Opinion::find($request->id)->delete();
        return redirect('/management');
    }

    public function search(Request $request){

        $opinions = Opinion::NameSearch($request->name)
        ->GenderSearch($request->gender)
        ->CreatedAtSearch_start($request->start)
        ->CreatedAtSearch_end($request->end)
        ->EmailSearch($request->email)
        ->paginate(10);

        return view('management', compact('opinions'));
    }

}
