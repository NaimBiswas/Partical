@extends('dashboard')
@section('dContent')

@include(' include.error')

{{-- edit activity  --}}

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-3 ">
    <h2 class="m-4 text-gray-700 text-center uppercase font-bold">Add A Training Activity</h2>
</div>

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ">
    <form method="POST"
        enctype="multipart/form-data"
        action="{{ route('update-shedule', $FindData->id) }}">
        @csrf
        {{-- skill  --}}
        <div class="mb-4 mx-4">
            <x-jet-label for="skill"
                value="{{ __('Choose  Skill') }}" />

            <select class="block mt-1 w-full"
                name="skill"
                autofocus
                id="">
                <option value="">Select A Skill</option>
                <option selected
                    value="{{ $FindData->skill }}">{{ $FindData->skill }}</option>
                @foreach ($skill as $skill)
                <option value="{{$skill->name}}">{{$skill->name}}</option>
                @endforeach
            </select>
        </div>
        {{-- title  --}}
        <div class="mb-4 mx-4">
            <x-jet-label for="title"
                value="{{ __('Set Your Title') }}" />

            <x-jet-input id="title"
                class="block mt-1 w-full"
                type="text"
                name="title"
                value="{{ $FindData->title }}"
                required
                autofocus />

        </div>
        {{-- description  --}}
        <div class="mb-4 mx-4">
            <x-jet-label for="description"
                value="{{ __('Put Your Description') }}" />

            <textarea id="description"
                class="block mt-1 w-full"
                type="text"
                name="description"
                required
                autofocus>
            {{ $FindData->description }}"
            </textarea>

        </div>
        {{-- start date  --}}
        <div class="flex flex-wrap justify-between">

            <div class="mb-4 mx-4 grid-cols-6">
                <x-jet-label for="start_date"
                    value="{{ __('Set Start Date') }}" />
                <x-jet-input id="start_date"
                    class="block mt-1 w-full"
                    type="date"
                    name="start_date"
                    value="{{ $FindData->start_date }}"
                    required
                    autofocus />
            </div>
            {{-- start Date  --}}
            <div class="mb-4 mx-4">
                <x-jet-label for="end_date"
                    value="{{ __('Choose  End Date') }}" />
                <x-jet-input id="end_date"
                    class="block mt-1 w-full  "
                    type="date"
                    name="end_date"
                    value="{{ $FindData->end_date }}"
                    required
                    autofocus />
            </div>

        </div>
        {{-- Participants --}}
        <div class="mb-4 mx-4">
            <x-jet-label for="skill"
                value="{{ __('Choose  Participants') }}" />

            <select class="block mt-1 w-full"
                multiple
                name="participants[]"
                autofocus
                id="">
                <option value="">Select Participants</option>
                <option selected
                    value="{{ $FindData->participants }}">{{ $FindData->participants }}</option>
                @foreach ($competitorData as $item)
                <option value="{{$item->name}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit"
            class="my-2 mx-4  mb-5 bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Update Activity
        </button>

    </form>
</div>
@endsection
