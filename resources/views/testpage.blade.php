@extends('layouts.master')
@section('content')

  <div class="main-container">
    Random user api data
  </div>

  <h1>Authors</h1>
  <ul id="authors"></ul>

  <script>

    fetch('https://randomuser.me/api/?results=10')
      .then((resp) => resp.json()) // Transform the data into json
      .then(function(data) {
        console.log(data)
        data["results"].forEach(myFunction);

        function myFunction(item, index) {
          document.getElementById("authors").innerHTML += index + ":" + item.name["first"] + "<br>";
        }

        })
      .catch(function(error) {
        console.log(error)
      });

  </script>

  <div>
    @foreach ($allJobs as $job)
        <ul>
            <li>{{ $job->jobType }}</li>
            <li class="inner-table">{{ $job->jobTitle }}</li>
            <li class="inner-table">{{ $job->jobDepartment }}</li>
        </ul>
    @endforeach
  </div>

@stop
