<?php 
  include 'inc_head.php';
  session_destroy();
?>
<script>

    alert("로그아웃 하셨습니다.");
    location.replace('login.php');
</script>
