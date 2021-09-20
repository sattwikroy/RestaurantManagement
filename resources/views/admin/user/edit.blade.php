@extends('layouts.dash')

@section('title','Edit User')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="green">
                            <h4 class="title">Edit user</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('user.update',$user->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6 form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                        </div>
                                        <div class="col-md-6 form-group label-floating">
                                            <label class="control-label">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                                        </div>    
                                        <div class="col-md-6 form-group label-floating">
                                            <label class="control-label">Password</label>
                                            <input type="password" class="form-control" name="password" value="{{ $user->email }}">
                                        </div>
                                    </div>
                                </div>

                                <a href="{{ route('user.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush