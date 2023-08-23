@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header">{{ __('Welcome') }} {{ Auth::user()->name }}</div> --}}
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>{{ __('Announcement') }}</span>
                        <form action="{{ route('announcements.search_tenant') }}" method="GET" class="mb-0">
                            <div class="input-group">
                                <input type="text" name="keyword" class="form-control"
                                    placeholder="Search by subject or details">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach ($announcements as $announcement)
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h4 class="card-title">{{ $announcement->subject }}</h4>
                                </div>

                                <div class="card-body">
                                    <p class="card-text">{{ $announcement->details }}</p>
                                </div>

                                <div class="card-footer text-muted">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <img style="width: 75px" src="{{ asset('image/gwapo1.jpg') }}" alt=""
                                                class="rounded-circle">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title">{{ $announcement->user->first_name }} {{ $announcement->user->last_name }}</h5>
                                            <p style="font-size: 14px">J and E Rentals and Property Owner</p>
                                            <p style="font-size: 12px">
                                                {{ $announcement->date_created->format('F d, Y | g:i A') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
