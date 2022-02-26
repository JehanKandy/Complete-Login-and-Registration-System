<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style>
        fieldset{
            width: 15%;
        }
        h5{
            color: red;
        }
        p{
            font-size:12px;
        }    
    </style>
        
</head>
<body>
    <center>
        <fieldset>
            <legend>Login</legend>
                <h5>* require</h5>

            <form action="login.php" method="POST">
                <table border="0">
                    <tr>
                        <td>
                            <label>Username : </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="user" id="user" placeholder="Username" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Password : </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="pass" id="pass" placeholder="Password" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p> Don't have an account? <a href="reg.php">Create One</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <input type="submit" value="Login" class="btn btn-primary">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </center>
</body>
</html>