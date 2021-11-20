@extends('layout.master')
@section('title','Student List')

@section('content')

    <div class="row text-center mb-5" style=" margin-right: 25rem !important;
    margin-left: 25rem !important;">
        <div class="header" style="border-bottom: 2px solid #00c9b7; margin-top: 3rem !important;">
            <h1 >Student Management System</h1>
        </div>
    </div>


    @if($layout == 'index')

    <div @class('container mt-4')>
        <div @class('row justify-content-center')>
            <section class="col-md-10">
                @include("student")
            </section>
        </div>
    </div>
    @elseif($layout == 'create')

        <div @class('container-fluid')>

            <div @class('row')>

                <div @class('col-md-7')>


                    <div class="card" >
                        <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: bolder;font-size: 1.8rem">List Of Students</h5>
                            <p class="card-text"  style="font-weight:bold;">You can find all the information about the students in the system</p>

                            <table @class('table')>


                                <thead @class('table-light') >
                                <tr>
                                    <th >CNE</th>
                                    <th >First Name</th>
                                    <th >Second Name</th>
                                    <th >Age</th>
                                    <th>Speciality</th>
                                    <th >Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <th scope="row">{{$student->cne}}</th>
                                        <td>{{$student->firstname}}</td>
                                        <td>{{$student->lastname}}</td>
                                        <td>{{$student->age}}</td>
                                        <td>{{$student->speciality}}</td>
                                        <td>
                                            <a href="{{url('/edit/'.$student->id)}}" @class('btn btn-warning')>Edit</a>
                                            <a href="{{url('/delete/'.$student->id)}}" @class('btn btn-danger')>Delete</a>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <div @class('col-md-5')>


                    <div class="card" >
                        <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-4"  style="font-weight: bolder;font-size: 1.8rem">Update Student Informations</h5>

                            <form action="{{ url('/store') }}" method="post">
                                @csrf
                                @foreach($errors->all() as $error)
                                    <p @class('alert alert-danger')>{{$error}}</p>
                                @endforeach



                                <div class="mb-3">
                                    <label for="CNE" class="form-label">CNE</label>
                                    <input name="cne" type="text" class="form-control" id="CNE">
                                </div>
                                <div class="mb-3">
                                    <label for="firstname" class="form-label">First Name</label>
                                    <input name="firstname" type="text" class="form-control" id="firstname" >

                                </div>
                                <div class="mb-3">
                                    <label for="secondname" class="form-label">Second Name</label>
                                    <input name="lastname" type="text" class="form-control" id="secondname" >

                                </div>

                                <div class="mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input name="age" type="number" class="form-control" id="age">
                                </div>

                                <div class="mb-3">
                                    <label for="speciality" class="form-label">Speciality</label>
                                    <input name="speciality" type="text" class="form-control" id="speciality" >

                                </div>

                                <button type="submit" class="btn btn-primary">Create</button>

                            </form>

                        </div>
                    </div>



                </div>

            </div>
        </div>

    @elseif($layout == 'show')

    @include('student')

    @elseif($layout == 'edit')

        <div @class('container-fluid')>
            <div @class('row')>
                <div @class('col-md-7')>


                    <div class="card" >
                        <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: bolder;font-size: 1.8rem">List Of Students</h5>
                            <p class="card-text"  style="font-weight:bold;">You can find all the information about the students in the system</p>

                            <table @class('table')>


                                <thead @class('table-light') >
                                <tr>
                                    <th >CNE</th>
                                    <th >First Name</th>
                                    <th >Second Name</th>
                                    <th >Age</th>
                                    <th>Speciality</th>
                                    <th >Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <th scope="row">{{$student->cne}}</th>
                                        <td>{{$student->firstname}}</td>
                                        <td>{{$student->lastname}}</td>
                                        <td>{{$student->age}}</td>
                                        <td>{{$student->speciality}}</td>
                                        <td>
                                            <a href="{{url('/edit/'.$student->id)}}" @class('btn btn-warning')>Edit</a>
                                            <a href="{{url('/delete/'.$student->id)}}" @class('btn btn-danger')>Delete</a>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <div @class('col-md-5') >


                    <div class="card" >
                        <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-4"  style="font-weight: bolder;font-size: 1.8rem">Update Student Informations</h5>

                            <form  action="{{ url('/update/'.$student->id) }}" method="post" >
                                @csrf



                                <div class="mb-3">
                                    <label for="CNE" class="form-label">CNE</label>
                                    <input name="cne" type="text" class="form-control" id="CNE" value="{{$student->cne}}">
                                </div>
                                <div class="mb-3">
                                    <label for="firstname" class="form-label">First Name</label>
                                    <input name="firstname" type="text" class="form-control" id="firstname"  value="{{$student->firstname}}">

                                </div>
                                <div class="mb-3">
                                    <label for="secondname" class="form-label">Second Name</label>
                                    <input name="lastname" type="text" class="form-control" id="secondname"  value="{{$student->lastname}}">

                                </div>

                                <div class="mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input name="age" type="number" class="form-control" id="age"  value="{{$student->age}}">
                                </div>

                                <div class="mb-3">
                                    <label for="speciality" class="form-label">Speciality</label>
                                    <input name="speciality" type="text" class="form-control" id="speciality"  value="{{$student->speciality}}">

                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{url('/edit/'.$student->id)}}"  class="btn btn-warning">Reset</a>
                            </form>

                        </div>
                    </div>



                </div>

            </div>
        </div>


    @endif


@endsection
