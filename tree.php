<?php
class Node {
    public $value;
    public $child_left;
    public $child_right;
}
final class  Ergodic {
    //前序遍历:先访问根节点，再遍历左子树，最后遍历右子树；并且在遍历左右子树时，仍需先遍历左子树，然后访问根节点，最后遍历右子树
    public static function preOrder($root){
        $stack = array();
        array_push($stack, $root);
        while(!empty($stack)){
            $center_node = array_pop($stack);
            echo $center_node->value . ' ';

            //先把右子树节点入栈，以确保左子树节点先出栈
            if($center_node->child_right != null) array_push($stack, $center_node->child_right);
            if($center_node->child_left != null) array_push($stack, $center_node->child_left);
        }
    }
    //中序遍历:先遍历左子树、然后访问根节点，最后遍历右子树；并且在遍历左右子树的时候。仍然是先遍历左子树，然后访问根节点，最后遍历右子树
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
    //后序遍历:先遍历左子树，然后遍历右子树，最后访问根节点；同样，在遍历左右子树的时候同样要先遍历左子树，然后遍历右子树，最后访问根节点
    public static function endOrder($root){
        $push_stack = array();
        $visit_stack = array();
        array_push($push_stack, $root);

        while (!empty($push_stack)) {
            $center_node = array_pop($push_stack);
            array_push($visit_stack, $center_node);
            //左子树节点先入$pushstack的栈，确保在$visitstack中先出栈
            if ($center_node->child_left != null) array_push($push_stack, $center_node->child_left);
            if ($center_node->child_right != null) array_push($push_stack, $center_node->child_right);
        }

        while (!empty($visit_stack)) {
            $center_node = array_pop($visit_stack);
            echo $center_node->value . ' ';
        }
    }
}


//创建二叉树
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


//前序遍历
Ergodic::preOrder($a);  //结果是：A B D H I G C E F
echo '<br/>';
//中序遍历
Ergodic::midOrder($a);  //结果是： H D I B G A E C F
echo '<br/>';
//后序遍历
Ergodic::endOrder($a); //结果是:  H I D G B E F C A