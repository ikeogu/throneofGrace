/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// $(document).ready(function(e){
  
//   alert("hello world");
// });




$("#form").submit(function(e){
    e.preventDefault();
    let _token = "{{csrf_token()}}";
    let url = "/testimony";
    let formData =  $(this).serialize();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
       method:'POST',
       
       url:url,
       data:formData,
      //  success:function(data){
      //     alert(data.success);
      //  }
    });
  });
