@extends('layouts.app')

@push('css')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

@endpush

@section('content')

  <main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Dashboard</h2>
        </div>
        </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <p>
        <h5>Welcome, {{Auth::user()->name}}, Here are your Resrvations</h5></p>
        <p>
           <div class="card-deck">
            @foreach($reservations as $key=>$reservation)
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="welcome\assets\img\bookings\{{ $key + 1 }}.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Reservation #{{ $key + 1 }}</h5>
                <p class="card-text">
                    @if ($reservation->status)
                        <span style="color: green" ><i class="material-icons">done_outline</i> Confirmed</span>
                    @else
                        <i class="material-icons">hourglass_empty</i> Waiting
                    @endif

                </p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Name : {{ $reservation->name }}</li>
                <li class="list-group-item"><i class="material-icons">date_range</i> {{ $reservation->date }} </li>
                <li class="list-group-item"><i class="material-icons">timer</i> {{ $reservation->time }}</li>
                <li class="list-group-item"><i class="material-icons">people_alt</i>  {{ $reservation->people }}</li>
              </ul>
              <div class="card-body">
                <form id="delete-form-{{ $reservation->id }}" action="{{ route('reservation.destory',$reservation->id) }}" style="display: none;" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                        event.preventDefault();
                        document.getElementById('delete-form-{{ $reservation->id }}').submit();
                    }else {
                        event.preventDefault();
                            }">Cancel</button>
              </div>
            </div>
            @endforeach
            </div>
        </p>
      </div>
    </section>

  </main><!-- End #main -->

  @endsection