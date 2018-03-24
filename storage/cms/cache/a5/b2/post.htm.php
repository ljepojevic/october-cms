<?php 
class Cms5ab59b48db6d2222275449_7751300e8cc2a5e890f14c50d3e79c3fClass extends \Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
