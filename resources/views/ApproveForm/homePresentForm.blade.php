@extends('ApproveForm.app')
@section('title')
    homePresentForm
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

    th , td,   {
        border: 1px solid black;
        text-align: center;
        padding: 8px;
        width: 100%!important
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






</style>
@section('content')


<div class="container table-responsive py-5 mt-5"> 
<form action="{{route('saveworkingtime')}}" method="post" enctype="multipart/form-data">
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
      <th scope="col">  <div class="custom-file">
            <label class="custom-group" for="group">Name</label>
        
      <th scope="col"> <label for="timeInput"></label>Group</th>
      <th scope="col"> <label class="custom-name" for="name">Enter Time IN</label>
        
            
          <label for="timeInput">Enter Time Out</label></th>
      
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">  <select name="name" id="name">
              @foreach ($employeelist as $username)
                  <option value="{{$username->name}}">{{$username->name}}</option>

                @endforeach
            </select>
            </th></th>
      <td>  <select name="group" id="name">
              @foreach ($employeelist as $groups)
                  <option value="{{$groups->group}}">{{$groups->group}}</option>

                @endforeach
            </select></td>
      <td>
      <input name="timeIn"type="time" id="timeInput" oninput="validateTime(this)">
   

    <input name="timeOut"type="time" id="timeInput" oninput="validateTime(this)">
    <p id="errorMessage" style="color: red;"></p></p>
    
    

   
    </td>
     
<td> 
         
<button type="submit" name="submit" class="btn btn-primary btn-block ">
            Submit
        </button>

 
   

     
     </td>
    </tr>
    
  </tbody>
</table>


</form>
</div>
 
</section>






<!---<div class="container mt-5">
    <form action="{{route('saveworkingtime')}}" method="post" enctype="multipart/form-data">
      
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
            </select>
            
            <label for="timeInput">Enter Time IN</label>
            <select name="group" id="group">
              @foreach ($employeelist as $group)
                  <option value="{{$group->group}}">{{$group->group}}</option>

                @endforeach
            </select>
            <label class="custom-name" for="name">Group</label>
          
            
        <label for="timeInput">Enter Time Out</label>
        
    <input name="timeIn"type="time" id="timeInput" oninput="validateTime(this)">
    <p id="errorMessage" style="color: red;"></p>

    
    <input name="timeOut"type="time" id="timeInput" oninput="validateTime(this)">
    <p id="errorMessage" style="color: red;"></p>
    
       
        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button>
        </div>
        
        
    </form>
</div>
 
</section>--->

   
<!-- /.content -->
@endsection

     

    
