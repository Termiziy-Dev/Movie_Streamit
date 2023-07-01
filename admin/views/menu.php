<?php require_once "sections/header.php"?>

<?php require_once "sections/sidebar.php"?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Menyu</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?=ADMIN_ASSETS?>#">Asosiy</a></li>
                        <li class="breadcrumb-item active">Menyu</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <table class="table table-hover table-striped table-bordered">

                    <a class="btn btn-success mb-3" href="/admin?r=menu-add">Yangi menyu qo'shish</a>

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Sarlavha</th>
                        <th>Manzil (link)</th>
                        <th>Pozitsiya</th>
                        <th>Amallar</th>
                    </tr>
                </thead>
                <?php if (!empty($allMenu)) :?>
                    <tbody>
                        <?php foreach ($allMenu as$key => $menu):?>
                            <tr>
                                <td><?=$key+1?></td>
                                <td><?=$menu['title']?></td>
                                <td><?=$menu['link']?></td>
                                <td><?=$menu['position']?></td>
                                <td>
                                    <div>
                                        <a href="#" class="btn btn-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                <?php endif;?>
            </table>
        </div>
    </section>
    <!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once 'sections/footer.php'?>
