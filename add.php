<!DOCTYPE html>
<html>
    <head>
     <title>Awsome PXL DevOps App!</title>
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">PXL DevOps App</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.php">Home</a>
                    <a class="nav-item nav-link" href="add.php">Add employee</a>
				    <a class="nav-item nav-link" href="lambda.php">lambda aws</a>
                </div>
            </div>
        </nav>
        <form method="post" action="add.php">
            <div class="form-group">
                <label for="userId">User ID:</label>
                <input type="number" name="userId" id="userId" class="form-control" min="1000" required/>
            </div>
            <div class="form-group">
                <label for="firstName">First name:</label>
                <input type="text" name="firstName" id="firstName" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="lastName">Last name:</label>
                <input type="text" name="lastName" id="lastName" class="form-control" required/>
            </div>
            <input type="submit" value="toevoegen" name="submit" class="btn btn-primary"/>
        </form>
        <?php
        require_once('config.php');
        
        if(isset($_POST["userId"]) && isset($_POST['firstName']) && isset($_POST['lastName'])){
            $userId = $_POST["userId"];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];

            $insertQry = mysqli_query($conn,"INSERT INTO employees(emp_no, first_name, last_name) VALUES ('$userId', '$firstName', '$lastName')");
            if($insertQry)
                header("location: index.php");
            else 
                throw new Exception("Something went wrong with adding the data to the database");
        }
        ?>
    
        <script src="assets/js/bootstrap.min.js" ></script>
    </body>
</html>
