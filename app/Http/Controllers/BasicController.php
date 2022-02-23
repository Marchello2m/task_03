<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Education;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasicController extends Controller
{
    protected $basic=[];
    protected $education=[];
    public function saveBasic(Request $request)
    {
        $basic = new Basic();

        $basic->name = $request->name;
        $basic->surname = $request->surname;
        $basic->phone = $request->phone;
        $basic->email = $request->email;
        $basic->created_at = Carbon::now();
        $basic->save();

        $education = new Education();
        $education->user_id =$basic->id;
        $education->ename =$request->ename;
        $education->faculty =$request->faculty;
        $education->studyfild =$request->studyfild;
        $education->level =$request->level;
        $education->status =$request->status;
        $education->save();

        return redirect('/')->with('message', 'Save to db!');

    }

    public function show()
    {
        $data= DB::table('basic_data')->get();
        return view('/home',compact('data'));

    }
}
