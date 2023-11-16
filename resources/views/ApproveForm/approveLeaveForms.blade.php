@extends('ApproveForm.app')
@section('title')
    approveapproveLeaveForm
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

      /* Style for the content wrapper with !important */
  .content-wrapper {
  padding: 20px !important;
}

/* Style for the table with !important */
#approveLeaveForm {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#approveLeaveForm th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#approveLeaveForm td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#approveLeaveForm .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#approveLeaveForm .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#approveLeaveForm .actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#approveLeaveForm .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#approveLeaveForm tbody tr:nth-child(even) {
  background-color: #f9f9f9 !important;
}

</style>
@section('content')
<table id="approveLeaveForm">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date</th>
        <th>Type</th>
        <th>Date</th>
        <th>Toatl</th>
    </tr>
    </thead>
    
    <tbody>
@foreach ($approveleave as $user)
  
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->type}}</td>
        <td>{{$user->start_date}}</td>
        <td>{{$user->end_date}}</td>
        <td>{{$user->toatl}}</td>


    </tr>
  
@endforeach  
</tbody>
   </table>
</section>

   
<!-- /.content -->
@endsection
