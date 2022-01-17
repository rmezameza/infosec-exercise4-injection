<!DOCTYPE html>
<html lang="de">
<head>
    <title></title>
</head>

<body>
<div class="container text-center">
    <h1 class="mb-4">Login</h1>
    <form method="post"
          action="home_secure.php?site=login-confirm"
          class="mb-4">

        <div class="mb-3">
            <label for="username" class="col-form-label">Username:</label>
            <input type="text"
                   class="form-control"
                   id="username"
                   name="username"
                   maxlength="100">
        </div>

        <div class="mb-3">
            <label for="password" class="col-form-label">Password</label>
            <input type="password"
                   class="form-control"
                   id="password"
                   name="password"
                   maxlength="100">
        </div>
        <button type="submit" class="btn btn-primary" title="Login">Login</button>
    </form>
</div>
</body>
</html>