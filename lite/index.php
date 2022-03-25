<?php
$title_panel = 'Dashboard';
require 'includes/header.php';
if (isset($_SESSION['login']) && $_SESSION['login'] == $hash) { ?>
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
<a target="_blank" href="https://api.whatsapp.com/send?phone=6285273078112&text&source&data&app_absent" class="d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fab fa-whatsapp fa-sm text-white-50"></i> Report Bug</a>
</div>
<h1 style="text-align:center;padding:20px 0;">What is BejoProject?</h1>
</div>
<?php 
require 'includes/footer.php';
}else{
header('Location: login.php');
}?>