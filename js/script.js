$(document).ready(function(){
    $("#search-bar").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#list tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });


  $(document).ready(function(){
    $('#save_data').click(function(){
        $name = $('#name').val();
        $email = $('#email').val();
        $phone = $('#phone').val();
        $course = $('#course').val();
        // $('#name,#email,#phone,#course').val([''])

        let dataToAct = {
            task : 'save_player',
            name : $name,
            email : $email,
            phone : $phone,
            course : $course
        };

        $.ajax({
            url: 'index.php',
            type: 'POST',
            data: dataToAct,
            success: function (response) {
                let returnedData = JSON.parse(response);
            }
        });
    });
});

