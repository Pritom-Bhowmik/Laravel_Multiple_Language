*************************************** View ********************************************

<ul class="dropdown-menu" aria-labelledby="localization">
      <li><a class="dropdown-item" href="locale/en">@lang('message.English')</a></li>
      <li><a class="dropdown-item" href="locale/fr">@lang('message.French')</a></li>
	<li><a class="dropdown-item" href="locale/de">@lang('message.Germany')</a></li>
</ul>


*************************************** Controller ********************************************
public function setLang($locale){
	App::setLocale($locale);
      Session::put('locale', $locale);
      return redirect()->back();
}

*************************************** Middleware ********************************************
if(Session::get("locale") !=null){
    App::setLocale(Session::get("locale"));
}else{
	Session::put("locale",'en');
	App::setLocale(Session::get("locale"));
}
return $next($request);


*************************************** Kernel ********************************************
\App\Http\Middleware\LocalzationMiddleware::class,

*************************************** Web ********************************************
Route::get('/locale/{lange}', [LocalizationController::class, 'setLang']);


*************************************** Lang Resource ********************************************
Resource/lang/en/message.php
<?php 
    return[
        'Localization' => 'Lokalisierung',
        'Home' => 'Heim',
        'Service' => 'Service',
        'Pricing' => 'Preisgestaltung',
        'Contact' => 'Kontakt',
        'Languages' => 'Sprachen',
        'English' => 'Englisch',
        'French' => 'Französisch',
        'Germany' => 'Deutschland',
    ];

?>