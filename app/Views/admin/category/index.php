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
                        Category
                    </h2>            
                </div>
                <div class="col-auto ms-auto dprint-none">
                    <div class="link">
                        <ol class="breadcrumb" aria-label="breadcrumbs">
                            <li class="breadcrumb-item">Master Data</li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="http://localhost/simrs_perawat/sdki/detail/1">Category</a></li>
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
                    <div class="card-header d-flex justify-content-end">
                        <a href="<?= base_url("category/create") ?>" class="btn btn-success"> Tambah </a>
                    </div>
                    <div class="card-body">
                        <?php var_dump($list) ?>
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Category Name</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($list as $r) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $r->name ?></td>
                                        <td>
                                            <button type="button" class="btn btn-sm">Edit</button> 
                                            <button type="button" class="btn btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->endSection() ?>