@extends('styles.master')
@section('content')

    <body>
        <div class="card-header mt-5" style="margin:30px">
            <h1>Student Registration</h1>
        </div>
        <div class="card-body mt-4" style="margin:30px">
            <!-- <button class="form-control btn btn-primary mb-2" style="width:300px;"  href = "students/create" >Add Student</button> -->
            <a href="{{ asset('student/create') }}">Add Student</a>
            <table class = "table">
                <tr>
                    <th>Student Name</th>
                    <th>Student Address</th>
                    <th>School</th>
                    <th>Phone Number</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
                @foreach ($students as $student)
                <tr>
                    <td>{{$student->StuName}}</td>
                    <td>{{$student->StuAddress}}</td>
                    <td>{{$student->School}}</td>
                    <td>{{$student->PhoneNumber}}</td>
                    <td>{{$student->Description}}</td>
                    <td>
                        <a href="{{route('student.edit', ['student' => $student])}}">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('student.delete',['student'=>$student])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
@endsection
