<?php
    $presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);
    $trans = $environment->getTranslator();
?>
<?php if ($paginator->getLastPage() > 1): ?>
    <ul class="pager">
        <?php
            echo $presenter->getPrevious('Предишен');
            echo $presenter->getNext('Следващ');
        ?>
    </ul>
<?php endif; ?>