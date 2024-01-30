<?php 
    session_start();
    require_once('connection.php');
?>
<link rel="stylesheet" href="assets/bootstrap.css">
<script src="assets/jquery.js"></script>
<script src="assets/bootstrap.js"></script>
<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
 
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<?php if(isset($_SESSION['success'])): ?>
<script>
     $(document).ready(function () {    
        toastr.success('<?php echo $_SESSION['success']; ?>',{ timeOut: 4000 });    
  });
</script>
<?php endif; ?>
<script>
setTimeout(() => {
        <?php unset($_SESSION['success']); ?>
  }, 5000);
</script>
