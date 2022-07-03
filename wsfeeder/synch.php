<?php

/**
 * File utama untuk sinkronisasi SIAKAD - Feeder PDDIKTI
 */

/**
 * Set limit waktu eksekusi script
 */
set_time_limit(0);

/**
 * Parameter server
 */
define("SIAKAD_DB_HOST", "localhost");
define("SIAKAD_DB_USER", "root");
define("SIAKAD_DB_USER_PASSWORD", "");
define("SIAKAD_DB_NAME", "");
define("FEEDER_WS_HOST", "localhost");
define("FEEDER_WS_USER", "root");
define("FEEDER_WS_USER_PASSWORD", "");

/**
 * Class WSFeeder
 */
class WSFeeder
{

    /**
     * Atribut class
     */
    private $token;

    /**
     * Construct
     */
    function __construct()
    {
        $data = array
        (
            "act" => "GetToken",
            "username" => FEEDER_WS_USER,
            "password" => FEEDER_WS_USER_PASSWORD
        );
		$result_string = $this->runWS($data, "json");
		$result_string = json_decode($result_string);
		$this->token = $result_string->data->token;
		if ($this->token == "")
		{
			die("Tidak dapat menghubungi server aplikasi Feeder DIKTI");
		}
    }

    /**
     * Function untuk menjalankan perintah webservice
     */
    function runWS($data, $type="json")
    {
        $ch = curl_init();
		curl_setopt($ch, CURLOPT_POST, 1);
		$headers = array();
		if ($type == "xml")
		{
			$headers[] = "Content-Type: application/xml";
		}
		else
		{
			$headers[] = "Content-Type: application/json";
		} 
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		if ($data)
		{
			if ($type == "xml")
			{ 
				$data = $this->stringXML($data); 
			}
			else
			{
				$data = json_encode($data);
			}
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
		}
		curl_setopt($ch, CURLOPT_URL, FEEDER_WS_HOST);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
    }

    /**
     * Function untuk generate dokumen XML
     */
    function stringXML($data)
	{
		$xml = new SimpleXMLElement("<?xml version='1.0'?><data></data>");
		$this->array_to_xml($data, $xml);
		return $xml->asXML();
	}

    /**
     * Function untuk mengubah array menjadi XML
     */
    function array_to_xml($data, &$xml_data)
	{
		foreach($data as $key => $value)
		{
			if(is_array($value))
			{
				$subnode = $xml_data->addChild($key);
				array_to_xml($value, $subnode);
			}
			else
			{
				$xml_data->addChild("$key", $value);
			}
		}
	}

}

?>