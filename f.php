<div class="col-span-2 onload-animation grid-rows-3 mt-4" id=footer>
                <div class="flex items-center card-base max-w-[var(--page-width)] mx-auto min-h-[4.5rem] px-6 rounded-b-none">
                    <div class="transition text-sm text-50">© 2024 <?php $this->options->title(); ?>. All Rights Reserved.<br>Powered by Typecho . Theme by<a
                            href=https://github.com/saicaca/fuwari class="text-[var(--primary)] font-medium link"
                            target=_blank>Fuwari</a> . Transplant by
                            <a href="https://imsun.org" class="text-[var(--primary)] font-medium link" target="_blank"> Sun </a> 
                    </div>
                </div>
</div>
            <div class="hidden lg:block back-to-top-wrapper" data-astro-cid-eymb5ayk>
                <div class="transition flex items-center back-to-top-btn hide overflow-hidden rounded-2xl" id=back-to-top-btn data-astro-cid-eymb5ayk onclick=backToTop()>
                    <button class="h-[3.75rem] btn-card w-[3.75rem]" aria-label="Back to Top" data-astro-cid-eymb5ayk>
                        <svg
                            data-icon=material-symbols:keyboard-arrow-up-rounded height=1em viewBox="0 0 24 24"
                            width=1em class=mx-auto data-astro-cid-eymb5ayk>
                            <symbol id=ai:material-symbols:keyboard-arrow-up-rounded>
                                <path
                                    d="m12 10.8l-3.9 3.9q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7l4.6-4.6q.3-.3.7-.3t.7.3l4.6 4.6q.275.275.275.7t-.275.7t-.7.275t-.7-.275z"
                                    fill=currentColor />
                            </symbol>
                            <use xlink:href=#ai:material-symbols:keyboard-arrow-up-rounded></use>
                        </svg>
                    </button>
                </div>
            </div>
<script>function backToTop() { window.scroll({ top: 0, behavior: "smooth" }) } function scrollFunction() { let o = document.getElementById("back-to-top-btn"); document.body.scrollTop > 600 || document.documentElement.scrollTop > 600 ? o.classList.remove("hide") : o.classList.add("hide") } window.onscroll = scrollFunction</script>
