<div class="row ">
    <form action="index.php?controller=product&action=insert" method="post" class="fix_width" enctype="multipart/form-data">
        <div class="card fix_width">
            <div class="card-header">
                <h1>Chỉnh sửa thông tin sản phẩm</h1>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Mã sản phẩm</label>
                    <input type="text" name="" readonly id="" class="form-control" placeholder="Mã tự động cập nhật">
                </div>
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="" id="" class="form-control" placeholder="Tên loại hàng">
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" class="form-control-file" name="" id="" placeholder="">
                </div>
            </div>
            <div class="card-footer text-muted">
                <a href="index.php?controller=product&action=show_product" class="btn  btn-danger ">Hủy</a>
                <button type="submit" class="btn btn-success">Cập nhật</button>
            </div>
        </div>
    </form>
</div>