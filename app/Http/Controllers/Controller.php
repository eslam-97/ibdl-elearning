<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $students = student::where('partner', 300)->paginate(20);
        return view('dashboard',compact('students'));
    }

    public function search(Request $request){
        $search = $request['search'];
        $students = student::where('partner', 300)->where(function($q) use($search) {
            $q->where(DB::raw('lower(name)'), 'like', '%' . strtolower($search) . '%')
            ->orWhere('logbook', 'Like', '%'.$search.'%')
            ->orWhere('code', 'Like', '%'.$search.'%');
        })->paginate(20);
        return view('dashboard',compact(['students','search']));
    }

}
