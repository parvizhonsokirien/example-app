@extends('programmers.app')
@section('title')
    <h3>Programmist table</h3>
@endsection

@section('content')
    <table class="table">
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Эмайл</th>
            <th>Професионалый заголовок</th>
            <th>experience</th>
            <th>education</th>
            <th>skills</th>
            <th>delete</th>
            <th>update</th>
            <th>Additionally</th>
        </tr>
        @foreach($programmers as $programmer)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$programmer->first_name}}</td>
                <td>{{$programmer->last_name}}</td>
                <td>{{$programmer->email}}</td>
                <td>{{$programmer->phone}}</td>
                <td>{{$programmer->professional_title}}</td>
                <td>{{$programmer->experience}}</td>
                <td>{{$programmer->education}}</td>
                <td>{{$programmer->skills}}</td>
                <td>
                    <form action="{{route('programmers.destroy', $programmer->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value ="delete" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="{{route('programmers.edit', $programmer->id)}}" method="get">
                        @csrf
                        <input type="submit" value="update" class="btn btn-info">
                    </form>
                </td>
                <td>
                    <form action="{{route('programmers.show', $programmer->id)}}" method="get">
                        @csrf
                        <input type="submit" value="Additionally" class="btn btn-info">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
@endsection
