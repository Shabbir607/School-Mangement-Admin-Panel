@extends('ApproveForm.app')
@section('title')
    StuInfoAlumni
@endsection
@section('content')


<!-- Main content -->
<section class="content">
<style>

    table{
        border-collapse: collapse;
        width: 100%;
        border: 1px solid black;
    }
    th , td {
        border: 1px solid black;
        text-align: center;
        padding: 8px;
    }
    th{
        background-color: #f2f2f2;
    }
    tr:nth-child(odd){
        background-color: #f2f2f2;
    }
    .container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

          /* Style for the content wrapper with !important */
          .content-wrapper {
  padding: 20px !important;
}

/* Style for the table with !important */
#StuInfoAlumni {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#StuInfoAlumni th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#StuInfoAlumni td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#StuInfoAlumni .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#StuInfoAlumni .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#StuInfoAlumni.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#StuInfoAlumni .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#StuInfoAlumni tbody tr:nth-child(even) {
  background-color: #f9f9f9 !important;
}

input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    width: 100%!important;
}

</style>
@section('content')
<table id="StuInfoAlumni">
    <thead>
    <tr>
       <th>ID</th>
        <th>Code</th>
        <th>Password</th>
        <th>FirstName</th>
        <th>MiddleName</th>
        <th>LastName</th>
        <th>ClassRoom</th>
        <th>Action</th>
        
    </tr>
    </thead>
    <tbody>

@foreach ($stuInfoAlumni as $user)
  
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->code}}</td>
        <td>{{$user->password}}</td>
        <td>{{$user->firstname}}</td>
        <td>{{$user->middlename}}</td>
        <td>{{$user->lastname}}</td>
        <td>{{$user->classroom}}</td>
        <td>{{$user->status}}</td>

    </tr>
  
@endforeach  
</tbody>
   </table>
</section>

   
<!-- /.content -->
@endsection
