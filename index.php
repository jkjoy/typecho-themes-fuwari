<?php
/**
 * fuwari
 *
 * @package fuwari
 * @author fuwari
 * @version 1.2
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<!DOCTYPE html>
<html class="transition bg-[var(--page-bg)] md:text-[16px] text-[14px]" data-astro-cid-sckkx6r4 style="--configHue:250">
<head>
<?php $this->need('h.php'); ?>
</head>
<body class="transition is-home min-h-screen" data-astro-cid-sckkx6r4 style="--configHue:250">
        <div class="relative mx-auto gap-4 grid grid-cols-[17.5rem_auto] grid-rows-[auto_auto_1fr_auto] lg:grid-rows-[auto_1fr_auto] max-w-[var(--page-width)] md:px-4 min-h-screen px-0">
            <?php $this->need('nav.php'); ?>
            <?php $this->need('s.php'); ?>
            <?php $this->need('p.php'); ?>
            <?php $this->need('f.php'); ?>
        </div>
</body>
</html>