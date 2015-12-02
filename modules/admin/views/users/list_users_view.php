<div class="box">
    <div class="box-header">
        <a href="<?php echo site_url('admin/users/create');?>" class="btn btn-primary">Create User</a>
    </div>
    <div class="box-body">
        <?php
            if(!empty($users))
            {
                echo '<table id="table" class="table table-bordered table-striped">';
                    echo '<thead><tr><th>No.</th><th>Username</th><th>Name</th><th>Email</th><th>Last Login</th><th>Action</th></tr></thead><tbody>';
                $no = 1;
                foreach($users as $user)
                {
                    echo '<tr>';
                    echo '<td>'.$no ++.'.</td><td>'.$user->username.'</td><td>'.$user->first_name.' '.$user->last_name.'</td><td>'.$user->email.'</td><td>'.date('Y-m-d H:i:s', $user->last_login).'</td><td>';
                    if($current_user->id != $user->id) echo anchor('admin/users/edit/'.$user->id,'<span class="glyphicon glyphicon-pencil"></span>').' '.anchor('admin/users/delete/'.$user->id,'<span class="glyphicon glyphicon-remove"></span>');
                    else echo '&nbsp;';
                    echo '</td>';
                    echo '</tr>';
                }                
                echo '<tbody></table>';
            }
        ?>
    </div>
</div>