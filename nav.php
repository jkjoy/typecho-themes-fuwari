<div class="col-span-2 onload-animation grid-rows-1 z-50" id=top-row>
                <div class="transition absolute -top-8 bg-[var(--card-bg)] h-8 left-0 right-0"></div>
                <div
                    class="flex items-center justify-between card-base h-[4.5rem] max-w-[var(--page-width)] mx-auto overflow-visible px-4 rounded-t-none sticky top-0">
                    <a href=/ class="rounded-lg btn-plain scale-animation active:scale-95 font-bold px-5 h-[3.25rem]">
                        <div class="flex items-center flex-row text-[var(--primary)] text-md"><svg
                                data-icon=material-symbols:home-outline-rounded height=1.75rem viewBox="0 0 24 24"
                                width=1.75rem class="mb-1 mr-2">
                                <symbol id=ai:material-symbols:home-outline-rounded>
                                    <path
                                        d="M6 19h3v-5q0-.425.288-.712T10 13h4q.425 0 .713.288T15 14v5h3v-9l-6-4.5L6 10zm-2 0v-9q0-.475.213-.9t.587-.7l6-4.5q.525-.4 1.2-.4t1.2.4l6 4.5q.375.275.588.7T20 10v9q0 .825-.588 1.413T18 21h-4q-.425 0-.712-.288T13 20v-5h-2v5q0 .425-.288.713T10 21H6q-.825 0-1.412-.587T4 19m8-6.75"
                                        fill=currentColor />
                                </symbol>
                                <use xlink:href=#ai:material-symbols:home-outline-rounded></use>
                            </svg> <?php $this->options->title(); ?></div>
                    </a>
                    <div class="hidden md:flex">
                    <a  class="rounded-lg btn-plain scale-animation active:scale-95 font-bold px-5 h-11" 
                        href="<?php $this->options->siteUrl(); ?>"> <div class="flex items-center"><?php _e('首页'); ?></div></a>
                    <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
                    <?php while ($pages->next()): ?>
                        <a<?php if ($this->is('page', $pages->slug)): ?> <?php endif; ?>
                            href="<?php $pages->permalink(); ?>" class="rounded-lg btn-plain scale-animation active:scale-95 font-bold px-5 h-11"
                            title="<?php $pages->title(); ?>"><div class="flex items-center"><?php $pages->title(); ?></div></a>
                    <?php endwhile; ?>
                    </div>
                    <div class=flex>
                        <style>
                            astro-island,
                            astro-slot,
                            astro-static-slot {
                                display: contents
                            }
                        </style>
                        <script>(self.Astro || (self.Astro = {})).load=async t => { await (await t())() }, window.dispatchEvent(new Event("astro:load")), (() => { var t = Object.defineProperty, e = (e, r, n) => ((e, r, n) => r in e ? t(e, r, { enumerable: !0, configurable: !0, writable: !0, value: n }) : e[r] = n)(e, "symbol" != typeof r ? r + "" : r, n); { let t = { 0: t => s(t), 1: t => n(t), 2: t => new RegExp(t), 3: t => new Date(t), 4: t => new Map(n(t)), 5: t => new Set(n(t)), 6: t => BigInt(t), 7: t => new URL(t), 8: t => new Uint8Array(t), 9: t => new Uint16Array(t), 10: t => new Uint32Array(t) }, r = e => { let [r, n] = e; return r in t ? t[r](n) : void 0 }, n = t => t.map(r), s = t => "object" != typeof t || null === t ? t : Object.fromEntries(Object.entries(t).map((([t, e]) => [t, r(e)]))); class i extends HTMLElement { constructor() { super(...arguments), e(this, "Component"), e(this, "hydrator"), e(this, "hydrate", (async () => { var t; if (!this.hydrator || !this.isConnected) return; let e = null == (t = this.parentElement) ? void 0 : t.closest("astro-island[ssr]"); if (e) return void e.addEventListener("astro:hydrate", this.hydrate, { once: !0 }); let r, n = this.querySelectorAll("astro-slot"), i = {}, o = this.querySelectorAll("template[data-astro-template]"); for (let t of o) { let e = t.closest(this.tagName); null != e && e.isSameNode(this) && (i[t.getAttribute("data-astro-template") || "default"] = t.innerHTML, t.remove()) } for (let t of n) { let e = t.closest(this.tagName); null != e && e.isSameNode(this) && (i[t.getAttribute("name") || "default"] = t.innerHTML) } try { r = this.hasAttribute("props") ? s(JSON.parse(this.getAttribute("props"))) : {} } catch (t) { let e = this.getAttribute("component-url") || "<unknown>", r = this.getAttribute("component-export"); throw r && (e += ` (export ${r})`), console.error(`[hydrate] Error parsing props for component ${e}`, this.getAttribute("props"), t), t } await this.hydrator(this)(this.Component, r, i, { client: this.getAttribute("client") }), this.removeAttribute("ssr"), this.dispatchEvent(new CustomEvent("astro:hydrate")) })), e(this, "unmount", (() => { this.isConnected || this.dispatchEvent(new CustomEvent("astro:unmount")) })) } disconnectedCallback() { document.removeEventListener("astro:after-swap", this.unmount), document.addEventListener("astro:after-swap", this.unmount, { once: !0 }) } connectedCallback() { if (this.hasAttribute("await-children") && "interactive" !== document.readyState && "complete" !== document.readyState) { let t = () => { document.removeEventListener("DOMContentLoaded", t), e.disconnect(), this.childrenConnectedCallback() }, e = new MutationObserver((() => { var e; (null == (e = this.lastChild) ? void 0 : e.nodeType) === Node.COMMENT_NODE && "astro:end" === this.lastChild.nodeValue && (this.lastChild.remove(), t()) })); e.observe(this, { childList: !0 }), document.addEventListener("DOMContentLoaded", t) } else this.childrenConnectedCallback() } async childrenConnectedCallback() { let t = this.getAttribute("before-hydration-url"); t && await import(t), this.start() } async start() { let t = JSON.parse(this.getAttribute("opts")), e = this.getAttribute("client"); if (void 0 !== Astro[e]) try { await Astro[e]((async () => { let t = this.getAttribute("renderer-url"), [e, { default: r }] = await Promise.all([import(this.getAttribute("component-url")), t ? import(t) : () => () => { }]), n = this.getAttribute("component-export") || "default"; if (n.includes(".")) { this.Component = e; for (let t of n.split(".")) this.Component = this.Component[t] } else this.Component = e[n]; return this.hydrator = r, this.hydrate }), t, this) } catch (t) { console.error(`[astro-island] Error hydrating ${this.getAttribute("component-url")}`, t) } else window.addEventListener(`astro:${e}`, (() => this.start()), { once: !0 }) } attributeChangedCallback() { this.hydrate() } } e(i, "observedAttributes", ["props"]), customElements.get("astro-island") || customElements.define("astro-island", i) } })()</script>             
                            <astro-island await-children="" client=load component-export=default
                            component-url="<?php $this->options->themeUrl('/_astro/LightDarkSwitch.CrseSjSX.js'); ?>"
                            opts={&quot;name&quot;:&quot;LightDarkSwitch&quot;,&quot;value&quot;:true} props={}
                            renderer-url="<?php $this->options->themeUrl('/_astro/client.Cx1FBVJX.js'); ?>" ssr="" uid=ilJcP>
                            <div class="relative z-50" role=menu tabindex=-1>
                            <button
                                    class="rounded-lg btn-plain scale-animation h-11 active:scale-90 w-11 relative"
                                    aria-label="Light/Dark Mode" id=scheme-switch role=menuitem>
                                    <div class="absolute opacity-0"></div>
                                    <div class="absolute opacity-0"></div>
                                    <div class=absolute></div>
                                </button>
                                <div class="transition absolute -right-2 float-panel-closed hidden lg:block pt-5 top-11"
                                    id=light-dark-panel>
                                    <div class="float-panel p-2 card-base"><button
                                            class="transition flex items-center rounded-lg active:scale-95 btn-plain font-medium h-9 justify-start px-3 scale-animation w-full whitespace-nowrap mb-0.5">Light</button>
                                        <button
                                            class="transition flex items-center rounded-lg active:scale-95 btn-plain font-medium h-9 justify-start px-3 scale-animation w-full whitespace-nowrap mb-0.5">Dark</button>
                                        <button
                                            class="transition flex items-center rounded-lg active:scale-95 btn-plain font-medium h-9 justify-start px-3 scale-animation w-full whitespace-nowrap current-theme-btn">System</button>
                                    </div>
                                </div>
                            </div>
                        </astro-island>
                        <button
                            class="rounded-lg btn-plain scale-animation h-11 active:scale-90 w-11 md:hidden"
                            aria-label=Menu id=nav-menu-switch name="Nav Menu">
                            <svg
                                data-icon=material-symbols:menu-rounded height=1.25rem viewBox="0 0 24 24"
                                width=1.25rem>
                                <symbol id=ai:material-symbols:menu-rounded>
                                    <path
                                        d="M4 18q-.425 0-.712-.288T3 17t.288-.712T4 16h16q.425 0 .713.288T21 17t-.288.713T20 18zm0-5q-.425 0-.712-.288T3 12t.288-.712T4 11h16q.425 0 .713.288T21 12t-.288.713T20 13zm0-5q-.425 0-.712-.288T3 7t.288-.712T4 6h16q.425 0 .713.288T21 7t-.288.713T20 8z"
                                        fill=currentColor />
                                </symbol>
                                <use xlink:href=#ai:material-symbols:menu-rounded></use>
                            </svg>
                            </button>
                    </div>
                    <div class="absolute float-panel-closed float-panel right-4 fixed px-2 py-2 transition-all" id=nav-menu-panel>
                        <a class="transition flex items-center rounded-lg active:bg-[var(--btn-plain-bg-active)] gap-8 group hover:bg-[var(--btn-plain-bg-hover)] justify-between pl-3 pr-1 py-2"
                        href="<?php $this->options->siteUrl(); ?>"> <div
                        class="transition font-bold dark:text-white/75 group-active:text-[var(--primary)] group-hover:text-[var(--primary)] text-black/75"><?php _e('首页'); ?></div></a>
                    <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
                    <?php while ($pages->next()): ?>
                        <a<?php if ($this->is('page', $pages->slug)): ?> <?php endif; ?>
                            href="<?php $pages->permalink(); ?>" class="transition flex items-center rounded-lg active:bg-[var(--btn-plain-bg-active)] gap-8 group hover:bg-[var(--btn-plain-bg-hover)] justify-between pl-3 pr-1 py-2"
                            title="<?php $pages->title(); ?>"><div
                            class="transition font-bold dark:text-white/75 group-active:text-[var(--primary)] group-hover:text-[var(--primary)] text-black/75">
                            <?php $pages->title(); ?></div></a>
                    <?php endwhile; ?>       
                        </div>
                    <script>(self.Astro || (self.Astro = {})).only = async t => { await (await t())() }, window.dispatchEvent(new Event("astro:only"))</script>
                    <astro-island await-children="" client=only component-export=default
                        component-url="<?php $this->options->themeUrl('/_astro/DisplaySettings.DzxJq6Tk.js'); ?>"
                        opts={&quot;name&quot;:&quot;DisplaySettings&quot;,&quot;value&quot;:&quot;svelte&quot;}
                        props={} renderer-url="<?php $this->options->themeUrl('/_astro/client.Cx1FBVJX.js'); ?>" ssr="" uid=Z114tL9>
                        <template
                            data-astro-template=restore-icon>
                            <svg data-icon=fa6-solid:arrow-rotate-left height=0.875rem
                                viewBox="0 0 512 512" width=0.875rem class="" slot=restore-icon>
                                <symbol id=ai:fa6-solid:arrow-rotate-left>
                                    <path
                                        d="M125.7 160H176c17.7 0 32 14.3 32 32s-14.3 32-32 32H48c-17.7 0-32-14.3-32-32V64c0-17.7 14.3-32 32-32s32 14.3 32 32v51.2l17.6-17.6c87.5-87.5 229.3-87.5 316.8 0s87.5 229.3 0 316.8s-229.3 87.5-316.8 0c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0c62.5 62.5 163.8 62.5 226.3 0s62.5-163.8 0-226.3s-163.8-62.5-226.3 0z"
                                        fill=currentColor />
                                </symbol>
                                <use xlink:href=#ai:fa6-solid:arrow-rotate-left></use>
                            </svg>
                            </template>
                            </astro-island>
                            
                </div>
            </div>