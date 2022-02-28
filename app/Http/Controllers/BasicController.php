<?php

namespace App\Http\Controllers;

use App\Models\Addresses;
use App\Models\Basic;
use App\Models\Education;
use App\Models\Job;
use App\Models\Skills;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasicController extends Controller
{
    protected $basic = [];
    protected $education = [];
    protected $job = [];
    protected $addresses = [];


    public function saveBasic(Request $request)
    {
        if ($this->validate($request, ['image' => 'image|mimes:png|max:2048',])) {

            $basic = new Basic();
            $basic->name = $request->name;
            $basic->surname = $request->surname;
            $basic->phone = $request->phone;
            $basic->email = $request->email;
            $basic->aboutyou = $request->aboutyou;

            $file = $request->file('image');
            $filename = $request->name . '.png';
            $file->move('public/uploads', $filename);
            $basic->image = $filename;
            $basic->created_at = Carbon::now();
            $basic->save();

            $education = new Education();
            $education->user_id = $basic->id;
            $education->ename = $request->ename;
            $education->from = $request->from;
            $education->to = $request->to;
            $education->ecity = $request->ecity;
            $education->faculty = $request->faculty;
            $education->studyfild = $request->studyfild;
            $education->level = $request->level;
            $education->status = $request->status;
            $education->created_at = Carbon::now();
            $education->save();

            $job = new Job();
            $job->user_id = $basic->id;
            $job->title = $request->title;
            $job->position = $request->position;
            $job->workload = $request->workload;
            $job->los = $request->los;
            $job->created_at = Carbon::now();
            $job->save();

            $addresses = new Addresses();
            $addresses->user_id = $basic->id;
            $addresses->country = $request->country;
            $addresses->index = $request->index;
            $addresses->city = $request->city;
            $addresses->street = $request->street;
            $addresses->number = $request->number;
            $addresses->created_at = Carbon::now();
            $addresses->save();

            $skills = new Skills();
            $skills->user_id = $basic->id;
            $skills->skill = $request->skill;
            $skills->level = $request->level;
            $skills->created_at = Carbon::now();
            $skills->save();

            return redirect('/')->with('message', 'Save to db!');
        }
    }

    public function show()
    {
        $data = DB::table('basic_data')->get();

        return view('/home', compact('data'));

    }
}
