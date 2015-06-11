<?php
	class View{
		protected $limits;
		protected $message;
		protected $adress;
		protected $template;
		
		function __construct($template){
			$this->template=file_get_contents($template);
			$this->template=preg_replace('/\{php\s+([^\}]+)\}/','<?php \\1 ?>',$this->template);
			$this->template=preg_replace('/\{=([^\}]+)\}/','<?php echo \\1 ?>',$this->template);
			$this->template=preg_replace('/\{if\s+(.+)\}/','<?php if(\\1){ ?>',$this->template);
			$this->template=preg_replace('/\{else\}/','<?php }else{ ?>',$this->template);
			$this->template=preg_replace('/\{elseif\s+(.+)\}/','<?php }elseif(\\1){ ?>',$this->template);
			$this->template=preg_replace('/\{\/if\}/','<?php } ?>',$this->template);
			$this->template=preg_replace('/\{loop\s+(\S+)\s+(\S+)\s*\}/','<?php foreach(\\1 as \\2){ ?>',$this->template);
			$this->template=preg_replace('/\{\/loop\}/','<?php } ?>',$this->template);
			$ip = $_SERVER['HTTP_HOST'];
			$desc = dirname($_SERVER['PHP_SELF']);
			$this->template=str_replace('<!--{base}-->','<base href="http://'.$ip.$desc.'/" />',$this->template);
			$this->adress="template/".$template.".php";
			file_put_contents($this->adress,$this->template);	
		}
		
		function getLimits($dao){
			$limits=new Limits($dao);	
			if(isset($_SESSION["type"])){
				$this->limits=$limits->limits($_SESSION["type"]);	
			}else{
				$this->limits=$limits->limits();	
			}
		}
		
		function display(){
			include($this->adress);	
		}
	}
?>