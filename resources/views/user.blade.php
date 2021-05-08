<x-header componentName="user" />
<h1>User Page</h1>
@include('inner')

<form action="user" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter user id">
    <br>
    <span style="color: red">@error('username'){{ $message }}@enderror</span>
    <br><br>
    <input type="password" name="password" placeholder="Enter password">
    <br>
    <span style="color: red">@error('password'){{ $message }}@enderror</span>
    <br><br>
    <button type="submit">Login</button>
</form>