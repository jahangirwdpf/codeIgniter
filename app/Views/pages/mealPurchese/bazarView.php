
<?= $this->extend('Backend/header');?>
<?= $this->section('content');?>
<!--------------------------------- Start Content ----------------------------->

    <!----------------------- Start Breadcrumb ------------------------------------>
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard <i class="fa fa-sign-in" aria-hidden="true"></i></h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Deposite</a></li>
                                <li class="active">View Deposite History</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------------------- Start content ------------------------------------>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Deposite Information (Details)</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>ID</th>
                                            <th>Product Description</th>
                                            <th>Price</th>
                                            <th>Comment</th>
                                            <th colspan='2' >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($bazar) :?>
                                            <?php foreach ($bazar as $row) :?>
                                                <tr>
                                                    <td><?= $row['b_id']?></td>
                                                    <td><?= $row['p_des']?></td>
                                                    <td><?= $row['price']?></td>
                                                    <td><?= $row['comment']?></td>
                                                    <td class="text-center"><a href="<?= base_url() ?>mealPurchese/edit/<?= $row['b_id']?>" class="btn btn-success">Edit</a</td>
                                                    <td class="text-center"><a href="mealPurchese/delete/<?= $row['b_id']?>" class="btn btn-danger">Delete</a</td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

<!--------------------------------- End Content ----------------------------->
<?= $this->include('Backend/footerB');?>
<?= $this->endSection('content');?>