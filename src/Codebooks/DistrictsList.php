<?php

/**
 * Class DistrictsList
 */
class DistrictsList
{

	/**
	 * @return array
	 */
	public static function getDistricts()
	{
		$districtsArray =
			[
				[
					"district"     => "Benešov",
					"abbreviation" => "BN",
					"region"       => "Středočeský kraj",
				],
				[
					"district"     => "Beroun",
					"abbreviation" => "BE",
					"region"       => "Středočeský kraj",
				],
				[
					"district"     => "Blansko",
					"abbreviation" => "BK",
					"region"       => "Jihomoravský kraj",
				],
				[
					"district"     => "Brno-město",
					"abbreviation" => "BM",
					"region"       => "Jihomoravský kraj",
				],
				[
					"district"     => "Brno-venkov",
					"abbreviation" => "BI",
					"region"       => "Jihomoravský kraj",
				],
				[
					"district"     => "Bruntál",
					"abbreviation" => "BR",
					"region"       => "Moravskoslezský kraj",
				],
				[
					"district"     => "Břeclav",
					"abbreviation" => "BV",
					"region"       => "Jihomoravský kraj",
				],
				[
					"district"     => "Česká Lípa",
					"abbreviation" => "CL",
					"region"       => "Liberecký kraj",
				],
				[
					"district"     => "České Budějovice",
					"abbreviation" => "CB",
					"region"       => "Jihočeský kraj",
				],
				[
					"district"     => "Český Krumlov",
					"abbreviation" => "CK",
					"region"       => "Jihočeský kraj",
				],
				[
					"district"     => "Děčín",
					"abbreviation" => "DC",
					"region"       => "Ústecký kraj",
				],
				[
					"district"     => "Domažlice",
					"abbreviation" => "DO",
					"region"       => "Plzeňský kraj",
				],
				[
					"district"     => "Frýdek-Místek",
					"abbreviation" => "FM",
					"region"       => "Moravskoslezský kraj",
				],
				[
					"district"     => "Havlíčkův Brod",
					"abbreviation" => "HB",
					"region"       => "Kraj Vysočina",
				],
				[
					"district"     => "Hodonín",
					"abbreviation" => "HO",
					"region"       => "Jihomoravský kraj",
				],
				[
					"district"     => "Hradec Králové",
					"abbreviation" => "HK",
					"region"       => "Královéhradecký kraj",
				],
				[
					"district"     => "Cheb",
					"abbreviation" => "CH",
					"region"       => "Karlovarský kraj",
				],
				[
					"district"     => "Chomutov",
					"abbreviation" => "CV",
					"region"       => "Ústecký kraj",
				],
				[
					"district"     => "Chrudim",
					"abbreviation" => "CR",
					"region"       => "Pardubický kraj",
				],
				[
					"district"     => "Jablonec nad Nisou",
					"abbreviation" => "JN",
					"region"       => "Liberecký kraj",
				],
				[
					"district"     => "Jeseník",
					"abbreviation" => "JE",
					"region"       => "Olomoucký kraj",
				],
				[
					"district"     => "Jičín",
					"abbreviation" => "JC",
					"region"       => "Královéhradecký kraj",
				],
				[
					"district"     => "Jihlava",
					"abbreviation" => "JI",
					"region"       => "Kraj Vysočina",
				],
				[
					"district"     => "Jindřichův Hradec",
					"abbreviation" => "JH",
					"region"       => "Jihočeský kraj",
				],
				[
					"district"     => "Karlovy Vary",
					"abbreviation" => "KV",
					"region"       => "Karlovarský kraj",
				],
				[
					"district"     => "Karviná",
					"abbreviation" => "KI",
					"region"       => "Moravskoslezský kraj",
				],
				[
					"district"     => "Kladno",
					"abbreviation" => "KD",
					"region"       => "Středočeský kraj",
				],
				[
					"district"     => "Klatovy",
					"abbreviation" => "KT",
					"region"       => "Plzeňský kraj",
				],
				[
					"district"     => "Kolín",
					"abbreviation" => "KO",
					"region"       => "Středočeský kraj",
				],
				[
					"district"     => "Kroměříž",
					"abbreviation" => "KM",
					"region"       => "Zlínský kraj",
				],
				[
					"district"     => "Kutná Hora",
					"abbreviation" => "KH",
					"region"       => "Středočeský kraj",
				],
				[
					"district"     => "Liberec",
					"abbreviation" => "LI",
					"region"       => "Liberecký kraj",
				],
				[
					"district"     => "Litoměřice",
					"abbreviation" => "LT",
					"region"       => "Ústecký kraj",
				],
				[
					"district"     => "Louny",
					"abbreviation" => "LN",
					"region"       => "Ústecký kraj",
				],
				[
					"district"     => "Mělník",
					"abbreviation" => "ME",
					"region"       => "Středočeský kraj",
				],
				[
					"district"     => "Mladá Boleslav",
					"abbreviation" => "MB",
					"region"       => "Středočeský kraj",
				],
				[
					"district"     => "Most",
					"abbreviation" => "MO",
					"region"       => "Ústecký kraj",
				],
				[
					"district"     => "Náchod",
					"abbreviation" => "NA",
					"region"       => "Královéhradecký kraj",
				],
				[
					"district"     => "Nový Jičín",
					"abbreviation" => "NJ",
					"region"       => "Moravskoslezský kraj",
				],
				[
					"district"     => "Nymburk",
					"abbreviation" => "NB",
					"region"       => "Středočeský kraj",
				],
				[
					"district"     => "Olomouc",
					"abbreviation" => "OC",
					"region"       => "Olomoucký kraj",
				],
				[
					"district"     => "Opava",
					"abbreviation" => "OP",
					"region"       => "Moravskoslezský kraj",
				],
				[
					"district"     => "Ostrava-město",
					"abbreviation" => "OV",
					"region"       => "Moravskoslezský kraj",
				],
				[
					"district"     => "Pardubice",
					"abbreviation" => "PU",
					"region"       => "Pardubický kraj",
				],
				[
					"district"     => "Pelhřimov",
					"abbreviation" => "PE",
					"region"       => "Kraj Vysočina",
				],
				[
					"district"     => "Písek",
					"abbreviation" => "PI",
					"region"       => "Jihočeský kraj",
				],
				[
					"district"     => "Plzeň-jih",
					"abbreviation" => "PJ",
					"region"       => "Plzeňský kraj",
				],
				[
					"district"     => "Plzeň-město",
					"abbreviation" => "PM",
					"region"       => "Plzeňský kraj",
				],
				[
					"district"     => "Plzeň-sever",
					"abbreviation" => "PS",
					"region"       => "Plzeňský kraj",
				],
				[
					"district"     => "Hlavní město Praha",
					"abbreviation" => "PH",
					"region"       => "Praha",
				],
				[
					"district"     => "Praha-východ",
					"abbreviation" => "PY",
					"region"       => "Středočeský kraj",
				],
				[
					"district"     => "Praha-západ",
					"abbreviation" => "PZ",
					"region"       => "Středočeský kraj",
				],
				[
					"district"     => "Prachatice",
					"abbreviation" => "PT",
					"region"       => "Jihočeský kraj",
				],
				[
					"district"     => "Prostějov",
					"abbreviation" => "PV",
					"region"       => "Olomoucký kraj",
				],
				[
					"district"     => "Přerov",
					"abbreviation" => "PR",
					"region"       => "Olomoucký kraj",
				],
				[
					"district"     => "Příbram",
					"abbreviation" => "PB",
					"region"       => "Středočeský kraj",
				],
				[
					"district"     => "Rakovník",
					"abbreviation" => "RA",
					"region"       => "Středočeský kraj",
				],
				[
					"district"     => "Rokycany",
					"abbreviation" => "RO",
					"region"       => "Plzeňský kraj",
				],
				[
					"district"     => "Rychnov nad Kněžnou",
					"abbreviation" => "RK",
					"region"       => "Královéhradecký kraj",
				],
				[
					"district"     => "Semily",
					"abbreviation" => "SM",
					"region"       => "Liberecký kraj",
				],
				[
					"district"     => "Sokolov",
					"abbreviation" => "SO",
					"region"       => "Karlovarský kraj",
				],
				[
					"district"     => "Strakonice",
					"abbreviation" => "ST",
					"region"       => "Jihočeský kraj",
				],
				[
					"district"     => "Svitavy",
					"abbreviation" => "SY",
					"region"       => "Pardubický kraj",
				],
				[
					"district"     => "Šumperk",
					"abbreviation" => "SU",
					"region"       => "Olomoucký kraj",
				],
				[
					"district"     => "Tábor",
					"abbreviation" => "TA",
					"region"       => "Jihočeský kraj",
				],
				[
					"district"     => "Tachov",
					"abbreviation" => "TC",
					"region"       => "Plzeňský kraj",
				],
				[
					"district"     => "Teplice",
					"abbreviation" => "TP",
					"region"       => "Ústecký kraj",
				],
				[
					"district"     => "Trutnov",
					"abbreviation" => "TU",
					"region"       => "Královéhradecký kraj",
				],
				[
					"district"     => "Třebíč",
					"abbreviation" => "TR",
					"region"       => "Kraj Vysočina",
				],
				[
					"district"     => "Uherské Hradiště",
					"abbreviation" => "UH",
					"region"       => "Zlínský kraj",
				],
				[
					"district"     => "Ústí nad Labem",
					"abbreviation" => "UL",
					"region"       => "Ústecký kraj",
				],
				[
					"district"     => "Ústí nad Orlicí",
					"abbreviation" => "UO",
					"region"       => "Pardubický kraj",
				],
				[
					"district"     => "Vsetín",
					"abbreviation" => "VS",
					"region"       => "Zlínský kraj",
				],
				[
					"district"     => "Vyškov",
					"abbreviation" => "VY",
					"region"       => "Jihomoravský kraj",
				],
				[
					"district"     => "Zlín",
					"abbreviation" => "ZL",
					"region"       => "Zlínský kraj",
				],
				[
					"district"     => "Znojmo",
					"abbreviation" => "ZN",
					"region"       => "Jihomoravský kraj",
				],
				[
					"district"     => "Žďár nad Sázavou",
					"abbreviation" => "ZR",
					"region"       => "Kraj Vysočina",
				],
			];
		$districts = [];
		foreach ($districtsArray as $districtItem) {
			$districtRecord = new \Defr\Ares\DistrictRecord();
			foreach ($districtItem as $key => $value) {
				$setter = "set" . strtoupper($key[0]) . substr($key, 1);
				$districtRecord->$setter($value);
			}
			$districts[] = $districtRecord;
		}
		return $districts;
	}

	/**
	 * @return array
	 */
	public static function getRegions()
	{
		return
			[
				[
					"region" => "Hlavní město Praha",
				],
				[
					"region" => "Středočeský kraj",
				],
				[
					"region" => "Jihočeský kraj",
				],
				[
					"region" => "Plzeňský kraj",
				],
				[
					"region" => "Karlovarský kraj",
				],
				[
					"region" => "Ústecký kraj",
				],
				[
					"region" => "Liberecký kraj",
				],
				[
					"region" => "Královéhradecký kraj",
				],
				[
					"region" => "Pardubický kraj",
				],
				[
					"region" => "Kraj Vysočina",
				],
				[
					"region" => "Jihomoravský kraj",
				],
				[
					"region" => "Olomoucký kraj",
				],
				[
					"region" => "Zlínský kraj",
				],
				[
					"region" => "Moravskoslezský kraj",
				],
			];

	}


}
