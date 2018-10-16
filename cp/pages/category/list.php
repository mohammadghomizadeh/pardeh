<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">لیست دسته بندی ها</h4>
        </div>
        <div class="card-body">
            <div class="card-block">
                <table class="table table-responsive-md text-center">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>عنوان دسته بندی</th>
                        <th>نوع دسته بندی</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    try{
                        $i = 1;
                        $resultcategory = $db->select("category");
                        foreach($resultcategory as $rowcategory)
                        {

                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $rowcategory['title']; ?></td>
                                <td>
                                    <?php
                                    if($rowcategory['type']=="product")
                                    {
                                        echo "محصولات";

                                    }elseif ($rowcategory['type']=="portfolio")
                                    {
                                        echo "نمونه کار";

                                    }elseif ($rowcategory['type']=="news")
                                    {
                                        echo "اخبار";

                                    }elseif ($rowcategory['type']=="article")
                                    {
                                        echo "مقاله";
                                    }


                                    ?>



                                </td>
                                <td>

                                    <a href="index.php?page=category/edit&id=<?php echo $rowcategory['id']; ?>" class="danger" data-original-title="" title="">
                                        <i class="ft-edit font-medium-3"></i>
                                    </a></td>
                                </td>
                                <td>

                                    <a href="index.php?page=category/delete&id=<?php echo $rowcategory['id']; ?>" class="danger" data-original-title="" title="">
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
                        echo $e->getMessage();
                    }


                    ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button onclick="location.href='index.php?page=category/add'" type="button" class="btn btn-success btn-raised">افزودن</button> </td>
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