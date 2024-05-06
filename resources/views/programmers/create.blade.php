@extends('programmers.app')
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
        <form action="{{route('programmers.store')}}" method="get">
            @csrf
            <label>Имя:</label>
            <input type="text" name="name" class="form-control">
            <label>Фамилия:</label>
            <input type="text" name="surname" class="form-control">
            <label>Курс:</label>
            <input type="text" name="course" class="form-control">
            <label>Email:</label>
            <input type="text" name="email" class="form-control">
            <label>Телефон:</label>
            <input type="text" name="phone" class="form-control">
            <label>professional_title:</label>
            <input type="text" name="professional_title" class="form-control">
            <label>experience:</label>
            <input type="text" name="experience" class="form-control">
            <label>education:</label>
            <input type="text" name="education" class="form-control">
            <label>skills:</label>
            <input type="text" name="skills" class="form-control">
            <input type="submit" value="Добавит" class="btn btn-info">
        </form>
    </div>

@endsection

@section('footer')
@endsection
