@extends('ApproveForm.app')
@section('title')
    homeStationary
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

            th{

                background-color: #f2f2f2;
                }
                tr:nth-child(odd){
                background-color: #f2f2f2;
                }


    input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    width: -webkit-fill-available!important;
}


   /* Style for the content wrapper with !important */
   .content-wrapper {
  padding: 20px !important;
}

/* Style for the table with !important */
#homePurchase {
  width: 100% !important;
  border-collapse: collapse !important;
  margin-top: 20px !important;
}

/* Style for table headers with !important */
#homePurchase th {
  background-color: #f30d45 !important;
  color: #fff !important;
  padding: 10px !important;
  text-align: left !important;
}

/* Style for table data cells with !important */
#homePurchase td {
  padding: 10px !important;
  border-bottom: 1px solid #ddd !important;
}

/* Style for actions column with !important */
#homePurchase .actions {
  display: flex !important;
  justify-content: space-between !important;
}

/* Style for action buttons with !important */
#homePurchase .actions button {
  background-color: #f30d45 !important;
  border: none !important;
  color: #fff !important;
  padding: 5px 10px !important;
  cursor: pointer !important;
}

#homePurchase .actions button:hover {
  background-color: #0056b3 !important;
}

/* Style for approve cells with !important */
#homePurchase .approve {
  font-weight: bold !important;
}

/* Style for alternate rows with !important */
#homePurchase tbody tr:nth-child(even) {
  background-color: #f9f9f9 !important;
}


</style>


        <div class="container mt-5">
            <form action="{{ route('savehome_Stationary') }}" method="post" enctype="multipart/form-data">
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
                    <input type="hidden" value="{{ $user_id }}" name="user" class="" id="user">
                    <input type="hidden" value="{{ $name }}" name="teacher" class="custom-teacher" id="teacher">

                    <input type="hidden" name="hide" value="{{ isset($editSsale['id']) ? $editSsale['id'] : '' }}"
                        class="custom-hide" id="hide">

                    <label class="" for="date">Date</label>
                    <input type="date" name="date" class="custom-name_th" id="date"
                        value="{{ isset($editSsale['date']) ? $editSsale['date'] : '' }}">

                    @if (!isset($editSsale['productCode']))
                        <label class="" for="code">Product</label>
                        <select name="productId" id="code" {{ isset($editSsale['productCode']) ? 'disabled' : '' }}>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}"
                                    {{ isset($editSsale['productCode']) && $editSsale['productCode'] == $product->id ? 'selected' : '' }}>
                                    {{ $product->product }}</option>
                            @endforeach
                        </select>
                    @else
                        <label class="" for="code">Product</label>
                        <input type="hidden" name="productId"
                            value="{{ isset($editSsale['productCode']) ? $editSsale['productCode'] : '' }}">
                        <input type="text" name=""
                            value="{{ isset($editSsale['productCode']) ? $editSsale->item->product : '' }}">
                    @endif

                    {{-- <label class="" for="name_th">Brand Name</label>
                    <select name="company" id="code" {{ isset($editSsale['companyID']) ? 'disabled' : '' }}>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}" {{ isset($editSsale['companyID']) && $editSsale['companyID'] == $brand->id ? 'selected' : '' }}>{{ $brand->english }}</option>
                        @endforeach
                    </select> --}}

                    <label class="custom-qty" for="qty">Qty</label>
                    <input type="text" name="qty" class="custom-qty" id="qty"
                        value="{{ isset($editSsale['saleQty']) ? $editSsale['saleQty'] : '' }}">

                    <label class="custom-discription" for="discription">Discription</label>
                    <input type="text" name="description" class="custom-discription" id="discription"
                        value="{{ isset($editSsale['date']) ? $editSsale['description'] : '' }}">

                    <label class="" for="status ">Status</label>
                    <select name="status" id="status" class="custom-status">
                        <option value="waiting"
                            {{ isset($editSsale['status']) && $editSsale['status'] == 'waiting' ? 'selected' : '' }}>
                            Waiting</option>
                        <option value="approved"
                            {{ isset($editSsale['status']) && $editSsale['status'] == 'approved' ? 'selected' : '' }}>
                            Approved</option>
                        <option value="rejected"
                            {{ isset($editSsale['status']) && $editSsale['status'] == 'rejected' ? 'selected' : '' }}>
                            Rejected</option>
                    </select>

                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Submit
                </button>
            </form>

        </div>


        <table id="homePurchase">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Product Code</th>
                    <th>Picture</th>
                    <th>Brand</th>
                    <th>Quantity</th>
                    <th>Bill</th>
                    <th>Discription</th>
                    <th>Status</th>
                    <th>Action</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale)
                    <tr>
                        <td>{{ $sale->id }}</td>
                        <td>{{ $sale->date }}</td>
                        <td>{{ $sale->item->code ?? '' }}</td>
                        <td>
                            @if ($sale->item && $sale->item->picture)
                                <img src="{{ asset('file/' . $sale->item->picture) }}" width="100px" height="100px">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ $sale->item->brand->language ?? ''}}</td>
                        <td>{{ $sale->saleQty }}</td>
                        <td>{{ $sale->bill }}</td>
                        <td>{{ $sale->description }}</td>
                        <td>{{ $sale->status }}</td>
                        <td>
                            <a href="{{ route('editHomeStationary', ['id' => $sale->id]) }}"><i
                                    class="fas fa-edit"></i></a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>



    <!-- /.content -->
@endsection
