<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form method="POST" action="{{ route('user.login') }}">
    @csrf
        <label for="username" class="col-sm-4 col-form-label text-md-right">{{ __('Username') }}</label>
        <input id="username" name="username" value="{{ old('username') }}" required autofocus>
        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" name="password" required>
        <button type="submit" >{{ __('Login') }}</button>
</form>
</body>