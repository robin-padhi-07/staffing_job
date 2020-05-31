<?php
    include ("header.php");
    require_once('database.php');  
?>
 <div class="container main_wrapper">
 <div class="common_box mt_20 float-left  pb_30 pt_30">
 <div class="table-responsive">
    <div class="d" id="content_data"></div>
    </div>
</div>


<div class="col-md-8 float-left col-12">
    <div class="wrapper">

        <div class="col-md-6 col-6 float-left pl_0 mt_20">
            <div class="common_box float-left">
                <span class="text-center float-left w-100" style="font-size:30px;">232</span>
                <span class="second_subtitle text-center float-left w-100"> Jobs Applied </span>
            </div>
        </div>
        <div class="col-md-6 col-6 float-left pr_0 mt_20">
            <div class="common_box float-left">
                <span class="text-center float-left w-100" style="font-size:30px;">23</span>
                <span class="second_subtitle text-center float-left w-100"> Jobs Applied </span>
            </div>
        </div>

        


    </div>
</div>
<!-- ====  COL_MD 8 right side section end here ========== -->

</div>

<?php include ("footer.php");?>

<script type="text/javascript" language="javascript" >
    //   $(document).ready(function(){

    //   var dataTable = $('#sample_data').DataTable({
    //       "processing" : true,
    //       "serverSide" : true,
    //       "order" : [],
    //       "ajax" : {
    //       url:"admin_fetch.php",
    //       type:"POST"
    //     }
    //     });

    // });

    $(document).ready(function(){
        $.post("admin_fetch.php", function(result){
            $("#content_data").html(result);
        });
    });
 </script>

