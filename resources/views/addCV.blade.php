@extends('layouts.app')

@section('content')

    <div>Create your own CV</div>
    <p>Fill all input fields And just submit</p>
    <p></p>
    <div class="container">
        <form action="addCV" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="aboutyou">
                <h1>About You</h1>
                <div>
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div>
                    <label for="surname" class="form-label">Surname</label>
                    <input type="text" class="form-control" name="surname">
                </div>
                <div>
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" name="phone">
                </div>
                <div>
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div>
                    <label for="aboutyou" class="form-label">About you</label>
                    <textarea name="aboutyou"> </textarea>

                </div>
                <div>
                    <label for="image" class="form-label">Uploade profile pic</label>
                    <input type="file" name="image" required>
                </div>

            </div>

            <h1>Educational institutions</h1>

                <div>
                    <label for="ename" class="form-label">Educational institutions Name</label>
                    <input type="text" class="form-control" name="ename">
                </div>
                <div>
                    <label for="from" class="form-label">Year From </label>
                    <input type="number" name="from">
                </div>

                <div>
                    <label for="to" class="form-label">To </label>
                    <input type="number" name="to">
                </div>
                <div>
                    <label for="ecity" class="form-label">City </label>
                    <input type="text" class="form-control" name="ecity">
                </div>
                <div>
                    <label for="faculty" class="form-label">Faculty</label>
                    <input type="text" class="form-control" name="faculty">
                </div>
                <div>
                    <label for="studyfild" class="form-label">Field of study</label>
                    <input type="text" class="form-control" name="studyfild">
                </div>
                <div>
                    <label for="level" class="form-label">Level of education</label>
                    <input type="text" class="form-control" name="level">
                </div>
                <div>
                    <label for="status">Status:</label>

                    <select name="status">
                        <option value="completed">completed</option>
                        <option value="discontinued">discontinued</option>
                        <option value="studying">studying</option>

                    </select>
                </div>

            More Eduction: <span class="fa fa-plus add"></span>
            <div class="appending_div">
            </div>

            <h1>Job experience</h1>
                <div>
                    <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div>
                    <label for="position" class="form-label">Position</label>
                    <input type="text" class="form-control" name="position">
                </div>
                <div>
                    <label for="workload" class="form-label">Workload</label>
                    <input type="text" class="form-control" name="workload">
                </div>
                <div>
                    <label for="los" class="form-label">Length 0f Service</label>
                    <input type="text" class="form-control" name="los">
                </div>


            Add more jobs: <span class="fa fa-plus addjob"></span>
            <div class="job_div">
            </div>

            <h1>Addresses</h1>
                <div>
                    <label for="country" class="form-label">country</label>
                    <input type="text" class="form-control" name="country">
                </div>
                <div>
                    <label for="index" class="form-label">Index</label>
                    <input type="text" class="form-control" name="index">
                </div>
                <div>
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" name="city">
                </div>
                <div>
                    <label for="street" class="form-label">Street</label>
                    <input type="text" class="form-control" name="street">
                </div>
                <div>
                    <label for="number" class="form-label">Number</label>
                    <input type="text" class="form-control" name="number">
                </div>

            Add more addresses: <span class="fa fa-plus addaddreses"></span>
            <div class="addresses_div">

            <div>
                <h1>Skills</h1>
                <div>
                    <label for="skill" class="form-label">Skill</label>
                    <input type="text" class="form-control" name="skill">
                </div>
                <div>
                    <label for="level" class="form-label">Level</label>
                    <input type="number" class="form-control" name="level">
                </div>
                Add more skill: <span class="fa fa-plus skills"></span>
                <div class="skill_div">

                </div>
            </div><br>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <button onclick="history.back()">Go Back</button>
            <script>
                $(document).ready(function () {
                    let i = 1;
                    $('.add').on('click', function () {
                        let field = '<br> ' + i + ' <div>Name:  <input type="text" class="form-control" name="ename">  ' +
                            'FROM: <input type="date"  name="from">' +
                            'TO: <input type="date"  name="to">' +
                            'Faculty :  <input type="text" class="form-control" name="faculty">' +
                            'Field of study: <input type="text" class="form-control" name="studyfild">' +
                            'Level of education : <input type="text" class="form-control" name="level">' +
                            'Status: <input type="text" class="form-control" name="status">';
                        $('.appending_div').append(field);
                        i = i + 1;
                    })
                })
                $(document).ready(function () {
                    let i = 1;
                    $('.addjob').on('click', function () {
                        let field = '<br> ' + i + ' <div>Title:  <input type="text" class="form-control" name="title">  ' +
                            'Position :  <input type="text" class="form-control" name="position">' +
                            'Workload: <input type="text" class="form-control" name="workload">' +
                            'los : <input type="text" class="form-control" name="los">'
                        ;
                        $('.job_div').append(field);
                        i = i + 1;
                    })
                })
                $(document).ready(function () {
                    let i = 1;
                    $('.addaddresses').on('click', function () {
                        let field = '<br> ' + i + ' <div>Country:  <input type="text" class="form-control" name="country">  ' +
                            'Index :  <input type="text" class="form-control" name="index">' +
                            'City: <input type="text" class="form-control" name="city">' +
                            'Street : <input type="text" class="form-control" name="street">' +
                            'Number : <input type="text" class="form-control" name="number">'
                        ;
                        $('.addresses_div').append(field);
                        i = i + 1;
                    })
                })
                $(document).ready(function () {
                    let i = 1;
                    $('.skills').on('click', function () {
                        let field = '<br> ' + i + ' <div>Skill:  <input type="text" class="form-control" name="skill">  ' +
                            'Level of skill :   <input type="number" class="form-control" name="level">'

                        ;
                        $('.skill_div').append(field);
                        i = i + 1;
                    })
                })
            </script>
@endsection

