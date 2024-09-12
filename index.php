<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <?php include "partials/head.php"?>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg" style="width: 35rem; border-radius: 20px;">
            <div class="card-header text-center text-white position-relative">
                <img src="img/school_banner.png" alt="Background" class="card-img-top bg-header img-fluid">
                <img src="img/ics_logo.png" alt="Logo" class="position-absolute top-50 start-50 translate-middle" style="width: 100px; height: 100px;">
            </div>

            <div class="rounded-bottom-4 card-body form-body text-white">
                <h3 class="text-center mb-4">LOGIN</h3>
                <form>
                    <div class="mb-3">
                        <label for="userId" class="form-label">User ID</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" id="userId" placeholder="Enter User ID">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password">
                            <span class="input-group-text" onclick="togglePassword()">
                            <i class="bi bi-eye-slash" id="togglePasswordIcon"></i> 
                            </span>
                        </div>
                        <small class="form-text text-light">* Password is case sensitive</small>
                        <a href="signUp" class="text-light d-block mt-2">Forgot Password?</a>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-warning" style="border-radius: 20px;">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
