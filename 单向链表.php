 <?php
/*单向链表学习 童晓斌 2016-08-10*/
//链表节点
class node{
	public $id;
	public $name;
	public $next;
	
	public function __construct($id,$name){
		$this->id = $id;
		$this->name = $name;
		$this->next = null;
		
	}
}
//单链表

class singelLinkList {
	private $header;
	
	public function __construct($id=null,$name=null){
		$this->header = new node($id,$name);
	}
	
	//获取链表长度
	
	public function getLinklength(){
		$i = 0;
		$current = $this->header;
		
		while($current->next != null){
			$i++;
			$current = $current->next;
		}
		return $i;
	}
	
	//添加节点数据
	
	public function addLink($node){
		$current = $this->header;
		
		while($current->next!=null){
			if($current->next->id > $node->id){
				break;
			}
			
			$current = $current->next;
		}
		
		$node->next = $current->next;
		$current->next = $node;
		
	}
	
	//删除节点列表
	
	public function delLink(){
		$current = $this->header;
		$flag=true;
		while($current->next!=null){
			if($current->next->id==$id){
				$flag = false;
				break;
			}
			$current = $current->next;
		}
			if($flag){
				echo '未找到'.$id.'节点！';
			}else{
				$current->next = $current->next->next;
			}
		
		
	}
	//获取链表
	
	public function getLinkList(){
		$current = $this->header;
		if($current->next==null){
			echo '链表为空';
			return;
		}
		while($current->next!=null){
			echo 'id='.$current->next->id.'name='.$current->next->name.'<br/>';
			if($current->next->next==null){
				break;
			}
			$current = $current->next;
			
		}
		
	}
	//获取节点名字
	
	public function getLinkname($id){
		$current = $this->header;
		if($current->next==null){
			echo '无此id名称';
			return;
		}
		$flag = true;
		while($current->next!=null){
			if($current->next->id==$id){
				$flag = false;
				break;
			}
			$current = $current->next;
		}
		
		if($flag){
			echo '无此id名称';
		}else{
			echo '此节点id是'.$current->next->name;
		}
		
	}
		
	//更新节点名字	
	
	public function reNodename($name,$newname){
		$current = $this->header;
		if($current->next==null){
			echo '无此节点名字';
			return;
		}
		$flag = true;
		while($current->next!=null){
			if($current->next->name==$name){
				$current->next->name = $newname;
				$flag = false;
				break;
			}
			$current = $current->next;
		}
		if($flag){
			echo '无此节点名字';
		}else{
			echo $name.'节点的名字已更新为'.$newname;
		}
	}
}

$singellinklist = new singelLinkList();
$singellinklist->addLink(new node(1,'tongxiaobin'));
$singellinklist->addLink(new node(2,'tongxiaobin1'));
$singellinklist->addLink(new node(3,'tongxiaobin3'));
$singellinklist->addLink(new node(4,'tongxiaobin4'));

$singellinklist->getLinkname(1);
$singellinklist->reNodename('tongxiaobin','hahaha');
$singellinklist->getLinkname(1);

echo $singellinklist->getLinklength();
?> 
