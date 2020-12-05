<?php 	
if(post('submit')){
	$data['user_name']=post('user_name');
	$data['user_url']=permalink(post('user_name'));
	if(!$data['user_url']){
		  echo $error = 'kullanıcı adı boş olamaz';
	}
	else {
		$sql=$db->prepare('insert into users set user_name=?,user_url=?');
		$sonuc=$sql->execute([$data['user_name'],$data['user_url']]);
		if($sonuc) echo $data['user_name'].' başarıyla DB ye eklendi';
		else echo 'başarısız';


	}
}
require view('kayit');

 ?>