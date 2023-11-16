@extends('ApproveForm.app')
@section('title')
    RequestForm
@endsection



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
#requestForms {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#requestForms th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#requestForms td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#requestForms .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#requestForms .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#requestForms .actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#requestForms .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#requestForms tbody tr:nth-child(even) {
  background-color: #f9f9f9 !important;
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


        </style>

@section('content')

<div class="container table-responsive py-5 mt-5"> 
<form action="{{ route('saverequest_form') }}" method="post">
                <h3 class="text-center mb-5"></h3>
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
                    <label class="custom-date" for="date">Date</label></th>
      <th scope="col"> <label class="custom-subject" for="subject">Subject</label></th>
      <th scope="col"> <label class="custom-description" for="description">Description</label></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> <input type="date" name="date" class="custom-name_th" id="date"></th>
      <td><input type="text" name="subject" class="custom-subject" id="subject"></td>
      <td>   <input type="text" name="description" class="custom-description" id="description"></td>
      <td>  <button type="submit" name="submit" class="btn btn-primary btn-block">
                    Submit
                </button></td>
    </tr>
   
    
   
  </tbody>
</table>
</div>
</form>


      <!---  <div class="container mt-5">
            <form action="{{ route('saverequest_form') }}" method="post">
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
                    <label class="custom-date" for="date">Date</label>
                    <input type="date" name="date" class="custom-name_th" id="date">
                    <label class="custom-subject" for="subject">Subject</label>
                    <input type="text" name="subject" class="custom-subject" id="subject">
                    <label class="custom-description" for="description">Description</label>
                    <input type="text" name="description" class="custom-description" id="description">

                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Submit
                </button>
            </form>--->

            <table id="requestForms">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Subject</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($homerequest as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->date }}</td>
                            <td>{{ $user->subject }}</td>
                            <td>{{ $user->desciption }}</td>
                            <td>{{ $user->status }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </section>


    <!-- /.content -->
@endsection
