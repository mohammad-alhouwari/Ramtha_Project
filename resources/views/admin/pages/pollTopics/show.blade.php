@extends('admin.layouts.master')
@section('title', 'Projects')
@section('content')
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.css" rel="stylesheet">
    @php
        $R1 = 0;
        $R2 = 0;
        $R3 = 0;
        $R4 = 0;
        $R5 = 0;
        $count = 0;
        $AVGcss ='';
    @endphp
    @foreach ($polls as $poll)
        @php
            $count++;
            if ($poll->rating == 5) {
                $R5++;
            } elseif ($poll->rating == 4) {
                $R4++;
            } elseif ($poll->rating == 3) {
                $R3++;
            } elseif ($poll->rating == 2) {
                $R2++;
            } elseif ($poll->rating == 1) {
                $R1++;
            }
        @endphp
    @endforeach
    @php
        if ($count) {
            $AVG = (($R2 * 2.5 + $R3 * 5 + $R4 * 7.5 + $R5 * 10) / $count) * 10;
            $AVG100 = 100 - $AVG;
            if ($AVG > 80) {
                $AVGcss = 'strongly-agree';
            } elseif ($AVG > 60) {
                $AVGrsult = 'موافق';
            } elseif ($AVG > 40) {
                $AVGcss = 'neutral';
            } elseif ($AVG > 20) {
                $AVGcss = 'disagree';
            } else {
                $AVGcss = 'strongly-disagree';
            }
        }
    @endphp
    <div class="content-wrapper">
        <div class="content">
            <div class="card card-default">
                <div class="card-header justify-content-center">
                    <h1>{{ $pollTopic->title }}</h1>
                </div>
                <div class="text-center">
                    <sup class="text-secondary">{{ $pollTopic->end_date }}</sup>
                </div>

                <div class="card-body text-center">
                    <img width="50%" src="{{ url($pollTopic->image) }}" alt="{{ $pollTopic->title }}">
                    <p class="h5 mt-3">{{ $pollTopic->description }}</p>
                </div>
            </div>
            <div class="card card-default p-3 px-5">
                <div class="d-flex justify-content-between mb-2">
                    <p>({{ $R1 }})-Strongly Disagree</p>
                    <p>({{ $R2 }})-Disagree</p>
                    <p>({{ $R3 }})-Neutral</p>
                    <p>({{ $R4 }})-Agree</p>
                    <p>({{ $R5 }})-Strongly Agree</p>
                </div>
                <div class="poll-progress-bar border border-primary d-flex" style="height: 17px;">
                    @if ($count)
                        <div class="bg-transparent h-100" style="width: {{ $AVG }}%;"></div>
                        <div class="d-inline-block bg-light h-100" style="width: {{ $AVG100 }}%"></div>
                    @else
                        <div class="d-inline-block bg-light h-100 w-100"></div>
                    @endif
                </div>
                <div class='text-center'>
                     @if ($count)
                        <h3 class="{{$AVGcss}}">{{ $AVG }}%</h3>
                    @else
                        <p class="text-secandry">No one has participated in the <b>Poll</b> yet</p>
                    @endif
                </div>
            </div>
            <div class="card card-default">
                {{-- <div class="card-header">
                    <h4>Manage Polls</h4>
                    <a href="{{ route('pollTopics-admin.index') }}" class="mb-1 btn btn-outline-primary">
                        <i class=" mdi mdi-checkbox-marked-outline mr-1"></i>
                        back
                    </a>
                </div> --}}
                <div class="card-body table-responsive">
                    <table id="polls" class="display">
                        <thead>
                            <tr>
                                <th>national_id</th>
                                <th>rating</th>
                                <th>user_message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($polls as $poll)
                                <tr>
                                    <td>{{ $poll->national_id }}</td>
                                    <td>{{ $poll->rating }}</td>
                                    <td>{{ $poll->user_message }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            let table = $('#polls').DataTable({});
        });
    </script>
@endsection
