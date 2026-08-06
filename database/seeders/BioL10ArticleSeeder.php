<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BioL10ArticleSeeder extends Seeder
{
    public function run()
    {
        $blog = [
            'title' => 'Modernisasi Portofolio: Integrasi Sistem Link-in-Bio bio-l10 ke Ekosistem Abysoft',
            'slug' => 'integrasi-bio-l10',
            'excerpt' => 'Integrasi sistem link-in-bio kustom bio-l10 ke dalam ekosistem portofolio abysoft.my.id untuk efisiensi digital presence.',
            'content' => '<h1>Modernisasi Portofolio: Integrasi Sistem Link-in-Bio bio-l10 ke Ekosistem Abysoft</h1><p>Di era digital yang serba cepat, efisiensi dalam menyajikan profil dan portofolio adalah kunci. Hari ini, saya resmi mengintegrasikan <strong>bio-l10</strong>, sistem link-in-bio yang saya bangun sendiri, ke dalam ekosistem portofolio <strong>abysoft.my.id</strong>.</p><h2>Apa itu bio-l10?</h2><p>bio-l10 bukan sekadar link-in-bio biasa. Ini adalah engine yang saya desain untuk memberikan kontrol penuh atas digital presence.</p>',
            'published_at' => now(),
        ];

        Blog::updateOrCreate(['slug' => $blog['slug']], $blog);
    }
}
