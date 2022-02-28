<?php

namespace App\Http\Controllers;

use App\Models\Addresses;
use App\Models\Basic;
use App\Models\Education;
use App\Models\Job;
use Carbon\Carbon;
use Faker\Provider\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditCvController extends Controller
{
    public function update(Request $request)
    {
        $basic = Basic::find($request->id);
        $basic->name = $request->input('name');
        $basic->surname = $request->input('surname');
        $basic->phone = $request->input('phone');
        $basic->email = $request->input('email');
        $basic->aboutyou = $request->input('aboutyou');
        $basic->updated_at = Carbon::now();
        $basic->save();

        if (!isset($education)) {
            $education = new Education();
            $education->user_id =$basic->id;
            $education->save();
        }
        $education = Education::find($request->id);
        $education->user_id =$basic->id;
        $education->ename =$request->input('ename');
       $education->from =$request->input('from');
        $education->to =$request->input('to');
        $education->ecity =$request->input('ecity');
        $education->faculty =$request->input('faculty');
        $education->studyfild =$request->input('studyfild');
        $education->level =$request->input('level');
        $education->status =$request->input('status');
        $education->created_at = Carbon::now();
        $education->save();

        if (!isset($job)) {
            $job = new Job();
            $job->user_id =$basic->id;
            $job->save();
        }
        $job=Job::find($request->id);;
        $job->user_id =$basic->id;
        $job->title=$request->input('title');
        $job->position=$request->input('position');
        $job->workload=$request->input('workload');
        $job->los=$request->input('los');
        $job->save();

        if (!isset($addresses)) {
            $addresses = new Addresses();
            $addresses->user_id =$basic->id;
            $addresses->save();
        }
        $addresses=Addresses::find($request->id);
        $addresses->user_id =$basic->id;
        $addresses->country=$request->input('country');
        $addresses->index=$request->input('index');
        $addresses->city=$request->input('city');
        $addresses->street=$request->input('street');
        $addresses->number=$request->input('number');
        $addresses->save();

        return redirect('/')->with('message', 'Update success!');

    }

    public function showEdit($id)
    {
        $data = Basic::find($id);
        $education = Education::find($id);
        $job = Job::find($id);
        $addresses =Addresses::find($id);
        return view('edit', compact('data','education','job','addresses'));

    }
    public function preview($id)
    {
        $data = Basic::find($id);
        $education = Education::find($id);
        $job = Job::find($id);
        $addresses =Addresses::find($id);
        return view('preview', compact('data','education','job','addresses'));

    }
    public function delete($id)
    {
        $data = Basic::find($id);

        $data->delete();

        return redirect('/')->with('message', 'Success Deleted!');
    }
}
