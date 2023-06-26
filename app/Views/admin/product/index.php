<?= $this->extend("admin/layout/main") ?>


<?= $this->section('content') ?>
  <!-- Page header -->
  <div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
            <!-- Page pre-title -->
                <div class="page-pretitle">
                    Product
                </div>
                <h2 class="page-title">
                    Halaman Product
                </h2>            
            </div>
            <div class="col-auto ms-auto dprint-none">
                <div class="link">
                    <ol class="breadcrumb" aria-label="breadcrumbs">
                        <li class="breadcrumb-item">Master</li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="<?=base_url('product')?>">Product</a></li>
                    </ol>
                </div>
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