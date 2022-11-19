

function myfunction() {
    var FirstName = document.getElementById("FirstName").value;
    var LastName = document.getElementById("LastName").value;
    var Email = document.getElementById("Email").value;
    var password = document.getElementById("password").value;
    var c_password = document.getElementById("c_password").value;
    var MobileNumber = document.getElementById("MobileNumber").value;
    var gender = document.getElementById("gender").value;
    var DOB = document.getElementById("DOB").value;
    var form = $("#form_datas");
    
    if (FirstName == '' || LastName == '' || password == '' || c_password == '' || Email == '' || MobileNumber == '' || gender == '' || DOB == '' ) {
        alert("Please Fill All Fields");
    } 
    else {
        $.ajax({
            type: "POST",
            url: "http://localhost/Guvi_project/php/register.php",
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