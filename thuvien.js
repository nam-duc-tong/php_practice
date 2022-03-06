$(document).ready(function() {
    var giohang = $("#giohang").children("tr");
    var slsp =  giohang.length;
    var boxcart = $("#boxcart").children("span").eq(0);//lay ra phan tu dau tien cua mang
    boxcart.text(slsp);
    var tensp2 = giohang.eq(1).children("td").eq(0).text();
    // alert(tensp2);
    var hinh2 = giohang.eq(1).children("td").eq(1).children("img").attr("src");
    alert(tensp2+"-------"+hinh2);
});