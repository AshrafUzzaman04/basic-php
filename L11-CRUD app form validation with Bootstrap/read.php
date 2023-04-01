<?php
include_once("./include/header.php");

// return the file name with extension
// $pagename = basename($_SERVER['PHP_SELF']);

// return remove file extension
$pagename = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>
<div class="mt-2 mb-5 register_table">
    <div class="row mx-auto mx-md-0">
        <div class="text-center text-primary my-2">
            <h2>Registered account</h2>
        </div>
        <table class="table table-hover border">
            <thead class="table-primary">
                <tr>
                    <th scope="col" class="align-middle">Serial No</th>
                    <th scope="col" class="align-middle">Register ID</th>
                    <th scope="col" class="align-middle">Name</th>
                    <th scope="col" class="align-middle">Email</th>
                    <th scope="col" class="align-middle">Password</th>
                    <th scope="col" class="align-middle">Gender</th>
                    <th scope="col" class="align-middle">City</th>
                    <th scope="col" class="align-middle">DOB</th>
                    <th scope="col" class="align-middle">Action </th>
                </tr>
            </thead>
            <?php

            $read_query = "SELECT * FROM `user_data`";
            $read = $connet->query($read_query);
            $total_data = $read->num_rows;
            if ($total_data > 0) {
                $pageno = isset($_GET['page']) ? $_GET['page'] : header("location: $pagename?page=1");
                $dataPerPage = abs(ceil(6));
                $totalPage = abs(ceil($total_data / $dataPerPage));
                // when page=0  then redirect page=1
                if (!($pageno > 0) || $pageno > $totalPage) {
                    header("location: $pagename?page=1");
                } elseif (!is_numeric($pageno)) {
                    header("HTTP/1.0 404 Not Found");
                    include("404.php");
                    exit();
                } else {
                    $pageno = $_GET['page'];
                }
                // database selection limit
                $startPoint = ($pageno - 1) * $dataPerPage;
                $read = $connet->query("SELECT * FROM `user_data` ORDER BY `id` DESC LIMIT $startPoint, $dataPerPage");
                $x = $startPoint;
                while ($data = mysqli_fetch_array($read)) {
            ?>
                    <tbody class="">
                        <tr class="">
                            <td class="align-middle"><?= ++$x; ?></td>
                            <td class="align-middle"><?= $data['id'] ?></td>
                            <td class="align-middle"><?= $data['name'] ?></td>
                            <td class="align-middle"><?= $data['email'] ?></td>
                            <td class="align-middle"><?= $data['password'] ?></td>
                            <td class="align-middle"><?= $data['gender'] ?></td>
                            <td class="align-middle"><?= $data['city'] ?></td>
                            <td class="align-middle"><?= date('d/m/y', strtotime($data['date_of_birth']))  ?></td>
                            <td class="align-middle">
                                <div class=" d-inline">
                                    <a href="./edit?id=<?= $data['id'] ?>" style="text-decoration: none;">
                                        <button class="btn btn-warning mb-2">Edit</button>
                                    </a>
                                </div>
                                <div class="d-inline">
                                    <a href="./dlt?id=<?= $data['id'] ?>" style="text-decoration: none;">
                                        <button class="btn btn-danger mb-2">Delete</button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>

                <?php
                }
                ?>

            <?php
            } else {
            ?>
                <tbody class="mx-auto">
                    <tr>
                        <td>
                            <h2 class="text-danger mx-auto"> No Data Found!</h2>
                        </td>
                    </tr>
                </tbody>

                <script>
                    setInterval(function() {
                        location.href = "./";
                    }, 2000);
                </script>
            <?php } ?>
        </table>
        <div class="p-0 m-0 my-4 d-flex justify-content-between align-items-md-center flex-column-reverse flex-md-row gap-3 gap-md-0 ">
            <button class="btn btn-success m-0 inline-block" style="max-width: max-content;" onclick="location.href='./'">Added new
                account
            </button>
            <nav aria-label="Page navigation example col-10 inline-block">
                <ul class="pagination my-0">

                    <!-- previous page paigination -->
                    <li class="page-item <?= ($pageno == 1) ? "disabled" : null ?>"><a class="page-link" href="<?= "$pagename?page=" . ($pageno != 1 ? $pageno - 1 : 1) ?>">Previous</a></li>

                    <!-- total page -->

                    <?php
                    if ($totalPage > 3 && $pageno > 3) {
                    ?>
                        <li class="page-item <?= ($pageno == 1) ? "active" : null ?>"><a class="page-link" href="<?= "$pagename?page=1" ?>">1</a></li>
                        <li class="page-item page-link border-0">...</li>

                    <?php
                    }
                    ?>
                    <?php
                    $z = 4;
                    if ($pageno <= 3) {
                        $x = 1;
                    } elseif ($pageno >= 4) {
                        $x = $pageno - 1;
                    } else {
                        $x = $pageno;
                    }
                    if ($totalPage - 5 > 0 && $pageno > $totalPage - 5) {
                        $x = $totalPage - 5;
                        $z = 7;
                    }

                    $y = 1;

                    for ($i = $x; $i <= $totalPage; $i++) {
                        if ($y <= $z) {
                    ?>
                            <li class="page-item <?= ($pageno == $i) ? "active" : null ?>"><a class="page-link" href="<?= "$pagename?page=$i" ?>"><?= $i ?></a></li>
                    <?php
                            $y++;
                            $x++;
                        }
                    }
                    ?>

                    <?php
                    if ($x - 1 < $totalPage) {
                    ?>
                        <li class="page-item page-link border-0">...</li>
                        <li class="page-item <?= ($pageno == $totalPage) ? "active" : null ?>"><a class="page-link" href="<?= "$pagename?page=" . $totalPage ?>"><?= $totalPage ?></a></li>


                    <?php
                    }

                    ?>

                    <!-- next button paigination -->
                    <li class="page-item <?= ($pageno == $totalPage) ? "disabled" : null ?>"><a class="page-link" href="<?= "$pagename?page=" . ($pageno != $totalPage ? $pageno + 1  : $totalPage) ?>">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>

</div>

<!-- include footer -->
<?php
include_once("./include/footer.php");
?>