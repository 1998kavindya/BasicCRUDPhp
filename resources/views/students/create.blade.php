@extends('styles.master')
@section('content')
<body>
    <div class="card-header m-3">Add Student</div>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <div class="card-body m-5">
        <form method="post" action="{{route('student.store')}}">
            @csrf
            @method('post')
            <div class="row">
                <div class="col-6" >
                    <label >Student Name</label>
                    <input type="text" class="form-control mt-2" name="StuName" >
                    <label >Address</label>
                    <input type="text" class="form-control mt-2" name="StuAddress">
                    <label >School</label>
                    <input type="text" class="form-control mt-2" name="School">
                    <label >Phone Number</label>
                    <input type="text" class="form-control mt-2" name="PhoneNumber">
                    <label >Description</label>
                    <input type="text" class="form-control mt-2" name="Description">

                    <input type="submit" value="Save A New Student" class = "form-control mt-2 btn btn-success"/>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
