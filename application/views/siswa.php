<html>

<head>

	<head>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css')?>" type="text/css" />
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
	</head>

</head>

<body style="background-color:#c3f0ca;">


	<!-- Start Sidebar -->
	<?php $this->view('navbarsiswa'); ?>


	<div class="row" id="body-row">
		<?php $this->view('leftmenusiswa'); ?>

		<!-- End Sidebar -->

		<!-- MAIN -->
		<div class="col text-light">

			<h1>
				<?php foreach($datasiswa as $rowsiswa): ?>
				Selamat datang <?php echo $rowsiswa->nama; ?>
				<?php endforeach; ?>
			</h1>
			<p>Kamu akan mengerjakan soal-soal <br>
				UKBM Biologi, kerjakan sebaik mungkin ya</p>
			<a href="<?php echo base_url('halamanpengerjaan?kode_soal=1')?>"><button type="button" class="btn btn-info">Mulai mengerjakan</button></a>
			<div id="example1"></div>

		</div>
	</div>

</body>
<script src="<?php echo base_url('assets/js/pdfobject.js'); ?>"></script>
<script>PDFObject.embed("<?php echo base_url('assets/data/ukbm.pdf'); ?>", "#example1");</script>
</html>