
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Company Update Profile</title>
    </head>
<style>
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 10px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  }

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


    input[type=submit] {
        background-color: green;
        color: white;
        padding: 8px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
        margin-right: 60px;
    }
    
    input[type=submit]:hover {
        background-color: blue;
    }
    
    input[type=reset] {
        background-color: green;
        color: white;
        padding: 8px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
        margin-right: 60px;
    }
    
    input[type=reset]:hover {
        background-color: blue;
    }
     .astrick{
  color: red;
}
.marq{
    color: red;
}
</style>

<body bgcolor="lightgray" style="align-self: right;">
    <center>
        <div>
            <fieldset style="background-color:  white; height: 800px; width: 600px;">
                <legend></legend>
                <h1 style="color: indigo;" class="hr">UPDATE PROFILE</h1><br><br><br>
                <img src="image.jpg">

                <form>

                    <table>

                        <tr class="table-row">
                            <td> Full Name :<span class="astrick">*</span></td>
                            <td><input type="text" name="name" placeholder="enter your full name"></td>
                        </tr>

                        <tr>
                            <td> Father's Name : <span class="astrick">*</span></td>
                            <td><input type="text" name="fname" placeholder="enter your company's id"></td>
                        </tr>
                        
                        <tr>
                            <td> Contact Number : <span class="astrick">*</span></td>
                            <td><input type="text" name="Contact_no" placeholder=" enter your contact number"></td>
                        </tr>
                        <tr>
                            <td>Email : <span class="astrick">*</span></td>
                            <td><input type="text" name="email" placeholder="Enter  email id"></td>
                        </tr>

                       
                    </table>
                     <table>
                   
                    </table><br>
                    <table>
                        <tr>
                            <td> <input type="submit" name="submit" value="Update"></td>
                            <td> </td>
                            <td><input type="reset" name="reset" value="reset"> </td>
                        </tr>
                    </table>

                </form>

        </div>
        </fieldset>
    </center>
  
        
</body>

</html>