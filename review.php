<!DOCTYPE html>
<html>
<head>
	<title>REVIEW</title>
	<!-- memanggil/mengimport file css (eksternal css) -->
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">

	<!-- memanggil/mengimport fils js (ekternal js) -->
	<script src="dist/js/jquery-3.1.1.min.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	<script src="dist/js/jquery.validate.min.js"></script>

	<script>
		$(document).ready(function(){
			$('#artikel').validate({
				rules:{
					judul:{
						maxlength:20
					}
				},
				messages:{
					judul:{
						required:"<div style='color:red'>judul tidak boleh kosong!</div>",
						maxlength:"<div style='color:red'>panjang judul maximal 20 karakter!</div>"
					},
					isi:{
						required:"<div style='color:red'>isi artikel tidak boleh kosong!</div>"
					}
				}
			});
		});
	</script>

</head>
<body style="margin-top: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 well">
				<h3>
					<i class="glyphicon glyphicon-edit"></i>
					Create Article
				</h3><hr>
				<form id="artikel" name="artikel" action="" method="POST">
					<div class="form-group">
						<label for="judul">Judul</label>
						<input type="text" name="judul" id="judul" class="form-control" required="" placeholder="judul artikel">
					</div>
					<div class="form-group">
						<label for="isi">Isi</label>
						<textarea name="isi" id="isi" class="form-control" rows="10" placeholder="isi artikel" required=""></textarea>
					</div>
					<button id="post" name="post" type="submit" class="btn btn-info">
						<i class="glyphicon glyphicon-ok-circle"></i>
						Post Artikel
					</button>
					<button type="reset" class="btn btn-default">
						Batal
					</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>