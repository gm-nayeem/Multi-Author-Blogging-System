<?php
include_once('./config/database.php');

$conn->close();
?>

<footer class="bg-light text-lg-start">

<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  © 2022 Copyright:
  <a class="text-dark" href="https://mdbootstrap.com/">Tech Blog</a>
</div>
<!-- Copyright -->
</footer>
<!--Footer-->
<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript" src="js/script.js"></script>

<script>
  var editor = new FroalaEditor('#example', {
    height: 300,
    width: '100%'
  });
</script>

</body>
</html>