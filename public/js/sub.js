
// $(document).ready(function() {
//   $('#send').on('click', function(e) {
//     e.preventDefault();
//     let email = $('#email').val();
// //     if(!email )
// //     setTimeout(() => {
// //       $('#warning').innerHTML = '';
// //     }, 2000);
// // console.log(email);
//     $.ajax({
//       method: 'POST',
//       url: "{{ route('subscribed')}}",
//       headers: { 'X-CSRF-TOKEN': $().attr('content') },
//       data: { email },
//       success: function(data) {
//         console.log({data});
//       },
//       error: function(err) {
//         console.log({err});
//       }
//     });
//   });
// });

$(document).ready(function() {
  $("#sendMessageButton").click(function(e) {
      e.preventDefault();

      var email = $("#email").val();
      $.ajax({
        type:"post",
          url:"/subscribed",
          headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
          data: { 
              email: email,            
          },
          success:function(response){
            swal('successfully Subscribed');
          },
          error:function(err) {
            console.log({err});
         }
         
      });
  });
});
  

