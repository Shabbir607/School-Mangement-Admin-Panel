@extends('ApproveForm.app')
@section('title')
    sBrand
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
        max-width: 800px;
        margin: auto;
        padding: 20px;
    }

    .custom-file {
        margin-bottom: 20px;
    }

    .custom-file-label {
        overflow: hidden;
    }

    .custom-name_th,
    .custom-name_en {
        width: 100%;
        margin-bottom: 10px;
        padding: 8px;
    }

    .btn-primary {
        background-color: #f30d45;
        border-color: #f30d45;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

        /* Style for the content wrapper with !important */
.content-wrapper {
  padding: 20px !important;
}

    /* Style for the table with !important */
#sBrand{
    margin-top: 20px;
        border-collapse: collapse;
        width: 100%;
        border: 1px solid black;
}

/* Style for table headers with !important */
#sBrand th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#sBrand td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#sBrand .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#sBrand .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#sBrand .actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#sBrand.approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#sBrand tbody tr:nth-child(even) {
  background-color: #f9f9f9 !important;
}

#sBrand_wrapper {
    padding-top: 20px;
}
        </style>

<div class="container mt-5">
            <form action="{{ route('savebrand') }}" method="post" enctype="multipart/form-data">
        
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
      <th scope="col"><div class="custom-file"><label class="custom-file-label" for="chooseFile">Select file</label>
</th>
      </tr>
  </thead>
  <tbody>
    <tr>


    <th scope="row"><input type="file" name="file" class="custom-file-input" id="chooseFile"
                        value="{{ isset($editBrand['picture']) ? $editBrand['picture'] : '' }}">      </div>
</th>

        </tr>
    
   
  </tbody>
</table>


<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col"> <label class="custom-name_th" for="name_th">Brand Name Th</label></th>
      <th scope="col">  <label class="custom-name_en" for="EngName">Brand Name En</label>
</th>


      <th scope="col"> </th>

      </tr>
  </thead>
  <tbody>
    <tr>


    <th scope="row">   <input type="text" name="name_th"
                    value="{{ isset($editBrand['language']) ? $editBrand['language'] : '' }}" class="custom-name_th"
                    id="name_th"></th>
     <td>  <input type="text" name="name_en" value="{{ isset($editBrand['english']) ? $editBrand['english'] : '' }}"
                    class="custom-name_en" id="name_en">
                
                    <input type="hidden" name="hide" value="{{ isset($editBrand['id']) ? $editBrand['id'] : '' }}"
                    class="custom-hide" id="hide">   </td>
     <td>  <button type="submit" name="submit" class="btn btn-primary btn-block">
                    Submit
                </button></td>
              

        </tr>
    
   
  </tbody>
</table>
</form>
</div>


     <!----   <div class="container mt-5">
            <form action="{{ route('savebrand') }}" method="post" enctype="multipart/form-data">
                
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
                    <input type="file" name="file" class="custom-file-input" id="chooseFile"
                        value="{{ isset($editBrand['picture']) ? $editBrand['picture'] : '' }}">
                    <label class="custom-file-label" for="chooseFile">Select file</label>
                </div>

                <input type="text" name="name_th"
                    value="{{ isset($editBrand['language']) ? $editBrand['language'] : '' }}" class="custom-name_th"
                    id="name_th">
                <label class="custom-name_th" for="name_th">Brand Name Th</label>

                <input type="text" name="name_en" value="{{ isset($editBrand['english']) ? $editBrand['english'] : '' }}"
                    class="custom-name_en" id="name_en">
                <label class="custom-name_en" for="EngName">Brand Name En</label>

                <input type="hidden" name="hide" value="{{ isset($editBrand['id']) ? $editBrand['id'] : '' }}"
                    class="custom-hide" id="hide">

                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Submit
                </button>
            </form>
        </div>--->
        <table id="sBrand">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Picture</th>
                    <th>Language</th>
                    <th>English</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($sBrand as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><img src="{{ asset('file/' . $user->picture) }}" width="100px" height="100px"></td>

                        {{-- <td><img src="{{ base_path() . '/public/file/' . $user->picture }}"></td> --}}
                        <td>{{ $user->language }}</td>
                        <td>{{ $user->english }}</td>
                        <td>
                            <a href="{{ route('editbrand', ['id' => $user->id]) }}"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('delete_brand_row', ['id' => $user->id]) }}"><i class="fa fa-trash"
                                    aria-hidden="true"></i></a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>


    <!-- /.content -->
@endsection
