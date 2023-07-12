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
            <div class="row row-cards">
                <div class="col-md-12">
                <?= view_cell('AlertMessage::show',[]) ?>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-start">
                            <a href="<?= base_url("category/create") ?>" class="btn btn-success"> Tambah </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Category Name</th>
                                    <th class="w-20">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $page = isset($_GET['page_category'])?$_GET['page_category']:1;
                                $no = 1 + (10*($page-1)) ; foreach ($list as $r) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $r->name ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="<?= site_url("category/$r->category_id") ?>" type="button" class="btn btn-sm mx-20">Edit</a>
                                                <div class="mx-1"></div>
                                                <form action="<?= site_url("category/$r->category_id") ?>" method="POST">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button type="submit" class="btn btn-sm">Hapus</button>
                                                </form>
                                            </div>
                                            
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <?= $list_pager->links('category', 'tabler_template') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->endSection() ?>

