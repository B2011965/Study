/*Bài tập 1: hàm tìm kiếm trên header tất cả các trang*/

//•	checkKeySearch(e)
//•	doSearch()
//•	openCart()
//• showSearch()
/*Hàm hiển thị nội dung keyword trong trang timkiem.html   function showSearch()*/


function checkKeySearch(e)
{
	var key =e.which||e.keyCode;
	if(key==32) doSearch()
}

function doSearch()
{	var frm=document.forms["frm-search"];
	if(frm.words.value.length>0)
		frm.submit();
}

function showSearch(){
	var url= new URL(window.location);
	var ws= url.searchParams.get("words");
	document.getElementById("searchDetail").innerHTML= "<h1> Từ khóa tìm : " + ws +"</h1>" ; 
}
function openCart()
{
	window.location.href = "donhang.html";
}
// trang tìm kiếm


/*Bài tập 2: xác thực dữ liệu tất cả trình duyệt*/

// Trang đăng Nhập
function loginValidate(frm)
{
	var emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

	if(emailReg.test(frm.email.value)==false){
		alert("Vui lòng nhập email: ");
		frm.email.focus();
		return false;
	}
    // pass
	var reg = new RegExp(".{8,}"); 
	if(reg.test(frm.psw.value)==false){
		alert("Vui lòng nhập pass >8: ");
		frm.psw.focus();
		return false;		
	}
	alert("đã nhập");
	return true;
}
// Trang đăng ký
function registerValidate(frm)
{
    var emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    
    if(emailReg.test(frm.email.value)==false){
        alert("Vui long nhap email!!");
        frm.email.focus();
        return false;
    }
    // pass
    var reg = new RegExp(".{8,}");
    if(reg.test(frm.psw.value)==false){
        alert("Vui lòng nhập mật khẩu lớn hơn 8 ký tự");
        frm.psw.focus();
        return false;
    }
    if(frm.psw.value.length != frm.psw2.value.length){
        alert("Nhập lại mật khẩu giống nhau");
        frm.psw2.focus();
        return false;
    }
    

    alert("Da dang ky thanh cong");
    return true;
}

// Trang liên hệ
function contactValidate(frm)
{
    var emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if(frm.name.value.length < 4){
        alert("Vui long nhap ten cua ban!!");
        frm.name.focus();
        return false;
    }

    if(emailReg.test(frm.email.value)==false){
        alert("Nhap mail khong hop le!!");
        frm.email.focus();
        return false;
    }
    
    if(frm.message.value.length < 10){
        alert("Noi dung qua ngan, vui long nhap tu 10 ky tu tro len!!");
        frm.message.focus();
        return false;
    }

    alert("Ban da gui lien he!!");
    return true;
}
//bai tap 3

var itemList={
    "sp001":{ "name":"Sữa Chua Vị Kiwi",
    "price":21000,
    "photo":"images/sanpham/kiwi.jpg"},
    "sp002":{ "name":"Sữa Chua Vị Xoài",
    "price":22000,
    "photo":"images/sanpham/mango.jpg"},
    "sp003":{ "name":"Sữa Chua Vị Dưa lưới",
    "price":23000,
    "photo":"images/sanpham/cantaloupe.jpg"},
    "sp004":{ "name":"Sữa Chua Vị Mâm Xôi",
    "price":24000,
    "photo":"images/sanpham/blackberry.jpg"},
    "sp005":{ "name":"Sữa Chua Vị Dâu Tây",
    "price":25000,
    "photo":"images/sanpham/strawberry.jpg"},
    "sp006":{ "name":"Sữa Chua Vị Việt Quất",
    "price":26000,
    "photo":"images/sanpham/blueberry.jpg"},
    "sp007":{ "name":"Sữa Chua Vị Bưởi",
    "price":27000,
    "photo":"images/sanpham/grapes.jpg"},
    "sp008":{ "name":"Sữa Chua Vị Táo Xanh",
    "price":28000,
    "photo":"images/sanpham/green-apple.jpg"},
    "sp009":{ "name":"Sữa Chua Vị Dứa",
    "price":29000,
    "photo":"images/sanpham/pineapple.jpg"}
    };

if(typeof localStorage['sp001 sp002 sp003 sp004 sp005 sp006 sp007 sp008 sp009'] === "undefined"){
    window.localStorage.setItem(code,number)
}
/*Hàm thêm sản phẩm vào Giỏ hàng**/ 
function addCart(code) 
{ 
var number=parseInt(document.getElementById(code).value); 
var name=itemList[code].name; 
if(number==0) 
return; 
/*i. 
Kiểm tra sự tồn tại của mã sản phẩm trong localStorage, nếu không tồn tại thì thêm mới và thiết 
lập giá trị cho mã sản phẩm*/ 
if(typeof localStorage[code] === "undefined"){ 
window.localStorage.setItem(code,number); }
else{ 
var current=parseInt(window.localStorage.getItem(code)); 
/* ii. Nếu mã sản phẩm đã tồn tại thì kiểm tra tổng của số lượng sản phẩm đã đặt và số lượng sản phẩm đặt mới có vượt quá 100 hay không*/ 
if(current+number>100) 
{ 
window.localStorage.setItem(code,100); 
alert("Mỗi mặt hàng chỉ có thể đặt 100 sản phẩm cho mỗi đơn hàng. Bạn đã đặt 100 sản phẩm của "+name+" này."); 
return; } 
else 
window.localStorage.setItem(code,current+number); 
} 
alert("Đã cập nhật sản phẩm "+name+" với số lượng "+number+" vào giỏ hàng. Số lượng sản phẩm "+name+" đã đặt là "+parseInt(window.localStorage.getItem(code))+"."); 
}
function removeCart(code)
{
if(typeof window.localStorage[code] !== "undefined"){
window.localStorage.removeItem(code);
document.getElementById("cartDetail").getElementsByTagName('tbody')[0].innerHTML="";
showCart();}
}
