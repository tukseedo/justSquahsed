<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./css/loginStyle.css">
        
        <style>
        </style>
    </head>
    <body>
      
        <section class="container-fluid bg">
            <section class="row justify-content-center" >
                <section class="col-12 col-sm-6 col-md-6">
                    <form class="form-container" action="/2TKS_Project/justsquashed_Project/Model/read/process.php" method="POST">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Username</label>
                              <input type="input" class="form-control" name="username" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                              <label >Password</label>
                              <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" name="checkboxAdmin">
                              <label class="form-check-label" >Admin</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="checkboxRemember">
                                    <label class="form-check-label">Remember</label>
                                  </div>
                          </form>
                </section>
            </section>
        </section>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
        
    </body>
</html>