@extends('ApproveForm.app')
@section('title')
    homeCctv
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
#setCctv {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#setCctv th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#setCctv td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#setCctv .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#setCctv .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#setCctv.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#setCctv .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#setCctv tbody tr:nth-child(even) {
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
    <form action="{{route('save_Setting_Cctv')}}" method="post" enctype="multipart/form-data">
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


    <th scope="row"> <input type="file" name="file" class="custom-file-input" id="chooseFile">

     
    </tr>
   
    
   
  </tbody>
</table>


<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">  
      <label class="custom-code" for="cctv">CCTV</label></th>
      <th scope="col">  
      <label class="custom-category" for="channel">Channel</label></th>
      <th scope="col"> </th>

          
      </tr>
  </thead>
  <tbody>
    <tr>


    <th scope="row">   <input type="text" name="cctv" class="code" id="code"></th>


    <td>  <select name="channel" id="category">
              
              <option >1</option>
              <option >2</option>
              <option >3</option>
              <option >4</option>
              <option >5</option>
              <option >6</option>
              <option >7</option>
              <option >8</option>
              <option >9</option>
        </select></td>
    
        </div>
        </div>

        <td> <button type="submit" name="submit" class="btn btn-primary btn-block ">
            Submit
        </button></td>
</tr>
  </tbody>
</table>
</form>
</div>



<!---<div class="container mt-5">
    <form action="{{route('save_Setting_Cctv')}}" method="post" enctype="multipart/form-data">
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
            <input type="file" name="file" class="custom-file-input" id="chooseFile">
            <label class="custom-file-label" for="chooseFile">Select file</label>

             <input type="text" name="cctv" class="code" id="code">
            <label class="custom-code" for="cctv">CCTV</label>

            <select name="channel" id="category">
              
                  <option >1</option>
                  <option >2</option>
                  <option >3</option>
                  <option >4</option>
                  <option >5</option>
                  <option >6</option>
                  <option >7</option>
                  <option >8</option>
                  <option >9</option>
            </select>

            <label class="custom-category" for="channel">Channel</label>


             
        </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button>
    </form>
</div>--->
<table id="setCctv">
    <thead>
    <tr>
        <th>ID</th>
        <th>Picture</th>
        <th>CCTV</th>
        <th>Channel</th>
    </tr>
    </thead>
    <tbody>
@foreach ($setCctv as $user)
  
    <tr>
        <td>{{$user->id}}</td>
        <td><img src="{{base_path().'/public/file/'.$user->picture}}" ></td>
        <td>{{$user->cctv}}</td>
        <td>{{$user->channel}}</td>
        <td></td>

    </tr>
  
@endforeach  
</tbody>
   </table>
</section>

   
<!-- /.content -->
@endsection
