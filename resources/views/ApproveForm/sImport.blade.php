@extends('ApproveForm.app')
@section('title')
    sBillImport
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


    .content-wrapper {
        background-color: #f9f9f9;
        padding: 20px;
    }

    .container {
        max-width: 800px;
        margin: auto;
    }

    .custom-file,
    .custom-quser,
    .custom-date,
    .custom-code,
    .custom-qty,
    .custom-price,
    .custom-tax,
    .custom-supplier,
    .custom-invoice {
        width: 100%;
        margin-bottom: 10px;
    }

    .custom-file-label {
        overflow: hidden;
    }

    .btn-primary {
        background-color: #f30d45;
        border-color: #f30d45;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

  

         /* Style for the content wrapper with !important */
         .content-wrapper {
  padding: 20px !important;
}

/* Style for the table with !important */
#sImport {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#sImport th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#sImport td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#sImport .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#sImport .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#sImport.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#sImport .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#sImport tbody tr:nth-child(even) {
  background-color: #f9f9f9 !important;
}

input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    width: 100%!important;
    padding : 10px;
}

label {
  line-height: 3em;
}

</style>
@section('content')

<div class="container mt-5">
    <form action="{{route('saveimport')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
      @endif
      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
        <div class="custom-file">
            <input type="hidden" value="{{$user_id}}" name="user" class="custom-quser" id="user">
           
            <input type="date" name="date" class="custom-name_th" id="date">
            <label class="custom-date" for="name_th">Date</label>

             <select name="code" id="code">
              @foreach ($products as $product)
                  <option value="{{$product->code}}">{{$product->code}}</option>
                  
                @endforeach
            </select>
            <label class="custom-code" for="code">Code</label>

             <input type="text" name="qty" class="custom-qty" id="qty">
            <label class="custom-qty" for="qty">Qty</label>

            <input type="number" name="price" class="custom-price" id="price">
            <label class="custom-price" for="price">Price</label>

           <input type="text" name="tax" class="custom-tax" id="tax">
            <label class="custom-tax" for="tax">Tax</label>
              <select name="brand" id="brand">
              @foreach ($sbrand as $brand)
                  <option value="{{$brand->id}}">{{$brand->english}}</option>
                  
                @endforeach
            </select>
            <label class="custom-supplier" for="supplier">Supplier Name</label>
            <input type="text" name="invoice" class="custom-invoice" id="invoice">
            <label class="custom-invoice" for="invoice">Invoice</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button>
    </form>
</div>
<table id="sImport">
  <thead>
    <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Code</th>
        <th>Qty</th>
        <th>Supplier Name</th>
        <th>Invoice</th>
        <th>Actions</th>
    </tr>
</thead>
    <tbody>
@foreach ($sImport as $user)
  
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->date}}</td>
        <td>{{$user->code}}</td>
        <td>{{$user->qty}}</td>
        <td>{{$user->supplier}}</td>
        <td>{{$user->invoice}}</td>
         
        
        <td></td>

    </tr>
  
@endforeach  
</tbody>
   </table>
</section>

   
<!-- /.content -->
@endsection
