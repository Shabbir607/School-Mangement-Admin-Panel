@extends('ApproveForm.app')
@section('title')
    EmployeeGroups
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
#sBrand {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#sBrand th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#sBrand td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#sBrand .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#sBrand .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#sBrand.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#ssBrand .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#sBrand tbody tr:nth-child(even) {
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

<div class="container mt-5">
    <form action="{{route('savegroup')}}" method="post" enctype="multipart/form-data">
      
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
      <th scope="col"><div class="custom-file"><label class="custom-language_thi" for="language_thi">Language Thi</label></th>
      <th scope="col"><label class="custom-language_engli" for="language_engli">Language Engl</label></th>
      <th scope="col"></th>

          
      </tr>
  </thead>
  <tbody>
    <tr>


    <th scope="row"><input type="text" name="language_thi" class="custom-name_th" id="language_thi"></th>
    <td><input type="text" name="language_engli" class="custom-language_engli" id="language_engli"></td>
    <td><button type="submit" name="submit" class="btn btn-primary btn-block">
            Submit
        </button></td>
        </tr>
    
   
  </tbody>
</table>
</form>
</div>

<!----<div class="container mt-5">
    <form action="{{route('savegroup')}}" method="post" enctype="multipart/form-data">
      
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
            
           
            <input type="text" name="language_thi" class="custom-name_th" id="language_thi">
            <label class="custom-language_thi" for="language_thi">Language Thi</label>
            <input type="text" name="language_engli" class="custom-language_engli" id="language_engli">
            <label class="custom-language_engli" for="language_engli">Language Engl</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button>
    </form>
</div>--->
<table id="sBrand">
    <thead>
    <tr>
        <th>ID</th>
        <th>Language Thi</th>
        <th>Language Engl</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>

@foreach ($groups as $user)
  
    <tr>
        <td>{{$user->id}}</td>
       
        <td>{{$user->language_thi}}</td>
        <td>{{$user->language_engli}}</td>
        
        <td></td>

    </tr>
  
@endforeach  
</tbody>
   </table>
</section>

   
<!-- /.content -->
@endsection
