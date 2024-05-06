@extends('programmers.app')
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
        <form action="{{route('programmer.update', $programmer)}}" method="get">
            @csrf
            @method('put')
            <label>Имя:</label>
            <input type="text" name="first_name" value="{{$programmer->first_name}}" class="form-control">
            <label>Фамилия:</label>
            <input type="text" name="last_name" value="{{$programmer->last_name}}" class="form-control">
            <label>Эмайл:</label>
            <input type="text" name="email" value="{{$programmer->email}}" class="form-control">
            <label>Телефон:</label>
            <input type="text" name="phone" value="{{$programmer->phone}}" class="form-control">
            <label>professional_title:</label>
            <input type="text" name="professional_title" value="{{$programmer->professional_title}}" class="form-control">
            <label>experience:</label>
            <input type="text" name="experience" value="{{$programmer->experience}}" class="form-control">
            <label>education:</label>
            <input type="text" name="education" value="{{$programmer->education}}" class="form-control">
            <label>skills:</label>
            <input type="text" name="education" value="{{$programmer->skills}}" class="form-control">

            <input type="submit" value="Update" class="btn btn-info">
        </form>
    </div>

@endsection

@section('footer')
@endsection
