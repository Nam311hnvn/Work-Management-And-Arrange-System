$(document).ready(function(){
    $("#Login").click(function(){
        if ($("#Login_email").var()="") {
            alert("Bạn chưa nhập Email")
            
        };
        if ($("#Login_email").var()="") {
            alert("Bạn chưa nhập Email")
            
        };
        var email = $("#Login_email").val();
        var pass = $("#Login_Password").val();
        $.ajax({
            url:'process.php?action=login',
            type: 'post',
            data: {Email:email, Pass:pass},
            success:function(resp){
                alert(resp);
            }


        })
    })
})
