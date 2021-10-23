@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div class="text-center p-4">
                    <button type="button" class="btn btn-primary">
                      <a href="{{ url('forms/create') }}" style="text-decoration: none;color:white;">Add Form</a>
                    </button>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body" style="background-color:grey">
                              <h5 class="card-title">Draft</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                @if ($forms)
                                   @foreach($forms as $form)
                                      @if ($form->status_id == 1)
                                        <li class="list-group-item">{{$form->fname}}</li>
                                      @endif
                                   @endforeach
                                @endif
                            </ul>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body" style="background-color: gold">
                              <h5 class="card-title">In Review</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                              @if ($forms)
                                 @foreach($forms as $form)
                                    @if ($form->status_id == 2)
                                      <li class="list-group-item">{{$form->fname}}</li>
                                    @endif
                                 @endforeach
                              @endif
                            </ul>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body" style="background-color: mediumseagreen">
                              <h5 class="card-title">Approved</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                              @if ($forms)
                                 @foreach($forms as $form)
                                    @if ($form->status_id == 3)
                                      <li class="list-group-item">{{$form->fname}}</li>
                                    @endif
                                 @endforeach
                              @endif
                            </ul>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body" style="background-color: tomato">
                              <h5 class="card-title">Rejected</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                              @if ($forms)
                                 @foreach($forms as $form)
                                    @if ($form->status_id == 4)
                                      <li class="list-group-item">{{$form->fname}}</li>
                                    @endif
                                 @endforeach
                              @endif
                            </ul>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
