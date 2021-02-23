  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>application/assets/js/jquery-3.5.1.min.js"></script>
  <script src="<?php echo base_url(); ?>application/assets/js/bootstrap.min.js"></script>
  <!-- Font Awesome -->
	<script src="<?php echo base_url(); ?>application/assets/js/all.min.js"></script>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
