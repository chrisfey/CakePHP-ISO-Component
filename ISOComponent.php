<?php
/**
 * Utility for handling ISO Standards.
 *
 * PHP version 5
 *
 * @category App.Controller
 * @package  App.Controller
 * @author   Chris <chris.fey@dhalco.com>
 * @license  none none
 * @link     easywebsiteinabox.net
 */
App::uses('Component', 'Controller');
/**
 * Utility for handling ISO Standards.
 *
 * @category App.Controller
 * @package  App.Controller
 * @author   Chris <chris.fey@dhalco.com>
 * @license  none none
 * @link     easywebsiteinabox.net
 */
class ISOComponent extends Component
{
	/**
	 * Gets an array of telephone country codes suitable for use in cakephps form helpers for
	 * select boxes.
	 *
	 * @return String array containing Telephone Country codes.
	 */
	public function getTelephoneCountryCodes()
	{
		/*Modified from http://forrst.com/posts/Country_Calling_Codes_Select_Input_and_PHP_Array-u3I*/
		$countryCallingCodes = array
		(
				93 => "Afghanistan (+93)",
355 => "Albania (+355)",
213 => "Algeria (+213)",
1 => "U.S. Virgin Islands (+1)",
376 => "Andorra (+376)",
244 => "Angola (+244)",
54 => "Argentina (+54)",
374 => "Armenia (+374)",
297 => "Aruba (+297)",
247 => "Ascension (+247)",
61 => "Australia (+61)",
43 => "Austria (+43)",
994 => "Azerbaijan (+994)",
973 => "Bahrain (+973)",
880 => "Bangladesh (+880)",
375 => "Belarus (+375)",
32 => "Belgium (+32)",
501 => "Belize (+501)",
229 => "Benin (+229)",
975 => "Bhutan (+975)",
591 => "Bolivia (+591)",
387 => "Bosnia and Herzegovina (+387)",
267 => "Botswana (+267)",
55 => "Brazil (+55)",
673 => "Brunei (+673)",
359 => "Bulgaria (+359)",
226 => "Burkina Faso (+226)",
257 => "Burundi (+257)",
855 => "Cambodia (+855)",
237 => "Cameroon (+237)",
238 => "Cape Verde (+238)",
236 => "Central African Republic (+236)",
235 => "Chad (+235)",
56 => "Chile (+56)",
86 => "China (+86)",
57 => "Colombia (+57)",
269 => "Comoros (+269)",
242 => "Congo (+242)",
682 => "Cook Islands (+682)",
506 => "Costa Rica (+506)",
385 => "Croatia (+385)",
53 => "Cuba (+53)",
357 => "Cyprus (+357)",
420 => "Czech Republic (+420)",
243 => "Democratic Republic of Congo (+243)",
45 => "Denmark (+45)",
246 => "Diego Garcia (+246)",
253 => "Djibouti (+253)",
670 => "East Timor (+670)",
593 => "Ecuador (+593)",
20 => "Egypt (+20)",
503 => "El Salvador (+503)",
240 => "Equatorial Guinea (+240)",
291 => "Eritrea (+291)",
372 => "Estonia (+372)",
251 => "Ethiopia (+251)",
500 => "Falkland (Malvinas) Islands (+500)",
298 => "Faroe Islands (+298)",
679 => "Fiji (+679)",
358 => "Finland (+358)",
33 => "France (+33)",
594 => "French Guiana (+594)",
689 => "French Polynesia (+689)",
241 => "Gabon (+241)",
220 => "Gambia (+220)",
995 => "Georgia (+995)",
49 => "Germany (+49)",
233 => "Ghana (+233)",
350 => "Gibraltar (+350)",
30 => "Greece (+30)",
299 => "Greenland (+299)",
590 => "Guadeloupe (+590)",
502 => "Guatemala (+502)",
224 => "Guinea (+224)",
245 => "Guinea-Bissau (+245)",
592 => "Guyana (+592)",
509 => "Haiti (+509)",
504 => "Honduras (+504)",
852 => "Hong Kong (+852)",
36 => "Hungary (+36)",
354 => "Iceland (+354)",
91 => "India (+91)",
62 => "Indonesia (+62)",
870 => "Inmarsat Satellite (+870)",
98 => "Iran (+98)",
964 => "Iraq (+964)",
353 => "Ireland (+353)",
972 => "Israel (+972)",
39 => "Italy (+39)",
225 => "Ivory Coast (+225)",
81 => "Japan (+81)",
962 => "Jordan (+962)",
7 => "Russian Federation (+7)",
254 => "Kenya (+254)",
686 => "Kiribati (+686)",
965 => "Kuwait (+965)",
996 => "Kyrgyzstan (+996)",
856 => "Laos (+856)",
371 => "Latvia (+371)",
961 => "Lebanon (+961)",
266 => "Lesotho (+266)",
231 => "Liberia (+231)",
218 => "Libya (+218)",
423 => "Liechtenstein (+423)",
370 => "Lithuania (+370)",
352 => "Luxembourg (+352)",
853 => "Macau (+853)",
389 => "Macedonia (+389)",
261 => "Madagascar (+261)",
265 => "Malawi (+265)",
60 => "Malaysia (+60)",
960 => "Maldives (+960)",
223 => "Mali (+223)",
356 => "Malta (+356)",
692 => "Marshall Islands (+692)",
596 => "Martinique (+596)",
222 => "Mauritania (+222)",
230 => "Mauritius (+230)",
262 => "Reunion (+262)",
52 => "Mexico (+52)",
691 => "Micronesia (+691)",
373 => "Moldova (+373)",
377 => "Monaco (+377)",
976 => "Mongolia (+976)",
382 => "Montenegro (+382)",
212 => "Morocco (+212)",
258 => "Mozambique (+258)",
95 => "Myanmar (+95)",
264 => "Namibia (+264)",
674 => "Nauru (+674)",
977 => "Nepal (+977)",
31 => "Netherlands (+31)",
599 => "Netherlands Antilles (+599)",
687 => "New Caledonia (+687)",
64 => "New Zealand (+64)",
505 => "Nicaragua (+505)",
227 => "Niger (+227)",
234 => "Nigeria (+234)",
683 => "Niue Island (+683)",
850 => "North Korea (+850)",
47 => "Norway (+47)",
968 => "Oman (+968)",
92 => "Pakistan (+92)",
680 => "Palau (+680)",
507 => "Panama (+507)",
675 => "Papua New Guinea (+675)",
595 => "Paraguay (+595)",
51 => "Peru (+51)",
63 => "Philippines (+63)",
48 => "Poland (+48)",
351 => "Portugal (+351)",
974 => "Qatar (+974)",
40 => "Romania (+40)",
250 => "Rwanda (+250)",
290 => "Saint Helena (+290)",
508 => "Saint Pierre and Miquelon (+508)",
685 => "Samoa (+685)",
378 => "San Marino (+378)",
239 => "Sao Tome and Principe (+239)",
966 => "Saudi Arabia (+966)",
221 => "Senegal (+221)",
381 => "Serbia (+381)",
248 => "Seychelles (+248)",
232 => "Sierra Leone (+232)",
65 => "Singapore (+65)",
421 => "Slovakia (+421)",
386 => "Slovenia (+386)",
677 => "Solomon Islands (+677)",
252 => "Somalia (+252)",
27 => "South Africa (+27)",
82 => "South Korea (+82)",
34 => "Spain (+34)",
94 => "Sri Lanka (+94)",
249 => "Sudan (+249)",
597 => "Suriname (+597)",
268 => "Swaziland (+268)",
46 => "Sweden (+46)",
41 => "Switzerland (+41)",
963 => "Syria (+963)",
886 => "Taiwan (+886)",
992 => "Tajikistan (+992)",
255 => "Tanzania (+255)",
66 => "Thailand (+66)",
228 => "Togo (+228)",
690 => "Tokelau (+690)",
216 => "Tunisia (+216)",
90 => "Turkey (+90)",
993 => "Turkmenistan (+993)",
688 => "Tuvalu (+688)",
256 => "Uganda (+256)",
380 => "Ukraine (+380)",
971 => "United Arab Emirates (+971)",
44 => "United Kingdom (+44)",
598 => "Uruguay (+598)",
998 => "Uzbekistan (+998)",
678 => "Vanuatu (+678)",
379 => "Vatican City (+379)",
58 => "Venezuela (+58)",
84 => "Vietnam (+84)",
681 => "Wallis and Futuna (+681)",
967 => "Yemen (+967)",
260 => "Zambia (+260)",
263 => "Zimbabwe (+263)"
		);
		
		return $countryCallingCodes;
	}
    /**
     * Gets an array of country codes suitable for use in cakephps form helpers for
     * select boxes.
     * 
     * @return String array containing ISO 3166-1 Country codes.
     */
    public function getCountryCodes_ISO_3316_1_()
    {
        return $countries = array ("AF" => "Afghanistan","AX" => "Åland Islands","AL" => "Albania","DZ" => "Algeria","AS" => "American Samoa","AD" => "Andorra","AO" => "Angola","AI" => "Anguilla","AQ" => "Antarctica","AG" => "Antigua And Barbuda","AR" => "Argentina","AM" => "Armenia","AW" => "Aruba","AU" => "Australia","AT" => "Austria","AZ" => "Azerbaijan","BS" => "Bahamas","BH" => "Bahrain","BD" => "Bangladesh","BB" => "Barbados","BY" => "Belarus","BE" => "Belgium","BZ" => "Belize","BJ" => "Benin","BM" => "Bermuda","BT" => "Bhutan","BO" => "Bolivia, Plurinational State Of","BQ" => "Bonaire, Sint Eustatius And Saba","BA" => "Bosnia And Herzegovina","BW" => "Botswana","BV" => "Bouvet Island","BR" => "Brazil","IO" => "British Indian Ocean Territory","BN" => "Brunei Darussalam","BG" => "Bulgaria","BF" => "Burkina Faso","BI" => "Burundi","KH" => "Cambodia","CM" => "Cameroon","CA" => "Canada","CV" => "Cape Verde","KY" => "Cayman Islands","CF" => "Central African Republic","TD" => "Chad","CL" => "Chile","CN" => "China","CX" => "Christmas Island","CC" => "Cocos (KEELING) Islands","CO" => "Colombia","KM" => "Comoros","CG" => "Congo","CD" => "Congo, The Democratic Republic Of The","CK" => "Cook Islands","CR" => "Costa Rica","CI" => "Côte D'ivoire","HR" => "Croatia","CU" => "Cuba","CW" => "Curaçao","CY" => "Cyprus","CZ" => "Czech Republic","DK" => "Denmark","DJ" => "Djibouti","DM" => "Dominica","DO" => "Dominican Republic","EC" => "Ecuador","EG" => "Egypt","SV" => "El Salvador","GQ" => "Equatorial Guinea","ER" => "Eritrea","EE" => "Estonia","ET" => "Ethiopia","FK" => "Falkland Islands","FO" => "Faroe Islands","FJ" => "Fiji","FI" => "Finland","FR" => "France","GF" => "French Guiana","PF" => "French Polynesia","TF" => "French Southern Territories","GA" => "Gabon","GM" => "Gambia","GE" => "Georgia","DE" => "Germany","GH" => "Ghana","GI" => "Gibraltar","GR" => "Greece","GL" => "Greenland","GD" => "Grenada","GP" => "Guadeloupe","GU" => "Guam","GT" => "Guatemala","GG" => "Guernsey","GN" => "Guinea","GW" => "Guinea-Bissau","GY" => "Guyana","HT" => "Haiti","HM" => "Heard Island And Mcdonald Islands","VA" => "Holy See (VATICAN City State)","HN" => "Honduras","HK" => "Hong Kong","HU" => "Hungary","IS" => "Iceland","IN" => "India","ID" => "Indonesia","IR" => "Iran, Islamic Republic Of","IQ" => "Iraq","IE" => "Ireland","IM" => "Isle Of Man","IL" => "Israel","IT" => "Italy","JM" => "Jamaica","JP" => "Japan","JE" => "Jersey","JO" => "Jordan","KZ" => "Kazakhstan","KE" => "Kenya","KI" => "Kiribati","KP" => "Korea, Democratic People's Republic Of","KR" => "Korea, Republic Of","KW" => "Kuwait","KG" => "Kyrgyzstan","LA" => "Lao People's Democratic Republic","LV" => "Latvia","LB" => "Lebanon","LS" => "Lesotho","LR" => "Liberia","LY" => "Libya","LI" => "Liechtenstein","LT" => "Lithuania","LU" => "Luxembourg","MO" => "Macao","MK" => "Macedonia, The Former Yugoslav Republic Of","MG" => "Madagascar","MW" => "Malawi","MY" => "Malaysia","MV" => "Maldives","ML" => "Mali","MT" => "Malta","MH" => "Marshall Islands","MQ" => "Martinique","MR" => "Mauritania","MU" => "Mauritius","YT" => "Mayotte","MX" => "Mexico","FM" => "Micronesia, Federated States Of","MD" => "Moldova, Republic Of","MC" => "Monaco","MN" => "Mongolia","ME" => "Montenegro","MS" => "Montserrat","MA" => "Morocco","MZ" => "Mozambique","MM" => "Myanmar","NA" => "Namibia","NR" => "Nauru","NP" => "Nepal","NL" => "Netherlands","NC" => "New Caledonia","NZ" => "New Zealand","NI" => "Nicaragua","NE" => "Niger","NG" => "Nigeria","NU" => "Niue","NF" => "Norfolk Island","MP" => "Northern Mariana Islands","NO" => "Norway","OM" => "Oman","PK" => "Pakistan","PW" => "Palau","PS" => "Palestinian Territory, Occupied","PA" => "Panama","PG" => "Papua New Guinea","PY" => "Paraguay","PE" => "Peru","PH" => "Philippines","PN" => "Pitcairn","PL" => "Poland","PT" => "Portugal","PR" => "Puerto Rico","QA" => "Qatar","RE" => "Réunion","RO" => "Romania","RU" => "Russian Federation","RW" => "Rwanda","BL" => "Saint Barthélemy","SH" => "Saint Helena, Ascension And Tristan Da Cunha","KN" => "Saint Kitts And Nevis","LC" => "Saint Lucia","MF" => "Saint Martin (FRENCH Part)","PM" => "Saint Pierre And Miquelon","VC" => "Saint Vincent And The Grenadines","WS" => "Samoa","SM" => "San Marino","ST" => "Sao Tome And Principe","SA" => "Saudi Arabia","SN" => "Senegal","RS" => "Serbia","SC" => "Seychelles","SL" => "Sierra Leone","SG" => "Singapore","SX" => "Sint Maarten (DUTCH Part)","SK" => "Slovakia","SI" => "Slovenia","SB" => "Solomon Islands","SO" => "Somalia","ZA" => "South Africa","GS" => "South Georgia And The South Sandwich Islands","SS" => "South Sudan","ES" => "Spain","LK" => "Sri Lanka","SD" => "Sudan","SR" => "Suriname","SJ" => "Svalbard And Jan Mayen","SZ" => "Swaziland","SE" => "Sweden","CH" => "Switzerland","SY" => "Syrian Arab Republic","TW" => "Taiwan, Province Of China","TJ" => "Tajikistan","TZ" => "Tanzania, United Republic Of","TH" => "Thailand","TL" => "Timor-Leste","TG" => "Togo","TK" => "Tokelau","TO" => "Tonga","TT" => "Trinidad And Tobago","TN" => "Tunisia","TR" => "Turkey","TM" => "Turkmenistan","TC" => "Turks And Caicos Islands","TV" => "Tuvalu","UG" => "Uganda","UA" => "Ukraine","AE" => "United Arab Emirates","GB" => "United Kingdom","US" => "United States","UM" => "United States Minor Outlying Islands","UY" => "Uruguay","UZ" => "Uzbekistan","VU" => "Vanuatu","VE" => "Venezuela, Bolivarian Republic Of","VN" => "Viet Nam","VG" => "Virgin Islands, British","VI" => "Virgin Islands, U.S.","WF" => "Wallis And Futuna","EH" => "Western Sahara","YE" => "Yemen","ZM" => "Zambia","ZW" => "Zimbabwe" );
    }
    /**
	 *  Select the correct currency symbol from the currency code, or
	 * if we don't know it set the symbol to be the currency code.
		*/
    public function getCurrencySymbol_ISO_4217($ISO_4217_Code)
    {
        /*
         * ₠	8352	₠	20A0	 	EURO-CURRENCY SIGN (see 8364 for euro) ₡	8353	₡	20A1 COLON
         * SIGN ₢	8354	₢	20A2	 	CRUZEIRO SIGN ₣	8355	₣	20A3	 	FRENCH FRANC SIGN
         * (present in WGL4) ₤	8356	₤	20A4	 	LIRA SIGN (present in WGL4) [pound sign
         * is £ (&pound;)] ₥	8357	₥	20A5	 	MILL SIGN ₦	8358	₦	20A6	 	NAIRA SIGN
         * ₧	8359	₧	20A7	 	PESETA SIGN (present in WGL4) ₨	8360	₨	20A8	 	RUPEE SIGN
         * ₩	8361	₩	20A9	 	WON SIGN ₪	8362	₪	20AA	 	NEW SHEQEL SIGN ₫	8363	₫	20AB
         * DONG SIGN €	8364	€	20AC	&euro;	EURO SIGN (present in WGL4, ANSI and
         * MacRoman, and in Symbol font) ₭	8365	₭	20AD	 	KIP SIGN ₮	8366	₮	20AE
         * TUGRIK SIGN ₯	8367	₯	20AF	 	DRACHMA SIGN ₰	8368	₰	20B0	 	GERMAN PENNY
         * SYMBOL ₱	8369	₱	20B1	 	PESO SIGN ₲	8370	₲	20B2	 	GUARANI SIGN
         * ₳	8371	₳	20B3	 	AUSTRAL SIGN ₴	8372	₴	20B4	 	HRYVNIA SIGN ₵	8373	₵	20B5
         * CEDI SIGN ₶	8374	₶	20B6	 	LIVRE TOURNOIS SIGN ₷	8375	₷	20B7	 	SPESMILO
         * SIGN ₸	8376	₸	20B8	 	TENGE SIGN ₹	8377	₹	20B9	 	INDIAN RUPEE SIGN
         */
        switch (Configure::read('ShopConfig.currencyCodeISO4217')) {
        case "GBP" :
        case "EGP" : // Egyptian pound
        case "GIP" : // Gibralter pound
        case "FKP" : // Falkland pound
            return '£';
            break;
        case "INR" : // Indian Rupee
            return '<i class="icon-rupee"></i>';
            break;
        case "EUR" :
            return '<i class="icon-euro"></i>';
            break;
        default :
            return 'ERROR - no currency set';
            break;
        }
    }
    public function getCurrencyCodes_ISO_4217()
    {
        return array ('AFA' => array ('Afghan Afghani','971' ),'AWG' => array ('Aruban Florin','533' ),'AUD' => array ('Australian Dollars','036' ),'ARS' => array ('Argentine Pes','032' ),'AZN' => array ('Azerbaijanian Manat','944' ),'BSD' => array ('Bahamian Dollar','044' ),'BDT' => array ('Bangladeshi Taka','050' ),'BBD' => array ('Barbados Dollar','052' ),'BYR' => array ('Belarussian Rouble','974' ),'BOB' => array ('Bolivian Boliviano','068' ),'BRL' => array ('Brazilian Real','986' ),'GBP' => array ('British Pounds Sterling','826' ),'BGN' => array ('Bulgarian Lev','975' ),'KHR' => array ('Cambodia Riel','116' ),'CAD' => array ('Canadian Dollars','124' ),'KYD' => array ('Cayman Islands Dollar','136' ),'CLP' => array ('Chilean Peso','152' ),'CNY' => array ('Chinese Renminbi Yuan','156' ),'COP' => array ('Colombian Peso','170' ),'CRC' => array ('Costa Rican Colon','188' ),'HRK' => array ('Croatia Kuna','191' ),'CPY' => array ('Cypriot Pounds','196' ),'CZK' => array ('Czech Koruna','203' ),'DKK' => array ('Danish Krone','208' ),'DOP' => array ('Dominican Republic Peso','214' ),'XCD' => array ('East Caribbean Dollar','951' ),'EGP' => array ('Egyptian Pound','818' ),'ERN' => array ('Eritrean Nakfa','232' ),'EEK' => array ('Estonia Kroon','233' ),'EUR' => array ('Euro','978' ),'GEL' => array ('Georgian Lari','981' ),'GHC' => array ('Ghana Cedi','288' ),'GIP' => array ('Gibraltar Pound','292' ),'GTQ' => array ('Guatemala Quetzal','320' ),'HNL' => array ('Honduras Lempira','340' ),'HKD' => array ('Hong Kong Dollars','344' ),'HUF' => array ('Hungary Forint','348' ),'ISK' => array ('Icelandic Krona','352' ),'INR' => array ('Indian Rupee','356' ),'IDR' => array ('Indonesia Rupiah','360' ),'ILS' => array ('Israel Shekel','376' ),'JMD' => array ('Jamaican Dollar','388' ),'JPY' => array ('Japanese yen','392' ),'KZT' => array ('Kazakhstan Tenge','368' ),'KES' => array ('Kenyan Shilling','404' ),'KWD' => array ('Kuwaiti Dinar','414' ),'LVL' => array ('Latvia Lat','428' ),'LBP' => array ('Lebanese Pound','422' ),'LTL' => array ('Lithuania Litas','440' ),'MOP' => array ('Macau Pataca','446' ),'MKD' => array ('Macedonian Denar','807' ),'MGA' => array ('Malagascy Ariary','969' ),'MYR' => array ('Malaysian Ringgit','458' ),'MTL' => array ('Maltese Lira','470' ),'BAM' => array ('Marka','977' ),'MUR' => array ('Mauritius Rupee','480' ),'MXN' => array ('Mexican Pesos','484' ),'MZM' => array ('Mozambique Metical','508' ),'NPR' => array ('Nepalese Rupee','524' ),'ANG' => array ('Netherlands Antilles Guilder','532' ),'TWD' => array ('New Taiwanese Dollars','901' ),'NZD' => array ('New Zealand Dollars','554' ),'NIO' => array ('Nicaragua Cordoba','558' ),'NGN' => array ('Nigeria Naira','566' ),'KPW' => array ('North Korean Won','408' ),'NOK' => array ('Norwegian Krone','578' ),'OMR' => array ('Omani Riyal','512' ),'PKR' => array ('Pakistani Rupee','586' ),'PYG' => array ('Paraguay Guarani','600' ),'PEN' => array ('Peru New Sol','604' ),'PHP' => array ('Philippine Pesos','608' ),'QAR' => array ('Qatari Riyal','634' ),'RON' => array ('Romanian New Leu','946' ),'RUB' => array ('Russian Federation Ruble','643' ),'SAR' => array ('Saudi Riyal','682' ),'CSD' => array ('Serbian Dinar','891' ),'SCR' => array ('Seychelles Rupee','690' ),'SGD' => array ('Singapore Dollars','702' ),'SKK' => array ('Slovak Koruna','703' ),'SIT' => array ('Slovenia Tolar','705' ),'ZAR' => array ('South African Rand','710' ),'KRW' => array ('South Korean Won','410' ),'LKR' => array ('Sri Lankan Rupee','144' ),'SRD' => array ('Surinam Dollar','968' ),'SEK' => array ('Swedish Krona','752' ),'CHF' => array ('Swiss Francs','756' ),'TZS' => array ('Tanzanian Shilling','834' ),'THB' => array ('Thai Baht','764' ),'TTD' => array ('Trinidad and Tobago Dollar','780' ),'TRY' => array ('Turkish New Lira','949' ),'AED' => array ('UAE Dirham','784' ),'USD' => array ('US Dollars','840' ),'UGX' => array ('Ugandian Shilling','800' ),'UAH' => array ('Ukraine Hryvna','980' ),'UYU' => array ('Uruguayan Peso','858' ),'UZS' => array ('Uzbekistani Som','860' ),'VEB' => array ('Venezuela Bolivar','862' ),'VND' => array ('Vietnam Dong','704' ),'AMK' => array ('Zambian Kwacha','894' ),'ZWD' => array ('Zimbabwe Dollar','716' ) );
    }
}
