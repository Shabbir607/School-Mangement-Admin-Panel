@extends('ApproveForm.app')
@section('title')
    LeaveType
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

            .container {
                max-width: 500px;
            }

            dl,
            ol,
            ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }

            /* Override Bootstrap container max-width with !important */
.container {
    max-width: 100% !important;
    padding: 50px !important;
}

/* Form styles */
.custom-file {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

.custom-file input[type="hidden"],
.custom-file input[type="text"],
.custom-file select {
 
    padding: 8px !important;
    margin-bottom: 10px !important;
}

.custom-file label,
.custom-file select {

    padding: 8px !important;
}

.custom-file label {
    margin-bottom: 0 !important;
}

.btn-primary {
    background-color: #f30d45 !important;
    border-color: #f30d45 !important;
    color: #fff !important;
    padding: 10px 20px !important;
    font-size: 16px !important;
}

.btn-primary:hover {
    background-color: #0056b3 !important;
    border-color: #0056b3 !important;
}

    /* Style for the content wrapper with !important */
    .content-wrapper {
  padding: 20px !important;
}


/* Style for the table with !important */
#leavetype {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#leavetype th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#leavetype td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#leavetype .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#leavetype .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#leavetype .actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#leavetype .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#leavetype tbody tr:nth-child(even) {
  background-color: #f9f9f9 !important;
}



/* Style for table headers with !important */
#leavetype th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

select {
    word-wrap: normal;
    width: 100%!important;
}

        </style>

 @section('content')
        <div class="container mt-5">
            <form action="{{ route('saveLeaveType') }}" method="post" enctype="multipart/form-data">

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
      <th scope="col">   <div class="custom-file">
      <label class="custom-language_thi" for="language_thi">Language Thi</label></th>
      <th scope="col">   <label class="custom-language_engli" for="language_engli">Language Engl</label></th>
      <th scope="col"> <label class="custom-Including" for="Including">Including holidays</label></th>

          
      </tr>
  </thead>
  <tbody>
    <tr>


    <th scope="row"><input type="hidden" name="hide"
                        value="{{ isset($editLeave[0]['language_thi']) ? $editLeave[0]['id'] : '' }}" class="custom-hide"
                        id="hide">
  <input type="text" name="language_thi" value="{{ isset($editLeave[0]['language_thi']) ? $editLeave[0]['language_thi'] : '' }}" class="custom-name_th" id="language_thi"></th>
    <td>  <input type="text" name="language_engli"
                        value="{{ isset($editLeave[0]['language_engli']) ? $editLeave[0]['language_engli'] : '' }}"
                        class="custom-language_engli" id="language_engli"></td>
    <td>  <select name="Including" id="Including">
                        <option value="Yes"
                            {{ isset($editLeave[0]['Including']) && $editLeave[0]['Including'] == 'Yes' ? 'selected' : '' }}>
                            Yes</option>
                        <option value="No"
                            {{ isset($editLeave[0]['Including']) && $editLeave[0]['Including'] == 'No' ? 'selected' : '' }}>
                            No</option>

                    </select></td>
        </tr>
    
   
  </tbody>
</table>


<!------ Table Next Part ---->
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col"> 
      <label class="custom-deduct_money" for="deduct_money">deduct money</label></th>
      <th scope="col"><label class="custom-deduct_place" for="deduct_place">out of place</label></th>
      <th scope="col"></th>

          
      </tr>
  </thead>
  <tbody>
    <tr>


    <th scope="row">  <select name="deduct" id="deduct_money">
                        <option value="Yes"
                            {{ isset($editLeave[0]['deduct']) && $editLeave[0]['deduct'] == 'Yes' ? 'selected' : '' }}>
                            Yes</option>
                        <option value="No"
                            {{ isset($editLeave[0]['deduct']) && $editLeave[0]['deduct'] == 'No' ? 'selected' : '' }}>
                            No</option>
                    </select></th>
    <td>    <select name="out" id="deduct_place">
                        <option value="Yes"
                            {{ isset($editLeave[0]['out']) && $editLeave[0]['out'] == 'Yes' ? 'selected' : '' }}>
                            Yes</option>
                        <option value="No"
                            {{ isset($editLeave[0]['out']) && $editLeave[0]['out'] == 'No' ? 'selected' : '' }}>
                            No</option>
                    </select></td>
    <td><button type="submit" name="submit" class="btn btn-primary btn-block ">
                    Record
                </button></td>
        </tr>
    
   
  </tbody>
</table>
</form>
        </div>
    <!------    <div class="container mt-5">
            <form action="{{ route('saveLeaveType') }}" method="post" enctype="multipart/form-data">

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

                    <input type="hidden" name="hide"
                        value="{{ isset($editLeave[0]['language_thi']) ? $editLeave[0]['id'] : '' }}" class="custom-hide"
                        id="hide">

                    <input type="text" name="language_thi"
                        value="{{ isset($editLeave[0]['language_thi']) ? $editLeave[0]['language_thi'] : '' }}"
                        class="custom-name_th" id="language_thi">
                    <label class="custom-language_thi" for="language_thi">Language Thi</label>
                    
                    <input type="text" name="language_engli"
                        value="{{ isset($editLeave[0]['language_engli']) ? $editLeave[0]['language_engli'] : '' }}"
                        class="custom-language_engli" id="language_engli">
                    <label class="custom-language_engli" for="language_engli">Language Engl</label>

                    <select name="Including" id="Including">
                        <option value="Yes"
                            {{ isset($editLeave[0]['Including']) && $editLeave[0]['Including'] == 'Yes' ? 'selected' : '' }}>
                            Yes</option>
                        <option value="No"
                            {{ isset($editLeave[0]['Including']) && $editLeave[0]['Including'] == 'No' ? 'selected' : '' }}>
                            No</option>

                    </select>
                    <label class="custom-Including" for="Including">Including holidays</label>

                    <select name="deduct" id="deduct_money">
                        <option value="Yes"
                            {{ isset($editLeave[0]['deduct']) && $editLeave[0]['deduct'] == 'Yes' ? 'selected' : '' }}>
                            Yes</option>
                        <option value="No"
                            {{ isset($editLeave[0]['deduct']) && $editLeave[0]['deduct'] == 'No' ? 'selected' : '' }}>
                            No</option>
                    </select>
                    <label class="custom-deduct_money" for="deduct_money">deduct money</label>
                    <select name="out" id="deduct_place">
                        <option value="Yes"
                            {{ isset($editLeave[0]['out']) && $editLeave[0]['out'] == 'Yes' ? 'selected' : '' }}>
                            Yes</option>
                        <option value="No"
                            {{ isset($editLeave[0]['out']) && $editLeave[0]['out'] == 'No' ? 'selected' : '' }}>
                            No</option>
                    </select>
                    <label class="custom-deduct_place" for="deduct_place">out of place</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Record
                </button>
            </form>
        </div>---->
        <table id="leavetype">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Language Thi</th>
                    <th>Language Engl</th>
                    <th>Including holidays</th>
                    <th>deduct money</th>
                    <th>out of place</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($leavetype as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->language_thi }}</td>
                        <td>{{ $user->language_engli }}</td>
                        <td>{{ $user->Including }}</td>
                        <td>{{ $user->deduct }}</td>
                        <td>{{ $user->out }}</td>
                        <td><a href="{{ route('editLeavetype', ['id' => $user->id]) }}"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('delete_row', ['id' => $user->id]) }}"><i class="fa fa-trash"
                                    aria-hidden="true"></i></a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>


    <!-- /.content -->
@endsection
