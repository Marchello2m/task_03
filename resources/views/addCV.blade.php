@extends('layouts.app')

@section('content')

    <div class="container">
   <form  action="addCV" method="POST">
       @csrf
       <h1>About You</h1>
       <div class="col-md-6">
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

       </div>
       <h1>Educational institutions</h1>
       <div class="col-md-6">
           <div>
               <label for="ename" class="form-label">Name</label>
               <input type="text" class="form-control" name="ename">
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

               <select  name="status">
                   <option value="completed">completed</option>
                   <option value="discontinued">discontinued</option>
                   <option value="studying">studying</option>

               </select>
           </div>
       </div>

       More Eduction: <span class="fa fa-plus add"></span>
       <div class="appending_div">
           </div>

       <h1>Job experience</h1>
       <div class="col-md-6">
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

       </div>
       Add more jobs: <span class="fa fa-plus addjob"></span>
       <div class="job_div">
       </div>



       <div class="col-12">
           <button type="submit" class="btn btn-primary">Submit</button>
       </div>

    <script>
        $(document).ready(function() {
            let i = 1;
            $('.add').on('click', function() {
                let field = '<br> '+i+' <div>Name:  <input type="text" class="form-control" name="ename">  ' +
                    'Faculty :  <input type="text" class="form-control" name="faculty">'+
                    'Field of study: <input type="text" class="form-control" name="studyfild">' +
                    'Level of education : <input type="text" class="form-control" name="level">' +
                'Status: <input type="text" class="form-control" name="status">';
                $('.appending_div').append(field);
                i = i+1;
            })
        })
        $(document).ready(function() {
            let i = 1;
            $('.addjob').on('click', function() {
                let field = '<br> '+i+' <div>Title:  <input type="text" class="form-control" name="title">  ' +
                    'Position :  <input type="text" class="form-control" name="position">'+
                    'Workload: <input type="text" class="form-control" name="workload">' +
                    'los : <input type="text" class="form-control" name="los">'
                    ;
                $('.job_div').append(field);
                i = i+1;
            })
        })
    </script>
@endsection



