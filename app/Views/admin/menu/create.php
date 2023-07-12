<?php  $this->extend("admin/layout/main")?>

<?php $this->section("content") ?>
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Master
                    </div>
                    <h2 class="page-title">
                        Menu
                    </h2>            
                </div>
                <div class="col-auto ms-auto dprint-none">
                    <div class="link">
                        <ol class="breadcrumb" aria-label="breadcrumbs">
                            <li class="breadcrumb-item">Master Data</li>
                            <li class="breadcrumb-item"><a href="<?= base_url("menu") ?>">menu</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url("menu/tambah") ?>">Create</a></li>
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
                        <?= form_open('menu') ?>
                            <?= csrf_field() ?>
                            <div class="card-body">
                                <?= view_cell('AlertMessage::show',[]) ?>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label required">menu Name</label>
                                    <div class="col">
                                        <input type="text" name="menu" id="menu" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <a href="<?= site_url("menu")?>"  class="btn btn-default">Back</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->endSection() ?>