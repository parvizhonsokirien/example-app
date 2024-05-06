@extends('layouts.app')
@section('title')
    Добавления студента
@endsection

@section('content')
    <div class="container">
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <form action="{{route('students.store')}}" method="get">
            @csrf
        <label>Имя:</label>
        <input type="text" name="name" class="form-control">
        <label>Фамилия:</label>
        <input type="text" name="surname" class="form-control">
        <label>Курс:</label>
        <input type="text" name="course" class="form-control">
        <label>Телефон:</label>
        <input type="text" name="phone" class="form-control">
        <input type="submit" value="Добавит" class="btn btn-info">
        </form>
    </div>

@endsection

@section('footer')
@endsection
