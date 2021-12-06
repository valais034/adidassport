<?php
class Post extends widget
{
    public function __construct()
    {
        $description='این ابزارک برای نمایش آخرین مطالب سایت می باشد';
        parent::__construct('آخرین مطالب','Post',$description);
    }
    public function form()
    {
        $this->begin_from();
        $this->label('عنوان ابزارک');
        $this->input('title');
        $this->label('تعداد مطالب');
        $this->input('number_post','10','width:50px;text-align:center;margin-right:60px;');
        $this->position();
        $this->submit('ذخیره');
        $this->after_form();
    }
    public function widget($instance,$args)
    {
        global $connect;
        $sql=$connect->prepare('SELECT *  FROM post ORDER BY id DESC LIMIT 0,'.$instance['number_post'].'');
        $sql->execute();
        $fetchAll=$sql->fetchAll();
        echo $args['before_widget'];
        echo $args['before_title'];
        echo $instance['title'];
        echo $args['after_title'];
        ?>
        <ul class="li-menu">
        <?php
        foreach($fetchAll as $fetch)
        {
            ?> <li><a><?= $fetch['title'] ?></a></li>  <?php
        }
        ?></ul><?php
        echo $args['after_widget'];
    }
    public function update($instance)
    {
        $this->begin_from();
        $this->label('عنوان ابزارک');
        $this->input('title',$instance['title']);
        $this->label('تعداد مطالب');
        $this->input('number_post',$instance['number_post'],'width:50px;text-align:center;margin-right:60px;');
        $this->submit('ویرایش');
        $this->after_form();
    }
}

add_action('register_widget','post');
register_widget(array(
    'name'=>'فوتر-1',
    'id'=>'footer-1',
    'before_widget'=>'<div>',
    'before_title'=>'<div style="font-family:BYekan;color:white;padding-top:20px;margin-right:30px;">',
    'after_title'=>'</div><div style="width:90%;color:white;margin-right:30px;padding-top:10px;">',
    'after_widget'=>'</div></div>'
));

register_widget(array(
    'name'=>'فوتر-2',
    'id'=>'footer-2',
    'before_widget'=>'<div >',
    'before_title'=>'<div style="font-family:BYekan;color:white;padding-top:20px;margin-right:30px;">',
    'after_title'=>'</div><div style="width:90%;color:white;margin-right:30px;padding-top:10px;">',
    'after_widget'=>'</div></div>'
));