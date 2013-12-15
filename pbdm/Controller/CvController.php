<?php
class CvController extends Controller{
    function index() {
    	 $this->content = $this->path[1];
    }
}
