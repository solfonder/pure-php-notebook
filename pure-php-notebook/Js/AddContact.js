$( document ).ready(function() {
    $("#add").click(
        function(){
            addContact();
            return false;
        }
    );
});

function addContact() {
    let data = {};
        data['name'] = $("#name").val();
        data['surname'] = $("#surname").val();
        data['phone'] = $("#phone").val();
        data['comment'] = $("#comment").val();
    $.ajax({
        url: 'Controller/AddContact.php',
        type: 'POST',
        contentType: 'application/json',
        dataType: 'json',
        data: JSON.stringify(data),
        success: function(response) {
            let result = JSON.parse(JSON.stringify(response));
            if(result.status === 'success'){
                $('#result').html('Контакт записан');
            } else if(result.status === 'error'){
                $('#result').html(result.errors);
            }
        },
        error: function() {
            $('#result').html('Произошла ошибка');
        }
    })
}