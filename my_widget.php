<?php
class My_Widget extends WP_Widget{

    // public $name;
    // public $description;
    // public $password

    public function __construct($name,$description,$password){
        // $this->name=$name;
        // $this->description=$description;
        // $this->password=$password;
    }

    public function widget($args,$instance){
        // parametri $args ofron HTML Content, cka po dojme me u shfaq
    }

    public function form($instance){
        // shfaq formen ne te cilen do te perdoret te vendosen settings
    }



}

    // $widget_1=new My_Widget("xyz",'this is a widget','123456');

?>