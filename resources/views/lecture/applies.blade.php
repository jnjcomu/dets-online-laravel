@extends('layouts.skeleton')
@section('title', 'APPLIES')

@section('contents')
    <navbar current-page="lecture-applies"></navbar>
    <div class="container">
        <h1>신청 강의 목록</h1>
        <p>각 강의를 눌러서 수정할 수 있습니다</p>
        <br>

        <table class="table">
            <thead>
            <tr>
                <th>강의명</th>
                <th>강사명</th>
                <th>최대 인원</th>
                <th>현재 인원</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($lectures as $lecture)
                <tr>
                    <td>{{$lecture['teacher_name']}}</td>
                    <td>{{$lecture['lecture_name']}}</td>
                    <td>{{$lecture['max_persons']}}</td>
                    <td>{{$lecture['min_persons']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection