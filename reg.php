<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 

    <style>
        fieldset{
            width: 20%;
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
            <legend>Registration</legend>
            <h5>* require</h5>
        
            <form action="reg_action.php" method="POST" name="reg" onsubmit="return validation()">
                <table border="0">
                    <tr>
                        <td colspan="2"> 
                            <label>Username : </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="user" id="user" placeholder="Username" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label>Email : </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label>Password : </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="password" name="pass1" id="pass1" placeholder="Password" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Confirm Password : </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="password" name="pass2" id="pass2" placeholder="Confirm Password" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p>Already have an account? <a href="index.php">Login</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Register" class="btn btn-primary">
                        </td>
                        <td>
                            <input type="reset" value="Clear" class="btn btn-secondary">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </center>

    <script>
        //input feilds empty validetion
        function validation(){
            //get the value of username to user veriable
            var user = document.reg.user.value;
            
            //get the value of email to email veriable
            var email = document.reg.email.value;
            
            //get the value of pass1 to pass1 veriable
            var pass1 = document.reg.pass1.value;
            
            //get the value of pass2 to pass2 veriable
            var pass2 = document.reg.pass2.value;

            //cheack password and Confirm Password is equal or not
            if(pass1 != pass2){
                    alert("Password and Confirm Password doesn't match");
                    return false; 
            }


            //cheack all input feilds are empty

            if(user.length == "" && email.length == "" && pass1.length == "" && pass2.length == ""){
                alert("request feilds shouldn't be empty");
                return false;
            }
            else{
                if(user.length == ""){
                    alert("Username shouldn't be empty");
                    return false;
                }
                if(email.length == ""){
                    alert("Email shouldn't be empty");
                    return false;
                }
                if(pass1.length == ""){
                    alert("Password shouldn't be empty");
                    return false;
                }
                if(pass2.length == ""){
                    alert("Confirm Password shouldn't be empty");
                    return false;
                }
            }
        }
    </script>
</body>
</html>