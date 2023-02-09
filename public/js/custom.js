$(document).ready(function() {
    let params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });
    if (params.login) {
        console.log({params});
        $("#myModal").modal("show");
    }
    if(params.register) {
        $("#registerModel").modal("show");
    }

    
    
    
//login  user
$('.formClick').on("submit", function(event) {
  event.preventDefault();
  
  var FinalUrl =  window.location.pathname+"login";
  var form = $(this).closest('form');
  $.ajax({
    url: FinalUrl,
    headers: { 
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      "accept": "application/json",
    },
    type: "POST",
    data: form.serialize(),
    redirect_location : 'http://majic.test/admin/dashboard',
    success: function (data) {
      console.log(data);
      if (data)  window.location = "http://majic.test/admin/dashboard";
    },
  });
});

// register new user
$('.registerForm').on("submit", function(event) {
  event.preventDefault();
  
  var form = $(this).closest('form');
  $.ajax({
    type: 'POST',
    url: window.location.pathname+'register',
    headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
    data: form.serialize(),
    success: function (data) {
      if (data)  window.location = data.redirect_location;
      
    },
  });
});

//wishlist


$('.update_wishlist').click(function(event) {
  event.preventDefault();
  
  $.ajaxSetup({
    headers:{ 
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") 
    }
  });
  var product_id =  $(this).data('productid');
  var user_id = $(this).data( 'userid' )
  $.ajax({
    type: 'post',
    url: '/update_wishlist',
    data: {
      product_id: product_id,
      user_id: user_id,
    },
    success:function(response){
      swal('successfully added to wishlist');
    },
    error: function() {
      swal("There was an error. Try again please!");
    }
  });
});
});
function sort_by(){
  var sort_by_value = jQuery('#sort_by_value').val();
  jQuery('#sort').val(sort_by_value);
  jQuery('#filter_sort').submit();
}
