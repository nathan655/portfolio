@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h2>{{$projectmixed[0]->projects->title}}</h2>
        <ul class="list-unstyled">
            <li><span class="font-weight-bold">Course</span>
                <p>{{$projectmixed[0]->projects->course}}</p></li>
            <hr class="w-50 ml-0">
            <li>
                <span class="font-weight-bold">Who was involved?:</span>
                <ul class="list-unstyled">
                    @foreach($projectmixed as $projecty)
                        <li><a href="{{$projecty->involveds->link}}">{{$projecty->involveds->name}}</a></li>
                    @endforeach
                </ul>
            </li>
            <hr class="w-50 ml-0">
            <li><strong>Goal</strong>
                <p></p>{{$projectmixed[0]->projects->goal}}</li>
            <hr class="w-50 ml-0">
            <li><strong>Where:</strong>
                <p></p>{{$projectmixed[0]->projects->where}}</li>
            <hr class="w-50 ml-0">
            <li><strong>Learnt</strong>
                <ul>@foreach($learnt as $learn)
                        <li>{{$learn->learnt}}</li>
                    @endforeach</ul>
            </li>
            <hr class="w-50 ml-0">
            <li>
                <strong>Involvement</strong>
                <ul>@foreach($involvement as $inv)
                        <li>{{$inv->involvement}}</li>
                    @endforeach</ul>
            </li>
            <hr class="w-50 ml-0">
            <li>
                <strong>Softskills</strong>
                <ul>@foreach($softskills as $inv)
                        <li>{{$inv->skills}}</li>
                    @endforeach</ul>
            </li>
            <hr class="w-50 ml-0">
            <li>
                <strong>Hardskills</strong>
                <ul>@foreach($hardskills as $inv)
                        <li>{{$inv->skills}}</li>
                    @endforeach</ul>
            </li>
            <hr class="w-50 ml-0">
        </ul>
        @include('footer')
    </div>

@endsection
