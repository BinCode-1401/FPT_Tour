<div class="row ">
    <form action="#" method="post" class="fix_width">
        <div class="card ">
            <div class="card-header">
                <h1>Danh sách sản phẩm</h1>
            </div>
            <div class="card-body add_table">
                <table class="table table-striped ">
                    <thead>
                        <tr class="bg-info">
                            <th scope="col">Chọn</th>
                            <th scope="col">Thứ tự</th>
                            <th scope="col">Mã sản phẩm</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Ảnh sản phẩm</th>
                            <th scope="col">Lần sửa cuối cùng</th>
                            <th scope="col">Quản trị viên</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>1</td>
                            <td>ass</td>
                            <td>name</td>
                            <td><img src="#" alt="" width="50px" height="80px"></td>
                            <td>date</td>
                            <td>user</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-muted">
                <div class="row">
                    <div class="col-xl-12 ">
                        <a href="index.php?controller=product$action=delete_product" class="btn btn-dark">Xóa các mục đã chọn</a>
                        <a href="index.php?controller=product&action=add_product" class="btn btn-info">Thêm sản phẩm mới</a>
                        <a href="index.php?controller=product&action=edit_product" class="btn btn-primary">Sửa sản phẩm đã chọn</a>
                        <button type="submit" class="btn btn-danger ">Cập nhật</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>