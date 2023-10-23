<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Applications</title>

    <span class="pln">
</span><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic"><span class="pln">
</span><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"><span class="pln">
</span><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css"><span class="pln">
</span>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container my-4 my6 p-4 shadow">
        <h2 class="mt5"><a style="text-decoration: none;" href="index.php">Demo Student Database</a></h2>

        <form class="form" action="" method="post" enctype="multipart/form-data">
            <input class="form-control mb-2" type="text" name="std_name" placeholder="Enter Your Name">
            <input class="form-control mb-2" type="number" name="std_roll" placeholder="Enter Your Roll">
            <label for="image">Upload Your Image</label>
            <input class="form-control mb-2" type="file" name="std_img">
            <input type="submit" value="Add Information" name="add_info" class="button button-outline">
        </form>
    </div>
    <div class="container my-4 p-4 shadow">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add your data here manually or using a dynamic language -->
            </tbody>
        </table>
    </div>
</body>
</html>