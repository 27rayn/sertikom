<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <title>MyPharm-Sign Up</title>
    <link rel="icon" type="image/png" href="" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>

<body>
    <section class="form my-5">
        <div class="container">
            <div class="row align-items-center g-0">
            </div>
            <div class="col-lg-6 px-5 pt-5">
                <h1 style="font-size: 38px; font-family: 'Mulish', sans-serif; font-weight: 700" class="py-2">Sign-Up</h1>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="input-group mb-3">
                            <select name="role" class="custom-select form-control" id="inputGroupSelect01">
                                <option selected>Choose your role...</option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="mb-3">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" id="firstname" placeholder="First Name" value="" class="form-control rounded-3" name="firstname" />


                        </div>
                    </div>
                    <div class="form-row">
                        <div class="mb-3">
                            <label for="lname" class="form-label">Last Name (Optional)</label>
                            <input type="text" id="lastname" placeholder="Last Name" value="" class="form-control rounded-3" name="lastname" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" placeholder="contoh@yahoo.com" value="" class="form-control rounded-3" id="email" name="email" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" placeholder="minimun 8 characters" class="form-control rounded-3" id="password1" name="password1" />

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="mb-3">
                            <label for="password" class="form-label">Re-type Password</label>
                            <input type="password" placeholder="minimun 8 characters" class="form-control rounded-3" id="password2" name="password2" />

                        </div>
                    </div>
                    <p>By creating an account you agree to our <a href="#" style="color: dodgerblue">Terms & Privacy</a>.</p>
                    <p>Already have an account? <a style="color: dodgerblue" href="login.php">Login</a></p>
                    <div class="form-row">
                        <div class="form">
                            <div class="d-grid my-4">
                                <button type="submit" class="btn btn-primary rounded-3">Sign Up</button>
                            </div>
                        </div>
                        <div class="form">
                            <div class="row text-center">
                                <div style="color: #c2c2c2; font-size: 16px; font-family: 'Mulish', sans-serif">Or Sign Up With</div>
                            </div>
                            <div class="form" style="margin: 24px">
                                <div class="d-grid">
                                    <button class="btn btn-outline-primary rounded-3"><span class="iconify" data-inline="false" data-icon="grommet-icons:google" style="margin-right: 8px; font-size: 24px"></span> Sign Up with Google</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>
</body>

</html>