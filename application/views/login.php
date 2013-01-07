<!DOCTYPE HTML>
<html>

    <body>
        <h3>Enter your details to login</h3>
        <?php echo validation_errors(); ?>

        <?php echo form_open('logincontroller/checkLogin'); ?>

        Username: 
        <input type="text" name="username"/> <br /> <br>
        Password: 
        <input type="password" name="password"/> <br /> <br>

        <input type="submit" value="Login" name="submit"/>

    </body>
</html>