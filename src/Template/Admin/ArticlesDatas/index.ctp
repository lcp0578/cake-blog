<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Articles Data'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articlesDatas index large-9 medium-8 columns content">
    <h3><?= __('Articles Datas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('article_id') ?></th>
                <th><?= $this->Paginator->sort('type_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articlesDatas as $articlesData): ?>
            <tr>
                <td><?= h($articlesData->id) ?></td>
                <td><?= $articlesData->has('article') ? $this->Html->link($articlesData->article->title, ['controller' => 'Articles', 'action' => 'view', $articlesData->article->id]) : '' ?></td>
                <td><?= h($articlesData->type_id) ?></td>
                <td><?= h($articlesData->created) ?></td>
                <td><?= h($articlesData->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $articlesData->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articlesData->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articlesData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlesData->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
