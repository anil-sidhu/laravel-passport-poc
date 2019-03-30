<h1>Login</h1>
<form method="post" action="/login">
  @csrf
<input type="text" name="user">
<input type="password" name="password">
<button type="submit">Login</button>
</form>