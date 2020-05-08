	<script src="<?php echo base_url ()?>/assets/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url ()?>/assets/datatables/dataTables.bootstrap.js"></script>
    <script type="text/javascript">

//            jika dipilih, kode obat akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("kode_pasien").value = $(this).attr('data-kodepasien');
                document.getElementById("namapasien").value = $(this).attr('data-namapasien');
                $('#myModal').modal('hide');
            });

//            tabel lookup 
            $(function () {
                $("#lookup").dataTable();
            });
            //DATA PERUSAHAAN
             $(function () {
                $("#datapasien").dataTable();
            });

            

    </script>	
	<script type="text/javascript">

//            jika dipilih, kode obat akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih2', function (e) {
                document.getElementById("kode_ruangan").value = $(this).attr('data-koderuangan');
                $('#myModal').modal('hide');
            });

//            tabel lookup 
            $(function () {
                $("#lookup2").dataTable();
            });
            //DATA PERUSAHAAN
             $(function () {
                $("#dataruangan").dataTable();
            });

            

    </script>
	
		
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/node-waves/waves.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/jquery-countto/jquery.countTo.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/morrisjs/morris.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/chartjs/Chart.bundle.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/js/admin.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/js/demo.js"></script>
    <script src="<?php echo base_url ()?>/assets/multiselect/js/jquery.multi-select.js"></script>

</body>
</html>