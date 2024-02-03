<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Register</h1>
    <form method="POST" action="{{ route('register.store') }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <p>{{ $message }}</p>
        @enderror
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>

        <button type="submit">Daftar</button>
    </form>
</body>

</html>
