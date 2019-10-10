<?php
    include_once "connection.php";
    $query = mysqli_query($connection,"SELECT * FROM tbl_contact");
   
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>connection</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

      
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>firstname</th>
                            <th>lastname</th>
                            <th>email</th>
                            <th>gender</th>
                            <th>phone</th>
                            <th>profile</th>
                        </tr>
                        <?php
                        while($results=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $results["id"];?></td>
                            <td><?php echo $results["profile"];?></td>
                            <td><?php echo $results["firstname"]." ".$results["lastname"];?></td>
                            <td><?php echo $results["gender"];?></td>
                            <td><?php echo $results["email"];?></td>
                            <td><?php echo $results["phone"];?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
    </html>
