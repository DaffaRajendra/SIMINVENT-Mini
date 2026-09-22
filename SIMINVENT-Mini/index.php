<?php
$page_title = "Beranda";
$active = "beranda";
include __DIR__ . '/includes/header.php';

$totalBarang = count($_SESSION['barang'] ?? []);
$totalPeminjam = count($_SESSION['peminjam'] ?? []);
?>
            <div class="container">
            <section class="my-4">
                <h2>Sistem Inventaris Kampus Mini</h2>
                <p>Kelola data barang dan peminjam inventaris kampus dalam satu tempat.</p>
            </section>

            <section class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="card-title mb-3" style="color:#1d5b8a;">Ringkasan</h2>
                    <div class="row g-3 text-center">
                        <div class="col-12 col-md-3">
                            <div class="p-3 rounded-3" style="background-color:#eef4fa;">
                                <h3 class="h6 text-secondary">Total Barang</h3>
                                <p class="fs-2 fw-bold mb-0" style="color:#1d5b8a;"><?= $totalBarang ?></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="p-3 rounded-3" style="background-color:#eef4fa;">
                                <h3 class="h6 text-secondary">Total Peminjam</h3>
                                <p class="fs-2 fw-bold mb-0" style="color:#1d5b8a;"><?= $totalPeminjam ?></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="p-3 rounded-3" style="background-color:#eef4fa;">
                                <h3 class="h6 text-secondary">Sedang Dipinjam</h3>
                                <p class="fs-2 fw-bold mb-0" style="color:#1d5b8a;">4</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="p-3 rounded-3" style="background-color:#eef4fa;">
                                <h3 class="h6 text-secondary">Barang Terlambat</h3>
                                <p class="fs-2 fw-bold mb-0" style="color:#1d5b8a;">1</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="card-title mb-3" style="color:#1d5b8a;">Aksi Cepat</h2>
                    <div class="aksi-grid">
                        <a class="aksi-item" href="barang/tambah.php"><i class="bi bi-plus-circle"></i> Tambah Barang</a>
                        <a class="aksi-item" href="peminjam/tambah.php"><i class="bi bi-person-plus"></i> Tambah Peminjam</a>
                        <a class="aksi-item" href="barang/list.php"><i class="bi bi-list-ul"></i> Daftar Barang</a>
                        <a class="aksi-item" href="peminjam/list.php"><i class="bi bi-people"></i> Daftar Peminjam</a>
                    </div>
                </div>
            </section>
        </div>
<?php include __DIR__ . '/includes/footer.php'; ?>
