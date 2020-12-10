<div class="row ">
    <form action="#" method="post" class="fix_width" enctype="multipart/form-data">
        <div class="card fix_width">
            <div class="card-header">
                <h1>Thêm sản phẩm mới</h1>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Sản phẩm thuộc danh mục</label>
                    <select name="catalogid" id="">
                        <?php
                        // foreach (Showall_danhmucSP() as $row) {
                        //     echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                        // }
                        ?>
                    </select>
                    <div class="form-group">
                        <label for="">Nhập mã sản phẩm</label>
                        <input type="text" name="" id="" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Nhập tên sản phẩm</label>
                        <input type="text" name="" id="" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh sản phẩm</label>
                        <input type="file" class="form-control-file" name="" id="" placeholder="">
                    </div>

                </div>
                <div class="card-footer text-muted">
                    <a href="index.php?controller=product&action=show_product" class="btn btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-success">Cập nhật</button>
                </div>
            </div>
    </form>
</div>