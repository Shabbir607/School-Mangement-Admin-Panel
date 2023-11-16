@extends('ApproveForm.app')
@section('title')
    VisaDocument
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
#VisaDocument {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#VisaDocument th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#VisaDocument td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#VisaDocument .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#VisaDocument .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#VisaDocument.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#VisaDocument .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#VisaDocument tbody tr:nth-child(even) {
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

<table id="VisaDocument">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Visa</th>
        <th>Visa Expire</th>
        
        
       

    </tr>
    </thead>
    <tbody>
@foreach ($visaDocument as $user)
  
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->visa_number}}</td>
        <td>{{$user->expire}}</td>
        <td></td>

    </tr>
  
@endforeach  
</tbody>
   </table>
</section>

   
<!-- /.content -->
@endsection

