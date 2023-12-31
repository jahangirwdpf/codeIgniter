
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
        <div class="content" id="data">
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
                                            <th> <strong> Name : &nbsp; &nbsp; <?= $memberI['name'] ?> </strong> </th>
                                        </tr>
                                    </thead>
                                </table>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width:50%">Meal </th>
                                            <th style="width:50%">&nbsp; &nbsp; <?= round($meal_I) ?></th>
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
                                        <th style="width:50%"></th>
                                            <th style="width:50%"><a href="<?= base_url() ?>payAdd" class=" btn btn-primary" > payment</a></th>
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