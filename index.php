<?php


include 'libs/data_produk.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// switch memilih file halaman dari folder "page"
switch ($page) {
    case 'katalog':
        $content = 'page/katalog.php';
        $judul   = 'Katalog Produk';
        break;
    case 'detail':
        $content = 'page/detail.php';
        $judul   = 'Detail Produk';
        break;
    case 'akun':
        $content = 'page/akun.php';
        $judul   = 'Masuk & Daftar';
        break;
    case 'credit':
        $content = 'page/credit.php';
        $judul   = 'Credit';
        break;
    case 'panduan':
        $content = 'page/panduan.php';
        $judul   = 'Panduan Belanja';
        break;
    default:
        $page    = 'home';
        $content = 'page/home.php';
        $judul   = 'Beranda';
        break;
}

include 'framework/html_head.php';
include 'framework/header.php';
echo '<main class="main">';
include $content;
echo '</main>';
include 'framework/footer.php';
?>
