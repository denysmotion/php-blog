<?php 

$title = "Home";

$posts = [
  1 => [
    'title' => 'Title 01',
    'desc' => 'LoremLorem ipsum odor amet, consectetuer adipiscing elit. Dictum pulvinar rutrum dignissim scelerisque sem maximus posuere senectus. Senectus proin sapien pretium; amet consectetur blandit. Hac nec congue quisque in maximus conubia consectetur.',
    'slug' => 'title-01',
  ],
  2 => [
    'title' => 'Title 02',
    'desc' => 'LoremLorem ipsum odor amet, consectetuer adipiscing elit. Dictum pulvinar rutrum dignissim scelerisque sem maximus posuere senectus. Senectus proin sapien pretium; amet consectetur blandit. Hac nec congue quisque in maximus conubia consectetur.',
    'slug' => 'title-02',
  ],
  3 => [
    'title' => 'Title 03',
    'desc' => 'LoremLorem ipsum odor amet, consectetuer adipiscing elit. Dictum pulvinar rutrum dignissim scelerisque sem maximus posuere senectus. Senectus proin sapien pretium; amet consectetur blandit. Hac nec congue quisque in maximus conubia consectetur.',
    'slug' => 'title-03',
  ],
  4 => [
    'title' => 'Title 04',
    'desc' => 'LoremLorem ipsum odor amet, consectetuer adipiscing elit. Dictum pulvinar rutrum dignissim scelerisque sem maximus posuere senectus. Senectus proin sapien pretium; amet consectetur blandit. Hac nec congue quisque in maximus conubia consectetur.',
    'slug' => 'title-04',
  ],
  5 => [
    'title' => 'Title 05',
    'desc' => 'LoremLorem ipsum odor amet, consectetuer adipiscing elit. Dictum pulvinar rutrum dignissim scelerisque sem maximus posuere senectus. Senectus proin sapien pretium; amet consectetur blandit. Hac nec congue quisque in maximus conubia consectetur.',
    'slug' => 'title-05',
  ],
];

$recent_posts = [
  1 => [
    'title' => 'An item',
    'slug' => lcfirst(str_replace(' ', '-', 'An item')),
  ],
  2 => [
    'title' => 'A second item',
    'slug' => lcfirst(str_replace(' ', '-', 'A second item')),
  ],
  3 => [
    'title' => 'A third item',
    'slug' => lcfirst(str_replace(' ', '-', 'A third item')),
  ],
];

require_once 'index.tpl.php';
