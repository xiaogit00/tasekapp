<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add New User</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>
  <body>
    {{--@foreach ($persons as $person)--}}
    <div class="">
      <h1>Person Count: {{$persons->count()}}</h1>
    </div>
    <form class="" action="" method="post">
      @csrf
      <label for="name">Name: </label>
      <input type="text" name="name" value="">
      <label for="dob">dob: </label>
      <input type="text" name="dob" value="">
      <label for="familyID">familyID: </label>
      <input type="text" name="familyID" value="">
      <label for="gender">gender: </label>
      <input type="text" name="gender" value="">
      <label for="NRIC">NRIC: </label>
      <input type="text" name="nric" value="">
      <button type="submit" name="button">Add User</button>
    </form>
    <div>
      <table class="table">
        <thead class="thead-dark">
          <th>Name</th>
          <th>DOB</th>
          <th>familyID</th>
          <th>gender</th>
          <th>NRIC</th>
        </thead>
        <tbody>
          @foreach ($persons as $person)
          <tr>
            <td>{{$person->name}}</td>
            <td>{{$person->dob}}</td>
            <td>{{$person->familyID}}</td>
            <td>{{$person->gender}}</td>
            <td>{{$person->nric}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>
    {{--endforeach--}}
  </body>
</html>
