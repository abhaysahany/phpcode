<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <table class="table table-bordered">
                    <thead>
                        <th>S.no</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
                         include('dbcon.php');

                         $query = "SELECT * FROM `users`";
                         $run = mysqli_query($con, $query);
                         $row = mysqli_num_rows($run);
                         if ($row > 0) {
                            $i = 1;
                            while($data = mysqli_fetch_assoc($run)){
                                ?>
                                  <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $data['name'] ?></td>
                                    <td><?php echo $data['mobile'] ?></td>
                                    <td><?php echo $data['email'] ?></td>
                                    <td><?php echo $data['password'] ?></td>
                                    <td><a href="update.php?id=<?php echo $data['id'] ?>">Update</a></td>
                                    <td><a href="delete.php?id=<?php echo $data['id'] ?>">Delete</a></td>
                                  </tr>  
                                <?php
                                $i++;
                            }
                         }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>