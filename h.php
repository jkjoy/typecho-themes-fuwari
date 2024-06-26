<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!-- #header -->
    <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta content="<?php $this->options->title(); ?>" name=description>
    <meta content="width=device-width" name=viewport>
    <meta content="Astro v4.11.0" name=generator>
    <link href="<?php $this->options->icourl() ?>" rel=icon media="(prefers-color-scheme: light)" sizes=32x32>
    <script>!function () { switch (localStorage.getItem("theme") || "auto") { case "light": document.documentElement.classList.remove("dark"); break; case "dark": document.documentElement.classList.add("dark"); break; case "auto": window.matchMedia("(prefers-color-scheme: dark)").matches ? document.documentElement.classList.add("dark") : document.documentElement.classList.remove("dark") } }()</script>
    <link href=https://cdn.staticfile.org/KaTeX/0.16.9/katex.min.css rel=stylesheet crossorigin=anonymous
        integrity=sha384-n8MVd4RsNIU0tAv4ct0nTaAbDJwPJzDEaqSD1odI+WdtXRGWt2kTvGFasHpSy3SV>
    <link href="<?php $this->options->siteUrl(); ?>/feed" rel=alternate title="<?php $this->options->title(); ?>" type=application/rss+xml>
    <link href="<?php $this->options->themeUrl('/_astro/hoisted.aW6J7aTb.css'); ?>" rel=stylesheet>
    <link href="<?php $this->options->themeUrl('/_astro/_page_.C2WTn4nY.css'); ?>" rel=stylesheet>
    <link href="<?php $this->options->themeUrl('/_astro/_page_.DHnhnUL2.css'); ?>" rel=stylesheet>
    <link href="<?php $this->options->themeUrl('/_astro/about.DjJRFMus.css'); ?>" rel=stylesheet>
    <link href="<?php $this->options->themeUrl('/_astro/_category_.BWAG4XaK.css'); ?>" rel=stylesheet>
    <style>
        #post-container :first-child {
            animation-delay: calc(var(--content-delay) + 0ms)
        }

        #post-container :nth-child(2) {
            animation-delay: calc(var(--content-delay) + 50ms)
        }

        #post-container :nth-child(3) {
            animation-delay: calc(var(--content-delay) + .1s)
        }

        #post-container :nth-child(4) {
            animation-delay: calc(var(--content-delay) + 175ms)
        }

        #post-container :nth-child(5) {
            animation-delay: calc(var(--content-delay) + .25s)
        }

        #post-container :nth-child(6) {
            animation-delay: calc(var(--content-delay) + 325ms)
        }

        #display-setting.svelte-3akcb9 input[type=range].svelte-3akcb9 {
            -webkit-appearance: none;
            height: 1.5rem;
            background-image: var(--color-selection-bar);
            transition: background-image .15s ease-in-out
        }

        #display-setting.svelte-3akcb9 .svelte-3akcb9::-webkit-slider-thumb {
            -webkit-appearance: none;
            height: 1rem;
            width: .5rem;
            border-radius: .125rem;
            background: #ffffffb3;
            box-shadow: none
        }

        #display-setting.svelte-3akcb9 .svelte-3akcb9::-webkit-slider-thumb:hover {
            background: #fffc
        }

        #display-setting.svelte-3akcb9 .svelte-3akcb9::-webkit-slider-thumb:active {
            background: #fff9
        }

        #display-setting.svelte-3akcb9 .svelte-3akcb9::-moz-range-thumb {
            -webkit-appearance: none;
            height: 1rem;
            width: .5rem;
            border-radius: .125rem;
            border-width: 0;
            background: #ffffffb3;
            box-shadow: none
        }

        #display-setting.svelte-3akcb9 .svelte-3akcb9::-moz-range-thumb:hover {
            background: #fffc
        }

        #display-setting.svelte-3akcb9 .svelte-3akcb9::-moz-range-thumb:active {
            background: #fff9
        }

        #display-setting.svelte-3akcb9.svelte-3akcb9::-ms-thumb {
            -webkit-appearance: none;
            height: 1rem;
            width: .5rem;
            border-radius: .125rem;
            background: #ffffffb3;
            box-shadow: none
        }

        #display-setting.svelte-3akcb9.svelte-3akcb9::-ms-thumb:hover {
            background: #fffc
        }

        #display-setting.svelte-3akcb9.svelte-3akcb9::-ms-thumb:active {
            background: #fff9
        }
    </style>
  <script src="<?php $this->options->themeUrl('/_astro/hoisted.Sb1r8TRi.js'); ?>" type=module></script>    
    <script src="<?php $this->options->themeUrl('/_astro/page.3zT6KwRv.js'); ?>" type=module></script>    
    <?php $this->header(); ?> 
