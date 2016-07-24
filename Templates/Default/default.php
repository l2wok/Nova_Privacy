<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>
    <meta charset="utf-8">
    <title><?= $title .' - ' .Config::get('app.name', SITETITLE); ?></title>
<?php
echo isset($meta) ? $meta : ''; // Place to pass data / plugable hook zone

Assets::css([
    template_url('dist/css/bootstrap.min.css', 'Default'),
    template_url('dist/css/bootstrap-theme.min.css', 'Default'),
    'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
    template_url('css/style.css', 'Default'),
]);

echo $css; // Place to pass data / plugable hook zone
?>
</head>
<body >
<?php
if(!empty($nav = Event::until('Navbar')))
{
    echo $nav;
}
else
{
    echo $afterBody;
}
?>
<div class="container">
<?
echo Session::getMessages();
echo $content;
?>
</div>

<footer class="footer">
    <div class="container-fluid">
        <div class="row" style="margin: 15px 0 0;">
            <div class="col-lg-4">
                <p class="text-muted">
                    Copyright &copy; <?php echo date('Y'); ?> <a href="http://www.novaframework.com/" target="_blank"><b>Nova Framework <?= VERSION; ?></b></a> 
                    Privacy <a href="/privacy" >Info</a>
                </p>
            </div>
            <div class="col-lg-8">
                <p class="text-muted pull-right">
                    <?php if(Config::get('app.debug')) { ?>
                    <small><!-- DO NOT DELETE! - Profiler --></small>
                    <?php } ?>
                </p>
            </div>
        </div>
    </div>
</footer>

<?php
Assets::js([
    'https://code.jquery.com/jquery-1.12.4.min.js',
    template_url('dist/js/bootstrap.min.js', 'Default'),
]);

echo $js; // Place to pass data / plugable hook zone

echo isset($footer) ? $footer : ''; // Place to pass data / plugable hook zone
?>

<!-- DO NOT DELETE! - Forensics Profiler -->

</body>
</html>
