@extends('layouts.main')

@section('content')
<!--  
first row
--> 
<div class = "container-lg" style ="margi,n: 0 auto">
    <div class ="row mt-5">
<!--  first column--> 

        <div class ="col-lg-4 col-md-4 col-sm-12 text-center mb-3 ">
            <div class = "card", style="width: 18rem">
            @foreach($departments as $department)
                <img src ="{{$department->image}}" style ="width:200px"/>
            <div class ="cad-body">
                <div class ="card-title">{{$department->d_name}}</div>
                <div class = "card-text">{{$department->description}}</div>
                @endforeach
            </div>
            </div>
        </div>



@endsection()