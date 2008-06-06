<?

$CONF['servers']['syncLog']['dontLog']=array(5,8,10002); // we dont log DHV, DHV mirror and XCONTEST

$CONF['servers']['list']=array( 
1=>array(
	'id'=>1,
	'name'=>"paraglidingforum.com", 
	'short_name'=>'PGF',

	'id_filter'=>0,
	'name_filter'=>"Local Server",

	'isLeo'=>1,
	'installation_type'=>2,
	'leonardo_version'=>"2.9.0",

	'url'=>"www.paraglidingforum.com/modules.php?name=leonardo",
	'url_base'=>"www.paraglidingforum.com/modules/leonardo",
	'url_op'=>"www.paraglidingforum.com/modules/leonardo/op.php",
	'admin_email'=>"andread@thenet.gr",
	'site_pass'=>"er252k2342kk3fvv932295jjdfg",
	'serverPass'=>"",
	'clientPass'=>"",

	'is_active'=>1,

	'sync_format'=>"JSON",
	'sync_type'=>2, // LOCAL
	'use_zip'=>1,		
		
	'gives_waypoints'=>1,
	'waypoint_countries'=>"",
),
	
2=>array(
	'id'=>2,
	'name'=>"sky.gr",
	'short_name'=>'GR',
	'name_filter'=>"Leonardo XC Greece",

	'isLeo'=>1,
	'installation_type'=>2,
	'leonardo_version'=>"2.9.0",

	'url'=>"www.sky.gr/modules.php?name=leonardo",
	'url_base'=>"www.sky.gr/modules/leonardo",
	'url_op'=>"www.sky.gr/modules/leonardo/op.php",

	'admin_email'=>"admin@sky.gr",
	'site_pass'=>"249mnmewaufofg459nnfsd02hnvdoqg12we2",

	'serverPass'=>"", // we dont GIVE 
	'clientPass'=>"p19MustUseThisPassToConnectToSky234882374",

	'sync_format'=>"JSON",
	'sync_type'=>2, // LOCAL
	'use_zip'=>1, 

	'is_active'=>1,

	'gives_waypoints'=>1,
	'waypoint_countries'=>"GR",
),

3=>array(
	'id'=>3,
	'name'=>"xc.ciclone.com.br",

	'short_name'=>'BR',
	'name_filter'=>"Leonardo XC Brazil",

	'isLeo'=>1,
	'installation_type'=>2,
	'leonardo_version'=>"2.9.0",
	'url'=>"xc.ciclone.com.br/modules.php?name=leonardo",
	'url_base'=>"xc.ciclone.com.br/modules/leonardo",
	'url_op'=>"xc.ciclone.com.br/modules/leonardo/op.php",
	'admin_email'=>"durval@ciclone.com.br",
	'site_pass'=>"dnquo348246kvbnsd230f3289",
	'serverPass'=>"", // we dont GIVE 
	'clientPass'=>"dsf33453vvrtt2t25tg54f453",

	'sync_format'=>"JSON",
	'sync_type'=>1, // LINK
	'use_zip'=>1,
	
	'is_active'=>1,
	'gives_waypoints'=>1,
	'waypoint_countries'=>"BR",
),

4=>array(
	'id'=>4,
	'name'=>"xcportugal.com",
	'short_name'=>'PT',
	'name_filter'=>"Leonardo XC Portugal",

	'isLeo'=>1,
	'installation_type'=>1,
	'leonardo_version'=>"2.9.0",
	'url'=>"www.xcportugal.com/modules.php?name=leonardo",
	'url_base'=>"www.xcportugal.com/modules/leonardo",
	'url_op'=>"www.xcportugal.com/modules/leonardo/op.php",
	'admin_email'=>"francisco-p-adriano@telecom.pt",
	'site_pass'=>"s39cjfya924pdms82kd90fj21",
	'serverPass'=>"", // we dont GIVE 
	'clientPass'=>"942jghrlotgplhv4294522adky",

	'sync_format'=>"JSON",	
	'sync_type'=>2, // LOCAL
	'use_zip'=>1,
	'rescore_if_missing'=>1, // if sync_type=LOCAL and the EXTENTED scoring INFO is missing rescore flight
		
	'is_active'=>1,
	'gives_waypoints'=>1,
	'waypoint_countries'=>"PT",
),

5=>array(
	'id'=>5,
	'name'=>"DHV",
	'short_name'=>'DHV',
	'name_filter'=>"Leonardo XC DHV",
	
	'isLeo'=>1,
	'installation_type'=>2,
	'leonardo_version'=>"2.9.0",
	'url'=>"xc.dhv.de/xc/modules?name=leonardo",
	'url_base'=>"xc.dhv.de/xc/modules/leonardo",
	'url_op'=>"xc.dhv.de/xc/modules/leonardo/op.php",
	'admin_email'=>"Admin@dhv.de",
	'site_pass'=>"af5uk04l2ftjd5jzsekgt31ko",

	'serverPass'=>"",
	'clientPass'=>"",

	'sync_format'=>"JSON",
	
	'sync_type'=>1, // LINK
	'use_zip'=>0,

	'treat_flights_as_local'=>0,
	'exclude_from_list'=>1,
	'exclude_from_league'=>1,
	'allow_duplicate_flights'=>1,

	'dont_give_servers'=>array(8,10002),	
	'accept_also_servers'=>array(10002),
	
	'is_active'=>1,

	'gives_waypoints'=>1,
	'waypoint_countries'=>"DE",
),

6=>array(
	'id'=>6,
	'name'=>"FAVL",

	'isLeo'=>1,
	'installation_type'=>2,
	'leonardo_version'=>"2.1.0.pre",
	'url'=>"cnd.favl.info/modules.php?name=leonardo",
	'url_base'=>"cnd.favl.info/modules/leonardo",
	'url_op'=>"cnd.favl.info/modules/leonardo/op.php",
	'admin_email'=>"parablog@gmail.com",
	'site_pass'=>"c42b8fb082ba01545cfba2dd955e46f9",
	'serverPass'=>"",
	'clientPass'=>"",

	'sync_format'=>"JSON",
	'sync_type'=>2,  // LOCAL
	'use_zip'=>1,

	'is_active'=>0,

	'gives_waypoints'=>1,
	'waypoint_countries'=>"",
),

7=>array(
	'id'=>7,
	'name'=>"foroparapente.com",

	'isLeo'=>1,
	'installation_type'=>2,
	'leonardo_version'=>"2.0.0",
	'url'=>"www.foroparapente.com/modules.php?name=leonardo",
	'url_base'=>"www.foroparapente.com/modules/leonardo",
	'url_op'=>"www.foroparapente.com/modules/leonardo/op.php",
	'admin_email'=>"mr_maccaroni@hotmail.com",
	'site_pass'=>"y73mf7bn2js92mdf29dnxoefd",
	'serverPass'=>"",
	'clientPass'=>"",
	'sync_format'=>"XML",
	
	'sync_type'=>2, // LOCAL
	'use_zip'=>1,

	'is_active'=>0,

	'gives_waypoints'=>1,
	'waypoint_countries'=>"CL",
),

8=>array(
	'id'=>8,
	'name'=>"xcontest",
	'short_name'=>'XC',
	'name_filter'=>"XC Contest",
	
	'isLeo'=>0,
	'installation_type'=>1, // 1-> xcontest
	'leonardo_version'=>"0",
	'url'=>"www.xcontest.org",
	'url_base'=>"www.xcontest.org",
	'url_sync'=>"sync.xcontest.org/v1.rbx?", // startID=1&count=5	
	'url_op'=>"www.xcontest.org",
	'admin_email'=>"petr@pgweb.cz",

	'site_pass'=>"",
	'serverPass'=>"gorw245vcvii4293dghj",
	'clientPass'=>"",

	'sync_format'=>"JSON",
	'sync_type'=>"1", // LINK
	'use_zip'=>"0",

	'treat_flights_as_local'=>0,
	'exclude_from_list'=>1,
	'exclude_from_league'=>1,
	'allow_duplicate_flights'=>1,

	'dont_give_servers'=>array(5,10002),	
	'accept_also_servers'=>'',
	
	'is_active'=>1,

	'gives_waypoints'=>0,
	'waypoint_countries'=>"",
),

9=>array(
	'id'=>9,
	'name'=>"ypforum",
	'short_name'=>'TR',
	'name_filter'=>"Leonardo XC Turkey",
	
	'isLeo'=>1,
	'installation_type'=>2,
	'leonardo_version'=>"2.9.0",
	'url'=>"www.ypforum.com/modules.php?name=leonardo",
	'url_base'=>"www.ypforum.com/modules/leonardo",
	'url_op'=>"www.ypforum.com/modules/leonardo/op.php",
	'admin_email'=>"yucer_ali@hotmail.com",
	'site_pass'=>"yp135forum",

	'serverPass'=>"", // we dont GIVE 
	'clientPass'=>"joer3i2456u3423uuvmsdfgoa",

	'sync_format'=>"JSON",
	'sync_type'=>"2", // LOCAL
	'use_zip'=>"1",
	'rescore_if_missing'=>1, // if sync_type=LOCAL and the EXTENTED scoring INFO is missing rescore flight
	
	'is_active'=>1,

	'gives_waypoints'=>1,
	'waypoint_countries'=>"TR",
),

11=>array(
	'id'=>11,
	'name'=>"nhpcorguk",

	'isLeo'=>1,
	'installation_type'=>2,
	'leonardo_version'=>"2.0.0",
	'url'=>"nhpcorguk.site.securepod.com/nhpc/modules.php?name=leonardo",
	'url_base'=>"nhpcorguk.site.securepod.com/nhpc/modules/leonardo",
	'url_op'=>"nhpcorguk.site.securepod.com/nhpc/modules/leonardo/op.php",
	'admin_email'=>"sales@custodiancomputers.co.uk",
	'site_pass'=>"dfb9loow92n12sqhde23ncsq03",
	'serverPass'=>"",
	'clientPass'=>"",
	'sync_format'=>"XML",
	'sync_type'=>"0",
	'use_zip'=>"0",

	'is_active'=>0,

	'gives_waypoints'=>1,
	'waypoint_countries'=>"GB",
),


99=>array(
	'id'=>99,
	'name'=>"pgforum.thenet.gr",

	'isLeo'=>1,
	'installation_type'=>2,
	'leonardo_version'=>"2.9.0",
	'url'=>"pgforum.thenet.gr/modules.php?name=leonardo",
	'url_base'=>"pgforum.thenet.gr/modules/leonardo",
	'url_op'=>"pgforum.thenet.gr/modules/leonardo/op.php",
	'admin_email'=>"andread@thenet.gr",
	'site_pass'=>"29nnfsd02hnvdoqg12we2",

	'serverPass'=>"pforumThenetMustUseThisPassToConnectToP19484823", // we GIVE 
	'clientPass'=>"", // NO NEED TO GET FROM TEST SERVER

	'sync_format'=>"JSON",
	'sync_type'=>"1",
	'use_zip'=>"1",

	'is_active'=>0,

	'gives_waypoints'=>1,
	'waypoint_countries'=>"",
),

50=>array(
	'id'=>50,
	'name'=>"FAI/CIVL",

	'isLeo'=>0,
	'installation_type'=>0,
	'leonardo_version'=>"0",
	'url'=>"",
	'url_base'=>"",
	'url_op'=>"",
	'admin_email'=>"marcinofulus@gmail.com",
	'site_pass'=>"",

	'serverPass'=>"frty25824kkwgdgbcd257", // WE GIVE
	'clientPass'=>"",

	'sync_format'=>"XML",
	'sync_type'=>"0",
	'use_zip'=>"0",

	'is_active'=>0,

	'gives_waypoints'=>0,
	'waypoint_countries'=>"",
),

10002=>array(
	'id'=>10002,
	'name'=>"Leonardo XC DHV2",

	'isLeo'=>1,
	'installation_type'=>2,
	'leonardo_version'=>"2.9.0",
	'url'=>"dhvxc.dhv1.de/phpBB/modules?name=leonardo",
	'url_base'=>"dhvxc.dhv1.de/phpBB/modules/leonardo",
	'url_op'=>"dhvxc.dhv1.de/phpBB/modules/leonardo/op.php",
	'admin_email'=>"Admin@dhv.de",

	'site_pass'=>"af5uk04l2ftjd5jzsekgt31ko", 

	'serverPass'=>"fdsdfg343hwero250235423",  // WE GIVE 

	'clientPass'=>"4285372987592345425",        // WE TAKE
	'sync_format'=>"JSON",
	'sync_type'=>1, // LINK
	'use_zip'=>0,

	'is_active'=>0,

	'treat_flights_as_local'=>0,
	'exclude_from_list'=>1,
	'exclude_from_league'=>1,
	'allow_duplicate_flights'=>1,

	'dont_give_servers'=>array(5,8),	
	'accept_also_servers'=>array(5),
	
	'gives_waypoints'=>1,
	'waypoint_countries'=>"DE",
),

);


?>