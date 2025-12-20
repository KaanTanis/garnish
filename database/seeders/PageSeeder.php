<?php

namespace Database\Seeders;

use App\Filament\Fabricator\Layouts\DefaultLayout;
use App\Models\Page;
use Database\Seeders\Traits\UploadFile;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    use UploadFile;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createHomePage();
        $this->createAboutPage();
        $this->createProductsPage();
        $this->createFacilityPage();
        $this->createBulkSalesPage();
        $this->createQualityPage();
        $this->createContactPage();
    }

    protected function createHomePage()
    {
        $page = Page::create([
            'slug' => '/',
            'layout' => DefaultLayout::getName(),
            'title' => 'Ana Sayfa',
            'blocks' => [],
        ]);
        
        $page->update([
            'blocks' => [
                $this->createBlock('hero', [
                    'badge_1' => 'FROCHI · Mutlu çıtır anlar',
                    'badge_2' => 'Restoran kalitesinde tavuk',
                    'badge_3' => 'Mutlu çıtır ısırık',
                    'title_1' => 'Hayatın koşturmacasında',
                    'title_2' => 'çıtır mutluluk molası',
                    'subtitle' => 'Restoran lezzetini eve taşıyan, şef tarifleriyle hazırlanan premium tavuk ürünleri. Hızlı, güvenilir ve her lokmada aynı çıtırlık.',
                    'image_text' => 'Tam göğüs, tam çıtırlık',
                    'image_text_2' => 'Şef reçetesi · Temiz içerik · Modern üretim',
                    'image_quality' => 'Tavuk göğsü · Düşük fire · Stabil performans'
                ]),
                $this->createBlock('stats', [
                    'stats' => [
                        ['value' => '100%', 'label' => 'Tavuk Göğsü'],
                        ['value' => '0%', 'label' => 'MDM İçeriği'],
                        ['value' => 'Şef', 'label' => 'Tarifleri'],
                        ['value' => 'Modern', 'label' => 'Üretim Tesisi'],
                    ],
                ]),
                $this->createBlock('about', [
                    'badge' => 'Hikayemiz',
                    'title_1' => 'Hayatın koşturmacasında',
                    'title_2' => 'yanınızdayız',
                    'paragraph_1' => 'Bazen yemek hazırlayacak vaktimiz olmuyor, bazen misafirlerimize evde hızlıca güzel bir şeyler sunmak istiyoruz, bazen de sadece kendimize küçük bir keyif anı ayırıp yemeğimizin tadını çıkarmak...',
                    'paragraph_2' => 'tam da bu anlarda en güvenilir ve en lezzetli alternatif olmak.',
                    'paragraph_3' => 'Restoran lezzetini evinize taşırken, sevdiklerinize güvenle ikram edebileceğiniz ve kendiniz de gönül rahatlığıyla tüketebileceğiniz kaliteli ürünler sunmak için varız.',
                    'feature_1' => 'Yüksek kaliteli ham maddeler',
                    'feature_2' => 'Şef tarifleri',
                    'feature_3' => 'Temiz içerik yaklaşımı',
                ]),
                $this->createBlock('products', [
                    'badge' => 'Ürün Gamı',
                    'title' => 'Ürünlerimiz',
                    'subtitle' => 'Kaliteli ham maddeler ve şef tarifleriyle hazırlanan premium tavuk ürünleri',
                    'product_1_name' => 'Tenders',
                    'product_1_description' => 'Çıtır doku, sulu iç yapı, dengeli baharat. Her lokmada restoran kalitesi.',
                    'product_2_name' => 'Şinitzel',
                    'product_2_description' => 'Kaliteli kaplama, gerçekçi doku, doyurucu lezzet. Premium şef reçetesi.',
                ]),
                $this->createBlock('cta', [
                    'title' => 'FROCHI → GARNISH',
                    'subtitle' => 'Profesyonel Mutfaklar İçin Premium Çözümler',
                    'description' => 'Restoran, kafe, otel ve catering mutfakları için özel geliştirilen Garnish markamız. Gerçek tavuk göğsü, düşük fire, stabil pişirme performansı ve premium kaplama teknolojisi.',
                    'stat_1_value' => 'Yüksek',
                    'stat_1_label' => 'Performans',
                    'stat_2_value' => 'Stabil',
                    'stat_2_label' => 'Kalite',
                    'stat_3_value' => 'Düşük',
                    'stat_3_label' => 'Fire Oranı',
                    'cta_text' => 'Toplu Satış Bilgi Al',
                    'cta_link' => '#contact',
                ]),
                $this->createBlock('details', [
                    'title' => 'Markanıza Sağladığı Avantajlar',
                    'advantages' => [
                        'Yoğun servis saatlerinde hızlı ve stabil performans',
                        'Otel ve restoran mutfaklarında sürdürülebilir kalite',
                        'Catering firmalarında daha düşük fire, daha yüksek verim',
                        'Premium restoranlar için ideal ürün standardı',
                        'Menü standardizasyonu için her lokmada aynı kalite güvencesi',
                    ],
                ]),
                $this->createBlock('quality', [
                    'title' => 'Kalite & Güven',
                    'description' => 'Kalitemizin temeli: temiz içerik, yüksek hijyen, izlenebilir üretim ve şeffaf süreçler. Gıda güvenliği standartlarına bağlı kalarak her ürünün aynı kaliteyi sunmasını sağlarız.',
                    'documents' => [
                        ['title' => 'Kalite Belgesi', 'url' => '/belgeler/belge-1.pdf'],
                        ['title' => 'Hijyen Belgesi', 'url' => '/belgeler/belge-2.pdf'],
                        ['title' => 'ISO Sertifikası', 'url' => '/belgeler/belge-3.pdf'],
                    ],
                ]),
                $this->createBlock('contact', [
                    'badge' => 'İletişim',
                    'title' => 'Bize Ulaşın',
                    'subtitle' => 'Sorularınız, işbirliği talepleriniz ve toplu satış başvurularınız için',
                    'address' => "Kurbanlı Mah. OSB 1013 Sk. No: 5\nTarsus / Mersin",
                    'email' => 'info@garnishgida.com',
                    'phone' => '+90 XXX XXX XX XX',
                ]),
            ],
        ]);
    }

    protected function createAboutPage()
    {
        Page::updateOrCreate([
            'slug' => 'hakkimizda',
        ], [
            'layout' => DefaultLayout::getName(),
            'title' => 'Hakkımızda',
            'blocks' => [
                $this->createBlock('about-hero', [
                    'badge' => 'Hakkımızda',
                    'title' => 'FROCHI Hikayesi',
                    'subtitle' => 'Hayatın koşturmacasında yanınızdayız',
                ]),
                $this->createBlock('about-story', [
                    'title' => 'Hikayemiz',
                    'paragraph_1' => 'Bazen yemek hazırlayacak vaktimiz olmuyor, bazen misafirlerimize evde hızlıca güzel bir şeyler sunmak istiyoruz, bazen de sadece kendimize küçük bir keyif anı ayırıp yemeğimizin tadını çıkarmak...',
                    'paragraph_2' => 'Frochi olarak amacımız, tam da bu anlarda en güvenilir ve en lezzetli alternatif olmak.',
                    'paragraph_3' => 'Restoran lezzetini evinize taşırken, sevdiklerinize güvenle ikram edebileceğiniz ve kendiniz de gönül rahatlığıyla tüketebileceğiniz kaliteli ürünler sunmak için varız.',
                ]),
                $this->createBlock('about-values', [
                    'title' => 'Değerlerimiz',
                    'values' => [
                        ['title' => 'Yüksek kaliteli ham maddeler', 'description' => 'Özenle seçilmiş, doğal içerikler'],
                        ['title' => 'Şef tarifleri', 'description' => 'Restoran kalitesinde özel reçeteler'],
                        ['title' => 'Temiz içerik yaklaşımı', 'description' => 'Şeffaf ve güvenilir üretim'],
                    ],
                ]),
            ],
        ]);
    }

    protected function createProductsPage()
    {
        Page::updateOrCreate([
            'slug' => 'urunlerimiz',
        ], [
            'layout' => DefaultLayout::getName(),
            'title' => 'Ürünlerimiz',
            'blocks' => [
                $this->createBlock('products-hero', [
                    'badge' => 'Ürünlerimiz',
                    'title' => 'Premium Tavuk Ürünleri',
                    'subtitle' => 'Kaliteli ham maddeler ve şef tarifleriyle hazırlanan premium tavuk ürünleri. Her ürün yüksek lezzet, dengeli beslenme ve pratik kullanım sunar.',
                ]),
                $this->createBlock('products-list', [
                    'title' => 'Başlıca ürünlerimiz',
                    'products' => [
                        [
                            'name' => 'Tenders',
                            'description' => 'Çıtır doku, sulu iç yapı, dengeli baharat.',
                            'features' => ['Çıtır doku', 'Sulu iç yapı', 'Dengeli baharat'],
                            'image' => '/temp/paket/tenders2.jpg',
                        ],
                        [
                            'name' => 'Şinitzel',
                            'description' => 'Kaliteli kaplama, gerçekçi doku, doyurucu lezzet.',
                            'features' => ['Kaliteli kaplama', 'Gerçekçi doku', 'Doyurucu lezzet'],
                            'image' => '/temp/paket/sinitzel2.jpg',
                        ],
                    ],
                ]),
            ],
        ]);
    }

    protected function createFacilityPage()
    {
        Page::updateOrCreate([
            'slug' => 'uretim-tesisimiz',
        ], [
            'layout' => DefaultLayout::getName(),
            'title' => 'Üretim Tesisimiz',
            'blocks' => [
                $this->createBlock('facility-hero', [
                    'badge' => 'Üretim Tesisimiz',
                    'title' => 'Modern Üretim Tesisi',
                    'subtitle' => 'Tarsus OSB\'deki modern üretim tesisimiz, yüksek hijyen standartları ve otomasyon kontrollü üretim hatlarıyla güvenli ve stabil kalite sağlar.',
                ]),
                $this->createBlock('facility-content', [
                    'title' => 'Tarsus OSB',
                    'description' => 'Modern üretim tesisimiz, yüksek hijyen standartları ve otomasyon kontrollü üretim hatlarıyla güvenli ve stabil kalite sağlar. Soğuk zincir yönetimi, kalite kontrol süreçleri ve şeffaf üretim yaklaşımıyla tüketicimize güven veririz.',
                    'features' => [
                        'Modern otomasyon sistemleri',
                        'Yüksek hijyen standartları',
                        'Kesintisiz kalite kontrol',
                        'Güvenli donuk zincir yönetimi',
                    ],
                    'images' => [
                        'temp/facility/facility-1.jpg',
                        'temp/facility/facility-2.jpg',
                        'temp/facility/facility-3.jpg',
                    ],
                ]),
            ],
        ]);
    }

    protected function createBulkSalesPage()
    {
        Page::updateOrCreate([
            'slug' => 'toplu-satis',
        ], [
            'layout' => DefaultLayout::getName(),
            'title' => 'Toplu Satış - Garnish',
            'blocks' => [
                $this->createBlock('bulk-sales-hero', [
                    'badge' => 'Toplu Satış',
                    'title' => 'GARNISH',
                    'subtitle' => 'Profesyonel Mutfaklar İçin Premium Tavuk Ürünleri',
                    'description' => 'Restoran, kafe, otel ve toplu yemek hizmeti sunan mutfaklara; yüksek performans, devamlı kalite ve maliyet avantajı sağlar.',
                ]),
                $this->createBlock('bulk-sales-content', [
                    'title' => 'Garnish Ürünleri',
                    'description' => 'Garnish ürünleri, şeflerle birlikte yürütülen kapsamlı Ar-Ge çalışmalarının sonucudur. Her seri, tadı ve dokusu tam doğru kıvamda olacak şekilde standartlaştırılırken; ev yapımı ürünlerin sıcaklığını, doğallığını ve güvenilirliğini korur.',
                    'advantages' => [
                        'Yoğun servis saatlerinde hızlı ve stabil performans',
                        'Otel ve restoran mutfaklarında yüksek ve sürdürülebilir kalite',
                        'Catering firmalarında daha düşük fire, daha yüksek verim',
                        'Premium burger & tavuk restoranları için ideal ürün standardı',
                        'Menü standardizasyonu için her lokmada aynı kalite güvencesi',
                    ],
                    'cta_text' => 'Toplu Satış Bilgi Al',
                    'cta_link' => '/iletisim',
                ]),
            ],
        ]);
    }

    protected function createQualityPage()
    {
        Page::updateOrCreate([
            'slug' => 'kalite-guven',
        ], [
            'layout' => DefaultLayout::getName(),
            'title' => 'Kalite & Güven',
            'blocks' => [
                $this->createBlock('quality-hero', [
                    'badge' => 'Kalite & Güven',
                    'title' => 'Kalite & Güven',
                    'subtitle' => 'Kalitemizin temeli: temiz içerik, yüksek hijyen, izlenebilir üretim ve şeffaf süreçler. Gıda güvenliği standartlarına bağlı kalarak her ürünün aynı kaliteyi sunmasını sağlarız.',
                ]),
                $this->createBlock('quality-principles', [
                    'title' => 'Kalite Prensiplerimiz',
                    'principles' => [
                        [
                            'title' => 'Temiz İçerik',
                            'description' => 'Ürünlerimizde yalnızca özenle seçilmiş yüksek kaliteli ham maddeler kullanırız. MDM içermez, doğal içerik tercih ederiz.',
                        ],
                        [
                            'title' => 'Yüksek Hijyen',
                            'description' => 'Modern tesisimizde kesintisiz hijyen standartları ve kalite kontrol süreçleriyle üretim yapıyoruz.',
                        ],
                        [
                            'title' => 'İzlenebilir Üretim',
                            'description' => 'Her ürünün üretim sürecini takip edebilir, şeffaf süreçlerle güvenilir kalite sunuyoruz.',
                        ],
                        [
                            'title' => 'Şeffaf Süreçler',
                            'description' => 'Alerjen, içerik ve üretim süreçlerini açıkça paylaşır, gıda güvenliği standartlarına bağlı kalırız.',
                        ],
                    ],
                ]),
                $this->createBlock('quality-documents', [
                    'title' => 'Belgelerimiz',
                    'description' => 'Kalitemizin ve güvenilirliğimizin kanıtı olan belgelerimiz',
                    'documents' => [
                        ['title' => 'Kalite Belgesi', 'url' => '/belgeler/belge-1.pdf', 'icon' => 'certificate'],
                        ['title' => 'Hijyen Belgesi', 'url' => '/belgeler/belge-2.pdf', 'icon' => 'shield'],
                        ['title' => 'ISO Sertifikası', 'url' => '/belgeler/belge-3.pdf', 'icon' => 'star'],
                    ],
                ]),
            ],
        ]);
    }

    protected function createContactPage()
    {
        Page::updateOrCreate([
            'slug' => 'iletisim',
        ], [
            'layout' => DefaultLayout::getName(),
            'title' => 'Bize Ulaşın',
            'blocks' => [
                $this->createBlock('contact-hero', [
                    'badge' => 'İletişim',
                    'title' => 'Bize Ulaşın',
                    'subtitle' => 'Sorularınız, işbirliği talepleriniz ve toplu satış başvurularınız için bize ulaşabilirsiniz.',
                ]),
                $this->createBlock('contact-form', [
                    'address' => "Kurbanlı Mah. OSB 1013 Sk. No: 5\nTarsus / Mersin",
                    'email' => 'info@garnishgida.com',
                    'phone' => '+90 XXX XXX XX XX',
                ]),
            ],
        ]);
    }

    protected function createBlock(string $name, array $fields)
    {
        return [
            'data' => $fields,
            'type' => $name,
        ];
    }
}
