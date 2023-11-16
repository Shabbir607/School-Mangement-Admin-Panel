@extends('ApproveForm.app')
@section('title')
    StuInfoCurrent
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


            /* Style for the content wrapper with !important */
   .content-wrapper {
  padding: 20px !important;
}

/* Style for the table with !important */
#stuInfoCurrent {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#stuInfoCurrent th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#stuInfoCurrent td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#stuInfoCurrent .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#stuInfoCurrent .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#stuInfoCurrent.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#stuInfoCurrent .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#stuInfoCurrent tbody tr:nth-child(even) {
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
            <form action="{{ route('save_stuinfocurrent') }}" method="post" enctype="multipart/form-data">
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

                <div class="mb-3">
                    Select Excel File to Upload:
                    <input type="file" name="excel_file">
                </div>
                <div class="custom-file">

                    <input type="text" name="code" class="code" id="code"
                        value="{{ isset($editStuInfoCurrent['code']) ? $editStuInfoCurrent['code'] : '' }}">
                    <label class="firstname" for="code">Code</label>

                    <input type="text" name="password" class="password" id="password"
                        value="{{ isset($editStuInfoCurrent['password']) ? $editStuInfoCurrent['timeIn'] : '' }}">
                    <label class="password" for="password">Password</label>

                    <input type="text" name="firstname" class="firstname" id="firstname"
                        value="{{ isset($editStuInfoCurrent['firstname']) ? $editStuInfoCurrent['firstname'] : '' }}">
                    <label class="firstname" for="firstname">First Name</label>

                    <input type="text" name="middlename" class="firstname" id="firstname"
                        value="{{ isset($editStuInfoCurrent['middlename']) ? $editStuInfoCurrent['middlename'] : '' }}">
                    <label class="middleName" for="middleName">Middle Name</label>

                    <input type="text" name="lastname" class="custom-name_en" id="name_en"
                        value="{{ isset($editStuInfoCurrent['lastname']) ? $editStuInfoCurrent['lastname'] : '' }}">
                    <label class="custom-name_en" for="lastname">Last Name</label>



                    <select name="classroom" id="classroom">

                        <option {{ isset($editStuInfoCurrent['classroom']) == 'Year 1' ? 'selected' : '' }}>Year 1</option>
                        <option {{ isset($editStuInfoCurrent['classroom']) == 'Year 2' ? 'selected' : '' }}>Year 2</option>
                        <option {{ isset($editStuInfoCurrent['classroom']) == 'Year 3' ? 'selected' : '' }}>Year 3</option>
                        <option {{ isset($editStuInfoCurrent['classroom']) == 'Year 4' ? 'selected' : '' }}>Year 4</option>
                        <option {{ isset($editStuInfoCurrent['classroom']) == 'Year 5' ? 'selected' : '' }}>Year 5</option>

                    </select>
                    <label class="custom-name_en" for="classroom">Class Room</label>

                    <select name="status" id="student">

                        <option value="Current" {{ isset($editStuInfoCurrent['status']) == 'current' ? 'selected' : '' }}>
                            Current</option>
                        <option value="Alumni" {{ isset($editStuInfoCurrent['status']) == 'alumni' ? 'selected' : '' }}>
                            Alumni</option>

                    </select>
                    <label class="custom-status" for="status">Status</label>

                    <input type="hidden" name="hide"
                        value="{{ isset($editStuInfoCurrent['id']) ? $editStuInfoCurrent['id'] : '' }}" class="custom-hide"
                        id="hide">


                    <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                        Submit
                    </button>
            </form>
        </div>

        <table id="stuInfoCurrent">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Password</th>
                    <th>FirstName</th>
                    <th>MiddleName</th>
                    <th>LastName</th>
                    <th>ClassRoom</th>
                    <th>Status</th>
                    <th>Action</th>


                </tr>
            </thead>
            <tbody>

                @foreach ($stuInfoCurrent as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->code }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->middlename }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->classroom }}</td>
                        <td>{{ $user->status }}</td>
                        <td>
                            <a href="{{ route('editstuinfocurrent', ['id' => $user->id]) }}"><i
                                    class="fas fa-edit"></i></a>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>



    <!-- /.content -->

@endsection
