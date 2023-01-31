<style>
    h4 {
        font-size: 2rem;
        background: -webkit-linear-gradient(#F2921D, #400E32);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>

<h4>Changing Password</h4>
<?php
    echo $this->Form->create($newPassword);
    echo $this->Form->control('old_password');
    echo $this->Form->control('password');
    echo $this->Form->control('retype_password', ['type' => 'password']);
    echo $this->Form->button(__('Submit'));
    echo $this->Form->end();
?>




