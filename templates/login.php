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
    <link rel="stylesheet" href="<?php echo STATIC_URL?>/styles/index.css" />
    <title>Login</title>
  </head>
  <body>
    <section class="row mx-0 mt-5">
      <div class="col-sm-4 mx-auto">
        <div class="shadow p-4 mb-4 bg-white">
          <section>
            <div class="d-flex justify-content-end">
              <a href="<?php echo PAGES_URL . '/users' ?>" class="btn btn-sm btn-light">All users</a>
            </div>
            <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
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
              <?php if ($error) { ?>
                <div class="alert alert-danger text-center"><?php echo $error ?></div>
              <?php } ?>
              <div class="text-center mt-4">
                <button type="submit" name="submit" class="btn btn-sm btn-dark">Login</button>
                <div class="mt-2">
                  <a href="<?php echo PAGES_URL . '/register/index.php' ?>">Create an account</a>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo STATIC_URL ?>/scripts/index.js"></script>
  </body>
</html>
