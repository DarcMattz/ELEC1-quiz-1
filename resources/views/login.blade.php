<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="" method="post">
        @csrf

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

        @if (session('error'))
            <p style="color: red">{{ session('error') }}</p>
        @elseif (session('success'))
            <p style="color: red">{{ session('success') }}</p>
        @endif

        <input type="submit" value="LOGIN">
    </form>
</body>

</html>
