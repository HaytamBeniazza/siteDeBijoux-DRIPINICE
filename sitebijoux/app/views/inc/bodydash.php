<div class="container">
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col">

                <div class="mt-5 mb-5 d-flex justify-content-between">
                    <h2 class="pull-left ">Products</h2>
                    <a href="create.php" class="btn bg-warning  d-flex align-items-center text-decoration-none text-white ">New Product</a>
                </div>


                <div class="container overflow-scroll">
                <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Category</th>
                <th scope="col">Tools</th>
              </tr>
            </thead>
                </table>
                </div>
                    <!-- <?php
                    if (isset($_POST['search'])) {
                        $keyword = $_POST['keyword'];
                        $query = $data->prepare("SELECT * FROM produits WHERE title LIKE '%$keyword%' or id_prod='$keyword' ");
                        $query->execute();

                        echo '<table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Category</th>
                <th scope="col">Tools</th>
              </tr>
            </thead>
            <tbody> ';
                        while ($target = $query->fetch()) {


                            echo '<tr>
                        <th scope="row">' . $target["id_prod"] . '</th>
                        <td>' . $target["title"] . '</td>
                        <td>' . $target["prix"] . '</td>
                        <td>' . $target["quantite"] . '</td>
                        <td>' . $target["id_cat"] . '</td>
                        <td class="d-flex justify-content-start"> <a href="Update.php?id=' . $target['id_prod'] . '" class="me-3" ><i class="bi bi-pencil-square text-success"></i></a>
                      <a href="delete.php?id=' . $target['id_prod'] . '" ><span class="bi bi-trash text-danger"></span></a>
                      </td>
                        
                      </tr>';
                            echo "</tbody>";
                            echo "</table>";
                            break;
                        }
                    } else {
                        $sql = "SELECT * FROM produits";
                        $res = $data->query($sql);

                        if ($res->rowCount() > 0) {
                            echo '<table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Category</th>
                    <th scope="col">Tools</th>
                  </tr>
                </thead>
                <tbody> ';
                            $products = $res->fetchALL();
                            foreach ($products as $key) {
                                echo '<tr>
                  <th scope="row">' . $key["id_prod"] . '</th>
                  <td>' . $key["title"] . '</td>
                  <td>' . $key["prix"] . '</td>
                  <td>' . $key["quantite"] . '</td>
                   <td>' . $key["id_cat"] . '</td>
                   <td class="d-flex justify-content-center"> <a href="Update.php?id=' . $key['id_prod'] . '" class="me-3" ><i class="bi bi-pencil-square text-success"></i></a>
                 <a href="delete.php?id=' . $key['id_prod'] . '" ><span class="bi bi-trash text-danger"></span></a>
                 </td>
                   
                </tr>';
                            }
                            echo "</tbody>";
                            echo "</table>";
                        } else {
                            echo '<div class="alert alert-danger"><em>Pas d\'enregistrement</em></div>';
                        }
                    }



                    ?> -->
                </div>
            </div>
        </div>
    </div>
</div>