<?php
    require_once("holder.php");
    require_once("sorting.php");
    $class1 = new RegisterPatient;
    $class2 = new Sorting;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Online Consultation Website</title>
</head>
<body class="bg-info">
    <header class="p-3 mb-2 bg-dark text-white text-center">
        <h1>Online Consultation</h1>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h1 class="text-center">Registration Form</h1>
                        </div>
                        <div class="card-body">
                            <!-- Form -->
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name">
                                </div>
                                <div class="form-group">
                                    <label>Age</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Age" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="age">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Enter Your Address">
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select id="gender" name="gender" class="form-control">
                                        <option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                        </option>
                                    </select>
                                </div>
                                <input class="btn btn-outline-success com-sm-1 m-1" type="submit" value="Submit">
                                <input class="btn btn-outline-primary" type="reset" value="Delete">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card">
                <?php
                if (isset($_POST['name'])){
                    $class1->start();
                    $class2->sort_and_show();
                }
                ?>
            </div>
        </div>
    </main>
</body>
</html>
