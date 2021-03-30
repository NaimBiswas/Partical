@extends('dashboard')
@section('dContent')





<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-3 ">
    <h2 class="m-4 text-gray-700 text-center uppercase font-bold">Add A Skill</h2>
</div>

@include(' include.error')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ">

    <form method="POST"
        action="{{ route('add-skill') }}">
        @csrf
        <div class="mb-4 mx-4">
            <x-jet-label for="name"
                value="{{ __('Set Your Skill Name') }}" />

            <x-jet-input id="name"
                class="block mt-1 w-full"
                type="text"
                name="name"
                :value="old('title')"
                required
                autofocus />

        </div>
        <button type="submit"
            class="my-2 mx-4  mb-5 bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add Skill
        </button>

    </form>
</div>
@endsection
