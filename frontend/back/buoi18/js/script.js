var arr1 = [4, 5, 9];
var sum = 0;
//for of
for (const kq of arr1) {
    sum += kq;
}
console.log(sum);


//dùng vòng lặp for
sum=0;
var count = arr1.length;
for (var i = 0; i <= count-1; i++) {
    sum+= arr1[i];
    
}
console.log(sum);
sum=0;
// vòng lặp while
var i = 0;
while (i <= count -1) {
    sum += arr1[i];
    i++;
}

console.log(sum);

//dung vong lap do/while
sum =0;
var i = 0;
do {
    sum += arr1[i];
    i++;
}
while(i <= count -1);
console.log(sum);


var diemthi = {toan: 9, hoa: 7, ly: 8};
sum=0;
for (const property in diemthi) {
    sum += diemthi[property];
    
}
console.log(sum);


//function
//a,b là hai tham số, tham số nàm trong dấu ()
// Tổng quan:
//  Bên trong hàm không nhìn thấy biến bên ngoài hàm
//  Ngược lai5L bên ngoài hàm cũng không thể nhìn thấy biến trong hàm

function tong(a, b){
    var c = a + b;
    return c;
}

// sử dụng hàm chổ thứ 1
var x = 5;
var y = 7;
console.log(tong(x, y));


var m = 18;
var n = 20;
console.log(tong(m, n));


