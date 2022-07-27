$("form").validate({
	rules: {
	  // simple rule, converted to {required:true}
	//  username: "required",
	//  password: "required",
	  // compound rule
	  username: {
		required: true,
		maxlength: 50,
        regex:/^[a-zA￾ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i,
		
	  },
      mobile: {
        required: true,
        regex: /^0([0-9]{9,9})$/,
      },

      email: {
        required: true,
        email: true,
      },

	  password: {
		required: true,
        regex: /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/,	
	  },

      password_confirmation: {
		required: true,
        equalTo: '[name=password]',	
	  },

      hiddenRecaptcha: {
        required: function(){
            if(!grecaptcha.getResponse()){
                //lỗi chưa có chọn: tôi không phải là robot
                return true;
            }
            //người dùng đã xác nhận: tôi không phải là robot
            return false
            }
        },
	},
	messages: {
		username: {
			required: 'Vui lòng nhập họ và tên',
			maxlength: 'Vui lòng nhập không nhập quá 50 ký tự',
            regex: 'Vui lòng nhập đúng định dạng họ và tên',
		},
		password: {
			required: 'Vui lòng nhập mật khẩu',
            regex: ' Vui lòng nhập mật khẩu ít nhật 8 ký tự bao gồm chữ hoa, chữ thường, số và ký tự đặc biệt'
		},
        mobile: {
            required: "Vui lòng nhập số điện thoại",
            regex: 'Vui lòng nhập đúng số điện thoại',
          },	
        email:{
            required: 'Vui lòng nhập email',
            email: 'Vui lòng nhập đúng định dạng con đĩ ơi. Vd: dmm@gmail.com',
        },
        password_confirmation: {
            required: 'Vui lòng xác nhận mật khẩu',
            equalTo: 'Mật khẩu không trùng khớp. Vui lòng nhập lại',	
          },
        
        hiddenRecaptcha: {
            required: 'Vui lòng xác nhận',
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