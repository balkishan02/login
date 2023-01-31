<style>
    h4 {
        font-size: 2rem;
        background: -webkit-linear-gradient(#F2921D, #400E32);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>

<h4>Changing Password</h4>
<?= $this->Form->create($npass); ?>

<?= $this->Form->control('password'); ?>
<?= $this->Form->control('retype_password', ['type' => 'password']); ?>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end(); ?>
