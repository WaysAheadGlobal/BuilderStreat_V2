@extends('layouts.adminapp')

@section('content')
    @include('layouts.headers.cards')
    
    @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('chart.js/dist/Chart.extension.js') }}"></script>
@endpush