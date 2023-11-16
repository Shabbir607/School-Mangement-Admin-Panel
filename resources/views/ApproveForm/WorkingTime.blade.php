@extends('ApproveForm.app')
@section('title')
    WorkingTime
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
                border: 1px solid black;
            }

            th,
            td {
                border: 1px solid black;
                text-align: center;
                padding: 8px;
            }

            th {
                background-color: #f2f2f2;
            }

            tr:nth-child(odd) {
                background-color: #f2f2f2;
            }


                 /* Style for the content wrapper with !important */
   .content-wrapper {
  padding: 20px !important;
}

/* Style for the table with !important */
#workingtime {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#workingtime th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#workingtime td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#workingtime .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#workingtime .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#workingtime.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#workingtime .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#workingtime tbody tr:nth-child(even) {
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
            <form action="{{ route('saveworkingtime') }}" method="post" enctype="multipart/form-data">

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
      <th scope="col"> <div class="custom-file row"><label class="custom-group" for="group">Name</label></th>
      <th scope="col">   <label class="custom-name" for="name">Group</label>
</th>
      <th scope="col"> <label for="timeInput">Enter Time IN</label>
</th>



          
      </tr>
  </thead>
  <tbody>
    <tr>


    <th scope="row">  <select name="name" id="name" {{ isset($editWorkingTime['name']) ? 'disabled' : '' }}>
                        @foreach ($employeelist as $Username)
                            <option value="{{ $Username->name }}">{{ $Username->name }}
                                {{ isset($editWorkingTime['name']) == $Username->name ? 'selected' : '' }}</option>
                        @endforeach
                    </select></th>
     <td> <select name="group" id="group" {{ isset($editWorkingTime['group']) ? 'disabled' : '' }}>
                        @foreach ($employeelist as $group)
                            <option value="{{ $group->group }}">{{ $group->group }}
                                {{ isset($editWorkingTime['group']) == $group->group ? 'selected' : '' }}</option>
                        @endforeach
                    </select></td>
     <td>         <input name="timeIn"type="time"
                        value="{{ isset($editWorkingTime['timeIn']) ? $editWorkingTime['timeIn'] : '' }}" id="timeInput"
                        {{-- oninput="validateTime(this)" --}}>
                    <p id="errorMessage" style="color: red;"></p>

                    <label for="timeInput">Enter Time Out</label>
                    <input name="timeOut"type="time"
                        value="{{ isset($editWorkingTime['timeOut']) ? $editWorkingTime['timeOut'] : '' }}" id="timeInput"
                        {{-- oninput="validateTime(this)" --}}>
                    <p id="errorMessage" style="color: red;"></p>

                    <input type="hidden" name="hide"
                        value="{{ isset($editWorkingTime['id']) ? $editWorkingTime['id'] : '' }}" class="custom-hide"
                        id="hide">

                </div>  <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                        Submit
                    </button></td>
    </tr>
   
    
   
  </tbody>
</table>

</form>
        </div>


      <!---  <div class="container mt-5">
            <form action="{{ route('saveworkingtime') }}" method="post" enctype="multipart/form-data">

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
                <div class="custom-file row">

                    <select name="name" id="name" {{ isset($editWorkingTime['name']) ? 'disabled' : '' }}>
                        @foreach ($employeelist as $Username)
                            <option value="{{ $Username->name }}">{{ $Username->name }}
                                {{ isset($editWorkingTime['name']) == $Username->name ? 'selected' : '' }}</option>
                        @endforeach
                    </select>
                    <label class="custom-group" for="group">Name</label>

                    <select name="group" id="group" {{ isset($editWorkingTime['group']) ? 'disabled' : '' }}>
                        @foreach ($employeelist as $group)
                            <option value="{{ $group->group }}">{{ $group->group }}
                                {{ isset($editWorkingTime['group']) == $group->group ? 'selected' : '' }}</option>
                        @endforeach
                    </select>
                    <label class="custom-name" for="name">Group</label>

                    <label for="timeInput">Enter Time IN</label>


                    <input name="timeIn"type="time"
                        value="{{ isset($editWorkingTime['timeIn']) ? $editWorkingTime['timeIn'] : '' }}" id="timeInput"
                        {{-- oninput="validateTime(this)" --}}>
                    <p id="errorMessage" style="color: red;"></p>

                    <label for="timeInput">Enter Time Out</label>
                    <input name="timeOut"type="time"
                        value="{{ isset($editWorkingTime['timeOut']) ? $editWorkingTime['timeOut'] : '' }}" id="timeInput"
                        {{-- oninput="validateTime(this)" --}}>
                    <p id="errorMessage" style="color: red;"></p>

                    <input type="hidden" name="hide"
                        value="{{ isset($editWorkingTime['id']) ? $editWorkingTime['id'] : '' }}" class="custom-hide"
                        id="hide">

                </div>
                <div class="row">
                    <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                        Submit
                    </button>
                </div>

            </form>
        </div>--->
        <table id="workingtime">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Group</th>
                    <th>Time in</th>
                    <th>Time Out</th>
                    <th>Action</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($workingTime as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->group }}</td>
                        <td>{{ $user->timeIn }}</td>
                        <td>{{ $user->timeOut }}</td>
                        <td>
                            <a href="{{ route('editworkingtime', ['id' => $user->id]) }}"><i class="fas fa-edit"></i></a>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>


    <!-- /.content -->
@endsection
