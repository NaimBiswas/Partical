@extends('dashboard')
@section('dContent')
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex justify-between">
    @if (Auth::user()->profile === 'expert')
    <h2 class="m-4 text-gray-700">Register A Training Activity</h2>

    <a href="{{Route('register-activity')}}"
        class="my-2 mx-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Add Activity
    </a>
</div>
@endif
@endsection
