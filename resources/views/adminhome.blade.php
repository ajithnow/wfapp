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
                <div class="row m-4">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Form Name</th>
                            <th scope="col">Added By</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($forms as $form)
                            <tr>
                                <td>{{$form->fname}}</td>
                                <td>@foreach ($users as $user)
                                        @if ($user->id == $form->user_id )
                                            {{ $user->name }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>@foreach ($status as $stat)
                                    @if ($stat->id == $form->status_id )
                                        {{ $stat->name }}
                                    @endif
                                @endforeach
                                </td>
                                <td>
                                    <a href="{{url('/forms/edit')}}/{{$form->id}}">Edit</a>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
