<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">لیست نمونه کار</h4>
        </div>
        <div class="card-body">
            <div class="card-block">
                <table class="table table-responsive-md text-center">
                    <thead>
                        <tr>
                            <th>شماره</th>
                            <th>تصویر</th>
                            <th> نام نمونه کار</th>
                            <th>دسته نمونه کار</th>
                            <th>تاریخ</th>
                            <th>بازدید</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $result=$db->select("portfolio");
                    foreach($result as $row){
                    ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><img class="media-object round-media" src="uploads/portfolios/<?php echo $row["image1"];?>" alt="<?php echo $row["title"] ?>" style="height: 75px;"></td>
                            <td><?php echo $row["title"]; ?></td>
                            <td><?php echo $row["cat_id"]; ?></td>
                            <td><?php echo $row["create_at"]?></td>
                            <td><?php echo $row["view"]?></td>
                            <td>
                            <a class="danger" href="index.php?page=portfolio/edit&id=<?php  echo $row["id"];?>">
                                    <i class="ft-edit font-medium-3"></i>
                                </a></td>
                            </td>
                            <td>
                            
                            <a class="danger" href="index.php?page=portfolio/delete&id=<?php echo $row['id'];?>">
                                    <i class="ft-trash font-medium-3"></i>
                                </a>
                            
                            <td>
                                
                            </td>
                        </tr>
                    <?php }; ?>
                        <tr>
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