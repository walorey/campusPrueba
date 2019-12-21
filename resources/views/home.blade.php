@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (Auth::user()->type=='admin')

                  @include('admin.homeAdmin')

                @else
                  @include('user.home')
                @endif


            </div>
        </div>
    </div>
</div>
@endsection
