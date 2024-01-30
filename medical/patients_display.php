<?php
    require_once('config.php');

    $sql = "SELECT * FROM medical";
    $run = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if(!$run){
        echo "Query not executed!";
        die();
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Patients Records</title>
    </head>
    <body>
       <div class="container mt-5 col-md-6 offset-md-3 border">
    <?php if (mysqli_num_rows($run) > 0) : ?>
    <?php while ($row = mysqli_fetch_array($run)) : ?>
        <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label">ID:</label>
            <div class="col-sm-10">
               <?php  echo $row['id'];?>
            </div>
        </div>
        <div class="form-group row">
            <label for="patientName" class="col-sm-2 col-form-label">Patient Name:</label>
            <div class="col-sm-10 mt-2">
                <?php  echo $row['patientName'];?>
            </div>
        </div>
        <div class="form-group row">
            <label for="dob" class="col-sm-2 col-form-label">Date of Birth:</label>
            <div class="col-sm-10 mt-2">
                                <?php  echo $row['dob'];?>

            </div>
        </div>
        <div class="form-group row">
            <label for="gender" class="col-sm-2 col-form-label">Gender:</label>
            <div class="col-sm-10 mt-2">
                <select name="gender" class="form-control">
                    <option value="male"> <?php echo $row['gender']; ?></option>
                    <option value="female"> <?php echo $row['gender']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Address:</label>
            <div class="col-sm-10 mt-2">
             <?php echo $row['address']; ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="contact" class="col-sm-2 col-form-label">Contact:</label>
            <div class="col-sm-10 mt-2">
                <?php echo $row['contact']; ?>
            </div>
        </div>
       <div class="form-group row">
    <label for="photo" class="col-sm-2 col-form-label">Photo:</label>
    <div class="col-sm-8">
        <img src="uploads/<?php echo $row['photo']; ?>" alt="" class="img-thumbnail" style="max-width: 200px;">
    </div>
    <div class="col-sm-2 mt-5">
        <form action="delete_entry.php" method="POST">
            <input type="hidden" name="entry_id" value="<?php echo $row['id']; ?>">
            <button type="submit" class="btn btn-danger" name="delete_entry">Delete</button>
        </form>
    </div>
</div>

         <?php endwhile; ?>
          <?php else : ?>
            <div class="card-body text-center mt-5">
                <img src="assets/empty.svg" height="100px">
                <br><br>
                <h3 class="display-6">Oops! Nothing is here.</h3>
                <p class="lead">Currently no products here to display.</p>
                <a href="add_patients.php" class="btn btn-info">Add Product</a>
            </div>
        <?php endif; ?>
</div>
<hr>
    </body>
    </html>