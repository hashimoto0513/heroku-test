<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<?php  $this->Html->css('cake', ['block' => true]); ?>
<div class="img_row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('新規登録'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('リスト'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('編集'), ['action' => 'edit', $image->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id), 'class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="images view content">
            <!-- <h3><?= h($image->id) ?></h3> -->
            <table class="view_table" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="img_detail" colspan="6">カード詳細</td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($image->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image Name') ?></th>
                    <td><?= h($image->image_name) ?></td>
                </tr>
                <tr>
                    <th class="view_th_img"><?= __('Img') ?></th>
                    <td class="view_td_img"><?= $this->Html->image($image->img,['class' => 'view_img']) ?></td>
                </tr>
            </table>
            <div class="related">
                <!-- <h4><?= __('Related Cards') ?></h4> -->
                <?php if (!empty($image->cards)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('CardNumber') ?></th>
                            <th><?= __('CardName') ?></th>
                            <th><?= __('Color') ?></th>
                            <th><?= __('Cost') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Version Id') ?></th>
                            <th><?= __('Rarity Id') ?></th>
                            <th><?= __('Image Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($image->cards as $cards) : ?>
                        <tr>
                            <td><?= h($cards->id) ?></td>
                            <td><?= h($cards->CardNumber) ?></td>
                            <td><?= h($cards->CardName) ?></td>
                            <td><?= h($cards->color) ?></td>
                            <td><?= h($cards->cost) ?></td>
                            <td><?= h($cards->created) ?></td>
                            <td><?= h($cards->modified) ?></td>
                            <td><?= h($cards->version_id) ?></td>
                            <td><?= h($cards->rarity_id) ?></td>
                            <td><?= h($cards->image_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cards', 'action' => 'view', $cards->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cards', 'action' => 'edit', $cards->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cards', 'action' => 'delete', $cards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cards->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
