<!DOCTYPE html>
<html>
	<head>
		<title>Pemesanan Makanan</title>
		<link href="css/style.css" rel="stylesheet"/>
		<link href="css/bootstrap.css" rel="stylesheet"/>
	</head>
	<body>
		<div id="box">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4 align="center">LOGIN</h4>
				</div>
				<div class="panel-body">
					<form action="aksi.php?aksi=login" method="post">
						<div class="form-group">
              <div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
                  <input type="text" class="form-control" name="username" placeholder="Username" required="required">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
              </div>
            </div>
					<button class="btn btn-primary glyphicon glyphicon-log-in" type="submit"> LOGIN</button>
					</form>
					<br>
					<form action="admin.php" method="">
					<button class="btn btn-primary glyphicon glyphicon-log-in" type="submit"> SIGNUP</button>
					</form>
					<br>
					<form action="delete.php">
					<button class="btn btn-danger glyphicon glyphicon glyphicon-trash" type="submit"> DELETE</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
