<div class="row ">
    <form action="index.php?controller=catalog&action=insert" method="post" class="fix_width">
        <div class="card fix_width">
            <div class="card-header">
                <h1>Chỉnh sửa thông tin loại hàng</h1>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Mã loại hàng</label>
                    <input type="text" name="" readonly id="" class="form-control" placeholder="Mã tự động cập nhật" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Tên loại hàng</label>
                    <input type="text" name="" id="" class="form-control" placeholder="Tên loại hàng" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Thông tin loại hàng</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
            </div>
            <div class="card-footer text-muted">
                <a href="index.php?controller=catalog&action=show_catalog" class="btn  btn-danger ">Hủy</a>
                <button type="submit" class="btn btn-success">Cập nhật</button>
            </div>
        </div>
    </form>
</div>