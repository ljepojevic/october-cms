<?php 
class Cms5ab595f5137cb381649932_fd3a8f7ab48011429f09bd930b81aea7Class extends \Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
