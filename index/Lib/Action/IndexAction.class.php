<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {

    public function index(){
        $arr = array(
            '#MINI 55周年#机密档案曝光，前世今生被国内外专家联合调查',
            '才知道1975年前的Mini没有两侧后视镜！那怎么倒的车？！',
            'Mary Quant设计的迷你裙灵感来源于Mini，这事儿你知道么？',
            'Happy Birthday to MINI！55年依旧传承的经典元素。',
        );
        $title = $arr[array_rand($arr)];
        $this -> assign('title', $title);
        $this -> display();
    }

    public function guide(){
        $arr = array(
            '#MINI 55周年#机密档案曝光，前世今生被国内外专家联合调查',
            '才知道1975年前的Mini没有两侧后视镜！那怎么倒的车？！',
            'Mary Quant设计的迷你裙灵感来源于Mini，这事儿你知道么？',
            'Happy Birthday to MINI！55年依旧传承的经典元素。',
        );
        $title = $arr[array_rand($arr)];
        $this -> assign('title', $title);
        $this -> display();
    }

    public function end(){
        $arr = array(
            '#MINI 55周年#机密档案曝光，前世今生被国内外专家联合调查',
            '才知道1975年前的Mini没有两侧后视镜！那怎么倒的车？！',
            'Mary Quant设计的迷你裙灵感来源于Mini，这事儿你知道么？',
            'Happy Birthday to MINI！55年依旧传承的经典元素。',
        );
        $title = $arr[array_rand($arr)];
        $this -> assign('title', $title);
        $this -> display();
    }

    public function show(){
//        $result = R('Car/getcar', array(), 'Widget');
//        $this -> assign('result', $result);
        $arr = array(
            '#MINI 55周年#机密档案曝光，前世今生被国内外专家联合调查',
            '才知道1975年前的Mini没有两侧后视镜！那怎么倒的车？！',
            'Mary Quant设计的迷你裙灵感来源于Mini，这事儿你知道么？',
            'Happy Birthday to MINI！55年依旧传承的经典元素。',
        );
        $title = $arr[array_rand($arr)];
        $this -> assign('title', $title);
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