<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Create Group</h3>
            </div>
            <?php echo $this->session->flashdata('message'); ?>
            <?php echo form_open(''); ?>
            <div class="box-body">
                <div class="form-group">
                    <?php echo form_label('Group Name', 'group_name'); ?>
                    <?php echo form_error('group_name'); ?>
                    <?php echo form_input('group_name', '', 'class="form-control" id="group_name" placeholder="Group Name"'); ?>
                </div>
                <div class="form-group">
                    <?php echo form_label('Group Description', 'group_description'); ?>
                    <?php echo form_error('group_description'); ?>
                    <?php echo form_textarea('group_description', '', 'class="form-control" id="group_description" placeholder="Group Description"'); ?>
                </div>
            </div>
            <div class="box-footer">
                <?php echo form_submit('submit', 'Create Group', 'class="btn btn-primary"'); ?>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>