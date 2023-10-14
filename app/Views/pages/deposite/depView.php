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
                                <li class="active">View Deposite</li>
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
                                            <th>Purchese Date</th>
                                            <th>Member Name</th>
                                            <th>Deposite Des.</th>
                                            <th>Price</th>
                                            <th colspan='2' >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($deposite) :?>
                                            <?php foreach ($deposite as $row) :?>
                                                <tr>
                                                    <td><?= $row['d_id'] ?></td>
                                                    <td><?= $row['date'] ?></td>
                                                    <td><?= $row['member_id'] ?></td>
                                                    <td><?= $row['deposite'] ?></td>
                                                    <td><?= $row['price'] ?></td>
                                                    <td class="text-center"><a href="deposite/edit/<?= $row['d_id'] ?>" class='btn btn-success'><i class="fa fa-pencil"></i></a></td>
                                                    <td class="text-center"><a href="deposite/delete/<?= $row['d_id'] ?>" class='btn btn-danger'><i class="fa fa-trash"></i></a></td>
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