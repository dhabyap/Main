<footer class="bg-black text-[#E6E6E6] w-full border-t-2 border-black" id="contact">
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="p-8 lg:p-16 border-b lg:border-b-0 lg:border-r border-[#333]">
            <h2 class="text-5xl lg:text-6xl font-bold uppercase tracking-tight-custom leading-none mb-8">
                Let's<br>Connect.
            </h2>
            <div class="space-y-4">
                <label class="font-tech text-xs uppercase tracking-widest text-gray-400">Direct Contact</label>
                <div class="flex flex-col gap-4">
                    <a href="mailto:dhabyap@gmail.com"
                        class="text-xl lg:text-2xl hover:text-[#FF3300] font-bold border-b border-[#333] pb-2 w-max break-all">dhabyap@gmail.com</a>
                    <a href="tel:+6289656380397"
                        class="text-lg lg:text-xl hover:text-[#FF3300] font-tech border-b border-[#333] pb-2 w-max">(+62)
                        896-5638-0397</a>
                </div>
            </div>
        </div>

        <div class="p-8 lg:p-16 flex flex-col justify-between">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12 lg:mb-16">
                <div>
                    <h4 class="font-tech text-xs text-gray-400 uppercase mb-4">Location</h4>
                    <p class="uppercase font-bold text-sm leading-relaxed">
                        Bandung, Jawa Barat<br>
                        Indonesia<br>
                        GMT +7
                    </p>
                </div>
                <div>
                    <h4 class="font-tech text-xs text-gray-400 uppercase mb-4">Social</h4>
                    <ul class="uppercase font-bold text-sm leading-relaxed space-y-2">
                        <li><a href="https://www.linkedin.com/in/dhaby-anggika-putra-74371b225/" target="_blank"
                                class="hover:text-[#FF3300]">LinkedIn</a></li>
                        <li><a href="#" class="hover:text-[#FF3300]">GitHub</a></li>
                        <li><a href="#" class="hover:text-[#FF3300]">GitLab</a></li>
                    </ul>
                </div>
            </div>

            <div
                class="flex flex-col md:flex-row justify-between items-start md:items-center pt-8 border-t border-[#333] font-tech text-[10px] uppercase text-gray-500 gap-2">
                <div>© {{ date('Y') }} DHABY ANGGIKA PUTRA.</div>
                <div class="flex items-center gap-1">
                    POWERED BY <iconify-icon icon="solar:battery-charge-linear"></iconify-icon> LARAVEL
                </div>
            </div>
        </div>
    </div>
</footer>