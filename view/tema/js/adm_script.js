$(document).ready(function() {
    $('.button-left').click(function() {
        $('.sidebar').toggleClass('fliph');
    });

    /* var max_fields = 10;
    var wrapper = $('#containerphoto');
    var add_button = $('#photobutton');

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;

            $(wrapper).append('<input type="file" name="pro_img_' + x + '" id="customFile[]" class="custom-file-input"><a href="#" class="delete">Delete</a></div>');
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    }) */

});