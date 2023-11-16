@extends('ApproveForm.app')
@section('title')
    homeLeaveForm
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

    select {
    word-wrap: normal;
    width: 100%!important;
    padding: 5px!important;
}

label:not(.form-check-label):not(.custom-file-label) {
    font-weight: 700;
    margin-top: 10px!important;
}
 
button, input {
    overflow: visible;
    padding: 5px;
}



   /* Style for the content wrapper with !important */
   .content-wrapper {
  padding: 20px !important;
}

/* Style for the table with !important */
#leaveform {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#leaveform th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#leaveform td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#leaveform .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#leaveform .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#leaveform .actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#leaveform .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#leaveform tbody tr:nth-child(even) {
  background-color: #f9f9f9 !important;
}




</style>


@section('content')


<div class="container table-responsive py-5 mt-5"> 
<form action="{{route('savehome_leave')}}" method="post" enctype="multipart/form-data">
      
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
      <th scope="col"> <div class="custom-file">
            <label class="custom-group" for="group">Name</label></th>
      <th scope="col"> <label class="custom-name" for="name">Group</label></th>
      <th scope="col"> <label for="timeInput">Leave Type</label></th>
      <th scope="col">  <label for="days">Days</label></th>
      <th scope="col">    <label for="timeInput">Date</label></th>
      <th scope="col">   </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><select name="name" id="name">
              @foreach ($employeelist as $username)
                  <option value="{{$username->name}}">{{$username->name}}</option>

                @endforeach
                <option value="dummy">dummy</option>
            </select></th>
      <td> <select name="group" id="group">
              @foreach ($employeelist as $group)
                  <option value="{{$group->group}}">{{$group->group}}</option>
                  
                @endforeach
                <option value="dummy">dummy</option>
            </select>
</td>
      <td>   <textarea name="type"></textarea></td>
      <td> <input type="number" name="days" id="days"></td>
      <td> <input type="date" name="date"></td>
      <td>   <button type="submit" name="submit" class="btn btn-primary btn-block ">
            Submit
        </button></td>
    </tr>
   
  
  
  </tbody>
</table>

</form>
</div>

<!---<div class="container mt-5">
    <form action="{{route('savehome_leave')}}" method="post" enctype="multipart/form-data">
      
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
            <label class="custom-group" for="group">Name</label>
          <select name="name" id="name">
              @foreach ($employeelist as $username)
                  <option value="{{$username->name}}">{{$username->name}}</option>

                @endforeach
                <option value="dummy">dummy</option>
            </select>
            
            <label class="custom-name" for="name">Group</label>
            <select name="group" id="group">
              @foreach ($employeelist as $group)
                  <option value="{{$group->group}}">{{$group->group}}</option>
                  
                @endforeach
                <option value="dummy">dummy</option>
            </select>

            
          <label for="timeInput">Leave Type</label>
          <textarea name="type"></textarea>
          
          <label for="days">Days</label>
          <input type="number" name="days" id="days">

          <label for="timeInput">Date</label>
          <input type="date" name="date">
            

        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button>
    </form>
</div>--->
<table id="leaveform">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Group</th>
        <th>Leave Type</th>
        <th>Days</th>
        <th>Date</th>
        
       

    </tr>
    </thead>
    <tbody>
@foreach ($leaveform as $leave)
  
    <tr>
        <td>{{$leave->id}}</td>
        <td>{{$leave->name}}</td>
        <td>{{$leave->group}}</td>
        <td>{{$leave->type}}</td>
        <td>{{$leave->days}}</td>
        <td>{{$leave->date}}</td>
        
        <td></td>

    </tr>
  
@endforeach  
</tbody>
   </table>
</section>
</div>

   
<!-- /.content -->
@endsection

