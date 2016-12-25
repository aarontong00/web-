<?php
class Node {
    public $value;
    public $child_left;
    public $child_right;
}
final class  Ergodic {
    //ǰ�����:�ȷ��ʸ��ڵ㣬�ٱ������������������������������ڱ�����������ʱ�������ȱ�����������Ȼ����ʸ��ڵ㣬������������
    public static function preOrder($root){
        $stack = array();
        array_push($stack, $root);
        while(!empty($stack)){
            $center_node = array_pop($stack);
            echo $center_node->value . ' ';

            //�Ȱ��������ڵ���ջ����ȷ���������ڵ��ȳ�ջ
            if($center_node->child_right != null) array_push($stack, $center_node->child_right);
            if($center_node->child_left != null) array_push($stack, $center_node->child_left);
        }
    }
    //�������:�ȱ�����������Ȼ����ʸ��ڵ㣬�������������������ڱ�������������ʱ����Ȼ���ȱ�����������Ȼ����ʸ��ڵ㣬������������
    public static function midOrder($root){
        $stack = array();
        $center_node = $root;
        while (!empty($stack) || $center_node != null) {
            while ($center_node != null) {
                array_push($stack, $center_node);
                $center_node = $center_node->child_left;
            }

            $center_node = array_pop($stack);
            echo $center_node->value . ' ';

            $center_node = $center_node->child_right;
        }
    }
    //�������:�ȱ�����������Ȼ������������������ʸ��ڵ㣻ͬ�����ڱ�������������ʱ��ͬ��Ҫ�ȱ�����������Ȼ������������������ʸ��ڵ�
    public static function endOrder($root){
        $push_stack = array();
        $visit_stack = array();
        array_push($push_stack, $root);

        while (!empty($push_stack)) {
            $center_node = array_pop($push_stack);
            array_push($visit_stack, $center_node);
            //�������ڵ�����$pushstack��ջ��ȷ����$visitstack���ȳ�ջ
            if ($center_node->child_left != null) array_push($push_stack, $center_node->child_left);
            if ($center_node->child_right != null) array_push($push_stack, $center_node->child_right);
        }

        while (!empty($visit_stack)) {
            $center_node = array_pop($visit_stack);
            echo $center_node->value . ' ';
        }
    }
}


//����������
$a = new Node();
$b = new Node();
$c = new Node();
$d = new Node();
$e = new Node();
$f = new Node();
$g = new Node();
$h = new Node();
$i = new Node();

$a->value = 'A';
$b->value = 'B';
$c->value = 'C';
$d->value = 'D';
$e->value = 'E';
$f->value = 'F';
$g->value = 'G';
$h->value = 'H';
$i->value = 'I';

$a->child_left = $b;
$a->child_right = $c;
$b->child_left = $d;
$b->child_right = $g;
$c->child_left = $e;
$c->child_right = $f;
$d->child_left = $h;
$d->child_right = $i;


//ǰ�����
Ergodic::preOrder($a);  //����ǣ�A B D H I G C E F
echo '<br/>';
//�������
Ergodic::midOrder($a);  //����ǣ� H D I B G A E C F
echo '<br/>';
//�������
Ergodic::endOrder($a); //�����:  H I D G B E F C A