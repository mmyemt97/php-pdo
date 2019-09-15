$(document).ready(function() {
    initEvent();
})

function initEvent() {
    // getAll();
    // $('.az-btn-submit-form').click(function(e) {
    //     e.preventDefault();
    //     let txtUsername = $('#txtUsername').val();
    //     let txtPassword = $('#txtPassword').val();
    //     console.log(txtUsername);
    //     console.log(txtPassword);
    //
    //     signIn(txtUsername, txtPassword);
    // });

    // setInterval(()=>{
    //     $('.az-btn-submit-form').click(function(e) {
    //         e.preventDefault();
    //         let txtUsername = $('#txtUsername').val();
    //         let txtPassword = $('#txtPassword').val();
    //         console.log(txtUsername);
    //         console.log(txtPassword);
    //
    //         signIn(txtUsername, txtPassword);
    //     });
    // }, 100);
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
                $('#result')[0].innerHTML += "<div class='bo-nho'>Bộ nhớ: " + obj.boNho + " GB - Giá: " + obj.gia + "</div><br>";
            });
        },
        error: function(err) {
            console.log(err);
        }
    });
}

// function signIn(txtUsername, txtPassword) {
//     $.ajax({
//         type: "POST",
//         url: "./Controller/KhachhangBL.php",
//         dataType: "dataType",
//         data: {
//             txtUsername: txtUsername,
//             txtPassword: txtPassword
//         },
//         success: function(response) {
//             // let result = response;
//             // $('#result-signin')[0].innerHTML = result;
//             console.log(response);
//         },
//         error: function(error) {
//             console.log(error);
//         }
//     });
// }