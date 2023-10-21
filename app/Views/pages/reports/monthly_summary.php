
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
        <div class="content" id="data">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <strong class="card-title">Reports of (September)</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width:50%">Total Purchase </th>
                                            <th style="width:50%">&nbsp; &nbsp; <?= round($purSum) ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <th style="width:50%">Total Meal </th>
                                            <th style="width:50%">&nbsp; &nbsp; <?= round($mealSum) ?></th>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="text-center">
                                            <th style="width:50%">Meal Rate </th>
                                            <th style="width:50%">&nbsp; &nbsp; <?= round($purSum/$mealSum) ?></th>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="text-center">
                                            <th style="width:50%">Total Meal Cost </th>
                                            <th style="width:50%">&nbsp; &nbsp; <?= round(($purSum/$mealSum)*$mealSum) ?></th>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="text-center">
                                            <th style="width:50%">Total Deposite </th>
                                            <th style="width:50%">&nbsp; &nbsp; <?= round($depSum) ?></th>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="text-center">
                                            <th style="width:50%">House Rent Cost </th>
                                            <th style="width:50%">&nbsp; &nbsp; <?= round($rentSum) ?></th>
                                        </tr>
                                    </tbody>
                                </table>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Total Cost of this Month.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td><?= round($purSum + $depSum + $rentSum) ?></td>
                                        </tr>
                                    </tbody>
                                    <thead>
                                        <tr class="text-center">
                                            <th>Total Payment of this Month.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td><?= round($paySum) ?></td>
                                        </tr>
                                    </tbody>
                                    <thead>
                                        <tr class="text-center">
                                            <th>Total Due</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td><?= round(($purSum + $depSum + $rentSum) - $paySum) ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center d-flex">
                                            <th style="width:50%">Print This Report</th>
                                            <th style="width:50%"><a href="#" class=" btn btn-warning mx-2" onclick="printpage()" ><i class="fa fa-print"></i></a></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <script>
            function printpage(){
                    var body = document.getElementById('body').innerHTML;
                    var data = document.getElementById('data').innerHTML;
                    document.getElementById('body').innerHTML=data;
                    window.print();
                    document.getElementById('body').innerHTML=body;
                }
        </script>

<!--------------------------------- End Content ----------------------------->
<?= $this->include('Backend/footerB');?>
<?= $this->endSection('content');?>