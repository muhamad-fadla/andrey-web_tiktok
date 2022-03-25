<?php
$title_panel = 'Sites Setting';
require 'includes/header.php';
require '../libraries/ua.class.php';
require '../libraries/simple_html_dom.php';
require '../core/functions/options.php';
require '../core/functions/cache.php';
if (isset($_SESSION['login']) && $_SESSION['login'] == $hash) { ?>
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Sites Setting</h1>
</div>
<?php
if ( file_exists( '../config/' . $_SERVER['HTTP_HOST'] . '/config.json' ) ) {
$cache_file = '../config/' . $_SERVER['HTTP_HOST'] . '/config.json';
}else{
$cache_file = '../config/default/config.json';
}
$folder = '../themes';
if(!($buka_folder = opendir($folder)));

$file_array = array(); 
while($baca_folder = readdir($buka_folder))
 {
  if(substr($baca_folder,0,1) != '.')
   {
     $file_array[] =  $baca_folder;
    }
 }
if(isset($_POST['change'])){
$cache['site_name'] = $_POST['site_name'];
$cache['site_tagline'] = $_POST['site_tagline'];
$cache['google_verify'] = $_POST['google_verify'];
$cache['home_title'] = $_POST['home_title'];
$cache['home_description'] = $_POST['home_description'];
$cache['home_robots'] = $_POST['home_robots'];
$cache['page_title'] = $_POST['page_title'];
$cache['page_description'] = $_POST['page_description'];
$cache['page_robots'] = $_POST['page_robots'];
$cache['theme'] = $_POST['theme'];
$cache['color'] = $_POST['color'];
$cache['download_permalink'] = $_POST['download_permalink'];
$cache['page_permalink'] = $_POST['page_permalink'];
$cache['sitemap_index_permalink'] = $_POST['sitemap_index_permalink'];
$cache['footer_copyright'] = $_POST['footer_copyright'];
if ( isset( $cache ) ) {
  set_cache( $cache_file, $cache );
}
?>
<div class="card bg-success text-white shadow mb-2">
<div class="card-body">
<b>Sites Setting</b> successfully updated
</div>
</div>
<?php
}
$cache = json_decode( file_get_contents( $cache_file ), true );
?>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="true">General</a>
</li>
<li class="nav-item">
<a class="nav-link" id="pills-seo-tab" data-toggle="pill" href="#pills-seo" role="tab" aria-controls="pills-seo" aria-selected="false">SEO</a>
</li>
<li class="nav-item">
<a class="nav-link" id="pills-slug-tab" data-toggle="pill" href="#pills-slug" role="tab" aria-controls="pills-slug" aria-selected="false">Slug</a>
</li>
</ul>
</div>
<form method="post">
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-general" role="tabpanel" aria-labelledby="pills-general-tab">
<div class="card-body">
<div class="form-group row">
<label class="col-md-2 col-form-label">Sitename</label>
<div class="col-md-6">
<input class="form-control" type="text" name="site_name" value="<?php echo $cache['site_name']; ?>">
</div>
</div>
<div class="form-group row">
<label class="col-md-2 col-form-label">Tagline</label>
<div class="col-md-6">
<input class="form-control" type="text" name="site_tagline" value="<?php echo $cache['site_tagline']; ?>">
</div>
</div>
<div class="form-group row">
<label class="col-md-2 col-form-label">Google Verify</label>
<div class="col-md-6">
<input class="form-control" type="text" name="google_verify" value="<?php echo $cache['google_verify']; ?>">
<div class="card-sub">Example: 5jEbBD1ityNmh38Ekd0YfXM_fyfCS8wS2</div>
</div>
</div>
</div>
<div class="card-footer">
<input type="submit" class="btn btn-primary" name="change" value="Update">
<a class="btn btn-danger" href="index.php">Back</a>
</div>
</div>
<div class="tab-pane fade" id="pills-seo" role="tabpanel" aria-labelledby="pills-seo-tab">
<div class="card-body">
<div class="form-group row">
<label class="col-md-2 col-form-label">Home Title</label>
<div class="col-md-6">
<input class="form-control" type="text" name="home_title" value="<?php echo $cache['home_title']; ?>">
<div class="card-sub">%site_name%, %domain%</div>
</div>
</div>
<div class="form-group row">
<label class="col-md-2 col-form-label">Home Description</label>
<div class="col-md-6">
<textarea class="form-control" name="home_description"><?php echo $cache['home_description']; ?></textarea>
<div class="card-sub">%site_name%, %domain%</div>
</div>
</div>
<div class="form-group row">
<label class="col-md-2 col-form-label">Home Robots</label>
<div class="col-md-6">
<input class="form-control" type="text" name="home_robots" value="<?php echo $cache['home_robots']; ?>">
</div>
</div>
<hr style="margin-top:15px;margin-bottom:15px;">
<div class="form-group row">
<label class="col-md-2 col-form-label">Pages Title</label>
<div class="col-md-6">
<input class="form-control" type="text" name="page_title" value="<?php echo $cache['page_title']; ?>">
<div class="card-sub">%title%, %site_name%, %domain%</div>
</div>
</div>
<div class="form-group row">
<label class="col-md-2 col-form-label">Pages Description</label>
<div class="col-md-6">
<textarea class="form-control" name="page_description"><?php echo $cache['page_description']; ?></textarea>
<div class="card-sub">%title%, %site_name%, %domain%</div>
</div>
</div>
<div class="form-group row">
<label class="col-md-2 col-form-label">Pages Robots</label>
<div class="col-md-6">
<input class="form-control" type="text" name="page_robots" value="<?php echo $cache['page_robots']; ?>">
</div>
</div>
<div class="form-group row">
<label class="col-md-2 col-form-label">Footer Copyright</label>
<div class="col-md-6">
<input class="form-control" type="text" name="footer_copyright" value="<?php echo $cache['footer_copyright']; ?>">
<div class="card-sub">%year%, %site_name%</div>
</div>
</div>
<hr style="margin-top:15px;margin-bottom:15px;">
<div class="form-group row">
<label class="col-md-2 col-form-label">Theme</label>
<div class="col-md-6">
<select class="form-control form-control" name="theme">
<?php while(list($index, $nama_file) = each($file_array)){?>
	<option value="<?php echo $nama_file; ?>"  <?php if($cache['theme'] == "".$nama_file."") echo "selected"; ?>><?php echo $nama_file; ?></option>
<?php }closedir($buka_folder); ?>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-md-2 col-form-label">Color Scheme</label>
<div class="col-md-6">
<input class="form-control" type="text" name="color" value="<?php echo $cache['color']; ?>">
<div class="card-sub">without #</div>
</div>
</div>
</div>
<div class="card-footer">
<input type="submit" class="btn btn-primary" name="change" value="Update">
<a class="btn btn-danger" href="index.php">Back</a>
</div>
</div>
<div class="tab-pane fade" id="pills-slug" role="tabpanel" aria-labelledby="pills-slug-tab">
<div class="card-body">
<div class="form-group row">
<label class="col-md-2 col-form-label">Download Slug</label>
<div class="col-md-6">
<input class="form-control" type="text" name="download_permalink" value="<?php echo $cache['download_permalink']; ?>">
</div>
</div>
<div class="form-group row">
<label class="col-md-2 col-form-label">Pages Slug</label>
<div class="col-md-6">
<input class="form-control" type="text" name="page_permalink" value="<?php echo $cache['page_permalink']; ?>">
</div>
</div>
<div class="form-group row">
<label class="col-md-2 col-form-label">Sitemap Slug</label>
<div class="col-md-6">
<input class="form-control" type="text" name="sitemap_index_permalink" value="<?php echo $cache['sitemap_index_permalink']; ?>">
</div>
</div>
</div>
<div class="card-footer">
<input type="submit" class="btn btn-primary" name="change" value="Update">
<a class="btn btn-danger" href="index.php">Back</a>
</div>
</div>
</div>
</form>
</div>
</div>
</div>

</div>
<?php 
require 'includes/footer.php';
}else{
header('Location: login.php');
}?>