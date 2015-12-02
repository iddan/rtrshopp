<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Profile Page</h3>
            </div>
            <?php echo form_open(''); ?>
            <div class="box-body">
                <div class="form-group">
                    <?php
                        echo form_label('First name', 'first_name');
                        echo form_error('first_name');
                        echo form_input('first_name', set_value('first_name', $user->first_name), 'class="form-control" id="first_name" placeholder="First Name"');
                    ?>
                </div>
                <div class="form-group">
                    <?php
                        echo form_label('Last name', 'last_name');
                        echo form_error('last_name');
                        echo form_input('last_name', set_value('last_name', $user->last_name), 'class="form-control" id="last_name" placeholder="Last Name"');
                    ?>
                </div>
                <div class="form-group">
                    <?php
                        echo form_label('Company', 'company');
                        echo form_error('company');
                        echo form_input('company', set_value('company', $user->company), 'class="form-control" id="company" placeholder="Company"');
                    ?>
                </div>
                <div class="form-group">
                    <?php
                        echo form_label('Phone', 'phone');
                        echo form_error('phone');
                        echo form_input('phone', set_value('phone', $user->phone), 'class="form-control" id="phone" placeholder="Phone"');
                    ?>
                </div>
                <div class="form-group">
                    <?php
                        echo form_label('Username', 'username');
                        echo form_error('username');
                        echo form_input('username', set_value('username', $user->username), 'class="form-control" id="username" placeholder="Username"');
                    ?>
                </div>
                <div class="form-group">
                    <?php
                        echo form_label('Email', 'email');
                        echo form_error('email');
                        echo form_input('email', set_value('email', $user->email), 'class="form-control" id="email" placeholder="Email"');
                    ?>
                </div>
                <div class="form-group">
                    <?php
                        echo form_label('Password', 'password');
                        echo form_error('password');
                        echo form_input('password', '', 'class="form-control" id="password" placeholder="Password"');
                    ?>
                </div>
                <div class="form-group">
                    <?php
                        echo form_label('Confirm Password', 'password_confirm');
                        echo form_error('password_confirm');
                        echo form_input('password_confirm', '', 'class="form-control" id="password_confirm" placeholder="Confirm Password"');
                    ?>
                </div>
            </div>
            <div class="box-footer">
                <?php echo form_submit('submit', 'Save Profile', 'class="btn btn-primary"'); ?>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>