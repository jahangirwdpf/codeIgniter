
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
                                    <li><a href="#">Member</a></li>
                                    <li class="active">Member view</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--------------------------------- Start Content ----------------------------->
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Member Information (Details)</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>ID</th>
                                            <th>Full Name</th>
                                            <th>Address</th>
                                            <th>E-mail (suername)</th>
                                            <th>Mobile</th>
                                            <th colspan='2' >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($member) :?>
                                            <?php foreach ($member as $row) :?>
                                                <tr>
                                                    <td><?= $row['id']?></td>
                                                    <td><?= $row['name']?></td>
                                                    <td><?= $row['address']?></td>
                                                    <td><?= $row['email']?></td>
                                                    <td><?= $row['mobile']?></td>
                                                    <td class="text-center"><a href="<?= base_url() ?>member/edit/<?= $row['id']?>" class="btn btn-success"><i class="fa fa-pencil"></i></a</td>
                                                    <td class="text-center"><a href="member/delete/<?= $row['id']?>" class="btn btn-danger"><i class="fa fa-trash"></a</td>
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

<!----------------------- End Content ------------------------------------>
<?= $this->include('Backend/footerB');?>
<?= $this->endSection('content');?>
