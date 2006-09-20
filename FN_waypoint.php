<?
/************************************************************************/
/* Leonardo: Gliding XC Server					                        */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) 2004-5 by Andreadakis Manolis                          */
/* http://leonardo.thenet.gr                                            */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

function getTakeoffList() {
	global $db;
	global $flightsTable,$prefix;

  	$query="SELECT DISTINCT takeoffID FROM $flightsTable WHERE takeoffID<>0";
	// echo $query;
	$res= $db->sql_query($query);		
    if($res <= 0){
		return array( array (),array () );
    }

	$takeoffs=array();
	$takeoffsID=array();
	while ($row = mysql_fetch_assoc($res)) { 
 		 $tnames[$row["takeoffID"]]=getWaypointName($row["takeoffID"],-1,1);
	}
	if (!empty($tnames)) {
		asort($tnames);
		foreach($tnames as $takeoffID=>$takeoffName) {
				 array_push($takeoffs,$takeoffName );
				 array_push($takeoffsID,$takeoffID );
		}
	}
	return array($takeoffs,$takeoffsID);

}

function getAreasTakeoffs($areaID) {
	global $db;
	global $waypointsTable ,$areasTakeoffsTable,$prefix;

  	$query="SELECT * FROM $waypointsTable,$areasTakeoffsTable	
		WHERE $areasTakeoffsTable.takeoffID = $waypointsTable.ID AND $areasTakeoffsTable.areaID=$areaID";
	// echo $query;
	$res= $db->sql_query($query);		
    if($res <= 0){
		echo "No takeoffs found for area ID $areaID<BR>";
		return array( array (),array () );
    }

	$takeoffs=array();
	$takeoffsID=array();
	while ($row = $db->sql_fetchrow($res)) { 
 		 $tnames[$row["takeoffID"]]=getWaypointName($row["takeoffID"],-1,1);
	}
	if (!empty($tnames)) {
		asort($tnames);
		foreach($tnames as $takeoffID=>$takeoffName) {
				 array_push($takeoffs,$takeoffName );
				 array_push($takeoffsID,$takeoffID );
		}
	}
	return array($takeoffs,$takeoffsID);

}

function getCountriesList($year=0,$month=0,$clubID=0,$pilotID=0) {
	global $db;
	global $flightsTable,$waypointsTable,$prefix,$moduleRelPath,$countries;	

	$where_clause="";
  	$query="SELECT DISTINCT countryCode, count(*) as FlightsNum FROM $flightsTable,$waypointsTable  WHERE 
				$flightsTable.takeoffID=$waypointsTable.ID  
				AND $flightsTable.userID<>0 
				GROUP BY countryCode ORDER BY countryCode ASC";	
//	 echo $query;
	$res= $db->sql_query($query);		
    if($res <= 0){
		return array( array (),array () );
    }

	$countriesCodes=array();
	$countriesNames=array();
	$countriesFlightsNum=array();
	while ($row = mysql_fetch_assoc($res)) { 
		$countriesN[$row["countryCode"]]= $countries[$row["countryCode"]];
		$countriesFNum[$row["countryCode"]]= $row["FlightsNum"];
	}
	if (!empty($countriesN) ){
		asort($countriesN);
		foreach($countriesN as $countryCode=>$countryName) {
				 array_push($countriesNames,$countryName );
				 array_push($countriesCodes,$countryCode );
				 array_push($countriesFlightsNum,$countriesFNum[$countryCode] );
				// echo $countriesFNum[$countryCode] ."->".$countryCode."<br>";
		}
	}
	
	return array($countriesCodes,$countriesNames,$countriesFlightsNum);
}

function getWaypoints($tm=0,$onlyTakeoffs=0) {
	global $db,$waypointsTable;
	set_time_limit(200);
	if ($onlyTakeoffs)
		$query="SELECT * from $waypointsTable WHERE type=1000";
	else 
		$query="SELECT * from $waypointsTable ".(($tm)?" WHERE modifyDate>=FROM_UNIXTIME($tm) AND type=1000 ":"");
	$res= $db->sql_query($query);
		
    if($res <= 0){
	  if (!$tm) {
	      echo("<H3>"._NO_KNOWN_LOCATIONS."</H3>\n");
    	  exit();
	  } else return array();
    }

	$waypoints=array();
	$i=0;
    while ($row = mysql_fetch_assoc($res)) { 
	  $waypoints[$i]=new gpsPoint();
 	  $waypoints[$i]->waypointID=$row["ID"];
	  $waypoints[$i]->name=$row["name"];
	  $waypoints[$i]->intName=$row["intName"];
   	  $waypoints[$i]->lat=$row["lat"];
   	  $waypoints[$i]->lon=$row["lon"];
	  $waypoints[$i]->type=$row["type"];
  	  $i++;	  
    }     

    mysql_freeResult($res);
	return $waypoints;
}


function getWaypointName($ID,$forceIntl=-1,$countryFirst=0) {
	global $db,$waypointsTable,$prefix,$opMode;
	global $CONFIG_forceIntl;

    if ($forceIntl==-1) $forceIntl=$CONFIG_forceIntl	;
		
	$query="SELECT * from $waypointsTable WHERE ID=".$ID;
	$res= $db->sql_query($query);			
	if($res <= 0) return "UNKNOWN";
	
	$row = mysql_fetch_assoc($res) ;
	mysql_freeResult($res);

	$tname=selectWaypointName($row["name"],$row["intName"],$row["countryCode"],$forceIntl);

	if ($countryFirst)	return $row["countryCode"]." - ".$tname;	
	else return $tname." - ".$row["countryCode"];	
}

function selectWaypointName($name,$intName,$countryCode,$forceIntl=-1) {
	global $currentlang,$nativeLanguage;
	global $CONFIG_forceIntl;

    if ($forceIntl==-1) $forceIntl=$CONFIG_forceIntl	;
		
//	if ( $nativeLanguage==$currentlang || countryHasLang($countryCode,$currentlang)   ) $tname=$name;
	if ( countryHasLang($countryCode,$currentlang)  && !$forceIntl ) $tname=$name;
	else $tname=$intName;

	return $tname;
}

function selectWaypointLocation($name,$intName,$countryCode,$forceIntl=-1) {
	global $currentlang,$nativeLanguage;
	global $CONFIG_forceIntl;

    if ($forceIntl==-1) $forceIntl=$CONFIG_forceIntl	;
		
//	if ( $nativeLanguage==$currentlang || countryHasLang($countryCode,$currentlang)   ) $tname=$name;
	if ( countryHasLang($countryCode,$currentlang)  && !$forceIntl ) $tname=$name;
	else $tname=$intName;

	return $tname;
}

function  countryHasLang($countryCode,$language) {
	 global $CONFIG_langsSpoken;

	 $countryCode=	strtolower($countryCode);
	 $language =	strtolower($language);

	 // if ($countryCode==$language) return 1;
	 if  ($CONFIG_langsSpoken[$language])
		 if ( in_array($countryCode, $CONFIG_langsSpoken[$language]) ) return 1;

	 return 0;
}

function  getKMLFilename($waypointID) {	
		global $waypointsAbsPath;
		return $waypointsAbsPath."/".$waypointID.".kml";  
}

function  getKMLrelPath($waypointID) {	
		global $waypointsWebPath;
		return $waypointsWebPath."/".$waypointID.".kml";  
}

function  makeKMLwaypoint($waypointID) {	
  global $langEncodings,$currentlang;

	$placemarkString=makeWaypointPlacemark($waypointID) ;

	$xml_text='<?xml version="1.0" encoding="'.$langEncodings[$currentlang].'"?>
<kml xmlns="http://earth.google.com/kml/2.0">
'.$placemarkString.'
</kml>
';
	return $xml_text;
}

function  makeWaypointPlacemark($waypointID,$returnCountryCode=0) {	
	global $db, $waypointsTable;
	global $baseInstallationPath,$module_name,$flightsTable,$countries,$CONF_mainfile;

    $wpInfo =new waypoint($waypointID);
    $wpInfo->getFromDB();

    $wpName= selectWaypointName($wpInfo->name,$wpInfo->intName,$wpInfo->countryCode);
    $wpLocation = selectWaypointLocation($wpInfo->location,$wpInfo->intLocation,$wpInfo->countryCode);

	 $query="SELECT  MAX(MAX_LINEAR_DISTANCE) as record_km, ID FROM $flightsTable  WHERE takeoffID =".$waypointID." GROUP BY ID ORDER BY record_km DESC ";
	
	 $flightNum=0;
	 $res= $db->sql_query($query);
	 if($res > 0){
		$flightNum=mysql_num_rows($res);
		$row = mysql_fetch_assoc($res);
	
		$siteRecordLink="<a href='http://".$_SERVER['SERVER_NAME'].$baseInstallationPath."/".$CONF_mainfile."?name=".$module_name."&op=show_flight&flightID=".$row['ID']."'>".
			formatDistance($row['record_km'],1)."</a>";
	 } else $siteRecordLink="";
	
	 $pointFlightsLink="<a href='http://".$_SERVER['SERVER_NAME'].$baseInstallationPath."/".$CONF_mainfile."?name=$module_name&op=list_flights&takeoffID=$waypointID&year=0'>"._See_flights_near_this_point." [ ".$flightNum." ]</a>";
	 $countryFlightsLink="<a href='http://".$_SERVER['SERVER_NAME'].$baseInstallationPath."/".$CONF_mainfile."?name=$module_name&op=list_flights&year=0&takeoffID=0&country=".$wpInfo->countryCode."'>".$countries[$wpInfo->countryCode]."</a>";
	 if ($wpInfo->link) $siteLink='<a href="'.formatURL($wpInfo->link).'" target="_blank">'.formatURL($wpInfo->link).'</a>';
	 else $siteLink="-";

// "<?xml version='1.0' encoding='".$langEncodings[$currentlang]."'? >
// <?xml version="1.0" encoding="UTF-8"? >
$xml_text='<Placemark>
  <name>'.$wpName.'</name>
  <description><![CDATA[<table cellpadding=0 cellspacing=0 width=300>'.
	'<tr bgcolor="#D7E1EE"><td>'._SITE_REGION .': '.$wpLocation.' - '.$countryFlightsLink.'</td></tr>'.
	'<tr bgcolor="#CCCCCC"><td>'.$pointFlightsLink.'</td></tr>'.
	'<tr ><td>'._SITE_RECORD.' : '.$siteRecordLink.'</td></tr>'.
	'<tr bgcolor="#CCCCCC"><td>'._SITE_LINK .' : '.$siteLink.'</td></tr>'.
	'<tr ><td>'.$wpInfo->description.'</td></tr>'.
	'<tr ><td></td></tr>'.
	'</table>	
    ]]>
 </description>
  <LookAt>
    <longitude>'.(-$wpInfo->lon).'</longitude>
    <latitude>'.$wpInfo->lat.'</latitude>
    <range>10000</range>
    <tilt>0</tilt>
    <heading>0</heading>
  </LookAt>
  <styleUrl>root://styleMaps#default+nicon=0x307+hicon=0x317</styleUrl>
  <Style>
    <IconStyle>
      <scale>0.8</scale>
      <Icon>
        <href>root://icons/palette-4.png</href>
        <x>160</x>
        <y>128</y>
        <w>32</w>
        <h>32</h>
      </Icon>
    </IconStyle>
    <LabelStyle>
      <scale>0.8</scale>
    </LabelStyle>
  </Style>
  <Point>
    <coordinates>'.(-$wpInfo->lon).','.$wpInfo->lat.',0</coordinates>
  </Point>
</Placemark>';
	if ($returnCountryCode) {
		return array($xml_text,$wpInfo->countryCode);
	} else return $xml_text;

}
?>