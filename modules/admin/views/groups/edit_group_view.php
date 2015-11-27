<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Group</h3>
            </div>
            <?php echo form_open(''); ?>
                <?php echo form_hidden('group_id', set_value('group_id', $group->id)); ?>
            <div class="box-body">
                <div class="form-group">
                    <?php echo form_label('Group Name', 'group_name'); ?>
                    <?php echo form_error('group_name'); ?>
                    <?php echo form_input('group_name', set_value('group_name',$group->name), 'class="form-control" id="group_name" placeholder="Group Name"'); ?>
                </div>
                <div class="form-group">
                    <?php echo form_label('Group Description', 'group_description'); ?>
                    <?php echo form_error('group_description'); ?>
                    <?php echo form_textarea('group_description', set_value('group_description',$group->description), 'class="form-control" id="group_description" placeholder="Group Description"'); ?>
                </div>
            </div>
            <div class="box-footer">
                <?php echo form_submit('submit', 'Edit Group', 'class="btn btn-primary"'); ?>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>