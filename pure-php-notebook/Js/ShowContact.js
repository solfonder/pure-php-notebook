$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "Controller/ShowContacts.php",
        success: function (response) {
            $("#result").html(response).show();
        }
    });
});