<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");?> 
<div class="row"> 
  <div class="col-md-4"> 
    <div><span class="grey_light">В салонах компании представлены не только технические новинки рынка мобильной электроники, но и широкий выбор дополнительных услуг. Сегодня можно приобрести и оплатить авиабилеты, туристические путевки, билеты на развлекательные и спортивные мероприятия.</span></div>
   
    <div> 
      <br />
     </div>
   
    <div> 
      <br />
     </div>
   
    <table cellpadding="0" cellspasing="0"> 
      <tbody> 
        <tr> <td align="left" valign="top"><i class="icon colored icon-map-marker"></i></td><td align="left" valign="top"><span class="dark_light_table">Адрес:</span> 
            <br />
           
            <p><span class="grey_dark">Москва, ул. Пушкина 21,<br />3 этаж, офис 41</span></p>
           </td> </tr>
       
        <tr> <td align="left" valign="top"><i class="icon colored icon-phone"></i></td><td align="left" valign="top"> <span class="dark_light_table">Телефон:</span> 
            <br />
           	 
            <p><span class="grey_dark">+7 (999) 765-34-21</span></p>
           </td> </tr>
       
        <tr> <td align="left" valign="top"><i class="icon colored icon-envelope"></i></td><td align="left" valign="top"> <span class="dark_light_table">E-mail:</span> 
            <br />
           
            <p><span class="grey_dark">info@14147.b2120.dhpage.net</span></p>
           </td> </tr>
       
        <tr> <td align="left" valign="top"><i class="icon colored icon-clock-o"></i></td><td align="left" valign="top"> <span class="dark_light_table">Режим работы:</span> 
            <br />
           	 
            <p><span class="grey_dark">Пн. – Пт.: с 9:00 до 18:00<br />Сб. - Вс.: выходные</span></p>
           </td> </tr>
       </tbody>
     </table>
   </div>
 
  <div class="col-md-8"><?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.75365144278215;s:10:\"yandex_lon\";d:37.6204816153973;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.620438700053064;s:3:\"LAT\";d:55.753445723094714;s:4:\"TEXT\";s:10:\"Наша фирма\";}}}",
		"MAP_WIDTH" => "100%",
		"MAP_HEIGHT" => "500",
		"CONTROLS" => array(0=>"ZOOM",1=>"TYPECONTROL",2=>"SCALELINE",),
		"OPTIONS" => array(0=>"ENABLE_DBLCLICK_ZOOM",1=>"ENABLE_DRAGGING",),
		"MAP_ID" => ""
	)
);?></div>
 </div>
 <?$APPLICATION->IncludeComponent(
	"aspro:form",
	"contacts",
	Array(
		"IBLOCK_TYPE" => "aspro_allcorp_form",
		"IBLOCK_ID" => "21",
		"USE_CAPTCHA" => "N",
		"IS_PLACEHOLDER" => "N",
		"SUCCESS_MESSAGE" => "<p>Спасибо! Ваше сообщение отправлено!</p>",
		"SEND_BUTTON_NAME" => "Отправить",
		"SEND_BUTTON_CLASS" => "btn btn-primary",
		"DISPLAY_CLOSE_BUTTON" => "Y",
		"CLOSE_BUTTON_NAME" => "Обновить страницу",
		"CLOSE_BUTTON_CLASS" => "btn btn-primary refresh-page",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "100000",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>