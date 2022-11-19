function myfunction() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("Password").value;
    var form = $("#form_datas");
    if (email == '' || password == '' ) {
        alert("Please Fill All Fields");
    } 

    else {
        $.ajax({
            type: "POST",
            url: "http://localhost/Guvi_project/php/login.php",
            data: form.serialize(),
            success: function(data) {
                alert("Form Submited Successfully");
            },
            error: function(data) {
                alert("some Error");
            }
        });
    }
    return false;
}