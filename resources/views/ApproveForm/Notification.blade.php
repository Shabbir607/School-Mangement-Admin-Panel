@extends('ApproveForm.app')
@section('title')
    Notification
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
    max-width: 500px !important;
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

/* Common styles for all devices */

/* Styles for tablets and larger screens */
@media (min-width: 768px) {
  .content-wrapper {
    padding: 20px;
  }
  
  .container {
    max-width: 500px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid black;
  }

  th, td {
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

  textarea {
    width: 100%;
    padding: 8px;
  }

  h2.custom-cancel_visa {
    font-size: 1.5em;
    margin-top: 10px;
    margin-bottom: 5px;
  }

  .btn-primary {
    background-color: #f30d45;
    border-color: #f30d45;
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
  }

  .btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
  }
}

/* Styles for mobile devices */
@media (max-width: 767px) {
  .content-wrapper {
    padding: 10px;
  }

  .container {
    max-width: 100%;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid black;
  }

  th, td {
    border: 1px solid black;
    text-align: center;
    padding: 5px;
  }

  th {
    background-color: #f2f2f2;
  }

  tr:nth-child(odd) {
    background-color: #f2f2f2;
  }

  textarea {
    width: 100%;
    padding: 5px;
  }

  h2.custom-cancel_visa {
    font-size: 1.2em;
    margin-top: 5px;
    margin-bottom: 3px;
  }

  .btn-primary {
    background-color: #f30d45;
    border-color: #f30d45;
    color: #fff;
    padding: 8px 16px;
    font-size: 14px;
  }

  .btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
  }

}

input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    width: 100%!important;
    padding: 20px!important;
}

label {
    display: inline-block;
    padding-top: 5px!important;
    padding-bottom: 5px!important;
    font-size: 21px!important;
}

</style>

<div class="container mt-5">
    <form action="{{route('savenotification')}}" method="post" enctype="multipart/form-data">

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
        
        <div>    
             <input type="text" name="days" class="code" id="code"
             value="{{ isset($notification[0]['days']) ? $notification[0]['days'] : '' }}">
            <label class="custom-code" for="notification">Days Notification Setting</label>

            <input type="text" name="visa" class="code" id="code"
            value="{{ isset($notification[0]['visa']) ? $notification[0]['visa'] : '' }}">
            <label class="custom-code" for="cctv">Visa</label>

            <input type="text" name="work" class="code" id="code"
            value="{{ isset($notification[0]['work_permit']) ? $notification[0]['work_permit'] : '' }}">
            <label class="custom-code" for="cctv">Work</label>

            <input type="text" name="teaching" class="code" id="code"
            value="{{ isset($notification[0]['teaching_li']) ? $notification[0]['teaching_li'] : '' }}">
            <label class="custom-code" for="cctv">Teaching License</label>

            <input type="text" name="passport" class="code" id="code"value="{{ isset($notification[0]['passport']) ? $notification[0]['passport'] : '' }}">
            <label class="custom-code" for="passport">Passport</label>

            <input type="text" name="id_card" class="code" id="code"value="{{ isset($notification[0]['id_card']) ? $notification[0]['id_card'] : '' }}">
            <label class="custom-code" for="id_card">ID Card</label>
            <input type="text" name="absent" class="code" id="code"
            value="{{ isset($notification[0]['absent']) ? $notification[0]['absent'] : '' }}">
            <label class="custom-code" for="address_engli">Absent</label>
            <input type="text" name="mail" class="code" id="code"value="{{ isset($notification[0]['mail']) ? $notification[0]['mail'] : '' }}">
            <label class="custom-code" for="address_engli">Mail To</label>


            <h2 class="custom-cancel_visa" for="days">Days Notification</</h2>
            <textarea name="days_area" value="
            {{ isset($notification[0]['days_msg']) ? $notification[0]['days_msg'] : '' }}"></textarea>

            <h2 class="custom-cancel_visa" for="visa">Visa Notification</</h2>

            <textarea name="visa_area" value="{{ isset($notification[0]['visa_msg']) ? $notification[0]['visa_msg'] : '' }}"></textarea>

            <h2 class="custom-cancel_visa" for="visa_extension">Work permit</</h2>
            <textarea name="work_area" value="{{ isset($notification[0]['work_msg']) ? $notification[0]['work_msg'] : '' }}" ></textarea>

            <h2 class="custom-cancel_visa" for="b_replacement_cover">Teaching License</</h2>

            <textarea name="teaching_area" value="{{ isset($notification[0]['teaching_msg']) ? $notification[0]['teaching_msg'] : '' }}" ></textarea>
            
            <h2 class="custom-cancel_visa" for="passport">passport</</h2>
            <textarea name="passport_area" value="{{ isset($notification[0]['passport_msg']) ? $notification[0]['passport_msg'] : '' }}" ></textarea>

            <h2 class="custom-cancel_visa" for="passport">ID card</</h2>
            <textarea name="id_card_area" value="{{ isset($notification[0]['id_card_msg']) ? $notification[0]['id_card_msg'] : '' }}" ></textarea>

            <h2 class="custom-cancel_visa" for="absent">Absent</</h2>
            <textarea name="absent_area" value="{{ isset($notification[0]['absent_msg']) ? $notification[0]['absent_msg'] : '' }}" ></textarea>
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
