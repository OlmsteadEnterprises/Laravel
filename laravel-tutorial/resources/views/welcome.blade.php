@extends('layouts.main')
@section('content')
    <br>
    <h1 align="center">Home Page</h1>

    <div class="container">
        @if(session('successMsg'))
            <div class="alert alert-success" role="alert">
                {{ session('successMsg') }}
            </div>
        @endif
        <table class="table">
            <thead class="black white-text">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        <a class="btn btn-raised btn-primary btn-sm" href="{{ route('edit', $student->id) }}"><i
                                class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                        ||



                        <form id="delete-form-{{ $student->id }}"
                              action="{{ route('delete', $student->id) }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        <button onclick="if (confirm('Are you sure you want to delete this user?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{ $student->id }}').submit();
                            } else {
                            event.preventDefault();
                            }" class="btn btn-raised btn-danger btn-sm" href=" "><i class="fa fa-trash"
                                                                                    aria-hidden="true"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="container">
            {{ $students->links() }}
        </div>

    </div>



    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br>
@endsection
