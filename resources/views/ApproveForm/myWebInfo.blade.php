@extends('ApproveForm.app')
@section('title')
    myWebInfo
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
#Nationality {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#Nationality th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#Nationality td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#Nationality .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#Nationality .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#Nationality.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#Nationality .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#Nationality tbody tr:nth-child(even) {
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
    display: inline-block;
    font-size: 16px!important;
    line-height: 3em!important;
}

</style>

<div class="container mt-5">
    <form action="{{route('savemyWeb_info')}}" method="post"enctype="multipart/form-data">
     
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
             <input type="file" name="file" class="custom-file-input" id="chooseFile">
            <label class="custom-file-label" for="chooseFile">Logo</label>
            
            <input type="text" name="name_thai" class="custom-name_thai" id="name_thai">
            <label class="custom-name_thai" for="subject_thai"> Name(Thai)</label>
            <input type="text" name="name_english" class="custom-name_english" id="name_english">
            <label class="custom-name_english" for="name_english">Name(English)</label>
             
            <input type="text" name="domain" class="custom-domain" id="domain">
            <label class="custom-domain" for="domain">Domain</label>
            <input type="text" name="domain" class="custom-domain" id="domain">

            <label class="custom-Website" for="Website">Website</label>
            <input type="text" name="website" class="custom-Website" id="domain">
            <label class="custom-domain" for="domain">Facebook</label>
            <input type="text" name="facebook" class="custom-domain" id="domain">
             <label class="custom-domain" for="domain">Google</label>
            <input type="text" name="google" class="custom-domain" id="domain">
            <h2>Description</h2>
            <label class="custom-domain" for="keyword">Keyword Thai</label>
            <input type="text" name="keyword_thai" class="custom-domain" id="keyword_thai">
            <label class="custom-keyword_thai" for="keyword_thai">Keyword English</label>
            <input type="text" name="keyword_english" class="custom-keyword_engli" id="keyword_engli">

            <label class="custom-title_engli" for="title_engli">Title English</label>
            <input type="text" name="title_english" class="custom-title_engli" id="title_engli">

            <label class="custom-title_thai" for="title_thai">Title Thai</label>
            <input type="text" name="title_thai" class="custom-title_thai" id="title_thai">
            <label class="custom-title_thai" for="title_thai">Description Thai</label>
            <input type="text" name="desic_thai" class="custom-title_thai" id="desc_thai">
            <label class="custom-desc_thai" for="title_thai">Description English</label>
            <input type="text" name="desic_english" class="custom-desc_engli" id="desc_engli"> 

        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button>
    </form>
</div>

</section>

   
<!-- /.content -->
@endsection

