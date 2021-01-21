<?php

$blogs = [
	['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
	['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
	['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem', 'likes' => 50],
];
print_r($blogs);

$blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100];

$poppedBlog = array_pop($blogs);

print_r($poppedBlog);