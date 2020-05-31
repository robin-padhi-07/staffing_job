<?php 
    require_once('database.php');  
    $sql = "SELECT job_applied.*,users.username, users.created_at FROM `job_applied` LEFT JOIN users ON job_applied.user_id = users.id";
    $qry = mysqli_query($link,$sql);

?>
<script>
   
   $(document).ready(function() {
       $('#sample_data').DataTable( {
           "order": [[ 0, "desc" ]]
       } );
   } );
</script>

<div class="col-md-12 float-left mt_10 p_20 bg_white">    
    <table id="sample_data" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                    <th>ID</th>
                      <th>Employee</th>
                      <th>Job name</th>
                      <th>Company</th>
                      <th>Job Location</th>
                      <th>Job Exp</th>
                      <th>Job Salary</th>
            </tr>
        </thead>
            <tbody>
                <?php 
                if (mysqli_num_rows($qry) > 0) {
                    while($row = mysqli_fetch_assoc($qry)) {
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td> <a href=""><?php echo $row['username'];?></a> </td>
                    <td><?php echo  $row['job_name'];?></td>
                    <td><?php echo  $row['job_company'];?></td>
                    <td><?php echo  $row['job_location'];?></td>
                    <td><?php echo  $row['job_experience'];?></td>
                    <td><?php echo  $row['job_salary'];?></td>

                </tr>
                <?php
                    }
                }else{
                ?>
                    <tr>
                    <td colspan="5">Data not found</td>
                    <?php
                }
                ?>
            </tbody>    
    </table>

</div>