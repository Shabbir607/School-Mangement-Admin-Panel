@extends('ApproveForm.app')
@section('title')
    sBillimport
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
#sBillimport {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#sBillimport th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#sBillimport td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#sBillimport .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#sBillimport .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#sBillimport.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#sBillimport .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#sBillimport tbody tr:nth-child(even) {
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

<table id="sBillimport">
    <thead>
    <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Supplier Name</th>
        <th>Invoice No</th>
        <th>Status</th>
    </tr>
    </thead>
    
    <tbody>
@foreach ($sBillimport as $user)
  
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->date}}</td>
        <td>{{$user->supplier_name}}</td>
        <td>{{$user->invoice}}</td>
        <td>{{$user->status}}</td>

        

    </tr>
  
@endforeach  
</tbody>
   </table>
</section>

   
<!-- /.content -->
@endsection