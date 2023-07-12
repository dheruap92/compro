<?php $pager->setSurroundCount() ?>
<ul class="pagination m-0 ms-auto">
    <?php if ($pager->hasPrevious()) { ?>
    <li class="page-item disabled">
        <a class="page-link" href="<?= $pager->getPrevious() ?>" tabindex="-1" aria-disabled="true">
        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
        prev
        </a>
    </li>
    <?php } ?>
    <?php foreach($pager->links() as $link) {  
        $activeclass = $link['active']?'active':'';?>
        <li class="page-item <?=$activeclass?>"><a class="page-link" href="<?= $link['uri'] ?>"><?= $link['title'] ?></a></li>
    <?php } ?>
    <?php if ($pager->hasNext()) { ?>
    <li class="page-item">
        <a class="page-link" href="<?= $pager->getNext() ?>">
        next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
        </a>
    </li>
    <?php } ?>
</ul>