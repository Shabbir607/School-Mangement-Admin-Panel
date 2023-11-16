@extends('ApproveForm.app')
@section('title')
    homeBook
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
#homeBook {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#homeBook th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#homeBook td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#homeBook .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#homeBook .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#homeBook.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#homeBook .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#homeBook tbody tr:nth-child(even) {
  background-color: #f9f9f9 !important;
}

input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

</style>

@section('content')
<div class="container mt-5">
    <form action="{{route('savehome_booking')}}" method="post" enctype="multipart/form-data">
      
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


<th scope="row">  <input type="file" name="file" class="custom-file-input" id="chooseFile">
        </div></th>

</tr>


  </thead>
  <tbody>

  </tbody>
</table>


<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col"> <div class="custom-file"><label class="custom-room" for="room">Room Name</label></th>

      <th scope="col"><label class="custom-name_th" for="name">Active Name</label></th>

      <th scope="col"> <label class="custom-fan" for="fan">Fans</label></th>

      <th scope="col">  <label class="custom-fan" for="chair">Chairs</label></th>

      </tr>

      <tr>


<th scope="row"> <select name="room" id="category">
                  <option >Auditorium</option>
                  <option >Assembly</option>
                  <option >Meeting</option>
                  
            </select></th>

            <th scope="row"> <input type="text" name="active" class="custom-name" id="name"></th>

            <th scope="row">  <select name="fan" id="fan">
                  <option >Yes</option>
                  <option >No</option>
            </select></th>

            <th scope="row">  <select name="chair" id="chair">
                  <option >Yes</option>
                  <option >No</option>
            </select></th>

</tr>


  </thead>
  <tbody>

  </tbody>
</table>



<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">  <label class="custom-light" for="light">Lights</label></th>

      <th scope="col"> <label class="custom-air" for="air">Air Condition</label></th>

  


      </tr>

      <tr>


<th scope="row">   <select name="light" id="light">
                  <option >Yes</option>
                  <option >No</option>
            </select></th>

            <th scope="row">  <select name="air" id="air">
                  <option >Yes</option>
                  <option >No</option>
            </select></th>

        


</tr>


  </thead>
  <tbody>

  </tbody>
</table>


<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
    

      <th scope="col"> <label class="custom-date" for="channel">Date</label></th>


      </tr>

      <tr>


            <th scope="row">   <input type="date" name="date" class="date" id="date">
             <label class="custom-time" for="time">Time</label>
             <input type="time" name="time" class="time" id="time">
             <label class="custom-note" for="note">Note</label>
             <input type="text" name="note" class="note" id="note">
             <label class="custom-note" for="Other">Other Write</label>
             <input type="text" name="other" class="Other" id="note">
             <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button>
            </th>

          

</tr>




  </thead>
  <tbody>

  </tbody>
</table>

</div>
</form>











<!----<div class="container mt-5">
    <form action="{{route('savehome_booking')}}" method="post" enctype="multipart/form-data">
      
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
        </div>
            <label class="custom-room" for="room">Room Name</label>
             <select name="room" id="category">
                  <option >Auditorium</option>
                  <option >Assembly</option>
                  <option >Meeting</option>
                  
            </select>
            <label class="custom-name_th" for="name">Active Name</label>
            <input type="text" name="active" class="custom-name" id="name">
            

            <label class="custom-fan" for="fan">Fans</label>
             <select name="fan" id="fan">
                  <option >Yes</option>
                  <option >No</option>
            </select>
            <label class="custom-fan" for="chair">Chairs</label>
             <select name="chair" id="chair">
                  <option >Yes</option>
                  <option >No</option>
            </select>
            <label class="custom-light" for="light">Lights</label>
             <select name="light" id="light">
                  <option >Yes</option>
                  <option >No</option>
            </select>
            <label class="custom-air" for="air">Air Condition</label>
             <select name="air" id="air">
                  <option >Yes</option>
                  <option >No</option>
            </select>
            <label class="custom-date" for="channel">Date</label>
            <input type="date" name="date" class="date" id="date">
             <label class="custom-time" for="time">Time</label>
             <input type="time" name="time" class="time" id="time">
             <label class="custom-note" for="note">Note</label>
             <input type="text" name="note" class="note" id="note">
             <label class="custom-note" for="Other">Other Write</label>
             <input type="text" name="other" class="Other" id="note">
             


        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button>
    </form>---->

<div>
<table id="homeBook">
    <thead>
    <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Location</th>
        <th>Active </th>

    </tr>
    </thead>
    <tbody>
</div>
@foreach ($homeBook as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->date}}</td>
        <td>{{$user->room}}</td>
        <td>{{$user->active}}</td>
        <td></td>

    </tr>
  
@endforeach  
</tbody>
   </table>
</section>

   
<!-- /.content -->
@endsection
