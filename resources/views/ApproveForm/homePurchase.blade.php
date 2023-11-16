@extends('ApproveForm.app')
@section('title')
    homePurchase
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
#homePurchase {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#homePurchase th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#homePurchase td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#homePurchase .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#homePurchase .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#homePurchase.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#homePurchase .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#homePurchase tbody tr:nth-child(even) {
  background-color: #f9f9f9 !important;
}

input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    width: 50%!important;
}


</style>

<div class="container mt-5">
    <form action="{{route('savehome_Purchase')}}" method="post" enctype="multipart/form-data">
      
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
      <table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">  
        <div class="custom-file">
            <input type="hidden" value="{{$user_id}}" name="user" class="custom-quser" id="user">
            <input type="hidden" value="{{$name}}" name="teacher" class="custom-teacher" id="teacher">
           <label class="custom-date" for="name_th">Date</label></th>

           <th scope="col">  <label class="custom-qty" for="qty">Qty</label> </th>
      <th scope="col">  <label class="custom-qty" for="qty">Qty/Price</label></th>
      <th scope="col">  <label class="custom-order" for="order">Order</label> </th>
      <th scope="col">  <label class="custom-discription" for="discription">Discription</label> </th>
      </tr>
  </thead>
  <tbody>
    <tr>


    <th scope="row"> <input type="date" name="date" class="custom-name_th" id="date"></th>
      <td> <input type="text" name="qty" class="custom-qty" id="qty"></td>
      <td>  <input type="text" name="qty_price" class="custom-qty" id="qty"></td>
      <td>  <input type="text" name="order" class="custom-order" id="order"> </td>
      <td> <input type="text" name="description" class="custom-discription" id="discription"> <button type="submit" name="submit" class="btn btn-primary btn-block mt-4 ">
            Submit
        </button> </td>

     
    </tr>
   
    
   
  </tbody>
</table>
</div>
</form>



<!----<div class="container mt-5">
    <form action="{{route('savehome_Purchase')}}" method="post" enctype="multipart/form-data">
      <h3 class="text-center mb-5">Upload File in Laravel</h3>
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
            <input type="hidden" value="{{$name}}" name="teacher" class="custom-teacher" id="teacher">
           <label class="custom-date" for="name_th">Date</label>
            <input type="date" name="date" class="custom-name_th" id="date">
            
             <label class="custom-qty" for="qty">Qty</label> 
             <input type="text" name="qty" class="custom-qty" id="qty">
            <label class="custom-qty" for="qty">Qty/Price</label>
             <input type="text" name="qty_price" class="custom-qty" id="qty">
            
            <label class="custom-order" for="order">Order</label> 
             <input type="text" name="order" class="custom-order" id="order">
            <label class="custom-discription" for="discription">Discription</label>
            <input type="text" name="description" class="custom-discription" id="discription">
            

        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button>
    </form>
</div>
--->

<table id="homePurchase">
  <thead>
    <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Discription</th>
        <th>Status</th>
    </tr>
</thead>
    <tbody>
@foreach ($homePurchase as $user)
  
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->date}}</td>
        <td>{{$user->description}}</td>
        <td>{{$user->status}}</td>
    </tr>
  
@endforeach  
</tbody>
   </table>

</section>

   
<!-- /.content -->
@endsection
