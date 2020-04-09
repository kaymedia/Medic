
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url("/assets/css"); ?>/w3.css">
<body>


<div class="w3-container" id="content">
<?php foreach($pasien as $v){ ?>
  <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-green">
      <h3><b><?php echo strtoupper($namaklinik); ?></b> </h3>
    	<?php echo $alamatklinik; ?>  <br>
    	Phone: <?php echo $nohpklinik; ?><br>
    </header>

    <div class="w3-container">
	<p><h4><b><?php echo $v->namapasien; ?></b></h3></p>
      <p><?php echo $v->nomorkartu; ?></p></div>

    <footer class="w3-container w3-green">
      <h5>*Harap Membawa Kartu Ini Pada Saat Pemeriksaan Dikemudian Hari.</h5>
    </footer>
  </div>
</div>

<?php } ?>
<script> 
</script>
</body>
</html>
