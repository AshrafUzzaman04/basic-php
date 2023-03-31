<?php
include_once("./header.php");
$pagename = basename($_SERVER['PHP_SELF']);
?>
<div class="container-xl mt-2 mb-5">
    <div class="row mx-3 mx-md-0">
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
                    <th scope="col" class="align-middle">Date Of Birth</th>
                    <th scope="col" class="align-middle">Action</th>
                    <th scope="col" class="align-middle">Account Created</th>
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
                            <td class="align-middle"><?= $data['date_of_birth'] ?></td>
                            <td class="align-middle"><?= date('h:m:s || d/m/y', strtotime($data['reg_time']))  ?></td>
                            <td class="align-middle">

                                <div class=" d-inline ">
                                    <a href="./edit.php?id=<?= $data['id'] ?>" style="text-decoration: none;">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                                </div>
                                <div class="d-inline ">
                                    <a href="./dlt.php?id=<?= $data['id'] ?>" style="text-decoration: none;">
                                        <button class="btn btn-danger">Delete</button>
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
        <div class="p-0 m-0 col-12 d-flex justify-content-between align-items-center">
            <button class="btn btn-success col-2 m-0 inline-block" onclick="location.href='./'">Added new
                account
            </button>
            <nav aria-label="Page navigation example col-10 inline-block">
                <ul class="pagination my-0">
                    <li class="page-item <?= ($pageno == 1) ? "disabled" : null ?>"><a class="page-link" href="<?= "$pagename?page=" . ($pageno != 1 ? $pageno - 1 : 1) ?>">Previous</a></li>
                    <?php
                    for ($i = 1; $i <=   $totalPage; $i++) {
                    ?>
                        <li class="page-item <?= ($pageno == $i) ? "active" : null ?>"><a class="page-link" href="<?= "$pagename?page=$i" ?>"><?= $i ?></a></li>
                    <?php
                    }
                    ?>
                    <li class="page-item <?= ($pageno == $totalPage) ? "disabled" : null ?>"><a class="page-link" href="<?= "$pagename?page=" . ($pageno != $totalPage ? $pageno + 1  : $totalPage) ?>">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>

</div>

<!-- include footer -->
<?php
include_once("./footer.php");
?>