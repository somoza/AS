[?php if ($pager->haveToPaginate()): ?]
<div class="pagination">
    <ul>

        <!-- First page -->
        <li>
            [?php if($pager->getFirstPage() != $pager->getPage()): ?]
            [?php echo link_to("&laquo; " . <?php echo $this->renderPhpText('First') ?>, <?php echo $this->urlFor('list', false) ?>, array('page' => 1), array('class' => 'first_page')) ?]
            [?php else: ?]
            &laquo; <?php echo $this->renderHtmlText('First') ?>
            [?php endif ?]
        </li>

        <!-- Previous page -->
        <li>
            [?php if($pager->getPage() > $pager->getFirstPage()): ?]
            [?php echo link_to("&lsaquo; " . <?php echo $this->renderPhpText('Previous') ?>, <?php echo $this->urlFor('list', false) ?>, array('page' => $pager->getPreviousPage()), array('class' => 'first_page')) ?]
            [?php else: ?]
            &lsaquo; <?php echo $this->renderHtmlText('Previous') ?>
            [?php endif ?]
        </li>

        <!-- Links Numbers -->
        [?php foreach ($pager->getLinks() as $page): ?]
        <li>
            [?php if ($page == $pager->getPage()): ?]
            <strong>[?php echo $page ?]</strong>
            [?php else: ?]
            [?php echo link_to($page, <?php echo $this->urlFor('list', false) ?>, array('page' => $page)) ?]
            [?php endif; ?]
        </li>
        [?php endforeach; ?]

        <!-- Next page -->
        <li>
        [?php if($pager->getPage() < $pager->getLastPage()): ?]
        [?php echo link_to(<?php echo $this->renderPhpText('Next') ?> . " &rsaquo;", <?php echo $this->urlFor('list', false) ?>, array('page' => $pager->getNextPage()), array('class' => 'last_page')) ?]
        [?php else: ?]
        <?php echo $this->renderHtmlText('Next') ?> &rsaquo;
        [?php endif ?]
        </li>

        <!-- Last page -->
        <li>
        [?php if($pager->getLastPage() != $pager->getPage()): ?]
        [?php echo link_to(<?php echo $this->renderPhpText('Last') ?> . " &raquo;", <?php echo $this->urlFor('list', false) ?>, array('page' => $pager->getLastPage()), array('class' => 'last_page')) ?]
        [?php else: ?]
        <?php echo $this->renderHtmlText('Last') ?> &raquo;
        [?php endif ?]
        </li>

    </ul>
    
    <!-- Number of results -->

    <em>
    <?php if ($this->get('i18n')): ?>
        [?php echo format_number_choice('[0] |[1] 1 result|(1,+Inf] %1% results', array('%1%' => $pager->getNbResults()), $pager->getNbResults()) ?]
    <?php else: ?>
        [?php echo $helper->getChoiceFormatter()->format(sprintf('[0] |[1] 1 result|(1,+Inf] %s results', $pager->getNbResults()), $pager->getNbResults()) ?]
    <?php endif; ?>

    <!-- Page number details -->
    <?php if ($this->get('i18n')): ?>
        [?php echo __('(page %%page%%/%%nb_pages%%)', array('%%page%%' => $pager->getPage(), '%%nb_pages%%' => $pager->getLastPage()), '<?php echo $this->getI18NCatalogue() ?>') ?]
    <?php else: ?>
        [?php echo strtr('(page %%page%%/%%nb_pages%%)', array('%%page%%' => $pager->getPage(), '%%nb_pages%%' => $pager->getLastPage())) ?]
    <?php endif; ?>
    </em>
    
</div>
[?php endif; ?]