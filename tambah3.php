<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">

      <title>Tambah Data</title>
</head>
<body>
<form action="proses3.php" method="post" name="formValidation" id="formValidation">
    <div class="container">
    <tr>
            
            <td><input type="text" name ="first_name" id="first_name" placeholder="First Name" required></td>
            
        </tr>
        <tr>
            
            <td><input type="text" name ="last_name" id="last_name" placeholder="Last Name" required></td>
            
        </tr> 
        <tr>
            
            <td><input type="text" name ="email" id="email" placeholder="Email" required></td>
            
        </tr>
        <tr>
            
            <td><input type="text" name ="phone" id="phone" placeholder="Phone" required></td>
           
        </tr>
        <tr>
            
            <td><input type="text" name ="address" id="address" placeholder="Address" required></td>
            
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value ="Submit" id="submit">
            </td>
          </tr>
          </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>

</body>
</html>



