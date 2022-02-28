@extends('layouts.app')

@section('content')
    <div>Preview</div>

    <button onclick="history.back()">Go Back</button>
    <div class="container">
        <div class=" profile_pic">
            <img class="image"  src="{{url('public/uploads/'.$data->image)}}"
                 style="width:100%;cursor:pointer" alt="Image" height="100" width="200"
            >
        </div>

        <div class="info">
            <h1>{{$data->name}} {{$data->surname}}</h1>
            <h3>{{$job->position}}</h3>

            <p class="addresses">{{$addresses->number}} {{$addresses->street}}, {{$addresses->city}},
                {{$addresses->index}},{{$addresses->country}}</p>
            <p>{{$data->phone}} {{$data->email}}</p>
        </div>
    </div>
    <div class="container">
        <div class="skill">Skilli</div>
        <div class="maininfo">
            <div>
                <h2>Profile</h2>
                <p>{{$data->aboutyou}}</p>
            </div>
            <div>
                <h3>Employment History</h3>
                <h6>{{$job->position}}, {{$job->title}}, {{$addresses->city}}</h6>
                <p>{{$job->workload}}</p>
                <p>Worked for :{{$job->los}}years</p>
            </div>
            <div>

                <h2>Education</h2>
                <h6>{{($education->faculty}}, {{$education->ename}}, {{$education->ecity}}</h6>
                <p>FROM {{($education->from}} to {{$education->to}}</p>

            </div>
        </div>
    </div>
@endsection


