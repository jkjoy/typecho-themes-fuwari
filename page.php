<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html class="transition bg-[var(--page-bg)] md:text-[16px] text-[14px]" style=--configHue:250>
<head>
<?php $this->need('h.php'); ?>
</head>
<body class="transition min-h-screen" data-astro-cid-sckkx6r4 style=--configHue:250>
    <div id=config-carrier data-hue=250></div>
    <div>
        <div class="absolute w-full" id=banner-wrapper style=--configHue:250 data-astro-cid-sckkx6r4>
            <div class="overflow-hidden relative h-full hidden object-center object-cover">
                <div class="transition absolute pointer-events-none bg-opacity-50 dark:bg-black/10 inset-0"></div><img
                    alt="Banner image of the blog" class="object-cover h-full w-full" decoding=async height=1369
                    loading=lazy src=/_astro/demo-banner.WD4SMgz__nlqjd.webp style=object-position:center width=1920>
            </div>
        </div>
        <div
            class="relative mx-auto gap-4 grid grid-cols-[17.5rem_auto] grid-rows-[auto_auto_1fr_auto] lg:grid-rows-[auto_1fr_auto] max-w-[var(--page-width)] md:px-4 min-h-screen px-0">
            <?php $this->need('nav.php'); ?>
            <?php $this->need('s.php'); ?>
            <div class="overflow-hidden onload-animation col-span-2 lg:col-span-1 row-end-3 row-start-2"
                id=content-wrapper>
                <main class=transition-fade id=swup>
                    <div class="flex w-full mb-4 overflow-hidden relative rounded-[var(--radius-large)]">
                        <div class="relative w-full card-base md:px-9 pb-4 pt-6 px-6 z-10" id=post-container>
                            <div class="transition flex dark:text-white/30 flex-row gap-5 mb-3 onload-animation text-black/30">
                            
                             
                            </div>
                            <div class="relative onload-animation">
                                <div class="transition font-bold before:absolute before:bg-[var(--primary)] before:rounded-md before:h-5 before:left-[-1.125rem] before:top-[0.75rem] block dark:text-white/90 mb-3 md:before:w-1 md:text-[2.5rem]/[2.75rem] text-3xl text-black/90 w-full"
                                    data-pagefind-body data-pagefind-meta=title data-pagefind-weight=10><?php $this->title() ?></div>
                            </div>
                            <div class=onload-animation>
                                <div class="flex items-center gap-4 dark:text-neutral-400 flex-wrap gap-x-4 gap-y-2 mb-5 text-neutral-500"
                                    data-astro-cid-qtyrxm4s>
                                    <div class="flex items-center" data-astro-cid-qtyrxm4s>
                                         
                                           
                                    </div>
                                    <div class="flex items-center" data-astro-cid-qtyrxm4s>
                                        
                                        
                                    </div>
                                    <div class="flex items-center" data-astro-cid-qtyrxm4s>
                                         
                                       
                                    </div>
                                </div>
                                <div class="mb-5 border-[var(--line-divider)] border-b-[1px] border-dashed"></div>
                            </div>
                            <div class="onload-animation mb-6 custom-md dark:prose-invert markdown-content max-w-none prose prose-base"
                                data-pagefind-body>
                                <?php $this->content(); ?>
                            </div>
                            
                        </div>
                    </div>
                           
                </main>
                <?php $this->need('c.php'); ?>
            </div>
            <?php $this->need('f.php'); ?>
  </div>
    </div>
</body>

</html>