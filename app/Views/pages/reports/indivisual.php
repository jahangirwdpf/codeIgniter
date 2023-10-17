
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
                                <li class="active">Indivisual Summary</li>
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
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Member Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <?= '' ?>
                                        </tr>
                                    </tbody>
                                </table>

<<<<<<< HEAD
=======
                        



                            <div class="card-body">
>>>>>>> fe8e07f1a35eb79767973f7049d1b7aeb3f795e0
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                    
                                        <tr class="text-center">
                                            <th>Meal</th>
                                            <th>Meal Cost</th>
                                            <th>House Rent</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
<<<<<<< HEAD
                                            <td><?= $meal_I ?></td>
                                            <td><?= ($purSum/$mealSum) * $meal_I ?></td>
                                            <td><?= ($rentSum + $depSum)/$memberSum ?></td>
=======
                                            <td><?= $mealSum ?></td>
                                            <td></td>
                                            <td></td>
>>>>>>> fe8e07f1a35eb79767973f7049d1b7aeb3f795e0
                                        </tr>
                                    </tbody>
                                    <thead>
                                        <tr class="text-center">
                                            <th>Total Cost</th>
                                            <th>Deposite + Purchase</th>
                                            <th>Due</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td><?= ($purSum/$mealSum) * $meal_I + ($rentSum + $depSum)/$memberSum ?></td>
                                            <td><?= ($dep_I + $pur_I) ?></td>
                                            <td><?= ($purSum/$mealSum) * $meal_I + (($rentSum + $depSum)/$memberSum) - ($dep_I + $pur_I) ?></td>
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