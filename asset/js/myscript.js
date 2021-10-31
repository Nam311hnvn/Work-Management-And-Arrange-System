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
