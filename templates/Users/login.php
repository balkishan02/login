<style>
    .singin{
        padding: 8px;
        border: none;
        border-radius: 5px;
        color: #F5F5F5;
        background: #F94A29;
        font-size: 1.2rem;
    }
    .singin:hover{
        background: #D61355;
        color: #E8E2E2;
    }
    .login {
        font-size: 2.5rem;
        background: -webkit-linear-gradient(#A084DC, #EBC7E6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
<h3 class="login">Log In Page</h3>
<?= $this->Form->create(); ?>
<?= $this->Form->control('email'); ?>
<?= $this->Form->control('password'); ?>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end(); ?>

    <?= $this->Html->link('New User', [
        'controller' => 'users',
        'action' => 'add'
    ],
        ['class' => 'singin']) ?>


