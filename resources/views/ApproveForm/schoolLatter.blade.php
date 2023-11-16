@extends('ApproveForm.app')
@section('title')
    SchoolLatter
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
.container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        /* Override Bootstrap container max-width with !important */
.container {
    max-width: 500px !important;
    Padding: 20px!important;
}

/* Override Bootstrap dl, ol, ul styles with !important */
dl, ol, ul {
    margin: 0 !important;
    padding: 0 !important;
    list-style: none !important;
}

/* Override table styles with !important */
table {
    border-collapse: collapse !important;
    width: 100% !important;
    border: 1px solid black !important;
}

th, td {
    border: 1px solid black !important;
    text-align: center !important;
    padding: 8px !important;
}

th {
    background-color: #f2f2f2 !important;
}

tr:nth-child(odd) {
    background-color: #f2f2f2 !important;
}

/* Override textarea and heading styles with !important */
textarea {
    width: 100% !important;
    padding: 8px !important;
}

h2.custom-cancel_visa {
    font-size: 1.5em !important;
    margin-top: 10px !important;
    margin-bottom: 5px !important;
}

/* Override submit button styles with !important */
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

</style>

<div class="container mt-5">
    <form action="{{route('saveschoollater')}}" method="post">
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
            <textarea name="cancel_visa" value="{{ isset($SchoolLater[0]['cancel_visa']) ? $SchoolLater[0]['cancel_visa'] : '' }}"></textarea>
            <h2 class="custom-cancel_visa" for="cancel_visa">Cancel Visa</</h2>
            <textarea name="resign" value="{{ isset($SchoolLater[0]['resign']) ? $SchoolLater[0]['resign'] : '' }}"></textarea>
            <h2 class="custom-cancel_visa" for="cancel_visa">Resign</</h2>
            <textarea name="visa_extension" value="{{ isset($SchoolLater[0]['visa_extension']) ? $SchoolLater[0]['visa_extension'] : '' }}"></textarea>
            <h2 class="custom-cancel_visa" for="visa_extension">Visa Extention</</h2>
            <textarea name="b_replacement_cover" value="{{ isset($SchoolLater[0]['b_replacement_cover']) ? $SchoolLater[0]['b_replacement_cover'] : '' }}" ></textarea>
            <h2 class="custom-cancel_visa" for="b_replacement_cover">B-replacement cover</</h2>

            <textarea name="O_replacement_cover" value="{{ isset($SchoolLater[0]['O_replacement_cover']) ? $SchoolLater[0]['O_replacement_cover'] : '' }}" ></textarea>

            <h2 class="custom-cancel_visa" for="cancel_visa">O-Replacement cover</</h2>
            <textarea name="O_replacement_cover" ></textarea>

             <h2 class="custom-cancel_visa" for="cancel_visa">Teacher visa</</h2>

            <textarea name="teacher_visa" value="{{ isset($SchoolLater[0]['teacher_visa']) ? $SchoolLater[0]['teacher_visa'] : '' }}"></textarea>
            
            <h2 class="custom-personnel_visa" for="personnel_visa">Personnel Visa</</h2>
            <textarea name="personnel_visa" value="{{ isset($SchoolLater[0]['personnel_visa']) ? $SchoolLater[0]['personnel_visa'] : '' }}"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button>
    </form>
</div>

   

</section>

   
<!-- /.content -->
@endsection

