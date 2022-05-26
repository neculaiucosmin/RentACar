<?php
session_start();
include "modules/header.php";
// DB credentials.
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pw');
// Establish database connection.
try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
<!doctype html>
<html lang=ro>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"-->
<!--          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <title>Cauta <?php echo $_SESSION['cauta']; ?></title>
</head>
<body class="bg-white w-full">
<section class="font-Raleway">
    <div class="flex flex-row h-48 p-5">
        <div class="flex flex-row-reverse gap-5">
            <div class="">
                <div class="border-blue-600">
                    <div class="border-blue-600">
                        <?php
                        $searchdata = $_POST['cauta'];
                        $sql = "SELECT tblvehicles.id from tblvehicles 
                        join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand 
                        where tblvehicles.VehiclesTitle=:search || tblvehicles.FuelType=:search || tblbrands.BrandName=:search || tblvehicles.ModelYear=:search";
                        $query = $dbh->prepare($sql);
                        $query->bindParam(':search', $searchdata, PDO::PARAM_STR);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                        $cnt = $query->rowCount();
                        ?>
                        <p class="text-4xl"><span><?php echo htmlentities($cnt); ?> Masini gasite</span></p>
                    </div>
                </div>

                <?php
                $sql = "SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid  from tblvehicles 
                join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand 
                where tblvehicles.VehiclesTitle=:search || tblvehicles.FuelType=:search || tblbrands.BrandName=:search || tblvehicles.ModelYear=:search";
                $query = $dbh->prepare($sql);
                $query->bindParam(':search', $searchdata, PDO::PARAM_STR);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                $cnt = 1;
                if ($query->rowCount() > 0) {
                    foreach ($results as $result) { ?>
                        <div class="flex flex-row justify-between gap-5 mt-4 p-1">
                            <div class="product-listing-img"><img
                                        src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1); ?>"
                                        class="max-h-44" alt="Image"/> </a>
                            </div>
                            <div class="product-listing-content">
                                <h5>
                                    <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->BrandName); ?>
                                        , <?php echo htmlentities($result->VehiclesTitle); ?></a></h5>
                                <p class="list-price">RON <?php echo htmlentities($result->PricePerDay); ?> Pe zi</p>
                                <ul>
                                    <li><i class="fa fa-user"
                                           aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity); ?>
                                        scaune
                                    </li>
                                    <li><i class="fa fa-calendar"
                                           aria-hidden="true"></i><?php echo htmlentities($result->ModelYear); ?> model
                                    </li>
                                    <li><i class="fa fa-car"
                                           aria-hidden="true"></i><?php echo htmlentities($result->FuelType); ?></li>
                                </ul>
                                <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id); ?>" class="btn">Detalii <span class="angle_arrow"><i class="fa fa-angle-right"
                                                                         aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>

            <aside class="col-md-3 col-md-pull-9">
                <div class="border p-5">
                    <div class="widget_heading">
                        <h5><i class="fa fa-filter" aria-hidden="true"></i> Gaseste-ti masina </h5>
                    </div>
                    <div class="sidebar_filter">
                        <form action="#" method="get">
                            <div class="form-group select">
                                <select class="form-control">
                                    <option>Select Brand</option>

                                    <?php $sql = "SELECT * from  tblbrands ";
                                    $query = $dbh->prepare($sql);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                    $cnt = 1;
                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $result) { ?>
                                            <option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->BrandName); ?></option>
                                        <?php }
                                    } ?>

                                </select>
                            </div>
                            <div class="form-group select">
                                <select class="form-control">
                                    <option>Tip combustibil</option>
                                    <option value="Petrol">Benzina</option>
                                    <option value="Diesel">Diesel</option>
                                    <option value="CNG">CNG</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-block"><i class="fa fa-search"
                                                                               aria-hidden="true"></i> Cauta masina
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="w-60 p-5 border">
                    <div class="widget_heading">
                        <h5><i class="fa fa-car" aria-hidden="true"></i> Masini adaugate recent</h5>
                    </div>
                    <div class="w-44">
                        <ul>
                            <?php $sql = "SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid  from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand order by id desc limit 4";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                            $cnt = 1;
                            if ($query->rowCount() > 0) {
                                foreach ($results as $result) { ?>

                                    <li class="flex flex-col justify-center gap-2">
                                        <div class="recent_post_img"><a
                                                    href="vehical-details.php?vhid=<?php echo htmlentities($result->id); ?>"><img
                                                        src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1); ?>"
                                                        alt="image"></a></div>
                                        <div class="recent_post_title"><a
                                                    href="vehical-details.php?vhid=<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->BrandName); ?>
                                                , <?php echo htmlentities($result->VehiclesTitle); ?></a>
                                            <p class="text-lg font-semibold">$<?php echo htmlentities($result->PricePerDay); ?>
                                                Pe zi</p>
                                        </div>
                                    </li>
                                <?php }
                            } ?>

                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>


</body>
</html>