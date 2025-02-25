<?php

define('API_ACCESS_KEY', 'AAAAosM1N1c:APA91bEi6S_yfaNPHh_oLxe-5464OynYMxoky7wj0XSK_CE3UugpRzx0CUBtRxfVk1ZEJSwY7OzzupEnF0W_qPrAZhemW6DKuVN1h5Rst7sawTtKgR603cNdQB_69179MrCbLN8KLC7p');
define("WHATSAPP_TOKEN", "x3ced07ub3wyxbl9");
// define("DASHBOARD_V2_CUSTOMER_IDS", [77, 108]);
define("DASHBOARD_V2_CUSTOMER_IDS", json_encode([77]));
define("DEVICE_IDS", json_encode([1, 118, 120, 50, 51]));
define("DASHBOARD_LIST", json_encode([
    "airtel-dashboard.php",
    "alarm-dashboard.php",
    "live-dashboard.php",
    "sis-dashboard-v1.php",
]));
define("ARRAY_MONTHS", json_encode([
    [1, "January"],
    [2, "February"],
    [3, "March"],
    [4, "April"],
    [5, "May"],
    [6, "June"],
    [7, "July"],
    [8, "August"],
    [9, "September"],
    [10, "October"],
    [11, "November"],
    [12, "December"],
]));



define("GMT", 19800);
define("COMM_AGING", 3600 * 0.5); // hours
// define("COMM_AGING", 3600 * 24 * 2); // DEBUG
define("METERING_RANGE", 30);
define("CALL_SUCCESS", "Call Completed");
define("CALL_FAILED", "Call Failed");

// Calculate Alarm types
define("ALARM_QUANTUM", 0);
define("ALARM_SITE", 1);
define("ALARM_METERING", 2);

// trend_type values:
define("DC_ENERGY", "dc_energy");
define("EB_ENERGY", "eb_energy");
define("DG_ENERGY", "dg_energy");
define("PV_ENERGY", "pv_energy");
define("EB_HOURS", "eb_hours");
define("DG_HOURS", "dg_hours");
define("BATTERY_HOURS", "battery_hours");
define("PV_HOURS", "pv_hours");
define("UP_TIME", "up_time");

define("ALL", "all");
define("COMM", "comm");
define("NON_COMM", "non_comm");
define("DOOR", "door");
define("SMOKE", "smoke");
define("HRT", "hrt");
define("ALTERNATOR", "alternator");
define("DG_BATTERY_DISCONNECTIONS", "dg_battery_disconnections");
define("DG_BATTERY_LOW", "dg_battery_low");
define("BTS_LOW", "bts_low");
define("OUTAGE", "outage");
define("THREE_PHASE_UNBALANCE_LOAD", "three_phase_unbalance_load");
define("LOAD", "load");
define("MODE", "mode");
define("MAINS_FAIL", "mains_fail");
define("DG_START_FAIL", "dg_start_fail");
define("DG_STOP_FAIL", "dg_stop_fail");
define("RECTIFIER_FAIL", "rectifier_fail");
define("DG_FAULT", "dg_fault");
define("AIRCON_FAULTY", "aircon_faulty");
define("MPPT_PVC_FAULTY", "mppt_pvc_faulty");
define("BLVD_TRIP", "blvd_trip");

define("DG", "dg");
define("MAINS", "mains");
define("BATTERY", "battery");
define("PV", "pv");
define("PV_DG", "pv_dg");
define("PV_MAINS", "pv_mains");
define("PV_BATTERY", "pv_battery");
define("NA", "na");

define("LOAD_DG", "load_dg");
define("LOAD_MAINS", "load_mains");
define("LOAD_BATTERY", "load_battery");
define("LOAD_NA", "load_na");
define("LOAD_PV", "load_pv");
define("LOAD_PV_MAINS", "load_pv_mains");
define("LOAD_PV_DG", "load_pv_dg");
define("LOAD_PV_BATTERY", "load_pv_battery");

define("AUTO", "auto");
define("MANUAL", "manual");

define("MODE_AUTO", "mode_auto");
define("MODE_MANUAL", "mode_manual");

define("ZERO_DATA", 1);
define("ZERO_METERING", 2);

function GetAlarmCodes()
{
    return [
        DOOR => "Door Open",
        SMOKE => "Smoke/Fire",
        HRT => "HRT",
        ALTERNATOR => "Alternator",
        DG_BATTERY_DISCONNECTIONS => "DG Battery Disconnections",
        DG_BATTERY_LOW => "DG Battery Low",
        BTS_LOW => "Site Battery Low",
        OUTAGE => "Outage",
        THREE_PHASE_UNBALANCE_LOAD => "Three Phase Unbalance Load",
        LOAD => "Load",
        MODE => "Mode",
        MAINS_FAIL => "Mains Fail",
        DG_START_FAIL => "DG Start Fail",
        DG_STOP_FAIL => "DG Stop Fail",
        RECTIFIER_FAIL => "Rectifier Fail",
        DG_FAULT => "DG Fault",
        LOAD_DG => "Site on DG",
        LOAD_MAINS => "Site on Mains",
        LOAD_BATTERY => "Site on Battery",
        LOAD_PV => "Site on Solar",
        LOAD_PV_DG => "Site on Solar + DG",
        LOAD_PV_MAINS => "Site on Solar + EB",
        LOAD_PV_BATTERY => "Site on Solar + BB",
        LOAD_NA => "Site Load N/A",
        MODE_AUTO => "Mode Auto",
        MODE_MANUAL => "Mode Manual",
        MAINS => "Mains",
        DG => "DG",
        BATTERY => "Battery",
        PV => "Solar",
        PV_MAINS => "Solar + EB",
        PV_DG => "Solar + DG",
        PV_BATTERY => "Solar + BB",
        NA => "N/A",
        AUTO => "Auto",
        MANUAL => "Manual"
    ];
}

function GetCriticalAlarms()
{
    return [SMOKE, RECTIFIER_FAIL, HRT, BTS_LOW, DG_START_FAIL, DG_STOP_FAIL];
}

function GetNonCriticalAlarms()
{
    return [MAINS_FAIL, DG_FAULT, DOOR];
}

function GetAirtelAlarms()
{
    // return [...GetCriticalAlarms(), ...GetNonCriticalAlarms()];
    return [SMOKE, RECTIFIER_FAIL, HRT, BTS_LOW, DG_START_FAIL, DG_STOP_FAIL, MAINS_FAIL, DG_FAULT, DOOR];
}

function GetAirtelAlarmsForAllDataV118()
{
    // return [...GetCriticalAlarms(), ...GetNonCriticalAlarms()];
    return [SMOKE, RECTIFIER_FAIL, HRT, BTS_LOW, DG_START_FAIL, DG_STOP_FAIL, MAINS_FAIL, DG_FAULT, DOOR, LOAD_MAINS, LOAD_DG, LOAD_BATTERY, LOAD_NA, MODE_AUTO, MODE_MANUAL];
}

function GetAirtelAlarmsForAllDataV50()
{
    // return [...GetCriticalAlarms(), ...GetNonCriticalAlarms()];
    return [SMOKE, RECTIFIER_FAIL, HRT, BTS_LOW, DG_START_FAIL, DG_STOP_FAIL, MAINS_FAIL, DG_FAULT, DOOR, LOAD_MAINS, LOAD_DG, LOAD_BATTERY, LOAD_PV, LOAD_PV_MAINS, LOAD_PV_DG, LOAD_PV_BATTERY, LOAD_NA, MODE_AUTO, MODE_MANUAL];
}

function GetLoadTypes()
{
    return [LOAD_MAINS, LOAD_DG, LOAD_BATTERY, LOAD_PV, LOAD_PV_MAINS, LOAD_PV_DG, LOAD_PV_BATTERY, LOAD_NA];
}

function GetModeTypes()
{
    return [MODE_AUTO, MODE_MANUAL];
}

function GetAlarmColor($alarm)
{
    if (in_array($alarm, GetCriticalAlarms())) return "<p class=\"red-dots blink-red\">2</p>";
    return "<p class=\"yellow-dots blink-yellow\">1</p>";
}

function GetGreenColor()
{
    return "<p class=\"green-dots\">0</p>";
}

function GetAlarmColorSmall($alarm)
{
    if (in_array($alarm, GetCriticalAlarms())) return "<p class=\"red-dots-small blink-red\">2</p>";
    return "<p class=\"yellow-dots-small blink-yellow\">1</p>";
}

function GetGreenColorSmall()
{
    return "<p class=\"green-dots-small\">0</p>";
}

// Protocols device ids

function isnull($string)
{
    return (trim($string) === "" || !isset($string));
}

function hasValue($value)
{
    return $value !== null && trim($value) !== "";
}

function unixToDate($unix)
{
    $dateTime = new DateTime("@$unix");
    $timezone = new DateTimeZone(date_default_timezone_get());
    date_timezone_set($dateTime, $timezone);
    return date_format($dateTime, 'Y-m-d H:i:s');
}

function utctoist($date)
{
    return unixToDate(strtotime($date) + GMT);
}

function isttoutc($date)
{
    return unixToDate(strtotime($date) - GMT);
}

// Excel Formula =TEXT(INT(A1),"0")&"."&TEXT((A1-INT(A1))*60,"0")
function hoursToTime($hours)
{
    if (!is_numeric($hours)) return $hours;
    $numHours = floatval($hours);

    $wholeHours = floor($numHours);
    $decimalHours = $numHours - $wholeHours;

    $time = $wholeHours + $decimalHours * 0.6;
    $timeDecimals = explode(".", (string) $time);
    return count($timeDecimals) === 1
        ? round($timeDecimals[0], 2)
        : round("$timeDecimals[0]." . substr($timeDecimals[1], 0, 2), 2);
}

function DeviceGetStatusBits($data_status)
{
    $array = array();
    $stats = unpack("C*", $data_status);

    //Smoke Fire Alarm
    $array[] = ($stats[5] & 0x01);

    //Door
    $array[] = ($stats[5] & 0x02);

    //Auto/Man Mode 0 Means  Auto Mode, 1 Means  Man Mode
    $array[] = ($stats[5] & 0x04);

    //00    :Load on EB,01: Load on DG, 10: Load on site Battery   11: Not used
    if (($stats[5] & 0x08) == false) {
        if (($stats[5] & 0x10) == false) {
            $array[] =  "Load on EB";
        } else {
            $array[] =  "Load on site Battery";
        }
    } else {
        if (($stats[5] & 0x10) == false) {
            $array[] =  "Load on DG";
        } else {
            $array[] =  "Not Used";
        }
    }

    //Mains Fail
    $array[] = ($stats[5] & 0x20);

    //Site Battery Low
    $array[] = ($stats[5] & 0x40);


    //Room Temperature
    $array[] = ($stats[5] & 0x80);


    //LLOP
    $array[] = ($stats[4] & 0x01);


    //HCT/HWT
    $array[] = ($stats[4] & 0x02);

    //Alternator Fault
    $array[] = ($stats[4] & 0x04);

    //DG Over Speed
    $array[] = ($stats[4] & 0x08);

    //DG Over Load
    $array[] = ($stats[4] & 0x10);

    //DG Low Fuel
    $array[] = ($stats[4] & 0x20);

    //DG Start Fail
    $array[] = ($stats[4] & 0x40);

    //DG Stop Fail
    $array[] = ($stats[4] & 0x80);

    //DG battery Low
    $array[] = ($stats[3] & 0x01);

    //LCU fail
    $array[] = ($stats[3] & 0x02);

    //Rectifier Fail
    $array[] = ($stats[3] & 0x04);

    //Multi Rectifier Fail
    $array[] = ($stats[3] & 0x08);

    //LVD TRIP
    $array[] = ($stats[3] & 0x10);

    //LVD BY pass
    $array[] = ($stats[3] & 0x20);


    //$FLAG_22_RES 	= 0x0000400000;	//Reserved
    //$FLAG_23_RES 	= 0x0000800000;	//Reserved
    //$FLAG_24_RES 	= 0x0001000000;	//Reserved
    //$FLAG_25_RES 	= 0x0002000000;	//Reserved
    //$FLAG_26_RES 	= 0x0004000000;	//Reserved
    //$FLAG_27_RES 	= 0x0008000000;	//Reserved
    //$FLAG_28_RES 	= 0x0010000000;	//Reserved
    //$FLAG_29_RES 	= 0x0020000000;	//Reserved
    //$FLAG_30_RES 	= 0x0040000000;	//Reserved
    //$FLAG_31_RES 	= 0x0080000000;	//Reserved

    //DG OFF
    $array[] = ($stats[1] & 0x01);

    //DG ON
    $array[] = ($stats[1] & 0x02);

    //DG Cranking
    $array[] = ($stats[1] & 0x04);

    //DG Start in Progress
    $array[] = ($stats[1] & 0x08);

    //DG Cool Down (Idle Running)
    $array[] = ($stats[1] & 0x10);

    //DG STOP  Normally
    $array[] = ($stats[1] & 0x20);

    //DG STOP due to Fault
    $array[] = ($stats[1] & 0x40);

    //DG Stop Due to Maximum Run Exipary
    $array[] = ($stats[1] & 0x80);

    return $array;
}

function DeviceGetData($array, $data_raw)
{
    $sub_data = substr($data_raw, 41, 36);
    $stats = str_split($sub_data, 2);
    //var_dump($stats);

    $sub_data = unpack("n", $stats[0]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Room Temperature</td><td>";
    $array[] = $sub_data;    //8 //12


    $sub_data = unpack("n", $stats[1]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Fuel Level</td><td>";
    $array[] = $sub_data;    //9 //13

    $sub_data = unpack("n", $stats[2]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Fuel Data</td><td>";
    $array[] = $sub_data;    //10

    $sub_data = unpack("n", $stats[3]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Site Batt. bank Voltage</td><td>";
    $array[] = $sub_data;    //11 //15

    $sub_data = unpack("n", $stats[4]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>R-Phase current</td><td>";
    $array[] = $sub_data;    //12 //16

    $sub_data = unpack("n", $stats[5]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Y-Phase current</td><td>";
    $array[] = $sub_data;    //13 //17

    $sub_data = unpack("n", $stats[6]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>B-Phase current</td><td>";
    $array[] = $sub_data;    //14 //18

    $sub_data = unpack("n", $stats[7]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Mains Frequency</td><td>";
    $array[] = $sub_data;    //15

    $sub_data = unpack("n", $stats[8]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG frequency</td><td>";
    $array[] = $sub_data;    //16

    $sub_data = unpack("n", $stats[9]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG-R phase Voltage</td><td>";
    $array[] = $sub_data;    //17 //21

    $sub_data = unpack("n", $stats[10]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG-Y phase Voltage</td><td>";
    $array[] = $sub_data;    //18 //22

    $sub_data = unpack("n", $stats[11]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG-B phase Voltage</td><td>";
    $array[] = $sub_data;    //19 //23

    $sub_data = unpack("n", $stats[12]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>LCU1 Output Voltage</td><td>";
    $array[] = $sub_data;    //20

    $sub_data = unpack("n", $stats[13]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>LCU2 Output Voltage</td><td>";
    $array[] = $sub_data;    //21

    $sub_data = unpack("n", $stats[14]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>LCU3 Output Voltage</td><td>";
    $array[] = $sub_data;    //22

    $sub_data = unpack("n", $stats[15]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Input Mains Voltage - R Phase</td><td>";
    $array[] = $sub_data;    //23

    $sub_data = unpack("n", $stats[16]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Input Mains Voltage - Y Phase</td><td>";
    $array[] = $sub_data;    //24

    $sub_data = unpack("n", $stats[17]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Input Mains Voltage - B Phase</td><td>";
    $array[] = $sub_data;    //25

    /////


    $sub_data = substr($data_raw, 77, 48);
    $stats = str_split($sub_data, 8);
    $stats = substr_replace($stats, ".", 7, 0);

    for ($i = 0; $i < 6; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.') {
            $stats[$i] = "0" . $stats[$i];
        }
    }

    //echo "<tr><td>DG Running Hours</td><td>";
    $array[] = $stats[0];    //26

    //echo "<tr><td>Mains RUN HOURS</td><td>";
    $array[] = $stats[1];    //27

    //echo "<tr><td>Batt RUN HOURS</td><td>";
    $array[] = $stats[2];    //28

    //echo "<tr><td>O/P Mains Energy</td><td>";
    $array[] = $stats[3];    //29

    //echo "<tr><td>DG Energy</td><td>";
    $array[] = $stats[4];    //30

    //echo "<tr><td>I/P Mains Energy</td><td>";
    $array[] = $stats[5];    //31

    $sub_data = substr($data_raw, 125, 2);

    $sub_data = unpack("n", $sub_data);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG Battery Voltage</td><td>";
    $array[] = $sub_data;    //32 //36


    //18*2	= 36
    //6 *8	= 48
    //1 *2	= 02
    //----------
    //        86
    //----------


    //Updated Data - Updated Protocol

    //18*2	= 36
    //6 *8	= 48
    //1 *2	= 02
    //2 *2	= 04	*
    //2 *1	= 02	*
    //----------
    //        92
    //----------

    //REV2 Total 134 Bytes
    if (strlen($data_raw) >= 134) {
        $sub_data = substr($data_raw, 127, 4);
        $stats = str_split($sub_data, 2);

        $sub_data = unpack("n", $stats[0]);
        $sub_data = $sub_data[1] / 10;
        //echo "<tr><td>Battery Charging current</td><td>";
        $array[] = $sub_data;    //33


        $sub_data = unpack("n", $stats[1]);
        $sub_data = $sub_data[1] / 10;
        //echo "<tr><td>Battery Discharging current</td><td>";
        $array[] = $sub_data;    //34

        $sub_data = substr($data_raw, 131, 2);
        $stats = str_split($sub_data, 1);

        $sub_data = unpack("c", $stats[0]);
        $sub_data = (hexdec(bin2hex($stats[0])));    //$sub_data[1]/1;
        //echo "<tr><td>Battery status</td><td>";
        $array[] = $sub_data;    //35

        $sub_data = unpack("c", $stats[1]);
        $sub_data = (hexdec(bin2hex($stats[1])) / 10);    //$sub_data[1]/10;
        //echo "<tr><td>Battery back up time</td><td>";
        $array[] = $sub_data;    //36 //40


        //REV3	Total 150 Bytes
        if (strlen($data_raw) >= 150) {
            $sub_data = substr($data_raw, 133, 16);
            $stats = str_split($sub_data, 8);
            $stats = substr_replace($stats, ".", 7, 0);

            for ($i = 0; $i < 2; $i++) {
                $stats[$i] = ltrim($stats[$i], '0');
                if ($stats[$i][0] == '.') {
                    $stats[$i] = "0" . $stats[$i];
                }
            }

            //echo "<tr><td>Battery Charging Energy (Kwh)</td><td>";
            $array[] = $stats[0];    //37

            //echo "<tr><td>Battery Discharging Energy (Kwh)</td><td>";
            $array[] = $stats[1];    //38
        } else {
            $array[] = 0;    //37
            $array[] = 0;    //38
        }
    } else {
        $array[] = 0;    //33
        $array[] = 0;    //34
        $array[] = 0;    //35
        $array[] = 0;    //36
        $array[] = 0;    //37
        $array[] = 0;    //38
    }

    return $array;
}

function DeviceGetDataDevice2($array, $data_raw)
{
    //14 * 2 Bytes
    $sub_data = substr($data_raw, 41, 28);
    $stats = str_split($sub_data, 2);
    //var_dump($stats);

    $sub_data = unpack("n", $stats[0]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Room Temperature</td><td>";
    $array[] = $sub_data;    //8


    $sub_data = unpack("n", $stats[1]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Solar array 1 Voltage</td><td>";
    $array[] = $sub_data;    //9

    $sub_data = unpack("n", $stats[2]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Solar array 2 Voltage</td><td>";
    $array[] = $sub_data;    //10

    $sub_data = unpack("n", $stats[3]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Solar array 3 Voltage</td><td>";
    $array[] = $sub_data;    //11

    $sub_data = unpack("n", $stats[4]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Array1 current</td><td>";
    $array[] = $sub_data;    //12

    $sub_data = unpack("n", $stats[5]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Array2 current</td><td>";
    $array[] = $sub_data;    //13

    $sub_data = unpack("n", $stats[6]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Array3 current</td><td>";
    $array[] = $sub_data;    //14

    $sub_data = unpack("n", $stats[7]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>R-Phase current</td><td>";
    $array[] = $sub_data;    //15

    $sub_data = unpack("n", $stats[8]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Y-Phase current</td><td>";
    $array[] = $sub_data;    //16

    $sub_data = unpack("n", $stats[9]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>B-Phase current</td><td>";
    $array[] = $sub_data;    //17

    $sub_data = unpack("n", $stats[10]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Mains Frequency</td><td>";
    $array[] = $sub_data;    //18

    $sub_data = unpack("n", $stats[11]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Input Mains Voltage – R Phase</td><td>";
    $array[] = $sub_data;    //19

    $sub_data = unpack("n", $stats[12]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Input Mains Voltage – Y Phase</td><td>";
    $array[] = $sub_data;    //20

    $sub_data = unpack("n", $stats[13]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Input Mains Voltage – B Phase</td><td>";
    $array[] = $sub_data;    //21


    //5 * 8 Bytes

    $sub_data = substr($data_raw, 69, 40);
    $stats = str_split($sub_data, 8);
    $stats = substr_replace($stats, ".", 7, 0);

    for ($i = 0; $i < 5; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.') {
            $stats[$i] = "0" . $stats[$i];
        }
    }

    //echo "<tr><td>Solar Run Hours</td><td>";
    $array[] = $stats[0];    //22

    //echo "<tr><td>Mains RUN HOURS</td><td>";
    $array[] = $stats[1];    //23

    //echo "<tr><td>Solar + mains  RUN HOURS</td><td>";
    $array[] = $stats[2];    //24

    //echo "<tr><td>Mains Energy</td><td>";
    $array[] = $stats[3];    //25

    //echo "<tr><td>Solar Energy</td><td>";
    $array[] = $stats[4];    //26



    //3 * 2 Bytes

    $sub_data = substr($data_raw, 109, 6);
    $stats = str_split($sub_data, 2);

    $sub_data = unpack("n", $stats[0]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Battery bank Voltage</td><td>";
    $array[] = $sub_data;    //27

    $sub_data = unpack("n", $stats[1]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Battery Charging current</td><td>";
    $array[] = $sub_data;    //28

    $sub_data = unpack("n", $stats[2]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Battery Discharging current</td><td>";
    $array[] = $sub_data;    //29


    //1 * 1 Byte

    $sub_data = substr($data_raw, 115, 1);
    $sub_data = (hexdec(bin2hex($sub_data)));
    //echo "<tr><td>Battery status</td><td>";
    $array[] = $sub_data;    //30


    //2 * 8 Bytes

    $sub_data = substr($data_raw, 116, 16);
    $stats = str_split($sub_data, 8);
    $stats = substr_replace($stats, ".", 7, 0);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.') {
            $stats[$i] = "0" . $stats[$i];
        }
    }

    //echo "<tr><td>Batt CHG energy</td><td>";
    $array[] = $stats[0];    //31

    //echo "<tr><td>BAT Dischg Energy</td><td>";
    $array[] = $stats[1];    //32


    //Padding to make same size as for Device Type 1
    $array[] = null;    //33
    $array[] = null;    //34
    $array[] = null;    //35
    $array[] = null;    //36
    $array[] = null;    //37
    $array[] = null;    //38


    return $array;
}

//Data for Double DG
function DeviceGetDataDouble($array, $data_raw)
{
    $sub_data = substr($data_raw, 42, 2);
    $stats = str_split($sub_data, 2);
    //var_dump($stats);

    $sub_data = unpack("n", $stats[0]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Room Temperature</td><td>";
    $array[] = $sub_data;    //8


    $sub_data = substr($data_raw, 44, 1);
    $stats = str_split($sub_data, 1);
    $sub_data = (hexdec(bin2hex($stats[0])));    //$sub_data[1]/1;
    //echo "<tr><td>DG1 Fuel Level (0-100 %)</td><td>";
    $array[] = $sub_data;    //9



    $sub_data = substr($data_raw, 45, 32);
    $stats = str_split($sub_data, 2);

    $sub_data = unpack("n", $stats[0]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1 Fuel Data</td><td>";
    $array[] = $sub_data;    //10


    $sub_data = unpack("n", $stats[1]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1 Site Batt. bank Voltage</td><td>";
    $array[] = $sub_data;    //11

    $sub_data = unpack("n", $stats[2]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1 R-Phase current</td><td>";
    $array[] = $sub_data;    //12

    $sub_data = unpack("n", $stats[3]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1 Y-Phase current</td><td>";
    $array[] = $sub_data;    //13

    $sub_data = unpack("n", $stats[4]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1 B-Phase current</td><td>";
    $array[] = $sub_data;    //14

    $sub_data = unpack("n", $stats[5]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Mains Frequency</td><td>";
    $array[] = $sub_data;    //15

    $sub_data = unpack("n", $stats[6]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1 frequency</td><td>";
    $array[] = $sub_data;    //16

    $sub_data = unpack("n", $stats[7]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1-R phase Voltage</td><td>";
    $array[] = $sub_data;    //17

    $sub_data = unpack("n", $stats[8]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1-Y phase Voltage</td><td>";
    $array[] = $sub_data;    //18

    $sub_data = unpack("n", $stats[9]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1-B phase Voltage</td><td>";
    $array[] = $sub_data;    //19

    $sub_data = unpack("n", $stats[10]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>LCU1 Output Voltage</td><td>";
    $array[] = $sub_data;    //20

    $sub_data = unpack("n", $stats[11]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>LCU2 Output Voltage</td><td>";
    $array[] = $sub_data;    //21

    $sub_data = unpack("n", $stats[12]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>LCU3 Output Voltage</td><td>";
    $array[] = $sub_data;    //22

    $sub_data = unpack("n", $stats[13]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Input Mains Voltage - R Phase</td><td>";
    $array[] = $sub_data;    //23

    $sub_data = unpack("n", $stats[14]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Input Mains Voltage - Y Phase</td><td>";
    $array[] = $sub_data;    //24

    $sub_data = unpack("n", $stats[15]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Input Mains Voltage - B Phase</td><td>";
    $array[] = $sub_data;    //25

    /////


    $sub_data = substr($data_raw, 77, 48);
    $stats = str_split($sub_data, 8);
    $stats = substr_replace($stats, ".", 7, 0);

    for ($i = 0; $i < 6; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.') {
            $stats[$i] = "0" . $stats[$i];
        }
    }

    //echo "<tr><td>DG1 Running Hours</td><td>";
    $array[] = $stats[0];    //26

    //echo "<tr><td>Mains RUN HOURS</td><td>";
    $array[] = $stats[1];    //27

    //echo "<tr><td>Batt RUN HOURS</td><td>";
    $array[] = $stats[2];    //28

    //echo "<tr><td>O/P Mains Energy</td><td>";
    $array[] = $stats[3];    //29

    //echo "<tr><td>DG1 Energy</td><td>";
    $array[] = $stats[4];    //30

    //echo "<tr><td>I/P Mains Energy</td><td>";
    $array[] = $stats[5];    //31

    $sub_data = substr($data_raw, 125, 6);
    $stats = str_split($sub_data, 2);

    $sub_data = unpack("n", $stats[0]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1 Battery Voltage</td><td>";
    $array[] = $sub_data;    //32

    $sub_data = unpack("n", $stats[1]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Battery Charging current</td><td>";
    $array[] = $sub_data;    //33

    $sub_data = unpack("n", $stats[2]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Battery Discharging current</td><td>";
    $array[] = $sub_data;    //34


    $sub_data = substr($data_raw, 131, 2);
    $stats = str_split($sub_data, 1);

    $sub_data = (hexdec(bin2hex($stats[0])));    //$sub_data[1]/1;
    //echo "<tr><td>Battery status</td><td>";
    $array[] = $sub_data;    //35

    $sub_data = (hexdec(bin2hex($stats[1])) / 10);    //$sub_data[1]/10;
    //echo "<tr><td>Battery back up time</td><td>";
    $array[] = $sub_data;    //36



    $sub_data = substr($data_raw, 133, 16);
    $stats = str_split($sub_data, 8);
    $stats = substr_replace($stats, ".", 7, 0);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.') {
            $stats[$i] = "0" . $stats[$i];
        }
    }

    //echo "<tr><td>Battery Charging Energy (Kwh)</td><td>";
    $array[] = $stats[0];    //37

    $embedded_array = array();

    //echo "<tr><td>Battery Discharging Energy (Kwh)</td><td>";
    $embedded_array[] = $stats[1];    //38 [0]



    $sub_data = substr($data_raw, 149, 10);
    $stats = str_split($sub_data, 2);

    $sub_data = unpack("n", $stats[0]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG2 frequency</td><td>";
    $embedded_array[] = $sub_data;    //38 [1]

    $sub_data = unpack("n", $stats[1]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG2-R phase Voltage</td><td>";
    $embedded_array[] = $sub_data;    //38 [2]

    $sub_data = unpack("n", $stats[2]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG2-Y phase Voltage</td><td>";
    $embedded_array[] = $sub_data;    //38 [3]

    $sub_data = unpack("n", $stats[3]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG2-B phase Voltage</td><td>";
    $embedded_array[] = $sub_data;    //38 [4]


    $sub_data = unpack("n", $stats[4]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG2 Battery Voltage</td><td>";
    $embedded_array[] = $sub_data;    //38 [5]


    $sub_data = substr($data_raw, 159, 16);
    $stats = str_split($sub_data, 8);
    $stats = substr_replace($stats, ".", 7, 0);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.') {
            $stats[$i] = "0" . $stats[$i];
        }
    }

    //echo "<tr><td>DG2 Running Hours (Hrs)</td><td>";
    $embedded_array[] = $stats[0];    //38 [6]

    //echo "<tr><td>DG2 Energy (Kwh)</td><td>";
    $embedded_array[] = $stats[1];    //38 [7]


    $sub_data = substr($data_raw, 175, 1);
    $sub_data = (hexdec(bin2hex($sub_data)));
    //echo "<tr><td>DG2 Fuel Level %</td><td>";
    $embedded_array[] = $sub_data;    //38 [8]

    $sub_data = substr($data_raw, 176, 2);
    $sub_data = unpack("n", $sub_data);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG2 Fuel Data (Litres)</td><td>";
    $embedded_array[] = $sub_data;    //38 [9]


    $array[] = $embedded_array;    //38 -- Array of Extra elements beyond 37

    //var_dump($array);

    return $array;
}

//Data for Double DG Solar
function DeviceGetDataDoubleSolar($array, $data_raw)
{
    $sub_data = substr($data_raw, 42, 2);
    $stats = str_split($sub_data, 2);
    //var_dump($stats);

    $sub_data = unpack("n", $stats[0]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Room Temperature</td><td>";
    $array[] = $sub_data;    //8


    $sub_data = substr($data_raw, 44, 2);
    $stats = str_split($sub_data, 2);
    $sub_data = (hexdec(bin2hex($stats[0])));    //$sub_data[1]/1;
    //echo "<tr><td>DG1 Fuel Level (0-100 %)</td><td>";
    $array[] = $sub_data;    //9



    $sub_data = substr($data_raw, 46, 32);
    $stats = str_split($sub_data, 2);

    $sub_data = unpack("n", $stats[0]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1 Fuel Data</td><td>";
    $array[] = $sub_data;    //10


    $sub_data = unpack("n", $stats[1]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1 Site Batt. bank Voltage</td><td>";
    $array[] = $sub_data;    //11

    $sub_data = unpack("n", $stats[2]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1 R-Phase current</td><td>";
    $array[] = $sub_data;    //12

    $sub_data = unpack("n", $stats[3]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1 Y-Phase current</td><td>";
    $array[] = $sub_data;    //13

    $sub_data = unpack("n", $stats[4]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1 B-Phase current</td><td>";
    $array[] = $sub_data;    //14

    $sub_data = unpack("n", $stats[5]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Mains Frequency</td><td>";
    $array[] = $sub_data;    //15

    $sub_data = unpack("n", $stats[6]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1 frequency</td><td>";
    $array[] = $sub_data;    //16

    $sub_data = unpack("n", $stats[7]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1-R phase Voltage</td><td>";
    $array[] = $sub_data;    //17

    $sub_data = unpack("n", $stats[8]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1-Y phase Voltage</td><td>";
    $array[] = $sub_data;    //18

    $sub_data = unpack("n", $stats[9]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1-B phase Voltage</td><td>";
    $array[] = $sub_data;    //19

    $sub_data = unpack("n", $stats[10]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>LCU1 Output Voltage</td><td>";
    $array[] = $sub_data;    //20

    $sub_data = unpack("n", $stats[11]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>LCU2 Output Voltage</td><td>";
    $array[] = $sub_data;    //21

    $sub_data = unpack("n", $stats[12]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>LCU3 Output Voltage</td><td>";
    $array[] = $sub_data;    //22

    $sub_data = unpack("n", $stats[13]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Input Mains Voltage - R Phase</td><td>";
    $array[] = $sub_data;    //23

    $sub_data = unpack("n", $stats[14]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Input Mains Voltage - Y Phase</td><td>";
    $array[] = $sub_data;    //24

    $sub_data = unpack("n", $stats[15]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Input Mains Voltage - B Phase</td><td>";
    $array[] = $sub_data;    //25

    /////


    $sub_data = substr($data_raw, 78, 48);
    $stats = str_split($sub_data, 8);
    $stats = substr_replace($stats, ".", 7, 0);

    for ($i = 0; $i < 6; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.') {
            $stats[$i] = "0" . $stats[$i];
        }
    }

    //echo "<tr><td>DG1 Running Hours</td><td>";
    $array[] = $stats[0];    //26

    //echo "<tr><td>Mains RUN HOURS</td><td>";
    $array[] = $stats[1];    //27

    //echo "<tr><td>Batt RUN HOURS</td><td>";
    $array[] = $stats[2];    //28

    //echo "<tr><td>O/P Mains Energy</td><td>";
    $array[] = $stats[3];    //29

    //echo "<tr><td>DG1 Energy</td><td>";
    $array[] = $stats[4];    //30

    //echo "<tr><td>I/P Mains Energy</td><td>";
    $array[] = $stats[5];    //31

    $sub_data = substr($data_raw, 126, 6);
    $stats = str_split($sub_data, 2);

    $sub_data = unpack("n", $stats[0]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG1 Battery Voltage</td><td>";
    $array[] = $sub_data;    //32

    $sub_data = unpack("n", $stats[1]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Battery Charging current</td><td>";
    $array[] = $sub_data;    //33

    $sub_data = unpack("n", $stats[2]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Battery Discharging current</td><td>";
    $array[] = $sub_data;    //34


    $sub_data = substr($data_raw, 132, 2);
    $stats = str_split($sub_data, 1);

    $sub_data = (hexdec(bin2hex($stats[0])));    //$sub_data[1]/1;
    //echo "<tr><td>Battery status</td><td>";
    $array[] = $sub_data;    //35

    $sub_data = (hexdec(bin2hex($stats[1])) / 10);    //$sub_data[1]/10;
    //echo "<tr><td>Battery back up time</td><td>";
    $array[] = $sub_data;    //36



    $sub_data = substr($data_raw, 134, 16);
    $stats = str_split($sub_data, 8);
    $stats = substr_replace($stats, ".", 7, 0);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.') {
            $stats[$i] = "0" . $stats[$i];
        }
    }

    //echo "<tr><td>Battery Charging Energy (Kwh)</td><td>";
    $array[] = $stats[0];    //37

    $embedded_array = array();

    //echo "<tr><td>Battery Discharging Energy (Kwh)</td><td>";
    $embedded_array[] = $stats[1];    //38 [0]



    $sub_data = substr($data_raw, 150, 8);
    $stats = str_split($sub_data, 2);

    $sub_data = unpack("n", $stats[0]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG2 frequency</td><td>";
    $embedded_array[] = $sub_data;    //38 [1]

    $sub_data = unpack("n", $stats[1]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG2-R phase Voltage</td><td>";
    $embedded_array[] = $sub_data;    //38 [2]

    $sub_data = unpack("n", $stats[2]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG2-Y phase Voltage</td><td>";
    $embedded_array[] = $sub_data;    //38 [3]

    $sub_data = unpack("n", $stats[3]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG2-B phase Voltage</td><td>";
    $embedded_array[] = $sub_data;    //38 [4]



    $sub_data = substr($data_raw, 158, 16); //174
    $stats = str_split($sub_data, 8);
    $stats = substr_replace($stats, ".", 7, 0);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.') {
            $stats[$i] = "0" . $stats[$i];
        }
    }

    //echo "<tr><td>DG2 Running Hours (Hrs)</td><td>";
    $embedded_array[] = $stats[0];    //38 [5]

    //echo "<tr><td>DG2 Energy (Kwh)</td><td>";
    $embedded_array[] = $stats[1];    //38 [6]



    $sub_data = substr($data_raw, 174, 10); // 184
    $stats = str_split($sub_data, 2);

    $sub_data = unpack("n", $stats[0]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG2 Battery Voltage</td><td>";
    $embedded_array[] = $sub_data;    //38 [7]

    // $sub_data = substr($data_raw, 176, 1);
    // $sub_data = (hexdec(bin2hex($sub_data)));
    // //echo "<tr><td>DG2 Fuel Level %</td><td>";
    // $embedded_array[] = $sub_data;    //38 [8]

    $sub_data = unpack("n", $stats[1]);
    $sub_data = $sub_data[1];
    //echo "<tr><td>Fuel Level of DG2 %</td><td>";
    $embedded_array[] = $sub_data;    //38 [8]

    $sub_data = unpack("n", $stats[2]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Fuel data of DG2 liter</td><td>";
    $embedded_array[] = $sub_data;    //38 [9]

    $sub_data = unpack("n", $stats[3]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>PV Voltage</td><td>";
    $embedded_array[] = $sub_data;    //38 [10]

    $sub_data = unpack("n", $stats[4]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>PV Current</td><td>";
    $embedded_array[] = $sub_data;    //38 [11]



    $sub_data = substr($data_raw, 184, 16); // 200
    $stats = str_split($sub_data, 8);
    $stats = substr_replace($stats, ".", 7, 0);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.') {
            $stats[$i] = "0" . $stats[$i];
        }
    }

    //echo "<tr><td>PV Running Hours (Hrs)</td><td>";
    $embedded_array[] = $stats[0];    //38 [12]

    //echo "<tr><td>PV Energy (Kwh)</td><td>";
    $embedded_array[] = $stats[1];    //38 [13]

    $array[] = $embedded_array;    //38 -- Array of Extra elements beyond 37

    //var_dump($array);

    $explode = str_split("#$data_raw");
    // echo "<script>console.log('data_raw', " . json_encode($explode) . ");</script>";

    return $array;
}

function DeviceGetDataDevicePhase2($data_raw)
{
    $array = array();

    $sub_data = substr($data_raw, 44, 36);
    $stats = str_split($sub_data, 2);
    //var_dump($stats);

    $sub_data = unpack("n", $stats[0]);
    $sub_data = $sub_data[1] / 10;

    //echo "<tr><td>Room Temperature</td><td>";
    //echo("$sub_data Deg C");
    //echo "</td></tr>";
    $array[] = $sub_data;    //8


    $sub_data = unpack("n", $stats[1]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Fuel Level</td><td>";
    //echo("$sub_data %");
    //echo "</td></tr>";
    $array[] = $sub_data;    //9

    $sub_data = unpack("n", $stats[2]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Fuel Data</td><td>";
    //echo("$sub_data Liters");
    //echo "</td></tr>";
    $array[] = $sub_data;    //10

    $sub_data = unpack("n", $stats[3]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Site Batt. bank Voltage</td><td>";
    //echo("$sub_data VDC");
    //echo "</td></tr>";
    $array[] = $sub_data;    //11

    $sub_data = unpack("n", $stats[4]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>R-Phase current</td><td>";
    //echo("$sub_data");
    //echo "</td></tr>";
    $array[] = $sub_data;    //12

    $sub_data = unpack("n", $stats[5]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Y-Phase current</td><td>";
    //echo("$sub_data");
    //echo "</td></tr>";
    $array[] = $sub_data;    //13


    $sub_data = unpack("n", $stats[6]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>B-Phase current</td><td>";
    //echo("$sub_data");
    //echo "</td></tr>";
    $array[] = $sub_data;    //14

    $sub_data = unpack("n", $stats[7]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Mains Frequency</td><td>";
    //echo("$sub_data");
    //echo "</td></tr>";
    $array[] = $sub_data;    //15

    $sub_data = unpack("n", $stats[8]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG frequency</td><td>";
    //echo("$sub_data");
    //echo "</td></tr>";
    $array[] = $sub_data;    //16

    $sub_data = unpack("n", $stats[9]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG-R phase Voltage</td><td>";
    //echo("$sub_data VAC");
    //echo "</td></tr>";
    $array[] = $sub_data;    //17

    $sub_data = unpack("n", $stats[10]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG-Y phase Voltage</td><td>";
    //echo("$sub_data VAC");
    //echo "</td></tr>";
    $array[] = $sub_data;    //18

    $sub_data = unpack("n", $stats[11]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG-B phase Voltage</td><td>";
    //echo("$sub_data VAC");
    //echo "</td></tr>";
    $array[] = $sub_data;    //19

    $sub_data = unpack("n", $stats[12]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>LCU1 Output Voltage</td><td>";
    //echo("$sub_data VAC");
    //echo "</td></tr>";
    $array[] = $sub_data;    //20

    $sub_data = unpack("n", $stats[13]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>LCU2 Output Voltage</td><td>";
    //echo("$sub_data VAC");
    //echo "</td></tr>";
    $array[] = $sub_data;    //21

    $sub_data = unpack("n", $stats[14]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>LCU3 Output Voltage</td><td>";
    //echo("$sub_data VAC");
    //echo "</td></tr>";
    $array[] = $sub_data;    //22

    $sub_data = unpack("n", $stats[15]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Input Mains Voltage - R Phase</td><td>";
    //echo("$sub_data VAC");
    //echo "</td></tr>";
    $array[] = $sub_data;    //23

    $sub_data = unpack("n", $stats[16]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Input Mains Voltage - Y Phase</td><td>";
    //echo("$sub_data VAC");
    //echo "</td></tr>";
    $array[] = $sub_data;    //24

    $sub_data = unpack("n", $stats[17]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Input Mains Voltage - B Phase</td><td>";
    //echo("$sub_data VAC");
    //echo "</td></tr>";
    $array[] = $sub_data;    //25

    /////


    $sub_data = substr($data_raw, 80, 48);
    $stats = str_split($sub_data, 8);
    $stats = substr_replace($stats, ".", 7, 0);

    for ($i = 0; $i < 6; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.') {
            $stats[$i] = "0" . $stats[$i];
        }
    }
    //var_dump($stats);
    //echo "<tr><td>DG Running Hours</td><td>";
    //echo("$stats[0] Hrs");
    //echo "</td></tr>";
    $array[] = $stats[0];    //26

    //echo "<tr><td>Mains RUN HOURS</td><td>";
    //echo("$stats[1] Hrs");
    //echo "</td></tr>";
    $array[] = $stats[1];    //27

    //echo "<tr><td>Batt RUN HOURS</td><td>";
    //echo("$stats[2] Hrs");
    //echo "</td></tr>";
    $array[] = $stats[2];    //28

    //echo "<tr><td>O/P Mains Energy</td><td>";
    //echo("$stats[3] Kwh");
    //echo "</td></tr>";
    $array[] = $stats[3];    //29

    //echo "<tr><td>DG Energy</td><td>";
    //echo("$stats[4] Kwh");
    //echo "</td></tr>";
    $array[] = $stats[4];    //30

    //echo "<tr><td>I/P Mains Energy</td><td>";
    //echo("$stats[5] Kwh");
    //echo "</td></tr>";
    $array[] = $stats[5];    //31

    $sub_data = substr($data_raw, 128, 6);
    $stats = str_split($sub_data, 2);

    $sub_data = unpack("n", $stats[0]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG Battery Voltage</td><td>";
    //echo("$sub_data VDC");
    //echo "</td></tr>";
    $array[] = $sub_data;    //32

    $sub_data = unpack("n", $stats[1]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Battery Charging current</td><td>";
    //echo("$sub_data Amp");
    //echo "</td></tr>";
    $array[] = $sub_data;    //33

    $sub_data = unpack("n", $stats[2]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Battery Discharging current</td><td>";
    //echo("$sub_data Amp");
    //echo "</td></tr>";
    $array[] = $sub_data;    //34

    $sub_data = substr($data_raw, 134, 2);
    $stats = str_split($sub_data, 1);

    $sub_data = (hexdec(bin2hex($stats[0])));
    //echo "<tr><td>Battery status</td><td>";
    //echo("$sub_data %");
    //echo "</td></tr>";
    $array[] = $sub_data;    //35

    $sub_data = (hexdec(bin2hex($stats[1])) / 10);
    //echo "<tr><td>Battery back up time</td><td>";
    //echo("$sub_data hours");
    //echo "</td></tr>";
    $array[] = $sub_data;    //36


    $sub_data = substr($data_raw, 136, 16);
    $stats = str_split($sub_data, 8);
    $stats = substr_replace($stats, ".", 7, 0);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.') {
            $stats[$i] = "0" . $stats[$i];
        }
    }

    //echo "<tr><td>Battery Charging Energy</td><td>";
    //echo("$stats[0] Kwh");
    //echo "</td></tr>";
    $array[] = $stats[0];    //37


    $embedded_array = array();

    //echo "<tr><td>Battery Discharging Energy</td><td>";
    //echo("$stats[1] Kwh");
    //echo "</td></tr>";
    $embedded_array[] = $stats[1];    //38[0]

    //echo "<tr><td>CRC LOWER BYTE</td><td>";
    //echo(hexdec(bin2hex($data_raw[152])));
    //echo "</td></tr>";
    //$array[] = $stats[2];

    //echo "<tr><td>CRC HIGHER BYTE</td><td>";
    //echo(hexdec(bin2hex($data_raw[153])));
    //echo "</td></tr>";
    //$array[] = $stats[3];




    //echo "<tr><td></td><td>";
    //echo "DC Energy Meter Data";
    //echo "</td></tr>";




    //echo "<tr><td>Device 2 Id</td><td>";
    $embedded_array[] = (hexdec(bin2hex($data_raw[154])));    //38[1]
    //echo "</td></tr>";


    //echo "<tr><td>Function Code</td><td>";
    $embedded_array[] = (hexdec(bin2hex($data_raw[155])));    //38[2]
    //echo "</td></tr>";

    //echo "<tr><td># bytes</td><td>";
    $embedded_array[] = (hexdec(bin2hex($data_raw[156])));    //38[3]
    //echo "</td></tr>";



    //9 * 4 IEEE-754 32-bit float value
    $sub_data = substr($data_raw, 157, 36);
    $stats = str_split($sub_data, 4);

    for ($i = 0; $i < 9; $i++) {
        $bin = "\x4A\x5B\x1B\x05";
        $tmp = unpack('f', strrev($stats[$i]));
        //$tmp = unpack('f', $stats[$i]);
        //echo $tmp[1];  // 3589825.25
        $stats[$i] = $tmp[1];
    }

    //echo "<tr><td>KWH of Channel 1</td><td>";
    $embedded_array[] = $stats[0];                    //38[4]
    //echo "</td></tr>";

    //echo "<tr><td>Current of Channel 1</td><td>";
    $embedded_array[] = $stats[1];                    //38[5]
    //echo "</td></tr>";

    //echo "<tr><td>KWH of Channel 2</td><td>";
    $embedded_array[] = $stats[2];                    //38[6]
    //echo "</td></tr>";

    //echo "<tr><td>Current of Channel 2</td><td>";
    $embedded_array[] = $stats[3];                    //38[7]
    //echo "</td></tr>";

    //echo "<tr><td>KWH of Channel 3</td><td>";
    $embedded_array[] = $stats[4];                    //38[8]
    //echo "</td></tr>";

    //echo "<tr><td>Current of Channel 3</td><td>";
    $embedded_array[] = $stats[5];                    //38[9]
    //echo "</td></tr>";

    //echo "<tr><td>KWH of Channel 4</td><td>";
    $embedded_array[] = $stats[6];                    //38[10]
    //echo "</td></tr>";

    //echo "<tr><td>Current of Channel 4</td><td>";
    $embedded_array[] = $stats[7];                    //38[11]
    //echo "</td></tr>";

    //echo "<tr><td>Voltage</td><td>";
    $embedded_array[] = $stats[8];                    //38[12]
    //echo "</td></tr>";


    //echo "<tr><td>CRC LOWER BYTE</td><td>";
    //echo(hexdec(bin2hex($data_raw[193])));
    //echo "</td></tr>";

    //echo "<tr><td>CRC HIGHER BYTE</td><td>";
    //echo(hexdec(bin2hex($data_raw[194])));
    //echo "</td></tr>";

    $array[] = $embedded_array;    //38 -- Array of Extra elements beyond 37

    //var_dump($array);

    return $array;
}


function DeviceGetDataDoubleBattery($array, $data_raw)
{
    $sub_data = substr($data_raw, 41, 22);
    $stats = str_split($sub_data, 2);
    //var_dump($stats);

    $sub_data = unpack("n", $stats[0]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Room Temperature</td><td>";
    $array[] = $sub_data;    //8


    $sub_data = unpack("n", $stats[1]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Site Battery Bank Voltage</td><td>";
    $array[] = $sub_data;    //9

    $sub_data = unpack("n", $stats[2]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Site Batt. bank Voltage</td><td>";
    $array[] = $sub_data;    //10

    $sub_data = unpack("n", $stats[3]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Load Current current</td><td>";
    $array[] = $sub_data;    //11

    $sub_data = unpack("n", $stats[4]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Mains Voltage</td><td>";
    $array[] = $sub_data;    //12

    $sub_data = unpack("n", $stats[5]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG Voltage</td><td>";
    $array[] = $sub_data;    //13

    $sub_data = unpack("n", $stats[6]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Input Mains Voltage B Phase</td><td>";
    $array[] = $sub_data;    //14

    $sub_data = unpack("n", $stats[7]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Battery1 Charging Current</td><td>";
    $array[] = $sub_data;    //15

    $sub_data = unpack("n", $stats[8]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Battery1 Discharging Current</td><td>";
    $array[] = $sub_data;    //16

    $sub_data = unpack("n", $stats[9]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Battery2 Charging Current</td><td>";
    $array[] = $sub_data;    //17

    $sub_data = unpack("n", $stats[10]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Battery2 Discharging Current</td><td>";
    $array[] = $sub_data;    //18


    $sub_data = substr($data_raw, 63, 2);
    $stats = str_split($sub_data, 1);

    //$sub_data = unpack("C",$stats[0]);
    $sub_data = hexdec(bin2hex($stats[0]));
    //echo "<tr><td>Battery1 Status</td><td>";
    $array[] = $sub_data;    //19

    //$sub_data = unpack("C",$stats[1]);
    $sub_data = hexdec(bin2hex($stats[1]));
    // echo "<tr><td>Battery2 Status</td><td>";
    $array[] = $sub_data;    //20


    /////

    //11*2	= 22
    //2 *1	= 02
    //----------
    //        66
    //----------

    //REV2 Total 66 Bytes


    return $array;
}

function DeviceGetDataDevice3($array, $data_raw)
{
    $sub_data = substr($data_raw, 41, 22);
    $stats = str_split($sub_data, 2);
    //var_dump($stats);

    $sub_data = unpack("n", $stats[0]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Room Temperature</td><td>";
    $array[] = $sub_data;    //8


    $sub_data = unpack("n", $stats[1]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Site Battery Bank Voltage</td><td>";
    $array[] = $sub_data;    //9

    $sub_data = unpack("n", $stats[2]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Site Batt. bank Voltage</td><td>";
    $array[] = $sub_data;    //10

    $sub_data = unpack("n", $stats[3]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Total Load Current current</td><td>";
    $array[] = $sub_data;    //11

    $sub_data = unpack("n", $stats[4]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Mains Voltage-R Phase</td><td>";
    $array[] = $sub_data;    //12

    $sub_data = unpack("n", $stats[5]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>DG Voltage-Y Phase</td><td>";
    $array[] = $sub_data;    //13

    $sub_data = unpack("n", $stats[6]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Input Mains Voltage-B Phase Phase</td><td>";
    $array[] = $sub_data;    //14

    $sub_data = unpack("n", $stats[7]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Battery1 Charging Current</td><td>";
    $array[] = $sub_data;    //15

    $sub_data = unpack("n", $stats[8]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Battery1 Discharging Current</td><td>";
    $array[] = $sub_data;    //16

    $sub_data = unpack("n", $stats[9]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Battery2 Charging Current</td><td>";
    $array[] = $sub_data;    //17

    $sub_data = unpack("n", $stats[10]);
    $sub_data = $sub_data[1] / 10;
    //echo "<tr><td>Battery2 Discharging Current</td><td>";
    $array[] = $sub_data;    //18


    $sub_data = substr($data_raw, 63, 4);
    $stats = str_split($sub_data, 2);

    //$sub_data = unpack("C",$stats[0]);
    $sub_data = hexdec(bin2hex($stats[0]));
    //echo "<tr><td>Battery1 Status</td><td>";
    $array[] = $sub_data;    //19

    //$sub_data = unpack("C",$stats[1]);
    $sub_data = hexdec(bin2hex($stats[1]));
    // echo "<tr><td>Battery2 Status</td><td>";
    $array[] = $sub_data;    //20

    $sub_data = substr($data_raw, 67, 40);
    $stats = str_split($sub_data, 8);
    $stats = substr_replace($stats, ".", 7, 0);

    for ($i = 0; $i < 6; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.') {
            $stats[$i] = "0" . $stats[$i];
        }
    }

    //echo "<tr><td>Mains Energy</td><td>";
    $array[] = $stats[0];    //21

    //echo "<tr><td>Battery#1 CHG Energy</td><td>";
    $array[] = $stats[1];    //22

    //echo "<tr><td>Battery#1 DISCHG Energy </td><td>";
    $array[] = $stats[2];    //23

    //echo "<tr><td>Battery#2 CHG Energy </td><td>";
    $array[] = $stats[3];    //24

    //echo "<tr><td>Battery#2 DISCHG Energy </td><td>";
    $array[] = $stats[4];    //25


    /////
    //41
    //11*2	= 22
    //2 *2	= 04
    //5*8   = 40
    //----------
    //       107
    //----------

    //REV2 Total 66 Bytes


    return $array;
}

function DeviceGetDataAirtelV118($array, $data_raw)
{
    $sub_data = substr($data_raw, 38, 39);
    $stats = str_split($sub_data, 3);

    //var_dump($stats);

    //$sub_data = unpack("n",$stats[0]);
    //$sub_data = $stats[0];
    //echo "<tr><td>Room Temperature</td><td>";
    $stats[0] = substr_replace($stats[0], ".", 2, 0);
    $stats[0] = ltrim($stats[0], '0');
    if ($stats[0][0] == '.')
        $stats[0] = "0" . $stats[0];

    $array[] = $stats[0];    //8


    //echo "<tr><td>Fuel Level</td><td>";
    $stats[1] = ltrim($stats[1], '0');
    if ($stats[1] == '') {
        $stats[1] = "0";
    }
    $array[] = $stats[1];    //9

    //echo "<tr><td>Site Batt. Volt.</td><td>";

    $stats[2] = substr_replace($stats[2], ".", 2, 0);
    $stats[2] = ltrim($stats[2], '0');
    if ($stats[2][0] == '.')
        $stats[2] = "0" . $stats[2];

    $array[] = $stats[2];    //10

    //echo "<tr><td>Output current</td><td>";
    $stats[3] = substr_replace($stats[3], ".", 2, 0);
    $stats[3] = ltrim($stats[3], '0');
    if ($stats[3][0] == '.')
        $stats[3] = "0" . $stats[3];

    $array[] = $stats[3];    //11



    for ($i = 4; $i < 6; $i++) {
        $stats[$i] = substr_replace($stats[$i], ".", 2, 0);
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.')
            $stats[$i] = "0" . $stats[$i];
    }

    //echo "<tr><td>Mains Freq.</td><td>";
    $array[] = $stats[4];    //12

    //echo "<tr><td>DG Freq.</td><td>";
    $array[] = $stats[5];    //13

    for ($i = 6; $i < 13; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    //echo "<tr><td>DG Volt.</td><td>";
    $array[] = $stats[6];    //14

    //echo "<tr><td>PIU O/P 1 volt.</td><td>";
    $array[] = $stats[7];    //15

    //echo "<tr><td>PIU O/P 2 volt.</td><td>";
    $array[] = $stats[8];    //16

    //echo "<tr><td>O/P 3 volt.</td><td>";
    $array[] = $stats[9];    //17

    //echo "<tr><td>I/P Mains volt 1</td><td>";
    $array[] = $stats[10];    //18

    //echo "<tr><td>I/P Mains volt 2</td><td>";
    $array[] = $stats[11];    //19

    //echo "<tr><td>I/P Mains volt 3</td><td>";
    $array[] = $stats[12];    //20

    $sub_data = substr($data_raw, 77, 56); //7
    $stats = str_split($sub_data, 8);

    for ($i = 0; $i < 7; $i++) {
        $stats[$i] = substr_replace($stats[$i], ".", 7, 0);
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.')
            $stats[$i] = "0" . $stats[$i];
    }

    $array[] = $stats[0];    //21
    $array[] = $stats[1];    //22
    $array[] = $stats[2];    //23
    $array[] = $stats[3];    //24
    $array[] = $stats[4];    //25
    $array[] = $stats[5];    //26
    $array[] = $stats[6];    //27

    $sub_data = substr($data_raw, 133, 4); //2
    $stats = str_split($sub_data, 2);

    $array[] = $stats[0];    //28 SYSTEM STATUS
    $array[] = $stats[1];    //29 DG FAULT STATUS

    $sub_data = substr($data_raw, 137, 144); //18
    $stats = str_split($sub_data, 8);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }


    $array[] = $stats[0];    //30
    $array[] = $stats[1];    //31

    for ($i = 2; $i < 18; $i++) {
        $stats[$i] = substr_replace($stats[$i], ".", 7, 0);
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.')
            $stats[$i] = "0" . $stats[$i];
    }

    $array[] = $stats[2];    //32
    $array[] = $stats[3];    //33
    $array[] = $stats[4];    //34
    $array[] = $stats[5];    //35
    $array[] = $stats[6];    //36
    $array[] = $stats[7];    //37

    $embedded_array = [];

    $embedded_array[] = $stats[8];            //38 0
    $embedded_array[] = $stats[9];    //38 1
    $embedded_array[] = $stats[10];    //38 2
    $embedded_array[] = $stats[11];    //38 3
    $embedded_array[] = $stats[12];    //38 4
    $embedded_array[] = $stats[13];    //38 5
    $embedded_array[] = $stats[14];    //38 6
    $embedded_array[] = $stats[15];    //38 7
    $embedded_array[] = $stats[16];    //38 8
    $embedded_array[] = $stats[17];    //38 9

    $sub_data = substr($data_raw, 281, 4);
    $stats = str_split($sub_data, 4);

    $embedded_array[] = $stats[0];    //38 10

    $array[] = $embedded_array;

    return $array;
}

function DeviceGetDataAirtelV120($array, $data_raw)
{
    $sub_data = substr($data_raw, 38, 39);
    $stats = str_split($sub_data, 3);

    //var_dump($stats);

    //$sub_data = unpack("n",$stats[0]);
    //$sub_data = $stats[0];
    //echo "<tr><td>Room Temperature</td><td>";
    $stats[0] = substr_replace($stats[0], ".", 2, 0);
    $stats[0] = ltrim($stats[0], '0');
    if ($stats[0][0] == '.')
        $stats[0] = "0" . $stats[0];

    $array[] = $stats[0];    //8


    //echo "<tr><td>Solar Voltage</td><td>";
    $stats[1] = ltrim($stats[1], '0');
    if ($stats[1] == '') {
        $stats[1] = "0";
    }
    $array[] = $stats[1];    //9

    //echo "<tr><td>Site Batt. Volt.</td><td>";

    $stats[2] = substr_replace($stats[2], ".", 2, 0);
    $stats[2] = ltrim($stats[2], '0');
    if ($stats[2][0] == '.')
        $stats[2] = "0" . $stats[2];

    $array[] = $stats[2];    //10

    //echo "<tr><td>Output current</td><td>";
    $stats[3] = substr_replace($stats[3], ".", 2, 0);
    $stats[3] = ltrim($stats[3], '0');
    if ($stats[3][0] == '.')
        $stats[3] = "0" . $stats[3];

    $array[] = $stats[3];    //11



    for ($i = 4; $i < 6; $i++) {
        $stats[$i] = substr_replace($stats[$i], ".", 2, 0);
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.')
            $stats[$i] = "0" . $stats[$i];
    }

    //echo "<tr><td>Mains Freq.</td><td>";
    $array[] = $stats[4];    //12

    //echo "<tr><td>DG Freq.</td><td>";
    $array[] = $stats[5];    //13

    for ($i = 6; $i < 13; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    //echo "<tr><td>DG Volt.</td><td>";
    $array[] = $stats[6];    //14

    //echo "<tr><td>PIU O/P 1 volt.</td><td>";
    $array[] = $stats[7];    //15

    //echo "<tr><td>PIU O/P 2 volt.</td><td>";
    $array[] = $stats[8];    //16

    //echo "<tr><td>O/P 3 volt.</td><td>";
    $array[] = $stats[9];    //17

    //echo "<tr><td>I/P Mains volt 1</td><td>";
    $array[] = $stats[10];    //18

    //echo "<tr><td>I/P Mains volt 2</td><td>";
    $array[] = $stats[11];    //19

    //echo "<tr><td>I/P Mains volt 3</td><td>";
    $array[] = $stats[12];    //20

    $sub_data = substr($data_raw, 77, 56); //7
    $stats = str_split($sub_data, 8);

    for ($i = 0; $i < 7; $i++) {
        $stats[$i] = substr_replace($stats[$i], ".", 7, 0);
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.')
            $stats[$i] = "0" . $stats[$i];
    }

    $array[] = $stats[0];    //21
    $array[] = $stats[1];    //22
    $array[] = $stats[2];    //23
    $array[] = $stats[3];    //24
    $array[] = $stats[4];    //25
    $array[] = $stats[5];    //26
    $array[] = $stats[6];    //27

    $sub_data = substr($data_raw, 133, 4); //2
    $stats = str_split($sub_data, 2);

    $array[] = $stats[0];    //28 SYSTEM STATUS
    $array[] = $stats[1];    //29 DG FAULT STATUS

    $sub_data = substr($data_raw, 137, 144); //18
    $stats = str_split($sub_data, 8);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }


    $array[] = $stats[0];    //30
    $array[] = $stats[1];    //31

    for ($i = 2; $i < 8; $i++) {
        $stats[$i] = substr_replace($stats[$i], ".", 7, 0);
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.')
            $stats[$i] = "0" . $stats[$i];
    }

    $array[] = $stats[2];    //32
    $array[] = $stats[3];    //33
    $array[] = $stats[4];    //34
    $array[] = $stats[5];    //35
    $array[] = $stats[6];    //36
    $array[] = $stats[7];    //37

    for ($i = 8; $i < 18; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array = [];

    $embedded_array[] = $stats[8];     //38 0   - 38
    $embedded_array[] = $stats[9];     //38 1   - 39
    $embedded_array[] = $stats[10];    //38 2   - 40
    $embedded_array[] = $stats[11];    //38 3   - 41
    $embedded_array[] = $stats[12];    //38 4   - 42
    $embedded_array[] = $stats[13];    //38 5   - 43
    $embedded_array[] = $stats[14];    //38 6   - 44
    $embedded_array[] = $stats[15];    //38 7   - 45
    $embedded_array[] = $stats[16];    //38 8   - 46
    $embedded_array[] = $stats[17];    //38 9   - 47

    $sub_data = substr($data_raw, 281, 3);
    $stats = str_split($sub_data, 3);
    $embedded_array[] = $stats[0];    //38 10   - 48

    $sub_data = substr($data_raw, 284, 1);
    $stats = str_split($sub_data, 1);
    $embedded_array[] = $stats[0];    //38 11   - 49

    $array[] = $embedded_array;

    return $array;
}

function DeviceGetDataAirtelV50($array, $data_raw)
{
    $sub_data = substr($data_raw, 39, 4);
    $stats = str_split($sub_data, 4);

    //var_dump($stats);
    //echo "<tr><td>Room Temperature</td><td>";
    $stats[0] = substr_replace($stats[0], ".", 3, 0);
    $stats[0] = ltrim($stats[0], '0');
    if ($stats[0][0] == '.')
        $stats[0] = "0" . $stats[0];

    $array[] = $stats[0];    //8


    $sub_data = substr($data_raw, 43, 36);
    $stats = str_split($sub_data, 3);

    //echo "<tr><td>Fuel Level</td><td>";
    $stats[0] = ltrim($stats[0], '0');
    if ($stats[0] == '') {
        $stats[0] = "0";
    }
    $array[] = $stats[0];    //9

    //echo "<tr><td>Site Batt. Volt.</td><td>";
    $stats[1] = substr_replace($stats[1], ".", 2, 0);
    $stats[1] = ltrim($stats[1], '0');
    if ($stats[1][0] == '.')
        $stats[1] = "0" . $stats[1];

    $array[] = $stats[1];    //10

    //echo "<tr><td>Output Current Amp</td><td>";

    // $stats[2] = substr_replace($stats[2], ".", 2, 0);
    // $stats[2] = ltrim($stats[2], '0');
    // if ($stats[2][0] == '.')
    //     $stats[2] = "0" . $stats[2];

    $stats[2] = ltrim($stats[2], '0');
    if ($stats[2] == '')
        $stats[2] = "0";

    $array[] = $stats[2];    //11


    for ($i = 3; $i < 5; $i++) {
        $stats[$i] = substr_replace($stats[$i], ".", 2, 0);
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.')
            $stats[$i] = "0" . $stats[$i];
    }

    //echo "<tr><td>Mains Freq.</td><td>";
    $array[] = $stats[3];    //12

    //echo "<tr><td>DG Freq.</td><td>";
    $array[] = $stats[4];    //13

    for ($i = 5; $i < 12; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    //echo "<tr><td>DG Volt.</td><td>";
    $array[] = $stats[5];    //14

    //echo "<tr><td>PIU O/P 1 volt.</td><td>";
    $array[] = $stats[6];    //15

    //echo "<tr><td>PIU O/P 2 volt.</td><td>";
    $array[] = $stats[7];    //16

    //echo "<tr><td>O/P 3 volt.</td><td>";
    $array[] = $stats[8];    //17

    //echo "<tr><td>I/P Mains volt 1</td><td>";
    $array[] = $stats[9];    //18

    //echo "<tr><td>I/P Mains volt 2</td><td>";
    $array[] = $stats[10];    //19

    //echo "<tr><td>I/P Mains volt 3</td><td>";
    $array[] = $stats[11];    //20

    $sub_data = substr($data_raw, 79, 56); //7
    $stats = str_split($sub_data, 8);

    for ($i = 0; $i < 7; $i++) {
        $stats[$i] = substr_replace($stats[$i], ".", 7, 0);
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.')
            $stats[$i] = "0" . $stats[$i];
    }

    $array[] = $stats[0];    //21
    $array[] = $stats[1];    //22
    $array[] = $stats[2];    //23
    $array[] = $stats[3];    //24
    $array[] = $stats[4];    //25
    $array[] = $stats[5];    //26
    $array[] = $stats[6];    //27

    $sub_data = substr($data_raw, 135, 4); //2
    $stats = str_split($sub_data, 2);

    $array[] = $stats[0];    //28
    $array[] = $stats[1];    //29

    $sub_data = substr($data_raw, 139, 24); //18
    $stats = str_split($sub_data, 8);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $array[] = $stats[0];    //30
    $array[] = $stats[1];    //31

    $stats[2] = substr_replace($stats[2], ".", 7, 0);
    $stats[2] = ltrim($stats[2], '0');
    if ($stats[2][0] == '.')
        $stats[2] = "0" . $stats[2];

    $array[] = $stats[2];    //32


    $sub_data = substr($data_raw, 163, 15); //18
    $stats = str_split($sub_data, 5);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $array[] = $stats[0];    //33
    $array[] = $stats[1];    //34

    $stats[2] = substr_replace($stats[2], ".", 7, 0);
    $stats[2] = ltrim($stats[2], '0');
    if ($stats[2][0] == '.')
        $stats[2] = "0" . $stats[2];

    $array[] = $stats[2] / 10;    //35


    $sub_data = substr($data_raw, 178, 8); //18
    $stats = str_split($sub_data, 8);

    $stats[0] = substr_replace($stats[0], ".", 7, 0);
    $stats[0] = ltrim($stats[0], '0');
    if ($stats[0][0] == '.')
        $stats[0] = "0" . $stats[0];

    $array[] = $stats[0];    //36


    $sub_data = substr($data_raw, 186, 15); //18
    $stats = str_split($sub_data, 5);

    for ($i = 0; $i < 3; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $array[] = $stats[0];    //37

    $embedded_array = [];

    $embedded_array[] = $stats[1];    //38-0
    $embedded_array[] = $stats[2];    //39  38-1


    $sub_data = substr($data_raw, 201, 8); //18
    $stats = str_split($sub_data, 8);

    $stats[0] = substr_replace($stats[0], ".", 7, 0);
    $stats[0] = ltrim($stats[0], '0');
    if ($stats[0][0] == '.')
        $stats[0] = "0" . $stats[0];

    $embedded_array[] = $stats[0];    //40  38-2


    $sub_data = substr($data_raw, 209, 15); //18
    $stats = str_split($sub_data, 5);

    for ($i = 0; $i < 3; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //41  38-3
    $embedded_array[] = $stats[1];    //42  38-4
    $embedded_array[] = $stats[2];    //43  38-5


    $sub_data = substr($data_raw, 224, 8); //18
    $stats = str_split($sub_data, 8);

    $stats[0] = substr_replace($stats[0], ".", 7, 0);
    $stats[0] = ltrim($stats[0], '0');
    if ($stats[0][0] == '.')
        $stats[0] = "0" . $stats[0];

    $embedded_array[] = $stats[0];    //44  38-6


    $sub_data = substr($data_raw, 232, 20); //18
    $stats = str_split($sub_data, 5);

    for ($i = 0; $i < 4; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //45  38-7
    $embedded_array[] = $stats[1];    //46  38-8
    $embedded_array[] = $stats[2];    //47  38-9
    $embedded_array[] = $stats[3];    //48  38-10


    $sub_data = substr($data_raw, 252, 3); //18
    $stats = str_split($sub_data, 3);

    $stats[0] = ltrim($stats[0], '0');
    if ($stats[0] == '') {
        $stats[0] = "0";
    }

    $embedded_array[] = $stats[0];    //49  38-11


    $sub_data = substr($data_raw, 255, 20); //18
    $stats = str_split($sub_data, 20);

    $embedded_array[] = $stats[0];    //50  38-12


    $sub_data = substr($data_raw, 275, 108); //18
    $stats = str_split($sub_data, 18);

    $embedded_array[] = $stats[0];    //51  38-13
    $embedded_array[] = $stats[1];    //52  38-14
    $embedded_array[] = $stats[2];    //53  38-15
    $embedded_array[] = $stats[3];    //54  38-16
    $embedded_array[] = $stats[4];    //55  38-17
    $embedded_array[] = $stats[5];    //56  38-18


    $sub_data = substr($data_raw, 383, 3); //18
    $stats = str_split($sub_data, 3);

    $stats[0] = substr_replace($stats[0], ".", 2, 0);
    $stats[0] = ltrim($stats[0], '0');
    if ($stats[0][0] == '.')
        $stats[0] = "0" . $stats[0];

    $embedded_array[] = $stats[0];    //57  38-19


    $sub_data = substr($data_raw, 386, 4); //18
    $stats = str_split($sub_data, 4);

    $stats[0] = substr_replace($stats[0], ".", 3, 0);
    $stats[0] = ltrim($stats[0], '0');
    if ($stats[0][0] == '.')
        $stats[0] = "0" . $stats[0];

    $embedded_array[] = $stats[0];    //58  38-20


    $sub_data = substr($data_raw, 390, 12); //18
    $stats = str_split($sub_data, 3);

    for ($i = 0; $i < 3; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //59  38-21
    $embedded_array[] = $stats[1];    //60  38-22
    $embedded_array[] = $stats[2];    //61  38-23


    $sub_data = substr($data_raw, 404, 16); //18
    $stats = str_split($sub_data, 8);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //62  38-24
    $embedded_array[] = $stats[1];    //63  38-25


    $sub_data = substr($data_raw, 420, 3); //18
    $stats = str_split($sub_data, 3);

    for ($i = 0; $i < 1; $i++) {
        $stats[$i] = substr_replace($stats[$i], ".", 2, 0);
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.')
            $stats[$i] = "0" . $stats[$i];
    }

    $embedded_array[] = $stats[0];    //64  38-26


    $sub_data = substr($data_raw, 423, 4); //18
    $stats = str_split($sub_data, 4);

    for ($i = 0; $i < 1; $i++) {
        $stats[$i] = substr_replace($stats[$i], ".", 3, 0);
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.')
            $stats[$i] = "0" . $stats[$i];
    }

    $embedded_array[] = $stats[0];    //65  38-27


    $sub_data = substr($data_raw, 427, 9); //18
    $stats = str_split($sub_data, 3);

    for ($i = 0; $i < 3; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //66  38-28
    $embedded_array[] = $stats[1];    //67  38-29
    $embedded_array[] = $stats[2];    //68  38-30


    $sub_data = substr($data_raw, 436, 5); //18
    $stats = str_split($sub_data, 5);

    for ($i = 0; $i < 1; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //69  38-31


    $sub_data = substr($data_raw, 441, 16); //18
    $stats = str_split($sub_data, 8);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //70  38-32
    $embedded_array[] = $stats[1];    //71  38-33


    $sub_data = substr($data_raw, 457, 3); //18
    $stats = str_split($sub_data, 3);

    for ($i = 0; $i < 1; $i++) {
        $stats[$i] = substr_replace($stats[$i], ".", 2, 0);
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.')
            $stats[$i] = "0" . $stats[$i];
    }

    $embedded_array[] = $stats[0];    //72  38-34


    $sub_data = substr($data_raw, 460, 4); //18
    $stats = str_split($sub_data, 4);

    for ($i = 0; $i < 1; $i++) {
        $stats[$i] = substr_replace($stats[$i], ".", 3, 0);
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.')
            $stats[$i] = "0" . $stats[$i];
    }

    $embedded_array[] = $stats[0];    //73  38-35


    $sub_data = substr($data_raw, 464, 9); //18
    $stats = str_split($sub_data, 3);

    for ($i = 0; $i < 3; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //74  38-36
    $embedded_array[] = $stats[1];    //75  38-37
    $embedded_array[] = $stats[2];    //76  38-38


    $sub_data = substr($data_raw, 473, 5); //18
    $stats = str_split($sub_data, 5);

    for ($i = 0; $i < 1; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //77  38-39


    $sub_data = substr($data_raw, 478, 16); //18
    $stats = str_split($sub_data, 8);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //78  38-40
    $embedded_array[] = $stats[1];    //79  38-41


    $sub_data = substr($data_raw, 494, 3); //18
    $stats = str_split($sub_data, 3);

    for ($i = 0; $i < 1; $i++) {
        $stats[$i] = substr_replace($stats[$i], ".", 2, 0);
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.')
            $stats[$i] = "0" . $stats[$i];
    }

    $embedded_array[] = $stats[0];    //80  38-42


    $sub_data = substr($data_raw, 497, 4); //18
    $stats = str_split($sub_data, 4);

    for ($i = 0; $i < 1; $i++) {
        $stats[$i] = substr_replace($stats[$i], ".", 3, 0);
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.')
            $stats[$i] = "0" . $stats[$i];
    }

    $embedded_array[] = $stats[0];    //81  38-43


    $sub_data = substr($data_raw, 501, 9); //18
    $stats = str_split($sub_data, 3);

    for ($i = 0; $i < 3; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //82  38-44
    $embedded_array[] = $stats[1];    //83  38-45
    $embedded_array[] = $stats[2];    //84  38-46


    $sub_data = substr($data_raw, 510, 5); //18
    $stats = str_split($sub_data, 5);

    for ($i = 0; $i < 1; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //85  38-47


    $sub_data = substr($data_raw, 515, 16); //18
    $stats = str_split($sub_data, 8);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //86  38-48
    $embedded_array[] = $stats[1];    //87  38-49


    $sub_data = substr($data_raw, 531, 3); //18
    $stats = str_split($sub_data, 3);

    for ($i = 0; $i < 1; $i++) {
        $stats[$i] = substr_replace($stats[$i], ".", 2, 0);
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.')
            $stats[$i] = "0" . $stats[$i];
    }

    $embedded_array[] = $stats[0];    //88  38-50


    $sub_data = substr($data_raw, 534, 4); //18
    $stats = str_split($sub_data, 4);

    for ($i = 0; $i < 1; $i++) {
        $stats[$i] = substr_replace($stats[$i], ".", 3, 0);
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.')
            $stats[$i] = "0" . $stats[$i];
    }

    $embedded_array[] = $stats[0];    //89  38-51


    $sub_data = substr($data_raw, 538, 9); //18
    $stats = str_split($sub_data, 3);

    for ($i = 0; $i < 3; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //90  38-52
    $embedded_array[] = $stats[1];    //91  38-53
    $embedded_array[] = $stats[2];    //92  38-54


    $sub_data = substr($data_raw, 547, 5); //18
    $stats = str_split($sub_data, 5);

    for ($i = 0; $i < 1; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //93  38-55


    $sub_data = substr($data_raw, 552, 16); //18
    $stats = str_split($sub_data, 8);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //94  38-56
    $embedded_array[] = $stats[1];    //95  38-57


    $sub_data = substr($data_raw, 568, 3); //18
    $stats = str_split($sub_data, 3);

    for ($i = 0; $i < 1; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //96  38-58


    $sub_data = substr($data_raw, 571, 4); //18
    $stats = str_split($sub_data, 4);

    for ($i = 0; $i < 1; $i++) {
        $stats[$i] = substr_replace($stats[$i], ".", 3, 0);
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i][0] == '.')
            $stats[$i] = "0" . $stats[$i];
    }

    $embedded_array[] = $stats[0];    //97  38-59


    $sub_data = substr($data_raw, 575, 9); //18
    $stats = str_split($sub_data, 3);

    for ($i = 0; $i < 3; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //98  38-60
    $embedded_array[] = $stats[1];    //99  38-61
    $embedded_array[] = $stats[2];    //100 38-62


    $sub_data = substr($data_raw, 584, 5); //18
    $stats = str_split($sub_data, 5);

    for ($i = 0; $i < 1; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //101 38-63


    $sub_data = substr($data_raw, 589, 16); //18
    $stats = str_split($sub_data, 8);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //102 38-64
    $embedded_array[] = $stats[1];    //103 38-65


    $sub_data = substr($data_raw, 589, 16); //18
    $stats = str_split($sub_data, 8);

    for ($i = 0; $i < 2; $i++) {
        $stats[$i] = ltrim($stats[$i], '0');
        if ($stats[$i] == '') {
            $stats[$i] = "0";
        }
    }

    $embedded_array[] = $stats[0];    //104 38-66


    $sub_data = substr($data_raw, 605, 48); //18
    $stats = str_split($sub_data, 4);

    $embedded_array[] = $stats[0];    //105 38-67
    $embedded_array[] = $stats[1];    //106 38-68
    $embedded_array[] = $stats[2];    //107 38-69
    $embedded_array[] = $stats[3];    //108 38-70
    $embedded_array[] = $stats[4];    //109 38-71
    $embedded_array[] = $stats[5];    //110 38-72
    $embedded_array[] = $stats[6];    //111 38-73
    $embedded_array[] = $stats[7];    //112 38-74
    $embedded_array[] = $stats[8];    //113 38-75
    $embedded_array[] = $stats[9];    //113 38-76
    $embedded_array[] = $stats[10];    //114    38-77
    $embedded_array[] = $stats[11];    //115    38-78

    // STATUS STRING
    $sub_data = substr($data_raw, 33, 4); //18
    $stats = str_split($sub_data, 4);

    $embedded_array[] = $stats[0];    //   38-79

    // Server side calculation

    // Current = (Output Current Amp / SITE BATT VOLTAGE) * 1000
    $embedded_array[] = $array[10] > 0 ? round($array[11] / $array[10] * 1000, 1) : 0; //   38-80

    /*
        Total Load Current (Amp.) 
        = (
            (Opco1 Actual power) 
            + (Opco2 Actual power) 
            + (Opco3 Actual power) 
            + (Opco4 Actual power)
        ) / SITE BATT VOLTAGE 
    */
    $embedded_array[]
        = $array[10] > 0
        ? round(($embedded_array[1] + $embedded_array[5] + $embedded_array[9] + $embedded_array[10]) / $array[10], 1)
        : 0;  //   38-81

    $array[] = $embedded_array;

    return $array;
}

function GetDeviceDataParser($array, $data, $data_raw)
{
    if ($data[6] == 1) {
        //$data_validated
        //	0 - Not Validated
        //	1 - Single DG
        //	2 - Double DG
        if ($data[2] == 2) {    //Double DG
            $array = DeviceGetDataDouble($array, $data_raw);
        } else {
            $array = DeviceGetData($array, $data_raw);
        }
    } elseif ($data[6] == 2) {    //2 = Solar
        if ($data[2] == 1) {
            //if($data[37] == 3)
            //{
            $array = DeviceGetDataDevice3($array, $data_raw);
            for ($i = 26; $i < 39; $i++) {
                $array[$i] = "";
            }
            //}
        } else {
            $array = DeviceGetDataDevice2($array, $data_raw);
        }
    } elseif ($data[6] == 3) {
        // Double DG Solar
        if ($data[2] == 3) {
            $array = DeviceGetDataDoubleSolar($array, $data_raw);
        }
    } elseif ($data[6] == 16) {    //Phase 2
        $array = DeviceGetData($array, $data_raw); //DeviceGetDataDevicePhase2($data_raw));
    } elseif ($data[6] == 32) {
        $array = DeviceGetDataDoubleBattery($array, $data_raw);
        for ($i = 21; $i < 39; $i++) {
            $array[$i] = "";
        }
    } else if ($data[6] == 118) {
        $array = DeviceGetDataAirtelV118($array, $data_raw);
    } else if ($data[6] == 120) {
        $array = DeviceGetDataAirtelV120($array, $data_raw);
    } else if ($data[6] == 50 || $data[6] == 51) {
        $array = DeviceGetDataAirtelV50($array, $data_raw);
    }

    return $array;
}

//////////**// */
function GetDeviceRecordsFromDateRange($site_id, $start_date_time, $end_date_time)
{
    if ($start_date_time == null) {
        return null;
    }
    if ($end_date_time == null) {
        return null;
    }

    $sql_sdt = "\"" . $start_date_time . "\"";
    $sql_edt = "\"" . $end_date_time . "\"";

    // Swapping if dates are opposite
    if ($sql_sdt > $sql_edt) {
        $tmp_dt = $sql_sdt;
        $sql_sdt = $sql_edt;
        $sql_edt = $tmp_dt;
    }

    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $order = "SELECT 
			a.ID, 
            a.timestamp, 
            a.data_validated, 
            a.type, 
            a.site_id, 
            a.date_time, 
            a.device_id, 
            a.status, 
            a.raw_data
		FROM quanta a
		WHERE a.site_id = \"$site_id\" 
            AND a.date_time BETWEEN $sql_sdt AND $sql_edt";

    // echo "order:" . $order . "<br /><br /><br />";

    //$order = "SELECT * FROM quanta where id=".$id;
    $records = [];
    $result = $mysqli->query($order);
    while ($data = $result->fetch_row()) {
        //var_dump($data);
        $array = [];

        $array[]     = $data[0];        //0Unique Id
        $array[]     = $data[1];        //1Time Stamp by Server
        $array[]     = $data[2];        //2Validated by Server
        $array[]     = $data[3];        //3Type 0 - Periodic / 1 - Fault
        $array[]     = $data[4];        //4String Site Id
        $array[]     = $data[5];        //5Date Time by Device
        $array[]     = $data[6];        //6Device Id/ Only 1, 2 & 32 known for now
        $array[]     = $data[7];        //7Status Bits - To Expand
        $data_raw    = $data[8];        //Raw Data, for device specific information

        //var_dump($array);
        //$array = array_merge($array, DeviceGetStatusBits($data[7]));
        //var_dump($array);

        $records[] = GetDeviceDataParser($array, $data, $data_raw);
    }

    $result->close();
    mysqli_close($mysqli);

    //var_dump($array);

    return $records;
}

function GetDeviceRecordFromId($id)
{
    $array = array();

    include 'dbinc.php';


    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    //$sql = 'SELECT a.tutorial_id, a.tutorial_author, b.tutorial_count
    //	FROM tutorials_tbl a, tcount_tbl b
    //	WHERE a.tutorial_author = b.tutorial_author';

    $order = "SELECT 
			a.ID, a.timestamp , a.data_validated , a.type , a.site_id , a.date_time , a.device_id , a.status , a.raw_data,  
			b.ClusterId, b.DeviceName, b.DeviceMake, b.Circle, b.SiteName, b.District, b.mobile, b.Longitude, b.Latitude, b.SiteIndoorType,  b.DG_KVA, b.SAM_Name, b.SAM_Number, b.AM_Name, b.AM_Number, b.Tech_Name,  b.Tech_Number, b.Comments,
			c.name,
			b.date_of_installation, b.DG_make, b.EB_capacity, b.EB_phase, b.battery_AH, b.battery_qty, b.battery_make, 
			b.DG2_KVA, b.DG2_MAKE, b.site_type, b.Id, b.CustomerId
			
		FROM quanta a, siteinfo b, clusters c
		WHERE (a.site_id = b.site_id) AND (b.ClusterId = c.Id) AND a.id=" . $id;

    // echo "order:" . $order . "<br />";

    //$order = "SELECT * FROM quanta where id=".$id;
    $result = $mysqli->query($order);
    $data = null;

    if (!($data = $result->fetch_row())) return null;

    //var_dump($data);

    $array[]     = $data[0];        //0Unique Id
    $array[]     = $data[1];        //1Time Stamp by Server
    $array[]     = $data[2];        //2Validated by Server
    $array[]     = $data[3];        //3Type 0 - Periodic / 1 - Fault
    $array[]     = $data[4];        //4String Site Id
    $array[]     = $data[5];        //5Date Time by Device
    $array[]     = $data[6];        //6Device Id/ Only 1, 2 & 32 known for now
    $array[]     = $data[7];        //7Status Bits - To Expand
    $data_raw    = $data[8];        //Raw Data, for device specific information

    //var_dump($array);
    //$array = array_merge($array, DeviceGetStatusBits($data[7]));
    //var_dump($array);

    $array = GetDeviceDataParser($array, $data, $data_raw);

    $array[]    = $data[9];     //39 ClusterId
    $array[]    = $data[10];    //40 DeviceName
    $array[]    = $data[11];    //41 DeviceMake
    $array[]    = $data[12];    //42 Circle
    $array[]    = $data[13];    //43 SiteName
    $array[]    = $data[14];    //44 District
    $array[]    = $data[15];    //45 Site Mobile
    $array[]    = $data[16];    //46 Longitude

    $array[]    = $data[17];    //47 Latitude
    $array[]    = $data[18];    //48 SiteIndoorType
    $array[]    = $data[19];    //49 DG_KVA
    $array[]    = $data[20];    //50 SAM_Name
    $array[]    = $data[21];    //51 SAM_Number
    $array[]    = $data[22];    //52 AM_Name
    $array[]    = $data[23];    //53 AM_Number
    $array[]    = $data[24];    //54 Tech_Name
    $array[]    = $data[25];    //55 Tech_Number

    $array[]    = $data[28];    //56 date_of_installation
    $array[]    = $data[29];    //57 DG_make
    $array[]    = $data[30];    //58 EB_capacity
    $array[]    = $data[31];    //59 EB_phase
    $array[]    = $data[32];    //60 battery_AH
    $array[]    = $data[33];    //61 battery_qty
    $array[]    = $data[34];    //62 battery_make

    $array[]    = $data[35];    //63 DG2_KVA
    $array[]    = $data[36];    //64 DG2_MAKE
    $array[]    = $data[37];    //65 site_type
    $array[]    = $data[38];    //66 siteId
    $array[]    = $data[39];    //67 CustomerId


    $result->close();
    mysqli_close($mysqli);

    //var_dump($array);

    return $array;
}

function AddUp($array, $sum)
{
    $array1 = array();

    if ($sum == null) {
        $array1[]    = abs($array[10]);
        $array1[]    = abs($array[11]);
        $array1[]    = abs($array[12]);
        $array1[]    = abs($array[13]);
        $array1[]    = abs($array[17]);
        $array1[]    = abs($array[18]);
        $array1[]    = abs($array[19]);
        $array1[]    = abs($array[20]);
        $array1[]    = abs($array[25]);
        $array1[]    = abs($array[26]);

        //var_dump($array);
    } else {
        $array1[]    = abs($array[10]) + $sum[0];
        $array1[]    = abs($array[11]) + $sum[1];
        $array1[]    = abs($array[12]) + $sum[2];
        $array1[]    = abs($array[13]) + $sum[3];
        $array1[]    = abs($array[17]) + $sum[4];
        $array1[]    = abs($array[18]) + $sum[5];
        $array1[]    = abs($array[19]) + $sum[6];
        $array1[]    = abs($array[20]) + $sum[7];
        $array1[]    = abs($array[25]) + $sum[8];
        $array1[]    = abs($array[26]) + $sum[9];

        //var_dump($array);
        //var_dump($sum);
    }


    return $array1;
}


function DisplayEntryType1Header()
{
    echo ("<table class='table table-striped table-condensed table-responsive'>");

    echo ("<tr>
                    <thead>
					<th>Type</th>
					<th>Date Time</th>
					<th>Status</th>
					<th>Device Id</th>
					<th>Room/Ambient Temperature</th>
					<th>Fuel Level</th>
					<th>Fuel Data</th>
					<th>Site Battery bank Voltage</th>
					<th>R-Phase current</th>
					<th>Y-Phase current</th>
					<th>B-Phase current</th>
					<th>Mains Frequency</th>
					<th>DG frequency</th>
					<th>DG-R phase Voltage</th>
					<th>DG-Y phase Voltage</th>
					<th>DG-B phase Voltage</th>
					<th>LCU1 Output Voltage</th>
					<th>LCU2 Output Voltage</th>
					<th>LCU3 Output Voltage</th>
					<th>Input Mains Voltage - R Phase</th>
					<th>Input Mains Voltage - Y Phase</th>
					<th>Input Mains Voltage - B Phase</th>
					<th>DG Running Hours</th>
					<th>Mains RUN HOURS</th>
					<th>Battery RUN HOURS</th>
					<th>O/P Mains Energy</th>
					<th>DG Energy</th>
					<th>I/P Mains Energy</th>
					<th>DG Battery Voltage</th>
					<th>Battery Charging Current</th>
					<th>Battery Discharging Current</th>
					<th>Battery Status</th>
					<th>Battery Back Up Time</th>
					<th>Battery Charging Energy</th>
					<th>Battery Discharging Energy</th>
				</thead></tr><tbody>");
}

function DisplayEntryTypeSolarHeader()
{
    echo ("<table class='table table-striped table-condensed table-responsive'>");

    echo ("<tr><thead>
					
					<th>Type</th>
					<th>Date Time</th>
					<th>Status</th>
					<th>Device Id</th>
					
					<th>Room/Ambient Temperature</th>
					<th>Solar array 1 Voltage</th>
					<th>Solar array 2 Voltage</th>
					<th>Solar array 3 Voltage</th>
					<th>Array 1 current</th>
					<th>Array 2 current</th>
					<th>Array 3 current</th>
					<th>R-Phase current</th>
					<th>Y-Phase current</th>
					<th>B-Phase current</th>
					<th>Inverter Frequency</th>
					<th>Inverter R-Phase Voltage</th>
					<th>Inverter Y-Phase Voltage</th>
					<th>Inverter B-Phase Voltage</th>
					<th>Solar Run Hours</th>
					<th>Inverter Run Hours</th>
					<th>Solar + Inverter Run Hours</th>
					<th>Inverter Energy</th>
					<th>Solar Energy</th>
					
					<th>Battery Bank Voltage</th>
					<th>Battery Charging Current</th>
					<th>Battery Discharging Current</th>
					<th>Battery Status</th>
					<th>Battery Charging Energy</th>
					<th>Battery Discharging Energy</th>
				</thead></tr><tbody>");
}

function DisplayEntryType1DoubleDGHeader()
{
    echo ("<table class='table table-striped table-condensed table-responsive'>");

    echo ("<tr><thead>
					<th>#</th>
					<th>Site Id</th>

					<th>Type</th>
					<th>Date Time</th>
					<th>Status</th>
					<th>Device Id</th>
					
					<th>Room/Ambient Temperature</th>
					<th>Fuel Level</th>
					<th>Fuel Data</th>
					<th>Site Battery bank Voltage</th>
					<th>R-Phase current</th>
					<th>Y-Phase current</th>
					<th>B-Phase current</th>
					<th>Mains Frequency</th>
					<th>DG1 frequency</th>
					<th>DG1-R phase Voltage</th>
					<th>DG1-Y phase Voltage</th>
					<th>DG1-B phase Voltage</th>
					<th>LCU1 Output Voltage</th>
					<th>LCU2 Output Voltage</th>
					<th>LCU3 Output Voltage</th>
					<th>Input Mains Voltage - R Phase</th>
					<th>Input Mains Voltage - Y Phase</th>
					<th>Input Mains Voltage - B Phase</th>
					<th>DG1 Running Hours</th>
					<th>Mains RUN HOURS</th>
					<th>Battery RUN HOURS</th>
					<th>O/P Mains Energy</th>
					<th>DG1 Energy</th>
					<th>I/P Mains Energy</th>
					<th>DG1 Battery Voltage</th>
					<th>Battery Charging Current</th>
					<th>Battery Discharging Current</th>
					<th>Battery Status</th>
					<th>Battery Back Up Time</th>
					<th>Battery Charging Energy</th>
					<th>Battery Discharging Energy</th>
					
					<th>DG2 frequency</th>
					<th>DG2-R phase Voltage VAC</th>
					<th>DG2-Y phase Voltage VAC</th>
					<th>DG2-B phase Voltage VAC</th>
					<th>DG2 Running Hours Hrs</th>
					<th>DG2 Energy Kwh</th>
					<th>DG2 Battery Voltage VDC</th>
					<th>Fuel Level of DG2 %</th>
					<th>Fuel data of DG2 liter</th>
					
				</thead></tr><tbody>");
}

function DisplayEntryType1DoubleDGSolarHeader()
{
    echo ("<table class='table table-striped table-condensed table-responsive'>");

    echo ("<tr><thead>
					<th>#</th>
					<th>Site Id</th>

					<th>Type</th>
					<th>Date Time</th>
					<th>Status</th>
					<th>Device Id</th>
					
					<th>Room/Ambient Temperature</th>
					<th>Fuel Level</th>
					<th>Fuel Data</th>
					<th>Site Battery bank Voltage</th>
					<th>R-Phase current</th>
					<th>Y-Phase current</th>
					<th>B-Phase current</th>
					<th>Mains Frequency</th>
					<th>DG1 frequency</th>
					<th>DG1-R phase Voltage</th>
					<th>DG1-Y phase Voltage</th>
					<th>DG1-B phase Voltage</th>
					<th>LCU1 Output Voltage</th>
					<th>LCU2 Output Voltage</th>
					<th>LCU3 Output Voltage</th>
					<th>Input Mains Voltage - R Phase</th>
					<th>Input Mains Voltage - Y Phase</th>
					<th>Input Mains Voltage - B Phase</th>

					<th>DG1 Running Hours</th>
					<th>Mains RUN HOURS</th>
					<th>Battery RUN HOURS</th>
					<th>O/P Mains Energy</th>
					<th>DG1 Energy</th>
					<th>I/P Mains Energy</th>

					<th>DG1 Battery Voltage</th>
					<th>Battery Charging Current</th>
					<th>Battery Discharging Current</th>

					<th>Battery Status</th>
					<th>Battery Back Up Time</th>

					<th>Battery Charging Energy</th>
					<th>Battery Discharging Energy</th>
					
					<th>DG2 frequency</th>
					<th>DG2-R phase Voltage VAC</th>
					<th>DG2-Y phase Voltage VAC</th>
					<th>DG2-B phase Voltage VAC</th>

					<th>DG2 Running Hours Hrs</th>
					<th>DG2 Energy Kwh</th>

					<th>DG2 Battery Voltage VDC</th>
					<th>Fuel Level of DG2 %</th>
					<th>Fuel data of DG2 liter</th>
					<th>PV Voltage</th>
					<th>PV Current</th>

					<th>PV Running Hours</th>
					<th>PV Energy Kwh</th>
					
				</thead></tr><tbody>");
}

function DisplayEntryType2Header()
{
    echo ("<table class='table table-hover table-condensed table-responsive'>");

    echo ("<tr><thead>
					<th>SITE NAME</th>
					<th>SITE ID</th>
					<th>Circle</th>
					<th>Cluster</th>
					
					<th>Make</th>
					<th>AM NAME</th>
					<th>Mob no.</th>
					
					<th>Date Time</th>
					<th>Interval</th>
					

					<th>DG Running Hours</th>
					<th>Mains RUN HOURS</th>
					<th>Battery RUN HOURS</th>

					<th>Generator Start</th>
					<th>Generator Stop</td>
				</thead></tr><tbody>");
}
function DisplayEntryTypeDoubleBatteryHeader()
{
    echo ("<table class='table table-striped table-condensed table-responsive'>");

    echo ("<tr><thead>
					<th>#</th>
					<th>Site Id</th>

					<th>Type</th>
					<th>Date Time</th>
					<th>Status</th>
					<th>Device Id</th>
					<th>Room/Ambient Temperature</th>
					<th>Site Battery bank Voltage</th>
					<th>Site Battery bank Voltage</th>
					<th>Load Current</th>
					<th>Mains Voltage</th>
					
					<th>DG Voltage</th>
					<th>Input Mains Voltage B Phase</th>
					<th>Battery1 Charging Current</th>
					<th>Battery1 Discharging Current</th>
					<th>Battery2 Charging Current</th>
					<th>Battery2 Discharging Current</th>
					<th>Battery1 Status</th>
					<th>Battery2 Status</th>
					
				</thead></tr><tbody>");
}

function DisplayEntryType3Header()
{
    echo ("<table class='table table-striped table-condensed table-responsive'>");

    echo ("<tr><thead>
					<th>#</th>
					<th>Site Id</th>
					<th>Type</th>
					<th>Date Time</th>
					<th>Status</th>
					<th>Device Id</th>
					<th>Room/Ambient Temperature</th>
					<th>Site Battery bank Voltage</th>
					<th>Site Battery bank Voltage</th>
					<th>Total Load Current</th>
					<th>Mains Voltage-R Phase</th>
					<th>Mains Voltage-Y Phase</th>
					<th>Mains Voltage-B Phase</th>
					<th>Battery 1 Charging Current</th>
					<th>Battery 1 Discharging Current</th>
					<th>Battery 2 Charging Current</th>
					<th>Battery 2 Discharging Current</th>
					<th>Battery 1 Status</th>
					<th>Battery 2 Status</th>					
					<th>Mains Energy</th>
					<th>Battery#1 CHG Energy</th>
					<th>Battery#1 DISCHG Energy</th>
					<th>Battery#2 CHG Energy</th>
					<th>Battery#2 DISCHG Energy</th>
				</thead></tr><tbody>");
}

function DisplayEntryTypeHeaderAirtelV118()
{
    echo ("<table class='table table-striped table-condensed table-responsive'>");

    echo ("<tr><thead>
					<th>#</th>
					<th>S/W Ver.</th>
					<th>Site ID</th>
					<th>Date Time</th>
					<th>Alarm</th>

					<th>Room Temperature DEG C</th>
					<th>Fuel Level %</th>
					<th>Site Battery Voltage VDC</th>
					<th>Output current</th>
					<th>Mains Frequency</th>
					<th>DG frequency</th>
					<th>DG Voltage VAC</th>
					<th>PIU O/P1 Voltage VAC</th>
					<th>PIU O/P2 Voltage VAC</th>
                    <th>O/P3 Voltage VAC</th>
                    <th>I/P Mains Voltage 1 VAC</th>
                    <th>I/P Mains Voltage 2 VAC</th>
                    <th>I/P Mains Voltage 3 VAC</th>
                    <th>Down Counter of Site 1 Hrs</th>
                    <th>Down Counter of Site 2 Hrs</th>
                    <th>Down Counter of Site 3 Hrs</th>
                    <th>Down Counter of Site 4 Hrs</th>
                    <th>DG Run Hours Hrs</th>
                    <th>Mains Run Hours Hrs</th>
                    
                    <th>Batt Run Hours Hrs</th>
                    <th>System Status</th>
                    <th>DG Fault Status</th>
                    
                    <th>DG Energy Kwh</th>
                    <th>I/P Mains Energy Kwh</th>
                    
                    <th>CH1 DCEM1</th>
                    <th>CH2 DCEM1</th>
                    <th>CH3 DCEM1</th>
                    <th>CH4 DCEM1</th>
                    
                    <th>CH1 DCEM2</th>
                    <th>CH2 DCEM2</th>
                    <th>CH3 DCEM2</th>
                    <th>CH4 DCEM2</th>
                    
                    <th>CH1 DCEM3</th>
                    <th>CH2 DCEM3</th>
                    <th>CH3 DCEM3</th>
                    <th>CH4 DCEM3</th>
                    
                    <th>CH1 DCEM4</th>
                    <th>CH2 DCEM4</th>
                    <th>CH3 DCEM4</th>
                    <th>CH4 DCEM4</th>

                    <th>BTS Status</th>
					
				</thead></tr><tbody>");
}

function DisplayEntryTypeHeaderAirtelV120()
{
    echo ("<table class='table table-striped table-condensed table-responsive'>");

    echo ("<tr><thead>
					<th>#</th>
					<th>S/W Ver.</th>
					<th>Site ID</th>
					<th>Date Time</th>
					<th>Alarm</th>

					<th>Room Temperature DEG C</th>
					<th>Solar Voltage</th>
					<th>Site Battery Voltage VDC</th>
					<th>Output current</th>
					<th>Mains Frequency</th>
					<th>DG frequency</th>
					<th>DG Voltage VAC</th>
					<th>PIU O/P1 Voltage VAC</th>
					<th>PIU O/P2 Voltage VAC</th>
                    <th>O/P3 Voltage VAC</th>
                    <th>I/P Mains Voltage 1 VAC</th>
                    <th>I/P Mains Voltage 2 VAC</th>
                    <th>I/P Mains Voltage 3 VAC</th>
                    <th>Down Counter of Site 1 Hrs</th>
                    <th>Down Counter of Site 2 Hrs</th>
                    <th>Down Counter of Site 3 Hrs</th>
                    <th>Down Counter of Site 4 Hrs</th>
                    <th>DG Run Hours Hrs</th>
                    <th>Mains Run Hours Hrs</th>
                    
                    <th>Batt Run Hours Hrs</th>
                    <th>System Status</th>
                    <th>DG Fault Status</th>
                    
                    <th>DG Energy Kwh</th>
                    <th>I/P Mains Energy Kwh</th>
                    
                    <th>DCEM1</th>
                    <th>DCEM2</th>
                    <th>DCEM3</th>
                    <th>DCEM4</th>
                    <th>DCEM5</th>
                    <th>DCEM6</th>
                    
                    <th>Solar KWH</th>
                    <th>Solar Run hours</th>                    
                    <th>Solar + EB run hours</th>
                    <th>Solar + DG run hours</th>
                    <th>Solar + BB run hours</th>

                    <th>xxxxxxxx</th>
                    <th>xxxxxxxx</th>
                    <th>xxxxxxxx</th>
                    <th>xxxxxxxx</th>
                    <th>xxxxxxxx</th>

                    <th>Solar Current</th>
                    <th>Solar Alarm</th>
					
				</thead></tr><tbody>");
}

function DisplayEntryTypeHeaderAirtelV50()
{
    echo ("<table class='table table-striped table-condensed table-responsive'>");

    echo ("<tr><thead>
                    <th>#</th>
                    <th>S/W Ver.</th>
                    <th>Site ID</th>
                    <th>Date Time</th>
                    <th>Alarm</th>
                    <th>STATUS STRING</th>
                    
                    <th>ROOM TEMPERATURE  as  xx.x DEG C</th>
                    <th>FUEL LEVEL as 0xx percentage</th>
                    <th>SITE BATT VOLTAGE     as  xx.x Vdc</th>
                    <th>Output Current Amp</th>
                    <th>Mains Frequency</th>
                    <th>Dg frequency</th>
                    <th>DG VOLTAGE as xxx VAC</th>
                    <th>PIU OUTPUT1 VOLTAGE as xxxVAC</th>
                    <th>PIU OUTPUT2 VOLTAGE as xxxVAC</th>
                    <th>OUTPUT3 VOLTAGE as xxxVAC</th>
                    <th>INPUT MAINS VOLTAGE 1 as xxxVAC</th>
                    <th>INPUT MAINS VOLTAGE 2 as xxxVAC</th>
                    <th>INPUT MAINS VOLTAGE 3 as xxxVAC</th>
                    <th>Solar KWH </th>
                    <th>Solar Run hours</th>
                    <th>Solar + EB run hours</th>
                    <th>Solar + DG run hours</th>
                    <th>DG RUNNING HOURS as xxxxxxx.xHrs</th>
                    <th>Mains RUN HOURS as xxxxxxx.xHrs</th>
                    <th>Batt RUN HOURS as xxxxxxx.xHrs</th>
                    <th>SYSTEM STATUS</th>
                    <th>DG FAULT STATUS</th>
                    <th>DG Energy as xxxxxxxxKwh</th>
                    <th>I/P Mains Energy as xxxxxxxxKwh</th>
                    <th>DC Energy Meter as xxxxxxx.xKwh(EM1)</th>
                    <th>Opco1 Over Power Warning 1 Power set in controller</th>
                    <th>Opco1 Over Power Warning 2 Power set in controller</th>
                    <th>Solar + BB run hours</th>
                    <th>DC Energy Meter as xxxxxxx.xKwh(EM2)</th>
                    <th>Opco2 Over Power Warning 1 Power set in controller </th>
                    <th>Opco2 Over Power Warning 2 Power set in controller </th>
                    <th>Opco1 Actual power</th>
                    <th>DC Energy Meter as xxxxxxx.xKwh(EM3)</th>
                    <th>Opco3 Over Power Warning 1 Power set in controller </th>
                    <th>Opco3 Over Power Warning 2 Power set in controller</th>
                    <th>Opco2 Actual power</th>
                    <th>DC Energy Meter as xxxxxxx.xKwh(EM4)</th>
                    <th>Opco4 Over Power Warning 1 Power set in controller </th>
                    <th>Opco4 Over Power Warning 2 Power set in controller </th>
                    <th>Opco3 Actual power</th>
                    <th>Opco4 Actual power</th>
                    <th>Solar current</th>
                    <th>Product Serial no. </th>
                    <th>Rectifier1 Serial no. </th>
                    <th>Rectifier2 Serial no. </th>
                    <th>Rectifier3 Serial no. </th>
                    <th>Rectifier4 Serial no. </th>
                    <th>Rectifier5 Serial no. </th>
                    <th>Rectifier6 Serial no. </th>
                    <th>Battery 1 - Voltage </th>
                    <th>Battery 1 - Current </th>
                    <th>Battery 1 - Battery module internal temperature </th>
                    <th>Battery 1 - SOH </th>
                    <th>Battery 1 - SOC</th>
                    <th>Battery 1 - Battery Cycle Count </th>
                    <th>Battery 1 - Cumulative charging KWH </th>
                    <th>Battery 1 - Cumulative discharging KWH </th>
                    <th>Battery 2 - Voltage </th>
                    <th>Battery 2 - Current </th>
                    <th>Battery 2 - Battery module internal temperature </th>
                    <th>Battery 2 - SOH </th>
                    <th>Battery 2 - SOC</th>
                    <th>Battery 2 - Battery Cycle Count </th>
                    <th>Battery 2 - Cumulative charging KWH </th>
                    <th>Battery 2 - Cumulative discharging KWH </th>
                    <th>Battery 3 - Voltage </th>
                    <th>Battery 3 - Current </th>
                    <th>Battery 3 - Battery module internal temperature </th>
                    <th>Battery 3 - SOH </th>
                    <th>Battery 3 - SOC</th>
                    <th>Battery 3 - Battery Cycle Count </th>
                    <th>Battery 3 - Cumulative charging KWH </th>
                    <th>Battery 3 - Cumulative discharging KWH </th>
                    <th>Battery 4 - Voltage </th>
                    <th>Battery 4 - Current </th>
                    <th>Battery 4 - Battery module internal temperature </th>
                    <th>Battery 4 - SOH </th>
                    <th>Battery 4 - SOC</th>
                    <th>Battery 4 - Battery Cycle Count </th>
                    <th>Battery 4 - Cumulative charging KWH </th>
                    <th>Battery 4 - Cumulative discharging KWH </th>
                    <th>Battery 5 - Voltage </th>
                    <th>Battery 5 - Current </th>
                    <th>Battery 5 - Battery module internal temperature </th>
                    <th>Battery 5 - SOH </th>
                    <th>Battery 5 - SOC</th>
                    <th>Battery 5 - Battery Cycle Count </th>
                    <th>Battery 5 - Cumulative charging KWH </th>
                    <th>Battery 5 - Cumulative discharging KWH </th>
                    <th>Battery 6 - Voltage </th>
                    <th>Battery 6 - Current </th>
                    <th>Battery 6 - Battery module internal temperature </th>
                    <th>Battery 6 - SOH </th>
                    <th>Battery 6 - SOC</th>
                    <th>Battery 6 - Battery Cycle Count </th>
                    <th>Battery 6 - Cumulative charging KWH </th>
                    <th>Battery 6 - Cumulative discharging KWH </th>
                    <th>WARNING ALARM STRING - Module 1</th>
                    <th>PROTECTION ALARM STRING - Module 1</th>
                    <th>WARNING ALARM STRING - Module 2</th>
                    <th>PROTECTION ALARM STRING - Module 2</th>
                    <th>WARNING ALARM STRING - Module 3</th>
                    <th>PROTECTION ALARM STRING - Module 3</th>
                    <th>WARNING ALARM STRING - Module 4</th>
                    <th>PROTECTION ALARM STRING - Module 4</th>
                    <th>WARNING ALARM STRING - Module 5</th>
                    <th>PROTECTION ALARM STRING - Module 5</th>
                    <th>WARNING ALARM STRING - Module 6</th>
                    <th>PROTECTION ALARM STRING - Module 6</th>
                
				</thead></tr><tbody>");
}

function DisplayEntryType1HeaderEnd()
{
    echo ("</tbody></table>");
}



function DisplayEntryType1($array)
{
    $color = "";
    if ($array[3] == 1) {
        $color = " class='danger' ";
    }
    echo ("<tr $color>");


    $data_type_str = "";
    if ($array[3] == 0) {
        $data_type_str = "P";
    }
    if ($array[3] == 1) {
        $data_type_str = "F";
    }
    echo ("<td>" . $data_type_str . "</td>"); //Type

    echo ("<td>" . $array[5] . "</td>"); //Date Time



    $data_status_hex = bin2hex($array[7]);
    echo ("<td><button type='button' class='btn btn-primary btn-sm' data-toggle='modal' OnClick='ShowDetail($array[0])'>$data_status_hex</button></td>"); //Status
    echo ("<td>" . $array[6] . "</td>"); //Device Id

    echo ("<td>" . $array[8] . "</td>"); //Room Temperature
    echo ("<td>" . $array[9] . "</td>"); //Fuel Level
    echo ("<td>" . $array[10] . "</td>"); //Fuel Data
    echo ("<td>" . $array[11] . "</td>"); //Site Batt. bank Voltage
    echo ("<td>" . $array[12] . "</td>"); //R-Phase current
    echo ("<td>" . $array[13] . "</td>"); //Y-Phase current
    echo ("<td>" . $array[14] . "</td>"); //B-Phase current
    echo ("<td>" . $array[15] . "</td>"); //Mains Frequency
    echo ("<td>" . $array[16] . "</td>"); //DG frequency
    echo ("<td>" . $array[17] . "</td>"); //DG-R phase Voltage
    echo ("<td>" . $array[18] . "</td>"); //DG-Y phase Voltage
    echo ("<td>" . $array[19] . "</td>"); //DG-B phase Voltage
    echo ("<td>" . $array[20] . "</td>"); //LCU1 Output Voltage
    echo ("<td>" . $array[21] . "</td>"); //LCU2 Output Voltage
    echo ("<td>" . $array[22] . "</td>"); //LCU3 Output Voltage
    echo ("<td>" . $array[23] . "</td>"); //Input Mains Voltage - R Phase
    echo ("<td>" . $array[24] . "</td>"); //Input Mains Voltage - Y Phase
    echo ("<td>" . $array[25] . "</td>"); //Input Mains Voltage - B Phase
    echo ("<td>" . $array[26] . "</td>"); //DG Running Hours
    echo ("<td>" . $array[27] . "</td>"); //Mains RUN HOURS
    echo ("<td>" . $array[28] . "</td>"); //Batt RUN HOURS
    echo ("<td>" . $array[29] . "</td>"); //O/P Mains Energy
    echo ("<td>" . $array[30] . "</td>"); //DG Energy
    echo ("<td>" . $array[31] . "</td>"); //I/P Mains Energy
    echo ("<td>" . $array[32] . "</td>"); //DG Battery Voltage
    echo ("<td>" . $array[33] . "</td>"); //Battery Charging current
    echo ("<td>" . $array[34] . "</td>"); //Battery Discharging current
    echo ("<td>" . $array[35] . "</td>"); //Battery status
    echo ("<td>" . $array[36] . "</td>"); //Battery back up time
    echo ("<td>" . $array[37] . "</td>"); //Battery Charging Energy
    echo ("<td>" . $array[38] . "</td>"); //Battery Disharging Energy
}

function DisplayEntryTypeSolar($array)
{
    $color = "";
    if ($array[3] == 1) {
        $color = " class='danger' ";
    }
    echo ("<tr $color>");

    $data_type_str = "";
    if ($array[3] == 0) {
        $data_type_str = "P";
    }
    if ($array[3] == 1) {
        $data_type_str = "F";
    }
    echo ("<td>" . $data_type_str . "</td>"); //Type

    echo ("<td>" . $array[5] . "</td>"); //Date Time



    $data_status_hex = bin2hex($array[7]);
    echo ("<td><button type='button' class='btn btn-primary btn-sm' data-toggle='modal' OnClick='ShowDetail($array[0])'>$data_status_hex</button></td>"); //Status
    echo ("<td>" . $array[6] . "</td>"); //Device Id

    echo ("<td>" . $array[8] . "</td>"); //Room Temperature
    echo ("<td>" . $array[9] . "</td>"); //Solar array 1 Voltage
    echo ("<td>" . $array[10] . "</td>"); //Solar array 2 Voltage
    echo ("<td>" . $array[11] . "</td>"); //Solar array 3 Voltage
    echo ("<td>" . $array[12] . "</td>"); //Array1 current
    echo ("<td>" . $array[13] . "</td>"); //Array2 current
    echo ("<td>" . $array[14] . "</td>"); //Array3 current
    echo ("<td>" . $array[15] . "</td>"); //R-Phase current
    echo ("<td>" . $array[16] . "</td>"); //Y-Phase current
    echo ("<td>" . $array[17] . "</td>"); //B-Phase current
    echo ("<td>" . $array[18] . "</td>"); //Mains Frequency
    echo ("<td>" . $array[19] . "</td>"); //Input Mains Voltage – R Phase
    echo ("<td>" . $array[20] . "</td>"); //Input Mains Voltage – Y Phase
    echo ("<td>" . $array[21] . "</td>"); //Input Mains Voltage – B Phase
    echo ("<td>" . $array[22] . "</td>"); //Solar Run Hours
    echo ("<td>" . $array[23] . "</td>"); //Mains RUN HOURS
    echo ("<td>" . $array[24] . "</td>"); //Solar + mains  RUN HOURS
    echo ("<td>" . $array[25] . "</td>"); //Mains Energy
    echo ("<td>" . $array[26] . "</td>"); //Solar Energy

    echo ("<td>" . $array[27] . "</td>"); // Battery bank Voltage  Voltage
    echo ("<td>" . $array[28] . "</td>"); //Battery Charging current
    echo ("<td>" . $array[29] . "</td>"); //Battery Discharging current

    echo ("<td>" . $array[30] . "</td>"); //Battery status

    echo ("<td>" . $array[31] . "</td>"); //Battery Charging Energy
    echo ("<td>" . $array[32] . "</td>"); //Battery Disharging Energy
}

function DisplayEntryType1DoubleDG($array)
{
    $color = "";
    if ($array[3] == 1) {
        $color = " class='danger' ";
    }
    echo ("<tr $color>");
    echo ("<td>" . $array[0] . "</td>");    //#
    echo ("<td>" . $array[4] . "</td>");    //Site Id

    $data_type_str = "";
    if ($array[3] == 0) {
        $data_type_str = "P";
    }
    if ($array[3] == 1) {
        $data_type_str = "F";
    }
    echo ("<td>" . $data_type_str . "</td>"); //Type

    echo ("<td>" . $array[5] . "</td>"); //Date Time



    $data_status_hex = bin2hex($array[7]);
    echo ("<td><button type='button' class='btn btn-primary btn-sm'
     data-toggle='modal' OnClick='ShowDetail($array[0], 0)'>$data_status_hex</button></td>"); //Status
    echo ("<td>" . $array[6] . "</td>"); //Device Id

    echo ("<td>" . $array[8] . "</td>"); //Room Temperature
    echo ("<td>" . $array[9] . "</td>"); //Fuel Level
    echo ("<td>" . $array[10] . "</td>"); //Fuel Data
    echo ("<td>" . $array[11] . "</td>"); //Site Batt. bank Voltage
    echo ("<td>" . $array[12] . "</td>"); //R-Phase current
    echo ("<td>" . $array[13] . "</td>"); //Y-Phase current
    echo ("<td>" . $array[14] . "</td>"); //B-Phase current
    echo ("<td>" . $array[15] . "</td>"); //Mains Frequency
    echo ("<td>" . $array[16] . "</td>"); //DG frequency
    echo ("<td>" . $array[17] . "</td>"); //DG-R phase Voltage
    echo ("<td>" . $array[18] . "</td>"); //DG-Y phase Voltage
    echo ("<td>" . $array[19] . "</td>"); //DG-B phase Voltage
    echo ("<td>" . $array[20] . "</td>"); //LCU1 Output Voltage
    echo ("<td>" . $array[21] . "</td>"); //LCU2 Output Voltage
    echo ("<td>" . $array[22] . "</td>"); //LCU3 Output Voltage
    echo ("<td>" . $array[23] . "</td>"); //Input Mains Voltage - R Phase
    echo ("<td>" . $array[24] . "</td>"); //Input Mains Voltage - Y Phase
    echo ("<td>" . $array[25] . "</td>"); //Input Mains Voltage - B Phase
    echo ("<td>" . $array[26] . "</td>"); //DG Running Hours
    echo ("<td>" . $array[27] . "</td>"); //Mains RUN HOURS
    echo ("<td>" . $array[28] . "</td>"); //Batt RUN HOURS
    echo ("<td>" . $array[29] . "</td>"); //O/P Mains Energy
    echo ("<td>" . $array[30] . "</td>"); //DG Energy
    echo ("<td>" . $array[31] . "</td>"); //I/P Mains Energy
    echo ("<td>" . $array[32] . "</td>"); //DG Battery Voltage
    echo ("<td>" . $array[33] . "</td>"); //Battery Charging current
    echo ("<td>" . $array[34] . "</td>"); //Battery Discharging current
    echo ("<td>" . $array[35] . "</td>"); //Battery status
    echo ("<td>" . $array[36] . "</td>"); //Battery back up time
    echo ("<td>" . $array[37] . "</td>"); //Battery Charging Energy
    echo ("<td>" . $array[38][0] . "</td>"); //Battery Disharging Energy

    if ($array[2] == 2) {
        echo ("<td>" . $array[38][1] . "</td>"); //DG2 frequency
        echo ("<td>" . $array[38][2] . "</td>"); //DG2-R phase Voltage VAC
        echo ("<td>" . $array[38][3] . "</td>"); //DG2-Y phase Voltage VAC
        echo ("<td>" . $array[38][4] . "</td>"); //DG2-B phase Voltage VAC
        echo ("<td>" . $array[38][5] . "</td>"); //DG2 Battery Voltage VDC
        echo ("<td>" . $array[38][6] . "</td>"); //DG2 Running Hours Hrs
        echo ("<td>" . $array[38][7] . "</td>"); //DG2 Energy Kwh
        echo ("<td>" . $array[38][8] . "</td>"); //Fuel Level of DG2 %
        echo ("<td>" . $array[38][9] . "</td>"); //Fuel data of DG2 liter
    } else {
        echo ("<td></td>");
        echo ("<td></td>");
        echo ("<td></td>");
        echo ("<td></td>");
        echo ("<td></td>");
        echo ("<td></td>");
        echo ("<td></td>");
        echo ("<td></td>");
        echo ("<td></td>");
    }
}

function DisplayEntryType1DoubleDGSolar($array)
{
    $color = "";
    if ($array[3] == 1) {
        $color = " class='danger' ";
    }
    echo ("<tr $color>");
    echo ("<td>" . $array[0] . "</td>");    //#
    echo ("<td>" . $array[4] . "</td>");    //Site Id

    $data_type_str = "";
    if ($array[3] == 0) {
        $data_type_str = "P";
    }
    if ($array[3] == 1) {
        $data_type_str = "F";
    }
    echo ("<td>" . $data_type_str . "</td>"); //Type

    echo ("<td>" . $array[5] . "</td>"); //Date Time



    $data_status_hex = bin2hex($array[7]);
    echo ("<td><button type='button' class='btn btn-primary btn-sm'
     data-toggle='modal' OnClick='ShowDetail($array[0], 0)'>$data_status_hex</button></td>"); //Status
    echo ("<td>" . $array[6] . "</td>"); //Device Id

    echo ("<td>" . $array[8] . "</td>"); //Room Temperature
    echo ("<td>" . $array[9] . "</td>"); //Fuel Level
    echo ("<td>" . $array[10] . "</td>"); //Fuel Data
    echo ("<td>" . $array[11] . "</td>"); //Site Batt. bank Voltage
    echo ("<td>" . $array[12] . "</td>"); //R-Phase current
    echo ("<td>" . $array[13] . "</td>"); //Y-Phase current
    echo ("<td>" . $array[14] . "</td>"); //B-Phase current
    echo ("<td>" . $array[15] . "</td>"); //Mains Frequency
    echo ("<td>" . $array[16] . "</td>"); //DG frequency
    echo ("<td>" . $array[17] . "</td>"); //DG-R phase Voltage
    echo ("<td>" . $array[18] . "</td>"); //DG-Y phase Voltage
    echo ("<td>" . $array[19] . "</td>"); //DG-B phase Voltage
    echo ("<td>" . $array[20] . "</td>"); //LCU1 Output Voltage
    echo ("<td>" . $array[21] . "</td>"); //LCU2 Output Voltage
    echo ("<td>" . $array[22] . "</td>"); //LCU3 Output Voltage
    echo ("<td>" . $array[23] . "</td>"); //Input Mains Voltage - R Phase
    echo ("<td>" . $array[24] . "</td>"); //Input Mains Voltage - Y Phase
    echo ("<td>" . $array[25] . "</td>"); //Input Mains Voltage - B Phase
    echo ("<td>" . $array[26] . "</td>"); //DG Running Hours
    echo ("<td>" . $array[27] . "</td>"); //Mains RUN HOURS
    echo ("<td>" . $array[28] . "</td>"); //Batt RUN HOURS
    echo ("<td>" . $array[29] . "</td>"); //O/P Mains Energy
    echo ("<td>" . $array[30] . "</td>"); //DG Energy
    echo ("<td>" . $array[31] . "</td>"); //I/P Mains Energy
    echo ("<td>" . $array[32] . "</td>"); //DG Battery Voltage
    echo ("<td>" . $array[33] . "</td>"); //Battery Charging current
    echo ("<td>" . $array[34] . "</td>"); //Battery Discharging current
    echo ("<td>" . $array[35] . "</td>"); //Battery status
    echo ("<td>" . $array[36] . "</td>"); //Battery back up time
    echo ("<td>" . $array[37] . "</td>"); //Battery Charging Energy
    echo ("<td>" . $array[38][0] . "</td>"); //Battery Disharging Energy

    echo ("<td>" . $array[38][1] . "</td>"); //DG2 frequency
    echo ("<td>" . $array[38][2] . "</td>"); //DG2-R phase Voltage VAC
    echo ("<td>" . $array[38][3] . "</td>"); //DG2-Y phase Voltage VAC
    echo ("<td>" . $array[38][4] . "</td>"); //DG2-B phase Voltage VAC

    echo ("<td>" . $array[38][5] . "</td>"); //DG2 Running Hours Hrs
    echo ("<td>" . $array[38][6] . "</td>"); //DG2 Energy Kwh

    echo ("<td>" . $array[38][7] . "</td>"); //DG2 Battery Voltage VDC
    echo ("<td>" . $array[38][8] . "</td>"); //Fuel Level of DG2 %
    echo ("<td>" . $array[38][9] . "</td>"); //Fuel data of DG2 liter
    echo ("<td>" . $array[38][10] . "</td>"); //PV Voltage
    echo ("<td>" . $array[38][11] . "</td>"); //PV Current

    echo ("<td>" . $array[38][12] . "</td>"); //PV Running Hours
    echo ("<td>" . $array[38][13] . "</td>"); //PV Energy Kwh
}


function DisplayEntryType2($array)
{
    echo "<tr>";
    echo ("<td>" . $array[14] . "</td>"); //Site Name
    echo ("<td>" . $array[0] . "</td>");    //Site Id


    echo ("<td>" . $array[1] . "</td>"); //Circle
    echo ("<td>" . $array[2] . "</td>"); //Culster
    echo ("<td>" . $array[3] . "</td>"); //Make
    echo ("<td>" . $array[4] . "</td>"); //AM NAME
    echo ("<td>" . $array[5] . "</td>"); //Mob no.

    echo ("<td>" . $array[7]->format('Y-m-d H:i:s') . "</td>"); //Date Time
    echo ("<td>" . round($array[10], 2) . "</td>"); //Interval

    echo ("<td>" . abs(round($array[11], 2)) . "</td>"); //DG Running Hours
    echo ("<td>" . abs(round($array[12], 2)) . "</td>"); //Mains RUN HOURS
    echo ("<td>" . abs(round($array[13], 2)) . "</td>"); //Batt RUN HOURS


    if (ctype_space($array[6]) || $array[6] == '') { //Mobile
        echo ("<td></td>");
        echo ("<td></td>");
    } else {
        echo ("<td><button type='button' class='btn-success btn-primary btn-sm' data-toggle='modal' OnClick='GenStartStop(1, $array[40])'>START</button></td>"); //START
        echo ("<td><button type='button' class='btn-danger btn-primary btn-sm' data-toggle='modal' OnClick='GenStartStop(0, $array[40])'>STOP</button></td>"); //STOP
    }
    echo "</tr>";
}

function DisplayEntryType2Sum($array)
{
    echo "<tr class='info'>";
    echo ("<td><strong>Total</strong></td>"); //Site Name
    echo ("<td></td>");    //Site Id


    echo ("<td></td>"); //Circle
    echo ("<td></td>"); //Culster
    echo ("<td></td>"); //Make
    echo ("<td></td>"); //AM NAME
    echo ("<td></td>"); //Mob no.

    echo ("<td></td>"); //Date Time
    echo ("<td>" . round($array[0], 2) . "</td>"); //Interval

    echo ("<td>" . abs(round($array[1], 2)) . "</td>"); //DG Running Hours
    echo ("<td>" . abs(round($array[2], 2)) . "</td>"); //Mains RUN HOURS
    echo ("<td>" . abs(round($array[3], 2)) . "</td>"); //Batt RUN HOURS


    echo ("<td></td>");
    echo ("<td></td>");

    echo "</tr>";
}


function DisplayEntryTypeDoubleBattery($array)
{
    $color = "";
    if ($array[3] == 1) {
        $color = " class='danger' ";
    }
    echo ("<tr $color>");
    echo ("<td>" . $array[0] . "</td>");    //#
    echo ("<td>" . $array[4] . "</td>");    //Site Id

    $data_type_str = "";
    if ($array[3] == 0) {
        $data_type_str = "P";
    }
    if ($array[3] == 1) {
        $data_type_str = "F";
    }
    echo ("<td>" . $data_type_str . "</td>"); //Type

    echo ("<td>" . $array[5] . "</td>"); //Date Time


    $data_status_hex = bin2hex($array[7]);
    echo ("<td><button type='button' class='btn btn-primary btn-sm' data-toggle='modal' OnClick='ShowDetail($array[0], 0)'>$data_status_hex</button></td>"); //Status
    echo ("<td>" . $array[6] . "</td>"); //Device Id

    echo ("<td>" . $array[8] . "</td>"); //Room Temperature
    echo ("<td>" . $array[9] . "</td>"); //Site Batt. Banl Voltage
    echo ("<td>" . $array[10] . "</td>"); //Site Batt. Bank Voltage
    echo ("<td>" . $array[11] . "</td>"); //Load Current
    echo ("<td>" . $array[12] . "</td>"); //Mains Voltage
    echo ("<td>" . $array[13] . "</td>"); //DG Voltage
    echo ("<td>" . $array[14] . "</td>"); //Input Mains Voltage B Phase
    echo ("<td>" . $array[15] . "</td>"); //Battery1 Charging Current
    echo ("<td>" . $array[16] . "</td>"); //Battery1 Discharging Current
    echo ("<td>" . $array[17] . "</td>"); //Battery2 Charging Current
    echo ("<td>" . $array[18] . "</td>"); //Battery2 Discharging Current
    echo ("<td>" . $array[19] . "</td>"); //Battery1 Status
    echo ("<td>" . $array[20] . "</td>"); //Battery2 Status
}

function DisplayEntryType3($array)
{
    $color = "";
    if ($array[3] == 1) {
        $color = " class='danger' ";
    }
    echo ("<tr $color>");
    echo ("<td>" . $array[0] . "</td>");    //#
    echo ("<td>" . $array[4] . "</td>");    //Site Id

    $data_type_str = "";
    if ($array[3] == 0) {
        $data_type_str = "P";
    }
    if ($array[3] == 1) {
        $data_type_str = "F";
    }
    echo ("<td>" . $data_type_str . "</td>"); //Type

    echo ("<td>" . $array[5] . "</td>"); //Date Time


    $data_status_hex = bin2hex($array[7]);
    echo ("<td><button type='button' class='btn btn-primary btn-sm' data-toggle='modal' OnClick='ShowDetail($array[0], 0)'>$data_status_hex</button></td>"); //Status
    echo ("<td>" . $array[6] . "</td>"); //Device Id

    echo ("<td>" . $array[8] . "</td>"); //Room Temperature
    echo ("<td>" . $array[9] . "</td>"); //Site Batt. Banl Voltage
    echo ("<td>" . $array[10] . "</td>"); //Site Batt. Bank Voltage
    echo ("<td>" . $array[11] . "</td>"); //Total Load Current
    echo ("<td>" . $array[12] . "</td>"); //Mains Voltage-R Phase
    echo ("<td>" . $array[13] . "</td>"); //Mains Voltage-Y Phase
    echo ("<td>" . $array[14] . "</td>"); //Mains Voltage-B Phase
    echo ("<td>" . $array[15] . "</td>"); //Battery1 Charging Current
    echo ("<td>" . $array[16] . "</td>"); //Battery1 Discharging Current
    echo ("<td>" . $array[17] . "</td>"); //Battery2 Charging Current
    echo ("<td>" . $array[18] . "</td>"); //Battery2 Discharging Current
    echo ("<td>" . $array[19] . "</td>"); //Battery1 Status
    echo ("<td>" . $array[20] . "</td>"); //Battery2 Status
    echo ("<td>" . $array[21] . "</td>"); //Mains Energy
    echo ("<td>" . $array[22] . "</td>"); //Battery#1 CHG Energy
    echo ("<td>" . $array[23] . "</td>"); //Battery#1 DISCHG Energy
    echo ("<td>" . $array[24] . "</td>"); //Battery#2 CHG Energy
    echo ("<td>" . $array[25] . "</td>"); //Battery#2 DISCHG Energy

    echo "</tr>";
}

function DisplayEntryTypeAirtelV118($array)
{
    echo ("<tr>");

    echo ("<td>" . $array[0] . "</td>");    //Id
    echo ("<td>" . $array[6] . "</td>");    //S/W Ver. echo("<tr><td><b>S/W Ver.</b></
    echo ("<td>" . $array[4] . "</td>"); //Site Id echo("<tr><td><b>Site ID</b></td

    echo ("<td>" . $array[5] . "</td>"); //Date Time echo("<tr><td><b>Date Time</b></td


    $flag = intval($array[7]);
    echo ("<td><button type='button' class='btn btn-primary btn-sm' data-toggle='modal' OnClick='ShowDetail($array[0])'>$flag</button></td>"); //Status echo("<tr><td><b>Alarm</b></td><
    //e"<td>".$array[4]."</td>larm

    // echo("<td>".$array[5]."</td>");// echo("<tr><td><b>Status</b></td><
    // echo("<td>".$array[6]."</td>");// echo("<tr><td><b>Comm. Status</b></
    echo ("<td>" . $array[8] . "</td>"); // echo("<tr><td><b>Room Temperature DEG C</b
    echo ("<td>" . $array[9] . "</td>"); // echo("<tr><td><b>Fuel Level</b></td
    echo ("<td>" . $array[10] . "</td>"); // echo("<tr><td><b>Site Battery Voltage VDC</b
    echo ("<td>" . $array[11] . "</td>"); // echo("<tr><td><b>Output current</b></td
    echo ("<td>" . $array[12] . "</td>"); // echo("<tr><td><b>Mains Frequency</b></td
    echo ("<td>" . $array[13] . "</td>"); // echo("<tr><td><b>DG frequency</b></td
    echo ("<td>" . $array[14] . "</td>"); // echo("<tr><td><b>DG Voltage VAC</b></
    echo ("<td>" . $array[15] . "</td>"); // echo("<tr><td><b>PIU O/P1 Voltage VAC</
    echo ("<td>" . $array[16] . "</td>"); // echo("<tr><td><b>PIU O/P2 Voltage VAC</
    echo ("<td>" . $array[17] . "</td>"); // echo("<tr><td><b>O/P3 Voltage VAC</b
    echo ("<td>" . $array[18] . "</td>"); // echo("<tr><td><b>I/P Mains Voltage 1 VAC
    echo ("<td>" . $array[19] . "</td>"); // echo("<tr><td><b>I/P Mains Voltage 2 VAC
    echo ("<td>" . $array[20] . "</td>"); // echo("<tr><td><b>I/P Mains Voltage 3 VAC
    echo ("<td>" . $array[21] . "</td>"); // echo("<tr><td><b>Down Counter of Site 1 Hrs
    echo ("<td>" . $array[22] . "</td>"); // echo("<tr><td><b>Down Counter of Site 2 Hrs
    echo ("<td>" . $array[23] . "</td>"); // echo("<tr><td><b>Down Counter of Site 3 Hrs
    echo ("<td>" . $array[24] . "</td>"); // echo("<tr><td><b>Down Counter of Site 4 Hrs
    echo ("<td>" . $array[25] . "</td>"); // echo("<tr><td><b>DG Run Hours Hrs</b
    echo ("<td>" . $array[26] . "</td>"); // echo("<tr><td><b>Mains Run Hours Hrs</b
    echo ("<td>" . $array[27] . "</td>"); // echo("<tr><td><b>Batt. Run Hours Hrs</
    echo ("<td>" . $array[28] . "</td>"); // echo("<tr><td><b>System Status</b></td
    echo ("<td>" . $array[29] . "</td>"); // echo("<tr><td><b>DG Fault Status</b></
    echo ("<td>" . $array[30] . "</td>"); // echo("<tr><td><b>DG Energy Kwh</b></
    echo ("<td>" . $array[31] . "</td>"); // echo("<tr><td><b>I/P Mains Energy Kwh</
    echo ("<td>" . $array[32] . "</td>"); // echo("<tr><td><b>CH1_DCEM1</b></td><
    echo ("<td>" . $array[33] . "</td>"); // echo("<tr><td><b>CH2_DCEM1</b></td><
    echo ("<td>" . $array[34] . "</td>"); // echo("<tr><td><b>CH3_DCEM1</b></td><
    echo ("<td>" . $array[35] . "</td>"); // echo("<tr><td><b>CH4_DCEM1</b></td><
    echo ("<td>" . $array[36] . "</td>"); // echo("<tr><td><b>CH1_DCEM2</b></td><
    echo ("<td>" . $array[37] . "</td>"); // echo("<tr><td><b>CH2_DCEM2</b></td><
    echo ("<td>" . $array[38][0] . "</td>"); // echo("<tr><td><b>CH3_DCEM2</b></td><
    echo ("<td>" . $array[38][1] . "</td>"); // echo("<tr><td><b>CH4_DCEM2</b></td><
    echo ("<td>" . $array[38][2] . "</td>"); // echo("<tr><td><b>CH1_DCEM3</b></td><
    echo ("<td>" . $array[38][3] . "</td>"); // echo("<tr><td><b>CH2_DCEM3</b></td><
    echo ("<td>" . $array[38][4] . "</td>"); // echo("<tr><td><b>CH3_DCEM3</b></td><
    echo ("<td>" . $array[38][5] . "</td>"); // echo("<tr><td><b>CH4_DCEM3</b></td><
    echo ("<td>" . $array[38][6] . "</td>"); // echo("<tr><td><b>CH1_DCEM4</b></td><
    echo ("<td>" . $array[38][7] . "</td>"); // echo("<tr><td><b>CH2_DCEM4</b></td><
    echo ("<td>" . $array[38][8] . "</td>"); // echo("<tr><td><b>CH3_DCEM4</b></td><
    echo ("<td>" . $array[38][9] . "</td>"); // echo("<tr><td><b>CH4_DCEM4</b></td><
    echo ("<td>" . $array[38][10] . "</td>"); // echo("<tr><td><b>BTS Status</b></td

    echo "</tr>";
}

function DisplayEntryTypeAirtelV120($array)
{
    echo ("<tr>");

    echo ("<td>" . $array[0] . "</td>");    //Id
    echo ("<td>" . $array[6] . "</td>");    //S/W Ver. echo("<tr><td><b>S/W Ver.</b></
    echo ("<td>" . $array[4] . "</td>"); //Site Id echo("<tr><td><b>Site ID</b></td

    echo ("<td>" . $array[5] . "</td>"); //Date Time echo("<tr><td><b>Date Time</b></td


    $flag = intval($array[7]);
    echo ("<td><button type='button' class='btn btn-primary btn-sm' data-toggle='modal' OnClick='ShowDetail($array[0])'>$flag</button></td>"); //Status echo("<tr><td><b>Alarm</b></td><
    //e"<td>".$array[4]."</td>larm

    // echo("<td>".$array[5]."</td>");// echo("<tr><td><b>Status</b></td><
    // echo("<td>".$array[6]."</td>");// echo("<tr><td><b>Comm. Status</b></
    echo ("<td>" . $array[8] . "</td>"); // echo("<tr><td><b>Room Temperature DEG C</b
    echo ("<td>" . $array[9] . "</td>"); // echo("<tr><td><b>Solar Voltage</b></td
    echo ("<td>" . $array[10] . "</td>"); // echo("<tr><td><b>Site Battery Voltage VDC</b
    echo ("<td>" . $array[11] . "</td>"); // echo("<tr><td><b>Output current</b></td
    echo ("<td>" . $array[12] . "</td>"); // echo("<tr><td><b>Mains Frequency</b></td
    echo ("<td>" . $array[13] . "</td>"); // echo("<tr><td><b>DG frequency</b></td
    echo ("<td>" . $array[14] . "</td>"); // echo("<tr><td><b>DG Voltage VAC</b></
    echo ("<td>" . $array[15] . "</td>"); // echo("<tr><td><b>PIU O/P1 Voltage VAC</
    echo ("<td>" . $array[16] . "</td>"); // echo("<tr><td><b>PIU O/P2 Voltage VAC</
    echo ("<td>" . $array[17] . "</td>"); // echo("<tr><td><b>O/P3 Voltage VAC</b
    echo ("<td>" . $array[18] . "</td>"); // echo("<tr><td><b>I/P Mains Voltage 1 VAC
    echo ("<td>" . $array[19] . "</td>"); // echo("<tr><td><b>I/P Mains Voltage 2 VAC
    echo ("<td>" . $array[20] . "</td>"); // echo("<tr><td><b>I/P Mains Voltage 3 VAC
    echo ("<td>" . $array[21] . "</td>"); // echo("<tr><td><b>Down Counter of Site 1 Hrs
    echo ("<td>" . $array[22] . "</td>"); // echo("<tr><td><b>Down Counter of Site 2 Hrs
    echo ("<td>" . $array[23] . "</td>"); // echo("<tr><td><b>Down Counter of Site 3 Hrs
    echo ("<td>" . $array[24] . "</td>"); // echo("<tr><td><b>Down Counter of Site 4 Hrs
    echo ("<td>" . $array[25] . "</td>"); // echo("<tr><td><b>DG Run Hours Hrs</b
    echo ("<td>" . $array[26] . "</td>"); // echo("<tr><td><b>Mains Run Hours Hrs</b
    echo ("<td>" . $array[27] . "</td>"); // echo("<tr><td><b>Batt. Run Hours Hrs</
    echo ("<td>" . $array[28] . "</td>"); // echo("<tr><td><b>System Status</b></td
    echo ("<td>" . $array[29] . "</td>"); // echo("<tr><td><b>DG Fault Status</b></
    echo ("<td>" . $array[30] . "</td>"); // echo("<tr><td><b>DG Energy Kwh</b></
    echo ("<td>" . $array[31] . "</td>"); // echo("<tr><td><b>I/P Mains Energy Kwh</
    echo ("<td>" . $array[32] . "</td>"); // echo("<tr><td><b>DCEM1</b></td><
    echo ("<td>" . $array[33] . "</td>"); // echo("<tr><td><b>DCEM2</b></td><
    echo ("<td>" . $array[34] . "</td>"); // echo("<tr><td><b>DCEM3</b></td><
    echo ("<td>" . $array[35] . "</td>"); // echo("<tr><td><b>DCEM4</b></td><
    echo ("<td>" . $array[36] . "</td>"); // echo("<tr><td><b>DCEM5</b></td><
    echo ("<td>" . $array[37] . "</td>"); // echo("<tr><td><b>DCEM6</b></td><
    echo ("<td>" . $array[38][0] . "</td>"); // echo("<tr><td><b>Solar KWH</b></td><
    echo ("<td>" . $array[38][1] . "</td>"); // echo("<tr><td><b>Solar Run hours</b></td><
    echo ("<td>" . $array[38][2] . "</td>"); // echo("<tr><td><b>Solar + EB run hours</b></td><
    echo ("<td>" . $array[38][3] . "</td>"); // echo("<tr><td><b>Solar + DG run hours</b></td><
    echo ("<td>" . $array[38][4] . "</td>"); // echo("<tr><td><b>Solar + BB run hours</b></td><
    echo ("<td>" . $array[38][5] . "</td>"); // echo("<tr><td><b>xxxxxxxx</b></td><
    echo ("<td>" . $array[38][6] . "</td>"); // echo("<tr><td><b>xxxxxxxx</b></td><
    echo ("<td>" . $array[38][7] . "</td>"); // echo("<tr><td><b>xxxxxxxx</b></td><
    echo ("<td>" . $array[38][8] . "</td>"); // echo("<tr><td><b>xxxxxxxx</b></td><
    echo ("<td>" . $array[38][9] . "</td>"); // echo("<tr><td><b>xxxxxxxx</b></td><
    echo ("<td>" . $array[38][10] . "</td>"); // echo("<tr><td><b>Solar Current</b></td
    echo ("<td>" . $array[38][11] . "</td>"); // echo("<tr><td><b>Solar Alarm</b></td

    echo "</tr>";
}

function DisplayEntryTypeAirtelV50($array)
{
    // echo json_encode($array);
    echo ("<tr>");

    echo ("<td>" . $array[0] . "</td>");    //Id
    echo ("<td>" . $array[6] . "</td>");    //S/W Ver. echo("<tr><td><b>S/W Ver.</b></
    echo ("<td>" . $array[4] . "</td>"); //Site Id echo("<tr><td><b>Site ID</b></td

    echo ("<td>" . $array[5] . "</td>"); //Date Time echo("<tr><td><b>Date Time</b></td


    $flag = intval($array[7]);
    echo ("<td><button type='button' class='btn btn-primary btn-sm' data-toggle='modal' OnClick='ShowDetail($array[0])'>$flag</button></td>"); //Status echo("<tr><td><b>Alarm</b></td><
    //e"<td>".$array[4]."</td>larm


    echo ("<td>" . $array[38][79] . "</td>"); //STATUS STRING
    echo ("<td>" . $array[8] . "</td>"); //ROOM TEMPERATURE  as  xx.x DEG C
    echo ("<td>" . $array[9] . "</td>"); //FUEL LEVEL as 0xx percentage
    echo ("<td>" . $array[10] . "</td>"); //SITE BATT VOLTAGE     as  xx.x Vdc
    echo ("<td>" . $array[11] . "</td>"); //Output Current Amp
    echo ("<td>" . $array[12] . "</td>"); //Mains Frequency
    echo ("<td>" . $array[13] . "</td>"); //Dg frequency
    echo ("<td>" . $array[14] . "</td>"); //DG VOLTAGE as xxx VAC
    echo ("<td>" . $array[15] . "</td>"); //PIU OUTPUT1 VOLTAGE as xxxVAC
    echo ("<td>" . $array[16] . "</td>"); //PIU OUTPUT2 VOLTAGE as xxxVAC
    echo ("<td>" . $array[17] . "</td>"); //OUTPUT3 VOLTAGE as xxxVAC
    echo ("<td>" . $array[18] . "</td>"); //INPUT MAINS VOLTAGE 1 as xxxVAC
    echo ("<td>" . $array[19] . "</td>"); //INPUT MAINS VOLTAGE 2 as xxxVAC
    echo ("<td>" . $array[20] . "</td>"); //INPUT MAINS VOLTAGE 3 as xxxVAC
    echo ("<td>" . $array[21] . "</td>"); //Solar KWH 
    echo ("<td>" . $array[22] . "</td>"); //Solar Run hours
    echo ("<td>" . $array[23] . "</td>"); //Solar + EB run hours
    echo ("<td>" . $array[24] . "</td>"); //Solar + DG run hours
    echo ("<td>" . $array[25] . "</td>"); //DG RUNNING HOURS as xxxxxxx.xHrs
    echo ("<td>" . $array[26] . "</td>"); //Mains RUN HOURS as xxxxxxx.xHrs
    echo ("<td>" . $array[27] . "</td>"); //Batt RUN HOURS as xxxxxxx.xHrs
    echo ("<td>" . $array[28] . "</td>"); //SYSTEM STATUS
    echo ("<td>" . $array[29] . "</td>"); //DG FAULT STATUS
    echo ("<td>" . $array[30] . "</td>"); //DG Energy as xxxxxxxxKwh
    echo ("<td>" . $array[31] . "</td>"); //I/P Mains Energy as xxxxxxxxKwh
    echo ("<td>" . $array[32] . "</td>"); //DC Energy Meter as xxxxxxx.xKwh(EM1)
    echo ("<td>" . $array[33] . "</td>"); //Opco1 Over Power Warning 1 Power set in controller
    echo ("<td>" . $array[34] . "</td>"); //Opco1 Over Power Warning 2 Power set in controller
    echo ("<td>" . $array[35] . "</td>"); //Solar + BB run hours
    echo ("<td>" . $array[36] . "</td>"); //DC Energy Meter as xxxxxxx.xKwh(EM2)
    echo ("<td>" . $array[37] . "</td>"); //Opco2 Over Power Warning 1 Power set in controller 

    echo ("<td>" . $array[38][0] . "</td>"); //Opco2 Over Power Warning 2 Power set in controller 
    echo ("<td>" . $array[38][1] . "</td>"); //Opco1 Actual power
    echo ("<td>" . $array[38][2] . "</td>"); //DC Energy Meter as xxxxxxx.xKwh(EM3)
    echo ("<td>" . $array[38][3] . "</td>"); //Opco3 Over Power Warning 1 Power set in controller 
    echo ("<td>" . $array[38][4] . "</td>"); //Opco3 Over Power Warning 2 Power set in controller
    echo ("<td>" . $array[38][5] . "</td>"); //Opco2 Actual power
    echo ("<td>" . $array[38][6] . "</td>"); //DC Energy Meter as xxxxxxx.xKwh(EM4)
    echo ("<td>" . $array[38][7] . "</td>"); //Opco4 Over Power Warning 1 Power set in controller 
    echo ("<td>" . $array[38][8] . "</td>"); //Opco4 Over Power Warning 2 Power set in controller 
    echo ("<td>" . $array[38][9] . "</td>"); //Opco3 Actual power
    echo ("<td>" . $array[38][10] . "</td>"); //Opco4 Actual power
    echo ("<td>" . $array[38][11] . "</td>"); //Solar current
    echo ("<td>" . $array[38][12] . "</td>"); //Product Serial no. 
    echo ("<td>" . $array[38][13] . "</td>"); //Rectifier1 Serial no. 
    echo ("<td>" . $array[38][14] . "</td>"); //Rectifier2 Serial no. 
    echo ("<td>" . $array[38][15] . "</td>"); //Rectifier3 Serial no. 
    echo ("<td>" . $array[38][16] . "</td>"); //Rectifier4 Serial no. 
    echo ("<td>" . $array[38][17] . "</td>"); //Rectifier5 Serial no. 
    echo ("<td>" . $array[38][18] . "</td>"); //Rectifier6 Serial no. 
    echo ("<td>" . $array[38][19] . "</td>"); //Battery 1 - Voltage 
    echo ("<td>" . $array[38][20] . "</td>"); //Battery 1 - Current 
    echo ("<td>" . $array[38][21] . "</td>"); //Battery 1 - Battery module internal temperature 
    echo ("<td>" . $array[38][22] . "</td>"); //Battery 1 - SOH 
    echo ("<td>" . $array[38][23] . "</td>"); //Battery 1 - SOC
    echo ("<td>" . $array[38][24] . "</td>"); //Battery 1 - Battery Cycle Count 
    echo ("<td>" . $array[38][25] . "</td>"); //Battery 1 - Cumulative charging KWH 
    echo ("<td>" . $array[38][26] . "</td>"); //Battery 1 - Cumulative discharging KWH 
    echo ("<td>" . $array[38][27] . "</td>"); //Battery 2 - Voltage 
    echo ("<td>" . $array[38][28] . "</td>"); //Battery 2 - Current 
    echo ("<td>" . $array[38][29] . "</td>"); //Battery 2 - Battery module internal temperature 
    echo ("<td>" . $array[38][30] . "</td>"); //Battery 2 - SOH 
    echo ("<td>" . $array[38][31] . "</td>"); //Battery 2 - SOC
    echo ("<td>" . $array[38][32] . "</td>"); //Battery 2 - Battery Cycle Count 
    echo ("<td>" . $array[38][33] . "</td>"); //Battery 2 - Cumulative charging KWH 
    echo ("<td>" . $array[38][34] . "</td>"); //Battery 2 - Cumulative discharging KWH 
    echo ("<td>" . $array[38][35] . "</td>"); //Battery 3 - Voltage 
    echo ("<td>" . $array[38][36] . "</td>"); //Battery 3 - Current 
    echo ("<td>" . $array[38][37] . "</td>"); //Battery 3 - Battery module internal temperature 
    echo ("<td>" . $array[38][38] . "</td>"); //Battery 3 - SOH 
    echo ("<td>" . $array[38][39] . "</td>"); //Battery 3 - SOC
    echo ("<td>" . $array[38][40] . "</td>"); //Battery 3 - Battery Cycle Count 
    echo ("<td>" . $array[38][41] . "</td>"); //Battery 3 - Cumulative charging KWH 
    echo ("<td>" . $array[38][42] . "</td>"); //Battery 3 - Cumulative discharging KWH 
    echo ("<td>" . $array[38][43] . "</td>"); //Battery 4 - Voltage 
    echo ("<td>" . $array[38][44] . "</td>"); //Battery 4 - Current 
    echo ("<td>" . $array[38][45] . "</td>"); //Battery 4 - Battery module internal temperature 
    echo ("<td>" . $array[38][46] . "</td>"); //Battery 4 - SOH 
    echo ("<td>" . $array[38][47] . "</td>"); //Battery 4 - SOC
    echo ("<td>" . $array[38][48] . "</td>"); //Battery 4 - Battery Cycle Count 
    echo ("<td>" . $array[38][49] . "</td>"); //Battery 4 - Cumulative charging KWH 
    echo ("<td>" . $array[38][50] . "</td>"); //Battery 4 - Cumulative discharging KWH 
    echo ("<td>" . $array[38][51] . "</td>"); //Battery 5 - Voltage 
    echo ("<td>" . $array[38][52] . "</td>"); //Battery 5 - Current 
    echo ("<td>" . $array[38][53] . "</td>"); //Battery 5 - Battery module internal temperature 
    echo ("<td>" . $array[38][54] . "</td>"); //Battery 5 - SOH 
    echo ("<td>" . $array[38][55] . "</td>"); //Battery 5 - SOC
    echo ("<td>" . $array[38][56] . "</td>"); //Battery 5 - Battery Cycle Count 
    echo ("<td>" . $array[38][57] . "</td>"); //Battery 5 - Cumulative charging KWH 
    echo ("<td>" . $array[38][58] . "</td>"); //Battery 5 - Cumulative discharging KWH 
    echo ("<td>" . $array[38][59] . "</td>"); //Battery 6 - Voltage 
    echo ("<td>" . $array[38][60] . "</td>"); //Battery 6 - Current 
    echo ("<td>" . $array[38][61] . "</td>"); //Battery 6 - Battery module internal temperature 
    echo ("<td>" . $array[38][62] . "</td>"); //Battery 6 - SOH 
    echo ("<td>" . $array[38][63] . "</td>"); //Battery 6 - SOC
    echo ("<td>" . $array[38][64] . "</td>"); //Battery 6 - Battery Cycle Count 
    echo ("<td>" . $array[38][65] . "</td>"); //Battery 6 - Cumulative charging KWH 
    echo ("<td>" . $array[38][66] . "</td>"); //Battery 6 - Cumulative discharging KWH 
    echo ("<td>" . $array[38][67] . "</td>"); //WARNING ALARM STRING - Module 1
    echo ("<td>" . $array[38][68] . "</td>"); //PROTECTION ALARM STRING - Module 1
    echo ("<td>" . $array[38][69] . "</td>"); //WARNING ALARM STRING - Module 2
    echo ("<td>" . $array[38][70] . "</td>"); //PROTECTION ALARM STRING - Module 2
    echo ("<td>" . $array[38][71] . "</td>"); //WARNING ALARM STRING - Module 3
    echo ("<td>" . $array[38][72] . "</td>"); //PROTECTION ALARM STRING - Module 3
    echo ("<td>" . $array[38][73] . "</td>"); //WARNING ALARM STRING - Module 4
    echo ("<td>" . $array[38][74] . "</td>"); //PROTECTION ALARM STRING - Module 4
    echo ("<td>" . $array[38][75] . "</td>"); //WARNING ALARM STRING - Module 5
    echo ("<td>" . $array[38][76] . "</td>"); //PROTECTION ALARM STRING - Module 5
    echo ("<td>" . $array[38][77] . "</td>"); //WARNING ALARM STRING - Module 6
    echo ("<td>" . $array[38][78] . "</td>"); //PROTECTION ALARM STRING - Module 6

    echo "</tr>";
}

function DecodeAlarmsAirtel($data_status)
{
    //   var_dump($data_status);

    //echo "<br>".$flag;
    //echo "<br><br>".decbin($flag);
    //echo "<br><br>".($flag & 0x000100)."_______";

    $alarms = [];

    $flag = intval($data_status[0], 16);
    //   var_dump($flag);
    $alarms[] = ($flag & 0x000001) == 0 ? 0 : 1;        //0DG Failed To Start
    $alarms[] = ($flag & 0x000002) == 0 ? 0 : 1;        //1DG ON
    $alarms[] = ($flag & 0x000004) == 0 ? 0 : 1;        //2mains fail
    $alarms[] = ($flag & 0x000008) == 0 ? 0 : 1;        //3door alarm

    $flag = intval($data_status[1], 16);
    //   var_dump($flag);
    $alarms[] = ($flag & 0x000001) == 0 ? 0 : 1;        //4SITE ON BATTERY
    $alarms[] = ($flag & 0x000002) == 0 ? 0 : 1;        //5RECTIFIER FAIL
    $alarms[] = ($flag & 0x000004) == 0 ? 0 : 1;        //6DG FUEL LEVEL LOW
    $alarms[] = ($flag & 0x000008) == 0 ? 0 : 1;        //7DG Failed To Stop

    $flag = intval($data_status[2], 16);
    //   var_dump($flag);
    $alarms[] = ($flag & 0x000001) == 0 ? 0 : 1;        //8FIRE & SMOKE
    $alarms[] = ($flag & 0x000002) == 0 ? 0 : 1;        //9HIGH TEMPERATURE
    $alarms[] = ($flag & 0x000004) == 0 ? 0 : 1;        //10LOAD FUSE FAIL
    $alarms[] = ($flag & 0x000008) == 0 ? 0 : 1;        //11BATTERY FUSE FAIL

    $flag = intval($data_status[3], 16);
    //   var_dump($flag);
    $alarms[] = ($flag & 0x000001) == 0 ? 0 : 1;        //12DG FAULT
    $alarms[] = ($flag & 0x000002) == 0 ? 0 : 1;        //13AC 2 Faulty
    $alarms[] = ($flag & 0x000004) == 0 ? 0 : 1;        //14AC 1 Faulty
    $alarms[] = ($flag & 0x000008) == 0 ? 0 : 1;        //15LOW BATTERY VOLTAGE

    $flag = intval($data_status[4], 16);
    //   var_dump($flag);
    $alarms[] = ($flag & 0x000001) == 0 ? 0 : 1;        //16Reserved for Future
    $alarms[] = ($flag & 0x000002) == 0 ? 0 : 1;        //17Temperature high for Battery chiller
    $alarms[] = ($flag & 0x000004) == 0 ? 0 : 1;        //18Door open Alarm for Battery chiller
    $alarms[] = ($flag & 0x000008) == 0 ? 0 : 1;        //19Mains Low(1 mains low/ 0 ignore it) / V500:Site on Solar

    $flag = intval($data_status[5], 16);
    //   var_dump($flag);
    $alarms[] = ($flag & 0x000001) == 0 ? 0 : 1;        //20Reserved for Future
    $alarms[] = ($flag & 0x000002) == 0 ? 0 : 1;        //21Reserved for Future
    $alarms[] = ($flag & 0x000004) == 0 ? 0 : 1;        //22Reserved for Future
    $alarms[] = ($flag & 0x000008) == 0 ? 0 : 1;        //23Reserved for Future

    return $alarms;
}

function DecodeStatusAirtel($data_status)
{
    //   var_dump($data_status);

    //echo "<br>".$flag;
    //echo "<br><br>".decbin($flag);
    //echo "<br><br>".($flag & 0x000100)."_______";

    $status = [];

    $flag = intval($data_status[0], 16);
    // var_dump($flag);
    $status[] = ($flag & 0x000001) == 0 ? 0 : 1;        //0
    $status[] = ($flag & 0x000002) == 0 ? 0 : 1;        //1
    $status[] = ($flag & 0x000004) == 0 ? 0 : 1;        //2
    $status[] = ($flag & 0x000008) == 0 ? 0 : 1;        //3

    $flag = intval($data_status[1], 16);
    // var_dump($flag);
    $status[] = ($flag & 0x000001) == 0 ? 0 : 1;        //4
    $status[] = ($flag & 0x000002) == 0 ? 0 : 1;        //5
    $status[] = ($flag & 0x000004) == 0 ? 0 : 1;        //6
    $status[] = ($flag & 0x000008) == 0 ? 0 : 1;        //7

    $flag = intval($data_status[2], 16);
    // var_dump($flag);
    $status[] = ($flag & 0x000001) == 0 ? 0 : 1;        //8
    $status[] = ($flag & 0x000002) == 0 ? 0 : 1;        //9
    $status[] = ($flag & 0x000004) == 0 ? 0 : 1;        //10
    $status[] = ($flag & 0x000008) == 0 ? 0 : 1;        //11SITE ON SOLAR + EB

    $flag = intval($data_status[3], 16);
    // var_dump($flag);
    $status[] = ($flag & 0x000001) == 0 ? 0 : 1;        //12RESERVED FOR FUTRE
    $status[] = ($flag & 0x000002) == 0 ? 0 : 1;        //13RESERVED FOR FUTRE
    $status[] = ($flag & 0x000004) == 0 ? 0 : 1;        //14SITE ON SOLAR + DG
    $status[] = ($flag & 0x000008) == 0 ? 0 : 1;        //15SITE ON SOLAR + BB

    return $status;
}


function CalculateGeneratorFailedToStopTime($site_id, $dateStart, $dateEnd)
{
    $array = array();
    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $sqlquery = "SELECT date_time, MID(HEX(`status`),7,1) & 8 " .
        "FROM quanta WHERE `site_id`='$site_id' AND `date_time` >= '$dateStart' AND `date_time` <= '$dateEnd' " .
        "ORDER BY timestamp ASC ";


    //echo ": $sqlquery<br>";
    //var_dump($sqlquery);
    $result = $mysqli->query($sqlquery);

    $intervals = null;

    if ($result !== false) {
        $genError = false;
        $alarmFlag = false;


        while ($data = $result->fetch_row()) {
            //var_dump($data);

            //If first data is in error then assume ??????
            //if (firstTime && !genError && ($data[1] == '8'))
            //	genError = true;

            $alarmFlag = ($data[1] == '8');
            if ($genError) {
                if (!$alarmFlag) {
                    //Yes Alarm --> No Alarm
                    $timeE = $data[0];
                    $genError = false;

                    $tmpInterval = date_create_from_format('Y-m-d H:i:s', $timeE)->getTimestamp() - date_create_from_format('Y-m-d H:i:s', $timeS)->getTimestamp();

                    if ($intervals == null) {
                        $intervals = $tmpInterval;
                    } else {
                        $intervals += $tmpInterval;
                    }
                }
            } else {
                if ($alarmFlag) {
                    //No Alarm --> Yes Alarm
                    $timeS = $data[0];
                    $genError = true;
                }
            }

            $lastTime = $data[0];
            //var_dump($intervals);
        }

        //Error flag true even at end. Diff it from the last time.
        if ($genError) {
            $timeE = $lastTime;
            $genError = false;

            $tmpInterval = date_create_from_format('Y-m-d H:i:s', $timeE)->getTimestamp() - date_create_from_format('Y-m-d H:i:s', $timeS)->getTimestamp();

            if ($intervals == null) {
                $intervals = $tmpInterval;
            } else {
                $intervals += $tmpInterval;
            }
        }


        $result->close();
    }

    mysqli_close($mysqli);

    if ($intervals == null) {
        $intervals = 0;
    } else {
        $intervals = $intervals / 3600;
    }
    return $intervals;
}

function GetComparisonFromRecords($arr1, $arr2)
{
    // echo json_encode($arr1) . "<br />\r\n";
    // echo json_encode($arr2) . "<br />\r\n";

    $array = array();

    if ($arr1[6] == 118 || $arr1[6] == 120) {
        $array[] = null;    //0 Site Id
        $array[] = null;    //1 Circle
        $array[] = null;    //2 Culster
        $array[] = null;    //3 Make
        $array[] = null;    //4 AM NAME
        $array[] = null;    //5 Mob no.
        $array[] = null;     //6 DG Mobile
    } else {
        $array[] = $arr1[4];    //0 Site Id
        $array[] = $arr1[39];    //1 Circle
        $array[] = $arr1[38];    //2 Culster
        $array[] = $arr1[37];    //3 Make
        $array[] = $arr1[41];    //4 AM NAME
        $array[] = $arr1[42];    //5 Mob no.
        $array[] = $arr1[43];     //6 DG Mobile
    }

    //What Diffs to Retrieve
    //$array[] = new DateTime(arr2[5]);	//7 From Time
    $array[] = date_create_from_format('Y-m-d H:i:s', $arr2[5]);
    //$array[] = new DateTime(arr1[5]);	//8 To Time
    $array[] = date_create_from_format('Y-m-d H:i:s', $arr1[5]);

    // echo "F: $arr2[5]". " > ".$array[7]->format('Y-m-d H:i:s')."<br>";
    // echo "T: $arr1[5]". " > ".$array[8]->format('Y-m-d H:i:s')."<br>";

    $array[] = $array[7]->diff($array[8]);    //9 Interval
    //echo "Interval: ".$array[2]->format("%d %h %i")."<br>";
    //var_dump($array[2]);

    $delta_h = ($array[8]->getTimestamp() - $array[7]->getTimestamp()) / 3600;
    $array[] = $delta_h;    //10 Hours
    //echo "Hours: $array[3]<br>";

    if ($arr1[6] == 118 || $arr1[6] == 120 || $arr1[6] == 50 || $arr1[6] == 51) {
        $array[] = round(abs($arr1[25] - $arr2[25]), 1); //11 System On DG
        $array[] = round(abs($arr1[26] - $arr2[26]), 1); //12 System On Mains
        $array[] = round(abs($arr1[27] - $arr2[27]), 1); //13 System On Batt
    } else {
        $array[] = round(abs($arr1[26] - $arr2[26]), 1); //11 System On DG
        $array[] = round(abs($arr1[27] - $arr2[27]), 1); //12 System On Mains
        $array[] = round(abs($arr1[28] - $arr2[28]), 1); //13 System On Batt
    }

    //echo "DG: ".$arr1[26]." - ".$arr2[26]." = ".$array[4]."<br>";
    //echo "Mains: ".$arr1[27]." - ".$arr2[27]." = ".$array[5]."<br>";
    //echo "Batt: ".$arr1[28]." - ".$arr2[28]." = ".$array[6]."<br>";

    $array[] = $arr1[43];    //14 Site Name

    if ($arr1[6] == 118 || $arr1[6] == 120 || $arr1[6] == 50 || $arr1[6] == 51) {
        $array[] = null; //15
        $array[] = null; //16
        $array[] = null; //17
        $array[] = abs($arr1[31] - $arr2[31]); //18 I/P Mains Energy Kwh
        $array[] = abs($arr1[30] - $arr2[30]); //19 DG Energy Kwh
        $array[] = null; //20

    } else {
        //15
        if ($arr1[5] < $arr2[5]) {
            $array[] = CalculateGeneratorFailedToStopTime($arr1[4], $arr1[5], $arr2[5]);
        } else {
            $array[] = CalculateGeneratorFailedToStopTime($arr1[4], $arr2[5], $arr1[5]);
        }

        if (($arr1[6] == 1) && ($arr1[2] == 2)) {    //Double DG
            $array[] = 1;    //16 Double DG Case
            $array[] = abs($arr1[38][6] - $arr2[38][6]); //17 System On DG2
        } else if (($arr1[6] == 3) && ($arr1[2] == 3)) {    //Double DG Solar
            $array[] = 1;    //16 Double DG Case
            $array[] = abs($arr1[38][5] - $arr2[38][5]); //17 System On DG2
        } else {
            $array[] = 0;    //16 Double DG Case
            $array[] = 0;     //17 System On DG2 - 0
        }

        $array[] = abs($arr1[29] - $arr2[29]); //18 O/P Mains Energy
        $array[] = abs($arr1[30] - $arr2[30]); //19 DG Energy

        if ($arr1[6] == 3)
            $array[] = abs($arr1[38][0] - $arr2[38][0]); //20 Battery Discharging Energy
        else
            $array[] = abs($arr1[38] - $arr2[38]); //20 Battery Discharging Energy

    }

    $array[] = $arr1[6]; //21 Device ID

    if ($arr1[6] == 118 || $arr1[6] == 120) {
        $array[] = $arr2[25]; //22 DG incremental
        $array[] = $arr2[26]; //23 Mains incremental
        $array[] = $arr2[27]; //24 Batt incremental
    } else {
        $array[] = $arr2[26]; //22 DG incremental
        $array[] = $arr2[27]; //23 Mains incremental
        $array[] = $arr2[28]; //24 Batt incremental
    }

    if ($arr1[6] == 3 && $arr1[2] == 3) {
        $array[] = abs($arr1[38][12] - $arr2[38][12]); //25 System On PV
        $array[] = abs($arr1[38][13] - $arr2[38][13]); //26 PV Energy
    } else if ($arr1[6] == 50 || $arr1[6] == 51) {
        $array[] = round(abs($arr1[22] - $arr2[22]), 1); //25 System On PV
        $array[] = round(abs($arr1[21] - $arr2[21]), 1); //26 PV Energy
    } else {
        $array[] = 0; //25
        $array[] = 0; //26
    }

    $array[] = $arr1[2]; //27 Data Validated 

    if ($arr1[6] == 118) {
        $dcem1 = $arr1[32]
            + $arr1[33]
            + $arr1[34]
            + $arr1[35]
            + $arr1[36]
            + $arr1[37]
            + $arr1[38][0]
            + $arr1[38][1]
            + $arr1[38][2]
            + $arr1[38][3]
            + $arr1[38][4]
            + $arr1[38][5]
            + $arr1[38][6]
            + $arr1[38][7]
            + $arr1[38][8]
            + $arr1[38][9];

        $dcem2 = $arr2[32]
            + $arr2[33]
            + $arr2[34]
            + $arr2[35]
            + $arr2[36]
            + $arr2[37]
            + $arr2[38][0]
            + $arr2[38][1]
            + $arr2[38][2]
            + $arr2[38][3]
            + $arr2[38][4]
            + $arr2[38][5]
            + $arr2[38][6]
            + $arr2[38][7]
            + $arr2[38][8]
            + $arr2[38][9];

        $array[] = abs($dcem1 - $dcem2); //28 //DCEM 4 Channels
    } else if ($arr1[6] == 120) {
        $dcem1 = $arr1[32]
            + $arr1[33]
            + $arr1[34]
            + $arr1[35]
            + $arr1[36]
            + $arr1[37];

        $dcem2 = $arr2[32]
            + $arr2[33]
            + $arr2[34]
            + $arr2[35]
            + $arr2[36]
            + $arr2[37];

        $array[] = abs($dcem1 - $dcem2); //28 //DCEM 4 Channels
    } else if ($arr1[6] == 50 || $arr1[6] == 51) {
        $dcem1 = abs($arr1[32] - $arr2[32]);
        $dcem2 = abs($arr1[36] - $arr2[36]);
        $dcem3 = abs($arr1[38][2] - $arr2[38][2]);
        $dcem4 = abs($arr1[38][6] - $arr2[38][6]);

        $array[] = $dcem1 + $dcem2 + $dcem3 + $dcem4; //28 //DCEM 4 Channels
    } else {
        $array[] = null; //28
    }

    if ($arr1[6] == 50 || $arr1[6] == 51) {
        $array[] = round(abs($arr1[23] - $arr2[23]), 1); // 29 Solar + EB run hours
        $array[] = round(abs($arr1[24] - $arr2[24]), 1); // 30 Solar + DG run hours
        $array[] = round(abs($arr1[35] - $arr2[35]), 1); // 31 Solar + BB run hours
    } else {
        $array[] = null; // 29 Solar + EB run hours
        $array[] = null; // 30 Solar + DG run hours
        $array[] = null; // 31 Solar + BB run hours
    }

    // Comparison of Load Energy AND Load Power for Airtel
    if ($arr1[6] == 118 || $arr1[6] == 120) {
        $array[] = round(abs($arr1[32] - $arr2[32]), 1); // 32 DCEM1 CH1
        $array[] = round(abs($arr1[33] - $arr2[33]), 1); // 33 DCEM1 CH2
        $array[] = round(abs($arr1[34] - $arr2[34]), 1); // 34 DCEM1 CH3
        $array[] = round(abs($arr1[35] - $arr2[35]), 1); // 35 DCEM1 CH4
    } else if ($arr1[6] == 50 || $arr1[6] == 51) {
        $array[] = round(abs($arr1[32] - $arr2[32]), 1); // 32 DCEM1 CH1
        $array[] = round(abs($arr1[36] - $arr2[36]), 1); // 33 DCEM1 CH2
        $array[] = round(abs($arr1[38][2] - $arr2[38][2]), 1); // 34 DCEM1 CH3
        $array[] = round(abs($arr1[38][6] - $arr2[38][6]), 1); // 35 DCEM1 CH4
    } else {
        $array[] = null; // 32 DCEM1 CH1
        $array[] = null; // 33 DCEM1 CH2
        $array[] = null; // 34 DCEM1 CH3
        $array[] = null; // 35 DCEM1 CH4
    }

    if ($arr1[6] == 50 || $arr1[6] == 51) {
        $array[] = $arr2[21]; // 36 Incremental Solar KWH
    } else {
        $array[] = null; // 36
    }

    // echo "<script>console.log('array'," . json_encode($array) . ");</script>";

    return $array;
}

function GetComparisonFromIds($id1, $id2)
{
    $arr1 = GetDeviceRecordFromId($id1);    //New
    $arr2 = GetDeviceRecordFromId($id2);    //Old

    return GetComparisonFromRecords($arr1, $arr2);
}


function GetSiteDetailFromId($id)
{
    $array = array();

    include 'dbinc.php';


    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }


    $order = "SELECT 
			b.site_id, b.ClusterId, b.DeviceName, b.DeviceMake, b.Circle, b.SiteName, b.District, b.mobile, b.Longitude, b.Latitude, b.SiteIndoorType,  b.DG_KVA, b.SAM_Name, b.SAM_Number, b.AM_Name, b.AM_Number, b.Tech_Name,  b.Tech_Number, b.Comments,
			c.Name, 
			b.date_of_installation, b.DG_make, b.EB_capacity, b.EB_phase, b.battery_AH, b.battery_qty, b.battery_make, 
			b.DG2_KVA, b.DG2_MAKE, b.site_type, b.sam_email, b.am_email, b.tech_email, b.quanta_id
		FROM siteinfo b, clusters c 
		WHERE (b.ClusterId = c.Id) AND b.id=" . $id;

    //print($order);
    //print("<br>");

    $result = $mysqli->query($order);

    $data = $result->fetch_row();

    $array[]    = $data[0];    //0 Site ID String
    $array[]    = $data[1];    //1 ClusterId
    $array[]    = $data[2];    //2 DeviceName
    $array[]    = $data[3];    //3 DeviceMake
    $array[]    = $data[4];    //4 Circle
    $array[]    = $data[5];    //5 SiteName
    $array[]    = $data[6];    //6 District
    $array[]    = $data[7];    //7 mobile
    $array[]    = $data[8];    //8 Longitude
    $array[]    = $data[9];    //9 Latitude
    $array[]    = $data[10];    //10 SiteIndoorType
    $array[]    = $data[11];    //11 DG_KVA
    $array[]    = $data[12];    //12 SAM_Name
    $array[]    = $data[13];    //13 SAM_Number
    $array[]    = $data[14];    //14 AM_Name
    $array[]    = $data[15];    //15 AM_Number
    $array[]    = $data[16];    //16 Tech_Name
    $array[]    = $data[17];    //17 Tech_Number
    $array[]    = $data[18];    //18 Comments
    $array[]    = $data[19];    //19 Cluster Name

    // Depricated code
    // $quanta_id = GetLatestQuantaIdFromSiteId($data[0]);
    // $array[]    = $quanta_id;    //20 Latest Data Quanta Id

    $array[]    = $data[33];    //20 Latest Data Quanta Id

    $array[]    = $data[20];    //21 date_of_installation
    $array[]    = $data[21];    //22 DG_make
    $array[]    = $data[22];    //23 EB_capacity
    $array[]    = $data[23];    //24 EB_phase
    $array[]    = $data[24];    //25 battery_AH
    $array[]    = $data[25];    //26 battery_qty
    $array[]    = $data[26];    //27 battery_make
    $array[]    = $data[27];    //28 DG2_KVA
    $array[]    = $data[28];    //29 DG2_MAKE
    $array[]    = $data[29];    //30 site_type
    $array[]    = $data[30];    //31 sam_email
    $array[]    = $data[31];    //32 am_email
    $array[]    = $data[32];    //33 tech_email
    // $array[]    = $data[33];    //33 quanta_id | used on position [20] TODO: refactor


    $result->close();
    mysqli_close($mysqli);

    //var_dump($array);

    return $array;
}

function GetLatestQuantaIdFromSiteId($site_id)
{
    include 'dbinc.php';

    $retval = null;

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    //Get first Id
    $sql = "SELECT
					id
				FROM
				  quanta
				WHERE
					site_id=\"$site_id\" 
				ORDER BY 
					date_time DESC 
				LIMIT 1";

    //echo "$sql <br>";

    $result = $mysqli->query($sql);
    //var_dump($result);
    if ($result !== false) {
        $data = $result->fetch_row();
        $id1        = $data[0];    //First Id
        //echo "<br>ID1: $id1";

        $retval = $id1;

        $result->close();
    }

    mysqli_close($mysqli);

    return $retval;
}

function GetFirstQuantaIdFromSiteId($site_id)
{
    include 'dbinc.php';

    $retval = null;

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    //Get first Id
    $sql = "SELECT
					id
				FROM
				  quanta
				WHERE
					site_id=\"$site_id\" 
				ORDER BY 
					date_time
				LIMIT 1";

    // echo "$sql <br>";

    $result = $mysqli->query($sql);
    //var_dump($result);
    if ($result !== false) {
        $data = $result->fetch_row();
        $id1        = $data[0];    //First Id
        //echo "<br>ID1: $id1";

        $retval = $id1;

        $result->close();
    }

    mysqli_close($mysqli);

    return $retval;
}


function GetSiteStatsFromId($site_id)
{
    //return GetSiteStatsFromIdStartInterval($site_id, null, 24);
    //return GetSiteStatsFromIdStartInterval($site_id, "2015-05-16 16:02:04", 24);
    return GetSiteStatsFromIdStartInterval($site_id, "2015-05-02 15:16:26", 24);
}

function GetSiteStatsFromIdStartInterval($site_id, $start_date_time, $hours)
{
    include 'dbinc.php';

    $sql_dt = "";
    if ($start_date_time == null) {
        $ist = time() + (330 * 60);    //+5:30 for IST
        $str_ist = date('Y-m-d H:i:s', $ist);
        //$sql_dt = "NOW()";
        $sql_dt = "\"" . $str_ist . "\"";
    } else {
        //$sql_dt = "\"".date_create_from_format('Y-m-d H:i:s', $start_date_time)."\"";
        $sql_dt = "\"" . $start_date_time . "\"";
    }


    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    //Get first Id
    $sql = "SELECT
					id,
					date_time
				FROM
				  quanta
				WHERE
					site_id=\"$site_id\" 
				ORDER BY
				  (ABS(TIMESTAMPDIFF(SECOND, date_time, ($sql_dt)))) ASC
				LIMIT 1";

    //echo "$sql <br>";

    $result = $mysqli->query($sql);
    //var_dump($result);
    if ($result !== false) {
        $data = $result->fetch_row();
        $id1        = $data[0];    //First Id
        //echo "<br>ID1: $id1";

        $new_dt = date_create_from_format('Y-m-d H:i:s', $data[1]);
        $new_dt->sub(new DateInterval('PT' . $hours . 'H'));
        $sql_dt = "\"" . $new_dt->format('Y-m-d H:i:s') . "\"";

        $result->close();


        //Get 2nd Id
        $sql = "SELECT
						id
					FROM
					  quanta
					WHERE
						site_id=\"$site_id\"  					  
					ORDER BY
					  (ABS(TIMESTAMPDIFF(SECOND, date_time, ($sql_dt)))) ASC
					LIMIT 2";

        //echo "$sql <br>";

        $result = $mysqli->query($sql);
        if ($result !== false) {
            $data1 = $result->fetch_row();
            $id2        = $data1[0];    //Second Id
            //echo "<br>ID2: $id2";

            if ($id1 == $id2) {
                //echo "<br>Same Id $id1 and $id2, We have results more than given time interval apart<br>";
                //Find the next record

                $data1 = $result->fetch_row();
                if ($data1 !== false) {
                    $id2 = $data1[0];    //Second Id
                } else {
                    //We have not enough records
                    $result->close();
                    mysqli_close($mysqli);
                    echo "Not Enough Records";
                    return null;
                }
            }

            $result->close();

            // echo "<br>Comparison between $id1 and $id2<br>";
            $array = GetComparisonFromIds($id1, $id2);

            mysqli_close($mysqli);
            return $array;
        }
    }

    mysqli_close($mysqli);
    echo "NULL";

    return null;
}

function GetSiteStatsFromIdStartEnd($site_id, $start_date_time, $end_date_time)
{
    include 'dbinc.php';

    if ($start_date_time == null) {
        return null;
    }
    if ($end_date_time == null) {
        return null;
    }

    $sql_sdt = "\"" . $start_date_time . "\"";
    $sql_edt = "\"" . $end_date_time . "\"";



    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }
    //Get first Id
    $sql = "SELECT
					id,
					date_time
				FROM
				  quanta
				WHERE
					site_id=\"$site_id\" 
				ORDER BY
				  (ABS(TIMESTAMPDIFF(SECOND, date_time, ($sql_edt)))) ASC
				LIMIT 1";


    $result = $mysqli->query($sql);
    //var_dump($result);

    if ($result !== false) {
        if ($result->num_rows > 0) {

            $data = $result->fetch_row();
            $id1        = $data[0];    //First Id
            //echo "<br>ID1: $id1";
            //var_dump( $id1);
            $result->close();


            //Get 2nd Id
            $sql = "SELECT
                            id
                        FROM
                        quanta
                        WHERE
                            site_id=\"$site_id\"  					  
                        ORDER BY
                        (ABS(TIMESTAMPDIFF(SECOND, date_time, ($sql_sdt)))) ASC
                        LIMIT 2";

            //echo "$sql <br>";

            $result = $mysqli->query($sql);
            if ($result !== false) {
                $data1 = $result->fetch_row();
                $id2        = $data1[0];    //Second Id
                //echo "<br>ID2: $id2";
                //var_dump( $id2);

                if ($id1 == $id2) {
                    //echo "<br>Same Id $id1 and $id2, We have results more than given time interval apart<br>";
                    //Find the next record

                    $data1 = $result->fetch_row();
                    if ($data1 !== false) {
                        $id2 = $data1[0];    //Second Id
                    } else {
                        //We have not enough records
                        $result->close();
                        mysqli_close($mysqli);
                        echo "Not Enough Records";
                        return null;
                    }
                }

                $result->close();
                //echo "<br>Comparison between $id1 and $id2<br>";
                $array = GetComparisonFromIds($id1, $id2);

                mysqli_close($mysqli);
                return $array;
            }
        } else {
            //No Data

        }
    }

    mysqli_close($mysqli);
    //echo "NULL";

    return null;
}

function GetSiteStatsFromIdStartEndIntervalOnly($site_id, $start_date_time, $end_date_time)
{
    include 'dbinc.php';

    if ($start_date_time == null) {
        return null;
    }
    if ($end_date_time == null) {
        return null;
    }

    $sql_sdt = "\"" . $start_date_time . "\"";
    $sql_edt = "\"" . $end_date_time . "\"";

    // Swapping if dates are opposite
    if ($sql_sdt > $sql_edt) {
        $tmp_dt = $sql_sdt;
        $sql_sdt = $sql_edt;
        $sql_edt = $tmp_dt;
    }

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }
    //Get first Id
    // $sql = "SELECT
    // 				id,
    // 				date_time
    // 			FROM
    // 			  quanta
    // 			WHERE
    // 				site_id=\"$site_id\" 
    // 			ORDER BY
    // 			  (ABS(TIMESTAMPDIFF(SECOND, date_time, ($sql_edt)))) ASC
    // 			LIMIT 1";

    $sql = "SELECT id, date_time
  			FROM quanta
        WHERE site_id=\"$site_id\" AND date_time BETWEEN $sql_sdt AND $sql_edt 
  			ORDER BY date_time ASC
  			LIMIT 1";

    // echo "sql1 $sql" . "<br />";

    $result = $mysqli->query($sql);
    //var_dump($result);

    if ($result) {
        if ($result->num_rows > 0) {

            $data = $result->fetch_row();
            if (!$data) return null;
            $id1 = $data[0];    //First Id
            //echo "<br>ID1: $id1";
            //var_dump( $id1);
            $result->close();


            //Get 2nd Id
            // $sql = "SELECT
            //                 id
            //             FROM
            //             quanta
            //             WHERE
            //                 site_id=\"$site_id\"  					  
            //             ORDER BY
            //             (ABS(TIMESTAMPDIFF(SECOND, date_time, ($sql_sdt)))) ASC
            //             LIMIT 2";

            $sql = "SELECT id, date_time
  			FROM quanta
        WHERE site_id=\"$site_id\" AND date_time BETWEEN $sql_sdt AND $sql_edt 
  			ORDER BY date_time DESC
  			LIMIT 2";

            // echo "sql2 $sql" . "<br />";

            $result = $mysqli->query($sql);
            if ($result) {
                $data1 = $result->fetch_row();
                if (!$data1) return null;
                $id2 = $data1[0];    //Second Id
                //echo "<br>ID2: $id2";
                //var_dump( $id2);

                if ($id1 == $id2) {
                    //echo "<br>Same Id $id1 and $id2, We have results more than given time interval apart<br>";
                    //Find the next record

                    $data1 = $result->fetch_row();
                    if ($data1) {
                        // echo "data:" . json_encode($data) . "<br />";
                        $id2 = $data1[0];    //Second Id
                    } else {
                        //We have not enough records
                        $result->close();
                        mysqli_close($mysqli);
                        // echo "Not Enough Records";
                        return null;
                    }
                }

                $result->close();
                // echo "<br>Comparison between $id1 and $id2<br>";
                $array = GetComparisonFromIds($id1, $id2);

                mysqli_close($mysqli);
                return $array;
            }
        } else {
            //No Data

        }
    }

    mysqli_close($mysqli);
    //echo "NULL";

    return null;
}

function GetDaySiteStatsFromId($site_id, $date)
{
    include 'dbinc.php';

    if ($site_id == null) {
        return null;
    }
    if ($date == null) {
        return null;
    }

    $sql_sdt = "\"" . $date . " 00:00:00" . "\"";
    $sql_edt = "\"" . $date . " 23:59:59" . "\"";



    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    //Get first Id
    $sql = "SELECT
					id
				FROM
				  quanta
				WHERE
					(site_id=\"$site_id\") AND (date_time between $sql_sdt and $sql_edt) 
				ORDER BY
				  date_time ASC
				LIMIT 1";

    //echo "$sql <br>";

    $result = $mysqli->query($sql);
    //var_dump($result);
    if ($result !== false) {
        $data = $result->fetch_row();
        $id1        = $data[0];    //First Id
        //echo "<br>ID1: $id1";

        $result->close();


        //Get 2nd Id
        $sql = "SELECT
						id
					FROM
					  quanta
					WHERE
					  (site_id=\"$site_id\") AND (date_time between $sql_sdt and $sql_edt)  					  
					ORDER BY
					  date_time DESC
					LIMIT 2";

        //echo "$sql <br>";

        $result = $mysqli->query($sql);
        if ($result !== false) {
            $data1 = $result->fetch_row();
            $id2        = $data1[0];    //Second Id
            //echo "<br>ID2: $id2";

            if ($id1 == $id2) {
                //Only one record
                return null;
            }

            $result->close();

            //echo "<br>Comparison between $id1 and $id2<br>";
            $array = GetComparisonFromIds($id1, $id2);

            mysqli_close($mysqli);
            return $array;
        }
    }

    mysqli_close($mysqli);
    echo "NULL";

    return null;
}

function GetDailySiteStatsFromIdStartEnd($site_id, $start_date_time, $end_date_time)
{
    include 'dbinc.php';

    if ($start_date_time == null) {
        return null;
    }
    if ($end_date_time == null) {
        return null;
    }

    $sql_sdt = "\"" . $start_date_time . "\"";
    $sql_edt = "\"" . $end_date_time . "\"";

    $array = array();



    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    //Get first Id


    $sql = "SELECT vm.id
					FROM quanta AS vm 
					JOIN  
					( 
						SELECT MIN( id ) AS id 
						FROM 
							quanta 
						WHERE 
							(site_id=\"$site_id\") and (date_time<=\"$start_date_time\") and (date_time>=\"$end_date_time\")  
						GROUP BY DATE( date_time ) 
					) AS vi  
						ON vi.id = vm.id
					";

    //echo "$sql <br>";

    $result = $mysqli->query($sql);

    if ($result !== false) {
        while ($data = $result->fetch_row()) {
            $arr1 = GetDeviceRecordFromId($data[0]);
            //var_dump($arr1);
            $arr2 = array();
            $arr2[] = date_create_from_format('Y-m-d H:i:s', $arr1[5]);    //0 Date Time
            $arr2[] = $arr1[26]; //1 DG
            $arr2[] = $arr1[27]; //2 Mains
            $arr2[] = $arr1[28]; //3 Batt
            $array[] = $arr2;
        }
    }

    //var_dump($array);

    $result->close();

    mysqli_close($mysqli);
    //echo "NULL";

    return $array;
}


function GetQuantaStatusFromId($id)
{
    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $order = "SELECT 
					date_time, status
				FROM quanta 
				WHERE id=" . $id;

    //echo "order: $order<br>";
    $result = $mysqli->query($order);

    $data = $result->fetch_row();

    $array = array();
    $array[] = $data[0];
    $array[] = $data[1];

    $result->close();

    return $array;
}


//Shift through the quanta's for the site and get originating time of the given alarm(s)
function GetAlarmHistory($site_id, $history)
{
    //var_dump($history);
    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $order = "SELECT ID " .
        "FROM quanta WHERE site_id='$site_id' " .
        "ORDER BY timestamp DESC ";

    //echo "order: $order<br>";
    $result = $mysqli->query($order);
    //var_dump($result);

    while ($data = $result->fetch_row()) {
        $array = GetQuantaStatusFromId($data[0]);
        //var_dump($array);
        $stats = unpack("C*", $array[1]);

        $done = true;
        for ($i = 0; $i < count($history); $i++) {
            if ($history[$i][2] == false) {    //False == last date not found
                if (($stats[$history[$i][0]] & $history[$i][1]) == false) {
                    //Alarm No Longer Present.
                    //Last entry was having last alert
                    $history[$i][2] = true;
                } else {
                    //Alarm Present, just update time
                    $history[$i][3] = $array[0];
                }

                $done = false;
            }
        }

        if ($done == true) {
            //No more alert remaining, just exit loop
            break;
        }
    }

    //var_dump($history);

    $result->close();
    mysqli_close($mysqli);

    return $history;
}

function GetSiteDateRange($site_id)
{
    include 'dbinc.php';

    $array = array();

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $order = "SELECT ID, date_time " .
        "FROM quanta WHERE site_id='$site_id' " .
        "ORDER BY timestamp ASC LIMIT 1";

    //echo "order: $order<br>";
    $result = $mysqli->query($order);
    //var_dump($result);

    $data = $result->fetch_row();
    $array[] = $data[1];

    $result->close();

    $order = "SELECT ID, date_time " .
        "FROM quanta WHERE site_id='$site_id' " .
        "ORDER BY timestamp DESC LIMIT 1";

    //echo "order: $order<br>";
    $result = $mysqli->query($order);


    $data = $result->fetch_row();
    $array[] = $data[1];

    $result->close();



    mysqli_close($mysqli);

    //var_dump($site_id);
    //var_dump($array);

    return $array;
}


function GetDetailsFromSiteId($site_id)
{
    $array = array();

    include 'dbinc.php';


    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $sql = "SELECT 
			b.ClusterId, c.name, b.site_id, b.DeviceName, b.DeviceMake, b.Circle, b.SiteName, b.District, 
			b.mobile, b.Longitude, b.Latitude, b.SiteIndoorType,  b.DG_KVA, 
			b.SAM_Name, b.SAM_Number, b.AM_Name, b.AM_Number, b.Tech_Name,  b.Tech_Number, b.Comments, 
			b.date_of_installation, b.DG_make, b.EB_capacity, b.EB_phase, b.battery_AH, b.battery_qty, b.battery_make, 
			b.DG2_KVA, b.DG2_MAKE, b.site_type 
			
			FROM siteinfo b, clusters c
			WHERE (b.ClusterId = c.Id) AND b.site_id='" . $site_id . "'";

    //echo $sql;

    $result = $mysqli->query($sql);

    if ($result !== false) {
        $data = $result->fetch_row();

        //var_dump($data);

        $array[]    = $data[0];        // ClusterId
        $array[]    = $data[1];        // Cluster Name
        $array[]    = $data[2];        // site_id
        $array[]    = $data[3];        // DeviceName
        $array[]    = $data[4];        // DeviceMake
        $array[]    = $data[5];        // Circle
        $array[]    = $data[6];        // SiteName
        $array[]    = $data[7];        // District
        $array[]    = $data[8];        // Site Mobile
        $array[]    = $data[9];        // Longitude

        $array[]    = $data[10];    // Latitude
        $array[]    = $data[11];    // SiteIndoorType
        $array[]    = $data[12];    // DG_KVA
        $array[]    = $data[13];    // SAM_Name
        $array[]    = $data[14];    // SAM_Number
        $array[]    = $data[15];    // AM_Name
        $array[]    = $data[16];    // AM_Number
        $array[]    = $data[17];    // Tech_Name
        $array[]    = $data[18];    // Tech_Number

        $array[]    = $data[19];    // Comments

        $array[]    = $data[20];    // date_of_installation
        $array[]    = $data[21];    // DG_make
        $array[]    = $data[22];    // EB_capacity
        $array[]    = $data[23];    // EB_phase
        $array[]    = $data[24];    // battery_AH
        $array[]    = $data[25];    // battery_qty
        $array[]    = $data[26];    // battery_make

        $array[]    = $data[27];    // DG2_KVA
        $array[]    = $data[28];    // DG2_MAKE
        $array[]    = $data[29];    // site_type
    } else {
        printf("\nSQL ERROR: %s\n", $mysqli->error);
    }

    $result->close();
    mysqli_close($mysqli);

    //var_dump($array);

    return $array;
}

function DataExport($site_id, $export_page_no, $excel_format)
{
    //var_dump($site_id);
    include 'dbinc.php';

    $rec_limit = 5000;
    $rec_start = ($export_page_no - 1) * $rec_limit;

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $where_clause = "WHERE (site_id = '$site_id') ";
    //		$filter_data_type = 0;
    //		if ($_GET['filter_data_type'] == 1) {$where_clause = $where_clause." AND type=1  "; $filter_data_type = 1;}
    //		if ($_GET['filter_data_type'] == 2) {$where_clause = $where_clause." AND type=0  "; $filter_data_type = 2;}

    /* Get total number of records */
    $sql = "SELECT count(ID) FROM quanta " . $where_clause;
    //echo "Final: $sql<br>";
    $retval = $mysqli->query($sql);
    if (!$retval) {
        die('No Data' . $mysqli->error);
    }

    $row = $retval->fetch_array(MYSQLI_NUM);
    $rec_count = $row[0];

    $order = "SELECT ID " .
        "FROM quanta " . $where_clause .
        "ORDER BY timestamp DESC " .
        "LIMIT $rec_limit OFFSET $rec_start ";

    //echo "order: $order<br>";
    $result = $mysqli->query($order);


    // output headers so that the file is downloaded rather than displayed
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=exported_data.csv');

    // create a file pointer connected to the output stream
    $output = fopen('php://output', 'w');

    // Heading and other information

    $date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
    $localtime_str = $date->format('Y-m-d H:i:s');

    fputcsv($output, array('Site Data Exported on ' . $localtime_str));
    //fputcsv($output, array('Filter Details -- Data Type: '.$filter_data_type_str.', Site: '.$site_list_data_type_str));
    fputcsv($output, array(''));

    // output the column headings
    $first_time = true;
    $count = 0;
    while ($data = $result->fetch_row()) {
        $array = GetDeviceRecordFromIdExport($data[0], true);

        if ($first_time) {
            if ($array[6] == 1) {
                if ($array[2] == 2) {
                    fputcsv($output, array(
                        'Id',
                        'Periodic / Fault',
                        'Site Id',
                        'Date Time',
                        'Device Code',
                        'Status Bits',
                        'Temperature',
                        'Fuel Level',
                        'Fuel Data',
                        'Batt Voltage',
                        'R-Phase Current',
                        'Y-Phase Current',
                        'B-Phase Current',
                        'Mains Frequency',
                        'DG Frequency',
                        'DG-R Phase Voltage',
                        'DG-Y Phase Voltage',
                        'DG-B Phase Voltage',
                        'LCU1 Output Voltage',
                        'LCU2 Output Voltage',
                        'LCU3 Output Voltage',
                        'Mains Voltage - R Phase',
                        'Mains Voltage - Y Phase',
                        'Mains Voltage - B Phase',
                        'DG Running Hours',
                        'Mains Run Hours',
                        'Batt Run Hours',
                        'O/P Mains Energy',
                        'DG Energy',
                        'I/P Mains Energy',
                        'DG Battery Voltage',
                        'Battery Charging Current',
                        'Battery Discharging Current',
                        'Battery Status',
                        'Battery Backup Time',
                        'Battery Charging Energy',
                        'Battery Discharging Energy',
                        'DG2 frequency',
                        'DG2-R phase Voltage VAC',
                        'DG2-Y phase Voltage VAC',
                        'DG2-B phase Voltage VAC',
                        'DG2 Running Hours Hrs',
                        'DG2 Energy Kwh',
                        'DG2 Battery Voltage VDC',
                        'Fuel Level of DG2 %',
                        'Fuel data of DG2 liter'
                    ));


                    //					$size1 = sizeof($array);
                    //					$size2 = sizeof($array[$size1-1]);
                    //					fputcsv($output,array("$size1.","$size2.","$size"));
                } else {
                    fputcsv($output, array(
                        'Id',
                        'Periodic / Fault',
                        'Site Id',
                        'Date Time',
                        'Device Code',
                        'Status Bits',
                        'Temperature',
                        'Fuel Level',
                        'Fuel Data',
                        'Batt Voltage',
                        'R-Phase Current',
                        'Y-Phase Current',
                        'B-Phase Current',
                        'Mains Frequency',
                        'DG Frequency',
                        'DG-R Phase Voltage',
                        'DG-Y Phase Voltage',
                        'DG-B Phase Voltage',
                        'LCU1 Output Voltage',
                        'LCU2 Output Voltage',
                        'LCU3 Output Voltage',
                        'Mains Voltage - R Phase',
                        'Mains Voltage - Y Phase',
                        'Mains Voltage - B Phase',
                        'DG Running Hours',
                        'Mains Run Hours',
                        'Batt Run Hours',
                        'O/P Mains Energy',
                        'DG Energy',
                        'I/P Mains Energy',
                        'DG Battery Voltage',
                        'Battery Charging Current',
                        'Battery Discharging Current',
                        'Battery Status',
                        'Battery Backup Time',
                        'Battery Charging Energy',
                        'Battery Discharging Energy'
                    ));
                }
            } elseif ($array[6] == 2) {
                fputcsv($output, array(
                    'Id',
                    'Periodic / Fault',
                    'Site Id',
                    'Date Time',
                    'Device Code',
                    'Status Bits',
                    'Temperature',
                    'Solar array 1 Voltage',
                    'Solar array 2 Voltage',
                    'Solar array 3 Voltage',
                    'Array 1 current',
                    'Array 2 current',
                    'Array 3 current',
                    'R-Phase current',
                    'Y-Phase current',
                    'B-Phase current',
                    'Inverter Frequency',
                    'Inverter R-Phase Voltage',
                    'Inverter Y-Phase Voltage',
                    'Inverter B-Phase Voltage',
                    'Solar Run Hours',
                    'Inverter Run Hours',
                    'Solar + Inverter Run Hours',
                    'Inverter Energy',
                    'Solar Energy',
                    'Battery Bank Voltage',
                    'Battery Charging Current',
                    'Battery Discharging Current',
                    'Battery Status',
                    'Battery Charging Energy',
                    'Battery Discharging Energy'
                ));
            } elseif ($array[6] == 3) {
                if ($array[2] == 3) {
                    fputcsv($output, array(
                        'Id',
                        'Periodic / Fault',
                        'Site Id',
                        'Date Time',
                        'Device Code',
                        'Status Bits',
                        'Temperature',
                        'Fuel Level',
                        'Fuel Data',
                        'Batt Voltage',
                        'R-Phase Current',
                        'Y-Phase Current',
                        'B-Phase Current',
                        'Mains Frequency',
                        'DG Frequency',
                        'DG-R Phase Voltage',
                        'DG-Y Phase Voltage',
                        'DG-B Phase Voltage',
                        'LCU1 Output Voltage',
                        'LCU2 Output Voltage',
                        'LCU3 Output Voltage',
                        'Mains Voltage - R Phase',
                        'Mains Voltage - Y Phase',
                        'Mains Voltage - B Phase',
                        'DG Running Hours',
                        'Mains Run Hours',
                        'Batt Run Hours',
                        'O/P Mains Energy',
                        'DG Energy',
                        'I/P Mains Energy',
                        'DG Battery Voltage',
                        'Battery Charging Current',
                        'Battery Discharging Current',
                        'Battery Status',
                        'Battery Backup Time',
                        'Battery Charging Energy',
                        'Battery Discharging Energy',
                        'DG2 frequency',
                        'DG2-R phase Voltage VAC',
                        'DG2-Y phase Voltage VAC',
                        'DG2-B phase Voltage VAC',
                        'DG2 Running Hours Hrs',
                        'DG2 Energy Kwh',
                        'DG2 Battery Voltage VDC',
                        'Fuel Level of DG2 %',
                        'Fuel data of DG2 liter',
                        'PV Voltage',
                        'PV Current',
                        'PV Running Hours',
                        'PV Energy Kwh'
                    ));
                }
            } elseif ($array[6] == 32) {
                fputcsv($output, array(
                    'Id',
                    'Periodic / Fault',
                    'Site Id',
                    'Date Time',
                    'Device Code',
                    'Status Bits',
                    'Temperature',
                    'Site Batt.bank Voltage',
                    'Site Batt.bank Voltage',
                    'Load  current',
                    'Mains Voltage',
                    'DG Voltage',
                    'Input Mains Voltage –B Phase',
                    'Battery1 Charging current',
                    'Battery1 Discharging current',
                    'Battery2 Charging current',
                    'Battery2 Discharging current',
                    'Battery1 status',
                    'Battery2 status'
                ));
            } elseif ($array[6] == 118) {
                fputcsv($output, array(
                    'Id',
                    'S/W Ver.',
                    'Site ID',
                    'Date Time',
                    'Alarm',
                    'Room Temperature DEG C',
                    'Fuel Level %',
                    'Site Battery Voltage VDC',
                    'Output current',
                    'Mains Frequency',
                    'DG frequency',
                    'DG Voltage VAC',
                    'PIU O/P1 Voltage VAC',
                    'PIU O/P2 Voltage VAC',
                    'O/P3 Voltage VAC',
                    'I/P Mains Voltage 1 VAC',
                    'I/P Mains Voltage 2 VAC',
                    'I/P Mains Voltage 3 VAC',
                    'Down Counter of Site 1 Hrs',
                    'Down Counter of Site 2 Hrs',
                    'Down Counter of Site 3 Hrs',
                    'Down Counter of Site 4 Hrs',
                    'DG Run Hours Hrs',
                    'Mains Run Hours Hrs',
                    'Batt Run Hours Hrs',
                    'System Status',
                    'DG Fault Status',
                    'DG Energy Kwh',
                    'I/P Mains Energy Kwh',
                    'CH1 DCEM1',
                    'CH2 DCEM1',
                    'CH3 DCEM1',
                    'CH4 DCEM1',
                    'CH1 DCEM2',
                    'CH2 DCEM2',
                    'CH3 DCEM2',
                    'CH4 DCEM2',
                    'CH1 DCEM3',
                    'CH2 DCEM3',
                    'CH3 DCEM3',
                    'CH4 DCEM3',
                    'CH1 DCEM4',
                    'CH2 DCEM4',
                    'CH3 DCEM4',
                    'CH4 DCEM4',
                    'BTS Status'
                ));
            } elseif ($array[6] == 120) {
                fputcsv($output, array(
                    'Id',
                    'S/W Ver.',
                    'Site ID',
                    'Date Time',
                    'Alarm',
                    'Room Temperature DEG C',
                    'Solar Voltage',
                    'Site Battery Voltage VDC',
                    'Output current',
                    'Mains Frequency',
                    'DG frequency',
                    'DG Voltage VAC',
                    'PIU O/P1 Voltage VAC',
                    'PIU O/P2 Voltage VAC',
                    'O/P3 Voltage VAC',
                    'I/P Mains Voltage 1 VAC',
                    'I/P Mains Voltage 2 VAC',
                    'I/P Mains Voltage 3 VAC',
                    'Down Counter of Site 1 Hrs',
                    'Down Counter of Site 2 Hrs',
                    'Down Counter of Site 3 Hrs',
                    'Down Counter of Site 4 Hrs',
                    'DG Run Hours Hrs',
                    'Mains Run Hours Hrs',
                    'Batt Run Hours Hrs',
                    'System Status',
                    'DG Fault Status',
                    'DG Energy Kwh',
                    'I/P Mains Energy Kwh',
                    'DCEM1',
                    'DCEM2',
                    'DCEM3',
                    'DCEM4',
                    'DCEM5',
                    'DCEM6',
                    'Solar KWH',
                    'Solar Run hours',
                    'Solar + EB run hours',
                    'Solar + DG run hours',
                    'Solar + BB run hours',
                    'xxxxxxxx',
                    'xxxxxxxx',
                    'xxxxxxxx',
                    'xxxxxxxx',
                    'xxxxxxxx',
                    'Solar Current',
                    'Solar Alarm',
                ));
            } elseif ($array[6] == 50 || $array[6] == 51) {
                fputcsv($output, array(
                    'Id',
                    'S/W Ver.',
                    'Site ID',
                    'Date Time',
                    'Alarm',
                    'Room Temperature DEG C',
                    'FUEL LEVEL as 0xx percentage',
                    'SITE BATT VOLTAGE     as  xx.x Vdc',
                    'Output Current Amp',
                    'Mains Frequency',
                    'Dg frequency',
                    'DG VOLTAGE as xxx VAC',
                    'PIU OUTPUT1 VOLTAGE as xxxVAC',
                    'PIU OUTPUT2 VOLTAGE as xxxVAC',
                    'OUTPUT3 VOLTAGE as xxxVAC',
                    'INPUT MAINS VOLTAGE 1 as xxxVAC',
                    'INPUT MAINS VOLTAGE 2 as xxxVAC',
                    'INPUT MAINS VOLTAGE 3 as xxxVAC',
                    'Solar KWH ',
                    'Solar Run hours',
                    'Solar + EB run hours',
                    'Solar + DG run hours',
                    'DG RUNNING HOURS as xxxxxxx.xHrs',
                    'Mains RUN HOURS as xxxxxxx.xHrs',
                    'Batt RUN HOURS as xxxxxxx.xHrs',
                    'SYSTEM STATUS',
                    'DG FAULT STATUS',
                    'DG Energy as xxxxxxxxKwh',
                    'I/P Mains Energy as xxxxxxxxKwh',
                    'DC Energy Meter as xxxxxxx.xKwh(EM1)',
                    'Opco1 Over Power Warning 1 Power set in controller',
                    'Opco1 Over Power Warning 2 Power set in controller',
                    'Solar + BB run hours',
                    'DC Energy Meter as xxxxxxx.xKwh(EM2)',
                    'Opco2 Over Power Warning 1 Power set in controller ',
                    'Opco2 Over Power Warning 2 Power set in controller ',
                    'Opco1 Actual power',
                    'DC Energy Meter as xxxxxxx.xKwh(EM3)',
                    'Opco3 Over Power Warning 1 Power set in controller ',
                    'Opco3 Over Power Warning 2 Power set in controller',
                    'Opco2 Actual power',
                    'DC Energy Meter as xxxxxxx.xKwh(EM4)',
                    'Opco4 Over Power Warning 1 Power set in controller ',
                    'Opco4 Over Power Warning 2 Power set in controller ',
                    'Opco3 Actual power',
                    'Opco4 Actual power',
                    'Solar current',
                    'Product Serial no. ',
                    'Rectifier1 Serial no. ',
                    'Rectifier2 Serial no. ',
                    'Rectifier3 Serial no. ',
                    'Rectifier4 Serial no. ',
                    'Rectifier5 Serial no. ',
                    'Rectifier6 Serial no. ',
                    'Battery 1 - Voltage ',
                    'Battery 1 - Current ',
                    'Battery 1 - Battery module internal temperature ',
                    'Battery 1 - SOH ',
                    'Battery 1 - SOC',
                    'Battery 1 - Battery Cycle Count ',
                    'Battery 1 - Cumulative charging KWH ',
                    'Battery 1 - Cumulative discharging KWH ',
                    'Battery 2 - Voltage ',
                    'Battery 2 - Current ',
                    'Battery 2 - Battery module internal temperature ',
                    'Battery 2 - SOH ',
                    'Battery 2 - SOC',
                    'Battery 2 - Battery Cycle Count ',
                    'Battery 2 - Cumulative charging KWH ',
                    'Battery 2 - Cumulative discharging KWH ',
                    'Battery 3 - Voltage ',
                    'Battery 3 - Current ',
                    'Battery 3 - Battery module internal temperature ',
                    'Battery 3 - SOH ',
                    'Battery 3 - SOC',
                    'Battery 3 - Battery Cycle Count ',
                    'Battery 3 - Cumulative charging KWH ',
                    'Battery 3 - Cumulative discharging KWH ',
                    'Battery 4 - Voltage ',
                    'Battery 4 - Current ',
                    'Battery 4 - Battery module internal temperature ',
                    'Battery 4 - SOH ',
                    'Battery 4 - SOC',
                    'Battery 4 - Battery Cycle Count ',
                    'Battery 4 - Cumulative charging KWH ',
                    'Battery 4 - Cumulative discharging KWH ',
                    'Battery 5 - Voltage ',
                    'Battery 5 - Current ',
                    'Battery 5 - Battery module internal temperature ',
                    'Battery 5 - SOH ',
                    'Battery 5 - SOC',
                    'Battery 5 - Battery Cycle Count ',
                    'Battery 5 - Cumulative charging KWH ',
                    'Battery 5 - Cumulative discharging KWH ',
                    'Battery 6 - Voltage ',
                    'Battery 6 - Current ',
                    'Battery 6 - Battery module internal temperature ',
                    'Battery 6 - SOH ',
                    'Battery 6 - SOC',
                    'Battery 6 - Battery Cycle Count ',
                    'Battery 6 - Cumulative charging KWH ',
                    'Battery 6 - Cumulative discharging KWH ',
                    'WARNING ALARM STRING - Module 1',
                    'PROTECTION ALARM STRING - Module 1',
                    'WARNING ALARM STRING - Module 2',
                    'PROTECTION ALARM STRING - Module 2',
                    'WARNING ALARM STRING - Module 3',
                    'PROTECTION ALARM STRING - Module 3',
                    'WARNING ALARM STRING - Module 4',
                    'PROTECTION ALARM STRING - Module 4',
                    'WARNING ALARM STRING - Module 5',
                    'PROTECTION ALARM STRING - Module 5',
                    'WARNING ALARM STRING - Module 6',
                    'PROTECTION ALARM STRING - Module 6'
                ));
            }

            $first_time = false;
        }

        if ($array[6] == 1) {
            if ($array[2] == 2) {
                $size = sizeof($array);
                $array = array_merge($array, $array[$size - 1]);
                unset($array[$size - 1]);
            }
        }

        if ($array[6] == 3) {
            if ($array[2] == 3) {
                for ($i = 0; $i <= 13; $i++) {
                    $array[] = $array[38][$i];
                }
                $array = array_diff_key($array, [38 => "xy"]);
            }
        } else if ($array[6] == 118) {
            $array[3] = $array[6];
            for ($i = 0; $i <= 10; $i++) {
                $array[] = $array[38][$i];
            }
            $array = array_diff_key($array, [6 => "xy", 38 => "xy"]);
        } else if ($array[6] == 120) {
            $array[3] = $array[6];
            for ($i = 0; $i <= 11; $i++) {
                $array[] = $array[38][$i];
            }
            $array = array_diff_key($array, [6 => "xy", 38 => "xy"]);
        } else if ($array[6] == 50 || $array[6] == 51) {
            $array[3] = $array[6];
            for ($i = 0; $i <= 78; $i++) {
                $array[] = $array[38][$i];
            }
            $array = array_diff_key($array, [6 => "xy", 38 => "xy"]);
        }

        //deleting the $array[1] and $array[2] values
        $array = array_diff_key($array, [1 => "xy", 2 => "xy"]);

        //var_dump($array);

        //For excel put status bits like ="xxxxxxxxxx"
        if ($excel_format == 1) {
            $array[7] = '="' . $array[7] . '"';
        }

        // echo "<script>console.log('header'," . json_encode($output) . ");</script>";
        // echo "<script>console.log('rows'," . json_encode($array) . ");</script>";


        fputcsv($output, $array);

        $count++;
    }


    $result->close();
    mysqli_close($mysqli);

    fclose($output);
}

// Data export for reports-root
function DataExportReportRoot($site_id, $export_page_no, $excel_format)
{
    //var_dump($site_id);
    include 'dbinc.php';

    $rec_limit = 5000;
    $rec_start = ($export_page_no - 1) * $rec_limit;

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $where_clause = "WHERE (site_id = '$site_id') ";
    //		$filter_data_type = 0;
    //		if ($_GET['filter_data_type'] == 1) {$where_clause = $where_clause." AND type=1  "; $filter_data_type = 1;}
    //		if ($_GET['filter_data_type'] == 2) {$where_clause = $where_clause." AND type=0  "; $filter_data_type = 2;}

    /* Get total number of records */
    $sql = "SELECT count(ID) FROM quanta " . $where_clause;
    //echo "Final: $sql<br>";
    $retval = $mysqli->query($sql);
    if (!$retval) {
        die('No Data' . $mysqli->error);
    }

    $row = $retval->fetch_array(MYSQLI_NUM);
    $rec_count = $row[0];

    $order = "SELECT ID " .
        "FROM quanta " . $where_clause .
        "ORDER BY timestamp DESC " .
        "LIMIT $rec_limit OFFSET $rec_start ";

    //echo "order: $order<br>";
    $result = $mysqli->query($order);


    // output headers so that the file is downloaded rather than displayed
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=exported_data.csv');

    // create a file pointer connected to the output stream
    $output = fopen('php://output', 'w');

    // Heading and other information

    $date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
    $localtime_str = $date->format('Y-m-d H:i:s');

    fputcsv($output, array('Site Data Exported on ' . $localtime_str));
    //fputcsv($output, array('Filter Details -- Data Type: '.$filter_data_type_str.', Site: '.$site_list_data_type_str));
    fputcsv($output, array(''));

    // output the column headings
    $first_time = true;
    $count = 0;
    while ($data = $result->fetch_row()) {
        $array = GetDeviceRecordFromIdExport($data[0], true);

        if ($first_time) {
            if ($array[6] == 1) {
                if ($array[2] == 2) {
                    fputcsv($output, array(
                        'Id',
                        'Periodic / Fault',
                        'Site Id',
                        'Date Time',
                        'Device Code',
                        'Status Bits',
                        'Temperature',
                        'Fuel Level',
                        'Fuel Data',
                        'Batt Voltage',
                        'R-Phase Current',
                        'Y-Phase Current',
                        'B-Phase Current',
                        'Mains Frequency',
                        'DG Frequency',
                        'DG-R Phase Voltage',
                        'DG-Y Phase Voltage',
                        'DG-B Phase Voltage',
                        'LCU1 Output Voltage',
                        'LCU2 Output Voltage',
                        'LCU3 Output Voltage',
                        'Mains Voltage - R Phase',
                        'Mains Voltage - Y Phase',
                        'Mains Voltage - B Phase',
                        'DG Running Hours',
                        'Mains Run Hours',
                        'Batt Run Hours',
                        'O/P Mains Energy',
                        'DG Energy',
                        'I/P Mains Energy',
                        'DG Battery Voltage',
                        'Battery Charging Current',
                        'Battery Discharging Current',
                        'Battery Status',
                        'Battery Backup Time',
                        'Battery Charging Energy',
                        'Battery Discharging Energy',
                        'DG2 frequency',
                        'DG2-R phase Voltage VAC',
                        'DG2-Y phase Voltage VAC',
                        'DG2-B phase Voltage VAC',
                        'DG2 Running Hours Hrs',
                        'DG2 Energy Kwh',
                        'DG2 Battery Voltage VDC',
                        'Fuel Level of DG2 %',
                        'Fuel data of DG2 liter'
                    ));


                    //					$size1 = sizeof($array);
                    //					$size2 = sizeof($array[$size1-1]);
                    //					fputcsv($output,array("$size1.","$size2.","$size"));
                } else {
                    fputcsv($output, array(
                        'Id',
                        'Periodic / Fault',
                        'Site Id',
                        'Date Time',
                        'Device Code',
                        'Status Bits',
                        'Temperature',
                        'Fuel Level',
                        'Fuel Data',
                        'Batt Voltage',
                        'R-Phase Current',
                        'Y-Phase Current',
                        'B-Phase Current',
                        'Mains Frequency',
                        'DG Frequency',
                        'DG-R Phase Voltage',
                        'DG-Y Phase Voltage',
                        'DG-B Phase Voltage',
                        'LCU1 Output Voltage',
                        'LCU2 Output Voltage',
                        'LCU3 Output Voltage',
                        'Mains Voltage - R Phase',
                        'Mains Voltage - Y Phase',
                        'Mains Voltage - B Phase',
                        'DG Running Hours',
                        'Mains Run Hours',
                        'Batt Run Hours',
                        'O/P Mains Energy',
                        'DG Energy',
                        'I/P Mains Energy',
                        'DG Battery Voltage',
                        'Battery Charging Current',
                        'Battery Discharging Current',
                        'Battery Status',
                        'Battery Backup Time',
                        'Battery Charging Energy',
                        'Battery Discharging Energy'
                    ));
                }
            } elseif ($array[6] == 2) {
                fputcsv($output, array(
                    'Id',
                    'Periodic / Fault',
                    'Site Id',
                    'Date Time',
                    'Device Code',
                    'Status Bits',
                    'Temperature',
                    'Solar array 1 Voltage',
                    'Solar array 2 Voltage',
                    'Solar array 3 Voltage',
                    'Array 1 current',
                    'Array 2 current',
                    'Array 3 current',
                    'R-Phase current',
                    'Y-Phase current',
                    'B-Phase current',
                    'Inverter Frequency',
                    'Inverter R-Phase Voltage',
                    'Inverter Y-Phase Voltage',
                    'Inverter B-Phase Voltage',
                    'Solar Run Hours',
                    'Inverter Run Hours',
                    'Solar + Inverter Run Hours',
                    'Inverter Energy',
                    'Solar Energy',
                    'Battery Bank Voltage',
                    'Battery Charging Current',
                    'Battery Discharging Current',
                    'Battery Status',
                    'Battery Charging Energy',
                    'Battery Discharging Energy'
                ));
            } elseif ($array[6] == 32) {
                fputcsv($output, array(
                    'Id',
                    'Periodic / Fault',
                    'Site Id',
                    'Date Time',
                    'Device Code',
                    'Status Bits',
                    'Temperature',
                    'Site Batt.bank Voltage',
                    'Site Batt.bank Voltage',
                    'Load  current',
                    'Mains Voltage',
                    'DG Voltage',
                    'Input Mains Voltage –B Phase',
                    'Battery1 Charging current',
                    'Battery1 Discharging current',
                    'Battery2 Charging current',
                    'Battery2 Discharging current',
                    'Battery1 status',
                    'Battery2 status'
                ));
            }

            $first_time = false;
        }

        if ($array[6] == 1) {
            if ($array[2] == 2) {
                $size = sizeof($array);
                $array = array_merge($array, $array[$size - 1]);
                unset($array[$size - 1]);
            }
        }
        //deleting the $array[1] and $array[2] values
        $array = array_diff_key($array, [1 => "xy", 2 => "xy"]);
        //var_dump($array);

        //For excel put status bits like ="xxxxxxxxxx"
        if ($excel_format == 1) {
            $array[7] = '="' . $array[7] . '"';
        }


        fputcsv($output, $array);

        $count++;
    }


    $result->close();
    mysqli_close($mysqli);

    fclose($output);
}

function GetDeviceRecordFromIdExport($id, $isExport)
{
    $array = array();

    include 'dbinc.php';


    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $order = "SELECT 
			ID, timestamp , data_validated , type , site_id , date_time , device_id , status , raw_data
			FROM quanta 
			WHERE id=" . $id;


    //echo $order;

    //$order = "SELECT * FROM quanta where id=".$id;
    $result = $mysqli->query($order);
    $data = $result->fetch_row();

    $array[]     = $data[0];        //0Unique Id
    if ($isExport) {
        $array[]     = $data[1];
    }        //1Time Stamp by Server
    if ($isExport) {
        $array[]    = $data[2];
    }        //2Validated by Server
    $array[]     = $data[3];        //3Type 0 - Periodic / 1 - Fault
    $array[]    = $data[4];        //4String Site Id
    $array[]    = $data[5];        //5Date Time by Device
    $array[]    = $data[6];        //6Device Id/ Only 1 & 2 known for now
    if (!$isExport) {
        $array[]    = $data[7];
    }        //7Status Bits - To Expand
    else {
        $array[]    = bin2hex($data[7]);
    }        //7Status Bits in Hex for Export
    $data_raw    = $data[8];        //Raw Data, for device specific information

    //var_dump($array);
    //$array = array_merge($array, DeviceGetStatusBits($data[7]));
    //var_dump($array);

    $array = GetDeviceDataParser($array, $data, $data_raw);

    $result->close();
    mysqli_close($mysqli);

    //var_dump($array);

    return $array;
}
function GetRecordCount($site_id)
{
    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $where_clause = "WHERE (site_id = '$site_id') ";
    //		$filter_data_type = 0;
    //		if ($_GET['filter_data_type'] == 1) {$where_clause = $where_clause." AND type=1  "; $filter_data_type = 1;}
    //		if ($_GET['filter_data_type'] == 2) {$where_clause = $where_clause." AND type=0  "; $filter_data_type = 2;}

    /* Get total number of records */
    $sql = "SELECT count(ID) FROM quanta " . $where_clause;
    //echo "Final: $sql<br>";
    $retval = $mysqli->query($sql);
    if (!$retval) {
        die('No Data' . $mysqli->error);
    }

    $row = $retval->fetch_array(MYSQLI_NUM);
    $rec_count = $row[0];
    mysqli_close($mysqli);
    return $rec_count;
}

function GetLatesQuantaForDatatable($site_id)
{
    $resp = array();
    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $sql = "SELECT ID,timestamp,status,raw_data FROM quanta WHERE site_id = " . $site_id . "ORDER BY timestamp DESC LIMIT 1";

    $result = $mysqli->query($sql);
    if (!$result) {
        die('No Data' . $mysqli->error);
    }
    $data = $result->fetch_row();
    $resp[] = $data[2];
    return $resp;
}

function processNotifications($siteNo, $message)
{
    //var_dump($siteNo);
    //var_dump($message);
    $msg = array(
        'title'    => $siteNo,
        'body'     => $message,
        'data' => 'Background Data String',
        'sound' => 'default',
    );

    $tokens = getTokens($siteNo);

    //var_dump($tokens);
    foreach ($tokens as $token) {
        quantaNotifications($msg, $token);
    }
}

function getTokens($siteNo)
{
    //sql:...

    include "dbinc.php";
    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    //Check if token already exists.
    $sql = "  SELECT pushNotifications.token
			FROM  `pushNotifications` 
			JOIN authentication ON pushNotifications.userId = authentication.Id
			JOIN siteinfo ON siteinfo.customerId = authentication.Customer
			WHERE siteinfo.site_id =  '$siteNo'
			LIMIT 0 , 30";
    //echo $sql;
    // prepare query statement
    $result = $mysqli->query($sql);

    $tokens = array();

    if ($result) {
        while ($row = $result->fetch_row()) {
            $tokens[] = $row[0];
        }
    }
    $result->close();
    $mysqli->close();

    return $tokens;
}

function quantaNotifications($msg, $token)
{

    //var_dump($msg);
    //var_dump($token);
    // call api...
    //echo 'Hello';
    //   $registrationIds = ;
    #prep the bundle
    // $msg = array(
    //     'title'	=> 'SISPL00001',
    //     'body' 	=> 'An Alarm Has Triggered On Site ID SISPL00001',
    //     'data' => 'Background Data String'
    //       );
    $fields = array(
        'to'        => $token,
        'priority' => 'high',
        'data'    => $msg
    );
    echo json_encode($fields);
    $headers = array(
        'Authorization: key=' . API_ACCESS_KEY,
        'Content-Type: application/json'
    );
    #Send Reponse To FireBase Server
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);
    echo $result;
    curl_close($ch);
}

function GetOldIdFromSiteId($site_id, $id)
{
    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    //$sql = 'SELECT a.tutorial_id, a.tutorial_author, b.tutorial_count
    //	FROM tutorials_tbl a, tcount_tbl b
    //	WHERE a.tutorial_author = b.tutorial_author';

    // $order = "SELECT quanta_id FROM alarms WHERE site_id = '$site_id' ORDER BY alarmId DESC LIMIT 1;";
    $order = "SELECT ID FROM quanta WHERE site_id = '$site_id' AND ID <> $id ORDER BY ID DESC LIMIT 1;";
    // echo $order;

    //$order = "SELECT * FROM quanta where id=".$id;
    $result = $mysqli->query($order);
    if ($data = $result->fetch_row()) return $data[0];

    return false;
}

function CalculateAlarms($data_alarms, $array, $type = ALARM_QUANTUM)
{
    // Fetch required params
    $data_validated = $array[2];
    $device_id = $array[6];

    $array_packet = $array;

    if ($type != ALARM_SITE) {
        $array_packet = array_slice($array, 0, 39);
        $array_packet[] = [];
        $array_packet[] = GetDashboardParser($array_packet);
    }

    // echo json_encode($array_packet[40]) . " DEBUG<br />";

    $temperature = $array_packet[40][0];
    $bts = $array_packet[40][1];
    $dg_battery = $array_packet[40][2];
    $r_phase = $array_packet[40][3];
    $y_phase = $array_packet[40][4];
    $b_phase = $array_packet[40][5];

    // Type of parsing | Applicable for index > 38


    $site_type = 1;
    $eb_capacity = 0;

    if ($type == ALARM_QUANTUM) {
        $site_type = $array[48];
        $eb_capacity = $array[58];
    } else if ($type == ALARM_SITE) {
        $site_type = $array[48];
        $eb_capacity = $array[49];
    }

    $stats = unpack("C*", $data_alarms);
    $door = false;
    $smoke = false;
    $hrt = $temperature > 40; // TODO
    $dg_battery_disconnections = $dg_battery == 0;
    $dg_battery_low = $dg_battery < 11;
    $bts_low = $bts < 47;
    $outage = $bts < 44;
    $alternator = false;
    $dg_start_fail = false;
    $dg_stop_fail = false;
    $load = "na";
    $mode = "auto";
    $three_phase_unbalance_load = false;

    //airtel alarms
    $mains_fail = false;
    $rectifier_fail = false;
    $dg_fault = false;
    $aircon_faulty = false;
    $mppt_pvc_faulty = false;
    $blvd_trip = false;

    if ($device_id == 1) {
        if ($data_validated != 2) {
            if (($stats[5] & 0x04) == false) $mode = "auto";
            else $mode = "manual";

            $smoke = !(($stats[5] & 0x01) == false);
            $door = $site_type == 0 ? !(($stats[5] & 0x02) == false) : false;

            // Load
            if (($stats[5] & 0x08) == false) {
                if (($stats[5] & 0x10) == false)
                    $load = "mains";
                else
                    $load = "battery";
            } else {
                if (($stats[5] & 0x10) == false)
                    $load = "dg";
                else
                    $load = "na";
            }

            $mains_fail = !(($stats[5] & 0x20) == false);
            $alternator = !(($stats[4] & 0x04) == false);
            $dg_start_fail = !(($stats[4] & 0x40) == false);
            $dg_stop_fail = !(($stats[4] & 0x80) == false);
        } else {
            if (($stats[6] & 0x04) == false) $mode = "auto";
            else $mode = "manual";
            //Double DG
            $smoke = !(($stats[6] & 0x01) == false);
            $door = $site_type == 0 ? !(($stats[6] & 0x02) == false) : false;

            // Load;
            $sub_data = ($stats[6] & 0x38) / 8;

            if ($sub_data == 0)
                $load = "mains";
            else if ($sub_data == 1)
                $load = "dg1";
            else if ($sub_data == 2)
                $load = "dg2";
            else if ($sub_data == 3)
                $load = "battery";
            else if ($sub_data == 7)
                $load = "battery_emg_case";
            else
                $load = "na";

            $mains_fail = !(($stats[6] & 0x40) == false);

            // DG 1/2 Alternate Fault
            $dg1_alternator = !(($stats[5] & 0x08) == false);
            $dg2_alternator = !(($stats[3] & 0x02) == false);
            $alternator = $dg1_alternator || $dg2_alternator;

            // DG 1/2 Start Fail
            $dg1_start_fail = !(($stats[5] & 0x80) == false);
            $dg2_start_fail = !(($stats[3] & 0x20) == false);
            $dg_start_fail = $dg1_start_fail || $dg2_start_fail;

            // DG 1/2 Stop Fail
            $dg1_stop_fail = !(($stats[4] & 0x01) == false);
            $dg2_stop_fail = !(($stats[3] & 0x40) == false);
            $dg_stop_fail = $dg1_stop_fail || $dg2_stop_fail;
        }
    } else if ($device_id == 2) {
        //Sola
        if ($data_validated == 1) {
            $mains_fail = !(($stats[5] & 0x20) == false);
            $smoke = !(($stats[5] & 0x01) == false);
            $door = $site_type == 0 ? !(($stats[5] & 0x02) == false) : false;
        } else {
            $smoke = !(($stats[5] & 0x01) == false);
            $door = $site_type == 0 ? !(($stats[5] & 0x02) == false) : false;
        }
    } else if ($device_id == 3) {
        if ($data_validated == 3) {
            if (($stats[6] & 0x04) == false) $mode = "auto";
            else $mode = "manual";
            //Double DG
            $mains_fail = !(($stats[6] & 0x40) == false);
            $smoke = !(($stats[6] & 0x01) == false);
            $door = $site_type == 0 ? !(($stats[6] & 0x02) == false) : false;

            // Load;
            $sub_data = ($stats[6] & 0x38) / 8;

            if ($sub_data == 0)
                $load = "mains";
            else if ($sub_data == 1)
                $load = "dg1";
            else if ($sub_data == 2)
                $load = "dg2";
            else if ($sub_data == 3)
                $load = "battery";
            else if ($sub_data == 7)
                $load = "battery_emg_case";
            else
                $load = "na";

            // DG 1/2 Alternate Fault
            $dg1_alternator = !(($stats[5] & 0x08) == false);
            $dg2_alternator = !(($stats[3] & 0x02) == false);
            $alternator = $dg1_alternator || $dg2_alternator;

            // DG 1/2 Start Fail
            $dg1_start_fail = !(($stats[5] & 0x80) == false);
            $dg2_start_fail = !(($stats[3] & 0x20) == false);
            $dg_start_fail = $dg1_start_fail || $dg2_start_fail;

            // DG 1/2 Stop Fail
            $dg1_stop_fail = !(($stats[4] & 0x01) == false);
            $dg2_stop_fail = !(($stats[3] & 0x40) == false);
            $dg_stop_fail = $dg1_stop_fail || $dg2_stop_fail;
        }
    } else if ($device_id == 32) {
        $smoke = !(($stats[5] & 0x01) == false);
        $door = $site_type == 0 ? !(($stats[5] & 0x02) == false) : false;
    } else if ($device_id == 118 || $device_id == 120) {
        $alarms = DecodeAlarmsAirtel($data_alarms);

        $door = $site_type == 0 ? !($alarms[3] == 1) : false;
        $smoke = $alarms[8] == 1;

        $alternator = $array_packet[29] == "95";
        $dg_start_fail = $alarms[0] == 1;
        $dg_stop_fail = $alarms[7] == 1;

        // if ($array_packet[28] == "04" || $array_packet[28] == "09" || $array_packet[28] == "17") $load = "dg";
        if ($alarms[1] == 1) $load = "dg";
        else if ($array_packet[28] == "10") $load = "battery";
        else if ($array_packet[28] == "05") $load = "mains";

        $mains_fail = $eb_capacity > 0 ? $alarms[2] == 1 : false;
        $rectifier_fail = $alarms[5] == 1;
        $dg_fault = $alarms[12] == 1;
    } else if ($device_id == 50 || $device_id == 51) {
        $alarms = DecodeAlarmsAirtel($data_alarms);
        $status = DecodeStatusAirtel($array[38][79]);

        $door = $site_type == 0 ? !($alarms[3] == 1) : false;
        $smoke = $alarms[8] == 1;

        $alternator = $array_packet[29] == "95";
        $dg_start_fail = $alarms[0] == 1;
        $dg_stop_fail = $alarms[7] == 1;

        // // ALARM & STATUS STRINGS Logic
        // // $array[28] - SYSTEM STATUS

        // if ($alarms[19] == 1) $load = PV;
        // else if ($status[14] == 1) $load = PV_DG;
        // else if ($status[15] == 1) $load = PV_BATTERY;
        // else if ($status[11] == 1) $load = PV_MAINS;
        // else if ($alarms[1] == 1) $load = DG;
        // else if ($array_packet[28] == "10") $load = BATTERY;
        // else if ($array_packet[28] == "05") $load = MAINS;

        // PARAMETERS LOGIC
        $dg_voltage = $array_packet[14];                // DG VOLTAGE
        $solar_current = $array_packet[38][11];         // solar current
        $input_mains_voltage_1 = $array_packet[18];     // INPUT MAINS VOLTAGE 1 as xxxVAC
        $input_mains_voltage_2 = $array_packet[19];     // INPUT MAINS VOLTAGE 2 as xxxVAC
        $input_mains_voltage_3 = $array_packet[20];     // INPUT MAINS VOLTAGE 3 as xxxVAC
        $input_mains_voltage = $input_mains_voltage_1 + $input_mains_voltage_2 + $input_mains_voltage_3;
        $site_batt_voltage  = $array_packet[10];        // SITE BATT VOLTAGE as xx.x Vdc 


        if ($solar_current > 0 && $dg_voltage > 0) $load = PV_DG;
        else if ($dg_voltage > 0) $load = DG;
        else if ($solar_current > 0 && $input_mains_voltage > 0) $load = PV_MAINS;
        else if ($solar_current > 0 && $site_batt_voltage > 0) $load = PV_BATTERY;
        else if ($input_mains_voltage > 0) $load = MAINS;
        else if ($site_batt_voltage > 0) $load = BATTERY;
        else if ($solar_current > 0) $load = PV;

        $mains_fail = $eb_capacity > 0 ? $alarms[2] == 1 : false;
        $rectifier_fail = $alarms[5] == 1;
        $dg_fault = $alarms[12] == 1;
    }

    $average_load = ($r_phase + $y_phase + $b_phase) / 3;
    $average_load_percentage = $average_load * 20 / 100;
    if (abs($average_load - $r_phase) > $average_load_percentage) $three_phase_unbalance_load = true;
    if (abs($average_load - $y_phase) > $average_load_percentage) $three_phase_unbalance_load = true;
    if (abs($average_load - $b_phase) > $average_load_percentage) $three_phase_unbalance_load = true;

    return [
        DOOR => $door,
        SMOKE => $smoke,
        HRT => $hrt,
        ALTERNATOR => $alternator,
        DG_BATTERY_DISCONNECTIONS => $dg_battery_disconnections,
        DG_BATTERY_LOW => $dg_battery_low,
        BTS_LOW => $bts_low,
        OUTAGE => $outage,
        THREE_PHASE_UNBALANCE_LOAD => $three_phase_unbalance_load,
        LOAD => $load,
        MODE => $mode,
        MAINS_FAIL => $mains_fail,
        DG_START_FAIL => $dg_start_fail,
        DG_STOP_FAIL => $dg_stop_fail,
        RECTIFIER_FAIL => $rectifier_fail,
        DG_FAULT => $dg_fault,
    ];
}

function GetSitesByUser()
{
    $id = $_SESSION['login_cust_id'];
    $login_type = $_SESSION['login_type'];
    $clusters = $_SESSION['login_typeref_id'];

    $array = array();

    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $sql = "";

    if ($login_type == 1)  //Head, show all clusters and sites for the customer
    {
        $sql = "SELECT 
                    a.Id, a.site_id, a.SiteName
                FROM siteinfo a 
                
                    INNER JOIN clusters b 
                    ON a.ClusterId = b.id

                WHERE ((a.CustomerId = $id) AND (a.site_enabled = 1))
                AND a.quanta_id IS NOT NULL
                ORDER BY ClusterId
                ";
    } else if ($login_type == 2)  //Cluster Head, show only the cluster of the head
    {
        $clustersid = $clusters[0];  //Only a single cluster
        $sql = "SELECT 
                    a.Id, a.site_id, a.SiteName
                FROM siteinfo a 
                
                    INNER JOIN clusters b 
                    ON a.ClusterId = b.id			

                WHERE ((a.CustomerId = $id) AND (a.ClusterId = $clustersid) AND (a.site_enabled = 1))
                AND a.quanta_id IS NOT NULL
                ORDER BY ClusterId
                ";
    } else if ($login_type == 4)  //Zone Head, show all the clusters under the zone
    {
        $clustersid = join(',', $clusters);
        //echo "$clustersid <br>";
        $sql = "SELECT 
                    a.Id, a.site_id, a.SiteName
                FROM siteinfo a 
                
                    INNER JOIN clusters b 
                    ON a.ClusterId = b.id			

                WHERE ((a.CustomerId = $id) AND (a.ClusterId IN ($clustersid)) AND (a.site_enabled = 1))
                AND a.quanta_id IS NOT NULL
                ORDER BY ClusterId 
                ";
    } else {
        //Show no cluster/site
        $sql = null;
    }

    $sites = [];
    if ($sql != null) {
        $result = $mysqli->query($sql);
        while ($data = $result->fetch_row()) {
            $array = [];
            $array[] = $data[0];
            $array[] = $data[1];
            $array[] = $data[2];

            $sites[] = $array;
        }
        $result->close();
        mysqli_close($mysqli);
    }

    // echo "<script>console.log('Sites', " . json_encode($sites) . ");</script>";
    return $sites;
}

function GetSitesByUserFromSearch($search_text, $cluster_id = null)
{
    $id = $_SESSION['login_cust_id'];
    $login_type = $_SESSION['login_type'];
    $clusters = $_SESSION['login_typeref_id'];

    $search_text = hasValue($search_text) ? "'%$search_text%'" : "'%%'";
    $cluster_id = hasValue($cluster_id) ? $cluster_id : 'NULL'; //number

    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $sql = "";

    if ($login_type == 1)  //Head, show all clusters and sites for the customer
    {
        $sql = "SELECT 
                    a.Id, a.site_id, a.SiteName
                FROM siteinfo a 
                JOIN clusters b ON a.ClusterId = b.id
                WHERE ((a.CustomerId = $id) AND (a.site_enabled = 1))
                AND a.quanta_id IS NOT NULL
                AND (a.site_id LIKE $search_text OR a.SiteName LIKE $search_text)
                AND a.ClusterId = IFNULL($cluster_id, a.ClusterId)
                ORDER BY ClusterId
                ";
    } else if ($login_type == 2)  //Cluster Head, show only the cluster of the head
    {
        $clustersid = $clusters[0];  //Only a single cluster
        $sql = "SELECT 
                    a.Id, a.site_id, a.SiteName
                FROM siteinfo a 
                JOIN clusters b ON a.ClusterId = b.id			
                WHERE ((a.CustomerId = $id) AND (a.ClusterId = $clustersid) AND (a.site_enabled = 1))
                AND a.quanta_id IS NOT NULL
                AND (a.site_id LIKE $search_text OR a.SiteName LIKE $search_text)
                ORDER BY ClusterId
                ";
    } else if ($login_type == 4)  //Zone Head, show all the clusters under the zone
    {
        $clustersid = join(',', $clusters);
        //echo "$clustersid <br>";
        $sql = "SELECT 
                    a.Id, a.site_id, a.SiteName
                FROM siteinfo a 
                JOIN clusters b ON a.ClusterId = b.id			
                WHERE ((a.CustomerId = $id) AND (a.ClusterId IN ($clustersid)) AND (a.site_enabled = 1))
                AND a.quanta_id IS NOT NULL
                AND (a.site_id LIKE $search_text OR a.SiteName LIKE $search_text)
                ORDER BY ClusterId 
                ";
    } else {
        //Show no cluster/site
        $sql = null;
    }

    // echo "SQL: $sql <br />";

    $sites = [];
    if ($sql != null) {
        $result = $mysqli->query($sql);
        while ($data = $result->fetch_row())
            $sites[] = [$data[0], $data[1], $data[2]];

        $result->close();
        mysqli_close($mysqli);
    }

    // echo "<script>console.log('Sites', " . json_encode($sites) . ");</script>";
    return $sites;
}

function GetCircles($id)
{
    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $sql = "SELECT id, name FROM circles WHERE customerId = $id";
    $data = [];
    if ($sql != null) {
        $result = $mysqli->query($sql);
        while ($row = $result->fetch_row())
            $data[] = [$row[0], $row[1]];

        $result->close();
        mysqli_close($mysqli);
    }

    return $data;
}

function GetDistricts($id, $circle_id = null)
{
    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $circle_id = hasValue($circle_id) ? $circle_id : 'NULL';
    $sql = "SELECT id, name FROM districts WHERE customerId = $id AND circleId = IFNULL($circle_id, circleId)";
    // echo "SQL: " . $sql . "<br />";
    $data = [];
    if ($sql != null) {
        $result = $mysqli->query($sql);
        while ($row = $result->fetch_row())
            $data[] = [$row[0], $row[1]];

        $result->close();
        mysqli_close($mysqli);
    }

    return $data;
}

function GetClustersByDistrict($id, $district_id = null)
{
    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $district_id = hasValue($district_id) ? $district_id : 'NULL';
    $sql = "SELECT id, name FROM clusters WHERE customerId = $id AND districtId = IFNULL($district_id, districtId)";
    $data = [];
    if ($sql != null) {
        $result = $mysqli->query($sql);
        while ($row = $result->fetch_row())
            $data[] = [$row[0], $row[1]];

        $result->close();
        mysqli_close($mysqli);
    }

    return $data;
}

function GetClusters()
{
    $id = $_SESSION['login_cust_id'];
    $login_type = $_SESSION['login_type'];
    $clusters = $_SESSION['login_typeref_id'];

    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $sql = "";

    // echo "login_type GetClusters: $login_type <br />";
    if ($login_type == 1)  //Head, show all clusters and sites for the customer
    {
        $sql = "SELECT id, name FROM clusters WHERE customerId = $id";
    } else if ($login_type == 2)  //Cluster Head, show only the cluster of the head
    {
        $clustersid = $clusters[0];  //Only a single cluster
        $sql = "SELECT id, name FROM clusters WHERE id = $clustersid AND customerId = $id";
    } else if ($login_type == 4)  //Zone Head, show all the clusters under the zone
    {
        $clustersid = join(',', $clusters);
        $sql = "SELECT id, name FROM clusters WHERE id IN ($clustersid) AND customerId = $id";
    } else {
        //Show no cluster/site
        $sql = null;
    }

    // echo "sql: $sql<br />";
    $data = [];
    if ($sql != null) {
        $result = $mysqli->query($sql);
        while ($row = $result->fetch_row())
            $data[] = [$row[0], $row[1]];

        $result->close();
        mysqli_close($mysqli);
    }

    return $data;
}

function GetSiteDetailsParserAirtel($data) {}

function GetDashboardParser($data)
{
    $array = [];

    $array[] = $data[8]; //0Temperature | Common in all protocols
    $array[] = 0; //1 bts
    $array[] = 0; //2 dg battery
    $array[] = 0; //3 R-Phase current
    $array[] = 0; //4 Y-Phase current
    $array[] = 0; //5 B-Phase current
    $array[] = 0; //6 Battery backup time
    $array[] = 0; //7 Battery current
    $array[] = 0; //8 R-Phase voltage
    $array[] = 0; //9 Y-Phase voltage
    $array[] = 0; //10 B-Phase voltage      
    $array[] = 0; //11 EB Frequency 500-12
    $array[] = 0; //12 Mains energy 500-31
    $array[] = 0; //13 DG Voltage RYB 500-14
    $array[] = 0; //14 Dg frequency		500-13
    $array[] = 0; //15 DG Energy 500-30

    $array[] = 0; //16 Solar output voltage (Vdc) -> Not found in the protocol
    $array[] = 0; //17 Solar Current (Amps) 500-[38][11]
    $array[] = 0; //18 Solar Energy (kWh) 500-21    
    $array[] = 0; //19 Battery 1 Temperature  500-[38][21] 
    $array[] = 0; //20 Battery 2 Temperature  500-[38][29] 
    $array[] = 0; //21 Battery 3 Temperature  500-[38][37] 
    $array[] = 0; //22 Battery 4 Temperature  500-[38][45] 
    $array[] = 0; //23 Battery 5 Temperature  500-[38][53] 
    $array[] = 0; //24 Battery 6 Temperature  500-[38][61]    ~HEAD
    $array[] = 0; //25 load power opco1  500-[38][1]    
    $array[] = 0; //26 load power opco2  500-[38][5]    
    $array[] = 0; //27 load power opco3  500-[38][9]    
    $array[] = 0; //28 load power opco4  500-[38][10]    


    if ($data[6] == 1) {
        if ($data[2] == 2) {    //Double DG
            // DisplayEntryType1DoubleDG($array);
            $array[1] = $data[11]; //1 bts
            $array[2] = $data[32]; //2 dg battery
            $array[3] = $data[12]; //3 R-Phase current
            $array[4] = $data[13]; //4 Y-Phase current
            $array[5] = $data[14]; //5 B-Phase current
            $array[6] = $data[36]; //6 Battery backup time


        } else {
            // DisplayEntryType1($array);
            $array[1] = $data[11]; //1 bts
            $array[2] = $data[32]; //2 dg battery
            $array[3] = $data[12]; //3 R-Phase current
            $array[4] = $data[13]; //4 Y-Phase current
            $array[5] = $data[14]; //5 B-Phase current
            $array[6] = $data[36]; //6 Battery backup time
        }
    } else if ($data[6] == 2) {
        if ($data[2] == 1) {
            //if($array[37] == 3)
            //{
            // DisplayEntryType3($array);
            $array[1] = $data[10]; //1 bts

            //}
        } else {
            // DisplayEntryTypeSolar($array);
            $array[1] = $data[27]; //1 bts
            $array[3] = $data[15]; //3 R-Phase current
            $array[4] = $data[16]; //4 Y-Phase current
            $array[5] = $data[17]; //5 B-Phase current
        }
    } else if ($data[6] == 3) {
        // Double DG Solar
        if ($data[2] == 3)
            // DisplayEntryType1DoubleDGSolar($array);
            $array[1] = $data[11]; //1 bts
        $array[2] = $data[32]; //2 dg battery
        $array[3] = $data[12]; //3 R-Phase current
        $array[4] = $data[13]; //4 Y-Phase current
        $array[5] = $data[14]; //5 B-Phase current
        $array[6] = $data[36]; //6 Battery backup time

    } else if ($data[6] == 16) {
        // DisplayEntryType1($array);
        $array[1] = $data[11]; //1 bts
        $array[2] = $data[32]; //2 dg battery
        $array[3] = $data[12]; //3 R-Phase current
        $array[4] = $data[13]; //4 Y-Phase current
        $array[5] = $data[14]; //5 B-Phase current
        $array[6] = $data[36]; //6 Battery backup time

    } else if ($data[6] == 32) {
        // DisplayEntryTypeDoubleBattery($array);
        $array[1] = $data[9]; //1 bts
        $array[3] = $data[11]; //3 R-Phase current
        $array[4] = $data[11]; //4 Y-Phase current
        $array[5] = $data[11]; //5 B-Phase current

    } else if ($data[6] == 118 || $data[6] == 120) {
        // DisplayEntryTypeAirtelV118($array);
        $array[1] = $data[10]; //1 bts
        $array[7] = $data[11]; //7 Battery current
        $array[8] = $data[18]; //8 R-Phase voltage
        $array[9] = $data[19]; //9 Y-Phase voltage
        $array[10] = $data[20]; //10 B-Phase voltage

    } else if ($data[6] == 50 || $data[6] == 51) {
        // DisplayEntryTypeAirtelV50($array);
        $array[1] = $data[10]; //1 bts
        $array[7] = $data[11]; //7 Battery current
        $array[8] = $data[18]; //8 R-Phase voltage
        $array[9] = $data[19]; //9 Y-Phase voltage
        $array[10] = $data[20]; //10 B-Phase voltage
        $array[11] = $data[12]; //11 EB Frequency 500-12
        $array[12] = $data[31]; //12 Mains energy 500-31
        $array[13] = $data[14]; //13 DG Voltage RYB 500-14
        $array[14] = $data[13]; //14 Dg frequency		500-13
        $array[15] = $data[30]; //15 DG Energy 500-30
        //$array[16] = $data[x]; //16 Solar output voltage (Vdc)
        $array[17] = $data[38][11]; //17 Solar Current (Amps) 500-[38][11]
        $array[18] = $data[21]; //18 Solar Energy (kWh) 500-21
        $array[19] = $data[38][21]; //19 Battery 1 Temperature  500-[38][21] 
        $array[20] = $data[38][29]; //20 Battery 2 Temperature  500-[38][29] 
        $array[21] = $data[38][37]; //21 Battery 3 Temperature  500-[38][37] 
        $array[22] = $data[38][45]; //22 Battery 4 Temperature  500-[38][45] 
        $array[23] = $data[38][53]; //23 Battery 5 Temperature  500-[38][53] 
        $array[24] = $data[38][61]; //24 Battery 6 Temperature  500-[38][61] 
    }

    return $array;
}

function GetDashboard($circle_id = null, $district_id = null, $cluster_id = null)
{
    $id = $_SESSION['login_cust_id'];
    $login_type = $_SESSION['login_type'];
    $clusters = $_SESSION['login_typeref_id'];

    $array = array();

    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $sites = [
        ALL => [],
        DOOR => [],
        SMOKE => [],
        DG_BATTERY_DISCONNECTIONS => [],
        HRT => [],
        COMM => [],
        NON_COMM => [],
        LOAD_MAINS => [],
        LOAD_DG => [],
        LOAD_BATTERY => [],
        MODE_MANUAL => [],
        MODE_AUTO => [],
        LOAD_NA => [],
        ALTERNATOR => [],
        BTS_LOW => [],
        DG_BATTERY_LOW => [],
        THREE_PHASE_UNBALANCE_LOAD => [],

        // airtel alarms
        MAINS_FAIL => [],
        DG_START_FAIL => [],
        DG_STOP_FAIL => [],
        RECTIFIER_FAIL => [],
        DG_FAULT => [],
        AIRCON_FAULTY => [],
        MPPT_PVC_FAULTY => [],
        BLVD_TRIP => [],
    ];

    $sql = "";

    $circle_id = hasValue($circle_id) ? $circle_id : 'NULL';
    $district_id = hasValue($district_id) ? $district_id : 'NULL';
    $cluster_id = hasValue($cluster_id) ? $cluster_id : 'NULL';

    $format = "SELECT 
            q.ID,
            q.timestamp,
            q.data_validated,
            q.type,
            q.site_id,
            q.date_time,
            q.device_id,
            q.status,
            q.raw_data,
            a.Id,
            c.name,
            a.battery_AH,
            a.SiteName,
            a.SiteIndoorType,
            a.Tech_Number,
            a.AM_Number,
            a.SAM_Number,
            a.EB_capacity
        FROM siteinfo a 
        JOIN clusters c ON a.ClusterId = c.id
        JOIN quanta q ON q.ID = a.quanta_id
        WHERE ((a.CustomerId = $id) AND (a.site_enabled = 1)) AND a.quanta_id IS NOT NULL %s
        -- AND a.CircleId = IFNULL($circle_id, a.CircleId)
        -- AND a.DistrictId = IFNULL($district_id, a.DistrictId)
        AND a.ClusterId = IFNULL($cluster_id, a.ClusterId)";

    if ($login_type == 1) {
        //Head, show all clusters and sites for the customer
        $sql = sprintf($format, "");
    } else if ($login_type == 2) {
        //Cluster Head, show only the cluster of the head
        $clustersid = $clusters[0];  //Only a single cluster
        $sql = sprintf($format, "AND (a.ClusterId = $clustersid)");
    } else if ($login_type == 4) {
        //Zone Head, show all the clusters under the zone
        $clustersid = join(',', $clusters);
        //echo "$clustersid <br>";
        $sql = sprintf($format, "AND (a.ClusterId IN ($clustersid))");
    } else {
        //Show no cluster/site
        $sql = null;
    }

    // echo "SQL GetDashboard: $sql <br />";

    //print("<script> var siteListArray = [];</script>");
    if ($sql != null) {
        $result = $mysqli->query($sql);
        $site_list = [];
        while ($data = $result->fetch_row()) {
            $array = [];
            $array[] = $data[0];        //0Unique Id
            $array[] = $data[1];        //1Time Stamp by Server
            $array[] = $data[2];        //2Validated by Server
            $array[] = $data[3];        //3Type 0 - Periodic / 1 - Fault
            $array[] = $data[4];        //4String Site Id
            $array[] = $data[5];        //5Date Time by Device
            $array[] = $data[6];        //6Device Id/ Only 1, 2 & 32 known for now
            $array[] = $data[7];        //7Status Bits - To Expand
            $data_raw = $data[8];        //Raw Data, for device specific information

            $array = GetDeviceDataParser($array, $data, $data_raw);

            /************ Start from 39th index */
            $array[] = []; //10->39 Alarms
            $array[] = GetDashboardParser($array); //40

            // DEBUG:
            // if (count(GetDashboardParser($array)) < 6) {
            //     echo json_encode($array) . "<br />";
            //     echo json_encode(GetDashboardParser($array)) . "<br />";
            // }
            $array[] = $data[9];    // 0->41 Id
            $array[] = $data[10];   // 2|0->42 Cluster Name
            $array[] = $data[14];  // 2|1->43 L1 Number
            $array[] = $data[15];  // 2|2->44 L2 Number
            $array[] = $data[16];  // 2|3->45 L3 Number

            $array[] = $data[11];    // 3->46 battery AH
            $array[] = $data[12];    // 4->47 SiteName
            $array[] = $data[13];    // 5->48 SiteIndoorType

            $array[] = $data[17];    // 49 EB_capacity


            $array[39] = CalculateAlarms($data[7], $array, ALARM_SITE);
            $site_list[] = $array;
        }
        $result->close();
        mysqli_close($mysqli);

        $sites[ALL] = $site_list;

        // comm non_comm
        $sites[COMM] = array_filter($site_list, function ($site) {
            return time() - strtotime($site[1]) < COMM_AGING;
        });

        // TODO: Remove
        // $sites["comm"] = $site_list;

        $sites[NON_COMM] = array_filter($site_list, function ($site) {
            return time() - strtotime($site[1]) >= COMM_AGING;
        });


        // All other parameters should be calculated from sites in communication.
        // alarms
        $sites[DOOR] = array_filter($sites[COMM], function ($site) {
            return $site[39][DOOR];
        });
        $sites[SMOKE] = array_filter($sites[COMM], function ($site) {
            return $site[39][SMOKE];
        });
        $sites[HRT] = array_filter($sites[COMM], function ($site) {
            return $site[39][HRT];
        });
        $sites[ALTERNATOR] = array_filter($sites[COMM], function ($site) {
            return $site[39][ALTERNATOR];
        });
        $sites[DG_BATTERY_DISCONNECTIONS] = array_filter($sites[COMM], function ($site) {
            return $site[39][DG_BATTERY_DISCONNECTIONS];
        });
        $sites[DG_BATTERY_LOW] = array_filter($sites[COMM], function ($site) {
            return $site[39][DG_BATTERY_LOW];
        });
        $sites[BTS_LOW] = array_filter($sites[COMM], function ($site) {
            return $site[39][BTS_LOW];
        });
        $sites[OUTAGE] = array_filter($sites[COMM], function ($site) {
            return $site[39][OUTAGE];
        });
        $sites[THREE_PHASE_UNBALANCE_LOAD] = array_filter($sites[COMM], function ($site) {
            return $site[39][THREE_PHASE_UNBALANCE_LOAD];
        });

        // load
        $sites[LOAD_MAINS] = array_filter($sites[COMM], function ($site) {
            return $site[39][LOAD] === MAINS;
        });
        $sites[LOAD_BATTERY] = array_filter($sites[COMM], function ($site) {
            return strpos($site[39][LOAD], BATTERY) !== false;
        });
        $sites[LOAD_DG] = array_filter($sites[COMM], function ($site) {
            return strpos($site[39][LOAD], DG) !== false;
        });
        $sites[LOAD_NA] = array_filter($sites[COMM], function ($site) {
            return $site[39][LOAD] === NA;
        });
        $sites[LOAD_PV] = array_filter($sites[COMM], function ($site) {
            return $site[39][LOAD] === PV;
        });
        $sites[LOAD_PV_MAINS] = array_filter($sites[COMM], function ($site) {
            return $site[39][LOAD] === PV_MAINS;
        });
        $sites[LOAD_PV_DG] = array_filter($sites[COMM], function ($site) {
            return $site[39][LOAD] === PV_DG;
        });
        $sites[LOAD_PV_BATTERY] = array_filter($sites[COMM], function ($site) {
            return $site[39][LOAD] === PV_BATTERY;
        });
        $sites[MODE_MANUAL] = array_filter($sites[COMM], function ($site) {
            return $site[39][MODE] === MANUAL;
        });
        $sites[MODE_AUTO] = array_filter($sites[COMM], function ($site) {
            return $site[39][MODE] === AUTO && $site[39][LOAD] === NA;
        });

        // airtel
        $sites[MAINS_FAIL] = array_filter($sites[COMM], function ($site) {
            return $site[39][MAINS_FAIL];
        });
        $sites[DG_START_FAIL] = array_filter($sites[COMM], function ($site) {
            return $site[39][DG_START_FAIL];
        });
        $sites[DG_STOP_FAIL] = array_filter($sites[COMM], function ($site) {
            return $site[39][DG_STOP_FAIL];
        });
        $sites[RECTIFIER_FAIL] = array_filter($sites[COMM], function ($site) {
            return $site[39][RECTIFIER_FAIL];
        });
        $sites[DG_FAULT] = array_filter($sites[COMM], function ($site) {
            return $site[39][DG_FAULT];
        });
    }

    return $sites;
}

function GetDashboardNoDataSites($circle_id = null, $district_id = null, $cluster_id = null)
{
    $id = $_SESSION['login_cust_id'];
    $login_type = $_SESSION['login_type'];
    $clusters = $_SESSION['login_typeref_id'];

    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $sites = [];

    $sql = "";

    $circle_id = hasValue($circle_id) ? $circle_id : 'NULL';
    $district_id = hasValue($district_id) ? $district_id : 'NULL';
    $cluster_id = hasValue($cluster_id) ? $cluster_id : 'NULL';

    $format = "SELECT a.Id, a.site_id, a.siteName
        FROM siteinfo a 
        JOIN clusters c ON a.ClusterId = c.id
        WHERE ((a.CustomerId = $id) 
        AND (a.site_enabled = 1)) 
        AND a.quanta_id IS NULL  
        %s
        -- AND a.CircleId = IFNULL($circle_id, a.CircleId)
        -- AND a.DistrictId = IFNULL($district_id, a.DistrictId)
        AND a.ClusterId = IFNULL($cluster_id, a.ClusterId)";

    if ($login_type == 1) {
        //Head, show all clusters and sites for the customer
        $sql = sprintf($format, "");
    } else if ($login_type == 2) {
        //Cluster Head, show only the cluster of the head
        $clustersid = $clusters[0];  //Only a single cluster
        $sql = sprintf($format, "AND (a.ClusterId = $clustersid)");
    } else if ($login_type == 4) {
        //Zone Head, show all the clusters under the zone
        $clustersid = join(',', $clusters);
        //echo "$clustersid <br>";
        $sql = sprintf($format, "AND (a.ClusterId IN ($clustersid))");
    } else {
        //Show no cluster/site
        $sql = null;
    }

    // echo "SQL GetDashboardZeroPacketSites: $sql <br />";

    //print("<script> var siteListArray = [];</script>");
    if ($sql != null) {
        $result = $mysqli->query($sql);

        while ($data = $result->fetch_row()) {
            $sites[] = [$data[0], $data[1], $data[2]];
        }
    }
    $result->close();
    mysqli_close($mysqli);

    return $sites;
}

function GetDashboardZeroPacketSites($circle_id = null, $district_id = null, $cluster_id = null)
{
    $id = $_SESSION['login_cust_id'];
    $login_type = $_SESSION['login_type'];
    $clusters = $_SESSION['login_typeref_id'];

    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $sites = [];

    $sql = "";

    $circle_id = hasValue($circle_id) ? $circle_id : 'NULL';
    $district_id = hasValue($district_id) ? $district_id : 'NULL';
    $cluster_id = hasValue($cluster_id) ? $cluster_id : 'NULL';

    $comm_aging = COMM_AGING;
    $format = "SELECT a.Id, a.site_id, a.siteName, q.timestamp, a.zero_packet
        FROM siteinfo a 
        JOIN clusters c ON a.ClusterId = c.id
        JOIN quanta_dump q ON q.ID = a.quanta_id
        WHERE ((a.CustomerId = $id) 
        AND (a.site_enabled = 1)) 
        AND a.quanta_id IS NOT NULL 
        AND zero_packet > 0 
        %s
        -- AND a.CircleId = IFNULL($circle_id, a.CircleId)
        -- AND a.DistrictId = IFNULL($district_id, a.DistrictId)
        AND a.ClusterId = IFNULL($cluster_id, a.ClusterId)";

    if ($login_type == 1) {
        //Head, show all clusters and sites for the customer
        $sql = sprintf($format, "");
    } else if ($login_type == 2) {
        //Cluster Head, show only the cluster of the head
        $clustersid = $clusters[0];  //Only a single cluster
        $sql = sprintf($format, "AND (a.ClusterId = $clustersid)");
    } else if ($login_type == 4) {
        //Zone Head, show all the clusters under the zone
        $clustersid = join(',', $clusters);
        //echo "$clustersid <br>";
        $sql = sprintf($format, "AND (a.ClusterId IN ($clustersid))");
    } else {
        //Show no cluster/site
        $sql = null;
    }

    // echo "SQL GetDashboardZeroPacketSites: $sql <br />";

    //print("<script> var siteListArray = [];</script>");
    if ($sql != null) {
        $result = $mysqli->query($sql);

        while ($data = $result->fetch_row()) {
            $sites[] = [$data[0], $data[1], $data[2], $data[3], $data[4]];
        }
    }
    $result->close();
    mysqli_close($mysqli);

    return $sites;
}

function GetZeroDataDescription($zero_packet)
{
    if ($zero_packet == ZERO_DATA) return "Zero (0) Data Packet";
    if ($zero_packet == ZERO_METERING) return "Zero (0) Metering Packet";
    return "";
}

function GetDashboardDetails($alarm_name, $circle_id = null, $district_id = null, $cluster_id = null)
{
    $id = $_SESSION['login_cust_id'];
    $login_type = $_SESSION['login_type'];
    $clusters = $_SESSION['login_typeref_id'];

    $array = array();

    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $sql = "";

    $circle_id = hasValue($circle_id) ? $circle_id : 'NULL';
    $district_id = hasValue($district_id) ? $district_id : 'NULL';
    $cluster_id = hasValue($cluster_id) ? $cluster_id : 'NULL';

    $comm_aging = COMM_AGING;
    $format = "SELECT 
            q.ID,
            q.timestamp,
            q.data_validated,
            q.type,
            q.site_id,
            q.date_time,
            q.device_id,
            q.status,
            q.raw_data,
            a.Id,
            c.name,
            a.battery_AH,
            a.SiteName,
            a.SiteIndoorType,
            a.Tech_Number,
            a.AM_Number,
            a.SAM_Number,
            a.EB_capacity,
            at.date_generated
        FROM siteinfo a 
        JOIN clusters c ON a.ClusterId = c.id
        JOIN quanta q ON q.ID = a.quanta_id
        JOIN alarmstracking at ON at.site_rid = a.Id
        WHERE ((a.CustomerId = $id) AND (a.site_enabled = 1)) AND a.quanta_id IS NOT NULL %s
        AND a.ClusterId = IFNULL($cluster_id, a.ClusterId)
        -- AND a.CircleId = IFNULL($circle_id, a.CircleId)
        -- AND a.DistrictId = IFNULL($district_id, a.DistrictId)    
        AND TIMESTAMPDIFF(SECOND, q.timestamp, NOW()) <= $comm_aging
        AND at.alarm_name = '$alarm_name' AND at.alarm_status = 0";


    if ($login_type == 1) {
        //Head, show all clusters and sites for the customer
        $sql = sprintf($format, "");
    } else if ($login_type == 2) {
        //Cluster Head, show only the cluster of the head
        $clustersid = $clusters[0];  //Only a single cluster
        $sql = sprintf($format, "AND (a.ClusterId = $clustersid)");
    } else if ($login_type == 4) {
        //Zone Head, show all the clusters under the zone
        $clustersid = join(',', $clusters);
        //echo "$clustersid <br>";
        $sql = sprintf($format, "AND (a.ClusterId IN ($clustersid))");
    } else {
        //Show no cluster/site
        $sql = null;
    }

    // echo "SQL: $sql <br />";

    $sites = [];
    if ($sql != null) {
        $result = $mysqli->query($sql);
        // $site_list = [];
        while ($data = $result->fetch_row()) {
            $array = [];
            $array[] = $data[0];        //0Unique Id
            $array[] = $data[1];        //1Time Stamp by Server
            $array[] = $data[2];        //2Validated by Server
            $array[] = $data[3];        //3Type 0 - Periodic / 1 - Fault
            $array[] = $data[4];        //4String Site Id
            $array[] = $data[5];        //5Date Time by Device
            $array[] = $data[6];        //6Device Id/ Only 1, 2 & 32 known for now
            $array[] = $data[7];        //7Status Bits - To Expand
            $data_raw = $data[8];        //Raw Data, for device specific information

            $array = GetDeviceDataParser($array, $data, $data_raw);

            /************ Start from 39th index */
            $array[] = []; //10->39 Alarms
            $array[] = GetDashboardParser($array); //40

            // DEBUG:
            // if (count(GetDashboardParser($array)) < 6) {
            //     echo json_encode($array) . "<br />";
            //     echo json_encode(GetDashboardParser($array)) . "<br />";
            // }
            $array[] = $data[9];    // 0->41 Id
            $array[] = $data[10];   // 2|0->42 Cluster Name
            $array[] = $data[14];  // 2|1->43 L1 Number
            $array[] = $data[15];  // 2|2->44 L2 Number
            $array[] = $data[16];  // 2|3->45 L3 Number

            $array[] = $data[11];    // 3->46 battery AH
            $array[] = $data[12];    // 4->47 SiteName
            $array[] = $data[13];    // 5->48 SiteIndoorType

            $array[] = $data[17];    // 49 EB_capacity
            $array[] = $data[18];    // 50 alarm date_generated


            // $array[39] = CalculateAlarms($data[7], $array, ALARM_SITE);
            $sites[] = $array;
        }
        $result->close();
        mysqli_close($mysqli);
    }

    return $sites;
}

function GetSiteCallReport($page_number, $page_size, $range_start, $range_end, $search_text = "")
{
    // echo "$range_start, $range_end <br />";
    $id = $_SESSION['login_cust_id'];
    $login_type = $_SESSION['login_type'];
    $clusters = $_SESSION['login_typeref_id'];

    $search_text = !isnull($search_text) ? "'%$search_text%'" : "'%%'";
    $offset = $page_size * ($page_number - 1);

    // echo "search_text: $search_text <br />";

    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $response = [
        "data" => [],
        "count" => 0,
    ];

    $sql = "";
    $sql_count = "";

    $sql_search_text = "AND ((s.site_id LIKE $search_text) OR (s.siteName LIKE $search_text))";

    $callSuccess = CALL_SUCCESS;
    $callFailed = CALL_FAILED;

    $format =
        "SELECT
            s.Id,
            s.site_id,
            s.siteName,
            SUM(CASE WHEN statusString = '$callSuccess' THEN 1 ELSE 0 END) AS successCount,
            SUM(CASE WHEN statusString = '$callFailed' THEN 1 ELSE 0 END) AS failureCount,
            SUM(CASE WHEN statusString IN ('Call Completed', 'Call Failed') THEN 1 ELSE 0 END) AS statusCount

        FROM alarmsAlerts aa
        JOIN alarms a ON a.alarmId = aa.alarmId
        JOIN siteinfo s ON s.Id = a.site_rid    
        JOIN clusters c ON s.ClusterId = c.id

        WHERE
        	s.CustomerId = $id
            %s
            %s
            AND s.site_enabled = 1
            AND s.quanta_id IS NOT NULL
        	AND aa.date BETWEEN '$range_start' AND '$range_end'

        GROUP BY s.Id, s.site_id, s.siteName
        ORDER BY statusCount DESC
        
        LIMIT $offset, $page_size;";

    $format_count =
        "SELECT COUNT(DISTINCT a.site_id)
        
        FROM alarmsAlerts aa
        JOIN alarms a ON a.alarmId = aa.alarmId
        JOIN siteinfo s ON s.Id = a.site_rid    
        JOIN clusters c ON s.ClusterId = c.id
    
        WHERE 
        	s.CustomerId = $id
            %s
            %s
            AND s.site_enabled = 1 
            AND s.quanta_id IS NOT NULL
        	AND aa.date BETWEEN '$range_start' AND '$range_end';";

    if ($login_type == 1) {
        //Head, show all clusters and sites for the customer
        $sql = sprintf($format, "", $sql_search_text);
        $sql_count = sprintf($format_count, "", $sql_search_text);
    } else if ($login_type == 2) {
        //Cluster Head, show only the cluster of the head
        $clustersid = $clusters[0];  //Only a single cluster
        $sql = sprintf($format, "AND (s.ClusterId = $clustersid)", $sql_search_text);
        $sql_count = sprintf($format_count, "AND (s.ClusterId = $clustersid)", $sql_search_text);
    } else if ($login_type == 4) {
        //Zone Head, show all the clusters under the zone
        $clustersid = join(',', $clusters);
        //echo "$clustersid <br>";
        $sql = sprintf($format, "AND (s.ClusterId IN ($clustersid))", $sql_search_text);
        $sql_count = sprintf($format_count, "AND (s.ClusterId IN ($clustersid))", $sql_search_text);
    } else {
        //Show no cluster/site
        $sql = null;
    }

    // echo "GetSiteCallReport SQL: $sql<br />";

    //print("<script> var siteListArray = [];</script>");
    if ($sql != null) {
        $result = $mysqli->query($sql);
        while ($row = $result->fetch_row()) {
            $response["data"][] = [
                $row[0],                // Id
                $row[1],                // site_id
                $row[2],                // siteName
                $row[3],                // successCount
                $row[4],                // failureCount
                $row[5],                // statusCount
            ];
        }

        $result_count = $mysqli->query($sql_count);
        $response["count"] = $result_count->fetch_row()[0];

        $result_count->close();
        $result->close();
        mysqli_close($mysqli);
        // echo "<script>console.log(" . json_encode($response) . ");</script>";
    }

    return $response;
}

function GetAlarmCallReport($site_id, $page_number, $page_size, $range_start, $range_end, $search_text = "")
{
    // echo "$site_id, $page_number, $page_size, $range_start, $range_end <br />";
    $search_text = !isnull($search_text) ? "'%$search_text%'" : "'%%'";
    $offset = $page_size * ($page_number - 1);

    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $response = [
        "data" => [],
        "count" => 0,
    ];

    $sql = "SELECT aa.alarmsAlertId, aa.mobile, aa.alarms, aa.statusString, aa.callString, aa.date
            FROM alarmsAlerts aa
            JOIN alarms a ON a.alarmId = aa.alarmId
            WHERE aa.alertType = 'call'
            AND a.site_id = '$site_id'
            AND aa.mobile LIKE $search_text
            AND aa.date BETWEEN '$range_start' AND '$range_end'
            ORDER BY aa.date DESC
            LIMIT $offset, $page_size;";

    $sql_count = "SELECT COUNT(alarmsAlertId)
                FROM alarmsAlerts aa
                JOIN alarms a ON a.alarmId = aa.alarmId
                WHERE aa.alertType = 'call'
                AND a.site_id = '$site_id'
                AND aa.mobile LIKE $search_text
                AND aa.date BETWEEN '$range_start' AND '$range_end'";

    // echo "sql: $sql\r\n";
    // echo "sql: $sqlCount\r\n";
    $result = $mysqli->query($sql);
    while ($row = $result->fetch_row()) {
        $data = [];
        $data[] = $row[0];                                              //0 alarmsAlertId
        $data[] = $row[1];                                              //1 mobile
        $data[] = $row[2];                                              //2 alarms 
        $data[] = $row[3];                                              //3 statusString
        $data[] = str_replace("eye protect", "I-Protect", $row[4]);    //4 callString
        $data[] = utctoist($row[5]);                                    //5 date

        $response["data"][] = $data;
    }

    $result_count = $mysqli->query($sql_count);
    $response["count"] = $result_count->fetch_row()[0];

    $result_count->close();
    $result->close();
    mysqli_close($mysqli);
    // echo "<script>console.log(" . json_encode($response) . ");</script>";

    return $response;
}

function GetDashboardCalling()
{
    $id = $_SESSION['login_cust_id'];
    $login_type = $_SESSION['login_type'];
    $clusters = $_SESSION['login_typeref_id'];

    // echo "login_type: $login_type<br />";

    // UTC
    $start_date = isttoutc(date_create()->format("Y-m-d 00:00:00"));
    $end_date = date_create()->format("Y-m-d H:i:s");

    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $data = [
        "calls" => [],
        "failure" => [],
        "success" => [],
    ];
    $sql = "";

    if ($login_type == 1)  //Head, show all clusters and sites for the customer
    {
        $sql = "SELECT aa.alarmsAlertId, aa.statusString
                FROM siteinfo s 
                JOIN clusters c ON s.ClusterId = c.id
                -- JOIN quanta q ON q.ID = a.quanta_id
                JOIN alarms a ON a.site_rid = s.Id
                JOIN alarmsAlerts aa ON a.alarmId = aa.alarmId
                WHERE ((s.CustomerId = $id) AND (s.site_enabled = 1))
                AND s.quanta_id IS NOT NULL
                AND aa.date BETWEEN '$start_date' AND '$end_date'";
    } else if ($login_type == 2)  //Cluster Head, show only the cluster of the head
    {
        $clustersid = $clusters[0];  //Only a single cluster
        $sql = "SELECT aa.alarmsAlertId, aa.statusString
                FROM siteinfo s 
                JOIN clusters c ON s.ClusterId = c.id			
                -- JOIN quanta q ON q.ID = s.quanta_id
                JOIN alarms a ON a.site_rid = s.Id
                JOIN alarmsAlerts aa ON a.alarmId = aa.alarmId
                WHERE ((s.CustomerId = $id) AND (s.ClusterId = $clustersid) AND (s.site_enabled = 1))
                AND s.quanta_id IS NOT NULL
                AND aa.date BETWEEN '$start_date' AND '$end_date'";
    } else if ($login_type == 4)  //Zone Head, show all the clusters under the zone
    {
        $clustersid = join(',', $clusters);
        //echo "$clustersid <br>";
        $sql = "SELECT aa.alarmsAlertId, aa.statusString
                FROM siteinfo s 
                JOIN clusters c ON s.ClusterId = c.id			
                -- JOIN quanta q ON q.ID = s.quanta_id
                JOIN alarms a ON a.site_rid = s.Id
                JOIN alarmsAlerts aa ON a.alarmId = aa.alarmId
                WHERE ((s.CustomerId = $id) AND (s.ClusterId IN ($clustersid)) AND (s.site_enabled = 1))
                AND s.quanta_id IS NOT NULL
                AND aa.date BETWEEN '$start_date' AND '$end_date'";
    } else {
        //Show no cluster/site
        $sql = null;
    }

    // echo "SQL GetDashboardCalling: $sql <br />";
    //print("<script> var siteListArray = [];</script>");
    if ($sql != null) {
        $result = $mysqli->query($sql);
        $list = [];
        while ($row = $result->fetch_row()) {
            $list[] = ["alarmsAlertId" => $row[0], "statusString" => $row[1]];
        }
        $result->close();
        mysqli_close($mysqli);

        $data["calls"] = $list;
        $data["failure"] = array_filter($list, function ($item) {
            return $item["statusString"] === CALL_FAILED;
        });
        $data["success"] = array_filter($list, function ($item) {
            return $item["statusString"] === CALL_SUCCESS;
        });
    }

    // echo "<script>console.log(" . json_encode($data) . ");</script>";
    return $data;
}

function GetCustomer()
{
    $id = $_SESSION['login_cust_id'];

    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $sql = "SELECT Name, Address, logo FROM customers WHERE (id = $id) ";
    $result = $mysqli->query($sql);
    $customer = [];
    if ($result) {
        $data = $result->fetch_row();
        $customer = [
            'name' => $data[0],
            'address' => nl2br($data[1]),
            'logo' => "/media/tree/$data[2]",
        ];
        // echo "LOGO: $id - " . $customer['logo'] . "<br />";

        $result->close();
    }

    return $customer;
}

function SaveAlarm($site_rid, $alarm)
{
    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    extract($alarm);


    // query to insert record
    $sql = "INSERT INTO alarms
        SET     site_rid = $site_rid,
                site_id = '$site_id',
                quanta_id = $quanta_id,
                alarm_flag = '$alarm_flag',
                breach = '$breach',
                bts_voltage = $bts_voltage,
                datetime = '$datetime';";

    $result = $mysqli->query($sql);

    if (!$result) {
        echo ("Error SaveAlarm: " . $mysqli->error);
        return false;
    }

    $insertId = $mysqli->insert_id;
    $mysqli->close();
    return $insertId;
}

function GetMonthCalendar($year, $month)
{
    $year_month = "$year-$month";
    // echo "$year_month, $site_id <br />";

    $days_in_month = date_create($year_month)->format("m") == date_create()->format("m")
        ? date_create()->format("d")
        : cal_days_in_month(CAL_GREGORIAN, $month, $year);

    // echo "days_in_month: $days_in_month <br />";

    // create array of null's
    $array_fill = array_fill(0, $days_in_month, null);
    // echo json_encode($array_fill) . "<br />";

    // fill the array with dates
    return array_map(function ($day, $i) use ($year_month) {
        $start_of_month = date_create("$year_month-01");
        return $start_of_month->add(new DateInterval("P{$i}D"));
    }, $array_fill, array_keys($array_fill));
}

function GetAlarmReport($site_id, $page_number, $page_size, $start_date, $end_date)
{
    include 'dbinc.php';

    $offset = $page_size * ($page_number - 1);

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $sql = "SELECT alarmId, datetime, breach, bts_voltage
            FROM alarms
            WHERE site_id = '$site_id'
            AND datetime BETWEEN '$start_date' AND '$end_date'
            ORDER BY alarmId DESC
            LIMIT $offset, $page_size";

    // echo "sql: $sql . <br />";

    $sql_count = "SELECT COUNT(alarmId)
            FROM alarms
            WHERE site_id = '$site_id'
            AND datetime BETWEEN '$start_date' AND '$end_date'";

    $result = $mysqli->query($sql);
    $result_count = $mysqli->query($sql_count);

    $response = [
        "data" => [],
        "count" => 0,
    ];

    if ($result)
        while ($row = $result->fetch_row())
            $response["data"][] = [$row[0], $row[1], $row[2], $row[3]];

    $response["count"] = $result_count->fetch_row()[0];


    $result->close();
    mysqli_close($mysqli);

    return $response;
}

function GetActiveAlarmsBySite($site_id)
{
    include 'dbinc.php';

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $sql = "SELECT 
            id, 
            quanta_id_generated, 
            date_generated, 
            alarm_name
            
            FROM alarmstracking
            WHERE site_id = '$site_id'
            AND alarm_status = 0
            ORDER BY id DESC";

    // echo "sql: $sql . <br />";

    $result = $mysqli->query($sql);

    $data = [];
    if ($result)
        while ($row = $result->fetch_row())
            $data[] = [$row[0], $row[1], $row[2], $row[3]];

    $result->close();
    mysqli_close($mysqli);

    return $data;
}

function GetAlarmTrackingReport($site_id, $page_number, $page_size, $start_date, $end_date)
{
    include 'dbinc.php';

    $offset = $page_size * ($page_number - 1);

    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $sql = "SELECT 
            id, 
            quanta_id_generated, 
            quanta_id_resolved, 
            site_id, 
            date_generated, 
            date_resolved, 
            alarm_status, 
            alarm_name
            
            FROM alarmstracking
            WHERE site_id = '$site_id'
            AND date_generated BETWEEN '$start_date' AND '$end_date'
            ORDER BY date_generated DESC
            LIMIT $offset, $page_size";

    // echo "sql: $sql . <br />";

    $sql_count = "SELECT COUNT(id)
            FROM alarmstracking
            WHERE site_id = '$site_id'
            AND date_generated BETWEEN '$start_date' AND '$end_date'";

    $result = $mysqli->query($sql);
    $result_count = $mysqli->query($sql_count);

    $response = [
        "data" => [],
        "count" => 0,
    ];

    if ($result)
        while ($row = $result->fetch_row())
            $response["data"][] = [$row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]];

    $response["count"] = $result_count->fetch_row()[0];


    $result->close();
    mysqli_close($mysqli);

    return $response;
}

function CreateUpdateAlarmTrendQuery(
    $mysqli,
    $date_trend,
    $generated_critical,
    $resolved_critical,
    $generated_non_critical,
    $resolved_non_critical,
    $CustomerId,
    $ClusterId
) {
    $sql_write = [];

    // Critical
    if ($generated_critical || $resolved_critical) {
        $where_critical = "WHERE date_trend = '$date_trend' AND CustomerId = $CustomerId AND ClusterId = $ClusterId AND alarm_type = 'critical'";
        $sql_read = "SELECT COUNT(*) FROM alarms_trend $where_critical;";
        // echo $sql_read . "\r\n";
        $result = $mysqli->query($sql_read);
        $row = $result->fetch_row();
        $result->close();

        if ($row[0] > 0) {
            $sql_write[] = "UPDATE alarms_trend 
                SET alarms_generated = alarms_generated + $generated_critical, 
                alarms_resolved = alarms_resolved + $resolved_critical 
                $where_critical;";
        } else {
            $sql_write[] = "INSERT INTO alarms_trend 
            SET date_trend = '$date_trend',
                alarms_generated = $generated_critical,
                alarms_resolved = $resolved_critical,
                CustomerId = $CustomerId,
                ClusterId = $ClusterId,
                alarm_type = 'critical';";
        }
    }

    // Non Critical
    if ($generated_non_critical || $resolved_non_critical) {
        $where_non_critical = "WHERE date_trend = '$date_trend' AND CustomerId = $CustomerId AND ClusterId = $ClusterId AND alarm_type = 'non_critical'";
        $sql = "SELECT COUNT(*) FROM alarms_trend $where_non_critical;";
        $result = $mysqli->query($sql);
        $row = $result->fetch_row();
        $result->close();

        if ($row[0] > 0) {
            $sql_write[] = "UPDATE alarms_trend 
                SET alarms_generated = alarms_generated + $generated_non_critical, 
                alarms_resolved = alarms_resolved + $resolved_non_critical 
                $where_non_critical;";
        } else {
            $sql_write[] = "INSERT INTO alarms_trend 
            SET date_trend = '$date_trend',
                alarms_generated = $generated_non_critical,
                alarms_resolved = $resolved_non_critical,
                CustomerId = $CustomerId,
                ClusterId = $ClusterId,
                alarm_type = 'non_critical';";
        }
    }

    return $sql_write;
}

function CreateUpdateAlarmTrendSitesQuery(
    $mysqli,
    $date_trend,
    $generated_critical,
    $resolved_critical,
    $generated_non_critical,
    $resolved_non_critical,
    $site_id
) {
    $sql_write = [];

    // Critical
    if ($generated_critical || $resolved_critical) {
        $where_critical = "WHERE date_trend = '$date_trend' AND site_id = '$site_id' AND alarm_type = 'critical'";
        $sql_read = "SELECT COUNT(*) FROM alarms_trend_sites $where_critical;";
        // echo $sql_read . "\r\n";
        $result = $mysqli->query($sql_read);
        $row = $result->fetch_row();
        $result->close();

        if ($row[0] > 0) {
            $sql_write[] = "UPDATE alarms_trend_sites 
                SET alarms_generated = alarms_generated + $generated_critical, 
                alarms_resolved = alarms_resolved + $resolved_critical 
                $where_critical;";
        } else {
            $sql_write[] = "INSERT INTO alarms_trend_sites
            SET date_trend = '$date_trend',
                alarms_generated = $generated_critical,
                alarms_resolved = $resolved_critical,
                site_id = '$site_id',
                alarm_type = 'critical';";
        }
    }

    // Non Critical
    if ($generated_non_critical || $resolved_non_critical) {
        $where_non_critical = "WHERE date_trend = '$date_trend' AND site_id = '$site_id' AND alarm_type = 'non_critical'";
        $sql = "SELECT COUNT(*) FROM alarms_trend_sites $where_non_critical;";
        $result = $mysqli->query($sql);
        $row = $result->fetch_row();
        $result->close();

        if ($row[0] > 0) {
            $sql_write[] = "UPDATE alarms_trend_sites 
                SET alarms_generated = alarms_generated + $generated_non_critical, 
                alarms_resolved = alarms_resolved + $resolved_non_critical 
                $where_non_critical;";
        } else {
            $sql_write[] = "INSERT INTO alarms_trend_sites 
            SET date_trend = '$date_trend',
                alarms_generated = $generated_non_critical,
                alarms_resolved = $resolved_non_critical,
                site_id = '$site_id',
                alarm_type = 'non_critical';";
        }
    }

    return $sql_write;
}

function CreateUpdateAlarmTrend(
    $generated_critical,
    $resolved_critical,
    $generated_non_critical,
    $resolved_non_critical,
    $CustomerId,
    $ClusterId,
    $site_id
) {
    // echo "generated_critical: $generated_critical\r\n";
    // echo "resolved_critical: $resolved_critical\r\n";
    // echo "generated_non_critical: $generated_non_critical\r\n";
    // echo "resolved_non_critical: $resolved_non_critical\r\n";
    // echo "CustomerId: $CustomerId\r\n";
    // echo "ClusterId: $ClusterId\r\n";

    include 'dbinc.php';
    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $date_trend = date_create()->format("Y-m-d");
    // $date_trend = date_create("now", new DateTimeZone("Asia/Kolkata"))->format("Y-m-d");
    $sql_write = [];

    $alarmTrendQuery = CreateUpdateAlarmTrendQuery(
        $mysqli,
        $date_trend,
        $generated_critical,
        $resolved_critical,
        $generated_non_critical,
        $resolved_non_critical,
        $CustomerId,
        $ClusterId
    );
    array_push($sql_write, ...$alarmTrendQuery);

    $alarmTrendSitesQuery = CreateUpdateAlarmTrendSitesQuery(
        $mysqli,
        $date_trend,
        $generated_critical,
        $resolved_critical,
        $generated_non_critical,
        $resolved_non_critical,
        $site_id
    );
    array_push($sql_write, ...$alarmTrendSitesQuery);

    if (count($sql_write) > 0) {
        $result = $mysqli->multi_query(implode("", $sql_write));
        if (!$result) echo "CreateUpdateAlarmTrend Error:" . $mysqli->error;
    }

    mysqli_close($mysqli);
}

function CreateQueryEnergyHours($mysqli, $date_trend, $trend_type, $energy_hours, $CustomerId, $ClusterId)
{
    // Calculate the site count for a trend type
    $sql_read = "SELECT COUNT(*) FROM energy_hours_trend_sites ehts 
                JOIN siteinfo s ON s.site_id = ehts.site_id
                WHERE ehts.date_trend = '$date_trend'
                AND ehts.trend_type = '$trend_type'
                AND s.CustomerId = $CustomerId
                AND s.ClusterId = $ClusterId;";

    // echo "sql_read: $sql_read \r\n";
    $result = $mysqli->query($sql_read);
    if (!$result) echo "CreateQueryEnergyHours error: " . $mysqli->error;

    $row = $result->fetch_row();
    $sites_count = $row[0];
    $result->close();

    $where = "WHERE date_trend = '$date_trend' AND CustomerId = $CustomerId AND ClusterId = $ClusterId AND trend_type = '$trend_type'";
    $sql_read = "SELECT COUNT(*) FROM energy_hours_trend $where;";
    // echo "sql_read: " . $sql_read . "\r\n";
    $result = $mysqli->query($sql_read);
    $row = $result->fetch_row();
    $result->close();

    if ($row[0] > 0) return "UPDATE energy_hours_trend SET energy_hours = energy_hours + $energy_hours, sites_count = $sites_count $where;";

    // Get sites count
    //$now = unixToDate(time() + GMT);
    // $comm_aging = COMM_AGING;
    // $sql_read = "SELECT COUNT(*) 
    //     FROM siteinfo s 
    //     JOIN quanta q ON q.ID = s.quanta_id
    //     WHERE s.CustomerId = $CustomerId 
    //     AND s.ClusterId = $ClusterId 
    //     AND s.site_enabled = 1 
    //     AND s.quanta_id IS NOT NULL
    //     AND TIMESTAMPDIFF(SECOND, q.timestamp, NOW()) <= $comm_aging;";

    // $result = $mysqli->query($sql_read);
    // $row = $result->fetch_row();
    // $sites_count = $row[0];
    // $result->close();

    return "INSERT INTO energy_hours_trend SET date_trend = '$date_trend', energy_hours = $energy_hours, CustomerId = $CustomerId, ClusterId = $ClusterId, trend_type = '$trend_type', sites_count = $sites_count;";
}

function CreateQueryEnergyHoursSites($mysqli, $date_trend, $trend_type, $energy_hours, $site_id)
{
    $where = "WHERE date_trend = '$date_trend' AND site_id = '$site_id' AND trend_type = '$trend_type'";
    $sql_read = "SELECT COUNT(*) FROM energy_hours_trend_sites $where;";
    // echo "sql_read: " . $sql_read . "\r\n";
    $result = $mysqli->query($sql_read);
    $row = $result->fetch_row();
    $result->close();

    if ($row[0] > 0) return "UPDATE energy_hours_trend_sites SET energy_hours = energy_hours + $energy_hours $where;";
    return "INSERT INTO energy_hours_trend_sites SET date_trend = '$date_trend', energy_hours = $energy_hours, site_id = '$site_id', trend_type = '$trend_type';";
}

function CreateUpdateEnergyHoursTrend($energy_hours, $CustomerId, $ClusterId)
{
    include 'dbinc.php';
    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $date_trend = date_create()->format("Y-m-d");

    $sql_write = [];

    if ($energy_hours[DC_ENERGY]) $sql_write[] = CreateQueryEnergyHours($mysqli, $date_trend, DC_ENERGY, $energy_hours[DC_ENERGY], $CustomerId, $ClusterId);
    if ($energy_hours[EB_ENERGY]) $sql_write[] = CreateQueryEnergyHours($mysqli, $date_trend, EB_ENERGY, $energy_hours[EB_ENERGY], $CustomerId, $ClusterId);
    if ($energy_hours[DG_ENERGY]) $sql_write[] = CreateQueryEnergyHours($mysqli, $date_trend, DG_ENERGY, $energy_hours[DG_ENERGY], $CustomerId, $ClusterId);
    if ($energy_hours[PV_ENERGY]) $sql_write[] = CreateQueryEnergyHours($mysqli, $date_trend, PV_ENERGY, $energy_hours[PV_ENERGY], $CustomerId, $ClusterId);
    if ($energy_hours[EB_HOURS]) $sql_write[] = CreateQueryEnergyHours($mysqli, $date_trend, EB_HOURS, $energy_hours[EB_HOURS], $CustomerId, $ClusterId);
    if ($energy_hours[DG_HOURS]) $sql_write[] = CreateQueryEnergyHours($mysqli, $date_trend, DG_HOURS, $energy_hours[DG_HOURS], $CustomerId, $ClusterId);
    if ($energy_hours[BATTERY_HOURS]) $sql_write[] = CreateQueryEnergyHours($mysqli, $date_trend, BATTERY_HOURS, $energy_hours[BATTERY_HOURS], $CustomerId, $ClusterId);
    if ($energy_hours[PV_HOURS]) $sql_write[] = CreateQueryEnergyHours($mysqli, $date_trend, PV_HOURS, $energy_hours[PV_HOURS], $CustomerId, $ClusterId);
    if ($energy_hours[UP_TIME]) $sql_write[] = CreateQueryEnergyHours($mysqli, $date_trend, UP_TIME, $energy_hours[UP_TIME], $CustomerId, $ClusterId);
    // echo "SQL: $sql_write \r\n";
    // echo  "SQL: " . json_encode($sql_write) . "\r\n";

    if (count($sql_write) > 0) {
        $result = $mysqli->multi_query(implode("", $sql_write));
        if (!$result) echo "CreateUpdateEnergyHoursTrend Error:" . $mysqli->error;
    }

    mysqli_close($mysqli);
}

function CreateUpdateEnergyHoursTrendSites($energy_hours, $site_id)
{
    include 'dbinc.php';
    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $date_trend = date_create()->format("Y-m-d");

    $sql_write = [];

    if ($energy_hours[DC_ENERGY]) $sql_write[] = CreateQueryEnergyHoursSites($mysqli, $date_trend, DC_ENERGY, $energy_hours[DC_ENERGY], $site_id);
    if ($energy_hours[EB_ENERGY]) $sql_write[] = CreateQueryEnergyHoursSites($mysqli, $date_trend, EB_ENERGY, $energy_hours[EB_ENERGY], $site_id);
    if ($energy_hours[DG_ENERGY]) $sql_write[] = CreateQueryEnergyHoursSites($mysqli, $date_trend, DG_ENERGY, $energy_hours[DG_ENERGY], $site_id);
    if ($energy_hours[PV_ENERGY]) $sql_write[] = CreateQueryEnergyHoursSites($mysqli, $date_trend, PV_ENERGY, $energy_hours[PV_ENERGY], $site_id);
    if ($energy_hours[EB_HOURS]) $sql_write[] = CreateQueryEnergyHoursSites($mysqli, $date_trend, EB_HOURS, $energy_hours[EB_HOURS], $site_id);
    if ($energy_hours[DG_HOURS]) $sql_write[] = CreateQueryEnergyHoursSites($mysqli, $date_trend, DG_HOURS, $energy_hours[DG_HOURS], $site_id);
    if ($energy_hours[BATTERY_HOURS]) $sql_write[] = CreateQueryEnergyHoursSites($mysqli, $date_trend, BATTERY_HOURS, $energy_hours[BATTERY_HOURS], $site_id);
    if ($energy_hours[PV_HOURS]) $sql_write[] = CreateQueryEnergyHoursSites($mysqli, $date_trend, PV_HOURS, $energy_hours[PV_HOURS], $site_id);
    if ($energy_hours[UP_TIME]) $sql_write[] = CreateQueryEnergyHoursSites($mysqli, $date_trend, UP_TIME, $energy_hours[UP_TIME], $site_id);
    // echo "SQL: $sql_write \r\n";


    // echo  "SQL: " . json_encode($sql_write) . "\r\n";

    if (count($sql_write) > 0) {
        $result = $mysqli->multi_query(implode("", $sql_write));
        if (!$result) echo "CreateUpdateEnergyHoursTrendSites Error:" . $mysqli->error;
    }

    mysqli_close($mysqli);
}

function ManageEnergyHoursTrend($energy_hours, $CustomerId, $ClusterId, $site_id)
{
    // First create trend data for single site
    CreateUpdateEnergyHoursTrendSites($energy_hours, $site_id);

    // -> Then create trend data for customer/cluster
    // -> (Needs to fetch the site_count to calculate the average metering)
    CreateUpdateEnergyHoursTrend($energy_hours, $CustomerId, $ClusterId);
}

function CreateUpdateAlarmTracking($quanta_id, $site_rid, $site_id, $previous_alarms, $updated_alarms)
{
    // echo "Alarms: " . json_encode($updated_alarms) . "\r\n";
    include 'dbinc.php';
    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    $sql = [];
    foreach ($updated_alarms as $alarm => $status) {
        if ($alarm === "load") {
            $sql[] = "INSERT INTO alarmstracking SET quanta_id_generated = $quanta_id, site_rid = $site_rid, site_id = '$site_id', alarm_status = 0, alarm_type = 'load', alarm_name = 'load_$status';";
            // if ($previous_alarms["load"] !== $status) $sql[] = "UPDATE alarmstracking SET quanta_id_resolved = $quanta_id, alarm_status = 1 WHERE site_rid = $site_rid AND alarm_status = 0 AND alarm_name = 'load_" . $previous_alarms["load"] . "';";
            $sql[] = "UPDATE alarmstracking SET quanta_id_resolved = $quanta_id, alarm_status = 1 WHERE site_rid = $site_rid AND alarm_status = 0 AND quanta_id_generated <> $quanta_id AND alarm_type = 'load';";
        } else if ($alarm === "mode") {
            $sql[] = "INSERT INTO alarmstracking SET quanta_id_generated = $quanta_id, site_rid = $site_rid, site_id = '$site_id', alarm_status = 0, alarm_type = 'mode', alarm_name = 'mode_$status';";
            // if ($previous_alarms["mode"] !== $status) $sql[] = "UPDATE alarmstracking SET quanta_id_resolved = $quanta_id, alarm_status = 1 WHERE site_rid = $site_rid AND alarm_status = 0 AND alarm_name = 'mode_" . $previous_alarms["mode"] . "';";
            $sql[] = "UPDATE alarmstracking SET quanta_id_resolved = $quanta_id, alarm_status = 1 WHERE site_rid = $site_rid AND alarm_status = 0 AND quanta_id_generated <> $quanta_id AND alarm_type = 'mode';";
        } else {
            if ($status === true) $sql[] = "INSERT INTO alarmstracking SET quanta_id_generated = $quanta_id, site_rid = $site_rid, site_id = '$site_id', alarm_status = 0, alarm_type = 'alarm', alarm_name = '$alarm';";
            if ($status === false) $sql[] = "UPDATE alarmstracking SET quanta_id_resolved = $quanta_id, alarm_status = 1 WHERE site_rid = $site_rid AND alarm_status = 0 AND alarm_name = '$alarm';";
        }
    }


    // echo "SQL: " . json_encode($sql) . "\r\n";
    // echo date_default_timezone_get() . "\r\n";

    if ($sql) {
        $result = $mysqli->multi_query(implode("", $sql));
        if (!$result) {
            echo ("Error SaveAlarm: " . $mysqli->error);
            return false;
        }
    }


    $mysqli->close();
}

function GetAlarmsTrend($start_date, $end_date, $cluster_id, $alarm_type)
{
    $CustomerId = $_SESSION['login_cust_id'];
    $cluster_id = hasValue($cluster_id) ? $cluster_id : 'NULL'; //number
    $alarm_type = hasValue($alarm_type) ? "'$alarm_type'" : 'NULL'; //string

    include 'dbinc.php';
    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    // TODO: Table Indexing.
    // Fetch all alarms count
    $sql = "SELECT
        date_trend,
        SUM(alarms_generated),
        SUM(alarms_resolved)
    FROM alarms_trend
    WHERE CustomerId = $CustomerId
    AND date_trend BETWEEN '$start_date' AND '$end_date'
    AND ClusterId = IFNULL($cluster_id, ClusterId)
    AND alarm_type = IFNULL($alarm_type, alarm_type) 
    GROUP BY date_trend
    ;";

    // echo "GetAlarmsTrend SQL: $sql <br />";

    $data = [];
    $result = $mysqli->query($sql);

    if (!$result) echo "GetAlarmsTrend Error: " . $mysqli->error;

    while ($row = $result->fetch_row()) {
        $data[] = [
            $row[0],
            (int) $row[1],
            (int) $row[2],
        ];
    }

    $result->close();
    mysqli_close($mysqli);

    return $data;
}

function GetAlarmsTrendBySite($start_date, $end_date, $site_id, $alarm_type)
{
    // $CustomerId = $_SESSION['login_cust_id'];
    $site_id = hasValue($site_id) ? "'$site_id'" : 'NULL'; //string
    $alarm_type = hasValue($alarm_type) ? "'$alarm_type'" : 'NULL'; //string

    include 'dbinc.php';
    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    // TODO: Table Indexing.
    // Fetch all alarms count
    $sql = "SELECT
        date_trend,
        SUM(alarms_generated),
        SUM(alarms_resolved)
    FROM alarms_trend_sites
    WHERE site_id = $site_id
    AND date_trend BETWEEN '$start_date' AND '$end_date'
    AND alarm_type = IFNULL($alarm_type, alarm_type) 
    GROUP BY date_trend
    ;";

    // echo "GetAlarmsTrend SQL: $sql <br />";

    $data = [];
    $result = $mysqli->query($sql);

    if (!$result) echo "GetAlarmsTrend Error: " . $mysqli->error;

    while ($row = $result->fetch_row()) {
        $data[] = [
            $row[0],
            (int) $row[1],
            (int) $row[2],
        ];
    }

    $result->close();
    mysqli_close($mysqli);

    return $data;
}

function GetEnergyHoursTrend($start_date, $end_date, $cluster_id, $trend_type)
{
    $CustomerId = $_SESSION['login_cust_id'];
    $cluster_id = hasValue($cluster_id) ? $cluster_id : 'NULL'; //number
    $trend_type = hasValue($trend_type) ? "'$trend_type'" : 'NULL'; //string

    include 'dbinc.php';
    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    // TODO: Table Indexing.
    // Fetch all alarms count
    $sql = "SELECT
        date_trend,
        SUM(sites_count),
        SUM(energy_hours)
    FROM energy_hours_trend
    WHERE CustomerId = $CustomerId
    AND date_trend BETWEEN '$start_date' AND '$end_date'
    AND ClusterId = IFNULL($cluster_id, ClusterId)
    AND trend_type = IFNULL($trend_type, trend_type) 
    GROUP BY date_trend
    ;";

    // echo "GetEnergyHoursTrend SQL: $sql <br />";

    $data = [];
    $result = $mysqli->query($sql);

    if (!$result) echo "GetAlarmsTrend Error: " . $mysqli->error;

    while ($row = $result->fetch_row()) {
        $data[] = [$row[0], (int) $row[1], (float) $row[2]];
    }

    $result->close();
    mysqli_close($mysqli);

    return $data;
}

function GetEnergyHoursTrendBySite($start_date, $end_date, $site_id, $trend_type)
{
    $site_id = hasValue($site_id) ? "'$site_id'" : 'NULL'; //string
    $trend_type = hasValue($trend_type) ? "'$trend_type'" : 'NULL'; //string

    include 'dbinc.php';
    $mysqli = new mysqli("$mysql_hostname", "$mysql_user", "$mysql_password", "$mysql_database");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        return null;
    }

    // TODO: Table Indexing.
    // Fetch all alarms count
    $sql = "SELECT
        date_trend,
        SUM(energy_hours)
    FROM energy_hours_trend_sites
    WHERE site_id = $site_id
    AND date_trend BETWEEN '$start_date' AND '$end_date'
    AND trend_type = IFNULL($trend_type, trend_type) 
    GROUP BY date_trend
    ;";

    // echo "GetEnergyHoursTrend SQL: $sql <br />";

    $data = [];
    $result = $mysqli->query($sql);

    if (!$result) echo "GetAlarmsTrend Error: " . $mysqli->error;

    while ($row = $result->fetch_row()) {
        $data[] = [$row[0], (float) $row[1]];
    }

    $result->close();
    mysqli_close($mysqli);

    return $data;
}

function createWhatsappBody($siteId, $siteName, $alarms)
{
    $alert = "This is SISAXS alert for site $siteName ($siteId). ";
    $conclusion = "Please take suitable action. ";

    $isDoor = strpos($alarms, "door") !== false;
    $isSmoke = strpos($alarms, "smoke") !== false;
    $isPir = strpos($alarms, "pir") !== false;
    $isBts = strpos($alarms, "bts") !== false;
    $isTheft = strpos($alarms, "theft") !== false;
    $isBattery = strpos($alarms, "battery") !== false;


    $body = $alert;
    $body .= $isDoor ? "Door is open. " : "";
    $body .= $isSmoke ? "Potential smoke or fire is detected. " : "";
    $body .= $isPir ? "Potential movement is detected. " : "";
    $body .= $isBts ? "BTS voltage is low. " : "";
    $body .= $isTheft ? "Potential theft of battery might have occured. " : "";
    $body .= $isBattery ? "The site load is on battery. " : "";

    $body .= $conclusion;

    // string speech = "This is Eye Protect Alert for site Farukabad. Potential theft of Battery might have occured. Please take suitable action.";
    return $body;
}

function sendWhatsapp($to, $siteId, $siteName, $alarms)
{
    if (isnull($to) || isnull($siteId) || isnull($siteName) || isnull($alarms)) return;

    $params = array(
        'token' => WHATSAPP_TOKEN,
        'to' => $to,
        'body' => createWhatsappBody($siteId, $siteName, $alarms),
        'referenceId' => "SISAXS"
    );

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.ultramsg.com/instance77626/messages/chat",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => http_build_query($params),
        CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        // echo "cURL Error #:" . $err;
    } else {
        // echo $response;
    }
}
function GetAllFuelMaintenanceReports($filters = [], $page_number = 1, $page_size = 10) {
    $array = array();
    include 'dbinc.php';
    $mysqli = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        return [];  // Return an empty array instead of null
    }

    // Base query
    $query = "
        SELECT 
            fm.date_filling,
            fm.remarks,
            fm.db_fem,
            fm.approved_cph,
            fm.filling_quantity,
            si.site_id,             
            si.SiteName,            
            si.SAM_Name, 
            si.site_type,          
            di.name AS district_name, 
            cl.name AS cluster_name,  
            ci.name AS circle_name
        FROM fuel_maintenance AS fm
        INNER JOIN siteinfo AS si ON fm.site_rid = si.Id
        INNER JOIN districts AS di ON si.DistrictId = di.id  
        INNER JOIN clusters AS cl ON si.ClusterId = cl.id
        INNER JOIN circles AS ci ON si.CircleId = ci.id
        WHERE 1=1
    ";

    // Add filters dynamically
    if (!empty($filters['site_id'])) {
        $query .= " AND si.site_id = ?";
    }
    if (!empty($filters['site_name'])) {
        $query .= " AND si.SiteName LIKE ?";
    }
    if (!empty($filters['global_id'])) {
        $query .= " AND si.global_id = ?";
    }
    if (!empty($filters['circle_name'])) {
        $query .= " AND ci.name LIKE ?";
    }
    if (!empty($filters['cluster_name'])) {
        $query .= " AND cl.name LIKE ?";
    }
    if (!empty($filters['district_name'])) {
        $query .= " AND di.name LIKE ?";
    }
    if (!empty($filters['from_date'])) {
        $query .= " AND fm.date_filling >= ?";
    }
    if (!empty($filters['to_date'])) {
        $query .= " AND fm.date_filling <= ?";
    }

    // Calculate the offset
    $offset = ($page_number - 1) * $page_size;
    $query .= " LIMIT ?, ?"; // Add LIMIT clause for pagination

    // Prepare the statement
    if ($stmt = $mysqli->prepare($query)) {
        $types = '';
        $params = [];

        // Bind filter parameters
        if (!empty($filters['site_id'])) {
            $types .= 's';
            $params[] = $filters['site_id'];
        }
        if (!empty($filters['site_name'])) {
            $types .= 's';
            $params[] = '%' . $filters['site_name'] . '%';
        }
        if (!empty($filters['global_id'])) {
            $types .= 's';
            $params[] = $filters['global_id'];
        }
        if (!empty($filters['circle_name'])) {
            $types .= 's';
            $params[] = '%' . $filters['circle_name'] . '%';
        }
        if (!empty($filters['cluster_name'])) {
            $types .= 's';
            $params[] = '%' . $filters['cluster_name'] . '%';
        }
        if (!empty($filters['district_name'])) {
            $types .= 's';
            $params[] = '%' . $filters['district_name'] . '%';
        }
        if (!empty($filters['from_date'])) {
            $types .= 's';
            $params[] = $filters['from_date'];
        }
        if (!empty($filters['to_date'])) {
            $types .= 's';
            $params[] = $filters['to_date'];
        }

        // Append pagination parameters
        $types .= 'ii'; // Add types for LIMIT parameters
        $params[] = $offset; // Offset
        $params[] = $page_size; // Limit

        // Bind parameters dynamically
        if ($types) {
            $stmt->bind_param($types, ...$params);
        }

        // Execute the statement
        $stmt->execute();
        
        // Bind the result variables
        $stmt->bind_result($date_filling, $remarks, $db_fem, $approved_cph, $filling_quantity, $site_id, $SiteName, $SAM_Name, $site_type, $district_name, $cluster_name, $circle_name);
        
        // Fetch all results
        while ($stmt->fetch()) {
            $array[] = array(
                'date_filling' => $date_filling,
                'remarks' => $remarks,
                'db_fem' => $db_fem,
                'approved_cph' => $approved_cph,
                'filling_quantity' => $filling_quantity,
                'site_id' => $site_id,         
                'SiteName' => $SiteName,       
                'SAM_Name' => $SAM_Name,
                'site_type' => $site_type,          
                'district_name' => $district_name,  
                'cluster_name' => $cluster_name,
                'circle_name' => $circle_name     
            );
        }
        // Close the statement
        $stmt->close();
    } else {
        printf("Preparation failed: %s\n", $mysqli->error);
    }
    // Close the database connection
    $mysqli->close();

    return $array;
}
function GetAllClusters() {
    include 'dbinc.php';
    $mysqli = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
    $clusters = array();
    if ($mysqli->connect_errno) return $clusters;
    
    $query = "SELECT DISTINCT cl.name FROM clusters cl INNER JOIN siteinfo si ON cl.id = si.ClusterId ORDER BY cl.name";
    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $clusters[] = $row['name'];
        }
        $result->free();
    }
    $mysqli->close();
    return $clusters;
}

function GetAllCircles() {
    include 'dbinc.php';
    $mysqli = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
    $circles = array();
    if ($mysqli->connect_errno) return $circles;
    
    $query = "SELECT DISTINCT ci.name FROM circles ci INNER JOIN siteinfo si ON ci.id = si.CircleId ORDER BY ci.name";
    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $circles[] = $row['name'];
        }
        $result->free();
    }
    $mysqli->close();
    return $circles;
}

function GetAllDistricts() {
    include 'dbinc.php';
    $mysqli = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
    $districts = array();
    if ($mysqli->connect_errno) return $districts;
    
    $query = "SELECT DISTINCT di.name FROM districts di INNER JOIN siteinfo si ON di.id = si.DistrictId ORDER BY di.name";
    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $districts[] = $row['name'];
        }
        $result->free();
    }
    $mysqli->close();
    return $districts;
}