@extends('ApproveForm.app')
@section('title')
    EmployeeList
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
#employeelist {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#employeelist th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#employeelist td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#employeelist .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#employeelist .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#employeelist.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#employeelist .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#employeelist tbody tr:nth-child(even) {
  background-color: #f9f9f9 !important;
}

input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    width: 100%!important;
}

input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    width: 100%;
    padding: 10px;
}

label {
    display: inline-block;
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 16px;
    color: black;
}
</style>
@section('content')
<div class="container mt-5">
    <form action="{{route('saveemployeeList')}}" method="post" enctype="multipart/form-data">
      
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
        <div>
            <label class="custom-department" for="department">Department</label>
            <input type="text" name="department" class="custom-name_th" id="department">
            <label class="custom-department" for="department">Homeroom</label>
            <input type="text" name="homeroom" class="custom-name_th" id="homeroom">
            <label class="custom-classroom" for="classroom">Classroom</label>
            <input type="text" name="classroom" class="custom-classroom" id="classroom">
            <label class="custom-subject" for="subject">Subject</label>
            <input type="text" name="subject" class="custom-subject" id="subject">
            <label class="custom-address" for="address">Address</label>
            <input type="text" name="address" class="custom-address" id="address">
            <label class="custom-subject" for="name">Name</label>
            <input type="text" name="name" class="custom-name" id="name">
            <label class="custom-asstant" for="name">Asstant Name</label>
            <input type="text" name="asstant" class="custom-asstant" id="asstant">
            <label class="custom-subject" for="group">Group</label>
            <input type="text" name="group" class="custom-group" id="group">
            <label class="custom-subject" for="nationality">Nationality</label>
            <input type="text" name="nationality" class="custom-group" id="nationality">
            <label class="custom-religion" for="religion">Religion</label>
            <input type="text" name="religion" class="custom-group" id="religion">
            <label class="custom-employee_id" for="employee_id">Employee ID</label>
            <input type="text" name="employee_id" class="custom-employee_id" id="employee_id">
            <label class="custom-password" for="password">Password</label>
            <input type="text" name="password" class="custom-password" id="password">
            <label class="custom-phone_no" for="phone_no">Phone No</label>
            <input type="text" name="phone_no" class="custom-phone_no" id="phone_no">
            <label class="custom-phone_no" for="card_number">ID card number</label>
            <input type="text" name="card_number" class="custom-card_number" id="card_number">
            <label class="custom-passport" for="passport_number">Passport number</label>
            <input type="text" name="passpord_number" class="custom-passport_number" id="passport_number">
            <label class="custom-issue" for="issue">Issue Date</label>
            <input type="Date" name="issue" class="custom-issue" id="issue">
            <label class="custom-expair" for="expair">Expair Date</label>
            <input type="Date" name="expair" class="custom-expair" id="expair">
            <label class="custom-visa" for="visa_number">Visa number</label>
            <input type="text" name="visa_number" class="custom-visa_number" id="visa_number">
            <label class="custom-work" for="contract">Contract</label>
            <input type="text" name="contract" class="custom-work" id="address">
            <label class="custom-contract_issue" for="work_issue">
            contract Issue Date</label>
            <input type="Date" name="contract_issue" class="custom-work_issue" id="contract_issue">
            <label class="custom-end_date" for="contract_end_date">contract End Date</label>
            <input type="Date" name="contract_end_date" class="custom-end_date" id="end_date">
            <label class="custom-work" for="work">Work Permit</label>
            <input type="text" name="work" class="custom-work" id="address">
            <label class="custom-work_issue" for="work_issue">Issue Date</label>
            <input type="Date" name="work_issue" class="custom-work_issue" id="work_issue">
            <label class="custom-end_date" for="end_date">End Date</label>
            <input type="Date" name="end_date" class="custom-end_date" id="end_date">
            <label class="custom-teaching" for="teaching">Teaching Lnc</label>
             <input type="text" name="teaching" class="custom-teaching" id="teaching">
            <label class="custom-teaching_issue" for="teaching_issue">Teaching Issue </label>
             <input type="Date" name="teaching_issure" class="custom-teaching_issue" id="teaching_issue">
            <label class="custom-teaching_issue_end" for="teaching_end">Teaching End </label>
            <input type="Date" name="teaching_end" class="custom-teaching_end" id="teaching_end">
            <label class="custom-scool" for="scool">School Lnc</label>
             <input type="text" name="school" class="custom-school" id="scool">
            <label class="custom-school_issue" for="school_issue">School Issue </label>
             <input type="Date" name="school_issure" class="custom-school_issue" id="school_issue">
            <label class="custom-teaching_issue_end" for="school_end">School End </label>
            <input type="Date" name="school_end" class="custom-school_end" id="teaching_end">
            </div>
        
        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button>
    </form>
</div>

<table id="employeelist">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Type</th>
        <th>Mobile No</th>
        <th>Start Date</th>
        <th>Last Date</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
@foreach ($employeelist as $user)
  
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->group}}</td>
        <td>{{$user->phone_no}}</td>
        <td>{{$user->teaching_issure}}</td>
        <td>{{$user->teaching_end}}</td>
        
        <td></td>

    </tr>
  
@endforeach  
</tbody>
   </table>
</section>

   
<!-- /.content -->
@endsection

