</div>
 <!-- Main Footer -->
 <footer class="main-footer">
    <strong>Copyright &copy; 2019-2025 <a href="#">College Management System</a>.</strong>
    All rights reserved. <b>Version  1.1</b>
      <a class="float-right btn-xl btn-comm" type="button" role="button" href="../chatbox.html" title="Chatbox">
      <i class="fas fa-comments"></i>
      </a>
    
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>


<script>
  (function(){
    var path = window.location.href;
    $(".nav-link").each(function () {

    var href = $(this).attr('href');
    if (path === decodeURIComponent(href))
    {
      $(this).addClass('active');
      var parent = $(this).closest('.has-treeview');
      parent.addClass('menu-open');
      $(parent).find('.nav-link').first().addClass('active');
      // consol.log(parent); 
    };
    });
  }());
</script>
</body>
</html>