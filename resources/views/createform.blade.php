@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="row ml-4">
                    <form action="{{ url('/forms/save') }}" method="POST">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="fname">First Name</label>
                          <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="lname">Last Name</label>
                          <input type="text" name="lname" id="lname" class="form-control" placeholder="Second Name">
                        </div>
                      </div>
                      <div class="form-row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                      </div>
                      <div class="form-row">
                        <label for="dob" class="col-form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth">
                      </div>  
                      <div class="form-row py-3">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                      </div>                   
                    </form>
                   </div>
                         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
