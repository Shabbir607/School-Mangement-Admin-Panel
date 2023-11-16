@extends('ApproveForm.app')
@section('title')
    AcInfoIntrov
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
#AcInfoIntrov {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#AcInfoIntrov th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#AcInfoIntrov td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#AcInfoIntrov .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#AcInfoIntrov .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#AcInfoIntrov.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#AcInfoIntrov .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#AcInfoIntrov tbody tr:nth-child(even) {
  background-color: #f9f9f9 !important;
}

input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    width: 100%!important;
    padding: 10px;
}

label {
    line-height: 3em;
    font-size: 18px;
}

</style>

<div class="container mt-5">
    <form action="{{route('save_Ac_InfoIntrov')}}" method="post">
   
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
             
             <div class="form-group">
                                <label>Day :</label><br>
                                <label><input type="checkbox" name="day[]" value="sunday"> Sunday</label>
                                <label><input type="checkbox" name="day[]" value="monday"> Monday</label>
                                <label><input type="checkbox" name="day[]" value="tuesday"> Tuesday</label>
                                <label><input type="checkbox" name="day[]" value="wednesday"> Wednesday</label>
                                <label><input type="checkbox" name="day[]" value="thursday"> Thursday</label>
                                <label><input type="checkbox" name="day[]" value="friday"> Friday</label>
                                  <label><input type="checkbox" name="day[]" value="saturday"> Saturday</label>
                            </div> 

               <select name="subject" id="subject">
              
                  <option >Computer Science</option>
                  <option >English</option>
                  <option >Math</option>
                  <option >Chaines</option>
                  <option >Footbal</option>
                 
            </select>

            <label class="custom-subject" for="subject">Subject</label>

               <select name="total_hour" id="total_hour">
              
                  <option >1</option>
                  <option >2</option>
                  <option >3</option>
                  <option >4</option>
                  <option >5</option>
                 
            </select>

            <label class="custom-total" for="total_hour">Total Hour</label>


               <select name="hour_day" id="hour_day">
              
                  <option >1</option>
                  <option >1.5</option>
                  <option >2</option>
                  <option >2.5</option>
                  <option >3</option>
                 
            </select>

            <label class="custom-hour_day" for="hour_day">Hour day</label>


               <select name="music" id="music">
              
                  <option >Yes</option>
                  <option >No</option>
                  
                 
            </select>

            <label class="custom-music" for="music">Music Sheet</label>


               <select name="student" id="student">
              
                  <option >Shabbir</option>
                  <option >Ali</option>
                  <option >Asgar</option>
                  <option >Umair</option>
                  <option >Ali</option>
                 
                 
            </select> 

            <label class="custom-music" for="student">Student Name</label>


            <input type="text" name="receipt_number" class="custom-receipt_number" id="receipt_number">
            <label class="custom-receipt_number" for="subject_thai">Receipt Number</label>

            <input type="Date" name="receipt_date" class="custom-receipt_date" id="receipt_date">
            <label class="custom-receipt_date" for="receipt_date">Receipt Date</label>
            <input type="Number" name="price" class="custom-number" id="number">
            <label class="custom-number" for="number">Price</label>
            
            <select name="teacher" id="teacher">
              
                  <option >Shabbir</option>
                  <option >Ali</option>
                  <option >Asgar</option>
                  <option >Umair</option>
                  <option >Ali</option>
                 
                 
            </select> 

            <label class="custom-teacher" for="teacher">Teacher</label>

             <textarea name="note">

            </textarea><label for "note">Note</label>

        </div>

        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button>
    </form>
</div>

<table id="AcInfoIntrov">
    <thead>
    <tr>
        <th>ID</th>
        <th>Bill Number</th>
        
        <th>Subject Name</th>
        <th>Student</th>
        <th>Teacher</th>
        <th>Action</th>

    </tr>
    </thead>
    <tbody>
@foreach ($AcInfoIntrov as $user)
  
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->receipt_number}}</td>
        <td>{{$user->subject}}</td>
        <td>{{$user->student}}</td>
        <td>{{$user->teacher}}</td>
        <td></td>

    </tr>
  
@endforeach  
</tbody>
   </table>
</section>

   
<!-- /.content -->
@endsection

