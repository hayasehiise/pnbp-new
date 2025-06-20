<?php
// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

//Master Data
Breadcrumbs::for('master-data', function(BreadcrumbTrail $trail){
    $trail->push('Master Data');
});

//Master Data >> Bandara Udara
Breadcrumbs::for('bandar-udara', function(BreadcrumbTrail $trail){
    $trail->parent('master-data');
    $trail->push('Bandara Udara', route('bandar-udara.index'));
});

//Master Data >> Bandara Udara >> Add Bandara Udara
Breadcrumbs::for('bandar-udara-add', function(BreadcrumbTrail $trail){
    $trail->parent('bandar-udara');
    $trail->push('Tambah Bandara Udara', route('bandar-udara.add'));
});

//Master Data >> Bandara Udara >> Edit Bandara Udara
Breadcrumbs::for('bandar-udara-edit', function(BreadcrumbTrail $trail){
    $trail->parent('bandar-udara');
    $trail->push('Edit Bandara Udara', route('bandar-udara.edit'));
});
