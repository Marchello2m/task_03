@extends('layouts.app')

@section('content')
 <div>Maine page with list</div>
 <p></p>
 <form action="home" method="GET">

     <table class="table text-gray-400 border-separate space-y-6 text-sm">
         <thead class="bg-blue-500 ">
         <tr>
             <th class="p-3">id</th>
             <th class="p-3 text-left">Name</th>
             <th class="p-3 text-left">Surname</th>
             <th class="p-3">Phone</th>
             <th class="p-3">Email</th>
             <th class="p-3">School name</th>
             <th class="p-3">Faculty</th>
         </tr>
         </thead>

         <tbody>
 @foreach($data as $item)
     <tr class="bg-blue-200 lg:text-black">
         <td class="p-3">{{$item->id}}</td>
         <td class="p-3 ">{{$item->name}}</td>
         <td class="p-3">{{$item->surname}}</td>
         <td class="p-3 ">{{$item->phone}}</td>
         <td class="p-3">{{$item->email}}</td>

         @foreach($education as $item)

             <td class="p-3">{{$item->ename}}</td>
             <td class="p-3">{{$item->faculty}}</td>

         @endforeach
     </tr>
         @endforeach

 </table>
     </form>
@endsection



