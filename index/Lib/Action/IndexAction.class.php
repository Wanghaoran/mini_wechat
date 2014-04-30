<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        $result = R('Car/getcar', array(), 'Widget');
        $this -> assign('result', $result);
        $this -> display();
    }

    public function ajaxget(){
        $id = $_REQUEST['types'];
        $str = '';
        for($i=0; $i<5; $i++){
            $id++;
            if($id >= 64){
                continue;
            }
            $str .= '<li class="listsss">
            <a name="a' . $id . '"></a>
<h4><a><img onclick="clickfun(this);"  src="http://jiacarclub.com/aoxiang_coffee/Index/images/' . $id . '.jpg"/></a></h4>
                        <img style="display: none;" src="http://jiacarclub.com/aoxiang_coffee/Index/images/' . $id . '_01.jpg"/>
                        <div class="list-item none">
                            <img src="http://jiacarclub.com/aoxiang_coffee/Index/images/c' . $id . '.jpg"/>
                        </div>
                    </li> ';
        }
        echo $str;

    }
}