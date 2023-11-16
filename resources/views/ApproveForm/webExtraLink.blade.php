@extends('ApproveForm.app')
@section('title')
    ExtraLink
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
#ExtraLink{
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#ExtraLinkth {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#ExtraLink td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#ExtraLink .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#ExtraLink.actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#ExtraLink.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#ExtraLink .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#ExtraLink tbody tr:nth-child(even) {
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
    <form action="{{route('save_extraLink')}}" method="post">
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
            
            <input type="text" name="link_thai" class="custom-name_th" id="link_th">
            <label class="custom-name_th" for="link_thai">ExtraLink (Thai)</label>
            <input type="text" name="link_english" class="custom-name_en" id="name_en">
            <label class="custom-name_en" for="subject_english">ExtraLink(English)</label>
         <input type="text" name="extra" class="custom-name_en" id="name_en">
            <label class="custom-name_en" for="subject_english">ExtraLink URL</label>

        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button>
    </form>
</div>

<table id="ExtraLink">
    <thead>
    <tr>
        <th>ID</th>
        <th>ExtraLink (Thai)</th>
        <th>ExtraLink(English)</th>
        <th>ExtraLink URL</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
@foreach ($extralink as $user)
  
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->link_thai}}</td>
        <td>{{$user->link_english}}</td>
        <td>{{$user->extra}}</td>
        
        <td></td>

    </tr>
  
@endforeach  
</tbody>
   </table>
</section>

   
<!-- /.content -->
@endsection

