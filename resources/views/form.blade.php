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
                        <tr>
                            <th scope="row">1</th>
                            <td>Aung Aung</td>
                            <td>Kaung Kaung</td>
                            <td>16</td>
                            <td>Computer Science</td>
                            <td>
                                <button @class('btn btn-warning')>Edit</button>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">1</th>
                            <td>Aung Aung</td>
                            <td>Kaung Kaung</td>
                            <td>16</td>
                            <td>Computer Science</td>
                            <td>
                                <button @class('btn btn-warning')>Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Aung Aung</td>
                            <td>Kaung Kaung</td>
                            <td>16</td>
                            <td>Computer Science</td>
                            <td>
                                <button @class('btn btn-warning')>Edit</button>
                            </td>
                        </tr>

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

                    <form>


                        <div class="mb-3">
                            <label for="CNE" class="form-label">CNE</label>
                            <input type="number" class="form-control" id="CNE">
                        </div>
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstname" >

                        </div>
                        <div class="mb-3">
                            <label for="secondname" class="form-label">Second Name</label>
                            <input type="text" class="form-control" id="secondname" >

                        </div>

                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" class="form-control" id="age">
                        </div>

                        <div class="mb-3">
                            <label for="speciality" class="form-label">Speciality</label>
                            <input type="text" class="form-control" id="speciality" >

                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="submit" class="btn btn-warning">Reset</button>
                    </form>

                </div>
            </div>



        </div>

    </div>
</div>
