<?php 
class Cms5ab5af411db3e112683866_feb1fb1fc7363256127af94d2a5edb1eClass extends \Cms\Classes\PageCode
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
