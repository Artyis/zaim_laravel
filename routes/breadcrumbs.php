<?php


Breadcrumbs::for('main', function ($breadcrumbs) {
    $breadcrumbs->push('Главная', route('main.index'));
    });
Breadcrumbs::for('mfo', function ($breadcrumbs) {
$breadcrumbs->parent('main');
$breadcrumbs->push('МФО', route('mfos.index'));
});

Breadcrumbs::for('zaimy', function ($breadcrumbs) {
    $breadcrumbs->parent('main');
    $breadcrumbs->push('Займы', route('zaimies.index'));
    });

Breadcrumbs::for('mfo_showCard', function ($breadcrumbs, $mfo) {
    $breadcrumbs->parent('mfo');
    $breadcrumbs->push($mfo->name, route('mfos.showcard', $mfo));
    });

Breadcrumbs::for('zaimy_name', function ($breadcrumbs, $page) {
    $breadcrumbs->parent('zaimy');
    $breadcrumbs->push($page->name, route('zaimies.read', $page));
    });


