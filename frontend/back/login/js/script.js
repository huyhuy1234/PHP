const formEl = document.querySelector("form");
formEl.onsubmit = function () {
  //xóa error
  const labelErrors = document.querySelectorAll("label.error");
  //lấy hết thẻ label có class là error
  for (const labelError of labelErrors) {
    labelError.remove();
  }

  var isError = false;// cắm cờ


  //username
  const usernameEl = document.querySelector("#username");
  const username = usernameEl.value;
  // !username = username == ''
  if (username == "") {
    isError = true;
    const labelError = document.createElement("label");
    labelError.innerHTML = "Vui lòng nhập username";
    labelError.setAttribute("class", "error");
    //<label class="error">Vui lòng nhập username</label>

    usernameEl.after(labelError);
    //Thêm thẻ label error vào sau thể input
  }

  //password
  const passwordEl = document.querySelector("#password");
  const password = passwordEl.value;
  // !password = password == ''
  if (password == "") {
    isError = true;
    const labelError = document.createElement("label");
    labelError.innerHTML = "Vui lòng nhập password";
    labelError.setAttribute("class", "error");
    //<label class="error">Vui lòng nhập password</label>

    passwordEl.after(labelError);
    //Thêm thẻ label error vào sau thể input
  }


  //isError bằng với isError == true
  if(isError){
    return false;
  }
  //return true;//submit lên sever;
  return true; //không submit lên sever
}

// var a = 5;
// // document.write(a);
// a.innerHTML = "cc";
