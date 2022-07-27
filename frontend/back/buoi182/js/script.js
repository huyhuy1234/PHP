var arr1 = [4, 5, 9, 10];

// Dùng for of
var sum = 0;
for (const value of arr1) {
    sum += value;
}
console.log(sum);

// Dùng vòng lặp for
sum=0;
var count = arr1.length; //đếm số lượng phần tử , count = 4
for (var i= 0; i <= count - 1; i++){
    sum += arr1[i];
}
console.log(sum);
// console.log(count);


// Dùng vòng lặp while
sum = 0;
var count = arr1.length;
var i = 0;
while (i <= count -1){
    sum += arr1[i];
    i++;
}
console.log(sum);


// Dùng vòng lặp Do/While
sum = 0;
var count =arr1.length;
var i = 0;
do {
    sum += arr1[i];
    i++;
} while (i <= count-1);
console.log(sum);

sum =0;
// Dùng for in (dùng cho object)
var diemThi = {toan: 8, hoa: 7.5, ly: 7}
for (const property in diemThi) {
    // console.log(diemThi.hoa);

    sum += diemThi[property];
}
console.log(sum);

// function
// Gôm nhưng code giống nhau lại xong xài ở nhiều nơi 
// chia bài toán ra làm những phần nhỏ để dễ sử lý

function tong(a, b){
    var c = a + b;
    return c;
}

var x = 18;
var y = 20;
console.log(tong(x, y));

var a = 05;
var b = 07;
console.log(tong(a, b));


// viết function tính tổng giá trị các phần tử trong array
function tongA(arr){
    sum = 0;
    var dem = arr.length;
    for(i= 0; i<= dem -1; i++){
        sum += arr[i];
        // return sum;
    }
    return sum;
}

var arr3 = [1, 2, 3];
console.log(tongA(arr3));

var arr4 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
console.log(tongA(arr4));