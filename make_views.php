<?php

$p = "<x-pembeli-layout><div class='p-6'><h2 class='text-2xl font-bold'>%s</h2><p class='mt-4 text-gray-500'>Halaman ini sedang dalam tahap pengembangan (Coming Soon).</p></div></x-pembeli-layout>";
$f = "<x-fg-layout><div class='p-6'><h2 class='text-2xl font-bold'>%s</h2><p class='mt-4 text-gray-500'>Halaman ini sedang dalam tahap pengembangan (Coming Soon).</p></div></x-fg-layout>";

file_put_contents('resources/views/pembeli/favorites.blade.php', sprintf($p, 'Favorit & Wishlist'));
file_put_contents('resources/views/pembeli/transactions.blade.php', sprintf($p, 'Riwayat Transaksi'));
file_put_contents('resources/views/fotografer/orders.blade.php', sprintf($f, 'Pesanan & Transaksi'));
file_put_contents('resources/views/fotografer/earnings.blade.php', sprintf($f, 'Pendapatan & Pencairan'));
file_put_contents('resources/views/fotografer/storage.blade.php', sprintf($f, 'Penggunaan Storage'));
file_put_contents('resources/views/fotografer/portfolio.blade.php', sprintf($f, 'Profil & Portofolio'));

echo "Done\n";
