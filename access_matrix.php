<?php
include 'config.php';
?>

    <!-- Default box -->
<style>
  /*  td {

        !* css-3 *!
        white-space: -o-pre-wrap;
        word-wrap: break-word;
        white-space: pre-wrap;
        white-space: -moz-pre-wrap;
        white-space: -o-pre-wrap;

    }*/
  td {
      overflow: hidden;
      max-width: 400px;
      word-wrap: break-word;
  }
  /*  table {
        table-layout: fixed;
        width: 100%
    }*/

</style>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Access Role Matrix</h3>

            <div class="box-tools pull-right">
                <a class="btn btn-sm btn-info"  href="access_role.php"><i class="fa fa-plus"></i> Add Access Role</a>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Access Role</th>
                        <th>System Code</th>
                        <th>System Name</th>
                        <th>Allowed Actions</th>
<!--                        <th>Actions</th>
-->                        <th>Add Allowed Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = $start + 1;
                    $query = "SELECT t1.*,t2.code,t2.description FROM sso_access_matrix t1 LEFT JOIN sso_systems t2 ON t1.system =t2.id  ORDER BY id ASC";
                    $result = $db->query($query);
                    while($row = $result->fetch_assoc())
                     {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['role_name']; ?></td>
                            <td><?php echo $row['code']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['allowed_access_actions']; ?></td>
                         <!--   <td>
                                <a title="Edit Account" href="acess_role.php?id=<?php /*echo $row['id']; */?>"><i class="fa fa-pencil-square-o  fa-2x text-info"></i></a>
                            </td>-->
                            
                            <td>
                                <!--<div class="box-tools pull-right">-->
                                    <a class="btn btn-sm btn-success"  href="allowed_actions.php?id=<?php echo $row['id']; ?>"><i class="fa fa-plus"></i> Add Allowed Actions</a>
<!--                                </div>
-->                            </td>
                        </tr>
                        <?php $i++; } ?>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.box-body -->

        <!-- /.box-footer-->
    </div>
    <!-- /.box -->