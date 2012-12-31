<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <form class="navbar-search">
                <input type="search" class="search-query" placeholder="Search">
            </form>
        </div>
    </div>
</div>
<ul class="slide-menu nav nav-tabs nav-stacked">
    <? foreach(range(1, 4) as $i): ?>
    <li class="nav-header">Header <?= $i ?></li>
    <? foreach(range(1, 10) as $j): ?>
    <li><a>Item <?= $j ?></a></li>
    <? endforeach; ?>
    <? endforeach; ?>
</ul>
