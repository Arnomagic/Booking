



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <from action="login_action.php" method="post" class="from-horizontal my-5">
        <label for="email" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-12">
            <input type="text" name="txt_email" class="from-control" require placeholder="Enter email">
          </div>

          <label for="password" class="col-sm-3 control-label">Password</label>
          <div class="col-sm-12">
            <input type="password" name="txt_password" class="from-control" require placeholder="Enter password">
          </div>

        <div class="form-group">
            <label for="type" class="col-sm-3 control-label">Select Type</label>
              <div class="col-sm-12">
                <select name="text_leve" class="from-control">
                  <option value="" selected="selected">-Select Leve-<option>
                  <option value="admin" >Admin<option>
                  <option value="member" >Member<option>
                  <option value="user" >User<option>
                </select>
              </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-12 mt-3">
              <input type="submit" name="btn_login" class="btn btn-success" require value="Login">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12 mt-3">
              <p>You don't have account register here? <a href="register.php">Register Account</a></p>
            </div>
          </div>

      </from>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>