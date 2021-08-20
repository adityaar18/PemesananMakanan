<?php include('koneksi.php');?>
<?php
$select = mysqli_query($conn2, "SELECT username FROM tbl_user");
$data = mysqli_fetch_assoc($select);
?>
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
                <button class="btn btn-primary glyphicon glyphicon-chevron-left"> KEMBALI</button>
                </form>
                <form action="aksi.php?aksi=del" method="POST">
            <div class="form-group">
            <div class="input-group">
                    <span class="input-group-addon">
									<span class="glyphicon glyphicon-briefcase"></span>
								</span>
                     <select class="form-control" id="username" name="username" class="username">
                     <?php while($data = mysqli_fetch_assoc($select)){?>
                      <option value="<?php echo $data['username']; ?>"><?php echo $data['username'];?></option>
                    <?php }?>
                    </select>
            </div>
            </div>
						<button class="btn btn-danger glyphicon glyphicon-log-in" type="submit" > HAPUS</button>
					</form>
				</div>
			</div>
		</div>
</body>
</html>
