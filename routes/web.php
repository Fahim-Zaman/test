<?php



Route::get('/', function ()
 {
    return view('index');
})->name('index');

Route::get('/abc', function () {
    return view('test');
});

//Route::get('/login', 'LoginController@index');
Route::get('/login', ['as'=>'login.index','uses'=>'LoginController@index']);
Route::post('/login', ['uses'=>'LoginController@verify']);
Route::get('/ninvestor/Registration', 'investorController@add')->name('investor.Registration');
Route::post('/ninvestor/Registration', 'investorController@create');
Route::get('/idea/Registration', 'ideaController@createre')->name('idea.Registration');
Route::post('/idea/Registration', 'ideaController@insert');

Route::get('/searchuser', 'liveSearchController@index')->name('searchuser.index');
Route::get('/search', 'liveSearchController@action')->name('search.action');

Route::get('/searchsupportadmin', 'liveSearchController@indexsuperadmin')->name('searchuser.superadmin');
Route::get('/searchsupportadminpost', 'liveSearchController@actionsuperadmin')->name('search.actionsuperad');

Route::get('/invest', 'liveSearchController@indexinvest')->name('invest.search');
Route::get('/investpost', 'liveSearchController@actioninvest')->name('invest.searchpost');

Route::get('/rep', 'liveSearchController@indexrep')->name('rep.search');
Route::get('/reppost', 'liveSearchController@actionrep')->name('rep.searchpost');

Route::group(['middleware'=>['sess']], function(){

											/*investor*/

	Route::get('/ninvestor', 'investorController@index')->name('investor.index');
	Route::get('/ninvestor/profile', 'investorController@show')->name('investor.profile');
	Route::get('/ninvestor/edit/{sid}', 'investorController@edit')->name('investor.edit');
	Route::post('/ninvestor/edit/{sid}', 'investorController@update');
	Route::get('/ninvestor/add_credit', 'investorController@credit')->name('investor.add_credit');
	Route::post('/ninvestor/add_credit', 'investorController@addcredit');
	Route::get('/ninvestor/withdraw', 'investorController@withdraw')->name('investor.withdraw');
	Route::post('/ninvestor/withdraw', 'investorController@withdrawverify');
	Route::get('/ninvestor/donate/{sid}', 'investorController@donate')->name('investor.donate');
	Route::post('/ninvestor/donate/{sid}', 'investorController@donateverify');
	Route::get('/ninvestor/history', 'investorController@history')->name('investor.history');
	Route::post('/ninvestor', 'investorController@comment');
	Route::get('/ninvestor/report', 'investorController@report')->name('investor.report');
	Route::post('/ninvestor/report', 'investorController@createreport');

											/*Super admin*/


	Route::get('/admin', 'SuperAdminController@index')->name('superadmin.index');
	Route::get('/admin/profile', 'SuperAdminController@profile')->name('superadmin.profile');
	Route::get('/admin/profile/edit/{sid}', 'SuperAdminController@edit')->name('superadmin.edit');
	Route::post('/admin/profile/edit/{sid}', 'SuperAdminController@update');
	Route::get('/admin/create', 'SuperAdminController@add')->name('superadmin.create');
	Route::post('/admin/create', 'SuperAdminController@create');
	Route::get('/admin/event', 'SuperAdminController@event')->name('superadmin.event');
	Route::post('/admin/event', 'SuperAdminController@eventcreate');
	Route::get('/admin/report', 'SuperAdminController@report')->name('superadmin.report');
	Route::get('/admin/report/{sid}', 'SuperAdminController@check')->name('superadmin.check');
	Route::get('/admin/active', 'SuperAdminController@active')->name('superadmin.active');
	Route::get('/admin/fund_report', 'SuperAdminController@fund')->name('superadmin.Fund');
	Route::get('/admin/fund_report/td', 'SuperAdminController@tafund')->name('superadmin.tfund');
	Route::get('/admin/fund_report/tm', 'SuperAdminController@tmfund')->name('superadmin.tmfund');
	Route::get('/admin/sadmin', 'SuperAdminController@showsadmin')->name('superadmin.supportadminshow');
	Route::get('/admin/sadmin/edit/{sid}', 'SuperAdminController@sedit')->name('superadamin.editadmin');
	Route::post('/admin/sadmin/edit/{sid}', 'SuperAdminController@saedit');
	Route::get('/admin/sadmin/delete/{sid}', 'SuperAdminController@delete')->name('superadamin.deleteadmin');
	Route::post('/admin/sadmin/delete/{sid}', 'SuperAdminController@deleteadmin');

												/*idea*/

	Route::get('/idea', 'ideaController@index')->name('idea.index');
	Route::post('/idea', 'ideaController@postidea');
	Route::get('/idea/comment{sid}', 'ideaController@showcomment')->name('idea.comment');
	Route::get('/idea/profile', 'ideaController@show')->name('idea.profile');
	Route::get('/idea/edit/{sid}', 'ideaController@edit')->name('idea.edit');
	Route::post('/idea/edit/{sid}', 'ideaController@update');
	Route::get('/idea/portfolio', 'ideaController@portfolio')->name('idea.portfolio');
	Route::post('/idea/portfolio', 'ideaController@create');
	Route::get('/idea/replist', 'ideaController@showp')->name('idea.show');
	Route::get('/idea/editrep/{sid}', 'ideaController@editrep')->name('idea.editrep');
	Route::post('/idea/editrep/{sid}', 'ideaController@updaterep');
	Route::get('/idea/withdraw', 'ideaController@withdraw')->name('idea.withdraw');
	Route::post('/idea/withdraw', 'ideaController@verify');
	Route::get('/idea/showinvestor', 'ideaController@showinvestor')->name('idea.showinvestor');

/*Support Admin*/
	

	Route::get('/supportadmin', 'SupportAdmin@index')->name('supportadmin.index');
	Route::get('/supportadmin/profile', 'SupportAdmin@show')->name('supportadmin.profile');
	Route::get('/supportadmin/edit/{sid}', 'SupportAdmin@edit')->name('supportadmin.edit');
	Route::post('/supportadmin/edit/{sid}', 'SupportAdmin@update');
	Route::get('/supportadmin/investorlist', 'SupportAdmin@showinvestor')->name('supportadmin.investorlist');
	Route::get('/supportadmin/editinvestor/{sid}', 'SupportAdmin@editin')->name('supportdamin.editinvestor');
	Route::post('/supportadmin/editinvestor/{sid}', 'SupportAdmin@updatein');
	Route::get('/supportadmin/deleteinvestor/{sid}', 'SupportAdmin@delete')->name('supportdamin.deleteinvestor');
		Route::post('/supportadmin/deleteinvestor/{sid}', 'SupportAdmin@destroy');	
	Route::get('/supportadmin/replist', 'SupportAdmin@showrep')->name('supportadmin.replist');
	Route::get('/supportadmin/withdraw', 'SupportAdmin@withdraw')->name('supportadmin.withdraw');
	Route::post('/supportadmin/withdraw', 'SupportAdmin@withdrawverify');
	Route::get('/supportadmin/donate/{sid}', 'SupportAdmin@donate')->name('supportadmin.donate');
	Route::post('/supportadmin/donate/{sid}', 'SupportAdmin@donateverify');
	Route::get('/supportadmin/history', 'SupportAdmin@history')->name('supportadmin.history');
	Route::get('/supportadmin/ideadelete/{sid}', 'SupportAdmin@ideadelete')->name('supportadmin.ideadelete');
	Route::get('/supportadmin/approveverify/{sid}', 'SupportAdmin@approveverify')->name('supportadmin.approveverify');
	Route::get('/supportadmin/activeinvestor/{sid}', 'SupportAdmin@activeinv')->name('supportdamin.activeinvestor');
		Route::get('/supportadmin/deactiveinvestor/{sid}', 'SupportAdmin@deactiveinv')->name('supportdamin.deactiveinvestor');
	Route::get('/supportadmin/complain', 'SupportAdmin@complain')->name('supportadmin.complain');
	Route::get('/supportadmin/checkcomplain/{sid}', 'SupportAdmin@checkcomplain')->name('supportadmin.checkcomplain');
	Route::get('/supportadmin/add_credit', 'SupportAdmin@credit')->name('supportadmin.add_credit');
	Route::post('/supportadmin/add_credit', 'SupportAdmin@addcredit');
	Route::get('/supportadmin/create', 'SupportAdmin@add')->name('supportadmin.Registration');
	Route::post('/supportadmin/create', 'SupportAdmin@create');



	Route::get('/home', 'HomeController@index')->name('home.index');
	Route::get('/home/profile', 'HomeController@profile')->name('home.profile');
	Route::post('/home/profile', 'HomeController@upload');

	Route::get('/home/stdList', 'HomeController@show')->name('home.stdlist');
	Route::get('/home/edit/{sid}', 'HomeController@edit')->name('home.edit');
	Route::post('/home/edit/{sid}', 'HomeController@update');
	Route::get('/home/details/{sid}', 'HomeController@details')->name('home.details');

	Route::group(['middleware'=>['type']], function(){
		Route::get('/home/add', 'HomeController@add')->name('home.add');
		Route::post('/home/add', 'HomeController@create');
		Route::get('/home/delete/{sid}', 'HomeController@delete')->name('home.delete');
		Route::post('/home/delete/{sid}', 'HomeController@destroy');	
	});
});



Route::get('/logout', 'logoutController@index');

//Route::resource('accounts', 'AccountController');




