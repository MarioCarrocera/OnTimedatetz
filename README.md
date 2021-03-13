Trait Date for ontime

The OnTime framework is designed to be modular, scalable and comprehensive, so that each new feature integrates without difficulty and maintains a unique class definition (OnTime) and all "additional classes" are "trait" that enrich it, in such a way that an integrated system is obtained, not separate programs which do not necessarily have to behave correctly together.
This trait is designed, handle dates and times also time zones and time format


Installation in test environment:

1.- Copy all the files in the directory where was instaled ontrime core

2.- With the browser of your preference, locate the directory and enter it

3.- Execute the OntimeInstallerDate.php file

4.- When executing the file,  the files where moved and the required environment was created

Recommendations:

If you know how to create a subdomain that points to the "demo" directory, it is more comfortable and realistic.

After install

When installing, the necessary environment is defined to define access security, I create a User called "Admin" and that his password is "OT2021Free", this environment left the class prepared for the control of Groups

When the trait is installed, include in basic content is all the times zones and formats avaible in php you can upgrade it (check basic content to learn how), have 2 level system and user, if is the same for all users can use just system definition, now u can validate data date, time & datetime, and deploy "Now" and "Date"


mario.carrocera@hotmail.com




**********+++++++++++
Date Demo
**********+++++++++++

**********
Create Class
**********

basic content exist
**********+++++++++++
Conecting like admin
**********+++++++++++

Connect('admin','OT2021Free')
Connected!!!

**********+++++++++++
Date information
**********+++++++++++

**********
Time Zones
**********

ShwCntIn('TimeZone','date')
0D.- Africa/Abidjan=>Africa
0D.- Africa/Accra=>Africa
0D.- Africa/Addis_Ababa=>Africa
0D.- Africa/Algiers=>Africa
0D.- Africa/Asmara=>Africa
0D.- Africa/Bamako=>Africa
0D.- Africa/Bangui=>Africa
0D.- Africa/Banjul=>Africa
0D.- Africa/Bissau=>Africa
0D.- Africa/Blantyre=>Africa
0D.- Africa/Brazzaville=>Africa
0D.- Africa/Bujumbura=>Africa
0D.- Africa/Cairo=>Africa
0D.- Africa/Casablanca=>Africa
0D.- Africa/Ceuta=>Africa
0D.- Africa/Conakry=>Africa
0D.- Africa/Dakar=>Africa
0D.- Africa/Dar_es_Salaam=>Africa
0D.- Africa/Djibouti=>Africa
0D.- Africa/Douala=>Africa
0D.- Africa/El_Aaiun=>Africa
0D.- Africa/Freetown=>Africa
0D.- Africa/Gaborone=>Africa
0D.- Africa/Harare=>Africa
0D.- Africa/Johannesburg=>Africa
0D.- Africa/Juba=>Africa
0D.- Africa/Kampala=>Africa
0D.- Africa/Khartoum=>Africa
0D.- Africa/Kigali=>Africa
0D.- Africa/Kinshasa=>Africa
0D.- Africa/Lagos=>Africa
0D.- Africa/Libreville=>Africa
0D.- Africa/Lome=>Africa
0D.- Africa/Luanda=>Africa
0D.- Africa/Lubumbashi=>Africa
0D.- Africa/Lusaka=>Africa
0D.- Africa/Malabo=>Africa
0D.- Africa/Maputo=>Africa
0D.- Africa/Maseru=>Africa
0D.- Africa/Mbabane=>Africa
0D.- Africa/Mogadishu=>Africa
0D.- Africa/Monrovia=>Africa
0D.- Africa/Nairobi=>Africa
0D.- Africa/Ndjamena=>Africa
0D.- Africa/Niamey=>Africa
0D.- Africa/Nouakchott=>Africa
0D.- Africa/Ouagadougou=>Africa
0D.- Africa/Porto-Novo=>Africa
0D.- Africa/Sao_Tome=>Africa
0D.- Africa/Tripoli=>Africa
0D.- Africa/Tunis=>Africa
0D.- 0=>Africa
0D.- America/Adak=>America
0D.- America/Anchorage=>America
0D.- America/Anguilla=>America
0D.- America/Antigua=>America
0D.- America/Araguaina=>America
0D.- America/Argentina/Buenos_Aires=>America
0D.- America/Argentina/Catamarca=>America
0D.- America/Argentina/Cordoba=>America
0D.- America/Argentina/Jujuy=>America
0D.- America/Argentina/La_Rioja=>America
0D.- America/Argentina/Mendoza=>America
0D.- America/Argentina/Rio_Gallegos=>America
0D.- America/Argentina/Salta=>America
0D.- America/Argentina/San_Juan=>America
0D.- America/Argentina/San_Luis=>America
0D.- America/Argentina/Tucuman=>America
0D.- America/Argentina/Ushuaia=>America
0D.- America/Aruba=>America
0D.- America/Asuncion=>America
0D.- America/Atikokan=>America
0D.- America/Bahia=>America
0D.- America/Bahia_Banderas=>America
0D.- America/Barbados=>America
0D.- America/Belem=>America
0D.- America/Belize=>America
0D.- America/Blanc-Sablon=>America
0D.- America/Boa_Vista=>America
0D.- America/Bogota=>America
0D.- America/Boise=>America
0D.- America/Cambridge_Bay=>America
0D.- America/Campo_Grande=>America
0D.- America/Cancun=>America
0D.- America/Caracas=>America
0D.- America/Cayenne=>America
0D.- America/Cayman=>America
0D.- America/Chicago=>America
0D.- America/Chihuahua=>America
0D.- America/Costa_Rica=>America
0D.- America/Creston=>America
0D.- America/Cuiaba=>America
0D.- America/Curacao=>America
0D.- America/Danmarkshavn=>America
0D.- America/Dawson=>America
0D.- America/Dawson_Creek=>America
0D.- America/Denver=>America
0D.- America/Detroit=>America
0D.- America/Dominica=>America
0D.- America/Edmonton=>America
0D.- America/Eirunepe=>America
0D.- America/El_Salvador=>America
0D.- America/Fort_Nelson=>America
0D.- America/Fortaleza=>America
0D.- America/Glace_Bay=>America
0D.- America/Godthab=>America
0D.- America/Goose_Bay=>America
0D.- America/Grand_Turk=>America
0D.- America/Grenada=>America
0D.- America/Guadeloupe=>America
0D.- America/Guatemala=>America
0D.- America/Guayaquil=>America
0D.- America/Guyana=>America
0D.- America/Halifax=>America
0D.- America/Havana=>America
0D.- America/Hermosillo=>America
0D.- America/Indiana/Indianapolis=>America
0D.- America/Indiana/Knox=>America
0D.- America/Indiana/Marengo=>America
0D.- America/Indiana/Petersburg=>America
0D.- America/Indiana/Tell_City=>America
0D.- America/Indiana/Vevay=>America
0D.- America/Indiana/Vincennes=>America
0D.- America/Indiana/Winamac=>America
0D.- America/Inuvik=>America
0D.- America/Iqaluit=>America
0D.- America/Jamaica=>America
0D.- America/Juneau=>America
0D.- America/Kentucky/Louisville=>America
0D.- America/Kentucky/Monticello=>America
0D.- America/Kralendijk=>America
0D.- America/La_Paz=>America
0D.- America/Lima=>America
0D.- America/Los_Angeles=>America
0D.- America/Lower_Princes=>America
0D.- America/Maceio=>America
0D.- America/Managua=>America
0D.- America/Manaus=>America
0D.- America/Marigot=>America
0D.- America/Martinique=>America
0D.- America/Matamoros=>America
0D.- America/Mazatlan=>America
0D.- America/Menominee=>America
0D.- America/Merida=>America
0D.- America/Metlakatla=>America
0D.- America/Mexico_City=>America
0D.- America/Miquelon=>America
0D.- America/Moncton=>America
0D.- America/Monterrey=>America
0D.- America/Montevideo=>America
0D.- America/Montserrat=>America
0D.- America/Nassau=>America
0D.- America/New_York=>America
0D.- America/Nipigon=>America
0D.- America/Nome=>America
0D.- America/Noronha=>America
0D.- America/North_Dakota/Beulah=>America
0D.- America/North_Dakota/Center=>America
0D.- America/North_Dakota/New_Salem=>America
0D.- America/Ojinaga=>America
0D.- America/Panama=>America
0D.- America/Pangnirtung=>America
0D.- America/Paramaribo=>America
0D.- America/Phoenix=>America
0D.- America/Port-au-Prince=>America
0D.- America/Port_of_Spain=>America
0D.- America/Porto_Velho=>America
0D.- America/Puerto_Rico=>America
0D.- America/Punta_Arenas=>America
0D.- America/Rainy_River=>America
0D.- America/Rankin_Inlet=>America
0D.- America/Recife=>America
0D.- America/Regina=>America
0D.- America/Resolute=>America
0D.- America/Rio_Branco=>America
0D.- America/Santarem=>America
0D.- America/Santiago=>America
0D.- America/Santo_Domingo=>America
0D.- America/Sao_Paulo=>America
0D.- America/Scoresbysund=>America
0D.- America/Sitka=>America
0D.- America/St_Barthelemy=>America
0D.- America/St_Johns=>America
0D.- America/St_Kitts=>America
0D.- America/St_Lucia=>America
0D.- America/St_Thomas=>America
0D.- America/St_Vincent=>America
0D.- America/Swift_Current=>America
0D.- America/Tegucigalpa=>America
0D.- America/Thule=>America
0D.- America/Thunder_Bay=>America
0D.- America/Tijuana=>America
0D.- America/Toronto=>America
0D.- America/Tortola=>America
0D.- America/Vancouver=>America
0D.- America/Whitehorse=>America
0D.- America/Winnipeg=>America
0D.- America/Yakutat=>America
0D.- America/Yellowknife=>America
0D.- Antarctica/Casey=>Antarctica
0D.- Antarctica/Davis=>Antarctica
0D.- Antarctica/DumontDUrville=>Antarctica
0D.- Antarctica/Macquarie=>Antarctica
0D.- Antarctica/Mawson=>Antarctica
0D.- Antarctica/McMurdo=>Antarctica
0D.- Antarctica/Palmer=>Antarctica
0D.- Antarctica/Rothera=>Antarctica
0D.- Antarctica/Syowa=>Antarctica
0D.- Antarctica/Troll=>Antarctica
0D.- Antarctica/Vostok=>Antarctica
0D.- Asia/Aden=>Asia
0D.- Asia/Almaty=>Asia
0D.- Asia/Amman=>Asia
0D.- Asia/Anadyr=>Asia
0D.- Asia/Aqtau=>Asia
0D.- Asia/Aqtobe=>Asia
0D.- Asia/Ashgabat=>Asia
0D.- Asia/Atyrau=>Asia
0D.- Asia/Baghdad=>Asia
0D.- Asia/Bahrain=>Asia
0D.- Asia/Baku=>Asia
0D.- Asia/Bangkok=>Asia
0D.- Asia/Barnaul=>Asia
0D.- Asia/Beirut=>Asia
0D.- Asia/Bishkek=>Asia
0D.- Asia/Brunei=>Asia
0D.- Asia/Chita=>Asia
0D.- Asia/Choibalsan=>Asia
0D.- Asia/Colombo=>Asia
0D.- Asia/Damascus=>Asia
0D.- Asia/Dhaka=>Asia
0D.- Asia/Dili=>Asia
0D.- Asia/Dubai=>Asia
0D.- Asia/Dushanbe=>Asia
0D.- Asia/Famagusta=>Asia
0D.- Asia/Gaza=>Asia
0D.- Asia/Hebron=>Asia
0D.- Asia/Ho_Chi_Minh=>Asia
0D.- Asia/Hong_Kong=>Asia
0D.- Asia/Hovd=>Asia
0D.- Asia/Irkutsk=>Asia
0D.- Asia/Jakarta=>Asia
0D.- Asia/Jayapura=>Asia
0D.- Asia/Jerusalem=>Asia
0D.- Asia/Kabul=>Asia
0D.- Asia/Kamchatka=>Asia
0D.- Asia/Karachi=>Asia
0D.- Asia/Kathmandu=>Asia
0D.- Asia/Khandyga=>Asia
0D.- Asia/Kolkata=>Asia
0D.- Asia/Krasnoyarsk=>Asia
0D.- Asia/Kuala_Lumpur=>Asia
0D.- Asia/Kuching=>Asia
0D.- Asia/Kuwait=>Asia
0D.- Asia/Macau=>Asia
0D.- Asia/Magadan=>Asia
0D.- Asia/Makassar=>Asia
0D.- Asia/Manila=>Asia
0D.- Asia/Muscat=>Asia
0D.- Asia/Nicosia=>Asia
0D.- Asia/Novokuznetsk=>Asia
0D.- Asia/Novosibirsk=>Asia
0D.- Asia/Omsk=>Asia
0D.- Asia/Oral=>Asia
0D.- Asia/Phnom_Penh=>Asia
0D.- Asia/Pontianak=>Asia
0D.- Asia/Pyongyang=>Asia
0D.- Asia/Qatar=>Asia
0D.- Asia/Qostanay=>Asia
0D.- Asia/Qyzylorda=>Asia
0D.- Asia/Riyadh=>Asia
0D.- Asia/Sakhalin=>Asia
0D.- Asia/Samarkand=>Asia
0D.- Asia/Seoul=>Asia
0D.- Asia/Shanghai=>Asia
0D.- Asia/Singapore=>Asia
0D.- Asia/Srednekolymsk=>Asia
0D.- Asia/Taipei=>Asia
0D.- Asia/Tashkent=>Asia
0D.- Asia/Tbilisi=>Asia
0D.- Asia/Tehran=>Asia
0D.- Asia/Thimphu=>Asia
0D.- Asia/Tokyo=>Asia
0D.- Asia/Tomsk=>Asia
0D.- Asia/Ulaanbaatar=>Asia
0D.- Asia/Urumqi=>Asia
0D.- Asia/Ust-Nera=>Asia
0D.- Asia/Vientiane=>Asia
0D.- Asia/Vladivostok=>Asia
0D.- Asia/Yakutsk=>Asia
0D.- Asia/Yangon=>Asia
0D.- Asia/Yekaterinburg=>Asia
0D.- Asia/Yerevan=>Asia
0D.- Atlantic/Azores=>Atlantic
0D.- Atlantic/Bermuda=>Atlantic
0D.- Atlantic/Canary=>Atlantic
0D.- Atlantic/Cape_Verde=>Atlantic
0D.- Atlantic/Faroe=>Atlantic
0D.- Atlantic/Madeira=>Atlantic
0D.- Atlantic/Reykjavik=>Atlantic
0D.- Atlantic/South_Georgia=>Atlantic
0D.- Atlantic/St_Helena=>Atlantic
0D.- Atlantic/Stanley=>Atlantic
0D.- Australia/Adelaide=>Australia
0D.- Australia/Brisbane=>Australia
0D.- Australia/Broken_Hill=>Australia
0D.- Australia/Currie=>Australia
0D.- Australia/Darwin=>Australia
0D.- Australia/Eucla=>Australia
0D.- Australia/Hobart=>Australia
0D.- Australia/Lindeman=>Australia
0D.- Australia/Lord_Howe=>Australia
0D.- Australia/Melbourne=>Australia
0D.- Australia/Perth=>Australia
0D.- Australia/Sydney=>Australia
0D.- Europe/Amsterdam=>Europe
0D.- Europe/Andorra=>Europe
0D.- Europe/Astrakhan=>Europe
0D.- Europe/Athens=>Europe
0D.- Europe/Belgrade=>Europe
0D.- Europe/Berlin=>Europe
0D.- Europe/Bratislava=>Europe
0D.- Europe/Brussels=>Europe
0D.- Europe/Bucharest=>Europe
0D.- Europe/Budapest=>Europe
0D.- Europe/Busingen=>Europe
0D.- Europe/Chisinau=>Europe
0D.- Europe/Copenhagen=>Europe
0D.- Europe/Dublin=>Europe
0D.- Europe/Gibraltar=>Europe
0D.- Europe/Guernsey=>Europe
0D.- Europe/Helsinki=>Europe
0D.- Europe/Isle_of_Man=>Europe
0D.- Europe/Istanbul=>Europe
0D.- Europe/Jersey=>Europe
0D.- Europe/Kaliningrad=>Europe
0D.- Europe/Kiev=>Europe
0D.- Europe/Kirov=>Europe
0D.- Europe/Lisbon=>Europe
0D.- Europe/Ljubljana=>Europe
0D.- Europe/London=>Europe
0D.- Europe/Luxembourg=>Europe
0D.- Europe/Madrid=>Europe
0D.- Europe/Malta=>Europe
0D.- Europe/Mariehamn=>Europe
0D.- Europe/Minsk=>Europe
0D.- Europe/Monaco=>Europe
0D.- Europe/Moscow=>Europe
0D.- Europe/Oslo=>Europe
0D.- Europe/Paris=>Europe
0D.- Europe/Podgorica=>Europe
0D.- Europe/Prague=>Europe
0D.- Europe/Riga=>Europe
0D.- Europe/Rome=>Europe
0D.- Europe/Samara=>Europe
0D.- Europe/San_Marino=>Europe
0D.- Europe/Sarajevo=>Europe
0D.- Europe/Saratov=>Europe
0D.- Europe/Simferopol=>Europe
0D.- Europe/Skopje=>Europe
0D.- Europe/Sofia=>Europe
0D.- Europe/Stockholm=>Europe
0D.- Europe/Tallinn=>Europe
0D.- Europe/Tirane=>Europe
0D.- Europe/Ulyanovsk=>Europe
0D.- Europe/Uzhgorod=>Europe
0D.- Europe/Vaduz=>Europe
0D.- Europe/Vatican=>Europe
0D.- Europe/Vienna=>Europe
0D.- Europe/Vilnius=>Europe
0D.- Europe/Volgograd=>Europe
0D.- Europe/Warsaw=>Europe
0D.- Europe/Zagreb=>Europe
0D.- Europe/Zaporozhye=>Europe
0D.- Europe/Zurich=>Europe
0D.- Indian/Antananarivo=>Indian
0D.- Indian/Chagos=>Indian
0D.- Indian/Christmas=>Indian
0D.- Indian/Cocos=>Indian
0D.- Indian/Comoro=>Indian
0D.- Indian/Kerguelen=>Indian
0D.- Indian/Mahe=>Indian
0D.- Indian/Maldives=>Indian
0D.- Indian/Mauritius=>Indian
0D.- Indian/Mayotte=>Indian
0D.- Indian/Reunion=>Indian
0D.- Pacific/Apia=>Pacific
0D.- Pacific/Auckland=>Pacific
0D.- Pacific/Bougainville=>Pacific
0D.- Pacific/Chatham=>Pacific
0D.- Pacific/Chuuk=>Pacific
0D.- Pacific/Easter=>Pacific
0D.- Pacific/Efate=>Pacific
0D.- Pacific/Enderbury=>Pacific
0D.- Pacific/Fakaofo=>Pacific
0D.- Pacific/Fiji=>Pacific
0D.- Pacific/Funafuti=>Pacific
0D.- Pacific/Galapagos=>Pacific
0D.- Pacific/Gambier=>Pacific
0D.- Pacific/Guadalcanal=>Pacific
0D.- Pacific/Guam=>Pacific
0D.- Pacific/Honolulu=>Pacific
0D.- Pacific/Kiritimati=>Pacific
0D.- Pacific/Kosrae=>Pacific
0D.- Pacific/Kwajalein=>Pacific
0D.- Pacific/Majuro=>Pacific
0D.- Pacific/Marquesas=>Pacific
0D.- Pacific/Midway=>Pacific
0D.- Pacific/Nauru=>Pacific
0D.- Pacific/Niue=>Pacific
0D.- Pacific/Norfolk=>Pacific
0D.- Pacific/Noumea=>Pacific
0D.- Pacific/Pago_Pago=>Pacific
0D.- Pacific/Palau=>Pacific
0D.- Pacific/Pitcairn=>Pacific
0D.- Pacific/Pohnpei=>Pacific
0D.- Pacific/Port_Moresby=>Pacific
0D.- Pacific/Rarotonga=>Pacific
0D.- Pacific/Saipan=>Pacific
0D.- Pacific/Tahiti=>Pacific
0D.- Pacific/Tarawa=>Pacific
0D.- Pacific/Tongatapu=>Pacific
0D.- Pacific/Wake=>Pacific
0D.- Pacific/Wallis=>Pacific
**********
Formats
**********

ShwCntIn('PhpFormat','date')
0D.- ATOM=>Y-m-d\TH:i:sP
0D.- COOKIE=>l, d-M-Y H:i:s T
0D.- ISO8601=>Y-m-d\TH:i:sO
0D.- RFC822=>D, d M y H:i:s O
0D.- RFC850=>l, d-M-y H:i:s T
0D.- RFC1036=>D, d M y H:i:s O
0D.- RFC1123=>D, d M Y H:i:s O
0D.- RFC2822=>D, d M Y H:i:s O
0D.- RFC3339=>Y-m-d\TH:i:sP
0D.- RFC3339_EXTENDED=>Y-m-d\TH:i:s.vP
0D.- RSS=>D, d M Y H:i:s O
0D.- W3C=>Y-m-d\TH:i:sP
**********
Now
**********

Now()
2021-03-13T18:11:29+01:00
**********
Now in tz
**********

Nowin('Asia/Tokyo')
2021-03-14T02:11:29+09:00
**********
Clock
**********

Clock()
18:11:29 +01:00
**********
Clock with format
**********

18:11
**********
Clock timezone in madrid
**********


ClockIn('Europe/Madrid','H:i P')
06:11 PM +01:00
**********
Current Date Time like object
**********


$now=$demo->Date()

echo $now->format("l d F Y H:i:s a e")
Saturday 13/March/2021 11:11:29 am America/Mexico_City

**********
Set date from string
**********

DatStr('20210229')
error
C0010M046.-Error in date suplied

DatStr('20210226')
error
C0010M046.-Error in date suplied


**********
Set date from string like object
**********

DatObj('20210228')
**********+++++++++++
Set up Date Format & Time zone
**********+++++++++++


**********
Time Zone for System
**********


SetSysTz("America/Mexico_City")

Asigned!!!


**********
Date Time format for System
**********


SetSysFmt("RFC850")

Asigned!!!


**********
Time Zone for My user
**********


SetMyTz("Europe/Madrid")

Asigned!!!


**********
Date Time format for My User
**********


SetMyFmt("ATOM")

Asigned!!!


**********
Time Zone for an user
**********


SetUsrTz("America/Monterrey")

C0010M002.-Failing create content


**********
Date Time format for an User
**********


SetUsrFmt("COOKIE")

C0010M002.-Failing create content

**********+++++++++++
Validations
**********+++++++++++


**********
date
**********


DatVal("20190229")

C0010M046.-Error in date suplied


DatVal("19650822")

Date OK!!!


**********
Time
**********


TmeVal("136102")

C0010M047.-Error in time suplied


TmeVal("082200")

Time OK!!!


**********
Date Time
**********


DatTmeVal("19650822136102")

C0010M048.-Error in date/time suplied


DatTmeVal("01965082282200")

Time OK!!!


**********+++++++++++
Demo Finish
**********+++++++++++

