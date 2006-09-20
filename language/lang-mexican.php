<?php
/**************************************************************************/
/* Spanish (For M�xico) language adaptation by                           */
/* Hector Martin   (fink@anpyp.org)                                       */
/* based on the original work of Ale Spitznagel   (contacto@parapente.com.ar) */
/**************************************************************************/

/************************************************************************/
/* Leonardo: Gliding XC Server					                        */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) 2004-5 by Andreadakis Manolis                          */
/* http://leonardo.thenet.gr 											*/
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/
/*                                                                        */
/* You need to change the second quoted phrase, not the capital one!      */
/*                                                                        */
/* If you need to use double quotes (") remember to add a backslash (\),  */
/* so your entry will look like: This is \"double quoted\" text.          */
/* And, if you use HTML code, please double check it.                     */
/**************************************************************************/

function setMonths() {
	global  $monthList;
	$monthList=array('Enero','Febrero','Marzo','Abril','Mayo','Junio',
					'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
}
setMonths();

//--------------------------------------------
// output.php
//--------------------------------------------
define("_FREE_FLIGHT","Distancia Libre");
define("_FREE_TRIANGLE","Tri�ngulo Libre");
define("_FAI_TRIANGLE","Tri�ngulo FAI");

define("_SUBMIT_FLIGHT_ERROR","Ocurri� un problema enviando el registro de su vuelo");

// list_pilots()
define("_NUM","#");
define("_PILOT","Piloto");
define("_NUMBER_OF_FLIGHTS","N�mero de vuelos");
define("_BEST_DISTANCE","Mejor Distancia");
define("_MEAN_KM","Media # km por vuelo");
define("_TOTAL_KM","Kil�metros Totales volados");
define("_TOTAL_DURATION_OF_FLIGHTS","Duraci�n total de vuelos");
define("_MEAN_DURATION","Duraci�n Media de vuelos");
define("_TOTAL_OLC_KM","Distancia Total OLC");
define("_TOTAL_OLC_SCORE","Puntaje Total OLC");
define("_BEST_OLC_SCORE","Mejor puntaje OLC");
define("_From","de");

// list_flights()
define("_DURATION_HOURS_MIN","Duraci�n (h:m)");
define("_SHOW","Mostrar");

// show flight
define("_FLIGHT_WILL_BE_ACTIVATED_SOON","El registro de su vuelo ser� activado en un par de minutos. ");
define("_TRY_AGAIN","Por favor intente de nuevo mas tarde!");

define("_TAKEOFF_LOCATION","Despegue");
define("_TAKEOFF_TIME","Hora de Despegue");
define("_LANDING_LOCATION","Aterrizaje");
define("_LANDING_TIME","Hora de Aterrizaje");
define("_OPEN_DISTANCE","Distancia lineal");
define("_MAX_DISTANCE","Distancia M�xima");
define("_OLC_SCORE_TYPE","Tipo de puntaje OLC");
define("_OLC_DISTANCE","Distancia OLC");
define("_OLC_SCORING","Puntaje OLC");
define("_MAX_SPEED","Velocidad M�xima");
define("_MAX_VARIO","Vario M�xima");
define("_MEAN_SPEED","Velocidad media");
define("_MIN_VARIO","Vario M�nima");
define("_MAX_ALTITUDE","Altitud M�xima (SNM)");
define("_TAKEOFF_ALTITUDE","Altitud del Despegue (SNM)");
define("_MIN_ALTITUDE","Altitud M�nima (SNM)");
define("_ALTITUDE_GAIN","Ganacia de altura");
define("_FLIGHT_FILE","Archivo de vuelo");
define("_COMMENTS","Comentarios");
define("_RELEVANT_PAGE","Sitio relacionado");
define("_GLIDER","Ala");
define("_PHOTOS","Fotos");
define("_MORE_INFO","Adicionales");
define("_UPDATE_DATA","Actualizar datos");
define("_UPDATE_MAP","Actualizar mapa");
define("_UPDATE_3D_MAP","Actualizar mapa 3D");
define("_UPDATE_GRAPHS","Actualizar gr�ficas");
define("_UPDATE_SCORE","Actualizar puntaje");

define("_TAKEOFF_COORDS","Coordenadas del despegue:");
define("_NO_KNOWN_LOCATIONS","�No hay ubicaciones conocidas!");
define("_FLYING_AREA_INFO","Informaci�n del �rea de vuelo");

//--------------------------------------------
// index.php
//--------------------------------------------
define("_PAGE_TITLE","Leonardo XC Server");
define("_RETURN_TO_TOP","^arriba");
// list flight
define("_PILOT_FLIGHTS","Vuelos del Piloto");

define("_DATE_SORT","Fecha");
define("_PILOT_NAME","Nombre del Piloto");
define("_TAKEOFF","Despegue");
define("_DURATION","Duraci�n");
define("_LINEAR_DISTANCE","Distancia Libre");
define("_OLC_KM","OLC km");
define("_OLC_SCORE","Puntaje OLC");
define("_DATE_ADDED","�ltimo env�o");

define("_SORTED_BY","Ordenar por:");
define("_ALL_YEARS","Todos los a�os");
define("_SELECT_YEAR_MONTH","Seleccionar a�o y mes");
define("_ALL","Todos");
define("_ALL_PILOTS","Mostrar todos los pilotos");
define("_ALL_TAKEOFFS","Mostrar todos los despegues");
define("_ALL_THE_YEAR","Todos los a�os");

// add flight
define("_YOU_HAVENT_SUPPLIED_A_FLIGHT_FILE","No ha proporcionado un archivo de vuelo");
define("_NO_SUCH_FILE","El archivo que ha proporcionado no puede ser encontrado en el servidor");
define("_FILE_DOESNT_END_IN_IGC","El archivo no tiene extensi�n .igc");
define("_THIS_ISNT_A_VALID_IGC_FILE","Este no es un archivo v�lido .igc");
define("_THERE_IS_SAME_DATE_FLIGHT","Existe ya un vuelo con la misma fecha y hora");
define("_IF_YOU_WANT_TO_SUBSTITUTE_IT","Si desea reemplazarlo, debe primero");
define("_DELETE_THE_OLD_ONE","borrar el anterior");
define("_THERE_IS_SAME_FILENAME_FLIGHT","Existe ya un vuelo con el mismo nombre de archivo");
define("_CHANGE_THE_FILENAME","Si este vuelo es diferente por favor cambie el nombre de archivo e intente de nuevo");
define("_YOUR_FLIGHT_HAS_BEEN_SUBMITTED","Tu vuelo ha sido enviado");
define("_PRESS_HERE_TO_VIEW_IT","Presiona aqu� para verlo");
define("_WILL_BE_ACTIVATED_SOON","(ser� activado en un par de minutos)");

// add_from_zip
define("_SUBMIT_MULTIPLE_FLIGHTS","Enviar varios vuelos");
define("_ONLY_THE_IGC_FILES_WILL_BE_PROCESSED","Solo se procesar�n archivos IGC");
define("_SUBMIT_THE_ZIP_FILE_CONTAINING_THE_FLIGHTS","Enviar archivo ZIP<br>conteniendo los vuelos");
define("_PRESS_HERE_TO_SUBMIT_THE_FLIGHTS","Presione aqu� para enviar los vuelos");

define("_FILE_DOESNT_END_IN_ZIP","El archivo enviado no tiene extensi�n .zip");
define("_ADDING_FILE","Enviando archivo");
define("_ADDED_SUCESSFULLY","Env�o finalizado");
define("_PROBLEM","Problema");
define("_TOTAL","Total de ");
define("_IGC_FILES_PROCESSED","vuelos han sido procesados");
define("_IGC_FILES_SUBMITED","vuelos han sido enviados");

// info
define("_DEVELOPMENT","Desarrollo");
define("_ANDREADAKIS_MANOLIS","Andreadakis Manolis");
define("_PROJECT_URL","Sitio del proyecto");
define("_VERSION","Versi�n");
define("_MAP_CREATION","Creaci�n de Mapas");
define("_PROJECT_INFO","Informaci�n del proyecto");

// menu bar 
define("_MENU_MAIN_MENU","Men� Principal");
define("_MENU_DATE","Seleccionar Fecha");
define("_MENU_COUNTRY","Seleccionar Pa�s");
define("_MENU_XCLEAGUE","Liga XC");
define("_MENU_ADMIN","Admin");

define("_MENU_COMPETITION_LEAGUE","Liga o circuito - todas las categor�as");
define("_MENU_OLC","OLC");
define("_MENU_OPEN_DISTANCE","Distancia Libre");
define("_MENU_DURATION","Duraci�n");
define("_MENU_ALL_FLIGHTS","Mostrar todos los vuelos");
define("_MENU_FLIGHTS","Vuelos");
define("_MENU_TAKEOFFS","Despegues");
define("_MENU_FILTER","Filtro");
define("_MENU_MY_FLIGHTS","Mis vuelos");
define("_MENU_MY_PROFILE","Mi perfil");
define("_MENU_MY_STATS","Sus estad�sticas"); 
define("_MENU_MY_SETTINGS","Su configuraci�n"); 
define("_MENU_SUBMIT_FLIGHT","Enviar vuelo");
define("_MENU_SUBMIT_FROM_ZIP","Enviar vuelos desde ZIP");
define("_MENU_SHOW_PILOTS","Pilotos");
define("_MENU_SHOW_LAST_ADDED","Mostrar env�os recientes");
define("_FLIGHTS_STATS","Estado de sus vuelos");

define("_SELECT_YEAR","Seleccionar a�o");
define("_SELECT_MONTH","Seleccionar mes");
define("_ALL_COUNTRIES","Mostrar todos los pa�ses");
//--------------------------------------------
// list_pilots.php
//--------------------------------------------

define("_ALL_TIMES","TODOS");
define("_NUMBER_OF_FLIGHTS","N�mero de vuelos");
define("_TOTAL_DISTANCE","Distancia total");
define("_TOTAL_DURATION","Duraci�n total");
define("_BEST_OPEN_DISTANCE","Mejor distancia");
define("_TOTAL_OLC_DISTANCE","Distancia total OLC");
define("_TOTAL_OLC_SCORE","Puntaje total OLC");
define("_BEST_OLC_SCORE","Mejor puntaje OLC");
define("_MEAN_DURATION","Duraci�n media");
define("_MEAN_DISTANCE","Distancia media");
define("_PILOT_STATISTICS_SORT_BY","Pilotos - Ordenar por");
define("_CATEGORY_FLIGHT_NUMBER","Categor�a 'FastJoe' - N�mero de vuelos");
define("_CATEGORY_TOTAL_DURATION","Categor�a 'DURACELL' - Duraci�n total");
define("_CATEGORY_OPEN_DISTANCE","Categor�a 'Distancia Libre'");
define("_THERE_ARE_NO_PILOTS_TO_DISPLAY","�No hay pilotos para mostrar!");

	
//--------------------------------------------
// delete_flight.php
//--------------------------------------------

define("_THE_FLIGHT_HAS_BEEN_DELETED","El vuelo ha sido borrado");
define("_RETURN","Volver");
define("_CAUTION_THE_FLIGHT_WILL_BE_DELETED","PRECAUCI�N: Se encuentra a punto de borrar este vuelo");
define("_THE_DATE","Fecha ");
define("_YES","SI");
define("_NO","NO");

//--------------------------------------------
// competition.php
//--------------------------------------------

define("_LEAGUE_RESULTS","Resultados de liga");
define("_N_BEST_FLIGHTS","mejores vuelos");
define("_OLC","OLC");
define("_OLC_TOTAL_SCORE","puntaje total OLC");
define("_KILOMETERS","Kil�metros");
define("_TOTAL_ALTITUDE_GAIN","Ganancia total de altura");
define("_TOTAL_KM","Kil�metros totales");

//--------------------------------------------
// filter.php
//--------------------------------------------

define("_IS","es");
define("_IS_NOT","no es");
define("_OR","o");
define("_AND","y");
define("_FILTER_PAGE_TITLE","Filtro de vuelos");
define("_RETURN_TO_FLIGHTS","Volver a vuelos");
define("_THE_FILTER_IS_ACTIVE","El filtro est� activo");
define("_THE_FILTER_IS_INACTIVE","El filtro est� inactivo");
define("_SELECT_DATE","Seleccionar fecha");
define("_SHOW_FLIGHTS","Mostrar vuelos");
define("_ALL2","TODOS");
define("_WITH_YEAR","Con a�o");
define("_MONTH","Mes");
define("_YEAR","A�o");
define("_FROM","De");
define("_from","de");
define("_TO","Hasta");
define("_SELECT_PILOT","Seleccionar piloto");
define("_THE_PILOT","El piloto");
define("_THE_TAKEOFF","El despegue");
define("_SELECT_TAKEOFF","Seleccionar despegue");
define("_THE_COUNTRY","El pa�s");
define("_COUNTRY","Pa�s");
define("_SELECT_COUNTRY","Seleccionar pa�s");
define("_OTHER_FILTERS","Otros filtros");
define("_LINEAR_DISTANCE_SHOULD_BE","La distancia lineal debe ser");
define("_OLC_DISTANCE_SHOULD_BE","La distancia OLC debe ser");
define("_OLC_SCORE_SHOULD_BE","El puntaje OLC debe ser");
define("_DURATION_SHOULD_BE","La duraci�n debe ser");
define("_ACTIVATE_CHANGE_FILTER","Activar / cambiar FILTRO");
define("_DEACTIVATE_FILTER","Desactivar FILTRO");
define("_HOURS","horas");
define("_MINUTES","min");

//--------------------------------------------
// add_flight.php
//--------------------------------------------

define("_SUBMIT_FLIGHT","Enviar vuelo");
define("_ONLY_THE_IGC_FILE_IS_NEEDED","(s�lo es necesario el archivo IGC)");
define("_SUBMIT_THE_IGC_FILE_FOR_THE_FLIGHT","Enviar el<br>archivo IGC del vuelo");
define("_NOTE_TAKEOFF_NAME","Por favor registre el nombre del despegue, ubicaci�n y pa�s");
define("_COMMENTS_FOR_THE_FLIGHT","Comentarios del vuelo");
define("_PHOTO","Foto");
define("_PHOTOS_GUIDELINES","Las fotos deben estar en formato JPG y con un tama�o menor a 100Kb");
define("_PRESS_HERE_TO_SUBMIT_THE_FLIGHT","Presione aqu� para enviar el vuelo");
define("_DO_YOU_HAVE_MANY_FLIGHTS_IN_A_ZIPFILE","�Desea enviar varios vuelos juntos?");
define("_PRESS_HERE","Haga Click aqu�");

define("_IS_PRIVATE","No mostrar p�blico");
define("_MAKE_THIS_FLIGHT_PRIVATE","No mostrar p�blico");
define("_INSERT_FLIGHT_AS_USER_ID","Insertar vuelo como ID del usuario");
define("_FLIGHT_IS_PRIVATE","Este vuelo es privado");

//--------------------------------------------
// edit_flight.php
//--------------------------------------------

define("_CHANGE_FLIGHT_DATA","Cambiar datos del vuelo");
define("_IGC_FILE_OF_THE_FLIGHT","Archivo IGC del vuelo");
define("_DELETE_PHOTO","Borrar");
define("_NEW_PHOTO","nueva foto");
define("_PRESS_HERE_TO_CHANGE_THE_FLIGHT","Presione aqu� para cambiar la informaci�n del vuelo");
define("_THE_CHANGES_HAVE_BEEN_APPLIED","Los cambios han sido aplicados");
define("_RETURN_TO_FLIGHT","Volver al vuelo");

//--------------------------------------------
// olc
//--------------------------------------------
define("_RETURN_TO_FLIGHT","Volver al vuelo");
define("_READY_FOR_SUBMISSION","Listo para enviar");
define("_SUBMIT_TO_OLC","Enviar a OLC");
define("_YOUR_FLIGHT_HAS_BEEN_SUCCESSFULLY_SUBMITED_TO_THE_OLC","El vuelo ha sido enviado a el OLC");
define("_THE_OLC_REFERENCE_NUMBER_IS","El n�mero de referencia OLC es");
define("_THERE_WAS_A_PROBLEM_ON_OLC_SUBMISSION","Ocurri� un error en el envio OLC");
define("_LOOK_BELOW_FOR_THE_CAUSE_OF_THE_PROBLEM","Mire abajo para ver la causa del problema");
define("_FLIGHT_SUCCESFULLY_REMOVED_FROM_OLC","El vuelo ha sido removido del el OLC");
define("_FLIGHT_NOT_SCORED","El vuelo no tiene puntaje OLC y por lo tanto no puede ser enviado");
define("_TOO_LATE","El plazo de env�o de este vuelo ha terminado y por lo tanto no puede ser enviado");
define("_CANNOT_BE_SUBMITTED","El plazo de envio de este vuelo ha terminado");
define("_NO_PILOT_OLC_DATA","<p><strong>No hay datos OLC para este piloto</strong><br>
  <br>
<b>�Qu� es OLC / para qu� son estos campos ?</b><br><br>
	Para validad el envio a el OLC el piloto debe estar registrado en el sistema OLC.</p>
<p> Esto puede hacerlo <a href='http://www2.onlinecontest.org/olcphp/2005/ausw_wertung.php?olc=holc-i&spr=es' target='_blank'>
  en este sitio</a>, donde deber� seleccionar su pa�s y luego 'Contest Registration'<br>
</p>
<p>Cuando haya finalizado el registro, debe ir a su 'Perfil del Piloto'->'Editar informaci�n OLC' e ingresar su informaci�n EXACTAMENTE como fu� ingresada en el registro OLC
</p>
<ul>
	<li><div align=left>Nombres</div>
	<li><div align=left>Apellidos</div>
	<li><div align=left>Fecha de nacimiento</div>
	<li> <div align=left>Apodo</div>
	<li><div align=left>Si ya ha enviado vuelos al OLC, las 4 letras que utiliza para el nombre de archivo IGC</div>
</ul>");
define("_OLC_MAP","Mapa");
define("_OLC_BARO","Barograma");

//--------------------------------------------
// pilot_profile.php
//--------------------------------------------
define("_Pilot_Profile","Perfil del piloto");
define("_back_to_flights","^arriba");
define("_pilot_stats","estad�sticas del piloto");
define("_edit_profile","editar perfil");
define("_flights_stats","estad�sticas de vuelo");
define("_View_Profile","Ver perfil");

define("_Personal_Stuff","Datos Personales");
define("_First_Name"," Nombres");
define("_Last_Name","Apellidos");
define("_Birthdate","Fecha de Nacimiento");
define("_dd_mm_yy","dd.mm.aa");
define("_Sign","Signo");
define("_Marital_Status","Estado Civil");
define("_Occupation","Ocupaci�n");
define("_Web_Page","Sitio Web");
define("_N_A","N/D");
define("_Other_Interests","Otros Intereses");
define("_Photo","Foto");

define("_Flying_Stuff","Datos de Vuelo");
define("_note_place_and_date","si es posible agregue lugar y fecha");
define("_Flying_Since","Volando Desde");
define("_Pilot_Licence","Licencia de Piloto");
define("_Paragliding_training","Entrenamiento en Parapente");
define("_Favorite_Location","Lugar Favorito");
define("_Usual_Location","Lugar Frecuente");
define("_Best_Flying_Memory","Mejor Experiencia en Vuelo");
define("_Worst_Flying_Memory","Peor Experiencia en Vuelo");
define("_Personal_Distance_Record","Record Personal de Distancia");
define("_Personal_Height_Record","Record Personal de Altura");
define("_Hours_Flown","Horas Voladas");
define("_Hours_Per_Year","Horas Voladas por A�o");

define("_Equipment_Stuff","Datos del Equipo");
define("_Glider","Ala");
define("_Harness","Arn�s");
define("_Reserve_chute","Paraca�das de Emergencia");
define("_Camera","C�mara de fotograf�a");
define("_Vario","Vario");
define("_GPS","GPS");
define("_Helmet","Casco");
define("_Camcorder","C�mara de Video");

define("_Manouveur_Stuff","Datos de Maniobras");
define("_note_max_descent_rate","si es posible agregue la tasa de ca�da m�xima alcanzada");
define("_Spiral","Espiral");
define("_Bline","Bandas B");
define("_Full_Stall","P�rdida");
define("_Other_Manouveurs_Acro","Otras Maniobras Acro");
define("_Sat","SAT");
define("_Asymmetric_Spiral","Asim�trico");
define("_Spin","Negativo");

define("_General_Stuff","Datos Generales");
define("_Favorite_Singer","Cantante Favorito");
define("_Favorite_Movie","Pel�cula Favorita");
define("_Favorite_Internet_Site","Sitio Favorito<br>En Internet");
define("_Favorite_Book","Libro Favorito");
define("_Favorite_Actor","Actor Favorito");

//--------------------------------------------
// pilot_profile_edit.php
//--------------------------------------------
define("_Upload_new_photo_or_change_old","Agregar Foto o cambiar la existente");
define("_Delete_Photo","Borrar Foto");
define("_Your_profile_has_been_updated","Su perfil ha sido actualizado");
define("_Submit_Change_Data","Enviar - Cambiar Datos");

//--------------------------------------------
// pilot_�lc_profile_edit.php
//--------------------------------------------
define("_edit_OLC_info","Editar informaci�n OLC");
define("_OLC_information","informaci�n OLC");
define("_callsign","Apodo");
define("_filename_suffix","Sufijo de Archivo");
define("_OLC_Pilot_Info","Informaci�n OLC de Piloto");
define("_OLC_EXPLAINED","<b>�Qu� es OLC / para qu� son estos campos ?</b><br><br>
	Para validar el env�o a el OLC el piloto debe estar registrado en el sistema OLC.</p>
<p> Esto puede hacerlo <a href='http://www2.onlinecontest.org/olcphp/2005/ausw_wertung.php?olc=holc-i&spr=es' target='_blank'>
  en este sitio</a>, donde deber� seleccionar su pa�s y luego 'Contest Registration'<br>
</p>
<p>Cuando haya completado el registro debe ingresar aqu� la informaci�n EXACTAMENTE como fue ingresada en el registro OLC
</p>
<ul>
	<li><div align=left>Nombres</div>
	<li><div align=left>Apellido</div>
	<li><div align=left>Fecha de Nacimiento</div>
	<li> <div align=left>Apodo</div>
	<li><div align=left>Si ya ha enviado vuelos al OLC, las 4 letras que utiliza para el nombre de archivo IGC</div>
</ul>
");

define("_OLC_SUFFIX_EXPLAINED","<b>�Qu� es el 'sufijo de archivo?'</b><br>Es un identificador de 4 letras que identifica �nicamente a un piloto o ala. 
Si no est� seguro de que ingresar, aqu� tiene un par de consejos:<p>
<ul>
<li>Use 4 letras en derivadas de su nombres / apellidos
<li>Intente buscar una combinaci�n aleatoria. Esto reducir� la posibilidad de que su sufijo sea igual al de otros pilotos
<li>Si tiene problemas enviando su vuelo al OLC por medio de Leonardo, puede ser el sufijo. Pruebe cambiarlo y reenviarlo.
</ul>");
//--------------------------------------------
// pilot_profile_stats.php
//--------------------------------------------
define("_hh_mm","hh:mm");

define("_Totals","Totales");
define("_First_flight_logged","Primer vuelo ingresado");
define("_Last_flight_logged","�ltimo vuelo ingresado");
define("_Flying_period_covered","Per�odo de vuelo cubierto");
define("_Total_Distance","Distancia Total");
define("_Total_OLC_Score","Puntaje Total OLC");
define("_Total_Hours_Flown","Total de Horas de Vuelo");
define("_Total_num_of_flights","Cantidad de Vuelos ");

define("_Personal_Bests","Mejores Resultados Personales");
define("_Best_Open_Distance","Mejor Distancia Libre");
define("_Best_FAI_Triangle","Mejor Tri�ngulo FAI");
define("_Best_Free_Triangle","Mejor Tri�ngulo Libre");
define("_Longest_Flight","Vuelo M�s Largo");
define("_Best_OLC_score","Mejor Puntaje OLC");

define("_Absolute_Height_Record","Record de Altura Absoluta");
define("_Altitute_gain_Record","Record en ganancia de Altura");
define("_Mean_values","Valores Promedio");
define("_Mean_distance_per_flight","Distancia Promedio por Vuelo");
define("_Mean_flights_per_Month","Vuelos Promedio por Mes");
define("_Mean_distance_per_Month","Distancia Promedio por Mes");
define("_Mean_duration_per_Month","Duraci�n Promedio por Mes");
define("_Mean_duration_per_flight","Duraci�n Promedio por Vuelo");
define("_Mean_flights_per_Year","Vuelos Promedio por A�o");
define("_Mean_distance_per_Year","Distancia Promedio por A�o");
define("_Mean_duration_per_Year","Duraci�n Promedio por A�o");

//--------------------------------------------
// show_waypoint.php
//--------------------------------------------
define("_See_flights_near_this_point","Ver vuelos cercanos a este punto");
define("_Waypoint_Name","Nombre de Waypoint");
define("_Navigate_with_Google_Earth","Navegar con Google Earth");
define("_See_it_in_Google_Maps","Ver en Google Maps");
define("_See_it_in_MapQuest","Ver en MapQuest");
define("_COORDINATES","Coordenadas");
define("_FLIGHTS","Vuelos");
define("_SITE_RECORD","Record de la zona");
define("_SITE_INFO","Informaci�n de la zona");
define("_SITE_REGION","Regi�n");
define("_SITE_LINK","Enlace a mayor informaci�n");
define("_SITE_DESCR","Descripci�n del Sitio/Despegue");

//--------------------------------------------
// KML file
//--------------------------------------------
define("_See_more_details","Ver m�s detalles");
define("_KML_file_made_by","Archivo KML elaborado por");

//--------------------------------------------
// add_waypoint.php
//--------------------------------------------
define("_ADD_WAYPOINT","Registrar despegue");
define("_WAYPOINT_ADDED","El despegue ha sido registrado");

//--------------------------------------------
// list_takeoffs.php
//--------------------------------------------
define("_SITE_RECORD_OPEN_DISTANCE","Record del lugar<br>(distancia libre)");
	
//--------------------------------------------
// glider types
//--------------------------------------------
define("_GLIDER_TYPE","Tipo de ala");
function setGliderCats() {
	global  $gliderCatList;
	$gliderCatList=array(1=>'Parapente',2=>'Ala flexible FAI1',4=>'Ala r�gida FAI5',8=>'Planeador');
}
setGliderCats();

//--------------------------------------------
// user prefs  & units
//--------------------------------------------

define("_Your_settings_have_been_updated","Su configuraci�n a sido salvada");

define("_THEME","Tema");
define("_LANGUAGE","Idioma");
define("_VIEW_CATEGORY","Ver categor�a");
define("_VIEW_COUNTRY","Ver pa�s");
define("_UNITS_SYSTEM" ,"Sistema de unidades");
define("_METRIC_SYSTEM","M�trico (Kil�metros, Metros)");
define("_IMPERIAL_SYSTEM","Imperial (Millas, pies)");
define("_ITEMS_PER_PAGE","Registros por p�gina");

define("_MI","mi");
define("_KM","km");
define("_FT","ft");
define("_M","m");
define("_MPH","mph");
define("_KM_PER_HR","km/h");
define("_FPM","fpm");
define("_M_PER_SEC","m/sec");

//--------------------------------------------
// index page
//--------------------------------------------

define("_WORLD_WIDE","Mundial");
define("_National_XC_Leagues_for","Ligas o circuitos nacionales de XC para");
define("_Flights_per_Country","Vuelos por pa�s");
define("_Takeoffs_per_Country","Despegues por pa�s");
define("_INDEX_HEADER","Bienvenido al sistema Leonardo");
define("_INDEX_MESSAGE","Puede usar el &quot;Men� Principal&quot; para navegar y usar la mayor�a de las opciones usables y vigentes.");


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