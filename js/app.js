$(document).ready(function() {
    initEvent();
})

function initEvent() {
    getAll();
}

function getAll() {
    $.ajax({
        type: "POST",
        url: "./Controller/ProductsLogic.php",
        dataType: "json",

        success: function(response) {
            let sanPham = response;
            $('#result')[0].innerHTML = '';

            sanPham.forEach(obj => {
                $('#result')[0].innerHTML += "<div class='one-line'>Mã sản phẩm: <span class='az-masp'>" + obj.maSanPham + "</span> Tên sản phẩm: " + obj.tenSanPham + "</div>";
                $('#result')[0].innerHTML += "<div class='bo-nho'>Bộ nhớ: "+obj.boNho+" GB - Giá: " + obj.gia + "</div><br>";
            });
        },
        error: function(err) {
            console.log(err);
        }
    });
}
