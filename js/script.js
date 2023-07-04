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
    e.preventDefault(); // Prevent form submission

    // Get form data
    var name = $('#name').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var course = $('#course').val();

    // Create an object with the form data
    var formData = {
      task:'save_data',
      name: name,
      email: email,
      phone: phone,
      course: course
    };

    // Send an AJAX POST request
    $.ajax({
      type: 'POST',
      url: 'addUser.php',
      data: formData,
      success: function (response) {
        // Handle success response
        console.log(response);
      },
      error: function (xhr, status, error) {
        // Handle error
        console.log(xhr.responseText);
      }
    });
  });
});