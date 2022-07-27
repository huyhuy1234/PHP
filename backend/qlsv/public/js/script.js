$("button.delete").click(function (e) {
  var dataHref = $(this).attr("href");
  $("#exampleModal a").attr("href", dataHref);
  //gán giá trị cho thuộc tính
});
