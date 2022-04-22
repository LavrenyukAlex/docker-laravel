
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
</head>
<body>
<h1>Регистрация</h1>
<hr>
<form class="col-3 offset-4 rounded" method="POST" action="{{ route('user.registration') }}">
    @csrf
    <div class="form-group">
        <label for="email" class="col-form-label-lg">Ваш email</label>
        <input class="form-control" id="email" type="text" value="" placeholder="Email">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password" class="col-form-label-lg">Ваш email</label>
        <input class="form-control" id="password" name="password" type="password" value="" placeholder="Password">
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-lg btn-primary" type="submit" name="send" value="1">Войти</button>

    </div>
</form>
</body>
</html>

