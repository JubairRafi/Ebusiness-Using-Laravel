<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>

<body>
    <ul>
        <li><a href="/">Home</a></li>

        <li>
            <div class="dropdown">
                <div class="dropbtn">Sign Up</div>
                <div class="dropdown-content">
                    <a href="/signup/member">Member</a><br>
                    <a href="/signup/admin">Admin</a>
                </div>
            </div>
        </li>
    </ul>
    <form method="post">
    {{csrf_field()}}
        <fieldset>
            <legend>Login Form</legend>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>