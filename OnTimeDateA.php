<?php
trait DateA{
	function SetSysTz($timezone){
		if ($this->ot_can('create','main')) {
	        if ($this->ot_getinside($timezone,'TimeZone.bas','date')){
				$this->ot_addchangein('tz',$timezone,'admin.json','main');
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function SetSysFmt($timeformat){
		if ($this->ot_can('create','main')) {
	        if ($this->ot_getinside($timeformat,'PhpFormat.bas','date')){        	
				$this->ot_addchangein('ft',$this->retval,'admin.json','main');
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	
	function SetUsrTz($timezone,$user){
		if ($this->ot_can('change','usr')) {
	        if ($this->ot_getinside($timezone,'TimeZone.bas','date')){
				$this->ot_addchangein('tz',$timezone,'admin.json','usr/'.$user);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function SetUsrFmt($timeformat,$user){
		if ($this->ot_can('change','usr')) {
	        if ($this->ot_getinside($timeformat,'PhpFormat.bas','date')){        	
				$this->ot_addchangein('ft',$this->retval,'admin.json','usr/'.$user);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}	
}	
