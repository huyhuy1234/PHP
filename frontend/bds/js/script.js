// document.querySelectorAll('button') là lấy tất cả các button 
// Gán 5 button và biến btnEls
// SUy ra => biến btnEls là danh sách chứa 5 button
const btnEls = document.querySelectorAll('button');
// lấy từng button và gán sự kiện onclick lên button
for (const btnEl of btnEls) {
    // statement
    // click vào button thì code trong function(){...}
    btnEl.onclick = function()
    {
        const btnA = document.querySelector('button.active');
        btnA.classList.remove('active');

        // classList là trả về danh sách giá trị của class
        this.classList.add('active');
        // this.classList.remove('active');


        // this là button được click
        // .getAttribute('data') là lấy giá trị của thuộc tính data
        const dataValue = this.getAttribute('data');
        //dấu cộng là nối chuỗi
        // const imgPaste = 'img/' + dataValue + '.png'; //img/map-data.png
        // cách 2(chuyên nghiệp): 
        const imgPaste = `img/${dataValue}.png`;

        const imgEls = document.querySelector('img');
        //cập nhật giá trị biến imagePaste cho thuộc tính src của thẻ img
        imgEls.src = imgPaste;
    }
}
