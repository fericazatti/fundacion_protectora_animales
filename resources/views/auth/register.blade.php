<form action="{{route('register')}}" method="post">
    @csrf
    <label for="name">Nik</label>
    <input type="text" name="nik"> <br>

    <label for="password">Password</label>
    <input type="password" name='password'> <br>

    <label for="'password_confirmation'">Confirm password</label>
    <input type="password" name='password_confirmation'> <br>
    
    <input type="submit" value="Registrar">
</form>