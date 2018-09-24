require('./app');

$(document).ready(function () {
    let courseDiv = $('.course-div');
    let roleSelect = $('#role');

    console.log(roleSelect);
    $(document).on('change', roleSelect, function (e) {
        console.log(roleSelect.val());
        if (roleSelect.val() == 2){
            courseDiv.show();
        }else{
            courseDiv.hide();
        }
    });
});