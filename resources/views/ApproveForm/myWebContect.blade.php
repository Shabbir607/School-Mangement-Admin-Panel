@extends('ApproveForm.app')
@section('title')
    myWebContect
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
#myWebContect {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#myWebContect th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#myWebContect td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#myWebContect .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#myWebContect .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#myWebContect.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#myWebContect .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#myWebContect tbody tr:nth-child(even) {
  background-color: #f9f9f9 !important;
}

input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    width: 100%!important;
    padding: 10px;
    margin-top: 5px;

}

label {
    display: inline-block;
    font-size: 16px!important;
    line-height: 3em!important;
}

</style>

<div class="container mt-5">
    <form action="{{route('savemyWeb_contect')}}" method="post"enctype="multipart/form-data">
      
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
            <label class="custom-file-label" for="chooseFile">Picture</label>
              <select name="domain" id="domain">
              @foreach ($mywebinfo as $domain)
                  <option value="{{$domain->domain}}">{{$domain->domain}}</option>

                @endforeach
            </select>
            <label class="custom-name" for="domain">Domain</label>
            <select name="category" id="domain">
              @foreach ($webMenu as $category)
                  <option value="{{$category->menu_english}}">{{$category->menu_english}}</option>

                @endforeach
            </select>
            <label class="custom-name" for="category">Category</label>
          
        
          <label class="custom-expire" for="expire">Expire</label>
            <input type="date" name="expire" class="custom-title_engli" id="expire">

            <label class="custom-name_thai" for="name_thai">Name Thai</label>
            <input type="text" name="name_thai" class="custom-name_thai" id="title_thai">
            <label class="custom-name_thai" for="name_engli">Name English</label>
            <input type="text" name="name_english" class="custom-title_engli" id="name_engli">

          <label class="custom-title_engli" for="title_engli">Title English</label>
            <input type="text" name="title_english" class="custom-title_engli" id="title_engli">

            <label class="custom-title_thai" for="title_thai">Title Thai</label>
            <input type="text" name="title_thai" class="custom-title_thai" id="title_thai">

            <label class="custom-tag_thai" for="tag_thai">Tag Thai</label>
            <input type="text" name="tag_thai" class="custom-tag_thai" id="desc_thai">
            <label class="custom-tag_english" for="tag_english">Tag English</label>
            <input type="text" name="tag_english" class="custom-tag_english" id="tag_english"> 
            <textarea name="contant_english"></textarea>
            <label class="custom-contant_english" for="contant_english">Contant English</label>
            <textarea name="contant_thai"></textarea>
            <label class="custom-contant_thai" for="contant_thai">Contant Thai</label>

        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Submit
        </button>
    </form>
</div>

<table id="myWebContect">
    <thead>
    <tr>
        <th>ID</th>
        <th> Name </th>
        <th>Category</th>
        <th>Tag</th>
        <th>Update</th>
    </tr>
    </thead>
    <tbody>
@foreach ($myWebContect as $user)
  
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name_english}}</td>
        <td>{{$user->category}}</td>
        <td>{{$user->tag_english}}</td>
        <td>{{$user->expire}}</td>

    </tr>
  
@endforeach  
</tbody>
   </table>
</section>

   
<!-- /.content -->
@endsection

