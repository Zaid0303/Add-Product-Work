<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <h1>ADD YOUR PRODUCTS</h1>
        <div class="row">
            <div class="col-md-6">
                <!------------------- form start ------------------>
                <form action="proinsert.php" method="POST" enctype="multipart/form-data" class="mt-4">
                    <label for="">Product Name</label>
                    <input type="text" name="pname" class="form-control" required>
                    <br>
                    <label for="">Description</label>
                    <input type="text" name="pdes" class="form-control" required>
                    <br>
                    <label for="">Price</label>
                    <input type="text" name="price" class="form-control" required>
                    <br>
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" required>

                    <!------------------- Button ------------------>
                    <input type="submit" name="addproduct" value="Add Product" class="btn btn-dark mt-4">
                    <!------------------- Button ------------------>
                </form>
                <!------------------- form end ------------------>
            </div>

            <br>

            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                            <th>Date/Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Iphone</td>
                            <td>Mobile</td>
                            <td>80,000</td>
                            <td>Image</td>
                            <td>Active</td>
                            <td>21-11-2023</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>