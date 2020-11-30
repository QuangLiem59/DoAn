var kichthuocspm = document.getElementsByClassName("sanpham")[0].clientWidth;
var ChuyenSlidespm=document.getElementsByClassName("chuyenslidespm")[0];
var div=ChuyenSlidespm.getElementsByClassName("sanpham");
var Maxspm= kichthuocspm*div.length;
Maxspm-=kichthuocspm*4;
var chuyenspm=0;
function Nextspm(){
	if(chuyenspm<Maxspm) chuyenspm+=kichthuocspm;
	else chuyenspm=0;
	ChuyenSlidespm.style.marginLeft='-'+chuyenspm+'px';
}
function Backspm(){
	if(chuyenspm==0)chuyenspm=Maxspm;
	else chuyenspm-=kichthuocspm;
	ChuyenSlidespm.style.marginLeft='-'+chuyenspm+'px';
}
//3s
var intervalm = setInterval(Nextspm, 3000);
function pauseSlidesm(event)
{
    clearInterval(intervalm); 
}
function resumeSlidesm(event)
{
    intervalm = setInterval(Nextspm, 3000);
}
ChuyenSlidespm.onmouseover=pauseSlidesm;
ChuyenSlidespm.onmouseout=resumeSlidesm;