@extends('ApproveForm.app')
@section('title')
    schoolInfo
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

    /* Override Bootstrap container max-width with !important */
.container {
    max-width: 100% !important;
    padding: 50px !important;
}

/* Form styles */
.custom-file input[type="file"] {
    width: calc(100% - 16px) !important;
    padding: 8px !important;
}

.custom-file label {
    width: calc(100% - 16px) !important;
    padding: 8px !important;
    margin-bottom: 0 !important;
    text-overflow: ellipsis !important;
    white-space: nowrap !important;
    overflow: hidden !important;
    border: 1px solid #ced4da !important;
}

.custom-file label::after {
    content: "Browse" !important;
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

/* Input and label styles */
.code,
.student {
    width: calc(100% - 10px) !important;
    padding: 8px !important;
}

.custom-code,
.custom-student {
    width: 100% !important;
}

/* Table styles */
#sBrand {
    border-collapse: collapse !important;
    width: 100% !important;
    border: 1px solid black !important;
}

#sBrand th, #sBrand td {
    border: 1px solid black !important;
    text-align: center !important;
    padding: 8px !important;
}

#sBrand th {
    background-color: #f2f2f2 !important;
}

#sBrand tr:nth-child(odd) {
    background-color: #f2f2f2 !important;
}

.code, .student {
    width: calc(100% - 10px) !important;
    padding: 12px !important;
}

.custom-code, .custom-student {
    font-size: initial;
    width: 100% !important;
    padding-top: 8px!important;
    padding-bottom: 8px!important;
    color: black!important;
}


</style>

@section('content')
<div class="container mt-5">
    <form action="{{route('saveschoolinfo')}}" method="post" enctype="multipart/form-data">
     
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
      <th scope="col"> <div class="custom-file">  <label class="custom-file-label" for="chooseFile">Select file</label> </div></th>
    

          
      </tr>
  </thead>
  <tbody>
    <tr>


    <th scope="row"><input type="file" name="file" class="custom-file-input" id="chooseFile"></th>
  
        </tr>
    
   
  </tbody>
</table>



        <div>    
             <input type="text" name="name_thai" class="code" id="code"
             value="{{ isset($schoolinfo[0]['name_thai']) ? $schoolinfo[0]['name_thai'] : '' }}">
            <label class="custom-code" for="cctv">Name Thai</label>

            <input type="text" name="name_engli" class="code" id="code"
            value="{{ isset($schoolinfo[0]['name_engli']) ? $schoolinfo[0]['name_engli'] : '' }}">
            <label class="custom-code" for="cctv">Name English</label>

            <input type="text" name="domain" class="code" id="code"
            value="{{ isset($schoolinfo[0]['domain']) ? $schoolinfo[0]['domain'] : '' }}">
            <label class="custom-code" for="cctv">Domain</label>

            <input type="text" name="identi" class="code" id="code"
            value="{{ isset($schoolinfo[0]['identi']) ? $schoolinfo[0]['identi'] : '' }}">
            <label class="custom-code" for="cctv">Tax identification number</label>

            <input type="text" name="address_thai" class="code" id="code"value="{{ isset($schoolinfo[0]['address_thai']) ? $schoolinfo[0]['address_thai'] : '' }}">
            <label class="custom-code" for="address_thai">Address in Thai</label>

            <input type="text" name="address_engli" class="code" id="code"value="{{ isset($schoolinfo[0]['address_engli']) ? $schoolinfo[0]['address_engli'] : '' }}">
            <label class="custom-code" for="address_engli">Address in English</label>
            <input type="text" name="finance" class="code" id="code"
            value="{{ isset($schoolinfo[0]['finance']) ? $schoolinfo[0]['finance'] : '' }}">
            <label class="custom-code" for="address_engli">financial information</label>
            <input type="text" name="Registration" class="code" id="code"value="{{ isset($schoolinfo[0]['Registration']) ? $schoolinfo[0]['Registration'] : '' }}">
            <label class="custom-code" for="address_engli">Registration number</label>
            <input type="text" name="income" class="student" id="code"value="{{ isset($schoolinfo[0]['income']) ? $schoolinfo[0]['income'] : '' }}">
            <label class="custom-code" for="address_engli">Income</label>
            <input type="text" name="student" class="student" id="code"
            value="{{ isset($schoolinfo[0]['student']) ? $schoolinfo[0]['student'] : '' }}">
            <label class="custom-code" for="address_student">Student</label>
            <input type="text" name="classroom" class="student" id="code"value="{{ isset($schoolinfo[0]['classroom']) ? $schoolinfo[0]['classroom'] : '' }}">
            <label class="custom-code" for="address_student">Class Room</label>
        </div>
        <div>
            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                Submit
            </button>
        </div>
    </form>
</div>


</section>

   
<!-- /.content -->
@endsection
