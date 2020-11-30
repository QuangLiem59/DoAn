var kichthuocsp = document.getElementsByClassName("sanpham")[0].clientWidth;
var ChuyenSlidesp=document.getElementsByClassName("chuyenslidesp")[0];
var div=ChuyenSlidesp.getElementsByClassName("sanpham");
var Maxsp= kichthuocsp*div.length;
Maxsp-=kichthuocsp*4;
var chuyensp=0;
function Nextsp(){
	if(chuyensp<Maxsp) chuyensp+=kichthuocsp;
	else chuyensp=0;
	ChuyenSlidesp.style.marginLeft='-'+chuyensp+'px';
}
function Backsp(){
	if(chuyensp==0)chuyensp=Maxsp;
	else chuyensp-=kichthuocsp;
	ChuyenSlidesp.style.marginLeft='-'+chuyensp+'px';
}
//3s
var interval = setInterval(Nextsp, 3000);
function pauseSlides(event)
{
    clearInterval(interval); 
}
function resumeSlides(event)
{
    interval = setInterval(Nextsp, 3000);
}
ChuyenSlidesp.onmouseover=pauseSlides;
ChuyenSlidesp.onmouseout=resumeSlides;
