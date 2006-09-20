<?php

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
/*                                                                      */
/* If you need to use double quotes (") remember to add a backslash (\),*/
/* so your entry will look like: This is \"double quoted\" text.        */
/* And, if you use HTML code, please double check it.                   */
/************************************************************************/

function setMonths() {
	global  $monthList;
	$monthList=array('Sije�anj','Velja�a','O�ujak','Travanj','Svibanj','Lipanj',
					'Srpanj','Kolovoz','Rujan','Listopad','Studeni','Prosinac');
}
setMonths();

//--------------------------------------------
// output.php
//--------------------------------------------
define("_FREE_FLIGHT","Slobodni prelet");
define("_FREE_TRIANGLE","Jednostavan trokut");
define("_FAI_TRIANGLE","FAI trokut");

define("_SUBMIT_FLIGHT_ERROR","Do�lo je do gre�ke pri predaji leta");

// list_pilots()
define("_NUM","#");
define("_PILOT","Pilot");
define("_NUMBER_OF_FLIGHTS","Broj letova");
define("_BEST_DISTANCE","Najve�a razdaljina");
define("_MEAN_KM","Prosje�ni broj km po letu");
define("_TOTAL_KM","Ukupno km");
define("_TOTAL_DURATION_OF_FLIGHTS","Ukupno sati");
define("_MEAN_DURATION","Prosje�no vrijeme trajanja leta");
define("_TOTAL_OLC_KM","Ukupno OLC km");
define("_TOTAL_OLC_SCORE","Ukupno OLC bodova");
define("_BEST_OLC_SCORE","Najbolji OLC let");
define("_From","od");

// list_flights()
define("_DURATION_HOURS_MIN","Trajanje (h:m)");
define("_SHOW","Prika�i");

// show flight
define("_FLIGHT_WILL_BE_ACTIVATED_SOON","Let �e biti aktiviran za 1-2 minute. ");
define("_TRY_AGAIN","Molim vas poku�ajte ponovno kasnije");

define("_TAKEOFF_LOCATION","Poleti�te");
define("_TAKEOFF_TIME","Vrijeme polijetanja");
define("_LANDING_LOCATION","Sleti�te");
define("_LANDING_TIME","Vrijeme slijetanja");
define("_OPEN_DISTANCE","Linearna razdaljina");
define("_MAX_DISTANCE","Najve�a razdaljina");
define("_OLC_SCORE_TYPE","OLC tip bodovanja");
define("_OLC_DISTANCE","OLC razdaljina");
define("_OLC_SCORING","OLC bodovi");
define("_MAX_SPEED","Najve�a brzina");
define("_MAX_VARIO","Najve�e dizanje");
define("_MEAN_SPEED","Prosje�na brzina");
define("_MIN_VARIO","Najve�e propadanje");
define("_MAX_ALTITUDE","Najve�a visina (nm)");
define("_TAKEOFF_ALTITUDE","Visina poleti�ta (nm)");
define("_MIN_ALTITUDE","Najmanja visina (nm)");
define("_ALTITUDE_GAIN","Dobivena visina");
define("_FLIGHT_FILE","Datoteka leta");
define("_COMMENTS","Komentari");
define("_RELEVANT_PAGE","Relevantna web stranica");
define("_GLIDER","Krilo");
define("_PHOTOS","Slike");
define("_MORE_INFO","Dodatne informacije");
define("_UPDATE_DATA","Osvje�i podatke");
define("_UPDATE_MAP","Osvje�i mapu");
define("_UPDATE_3D_MAP","Osvje�i 3D mapu");
define("_UPDATE_GRAPHS","Osvje�i grafikone");
define("_UPDATE_SCORE","Osvje�i bodove");

define("_TAKEOFF_COORDS","Koordinate poleti�ta:");
define("_NO_KNOWN_LOCATIONS","Nema poznatih lokacija!");
define("_FLYING_AREA_INFO","Informacije o leta�kom podru�ju");

//--------------------------------------------
// index.php
//--------------------------------------------
define("_PAGE_TITLE","Leonardo XC server");
define("_RETURN_TO_TOP","Povratak na vrh");
// list flight
define("_PILOT_FLIGHTS","Letovi pilota");

define("_DATE_SORT","Datum");
define("_PILOT_NAME","Ime pilota");
define("_TAKEOFF","Poleti�te");
define("_DURATION","Trajanje");
define("_LINEAR_DISTANCE","Linearna razdaljina");
define("_OLC_KM","OLC km");
define("_OLC_SCORE","OLC bodovi");
define("_DATE_ADDED","Zadnje dodano");

define("_SORTED_BY","Sortiraj po:");
define("_ALL_YEARS","Sve godine");
define("_SELECT_YEAR_MONTH","Odaberi godinu (i mjesec)");
define("_ALL","Sve");
define("_ALL_PILOTS","Svi piloti");
define("_ALL_TAKEOFFS","Sva poleti�ta");
define("_ALL_THE_YEAR","Sve godine");

// add flight
define("_YOU_HAVENT_SUPPLIED_A_FLIGHT_FILE","Niste predali datoteku leta");
define("_NO_SUCH_FILE","Datoteka koju ste predali ne mo�e biti prona�ena na serveru");
define("_FILE_DOESNT_END_IN_IGC","Datoteka nema .igc nastavak");
define("_THIS_ISNT_A_VALID_IGC_FILE","Datoteka nije u .igc formatu");
define("_THERE_IS_SAME_DATE_FLIGHT","Ve� postoji let s istim datumom i vremenom");
define("_IF_YOU_WANT_TO_SUBSTITUTE_IT","Ako ga �elite zamijeniti, najprije trebate");
define("_DELETE_THE_OLD_ONE","obrisati stari.");
define("_THERE_IS_SAME_FILENAME_FLIGHT","Ve� postoji datoteka s istim imenom");
define("_CHANGE_THE_FILENAME","Ako se radi o drugom letu promijenite ime datoteke i poku�ajte ponovno");
define("_YOUR_FLIGHT_HAS_BEEN_SUBMITTED","Va� let je prihva�en");
define("_PRESS_HERE_TO_VIEW_IT","Kliknite ovdje za prikaz leta");
define("_WILL_BE_ACTIVATED_SOON","(bit �e aktiviran za 1-2 minute)");

// add_from_zip
define("_SUBMIT_MULTIPLE_FLIGHTS","Predaja vi�e letova");
define("_ONLY_THE_IGC_FILES_WILL_BE_PROCESSED","Samo IGC datoteke �e biti obra�ene");
define("_SUBMIT_THE_ZIP_FILE_CONTAINING_THE_FLIGHTS","ZIP datoteka<br>koja sadr�i letove");
define("_PRESS_HERE_TO_SUBMIT_THE_FLIGHTS","Kliknite ovdje za predaju letova");

define("_FILE_DOESNT_END_IN_ZIP","Datoteka koju ste predali nema .zip nastavak");
define("_ADDING_FILE","Predaja datoteke");
define("_ADDED_SUCESSFULLY","Uspje�no zaprimljeno");
define("_PROBLEM","Problem");
define("_TOTAL","Ukupno ");
define("_IGC_FILES_PROCESSED","letova je bilo obra�eno");
define("_IGC_FILES_SUBMITED","letova je bilo predano");

// info
define("_DEVELOPMENT","Razvoj");
define("_ANDREADAKIS_MANOLIS","Andreadakis Manolis");
define("_PROJECT_URL","URL projekta");
define("_VERSION","Verzija");
define("_MAP_CREATION","Kreiranje mapa");
define("_PROJECT_INFO","Info o projektu");

// menu bar 
define("_MENU_MAIN_MENU","Glavni izbornik");
define("_MENU_DATE","Odaberi datum");
define("_MENU_COUNTRY","Odaberi dr�avu");
define("_MENU_XCLEAGUE","XC liga");
define("_MENU_ADMIN","Administracija");

define("_MENU_COMPETITION_LEAGUE","Liga - sve kategorije");
define("_MENU_OLC","OLC");
define("_MENU_OPEN_DISTANCE","Slobodan prelet");
define("_MENU_DURATION","Trajanje");
define("_MENU_ALL_FLIGHTS","Prika�i sve letove");
define("_MENU_FLIGHTS","Letovi");
define("_MENU_TAKEOFFS","Poleti�ta");
define("_MENU_FILTER","Filter");
define("_MENU_MY_FLIGHTS","Moji letovi");
define("_MENU_MY_PROFILE","Moj profil");
define("_MENU_MY_STATS","Moja statistika"); 
define("_MENU_MY_SETTINGS","Moje postavke"); 
define("_MENU_SUBMIT_FLIGHT","Predaja leta");
define("_MENU_SUBMIT_FROM_ZIP","Predaja vi�e letova (zip)");
define("_MENU_SHOW_PILOTS","Piloti");
define("_MENU_SHOW_LAST_ADDED","Prikaz zadnje dodanih letova");
define("_FLIGHTS_STATS","Statistika letova");

define("_SELECT_YEAR","Odaberi godinu");
define("_SELECT_MONTH","Odaberi mjesec");
define("_ALL_COUNTRIES","Sve dr�ave");
//--------------------------------------------
// list_pilots.php
//--------------------------------------------

define("_ALL_TIMES","SVI LETOVI");
define("_NUMBER_OF_FLIGHTS","Broj letova");
define("_TOTAL_DISTANCE","Ukupna razdaljina");
define("_TOTAL_DURATION","Ukupno trajanje");
define("_BEST_OPEN_DISTANCE","Najbolji slobodni prelet");
define("_TOTAL_OLC_DISTANCE","Ukupna OLC razdaljina");
define("_TOTAL_OLC_SCORE","Ukupno OLC bodova");
define("_BEST_OLC_SCORE","Najbolji OLC let");
define("_MEAN_DURATION","Prosje�no trajanje");
define("_MEAN_DISTANCE","Prosje�na razdaljina");
define("_PILOT_STATISTICS_SORT_BY","Piloti - Sortiraj po");
define("_CATEGORY_FLIGHT_NUMBER","Kategorija 'FastJoe' - Broj letova");
define("_CATEGORY_TOTAL_DURATION","Kategorija 'DURACELL' - Ukupno trajanje");
define("_CATEGORY_OPEN_DISTANCE","Kategorija 'Slobodni prelet'");
define("_THERE_ARE_NO_PILOTS_TO_DISPLAY","Nema pilota!");

	
//--------------------------------------------
// delete_flight.php
//--------------------------------------------

define("_THE_FLIGHT_HAS_BEEN_DELETED","Let je obrisan");
define("_RETURN","Povratak");
define("_CAUTION_THE_FLIGHT_WILL_BE_DELETED","UPOZORENJE - Let �e biti obrisan");
define("_THE_DATE","Datum ");
define("_YES","DA");
define("_NO","NE");

//--------------------------------------------
// competition.php
//--------------------------------------------

define("_LEAGUE_RESULTS","Rezultati lige");
define("_N_BEST_FLIGHTS"," najboljih letova");
define("_OLC","OLC");
define("_OLC_TOTAL_SCORE","OLC ukupno bodova");
define("_KILOMETERS","Kilometara");
define("_TOTAL_ALTITUDE_GAIN","Ukupan dobitak na visini");
define("_TOTAL_KM","Ukupno km");

//--------------------------------------------
// filter.php
//--------------------------------------------

define("_IS","je");
define("_IS_NOT","nije");
define("_OR","ili");
define("_AND","i");
define("_FILTER_PAGE_TITLE","Filtriranje letova");
define("_RETURN_TO_FLIGHTS","Povratak na letove");
define("_THE_FILTER_IS_ACTIVE","Filter je aktivan");
define("_THE_FILTER_IS_INACTIVE","Filter nije aktivan");
define("_SELECT_DATE","Odaberi datum");
define("_SHOW_FLIGHTS","Prika�i letove");
define("_ALL2","SVE");
define("_WITH_YEAR","S godinom");
define("_MONTH","Mjesec");
define("_YEAR","Godina");
define("_FROM","Od");
define("_from","od");
define("_TO","Do");
define("_SELECT_PILOT","Odaberi pilota");
define("_THE_PILOT","Pilot");
define("_THE_TAKEOFF","Poleti�te");
define("_SELECT_TAKEOFF","Odaberi poleti�te");
define("_THE_COUNTRY","Dr�ava");
define("_COUNTRY","Dr�ava");
define("_SELECT_COUNTRY","Odaberi dr�avu");
define("_OTHER_FILTERS","Drugi filtri");
define("_LINEAR_DISTANCE_SHOULD_BE","Slobodan prelet treba biti");
define("_OLC_DISTANCE_SHOULD_BE","OLC razdaljina treba biti");
define("_OLC_SCORE_SHOULD_BE","OLC bodovi trebaju biti");
define("_DURATION_SHOULD_BE","Trajanje treba biti");
define("_ACTIVATE_CHANGE_FILTER","Aktiviraj / promijeni FILTER");
define("_DEACTIVATE_FILTER","Deaktiviraj FILTER");
define("_HOURS","sati");
define("_MINUTES","minute");

//--------------------------------------------
// add_flight.php
//--------------------------------------------

define("_SUBMIT_FLIGHT","Predaja leta");
define("_ONLY_THE_IGC_FILE_IS_NEEDED","(potrebna je samo IGC datoteka)");
define("_SUBMIT_THE_IGC_FILE_FOR_THE_FLIGHT","Predaj<br>IGC datoteku leta");
define("_NOTE_TAKEOFF_NAME","Molimo nazna�ite ime poleti�ta i dr�avu");
define("_COMMENTS_FOR_THE_FLIGHT","Komentari uz let");
define("_PHOTO","Slika");
define("_PHOTOS_GUIDELINES","Slike trebaju biti u jpg formatu i manje od 100Kb");
define("_PRESS_HERE_TO_SUBMIT_THE_FLIGHT","Klikni ovdje za predaju leta");
define("_DO_YOU_HAVE_MANY_FLIGHTS_IN_A_ZIPFILE","�eli� li predati vi�e letova odjednom u ZIP datoteci?");
define("_PRESS_HERE","Klikni ovdje");

define("_IS_PRIVATE","Ne pokazivati svima");
define("_MAKE_THIS_FLIGHT_PRIVATE","Ozna�i let privatnim");
define("_INSERT_FLIGHT_AS_USER_ID","Ubaci let kao korisnik s ID-jem");
define("_FLIGHT_IS_PRIVATE","Ovaj let je privatan");

//--------------------------------------------
// edit_flight.php
//--------------------------------------------

define("_CHANGE_FLIGHT_DATA","Promijeni podatke o letu");
define("_IGC_FILE_OF_THE_FLIGHT","IGC datoteka leta");
define("_DELETE_PHOTO","Obri�i");
define("_NEW_PHOTO","nova slika");
define("_PRESS_HERE_TO_CHANGE_THE_FLIGHT","Klikni ovdje za promjenu podataka o letu");
define("_THE_CHANGES_HAVE_BEEN_APPLIED","Promjene su spremljene");
define("_RETURN_TO_FLIGHT","Povratak na let");

//--------------------------------------------
// olc
//--------------------------------------------
define("_RETURN_TO_FLIGHT","Povratak na let");
define("_READY_FOR_SUBMISSION","Spremno za predaju");
define("_SUBMIT_TO_OLC","Predaj na OLC");
define("_YOUR_FLIGHT_HAS_BEEN_SUCCESSFULLY_SUBMITED_TO_THE_OLC","Let je uspje�no predan na OLC");
define("_THE_OLC_REFERENCE_NUMBER_IS","OLC referentni broj je");
define("_THERE_WAS_A_PROBLEM_ON_OLC_SUBMISSION","Do�lo je do problema pri predaji na OLC");
define("_LOOK_BELOW_FOR_THE_CAUSE_OF_THE_PROBLEM","Pogledaj dolje za uzrok problema");
define("_FLIGHT_SUCCESFULLY_REMOVED_FROM_OLC","Let je uspje�no obrisan s OLC-a");
define("_FLIGHT_NOT_SCORED","Let nema OLC bodova i zato ne mo�e biti predan na OLC");
define("_TOO_LATE","Zadnji rok za predaju ovog leta je pro�ao pa on ne mo�e biti predan na OLC");
define("_CANNOT_BE_SUBMITTED","Zadnji rok za predaju ovog leta je pro�ao");
define("_NO_PILOT_OLC_DATA","<p><strong>Nema OLC podataka za pilota</strong><br>
  <br>
<b>�to je OLC / �emu slu�e ova polja ?</b><br><br>
	Za uspje�nu predaju leta na OLC pilot treba ve� biti registriran na OLC sustavu.</p>
<p> To se mo�e napraviti <a href='http://www2.onlinecontest.org/olcphp/2005/ausw_wertung.php?olc=holc-i&spr=en' target='_blank'>
  na ovoj stranici</a>, gdje morate prvo odabrati svoju dr�avu, a onda 'Contest Registration'<br>
</p>
<p>Kad ste obavili registraciju, morate i�i na 'Profil pilota'->'Izmijeni OLC podatke' i tamo unijeti svoje podatke na POTPUNO isti na�in kako ste ih unijeli pri OLC registraciji
</p>
<ul>
	<li><div align=left>Ime</div>
	<li><div align=left>Prezime</div>
	<li><div align=left>Datum ro�enja</div>
	<li> <div align=left>Nadimak</div>
	<li><div align=left>Ako ste ve� predavali letove na OLC, 4 slova koja koristite za ime IGC datoteke</div>
</ul>");
define("_OLC_MAP","Mapa");
define("_OLC_BARO","Barograf");

//--------------------------------------------
// pilot_profile.php
//--------------------------------------------
define("_Pilot_Profile","Profil pilota");
define("_back_to_flights","natrag na letove");
define("_pilot_stats","statistika pilota");
define("_edit_profile","izmijeni profil");
define("_flights_stats","statistika letova");
define("_View_Profile","Pogledaj profil");

define("_Personal_Stuff","Osobne stvari");
define("_First_Name"," Ime");
define("_Last_Name","Prezime");
define("_Birthdate","Datum ro�enja");
define("_dd_mm_yy","dd.mm.yy");
define("_Sign","Znak");
define("_Marital_Status","Bra�ni status");
define("_Occupation","Zanimanje");
define("_Web_Page","Web stranica");
define("_N_A","N/A");
define("_Other_Interests","Drugi interesi");
define("_Photo","Slika");

define("_Flying_Stuff","Leta�ke stvari");
define("_note_place_and_date","ako je primjenjivo nazna�i mjesto/dr�avu i datum");
define("_Flying_Since","Letim od");
define("_Pilot_Licence","Pilotska dozvola");
define("_Paragliding_training","Paragliding obuka");
define("_Favorite_Location","Omiljene lokacije");
define("_Usual_Location","Uobi�ajene lokacije");
define("_Best_Flying_Memory","Najbolja leta�ka uspomena");
define("_Worst_Flying_Memory","Najgora leta�ka uspomena");
define("_Personal_Distance_Record","Najdulji prelet");
define("_Personal_Height_Record","Najve�a visina");
define("_Hours_Flown","Broj sati u zraku");
define("_Hours_Per_Year","Sati na godinu");

define("_Equipment_Stuff","Oprema");
define("_Glider","Krilo");
define("_Harness","Sjedalo");
define("_Reserve_chute","Rezerva");
define("_Camera","Fotoaparat");
define("_Vario","Vario");
define("_GPS","GPS");
define("_Helmet","Kaciga");
define("_Camcorder","Video kamera");

define("_Manouveur_Stuff","Manevri");
define("_note_max_descent_rate","ako je primjenjivo nazna�ite maksimalnu brzinu propadanja");
define("_Spiral","Spirala");
define("_Bline","B-stall");
define("_Full_Stall","Full Stall");
define("_Other_Manouveurs_Acro","Drugi akro manevri");
define("_Sat","Sat");
define("_Asymmetric_Spiral","Asimetri�na spirala");
define("_Spin","Negativa");

define("_General_Stuff","Op�e stvari");
define("_Favorite_Singer","Omiljeni pjeva�/grupa");
define("_Favorite_Movie","Omiljeni filmovi");
define("_Favorite_Internet_Site","Omiljene<br>web-stranice");
define("_Favorite_Book","Omiljene knjige");
define("_Favorite_Actor","Omiljeni glumci/glumice");

//--------------------------------------------
// pilot_profile_edit.php
//--------------------------------------------
define("_Upload_new_photo_or_change_old","Predaj novu sliku ili promijeni staru");
define("_Delete_Photo","Obri�i sliku");
define("_Your_profile_has_been_updated","Va� profil je promijenjen");
define("_Submit_Change_Data","Prihvati promjene");

//--------------------------------------------
// pilot_�lc_profile_edit.php
//--------------------------------------------
define("_edit_OLC_info","Izmijeni OLC podatke");
define("_OLC_information","OLC podaci");
define("_callsign","Nadimak");
define("_filename_suffix","Nastavak IGC datoteke");
define("_OLC_Pilot_Info","OLC podaci za pilota");
define("_OLC_EXPLAINED","<b>�to je OLC / �to zna�e ova polja ?</b><br><br>
	Za uspje�nu predaju leta na OLC pilot treba ve� biti registriran na OLC sustavu.</p>
To se mo�e napraviti <a href='http://www2.onlinecontest.org/olcphp/2005/ausw_wertung.php?olc=holc-i&spr=en' target='_blank'>
  na ovoj stranici</a>, gdje morate prvo odabrati svoju dr�avu, a onda 'Contest Registration'<br>
</p>
<p>Kad ste obavili registraciju, ovdje morate unijeti svoje podatke na POTPUNO isti na�in kako ste ih unijeli pri OLC registraciji
</p>
<ul>
	<li><div align=left>Ime</div>
	<li><div align=left>Prezime</div>
	<li><div align=left>Datum ro�enja</div>
	<li> <div align=left>Nadimak</div>
	<li><div align=left>Ako ste ve� predavali letove na OLC, 4 slova koja koristite za ime IGC datoteke</div>
</ul>
");

define("_OLC_SUFFIX_EXPLAINED","<b>�to je 'Nastavak IGC datoteke?'</b><br>To je 4 slova duga�ak id koji jednozna�no odre�uje pilota ili letjelicu. 
Ako �elite savjet �to unijeti na to mjesto, ovdje su neki prijedlozi:<p>
<ul>
<li>Koristite 4 slova iz svog imena i prezimena (Ivo Peri� - IPER)
<li>Poku�ajte na�i neobi�nu kombinaciju kako bi smanjili vjerojatnost da �e je koristiti i neki drugi pilot.
<li>Ako imate problema u predaji leta na OLC preko Leonarda, mo�da je problem u tom nastavku. Probajte ga promijeniti i ponovno predati let.
</ul>");
//--------------------------------------------
// pilot_profile_stats.php
//--------------------------------------------
define("_hh_mm","hh:mm");

define("_Totals","Totali");
define("_First_flight_logged","Prvi zabilje�eni let");
define("_Last_flight_logged","Zadnji zabilje�eni let");
define("_Flying_period_covered","Pokriveno razdoblje");
define("_Total_Distance","Ukupna razdaljina");
define("_Total_OLC_Score","Ukupno OLC bodova");
define("_Total_Hours_Flown","Ukupno sati leta");
define("_Total_num_of_flights","Ukupan broj letova ");

define("_Personal_Bests","Najbolji osobni rezultati");
define("_Best_Open_Distance","Najbolji slobodni prelet");
define("_Best_FAI_Triangle","Najbolji FAI trokut");
define("_Best_Free_Triangle","Najbolji trokut");
define("_Longest_Flight","Najdulji let");
define("_Best_OLC_score","Najbolji OLC rezultat");

define("_Absolute_Height_Record","Apsolutni visinski rekord");
define("_Altitute_gain_Record","Rekord dobivene visine");
define("_Mean_values","Prosje�ne vrijednosti");
define("_Mean_distance_per_flight","Prosje�na razdaljina po letu");
define("_Mean_flights_per_Month","Prosje�ni broj letova po mjesecu");
define("_Mean_distance_per_Month","Prosje�na razdaljina po mjesecu");
define("_Mean_duration_per_Month","Prosje�no trajanje po mjesecu");
define("_Mean_duration_per_flight","Prosje�no trajanje po letu");
define("_Mean_flights_per_Year","Prosje�ni broj letova po godini");
define("_Mean_distance_per_Year","Prosje�na razdaljina po godini");
define("_Mean_duration_per_Year","Prosje�no trajanje po godini");

//--------------------------------------------
// show_waypoint.php
//--------------------------------------------
define("_See_flights_near_this_point","Pogledaj letove u blizini ove to�ke");
define("_Waypoint_Name","Ime to�ke");
define("_Navigate_with_Google_Earth","Google Earth");
define("_See_it_in_Google_Maps","Google Maps");
define("_See_it_in_MapQuest","MapQuest");
define("_COORDINATES","Koordinate");
define("_FLIGHTS","Letovi");
define("_SITE_RECORD","Rekord poleti�ta");
define("_SITE_INFO","Informacije o poleti�tu");
define("_SITE_REGION","Podru�je");
define("_SITE_LINK","Link za vi�e informacija");
define("_SITE_DESCR","Opis poleti�ta");

//--------------------------------------------
// KML file
//--------------------------------------------
define("_See_more_details","Vi�e Detalja");
define("_KML_file_made_by","KML datoteku napravio");

//--------------------------------------------
// add_waypoint.php
//--------------------------------------------
define("_ADD_WAYPOINT","Zabilje�i poleti�te");
define("_WAYPOINT_ADDED","Poleti�te je zabilje�eno");

//--------------------------------------------
// list_takeoffs.php
//--------------------------------------------
define("_SITE_RECORD_OPEN_DISTANCE","Rekord poleti�ta<br>(slobodni prelet)");
	
//-------------------------------------------
// glider types
//--------------------------------------------
define("_GLIDER_TYPE","Tip letjelice");
function setGliderCats() {
	global  $gliderCatList;
	$gliderCatList=array(1=>'Paraglider',2=>'Flex wing FAI1',4=>'Rigid wind FAI5',8=>'Glider');
}
setGliderCats();

//--------------------------------------------
// user prefs  & units
//--------------------------------------------

define("_Your_settings_have_been_updated","Va�e postavke su promijenjene");

define("_THEME","Tema");
define("_LANGUAGE","Jezik");
define("_VIEW_CATEGORY","Pregledaj kategorije");
define("_VIEW_COUNTRY","Pregledaj dr�ave");
define("_UNITS_SYSTEM" ,"Mjerni sustav");
define("_METRIC_SYSTEM","Metri�ki (km,m)");
define("_IMPERIAL_SYSTEM","Imperial (miles,feet)");
define("_ITEMS_PER_PAGE","Podataka po stranici");

define("_MI","mi");
define("_KM","km");
define("_FT","ft");
define("_M","m");
define("_MPH","mph");
define("_KM_PER_HR","km/h");
define("_FPM","fpm");
define("_M_PER_SEC","m/s");

//--------------------------------------------
// index page
//--------------------------------------------

define("_WORLD_WIDE","Cijeli svijet");
define("_National_XC_Leagues_for","Nacionalna XC liga za");
define("_Flights_per_Country","Letova po dr�avi");
define("_Takeoffs_per_Country","Poleti�ta po dr�avi");
define("_INDEX_HEADER","Dobrodo�li u Leonardo XC ligu");
define("_INDEX_MESSAGE","Koristite &quot;Glavni izbornik&quot; za navigaciju ili koristite naj�e��e opcije prikazane ispod.");

//--------------------------------------------
// NEW 
//--------------------------------------------
define("_MENU_SUMMARY_PAGE","First (Summary) Page");
define("_Display_ALL","Display ALL");
define("_Display_NONE","Display NONE");
define("_Reset_to_default_view","Reset to default view");
define("_No_Club","No Club");
define("_This_is_the_URL_of_this_page","This is the URL of this page");
define("_All_glider_types","All glider types");
?>