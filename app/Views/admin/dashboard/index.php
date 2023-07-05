<?= $this->extend("admin/layout/main") ?>

<?= $this->section('content') ?>
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
            <!-- Page pre-title -->
                <div class="page-pretitle">
                    Dashboard
                </div>
                <h2 class="page-title">
                    Halaman Awal
                </h2>            
            </div>
            <div class="col-auto ms-auto dprint-none">
                <!-- <div class="link">
                    <ol class="breadcrumb" aria-label="breadcrumbs">
                        <li class="breadcrumb-item">Master Data</li>
                        <li class="breadcrumb-item"><a href="http://localhost/simrs_perawat/sdki">SDKI</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="http://localhost/simrs_perawat/sdki/detail/1">Detail</a></li>
                    </ol>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>


<?= $this->section('js') ?>
<?= $this->endSection('js') ?>