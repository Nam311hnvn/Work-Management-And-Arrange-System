<?php
    //Dịch vụ bảo vệ
    session_start();
    if(isset($_SESSION['CurrentUser'])){
        include('../reuse/header.php');
        include('../reuse/config.php');
?>
<div class="container-header">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 ">
                <div class="col-sm-4 pt-2">
                    <h4>Send Notification</h4>
                </div>
                <hr class="border border-bottom-5 border-primary">
            </div>
        </div>
    </div>

    <div class="search">
        <div class="container mt-5">
            <div class="row justify-content-center w-auto h-auto">


                <div class="d-flex w-75 h-75" action="" method="">

                    <div class="col-md-3 pe-2">
                        <div class="form-group">
                            <select name="ProjectID" id="ProjectID" class="form-control form-select rounded">
                                <option value="">Select Group User</option>
                                <?php
                                    include('../reuse/config.php');
                                    $sql ="SELECT `pj_id`, `pj_name` FROM `tb_project` ";
                                    $result = mysqli_query($conn, $sql);
                                            if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<option value="' . $row['pj_id'] . '">' . $row['pj_name'] . '</option>';
                                            }
                                        }

                                ?>
                            </select>
                        </div>
                    </div>
                    <input class="form-control me-2 px-0" type="search" placeholder="Type here ...." aria-label="Search"
                        id="Noti" name="Noti">
                    <button class="btn btn-primary" type="submit" name='btnsend' id="Send">Send</button>
                </div>


            </div>
        </div>

    </div>
</div>
<script>
$(document).ready(function() {
    $("#Send").click(function() {
        $pjid = $('#ProjectID').val();
        $Noti = $('#Noti').val();
        if ($("#Noti").val() =="") 
        {
            alert("Vui lòng điền đầy đủ thông tin !!");
        }else {
            $.ajax({
                    type: "post",
                    url: "../process/process_send_notigr.php",
                    data: {
                        send : "send",
                        pjid: $pjid,
                        noti: $Noti,
                    },
                    success: function(response) {
                        if (response == "success") {
                            alert("Gửi thành công.");
                        } else if(response == 'error') {
                            alert("Gửi thất bại.");
                        }
                    }
                });
        }
    });

})

</script>
<?php
include('../reuse/footer.php');
}else header("Location: ../index.php");
?>