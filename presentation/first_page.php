<?php
class FirstPage
{
    public $mLinkToAdmin;
    public function __construct()
    {
        $this->mLinkToAdmin = Link::ToAdmin();
    }
}
?>