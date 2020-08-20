<?php
if($_POST["message"]) {
    mail("your@email.address", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>

<!DOCTYPE html>
<html>
<head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="stylefooter.css">
        </head>
        
<body>

    <div class="container-fluid ">
        <div class="row1">
        <div class="col-sm-6 addr">
            <h3>Contact Address:</h3>
            <p>No 150 A, Salai Main Road, Vikramasingapuram,</p>
            <p> Tirunelveli - 627425,</p>
            <p> Opposite Sardar Barotta Kada</p>
        </div>
        <div class="form-horizontal col-sm-6 contus">
            <h3>Contact us: </h3>
            
            <form>
                <div class="form-group">
                    <label for="usr">Name:</label>
                    <input type="text" class="form-control" id="usr">
                  </div>
            <div class="form-group">
                <label for="inputdefault">Email:</label>
                <input class="form-control" id="inputdefault" type="text">
            </div>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
        </div>
    </div>
</body>
</html>
    