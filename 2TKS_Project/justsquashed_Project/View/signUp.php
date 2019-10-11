<!DOCTYPE html>
<html>
    <head>
        <title>The Registration Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./css/loginStyle.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
        
    </head>
    <body>
        <section class="container-fluid bg">
            <section class="row justify-content-center">
                <section class="col-20 col-sm-15 col-md-10">
                    <form class="form-container" action="../Model/create/process_signUp.php" method="POST">
                            <div class="form-group">
                              <label >username</label>
                              <input type="input" class="form-control" name="username" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                              <label >First Name</label>
                              <input type="input" class="form-control" name="firstname" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                              <label >Last Name</label>
                              <input type="input" class="form-control" name="lastname" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                              <label>Email</label>
                              <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <label >Phone Number</label>
                              <input type="input" class="form-control" name="phone" placeholder="Enter Phone Number">
                            </div>
                            <div class="form-group">
                              <label >Age</label>
                              <input type="input" class="form-control" name="age" placeholder="Enter Age">
                            </div>
                            <div class="form-group">
                              <label >Password</label>
                              <input type="password" class="form-control" name="password" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                              <label >Confirm Password</label>
                              <input type="password" class="form-control" name="confirm_password" placeholder="Enter Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
                            <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="checkboxRemember">
                                    <label class="form-check-label">Remember</label>
                                  </div>
                          </form>                             
                </section>
            </section>
        </section>
        
    </body>
</html>