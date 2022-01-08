<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel ="stylesheet"  href="css/style.css">
</head>
<body>
    <div class="container">
        <form action= "php\create.php" method = "post">
            <h4 class="display-4 text-center">Create</h4><hr><br>
            <?php if(isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" name="name"
                    value="<?php if(isset($_GET['name']))
                    echo($_GET['name']); ?>"
                    id="name" 
                    placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control" name="email"
                value="<?php if(isset($_GET['email']))
                    echo($_GET['email']); ?>"
                    id="email" 
                    placeholder="Enter email">
            </div>
    
            <button type="submit" class="btn btn-primary" name="create">Submit</button>
        </form>
    </div>
</body>
</html>