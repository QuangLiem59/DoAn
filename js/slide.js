var kichthuoc = document.getElementsByClassName("slider")[0].clientWidth;
var ChuyenSlide=document.getElementsByClassName("chuyenslide")[0];
var img=ChuyenSlide.getElementsByTagName("img");
var Max= kichthuoc*img.length;
Max-=kichthuoc;
var chuyen=0;
function Next(){
	if(chuyen<Max) chuyen+=kichthuoc;
	else chuyen=0;
	ChuyenSlide.style.marginLeft='-'+chuyen+'px';
}
function Back(){
	if(chuyen==0)chuyen=Max;
	else chuyen-=kichthuoc;
	ChuyenSlide.style.marginLeft='-'+chuyen+'px';
}
//Đổi ảnh sau 3s

var interv = setInterval(Next, 3000);
function pauseSlide(event)
{
    clearInterval(interv); 
}
function resumeSlide(event)
{
    interv = setInterval(Next, 3000);
}
ChuyenSlide.onmouseover=pauseSlide;
ChuyenSlide.onmouseout=resumeSlide;