@extends('dashboard')
@section('dContent')
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex justify-between mb-5">
    @if (Auth::user()->profile === 'expert')
    <h2 class="m-4 text-gray-700">Register A Training Activity</h2>

    <a href="{{Route('register-activity')}}"
        class="my-2 mx-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Add Activity
    </a>
    @endif
</div>

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ">
    @if (Auth::user()->profile === 'expert')
    <h2 class="m-4 text-gray-700 text-center">Show All Shedule</h2>


    <table class="table-auto m-auto mb-5">
        <thead>
            <tr>

                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Title</th>


                <th class="px-4 py-2">Skill</th>
                <th class="px-4 py-2">Start Date</th>
                <th class="px-4 py-2">End Date</th>
                <th class="px-4 py-2">Participants</th>
                <th class="px-4 py-2">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>

                <td class="border px-4 py-2">{{$item->id}}</td>
                <td class="border px-4 py-2">{{$item->title}}</td>
                <td class="border px-4 py-2">{{$item->skill}}</td>
                <td class="border px-4 py-2">{{$item->start_date}}</td>
                <td class="border px-4 py-2">{{$item->end_date}}</td>
                <td class="border px-4 py-2">{{$item->participants}}</td>
                <td class="border px-4 py-2 mt-2">
                    <a href="{{Route('register-activity')}}"
                        class=" my-2 mx-2 bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Edit
                    </a>

                    <a href="{{Route('register-activity')}}"
                        class="my-2 mx-2 bg-blue-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Update
                    </a>


                    <a href="{{Route('register-activity')}}"
                        class="my-2 mx-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Delete
                    </a>


                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    @endif
</div>
@endsection
