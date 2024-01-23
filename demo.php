<!DOCTYPE html>
<head>
    <title>Simple Form Processing</title>
</head>

<Body>
    <form action="form_1.php" method="post">
        FirstName:
        <input type="text" name="firstname" required/>
        <br>
        <br>
        LastName
        <input type="text" name="lastname" required/>
        <br>
        <br>
        Address
        <input type="text" name="address" required/>
        <br>
        <br>
        Email Address:
        <input type="email" name="email" required/>
        <br>
        <br>
        Password:
        <input type="password" name="password" required/>
        <br>
        <br>
        <input type="submit" value=Submit>
    </form>
</body>
</html>