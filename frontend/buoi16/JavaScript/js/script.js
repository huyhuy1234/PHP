const btnE1 = document.querySelector('#id4');
// gán function(){..} vào sự kiện onlick của button
// khi người dung click chuột thì code trong function mới chạy

btnE1.onclick = function() {
    const inputSoA = document.querySelector('#id1');
    // value là lấy giá trị người dùng vào thẻ
    const soA = inputSoA.value;
    // alert(soA);

    const inputSoB = document.querySelector('#id2');
    // value là lấy giá trị người dùng vào thẻ
    const soB = inputSoB.value;
   

    // Number() là hàm chuyển đổi chữ thành số
    // Number("4") => 4
    const sum = Number(soA) + Number(soB);
    // alert(sum);

    const kq = document.querySelector('#id3');
    kq.innerHTML = sum;
}


// số + số => số
// số + chuỗi => chuỗi (ngược lại)
// chuỗi + chuỗi => chuỗi

// E.g:
// 4 + 5 => 9
// 4 + "5" => 45
// "4" + "5" => 45