@extends('ApproveForm.app')
@section('title')
    proUnits
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
#proUnits {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#proUnits th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#proUnits td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#proUnits .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#proUnits .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#proUnits.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#proUnits .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#proUnits tbody tr:nth-child(even) {
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

<div class="container mt-5">
    <form action="{{route('saveprounit')}}" method="post">
      
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
      <th scope="col"><div class="custom-file">
      <label class="custom-name_th" for="name_th">Brand Name Th</label></th>
    
      <th scope="col"><label class="custom-name_en" for="EngName">Brand Name En</label></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">  <input type="text" name="name_thi" class="custom-name_th" id="name_th"></th>
      <td><input type="text" name="name_engl" class="custom-name_en" id="name_en"></td>
      <td><button type="submit" name="submit" class="btn btn-primary btn-block">
            Submit
        </button></td>

    </tr>
   
    
   
  </tbody>
</table>
</form>
</div>

<!---<div class="container mt-5">
    <form action="{{route('saveprounit')}}" method="post">
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
            
            <input type="text" name="name_thi" class="custom-name_th" id="name_th">
            <label class="custom-name_th" for="name_th">Brand Name Th</label>
            <input type="text" name="name_engl" class="custom-name_en" id="name_en">
            <label class="custom-name_en" for="EngName">Brand Name En</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button>
    </form>
</div>-->

<table id="proUnits">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name Thi</th>
        <th>Name Engl</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
@foreach ($prounit as $user)
  
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name_thi}}</td>
        <td>{{$user->name_engl}}</td>
        
        <td></td>

    </tr>
  
@endforeach  
</tbody>
   </table>
</section>

   
<!-- /.content -->
@endsection

