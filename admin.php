<html>
<head>
<title>Simpan Password</title>
        <link href="css/style.css" rel="stylesheet"/>
		<link href="css/bootstrap.css" rel="stylesheet"/>
</head>
<body>
<div id="box">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4 align="center">DAFTAR</h4>
				</div>
				<div class="panel-body">
                <form action="index.php" method="">
                <button class="btn btn-danger glyphicon glyphicon-chevron-left"> KEMBALI</button>
                </form>
                <form action="aksi.php?aksi=add" method="POST">
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
            <div class="form-group">
              <div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
                <input type="text" class="form-control" name="name" placeholder="name" required="required">
              </div>
            </div>
            <div class="form-group">
            <div class="input-group">
                    <span class="input-group-addon">
									<span class="glyphicon glyphicon-briefcase"></span>
								</span>
                     <select class="form-control" id="level" name="level" class="level">
                      <option value="1">1 - KASIR</option>
                      <option value="2">2 - KOKI</option>
                    </select>
            </div>
            </div>
						<button class="btn btn-primary glyphicon glyphicon-log-in" type="submit" > SIMPAN</button>
					</form>
				</div>
			</div>
		</div>
</body>
</html>
