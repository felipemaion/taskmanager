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
                        
                    @endif
                    </div>
                    
 
                        @if (Auth::check())
                            <div class="status">
                                <p> Logged as {{ Auth::user()->name; }}</p>
                            </div>
                        @else
                            <div class="status">
                                <p><strong>Not logged</strong></p>
                            </div>
                        @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
