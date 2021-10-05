<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Version[]|\Cake\Collection\CollectionInterface $versions
 */
?>
<div class="versions index content">
    <?= $this->Html->link(__('New Version'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Versions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('short_name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($versions as $version): ?>
                <tr>
                    <td><?= $this->Number->format($version->id) ?></td>
                    <td><?= h($version->name) ?></td>
                    <td><?= h($version->short_name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $version->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $version->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $version->id], ['confirm' => __('Are you sure you want to delete # {0}?', $version->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
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
</div>
