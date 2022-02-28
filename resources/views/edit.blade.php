@extends('layouts.app')

@section('content')
    <div>Edit page</div>

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
            <textarea  name="aboutyou" > {{$data->aboutyou}}</textarea> <br> <br>

            <a class="pop" ONCLICK="Educational()">Educational institutions</a> <br> <br>
            <div ID="institutions" STYLE="display:none">
              <h1>Educational institutions</h1>
            Educational institutions Title
                @if(empty($education) )
            <input type="text" name="ename" value=" {{!empty($education->ename)}}" > <br> <br>
            Year from
            <input class=" text" type="text" name="from" value=" {{!empty($education->from)}}" > <br> <br>

            Year TO
            <input type="text" name="to" value=" {{!empty($education->to)}}" > <br> <br>
           City
            <input type="text" name="ecity" value=" {{!empty($education->ecity)}}" > <br> <br>
            Faculty
            <input type="text" name="faculty" value=" {{!empty($education->faculty)}}" > <br> <br>
            Study Field
            <input type="text" name="studyfild" value=" {{!empty($education->studyfild)}}" > <br> <br>
            Level
            <input type="text" name="level" value=" {{!empty($education->level)}}" > <br> <br>
            Status
            <input type="text" name="status" value=" {{!empty($education->status)}}" > <br> <br>
                @else
                    <input type="text" name="ename" value=" {{$education->ename}}" > <br> <br>
                    Year from
                    <input class=" text" type="text" name="from" value=" {{$education->from}}" > <br> <br>

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
                    @endif
            </div>

            <a class="pop" ONCLICK="Job()">Job Exp</a> <br> <br>
            <div ID="job" STYLE="display:none">
            <h1>Job Exp</h1>
                @if(empty($job))
            Title
            <input type="text" name="title" value=" {{!empty($job->title)}}" > <br> <br>
           Position
            <input type="text" name="position" value=" {{!empty($job->position)}}" > <br> <br>
           WorkLoad
            <input type="text" name="workload" value=" {{!empty($job->workload)}}" > <br> <br>

           Length of Service
            <input type="text" name="los" value=" {{!empty($job->los)}}" > <br> <br>
                @else
                    Title
                    <input type="text" name="title" value=" {{$job->title}}" > <br> <br>
                    Position
                    <input type="text" name="position" value=" {{$job->position}}" > <br> <br>
                    WorkLoad
                    <input type="text" name="workload" value=" {{$job->workload}}" > <br> <br>

                    Length of Service
                    <input type="text" name="los" value=" {{$job->los}}" > <br> <br>
                    @endif
            </div>
            <a class="pop" ONCLICK="Addresses()">Addresses</a> <br> <br>
            <div ID="addresses" STYLE="display:none">
                <h1>Addresses</h1>
                @if(empty($addresses) )
            Country
            <input type="text" name="country" value=" {{!empty($addresses->country)}}" > <br> <br>
            Index
            <input type="text" name="index" value=" {{!empty($addresses->index)}}" > <br> <br>
            City
            <input type="text" name="city" value=" {{!empty($addresses->city)}}" > <br> <br>
            Street
            <input type="text" name="street" value=" {{!empty($addresses->street)}}" > <br> <br>
            Number
            <input type="text" name="number" value=" {{!empty($addresses->number)}}" > <br> <br>
                @else
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
                    @endif
            </div>
            <button type="submit">Update</button>
           <a href="/preview/{{$data->id}}">Preview</a>
            <button onclick="history.back()">Go Back</button>
        </div>

    </form>

@endsection

<script>
    function Educational() {
        let x = document.getElementById('institutions');
        if (x.style.display == 'none') {
            x.style.display = 'block';
        } else {
            x.style.display = 'none';
        }
    }
    function Job() {
        let x = document.getElementById('job');
        if (x.style.display == 'none') {
            x.style.display = 'block';
        } else {
            x.style.display = 'none';
        }
    }
    function Addresses() {
        let x = document.getElementById('addresses');
        if (x.style.display == 'none') {
            x.style.display = 'block';
        } else {
            x.style.display = 'none';
        }
    }
</script>

