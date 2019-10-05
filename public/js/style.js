

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
// function pay(){
  

//   const form = document.querySelector('form');
//   let obj = Object.values(form).reduce((obj,field) => { obj[field.name] = field.value; return obj }, {})
//   $.ajaxSetup({
//     headers: {
//       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
//       'Content-Type':'application/json',
//       'Accept':'application/json',
    
//     }

//   });
//   $.ajax({
//     url:"/pays",
//     type: "post",
//     data: {
//       name:obj.name,
//       email:obj.email,
//       amount:obj.amount,
//       reference:obj.reference,
//       key:obj.key,
//       preffered:obj.preffered
//     },
//     success:function(data,status) {
//       alert(data);
//       if (status== 'success') {
//         var url = data;
//         window.location = url;
//       }
//     }
//   });
// }


  
   

