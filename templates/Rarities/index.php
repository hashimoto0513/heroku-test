<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rarity[]|\Cake\Collection\CollectionInterface $rarities
 */
?>
<div class="rarities index content">
    <?= $this->Html->link(__('New Rarity'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rarities') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('rarity_name') ?></th>
                    <th><?= $this->Paginator->sort('start_time') ?></th>
                    <th><?= $this->Paginator->sort('end_time') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rarities as $rarity): ?>
                <tr>
                    <td><?= $this->Number->format($rarity->id) ?></td>
                    <td><?= h($rarity->rarity_name) ?></td>
                    <td><?= h($rarity->start_time) ?></td>
                    <td><?= h($rarity->end_time) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rarity->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rarity->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rarity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rarity->id)]) ?>
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
