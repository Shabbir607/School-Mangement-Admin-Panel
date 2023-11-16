@extends('ApproveForm.app')
@section('title')
    sItem
@endsection
@section('content')

<!-- Main content -->
<section class="content">
<style>


            th,
            td {
                border: 1px solid black;
                text-align: center;
                padding: 8px;
            }
   


/* Style for the table with !important */
#sitem {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#sitem th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#sitem td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#sitem .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#sitem .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#sitem.actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#sitem .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#sitem tbody tr:nth-child(even) {
  background-color: #f9f9f9 !important;
}

input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    width: 100%!important;
    padding : 10px;
}

label {
  line-height: 3em;
}
</style>


        <div class="container mt-5">
            <form action="{{ route('saveitem') }}" method="post" enctype="multipart/form-data">
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
                    <input type="file" name="file" class="custom-file-input" id="chooseFile">
                    <label class="custom-file-label" for="chooseFile">Select file</label>

                    <select name="category" id="category">
                        @foreach ($scategory as $category)
                            <option value="{{ $category->id }}">{{ $category->english }}</option>
                        @endforeach
                    </select>

                    <label class="custom-category" for="code">Category</label>

                    <select name="brand" id="brand">
                        @foreach ($sbrand as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->english }}</option>
                        @endforeach
                    </select>

                    <label class="custom-category" for="code">Brand</label>

                    <input type="text" name="code" class="code" id="code">
                    <label class="custom-code" for="code">Code</label>

                    <input type="text" name="product" class="custom-product" id="product">

                    <label class="custom-product" for="product">Product Name</label>

                    <input type="text" name="price" class="custom-product" id="price">
                    <label class="custom-price" for="price">Price</label>
                </div>

                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Submit
                </button>
            </form>

        </div>
        <table id="sitem">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Code</th>
                    <th>Brand ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Picture</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sItem as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->category }}</td>
                        <td>{{ $user->code }}</td>
                        <td>{{ $user->brand_id }}</td>
                        <td>{{ $user->product }}</td>
                        <td>{{ $user->price }}</td>
                        <td><img src="{{ asset('file/' . $user->picture) }}" width="100px" height="100px"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>


    <!-- /.content -->
@endsection
