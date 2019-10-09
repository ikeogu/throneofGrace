
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
});
$('#pay').click(function(e){
  e.preventDefault();
  pay()
});



// $("a[href*=#]").click(function(e) {
//   e.preventDefault();
// });
function pay(){
  

  
  let formData = {

    "name" : $('input[name=name]').val(),
    "email"  : $('input[name=email]').val(),
    "amount" : $('input[name=amount]').val(),
    "preferred"  : $('select[name=preffered]').val(),
    "callback_url"  : $('input[name=callback_url]').val(),
    "reference":$('input[name=reference]').val(),
    "key":$('input[name=key]').val()
    };
  
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
      'Content-Type':'application/json',
      'Accept':'application/json',
    
    }

  });
  $.ajax({
    url:"/pays",
    type: "POST",
    data: { myData:formData
    },
    contentType: "json",
    processData: false,
    beforeSend : function() {
      console.log(
        formData
      );
  },
  success:function(data,status) {
    alert(data);
    if (status== 'success') {
      var url = data;
      //window.location = url;
    }
  },
  

  error : function() {

  }
    
  });
}


  
   

