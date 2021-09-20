@extends('layouts.app')

@section('title','Book a table')
@push('css')

  <link href="{{ asset('bookTable/css/jquery-ui.min.css') }}" rel="stylesheet">  
  <link href="{{ asset('bookTable/css/timepicker.css') }}" rel="stylesheet">

@endpush

@section('content')
 <main id="main">
  <section class="inner-page">
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Book a <span>Table</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <form action="{{ route('reservation.reserve') }}" method="post" role="form" class="php-email-form">
          @csrf
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="@error('name')is-invalid @enderror form-control" id="name" placeholder="Your Name">
              @error('name')
                 <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="@error('phone')is-invalid @enderror form-control" name="phone" id="phone" placeholder="Your Phone">
              @error('phone')
                 <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input name="occasion" list="oclist" class="form-control" placeholder="Celebrating anything?" id="occasion">
              <datalist id="oclist">
                <option value="Birthday">
                <option value="Anniversary">
                <option value="Meeting">
                <option value="Reunion">
                  <option value="Party">
              </datalist>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" class="@error('people') is-invalid @enderror form-control" name="people" id="people" placeholder="# of people">
            </div>
                @error('people')
                   <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="date" class="@error('date')is-invalid @enderror form-control" id="datepicker" placeholder="Date">
                @error('date')
                   <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="@error('time') is invalid @enderror form-control" name="time" id="timepicker" placeholder="Time">
            </div>
                @error('time')
                   <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Confirm Reservation</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->
  </section>
</main>

  @endsection

@push('scripts')
  <script src="{{ asset('bookTable/js/jquery-3.5.1.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('bookTable/js/jquery-ui.min.js') }}" type="text/javascript"></script>  
  <script src="{{ asset('bookTable/js/timepicker.js') }}" type="text/javascript"></script>
  <script>
    $( "#datepicker" ).datepicker({
  dateFormat: "yy-mm-dd"
  });

    $('#timepicker').timepicker();

  </script>



@endpush