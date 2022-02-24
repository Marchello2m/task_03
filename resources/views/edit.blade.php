@extends('layouts.app')

@section('content')
    <div>Edit page</div>
    <button onclick="history.back()">Go Back</button>
    <form action="" method="POST" class="text-center">
        @csrf


        <h3>CV id-{{$data->id}}</h3>
        <h1>About you</h1>
        <div class="pt-5">
            name
            <input type="text" name="name" value=" {{$data->name}}" required> <br> <br>
            surname
            <input type="text" name="surname" value="{{$data->surname}}" required> <br> <br>
            phone
            <input type="text" name="phone" value="{{$data->phone}}" required> <br> <br>
            email
            <input type="text" name="email" value=" {{$data->email}}" required> <br> <br>
            about you
            <textarea  name="aboutyou" rows="4" cols="50"> {{$data->aboutyou}}</textarea>
            <h1>Educational institutions</h1>
            Educational institutions Title
            <input type="text" name="ename" value=" {{$education->ename}}" > <br> <br>
            Year from
            <input type="text" name="from" value=" {{$education->from}}" > <br> <br>

            Year TO
            <input type="text" name="to" value=" {{$education->to}}" > <br> <br>
           City
            <input type="text" name="ecity" value=" {{$education->ecity}}" > <br> <br>
            Faculty
            <input type="text" name="faculty" value=" {{$education->faculty}}" > <br> <br>
            Study Field
            <input type="text" name="studyfild" value=" {{$education->studyfild}}" > <br> <br>
            Level
            <input type="text" name="level" value=" {{$education->level}}" > <br> <br>
            Status
            <input type="text" name="status" value=" {{$education->status}}" > <br> <br>

            <h1>Job Exp</h1>
            Title
            <input type="text" name="title" value=" {{$job->title}}" > <br> <br>
           Position
            <input type="text" name="position" value=" {{$job->position}}" > <br> <br>
           WorkLoad
            <input type="text" name="workload" value=" {{$job->workload}}" > <br> <br>

           Length of Service
            <input type="text" name="los" value=" {{$job->los}}" > <br> <br>

            <h1>Addresses</h1>
            Country
            <input type="text" name="country" value=" {{$addresses->country}}" > <br> <br>
            Index
            <input type="text" name="index" value=" {{$addresses->index}}" > <br> <br>
            City
            <input type="text" name="city" value=" {{$addresses->city}}" > <br> <br>
            Street
            <input type="text" name="street" value=" {{$addresses->street}}" > <br> <br>
            Number
            <input type="text" name="number" value=" {{$addresses->number}}" > <br> <br>
            <button type="submit">Update</button>
           <a href="/preview/{{$data->id}}">Preview</a>
            <button onclick="history.back()">Go Back</button>
        </div>

    </form>
@endsection



