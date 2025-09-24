# Ylimanı WordPress Blok Tema

Modern, hafif ve Gutenberg blok editörü ile uyumlu bir WordPress teması.

## Kurulum
1. Bu depodaki `ylimani-theme` klasörünü `.zip` olarak yükleyin veya aşağıdaki `ylimani-theme.zip` dosyasını WordPress > Görünüm > Temalar > Yeni Ekle > Tema Yükle adımlarından yükleyin.
2. Temayı etkinleştirin.

## Özellikler
- Blok tabanlı şablonlar (`index`, `single`, `page`, `archive`)
- `header` ve `footer` şablon parçaları
- `theme.json` ile renk paleti, tipografi ve boşluk ayarları
- Sistem fontları + Inter değişken fontu (CDN)

## Özelleştirme
- Görünüm > Özelleştir veya Site Editörü üzerinden: renkler, tipografi, düzen genişliği ve blok stillerini değiştirebilirsiniz.
- Menü için `Primary Menu` konumunu kullanın (Navigasyon bloğuna bağlanır).

## Geliştirici Notları
- WordPress >= 6.5 önerilir.
- PHP >= 7.4.
- Blok teması olduğu için klasik `header.php`/`footer.php` yoktur; `parts/*.html` ve `templates/*.html` kullanılır.

## Lisans
GPL-2.0-or-later
