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
                            <div
                                class="transition flex dark:text-white/30 flex-row gap-5 mb-3 onload-animation text-black/30">
                                <div class="flex items-center flex-row">
                                    <div
                                        class="transition flex items-center justify-center bg-black/5 dark:bg-white/10 dark:text-white/50 h-6 mr-2 rounded-md text-black/50 w-6">
                                        <svg data-icon=material-symbols:notes-rounded height=1em viewBox="0 0 24 24"
                                            width=1em>
                                            <symbol id=ai:material-symbols:notes-rounded>
                                                <path
                                                    d="M4 18q-.425 0-.712-.288T3 17t.288-.712T4 16h10q.425 0 .713.288T15 17t-.288.713T14 18zm0-5q-.425 0-.712-.288T3 12t.288-.712T4 11h16q.425 0 .713.288T21 12t-.288.713T20 13zm0-5q-.425 0-.712-.288T3 7t.288-.712T4 6h16q.425 0 .713.288T21 7t-.288.713T20 8z"
                                                    fill=currentColor />
                                            </symbol>
                                            <use xlink:href=#ai:material-symbols:notes-rounded></use>
                                        </svg></div>            <?php $content = $this->content; // 获取文章内容 ?>
                                        <?php $wordCount = getWordCount($content); // 计算字数 ?>
                                    <div class=text-sm><?php echo $wordCount; ?> words</div>
                                </div>
                                <div class="flex items-center flex-row">
                                    <div
                                        class="transition flex items-center justify-center bg-black/5 dark:bg-white/10 dark:text-white/50 h-6 mr-2 rounded-md text-black/50 w-6">
                                        <svg data-icon=material-symbols:schedule-outline-rounded height=1em
                                            viewBox="0 0 24 24" width=1em>
                                            <symbol id=ai:material-symbols:schedule-outline-rounded>
                                                <path
                                                    d="M13 11.6V8q0-.425-.288-.712T12 7t-.712.288T11 8v3.975q0 .2.075.388t.225.337l3.3 3.3q.275.275.7.275T16 16t.275-.7t-.275-.7zM12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.325 0 5.663-2.337T20 12t-2.337-5.663T12 4T6.337 6.338T4 12t2.338 5.663T12 20"
                                                    fill=currentColor />
                                            </symbol>
                                            <use xlink:href=#ai:material-symbols:schedule-outline-rounded></use>
                                        </svg></div>
                                    <div class=text-sm><?php $content = $this->content; // 获取文章内容 ?>
            <?php $readingTime = getReadingTime($content); // 计算阅读时间 ?>
            <?php echo isset($readingTime) ? $readingTime . '  minutes' : '未知'; ?></div>
                                </div>
                            </div>
                            <div class="relative onload-animation">
                                <div class="transition font-bold before:absolute before:bg-[var(--primary)] before:rounded-md before:h-5 before:left-[-1.125rem] before:top-[0.75rem] block dark:text-white/90 mb-3 md:before:w-1 md:text-[2.5rem]/[2.75rem] text-3xl text-black/90 w-full"
                                    data-pagefind-body data-pagefind-meta=title data-pagefind-weight=10><?php $this->title() ?></div>
                            </div>
                            <div class=onload-animation>
                                <div class="flex items-center gap-4 dark:text-neutral-400 flex-wrap gap-x-4 gap-y-2 mb-5 text-neutral-500"
                                    data-astro-cid-qtyrxm4s>
                                    <div class="flex items-center" data-astro-cid-qtyrxm4s>
                                        <div class=meta-icon data-astro-cid-qtyrxm4s><svg
                                                data-icon=material-symbols:calendar-today-outline-rounded height=1em
                                                viewBox="0 0 24 24" width=1em class=text-xl data-astro-cid-qtyrxm4s>
                                                <symbol id=ai:material-symbols:calendar-today-outline-rounded>
                                                    <path
                                                        d="M5 22q-.825 0-1.412-.587T3 20V6q0-.825.588-1.412T5 4h1V3q0-.425.288-.712T7 2t.713.288T8 3v1h8V3q0-.425.288-.712T17 2t.713.288T18 3v1h1q.825 0 1.413.588T21 6v14q0 .825-.587 1.413T19 22zm0-2h14V10H5zM5 8h14V6H5zm0 0V6z"
                                                        fill=currentColor />
                                                </symbol>
                                                <use xlink:href=#ai:material-symbols:calendar-today-outline-rounded>
                                                </use>
                                            </svg></div>
                                            <span class="text-sm text-50 font-medium"><?php $this->date(); ?></span>
                                    </div>
                                    <div class="flex items-center" data-astro-cid-qtyrxm4s>
                                        <div class=meta-icon data-astro-cid-qtyrxm4s><svg
                                                data-icon=material-symbols:menu-rounded height=1em viewBox="0 0 24 24"
                                                width=1em class=text-xl data-astro-cid-qtyrxm4s>
                                                <symbol id=ai:material-symbols:menu-rounded>
                                                    <path
                                                        d="M4 18q-.425 0-.712-.288T3 17t.288-.712T4 16h16q.425 0 .713.288T21 17t-.288.713T20 18zm0-5q-.425 0-.712-.288T3 12t.288-.712T4 11h16q.425 0 .713.288T21 12t-.288.713T20 13zm0-5q-.425 0-.712-.288T3 7t.288-.712T4 6h16q.425 0 .713.288T21 7t-.288.713T20 8z"
                                                        fill=currentColor />
                                                </symbol>
                                                <use xlink:href=#ai:material-symbols:menu-rounded></use>
                                            </svg></div>
                                        <div class="flex items-center flex-row flex-nowrap" data-astro-cid-qtyrxm4s>
                                        <?php foreach($this->categories as $category): ?>
         
         <a href="<?php echo $category['permalink']; ?>" class="transition text-sm text-50 dark:hover:text-[var(--primary)] font-medium hover:text-[var(--primary)] link-lg whitespace-nowrap">
           <?php echo $category['name']; ?></a>

                  <?php endforeach; ?>
                                            </div>
                                    </div>
                                    <div class="flex items-center" data-astro-cid-qtyrxm4s>
                                        <div class=meta-icon data-astro-cid-qtyrxm4s><svg
                                                data-icon=material-symbols:tag-rounded height=1em viewBox="0 0 24 24"
                                                width=1em class=text-xl data-astro-cid-qtyrxm4s>
                                                <symbol id=ai:material-symbols:tag-rounded>
                                                    <path
                                                        d="m9 16l-.825 3.275q-.075.325-.325.525t-.6.2q-.475 0-.775-.375T6.3 18.8L7 16H4.275q-.5 0-.8-.387T3.3 14.75q.075-.35.35-.55t.625-.2H7.5l1-4H5.775q-.5 0-.8-.387T4.8 8.75q.075-.35.35-.55t.625-.2H9l.825-3.275Q9.9 4.4 10.15 4.2t.6-.2q.475 0 .775.375t.175.825L11 8h4l.825-3.275q.075-.325.325-.525t.6-.2q.475 0 .775.375t.175.825L17 8h2.725q.5 0 .8.387t.175.863q-.075.35-.35.55t-.625.2H16.5l-1 4h2.725q.5 0 .8.388t.175.862q-.075.35-.35.55t-.625.2H15l-.825 3.275q-.075.325-.325.525t-.6.2q-.475 0-.775-.375T12.3 18.8L13 16zm.5-2h4l1-4h-4z"
                                                        fill=currentColor />
                                                </symbol>
                                                <use xlink:href=#ai:material-symbols:tag-rounded></use>
                                            </svg></div>
                                        <div class="flex items-center flex-row flex-nowrap" data-astro-cid-qtyrxm4s>
                                             
                                                <?php $tags = $this->tags;  // 获取标签
                                         if (empty($tags)): ?>
                                        <p>暂无标签</p>
                                        <?php else: 
                                        $lastTagIndex = count($tags) - 1;  // 计算最后一个标签的索引
                                        foreach($tags as $index => $tag): ?>
                                        <a href="<?php echo $tag['permalink']; ?>" class="transition text-sm text-50 dark:hover:text-[var(--primary)] font-medium hover:text-[var(--primary)] link-lg whitespace-nowrap">
                                        <?php echo $tag['name']; ?>
                                         </a> 
                                        <?php if ($index != $lastTagIndex): // 如果不是最后一个标签，显示斜杠 ?>
                                        <div class="text-sm mx-1.5 text-[var(--meta-divider)]">/</div>
                                        <?php endif; ?>
                                        <?php endforeach; 
                                        endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5 border-[var(--line-divider)] border-b-[1px] border-dashed"></div>
                            </div>
                            <div class="onload-animation mb-6 custom-md dark:prose-invert markdown-content max-w-none prose prose-base"
                                data-pagefind-body>
                                <?php $this->content(); ?>
                            </div>
                            <div
                                class="transition overflow-hidden bg-[var(--license-block-bg)] license-container mb-6 onload-animation px-6 py-5 relative rounded-xl">
                                <div class="transition font-bold dark:text-white/75 text-black/75"><?php $this->title() ?>
                                  </div>
                                  <a href="<?php $this->permalink() ?>"
                                    class="text-[var(--primary)] link"><?php $this->permalink() ?></a>
                                <div class="flex gap-6 mt-2">
                                    <div>
                                        <div class="transition text-sm dark:text-white/30 text-black/30">Author</div>
                                        <div class="transition whitespace-nowrap dark:text-white/75 text-black/75"> 
                                        <?php $this->author(); ?></div>
                                    </div>
                                    <div>
                                        <div class="transition text-sm dark:text-white/30 text-black/30">Published at
                                        </div>
                                        <div class="transition whitespace-nowrap dark:text-white/75 text-black/75">
                                        <?php $this->date(); ?></div>
                                    </div>
                                    <div>
                                        <div class="transition text-sm dark:text-white/30 text-black/30">License</div><a
                                            href=https://creativecommons.org/licenses/by-nc-sa/4.0/
                                            class="text-[var(--primary)] link whitespace-nowrap" target=_blank>CC
                                            BY-NC-SA 4.0</a>
                                    </div>
                                </div><svg data-icon=fa6-brands:creative-commons height=240 viewBox="0 0 496 512"
                                    width=240
                                    class="transition absolute pointer-events-none -translate-y-1/2 dark:text-white/5 right-6 text-black/5 top-1/2">
                                    <symbol id=ai:fa6-brands:creative-commons>
                                        <path
                                            d="m245.83 214.87l-33.22 17.28c-9.43-19.58-25.24-19.93-27.46-19.93c-22.13 0-33.22 14.61-33.22 43.84c0 23.57 9.21 43.84 33.22 43.84c14.47 0 24.65-7.09 30.57-21.26l30.55 15.5c-6.17 11.51-25.69 38.98-65.1 38.98c-22.6 0-73.96-10.32-73.96-77.05c0-58.69 43-77.06 72.63-77.06c30.72-.01 52.7 11.95 65.99 35.86m143.05 0l-32.78 17.28c-9.5-19.77-25.72-19.93-27.9-19.93c-22.14 0-33.22 14.61-33.22 43.84c0 23.55 9.23 43.84 33.22 43.84c14.45 0 24.65-7.09 30.54-21.26l31 15.5c-2.1 3.75-21.39 38.98-65.09 38.98c-22.69 0-73.96-9.87-73.96-77.05c0-58.67 42.97-77.06 72.63-77.06c30.71-.01 52.58 11.95 65.56 35.86M247.56 8.05C104.74 8.05 0 123.11 0 256.05c0 138.49 113.6 248 247.56 248c129.93 0 248.44-100.87 248.44-248c0-137.87-106.62-248-248.44-248m.87 450.81c-112.54 0-203.7-93.04-203.7-202.81c0-105.42 85.43-203.27 203.72-203.27c112.53 0 202.82 89.46 202.82 203.26c-.01 121.69-99.68 202.82-202.84 202.82"
                                            fill=currentColor />
                                    </symbol>
                                    <use xlink:href=#ai:fa6-brands:creative-commons></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                            <?php if ($this->is('post')): ?>
                                <div class="flex w-full gap-4 flex-col mb-4 justify-between md:flex-row overflow-hidden">
                        
                            <div
                                class="flex items-center w-full justify-start btn-card gap-4 h-[3.75rem] max-w-full px-4 rounded-2xl ">
                                <svg data-icon=material-symbols:chevron-left-rounded height=32 viewBox="0 0 24 24"
                                    width=32 class=text-[var(--primary)]>
                                    <symbol id=ai:material-symbols:chevron-left-rounded>
                                        <path
                                            d="m10.8 12l3.9 3.9q.275.275.275.7t-.275.7t-.7.275t-.7-.275l-4.6-4.6q-.15-.15-.212-.325T8.425 12t.063-.375t.212-.325l4.6-4.6q.275-.275.7-.275t.7.275t.275.7t-.275.7z"
                                            fill=currentColor />
                                    </symbol>
                                    <use xlink:href=#ai:material-symbols:chevron-left-rounded></use>
                                </svg>
                                <div
                                    class="transition whitespace-nowrap dark:text-white/75 text-black/75 max-w-[calc(100%_-_3rem)] overflow-ellipsis overflow-hidden">
                                    <?php $this->thePrev('<p class="w-full active:scale-95 font-bold overflow-hidden">%s</p>', '没有了'); ?></div>
                            </div>
                            <div
                                class="flex items-center w-full btn-card gap-4 h-[3.75rem] max-w-full px-4 rounded-2xl justify-end">
                                <div
                                    class="transition whitespace-nowrap dark:text-white/75 text-black/75 max-w-[calc(100%_-_3rem)] overflow-ellipsis overflow-hidden">
                                    <?php $this->theNext('<p class="w-full active:scale-95 font-bold overflow-hidden">%s</p>', '没有了'); ?>
                                </div>
                                    <svg data-icon=material-symbols:chevron-right-rounded
                                    height=32 viewBox="0 0 24 24" width=32 class=text-[var(--primary)]>
                                    <symbol id=ai:material-symbols:chevron-right-rounded>
                                        <path
                                            d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.6 4.6q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7z"
                                            fill=currentColor />
                                    </symbol>
                                    <use xlink:href=#ai:material-symbols:chevron-right-rounded></use>
                                </svg>
                            </div>
                       
                        </div>
                           <?php endif; ?>
                </main>
                <?php // 第三方评论or自带评论 
                if($this->options->twikoo): ?>
                <?php $this->options->twikoo() ?>
                <?php else: ?>
                <?php $this->need('c.php'); ?>
                <?php endif; ?>
            </div>
            <?php $this->need('f.php'); ?>
  </div>
    </div>
</body>

</html>