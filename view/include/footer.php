</div>
<div id="footer">
<div id="footer_inner">
<div id="copy_right"><label>Copyright &copy; <?=date('Y') ?> Confone Inc. All Rights Reserved.</label></div>
</div>
</div>
<?php if (isset($scripts)) {
    foreach ($scripts as $script) {
        echo '<script src="/js/'.$script.'"></script>';
    }
} ?>
</body>
</html>