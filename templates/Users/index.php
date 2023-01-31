<!--<style>-->
<!---->
<!--    .user_name, .title {-->
<!--        font-size: 2rem;-->
<!--        background: -webkit-linear-gradient(#E5E5CB, #E5B8F4);-->
<!--        -webkit-background-clip: text;-->
<!--        -webkit-text-fill-color: transparent;-->
<!--    }-->
<!--    .title{-->
<!--        font-size: 3rem;-->
<!--    }-->
<!--    .table-heading{-->
<!--        color: #D8D8D8;-->
<!--    }-->
<!--    .user_password {-->
<!--        font-size: 1.5rem;-->
<!--        background: -webkit-linear-gradient(#E5E5CB, #E5E5CB);-->
<!--        -webkit-background-clip: text;-->
<!--        -webkit-text-fill-color: transparent;-->
<!--    }-->
<!--    .pass{-->
<!--        font-size: 1.5rem;-->
<!--        background: -webkit-linear-gradient(#D5CEA3, #E5E5CB);-->
<!--        -webkit-background-clip: text;-->
<!--        -webkit-text-fill-color: transparent;-->
<!--    }-->
<!--    .users {-->
<!--        background-image: linear-gradient(to left bottom, #082b39, #244c59, #416f79, #61959a, #84bcba, #88c4c2, #8ccdc9, #90d5d1, #73bfc3, #56a9b5, #3893a7, #147d99);    }-->
<!---->
<!--</style>-->

<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="users index content">
<!--    --><?php //= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3 class="title"><?= __('Users') ?></h3>
    <h4 class="user_name"><?php echo "Hello, " . $username;?></h4>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('sigin_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody  class="table-heading">
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->sigin_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
<!--                        --><?php //= $this->Html->link(__('Change Password'), ['action' => 'newpass', $user->id]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>

<!--            <h8>--><?php //echo $this->Html->link('Change password', ['controller' => 'users', 'action' => 'newpass']); ?><!--</h8>-->

            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>

    <h4 class="user_password"><?php echo $username . " Wants to change His Password !";?></h4>
    <?php
    foreach ($users as $user){
        if ($id == $user->id){
            echo $this->Html->link(__('Change Password'), ['action' => 'newpass', $user->id], ['class' => 'pass']);
        }
    }
    ?>

</div>


