<div class="col-span-2 onload-animation lg:col-span-1 overflow-hidden row-end-3 row-start-2" id=content-wrapper>
        <main class=transition-fade id=swup>
                    <?php while ($this->next()): ?>
            <div class="transition border-black/10 border-dashed border-t-[1px] dark:border-white/[0.15] last:border-t-0 md:hidden mx-6" style=--coverWidth:28% data-astro-cid-iyiqi2so></div>
                <div class="flex w-full card-base flex-col-reverse md:flex-col onload-animation overflow-hidden relative rounded-[var(--radius-large)]"   style="animation-delay:calc(var(--content-delay) + 0ms);--coverWidth:28%">
                            <div class="w-full relative md:pl-9 md:pr-2 md:pt-7 pb-6 pl-6 pr-6 pt-6 md:w-[calc(100%_-_52px_-_12px)]" style="--coverWidth:28%" data-astro-cid-iyiqi2so>
                                <a href="<?php $this->permalink() ?>" class="transition dark:hover:text-[var(--primary)] hover:text-[var(--primary)] active:text-[var(--title-active)] before:absolute before:bg-[var(--primary)] before:h-5 before:hidden before:left-[18px] before:rounded-md before:top-[35px] before:w-1 block dark:active:text-[var(--title-active)] font-bold mb-3 md:before:block text-3xl text-90 w-full" data-astro-cid-iyiqi2so style="--coverWidth:28%">
                                    <?php $this->sticky();$this->title(20) ?>
                                    <svg
                                        data-icon=material-symbols:chevron-right-rounded height=28 viewBox="0 0 24 24"
                                        width=28 class="text-[var(--primary)] -translate-y-[0.15rem] inline md:hidden">
                                        <use xlink:href=#ai:material-symbols:chevron-right-rounded></use>
                                    </svg>
                                </a>
                                <div class="flex items-center dark:text-neutral-400 flex-wrap gap-4 gap-x-4 gap-y-2 mb-4 text-neutral-500">
                                    <div class="flex items-center">
                                        <div class=meta-icon data-astro-cid-qtyrxm4s>
                                            <svg
                                                data-icon=material-symbols:calendar-today-outline-rounded height=1em
                                                viewBox="0 0 24 24" width=1em class=text-xl>
                                                <symbol id=ai:material-symbols:calendar-today-outline-rounded>
                                                    <path
                                                        d="M5 22q-.825 0-1.412-.587T3 20V6q0-.825.588-1.412T5 4h1V3q0-.425.288-.712T7 2t.713.288T8 3v1h8V3q0-.425.288-.712T17 2t.713.288T18 3v1h1q.825 0 1.413.588T21 6v14q0 .825-.587 1.413T19 22zm0-2h14V10H5zM5 8h14V6H5zm0 0V6z"
                                                        fill=currentColor />
                                                </symbol>
                                                <use xlink:href=#ai:material-symbols:calendar-today-outline-rounded>
                                                </use>
                                            </svg>
                                        </div>
                                        <span class="text-sm text-50 font-medium">
                                            <?php $this->date(); ?>
                                        </span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class=meta-icon data-astro-cid-qtyrxm4s>
                                            <svg
                                                data-icon=material-symbols:menu-rounded height=1em viewBox="0 0 24 24"
                                                width=1em class=text-xl>
                                                <use xlink:href=#ai:material-symbols:menu-rounded></use>
                                            </svg>
                                        </div>
                                        <div class="flex items-center flex-row flex-nowrap">
                                            <?php foreach($this->categories as $category): ?>
                                            <a href="<?php echo $category['permalink']; ?>" class="transition text-sm text-50 dark:hover:text-[var(--primary)] font-medium hover:text-[var(--primary)] link-lg whitespace-nowrap"><?php echo $category['name']; ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="hidden md:flex items-center">
                                        <div class=meta-icon data-astro-cid-qtyrxm4s>
                                            <svg
                                                data-icon=material-symbols:tag-rounded height=1em viewBox="0 0 24 24"  width=1em class=text-xl>
                                                <symbol id=ai:material-symbols:tag-rounded>
                                                    <path
                                                        d="m9 16l-.825 3.275q-.075.325-.325.525t-.6.2q-.475 0-.775-.375T6.3 18.8L7 16H4.275q-.5 0-.8-.387T3.3 14.75q.075-.35.35-.55t.625-.2H7.5l1-4H5.775q-.5 0-.8-.387T4.8 8.75q.075-.35.35-.55t.625-.2H9l.825-3.275Q9.9 4.4 10.15 4.2t.6-.2q.475 0 .775.375t.175.825L11 8h4l.825-3.275q.075-.325.325-.525t.6-.2q.475 0 .775.375t.175.825L17 8h2.725q.5 0 .8.387t.175.863q-.075.35-.35.55t-.625.2H16.5l-1 4h2.725q.5 0 .8.388t.175.862q-.075.35-.35.55t-.625.2H15l-.825 3.275q-.075.325-.325.525t-.6.2q-.475 0-.775-.375T12.3 18.8L13 16zm.5-2h4l1-4h-4z"
                                                        fill=currentColor />
                                                </symbol>
                                                <use xlink:href=#ai:material-symbols:tag-rounded></use>
                                            </svg>
                                        </div>
                                        <div class="flex items-center flex-row flex-nowrap">
                                            <?php $tags = $this->tags;  // 获取标签
                                            if (empty($tags)): ?>
                                             <p>暂无标签</p>
                                            <?php else: 
                                            $lastTagIndex = count($tags) - 1;  // 计算最后一个标签的索引
                                             foreach($tags as $index => $tag): ?>
                                            <a href="<?php echo $tag['permalink']; ?>" class="transition text-sm text-50 dark:hover:text-[var(--primary)] font-medium hover:text-[var(--primary)] link-lg whitespace-nowrap"><?php echo $tag['name']; ?> </a> 
                                            <?php if ($index != $lastTagIndex): // 如果不是最后一个标签，显示斜杠 ?>
                                            <div class="text-sm mx-1.5 text-[var(--meta-divider)]">/</div>
                                            <?php endif; ?>
                                            <?php endforeach; 
                                            endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <div class="transition mb-3.5 text-75" style="--coverWidth:28%">
                                <?php  // 判断是否存在自定义字段summary并输出，否则输出自动生成的摘要
                                if($this->fields->summary){
                                    echo $this->fields->summary;
                                } else {
                                  $this->excerpt(40);
                                 }?>
                                 </div>
                                <div class="transition text-sm flex dark:text-white/30 gap-4 text-black/30" style="--coverWidth:28%">
                                    <div style="--coverWidth:28%"><?php $content = $this->content; // 获取文章内容 ?><?php $wordCount = getWordCount($content); // 计算字数 ?><?php echo $wordCount; ?> words</div>
                                    <div style="--coverWidth:28%">|</div>
                                    <div style="--coverWidth:28%"><?php $content = $this->content; // 获取文章内容 ?><?php $readingTime = getReadingTime($content); // 计算阅读时间 ?><?php echo isset($readingTime) ? $readingTime . '  minutes' : '未知'; ?>  </div>
                                </div>
                            </div>
                            <?php
                                    $firstImage = img_postthumb($this->cid);
                                    $cover = $this->fields->cover;
                                    $imageToDisplay = !empty($cover) ? $cover : $firstImage;
                                    if($imageToDisplay): ?>
                                <a href="<?php $this->permalink() ?>" class="relative overflow-hidden active:scale-95 group rounded-xl -mb-2 max-h-[20vh] md:absolute md:bottom-3 md:max-h-none md:mb-0 md:mt-0 md:mx-0 md:right-3 md:top-3 md:w-[var(--coverWidth)] mt-4 mx-4"  aria-label="Simple Guides for Fuwari"  style=--coverWidth:28%>
                                <div class="flex items-center justify-center absolute h-full pointer-events-none w-full z-20" style=--coverWidth:28% >
                                    <svg
                                        data-icon=material-symbols:chevron-right-rounded height=1em viewBox="0 0 24 24"
                                        width=1em
                                        class="transition group-hover:opacity-100 opacity-0 text-5xl text-white">
                                        <use xlink:href=#ai:material-symbols:chevron-right-rounded></use>
                                    </svg>
                                </div>
                                    <div class="w-full relative overflow-hidden h-full">
                                    <img decoding=async height=1024 loading=lazy src="<?php echo $imageToDisplay; ?>" alt="Cover Image of the Post" class="w-full h-full object-cover" style=object-position:center width=2048 />
                                    </div> 
                                </a>
                                <?php else: ?>
                            <a href="<?php $this->permalink() ?>" class="absolute hidden active:bg-[var(--enter-btn-bg-active)] active:scale-95 bg-[var(--enter-btn-bg)] bottom-3 btn-regular hover:bg-[var(--enter-btn-bg-hover)] md:flex right-3 rounded-xl top-3 w-[3.25rem]" aria-label="Markdown Extended Features" data-astro-cid-iyiqi2so style="--coverWidth:28%">
                                <svg data-icon=material-symbols:chevron-right-rounded height=1em
                                    viewBox="0 0 24 24" width=1em
                                    class="transition text-[var(--primary)] mx-auto text-4xl" data-astro-cid-iyiqi2so>
                                    <use xlink:href=#ai:material-symbols:chevron-right-rounded></use>
                                </svg>
                            </a>   
                                <?php endif; ?>    
                </div>
                            <div class="transition border-black/10 border-dashed border-t-[1px] dark:border-white/[0.15] last:border-t-0 md:hidden mx-6" style=--coverWidth:28% data-astro-cid-iyiqi2so></div>
                            <?php endwhile; ?>
           <br>
                             <!--翻页-->
            <div class="flex flex-row gap-3 justify-center mx-auto onload-animation" style="animation-delay:calc(var(--content-delay) + 200ms)">
            <div class="flex items-center rounded-lg font-bold bg-[var(--card-bg)] dark:text-neutral-300 flex-row text-neutral-700">
                <?php $this->pageLink('<svg
                                data-icon=material-symbols:chevron-left-rounded height=1.75rem viewBox="0 0 24 24"
                                width=1.75rem>
                                <symbol id=ai:material-symbols:chevron-left-rounded>
                                    <path
                                        d="m10.8 12l3.9 3.9q.275.275.275.7t-.275.7t-.7.275t-.7-.275l-4.6-4.6q-.15-.15-.212-.325T8.425 12t.063-.375t.212-.325l4.6-4.6q.275-.275.7-.275t.7.275t.275.7t-.275.7z"
                                        fill=currentColor />
                                </symbol>
                                <use xlink:href=#ai:material-symbols:chevron-left-rounded></use>
                            </svg>'); ?>
                </div>
                <?php if($this->_currentPage>0) echo '<div class="flex items-center rounded-lg font-bold justify-center bg-[var(--primary)] dark:text-black/70 h-11 text-white w-11">'.$this->_currentPage.'</div>'; ?>
                <div class="flex items-center rounded-lg font-bold bg-[var(--card-bg)] dark:text-neutral-300 flex-row text-neutral-700">
                <?php $this->pageLink('<svg
                                data-icon=material-symbols:chevron-right-rounded height=1.75rem viewBox="0 0 24 24"
                                width=1.75rem>
                                <symbol id=ai:material-symbols:chevron-right-rounded>
                                    <path
                                        d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.6 4.6q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7z"
                                        fill=currentColor />
                                </symbol>
                                <use xlink:href=#ai:material-symbols:chevron-right-rounded></use>
                            </svg>','next'); ?>
                </div>
            </div>
             <!--翻页-->
             
        </main>
</div>