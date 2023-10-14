
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
                                <li><a href="#">Reports</a></li>
                                <li class="active">Monthly Summary</li>
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
                                <strong class="card-title">Reports of (September)</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Total Purchase</th>
                                            <th>Total Meal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td><?= $sum ?></td>
                                            <td><?= $total ?></td>
                                        </tr>
                                    </tbody>
                                    <thead>
                                        <tr class="text-center">
                                            <th>Meal Rate</th>
                                            <th>Total Meal Cost</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td><?= ''?></td>
                                            <td><?= ''?></td>
                                        </tr>
                                    </tbody>
                                    <thead>
                                        <tr class="text-center">
                                            <th>Total Deposite</th>
                                            <th>Other Cost</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td><?= $sum ?></td>
                                            <td><?= ''?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Total Coast of this Month.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td><?= $total ?></td>
                                        </tr>
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