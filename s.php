<div class="w-full onload-animation col-span-2 lg:col-span-1 lg:max-w-[17.5rem] lg:row-end-3 lg:row-start-2 row-end-4 row-start-3"
                id=sidebar>
                <div class="flex w-full flex-col gap-4 mb-4">
                    <div class="p-3 card-base"><a href="<?php $this->options->avaUrl() ?>"
                            class="relative overflow-hidden active:scale-95 group rounded-xl block lg:max-w-none lg:mt-0 lg:mx-0 max-w-[240px] mb-3 mt-1 mx-auto"
                            aria-label="Go to About Page">
                            <div
                                class="transition flex items-center w-full absolute group-active:bg-black/50 group-hover:bg-black/30 h-full justify-center pointer-events-none z-50">
                                <svg data-icon=fa6-regular:address-card height=1em viewBox="0 0 576 512" width=1.13em
                                    class="transition group-hover:opacity-100 opacity-0 text-5xl text-white">
                                    <symbol id=ai:fa6-regular:address-card>
                                        <path
                                            d="M512 80c8.8 0 16 7.2 16 16v320c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16zM64 32C28.7 32 0 60.7 0 96v320c0 35.3 28.7 64 64 64h448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64zm144 224a64 64 0 1 0 0-128a64 64 0 1 0 0 128m-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16h192c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80zm200-144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24z"
                                            fill=currentColor />
                                    </symbol>
                                    <use xlink:href=#ai:fa6-regular:address-card></use>
                                </svg></div>
                            <div class="relative overflow-hidden h-full lg:mt-0 lg:w-full mx-auto">
                                <div
                                    class="transition absolute pointer-events-none bg-opacity-50 dark:bg-black/10 inset-0">
                                </div><?php $this->author->gravatar(512); ?>
                            </div>
                        </a>
                        <div class="transition font-bold dark:text-neutral-50 mb-1 text-center text-xl"> 
                            <?php $this->author(); ?>
                        </div>
                        <div class="transition mx-auto bg-[var(--primary)] h-1 mb-2 rounded-full w-5"></div>
                        <div class="transition text-center mb-2.5 text-neutral-400"> <?php $this->options->description() ?></div>
                        <div class="flex gap-2 justify-center mb-1">
                        <?php if($this->options->twitterurl): ?>
                            <a href="<?php $this->options->twitterurl() ?>"
                                class="rounded-lg btn-regular active:scale-90 h-10 w-10" aria-label=Twitter
                                target=_blank rel=me><svg data-icon=fa6-brands:twitter height=1.5rem
                                    viewBox="0 0 512 512" width=1.5rem>
                                    <symbol id=ai:fa6-brands:twitter>
                                        <path
                                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645c0 138.72-105.583 298.558-298.558 298.558c-59.452 0-114.68-17.219-161.137-47.106c8.447.974 16.568 1.299 25.34 1.299c49.055 0 94.213-16.568 130.274-44.832c-46.132-.975-84.792-31.188-98.112-72.772c6.498.974 12.995 1.624 19.818 1.624c9.421 0 18.843-1.3 27.614-3.573c-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319c-28.264-18.843-46.781-51.005-46.781-87.391c0-19.492 5.197-37.36 14.294-52.954c51.655 63.675 129.3 105.258 216.365 109.807c-1.624-7.797-2.599-15.918-2.599-24.04c0-57.828 46.782-104.934 104.934-104.934c30.213 0 57.502 12.67 76.67 33.137c23.715-4.548 46.456-13.32 66.599-25.34c-7.798 24.366-24.366 44.833-46.132 57.827c21.117-2.273 41.584-8.122 60.426-16.243c-14.292 20.791-32.161 39.308-52.628 54.253"
                                            fill=currentColor />
                                    </symbol>
                                    <use xlink:href=#ai:fa6-brands:twitter></use>
                                </svg> 
                            </a>
                            <?php endif; ?>
                            <?php if($this->options->steamurl): ?>
                                <a href="<?php $this->options->steamurl() ?>"
                                class="rounded-lg btn-regular active:scale-90 h-10 w-10" aria-label=Steam target=_blank
                                rel=me><svg data-icon=fa6-brands:steam height=1.5rem viewBox="0 0 496 512" width=1.5rem>
                                    <symbol id=ai:fa6-brands:steam>
                                        <path
                                            d="M496 256c0 137-111.2 248-248.4 248c-113.8 0-209.6-76.3-239-180.4l95.2 39.3c6.4 32.1 34.9 56.4 68.9 56.4c39.2 0 71.9-32.4 70.2-73.5l84.5-60.2c52.1 1.3 95.8-40.9 95.8-93.5c0-51.6-42-93.5-93.7-93.5s-93.7 42-93.7 93.5v1.2L176.6 279c-15.5-.9-30.7 3.4-43.5 12.1L0 236.1C10.2 108.4 117.1 8 247.6 8C384.8 8 496 119 496 256M155.7 384.3l-30.5-12.6a52.79 52.79 0 0 0 27.2 25.8c26.9 11.2 57.8-1.6 69-28.4c5.4-13 5.5-27.3.1-40.3c-5.4-13-15.5-23.2-28.5-28.6c-12.9-5.4-26.7-5.2-38.9-.6l31.5 13c19.8 8.2 29.2 30.9 20.9 50.7c-8.3 19.9-31 29.2-50.8 21m173.8-129.9c-34.4 0-62.4-28-62.4-62.3s28-62.3 62.4-62.3s62.4 28 62.4 62.3s-27.9 62.3-62.4 62.3m.1-15.6c25.9 0 46.9-21 46.9-46.8c0-25.9-21-46.8-46.9-46.8s-46.9 21-46.9 46.8c.1 25.8 21.1 46.8 46.9 46.8"
                                            fill=currentColor />
                                    </symbol>
                                    <use xlink:href=#ai:fa6-brands:steam></use>
                                </svg> 
                            </a>
                            <?php endif; ?>
                            <?php if($this->options->githuburl): ?>
                                <a href="<?php $this->options->githuburl() ?>"
                                class="rounded-lg btn-regular active:scale-90 h-10 w-10" aria-label=GitHub target=_blank
                                rel=me><svg data-icon=fa6-brands:github height=1.5rem viewBox="0 0 496 512"
                                    width=1.5rem>
                                    <symbol id=ai:fa6-brands:github>
                                        <path
                                            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6c-3.3.3-5.6-1.3-5.6-3.6c0-2 2.3-3.6 5.2-3.6c3-.3 5.6 1.3 5.6 3.6m-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9c2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3m44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9c.3 2 2.9 3.3 5.9 2.6c2.9-.7 4.9-2.6 4.6-4.6c-.3-1.9-3-3.2-5.9-2.9M244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2c12.8 2.3 17.3-5.6 17.3-12.1c0-6.2-.3-40.4-.3-61.4c0 0-70 15-84.7-29.8c0 0-11.4-29.1-27.8-36.6c0 0-22.9-15.7 1.6-15.4c0 0 24.9 2 38.6 25.8c21.9 38.6 58.6 27.5 72.9 20.9c2.3-16 8.8-27.1 16-33.7c-55.9-6.2-112.3-14.3-112.3-110.5c0-27.5 7.6-41.3 23.6-58.9c-2.6-6.5-11.1-33.3 2.6-67.9c20.9-6.5 69 27 69 27c20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27c13.7 34.7 5.2 61.4 2.6 67.9c16 17.7 25.8 31.5 25.8 58.9c0 96.5-58.9 104.2-114.8 110.5c9.2 7.9 17 22.9 17 46.4c0 33.7-.3 75.4-.3 83.6c0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252C496 113.3 383.5 8 244.8 8M97.2 352.9c-1.3 1-1 3.3.7 5.2c1.6 1.6 3.9 2.3 5.2 1c1.3-1 1-3.3-.7-5.2c-1.6-1.6-3.9-2.3-5.2-1m-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9c1.6 1 3.6.7 4.3-.7c.7-1.3-.3-2.9-2.3-3.9c-2-.6-3.6-.3-4.3.7m32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2c2.3 2.3 5.2 2.6 6.5 1c1.3-1.3.7-4.3-1.3-6.2c-2.2-2.3-5.2-2.6-6.5-1m-11.4-14.7c-1.6 1-1.6 3.6 0 5.9c1.6 2.3 4.3 3.3 5.6 2.3c1.6-1.3 1.6-3.9 0-6.2c-1.4-2.3-4-3.3-5.6-2"
                                            fill=currentColor />
                                    </symbol>
                                    <use xlink:href=#ai:fa6-brands:github></use>
                                </svg>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="flex w-full flex-col gap-4 top-4 top-4 sticky"><widget-layout
                        class="pb-4 card-base onload-animation"   data-id=categories
                        style="animation-delay:150ms;--collapsedHeight:7.5rem">
                        <div class="transition font-bold before:absolute before:bg-[var(--primary)] before:rounded-md before:w-1 before:h-4 before:left-[-16px] before:top-[5.5px] dark:text-neutral-100 mb-2 ml-8 mt-4 relative text-lg text-neutral-900"
                            style="--collapsedHeight:7.5rem  ">Categories</div>
                        <div class="px-4 collapse-wrapper overflow-hidden" style="--collapsedHeight:7.5rem"
                              id=categories> 
                              
                                <?php $this->widget('Widget_Metas_Category_List')->parse('
                                <a href="{permalink}"><button
                                    class="rounded-lg active:bg-[var(--btn-plain-bg-active)] hover:bg-[var(--btn-plain-bg-hover)] bg-none dark:hover:text-[var(--primary)] dark:text-neutral-300 h-10 hover:pl-3 hover:text-[var(--primary)] pl-2 text-neutral-700 transition-all w-full">
                                    <div class="flex items-center justify-between mr-2 relative">
                                        <div class="overflow-ellipsis overflow-hidden text-left whitespace-nowrap">
                                            {name}</div>
                                        <div
                                            class="transition text-sm flex bg-[oklch(0.95_0.025_var(--hue))] dark:bg-[var(--primary)] dark:text-[var(--deep-text)] font-bold h-7 items-center justify-center min-w-[2rem] ml-4 rounded-lg text-[var(--btn-content)]">
                                            {count}</div>
                                    </div>
                                </button></a> 
                               '); ?>
                       </div>         
                    </widget-layout>
                    <widget-layout class="pb-4 card-base onload-animation"  
                        data-id=tags style="animation-delay:.2s;--collapsedHeight:7.5rem">
                        <div class="transition font-bold before:absolute before:bg-[var(--primary)] before:rounded-md before:w-1 before:h-4 before:left-[-16px] before:top-[5.5px] dark:text-neutral-100 mb-2 ml-8 mt-4 relative text-lg text-neutral-900"
                            style="--collapsedHeight:7.5rem"  >Tags</div>
                        <div class="px-4 collapse-wrapper overflow-hidden" style="--collapsedHeight:7.5rem"
                              id=tags>
                           
                            <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=20')->to($tags); ?>
                        <?php if($tags->have()): ?>
                            <div class="flex gap-2 flex-wrap">
                                <?php while ($tags->next()): ?>
                                     
                                        <a class="text-sm rounded-lg btn-regular h-8 px-3" target="<?php $this->options->sidebarLinkOpen(); ?>" data-toggle="tooltip" data-placement="top" href="<?php $tags->permalink(); ?>" rel="tag" title="<?php $tags->count(); ?> 篇文章"><?php $tags->name(); ?></a>
                                    
                                <?php endwhile; ?>
                            </div>
                        <?php else: ?>
                            <p class="text-sm rounded-lg btn-regular h-8 px-3"><?php _e('暂无标签'); ?></p>
                        <?php endif; ?>      
    
                         
                        </div>
                    </widget-layout>
                </div>
            </div>