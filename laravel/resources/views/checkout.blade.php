<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Checkout example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/auth.css" rel="stylesheet">

</head>

<body class="bg-light text-center">
    <div class="container">
      <main>
        <div class="py-3 text-center">
          <h2>Your profile</h2>
          <p class="lead">I don't know there will be information</p>
        </div>

        <hr class="my-4">


          <div class="col-lg-12">
            <form class="needs-validation" novalidate>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">First name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>

                <div class="col-12">
                  <label for="username" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                  <div class="invalid-feedback">
                      Your username is required.
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="you@example.com">
                  <div class="invalid-feedback">
                    Please enter a valid email address.
                  </div>
                </div>

                <div class="col-12">
                  <label for="address" class="form-label">Phone Number</label>
                  <input type="text" class="form-control" id="address" placeholder="+9989" required>
                  <div class="invalid-feedback">
                    Please enter your Phone Number
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="birthdate" class="form-label">Date of Birth </label>
                  <input type="text" class="form-control" id="birthdate" placeholder="||-||-||||">
                  <small class="text-muted">Example: 09-09-1999</small>
                  <div class="invalid-feedback">
                      Valid date in valid form required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="passport" class="form-label">Passport Number</label>
                  <input type="text" class="form-control" id="passport" placeholder="" value="" required>
                  <div class="invalid-feedback">
                      Valid passport number is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="City" class="form-label">City</label>
                  <input type="text" class="form-control" id="City" placeholder="Tashkent?" value="" required>
                  <div class="invalid-feedback">
                      Valid city is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="postal code" class="form-label">Postal Code</label>
                  <input type="text" class="form-control" id="postal code" placeholder="" value="" required>
                  <div class="invalid-feedback">
                      Valid postal code is required.
                  </div>
                </div>
              </div>
              <hr class="my-4">
              <button class="w-100 btn btn-primary btn-lg" type="submit">Create</button>
            </form>
          </div>
      </main>

{{--        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--          <script src="form-validation.js"></script>--}}
    </div>
</body>
</html>


{{--              <span class="text-muted">Like: 09-09-1999</span>--}}
