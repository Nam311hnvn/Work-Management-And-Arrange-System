$(document).ready(function(){
    $("#Login").click(function(){
        var email = $("#Login_email").val();
        var pass = $("#Login_Password").val();
        $.ajax({
            url:'process.php?action=login',
            type: 'post',
            data: {Email:email, Pass:pass},
            success:function(resp){
                alert(resp);git 
            }


        })
    })
})

function checkPassword() {
    let password = document.getElementsByName("password").values;
    let cpass = document.getElementsByName("cpass").values;
    console.log(password,cpass);

    let mess =  document.getElementsByName("checkpass");
    if (password.length != 0) {
        if (password == cpass) {
            mess.textContent = "Passwords match";
        } else {
            mess.textContent = "Passwords dont match";
        }
        
    }
}
