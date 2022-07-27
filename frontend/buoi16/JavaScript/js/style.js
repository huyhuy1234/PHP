// varibale : biến
// biến dùng để chứa giá trị
// a1 là biến, a1 có giá trị là 5
// Dấu bằng đọc là gán giá trị (gán giá trị 5 vào biến a1)
var a1 = 4;

// cập nhật giá trị của biến
// a1=9
a1 = 2;

// hiển thị giá trị của biến a1
// Cách 1 dùng alert
// alert(a1);

// cách 2: dùng console.log
// console.log(a1);

// cách 3
// document.write(a1); viết ở thẻ Body

// Cập nhật nội dung phần tử (khó nhất )
// .querySelector() là tìm ptu dua vào selector
// .querySelector('#id1') là tìm thẻ có id là id1
var divE1 = document.querySelector("#id1");
var abc = "haha";
// .innerHTML là truy xuất nội dung của phần tử
// Đọc là: gán giá trị Rin Tim vào nội dung của thẻ Div
divE1.innerHTML = "Rin Tim";

// hằng là biến đặc biệt, biến này không được gán lại giá trị
// const là const, dịch là hằng
const PI = 3.14;
console.log(PI);
//  Lỗi, không gán lại giá trị cho hằng

// các kiểu dữ liệu
// 1. Kiểu dữ liệu số (number)
// b1 là biến,b1 có giá trị là 9
//  b1 có kiểu dữ liệu là số (number)
var b1 = 9;
console.log(b1);

// 2. Kiễu dữ liệu chuỗi (string)
// c1 là biến, c1 là giá trị là Con Mèo
// c1 có kiểu dữ liệu là chuổi (string)
// Đặc điểm nhân dạng của chuổi là dấu nháy đơn hoặc nháy đôi(nháy kép)
var c1 = "Huấn";
console.log(c1);
document.write(c1);

// 3. Kiễu dữ liệu luận lý đúng sao (boolean)
// d1 là biến, d1 có giá trị là false
// d1 có kiểu dữ liệu là boolean
// Kiểu boolean chỉ có 2 giá là true và false
var d1 = true;
console.log(d1);

// 4.Kiểu dữ liệu mảng, danh sách (array)
// Array là tập các phần tử CÓ THỨ TỰ
//  Mỗi phần tử có 2 phần: Giá trị và chỉ số
// Các phần tử cách nhau bằng dấu phẩy
// chỉ số ban đầu là 0, và tăng dần từ trái sang phải
// Chỉ số của phần tử cuối cùng = số phần tử - 1
// e.g biến arr1 có 4 phần tử
// Biến arr1 có kiểu dữ liệu mà array
// đặc điểm của array là []

var arr1 = [2, "haha", true, 5];
console.log(arr1);
// Muốn lấy giá trị của ptu thì dựa vào chỉ số
console.log(arr1[0]);

// 5. Kiểu dữ liệu đối tượng OBJECT
// sv là biến, sv có giá trị là :
// đối tượng bao gồm nhiều thuộc tính
// các thuộc tính cách nhau bởi dấu phẩy
// thuộc tính có 2 phần: tên thuộc tính và giá trị của thuộc tính
// lưu ý tên thuộc tính không nằm trong dấu nháy đơn hoặc đôi
// đặc điểm của kiểu dữ liệu đối tượng là dấu {}
// muốn truy xuất giá trị của thuộc tính sẽ dựa vào tên của thuộc tính.
// var sv = {idn: 51800780, name: "Nguyen Quoc Huy", gender:"Nam"};
var list = [
  { idn: 51800780, name: "Nguyen Quoc Huy", gender: "Nam" },
  { idn: 51800781, name: "Nguyen Quoc Huyy", gender: "Nam" },
];
console.log(list.name);
// nhiều dữ liệu :
// var list = [
//     {idn: 51800780, name="Nguyen Quoc Huy", gender="Nam"},
//     {idn: 51800781, name="Nguyen Quoc Huyy", gender="Nam"}
// ]

// 6. Kiểu undefined
// khai báo biến nhưng không khởi tạo giá trị
var e1;
console.log(e1);

// Toán tử
// 1. Toán tử số học: +, -, /, %
// Dấu % là chia lấy dư
var e2 = 4 + 5;
var e3 = 11 % 3;
console.log(e2, e3);

// 2. Toán tử luận lý:
// Dấu ! là not (ngược lại)
// Dấu && là and ( đọc là và)
// Dấu || là or ( hoặc)

var e4 = !true;
var e5 = true && false;
var e6 = true || false;
console.log(e4, e5, e6);

// 3. Toán tử so sánh
//  Dấu < đọc là so sánh nhỏ hơn
// Dấu <= đọc là so sánh nhỏ hơn hoặc bằng
// Dấu > đọc là so sánh lớn hơn
// Dấu >= đọc là so sánh lớn hơn hoặc bằng
// Dấu == là so sánh bằng
// Dấu !=là so sánh khác nhau
// Dấu === là so sánh bằng nhau về kiểu dữ liệu và bằng nhau và giá trị
// Dấu !== là so sánh khác nhau về kiểu dữ liệu hoặc khác nhau về giá trị

var c2 = 3 < 4;
var c3 = 5 <= 5;
var c4 = 4 > 9;
var c5 = 8 == 8;
var c6 = "8" == 8;
var c7 = 6 != 7;
var c8 = "8" === 8;
var c8 = "8" !== 8;
console.log(c2, c3, c4, c5, c6, c7, c8);

// Điều kiện rẻ nhánh
if (4 < 3) {
  console.log("a");
} else {
  console.log("b");
}

// vòng lặp for of
var arr2 = [9, "huy", "tuan", 0, true];
for (const test of arr2) {
  console.log(test);
}

// Cộng dồn
var sum = 5;
sum = sum + 7; //cong don lun

var tong = 5;
tong += 7; // cộng dồn

// tính tông các con số trong array
var arr3 = [4, 7, 3, 5];
var ketqua = 0;
for (const tongarry of arr3) {
  ketqua = ketqua + tongarry;
}

console.log(ketqua);

// tăng i lên 1 đơn vị
var i = 6;
i++;
console.log(i);

// switch/case
var today = 'modfdfn';
switch (today) {
  case 'mon':
    console.log("Hom nay la thu 2");
    break;
  case 'tue':
    console.log("Hom nay la thu 3");
    break;
  case 'wed':
    console.log("Hom nay la thu 4");
    break;
  case 'thu':
    console.log("Hom nay la thu 5");
    break;
  case 'fri':
    console.log("Hom nay la thu 6");
    break;
  case 'sat':
    console.log("Hom nay la thu 7");
    break;
  case 'sun':
    console.log("Hom nay la chu nhat");
    break;

  default:
    console.log('Khong co hom nay');
    break;
}
// chỉ dùng switch khi từng trường hợp cụ thể và so sáng bằng
// if else tổng quát hơn 
