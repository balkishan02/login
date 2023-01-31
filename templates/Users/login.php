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
        background: -webkit-linear-gradient(#A5C9CA, #16213E);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: bold;
    }
    /*.main{*/
    /*    background-image: linear-gradient(to right bottom, #051937, #00476c, #007b9c, #00b2c3, #52ebdd);*/
    /*}*/
</style>
<div class="main">
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
</div>

