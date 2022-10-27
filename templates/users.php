<!DOCTYPE html>
<html lang="en">
  <head>    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <title>Users</title>
  </head>
  <body>
    <section class="row mx-0 mt-5">
      <div class="col-sm-4 mx-auto">
        <div class="shadow p-4 mb-4 bg-white">
          <div class="my-2 d-flex justify-content-end mb-3">
            <a href="<?php echo PAGES_URL . '/auth/login.php' ?>" class="btn btn-sm btn-danger">Back</a>
          </div>
          <table class="table table-hover text-center">
            <thead>
              <tr>
                <th>Name</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($users as $user): ?>
              <tr>
                <td class="w-50">
                  <?php echo $user["firstname"] . " " . $user["lastname"] ?>
                </td>
                <td class="w-50">
                  <a href="<?php echo PAGES_URL . '/users/profile.php?id=' . $user['id'] ?>">Open</a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </body>
</html>
