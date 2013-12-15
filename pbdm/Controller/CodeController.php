<?php
class CodeController extends Controller{
    function index() {
        include(CODE_PATH.$this->path[1]);
        exit();
    }
}
