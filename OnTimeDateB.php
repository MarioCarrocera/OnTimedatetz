<?php
trait DateB{
	private $Systimezone='UTC';
	private $Usrtimezone='UTC';
	private $Systimeformat = '';
	private $Usrtimeformat = '';

	function Now(){
		$this->ot_func( __METHOD__ , __FUNCTION__ , func_get_args() );
		$now=new DateTime('NOW',new DateTimeZone($this->Usrtimezone));
		$fecha=$now->format($this->Usrtimeformat);
		return $fecha;
	}

	function NowIn($tz){
		$this->ot_func( __METHOD__ , __FUNCTION__ , func_get_args() );
		$fecha= 'error';
        if ($this->ot_getinside($tz,'TimeZone.bas','date')){
			$now=new DateTime('NOW',new DateTimeZone($tz));
			$fecha=$now->format($this->Usrtimeformat);
		}
		return $fecha;
	}

	function Clock($format = 'H:i:s P'){
		$this->ot_func( __METHOD__ , __FUNCTION__ , func_get_args() );
		$now=new DateTime('NOW',new DateTimeZone($this->Usrtimezone));
		$fecha=$now->format($format);
		return $fecha;
	}

	function ClockIn($tz,$format = 'H:i:s P'){
		$this->ot_func( __METHOD__ , __FUNCTION__ , func_get_args() );
		$fecha= 'error';
        if ($this->ot_getinside($tz,'TimeZone.bas','date')){
			$now=new DateTime('NOW',new DateTimeZone($tz));
			$fecha=$now->format($format);
		}
		return $fecha;
	}

	function Date(){
		$this->ot_func( __METHOD__ , __FUNCTION__ , func_get_args() );
		$now=new DateTime('NOW',new DateTimeZone($this->Systimezone));
		return $now;
	}

	function DatStr($date, $format='Ymd', $tz='SYS'){
		$this->ot_func( __METHOD__ , __FUNCTION__ , func_get_args() );
		$fecha='error';
		if ($this->DatVal($date, $format, $tz)){
			$now=$this->retval;
			$fecha=$now->format($this->Usrtimeformat);
		}
		return $fecha;
	}
	function DatObj($date, $format='Ymd', $tz='SYS'){
		$this->ot_func( __METHOD__ , __FUNCTION__ , func_get_args() );
		if ($this->DatVal($date, $format, $tz)){
			$now=$this->retval;
		}
		return $now;
	}
	function DatVal($date, $format='Ymd', $tz='SYS'){
		$this->ot_funct( __METHOD__ , __FUNCTION__ , func_get_args() );
		if ($tz=='SYS'){
			$tz = $this->Systimezone;
		} else {
			if ($tz=='USR'){
				$tz = $this->Usrtimezone;
			} else {
		        if (! $this->ot_getinside($tz,'TimeZone.bas','date')){
					$tz = 'UTC';
				}
			}
		}
		$now=date_create_from_format($format,$date,new DateTimeZone($tz));
		$errors=date_get_last_errors();
		if (($errors['warning_count'] + $errors['error_count'])>0){
			$this->err=('C0010M046');
			return FALSE;			
		}
		date_time_set($now,0,0,0);
		$this->retval=$now;
		return True;
	}
	function DatTmeVal($date, $format='YmdHis', $tz='SYS'){
		$this->ot_funct( __METHOD__ , __FUNCTION__ , func_get_args() );
		if ($tz=='SYS'){
			$tz = $this->Systimezone;
		} else {
			if ($tz=='USR'){
				$tz = $this->Usrtimezone;
			} else {
		        if (! $this->ot_getinside($tz,'TimeZone.bas','date')){
					$tz = 'UTC';
				}
			}
		}
		$now=date_create_from_format($format,$date,new DateTimeZone($tz));
		$errors=date_get_last_errors();
		if (($errors['warning_count'] + $errors['error_count'])>0){
			$this->err=('C0010M048');
			return FALSE;			
		}
		$this->retval=$now;
		return TRUE;
	}
	function TmeVal($date, $format='His', $tz='SYS'){
		$this->ot_funct( __METHOD__ , __FUNCTION__ , func_get_args() );
		if ($tz=='SYS'){
			$tz = $this->Systimezone;
		} else {
			if ($tz=='USR'){
				$tz = $this->Usrtimezone;
			} else {
		        if (! $this->ot_getinside($tz,'TimeZone.bas','date')){
					$tz = 'UTC';
				}
			}
		}
		$now=date_create_from_format($format,$date,new DateTimeZone($tz));
		$errors=date_get_last_errors();
		if (($errors['warning_count'] + $errors['error_count'])>0){
			$this->err=('C0010M047');
			return FALSE;			
		}
		$this->retval=$now;
		return TRUE;
	}
	function SetMyTz($timezone){
        if ($this->ot_getinside($timezone,'TimeZone.bas','date')){
			$this->ot_addchangein('tz',$timezone,'admin.json','usr/'.$this->id);
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function SetMyFmt($timeformat){
        if ($this->ot_getinside($timeformat,'PhpFormat.bas','date')){        	
			$this->ot_addchangein('ft',$this->retval,'admin.json','usr/'.$this->id);
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

}	
