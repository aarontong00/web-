<?php
if(isset($_FILES['upfile'])){
	$_POST = explode("," ,$_POST['path'] );
	
	function upfile($tempfile , $path) {
		
		$path = explode("/" ,  $path );
		if (!file_exists("upload")) {
			@mkdir("upload");
		}
		if (!file_exists("upload/".$path[0])) {
			@mkdir("upload/".$path[0] , 0777);
		}
		$path = implode("/" , $path );
		$upfile = 'upload/' . $path;
		
		move_uploaded_file($tempfile , $upfile);
		
	}
	array_map("upfile" , $_FILES['upfile']['tmp_name'] , $_POST  );
}
?>
<html>

<form action="" enctype="multipart/form-data" method="post">
<input type="file" name="upfile[]"  id="files" multiple webkitdirectory=""  />
<input type="hidden" name="path" id="path" />
<br/>
<input type="submit" value="�ύ" />
</form>
<p>��Ŀ</p>
<span>Men's Nike Cincinnati Bengals #18 A.J. Green Elite Black Camo Jersey</span>
<a href="edit.php">�༭</a>
<script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script>
        $(function () {
			var arr = Array();
            $("#files").on("change",function (e) {
                $.each(this.files,function (k,v) {
					/*����ļ������·��*/
                    arr[k] = v.webkitRelativePath;
                });
				$("#path").val(arr);
            });
        })
    </script>
</html>