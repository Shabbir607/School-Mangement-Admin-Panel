@extends('ApproveForm.app')
@section('title')
    rejpurchaseForm
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
#rejpurchaseForm {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#rejpurchaseForm th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#rejpurchaseForm td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#rejpurchaseForm .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#rejpurchaseForm .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#rejpurchaseForm .actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#rejpurchaseForm .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#rejpurchaseForm tbody tr:nth-child(even) {
  background-color: #f9f9f9 !important;
}

</style>
@section('content')
<table id="rejpurchaseForm">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date</th>
        <th>Approve 1</th>
        <th>Approve 2</th>
        <th>Approve 3</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
@foreach ($rejpurchase as $user)
  
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->date}}</td>
        <td>{{$user->created_at}}</td>
        <td>{{$user->approve_1}}</td>
        <td>{{$user->approve_2}}</td>
        <td>{{$user->approve_3}}</td>
        <td></td>

    </tr>
  
@endforeach  
</tbody>
   </table>
</section>

   
<!-- /.content -->
@endsection
