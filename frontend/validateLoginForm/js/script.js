$("form").validate({
	rules: {
	  // simple rule, converted to {required:true}
	//  username: "required",
	//  password: "required",
	  // compound rule
	  username: {
		required: true,
		maxlength: 50
		
	  },
	  password: {
		required: true,
		
	  }
	},
	messages: {
		username: {
			required: 'Vui lòng nhập user name',
			maxlength: 'Vui lòng nhập ít nhất 5 ký tự'
		},
		password: {
			required: 'Vui lòng nhập password',
		},	

	} 
  });

  $.validator.addMethod(
	"regex",
	function(value, element, regexp) {
	  var re = new RegExp(regexp);
	  return this.optional(element) || re.test(value);
	},
	"Please check your input."
  );