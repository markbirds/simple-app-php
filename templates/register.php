<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <title>Register</title>
  </head>
  <body>
    <section class="row mx-0 mt-5">
      <div class="col-sm-4 mx-auto">
        <div class="shadow p-4 mb-4 bg-white">
          <form action="<?php echo PAGES_URL . "/register/index.php";?>" method="POST">
            <div class="mb-3 mt-3">
              <label for="firstname" class="form-label">First name:</label>
              <input
                type="text"
                class="form-control"
                id="firstname"
                placeholder="Enter your first name"
                name="firstname"
                required
              />
            </div>
            <div class="mb-3 mt-3">
              <label for="lastname" class="form-label">Last name:</label>
              <input
                type="text"
                class="form-control"
                id="lastname"
                placeholder="Enter your last name"
                name="lastname"
                required
              />
            </div>
            <div class="mb-3 mt-3">
              <label for="age" class="form-label">Age:</label>
              <input
                type="number"
                class="form-control"
                id="age"
                placeholder="Enter age"
                name="age"
                required
              />
            </div>
            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Email:</label>
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="Enter email"
                name="email"
                required
              />
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password:</label>
              <input
                type="password"
                class="form-control"
                id="password"
                placeholder="Enter password"
                name="password"
                required
              />
            </div>
            <div class="d-flex justify-content-between mt-4">
              <a href="<?php echo PAGES_URL . '/auth/login.php' ?>" class="btn btn-sm btn-dark">Back</a>
              <button type="submit" name="submit" class="btn btn-sm btn-success">
                Create
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
