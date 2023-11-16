@extends('ApproveForm.app')
@section('title')
    setStationary
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
#sitem {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#sitem th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#sitem td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#sitem .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#sitem .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#sitem.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#sitem .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#sitem tbody tr:nth-child(even) {
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
    <form action="{{route('save_Setting_Stationary')}}" method="post" enctype="multipart/form-data">
      
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
      <div class="custom-file"> <label class="custom-file-label" for="chooseFile">Select file</label>
</th>

          
      </tr>
  </thead>
  <tbody>
    <tr>


    <th scope="row"><input type="file" name="file" class="custom-file-input" id="chooseFile"> 

     
    </tr>
   
    
   
  </tbody>
</table>


<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">  
      <label class="custom-code" for="code">Code</label></th>

           <th scope="col"> <label class="custom-product" for="thai">Thai Language</label></th>
      <th scope="col">  <label class="custom-english" for="english">English</label></th>

      </tr>
  </thead>
  <tbody>
    <tr>


    <th scope="row">     <input type="text" name="code" class="code" id="code"></th>
      <td>   <input type="text" name="thai" class="custom-thai" id="thai"></td>
      <td>  <input type="text" name="english" class="custom-english" id="english"></td>
    
      <td> <button type="submit" name="submit" class="btn btn-primary btn-block ">
            Submit
        </button> </td>

     
    </tr>
   
    
   
  </tbody>
</table>
</form>
</div>






<!---<div class="container mt-5">
    <form action="{{route('save_Setting_Stationary')}}" method="post" enctype="multipart/form-data">

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
            <input type="file" name="file" class="custom-file-input" id="chooseFile">
            <label class="custom-file-label" for="chooseFile">Select file</label>

            
             <input type="text" name="code" class="code" id="code">
            <label class="custom-code" for="code">Code</label>

            <input type="text" name="thai" class="custom-thai" id="thai">

            <label class="custom-product" for="thai">Thai Language</label>
            
            <input type="text" name="english" class="custom-english" id="english">
            <label class="custom-english" for="english">English</label>
        </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button>
    </form>
</div>--->
<table id="sitem">
    <thead>
    <tr>
        <th>ID</th>
        <th>Picture</th>
        <th>Code</th>
        <th>Thai language</th>
    
        <th>English</th>
        <th></th>
        
    </tr>
    </thead>
    <tbody>
@foreach ($setStationary as $user)
  
    <tr>
        <td>{{$user->id}}</td>
        <!--<td><img src="{{base_path().'/public/file/'.$user->picture}}" ></td> --->
        <td><img src="{{ asset('file/' . $user->picture) }}"width="100px" height="100px" ></td>
        <td>{{$user->code}}</td>
        <td>{{$user->thai}}</td>
        <td>{{$user->english}}</td>
        
        <td></td>

    </tr>
  
@endforeach  
</tbody>
   </table>
</section>

   
<!-- /.content -->
@endsection
