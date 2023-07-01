<?php require_once "sections/header.php"?>

<?php require_once "sections/sidebar.php"?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Menyu qo'shish</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Asosiy</a></li>
                            <li class="breadcrumb-item active">
                                <a href="/admin?r=menu">Menyu</a></li>
                            <li class="breadcrumb-item active">
                                <a href="/admin?r=menu-add">Menyu qo'shish</a>
                            </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
<!--                --><?php //debug($_POST);die;?>

                <?php if (!empty($errorMessage)) : ?>
                    <div class="alert alert-danger"><?=$errorMessage?></div>
                <?php endif;?>
                <form method="post">

                    <div class="row">

                        <div class="col-md-8">

                            <div class="card">

                                <div class="card-body">

                                    <input type="text" class="form-control mb-3" name="title"  placeholder="Nomi" required>
                                    <input type="text" class="form-control mb-3" name="link"  placeholder="URL Manzil" required>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="card">

                                <div class="card-body">

                                    <input type="text" class="form-control mb-3" name="position"  placeholder="Joylashuv" required>
                                    <input type="text" class="form-control mb-3" name="order_by"  placeholder="Navbati" required>
                                    <input type="text" class="form-control mb-3" name="parent"  placeholder="Ota element" required>
                                    <input type="text" class="form-control mb-3" name="status"  placeholder="Status" required>

                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-12">
                        <button class="btn btn-success">Saqlash</button>
                    </div>


                </form>

            </div>
        </section>
        <!-- right col -->
    </div>
    <!-- /.row (main row) -->

    <!-- /.content-wrapper -->

<?php require_once 'sections/footer.php'?>
<?php
