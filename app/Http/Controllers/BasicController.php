<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Education;
use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasicController extends Controller
{
    protected $basic=[];
    protected $education=[];
    protected $job=[];
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
        $education->created_at = Carbon::now();
        $education->save();

        $job = new Job();
        $job->user_id =$basic->id;
        $job->title =$request->title;
        $job->position =$request->position;
        $job->workload =$request->workload;
        $job->los=$request->los;
        $job->created_at = Carbon::now();
        $job->save();

        return redirect('/')->with('message', 'Save to db!');

    }

    public function show()
    {
        $data= DB::table('basic_data')->get();
        return view('/home',compact('data'));

    }
}
