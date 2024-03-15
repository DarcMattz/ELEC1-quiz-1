<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <form action="" method="post">
        @csrf

        Name
        <input type="text" name="name"><br>
        @error('name')
            <p style="color: red">{{ $message }}</p>
        @enderror

        Email
        <input type="text" name="email"><br>
        @error('email')
            <p style="color: red">{{ $message }}</p>
        @enderror

        Password
        <input type="text" name="password"><br>
        @error('password')
            <p style="color: red">{{ $message }}</p>
        @enderror

        <input type="submit" value="REGISTER">
    </form>
</body>

</html>
