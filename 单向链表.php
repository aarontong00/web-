 <?php
/*��������ѧϰ ͯ���� 2016-08-10*/
//����ڵ�
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
//������

class singelLinkList {
	private $header;
	
	public function __construct($id=null,$name=null){
		$this->header = new node($id,$name);
	}
	
	//��ȡ������
	
	public function getLinklength(){
		$i = 0;
		$current = $this->header;
		
		while($current->next != null){
			$i++;
			$current = $current->next;
		}
		return $i;
	}
	
	//��ӽڵ�����
	
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
	
	//ɾ���ڵ��б�
	
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
				echo 'δ�ҵ�'.$id.'�ڵ㣡';
			}else{
				$current->next = $current->next->next;
			}
		
		
	}
	//��ȡ����
	
	public function getLinkList(){
		$current = $this->header;
		if($current->next==null){
			echo '����Ϊ��';
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
	//��ȡ�ڵ�����
	
	public function getLinkname($id){
		$current = $this->header;
		if($current->next==null){
			echo '�޴�id����';
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
			echo '�޴�id����';
		}else{
			echo '�˽ڵ�id��'.$current->next->name;
		}
		
	}
		
	//���½ڵ�����	
	
	public function reNodename($name,$newname){
		$current = $this->header;
		if($current->next==null){
			echo '�޴˽ڵ�����';
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
			echo '�޴˽ڵ�����';
		}else{
			echo $name.'�ڵ�������Ѹ���Ϊ'.$newname;
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
