<?php
trait OTDate{

	function InstallDate($name='date')
	{
		if ($this->not_exist('main')) {
			$this->ot_create('main');
		}
		if ($this->not_exist($name)) {
			$this->ot_create($name);
		}
		$this->ot_addchangein($name,$name,'features.json');
		$this->ot_addchangein($name,'owner','features.json','usr/admin');
		$this->ot_addchangein($name,array('Name'=>'Dates Feature','limit'=>0,'OnUse'=>0),'container.json');
		$this->ot_array(array('nick'=>$name,'name'=>'Dates Feature'),'admin.json', TRUE,$name);
		$this->ot_addchangein('admin','owner','users.json',$name);			

		$this-> ErrAdd('C0010M039',"Missing Record");
		$this-> ErrAdd('C0010M040',"Record don't have key");
		$this-> ErrAdd('C0010M041',"Record have more than one key");
		$this-> ErrAdd('C0010M042',"Field Could't be Empty");
		$this-> ErrAdd('C0010M043',"Wrong field type");
		$this-> ErrAdd('C0010M044',"Working over");
		$this-> ErrAdd('C0010M045',"Field nor in list");
		$this-> ErrAdd('C0010M046',"Error in date suplied");
		$this-> ErrAdd('C0010M047',"Error in time suplied");
		$this-> ErrAdd('C0010M048',"Error in date/time suplied");
	
	}
			
	function InstallDate2($name='date'){
			
		$this->CrtFtrBsc($name);
		$this->AddCntIn('TimeZone','Time Zones',$name) ;
		$this->PblBscInAdd('TimeZone',$name);
		$data=array('Africa/Abidjan'=>0,'Africa/Accra'=>0,'Africa/Addis_Ababa'=>0,'Africa/Algiers'=>0,'Africa/Asmara'=>0,'Africa/Bamako'=>0,'Africa/Bangui'=>0,'Africa/Banjul'=>0,'Africa/Bissau'=>0,'Africa/Blantyre'=>0,'Africa/Brazzaville'=>0,'Africa/Bujumbura'=>0,'Africa/Cairo'=>0,'Africa/Casablanca'=>0,'Africa/Ceuta'=>0,'Africa/Conakry'=>0,'Africa/Dakar'=>0,'Africa/Dar_es_Salaam'=>0,'Africa/Djibouti'=>0,'Africa/Douala'=>0,'Africa/El_Aaiun'=>0,'Africa/Freetown'=>0,'Africa/Gaborone'=>0,'Africa/Harare'=>0,'Africa/Johannesburg'=>0,'Africa/Juba'=>0,'Africa/Kampala'=>0,'Africa/Khartoum'=>0,'Africa/Kigali'=>0,'Africa/Kinshasa'=>0,'Africa/Lagos'=>0,'Africa/Libreville'=>0,'Africa/Lome'=>0,'Africa/Luanda'=>0,'Africa/Lubumbashi'=>0,'Africa/Lusaka'=>0,'Africa/Malabo'=>0,'Africa/Maputo'=>0,'Africa/Maseru'=>0,'Africa/Mbabane'=>0,'Africa/Mogadishu'=>0,'Africa/Monrovia'=>0,'Africa/Nairobi'=>0,'Africa/Ndjamena'=>0,'Africa/Niamey'=>0,'Africa/Nouakchott'=>0,'Africa/Ouagadougou'=>0,'Africa/Porto-Novo'=>0,'Africa/Sao_Tome'=>0,'Africa/Tripoli'=>0,'Africa/Tunis'=>0,'Africa/Windhoek');		
		foreach($data as $code => $value){
			$this->InsCntIn($code,'Africa','TimeZone',$name);		
		}
		$data=array('America/Adak'=>0,'America/Anchorage'=>0,'America/Anguilla'=>0,'America/Antigua'=>0,'America/Araguaina'=>0,'America/Argentina/Buenos_Aires'=>0,'America/Argentina/Catamarca'=>0,'America/Argentina/Cordoba'=>0,'America/Argentina/Jujuy'=>0,'America/Argentina/La_Rioja'=>0,'America/Argentina/Mendoza'=>0,'America/Argentina/Rio_Gallegos'=>0,'America/Argentina/Salta'=>0,'America/Argentina/San_Juan'=>0,'America/Argentina/San_Luis'=>0,'America/Argentina/Tucuman'=>0,'America/Argentina/Ushuaia'=>0,'America/Aruba'=>0,'America/Asuncion'=>0,'America/Atikokan'=>0,'America/Bahia'=>0,'America/Bahia_Banderas'=>0,'America/Barbados'=>0,'America/Belem'=>0,'America/Belize'=>0,'America/Blanc-Sablon'=>0,'America/Boa_Vista'=>0,'America/Bogota'=>0,'America/Boise'=>0,'America/Cambridge_Bay'=>0,'America/Campo_Grande'=>0,'America/Cancun'=>0,'America/Caracas'=>0,'America/Cayenne'=>0,'America/Cayman'=>0,'America/Chicago'=>0,'America/Chihuahua'=>0,'America/Costa_Rica'=>0,'America/Creston'=>0,'America/Cuiaba'=>0,'America/Curacao'=>0,'America/Danmarkshavn'=>0,'America/Dawson'=>0,'America/Dawson_Creek'=>0,'America/Denver'=>0,'America/Detroit'=>0,'America/Dominica'=>0,'America/Edmonton'=>0,'America/Eirunepe'=>0,'America/El_Salvador'=>0,'America/Fort_Nelson'=>0,'America/Fortaleza'=>0,'America/Glace_Bay'=>0,'America/Godthab'=>0,'America/Goose_Bay'=>0,'America/Grand_Turk'=>0,'America/Grenada'=>0,'America/Guadeloupe'=>0,'America/Guatemala'=>0,'America/Guayaquil'=>0,'America/Guyana'=>0,'America/Halifax'=>0,'America/Havana'=>0,'America/Hermosillo'=>0,'America/Indiana/Indianapolis'=>0,'America/Indiana/Knox'=>0,'America/Indiana/Marengo'=>0,'America/Indiana/Petersburg'=>0,'America/Indiana/Tell_City'=>0,'America/Indiana/Vevay'=>0,'America/Indiana/Vincennes'=>0,'America/Indiana/Winamac'=>0,'America/Inuvik'=>0,'America/Iqaluit'=>0,'America/Jamaica'=>0,'America/Juneau'=>0,'America/Kentucky/Louisville'=>0,'America/Kentucky/Monticello'=>0,'America/Kralendijk'=>0,'America/La_Paz'=>0,'America/Lima'=>0,'America/Los_Angeles'=>0,'America/Lower_Princes'=>0,'America/Maceio'=>0,'America/Managua'=>0,'America/Manaus'=>0,'America/Marigot'=>0,'America/Martinique'=>0,'America/Matamoros'=>0,'America/Mazatlan'=>0,'America/Menominee'=>0,'America/Merida'=>0,'America/Metlakatla'=>0,'America/Mexico_City'=>0,'America/Miquelon'=>0,'America/Moncton'=>0,'America/Monterrey'=>0,'America/Montevideo'=>0,'America/Montserrat'=>0,'America/Nassau'=>0,'America/New_York'=>0,'America/Nipigon'=>0,'America/Nome'=>0,'America/Noronha'=>0,'America/North_Dakota/Beulah'=>0,'America/North_Dakota/Center'=>0,'America/North_Dakota/New_Salem'=>0,'America/Ojinaga'=>0,'America/Panama'=>0,'America/Pangnirtung'=>0,'America/Paramaribo'=>0,'America/Phoenix'=>0,'America/Port-au-Prince'=>0,'America/Port_of_Spain'=>0,'America/Porto_Velho'=>0,'America/Puerto_Rico'=>0,'America/Punta_Arenas'=>0,'America/Rainy_River'=>0,'America/Rankin_Inlet'=>0,'America/Recife'=>0,'America/Regina'=>0,'America/Resolute'=>0,'America/Rio_Branco'=>0,'America/Santarem'=>0,'America/Santiago'=>0,'America/Santo_Domingo'=>0,'America/Sao_Paulo'=>0,'America/Scoresbysund'=>0,'America/Sitka'=>0,'America/St_Barthelemy'=>0,'America/St_Johns'=>0,'America/St_Kitts'=>0,'America/St_Lucia'=>0,'America/St_Thomas'=>0,'America/St_Vincent'=>0,'America/Swift_Current'=>0,'America/Tegucigalpa'=>0,'America/Thule'=>0,'America/Thunder_Bay'=>0,'America/Tijuana'=>0,'America/Toronto'=>0,'America/Tortola'=>0,'America/Vancouver'=>0,'America/Whitehorse'=>0,'America/Winnipeg'=>0,'America/Yakutat'=>0,'America/Yellowknife'=>0);		
		foreach($data as $code => $value){
			$this->InsCntIn($code,'America','TimeZone',$name);		
		}
		$data=array('Antarctica/Casey'=>0,'Antarctica/Davis'=>0,'Antarctica/DumontDUrville'=>0,'Antarctica/Macquarie'=>0,'Antarctica/Mawson'=>0,'Antarctica/McMurdo'=>0,'Antarctica/Palmer'=>0,'Antarctica/Rothera'=>0,'Antarctica/Syowa'=>0,'Antarctica/Troll'=>0,'Antarctica/Vostok'=>0);		
		foreach($data as $code => $value){
			$this->InsCntIn($code,'Antarctica','TimeZone',$name);		
		}
		$data=array('Arctic/Longyearbyen');		
		foreach($data as $code => $value){
			$this->InsCntIn($code,'Arctic','TimeZone',$name);		
		}
		$data=array('UTC');		
		foreach($data as $code => $value){
			$this->InsCntIn($code,'UTC','TimeZone',$name);		
		}
		$data=array('Asia/Aden'=>0,'Asia/Almaty'=>0,'Asia/Amman'=>0,'Asia/Anadyr'=>0,'Asia/Aqtau'=>0,'Asia/Aqtobe'=>0,'Asia/Ashgabat'=>0,'Asia/Atyrau'=>0,'Asia/Baghdad'=>0,'Asia/Bahrain'=>0,'Asia/Baku'=>0,'Asia/Bangkok'=>0,'Asia/Barnaul'=>0,'Asia/Beirut'=>0,'Asia/Bishkek'=>0,'Asia/Brunei'=>0,'Asia/Chita'=>0,'Asia/Choibalsan'=>0,'Asia/Colombo'=>0,'Asia/Damascus'=>0,'Asia/Dhaka'=>0,'Asia/Dili'=>0,'Asia/Dubai'=>0,'Asia/Dushanbe'=>0,'Asia/Famagusta'=>0,'Asia/Gaza'=>0,'Asia/Hebron'=>0,'Asia/Ho_Chi_Minh'=>0,'Asia/Hong_Kong'=>0,'Asia/Hovd'=>0,'Asia/Irkutsk'=>0,'Asia/Jakarta'=>0,'Asia/Jayapura'=>0,'Asia/Jerusalem'=>0,'Asia/Kabul'=>0,'Asia/Kamchatka'=>0,'Asia/Karachi'=>0,'Asia/Kathmandu'=>0,'Asia/Khandyga'=>0,'Asia/Kolkata'=>0,'Asia/Krasnoyarsk'=>0,'Asia/Kuala_Lumpur'=>0,'Asia/Kuching'=>0,'Asia/Kuwait'=>0,'Asia/Macau'=>0,'Asia/Magadan'=>0,'Asia/Makassar'=>0,'Asia/Manila'=>0,'Asia/Muscat'=>0,'Asia/Nicosia'=>0,'Asia/Novokuznetsk'=>0,'Asia/Novosibirsk'=>0,'Asia/Omsk'=>0,'Asia/Oral'=>0,'Asia/Phnom_Penh'=>0,'Asia/Pontianak'=>0,'Asia/Pyongyang'=>0,'Asia/Qatar'=>0,'Asia/Qostanay'=>0,'Asia/Qyzylorda'=>0,'Asia/Riyadh'=>0,'Asia/Sakhalin'=>0,'Asia/Samarkand'=>0,'Asia/Seoul'=>0,'Asia/Shanghai'=>0,'Asia/Singapore'=>0,'Asia/Srednekolymsk'=>0,'Asia/Taipei'=>0,'Asia/Tashkent'=>0,'Asia/Tbilisi'=>0,'Asia/Tehran'=>0,'Asia/Thimphu'=>0,'Asia/Tokyo'=>0,'Asia/Tomsk'=>0,'Asia/Ulaanbaatar'=>0,'Asia/Urumqi'=>0,'Asia/Ust-Nera'=>0,'Asia/Vientiane'=>0,'Asia/Vladivostok'=>0,'Asia/Yakutsk'=>0,'Asia/Yangon'=>0,'Asia/Yekaterinburg'=>0,'Asia/Yerevan'=>0
);		
		foreach($data as $code => $value){
			$this->InsCntIn($code,'Asia','TimeZone',$name);		
		}
		$data=array('Atlantic/Azores'=>0,'Atlantic/Bermuda'=>0,'Atlantic/Canary'=>0,'Atlantic/Cape_Verde'=>0,'Atlantic/Faroe'=>0,'Atlantic/Madeira'=>0,'Atlantic/Reykjavik'=>0,'Atlantic/South_Georgia'=>0,'Atlantic/St_Helena'=>0,'Atlantic/Stanley'=>0);		
		foreach($data as $code => $value){
			$this->InsCntIn($code,'Atlantic','TimeZone',$name);		
		}
		$data=array('Australia/Adelaide'=>0,'Australia/Brisbane'=>0,'Australia/Broken_Hill'=>0,'Australia/Currie'=>0,'Australia/Darwin'=>0,'Australia/Eucla'=>0,'Australia/Hobart'=>0,'Australia/Lindeman'=>0,'Australia/Lord_Howe'=>0,'Australia/Melbourne'=>0,'Australia/Perth'=>0,'Australia/Sydney'=>0);		
		foreach($data as $code => $value){
			$this->InsCntIn($code,'Australia','TimeZone',$name);		
		}
		$data=array('Europe/Amsterdam'=>0,'Europe/Andorra'=>0,'Europe/Astrakhan'=>0,'Europe/Athens'=>0,'Europe/Belgrade'=>0,'Europe/Berlin'=>0,'Europe/Bratislava'=>0,'Europe/Brussels'=>0,'Europe/Bucharest'=>0,'Europe/Budapest'=>0,'Europe/Busingen'=>0,'Europe/Chisinau'=>0,'Europe/Copenhagen'=>0,'Europe/Dublin'=>0,'Europe/Gibraltar'=>0,'Europe/Guernsey'=>0,'Europe/Helsinki'=>0,'Europe/Isle_of_Man'=>0,'Europe/Istanbul'=>0,'Europe/Jersey'=>0,'Europe/Kaliningrad'=>0,'Europe/Kiev'=>0,'Europe/Kirov'=>0,'Europe/Lisbon'=>0,'Europe/Ljubljana'=>0,'Europe/London'=>0,'Europe/Luxembourg'=>0,'Europe/Madrid'=>0,'Europe/Malta'=>0,'Europe/Mariehamn'=>0,'Europe/Minsk'=>0,'Europe/Monaco'=>0,'Europe/Moscow'=>0,'Europe/Oslo'=>0,'Europe/Paris'=>0,'Europe/Podgorica'=>0,'Europe/Prague'=>0,'Europe/Riga'=>0,'Europe/Rome'=>0,'Europe/Samara'=>0,'Europe/San_Marino'=>0,'Europe/Sarajevo'=>0,'Europe/Saratov'=>0,'Europe/Simferopol'=>0,'Europe/Skopje'=>0,'Europe/Sofia'=>0,'Europe/Stockholm'=>0,'Europe/Tallinn'=>0,'Europe/Tirane'=>0,'Europe/Ulyanovsk'=>0,'Europe/Uzhgorod'=>0,'Europe/Vaduz'=>0,'Europe/Vatican'=>0,'Europe/Vienna'=>0,'Europe/Vilnius'=>0,'Europe/Volgograd'=>0,'Europe/Warsaw'=>0,'Europe/Zagreb'=>0,'Europe/Zaporozhye'=>0,'Europe/Zurich'=>0);		
		foreach($data as $code => $value){
			$this->InsCntIn($code,'Europe','TimeZone',$name);		
		}
		$data=array('Indian/Antananarivo'=>0,'Indian/Chagos'=>0,'Indian/Christmas'=>0,'Indian/Cocos'=>0,'Indian/Comoro'=>0,'Indian/Kerguelen'=>0,'Indian/Mahe'=>0,'Indian/Maldives'=>0,'Indian/Mauritius'=>0,'Indian/Mayotte'=>0,'Indian/Reunion'=>0);		
		foreach($data as $code => $value){
			$this->InsCntIn($code,'Indian','TimeZone',$name);		
		}
		$data=array('Pacific/Apia'=>0,'Pacific/Auckland'=>0,'Pacific/Bougainville'=>0,'Pacific/Chatham'=>0,'Pacific/Chuuk'=>0,'Pacific/Easter'=>0,'Pacific/Efate'=>0,'Pacific/Enderbury'=>0,'Pacific/Fakaofo'=>0,'Pacific/Fiji'=>0,'Pacific/Funafuti'=>0,'Pacific/Galapagos'=>0,'Pacific/Gambier'=>0,'Pacific/Guadalcanal'=>0,'Pacific/Guam'=>0,'Pacific/Honolulu'=>0,'Pacific/Kiritimati'=>0,'Pacific/Kosrae'=>0,'Pacific/Kwajalein'=>0,'Pacific/Majuro'=>0,'Pacific/Marquesas'=>0,'Pacific/Midway'=>0,'Pacific/Nauru'=>0,'Pacific/Niue'=>0,'Pacific/Norfolk'=>0,'Pacific/Noumea'=>0,'Pacific/Pago_Pago'=>0,'Pacific/Palau'=>0,'Pacific/Pitcairn'=>0,'Pacific/Pohnpei'=>0,'Pacific/Port_Moresby'=>0,'Pacific/Rarotonga'=>0,'Pacific/Saipan'=>0,'Pacific/Tahiti'=>0,'Pacific/Tarawa'=>0,'Pacific/Tongatapu'=>0,'Pacific/Wake'=>0,'Pacific/Wallis'=>0);		
		foreach($data as $code => $value){
			$this->InsCntIn($code,'Pacific','TimeZone',$name);		
		}
		$table='PhpFormat';	
		$this->AddCntIn($table,'Date Time Format defined in PHP',$name) ;
		$this->PblBscInAdd($table,$name);
		$data=array('ATOM'=> "Y-m-d\TH:i:sP",'COOKIE'=> "l, d-M-Y H:i:s T",'ISO8601'=> "Y-m-d\TH:i:sO",'RFC822'=> "D, d M y H:i:s O",'RFC850'=> "l, d-M-y H:i:s T",'RFC1036'=> "D, d M y H:i:s O",'RFC1123'=> "D, d M Y H:i:s O",'RFC2822'=> "D, d M Y H:i:s O",'RFC3339'=> "Y-m-d\TH:i:sP",'RFC3339_EXTENDED'=> "Y-m-d\TH:i:s.vP",'RSS'=> "D, d M Y H:i:s O",'W3C'=> "Y-m-d\TH:i:sP" );		
		foreach($data as $code => $value){
			$this->InsCntIn($code,$value,$table,$name);		
		}	
	}
}

?>