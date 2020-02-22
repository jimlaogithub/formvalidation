<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>

    <style>
        input {
            width: 100%;
        }

        .card-header{
            background: #007bff;
        }
        .card {
            background: #f5f5f5;
        }

        input {
            opacity:30%;
        }
        input:hover {
            opacity: 100%;
        }
        select {
            opacity:30%;
        }
        select:hover {
            opacity: 100%;
        }
        button {
            width: 100%;
        }

    </style>
</head>
<body>
    <div class="container-fluid">
            <div class="row">
                <div class="col-md"></div>
                <div class="col-md">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>FORM</h5>
                    </div>
                        <div class="card-body">
                            <h5 class="card-title text-center text-primary">Please fill all boxes</h5>
                            
                            <form method="post" action="formData.php">
                                <div class="form-group">
                                    <label class="text-success">Last Name</label>
                                    <input type="text" class="form-control" name="lastname">
                                </div>

                                <div class="form-group">
                                    <label class="text-success">First Name</label>
                                    <input type="text" class="form-control" name="firstname">
                                </div>

                                <div class="form-group">
                                    <label class="text-success">Middle Name</label>
                                    <input type="text" class="form-control" name="middlename">
                                </div>

                                <div class="form-group">
                                    <label class="text-success">Address</label>
                                    <input type="text" class="form-control" name="address">
                                </div>

                                <div class="form-group">
                                    <label class="text-success">Birthday</label>
                                    <input type="date" class="form-control text-success" name="DOB">
                                </div>

                                <div class="form-group">
                                    <label class="text-success">Place of birth</label>
                                    <input type="text" class="form-control" name="POB">
                                </div>

                                <fieldset class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label col-sm-2 pt-0 text-success">Sex</legend>
                                        <div class="col-sm-10">
                                            
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" value="male">
                                                <label class="form-check-label text-success">Male</label>
                                            </div>
                                            <div class="form-check disabled">
                                                <input class="form-check-input" type="radio" name="gridRadios" value="female">
                                                <label class="form-check-label text-success">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group">
                                    <label class="text-success">Guardian</label>
                                    <input type="text" class="form-control" name="guardian">
                                </div>

                                <div class="form-group">
                                    <label class="text-success">Contact Number</label>
                                    <input type="text" class="form-control" name="contact">
                                </div>

                                <div class="form-group">
                                    <label class="text-success">Civil Status</label>
                                    <input type="text" class="form-control" name="status">
                                </div>

                                <div class="form-group">
                                    <label class="my-1 mr-2 text-success" for="inlineFormCustomSelectPref">Year Level</label>
                                    <select class="custom-select my-1 mr-sm-2 text-success" id="inlineFormCustomSelectPref" name="year">
                                        <option value="0">First Year</option>
                                        <option value="1">Second Year</option>
                                        <option value="2">Third Year</option>
                                        <option value="3">Fourth Year</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="my-1 mr-2 text-success" for="inlineFormCustomSelectPref">Course</label>
                                    <select class="custom-select my-1 mr-sm-2 text-success" id="inlineFormCustomSelectPref" name="course">
                                        <option value="0">BSIT</option>
                                        <option value="1">BSCE</option>
                                        <option value="2">BSTCM</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="text-success">School Year</label>
                                    <input type="text" class="form-control" name="SY">
                                </div>

                                <div class="form-group">
                                    <label class="text-success">Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md"></div>
            </div>
    </div>

   
</body>
</html>