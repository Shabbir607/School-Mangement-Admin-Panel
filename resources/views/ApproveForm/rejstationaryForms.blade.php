@extends('ApproveForm.app')
@section('title')
    rejstationaryForm
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
#rejstationaryForms {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#rejstationaryForms th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#rejstationaryForms td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#rejstationaryForms .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#rejstationaryForms .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#rejstationaryForms .actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#rejstationaryForms .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#rejstationaryForms tbody tr:nth-child(even) {
  background-color: #f9f9f9 !important;
}

</style>
@section('content')
<table id="rejstationaryForms">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date</th>

        <th>CompanyId</th>
        <th>ProductId</th>
        <th>Status</th>
        <th>Description</th>
        <th>SaleQty</th>

        <th>Approve 1</th>
        <th>Approve 2</th>
        <th>Approve 3</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
@foreach ($rejstationary as $user)
  
    <tr>
        <td>{{$user->id}}</td> 
        <td>{{$user->name}}</td>
        <td>{{$user->date}}</td>

        <td>{{ $user->companyID }}</td>
        <td>{{ $user->productId }}</td>
        <td>{{ $user->status }}</td>
        <td>{{ $user->description }}</td>
        <td>{{ $user->saleQty }}</td>

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
