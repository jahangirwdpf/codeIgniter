
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
                        <div class="text-right">
                            <a href="#" class=" btn btn-warning mx-2" onclick="printpage()" ><i class="fa fa-print"></i></a>
                        </div>
                        <div class="card" id="data">
                            <div class="card-header">
                                <strong class="card-title">Reports of (September)</strong>
                            </div>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th><h3> <strong> Name : &nbsp; &nbsp; <?= $memberI['name'] ?> </strong> </h3></th>
                                        </tr>
                                    </thead>
                                </table>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width:50%">Meal </th>
                                            <th style="width:50%">&nbsp; &nbsp; <?= round( $meal_I )?></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width:50%">Meal Cost </th>
                                            <th style="width:50%">&nbsp; &nbsp; <?= round(($purSum/$mealSum) * $meal_I) ?></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width:50%">House Rent </th>
                                            <th style="width:50%">&nbsp; &nbsp; <?= round(($rentSum + $depSum)/$memberSum) ?></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width:50%">Total Cost </th>
                                            <th style="width:50%">&nbsp; &nbsp; <?= round(($purSum/$mealSum) * $meal_I + ($rentSum + $depSum)/$memberSum) ?></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width:50%">Deposite + Purchase </th>
                                            <th style="width:50%">&nbsp; &nbsp; <?= round(($dep_I + $pur_I)) ?></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr class="text-center">
                                        <th style="width:50%">Due </th>
                                            <th style="width:50%">&nbsp; &nbsp; <?= round(($purSum/$mealSum) * $meal_I + (($rentSum + $depSum)/$memberSum) - ($dep_I + $pur_I)) ?></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr class="text-center">
                                        <th style="width:50%">Payment </th>
                                            <th style="width:50%">&nbsp; &nbsp; <?= round($pay_I) ?></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr class="text-center">
                                        <th style="width:50%"> Net Due </th>
                                            <th style="width:50%">&nbsp; &nbsp; <?= round(($purSum/$mealSum) * $meal_I + (($rentSum + $depSum)/$memberSum) - ($dep_I + $pur_I) - $pay_I) ?></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width:50%">Status </th>
                                            <th style="width:50%">&nbsp; &nbsp; <?= 'Paid' ?></th>
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