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
                    <form action="{{ url('/forms/update/')}}/{{$form->id}}" method="POST">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="fname">First Name</label>
                          <input type="text" name="fname" value="{{$form->fname}}" id="fname" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="lname">Last Name</label>
                          <input type="text" name="lname" id="lname" value="{{$form->lname}}" class="form-control" placeholder="Second Name">
                        </div>
                      </div>
                      <div class="form-row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <input type="email" name="email" value="{{$form->email}}" class="form-control" id="inputEmail3" placeholder="Email">
                      </div>
                      <div class="form-row">
                        <label for="dob" class="col-form-label">Date of Birth</label>
                        <input type="date" class="form-control" value="{{$form->dob}}" name="dob" id="dob" placeholder="Date of Birth">
                      </div>
                      <div class="form-row p-2">
                        <label for="status" class="col-form-label">Status</label>
                        <select class="form-select" id="status" name="statusid" aria-label="Default select example">
                          @foreach ($status as $stat)
                            @if ($form->status_id == $stat->id)
                              <option selected value="{{$stat->id}}">{{ $stat->name }}</option>
                            @else
                            <option value="{{$stat->id}}">{{ $stat->name }}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>
                      <div class="form-row py-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>                   
                    </form>
                   </div>
                         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
