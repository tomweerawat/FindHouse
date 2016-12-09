<script src="<?php echo base_url('asset/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/jquery.ui.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/plugins/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/plugins/jquery.nicescroll.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/plugins/chart.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/main.js'); ?>"></script>
<script src="<?php echo base_url('asset/frontend/lobian/dist/js/Lobibox.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/frontend/lobian/demo/demo.js'); ?>"></script>
<script src="<?php echo base_url('asset/frontend/lobian/dist/js/Lobibox.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/frontend/lobian/demo/demo.js'); ?>"></script>
<script src="<?php echo base_url('asset/frontend/js/table.js'); ?>"></script>


<!-- <script type="text/javascript">
    ///Submit Form
    $("#addBranch").click(function(){
      branchName = $("#branchName").val();
      branchDetail = $("#branchDetail").val();
      branchCover = $("#branchCover").val();
      branchAdd1 = $("#Address1").val();
      branchAdd2 = $("#Address2").val();
      branchAdd3 = $("#Address3").val();
      branchAdd4 = $("#Address4").val();

      if(branchName == ""){
        Lobibox.notify('error', {
          msg: 'กรุณากรอกชื่อร้าน'
        });
        $("#branchName").focus();
      } else if(branchDetail == ""){
        Lobibox.notify('error', {
          msg: 'กรุณากรอกรายละเอียดร้าน'
        });
        $("#branchDetail").focus();
      }  else if(branchAdd1 == "" || branchAdd2 == "" || branchAdd3 == "" || branchAdd4 == ""){
        Lobibox.notify('error', {
          msg: 'กรุณากรอกที่อยู่ให้ครบถ้วน'
        });
      } else if(branchCover == ""){
        Lobibox.notify('error', {
          msg: 'กรุณาอัพโหลดรูปภาพร้าน'
        });
        $("#branchCover").focus();
      } else {

        swal({
          title: "ขอบคุณสำหรับการสมัครสมาชิก",
          text: "Thank You",
          type: "success",
          timer: 2000,
          showCancelButton: false,
          showConfirmButton: false,
          confirmButtonColor: "#DD6B55",
          animation:false}, function(){
            $("#addBranchForm").submit()
        });

      }
    });
    </script>
    <script> -->
    </script>
</body>
</html>
