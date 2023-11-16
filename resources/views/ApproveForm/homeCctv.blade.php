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
#homeCctv {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#homeCctv th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#homeCctv td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#homeCctv .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#homeCctv .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#homeCctv.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#homeCctv .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#homeCctv tbody tr:nth-child(even) {
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
    <form action="{{route('savehome_cctv')}}" method="post" enctype="multipart/form-data">
     
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
          <label class="custom-file-label" for="chooseFile">Select file</label>

          </th>
      </tr>

      <tr>


<th scope="row">   <input type="file" name="file" class="custom-file-input" id="chooseFile">
        </div></th>

</tr>


  </thead>
  <tbody>

  </tbody>
</table>


<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">   <label class="custom-dvr" for="dvr">DVR Number</label></th>

      <th scope="col"> <label class="custom-category" for="channel">Channel</label></th>

      <th scope="col">   <label class="custom-date" for="channel">Date</label></th>

    

      </tr>

      <tr>


<th scope="row">  <select name="dvr" id="dvr">
                  <option >DVR 1</option>
                  <option >DVR 2</option>
                  <option >DVR 3</option>
                  <option >DVR 4</option>
                  <option >DVR 5</option>
                  <option >DVR 6</option>
                  <option >DVR 7</option>
                  <option >DVR 8</option>
                  <option >DVR 9</option>
            </select></th>

            <th scope="row"> <select name="channel" id="category">
                  <option >1</option>
                  <option >2</option>
                  <option >3</option>
                  <option >4</option>
                  <option >5</option>
                  <option >6</option>
                  <option >7</option>
                  <option >8</option>
                  <option >9</option>
            </select></th>

            <th scope="row">  <input type="date" name="date" class="date" id="date"></th>

     
</tr>


  </thead>
  <tbody>

  </tbody>
</table>



<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">    <label class="custom-time" for="time">Time</label></th>

      <th scope="col">   <label class="custom-note" for="note">Note</label></th>

      <th scope="col">  </th>

    

      </tr>

      <tr>


<th scope="row">    <input type="time" name="time" class="time" id="time"></th>

            <th scope="row">  <input type="text" name="note" class="note" id="note"></th>

            <th scope="row">    <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button></th>

     
</tr>


  </thead>
  <tbody>

  </tbody>
</table>

</div>
</form>




<!---<div class="container mt-5">
    <form action="{{route('savehome_cctv')}}" method="post" enctype="multipart/form-data">
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
          <label class="custom-file-label" for="chooseFile">Select file</label>
            <input type="file" name="file" class="custom-file-input" id="chooseFile">
            <label class="custom-dvr" for="dvr">DVR Number</label>
            <select name="dvr" id="dvr">
                  <option >DVR 1</option>
                  <option >DVR 2</option>
                  <option >DVR 3</option>
                  <option >DVR 4</option>
                  <option >DVR 5</option>
                  <option >DVR 6</option>
                  <option >DVR 7</option>
                  <option >DVR 8</option>
                  <option >DVR 9</option>
            </select>
             
            <label class="custom-category" for="channel">Channel</label>
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

            <label class="custom-date" for="channel">Date</label>
             <input type="date" name="date" class="date" id="date">
             <label class="custom-time" for="time">Time</label>
             <input type="time" name="time" class="time" id="time">
             <label class="custom-note" for="note">Note</label>
             <input type="text" name="note" class="note" id="note">
             
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button>
    </form>
</div>-->
<table id="homeCctv">
    <thead>
    <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Time</th>
        <th>Picture</th>
        <th>DVR Name</th>
        <th>Channel</th>
        <th>Description</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
@foreach ($homeCctv as $user)
  
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->date}}</td>
        <td>{{$user->time}}</td>
        <td><img src="{{ asset('file/' . $user->picture) }}" width="100px" height="100px"></td>
        <td>{{$user->dvr}}</td>
        <td>{{$user->channel}}</td>
        <td>{{$user->note}}</td>
        <td>{{$user->Status}}</td>

    </tr>
  
@endforeach  



</tbody>
   </table>
</section>

   
<!-- /.content -->
@endsection
