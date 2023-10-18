
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
                                            <th><h3> <strong> Member Name : &nbsp; &nbsp; <?= $memberI['name'] ?> </strong> </h3></th>
                                        </tr>
                                    </thead>
                                </table>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Meal : &nbsp; &nbsp; <?= $meal_I ?></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr class="text-center">
                                            <th>Meal Cost : &nbsp; &nbsp; <?= ($purSum/$mealSum) * $meal_I ?> </th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr class="text-center">
                                            <th>House Rent : &nbsp; &nbsp; <?= ($rentSum + $depSum)/$memberSum ?></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr class="text-center">
                                            <th>Total Cost : &nbsp; &nbsp; <?= ($purSum/$mealSum) * $meal_I + ($rentSum + $depSum)/$memberSum ?></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr class="text-center">
                                            <th>Deposite + Purchase : &nbsp; &nbsp; <?= ($dep_I + $pur_I) ?></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr class="text-center">
                                            <th>Due : &nbsp; &nbsp; <?= ($purSum/$mealSum) * $meal_I + (($rentSum + $depSum)/$memberSum) - ($dep_I + $pur_I) ?></th>
                                        </tr>
                                    </thead>
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