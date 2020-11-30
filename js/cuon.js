$(window).scroll(function () {
    if ($(document).scrollTop() > 200) {
        $('header').css('height', '11vh');
    }
    else {
        $('header').css('height', '15vh');
    }
})
$(document).ready(function () {
    $(".gioh").hide();
    $(".khungdangnhap").hide();
    $(".khungdangky").hide();
    $(".giohang>img,.giohang>h4").click(function () {
        $('.gioh').slideToggle(300);

    });
   $(".taikhoan").click(function(){
       $(".khungdangnhap").fadeIn();
       $(".dangnhap").css('transform','translate(-50%,-50%)');
   })
   $(".dongdangnhap").click(function(){
    $(".dangnhap").css('transform','translate(-150%,-50%)');
    $(".khungdangnhap").fadeOut(500);
   })
   $(".modangky").click(function(){
    $(".dangnhap").css('transform','translate(-150%,-50%)');
    $(".khungdangnhap").fadeOut(500);
    $(".khungdangky").fadeIn(500);
    $(".dangky").css('transform','translate(-50%,-50%)');
   })
   $(".dongdangky").click(function(){
    $(".dangky").css('transform','translate(50%,-50%)');
    $(".khungdangky").fadeOut(500);
   })
   $(".modangnhap").click(function(){
    $(".dangky").css('transform','translate(50%,-50%)');
    $(".khungdangky").fadeOut(500);
    $(".khungdangnhap").fadeIn(500);
    $(".dangnhap").css('transform','translate(-50%,-50%)');
   })
});