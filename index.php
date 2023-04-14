<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style/index.css" />
    <script defer src="js/login.js"></script>
    <title>Document</title>
  </head>
  <body>
    <div class="phone container">
      <div class="main">
        <h1 class="h1">DBank</h1>
        <p>Motlokwa</p>
      </div>

      <form action="backend/sign_in.php" method="POST">
        <div class="form-floating">
          <input
            type="number"
            name="user-id"
            class="form-control"
            id="userID"
            placeholder="Account Number"
            required
          />
          <label for="pin">Account Number</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            name="pin"
            class="form-control"
            id="pin"
            placeholder="PIN"
            required
          />
          <label for="pin">PIN</label>
        </div>

        <small class="error-msg text-danger"></small>

        <div class="controls">
          <button
            class="btn btn-success"
            id="signin"
            name="signin"
            type="submit"
          >
            Sign in
          </button>
          <button
            class="btn btn-outline-danger"
            id="forgot-pin"
            name="forgot-pin"
          >
            Forgot PIN
          </button>
        </div>
      </form>
    </div>
  </body>
</html>
