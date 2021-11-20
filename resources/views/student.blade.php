

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
