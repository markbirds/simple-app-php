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
    <title>Profile</title>
  </head>
  <body>
    <section class="row mx-0 mt-5">
      <div class="col-sm-4 mx-auto">
        <div class="shadow p-4 mb-4 bg-white">
          <section>
            <div
              class="d-flex align-items-center justify-content-between my-3 mb-4"
            >
              <div>Profile</div>
              <?php if ($editable) { ?>
                <a href="<?php echo PAGES_URL . '/auth/logout.php' ?>" class="btn btn-sm btn-danger">Logout</a>
              <?php } else { ?>
                <a href="<?php echo PAGES_URL . '/users' ?>" class="btn btn-sm btn-danger">Back</a>
              <?php } ?>
            </div>
            <section>
              <div class="mb-3 mt-3">
                <label for="firstname" class="form-label">First name:</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstname"
                  placeholder="Enter your first name"
                  value="<?php echo $user['firstname']?>"
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
                  value="<?php echo $user['lastname']?>"
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
                  value="<?php echo $user['age']?>"
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
                  value="<?php echo $user['email']?>"
                  required
                />
              </div>
              <div class="mb-3 mt-3">
                <label for="date" class="form-label">Date created:</label>
                <input
                  type="text"
                  class="form-control"
                  id="date"
                  value="<?php echo $user['created_at']?>"
                  readonly
                />
              </div>
              <?php if ($editable) { ?>
                <div class="d-flex justify-content-between">
                  <button id="delete" class="btn btn-sm btn-danger">
                    Delete
                  </button>
                  <button id="save" class="btn btn-sm btn-warning">
                    Save
                  </button>
                </div>
              <?php } ?>
            </section>
          </section>
        </div>
      </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
      let editable = "<?php echo $editable ?>";

      if (!editable) {
        $("input").attr("disabled", "disabled");
      }

      $(document).ready(function () {
        $("#save").click(async function () {
          const data = {
            firstname: $("#firstname").val(),
            lastname: $("#lastname").val(),
            age: $("#age").val(),
            email: $("#email").val()
          }

          $.ajax({
            url: '<?php echo PAGES_URL ?>' + "/users/update.php",
            method: "POST",
            data,
          })
          .done(function (data) {
            const user = JSON.parse(data);
            $("#firstname").val(user.firstname);
            $("#lastname").val(user.lastname);
            $("#age").val(user.age);
            $("#email").val(user.email);
            alert("User successfully updated");
          })
          .fail(function (response) {
            alert("Request failed: " + response.statusText);
          });
        });

        $("#delete").click(async function () {
          const userID = '<?php echo $_SESSION["user_id"]?>'
          await $.ajax({
            url: '<?php echo  PAGES_URL?>' + `/users/delete.php?id=${userID}`,
            method: "DELETE",
          });

          window.location.href = '<?php echo PAGES_URL . "/auth/login.php"?>';
        });
      });
    </script>
  </body>
</html>

