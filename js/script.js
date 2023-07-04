$(document).ready(function () {
  $("#search-bar").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("#list tr").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


$(document).ready(function () {
  $('#myForm').submit(function (e) {
    e.preventDefault();
    var name = $('#name').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var course = $('#course').val();

    var formData = {
      task:'task',
      name: name,
      email: email,
      phone: phone,
      course: course
    };
    postData(formData);
  });
});

function postData(formData) {
  $.ajax({
    type: 'POST',
    url: 'addUser.php',
    data: formData,
    success: function (response) {
      console.log(response);
      window.location.href = 'index.php';
    }
  });
}