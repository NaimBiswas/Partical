@extends('dashboard')
@section('dContent')
@include('include.error')
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex justify-between mb-5">
    {{-- activity register Only can access expert Member  --}}
    @if (Auth::user()->profile === 'expert')
    <h2 class="m-4 text-gray-700">Register A Training Activity</h2>

    <a href="{{Route('register-activity')}}"
        class="my-2 mx-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Add Activity
    </a>
    @endif

</div>
{{-- skill  register only can access board member  --}}
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex justify-between mb-5">
    @if (Auth::user()->profile === 'board')
    <h2 class="m-4 text-gray-700">Register A Skill</h2>

    <a href="{{Route('skill')}}"
        class="my-2 mx-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Add Skill
    </a>
    @endif

</div>

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ">

    <h2 class="m-4 text-gray-700 text-center">Show All Shedule</h2>


    <table class=" m-auto mb-5">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Skill</th>
                <th class="px-4 py-2">Start Date</th>
                <th class="px-4 py-2">End Date</th>
                <th class="px-4 py-2">Participants</th>
                {{-- only expert can access this action  --}}
                @if (Auth::user()->profile == 'expert')
                <th class="px-4 py-2">Action</th>
                @endif
            </tr>


        </thead>
        <tbody>
            <?php $i = ''; ?>
            @foreach ($data as $item)



            <tr>
                <td class="border px-4 py-2"><?php echo ++$i;  ?></td>
                <td class="border px-4 py-2">{{$item->title}}</td>
                <td class="border px-4 py-2">{{$item->skill}}</td>
                <td class="border px-4 py-2">{{$item->start_date}}</td>
                <td class="border px-4 py-2">{{$item->end_date}}</td>
                <td style="width: 100px"
                    class="border px-4 py-2">


                    {{$item->participants}}


                </td>
                @if (Auth::user()->profile == 'expert')
                <td class="border px-4 py-2 mt-2">
                    <a href="{{Route('edit-shedule' , $item->id)}}"
                        class=" my-2 mx-2 bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-5">
                        Edit
                    </a>

                    <a href="{{Route('detele-activity', $item->id)}}"
                        class="my-2 mx-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Delete
                    </a>


                </td>
                @endif
            </tr>
            @endforeach

        </tbody>
    </table>

</div>


@if (Auth::user()->profile !== 'competitor')


{{-- skill table here  --}}
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-5">

    <h2 class="m-4 text-gray-700 text-center">Show All Skill</h2>


    <table class=" m-auto mb-5 ">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Skill Id</th>

                <th class="px-4 py-2">Skill</th>
                @if (Auth::user()->profile == 'board')
                <th class="px-4 py-2">Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            <?php $i = ''; ?>
            @foreach ($skills as $skill)

            <tr>
                <td class="border px-4 py-2"><?php echo ++$i;  ?></td>
                <td class="border px-4 py-2">{{$skill->id}}</td>
                <td class="border px-4 py-2">{{$skill->name}}</td>
                @if (Auth::user()->profile == 'board')
                <td class="border px-4 py-2 mt-2">
                    {{-- delete skill  --}}
                    <a href="{{Route('detele-skill', $skill->id)}}"
                        class="my-2 mx-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Delete
                    </a>
                </td>
                @endif
            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endif
@endsection
