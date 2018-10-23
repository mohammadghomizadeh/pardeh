<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">لیست صفحات</h4>
        </div>
        <div class="card-body">
            <div class="card-block">
                <table class="table table-responsive-md text-center">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>عنوان</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    try{
                        $i = 1;
                        $resultpage = $db->select("page");
                        foreach($resultpage as $rowpage)
                        {
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $rowpage['title']; ?></td>

                                <td>

                                    <a href="index.php?page=page/edit&id=<?php echo $rowpage['id']; ?>" class="danger" data-original-title="" title="<?php echo $rowpage['title']; ?>">
                                        <i class="ft-edit font-medium-3"></i>
                                    </a></td>
                                </td>
                                <td>

                                    <a href="index.php?page=page/delete&id=<?php echo $rowpage['id']; ?>" class="danger" data-original-title="" title="<?php echo $rowpage['title']; ?>">
                                        <i class="ft-trash font-medium-3"></i>
                                    </a>

                                <td>

                                </td>
                            </tr>
                            <?php
                            $i++;
                        }
                    }
                    catch(Exception $e)
                    {
                        echo $e;
                    }


                    ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="btn btn-success btn-raised">افزودن</button> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<nav aria-label="Page navigation mb-3">
    <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="#" aria-label="Previous">«</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item active"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">»</a>
        </li>
    </ul>
</nav>