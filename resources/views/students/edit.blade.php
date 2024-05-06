@extends('layouts.app')
@section('title')
    Изминение студента
@endsection

@section('content')
    <div class="container">
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <form action="{{route('student.update', $student)}}" method="get">
            @csrf
            @method('put')
            <label>Имя:</label>
            <input type="text" name="name" value="{{$student->name}}" class="form-control">
            <label>Фамилия:</label>
            <input type="text" name="surname" value="{{$student->surname}}" class="form-control">
            <label>Курс:</label>
            <input type="text" name="course" value="{{$student->course}}" class="form-control">
            <label>Телефон:</label>
            <input type="text" name="phone" value="{{$student->phone}}" class="form-control">
            <input type="submit" value="Update" class="btn btn-info">
        </form>
    </div>

@endsection

@section('footer')
@endsection
