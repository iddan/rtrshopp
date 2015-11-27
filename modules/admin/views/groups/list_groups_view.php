<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Default box -->
<div class="box">
    <div class="box-header">
        <a href="<?php echo site_url('admin/groups/create');?>" class="btn btn-primary">Create Group</a>
    </div>
    <div class="box-body">
        <?php
            if(!empty($groups))
            {
                echo '<table id="table" class="table table-bordered table-striped">';
                    echo '<thead><tr><th>No.</th><th>Group Name</th><th>Description Group</th><th>Action</th></tr></thead><tbody>';
                $no = 1;
                foreach($groups as $group)
                {
                    echo '<tr>';
                    echo '<td>'.$no ++.'.</td><td>'.$group->name.'</td><td>'.$group->description.'</td><td>'.anchor('admin/groups/edit/'.$group->id,'<span class="glyphicon glyphicon-pencil"></span>');
                    if(!in_array($group->name, array('admin','members'))) echo ' '.anchor('admin/groups/delete/'.$group->id,'<span class="glyphicon glyphicon-remove"></span>');
                    echo '</td>';
                    echo '</tr>';
                }                
                echo '<tbody></table>';
            }
        ?>
    </div><!-- /.box-body -->
</div><!-- /.box -->