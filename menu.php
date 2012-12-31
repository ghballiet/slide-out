<ul class="slide-menu nav nav-tabs nav-stacked">
    <li class="nav-header"><span class="close pull-right">&times;</span>Header</li>
    <? foreach(range(1,30) as $i): ?>
    <li><a>Item <?= $i ?></a></li>
    <? endforeach; ?>
</ul>
